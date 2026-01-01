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
                'label' => 'الرصيد المتاح',
                'value' => $user->cash_on_hand,
                'format' => 'currency',
                'unit' => '',
                'icon' => 'ri-wallet-3-line',
                'color' => $user->cash_on_hand >= 0 ? 'success' : 'danger',
            ],
            [
                'label' => 'صرف اليوم',
                'value' => \App\Models\Expense::getTodayTotal($user->id),
                'format' => 'currency',
                'unit' => '',
                'icon' => 'ri-shopping-cart-line',
            ],
            [
                'label' => 'صرف الأسبوع',
                'value' => \App\Models\Expense::getWeekTotal($user->id),
                'format' => 'currency',
                'unit' => '',
                'icon' => 'ri-calendar-line',
            ],
            [
                'label' => 'صرف الشهر',
                'value' => \App\Models\Expense::getMonthTotal($user->id),
                'format' => 'currency',
                'unit' => '',
                'icon' => 'ri-calendar-2-line',
            ],
            [
                'label' => 'دخل الشهر',
                'value' => \App\Models\Income::getMonthTotal($user->id),
                'format' => 'currency',
                'unit' => '',
                'icon' => 'ri-money-dollar-circle-line',
                'color' => 'success',
            ],
            [
                'label' => 'Runway',
                'value' => $this->calculateRunway($user),
                'target' => 3,
                'unit' => 'شهر',
                'icon' => 'ri-time-line',
            ],
            [
                'label' => 'Pomodoros اليوم',
                'value' => \App\Models\PomodoroSession::where('user_id', $user->id)
                    ->whereDate('created_at', today())
                    ->where('status', 'completed')
                    ->count(),
                'target' => 6,
                'unit' => '',
                'icon' => 'ri-timer-line',
            ],
            [
                'label' => 'أيام الجيم',
                'value' => \App\Models\MetricValue::getSumForUser($user->id, 'gym_days', $weekStart, $weekEnd) ?? 0,
                'target' => 3,
                'unit' => '/أسبوع',
                'icon' => 'ri-heart-pulse-line',
            ],
            [
                'label' => 'ساعات العمل',
                'value' => round(\App\Models\MetricValue::getAverageForUser($user->id, 'avg_work_hours', $weekStart, $weekEnd) ?? 0, 1),
                'target' => 8,
                'unit' => '/يوم',
                'icon' => 'ri-time-fill',
            ],
            [
                'label' => 'أيام الراحة',
                'value' => \App\Models\MetricValue::getSumForUser($user->id, 'rest_days', $weekStart, $weekEnd) ?? 0,
                'target' => 1,
                'unit' => '/أسبوع',
                'icon' => 'ri-rest-time-line',
            ],
            [
                'label' => 'مهام مكتملة',
                'value' => Task::where('user_id', $user->id)
                    ->whereBetween('date', [$weekStart, $weekEnd])
                    ->where('completed', true)
                    ->count(),
                'unit' => '/أسبوع',
                'icon' => 'ri-checkbox-circle-line',
            ],
            [
                'label' => 'ختمة القرآن',
                'value' => $this->getQuranProgress($user),
                'unit' => '%',
                'icon' => 'ri-book-open-line',
                'color' => 'success',
            ],
        ];
    }

    /**
     * Get Quran progress percentage for current month.
     */
    private function getQuranProgress($user): int
    {
        $progress = \App\Models\QuranProgress::getCurrentMonth($user->id);
        return $progress ? (int) $progress->progress_percentage : 0;
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

    /**
     * Display the quick daily input page.
     */
    public function dailyInput(Request $request): View
    {
        $user = $request->user();

        // Today's One Thing
        $todayTask = Task::where('user_id', $user->id)
            ->where('date', today())
            ->where('type', 'one_thing')
            ->first();

        // Top 3 tasks for today
        $topTasks = Task::where('user_id', $user->id)
            ->where('date', today())
            ->where('type', 'top_3')
            ->orderBy('created_at')
            ->get();

        // Expense categories
        $expenseCategories = \App\Models\ExpenseCategory::where('user_id', $user->id)
            ->orderBy('name')
            ->get();

        // Today's expenses
        $todayExpenses = \App\Models\Expense::getTodayTotal($user->id);
        $weekExpenses = \App\Models\Expense::getWeekTotal($user->id);
        $monthIncome = \App\Models\Income::getMonthTotal($user->id);

        // Get metric IDs for discipline
        $gymMetricId = \App\Models\Metric::where('code', 'gym_days')->value('id') ?? 0;
        $restMetricId = \App\Models\Metric::where('code', 'rest_days')->value('id') ?? 0;
        $workHoursMetricId = \App\Models\Metric::where('code', 'avg_work_hours')->value('id') ?? 0;

        // Today's metric values (keyed by metric_id)
        $metricsToday = \App\Models\MetricValue::where('user_id', $user->id)
            ->whereDate('date', today())
            ->pluck('value', 'metric_id')
            ->toArray();

        // Quran progress
        $quranProgress = \App\Models\QuranProgress::getCurrentMonth($user->id);

        // Cash on hand
        $cashOnHand = $user->cash_on_hand;

        // Today's pomodoros
        $todayPomodoros = \App\Models\PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', today())
            ->where('status', 'completed')
            ->count();

        // Completed tasks today
        $completedTasksToday = Task::where('user_id', $user->id)
            ->where('date', today())
            ->where('completed', true)
            ->count();

        return view('decision-os.daily-input', compact(
            'todayTask',
            'topTasks',
            'expenseCategories',
            'todayExpenses',
            'weekExpenses',
            'monthIncome',
            'gymMetricId',
            'restMetricId',
            'workHoursMetricId',
            'metricsToday',
            'quranProgress',
            'cashOnHand',
            'todayPomodoros',
            'completedTasksToday',
        ));
    }
}
