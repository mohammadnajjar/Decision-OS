@extends('partials.layouts.master')

@section('title', 'Decision OS | التطور المهني')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'التطور المهني')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div>
                        <h4 class="mb-1">
                            <i class="ri-briefcase-line text-primary me-2"></i>
                            التطور المهني
                        </h4>
                        <p class="text-muted mb-0">تتبع تقدمك في البحث عن عمل وتطوير مهاراتك</p>
                    </div>
                    <a href="{{ route('decision-os.career.create') }}" class="btn btn-primary">
                        <i class="ri-add-line me-1"></i> إدخال بيانات اليوم
                    </a>
                </div>
            </div>
        </div>

        {{-- Progress Card --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="mb-0">نسبة التقدم المهني</h6>
                            <span class="badge bg-{{ $stats['progress'] >= 70 ? 'success' : ($stats['progress'] >= 40 ? 'warning' : 'danger') }}">
                                {{ $stats['progress'] }}%
                            </span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-{{ $stats['progress'] >= 70 ? 'success' : ($stats['progress'] >= 40 ? 'warning' : 'danger') }}"
                                 style="width: {{ $stats['progress'] }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- KPI Cards --}}
        <div class="row g-3 mb-4">
            {{-- CV Status --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-primary-subtle text-primary rounded d-flex align-items-center justify-content-center">
                                <i class="ri-file-user-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">حالة CV</p>
                                @php
                                    $cvLabels = \App\Models\CareerData::cvStatusLabels();
                                    $cvColors = ['draft' => 'warning', 'ready' => 'info', 'sent' => 'success'];
                                @endphp
                                <span class="badge bg-{{ $cvColors[$stats['cv_status']] }}-subtle text-{{ $cvColors[$stats['cv_status']] }} fs-6">
                                    {{ $cvLabels[$stats['cv_status']] }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Weekly Applications --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-success-subtle text-success rounded d-flex align-items-center justify-content-center">
                                <i class="ri-send-plane-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">تقديمات الأسبوع</p>
                                <h4 class="mb-0">{{ $stats['weekly_applications'] }} <small class="text-muted fs-6">/ 5</small></h4>
                            </div>
                        </div>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" style="width: {{ min(100, ($stats['weekly_applications'] / 5) * 100) }}%"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Monthly Interviews --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-info-subtle text-info rounded d-flex align-items-center justify-content-center">
                                <i class="ri-team-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">مقابلات الشهر</p>
                                <h4 class="mb-0">{{ $stats['monthly_interviews'] }} <small class="text-muted fs-6">/ 4</small></h4>
                            </div>
                        </div>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-info" style="width: {{ min(100, ($stats['monthly_interviews'] / 4) * 100) }}%"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Skill Hours --}}
            <div class="col-md-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm bg-warning-subtle text-warning rounded d-flex align-items-center justify-content-center">
                                <i class="ri-book-open-line fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-muted mb-1 small">ساعات التعلم</p>
                                <h4 class="mb-0">{{ number_format($stats['weekly_skill_hours'], 1) }} <small class="text-muted fs-6">/ 10 ساعة</small></h4>
                            </div>
                        </div>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-warning" style="width: {{ min(100, ($stats['weekly_skill_hours'] / 10) * 100) }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Insights --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-transparent">
                        <h6 class="mb-0"><i class="ri-lightbulb-line text-warning me-2"></i>تنبيهات</h6>
                    </div>
                    <div class="card-body">
                        @if($stats['cv_status'] === 'draft')
                            <div class="alert alert-warning mb-2">
                                <i class="ri-alert-line me-2"></i>
                                CV غير جاهز - قم بتحديثه وجعله جاهزاً للإرسال
                            </div>
                        @endif

                        @if($stats['weekly_applications'] == 0)
                            <div class="alert alert-danger mb-2">
                                <i class="ri-error-warning-line me-2"></i>
                                لم تقدم أي طلب هذا الأسبوع - ابدأ الآن!
                            </div>
                        @endif

                        @if($stats['weekly_skill_hours'] < 3)
                            <div class="alert alert-info mb-2">
                                <i class="ri-information-line me-2"></i>
                                خصص وقتاً أكثر لتطوير مهاراتك - الهدف 10 ساعات أسبوعياً
                            </div>
                        @endif

                        @if($stats['cv_status'] !== 'draft' && $stats['weekly_applications'] > 0 && $stats['weekly_skill_hours'] >= 5)
                            <div class="alert alert-success mb-0">
                                <i class="ri-check-double-line me-2"></i>
                                ممتاز! أنت على المسار الصحيح
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- History Table --}}
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-transparent d-flex align-items-center justify-content-between">
                        <h6 class="mb-0"><i class="ri-history-line me-2"></i>سجل آخر 30 يوم</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>التاريخ</th>
                                        <th>حالة CV</th>
                                        <th>التقديمات</th>
                                        <th>المقابلات</th>
                                        <th>ساعات التعلم</th>
                                        <th>ملاحظات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($history as $record)
                                        <tr>
                                            <td>{{ $record->date->format('d/m/Y') }}</td>
                                            <td>
                                                @php
                                                    $colors = ['draft' => 'warning', 'ready' => 'info', 'sent' => 'success'];
                                                @endphp
                                                <span class="badge bg-{{ $colors[$record->cv_status] }}-subtle text-{{ $colors[$record->cv_status] }}">
                                                    {{ $cvLabels[$record->cv_status] }}
                                                </span>
                                            </td>
                                            <td>{{ $record->applications_count }}</td>
                                            <td>{{ $record->interviews_count }}</td>
                                            <td>{{ number_format($record->skill_hours, 1) }} ساعة</td>
                                            <td>
                                                @if($record->notes)
                                                    <span data-bs-toggle="tooltip" title="{{ $record->notes }}">
                                                        <i class="ri-file-text-line text-muted"></i>
                                                    </span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4 text-muted">
                                                <i class="ri-inbox-line fs-1 d-block mb-2"></i>
                                                لا توجد بيانات بعد
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
