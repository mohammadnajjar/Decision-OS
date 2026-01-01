<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'balance',
        'currency',
        'icon',
        'color',
        'is_default',
        'notes',
    ];

    protected $casts = [
        'balance' => 'decimal:2',
        'is_default' => 'boolean',
    ];

    /**
     * علاقة مع المستخدم
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * علاقة مع المصاريف
     */
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    /**
     * علاقة مع الدخل
     */
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    /**
     * حساب إجمالي المصاريف من هذا الحساب
     */
    public function getTotalExpensesAttribute()
    {
        return $this->expenses()->sum('amount');
    }

    /**
     * حساب إجمالي الدخل لهذا الحساب
     */
    public function getTotalIncomesAttribute()
    {
        return $this->incomes()->sum('amount');
    }

    /**
     * الرصيد المحسوب (دخل - مصاريف)
     */
    public function getCalculatedBalanceAttribute()
    {
        return $this->total_incomes - $this->total_expenses;
    }

    /**
     * تحديث الرصيد بناءً على عملية جديدة
     */
    public function updateBalance($amount, $type = 'expense')
    {
        if ($type === 'expense') {
            $this->balance -= $amount;
        } else {
            $this->balance += $amount;
        }
        $this->save();
    }
}
