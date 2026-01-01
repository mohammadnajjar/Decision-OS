<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DebtPayment extends Model
{
    protected $fillable = [
        'debt_id',
        'account_id',
        'amount',
        'payment_date',
        'due_date',
        'status',
        'payment_method',
        'notes',
        'reference_number',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'payment_date' => 'date',
        'due_date' => 'date',
    ];

    /**
     * Boot model events.
     */
    protected static function booted(): void
    {
        static::created(function ($payment) {
            if ($payment->status === 'paid') {
                $payment->debt->updateStatus();
            }
        });

        static::updated(function ($payment) {
            if ($payment->isDirty('status') || $payment->isDirty('amount')) {
                $payment->debt->updateStatus();
            }
        });

        static::deleted(function ($payment) {
            $payment->debt->updateStatus();
        });
    }

    /**
     * Get debt this payment belongs to.
     */
    public function debt(): BelongsTo
    {
        return $this->belongsTo(Debt::class);
    }

    /**
     * Get account used for this payment.
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Check if payment is overdue.
     */
    public function isOverdue(): bool
    {
        return $this->status === 'pending'
            && $this->due_date
            && $this->due_date->isPast();
    }

    /**
     * Mark payment as paid and update account balance.
     */
    public function markAsPaid(?int $accountId = null): void
    {
        $this->status = 'paid';
        $this->payment_date = now();

        if ($accountId) {
            $this->account_id = $accountId;
            $account = Account::find($accountId);

            if ($account && $this->debt) {
                // إذا كان الدين علي (payable) أطرح من الحساب، وإذا لي (receivable) أضيف
                $type = $this->debt->type === 'payable' ? 'expense' : 'income';
                $account->updateBalance($this->amount, $type);
            }
        }

        $this->save();
    }
}
