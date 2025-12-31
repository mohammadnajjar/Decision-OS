@extends('partials.layouts.master')

@section('title', 'Decision OS | إدخال المقاييس اليومية')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'إدخال المقاييس اليومية')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-1">إدخال المقاييس اليومية</h4>
                        <p class="text-muted mb-0">{{ \Carbon\Carbon::parse($date)->translatedFormat('l، d F Y') }}</p>
                    </div>
                    <div class="d-flex gap-2">
                        <input type="date" id="metrics-date" class="form-control" value="{{ $date }}" onchange="changeDate(this.value)">
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('decision-os.metrics.store') }}" method="POST" id="metrics-form">
            @csrf
            <input type="hidden" name="date" value="{{ $date }}">

            {{-- Metrics Grid by Module --}}
            @foreach($categories as $module => $moduleMetrics)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        @switch($module)
                            @case('life_discipline')
                                <i class="ri-heart-pulse-line text-danger me-2"></i> الانضباط والحياة
                                @break
                            @case('financial_safety')
                                <i class="ri-money-dollar-circle-line text-success me-2"></i> الأمان المالي
                                @break
                            @case('focus_system')
                                <i class="ri-focus-3-line text-primary me-2"></i> نظام التركيز
                                @break
                            @case('pomodoro_system')
                                <i class="ri-timer-line text-warning me-2"></i> نظام بومودورو
                                @break
                            @default
                                <i class="ri-layout-grid-line text-secondary me-2"></i> {{ $module }}
                        @endswitch
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @foreach($moduleMetrics as $metric)
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label class="form-label fw-medium" for="metric-{{ $metric->id }}">
                                    {{ $metric->name }}
                                </label>

                                @if($metric->data_type === 'boolean')
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                               id="metric-{{ $metric->id }}"
                                               name="metrics[{{ $metric->id }}]"
                                               value="1"
                                               {{ ($values[$metric->id] ?? 0) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="metric-{{ $metric->id }}">
                                            نعم
                                        </label>
                                    </div>
                                @elseif($metric->data_type === 'integer')
                                    <input type="number" class="form-control"
                                           id="metric-{{ $metric->id }}"
                                           name="metrics[{{ $metric->id }}]"
                                           value="{{ $values[$metric->id] ?? '' }}"
                                           step="1"
                                           min="0"
                                           placeholder="أدخل القيمة">
                                @elseif($metric->data_type === 'decimal')
                                    <input type="number" class="form-control"
                                           id="metric-{{ $metric->id }}"
                                           name="metrics[{{ $metric->id }}]"
                                           value="{{ $values[$metric->id] ?? '' }}"
                                           step="0.01"
                                           min="0"
                                           placeholder="أدخل القيمة">
                                @else
                                    <input type="text" class="form-control"
                                           id="metric-{{ $metric->id }}"
                                           name="metrics[{{ $metric->id }}]"
                                           value="{{ $values[$metric->id] ?? '' }}"
                                           placeholder="أدخل القيمة">
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Submit --}}
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('decision-os.dashboard') }}" class="btn btn-outline-secondary">
                            <i class="ri-arrow-right-line me-1"></i> رجوع
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="ri-save-line me-1"></i> حفظ المقاييس
                        </button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection

@section('js')
<script>
    function changeDate(date) {
        window.location.href = '{{ route("decision-os.metrics.index") }}?date=' + date;
    }
</script>
@endsection
