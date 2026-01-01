<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessAsset extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'description',
        'active_clients',
        'mrr',
        'contracts_signed',
        'systems_deployed',
        'status',
    ];

    protected $casts = [
        'active_clients' => 'integer',
        'mrr' => 'decimal:2',
        'contracts_signed' => 'integer',
        'systems_deployed' => 'integer',
    ];

    /**
     * العلاقة مع المستخدم
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * أنواع الأصول
     */
    public static function typeLabels(): array
    {
        return [
            'product' => 'منتج',
            'service' => 'خدمة',
            'saas' => 'SaaS',
            'content' => 'محتوى',
            'other' => 'آخر',
        ];
    }

    /**
     * حالات الأصل
     */
    public static function statusLabels(): array
    {
        return [
            'active' => 'نشط',
            'paused' => 'متوقف',
            'planning' => 'تخطيط',
        ];
    }

    /**
     * ألوان الحالات
     */
    public static function statusColors(): array
    {
        return [
            'active' => 'success',
            'paused' => 'warning',
            'planning' => 'secondary',
        ];
    }

    /**
     * التحقق من إمكانية فتح هذا الـ Module
     * يفتح فقط إذا: Discipline ≥ 70% AND Financial Safety ≥ 60%
     */
    public static function isModuleUnlocked(int $userId): bool
    {
        $statusService = app(\App\Services\StatusService::class);

        $disciplineStatus = $statusService->calculateModuleStatus('discipline', $userId);
        $financialStatus = $statusService->calculateModuleStatus('financial_safety', $userId);

        $disciplinePercent = $disciplineStatus['percentage'] ?? 0;
        $financialPercent = $financialStatus['percentage'] ?? 0;

        return $disciplinePercent >= 70 && $financialPercent >= 60;
    }

    /**
     * رسالة القفل
     */
    public static function getLockMessage(int $userId): ?string
    {
        if (self::isModuleUnlocked($userId)) {
            return null;
        }

        $statusService = app(\App\Services\StatusService::class);
        $disciplineStatus = $statusService->calculateModuleStatus('discipline', $userId);
        $financialStatus = $statusService->calculateModuleStatus('financial_safety', $userId);

        $messages = [];

        if (($disciplineStatus['percentage'] ?? 0) < 70) {
            $messages[] = 'الانضباط يجب أن يكون ≥ 70% (حالياً: ' . ($disciplineStatus['percentage'] ?? 0) . '%)';
        }

        if (($financialStatus['percentage'] ?? 0) < 60) {
            $messages[] = 'الأمان المالي يجب أن يكون ≥ 60% (حالياً: ' . ($financialStatus['percentage'] ?? 0) . '%)';
        }

        return implode(' | ', $messages);
    }

    /**
     * إجمالي MRR للمستخدم
     */
    public static function getTotalMrr(int $userId): float
    {
        return (float) self::where('user_id', $userId)
            ->where('status', 'active')
            ->sum('mrr');
    }

    /**
     * عدد العملاء النشطين
     */
    public static function getTotalActiveClients(int $userId): int
    {
        return self::where('user_id', $userId)
            ->where('status', 'active')
            ->sum('active_clients');
    }

    /**
     * عدد العقود الموقعة
     */
    public static function getTotalContracts(int $userId): int
    {
        return self::where('user_id', $userId)
            ->sum('contracts_signed');
    }
}
