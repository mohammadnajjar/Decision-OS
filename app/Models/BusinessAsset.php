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
     * يفتح فقط إذا: Discipline = Green AND Financial Safety = Green or Yellow
     */
    public static function isModuleUnlocked(int $userId): bool
    {
        $user = User::find($userId);
        if (!$user) {
            return false;
        }

        $statusService = app(\App\Services\StatusService::class);

        $disciplineStatus = $statusService->getModuleStatus($user, 'life_discipline');
        $financialStatus = $statusService->getModuleStatus($user, 'financial_safety');

        // Discipline must be Green, Financial must be Green or Yellow
        $disciplineOk = $disciplineStatus === 'green';
        $financialOk = in_array($financialStatus, ['green', 'yellow']);

        return $disciplineOk && $financialOk;
    }

    /**
     * رسالة القفل
     */
    public static function getLockMessage(int $userId): ?string
    {
        if (self::isModuleUnlocked($userId)) {
            return null;
        }

        $user = User::find($userId);
        if (!$user) {
            return 'المستخدم غير موجود';
        }

        $statusService = app(\App\Services\StatusService::class);
        $disciplineStatus = $statusService->getModuleStatus($user, 'life_discipline');
        $financialStatus = $statusService->getModuleStatus($user, 'financial_safety');

        $statusLabels = ['green' => 'أخضر', 'yellow' => 'أصفر', 'red' => 'أحمر'];
        $messages = [];

        if ($disciplineStatus !== 'green') {
            $messages[] = 'الانضباط يجب أن يكون أخضر (حالياً: ' . ($statusLabels[$disciplineStatus] ?? $disciplineStatus) . ')';
        }

        if ($financialStatus === 'red') {
            $messages[] = 'الأمان المالي لا يجب أن يكون أحمر (حالياً: ' . ($statusLabels[$financialStatus] ?? $financialStatus) . ')';
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
