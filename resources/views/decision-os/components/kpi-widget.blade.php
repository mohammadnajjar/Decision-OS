{{-- KPI Widget Component (Theme-styled) --}}
@php
    $hasTarget = isset($kpi['target']);
    $value = $kpi['value'] ?? 0;
    $target = $kpi['target'] ?? 0;
    $percentage = $hasTarget && $target > 0 ? min(100, ($value / $target) * 100) : 100;

    $isGood = !$hasTarget || $value >= $target;
    $color = $kpi['color'] ?? ($isGood ? 'success' : ($value >= $target * 0.5 ? 'warning' : 'danger'));
    $icon = $kpi['icon'] ?? 'ri-bar-chart-line';

    // Get user currency
    $currency = auth()->user()->currency ?? 'AED';
    $currencySymbol = $currency === 'AED' ? 'د.إ' : ($currency === 'USD' ? '$' : $currency);

    // Format value based on format type
    if (isset($kpi['format']) && $kpi['format'] === 'currency') {
        $displayValue = $currencySymbol . ' ' . number_format($value, 2);
    } else {
        $displayValue = $value;
    }
@endphp

<div class="card h-100">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <p class="fw-medium text-muted mb-0">{{ $kpi['label'] }}</p>
                <h2 class="mt-2 mb-2 fs-22 fw-semibold text-{{ $color }}">
                    {{ $displayValue }}
                    @if($kpi['unit'])
                        <small class="fs-12 text-muted fw-normal">{{ $kpi['unit'] }}</small>
                    @endif
                </h2>
                @if($hasTarget)
                    <p class="mb-0 text-muted text-truncate">
                        <span class="badge bg-{{ $color }}-subtle text-{{ $color }} mb-0">
                            <i class="{{ $value >= $target ? 'ri-arrow-up-line' : 'ri-arrow-down-line' }} align-middle"></i>
                            {{ round($percentage) }}%
                        </span>
                        <span class="fs-11">{{ __('app.common.from_target') }} ({{ $target }})</span>
                    </p>
                @endif
            </div>
            <div class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-{{ $color }} border border-dark border-opacity-20 shadow-sm fs-5">
                <i class="{{ $icon }}"></i>
            </div>
        </div>
        @if($hasTarget)
            <div class="progress mt-3" style="height: 4px;">
                <div class="progress-bar bg-{{ $color }}" role="progressbar" style="width: {{ $percentage }}%"></div>
            </div>
        @endif
    </div>
</div>
