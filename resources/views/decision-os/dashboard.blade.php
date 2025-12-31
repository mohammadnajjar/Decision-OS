@extends('partials.layouts.master')

@section('title', 'Decision OS | Dashboard')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'Dashboard')

@section('content')

    <div id="layout-wrapper">

        {{-- Lock Warning --}}
        @if($isLocked)
        <div class="row mb-3">
            <div class="col-12">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="ri-lock-line fs-4 me-2"></i>
                    <div>
                        <strong>{{ $lockMessage }}</strong>
                        <div class="mt-2">
                            @foreach($redStatuses as $red)
                                <span class="badge bg-danger me-1">{{ $red['label'] }}: {{ $red['fix_action'] }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Row 1: Today One Thing + Pomodoro --}}
        <div class="row">
            <div class="col-xl-8">
                @include('decision-os.components.today-one-thing', ['task' => $todayTask, 'topTasks' => $topTasks])
            </div>
            <div class="col-xl-4">
                @include('decision-os.components.pomodoro-timer')
            </div>
        </div>

        {{-- Row 2: Warnings Box --}}
        @if($warnings->isNotEmpty())
        <div class="row">
            <div class="col-12">
                @include('decision-os.components.warnings-box', ['warnings' => $warnings])
            </div>
        </div>
        @endif

        {{-- Row 3: Module Cards --}}
        <div class="row">
            @include('decision-os.components.module-card', [
                'title' => 'الانضباط والحياة',
                'icon' => 'ri-heart-pulse-line',
                'status' => $moduleStatuses['life_discipline'],
                'link' => route('decision-os.metrics.index')
            ])
            @include('decision-os.components.module-card', [
                'title' => 'الأمان المالي',
                'icon' => 'ri-wallet-3-line',
                'status' => $moduleStatuses['financial_safety'],
                'link' => route('decision-os.metrics.index')
            ])
            @include('decision-os.components.module-card', [
                'title' => 'نظام التركيز',
                'icon' => 'ri-focus-3-line',
                'status' => $moduleStatuses['focus_system'],
                'link' => route('decision-os.tasks.index')
            ])
            @include('decision-os.components.module-card', [
                'title' => 'Pomodoro',
                'icon' => 'ri-timer-line',
                'status' => $moduleStatuses['pomodoro'],
                'link' => route('decision-os.pomodoro.history')
            ])
        </div>

        {{-- Row 4: Burnout Monitor --}}
        <div class="row">
            <div class="col-12">
                @include('decision-os.components.burnout-indicator', ['burnoutData' => $burnoutData])
            </div>
        </div>

        {{-- Row 5: Quick KPIs --}}
        <div class="row">
            @foreach($kpis as $kpi)
                @include('decision-os.components.kpi-widget', ['kpi' => $kpi])
            @endforeach
        </div>

        {{-- Row 6: Decisions Due --}}
        @if($decisionsDue->isNotEmpty())
        <div class="row">
            <div class="col-12">
                @include('decision-os.components.decisions-due', ['decisions' => $decisionsDue])
            </div>
        </div>
        @endif

        {{-- Row 7: Weekly Review CTA --}}
        <div class="row">
            <div class="col-12">
                @include('decision-os.components.weekly-review-cta', [
                    'weeklyReviewDue' => $weeklyReviewDue,
                    'lastReview' => $lastReview
                ])
            </div>
        </div>

    </div>

@endsection

@section('js')
<script src="{{ asset('assets/js/decision-os/pomodoro-timer.js') }}"></script>
<script type="module" src="{{ asset('assets/js/app.js') }}"></script>
@endsection
