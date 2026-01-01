@extends('partials.layouts.master')

@section('title', 'سجل المقاييس | Decision OS')
@section('pagetitle', 'سجل المقاييس')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="mb-1">سجل المقاييس</h4>
                    <p class="text-muted mb-0">عرض تاريخ جميع المقاييس المُدخلة</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('decision-os.metrics.index') }}" class="btn btn-primary">
                        <i class="bi bi-plus-lg me-1"></i> إدخال قيم جديدة
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter by Module -->
    <div class="card mb-4">
        <div class="card-body py-3">
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('decision-os.metrics.history') }}" class="btn btn-sm {{ !$module ? 'btn-primary' : 'btn-outline-primary' }}">
                    الكل
                </a>
                @foreach($modules as $mod)
                    <a href="{{ route('decision-os.metrics.history', ['module' => $mod]) }}" 
                       class="btn btn-sm {{ $module === $mod ? 'btn-primary' : 'btn-outline-primary' }}">
                        @switch($mod)
                            @case('life_discipline')
                                الانضباط والحياة
                                @break
                            @case('financial_safety')
                                الأمان المالي
                                @break
                            @case('focus_system')
                                نظام التركيز
                                @break
                            @case('pomodoro_system')
                                بومودورو
                                @break
                            @default
                                {{ $mod }}
                        @endswitch
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Values Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            @if($values->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>التاريخ</th>
                                <th>المقياس</th>
                                <th>الوحدة</th>
                                <th>القيمة</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($values as $value)
                                <tr>
                                    <td>{{ $value->date->format('Y-m-d') }}</td>
                                    <td>{{ $value->metric->name ?? '-' }}</td>
                                    <td>
                                        <span class="badge bg-light text-dark">
                                            @switch($value->metric->module ?? '')
                                                @case('life_discipline')
                                                    الانضباط
                                                    @break
                                                @case('financial_safety')
                                                    مالي
                                                    @break
                                                @case('focus_system')
                                                    تركيز
                                                    @break
                                                @case('pomodoro_system')
                                                    بومودورو
                                                    @break
                                                @default
                                                    {{ $value->metric->module ?? '-' }}
                                            @endswitch
                                        </span>
                                    </td>
                                    <td class="fw-bold">{{ number_format($value->value, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-3">
                    {{ $values->appends(['module' => $module])->links() }}
                </div>
            @else
                <div class="text-center py-5 text-muted">
                    <i class="bi bi-bar-chart fs-1"></i>
                    <p class="mt-2">لا توجد مقاييس مسجلة بعد</p>
                    <a href="{{ route('decision-os.metrics.index') }}" class="btn btn-primary">
                        ابدأ بإدخال المقاييس
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
