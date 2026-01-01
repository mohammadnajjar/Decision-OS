<?php

namespace App\Http\Controllers;

use App\Models\QuranProgress;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class QuranProgressController extends Controller
{
    /**
     * عرض صفحة ختمة القرآن
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        // الحصول على ختمة الشهر الحالي أو إنشاء واحدة جديدة
        $currentProgress = QuranProgress::getCurrentMonth($user->id);
        if (!$currentProgress) {
            $currentProgress = QuranProgress::createForCurrentMonth($user->id);
        }

        // تاريخ الختمات السابقة
        $history = QuranProgress::where('user_id', $user->id)
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->limit(12)
            ->get();

        // إحصائيات
        $completedCount = QuranProgress::where('user_id', $user->id)
            ->where('status', 'completed')
            ->count();

        $thisYearCompleted = QuranProgress::where('user_id', $user->id)
            ->where('year', now()->year)
            ->where('status', 'completed')
            ->count();

        return view('decision-os.quran.index', compact(
            'currentProgress',
            'history',
            'completedCount',
            'thisYearCompleted'
        ));
    }

    /**
     * تسجيل قراءة جديدة
     */
    public function logReading(Request $request): RedirectResponse
    {
        $request->validate([
            'pages' => 'required|integer|min:1|max:604',
        ]);

        $user = $request->user();
        $progress = QuranProgress::getCurrentMonth($user->id);

        if (!$progress) {
            $progress = QuranProgress::createForCurrentMonth($user->id);
        }

        $progress->logReading($request->pages);

        $message = "تم تسجيل قراءة {$request->pages} صفحة ✓";

        if ($progress->status === 'completed') {
            $message = "🎉 مبارك! أكملت ختمة هذا الشهر!";
        }

        return back()->with('success', $message);
    }

    /**
     * تحديث موقع القراءة الحالي
     */
    public function updatePosition(Request $request): RedirectResponse
    {
        $request->validate([
            'current_juz' => 'required|integer|min:1|max:30',
            'current_page' => 'required|integer|min:1|max:604',
        ]);

        $user = $request->user();
        $progress = QuranProgress::getCurrentMonth($user->id);

        if (!$progress) {
            $progress = QuranProgress::createForCurrentMonth($user->id);
        }

        $progress->update([
            'current_juz' => $request->current_juz,
            'current_page' => $request->current_page,
            'completed_pages' => $request->current_page,
            'last_read_date' => now(),
            'status' => $request->current_page >= QuranProgress::TOTAL_PAGES ? 'completed' : 'in_progress',
        ]);

        return back()->with('success', 'تم تحديث موقعك في القرآن ✓');
    }

    /**
     * إضافة ملاحظات
     */
    public function updateNotes(Request $request): RedirectResponse
    {
        $request->validate([
            'notes' => 'nullable|string|max:1000',
        ]);

        $user = $request->user();
        $progress = QuranProgress::getCurrentMonth($user->id);

        if ($progress) {
            $progress->update(['notes' => $request->notes]);
        }

        return back()->with('success', 'تم حفظ الملاحظات ✓');
    }

    /**
     * بدء ختمة جديدة للشهر التالي
     */
    public function startNewKhatma(Request $request): RedirectResponse
    {
        $user = $request->user();

        // التحقق من عدم وجود ختمة للشهر الحالي
        $existing = QuranProgress::getCurrentMonth($user->id);
        if ($existing) {
            return back()->with('info', 'لديك ختمة قائمة لهذا الشهر');
        }

        QuranProgress::createForCurrentMonth($user->id);

        return back()->with('success', 'تم بدء ختمة جديدة لهذا الشهر 📖');
    }

    /**
     * إعادة تعيين ختمة الشهر الحالي
     */
    public function reset(Request $request): RedirectResponse
    {
        $user = $request->user();
        $progress = QuranProgress::getCurrentMonth($user->id);

        if ($progress) {
            $progress->update([
                'completed_pages' => 0,
                'current_juz' => 1,
                'current_page' => 1,
                'status' => 'not_started',
                'notes' => null,
            ]);
        }

        return back()->with('success', 'تم إعادة تعيين الختمة ✓');
    }
}
