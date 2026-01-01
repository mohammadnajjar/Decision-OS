<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ZakatPayment extends Model
{
    /**
     * الحقول القابلة للتعبئة
     */
    protected $fillable = [
        'user_id',
        'amount',
        'payment_date',
        'hijri_year',
        'zakatable_assets_at_payment',
        'recipient',
        'notes',
    ];

    /**
     * تحويل أنواع البيانات
     */
    protected $casts = [
        'amount' => 'decimal:2',
        'payment_date' => 'date',
        'zakatable_assets_at_payment' => 'decimal:2',
    ];

    /**
     * علاقة المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * الحصول على آخر دفعة للمستخدم
     */
    public static function getLastPaymentForUser(int $userId): ?self
    {
        return self::where('user_id', $userId)
            ->orderBy('payment_date', 'desc')
            ->first();
    }

    /**
     * مجموع الدفعات لسنة هجرية معينة
     */
    public static function getTotalForHijriYear(int $userId, string $hijriYear): float
    {
        return (float) self::where('user_id', $userId)
            ->where('hijri_year', $hijriYear)
            ->sum('amount');
    }

    /**
     * مجموع الدفعات للسنة الحالية
     */
    public static function getTotalThisYear(int $userId): float
    {
        return (float) self::where('user_id', $userId)
            ->whereYear('payment_date', now()->year)
            ->sum('amount');
    }

    /**
     * سجل الدفعات للمستخدم
     */
    public static function getHistoryForUser(int $userId, int $limit = 20)
    {
        return self::where('user_id', $userId)
            ->orderBy('payment_date', 'desc')
            ->limit($limit)
            ->get();
    }
}
