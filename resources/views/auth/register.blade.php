@extends('partials.layouts.master_auth')

@section('title', 'إنشاء حساب جديد | Decision OS')

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
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Logo Dark" height="30"
                                class="mb-4 mx-auto d-block">
                            <h6 class="mb-3 mb-8 fw-medium text-center">إنشاء حساب جديد في Decision OS</h6>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row g-4">
                                    <!-- Name -->
                                    <div class="col-12">
                                        <label for="name" class="form-label">الاسم <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}"
                                            placeholder="أدخل اسمك" required autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-12">
                                        <label for="email" class="form-label">البريد الإلكتروني <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}"
                                            placeholder="أدخل بريدك الإلكتروني" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="col-12">
                                        <label for="password" class="form-label">كلمة المرور <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password"
                                            placeholder="أدخل كلمة المرور" required>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-12">
                                        <label for="password_confirmation" class="form-label">تأكيد كلمة المرور <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control"
                                            id="password_confirmation" name="password_confirmation"
                                            placeholder="أعد إدخال كلمة المرور" required>
                                    </div>

                                    <div class="col-12 mt-8">
                                        <button type="submit" class="btn btn-primary w-full mb-4">
                                            إنشاء حساب
                                            <i class="bi bi-person-plus ms-1 fs-16"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <p class="mb-0 fw-semibold position-relative text-center fs-12 mt-4">
                                لديك حساب بالفعل؟
                                <a href="{{ route('login') }}" class="text-decoration-underline text-primary">سجل دخول</a>
                            </p>
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
