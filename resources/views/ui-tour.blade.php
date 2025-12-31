@extends('partials.layouts.master')

@section('title', 'UI Tour | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Tour')
@section('css')
    <link rel="stylesheet" href="assets/libs/shepherd.js/css/shepherd.css">
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 pt-5 mt-5">
                <section>
                    <div class="d-flex flex-column justify-content-center align-items-center pb-5 mb-5">
                        <h2 class="fw-semibold mb-5">Welcome to <span class="text-primary">Fabkin</span></h2>
                        <p>Discover our advanced SCSS admin template with flexible structure and clean code.</p>
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm fw-semibold" id="start-tour">Get
                            Started</a>
                    </div>
                    <div class="row gy-4">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-body p-3 d-flex align-items-center text-center gap-4 card-h-100">
                                <i class="ri-briefcase-line display-6 text-primary"></i>
                                <div>
                                    <h5 class="fw-semibold"><a href="javascript:void(0)" class="text-body">Project
                                            Management</a></h5>
                                    <p class="m-2">Expert guidance and tools for effective project management.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-body p-3 d-flex align-items-center text-center gap-4 card-h-100">
                                <i class="ri-clipboard-line display-6 text-success"></i>
                                <div>
                                    <h5 class="fw-semibold"><a href="javascript:void(0)" class="text-body">Task
                                            Automation</a></h5>
                                    <p class="m-2">Streamline your workflow with our automation solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-body p-3 d-flex align-items-center text-center gap-4 card-h-100">
                                <i class="ri-bar-chart-line display-6 text-danger"></i>
                                <div>
                                    <h5 class="fw-semibold"><a href="javascript:void(0)" class="text-body">Data Analysis</a>
                                    </h5>
                                    <p class="m-2">Turn data into actionable insights with our analytics services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5 mt-5">
                    <h4 class="text-center mb-4 fw-semibold">Who We Are</h4>
                    <div class="row gy-5">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100 justify-content-center align-items-center">
                                <p class="fst-italic">We specialize in delivering high-quality digital solutions.</p>
                                <ul class="list-unstyled">
                                    <li><i class="ri-check-line text-success"></i> <span>Committed to excellence in all our
                                            projects.</span></li>
                                    <li><i class="ri-check-line text-success"></i> <span>Client satisfaction is our top
                                            priority.</span></li>
                                    <li><i class="ri-check-line text-success"></i> <span>Innovative solutions tailored to
                                            your needs.</span></li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-outline-primary fw-semibold">Read More <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/about-company-1.jpg"
                                        class="img-fluid rounded" alt="Company Image">
                                </div>
                                <div class="col-md-6">
                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/about-company-2.jpg"
                                                class="img-fluid rounded" alt="Company Image">
                                        </div>
                                        <div class="col-md-12">
                                            <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/about-company-3.jpg"
                                                class="img-fluid rounded" alt="Company Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5 mt-5">
                    <div class="container mb-4">
                        <h4 class="text-center mb-5 fw-semibold">Our Partners</h4>
                        <div class="row gy-4">
                            <div class="col-xl-2 col-md-3 col-6">
                                <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/clients/client-1.png"
                                    class="img-fluid px-5 h-40px" alt="Clinet Image">
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/clients/client-2.png"
                                    class="img-fluid px-5 h-40px" alt="Clinet Image">
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/clients/client-3.png"
                                    class="img-fluid px-5 h-40px" alt="Clinet Image">
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/clients/client-4.png"
                                    class="img-fluid px-5 h-40px" alt="Clinet Image">
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/clients/client-5.png"
                                    class="img-fluid px-5 h-40px" alt="Clinet Image">
                            </div>
                            <div class="col-xl-2 col-md-3 col-6">
                                <img src="https://bootstrapmade.com/content/demo/QuickStart/assets/img/clients/client-6.png"
                                    class="img-fluid px-5 h-40px" alt="Clinet Image">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5 mt-5">
                    <div class="container">
                        <h4 class="text-center mb-5 fw-semibold">Latest Blog</h4>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <img src="assets/images/small/img-1.jpg" class="card-img-top" alt="Blog Post 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Blog Post Title 1</h5>
                                        <p class="card-text">A brief description of the blog post goes here. It highlights
                                            key points and attracts readers.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <img src="assets/images/small/img-2.jpg" class="card-img-top" alt="Blog Post 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Blog Post Title 2</h5>
                                        <p class="card-text">A brief description of the blog post goes here. It highlights
                                            key points and attracts readers.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card">
                                    <img src="assets/images/small/img-3.jpg" class="card-img-top" alt="Blog Post 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Blog Post Title 3</h5>
                                        <p class="card-text">A brief description of the blog post goes here. It highlights
                                            key points and attracts readers.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script type="module" src="assets/js/ui/tour.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
