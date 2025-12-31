@extends('partials.layouts.master')

@section('title', 'تفاصيل القرار | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'سجل القرارات')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">{{ $decision->title }}</h5>
                    @php
                        $resultBadge = match($decision->result) {
                            'win' => 'bg-success',
                            'lose' => 'bg-danger',
                            default => 'bg-warning',
                        };
                        $resultText = match($decision->result) {
                            'win' => 'فوز ✓',
                            'lose' => 'خسارة ✗',
                            default => 'معلق',
                        };
                    @endphp
                    <span class="badge {{ $resultBadge }}">{{ $resultText }}</span>
                </div>
            </div>
            <div class="card-body">
                {{-- Context --}}
                <div class="mb-4">
                    <label class="text-muted small">السياق</label>
                    <p class="mb-0">
                        @php
                            $contexts = [
                                'financial' => 'مالي',
                                'work' => 'عمل',
                                'client' => 'عميل',
                                'personal' => 'شخصي',
                                'business' => 'أعمال',
                            ];
                        @endphp
                        <span class="badge bg-info-subtle text-info">
                            {{ $contexts[$decision->context] ?? $decision->context }}
                        </span>
                    </p>
                </div>

                {{-- Reason --}}
                @if($decision->reason)
                <div class="mb-4">
                    <label class="text-muted small">السبب</label>
                    <div class="bg-light p-3 rounded">
                        {!! nl2br(e($decision->reason)) !!}
                    </div>
                </div>
                @endif

                {{-- Expected Outcome --}}
                @if($decision->expected_outcome)
                <div class="mb-4">
                    <label class="text-muted small">النتيجة المتوقعة</label>
                    <div class="bg-primary-subtle p-3 rounded">
                        {!! nl2br(e($decision->expected_outcome)) !!}
                    </div>
                </div>
                @endif

                {{-- Review Date --}}
                @if($decision->review_date)
                <div class="mb-4">
                    <label class="text-muted small">تاريخ المراجعة</label>
                    <p class="mb-0">
                        {{ $decision->review_date->format('Y/m/d') }}
                        @if($decision->review_date->isPast() && $decision->result === 'pending')
                            <span class="badge bg-warning-subtle text-warning ms-2">يحتاج مراجعة</span>
                        @endif
                    </p>
                </div>
                @endif

                {{-- Actual Outcome (if reviewed) --}}
                @if($decision->actual_outcome)
                <div class="mb-4">
                    <label class="text-muted small">النتيجة الفعلية</label>
                    <div class="{{ $decision->result === 'win' ? 'bg-success-subtle' : 'bg-danger-subtle' }} p-3 rounded">
                        {!! nl2br(e($decision->actual_outcome)) !!}
                    </div>
                </div>
                @endif

                {{-- Lessons Learned --}}
                @if($decision->lessons_learned)
                <div class="mb-4">
                    <label class="text-muted small">الدروس المستفادة</label>
                    <div class="bg-info-subtle p-3 rounded">
                        {!! nl2br(e($decision->lessons_learned)) !!}
                    </div>
                </div>
                @endif

                {{-- Timestamps --}}
                <div class="row text-muted small">
                    <div class="col-6">
                        <i class="ri-calendar-line me-1"></i>
                        تم الإنشاء: {{ $decision->created_at->format('Y/m/d H:i') }}
                    </div>
                    <div class="col-6 text-end">
                        <i class="ri-refresh-line me-1"></i>
                        آخر تحديث: {{ $decision->updated_at->format('Y/m/d H:i') }}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('decision-os.decisions.index') }}" class="btn btn-soft-secondary">
                        <i class="ri-arrow-right-line me-1"></i> العودة للقائمة
                    </a>
                    @if($decision->result === 'pending' && $decision->review_date && $decision->review_date->isPast())
                        <a href="{{ route('decision-os.decisions.review', $decision) }}" class="btn btn-warning">
                            <i class="ri-edit-line me-1"></i> مراجعة الآن
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
