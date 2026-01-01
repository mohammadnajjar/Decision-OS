<?php

namespace App\Services;

use App\Models\Account;
use App\Models\Debt;
use App\Models\User;
use App\Models\ZakatPayment;
use App\Models\ZakatSetting;
use Carbon\Carbon;

class ZakatService
{
    /**
     * ثوابت الزكاة
     */
    public const ZAKAT_RATE = 0.025; // 2.5%
    public const NISAB_GOLD_GRAMS = 85; // 85 غرام ذهب
    public const APPROACHING_DAYS = 30; // أيام التنبيه قبل الحول

    /**
     * حالات الزكاة
     */
    public const STATUS_NOT_APPLICABLE = 'not_applicable'; // الإعدادات غير مكتملة
    public const STATUS_BELOW_NISAB = 'below_nisab'; // تحت النصاب
    public const STATUS_NOT_DUE = 'not_due'; // لم يحل الحول
    public const STATUS_APPROACHING = 'approaching'; // اقترب الحول
    public const STATUS_DUE = 'due'; // واجبة

    /**
     * حساب الأصول الزكوية للمستخدم
     * = مجموع أرصدة الحسابات الزكوية - الديون المستحقة علي
     */
    public function calculateZakatableAssets(User $user): float
    {
        $settings = $user->zakatSetting;

        // مجموع أرصدة الحسابات الزكوية
        $zakatableBalance = Account::getZakatableBalanceForUser($user->id);

        // خصم الديون المستحقة علي (payable)
        $payableDebts = Debt::where('user_id', $user->id)
            ->where('type', 'payable')
            ->where('status', '!=', 'fully_paid')
            ->sum('remaining_amount');

        $total = $zakatableBalance - $payableDebts;

        // إضافة الديون المستحقة لي (receivable) إذا تم تفعيل الخيار
        if ($settings && $settings->include_receivable_debts) {
            $receivableDebts = Debt::where('user_id', $user->id)
                ->where('type', 'receivable')
                ->where('status', '!=', 'fully_paid')
                ->sum('remaining_amount');
            $total += $receivableDebts;
        }

        return max(0, (float) $total);
    }

    /**
     * حساب قيمة النصاب
     */
    public function getNisabValue(float $goldPrice): float
    {
        return $goldPrice * self::NISAB_GOLD_GRAMS;
    }

    /**
     * فحص بلوغ النصاب
     */
    public function isNisabReached(User $user): bool
    {
        $settings = $user->zakatSetting;
        if (!$settings || !$settings->nisab_gold_price) {
            return false;
        }

        $zakatableAssets = $this->calculateZakatableAssets($user);
        $nisabValue = $this->getNisabValue($settings->nisab_gold_price);

        return $zakatableAssets >= $nisabValue;
    }

    /**
     * فحص مرور الحول
     */
    public function isHawlComplete(User $user): bool
    {
        $settings = $user->zakatSetting;
        if (!$settings || !$settings->hawl_start_date) {
            return false;
        }

        return $settings->isHawlComplete();
    }

    /**
     * حساب الأيام المتبقية للحول
     */
    public function getDaysUntilHawl(User $user): int
    {
        $settings = $user->zakatSetting;
        if (!$settings) {
            return 0;
        }

        return $settings->days_until_hawl;
    }

    /**
     * حساب الزكاة المستحقة
     * إذا تحققت الشروط: zakatableAssets × 2.5%
     */
    public function calculateZakatDue(User $user): ?float
    {
        $status = $this->getZakatStatus($user);

        // الزكاة تُحسب فقط إذا كانت مستحقة أو قريبة
        if (!in_array($status, [self::STATUS_DUE, self::STATUS_APPROACHING, self::STATUS_NOT_DUE])) {
            return null;
        }

        $zakatableAssets = $this->calculateZakatableAssets($user);

        // لا زكاة إذا تحت النصاب
        if (!$this->isNisabReached($user)) {
            return null;
        }

        return round($zakatableAssets * self::ZAKAT_RATE, 2);
    }

    /**
     * الحصول على حالة الزكاة
     */
    public function getZakatStatus(User $user): string
    {
        $settings = $user->zakatSetting;

        // الإعدادات غير مكتملة
        if (!$settings || !$settings->isConfigComplete()) {
            return self::STATUS_NOT_APPLICABLE;
        }

        // تحت النصاب
        if (!$this->isNisabReached($user)) {
            return self::STATUS_BELOW_NISAB;
        }

        // فحص الحول
        $daysRemaining = $this->getDaysUntilHawl($user);

        // حل الحول
        if ($daysRemaining <= 0) {
            return self::STATUS_DUE;
        }

        // اقترب الحول (30 يوم أو أقل)
        if ($daysRemaining <= self::APPROACHING_DAYS) {
            return self::STATUS_APPROACHING;
        }

        return self::STATUS_NOT_DUE;
    }

