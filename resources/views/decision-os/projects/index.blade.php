@extends('partials.layouts.master')

@section('title', 'Decision OS | المشاريع')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'المشاريع')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div>
                        <h4 class="mb-1">جدول المشاريع</h4>
                        <p class="text-muted mb-0">إدارة ومتابعة جميع المشاريع</p>
                    </div>
                    <a href="{{ route('decision-os.projects.create') }}" class="btn btn-success">
                        <i class="ri-add-line me-1"></i> New
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
                                <span class="text-muted">إجمالي الإيرادات</span>
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
                                <span class="text-muted">ساعات العمل</span>
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
                                <span class="text-muted">مشاريع نشطة</span>
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
                                <th>اسم المشروع</th>
                                <th>العميل</th>
                                <th>الحالة</th>
                                <th>الأولوية</th>
                                <th>تاريخ البدء</th>
                                <th>تاريخ الانتهاء</th>
                                <th>الإيراد</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="ri-record-circle-fill text-{{ $project->status_color }} me-2"></i>
                                        <a href="{{ route('decision-os.projects.show', $project) }}" class="text-body fw-medium">
                                            {{ $project->name }}
                                        </a>
                                    </div>
                                </td>
                                <td>{{ $project->client?->name ?? '-' }}</td>
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
                                <td>{{ $project->end_date?->format('M d, Y') ?? '-' }}</td>
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
