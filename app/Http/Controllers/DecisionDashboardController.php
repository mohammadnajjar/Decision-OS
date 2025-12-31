<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Decision;
use App\Models\WeeklyReview;
use App\Services\StatusService;
use App\Services\InsightService;
use App\Services\BurnoutService;
use App\Services\LockingService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DecisionDashboardController extends Controller
{
    public function __construct(
        private StatusService $statusService,
        private InsightService $insightService,
        private BurnoutService $burnoutService,
        private LockingService $lockingService,
    ) {}

    /**
     * Display the main Decision OS dashboard.
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        // Today's task (One Thing)
        $todayTask = Task::where('user_id', $user->id)
            ->where('date', today())
            ->where('type', 'one_thing')
            ->first();

        // Top 3 tasks
        $topTasks = Task::where('user_id', $user->id)
            ->where('date', today())
            ->where('type', 'top_3')
            ->orderBy('created_at')
            ->limit(3)
            ->get();

        // Warnings (Top 3 insights)
        $warnings = $this->insightService->getTopWarnings($user, 3);

        // Module statuses
        $moduleStatuses = $this->statusService->getAllStatuses($user);

        // Quick KPIs
        $kpis = $this->getQuickKPIs($user);

        // Burnout data
        $burnoutData = $this->burnoutService->getBurnoutData($user);

        // Weekly review status
        $weeklyReviewDue = $this->isWeeklyReviewDue($user);
        $lastReview = WeeklyReview::where('user_id', $user->id)
            ->orderBy('week_start', 'desc')
            ->first();

        // Lock status
        $isLocked = $this->lockingService->isLocked($user);
        $lockMessage = $this->lockingService->getLockMessage($user);
        $redStatuses = $this->lockingService->getRedStatuses($user);

        // Decisions due for review
        $decisionsDue = Decision::where('user_id', $user->id)
            ->where('result', 'pending')
            ->where('review_date', '<=', now())
            ->orderBy('review_date')
            ->limit(5)
            ->get();

        return view('decision-os.dashboard', compact(
            'todayTask',
            'topTasks',
            'warnings',
            'moduleStatuses',
            'kpis',
            'burnoutData',
            'weeklyReviewDue',
            'lastReview',
            'isLocked',
            'lockMessage',
            'redStatuses',
            'decisionsDue',
        ));
    }

    /**
     * Get quick KPIs for the dashboard (max 12).
     */
    private function getQuickKPIs($user): array
    {
        $weekStart = now()->startOfWeek();
        $weekEnd = now()->endOfWeek();
        $monthStart = now()->startOfMonth();

        return [
            [
                'label' => 'أيام الجيم',
                'value' => \App\Models\MetricValue::getSumForUser($user->id, 'gym_days', $weekStart, $weekEnd) ?? 0,
                'target' => 3,
                'unit' => '/أسبوع',
            ],
            [
                'label' => 'ساعات العمل',
                'value' => round(\App\Models\MetricValue::getAverageForUser($user->id, 'avg_work_hours', $weekStart, $weekEnd) ?? 0, 1),
                'target' => 8,
                'unit' => '/يوم',
            ],
            [
                'label' => 'أيام الراحة',
                'value' => \App\Models\MetricValue::getSumForUser($user->id, 'rest_days', $weekStart, $weekEnd) ?? 0,
                'target' => 1,
                'unit' => '/أسبوع',
            ],
            [
                'label' => 'الدخل',
                'value' => \App\Models\MetricValue::getLatestForUser($user->id, 'income') ?? 0,
                'format' => 'currency',
                'unit' => '/شهر',
            ],
            [
                'label' => 'المصروفات',
                'value' => \App\Models\MetricValue::getLatestForUser($user->id, 'expenses') ?? 0,
                'format' => 'currency',
                'unit' => '/شهر',
            ],
            [
                'label' => 'Runway',
                'value' => $this->calculateRunway($user),
                'target' => 3,
                'unit' => 'شهر',
            ],
            [
                'label' => 'Pomodoros اليوم',
                'value' => \App\Models\PomodoroSession::where('user_id', $user->id)
                    ->whereDate('created_at', today())
                    ->where('status', 'completed')
                    ->count(),
                'target' => 6,
                'unit' => '',
            ],
            [
                'label' => 'مهام مكتملة',
                'value' => Task::where('user_id', $user->id)
                    ->whereBetween('date', [$weekStart, $weekEnd])
                    ->where('completed', true)
                    ->count(),
                'unit' => '/أسبوع',
            ],
        ];
    }

    /**
     * Calculate financial runway in months.
     */
    private function calculateRunway($user): float
    {
        $savings = \App\Models\MetricValue::getLatestForUser($user->id, 'savings') ?? 0;
        $expenses = \App\Models\MetricValue::getLatestForUser($user->id, 'expenses') ?? 1;

        if ($expenses <= 0) {
            return 99; // Unlimited if no expenses
        }

        return round($savings / $expenses, 1);
    }

    /**
     * Check if weekly review is due.
     */
    private function isWeeklyReviewDue($user): bool
    {
        $lastReview = WeeklyReview::where('user_id', $user->id)
            ->orderBy('week_start', 'desc')
            ->first();

        if (!$lastReview) {
            return true;
        }

        // Due if last review was more than 7 days ago
        return $lastReview->week_start->diffInDays(now()) >= 7;
    }
}
