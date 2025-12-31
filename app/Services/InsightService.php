<?php

namespace App\Services;

use App\Models\User;
use App\Models\MetricValue;
use App\Models\PomodoroSession;
use App\Models\WeeklyReview;
use Illuminate\Support\Collection;

class InsightService
{
    private StatusService $statusService;

    public function __construct(StatusService $statusService)
    {
        $this->statusService = $statusService;
    }

    /**
     * The 10 core insight rules.
     */
    private function getRules(): array
    {
        return [
            // Financial Rules
            [
                'key' => 'income_less_than_expenses',
                'condition' => fn(User $user) => $this->checkIncomeLessThanExpenses($user),
                'message' => 'تصرف أكثر مما تربح',
                'message_en' => 'You spend more than you earn',
                'severity' => 'red',
                'module' => 'financial_safety',
            ],
            [
                'key' => 'runway_critical',
                'condition' => fn(User $user) => $this->checkRunwayCritical($user),
                'message' => 'Runway أقل من شهر',
                'message_en' => 'Runway less than 1 month',
                'severity' => 'red',
                'module' => 'financial_safety',
            ],
            [
                'key' => 'income_unstable',
                'condition' => fn(User $user) => $this->checkIncomeUnstable($user),
                'message' => 'دخل غير مستقر',
                'message_en' => 'Unstable income',
                'severity' => 'yellow',
                'module' => 'financial_safety',
            ],

            // Life & Discipline Rules
            [
                'key' => 'no_rest_10_days',
                'condition' => fn(User $user) => $this->checkNoRest10Days($user),
                'message' => '10 أيام بدون راحة → Burnout Risk',
                'message_en' => '10 days without rest → Burnout Risk',
                'severity' => 'red',
                'module' => 'life_discipline',
            ],
            [
                'key' => 'high_work_hours',
                'condition' => fn(User $user) => $this->checkHighWorkHours($user),
                'message' => 'ساعات عمل مرتفعة',
                'message_en' => 'High work hours',
                'severity' => 'yellow',
                'module' => 'life_discipline',
            ],
            [
                'key' => 'no_gym_2_weeks',
                'condition' => fn(User $user) => $this->checkNoGym2Weeks($user),
                'message' => 'انضباط جسدي منخفض',
                'message_en' => 'Low physical discipline',
                'severity' => 'red',
                'module' => 'life_discipline',
            ],

            // Focus Rules
            [
                'key' => 'low_pomodoros_3_days',
                'condition' => fn(User $user) => $this->checkLowPomodoros3Days($user),
                'message' => 'تركيز منخفض جداً',
                'message_en' => 'Very low focus',
                'severity' => 'red',
                'module' => 'pomodoro',
            ],
            [
                'key' => 'high_interruption_rate',
                'condition' => fn(User $user) => $this->checkHighInterruptionRate($user),
                'message' => 'مقاطعات كثيرة → Cognitive Fatigue',
                'message_en' => 'Many interruptions → Cognitive Fatigue',
                'severity' => 'yellow',
                'module' => 'pomodoro',
            ],

            // Review Rules
            [
                'key' => 'no_review_2_weeks',
                'condition' => fn(User $user) => $this->checkNoReview2Weeks($user),
                'message' => 'أسبوعين بدون مراجعة',
                'message_en' => '2 weeks without review',
                'severity' => 'yellow',
                'module' => 'weekly_review',
            ],

            // Global Lock Rule
            [
                'key' => 'global_lock',
                'condition' => fn(User $user) => $this->statusService->isGloballyLocked($user),
                'message' => '⚠️ النظام مقفل - أصلح الأحمر أولاً',
                'message_en' => '⚠️ System locked - Fix red items first',
                'severity' => 'red',
                'module' => 'global',
            ],
        ];
    }

    /**
     * Get all active insights for user.
     */
    public function getActiveInsights(User $user): Collection
    {
        $insights = collect();

        foreach ($this->getRules() as $rule) {
            if ($rule['condition']($user)) {
                $insights->push([
                    'key' => $rule['key'],
                    'message' => $rule['message'],
                    'message_en' => $rule['message_en'],
                    'severity' => $rule['severity'],
                    'module' => $rule['module'],
                ]);
            }
        }

        return $insights;
    }

    /**
     * Get top warnings sorted by severity.
     */
    public function getTopWarnings(User $user, int $limit = 3): Collection
    {
        return $this->getActiveInsights($user)
            ->sortBy(function ($insight) {
                return match ($insight['severity']) {
                    'red' => 0,
                    'yellow' => 1,
                    default => 2,
                };
            })
            ->take($limit)
            ->values();
    }

    // ============ Condition Checkers ============

    private function checkIncomeLessThanExpenses(User $user): bool
    {
        $income = MetricValue::getLatestForUser($user->id, 'income') ?? 0;
        $expenses = MetricValue::getLatestForUser($user->id, 'expenses') ?? 0;
        return $income < $expenses && $expenses > 0;
    }

    private function checkRunwayCritical(User $user): bool
    {
        $expenses = MetricValue::getLatestForUser($user->id, 'expenses') ?? 0;
        $savings = MetricValue::getLatestForUser($user->id, 'savings') ?? 0;

        if ($expenses <= 0) return false;

        $runway = $savings / $expenses;
        return $runway < 1;
    }

    private function checkIncomeUnstable(User $user): bool
    {
        // Check income variance over last 3 months
        $threeMonthsAgo = now()->subMonths(3);
        $incomeValues = MetricValue::where('user_id', $user->id)
            ->whereHas('metric', fn($q) => $q->where('key', 'income'))
            ->where('date', '>=', $threeMonthsAgo)
            ->pluck('value');

        if ($incomeValues->count() < 2) return false;

        $avg = $incomeValues->avg();
        if ($avg <= 0) return false;

        // If variance is more than 30% of average, it's unstable
        $variance = $incomeValues->map(fn($v) => abs($v - $avg))->avg();
        return ($variance / $avg) > 0.3;
    }

    private function checkNoRest10Days(User $user): bool
    {
        $workStreak = MetricValue::getLatestForUser($user->id, 'work_streak') ?? 0;
        return $workStreak >= 10;
    }

    private function checkHighWorkHours(User $user): bool
    {
        $weekStart = now()->startOfWeek();
        $avgHours = MetricValue::getAverageForUser($user->id, 'avg_work_hours', $weekStart, now());
        return $avgHours !== null && $avgHours > 10;
    }

    private function checkNoGym2Weeks(User $user): bool
    {
        $twoWeeksAgo = now()->subWeeks(2)->startOfWeek();
        $gymDays = MetricValue::getSumForUser($user->id, 'gym_days', $twoWeeksAgo, now());
        return $gymDays == 0;
    }

    private function checkLowPomodoros3Days(User $user): bool
    {
        $threeDaysAgo = now()->subDays(3);
        $totalPomodoros = PomodoroSession::where('user_id', $user->id)
            ->where('created_at', '>=', $threeDaysAgo)
            ->count();

        // Less than 3 pomodoros per day average over 3 days
        return ($totalPomodoros / 3) < 3;
    }

    private function checkHighInterruptionRate(User $user): bool
    {
        $weekStart = now()->startOfWeek();
        $rate = PomodoroSession::getInterruptionRate($user->id, $weekStart, now());
        return $rate > 0.4;
    }

    private function checkNoReview2Weeks(User $user): bool
    {
        $weeksSinceReview = WeeklyReview::getWeeksSinceLastReview($user->id);
        return $weeksSinceReview >= 2;
    }
}
