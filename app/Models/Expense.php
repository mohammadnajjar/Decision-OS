<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $fillable = [
        'user_id',
        'expense_category_id',
        'account_id',
        'amount',
        'date',
        'note',
        'payment_method',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'date' => 'date',
    ];

    /**
     * Get user that owns this expense.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get category for this expense.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id');
    }

    /**
     * Get account for this expense.
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get total expenses for user today.
     */
    public static function getTodayTotal(int $userId): float
    {
        return static::where('user_id', $userId)
            ->whereDate('date', today())
            ->sum('amount');
    }

    /**
     * Get total expenses for user this week.
     */
    public static function getWeekTotal(int $userId): float
    {
        return static::where('user_id', $userId)
            ->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])
            ->sum('amount');
    }

    /**
     * Get total expenses for user this month.
     */
    public static function getMonthTotal(int $userId): float
    {
        return static::where('user_id', $userId)
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('amount');
    }

    /**
     * Get top category for user this week.
     */
    public static function getTopCategoryThisWeek(int $userId): ?array
    {
        $result = static::where('user_id', $userId)
            ->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])
            ->selectRaw('expense_category_id, SUM(amount) as total')
            ->groupBy('expense_category_id')
            ->orderByDesc('total')
            ->first();

        if (!$result) {
            return null;
        }

        $category = ExpenseCategory::find($result->expense_category_id);
        return [
            'category' => $category,
            'total' => $result->total,
        ];
    }
}
