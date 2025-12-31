@extends('partials.layouts.master_auth')

@section('title', 'Auth 404 | FabKin Admin & Dashboards Template')

@section('content')


    <!-- START -->
    <div>
        <img src="assets/images/auth/auth_bg.jpeg" alt="Auth Background"
            class="auth-bg light w-full h-full opacity-60 position-absolute top-0">
        <img src="assets/images/auth/auth_bg_dark.jpg" alt="Auth Background" class="auth-bg d-none dark">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100 py-10">
                <div class="col-lg-8">
                    <div class="position-relative text-center">
                        <img class="img-fluid min-h-320px" src="assets/images/vector/404.svg" alt="Vector Image">
                        <div class="mt-4 mt-md-16 text-center">
                            <h1 class="fw-semibold fs-45"><span class="fw-bold text-primary">Oops! </span>That’s a Bad
                                Request!</h1>
                            <p class="text-muted fs-16 mb-8">We’re experiencing some technical issues on our end. Please
                                bear with us while we work on fixing it.</p>
                            <a href="index" class="btn btn-primary">Back to Home<i class="bi bi-send-fill ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection
