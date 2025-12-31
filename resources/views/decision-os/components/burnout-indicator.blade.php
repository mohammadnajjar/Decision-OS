{{-- Burnout Indicator Component --}}
@php
    $riskColors = [
        'low' => ['bg' => 'bg-success', 'text' => 'text-success', 'icon' => 'ri-heart-line'],
        'medium' => ['bg' => 'bg-warning', 'text' => 'text-warning', 'icon' => 'ri-heart-pulse-line'],
        'high' => ['bg' => 'bg-danger', 'text' => 'text-danger', 'icon' => 'ri-heart-3-line'],
    ];
    $colors = $riskColors[$burnoutData['risk']] ?? $riskColors['low'];
@endphp

<div class="card {{ $burnoutData['risk'] === 'high' ? 'border-danger' : '' }}">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-auto">
                <div class="avatar-lg d-flex justify-content-center align-items-center rounded-circle {{ $colors['bg'] }}-subtle {{ $colors['text'] }} fs-1">
                    <i class="{{ $colors['icon'] }}"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-center gap-2 mb-1">
                    <h5 class="mb-0">مؤشر الإرهاق</h5>
                    <span class="badge {{ $colors['bg'] }}">{{ $burnoutData['risk_label'] }}</span>
                </div>
                <p class="mb-0 {{ $colors['text'] }}">{{ $burnoutData['message'] }}</p>
            </div>
            <div class="col-auto">
                <div class="row text-center">
                    <div class="col-auto px-3 border-end">
                        <div class="fs-5 fw-bold">{{ $burnoutData['metrics']['work_streak'] }}</div>
                        <small class="text-muted">أيام عمل متتالية</small>
                    </div>
                    <div class="col-auto px-3 border-end">
                        <div class="fs-5 fw-bold">{{ $burnoutData['metrics']['avg_work_hours'] }}</div>
                        <small class="text-muted">ساعات/يوم</small>
                    </div>
                    <div class="col-auto px-3 border-end">
                        <div class="fs-5 fw-bold">{{ $burnoutData['metrics']['pomodoro_load'] }}</div>
                        <small class="text-muted">Pomodoros/يوم</small>
                    </div>
                    <div class="col-auto px-3">
                        <div class="fs-5 fw-bold">{{ $burnoutData['metrics']['rest_days'] }}</div>
                        <small class="text-muted">أيام راحة</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
