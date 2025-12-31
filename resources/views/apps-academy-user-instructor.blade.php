@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Academy')
@section('pagetitle', 'Instructor')
@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xxl-9">
                <div class="row gx-4">
                    <div class="col-12">
                        <div class="card bg-secondary-subtle border-0 position-relative overflow-hidden">
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
                                                    <h6 class="mb-1 fs-16">Expert Mentors</h6>
                                                    <p class="text-opacity-70 mb-0">300+</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="h-50px w-50px d-flex justify-content-center align-items-center bg-secondary text-white fs-4 rounded-pill">
                                                    <i class="bi bi-trophy"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fs-16">Awards</h6>
                                                    <p class="text-opacity-70 mb-0">120+</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 d-none d-md-block">
                                        <img src="assets/images/apps/students-vector.png" alt="Vector Image"
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
                                    style="--progress: 80;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">80%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5 class="text-truncate">Web Development</h5>
                                    <p class="fs-13 text-muted mb-0">10 tasks | 80%</p>
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
                                    style="--progress: 89;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">89%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5 class="text-truncate">JavaScript Essentials</h5>
                                    <p class="fs-13 text-muted mb-0">26 tasks | 89%</p>
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
                                <div class="circular-progress circular-sm circular-progress-danger"
                                    style="--progress: 45;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">45%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5 class="text-truncate">Data Analysis with Python</h5>
                                    <p class="fs-13 text-muted mb-0">12 tasks | 45%</p>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div>
                                        <span class="badge bg-danger-subtle text-danger">Low</span>
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
                                <div class="circular-progress circular-sm circular-progress-success"
                                    style="--progress: 90;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">90%</div>
                                </div>
                                <div class="mt-10 mb-4 pb-6 border-bottom">
                                    <h5 class="text-truncate">Data Science</h5>
                                    <p class="fs-13 text-muted mb-0">19 tasks | 90%</p>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div>
                                        <span class="badge bg-success-subtle text-success">High</span>
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
                        <div class="d-flex gap-3 align-items-center mb-6">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="Instructor"
                                class="avatar-xxl rounded-3 img-fluid">
                            <div>
                                <span class="badge bg-success-subtle text-success">70%</span>
                                <h6 class="mb-1 mt-3">Jessica Brown</h6>
                                <p class="text-muted fs-13 mb-2">Senior Web Development Instructor</p>
                            </div>
                        </div>
                        <ul class="mb-6 mb-0 list-unstyled d-flex flex-column gap-4">
                            <li><a href="mailto:jessicabrown123@gmail.com" class="text-body"><i
                                        class="bi bi-envelope me-2"></i>jessicabrown123@gmail.com</a></li>
                            <li><i class="bi bi-geo-alt me-2"></i>New York, USA</li>
                            <li><i class="bi bi-telephone me-2"></i>+1 (123) 456 7890</li>
                            <li><i class="bi bi-briefcase me-2"></i> Experience: 8+ Years</li>
                            <li><i class="bi bi-book me-2"></i> Published Courses: 15</li>
                            <li><i class="bi bi-award me-2"></i> Certifications: Google Developer Expert</li>
                        </ul>
                        <p class="text-muted mb-0">Jessica Brown is a Senior Web Development Instructor with over 8 years
                            of experience in teaching front-end and back-end technologies. She specializes in JavaScript and
                            React web development tools. </p>
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
                                        <h6 class="mb-2">UI/UX Design</h6>
                                        <p class="mb-0 text-muted fs-14">Finalize homepage wireframe with the
                                            design team.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task1">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-secondary border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Backend Development</h6>
                                        <p class="mb-0 text-muted fs-14">Set up JWT token handling and
                                            role-based access.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task2">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-warning border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Frontend Development</h6>
                                        <p class="mb-0 text-muted fs-14">Integrate login page and validate user
                                            session handling.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task3">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-danger border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Bug Fixing</h6>
                                        <p class="mb-0 text-muted fs-14">Resolve UI glitches in mobile view
                                            screen sizes.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task4">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-info border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Testing</h6>
                                        <p class="mb-0 text-muted fs-14">Perform unit testing for Jest and Vue
                                            Test Utils.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task5">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-success border-5 shadow-sm rounded-2 mb-5">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">Project Review</h6>
                                        <p class="mb-0 text-muted fs-14">Prepare weekly report, assign tasks for
                                            next sprint.</p>
                                    </div>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input border-1" type="checkbox" id="task6">
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-start border-dark border-5 shadow-sm rounded-2">
                                <div class="d-flex gap-3 align-items-center justify-content-between">
                                    <div>
                                        <h6 class="mb-2">API Development</h6>
                                        <p class="mb-0 text-muted fs-14">Develop RESTful API and transactions.
                                        </p>
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
                                <h5 class="text-white mb-0">450k+</h5>
                                <p class="text-opacity-70 fs-14">Completed Courses</p>
                                <div class="d-flex gap-2 justify-content-between align-items-center">
                                    <p class="mb-0 text-opacity-70">This is latest data</p>
                                    <button class="btn icon-btn bg-white rounded-pill text-warning"><i
                                            class="bi bi-arrow-up-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card bg-danger">
                            <div class="card-body text-white">
                                <h5 class="text-white mb-0">200+</h5>
                                <p class="text-opacity-70 fs-14">Video Courses</p>
                                <div class="d-flex gap-2 justify-content-end align-items-center">
                                    <button class="btn icon-btn bg-white rounded-pill text-danger"><i
                                            class="bi bi-play-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Best Instructor</h6>
                        <button class="btn btn-outline-light text-muted btn-sm">Sell All<i
                                class="bi bi-arrow-right ms-1"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="p-4 border rounded-2 mb-4">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h6 class="mb-1">John Doe</h6>
                                        <p class="mb-0 text-muted fs-14">6 Development Courses</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="jascript:void(0);" class="badge bg-light text-body"><i
                                            class="bi bi-eye me-1"></i>Live</a>
                                    <span class="badge bg-success">Active</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border rounded-2 mb-4">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Jane Smith</h6>
                                        <p class="mb-0 text-muted fs-14">8 Design Courses</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="jascript:void(0);" class="badge bg-warning"><i
                                            class="bi bi-eye me-1"></i>Live</a>
                                    <span class="badge bg-success">Active</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border rounded-2 mb-4">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Alice Johnson</h6>
                                        <p class="mb-0 text-muted fs-14">4 Design Courses</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="jaascript:void(0);" class="badge bg-light text-body"><i
                                            class="bi bi-eye me-1"></i>Live</a>
                                    <span class="badge bg-success">Active</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 border rounded-2">
                            <div class="d-flex gap-3 align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h6 class="mb-1"> Mark Lee</h6>
                                        <p class="mb-0 text-muted fs-14">3 Development Courses</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="jascript:void(0);" class="badge bg-warning"><i
                                            class="bi bi-eye me-1"></i>Live</a>
                                    <span class="badge bg-success">Active</span>
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
    <script src="assets/js/app/academy-user-instructor.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

@endsection
