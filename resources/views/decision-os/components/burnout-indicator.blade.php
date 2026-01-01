{{-- Burnout Indicator Component --}}
@php
    $riskColors = [
        'low' => ['bg' => 'bg-success', 'text' => 'text-success', 'icon' => 'ri-heart-line', 'border' => 'border-success'],
        'medium' => ['bg' => 'bg-warning', 'text' => 'text-warning', 'icon' => 'ri-heart-pulse-line', 'border' => 'border-warning'],
        'high' => ['bg' => 'bg-danger', 'text' => 'text-danger', 'icon' => 'ri-heart-3-line', 'border' => 'border-danger'],
    ];
    $colors = $riskColors[$burnoutData['risk']] ?? $riskColors['low'];
@endphp

<div class="card {{ $burnoutData['risk'] !== 'low' ? $colors['border'] : '' }}">
    <div class="card-header bg-transparent">
        <div class="d-flex align-items-center gap-2">
            <i class="{{ $colors['icon'] }} fs-4 {{ $colors['text'] }}"></i>
            <h5 class="card-title mb-0">مؤشر الإرهاق</h5>
            <span class="badge {{ $colors['bg'] }} ms-auto">{{ $burnoutData['risk_label'] }}</span>
        </div>
    </div>
    <div class="card-body">
        <div class="row align-items-center g-3">
            <div class="col-lg-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="avatar-lg d-flex justify-content-center align-items-center rounded-circle {{ $colors['bg'] }}-subtle {{ $colors['text'] }} fs-1 flex-shrink-0">
                        <i class="{{ $colors['icon'] }}"></i>
                    </div>
                    <div>
                        <p class="mb-0 {{ $colors['text'] }} fw-medium">{{ $burnoutData['message'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row g-3 text-center">
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-light rounded">
                            <div class="fs-4 fw-bold {{ $burnoutData['metrics']['work_streak'] > 5 ? 'text-warning' : '' }}">
                                {{ $burnoutData['metrics']['work_streak'] }}
                            </div>
                            <small class="text-muted">أيام عمل متتالية</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-light rounded">
                            <div class="fs-4 fw-bold {{ $burnoutData['metrics']['avg_work_hours'] > 10 ? 'text-danger' : '' }}">
                                {{ $burnoutData['metrics']['avg_work_hours'] }}
                            </div>
                            <small class="text-muted">ساعات/يوم</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-light rounded">
                            <div class="fs-4 fw-bold">{{ $burnoutData['metrics']['pomodoro_load'] }}</div>
                            <small class="text-muted">Pomodoros/يوم</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-3 bg-light rounded">
                            <div class="fs-4 fw-bold {{ $burnoutData['metrics']['rest_days'] < 1 ? 'text-danger' : 'text-success' }}">
                                {{ $burnoutData['metrics']['rest_days'] }}
                            </div>
                            <small class="text-muted">أيام راحة/أسبوع</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
