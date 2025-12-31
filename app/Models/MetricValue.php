<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MetricValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'metric_id',
        'value',
        'date',
        'notes',
    ];

    protected $casts = [
        'value' => 'decimal:2',
        'date' => 'date',
    ];

    /**
     * Get the user that owns this value.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the metric definition.
     */
    public function metric(): BelongsTo
    {
        return $this->belongsTo(Metric::class);
    }

    /**
     * Scope to filter by user.
     */
    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Scope to filter by date range.
     */
    public function scopeBetweenDates($query, $startDate, $endDate)
    {
        return $query->whereBetween('date', [$startDate, $endDate]);
    }

    /**
     * Scope to get values for this week.
     */
    public function scopeThisWeek($query)
    {
        return $query->whereBetween('date', [
            now()->startOfWeek(),
            now()->endOfWeek(),
        ]);
    }

    /**
     * Scope to get values for this month.
     */
    public function scopeThisMonth($query)
    {
        return $query->whereBetween('date', [
            now()->startOfMonth(),
            now()->endOfMonth(),
        ]);
    }

    /**
     * Get latest value for a metric key for a user.
     */
    public static function getLatestForUser(int $userId, string $metricKey): ?float
    {
        $metric = Metric::findByKey($metricKey);
        if (!$metric) {
            return null;
        }

        $value = static::where('user_id', $userId)
            ->where('metric_id', $metric->id)
            ->orderByDesc('date')
            ->first();

        return $value?->value;
    }

    /**
     * Get average value for a metric key for a user in date range.
     */
    public static function getAverageForUser(int $userId, string $metricKey, $startDate, $endDate): ?float
    {
        $metric = Metric::findByKey($metricKey);
        if (!$metric) {
            return null;
        }

        return static::where('user_id', $userId)
            ->where('metric_id', $metric->id)
            ->whereBetween('date', [$startDate, $endDate])
            ->avg('value');
    }

    /**
     * Get sum of values for a metric key for a user in date range.
     */
    public static function getSumForUser(int $userId, string $metricKey, $startDate, $endDate): float
    {
        $metric = Metric::findByKey($metricKey);
        if (!$metric) {
            return 0;
        }

        return static::where('user_id', $userId)
            ->where('metric_id', $metric->id)
            ->whereBetween('date', [$startDate, $endDate])
            ->sum('value') ?? 0;
    }
}
