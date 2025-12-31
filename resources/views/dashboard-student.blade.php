@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Academy')
@section('pagetitle', 'Student')
@section('css')
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection

@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xxl-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-secondary-subtle border-0">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-8 p-8">
                                        <h4>Learn Effectively With Us!</h4>
                                        <p class="text-opacity-70">Get 30% off every course in January.</p>
                                        <div class="d-flex gap-5 gap-xl-16 mt-5 mt-xl-12 flex-wrap">
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="h-50px w-50px d-flex justify-content-center align-items-center bg-secondary text-white fs-4 rounded-pill">
                                                    <i class="bi bi-mortarboard"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fs-16">Students</h6>
                                                    <p class="text-opacity-70 mb-0">75k+</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="h-50px w-50px d-flex justify-content-center align-items-center bg-secondary text-white fs-4 rounded-pill">
                                                    <i class="bi bi-person-check"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fs-16">Graduates</h6>
                                                    <p class="text-opacity-70 mb-0">50k+</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="h-50px w-50px d-flex justify-content-center align-items-center bg-secondary text-white fs-4 rounded-pill">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fs-16">Job Placements</h6>
                                                    <p class="text-opacity-70 mb-0">30k+</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 d-none d-md-block">
                                        <img src="assets/images/apps/students-vector.png" alt="Students"
                                            class="position-absolute bottom-0 end-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="circular-progress circular-sm circular-progress-success"
                                    style="--progress: 95;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">95%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5>Web Development</h5>
                                    <p class="fs-13 text-muted mb-0">Grade: A | Attendance: 95%</p>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div>
                                        <span class="badge bg-success-subtle text-success">High</span>
                                    </div>
                                    <div class="avatar-group">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">+7</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="circular-progress circular-sm circular-progress-success"
                                    style="--progress: 79;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">79%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5>JavaScript Essentials</h5>
                                    <p class="fs-13 text-muted mb-0">Grade: B | Attendance: 80%</p>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div>
                                        <span class="badge bg-success-subtle text-success">High</span>
                                    </div>
                                    <div class="avatar-group">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-3.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">+5</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="circular-progress circular-sm circular-progress-warning"
                                    style="--progress: 70;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">70%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5>Data Analysis with Python</h5>
                                    <p class="fs-13 text-muted mb-0">Grade: C | Attendance: 85%</p>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div>
                                        <span class="badge bg-warning-subtle text-warning">Medium</span>
                                    </div>
                                    <div class="avatar-group">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">+3</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="circular-progress circular-sm circular-progress-danger"
                                    style="--progress: 42;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">42%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5>Data Science</h5>
                                    <p class="fs-13 text-muted mb-0">Grade: D | Attendance: 72%</p>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div>
                                        <span class="badge bg-danger-subtle text-danger">Low</span>
                                    </div>
                                    <div class="avatar-group">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-7.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-8.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">+7</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div class="d-flex gap-3 align-items-center">
                            <img src="assets/images/avatar/avatar-3.jpg" alt="Student"
                                class="avatar-xxl rounded-3 img-fluid">
                            <div>
                                <span class="badge bg-success-subtle text-success">85%</span>
                                <h6 class="mb-1 mt-3">Michael Johnson</h6>
                                <p class="text-muted fs-13 mb-2">Computer Science Student</p>
                            </div>
                        </div>
                        <ul class="my-6 list-unstyled d-flex flex-column gap-4">
                            <li><a href="mailto:michaeljohnson123@gmail.com" class="text-body"><i
                                        class="bi bi-envelope me-2"></i>michaeljohnson123@gmail.com</a></li>
                            <li><i class="bi bi-geo-alt me-2"></i>San Francisco, USA</li>
                            <li><i class="bi bi-telephone me-2"></i>+1 (987) 654 3210</li>
                            <li><i class="bi bi-book me-2"></i> Completed Courses: 12</li>
                            <li><i class="bi bi-star me-2"></i> GPA: 3.9</li>
                            <li><i class="bi bi-award me-2"></i> Scholarships: Merit Scholarship</li>
                        </ul>
                        <p class="text-muted mb-0">Michael Johnson is a Computer Science student with a strong
                            passion for software development and artificial intelligence. He has completed 12
                            courses and maintains a high GPA while actively participating in coding
                            competitions.</p>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Tasks for Today</h6>
                        <div class="dropdown">
                            <button class="btn btn-outline-light text-muted dropdown-toggle btn-sm" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">This Week</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">Weekly</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Monthly</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Yearly</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <section class="instructorHeight" data-simplebar>
                            <div class="p-5 border-start border-primary border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Market Research</h6>
                                        <p class="mb-0 text-muted fs-14">Analyze competitor strategies and trends.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task1">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-secondary border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Content Creation</h6>
                                        <p class="mb-0 text-muted fs-14">Write blog articles and social media posts.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task2">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-warning border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Email Campaign</h6>
                                        <p class="mb-0 text-muted fs-14">Design and send promotional emails.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task3">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-danger border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Customer Support</h6>
                                        <p class="mb-0 text-muted fs-14">Respond to user inquiries and resolve issues.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task4">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-info border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">SEO Optimization</h6>
                                        <p class="mb-0 text-muted fs-14">Improve website rankings and keyword strategy.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task5">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-success border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Product Launch</h6>
                                        <p class="mb-0 text-muted fs-14">Plan and execute new product releases.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task6">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-dark border-5 shadow-sm rounded-2">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Performance Analysis</h6>
                                        <p class="mb-0 text-muted fs-14">Monitor analytics and improve strategies.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task7">
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="apex-line-chart" class="apexcharts-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card bg-warning">
                            <div class="card-body text-white">
                                <h5 class="text-white mb-1">25k+</h5>
                                <p class="text-opacity-70 fs-14 mb-2">Active Students</p>
                                <div class="d-flex gap-2 justify-content-between align-items-center mt-1">
                                    <p class="mb-0 text-opacity-70">Enrolled this semester</p>
                                    <button class="btn icon-btn bg-white rounded-pill text-warning">
                                        <i class="bi bi-person-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card bg-danger">
                            <div class="card-body text-white">
                                <h5 class="text-white mb-1">95%</h5>
                                <p class="text-opacity-70 fs-14 mb-2">Graduation Rate</p>
                                <div class="d-flex gap-2 justify-content-end align-items-center mt-1">
                                    <button class="btn icon-btn bg-white rounded-pill text-danger">
                                        <i class="bi bi-mortarboard"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Best Students</h6>
                        <button class="btn btn-outline-light text-muted btn-sm">Sell All<i
                                class="bi bi-arrow-right ms-1"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="p-3 border rounded-2 mb-3">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="circular-progress circular-sm circular-progress-primary"
                                        style="--progress: 90;">
                                        <svg class="circular-inner" viewBox="0 0 56 56">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">90%</div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Emily Smith</h6>
                                        <p class="mb-0 text-muted fs-12">Enrolled: Feb 5, 2024</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-chat-left-dots"></i>
                                        Message</button>
                                    <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-person-x"></i>
                                        Remove</button>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border rounded-2 mb-3">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="circular-progress circular-sm circular-progress-warning"
                                        style="--progress: 65;">
                                        <svg class="circular-inner" viewBox="0 0 56 56">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">65%</div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Michael Johnson</h6>
                                        <p class="mb-0 text-muted fs-12">Enrolled: Mar 12, 2024</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-chat-left-dots"></i>
                                        Message</button>
                                    <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-person-x"></i>
                                        Remove</button>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border rounded-2 mb-3">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="circular-progress circular-sm circular-progress-danger"
                                        style="--progress: 40;">
                                        <svg class="circular-inner" viewBox="0 0 56 56">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Sophia Williams</h6>
                                        <p class="mb-0 text-muted fs-12">Enrolled: Jan 20, 2024</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-chat-left-dots"></i>
                                        Message</button>
                                    <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-person-x"></i>
                                        Remove</button>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border rounded-2">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="circular-progress circular-sm circular-progress-info"
                                        style="--progress: 80;">
                                        <svg class="circular-inner" viewBox="0 0 56 56">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">80%</div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">James Brown</h6>
                                        <p class="mb-0 text-muted fs-12">Enrolled: Dec 15, 2023</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-chat-left-dots"></i>
                                        Message</button>
                                    <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-person-x"></i>
                                        Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Submit Section -->
    </main>
@endsection

@section('js')

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- File js -->
    <script src="assets/js/app/academy-user-student.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
