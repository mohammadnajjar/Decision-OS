<?php

namespace Tests\Feature;

use App\Models\Account;
use App\Models\Debt;
use App\Models\User;
use App\Models\ZakatPayment;
use App\Models\ZakatSetting;
use App\Services\ZakatService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ZakatCalculationTest extends TestCase
{
    use RefreshDatabase;

    private ZakatService $zakatService;
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->zakatService = new ZakatService();
        $this->user = User::factory()->create();
    }

    /**
     * Test calculating zakatable assets with accounts only
     */
    public function test_calculates_zakatable_assets_from_accounts(): void
    {
        // إنشاء حسابات زكوية
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب بنكي',
            'type' => 'bank',
            'balance' => 10000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        Account::create([
            'user_id' => $this->user->id,
            'name' => 'كاش',
            'type' => 'cash',
            'balance' => 5000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        $zakatableAssets = $this->zakatService->calculateZakatableAssets($this->user->fresh());

        $this->assertEquals(15000, $zakatableAssets);
    }

    /**
     * Test excluding non-zakatable accounts
     */
    public function test_excludes_non_zakatable_accounts(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب بنكي',
            'type' => 'bank',
            'balance' => 10000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        Account::create([
            'user_id' => $this->user->id,
            'name' => 'أدوات عمل',
            'type' => 'cash',
            'balance' => 5000,
            'currency' => 'SAR',
            'is_zakatable' => false, // غير زكوي
        ]);

        $zakatableAssets = $this->zakatService->calculateZakatableAssets($this->user->fresh());

        $this->assertEquals(10000, $zakatableAssets);
    }

    /**
     * Test deducting payable debts from zakatable assets
     */
    public function test_deducts_payable_debts(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب بنكي',
            'type' => 'bank',
            'balance' => 10000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        Debt::create([
            'user_id' => $this->user->id,
            'type' => 'payable', // دين علي
            'party_name' => 'صديق',
            'total_amount' => 2000,
            'paid_amount' => 0,
            'remaining_amount' => 2000,
            'start_date' => now(),
            'status' => 'active',
        ]);

        $zakatableAssets = $this->zakatService->calculateZakatableAssets($this->user->fresh());

        // 10000 - 2000 = 8000
        $this->assertEquals(8000, $zakatableAssets);
    }

    /**
     * Test nisab calculation
     */
    public function test_calculates_nisab_value(): void
    {
        $goldPrice = 250; // 250 ريال للغرام
        $nisabValue = $this->zakatService->getNisabValue($goldPrice);

        // 85 × 250 = 21,250
        $this->assertEquals(21250, $nisabValue);
    }

    /**
     * Test nisab reached check
     */
    public function test_checks_if_nisab_reached(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 25000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250, // النصاب = 21,250
            'hawl_start_date' => now()->subDays(100),
            'currency' => 'SAR',
        ]);

        $this->assertTrue($this->zakatService->isNisabReached($this->user->fresh()));
    }

    /**
     * Test nisab not reached
     */
    public function test_detects_below_nisab(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 5000, // أقل من النصاب
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250, // النصاب = 21,250
            'hawl_start_date' => now()->subDays(100),
            'currency' => 'SAR',
        ]);

        $this->assertFalse($this->zakatService->isNisabReached($this->user->fresh()));
    }

    /**
     * Test hawl completion (Hijri - 354 days)
     */
    public function test_detects_hawl_complete_hijri(): void
    {
        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(355), // أكثر من 354 يوم
            'calculation_method' => 'hijri_year',
            'currency' => 'SAR',
        ]);

        $this->assertTrue($this->zakatService->isHawlComplete($this->user->fresh()));
    }

    /**
     * Test hawl not complete
     */
    public function test_detects_hawl_not_complete(): void
    {
        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(100), // أقل من 354 يوم
            'calculation_method' => 'hijri_year',
            'currency' => 'SAR',
        ]);

        $this->assertFalse($this->zakatService->isHawlComplete($this->user->fresh()));
    }

    /**
     * Test zakat calculation (2.5%)
     */
    public function test_calculates_zakat_due(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 10000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        Debt::create([
            'user_id' => $this->user->id,
            'type' => 'payable',
            'party_name' => 'صديق',
            'total_amount' => 2000,
            'paid_amount' => 0,
            'remaining_amount' => 2000,
            'start_date' => now(),
            'status' => 'active',
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 70, // النصاب = 5,950
            'hawl_start_date' => now()->subDays(360),
            'calculation_method' => 'hijri_year',
            'currency' => 'SAR',
        ]);

        // الأصول = 10000 - 2000 = 8000
        // الزكاة = 8000 × 2.5% = 200
        $zakatDue = $this->zakatService->calculateZakatDue($this->user->fresh());

        $this->assertEquals(200, $zakatDue);
    }

    /**
     * Test zakat status - due
     */
    public function test_status_is_due_when_hawl_complete_and_nisab_reached(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 25000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(360),
            'calculation_method' => 'hijri_year',
            'currency' => 'SAR',
        ]);

        $status = $this->zakatService->getZakatStatus($this->user->fresh());

        $this->assertEquals(ZakatService::STATUS_DUE, $status);
    }

    /**
     * Test zakat status - approaching
     */
    public function test_status_is_approaching_when_less_than_30_days(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 25000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(330), // 354 - 330 = 24 يوم متبقي
            'calculation_method' => 'hijri_year',
            'currency' => 'SAR',
        ]);

        $status = $this->zakatService->getZakatStatus($this->user->fresh());

        $this->assertEquals(ZakatService::STATUS_APPROACHING, $status);
    }

    /**
     * Test zakat status - below nisab
     */
    public function test_status_is_below_nisab(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 5000, // أقل من النصاب
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(360),
            'calculation_method' => 'hijri_year',
            'currency' => 'SAR',
        ]);

        $status = $this->zakatService->getZakatStatus($this->user->fresh());

        $this->assertEquals(ZakatService::STATUS_BELOW_NISAB, $status);
    }

    /**
     * Test recording a payment
     */
    public function test_records_zakat_payment(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 25000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        $payment = $this->zakatService->recordPayment($this->user, [
            'amount' => 625,
            'payment_date' => now(),
            'hijri_year' => '1447',
            'recipient' => 'جمعية خيرية',
            'notes' => 'زكاة المال',
        ]);

        $this->assertDatabaseHas('zakat_payments', [
            'user_id' => $this->user->id,
            'amount' => 625,
            'hijri_year' => '1447',
        ]);

        $this->assertEquals(625, $payment->amount);
        $this->assertEquals(25000, $payment->zakatable_assets_at_payment);
    }

    /**
     * Test including receivable debts
     */
    public function test_includes_receivable_debts_when_enabled(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 10000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        Debt::create([
            'user_id' => $this->user->id,
            'type' => 'receivable', // دين لي
            'party_name' => 'صديق',
            'total_amount' => 3000,
            'paid_amount' => 0,
            'remaining_amount' => 3000,
            'start_date' => now(),
            'status' => 'active',
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(100),
            'include_receivable_debts' => true, // تفعيل احتساب الديون لي
            'currency' => 'SAR',
        ]);

        $zakatableAssets = $this->zakatService->calculateZakatableAssets($this->user->fresh());

        // 10000 + 3000 = 13000
        $this->assertEquals(13000, $zakatableAssets);
    }

    /**
     * Test excluding receivable debts by default
     */
    public function test_excludes_receivable_debts_by_default(): void
    {
        Account::create([
            'user_id' => $this->user->id,
            'name' => 'حساب',
            'type' => 'bank',
            'balance' => 10000,
            'currency' => 'SAR',
            'is_zakatable' => true,
        ]);

        Debt::create([
            'user_id' => $this->user->id,
            'type' => 'receivable',
            'party_name' => 'صديق',
            'total_amount' => 3000,
            'paid_amount' => 0,
            'remaining_amount' => 3000,
            'start_date' => now(),
            'status' => 'active',
        ]);

        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(100),
            'include_receivable_debts' => false, // افتراضي
            'currency' => 'SAR',
        ]);

        $zakatableAssets = $this->zakatService->calculateZakatableAssets($this->user->fresh());

        // الديون لي لا تُحتسب
        $this->assertEquals(10000, $zakatableAssets);
    }

    /**
     * Test days until hawl calculation
     */
    public function test_calculates_days_until_hawl(): void
    {
        ZakatSetting::create([
            'user_id' => $this->user->id,
            'enabled' => true,
            'nisab_gold_price' => 250,
            'hawl_start_date' => now()->subDays(300), // مر 300 يوم
            'calculation_method' => 'hijri_year', // 354 يوم
            'currency' => 'SAR',
        ]);

        $daysRemaining = $this->zakatService->getDaysUntilHawl($this->user->fresh());

        // 354 - 300 = 54 يوم متبقي
        $this->assertEquals(54, $daysRemaining);
    }
}
