@extends('partials.layouts.master')

@section('title', __('app.app_name') . ' | ' . __('app.projects.title'))
@section('title-sub', __('app.app_name'))
@section('pagetitle', __('app.projects.title'))

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div>
                        <h4 class="mb-1">{{ __('app.projects.project_table') }}</h4>
                        <p class="text-muted mb-0">{{ __('app.projects.all_projects') }}</p>
                    </div>
                    <a href="{{ route('decision-os.projects.create') }}" class="btn btn-success">
                        <i class="ri-add-line me-1"></i> {{ __('app.projects.new_project') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md bg-success-subtle text-success rounded d-flex align-items-center justify-content-center me-3">
                                <i class="ri-money-dollar-circle-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">${{ number_format($stats['total_revenue']) }}</h4>
                                <span class="text-muted">{{ __('app.projects.total_revenue') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md bg-primary-subtle text-primary rounded d-flex align-items-center justify-content-center me-3">
                                <i class="ri-time-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">{{ number_format($stats['total_hours'], 1) }}</h4>
                                <span class="text-muted">{{ __('app.projects.total_hours') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md bg-info-subtle text-info rounded d-flex align-items-center justify-content-center me-3">
                                <i class="ri-folder-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">{{ $stats['active_count'] }}</h4>
                                <span class="text-muted">{{ __('app.projects.active_projects') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Projects Table --}}
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>{{ __('app.projects.project_name') }}</th>
                                <th>{{ __('app.projects.client') }}</th>
                                <th>{{ __('app.tasks.title') }}</th>
                                <th>{{ __('app.projects.status') }}</th>
                                <th>{{ __('app.common.priority') }}</th>
                                <th>{{ __('app.projects.start_date') }}</th>
                                <th>{{ __('app.projects.revenue') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="ri-record-circle-fill text-{{ $project->status_color }} me-2"></i>
                                        <div>
                                            <a href="{{ route('decision-os.projects.show', $project) }}" class="text-body fw-medium">
                                                {{ $project->name }}
                                            </a>
                                            @if($project->tasks->count() > 0)
                                                <div class="small text-muted">
                                                    @foreach($project->tasks->take(2) as $task)
                                                        <span class="badge bg-light text-muted me-1">{{ Str::limit($task->title, 15) }}</span>
                                                    @endforeach
                                                    @if($project->tasks->count() > 2)
                                                        <span class="text-muted">+{{ $project->tasks->count() - 2 }}</span>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $project->client?->name ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('decision-os.projects.kanban', $project) }}" class="badge bg-primary-subtle text-primary">
                                        <i class="ri-task-line me-1"></i>{{ $project->tasks_count }}
                                    </a>
                                </td>
                                <td>
                                    <span class="badge bg-{{ $project->status_color }}-subtle text-{{ $project->status_color }}">
                                        {{ $project->status_label }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-{{ $project->priority_color }}-subtle text-{{ $project->priority_color }}">
                                        {{ $project->priority_label }}
                                    </span>
                                </td>
                                <td>{{ $project->start_date?->format('M d, Y') ?? '-' }}</td>
                                <td class="text-success fw-medium">${{ number_format($project->total_revenue) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('decision-os.projects.show', $project) }}">
                                                    <i class="ri-eye-line me-2"></i> عرض
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('decision-os.projects.edit', $project) }}">
                                                    <i class="ri-edit-line me-2"></i> تعديل
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('decision-os.projects.kanban', $project) }}">
                                                    <i class="ri-layout-column-line me-2"></i> Kanban
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <i class="ri-folder-line fs-1 text-muted"></i>
                                    <p class="text-muted mt-2 mb-0">لا توجد مشاريع</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Pagination --}}
        @if($projects->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $projects->links() }}
        </div>
        @endif

    </div>
</div>
@endsection
