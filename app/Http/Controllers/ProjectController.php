<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * عرض قائمة المشاريع مع Time→Money stats
     */
    public function index()
    {
        $projects = Project::where('user_id', Auth::id())
                          ->with('client')
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);

        $stats = [
            'total_revenue' => Project::where('user_id', Auth::id())->sum('total_revenue'),
            'total_hours' => Project::where('user_id', Auth::id())->sum('total_hours') / 60,
            'active_count' => Project::where('user_id', Auth::id())->active()->count(),
        ];

        return view('decision-os.projects.index', compact('projects', 'stats'));
    }

    /**
     * نموذج إنشاء مشروع جديد
     */
    public function create()
    {
        $clients = Client::where('user_id', Auth::id())->get();

        return view('decision-os.projects.create', compact('clients'));
    }

    /**
     * حفظ مشروع جديد
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client_id' => 'nullable|exists:clients,id',
            'description' => 'nullable|string',
            'total_revenue' => 'nullable|numeric|min:0',
            'start_date' => 'nullable|date',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['status'] = 'active';

        Project::create($validated);

        return redirect()->route('decision-os.projects.index')
                        ->with('success', 'تم إنشاء المشروع بنجاح');
    }

    /**
     * عرض تفاصيل المشروع
     */
    public function show(Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $project->load('client', 'pomodoroSessions');

        return view('decision-os.projects.show', compact('project'));
    }

    /**
     * تحديث إيرادات المشروع
     */
    public function updateRevenue(Request $request, Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'revenue' => 'required|numeric|min:0',
        ]);

        $project->total_revenue = $validated['revenue'];
        $project->save();

        // تحديث إيرادات العميل
        if ($project->client) {
            $project->client->updateTotalRevenue();
        }

        return back()->with('success', 'تم تحديث الإيرادات');
    }

    /**
     * تسجيل ساعات يدوياً
     */
    public function logHours(Request $request, Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'hours' => 'required|numeric|min:0.25',
        ]);

        $project->total_hours += $validated['hours'] * 60; // تحويل لدقائق
        $project->save();

        return back()->with('success', 'تم تسجيل الساعات');
    }

    /**
     * Kanban Board for project tasks
     */
    public function kanban(Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $tasks = $project->tasks()->orderBy('priority', 'desc')->get()->groupBy('status');

        $columns = [
            'backlog' => 'قائمة الانتظار',
            'todo' => 'للتنفيذ',
            'in_progress' => 'قيد العمل',
            'done' => 'مكتمل',
        ];

        return view('decision-os.projects.kanban', compact('project', 'tasks', 'columns'));
    }

    /**
     * Update task status (for Kanban drag & drop)
     */
    public function updateTaskStatus(Request $request, Project $project, \App\Models\Task $task)
    {
        if ($project->user_id !== Auth::id() || $task->project_id !== $project->id) {
            abort(403);
        }

        $request->validate([
            'status' => 'required|in:backlog,todo,in_progress,done',
            'priority' => 'nullable|integer',
        ]);

        $task->update([
            'status' => $request->status,
            'priority' => $request->priority ?? $task->priority,
            'completed' => $request->status === 'done',
            'completed_at' => $request->status === 'done' ? now() : null,
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Add task to project
     */
    public function addTask(Request $request, Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|in:backlog,todo,in_progress,done',
        ]);

        $task = \App\Models\Task::create([
            'user_id' => Auth::id(),
            'project_id' => $project->id,
            'title' => $request->title,
            'description' => $request->description,
            'type' => 'top_3',
            'status' => $request->status ?? 'todo',
            'date' => today(),
        ]);

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'task' => $task]);
        }

        return back()->with('success', 'تم إضافة المهمة');
    }
}
