<?php

namespace App\Http\Controllers;

use App\Models\CareerData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
    /**
     * عرض صفحة التطور المهني الرئيسية
     */
    public function index()
    {
        $user = Auth::user();

        // بيانات اليوم
        $todayData = CareerData::getToday($user->id);

        // الإحصائيات
        $stats = [
            'cv_status' => CareerData::getCurrentCvStatus($user->id),
            'weekly_applications' => CareerData::getWeeklyApplications($user->id),
            'monthly_interviews' => CareerData::getMonthlyInterviews($user->id),
            'weekly_skill_hours' => CareerData::getWeeklySkillHours($user->id),
            'progress' => CareerData::getCareerProgress($user->id),
        ];

        // سجل آخر 30 يوم
        $history = CareerData::where('user_id', $user->id)
            ->where('date', '>=', now()->subDays(30))
            ->orderBy('date', 'desc')
            ->get();

        return view('decision-os.career.index', compact('todayData', 'stats', 'history'));
    }

    /**
     * صفحة إدخال بيانات اليوم
     */
    public function create()
    {
        $user = Auth::user();
        $todayData = CareerData::getToday($user->id);
        $cvStatusLabels = CareerData::cvStatusLabels();

        return view('decision-os.career.create', compact('todayData', 'cvStatusLabels'));
    }

    /**
     * حفظ بيانات اليوم
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cv_status' => 'nullable|in:draft,ready,sent',
            'applications_count' => 'nullable|integer|min:0',
            'interviews_count' => 'nullable|integer|min:0',
            'skill_hours' => 'nullable|numeric|min:0|max:24',
            'notes' => 'nullable|string|max:1000',
        ]);

        CareerData::logToday(Auth::id(), $validated);

        return redirect()->route('decision-os.career.index')
            ->with('success', 'تم حفظ بيانات اليوم بنجاح');
    }

    /**
     * عرض تفاصيل يوم معين
     */
    public function show(CareerData $career)
    {
        $this->authorize('view', $career);

        return view('decision-os.career.show', compact('career'));
    }

    /**
     * تحديث بيانات يوم معين
     */
    public function update(Request $request, CareerData $career)
    {
        $this->authorize('update', $career);

        $validated = $request->validate([
            'cv_status' => 'nullable|in:draft,ready,sent',
            'applications_count' => 'nullable|integer|min:0',
            'interviews_count' => 'nullable|integer|min:0',
            'skill_hours' => 'nullable|numeric|min:0|max:24',
            'notes' => 'nullable|string|max:1000',
        ]);

        $career->update($validated);

        return redirect()->route('decision-os.career.index')
            ->with('success', 'تم تحديث البيانات بنجاح');
    }
}
