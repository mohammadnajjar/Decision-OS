@extends('partials.layouts.master')

@section('title', 'Decision OS | إدخال بيانات اليوم')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'إدخال بيانات اليوم')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">
                            <i class="ri-add-circle-line text-primary me-2"></i>
                            إدخال بيانات اليوم
                        </h4>
                        <p class="text-muted mb-0">{{ now()->translatedFormat('l، d F Y') }}</p>
                    </div>
                    <a href="{{ route('decision-os.career.index') }}" class="btn btn-outline-secondary">
                        <i class="ri-arrow-right-line me-1"></i> رجوع
                    </a>
                </div>
            </div>
        </div>

        {{-- Form --}}
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form action="{{ route('decision-os.career.store') }}" method="POST">
                            @csrf

                            {{-- CV Status --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    <i class="ri-file-user-line text-primary me-1"></i>
                                    حالة السيرة الذاتية (CV)
                                </label>
                                <div class="d-flex flex-wrap gap-3">
                                    @foreach($cvStatusLabels as $value => $label)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="cv_status"
                                                   id="cv_{{ $value }}" value="{{ $value }}"
                                                   {{ ($todayData?->cv_status ?? 'draft') === $value ? 'checked' : '' }}>
                                            <label class="form-check-label" for="cv_{{ $value }}">
                                                {{ $label }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Applications --}}
                            <div class="mb-4">
                                <label for="applications_count" class="form-label fw-semibold">
                                    <i class="ri-send-plane-line text-success me-1"></i>
                                    عدد التقديمات اليوم
                                </label>
                                <input type="number" class="form-control" id="applications_count"
                                       name="applications_count" min="0" max="50"
                                       value="{{ $todayData?->applications_count ?? 0 }}"
                                       placeholder="0">
                                <small class="text-muted">الهدف: 5 تقديمات أسبوعياً</small>
                            </div>

                            {{-- Interviews --}}
                            <div class="mb-4">
                                <label for="interviews_count" class="form-label fw-semibold">
                                    <i class="ri-team-line text-info me-1"></i>
                                    عدد المقابلات اليوم
                                </label>
                                <input type="number" class="form-control" id="interviews_count"
                                       name="interviews_count" min="0" max="10"
                                       value="{{ $todayData?->interviews_count ?? 0 }}"
                                       placeholder="0">
                                <small class="text-muted">الهدف: 4 مقابلات شهرياً</small>
                            </div>

                            {{-- Skill Hours --}}
                            <div class="mb-4">
                                <label for="skill_hours" class="form-label fw-semibold">
                                    <i class="ri-book-open-line text-warning me-1"></i>
                                    ساعات تطوير المهارات
                                </label>
                                <input type="number" class="form-control" id="skill_hours"
                                       name="skill_hours" min="0" max="24" step="0.5"
                                       value="{{ $todayData?->skill_hours ?? 0 }}"
                                       placeholder="0">
                                <small class="text-muted">الهدف: 10 ساعات أسبوعياً (دورات، قراءة، مشاريع شخصية)</small>
                            </div>

                            {{-- Notes --}}
                            <div class="mb-4">
                                <label for="notes" class="form-label fw-semibold">
                                    <i class="ri-sticky-note-line text-secondary me-1"></i>
                                    ملاحظات
                                </label>
                                <textarea class="form-control" id="notes" name="notes" rows="3"
                                          placeholder="ما الذي تعلمته اليوم؟ أي تحديات واجهتها؟">{{ $todayData?->notes }}</textarea>
                            </div>

                            {{-- Submit --}}
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-save-line me-1"></i> حفظ
                                </button>
                                <a href="{{ route('decision-os.career.index') }}" class="btn btn-outline-secondary">
                                    إلغاء
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
