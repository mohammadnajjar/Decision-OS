<?php

namespace App\Http\Controllers;

use App\Models\WeeklyReview;
use App\Services\StatusService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class WeeklyReviewController extends Controller
{
    public function __construct(
        private StatusService $statusService,
    ) {}

    /**
     * Show the weekly review form.
     */
    public function create(Request $request): View
    {
        $user = $request->user();
        $weekStart = now()->startOfWeek();
        $weekEnd = now()->endOfWeek();
        $weekNumber = now()->weekOfYear;
        $year = now()->year;

        // Check if already reviewed this week
        $existingReview = WeeklyReview::where('user_id', $user->id)
            ->where('week_start', $weekStart)
            ->first();

        if ($existingReview) {
            return view('decision-os.weekly-review.show', ['review' => $existingReview]);
        }

        // Get current KPI snapshot
        $kpiSnapshot = $this->getKPISnapshot($user);

        // Get last week's review for comparison
        $lastReview = WeeklyReview::where('user_id', $user->id)
            ->orderBy('week_start', 'desc')
            ->first();

        // Calculate streak
        $streak = $this->calculateStreak($user);

        // Week stats for the summary card
        $weekStats = [
            'tasks_completed' => $kpiSnapshot['tasks']['completed'] ?? 0,
            'pomodoros' => $kpiSnapshot['pomodoro']['completed'] ?? 0,
            'work_hours' => $kpiSnapshot['metrics']['avg_work_hours'] ?? 0,
            'healthy_days' => $kpiSnapshot['metrics']['gym_days'] ?? 0,
        ];

        return view('decision-os.weekly-review.form', compact(
            'kpiSnapshot',
            'lastReview',
            'streak',
            'weekStart',
            'weekEnd',
            'weekNumber',
            'year',
            'weekStats'
        ));
    }

    /**
     * Store the weekly review.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'what_worked' => 'nullable|string|max:1000',
            'what_failed' => 'nullable|string|max:1000',
            'next_week_focus' => 'nullable|string|max:500',
        ]);

        $user = $request->user();
        $weekStart = now()->startOfWeek();

        // Get KPI snapshot
        $kpiSnapshot = $this->getKPISnapshot($user);

        WeeklyReview::updateOrCreate(
            [
                'user_id' => $user->id,
                'week_start' => $weekStart,
            ],
            [
                'kpi_snapshot' => $kpiSnapshot,
                'what_worked' => $request->what_worked,
                'what_failed' => $request->what_failed,
                'next_week_focus' => $request->next_week_focus,
            ]
        );

        return redirect()
            ->route('decision-os.dashboard')
            ->with('success', 'تم حفظ المراجعة الأسبوعية ✓');
    }

    /**
     * Show a specific review.
     */
    public function show(WeeklyReview $review): View
    {
        // Authorization
        if ($review->user_id !== Auth::id()) {
            abort(403);
        }

        return view('decision-os.weekly-review.show', ['review' => $review]);
    }

    /**
     * List all reviews.
     */
    public function index(Request $request): View
    {
        $reviews = WeeklyReview::where('user_id', $request->user()->id)
            ->orderBy('week_start', 'desc')
            ->paginate(10);

        return view('decision-os.weekly-review.index', compact('reviews'));
    }

    /**
     * Get KPI snapshot for the current week.
     */
    private function getKPISnapshot($user): array
    {
        $weekStart = now()->startOfWeek();
        $weekEnd = now()->endOfWeek();

        return [
            'module_statuses' => $this->statusService->getAllStatuses($user),
            'metrics' => [
                'gym_days' => \App\Models\MetricValue::getSumForUser($user->id, 'gym_days', $weekStart, $weekEnd) ?? 0,
                'avg_work_hours' => round(\App\Models\MetricValue::getAverageForUser($user->id, 'avg_work_hours', $weekStart, $weekEnd) ?? 0, 1),
                'rest_days' => \App\Models\MetricValue::getSumForUser($user->id, 'rest_days', $weekStart, $weekEnd) ?? 0,
                'income' => \App\Models\MetricValue::getLatestForUser($user->id, 'income') ?? 0,
                'expenses' => \App\Models\MetricValue::getLatestForUser($user->id, 'expenses') ?? 0,
            ],
            'pomodoro' => [
                'completed' => \App\Models\PomodoroSession::where('user_id', $user->id)
                    ->whereBetween('created_at', [$weekStart, $weekEnd])
                    ->where('status', 'completed')
                    ->count(),
            ],
            'tasks' => [
                'completed' => \App\Models\Task::where('user_id', $user->id)
                    ->whereBetween('date', [$weekStart, $weekEnd])
                    ->where('completed', true)
                    ->count(),
                'total' => \App\Models\Task::where('user_id', $user->id)
                    ->whereBetween('date', [$weekStart, $weekEnd])
                    ->count(),
            ],
            'generated_at' => now()->toIso8601String(),
        ];
    }

    /**
     * Calculate review streak.
     */
    private function calculateStreak($user): int
    {
        $reviews = WeeklyReview::where('user_id', $user->id)
            ->orderBy('week_start', 'desc')
            ->limit(52) // Max 1 year
            ->pluck('week_start');

        if ($reviews->isEmpty()) {
            return 0;
        }

        $streak = 0;
        $expectedWeek = now()->startOfWeek();

        foreach ($reviews as $reviewWeek) {
            // Skip current week if not reviewed yet
            if ($reviewWeek->eq($expectedWeek)) {
                $expectedWeek = $expectedWeek->subWeek();
                $streak++;
                continue;
            }

            // Check if matches expected week
            if ($reviewWeek->eq($expectedWeek)) {
                $streak++;
                $expectedWeek = $expectedWeek->subWeek();
            } else {
                break;
            }
        }

        return $streak;
    }
}
