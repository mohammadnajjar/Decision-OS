{{-- KPI Widget Component --}}
@php
    $hasTarget = isset($kpi['target']);
    $value = $kpi['value'] ?? 0;
    $target = $kpi['target'] ?? 0;
    $percentage = $hasTarget && $target > 0 ? min(100, ($value / $target) * 100) : 100;

    $isGood = !$hasTarget || $value >= $target;
    $color = $kpi['color'] ?? ($isGood ? 'success' : ($value >= $target * 0.5 ? 'warning' : 'danger'));
    $icon = $kpi['icon'] ?? 'ri-bar-chart-line';
@endphp

<div class="col-xl-3 col-md-4 col-sm-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <span class="text-muted fs-12">
                    <i class="{{ $icon }} me-1"></i>
                    {{ $kpi['label'] }}
                </span>
                @if($hasTarget)
                    <span class="badge bg-{{ $color }}-subtle text-{{ $color }}">
                        {{ $value }}/{{ $target }}
                    </span>
                @endif
            </div>
            <div class="d-flex align-items-baseline gap-2">
                <h3 class="mb-0 fw-bold text-{{ $color }}">
                    @if(isset($kpi['format']) && $kpi['format'] === 'currency')
                        ${{ number_format($value, 2) }}
                    @else
                        {{ $value }}
                    @endif
                </h3>
                <small class="text-muted">{{ $kpi['unit'] ?? '' }}</small>
            </div>
            @if($hasTarget)
                <div class="progress mt-2" style="height: 4px;">
                    <div class="progress-bar bg-{{ $color }}" role="progressbar" style="width: {{ $percentage }}%"></div>
                </div>
            @endif
        </div>
    </div>
</div>
