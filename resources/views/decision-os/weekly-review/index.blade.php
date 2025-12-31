@extends('partials.layouts.master')

@section('title', 'Decision OS | سجل المراجعات')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'سجل المراجعات الأسبوعية')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">سجل المراجعات الأسبوعية</h4>
                        <p class="text-muted mb-0">جميع مراجعاتك الأسبوعية السابقة</p>
                    </div>
                    <a href="{{ route('decision-os.weekly-review.create') }}" class="btn btn-primary">
                        <i class="ri-add-line me-1"></i> مراجعة جديدة
                    </a>
                </div>
            </div>
        </div>

        {{-- Reviews List --}}
        <div class="row">
            @forelse($reviews as $review)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">
                            <i class="ri-calendar-check-line me-2 text-primary"></i>
                            الأسبوع {{ $review->week_number }}
                        </h6>
                        <span class="badge bg-secondary">{{ $review->year }}</span>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-around mb-3 text-center">
                            <div>
                                <div class="avatar-sm mx-auto mb-1 d-flex justify-content-center align-items-center rounded-circle bg-primary-subtle text-primary">
                                    {{ $review->productivity_rating }}
                                </div>
                                <small class="text-muted">إنتاجية</small>
                            </div>
                            <div>
                                <div class="avatar-sm mx-auto mb-1 d-flex justify-content-center align-items-center rounded-circle bg-success-subtle text-success">
                                    {{ $review->health_rating }}
                                </div>
                                <small class="text-muted">صحة</small>
                            </div>
                            <div>
                                <div class="avatar-sm mx-auto mb-1 d-flex justify-content-center align-items-center rounded-circle bg-warning-subtle text-warning">
                                    {{ $review->happiness_rating }}
                                </div>
                                <small class="text-muted">سعادة</small>
                            </div>
                        </div>

                        @if($review->wins)
                        <div class="mb-2">
                            <small class="text-success fw-medium">
                                <i class="ri-trophy-line me-1"></i> الإنجازات:
                            </small>
                            <p class="mb-0 text-truncate-2">{{ Str::limit($review->wins, 100) }}</p>
                        </div>
                        @endif

                        <small class="text-muted">
                            {{ $review->created_at->diffForHumans() }}
                        </small>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('decision-os.weekly-review.show', $review) }}" class="btn btn-outline-primary w-100">
                            <i class="ri-eye-line me-1"></i> عرض التفاصيل
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <div class="avatar-lg mx-auto mb-4 d-flex justify-content-center align-items-center rounded-circle bg-info-subtle text-info">
                            <i class="ri-calendar-line fs-1"></i>
                        </div>
                        <h5>لا توجد مراجعات بعد</h5>
                        <p class="text-muted mb-4">ابدأ بإنشاء أول مراجعة أسبوعية لك</p>
                        <a href="{{ route('decision-os.weekly-review.create') }}" class="btn btn-primary">
                            <i class="ri-add-line me-1"></i> أنشئ مراجعة جديدة
                        </a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($reviews->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $reviews->links() }}
        </div>
        @endif

    </div>
</div>
@endsection
