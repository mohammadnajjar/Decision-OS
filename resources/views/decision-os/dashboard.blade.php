@extends('partials.layouts.master')

@section('title', __('app.app_name') . ' | ' . __('app.nav.dashboard'))
@section('title-sub', __('app.app_name'))
@section('pagetitle', __('app.nav.dashboard'))

@section('content')

    <div id="layout-wrapper">

        {{-- Lock Warning --}}
        @if($isLocked)
        <div class="row mb-3">
            <div class="col-12">
                <div class="alert alert-danger border-0 shadow-sm d-flex align-items-center" role="alert">
                    <div class="avatar-md d-flex justify-content-center align-items-center rounded-circle bg-danger text-white me-3">
                        <i class="ri-lock-line fs-3"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="text-danger mb-1">🔒 {{ __('app.status.system_locked') }}</h5>
                        <p class="mb-2">{{ $lockMessage }}</p>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($redStatuses as $red)
                                <span class="badge bg-danger-subtle text-danger">
                                    <i class="ri-error-warning-line me-1"></i>
                                    {{ $red['label'] }}: {{ $red['fix_action'] }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Quick Actions Bar --}}
        <div class="row mb-3">
            <div class="col-12">
                <div class="card bg-primary-subtle border-0">
                    <div class="card-body py-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <div class="d-flex align-items-center gap-2">
                                <div class="avatar-sm d-flex justify-content-center align-items-center rounded-circle bg-primary text-white">
                                    <i class="ri-calendar-check-line"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 text-primary">{{ now()->translatedFormat('l') }}</h6>
                                    <small class="text-muted">{{ now()->format('Y/m/d') }}</small>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('decision-os.daily-input') }}" class="btn btn-primary">
                                    <i class="ri-add-circle-line me-1"></i> {{ __('app.nav.daily_input') }}
                                </a>
                                <a href="{{ route('decision-os.pomodoro.index') }}" class="btn btn-outline-danger">
                                    <i class="ri-timer-line me-1"></i> {{ __('app.nav.pomodoro') }}
                                </a>
                                <a href="{{ route('decision-os.weekly-review.create') }}" class="btn btn-outline-secondary">
                                    <i class="ri-file-list-3-line me-1"></i> {{ __('app.nav.weekly_review') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 1: Module Status Cards --}}
        <div class="row g-3 mb-3">
            @include('decision-os.components.module-card', [
                'title' => __('app.modules.life_discipline'),
                'icon' => 'ri-heart-pulse-line',
                'status' => $moduleStatuses['life_discipline'],
                'link' => route('decision-os.metrics.index')
            ])
            @include('decision-os.components.module-card', [
                'title' => __('app.modules.financial_safety'),
                'icon' => 'ri-wallet-3-line',
                'status' => $moduleStatuses['financial_safety'],
                'link' => route('decision-os.expenses.index')
            ])
            @include('decision-os.components.module-card', [
                'title' => __('app.modules.focus_system'),
                'icon' => 'ri-focus-3-line',
                'status' => $moduleStatuses['focus_system'],
                'link' => route('decision-os.tasks.index')
            ])
            @include('decision-os.components.module-card', [
                'title' => __('app.modules.pomodoro'),
                'icon' => 'ri-timer-line',
                'status' => $moduleStatuses['pomodoro'],
                'link' => route('decision-os.pomodoro.history')
            ])
        </div>

        {{-- Row 2: Today One Thing + Pomodoro Timer --}}
        <div class="row g-3 mb-3">
            <div class="col-xl-8">
                @include('decision-os.components.today-one-thing', ['task' => $todayTask, 'topTasks' => $topTasks])
            </div>
            <div class="col-xl-4">
                @include('decision-os.components.pomodoro-timer')
            </div>
        </div>

        {{-- Row 3: Warnings Box (if any) --}}
        @if($warnings->isNotEmpty())
        <div class="row mb-3">
            <div class="col-12">
                @include('decision-os.components.warnings-box', ['warnings' => $warnings])
            </div>
        </div>
        @endif

        {{-- Row 4: Quick KPIs Grid --}}
        <div class="row g-3 mb-3">
            @foreach($kpis as $kpi)
                @include('decision-os.components.kpi-widget', ['kpi' => $kpi])
            @endforeach
        </div>

        {{-- Row 5: Burnout Monitor --}}
        <div class="row mb-3">
            <div class="col-12">
                @include('decision-os.components.burnout-indicator', ['burnoutData' => $burnoutData])
            </div>
        </div>

        {{-- Row 6: Decisions Due + Weekly Review --}}
        <div class="row g-3">
            @if($decisionsDue->isNotEmpty())
            <div class="col-xl-6">
                @include('decision-os.components.decisions-due', ['decisions' => $decisionsDue])
            </div>
            @endif
            <div class="{{ $decisionsDue->isNotEmpty() ? 'col-xl-6' : 'col-12' }}">
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
