@extends('partials.layouts.master')

@section('title', 'Pages | FabKin Admin & Dashboards Template')

@section('title-sub', 'Pages')
@section('pagetitle', 'Gallery')
@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row mb-6">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body gallery-card-body rounded-top py-5"
                        style="background-image: url('assets/images/background.png');background-repeat: no-repeat;background-position: right;">
                        <div class="row justify-content-center position-relative">
                            <div class="col-lg-6">
                                <div class="py-12 my-2 text-center">
                                    <h1 class="text-white">Gallery Photo</h1>
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dignissimos sapiente perspiciatis blanditiis eum id odio maxime, ducimus rem minus
                                        saepe dolores nulla fugiat dolorum aliquid optio et voluptas ipsa pariatur?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery mt-5">
                    <div class="gallery-card">
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-1.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-2.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-3.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-4.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-5.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-6.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-card">
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-7.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-8.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                        <div class="card-wrapper gallery-body">
                            <img src="assets/images/small/img-9.jpg" alt="Image">
                            <div class="card-bottom">
                                <h4 class="mb-2 text-white">Premium Membership</h4>
                                <p class="text-white">Join our membership program to download music for free, listen offline
                                    and skip songs</p>
                                <button class="button btn btn-primary">Join Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
