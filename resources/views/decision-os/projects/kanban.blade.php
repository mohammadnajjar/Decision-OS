@extends('partials.layouts.master')

@section('title', 'Kanban - {{ $project->name }} | Decision OS')
@section('pagetitle', 'مهام المشروع: ' . $project->name)

@section('css')
<style>
    .kanban-board {
        display: flex;
        gap: 1rem;
        overflow-x: auto;
        padding-bottom: 1rem;
    }
    .kanban-column {
        min-width: 280px;
        max-width: 300px;
        flex-shrink: 0;
    }
    .kanban-column-header {
        padding: 0.75rem 1rem;
        border-radius: 0.5rem 0.5rem 0 0;
        font-weight: 600;
    }
    .kanban-column-backlog .kanban-column-header { background: #6c757d; color: white; }
    .kanban-column-todo .kanban-column-header { background: #0d6efd; color: white; }
    .kanban-column-in_progress .kanban-column-header { background: #ffc107; color: #000; }
    .kanban-column-done .kanban-column-header { background: #198754; color: white; }

    .kanban-tasks {
        background: #f8f9fa;
        min-height: 400px;
        border-radius: 0 0 0.5rem 0.5rem;
        padding: 0.5rem;
    }
    .kanban-task {
        background: white;
        border-radius: 0.5rem;
        padding: 0.75rem;
        margin-bottom: 0.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        cursor: grab;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .kanban-task:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .kanban-task.dragging {
        opacity: 0.5;
        transform: rotate(3deg);
    }
    .kanban-task-title {
        font-weight: 500;
        margin-bottom: 0.25rem;
    }
    .kanban-task-meta {
        font-size: 0.75rem;
        color: #6c757d;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item"><a href="{{ route('decision-os.projects.index') }}">المشاريع</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('decision-os.projects.show', $project) }}">{{ $project->name }}</a></li>
                            <li class="breadcrumb-item active">Kanban</li>
                        </ol>
                    </nav>
                    <h4 class="mb-0">لوحة المهام - {{ $project->name }}</h4>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                    <i class="bi bi-plus-lg me-1"></i> مهمة جديدة
                </button>
            </div>
        </div>
    </div>

    <!-- Kanban Board -->
    <div class="kanban-board">
        @foreach($columns as $status => $label)
            <div class="kanban-column kanban-column-{{ $status }}" data-status="{{ $status }}">
                <div class="kanban-column-header d-flex justify-content-between align-items-center">
                    <span>{{ $label }}</span>
                    <span class="badge bg-white text-dark">{{ ($tasks[$status] ?? collect())->count() }}</span>
                </div>
                <div class="kanban-tasks" data-status="{{ $status }}">
                    @foreach($tasks[$status] ?? [] as $task)
                        <div class="kanban-task" draggable="true" data-task-id="{{ $task->id }}">
                            <div class="kanban-task-title">{{ $task->title }}</div>
                            @if($task->description)
                                <div class="kanban-task-meta">{{ Str::limit($task->description, 50) }}</div>
                            @endif
                            <div class="kanban-task-meta mt-2">
                                <i class="bi bi-calendar3"></i> {{ $task->date->format('m/d') }}
                                @if($task->pomodoroSessions->count() > 0)
                                    <span class="ms-2"><i class="bi bi-stopwatch"></i> {{ $task->pomodoroSessions->count() }}</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Add Task Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('decision-os.projects.add-task', $project) }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">إضافة مهمة جديدة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">عنوان المهمة <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">الوصف</label>
                        <textarea name="description" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">الحالة</label>
                        <select name="status" class="form-select">
                            @foreach($columns as $status => $label)
                                <option value="{{ $status }}" {{ $status === 'todo' ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-primary">إضافة</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tasks = document.querySelectorAll('.kanban-task');
    const columns = document.querySelectorAll('.kanban-tasks');

    tasks.forEach(task => {
        task.addEventListener('dragstart', function(e) {
            task.classList.add('dragging');
            e.dataTransfer.setData('text/plain', task.dataset.taskId);
        });

        task.addEventListener('dragend', function() {
            task.classList.remove('dragging');
        });
    });

    columns.forEach(column => {
        column.addEventListener('dragover', function(e) {
            e.preventDefault();
            const dragging = document.querySelector('.dragging');
            if (dragging) {
                column.appendChild(dragging);
            }
        });

        column.addEventListener('drop', function(e) {
            e.preventDefault();
            const taskId = e.dataTransfer.getData('text/plain');
            const newStatus = column.dataset.status;

            // Update via AJAX
            fetch(`{{ url('decision-os/projects/' . $project->id . '/tasks') }}/${taskId}/status`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ status: newStatus })
            }).then(r => r.json()).then(data => {
                if (data.success) {
                    // Update badge counts
                    document.querySelectorAll('.kanban-column').forEach(col => {
                        const count = col.querySelector('.kanban-tasks').children.length;
                        col.querySelector('.badge').textContent = count;
                    });
                }
            });
        });
    });
});
</script>
@endsection
