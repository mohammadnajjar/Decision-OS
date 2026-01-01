@extends('partials.layouts.master')

@section('title', 'دليل البدء | Decision OS')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'مرحباً بك في Decision OS')

@section('content')
<div class="row">
    <div class="col-12">
        {{-- Welcome Card --}}
        <div class="card bg-primary-subtle border-0 mb-4">
            <div class="card-body py-5">
                <div class="text-center">
                    <div class="avatar-xl bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center">
                        <i class="ri-rocket-line fs-1"></i>
                    </div>
                    <h2 class="text-primary mb-2">🎉 مبروك! أكملت Onboarding</h2>
                    <p class="text-muted fs-5">الآن أنت جاهز لبدء رحلتك نحو الإنتاجية والتنظيم</p>
                </div>
            </div>
        </div>

        {{-- Getting Started Checklist --}}
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">
                    <i class="ri-checkbox-line text-success me-2"></i>
                    قائمة البدء - ابدأ من هنا
                </h4>
            </div>
            <div class="card-body">
                <div class="row g-4">

                    {{-- Step 1: Daily Input --}}
                    <div class="col-md-6">
                        <div class="card border h-100 hover-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar-md bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                        <span class="fs-4 fw-bold">1</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-2">
                                            <i class="ri-add-circle-line text-primary me-1"></i>
                                            سجل يومك
                                        </h5>
                                        <p class="text-muted mb-3">ابدأ بتسجيل إدخال يومي سريع لتتبع مهامك ومصاريفك</p>
                                        <a href="{{ route('decision-os.daily-input') }}" class="btn btn-primary btn-sm">
                                            <i class="ri-pencil-line me-1"></i> الإدخال اليومي
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Step 2: Today's One Thing --}}
                    <div class="col-md-6">
                        <div class="card border h-100 hover-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar-md bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                        <span class="fs-4 fw-bold">2</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-2">
                                            <i class="ri-focus-3-line text-warning me-1"></i>
                                            حدد مهمتك الأهم
                                        </h5>
                                        <p class="text-muted mb-3">اختر مهمة واحدة أساسية لتركز عليها اليوم</p>
                                        <a href="{{ route('decision-os.tasks.today') }}" class="btn btn-warning btn-sm">
                                            <i class="ri-task-line me-1"></i> المهمة الأهم
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Step 3: Set Goals --}}
                    <div class="col-md-6">
                        <div class="card border h-100 hover-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar-md bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                        <span class="fs-4 fw-bold">3</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-2">
                                            <i class="ri-flag-line text-success me-1"></i>
                                            ضع أهدافك السنوية
                                        </h5>
                                        <p class="text-muted mb-3">حدد 3-5 أهداف رئيسية تريد تحقيقها هذا العام</p>
                                        <a href="{{ route('decision-os.goals.index') }}" class="btn btn-success btn-sm">
                                            <i class="ri-target-line me-1"></i> الأهداف
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Step 4: Track Metrics --}}
                    <div class="col-md-6">
                        <div class="card border h-100 hover-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar-md bg-info-subtle text-info rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                        <span class="fs-4 fw-bold">4</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-2">
                                            <i class="ri-bar-chart-line text-info me-1"></i>
                                            سجل مقاييسك اليومية
                                        </h5>
                                        <p class="text-muted mb-3">تتبع ساعات عملك، تمرينك، وراحتك</p>
                                        <a href="{{ route('decision-os.metrics.index') }}" class="btn btn-info btn-sm">
                                            <i class="ri-dashboard-line me-1"></i> المقاييس
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Step 5: Pomodoro --}}
                    <div class="col-md-6">
                        <div class="card border h-100 hover-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar-md bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                        <span class="fs-4 fw-bold">5</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-2">
                                            <i class="ri-timer-line text-danger me-1"></i>
                                            ابدأ جلسة Pomodoro
                                        </h5>
                                        <p class="text-muted mb-3">25 دقيقة تركيز عميق بدون مقاطعات</p>
                                        <a href="{{ route('decision-os.pomodoro.index') }}" class="btn btn-danger btn-sm">
                                            <i class="ri-play-line me-1"></i> بومودورو
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Step 6: Track Finances --}}
                    <div class="col-md-6">
                        <div class="card border h-100 hover-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="avatar-md bg-secondary-subtle text-secondary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                        <span class="fs-4 fw-bold">6</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-2">
                                            <i class="ri-wallet-3-line text-secondary me-1"></i>
                                            راقب أموالك
                                        </h5>
                                        <p class="text-muted mb-3">سجل مصاريفك ودخلك لتحافظ على أمانك المالي</p>
                                        <a href="{{ route('decision-os.expenses.index') }}" class="btn btn-secondary btn-sm">
                                            <i class="ri-money-dollar-circle-line me-1"></i> المصاريف
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Quick Tips --}}
        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <div class="card border-start border-primary border-3">
                    <div class="card-body">
                        <h6 class="text-primary mb-2">
                            <i class="ri-lightbulb-line me-1"></i>
                            نصيحة سريعة
                        </h6>
                        <p class="text-muted small mb-0">ابدأ صغيراً - لا تحاول إكمال كل شيء دفعة واحدة. ركز على الإدخال اليومي والمهمة الأهم أولاً</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-start border-success border-3">
                    <div class="card-body">
                        <h6 class="text-success mb-2">
                            <i class="ri-calendar-check-line me-1"></i>
                            المراجعة الأسبوعية
                        </h6>
                        <p class="text-muted small mb-0">كل نهاية أسبوع، راجع إنجازاتك وخطط للأسبوع القادم من صفحة المراجعة الأسبوعية</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-start border-warning border-3">
                    <div class="card-body">
                        <h6 class="text-warning mb-2">
                            <i class="ri-lock-unlock-line me-1"></i>
                            نظام القفل
                        </h6>
                        <p class="text-muted small mb-0">إذا تدهورت حالتك، سيقفل النظام بعض الأقسام حتى تصلح الأساسيات أولاً</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Dashboard Link --}}
        <div class="text-center mt-4">
            <a href="{{ route('decision-os.dashboard') }}" class="btn btn-lg btn-primary">
                <i class="ri-dashboard-3-line me-2"></i>
                اذهب إلى لوحة التحكم
            </a>
        </div>

    </div>
</div>

<style>
.hover-card {
    transition: all 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
}
</style>
@endsection
