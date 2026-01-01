<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpenseCategory extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'icon',
        'color',
        'is_default',
        'is_system',
        'is_investment',
        'auto_percentage',
        'sort_order',
    ];

    protected $casts = [
        'is_default' => 'boolean',
        'is_system' => 'boolean',
        'is_investment' => 'boolean',
        'auto_percentage' => 'decimal:2',
    ];

    /**
     * Get user that owns this category.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get expenses for this category.
     */
    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }

    /**
     * Get default categories for seeding.
     */
    public static function getDefaultCategories(): array
    {
        return [
            ['name' => 'قهوة', 'icon' => '☕', 'color' => '#8B4513', 'sort_order' => 1],
            ['name' => 'أكل', 'icon' => '🍔', 'color' => '#FF6B35', 'sort_order' => 2],
            ['name' => 'مواصلات', 'icon' => '🚕', 'color' => '#FFC107', 'sort_order' => 3],
            ['name' => 'بقالة', 'icon' => '🛒', 'color' => '#4CAF50', 'sort_order' => 4],
            ['name' => 'إيجار/سكن', 'icon' => '🏠', 'color' => '#795548', 'sort_order' => 5],
            ['name' => 'إنترنت/اتصالات', 'icon' => '📶', 'color' => '#2196F3', 'sort_order' => 6],
            ['name' => 'فواتير', 'icon' => '💡', 'color' => '#FF9800', 'sort_order' => 7],
            ['name' => 'هدايا', 'icon' => '🎁', 'color' => '#E91E63', 'sort_order' => 8],
            ['name' => 'صحة', 'icon' => '🩺', 'color' => '#F44336', 'sort_order' => 9],
            ['name' => 'تعليم', 'icon' => '📚', 'color' => '#9C27B0', 'sort_order' => 10],
            ['name' => 'أدوات/اشتراكات', 'icon' => '🧰', 'color' => '#607D8B', 'sort_order' => 11],
            ['name' => 'ترفيه', 'icon' => '🎉', 'color' => '#00BCD4', 'sort_order' => 12],
            ['name' => 'عائلة', 'icon' => '🤝', 'color' => '#8BC34A', 'sort_order' => 13],
            ['name' => 'رسوم/حكومة', 'icon' => '🧾', 'color' => '#9E9E9E', 'sort_order' => 14],
            ['name' => 'أخرى', 'icon' => '🧷', 'color' => '#455A64', 'sort_order' => 99, 'is_system' => true],
        ];
    }
}
