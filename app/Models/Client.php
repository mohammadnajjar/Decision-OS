<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'company',
        'total_revenue',
        'late_payments',
        'effort_score',
        'communication_score',
        'status',
        'notes',
    ];

    protected $casts = [
        'total_revenue' => 'decimal:2',
    ];

    /**
     * العلاقة مع المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * مشاريع العميل
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    /**
     * حساب حالة العميل تلقائياً
     */
    public function calculateStatus(): string
    {
        $score = 0;

        // Late payments
        if ($this->late_payments >= 3) $score += 3;
        elseif ($this->late_payments >= 1) $score += 1;

        // Effort score (عكسي - كلما زاد الجهد كان أسوأ)
        if ($this->effort_score >= 4) $score += 2;
        elseif ($this->effort_score >= 3) $score += 1;

        // Communication score (عكسي)
        if ($this->communication_score <= 2) $score += 2;
        elseif ($this->communication_score <= 3) $score += 1;

        // Revenue factor
        if ($this->total_revenue < 500) $score += 1;

        if ($score >= 5) return 'red';
        if ($score >= 3) return 'yellow';
        return 'green';
    }

    /**
     * تحديث الحالة
     */
    public function updateStatus(): void
    {
        $this->status = $this->calculateStatus();
        $this->save();
    }

    /**
     * تحديث إجمالي الإيرادات من المشاريع
     */
    public function updateTotalRevenue(): void
    {
        $this->total_revenue = $this->projects()->sum('total_revenue');
        $this->save();
    }

    /**
     * العملاء بحالة معينة
     */
    public function scopeByStatus($query, string $status)
    {
        return $query->where('status', $status);
    }

    /**
     * العملاء الإشكاليين
     */
    public function scopeProblematic($query)
    {
        return $query->whereIn('status', ['yellow', 'red']);
    }

    /**
     * الحصول على Insight للعميل
     */
    public function getInsight(): ?string
    {
        if ($this->status === 'red') {
            return "⚠️ عميل {$this->name} يستنزف وقتك ومجهودك";
        }

        if ($this->late_payments >= 2) {
            return "💰 عميل {$this->name} لديه {$this->late_payments} تأخيرات في الدفع";
        }

        if ($this->effort_score >= 4 && $this->total_revenue < 1000) {
            return "⏱️ عميل {$this->name}: جهد عالي مقابل إيراد منخفض";
        }

        return null;
    }
}
