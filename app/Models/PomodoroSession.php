<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PomodoroSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_id',
        'duration',
        'status',
        'energy_before',
        'energy_after',
        'notes',
    ];

    protected $casts = [
        'duration' => 'integer',
        'energy_before' => 'integer',
        'energy_after' => 'integer',
    ];

    /**
     * Get the user that owns this session.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the task this session is linked to.
     */
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    /**
     * Check if session was completed.
     */
    public function isCompleted(): bool
    {
        return $this->status === 'completed';
    }

    /**
     * Get duration in minutes.
     */
    public function getDurationInMinutesAttribute(): float
    {
        return round($this->duration / 60, 1);
    }

    /**
     * Scope to get today's sessions.
     */
    public function scopeToday($query)
    {
        return $query->whereDate('created_at', today());
    }

    /**
     * Scope to filter by status.
     */
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    /**
     * Scope to filter interrupted.
     */
    public function scopeInterrupted($query)
    {
        return $query->where('status', 'interrupted');
    }

    /**
     * Get pomodoros count for user today.
     */
    public static function getTodayCount(int $userId): int
    {
        return static::where('user_id', $userId)
            ->whereDate('created_at', today())
            ->count();
    }

    /**
     * Get average pomodoros per day for user in date range.
     */
    public static function getAveragePerDay(int $userId, $startDate, $endDate): float
    {
        $totalSessions = static::where('user_id', $userId)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();

        $days = max(1, now()->parse($startDate)->diffInDays($endDate) + 1);

        return round($totalSessions / $days, 1);
    }

    /**
     * Get total focus minutes for user in date range.
     */
    public static function getTotalFocusMinutes(int $userId, $startDate, $endDate): int
    {
        $totalSeconds = static::where('user_id', $userId)
            ->where('status', 'completed')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('duration');

        return intval($totalSeconds / 60);
    }

    /**
     * Get interruption rate for user in date range (0-1).
     */
    public static function getInterruptionRate(int $userId, $startDate, $endDate): float
    {
        $total = static::where('user_id', $userId)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();

        if ($total === 0) {
            return 0;
        }

        $interrupted = static::where('user_id', $userId)
            ->where('status', 'interrupted')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();

        return round($interrupted / $total, 2);
    }
}
