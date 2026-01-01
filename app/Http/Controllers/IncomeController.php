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
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $monthTotal = Income::getMonthTotal($user->id);
        $totalSinceStart = Income::getTotalSinceStart($user->id);

        return view('decision-os.incomes.index', compact(
            'incomes',
            'monthTotal',
            'totalSinceStart'
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
            'date' => 'required|date',
            'source' => 'nullable|string|max:255',
            'note' => 'nullable|string|max:255',
        ]);

        Income::create([
            'user_id' => $request->user()->id,
            'amount' => $request->amount,
            'date' => $request->date,
            'source' => $request->source,
            'note' => $request->note,
        ]);

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
