@extends('partials.layouts.master_auth')

@section('title', 'تسجيل الدخول | Decision OS')

@section('content')

    <!-- START -->
    <div>
        <img src="{{ asset('assets/images/auth/login_bg.jpg') }}" alt="Auth Background"
            class="auth-bg light w-full h-full opacity-60 position-absolute top-0">
        <img src="{{ asset('assets/images/auth/auth_bg_dark.jpg') }}" alt="Auth Background" class="auth-bg d-none dark">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100 py-10">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card mx-xxl-8">
                        <div class="card-body py-12 px-8">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Decision OS Logo" height="50"
                                class="mb-4 mx-auto d-block">
                            <h6 class="mb-3 mb-8 fw-medium text-center">{{ __('app.auth.login_title') }}</h6>

                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="alert alert-success mb-4" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label for="email" class="form-label">البريد الإلكتروني <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}"
                                            placeholder="أدخل بريدك الإلكتروني" required autofocus>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">كلمة المرور <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password"
                                            placeholder="أدخل كلمة المرور" required>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                                <label class="form-check-label" for="remember">تذكرني</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                            <div class="form-text">
                                                <a href="{{ route('password.request') }}"
                                                    class="link link-primary text-muted text-decoration-underline">نسيت كلمة المرور؟</a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 mt-8">
                                        <button type="submit" class="btn btn-primary w-full mb-4">
                                            تسجيل الدخول
                                            <i class="bi bi-box-arrow-in-right ms-1 fs-16"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            @if (Route::has('register'))
                            <p class="mb-0 fw-semibold position-relative text-center fs-12 mt-4">
                                ليس لديك حساب؟
                                <a href="{{ route('register') }}" class="text-decoration-underline text-primary">سجل هنا</a>
                            </p>
                            @endif

                            <!-- Demo Account Info -->
                            <div class="alert alert-info mt-4 small">
                                <strong>حساب تجريبي:</strong><br>
                                البريد: test@example.com<br>
                                كلمة المرور: password123
                            </div>
                        </div>
                    </div>
                    <p class="position-relative text-center fs-12 mb-0 text-white mt-3">© 2026 Decision OS - نظام تشغيل القرارات</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
