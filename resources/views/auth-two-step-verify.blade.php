@extends('partials.layouts.master_auth')

@section('title', 'Two Step Verification | FabKin Admin & Dashboards Template')

@section('content')


    <!-- START -->
    <div>
        <img src="assets/images/auth/login_bg.jpg" alt="Auth Background"
            class="auth-bg light w-full h-full opacity-60 position-absolute top-0">
        <img src="assets/images/auth/auth_bg_dark.jpg" alt="Auth Background" class="auth-bg d-none dark">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100 py-10">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card mx-xxl-8">
                        <div class="card-body py-12 px-8">
                            <img src="assets/images/auth/email.png" alt="Vector Image"
                                class="h-56px w-56px mx-auto d-block mb-3">
                            <h3 class="mb-2 text-center text-capitalize">Two-Factor Authentication</h3>
                            <p class="text-muted text-center">6 digit OTP is send to mobile number <span
                                    class="fw-bold">info@gmail.com</span></p>
                            <form>
                                <div id="otp-container" class="d-flex align-items-center justify-content-center gap-2">
                                    <input type="text"
                                        class="form-control text-center min-h-50px border-0 border-bottom border-2 rounded-0"
                                        placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]"
                                        aria-label="OTP digit 1">
                                    <input type="text"
                                        class="form-control text-center min-h-50px border-0 border-bottom border-2 rounded-0"
                                        placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]"
                                        aria-label="OTP digit 2">
                                    <input type="text"
                                        class="form-control text-center min-h-50px border-0 border-bottom border-2 rounded-0"
                                        placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]"
                                        aria-label="OTP digit 3">
                                    <input type="text"
                                        class="form-control text-center min-h-50px border-0 border-bottom border-2 rounded-0"
                                        placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]"
                                        aria-label="OTP digit 4">
                                    <input type="text"
                                        class="form-control text-center min-h-50px border-0 border-bottom border-2 rounded-0"
                                        placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]"
                                        aria-label="OTP digit 5">
                                    <input type="text"
                                        class="form-control text-center min-h-50px border-0 border-bottom border-2 rounded-0"
                                        placeholder="0" data-otp-input maxlength="1" inputmode="numeric" pattern="[0-9]"
                                        aria-label="OTP digit 6">
                                </div>
                                <a href="auth-signin">
                                    <button type="button"
                                        class="btn btn-primary rounded-2 w-100 btn-loader text-center mt-10">Reset
                                        Password</button>
                                </a>
                                <p class="text-center mb-0 mt-3">
                                    <a href="javascript:void(0)" class="link link-primary text-body fw-medium fs-12">Having
                                        trouble getting the code?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <p class="position-relative text-center fs-12 mb-0">© 2025 Fabkin. Crafted with ❤️ by Pixeleyez</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="assets/js/auth/auth.init.js"></script>
@endsection
