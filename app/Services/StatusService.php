<?php

namespace App\Services;

use App\Models\User;
use App\Models\MetricValue;
use App\Models\Task;
use App\Models\PomodoroSession;
use App\Models\WeeklyReview;

class StatusService
{
    /**
     * Status constants
     */
    public const GREEN = 'green';
    public const YELLOW = 'yellow';
    public const RED = 'red';

    /**
     * Get status for a specific module.
     */
    public function getModuleStatus(User $user, string $module): string
    {
        return match ($module) {
            'life_discipline' => $this->getLifeDisciplineStatus($user),
            'financial_safety' => $this->getFinancialSafetyStatus($user),
            'focus_system' => $this->getFocusSystemStatus($user),
            'pomodoro' => $this->getPomodoroStatus($user),
            default => self::YELLOW,
        };
    }

    /**
     * Get all module statuses.
     */
    public function getAllStatuses(User $user): array
    {
        return [
            'life_discipline' => $this->getLifeDisciplineStatus($user),
            'financial_safety' => $this->getFinancialSafetyStatus($user),
            'focus_system' => $this->getFocusSystemStatus($user),
            'pomodoro' => $this->getPomodoroStatus($user),
        ];
    }

    /**
     * Count red statuses.
     */
    public function getRedCount(User $user): int
    {
        $statuses = $this->getAllStatuses($user);
        return collect($statuses)->filter(fn($s) => $s === self::RED)->count();
    }

    /**
     * Check if system is globally locked (≥2 reds).
     */
    public function isGloballyLocked(User $user): bool
    {
        return $this->getRedCount($user) >= 2;
    }

    /**
     * Life & Discipline Status
     * 🟢 Green: gym_days >= 3 && rest_days >= 1
     * 🟡 Yellow: gym_days >= 1
     * 🔴 Red: gym_days == 0 or work_streak >= 10
     */
    private function getLifeDisciplineStatus(User $user): string
    {
        $weekStart = now()->startOfWeek();
        $weekEnd = now()->endOfWeek();

        $gymDays = MetricValue::getSumForUser($user->id, 'gym_days', $weekStart, $weekEnd);
        $restDays = MetricValue::getSumForUser($user->id, 'rest_days', $weekStart, $weekEnd);
        $workStreak = MetricValue::getLatestForUser($user->id, 'work_streak') ?? 0;

        // Red conditions
        if ($workStreak >= 10) {
            return self::RED;
        }

        // Two weeks without gym
        $twoWeeksAgo = now()->subWeeks(2)->startOfWeek();
        $gymDaysTwoWeeks = MetricValue::getSumForUser($user->id, 'gym_days', $twoWeeksAgo, $weekEnd);
        if ($gymDaysTwoWeeks == 0) {
            return self::RED;
        }

        // Green: good commitment
        if ($gymDays >= 3 && $restDays >= 1) {
            return self::GREEN;
        }

        // Yellow: some activity
        if ($gymDays >= 1) {
            return self::YELLOW;
        }

        return self::RED;
    }

    /**
     * Financial Safety Status
     * 🟢 Green: income >= expenses && runway >= 3
     * 🟡 Yellow: runway >= 1
     * 🔴 Red: income < expenses OR runway < 1
     */
    private function getFinancialSafetyStatus(User $user): string
    {
        $income = MetricValue::getLatestForUser($user->id, 'income') ?? 0;
        $expenses = MetricValue::getLatestForUser($user->id, 'expenses') ?? 0;
        $savings = MetricValue::getLatestForUser($user->id, 'savings') ?? 0;

        // Calculate runway (months of savings)
        $runway = $expenses > 0 ? $savings / $expenses : 999;

        // Red conditions
        if ($income < $expenses || $runway < 1) {
            return self::RED;
        }

        // Green: financially safe
        if ($income >= $expenses && $runway >= 3) {
            return self::GREEN;
        }

        // Yellow: getting close to danger
        return self::YELLOW;
    }

    /**
     * Focus System Status
     * 🟢 Green: 5+ tasks completed this week
     * 🟡 Yellow: 2-4 tasks completed
     * 🔴 Red: less than 2 tasks OR 3 days without completion
     */
    private function getFocusSystemStatus(User $user): string
    {
        $weekStart = now()->startOfWeek();
        $weekEnd = now()->endOfWeek();

        $completedTasks = Task::getCompletedCount($user->id, $weekStart, $weekEnd);
        $daysWithoutCompletion = Task::getDaysWithoutCompletion($user->id);

        // Red: 3+ days without completing anything
        if ($daysWithoutCompletion >= 3) {
            return self::RED;
        }

        // Green: strong productivity
        if ($completedTasks >= 5) {
            return self::GREEN;
        }

        // Yellow: some productivity
        if ($completedTasks >= 2) {
            return self::YELLOW;
        }

        return self::RED;
    }

    /**
     * Pomodoro Status
     * 🟢 Green: 6+ pomodoros/day avg && interruption < 30%
     * 🟡 Yellow: 3-5 pomodoros/day
     * 🔴 Red: <3 pomodoros for 3 days OR interruption > 40%
     */
    private function getPomodoroStatus(User $user): string
    {
        $weekStart = now()->startOfWeek();
        $weekEnd = now();

        $avgPomodoros = PomodoroSession::getAveragePerDay($user->id, $weekStart, $weekEnd);
        $interruptionRate = PomodoroSession::getInterruptionRate($user->id, $weekStart, $weekEnd);

        // Check last 3 days
        $threeDaysAgo = now()->subDays(3);
        $recentPomodoros = PomodoroSession::where('user_id', $user->id)
            ->where('created_at', '>=', $threeDaysAgo)
            ->count();
        $recentAvg = $recentPomodoros / 3;

        // Red conditions
        if ($recentAvg < 3 || $interruptionRate > 0.4) {
            return self::RED;
        }

        // Green: strong focus
        if ($avgPomodoros >= 6 && $interruptionRate < 0.3) {
            return self::GREEN;
        }

        // Yellow: moderate focus
        if ($avgPomodoros >= 3) {
            return self::YELLOW;
        }

        return self::RED;
    }
}
