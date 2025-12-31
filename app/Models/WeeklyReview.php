<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WeeklyReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kpi_snapshot',
        'what_worked',
        'what_failed',
        'next_week_focus',
        'week_start',
    ];

    protected $casts = [
        'kpi_snapshot' => 'array',
        'week_start' => 'date',
    ];

    /**
     * Get the user that owns this review.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Check if user has reviewed this week.
     */
    public static function hasReviewedThisWeek(int $userId): bool
    {
        return static::where('user_id', $userId)
            ->where('week_start', now()->startOfWeek()->toDateString())
            ->exists();
    }

    /**
     * Get weeks since last review.
     */
    public static function getWeeksSinceLastReview(int $userId): int
    {
        $lastReview = static::where('user_id', $userId)
            ->orderByDesc('week_start')
            ->first();

        if (!$lastReview) {
            return 999; // Never reviewed
        }

        return intval($lastReview->week_start->diffInWeeks(now()));
    }

    /**
     * Get review streak (consecutive weeks with reviews).
     */
    public static function getStreak(int $userId): int
    {
        $reviews = static::where('user_id', $userId)
            ->orderByDesc('week_start')
            ->pluck('week_start');

        if ($reviews->isEmpty()) {
            return 0;
        }

        $streak = 0;
        $expectedWeek = now()->startOfWeek();

        foreach ($reviews as $weekStart) {
            // If current week is not reviewed yet, start from last week
            if ($streak === 0 && $weekStart->lt($expectedWeek)) {
                $expectedWeek = $expectedWeek->subWeek();
            }

            if ($weekStart->isSameDay($expectedWeek)) {
                $streak++;
                $expectedWeek = $expectedWeek->subWeek();
            } else {
                break;
            }
        }

        return $streak;
    }

    /**
     * Get latest review for user.
     */
    public static function getLatest(int $userId): ?self
    {
        return static::where('user_id', $userId)
            ->orderByDesc('week_start')
            ->first();
    }
}
