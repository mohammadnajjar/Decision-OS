<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class IncomeController extends Controller
{
    /**
     * Display incomes list.
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        $incomes = Income::where('user_id', $user->id)
            ->with('account')
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $monthTotal = Income::getMonthTotal($user->id);
        $totalSinceStart = Income::getTotalSinceStart($user->id);

        $accounts = $user->accounts;

        return view('decision-os.incomes.index', compact(
            'incomes',
            'monthTotal',
            'totalSinceStart',
            'accounts'
        ));
    }

    /**
     * Show create form.
     */
    public function create(): View
    {
        return view('decision-os.incomes.create');
    }

    /**
     * Store a new income.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'account_id' => 'nullable|exists:accounts,id',
            'date' => 'required|date',
            'source' => 'nullable|string|max:255',
            'note' => 'nullable|string|max:255',
        ]);

        $income = Income::create([
            'user_id' => $request->user()->id,
            'account_id' => $request->account_id,
            'amount' => $request->amount,
            'date' => $request->date,
            'source' => $request->source,
            'note' => $request->note,
        ]);

        // تحديث رصيد الحساب إذا تم تحديده
        if ($income->account_id) {
            $income->account->updateBalance($income->amount, 'income');
        }

        return redirect()
            ->route('decision-os.incomes.index')
            ->with('success', 'تم إضافة الدخل ✓');
    }

    /**
     * Delete an income.
     */
    public function destroy(Request $request, Income $income): RedirectResponse
    {
        if ($income->user_id !== $request->user()->id) {
            abort(403);
        }

        $income->delete();

        return back()->with('success', 'تم حذف الدخل');
    }
}
