<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\DebtPayment;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DebtController extends Controller
{
    /**
     * Display debts list.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $type = $request->get('type', 'all'); // all, payable, receivable

        $debtsQuery = Debt::where('user_id', $user->id)
            ->with(['account', 'payments']);

        if ($type !== 'all') {
            $debtsQuery->where('type', $type);
        }

        $debts = $debtsQuery->orderBy('due_date', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        // إحصائيات
        $totalPayable = Debt::getTotalPayable($user->id);
        $totalReceivable = Debt::getTotalReceivable($user->id);
        $overdueCount = Debt::getOverdueCount($user->id);
        $dueSoon = Debt::getDueSoon($user->id, 7);

        $accounts = $user->accounts;

        return view('decision-os.debts.index', compact(
            'debts',
            'type',
            'totalPayable',
            'totalReceivable',
            'overdueCount',
            'dueSoon',
            'accounts'
        ));
    }

    /**
     * Show create debt form.
     */
    public function create(Request $request): View
    {
        $accounts = $request->user()->accounts;
        $type = $request->get('type', 'payable');

        return view('decision-os.debts.create', compact('accounts', 'type'));
    }

    /**
     * Store new debt.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'type' => 'required|in:payable,receivable',
            'party_name' => 'required|string|max:255',
            'party_contact' => 'nullable|string|max:255',
            'total_amount' => 'required|numeric|min:0.01',
            'installment_amount' => 'nullable|numeric|min:0.01',
            'start_date' => 'required|date',
            'due_date' => 'nullable|date|after_or_equal:start_date',
            'account_id' => 'nullable|exists:accounts,id',
            'currency' => 'nullable|string|max:10',
            'interest_rate' => 'nullable|numeric|min:0|max:100',
            'notes' => 'nullable|string',
            'reference_number' => 'nullable|string|max:255',
            'repayment_frequency' => 'required|in:one_time,weekly,biweekly,monthly,quarterly,yearly',
            'installments_count' => 'required|integer|min:1|max:360',
        ]);

        $debt = Debt::create([
            'user_id' => $request->user()->id,
            'type' => $request->type,
            'party_name' => $request->party_name,
            'party_contact' => $request->party_contact,
            'total_amount' => $request->total_amount,
            'installment_amount' => $request->installment_amount,
            'start_date' => $request->start_date,
            'due_date' => $request->due_date,
            'account_id' => $request->account_id,
            'currency' => $request->currency ?? $request->user()->currency,
            'interest_rate' => $request->interest_rate ?? 0,
            'notes' => $request->notes,
            'reference_number' => $request->reference_number,
            'repayment_frequency' => $request->repayment_frequency,
            'installments_count' => $request->installments_count,
        ]);

        // توليد جدول الدفعات
        $debt->generatePaymentSchedule();

        return redirect()
            ->route('decision-os.debts.show', $debt)
            ->with('success', __('app.debts.created_successfully'));
    }

    /**
     * Show debt details.
     */
    public function show(Debt $debt): View
    {
        $this->authorize('view', $debt);

        $debt->load(['account', 'payments' => function ($query) {
            $query->orderBy('due_date', 'asc');
        }]);

        $accounts = auth()->user()->accounts;

        return view('decision-os.debts.show', compact('debt', 'accounts'));
    }

    /**
     * Show edit debt form.
     */
    public function edit(Debt $debt): View
    {
        $this->authorize('update', $debt);

        $accounts = auth()->user()->accounts;

        return view('decision-os.debts.edit', compact('debt', 'accounts'));
    }

    /**
     * Update debt.
     */
    public function update(Request $request, Debt $debt): RedirectResponse
    {
        $this->authorize('update', $debt);

        $request->validate([
            'party_name' => 'required|string|max:255',
            'party_contact' => 'nullable|string|max:255',
            'due_date' => 'nullable|date',
            'account_id' => 'nullable|exists:accounts,id',
            'interest_rate' => 'nullable|numeric|min:0|max:100',
            'notes' => 'nullable|string',
            'reference_number' => 'nullable|string|max:255',
        ]);

        $debt->update($request->only([
            'party_name',
            'party_contact',
            'due_date',
            'account_id',
            'interest_rate',
            'notes',
            'reference_number',
        ]));

        return redirect()
            ->route('decision-os.debts.show', $debt)
            ->with('success', __('app.debts.updated_successfully'));
    }

    /**
     * Delete debt.
     */
    public function destroy(Debt $debt): RedirectResponse
    {
        $this->authorize('delete', $debt);

        $debt->delete();

        return redirect()
            ->route('decision-os.debts.index')
            ->with('success', __('app.debts.deleted_successfully'));
    }

    /**
     * Record a payment for debt.
     */
    public function recordPayment(Request $request, Debt $debt): RedirectResponse
    {
        $this->authorize('update', $debt);

        $request->validate([
            'payment_id' => 'required|exists:debt_payments,id',
            'account_id' => 'nullable|exists:accounts,id',
            'payment_method' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        $payment = DebtPayment::findOrFail($request->payment_id);

        if ($payment->debt_id !== $debt->id) {
            abort(403);
        }

        $payment->markAsPaid($request->account_id);

        if ($request->payment_method) {
            $payment->payment_method = $request->payment_method;
        }

        if ($request->notes) {
            $payment->notes = $request->notes;
        }

        $payment->save();

        return redirect()
            ->route('decision-os.debts.show', $debt)
            ->with('success', __('app.debts.payment_recorded'));
    }
}
