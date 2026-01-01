<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectAttachment;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'priority' => 'nullable|in:low,medium,high',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['status'] = 'active';
        $validated['priority'] = $validated['priority'] ?? 'medium';

        Project::create($validated);

        return redirect()->route('decision-os.projects.index')
                        ->with('success', 'تم إنشاء المشروع بنجاح');
    }

    /**
     * نموذج تعديل المشروع
     */
    public function edit(Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $clients = Client::where('user_id', Auth::id())->get();

        return view('decision-os.projects.edit', compact('project', 'clients'));
    }

    /**
     * تحديث المشروع
     */
    public function update(Request $request, Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client_id' => 'nullable|exists:clients,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,completed,paused,cancelled',
            'priority' => 'required|in:low,medium,high',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $project->update($validated);

        return redirect()->route('decision-os.projects.show', $project)
                        ->with('success', 'تم تحديث المشروع بنجاح');
    }

    /**
     * عرض تفاصيل المشروع
     */
    public function show(Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $project->load('client', 'pomodoroSessions', 'attachments');

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

    /**
     * Upload attachment to project
     */
    public function uploadAttachment(Request $request, Project $project)
    {
        if ($project->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'file' => 'required|file|max:10240', // 10MB max
            'name' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        $file = $request->file('file');
        $path = $file->store('project-attachments/' . $project->id, 'public');

        $attachment = ProjectAttachment::create([
            'project_id' => $project->id,
            'name' => $request->name ?? $file->getClientOriginalName(),
            'file_path' => $path,
            'file_type' => $file->getMimeType(),
            'file_size' => $file->getSize(),
            'notes' => $request->notes,
        ]);

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'attachment' => $attachment]);
        }

        return back()->with('success', 'تم رفع الملف بنجاح');
    }

    /**
     * Delete attachment
     */
    public function deleteAttachment(Project $project, ProjectAttachment $attachment)
    {
        if ($project->user_id !== Auth::id() || $attachment->project_id !== $project->id) {
            abort(403);
        }

        Storage::disk('public')->delete($attachment->file_path);
        $attachment->delete();

        return back()->with('success', 'تم حذف الملف');
    }

    /**
     * Download attachment
     */
    public function downloadAttachment(Project $project, ProjectAttachment $attachment)
    {
        if ($project->user_id !== Auth::id() || $attachment->project_id !== $project->id) {
            abort(403);
        }

        return Storage::disk('public')->download($attachment->file_path, $attachment->name);
    }
}