    /**
     * الحصول على بيانات الزكاة الكاملة
     */
    public function getZakatData(User $user): array
    {
        $settings = $user->zakatSetting;
        $status = $this->getZakatStatus($user);

        $data = [
            'status' => $status,
            'status_label' => $this->getStatusLabel($status),
            'status_color' => $this->getStatusColor($status),
            'enabled' => $settings?->enabled ?? false,
            'is_config_complete' => $settings?->isConfigComplete() ?? false,
        ];

        if ($settings && $settings->isConfigComplete()) {
            $zakatableAssets = $this->calculateZakatableAssets($user);
            $nisabValue = $this->getNisabValue($settings->nisab_gold_price);

            $data = array_merge($data, [
                'zakatable_assets' => $zakatableAssets,
                'nisab_value' => $nisabValue,
                'nisab_reached' => $zakatableAssets >= $nisabValue,
                'zakat_due' => $this->calculateZakatDue($user),
                'days_until_hawl' => $this->getDaysUntilHawl($user),
                'hawl_start_date' => $settings->hawl_start_date?->format('Y-m-d'),
                'hawl_end_date' => $settings->hawl_start_date?->copy()->addDays($settings->hawl_days)->format('Y-m-d'),
                'gold_price' => $settings->nisab_gold_price,
                'gold_price_updated_at' => $settings->gold_price_updated_at?->format('Y-m-d'),
                'currency' => $settings->currency,
                'calculation_method' => $settings->calculation_method,
            ]);

            // تفصيل الأصول
            $data['assets_breakdown'] = $this->getAssetsBreakdown($user);
        }

        // آخر دفعة
        $lastPayment = ZakatPayment::getLastPaymentForUser($user->id);
        $data['last_payment'] = $lastPayment ? [
            'amount' => $lastPayment->amount,
            'date' => $lastPayment->payment_date->format('Y-m-d'),
        ] : null;

        // مجموع دفعات السنة
        $data['total_paid_this_year'] = ZakatPayment::getTotalThisYear($user->id);

        return $data;
    }

    /**
     * تفصيل الأصول الزكوية
     */
    public function getAssetsBreakdown(User $user): array
    {
        $settings = $user->zakatSetting;

        // الحسابات الزكوية
        $accounts = Account::where('user_id', $user->id)
            ->zakatable()
            ->select('id', 'name', 'type', 'balance', 'currency')
            ->get()
            ->map(fn($acc) => [
                'name' => $acc->name,
                'type' => $acc->type,
                'amount' => (float) $acc->balance,
                'currency' => $acc->currency,
            ])
            ->toArray();

        // الديون علي (خصم)
        $payableDebts = Debt::where('user_id', $user->id)
            ->where('type', 'payable')
            ->where('status', '!=', 'fully_paid')
            ->select('id', 'party_name', 'remaining_amount')
            ->get()
            ->map(fn($debt) => [
                'name' => $debt->party_name,
                'amount' => -1 * (float) $debt->remaining_amount,
                'type' => 'debt_payable',
            ])
            ->toArray();

        $breakdown = [
            'accounts' => $accounts,
            'debts_payable' => $payableDebts,
            'debts_receivable' => [],
        ];

        // الديون لي (إذا مفعل)
        if ($settings && $settings->include_receivable_debts) {
            $breakdown['debts_receivable'] = Debt::where('user_id', $user->id)
                ->where('type', 'receivable')
                ->where('status', '!=', 'fully_paid')
                ->select('id', 'party_name', 'remaining_amount')
                ->get()
                ->map(fn($debt) => [
                    'name' => $debt->party_name,
                    'amount' => (float) $debt->remaining_amount,
                    'type' => 'debt_receivable',
                ])
                ->toArray();
        }

        return $breakdown;
    }

    /**
     * تسجيل دفعة زكاة
     */
    public function recordPayment(User $user, array $data): ZakatPayment
    {
        $zakatableAssets = $this->calculateZakatableAssets($user);

        return ZakatPayment::create([
            'user_id' => $user->id,
            'amount' => $data['amount'],
            'payment_date' => $data['payment_date'] ?? now(),
            'hijri_year' => $data['hijri_year'] ?? null,
            'zakatable_assets_at_payment' => $zakatableAssets,
            'recipient' => $data['recipient'] ?? null,
            'notes' => $data['notes'] ?? null,
        ]);
    }

    /**
     * تحديث تاريخ بداية الحول (عند بلوغ النصاب)
     */
    public function updateHawlStartDate(User $user): void
    {
        $settings = $user->getOrCreateZakatSetting();

        if ($this->isNisabReached($user) && !$settings->hawl_start_date) {
            $settings->update([
                'hawl_start_date' => now(),
            ]);
        }
    }

    /**
     * إعادة تعيين الحول بعد الدفع الكامل
     */
    public function resetHawlAfterPayment(User $user): void
    {
        $settings = $user->zakatSetting;
        if ($settings) {
            $settings->update([
                'hawl_start_date' => now(),
            ]);
        }
    }

    /**
     * الحصول على عنوان الحالة
     */
    private function getStatusLabel(string $status): string
    {
        return match ($status) {
            self::STATUS_NOT_APPLICABLE => __('zakat.status.not_applicable'),
            self::STATUS_BELOW_NISAB => __('zakat.status.below_nisab'),
            self::STATUS_NOT_DUE => __('zakat.status.not_due'),
            self::STATUS_APPROACHING => __('zakat.status.approaching'),
            self::STATUS_DUE => __('zakat.status.due'),
            default => __('zakat.status.unknown'),
        };
    }

    /**
     * الحصول على لون الحالة
     */
    private function getStatusColor(string $status): string
    {
        return match ($status) {
            self::STATUS_NOT_APPLICABLE => 'secondary',
            self::STATUS_BELOW_NISAB => 'success',
            self::STATUS_NOT_DUE => 'success',
            self::STATUS_APPROACHING => 'warning',
            self::STATUS_DUE => 'danger',
            default => 'secondary',
        };
    }
}
