@extends('partials.layouts.master_auth')

@section('title', 'Sign In| FabKin Admin & Dashboards Template')

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
                            <img src="assets/images/logo-dark.png" alt="Logo Dark" height="30"
                                class="mb-4 mx-auto d-block">
                            <h6 class="mb-3 mb-8 fw-medium text-center">Register to Unlock Your Benefits</h6>
                            <form>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label for="username" class="form-label">Username <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter your username" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter your password" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                            <div class="form-text">
                                                <a href="auth-create-password"
                                                    class="link link-primary text-muted text-decoration-underline">Forgot
                                                    password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-8">
                                        <button type="submit" class="btn btn-primary w-full mb-4">Sign In<i
                                                class="bi bi-box-arrow-in-right ms-1 fs-16"></i></button>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="mb-10 btn btn-outline-light w-full mb-4 d-flex align-items-center gap-2 justify-content-center text-muted"><img
                                        src="assets/images/google.png" alt="Google Image" class="h-20px w-20px">Sign in with
                                    google</button>
                                <p class="mb-0 fw-semibold position-relative text-center fs-12">Don't have an account? <a
                                        href="auth-signup" class="text-decoration-underline text-primary">Sign up here</a>
                                </p>
                            </form>
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                    <p class="position-relative text-center fs-12 mb-0">© 2025 Fabkin. Crafted with ❤️ by Pixeleyez</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
