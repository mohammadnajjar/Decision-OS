@extends('partials.layouts.master')

@section('title', 'Decision OS | المراجعة الأسبوعية')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'المراجعة الأسبوعية')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">المراجعة الأسبوعية</h4>
                        <p class="text-muted mb-0">
                            الأسبوع {{ $weekNumber }} - من {{ $weekStart->format('d/m') }} إلى {{ $weekEnd->format('d/m/Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('decision-os.weekly-review.store') }}" method="POST" id="weekly-review-form">
            @csrf
            <input type="hidden" name="week_number" value="{{ $weekNumber }}">
            <input type="hidden" name="year" value="{{ $year }}">

            <div class="row">
                {{-- Left Column - Summary Stats --}}
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="ri-bar-chart-line text-primary me-2"></i> ملخص الأسبوع
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between align-items-center p-3 bg-success-subtle rounded">
                                    <span>مهام مكتملة</span>
                                    <span class="badge bg-success fs-5">{{ $weekStats['tasks_completed'] }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-3 bg-primary-subtle rounded">
                                    <span>Pomodoros</span>
                                    <span class="badge bg-primary fs-5">{{ $weekStats['pomodoros'] }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-3 bg-info-subtle rounded">
                                    <span>ساعات العمل</span>
                                    <span class="badge bg-info fs-5">{{ $weekStats['work_hours'] }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-3 bg-warning-subtle rounded">
                                    <span>أيام صحية</span>
                                    <span class="badge bg-warning fs-5">{{ $weekStats['healthy_days'] }}/7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Column - Review Questions --}}
                <div class="col-lg-8">
                    
                    {{-- Wins --}}
                    <div class="card mb-4 border-success">
                        <div class="card-header bg-success-subtle">
                            <h5 class="card-title mb-0 text-success">
                                <i class="ri-trophy-line me-2"></i> إنجازات الأسبوع
                            </h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="wins" rows="4" 
                                placeholder="ما هي أهم 3 إنجازات حققتها هذا الأسبوع؟">{{ old('wins') }}</textarea>
                        </div>
                    </div>

                    {{-- Challenges --}}
                    <div class="card mb-4 border-warning">
                        <div class="card-header bg-warning-subtle">
                            <h5 class="card-title mb-0 text-warning">
                                <i class="ri-error-warning-line me-2"></i> تحديات وعقبات
                            </h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="challenges" rows="4" 
                                placeholder="ما هي التحديات التي واجهتها؟ وكيف تعاملت معها؟">{{ old('challenges') }}</textarea>
                        </div>
                    </div>

                    {{-- Lessons --}}
                    <div class="card mb-4 border-info">
                        <div class="card-header bg-info-subtle">
                            <h5 class="card-title mb-0 text-info">
                                <i class="ri-lightbulb-line me-2"></i> دروس مستفادة
                            </h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="lessons" rows="4" 
                                placeholder="ما الذي تعلمته هذا الأسبوع؟ ما الذي ستفعله بشكل مختلف؟">{{ old('lessons') }}</textarea>
                        </div>
                    </div>

                    {{-- Next Week --}}
                    <div class="card mb-4 border-primary">
                        <div class="card-header bg-primary-subtle">
                            <h5 class="card-title mb-0 text-primary">
                                <i class="ri-focus-line me-2"></i> أولويات الأسبوع القادم
                            </h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" name="next_week_priorities" rows="4" 
                                placeholder="ما هي أهم 3 أولويات للأسبوع القادم؟">{{ old('next_week_priorities') }}</textarea>
                        </div>
                    </div>

                    {{-- Ratings --}}
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="ri-star-line me-2"></i> تقييم الأسبوع
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <label class="form-label fw-medium">تقييم الإنتاجية</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="range" class="form-range" min="1" max="10" 
                                               name="productivity_rating" value="5"
                                               id="productivity-rating"
                                               oninput="document.getElementById('productivity-rating-value').textContent = this.value">
                                        <span id="productivity-rating-value" class="badge bg-primary rounded-pill" style="min-width: 40px;">5</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-medium">تقييم الصحة</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="range" class="form-range" min="1" max="10" 
                                               name="health_rating" value="5"
                                               id="health-rating"
                                               oninput="document.getElementById('health-rating-value').textContent = this.value">
                                        <span id="health-rating-value" class="badge bg-success rounded-pill" style="min-width: 40px;">5</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-medium">تقييم السعادة</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="range" class="form-range" min="1" max="10" 
                                               name="happiness_rating" value="5"
                                               id="happiness-rating"
                                               oninput="document.getElementById('happiness-rating-value').textContent = this.value">
                                        <span id="happiness-rating-value" class="badge bg-warning rounded-pill" style="min-width: 40px;">5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Submit --}}
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('decision-os.dashboard') }}" class="btn btn-outline-secondary">
                            <i class="ri-arrow-right-line me-1"></i> رجوع
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="ri-save-line me-1"></i> حفظ المراجعة
                        </button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
