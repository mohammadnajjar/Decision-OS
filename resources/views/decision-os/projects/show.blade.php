@extends('partials.layouts.master')

@section('title', 'تفاصيل المشروع | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'Time → Money')

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        {{-- Project Header --}}
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="mb-1">{{ $project->name }}</h4>
                        @if($project->client)
                            <p class="text-muted mb-0">
                                <i class="ri-user-line me-1"></i>
                                {{ $project->client->name }}
                            </p>
                        @endif
                    </div>
                    <div class="text-end">
                        @php
                            $statusColors = [
                                'green' => 'bg-success',
                                'yellow' => 'bg-warning',
                                'red' => 'bg-danger',
                            ];
                            $status = $project->profitability_status;
                        @endphp
                        <span class="badge {{ $statusColors[$status] ?? 'bg-secondary' }} fs-6">
                            ${{ number_format($project->revenue_per_hour, 2) }}/hour
                        </span>
                        <p class="text-muted small mb-0 mt-1">
                            {{ $project->status === 'active' ? 'نشط' : ($project->status === 'completed' ? 'مكتمل' : 'متوقف') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stats Row --}}
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card bg-success-subtle text-success">
                    <div class="card-body text-center">
                        <h3 class="mb-0">${{ number_format($project->total_revenue, 2) }}</h3>
                        <p class="mb-0">إجمالي الإيرادات</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info-subtle text-info">
                    <div class="card-body text-center">
                        <h3 class="mb-0">{{ round($project->total_hours / 60, 1) }}h</h3>
                        <p class="mb-0">ساعات العمل</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-primary-subtle text-primary">
                    <div class="card-body text-center">
                        <h3 class="mb-0">{{ $project->total_pomodoros ?? 0 }}</h3>
                        <p class="mb-0">جلسات Pomodoro</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- Update Revenue --}}
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="ri-money-dollar-circle-line me-1"></i> تحديث الإيرادات</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.projects.update-revenue', $project) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">إجمالي الإيرادات ($)</label>
                                <input type="number" name="revenue" class="form-control"
                                       value="{{ $project->total_revenue }}" step="0.01" min="0" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">
                                <i class="ri-save-line me-1"></i> حفظ
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Log Hours --}}
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="ri-time-line me-1"></i> تسجيل ساعات</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.projects.log-hours', $project) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">ساعات إضافية</label>
                                <input type="number" name="hours" class="form-control"
                                       step="0.25" min="0.25" placeholder="0.5" required>
                            </div>
                            <button type="submit" class="btn btn-info w-100">
                                <i class="ri-add-line me-1"></i> إضافة
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Description --}}
        @if($project->description)
        <div class="card mb-4">
            <div class="card-header">
                <h6 class="mb-0">الوصف</h6>
            </div>
            <div class="card-body">
                {!! nl2br(e($project->description)) !!}
            </div>
        </div>
        @endif

        {{-- Pomodoro Sessions --}}
        @if($project->pomodoroSessions->isNotEmpty())
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0"><i class="ri-timer-line me-1"></i> جلسات Pomodoro</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>التاريخ</th>
                                <th>المدة</th>
                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($project->pomodoroSessions->take(10) as $session)
                            <tr>
                                <td>{{ $session->created_at->format('Y/m/d H:i') }}</td>
                                <td>{{ round($session->duration / 60) }} دقيقة</td>
                                <td>
                                    <span class="badge {{ $session->status === 'completed' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }}">
                                        {{ $session->status === 'completed' ? 'مكتملة' : 'مقاطعة' }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

        {{-- Back --}}
        <div class="mt-4 text-center">
            <a href="{{ route('decision-os.projects.index') }}" class="btn btn-soft-primary">
                <i class="ri-arrow-right-line me-1"></i> العودة للمشاريع
            </a>
        </div>
    </div>
</div>
@endsection
