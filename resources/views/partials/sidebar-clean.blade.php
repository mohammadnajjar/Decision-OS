<aside class="pe-app-sidebar" id="sidebar">
    <div class="pe-app-sidebar-logo px-6 d-flex align-items-center position-relative">
        <!--begin::Brand Image-->
        <a href="{{ route('decision-os.dashboard') }}" class="fs-18 fw-semibold">
            <img height="30" class="pe-app-sidebar-logo-default d-none" alt="Logo" src="{{ asset('assets/images/logo-dark.png') }}">
            <img height="30" class="pe-app-sidebar-logo-light d-none" alt="Logo" src="{{ asset('assets/images/logo-light.png') }}">
            <img height="30" class="pe-app-sidebar-logo-minimize d-none" alt="Logo" src="{{ asset('assets/images/logo-md.png') }}">
            <img height="30" class="pe-app-sidebar-logo-minimize-light d-none" alt="Logo" src="{{ asset('assets/images/logo-md-light.png') }}">
        </a>
        <!--end::Brand Image-->
    </div>
    <nav class="pe-app-sidebar-menu nav nav-pills" data-simplebar id="sidebar-simplebar">
        <ul class="pe-main-menu list-unstyled">

            {{-- ========================================= --}}
            {{-- Decision OS - Main Dashboard --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                <span class="text-primary fw-bold">DECISION OS</span>
            </li>

            {{-- Dashboard Link --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.dashboard') }}" class="pe-nav-link {{ request()->routeIs('decision-os.dashboard') ? 'active' : '' }}">
                    <i class="ri-dashboard-3-line pe-nav-icon text-primary"></i>
                    <span class="pe-nav-content">لوحة التحكم</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Daily Operations --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                العمليات اليومية
            </li>

            {{-- Metrics Input --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.metrics.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.metrics.*') ? 'active' : '' }}">
                    <i class="ri-file-list-3-line pe-nav-icon"></i>
                    <span class="pe-nav-content">إدخال البيانات</span>
                </a>
            </li>

            {{-- Tasks --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.tasks.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.tasks.*') ? 'active' : '' }}">
                    <i class="ri-task-line pe-nav-icon"></i>
                    <span class="pe-nav-content">المهام اليومية</span>
                </a>
            </li>

            {{-- Pomodoro --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.pomodoro.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.pomodoro.*') ? 'active' : '' }}">
                    <i class="ri-timer-line pe-nav-icon"></i>
                    <span class="pe-nav-content">بومودورو</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Records & Logs --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                السجلات
            </li>

            {{-- Decisions --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.decisions.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.decisions.*') ? 'active' : '' }}">
                    <i class="ri-git-commit-line pe-nav-icon"></i>
                    <span class="pe-nav-content">سجل القرارات</span>
                </a>
            </li>

            {{-- Projects --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.projects.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.projects.*') ? 'active' : '' }}">
                    <i class="ri-folder-line pe-nav-icon"></i>
                    <span class="pe-nav-content">المشاريع</span>
                </a>
            </li>

            {{-- Clients --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.clients.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.clients.*') ? 'active' : '' }}">
                    <i class="ri-user-star-line pe-nav-icon"></i>
                    <span class="pe-nav-content">العملاء</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- Review --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                المراجعة
            </li>

            {{-- Weekly Review --}}
            <li class="pe-slide">
                <a href="{{ route('decision-os.weekly-review.index') }}" class="pe-nav-link {{ request()->routeIs('decision-os.weekly-review.*') ? 'active' : '' }}">
                    <i class="ri-calendar-check-line pe-nav-icon"></i>
                    <span class="pe-nav-content">المراجعة الأسبوعية</span>
                </a>
            </li>

            {{-- ========================================= --}}
            {{-- User Section --}}
            {{-- ========================================= --}}
            <li class="pe-menu-title">
                الحساب
            </li>

            {{-- Profile --}}
            <li class="pe-slide">
                <a href="{{ route('profile.edit') }}" class="pe-nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                    <i class="ri-user-settings-line pe-nav-icon"></i>
                    <span class="pe-nav-content">الملف الشخصي</span>
                </a>
            </li>

            {{-- Logout --}}
            <li class="pe-slide">
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="pe-nav-link text-danger">
                    <i class="ri-logout-box-r-line pe-nav-icon"></i>
                    <span class="pe-nav-content">تسجيل الخروج</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>
