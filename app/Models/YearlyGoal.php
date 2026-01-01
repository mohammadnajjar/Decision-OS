<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class YearlyGoal extends Model
{
    protected $fillable = [
        'user_id',
        'year',
        'title',
        'description',
        'category',
        'status',
        'progress',
        'target_date',
        'milestones',
    ];

    protected $casts = [
        'target_date' => 'date',
        'milestones' => 'array',
        'progress' => 'integer',
    ];

    const CATEGORIES = [
        'personal' => 'شخصي',
        'financial' => 'مالي',
        'health' => 'صحة',
        'career' => 'مهني',
        'learning' => 'تعلم',
        'relationships' => 'علاقات',
        'other' => 'أخرى',
    ];

    const STATUSES = [
        'not_started' => 'لم يبدأ',
        'in_progress' => 'قيد التنفيذ',
        'completed' => 'مكتمل',
        'abandoned' => 'متوقف',
    ];

    /**
     * Get user that owns this goal.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get category label.
     */
    public function getCategoryLabelAttribute(): string
    {
        return self::CATEGORIES[$this->category] ?? $this->category;
    }

    /**
     * Get status label.
     */
    public function getStatusLabelAttribute(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }

    /**
     * Get status color.
     */
    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'completed' => 'success',
            'in_progress' => 'primary',
            'abandoned' => 'danger',
            default => 'secondary',
        };
    }

    /**
     * Scope for current year.
     */
    public function scopeCurrentYear($query)
    {
        return $query->where('year', now()->year);
    }

    /**
     * Scope by category.
     */
    public function scopeByCategory($query, string $category)
    {
        return $query->where('category', $category);
    }
}
