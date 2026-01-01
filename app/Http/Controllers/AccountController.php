<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * عرض جميع الحسابات
     */
    public function index()
    {
        $accounts = auth()->user()->accounts()->latest()->get();

        $totalBalance = $accounts->sum('balance');
        $bankAccounts = $accounts->where('type', 'bank');
        $cashAccounts = $accounts->where('type', 'cash');
        $ewallets = $accounts->where('type', 'ewallet');

        return view('decision-os.accounts.index', compact(
            'accounts',
            'totalBalance',
            'bankAccounts',
            'cashAccounts',
            'ewallets'
        ));
    }

    /**
     * عرض صفحة إضافة حساب جديد
     */
    public function create()
    {
        return view('decision-os.accounts.create');
    }

    /**
     * حفظ حساب جديد
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:bank,cash,ewallet',
            'balance' => 'required|numeric|min:0',
            'currency' => 'nullable|string|max:5',
            'icon' => 'nullable|string|max:50',
            'color' => 'nullable|string|max:20',
            'is_default' => 'nullable|boolean',
            'notes' => 'nullable|string',
        ]);

        // إذا كان الحساب افتراضي، إلغاء التفعيل من باقي الحسابات
        if ($request->is_default) {
            auth()->user()->accounts()->update(['is_default' => false]);
        }

        $validated['user_id'] = auth()->id();
        $validated['currency'] = $validated['currency'] ?? auth()->user()->currency;

        Account::create($validated);

        return redirect()->route('decision-os.accounts.index')
            ->with('success', __('app.accounts.created_successfully'));
    }

    /**
     * عرض صفحة تعديل الحساب
     */
    public function edit(Account $account)
    {
        // التأكد من أن الحساب يعود للمستخدم الحالي
        if ($account->user_id !== auth()->id()) {
            abort(403);
        }

        return view('decision-os.accounts.edit', compact('account'));
    }

    /**
     * تحديث الحساب
     */
    public function update(Request $request, Account $account)
    {
        if ($account->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:bank,cash,ewallet',
            'balance' => 'required|numeric|min:0',
            'currency' => 'nullable|string|max:5',
            'icon' => 'nullable|string|max:50',
            'color' => 'nullable|string|max:20',
            'is_default' => 'nullable|boolean',
            'notes' => 'nullable|string',
        ]);

        if ($request->is_default) {
            auth()->user()->accounts()->update(['is_default' => false]);
        }

        $account->update($validated);

        return redirect()->route('decision-os.accounts.index')
            ->with('success', __('app.accounts.updated_successfully'));
    }

    /**
     * حذف الحساب
     */
    public function destroy(Account $account)
    {
        if ($account->user_id !== auth()->id()) {
            abort(403);
        }

        $account->delete();

        return redirect()->route('decision-os.accounts.index')
            ->with('success', __('app.accounts.deleted_successfully'));
    }
}
