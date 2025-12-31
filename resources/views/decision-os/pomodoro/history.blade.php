@extends('partials.layouts.master')

@section('title', 'سجل Pomodoro | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'سجل جلسات التركيز')

@section('content')
<div class="row">
    <div class="col-12">
        {{-- Stats Cards --}}
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card bg-primary-subtle text-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                <i class="ri-timer-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">{{ $weeklyStats['total'] }}</h4>
                                <p class="text-muted mb-0">جلسات هذا الأسبوع</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-success-subtle text-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                <i class="ri-focus-3-line fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-0">{{ $weeklyStats['focus_hours'] }}h</h4>
                                <p class="text-muted mb-0">ساعات التركيز</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sessions Table --}}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">سجل الجلسات</h5>
                <a href="{{ route('decision-os.dashboard') }}" class="btn btn-soft-primary btn-sm">
                    <i class="ri-arrow-right-line me-1"></i> العودة للـ Dashboard
                </a>
            </div>
            <div class="card-body">
                @if($sessions->isEmpty())
                    <div class="text-center py-5">
                        <i class="ri-timer-line fs-1 text-muted"></i>
                        <p class="text-muted mt-3">لا توجد جلسات مسجلة بعد</p>
                        <p class="text-muted small">ابدأ جلسة Pomodoro من الـ Dashboard</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>التاريخ</th>
                                    <th>المدة</th>
                                    <th>الحالة</th>
                                    <th>المهمة</th>
                                    <th>الطاقة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sessions as $session)
                                <tr>
                                    <td>
                                        <small class="text-muted">{{ $session->created_at->format('Y/m/d') }}</small>
                                        <br>
                                        <small>{{ $session->created_at->format('H:i') }}</small>
                                    </td>
                                    <td>
                                        <span class="fw-medium">{{ round($session->duration / 60) }} دقيقة</span>
                                    </td>
                                    <td>
                                        @if($session->status === 'completed')
                                            <span class="badge bg-success-subtle text-success">
                                                <i class="ri-checkbox-circle-line me-1"></i> مكتملة
                                            </span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger">
                                                <i class="ri-close-circle-line me-1"></i> مقاطعة
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($session->task)
                                            <span class="text-truncate d-inline-block" style="max-width: 200px;">
                                                {{ $session->task->title }}
                                            </span>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($session->energy_before && $session->energy_after)
                                            <small>
                                                {{ $session->energy_before }} → {{ $session->energy_after }}
                                                @if($session->energy_after > $session->energy_before)
                                                    <i class="ri-arrow-up-line text-success"></i>
                                                @elseif($session->energy_after < $session->energy_before)
                                                    <i class="ri-arrow-down-line text-danger"></i>
                                                @else
                                                    <i class="ri-arrow-right-line text-muted"></i>
                                                @endif
                                            </small>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center mt-4">
                        {{ $sessions->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
