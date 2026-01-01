<?php

namespace App\Http\Controllers;

use App\Models\YearlyGoal;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class YearlyGoalController extends Controller
{
    /**
     * Display yearly goals.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $year = $request->get('year', now()->year);
        $category = $request->get('category');
        $month = $request->get('month'); // Filter by target month

        $query = YearlyGoal::where('user_id', $user->id)
            ->where('year', $year)
            ->orderBy('category')
            ->orderByDesc('priority');

        if ($category) {
            $query->where('category', $category);
        }

        // Filter by target month
        if ($month) {
            $query->whereMonth('target_date', $month);
        }

        $goals = $query->get()->groupBy('category');

        // Stats
        $stats = [
            'total' => YearlyGoal::where('user_id', $user->id)->where('year', $year)->count(),
            'completed' => YearlyGoal::where('user_id', $user->id)->where('year', $year)->where('status', 'completed')->count(),
            'in_progress' => YearlyGoal::where('user_id', $user->id)->where('year', $year)->where('status', 'in_progress')->count(),
            'avg_progress' => round(YearlyGoal::where('user_id', $user->id)->where('year', $year)->avg('progress') ?? 0),
        ];

        $categories = YearlyGoal::CATEGORIES;
        $years = range(now()->year - 2, now()->year + 1);
        $months = [
            1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل',
            5 => 'مايو', 6 => 'يونيو', 7 => 'يوليو', 8 => 'أغسطس',
            9 => 'سبتمبر', 10 => 'أكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
        ];

        return view('decision-os.goals.index', compact('goals', 'stats', 'categories', 'years', 'year', 'category', 'months', 'month'));
    }

    /**
     * Show create form.
     */
    public function create(): View
    {
        $categories = YearlyGoal::CATEGORIES;
        return view('decision-os.goals.create', compact('categories'));
    }

    /**
     * Store a new goal.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'category' => 'required|in:personal,financial,health,career,learning,relationships,other',
            'target_date' => 'nullable|date',
        ]);

        YearlyGoal::create([
            'user_id' => $request->user()->id,
            'year' => now()->year,
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'target_date' => $request->target_date,
            'status' => 'not_started',
            'progress' => 0,
        ]);

        return redirect()
            ->route('decision-os.goals.index')
            ->with('success', 'تمت إضافة الهدف ✓');
    }

    /**
     * Show edit form.
     */
    public function edit(YearlyGoal $goal): View
    {
        $this->authorize('update', $goal);
        $categories = YearlyGoal::CATEGORIES;
        $statuses = YearlyGoal::STATUSES;
        return view('decision-os.goals.edit', compact('goal', 'categories', 'statuses'));
    }

    /**
     * Update a goal.
     */
    public function update(Request $request, YearlyGoal $goal): RedirectResponse
    {
        if ($goal->user_id !== $request->user()->id) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'category' => 'required|in:personal,financial,health,career,learning,relationships,other',
            'status' => 'required|in:not_started,in_progress,completed,abandoned',
            'progress' => 'required|integer|min:0|max:100',
            'target_date' => 'nullable|date',
        ]);

        $goal->update($request->only([
            'title', 'description', 'category', 'status', 'progress', 'target_date'
        ]));

        return redirect()
            ->route('decision-os.goals.index')
            ->with('success', 'تم تحديث الهدف ✓');
    }

    /**
     * Update progress via AJAX.
     */
    public function updateProgress(Request $request, YearlyGoal $goal)
    {
        if ($goal->user_id !== $request->user()->id) {
            abort(403);
        }

        $request->validate([
            'progress' => 'required|integer|min:0|max:100',
        ]);

        $goal->update([
            'progress' => $request->progress,
            'status' => $request->progress >= 100 ? 'completed' : ($request->progress > 0 ? 'in_progress' : 'not_started'),
        ]);

        return response()->json([
            'success' => true,
            'progress' => $goal->progress,
            'status' => $goal->status,
        ]);
    }

    /**
     * Delete a goal.
     */
    public function destroy(Request $request, YearlyGoal $goal): RedirectResponse
    {
        if ($goal->user_id !== $request->user()->id) {
            abort(403);
        }

        $goal->delete();

        return back()->with('success', 'تم حذف الهدف');
    }
}
