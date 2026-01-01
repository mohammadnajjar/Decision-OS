<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ExpenseController extends Controller
{
    /**
     * Display expenses list.
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        $expenses = Expense::where('user_id', $user->id)
            ->with(['category', 'account'])
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $todayTotal = Expense::getTodayTotal($user->id);
        $weekTotal = Expense::getWeekTotal($user->id);
        $monthTotal = Expense::getMonthTotal($user->id);
        $topCategory = Expense::getTopCategoryThisWeek($user->id);

        $categories = ExpenseCategory::where(function ($q) use ($user) {
            $q->whereNull('user_id')->orWhere('user_id', $user->id);
        })->orderBy('sort_order')->get();

        $accounts = $user->accounts;

        return view('decision-os.expenses.index', compact(
            'expenses',
            'todayTotal',
            'weekTotal',
            'monthTotal',
            'topCategory',
            'categories',
            'accounts'
        ));
    }

    /**
     * Show create form.
     */
    public function create(Request $request): View
    {
        $categories = ExpenseCategory::where(function ($q) use ($request) {
            $q->whereNull('user_id')->orWhere('user_id', $request->user()->id);
        })->orderBy('sort_order')->get();

        $accounts = $request->user()->accounts;

        return view('decision-os.expenses.create', compact('categories', 'accounts'));
    }

    /**
     * Store a new expense.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'expense_category_id' => 'required|exists:expense_categories,id',
            'account_id' => 'nullable|exists:accounts,id',
            'date' => 'required|date',
            'note' => 'nullable|string|max:255',
            'payment_method' => 'nullable|in:cash,card,other',
        ]);

        $expense = Expense::create([
            'user_id' => $request->user()->id,
            'expense_category_id' => $request->expense_category_id,
            'account_id' => $request->account_id,
            'amount' => $request->amount,
            'date' => $request->date,
            'note' => $request->note,
            'payment_method' => $request->payment_method ?? 'cash',
        ]);

        // تحديث رصيد الحساب إذا تم تحديده
        if ($expense->account_id) {
            $expense->account->updateBalance($expense->amount, 'expense');
        }

        return redirect()
            ->route('decision-os.expenses.index')
            ->with('success', 'تم إضافة المصروف ✓');
    }

    /**
     * Delete an expense.
     */
    public function destroy(Request $request, Expense $expense): RedirectResponse
    {
        if ($expense->user_id !== $request->user()->id) {
            abort(403);
        }

        $expense->delete();

        return back()->with('success', 'تم حذف المصروف');
    }

    /**
     * Quick add expense (AJAX).
     */
    public function quickStore(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'expense_category_id' => 'required|exists:expense_categories,id',
            'account_id' => 'nullable|exists:accounts,id',
        ]);

        $expense = Expense::create([
            'user_id' => $request->user()->id,
            'expense_category_id' => $request->expense_category_id,
            'account_id' => $request->account_id,
            'amount' => $request->amount,
            'date' => today(),
            'note' => $request->note,
            'payment_method' => $request->payment_method ?? 'cash',
        ]);

        // تحديث رصيد الحساب
        if ($expense->account_id) {
            $expense->account->updateBalance($expense->amount, 'expense');
        }

        return response()->json([
            'success' => true,
            'expense' => $expense->load('category'),
            'todayTotal' => Expense::getTodayTotal($request->user()->id),
        ]);
    }
}
