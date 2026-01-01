<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ExpenseCategoryController extends Controller
{
    /**
     * Display categories list.
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        $categories = ExpenseCategory::where(function ($q) use ($user) {
            $q->whereNull('user_id')->orWhere('user_id', $user->id);
        })->orderBy('sort_order')->get();

        return view('decision-os.expense-categories.index', compact('categories'));
    }

    /**
     * Show create form.
     */
    public function create(): View
    {
        return view('decision-os.expense-categories.create');
    }

    /**
     * Store a new category.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:10',
            'color' => 'nullable|string|max:20',
        ]);

        $maxOrder = ExpenseCategory::where(function ($q) use ($request) {
            $q->whereNull('user_id')->orWhere('user_id', $request->user()->id);
        })->max('sort_order') ?? 0;

        ExpenseCategory::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'icon' => $request->icon ?? '📁',
            'color' => $request->color ?? '#607D8B',
            'sort_order' => $maxOrder + 1,
        ]);

        return redirect()
            ->route('decision-os.expense-categories.index')
            ->with('success', 'تم إضافة الفئة ✓');
    }

    /**
     * Show edit form.
     */
    public function edit(Request $request, ExpenseCategory $expenseCategory): View
    {
        // Can only edit own categories
        if ($expenseCategory->user_id !== null && $expenseCategory->user_id !== $request->user()->id) {
            abort(403);
        }

        return view('decision-os.expense-categories.edit', ['category' => $expenseCategory]);
    }

    /**
     * Update a category.
     */
    public function update(Request $request, ExpenseCategory $expenseCategory): RedirectResponse
    {
        if ($expenseCategory->user_id !== null && $expenseCategory->user_id !== $request->user()->id) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:10',
            'color' => 'nullable|string|max:20',
        ]);

        $expenseCategory->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'color' => $request->color,
        ]);

        return redirect()
            ->route('decision-os.expense-categories.index')
            ->with('success', 'تم تحديث الفئة ✓');
    }

    /**
     * Delete a category.
     */
    public function destroy(Request $request, ExpenseCategory $expenseCategory): RedirectResponse
    {
        // Cannot delete system categories
        if ($expenseCategory->is_system) {
            return back()->with('error', 'لا يمكن حذف هذه الفئة');
        }

        // Can only delete own categories
        if ($expenseCategory->user_id !== null && $expenseCategory->user_id !== $request->user()->id) {
            abort(403);
        }

        $expenseCategory->delete();

        return back()->with('success', 'تم حذف الفئة');
    }
}
