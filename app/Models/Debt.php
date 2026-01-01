<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Debt extends Model
{
    protected $fillable = [
        'user_id',
        'account_id',
        'type',
        'party_name',
        'party_contact',
        'total_amount',
        'paid_amount',
        'remaining_amount',
        'start_date',
        'due_date',
        'status',
        'currency',
        'interest_rate',
        'notes',
        'reference_number',
        'repayment_frequency',
        'installments_count',
    ];

    protected $casts = [
        'total_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'remaining_amount' => 'decimal:2',
        'interest_rate' => 'decimal:2',
        'start_date' => 'date',
        'due_date' => 'date',
    ];

    /**
     * Boot model events.
     */
    protected static function booted(): void
    {
        static::creating(function ($debt) {
            $debt->remaining_amount = $debt->total_amount;
        });
    }

    /**
     * Get user that owns this debt.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get account associated with this debt.
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get all payments for this debt.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(DebtPayment::class);
    }

    /**
     * Check if debt is overdue.
     */
    public function isOverdue(): bool
    {
        if (!$this->due_date) {
            return false;
        }

        return $this->status !== 'fully_paid' && $this->due_date->isPast();
    }

    /**
     * Update debt status based on paid amount.
     */
    public function updateStatus(): void
    {
        $this->paid_amount = $this->payments()->where('status', 'paid')->sum('amount');
        $this->remaining_amount = $this->total_amount - $this->paid_amount;

        if ($this->remaining_amount <= 0) {
            $this->status = 'fully_paid';
        } elseif ($this->paid_amount > 0) {
            $this->status = 'partially_paid';
        } elseif ($this->isOverdue()) {
            $this->status = 'overdue';
        } else {
            $this->status = 'active';
        }

        $this->save();
    }

    /**
     * Generate payment schedule for debt.
     */
    public function generatePaymentSchedule(): void
    {
        // حذف الجدول السابق إن وجد
        $this->payments()->where('status', 'pending')->delete();

        if ($this->repayment_frequency === 'one_time') {
            DebtPayment::create([
                'debt_id' => $this->id,
                'amount' => $this->total_amount,
                'due_date' => $this->due_date ?? $this->start_date,
                'status' => 'pending',
            ]);
            return;
        }

        $installmentAmount = round($this->total_amount / $this->installments_count, 2);
        $currentDate = $this->start_date->copy();

        for ($i = 1; $i <= $this->installments_count; $i++) {
            // حساب التاريخ التالي حسب التكرار
            $dueDate = match ($this->repayment_frequency) {
                'weekly' => $currentDate->addWeek(),
                'biweekly' => $currentDate->addWeeks(2),
                'monthly' => $currentDate->addMonth(),
                'quarterly' => $currentDate->addMonths(3),
                'yearly' => $currentDate->addYear(),
                default => $currentDate,
            };

            // آخر قسط قد يكون مختلف بسبب التقريب
            $amount = ($i === $this->installments_count)
                ? $this->total_amount - ($installmentAmount * ($this->installments_count - 1))
                : $installmentAmount;

            DebtPayment::create([
                'debt_id' => $this->id,
                'amount' => $amount,
                'due_date' => $dueDate,
                'status' => 'pending',
            ]);
        }
    }

    /**
     * Get total debts I owe (payable).
     */
    public static function getTotalPayable(int $userId): float
    {
        return static::where('user_id', $userId)
            ->where('type', 'payable')
            ->whereIn('status', ['active', 'partially_paid', 'overdue'])
            ->sum('remaining_amount');
    }

    /**
     * Get total debts owed to me (receivable).
     */
    public static function getTotalReceivable(int $userId): float
    {
        return static::where('user_id', $userId)
            ->where('type', 'receivable')
            ->whereIn('status', ['active', 'partially_paid', 'overdue'])
            ->sum('remaining_amount');
    }

    /**
     * Get overdue debts count.
     */
    public static function getOverdueCount(int $userId, string $type = null): int
    {
        $query = static::where('user_id', $userId)
            ->where('status', 'overdue');

        if ($type) {
            $query->where('type', $type);
        }

        return $query->count();
    }

    /**
     * Get debts due soon (within 7 days).
     */
    public static function getDueSoon(int $userId, int $days = 7)
    {
        return static::where('user_id', $userId)
            ->whereIn('status', ['active', 'partially_paid'])
            ->whereNotNull('due_date')
            ->whereBetween('due_date', [now(), now()->addDays($days)])
            ->orderBy('due_date', 'asc')
            ->get();
    }
}
