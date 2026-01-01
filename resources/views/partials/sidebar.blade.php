<aside class="pe-app-sidebar" id="sidebar">
    <div class="pe-app-sidebar-logo px-6 d-flex align-items-center position-relative">
        <!--begin::Brand Image-->
        <a href="{{ route('decision-os.dashboard') }}" class="fs-18 fw-semibold">
            <img height="35" alt="Decision OS Logo" src="{{ asset('assets/images/logo.png') }}">
        </a>
        <!--end::Brand Image-->
    </div>
    <nav class="pe-app-sidebar-menu nav nav-pills" data-simplebar id="sidebar-simplebar">
        <ul class="pe-main-menu list-unstyled">

            {{-- ========================================= --}}
            {{-- Decision OS - Main Dashboard --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                <span class="text-primary fw-bold">{{ __('app.app_name') }}</span>
            </li>

            {{-- Dashboard Link --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.dashboard') }}" class="pe-nav-link {{ request()->routeIs('decision-os.dashboard') ? 'active' : '' }}">
                    <i class="ri-dashboard-3-line pe-nav-icon text-primary"></i>
                    <span class="pe-nav-content">{{ __('app.nav.dashboard') }}</span>
                </a>
            </li>

            {{-- Getting Started Guide --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.getting-started') }}" class="pe-nav-link {{ request()->routeIs('decision-os.getting-started') ? 'active' : '' }}">
                    <i class="ri-rocket-line pe-nav-icon text-warning"></i>
                    <span class="pe-nav-content">{{ __('app.nav.getting_started') }}</span>
                </a>
            </li>

            {{-- Quick Daily Entry --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.daily-input') }}" class="pe-nav-link {{ request()->routeIs('decision-os.daily-input') ? 'active' : '' }}">
                    <i class="ri-add-box-line pe-nav-icon text-success"></i>
                    <span class="pe-nav-content">{{ __('app.nav.daily_input') }}</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Focus & Work --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                {{ __('app.nav.focus_work') }}
            </li>

            {{-- Today One Thing --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.tasks.today') }}" class="pe-nav-link {{ request()->routeIs('decision-os.tasks.today') ? 'active' : '' }}">
                    <i class="ri-focus-3-line pe-nav-icon text-primary"></i>
                    <span class="pe-nav-content">{{ __('app.tasks.today_one_thing') }}</span>
                </a>
            </li>

            {{-- Pomodoro --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.pomodoro.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.pomodoro.*') ? 'active' : '' }}">
                    <i class="ri-timer-line pe-nav-icon text-danger"></i>
                    <span class="pe-nav-content">{{ __('app.nav.pomodoro') }}</span>
                </a>
            </li>

            {{-- All Tasks --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.tasks.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.tasks.index') ? 'active' : '' }}">
                    <i class="ri-task-line pe-nav-icon"></i>
                    <span class="pe-nav-content">{{ __('app.nav.tasks') }}</span>
                </a>
            </li>

            {{-- Projects --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.projects.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.projects.*') ? 'active' : '' }}">
                    <i class="ri-folder-line pe-nav-icon text-info"></i>
                    <span class="pe-nav-content">{{ __('app.nav.projects') }}</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Career & Business --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                التطوير والأعمال
            </li>

            {{-- Career Growth --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.career.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.career.*') ? 'active' : '' }}">
                    <i class="ri-briefcase-line pe-nav-icon text-primary"></i>
                    <span class="pe-nav-content">{{ __('app.nav.career') }}</span>
                </a>
            </li>

            {{-- Business & Assets --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.business.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.business.*') ? 'active' : '' }}">
                    <i class="ri-building-2-line pe-nav-icon text-success"></i>
                    <span class="pe-nav-content">{{ __('app.nav.business') }}</span>
                    @if(!\App\Models\BusinessAsset::isModuleUnlocked(auth()->id()))
                        <span class="badge bg-danger-subtle text-danger ms-auto">
                            <i class="ri-lock-2-line"></i>
                        </span>
                    @endif
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Finance --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                {{ __('app.nav.money') }}
            </li>

            {{-- Expenses --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.expenses.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.expenses.*') ? 'active' : '' }}">
                    <i class="ri-wallet-3-line pe-nav-icon text-danger"></i>
                    <span class="pe-nav-content">{{ __('app.nav.expenses') }}</span>
                </a>
            </li>

            {{-- Incomes --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.incomes.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.incomes.*') ? 'active' : '' }}">
                    <i class="ri-money-dollar-circle-line pe-nav-icon text-success"></i>
                    <span class="pe-nav-content">{{ __('app.nav.incomes') }}</span>
                </a>
            </li>

            {{-- Clients --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.clients.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.clients.*') ? 'active' : '' }}">
                    <i class="ri-user-star-line pe-nav-icon text-warning"></i>
                    <span class="pe-nav-content">{{ __('app.nav.clients') }}</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Spiritual & Health --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                {{ __('app.nav.spiritual_health') }}
            </li>

            {{-- Quran Progress --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.quran.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.quran.*') ? 'active' : '' }}">
                    <i class="ri-book-open-line pe-nav-icon text-success"></i>
                    <span class="pe-nav-content">{{ __('app.nav.quran') }}</span>
                </a>
            </li>

            {{-- Adhkar --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.adhkar') }}" class="pe-nav-link {{ request()->routeIs('decision-os.adhkar*') ? 'active' : '' }}">
                    <i class="ri-hearts-line pe-nav-icon text-info"></i>
                    <span class="pe-nav-content">{{ __('app.nav.adhkar') }}</span>
                </a>
            </li>

            {{-- Metrics History --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.metrics.history') }}" class="pe-nav-link {{ request()->routeIs('decision-os.metrics.*') ? 'active' : '' }}">
                    <i class="ri-heart-pulse-line pe-nav-icon text-danger"></i>
                    <span class="pe-nav-content">{{ __('app.nav.life_metrics') }}</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Review & Goals --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                {{ __('app.nav.review_goals') }}
            </li>

            {{-- Weekly Review --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.weekly-review.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.weekly-review.*') ? 'active' : '' }}">
                    <i class="ri-calendar-check-line pe-nav-icon text-primary"></i>
                    <span class="pe-nav-content">{{ __('app.nav.weekly_review') }}</span>
                </a>
            </li>

            {{-- Yearly Goals --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.goals.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.goals.*') ? 'active' : '' }}">
                    <i class="ri-award-line pe-nav-icon text-warning"></i>
                    <span class="pe-nav-content">{{ __('app.nav.goals') }}</span>
                </a>
            </li>

            {{-- Decisions Log --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.decisions.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.decisions.*') ? 'active' : '' }}">
                    <i class="ri-git-commit-line pe-nav-icon text-info"></i>
                    <span class="pe-nav-content">{{ __('app.nav.decisions') }}</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- User Section --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                {{ __('app.nav.account') }}
            </li>

            {{-- Profile --}}
            <li class="pe-slide">
                <a href="{{ route('profile.edit') }}" class="pe-nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                    <i class="ri-user-settings-line pe-nav-icon"></i>
                    <span class="pe-nav-content">{{ __('app.nav.profile') }}</span>
                </a>
            </li>

            {{-- Logout --}}
            <li class="pe-slide">
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="pe-nav-link text-danger">
                    <i class="ri-logout-box-r-line pe-nav-icon"></i>
                    <span class="pe-nav-content">{{ __('app.auth.logout') }}</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>
