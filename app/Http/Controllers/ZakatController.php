<?php

namespace App\Http\Controllers;

use App\Models\ZakatPayment;
use App\Models\ZakatSetting;
use App\Services\ZakatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZakatController extends Controller
{
    private ZakatService $zakatService;

    public function __construct(ZakatService $zakatService)
    {
        $this->zakatService = $zakatService;
    }

    /**
     * لوحة الزكاة الرئيسية
     */
    public function dashboard()
    {
        $user = Auth::user();
        $zakatData = $this->zakatService->getZakatData($user);
        $settings = $user->zakatSetting;
        
        return view('decision-os.zakat.dashboard', [
            'zakatData' => $zakatData,
            'settings' => $settings,
            'currencies' => config('decisionos.currencies', ['SAR', 'USD', 'AED', 'EUR']),
        ]);
    }

    /**
     * صفحة إعدادات الزكاة
     */
    public function settings()
    {
        $user = Auth::user();
        $settings = $user->zakatSetting ?? new ZakatSetting([
            'currency' => $user->currency ?? 'SAR',
            'calculation_method' => 'hijri_year',
        ]);
        
        return view('decision-os.zakat.settings', [
            'settings' => $settings,
            'currencies' => config('decisionos.currencies', ['SAR', 'USD', 'AED', 'EUR']),
        ]);
    }

    /**
     * تحديث إعدادات الزكاة
     */
    public function updateSettings(Request $request)
    {
        $user = Auth::user();
        
        $validated = $request->validate([
            'enabled' => 'boolean',
            'hawl_start_date' => 'nullable|date',
            'nisab_gold_price' => 'nullable|numeric|min:0',
            'currency' => 'required|string|max:10',
            'calculation_method' => 'required|in:hijri_year,gregorian_year',
            'include_receivable_debts' => 'boolean',
            'notes' => 'nullable|string|max:1000',
        ]);
        
        $settings = $user->getOrCreateZakatSetting();
        
        $settings->update([
            'enabled' => $validated['enabled'] ?? false,
            'hawl_start_date' => $validated['hawl_start_date'] ?? null,
            'nisab_gold_price' => $validated['nisab_gold_price'] ?? null,
            'gold_price_updated_at' => $validated['nisab_gold_price'] ? now() : null,
            'currency' => $validated['currency'],
            'calculation_method' => $validated['calculation_method'],
            'include_receivable_debts' => $validated['include_receivable_debts'] ?? false,
            'notes' => $validated['notes'] ?? null,
        ]);
        
        return redirect()->route('zakat.settings')
            ->with('success', __('zakat.settings_saved'));
    }

    /**
     * سجل دفعات الزكاة
     */
    public function history()
    {
        $user = Auth::user();
        $payments = ZakatPayment::getHistoryForUser($user->id, 50);
        $totalPaidThisYear = ZakatPayment::getTotalThisYear($user->id);
        
        return view('decision-os.zakat.history', [
            'payments' => $payments,
            'totalPaidThisYear' => $totalPaidThisYear,
            'currency' => $user->zakatSetting?->currency ?? $user->currency ?? 'SAR',
        ]);
    }

    /**
     * تسجيل دفعة زكاة
     */
    public function recordPayment(Request $request)
    {
        $user = Auth::user();
        
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'payment_date' => 'required|date',
            'hijri_year' => 'nullable|string|max:10',
            'recipient' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:1000',
            'reset_hawl' => 'boolean',
        ]);
        
        $payment = $this->zakatService->recordPayment($user, $validated);
        
        // إعادة تعيين الحول إذا طُلب
        if ($request->boolean('reset_hawl', true)) {
            $this->zakatService->resetHawlAfterPayment($user);
        }
        
        return redirect()->route('zakat.history')
            ->with('success', __('zakat.payment_recorded'));
    }

    /**
     * حذف دفعة زكاة
     */
    public function deletePayment(ZakatPayment $payment)
    {
        $user = Auth::user();
        
        // التحقق من الملكية
        if ($payment->user_id !== $user->id) {
            abort(403);
        }
        
        $payment->delete();
        
        return redirect()->route('zakat.history')
            ->with('success', __('zakat.payment_deleted'));
    }

    /**
     * API: الحصول على بيانات الزكاة
     */
    public function getZakatData()
    {
        $user = Auth::user();
        $zakatData = $this->zakatService->getZakatData($user);
        
        return response()->json([
            'success' => true,
            'data' => $zakatData,
        ]);
    }

    /**
     * تحديث سعر الذهب فقط
     */
    public function updateGoldPrice(Request $request)
    {
        $user = Auth::user();
        
        $validated = $request->validate([
            'nisab_gold_price' => 'required|numeric|min:0',
        ]);
        
        $settings = $user->getOrCreateZakatSetting();
        $settings->update([
            'nisab_gold_price' => $validated['nisab_gold_price'],
            'gold_price_updated_at' => now(),
        ]);
        
        return response()->json([
            'success' => true,
            'nisab_value' => $settings->nisab_value,
            'updated_at' => $settings->gold_price_updated_at->format('Y-m-d'),
        ]);
    }
}
