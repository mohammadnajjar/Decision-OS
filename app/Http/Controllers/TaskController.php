<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display today's tasks.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $date = $request->get('date', today()->toDateString());

        $oneThing = Task::where('user_id', $user->id)
            ->where('date', $date)
            ->where('type', 'one_thing')
            ->first();

        $topTasks = Task::where('user_id', $user->id)
            ->where('date', $date)
            ->where('type', 'top_3')
            ->orderBy('created_at')
            ->get();

        return view('decision-os.tasks.index', compact('oneThing', 'topTasks', 'date'));
    }

    /**
     * Store a new task.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:one_thing,top_3',
            'date' => 'nullable|date',
        ]);

        $user = $request->user();
        $date = $request->input('date', today()->toDateString());

        // If one_thing, delete existing one for this date
        if ($request->type === 'one_thing') {
            Task::where('user_id', $user->id)
                ->where('date', $date)
                ->where('type', 'one_thing')
                ->delete();
        }

        // Check if already 3 top_3 tasks
        if ($request->type === 'top_3') {
            $count = Task::where('user_id', $user->id)
                ->where('date', $date)
                ->where('type', 'top_3')
                ->count();

            if ($count >= 3) {
                return back()->with('error', 'لديك بالفعل 3 مهام في Top 3');
            }
        }

        Task::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'type' => $request->type,
            'date' => $date,
            'completed' => false,
        ]);

        return back()->with('success', 'تمت إضافة المهمة');
    }

    /**
     * Toggle task completion.
     */
    public function toggle(Request $request, Task $task): RedirectResponse|JsonResponse
    {
        // Authorization
        if ($task->user_id !== $request->user()->id) {
            abort(403);
        }

        $task->update(['completed' => !$task->completed]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'completed' => $task->completed,
            ]);
        }

        return back()->with('success', $task->completed ? 'تم إكمال المهمة ✓' : 'تم إلغاء الإكمال');
    }

    /**
     * Delete a task.
     */
    public function destroy(Request $request, Task $task): RedirectResponse
    {
        if ($task->user_id !== $request->user()->id) {
            abort(403);
        }

        $task->delete();

        return back()->with('success', 'تم حذف المهمة');
    }
}
