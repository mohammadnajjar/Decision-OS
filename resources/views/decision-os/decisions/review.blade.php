@extends('partials.layouts.master')

@section('title', 'Decision OS | مراجعة قرار')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'مراجعة القرار')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Decision Info Card --}}
                <div class="card mb-4">
                    <div class="card-header bg-primary-subtle">
                        <h5 class="card-title mb-0 text-primary">
                            <i class="ri-git-commit-line me-2"></i>
                            {{ $decision->title }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="text-muted small">السياق</label>
                                <p class="mb-0 fw-medium">{{ ucfirst($decision->context) }}</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="text-muted small">تاريخ القرار</label>
                                <p class="mb-0">{{ $decision->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>

                        @if($decision->reason)
                        <div class="mb-3">
                            <label class="text-muted small">السبب</label>
                            <p class="mb-0">{{ $decision->reason }}</p>
                        </div>
                        @endif

                        @if($decision->expected_outcome)
                        <div class="p-3 bg-light rounded">
                            <label class="text-muted small">النتيجة المتوقعة</label>
                            <p class="mb-0">{{ $decision->expected_outcome }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                {{-- Review Form --}}
                <div class="card border-warning">
                    <div class="card-header bg-warning-subtle">
                        <h5 class="card-title mb-0 text-warning">
                            <i class="ri-edit-line me-2"></i>
                            مراجعة النتيجة
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('decision-os.decisions.store-review', $decision) }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label fw-medium">ما الذي حدث فعلاً؟ <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="actual_outcome" rows="4" required
                                          placeholder="صف النتيجة الفعلية لهذا القرار..."></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">النتيجة <span class="text-danger">*</span></label>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <input type="radio" class="btn-check" name="result" value="win" id="result-win" required>
                                        <label class="btn btn-outline-success w-100 py-3" for="result-win">
                                            <i class="ri-trophy-line fs-4 d-block mb-2"></i>
                                            <strong>فوز</strong>
                                            <small class="d-block">القرار كان صحيحاً</small>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" class="btn-check" name="result" value="lose" id="result-lose" required>
                                        <label class="btn btn-outline-danger w-100 py-3" for="result-lose">
                                            <i class="ri-close-circle-line fs-4 d-block mb-2"></i>
                                            <strong>خسارة</strong>
                                            <small class="d-block">القرار كان خاطئاً</small>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">الدروس المستفادة</label>
                                <textarea class="form-control" name="lessons_learned" rows="3"
                                          placeholder="ماذا تعلمت من هذا القرار؟ ما الذي ستفعله بشكل مختلف؟"></textarea>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('decision-os.decisions.index') }}" class="btn btn-outline-secondary">
                                    <i class="ri-arrow-right-line me-1"></i> لاحقاً
                                </a>
                                <button type="submit" class="btn btn-warning btn-lg">
                                    <i class="ri-check-line me-1"></i> حفظ المراجعة
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
