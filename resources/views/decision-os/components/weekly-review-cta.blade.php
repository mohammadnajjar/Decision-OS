{{-- Weekly Review CTA Component --}}
<div class="card {{ $weeklyReviewDue ? 'border-primary' : '' }}">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-auto">
                <div class="avatar-lg d-flex justify-content-center align-items-center rounded-circle {{ $weeklyReviewDue ? 'bg-primary' : 'bg-secondary' }}-subtle {{ $weeklyReviewDue ? 'text-primary' : 'text-secondary' }} fs-1">
                    <i class="ri-calendar-check-line"></i>
                </div>
            </div>
            <div class="col">
                <h5 class="mb-1">المراجعة الأسبوعية</h5>
                @if($weeklyReviewDue)
                    <p class="mb-0 text-primary">
                        <i class="ri-alarm-warning-line me-1"></i>
                        حان وقت المراجعة الأسبوعية!
                    </p>
                @elseif($lastReview)
                    <p class="mb-0 text-muted">
                        آخر مراجعة: {{ $lastReview->created_at->diffForHumans() }}
                    </p>
                @else
                    <p class="mb-0 text-muted">لم تقم بأي مراجعة بعد</p>
                @endif
            </div>
            <div class="col-auto">
                @if($weeklyReviewDue)
                    <a href="{{ route('decision-os.weekly-review.create') }}" class="btn btn-primary btn-lg">
                        <i class="ri-edit-line me-1"></i> ابدأ المراجعة
                    </a>
                @else
                    <a href="{{ route('decision-os.weekly-review.index') }}" class="btn btn-outline-secondary">
                        <i class="ri-history-line me-1"></i> عرض السجل
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
