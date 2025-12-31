<?php

namespace App\Http\Controllers;

use App\Models\PomodoroSession;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class PomodoroController extends Controller
{
    /**
     * Pomodoro main page with timer.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $today = today();

        // Today's task for linking
        $todayTask = Task::where('user_id', $user->id)
            ->where('is_today_one_thing', true)
            ->where('date', $today->toDateString())
            ->first();

        // Today's stats
        $completed = PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->where('status', 'completed')
            ->count();

        $focusMinutes = PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->where('status', 'completed')
            ->sum('duration') / 60;

        $stats = [
            'completed_today' => $completed,
            'focus_minutes' => round($focusMinutes),
        ];

        return view('decision-os.pomodoro.index', compact('todayTask', 'stats'));
    }

    /**
     * Start a new pomodoro session.
     */
    public function start(Request $request): JsonResponse
    {
        $request->validate([
            'task_id' => 'nullable|exists:tasks,id',
            'energy_before' => 'nullable|integer|min:1|max:5',
        ]);

        $user = $request->user();

        // Verify task belongs to user if provided
        if ($request->task_id) {
            $task = Task::find($request->task_id);
            if ($task && $task->user_id !== $user->id) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
        }

        $session = PomodoroSession::create([
            'user_id' => $user->id,
            'task_id' => $request->task_id,
            'status' => 'running',
            'duration' => 0,
            'energy_before' => $request->energy_before,
        ]);

        return response()->json([
            'success' => true,
            'session' => $session,
        ]);
    }

    /**
     * Complete a pomodoro session.
     */
    public function complete(Request $request, PomodoroSession $session): JsonResponse
    {
        // Verify session belongs to user
        if ($session->user_id !== $request->user()->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'status' => 'required|in:completed,interrupted',
            'duration' => 'required|integer|min:1',
            'energy_after' => 'nullable|integer|min:1|max:5',
        ]);

        $session->update([
            'status' => $request->status,
            'duration' => $request->duration,
            'energy_after' => $request->energy_after,
        ]);

        $stats = $this->getStats($request->user());

        return response()->json([
            'success' => true,
            'session' => $session,
            'stats' => $stats,
        ]);
    }

    /**
     * Interrupt/skip a pomodoro session.
     */
    public function interrupt(Request $request, PomodoroSession $session): JsonResponse
    {
        // Verify session belongs to user
        if ($session->user_id !== $request->user()->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Calculate elapsed time (25 minutes - remaining time would require client to send it)
        // For simplicity, we mark it as interrupted with 0 duration
        $session->update([
            'status' => 'interrupted',
            'duration' => 0,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Session interrupted',
        ]);
    }

    /**
     * Get pomodoro stats for today.
     */
    public function stats(Request $request): JsonResponse
    {
        $user = $request->user();
        $today = today();

        $completed = PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->where('status', 'completed')
            ->count();

        $interrupted = PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->where('status', 'interrupted')
            ->count();

        $focusMinutes = PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->where('status', 'completed')
            ->sum('duration') / 60;

        $total = $completed + $interrupted;
        $interruptionRate = $total > 0 ? round(($interrupted / $total) * 100) : 0;

        return response()->json([
            'completed' => $completed,
            'interrupted' => $interrupted,
            'focus_minutes' => round($focusMinutes),
            'interruption_rate' => $interruptionRate,
        ]);
    }

    /**
     * Store a completed or interrupted pomodoro session.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'status' => 'required|in:completed,interrupted',
            'duration' => 'required|integer|min:1',
            'task_id' => 'nullable|exists:tasks,id',
            'energy_before' => 'nullable|integer|min:1|max:5',
            'energy_after' => 'nullable|integer|min:1|max:5',
        ]);

        $user = $request->user();

        // Verify task belongs to user if provided
        if ($request->task_id) {
            $task = Task::find($request->task_id);
            if ($task && $task->user_id !== $user->id) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
        }

        $session = PomodoroSession::create([
            'user_id' => $user->id,
            'task_id' => $request->task_id,
            'status' => $request->status,
            'duration' => $request->duration,
            'energy_before' => $request->energy_before,
            'energy_after' => $request->energy_after,
        ]);

        // Get updated stats
        $stats = $this->getStats($user);

        return response()->json([
            'success' => true,
            'session' => $session,
            'stats' => $stats,
        ]);
    }

    /**
     * Get stats for a user.
     */
    private function getStats($user): array
    {
        $today = today();

        $completed = PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->where('status', 'completed')
            ->count();

        $focusMinutes = PomodoroSession::where('user_id', $user->id)
            ->whereDate('created_at', $today)
            ->where('status', 'completed')
            ->sum('duration') / 60;

        return [
            'completed_today' => $completed,
            'focus_minutes_today' => round($focusMinutes),
        ];
    }

    /**
     * Get pomodoro history.
     */
    public function history(Request $request): View
    {
        $user = $request->user();

        $sessions = PomodoroSession::where('user_id', $user->id)
            ->with('task')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        // Weekly stats
        $weekStart = now()->startOfWeek();
        $weeklyStats = [
            'total' => PomodoroSession::where('user_id', $user->id)
                ->where('created_at', '>=', $weekStart)
                ->where('status', 'completed')
                ->count(),
            'focus_hours' => round(PomodoroSession::where('user_id', $user->id)
                ->where('created_at', '>=', $weekStart)
                ->where('status', 'completed')
                ->sum('duration') / 3600, 1),
        ];

        return view('decision-os.pomodoro.history', compact('sessions', 'weeklyStats'));
    }
}
