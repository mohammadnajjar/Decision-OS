<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'type',
        'completed',
        'date',
        'completed_at',
    ];

    protected $casts = [
        'completed' => 'boolean',
        'date' => 'date',
        'completed_at' => 'datetime',
    ];

    /**
     * Get the user that owns this task.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get pomodoro sessions for this task.
     */
    public function pomodoroSessions(): HasMany
    {
        return $this->hasMany(PomodoroSession::class);
    }

    /**
     * Mark task as completed.
     */
    public function markCompleted(): void
    {
        $this->update([
            'completed' => true,
            'completed_at' => now(),
        ]);
    }

    /**
     * Scope to get today's tasks.
     */
    public function scopeToday($query)
    {
        return $query->whereDate('date', today());
    }

    /**
     * Scope to filter by type.
     */
    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Get Today One Thing for user.
     */
    public static function getTodayOneThing(int $userId): ?self
    {
        return static::where('user_id', $userId)
            ->where('date', today()->toDateString())
            ->where('type', 'one_thing')
            ->first();
    }

    /**
     * Get completed tasks count for user in date range.
     */
    public static function getCompletedCount(int $userId, $startDate, $endDate): int
    {
        return static::where('user_id', $userId)
            ->where('completed', true)
            ->whereBetween('date', [$startDate, $endDate])
            ->count();
    }

    /**
     * Get days without completion (for alerts).
     */
    public static function getDaysWithoutCompletion(int $userId): int
    {
        $lastCompleted = static::where('user_id', $userId)
            ->where('completed', true)
            ->orderByDesc('date')
            ->first();

        if (!$lastCompleted) {
            return 999; // Never completed
        }

        return $lastCompleted->date->diffInDays(today());
    }
}
