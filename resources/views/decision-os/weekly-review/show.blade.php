@extends('partials.layouts.master')

@section('title', 'المراجعة الأسبوعية | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'تفاصيل المراجعة')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="ri-calendar-check-line me-2"></i>
                        مراجعة أسبوع {{ $review->week_start->format('Y/m/d') }}
                    </h5>
                    <span class="badge bg-white text-primary">
                        {{ $review->created_at->diffForHumans() }}
                    </span>
                </div>
            </div>
            <div class="card-body">
                {{-- KPI Snapshot --}}
                @if($review->kpi_snapshot)
                <div class="mb-4">
                    <h6 class="text-muted mb-3">
                        <i class="ri-bar-chart-box-line me-1"></i> KPIs عند المراجعة
                    </h6>
                    <div class="row g-3">
                        @foreach($review->kpi_snapshot as $key => $value)
                        <div class="col-md-4">
                            <div class="border rounded p-3 text-center">
                                <span class="text-muted small d-block">{{ $key }}</span>
                                <span class="fw-bold fs-5">{{ $value }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- What Worked --}}
                @if($review->what_worked)
                <div class="mb-4">
                    <h6 class="text-success mb-2">
                        <i class="ri-checkbox-circle-line me-1"></i> ما الذي نجح؟
                    </h6>
                    <div class="bg-success-subtle p-3 rounded">
                        {!! nl2br(e($review->what_worked)) !!}
                    </div>
                </div>
                @endif

                {{-- What Failed --}}
                @if($review->what_failed)
                <div class="mb-4">
                    <h6 class="text-danger mb-2">
                        <i class="ri-close-circle-line me-1"></i> ما الذي لم ينجح؟
                    </h6>
                    <div class="bg-danger-subtle p-3 rounded">
                        {!! nl2br(e($review->what_failed)) !!}
                    </div>
                </div>
                @endif

                {{-- Next Week Focus --}}
                @if($review->next_week_focus)
                <div class="mb-4">
                    <h6 class="text-primary mb-2">
                        <i class="ri-focus-3-line me-1"></i> تركيز الأسبوع القادم
                    </h6>
                    <div class="bg-primary-subtle p-3 rounded">
                        {!! nl2br(e($review->next_week_focus)) !!}
                    </div>
                </div>
                @endif
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('decision-os.weekly-review.index') }}" class="btn btn-soft-primary">
                        <i class="ri-arrow-right-line me-1"></i> كل المراجعات
                    </a>
                    <a href="{{ route('decision-os.dashboard') }}" class="btn btn-primary">
                        <i class="ri-dashboard-line me-1"></i> Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
