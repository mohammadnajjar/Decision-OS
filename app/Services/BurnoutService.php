<?php

namespace App\Services;

use App\Models\User;
use App\Models\MetricValue;
use App\Models\PomodoroSession;

class BurnoutService
{
    /**
     * Risk level constants
     */
    public const LOW = 'low';
    public const MEDIUM = 'medium';
    public const HIGH = 'high';

    /**
     * Calculate burnout risk for a user.
     *
     * Score calculation:
     * - Work streak >= 10 days: +3
     * - Work streak >= 7 days: +2
     * - Avg work hours > 10: +3
     * - Avg work hours > 8: +1
     * - Pomodoro load > 10/day: +2
     * - Rest days = 0 this week: +3
     *
     * Result:
     * - Score >= 7: HIGH
     * - Score >= 4: MEDIUM
     * - Score < 4: LOW
     */
    public function calculateRisk(User $user): string
    {
        $score = 0;

        // Work streak scoring
        $workStreak = $this->getWorkStreak($user);
        if ($workStreak >= 10) {
            $score += 3;
        } elseif ($workStreak >= 7) {
            $score += 2;
        }

        // Work hours scoring
        $avgWorkHours = $this->getAvgWorkHours($user);
        if ($avgWorkHours > 10) {
            $score += 3;
        } elseif ($avgWorkHours > 8) {
            $score += 1;
        }

        // Pomodoro load scoring
        $pomodoroLoad = $this->getPomodoroLoad($user);
        if ($pomodoroLoad > 10) {
            $score += 2;
        }

        // Rest days scoring
        $restDays = $this->getRestDays($user);
        if ($restDays == 0) {
            $score += 3;
        }

        // Determine risk level
        if ($score >= 7) {
            return self::HIGH;
        }
        if ($score >= 4) {
            return self::MEDIUM;
        }
        return self::LOW;
    }

    /**
     * Get detailed burnout data for display.
     */
    public function getBurnoutData(User $user): array
    {
        $risk = $this->calculateRisk($user);

        return [
            'risk' => $risk,
            'risk_label' => $this->getRiskLabel($risk),
            'risk_color' => $this->getRiskColor($risk),
            'metrics' => [
                'work_streak' => $this->getWorkStreak($user),
                'avg_work_hours' => round($this->getAvgWorkHours($user), 1),
                'pomodoro_load' => $this->getPomodoroLoad($user),
                'rest_days' => $this->getRestDays($user),
            ],
            'message' => $this->getRiskMessage($risk),
        ];
    }

    /**
     * Get consecutive work days without rest.
     */
    private function getWorkStreak(User $user): int
    {
        $streak = MetricValue::getLatestForUser($user->id, 'work_streak');
        return $streak ?? 0;
    }

    /**
     * Get average work hours per day (last 7 days).
     */
    private function getAvgWorkHours(User $user): float
    {
        $weekStart = now()->subDays(7);
        $avgHours = MetricValue::getAverageForUser($user->id, 'avg_work_hours', $weekStart, now());
        return $avgHours ?? 0;
    }

    /**
     * Get average pomodoros per day (last 7 days).
     */
    private function getPomodoroLoad(User $user): int
    {
        $weekStart = now()->subDays(7)->startOfDay();

        $totalPomodoros = PomodoroSession::where('user_id', $user->id)
            ->where('status', 'completed')
            ->where('created_at', '>=', $weekStart)
            ->count();

        $days = 7;
        return (int) round($totalPomodoros / $days);
    }

    /**
     * Get rest days this week.
     */
    private function getRestDays(User $user): int
    {
        $weekStart = now()->startOfWeek();
        $weekEnd = now()->endOfWeek();

        $restDays = MetricValue::getSumForUser($user->id, 'rest_days', $weekStart, $weekEnd);
        return $restDays ?? 0;
    }

    /**
     * Get risk level label.
     */
    private function getRiskLabel(string $risk): string
    {
        return match ($risk) {
            self::HIGH => 'خطر مرتفع',
            self::MEDIUM => 'خطر متوسط',
            self::LOW => 'منخفض',
            default => 'غير معروف',
        };
    }

    /**
     * Get risk level color.
     */
    private function getRiskColor(string $risk): string
    {
        return match ($risk) {
            self::HIGH => 'danger',
            self::MEDIUM => 'warning',
            self::LOW => 'success',
            default => 'secondary',
        };
    }

    /**
     * Get risk message.
     */
    private function getRiskMessage(string $risk): string
    {
        return match ($risk) {
            self::HIGH => 'توقف الآن! خطر الإرهاق مرتفع جداً. خذ راحة فورية.',
            self::MEDIUM => 'انتبه! بوادر إرهاق. خفف من الضغط.',
            self::LOW => 'وضعك جيد. استمر بنفس الإيقاع.',
            default => '',
        };
    }
}
