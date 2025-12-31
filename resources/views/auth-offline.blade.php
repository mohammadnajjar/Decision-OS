@extends('partials.layouts.master_auth')

@section('title', 'Auth offline | FabKin Admin & Dashboards Template')

@section('content')


    <!-- START -->
    <div>
        <img src="assets/images/auth/auth_bg.jpeg" alt="Auth Background"
            class="auth-bg light w-full h-full position-absolute top-0">
        <img src="assets/images/auth/auth_bg_dark.jpg" alt="Auth Background" class="auth-bg d-none dark">
        <div class="container">
            <div class="justify-content-center align-items-center min-vh-100 row gy-0">
                <div class="col-lg-8">
                    <div class="position-relative text-center">
                        <img class="min-h-320px img-fluid" src="assets/images/vector/offline.svg" alt="Vector Image">
                        <form class="form-custom mt-4 mt-md-16">
                            <div id="countdown">
                                <ul class="list-inline text-center d-flex flex-column flex-md-row gap-1">
                                    <li class="list-inline-item p-4 w-100 min-w-100px rounded-2">
                                        <h2 class="mb-1 fs-45" id="days"></h2>
                                        <i class="text-muted">days</i>
                                    </li>
                                    <li class="list-inline-item p-4 w-100 min-w-100px rounded-2">
                                        <h2 class="mb-1 fs-45" id="hours"></h2>
                                        <i class="text-muted">hours</i>
                                    </li>
                                    <li class="list-inline-item p-4 w-100 min-w-100px rounded-2">
                                        <h2 class="mb-1 fs-45" id="minutes"></h2>
                                        <i class="text-muted">minutes</i>
                                    </li>
                                    <li class="list-inline-item p-4 w-100 min-w-100px rounded-2">
                                        <h2 class="mb-1 fs-45" id="seconds"></h2>
                                        <i class="text-muted">seconds</i>
                                    </li>
                                </ul>
                            </div>
                            <div class="position-relative subscribe-btn max-w-500px mt-10 mx-auto">
                                <input type="text"
                                    class="form-control form-control-lg fs-14 min-h-56px form-control-icon"
                                    id="companyNameLayout4" placeholder="Enter Your Email" required>
                                <button class="btn btn-primary ">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script type="module" src="assets/js/auth/coming-soon.init.js"></script>
@endsection
