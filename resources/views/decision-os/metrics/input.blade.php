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
                        <p class="text-muted mb-0">{{ \Carbon\Carbon::parse($date)->format('l، d F Y') }}</p>
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

            {{-- Metrics Grid --}}
            @foreach($categories as $category => $categoryMetrics)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        @switch($category)
                            @case('health')
                                <i class="ri-heart-line text-danger me-2"></i> الصحة
                                @break
                            @case('work')
                                <i class="ri-briefcase-line text-primary me-2"></i> العمل
                                @break
                            @case('financial')
                                <i class="ri-money-dollar-circle-line text-success me-2"></i> المالية
                                @break
                            @case('relationships')
                                <i class="ri-user-heart-line text-pink me-2"></i> العلاقات
                                @break
                            @case('spirituality')
                                <i class="ri-sun-line text-warning me-2"></i> الروحانية
                                @break
                            @default
                                <i class="ri-layout-grid-line text-secondary me-2"></i> {{ $category }}
                        @endswitch
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @foreach($categoryMetrics as $metric)
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label class="form-label fw-medium" for="metric-{{ $metric->id }}">
                                    {{ $metric->name }}
                                    @if($metric->unit)
                                        <small class="text-muted">({{ $metric->unit }})</small>
                                    @endif
                                </label>

                                @if($metric->type === 'boolean')
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
                                @elseif($metric->type === 'scale')
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="range" class="form-range" min="1" max="10"
                                               id="metric-{{ $metric->id }}"
                                               name="metrics[{{ $metric->id }}]"
                                               value="{{ $values[$metric->id] ?? 5 }}"
                                               oninput="document.getElementById('metric-{{ $metric->id }}-value').textContent = this.value">
                                        <span id="metric-{{ $metric->id }}-value" class="badge bg-primary rounded-pill" style="min-width: 40px;">
                                            {{ $values[$metric->id] ?? 5 }}
                                        </span>
                                    </div>
                                @elseif($metric->type === 'number')
                                    <input type="number" class="form-control"
                                           id="metric-{{ $metric->id }}"
                                           name="metrics[{{ $metric->id }}]"
                                           value="{{ $values[$metric->id] ?? '' }}"
                                           step="{{ $metric->step ?? 1 }}"
                                           min="0"
                                           placeholder="أدخل القيمة">
                                @elseif($metric->type === 'time')
                                    <input type="time" class="form-control"
                                           id="metric-{{ $metric->id }}"
                                           name="metrics[{{ $metric->id }}]"
                                           value="{{ $values[$metric->id] ?? '' }}">
                                @elseif($metric->type === 'duration')
                                    <div class="input-group">
                                        <input type="number" class="form-control"
                                               id="metric-{{ $metric->id }}"
                                               name="metrics[{{ $metric->id }}]"
                                               value="{{ $values[$metric->id] ?? '' }}"
                                               min="0"
                                               placeholder="0">
                                        <span class="input-group-text">{{ $metric->unit ?? 'دقيقة' }}</span>
                                    </div>
                                @else
                                    <input type="text" class="form-control"
                                           id="metric-{{ $metric->id }}"
                                           name="metrics[{{ $metric->id }}]"
                                           value="{{ $values[$metric->id] ?? '' }}"
                                           placeholder="أدخل القيمة">
                                @endif

                                @if($metric->description)
                                    <small class="text-muted d-block mt-1">{{ $metric->description }}</small>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Notes --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="ri-sticky-note-line text-info me-2"></i> ملاحظات اليوم
                    </h5>
                </div>
                <div class="card-body">
                    <textarea class="form-control" name="notes" rows="3" placeholder="أي ملاحظات أو أفكار تريد تسجيلها...">{{ $notes ?? '' }}</textarea>
                </div>
            </div>

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
        window.location.href = '{{ route("decision-os.metrics.input") }}?date=' + date;
    }
</script>
@endsection
