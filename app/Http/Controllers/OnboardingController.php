<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use App\Models\MetricValue;
use App\Models\QuranProgress;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnboardingController extends Controller
{
    /**
     * عرض صفحة اختيار الـ Profile
     */
    public function selectProfile()
    {
        $user = Auth::user();

        // إذا المستخدم عنده profile ولكن لم يكمل الـ onboarding
        if ($user->profile && !$user->onboarding_completed) {
            return redirect()->route('onboarding.setup');
        }

        // إذا أكمل كل شيء
        if ($user->profile && $user->onboarding_completed) {
            return redirect()->route('decision-os.dashboard');
        }

        return view('onboarding.profile-select');
    }

    /**
     * حفظ الـ Profile والانتقال للإعداد
     */
    public function storeProfile(Request $request)
    {
        $validated = $request->validate([
            'profile' => 'required|in:freelancer,employee,founder',
        ]);

        $user = Auth::user();
        $user->profile = $validated['profile'];
        $user->save();

        return redirect()->route('onboarding.setup');
    }

    /**
     * عرض صفحة إعداد الحساب (Setup Checklist)
     */
    public function showSetup()
    {
        $user = Auth::user();

        if (!$user->profile) {
            return redirect()->route('onboarding.select-profile');
        }

        if ($user->onboarding_completed) {
            return redirect()->route('decision-os.dashboard');
        }

        return view('onboarding.setup-checklist');
    }

    /**
     * حفظ إعدادات الحساب
     */
    public function storeSetup(Request $request)
    {
        $request->validate([
            'starting_balance' => 'required|numeric|min:0',
            'monthly_income' => 'nullable|numeric|min:0',
            'monthly_expenses' => 'nullable|numeric|min:0',
            'today_one_thing' => 'nullable|string|max:255',
            'gym_target' => 'nullable|integer|min:1|max:7',
            'work_hours_target' => 'nullable|integer|min:1|max:16',
            'rest_days_target' => 'nullable|integer|min:1|max:7',
        ]);

        $user = Auth::user();

        // حفظ الإعدادات المالية
        $user->starting_balance = $request->starting_balance;
        $user->starting_balance_date = now();
        $user->onboarding_completed = true;
        $user->save();

        // حفظ الدخل والمصروف كـ MetricValues
        if ($request->monthly_income) {
            MetricValue::updateOrCreate(
                ['user_id' => $user->id, 'metric_id' => $this->getMetricId('income'), 'date' => today()],
                ['value' => $request->monthly_income]
            );
        }

        if ($request->monthly_expenses) {
            MetricValue::updateOrCreate(
                ['user_id' => $user->id, 'metric_id' => $this->getMetricId('expenses'), 'date' => today()],
                ['value' => $request->monthly_expenses]
            );
        }

        // إنشاء Today One Thing
        if ($request->today_one_thing) {
            Task::create([
                'user_id' => $user->id,
                'title' => $request->today_one_thing,
                'type' => 'one_thing',
                'date' => today(),
                'completed' => false,
            ]);
        }

        // إنشاء فئات المصروفات الافتراضية
        if ($request->has('seed_expense_categories')) {
            $this->seedExpenseCategories($user->id);
        }

        // بدء ختمة القرآن
        if ($request->has('start_quran_khatma')) {
            QuranProgress::createForCurrentMonth($user->id);
        }

        return redirect()->route('decision-os.dashboard')
                        ->with('success', '🎉 مرحباً بك في Decision OS! نظامك جاهز الآن.');
    }

    /**
     * الحصول على ID الـ Metric من الـ key
     */
    private function getMetricId(string $key): ?int
    {
        return \App\Models\Metric::where('key', $key)->value('id');
    }

    /**
     * إنشاء فئات المصروفات الافتراضية للمستخدم
     */
    private function seedExpenseCategories(int $userId): void
    {
        $categories = ExpenseCategory::getDefaultCategories();

        foreach ($categories as $category) {
            ExpenseCategory::firstOrCreate(
                ['name' => $category['name'], 'user_id' => null],
                array_merge($category, ['is_default' => true])
            );
        }
    }
}
