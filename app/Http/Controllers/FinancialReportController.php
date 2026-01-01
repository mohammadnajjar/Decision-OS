<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinancialReportController extends Controller
{
    /**
     * عرض التقارير المالية حسب الفئات
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $period = $request->get('period', 'month'); // day, week, month, year

        // تحديد نطاق التاريخ
        $dates = $this->getDateRange($period);

        // تقرير المصاريف حسب الفئة
        $expensesByCategory = Expense::where('user_id', $user->id)
            ->whereBetween('date', [$dates['start'], $dates['end']])
            ->select('expense_category_id', DB::raw('SUM(amount) as total'))
            ->with('category')
            ->groupBy('expense_category_id')
            ->orderByDesc('total')
            ->get();

        // تقرير الاستثمارات (فئات is_investment=true)
        $investments = Expense::where('user_id', $user->id)
            ->whereBetween('date', [$dates['start'], $dates['end']])
            ->whereHas('category', function($q) {
                $q->where('is_investment', true);
            })
            ->select('expense_category_id', DB::raw('SUM(amount) as total'), DB::raw('COUNT(*) as count'))
            ->with('category')
            ->groupBy('expense_category_id')
            ->get();

        // تقرير حسب الحساب المالي
        $expensesByAccount = Expense::where('user_id', $user->id)
            ->whereBetween('date', [$dates['start'], $dates['end']])
            ->whereNotNull('account_id')
            ->select('account_id', DB::raw('SUM(amount) as total'))
            ->with('account')
            ->groupBy('account_id')
            ->get();

        $incomesByAccount = Income::where('user_id', $user->id)
            ->whereBetween('date', [$dates['start'], $dates['end']])
            ->whereNotNull('account_id')
            ->select('account_id', DB::raw('SUM(amount) as total'))
            ->with('account')
            ->groupBy('account_id')
            ->get();

        // إحصائيات عامة
        $totalExpenses = $expensesByCategory->sum('total');
        $totalInvestments = $investments->sum('total');
        $totalIncome = Income::where('user_id', $user->id)
            ->whereBetween('date', [$dates['start'], $dates['end']])
            ->sum('amount');

        $netBalance = $totalIncome - $totalExpenses;

        return view('decision-os.reports.financial', compact(
            'expensesByCategory',
            'investments',
            'expensesByAccount',
            'incomesByAccount',
            'totalExpenses',
            'totalInvestments',
            'totalIncome',
            'netBalance',
            'period',
            'dates'
        ));
    }

    /**
     * الحصول على نطاق التواريخ حسب الفترة
     */
    private function getDateRange($period)
    {
        return match($period) {
            'day' => [
                'start' => today(),
                'end' => today(),
                'label' => 'اليوم'
            ],
            'week' => [
                'start' => now()->startOfWeek(),
                'end' => now()->endOfWeek(),
                'label' => 'هذا الأسبوع'
            ],
            'month' => [
                'start' => now()->startOfMonth(),
                'end' => now()->endOfMonth(),
                'label' => 'هذا الشهر'
            ],
            'year' => [
                'start' => now()->startOfYear(),
                'end' => now()->endOfYear(),
                'label' => 'هذا العام'
            ],
            default => [
                'start' => now()->startOfMonth(),
                'end' => now()->endOfMonth(),
                'label' => 'هذا الشهر'
            ]
        };
    }
}
