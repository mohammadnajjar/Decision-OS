<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ZakatSetting extends Model
{
    /**
     * الحقول القابلة للتعبئة
     */
    protected $fillable = [
        'user_id',
        'enabled',
        'hawl_start_date',
        'nisab_gold_price',
        'gold_price_updated_at',
        'currency',
        'calculation_method',
        'include_receivable_debts',
        'notes',
    ];

    /**
     * تحويل أنواع البيانات
     */
    protected $casts = [
        'enabled' => 'boolean',
        'hawl_start_date' => 'date',
        'nisab_gold_price' => 'decimal:2',
        'gold_price_updated_at' => 'date',
        'include_receivable_debts' => 'boolean',
    ];

    /**
     * القيم الافتراضية
     */
    protected $attributes = [
        'enabled' => false,
        'currency' => 'SAR',
        'calculation_method' => 'hijri_year',
        'include_receivable_debts' => false,
    ];

    /**
     * ثوابت طرق الحساب
     */
    public const METHOD_HIJRI = 'hijri_year';
    public const METHOD_GREGORIAN = 'gregorian_year';

    /**
     * عدد أيام الحول حسب الطريقة
     */
    public const HAWL_DAYS = [
        self::METHOD_HIJRI => 354,
        self::METHOD_GREGORIAN => 365,
    ];

    /**
     * علاقة المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * الحصول على عدد أيام الحول
     */
    public function getHawlDaysAttribute(): int
    {
        return self::HAWL_DAYS[$this->calculation_method] ?? 354;
    }

    /**
     * حساب قيمة النصاب
     */
    public function getNisabValueAttribute(): float
    {
        if (!$this->nisab_gold_price) {
            return 0;
        }
        return (float) ($this->nisab_gold_price * 85);
    }

    /**
     * هل انتهى الحول؟
     */
    public function isHawlComplete(): bool
    {
        if (!$this->hawl_start_date) {
            return false;
        }

        $daysPassed = $this->hawl_start_date->diffInDays(now());
        return $daysPassed >= $this->hawl_days;
    }

    /**
     * الأيام المتبقية للحول
     */
    public function getDaysUntilHawlAttribute(): int
    {
        if (!$this->hawl_start_date) {
            return 0;
        }

        $daysPassed = $this->hawl_start_date->diffInDays(now());
        $remaining = $this->hawl_days - $daysPassed;

        return max(0, $remaining);
    }

    /**
     * هل الإعدادات مكتملة للحساب؟
     */
    public function isConfigComplete(): bool
    {
        return $this->enabled
            && $this->hawl_start_date
            && $this->nisab_gold_price > 0;
    }
}
