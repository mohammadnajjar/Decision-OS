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
                            <img src="assets/images/logo-dark.png" alt="Logo Dark" height="30"
                                class="mb-4 mx-auto d-block">
                            <h6 class="mb-3 mb-8 fw-medium text-center">Confirm Your Identity to Proceed</h6>
                            <form class="form-custom mt-10">
                                <div class="mb-5">
                                    <label class="form-label" for="LoginPassword">Password<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="password" class="form-control" id="password" placeholder="Password"
                                        required>
                                    <div class="form-text d-flex justify-content-end">
                                        <a href="javascript:void(0)"
                                            class="link link-primary text-muted text-decoration-underline">Forgot
                                            password?</a>
                                    </div>
                                </div>
                                <a href="index" class="text-center">
                                    <button type="button"
                                        class="btn btn-primary rounded-2 w-100 btn-loader">Unlock</button>
                                </a>
                                <p class="mt-5 mb-0 fw-semibold position-relative text-center fs-12">Back to <a
                                        href="auth-signin" class="text-decoration-underline text-primary">Sign In</a></p>
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

    <script src="assets/js/auth/auth.init.js"></script>
@endsection
