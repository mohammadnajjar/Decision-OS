@extends('partials.layouts.master_auth')

@section('title', 'Decision OS | اختر ملفك الشخصي')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-8">

            {{-- Logo & Welcome --}}
            <div class="text-center mb-5">
                <div class="avatar-lg mx-auto bg-primary rounded-circle d-flex align-items-center justify-content-center mb-4">
                    <i class="ri-dashboard-3-line text-white fs-1"></i>
                </div>
                <h2 class="mb-2">مرحباً بك في Decision OS</h2>
                <p class="text-muted">اختر نوع ملفك الشخصي لتخصيص تجربتك</p>
            </div>

            {{-- Profile Selection --}}
            <form action="{{ route('onboarding.store-profile') }}" method="POST">
                @csrf

                <div class="row g-4 mb-5">
                    {{-- Freelancer --}}
                    <div class="col-md-4">
                        <input type="radio" class="btn-check" name="profile" value="freelancer" id="profile-freelancer" required>
                        <label class="btn btn-outline-primary w-100 h-100 py-4 d-flex flex-column align-items-center" for="profile-freelancer">
                            <div class="avatar-md bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center mb-3">
                                <i class="ri-user-line fs-3"></i>
                            </div>
                            <h5 class="mb-2">Freelancer</h5>
                            <p class="text-muted small text-center mb-0">
                                تعمل بشكل مستقل مع عملاء متعددين
                            </p>
                            <ul class="list-unstyled mt-3 text-start small">
                                <li><i class="ri-check-line text-success me-1"></i> تتبع العملاء</li>
                                <li><i class="ri-check-line text-success me-1"></i> Time → Money</li>
                                <li><i class="ri-check-line text-success me-1"></i> Runway</li>
                            </ul>
                        </label>
                    </div>

                    {{-- Employee --}}
                    <div class="col-md-4">
                        <input type="radio" class="btn-check" name="profile" value="employee" id="profile-employee" required>
                        <label class="btn btn-outline-success w-100 h-100 py-4 d-flex flex-column align-items-center" for="profile-employee">
                            <div class="avatar-md bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center mb-3">
                                <i class="ri-briefcase-line fs-3"></i>
                            </div>
                            <h5 class="mb-2">Employee</h5>
                            <p class="text-muted small text-center mb-0">
                                موظف في شركة أو مؤسسة
                            </p>
                            <ul class="list-unstyled mt-3 text-start small">
                                <li><i class="ri-check-line text-success me-1"></i> تتبع الإنتاجية</li>
                                <li><i class="ri-check-line text-success me-1"></i> التطور المهني</li>
                                <li><i class="ri-check-line text-success me-1"></i> Work-Life Balance</li>
                            </ul>
                        </label>
                    </div>

                    {{-- Founder --}}
                    <div class="col-md-4">
                        <input type="radio" class="btn-check" name="profile" value="founder" id="profile-founder" required>
                        <label class="btn btn-outline-warning w-100 h-100 py-4 d-flex flex-column align-items-center" for="profile-founder">
                            <div class="avatar-md bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center mb-3">
                                <i class="ri-rocket-line fs-3"></i>
                            </div>
                            <h5 class="mb-2">Founder</h5>
                            <p class="text-muted small text-center mb-0">
                                صاحب عمل أو مشروع ناشئ
                            </p>
                            <ul class="list-unstyled mt-3 text-start small">
                                <li><i class="ri-check-line text-success me-1"></i> Business Metrics</li>
                                <li><i class="ri-check-line text-success me-1"></i> MRR Tracking</li>
                                <li><i class="ri-check-line text-success me-1"></i> Growth Focus</li>
                            </ul>
                        </label>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg px-5">
                        <i class="ri-arrow-left-line me-2"></i>
                        ابدأ الآن
                    </button>
                </div>
            </form>

            {{-- Footer Note --}}
            <div class="text-center mt-5">
                <p class="text-muted small">
                    <i class="ri-information-line me-1"></i>
                    يمكنك تغيير هذا لاحقاً من الإعدادات
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
