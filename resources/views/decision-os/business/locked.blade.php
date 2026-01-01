@extends('partials.layouts.master')

@section('title', 'Decision OS | الأصول والأعمال - مقفل')
@section('title-sub', 'Decision OS')
@section('pagetitle', 'الأصول والأعمال')

@section('content')
<div id="layout-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm mt-5">
                    <div class="card-body text-center py-5">
                        {{-- Lock Icon --}}
                        <div class="avatar-xl bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4">
                            <i class="ri-lock-2-line fs-1"></i>
                        </div>

                        {{-- Title --}}
                        <h4 class="mb-3">هذا القسم مقفل</h4>

                        {{-- Message --}}
                        <p class="text-muted mb-4">
                            قسم "الأصول والأعمال" يتطلب تحقيق أهداف معينة قبل فتحه.<br>
                            هذا لمنع التشتت والتركيز على بناء الأساس أولاً.
                        </p>

                        {{-- Requirements --}}
                        <div class="bg-light rounded p-4 mb-4 text-start">
                            <h6 class="mb-3"><i class="ri-key-line text-warning me-2"></i>متطلبات الفتح:</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <i class="ri-checkbox-circle-line text-success me-2"></i>
                                    نسبة الانضباط ≥ 70%
                                </li>
                                <li>
                                    <i class="ri-checkbox-circle-line text-success me-2"></i>
                                    نسبة الأمان المالي ≥ 60%
                                </li>
                            </ul>
                        </div>

                        {{-- Current Status --}}
                        @if($lockMessage)
                        <div class="alert alert-warning text-start mb-4">
                            <i class="ri-information-line me-2"></i>
                            <strong>الوضع الحالي:</strong><br>
                            {{ $lockMessage }}
                        </div>
                        @endif

                        {{-- Action --}}
                        <a href="{{ route('decision-os.dashboard') }}" class="btn btn-primary">
                            <i class="ri-arrow-right-line me-1"></i> العودة للوحة التحكم
                        </a>
                    </div>
                </div>

                {{-- Motivation --}}
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="avatar-sm bg-info-subtle text-info rounded d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="ri-lightbulb-line"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-1">لماذا القفل؟</h6>
                                <p class="text-muted mb-0 small">
                                    بناء الأعمال والأصول يتطلب أساساً صلباً. إذا لم تكن منضبطاً ومستقراً مالياً،
                                    ستكون عرضة للفشل والإرهاق. ركز على تحسين حياتك أولاً، ثم انطلق نحو الأعمال.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
