@extends('partials.layouts.master')

@section('title', 'Decision OS | المشاريع')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'المشاريع - Time → Money')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">المشاريع</h4>
                        <p class="text-muted mb-0">تتبع الوقت مقابل المال لكل مشروع</p>
                    </div>
                    <a href="{{ route('decision-os.projects.create') }}" class="btn btn-primary">
                        <i class="ri-add-line me-1"></i> مشروع جديد
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

        {{-- Projects List --}}
        <div class="row">
            @forelse($projects as $project)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 {{ $project->profitability_status === 'red' ? 'border-danger' : '' }}">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">{{ $project->name }}</h6>
                        <span class="badge bg-{{ $project->profitability_status }}-subtle text-{{ $project->profitability_status }}">
                            @if($project->profitability_status === 'green')
                                مربح
                            @elseif($project->profitability_status === 'yellow')
                                متوسط
                            @else
                                خاسر زمنياً
                            @endif
                        </span>
                    </div>
                    <div class="card-body">
                        @if($project->client)
                        <p class="text-muted mb-3">
                            <i class="ri-user-line me-1"></i> {{ $project->client->name }}
                        </p>
                        @endif

                        <div class="row text-center mb-3">
                            <div class="col-4">
                                <div class="fs-5 fw-bold text-success">${{ number_format($project->total_revenue) }}</div>
                                <small class="text-muted">الإيراد</small>
                            </div>
                            <div class="col-4">
                                <div class="fs-5 fw-bold text-primary">{{ number_format($project->total_hours / 60, 1) }}</div>
                                <small class="text-muted">ساعات</small>
                            </div>
                            <div class="col-4">
                                <div class="fs-5 fw-bold text-info">{{ $project->total_pomodoros }}</div>
                                <small class="text-muted">Pomodoros</small>
                            </div>
                        </div>

                        <div class="p-2 bg-light rounded text-center">
                            <span class="text-muted small">Revenue/Hour:</span>
                            <span class="fw-bold text-{{ $project->profitability_status }}">${{ $project->revenue_per_hour }}</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('decision-os.projects.show', $project) }}" class="btn btn-outline-primary btn-sm w-100">
                            <i class="ri-eye-line me-1"></i> التفاصيل
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <i class="ri-folder-line fs-1 text-muted"></i>
                        <p class="text-muted mt-2">لا توجد مشاريع</p>
                        <a href="{{ route('decision-os.projects.create') }}" class="btn btn-primary">
                            <i class="ri-add-line me-1"></i> أنشئ مشروعك الأول
                        </a>
                    </div>
                </div>
            </div>
            @endforelse
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
