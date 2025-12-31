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
