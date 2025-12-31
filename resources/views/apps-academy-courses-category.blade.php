@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Academy')
@section('pagetitle', 'Courses Category')


@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="pt-5">
            <!-- Course Categories -->
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card card-h-100 webGradient text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between gap-5 mb-5">
                                <div>
                                    <h4 class="text-white mb-1">Web Development</h4>
                                    <p>Applications Web Development using the latest technologies.</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div
                                        class="h-48px w-48px bg-white fs-5 rounded d-flex justify-content-center align-items-center text-black fw-semibold">
                                        35</div>
                                    <p class="text-opacity-70 fs-12 mt-2">Enrolled</p>
                                </div>
                            </div>
                            <div class="progress progress-xs" role="progressbar" aria-label="Basic example"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-white" style="width: 65%"></div>
                            </div>
                            <div class="text-end mt-4">
                                <a href="#web-development"
                                    class="text-white text-decoration-underline fs-13 text-opacity-80">Explore
                                    Courses <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card card-h-100 datascienceGradient text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between gap-5 mb-5">
                                <div>
                                    <h4 class="text-white mb-1">Data Science</h4>
                                    <p>interpret complex data to make data-driven decisions.</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div
                                        class="h-48px w-48px bg-white fs-5 rounded d-flex justify-content-center align-items-center text-black fw-semibold">
                                        75</div>
                                    <p class="text-opacity-70 fs-12 mt-2">Enrolled</p>
                                </div>
                            </div>
                            <div class="progress progress-xs" role="progressbar" aria-label="Basic example"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-white" style="width: 80%"></div>
                            </div>
                            <div class="text-end mt-4">
                                <a href="#web-development"
                                    class="text-white text-decoration-underline fs-13 text-opacity-80">Explore
                                    Courses <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card card-h-100 IntelligenceGradient text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between gap-5 mb-5">
                                <div>
                                    <h4 class="text-white mb-1">Artificial Intelligence</h4>
                                    <p>Master the fundamentals and advanced topics of AI</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div
                                        class="h-48px w-48px bg-white fs-5 rounded d-flex justify-content-center align-items-center text-black fw-semibold">
                                        45</div>
                                    <p class="text-opacity-70 fs-12 mt-2">Enrolled</p>
                                </div>
                            </div>
                            <div class="progress progress-xs" role="progressbar" aria-label="Basic example"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-white" style="width: 70%"></div>
                            </div>
                            <div class="text-end mt-4">
                                <a href="#web-development"
                                    class="text-white text-decoration-underline fs-13 text-opacity-80">Explore
                                    Courses <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card card-h-100 addGradient text-white">
                        <div class="card-body p-0 position-relative">
                            <button
                                class="btn bg-white text-secondary position-absolute top-0 end-0 mt-4 me-4 fw-semibold rounded-pill"><i
                                    class="bi bi-plus-lg me-1"></i>Add More</button>
                            <img src="assets/images/apps/vector.jpg" alt="Vector Image" class="img-fluid w-75 addImg">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Web Development Courses -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Web Development</h5>
                <a href="javascript:void(0)" class="text-decoration-underline">Read More<i
                        class="bi bi-arrow-right ms-1"></i></a>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/react.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-info">React</span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">React for Beginners</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">Alice Johnson</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>150+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>45+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.5)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/css.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-info">css</span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Advanced CSS Techniques</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">John Doe</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>75+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>40+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.3)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/full-stack.png" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-info">Full Stack</span>
                                </div>
                                <div
                                    class="py-1 px-3 bg-white position-absolute bottom-0 end-0 rounded-top rounded-end-0 fw-medium">
                                    Free</div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Full Stack Web Development</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">Mark Lee</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>130+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>55+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.8)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/javascript.png" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-info">JavaScript</span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">JavaScript Essentials</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">Emma Smith</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>200+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>60+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.7)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data Science Courses -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Data Science</h5>
                <a href="javascript:void(0)" class="text-decoration-underline">Read More<i
                        class="bi bi-arrow-right ms-1"></i></a>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/data-analysis.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-primary">Python</span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Data Analysis with Python</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">Sarah Williams</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>141+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>25+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.9)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/machine-learning.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-primary">Machine Learning</span>
                                </div>
                                <div
                                    class="py-1 px-3 bg-white position-absolute bottom-0 end-0 rounded-top rounded-end-0 fw-medium">
                                    Free</div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Machine Learning Basics</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span class="fw-semibold text-body">
                                                Michael Brown</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>135+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>34+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.3)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/deep-learning.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-primary">TensorFlow</span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Deep Learning with TensorFlow</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">Linda Harris</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>125+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>185+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.6)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/fundamental.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-primary">AI & ML</span>
                                </div>
                                <div
                                    class="py-1 px-3 bg-white position-absolute bottom-0 end-0 rounded-top rounded-end-0 fw-medium">
                                    Free</div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Data Science Fundamentals</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">David Brown</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>154+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>35+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.9)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Artificial Intelligence Courses -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Artificial Intelligence</h5>
                <a href="javascript:void(0)" class="text-decoration-underline">Read More<i
                        class="bi bi-arrow-right ms-1"></i></a>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/python.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-success">Python</span>
                                </div>
                                <div
                                    class="py-1 px-3 bg-white position-absolute bottom-0 end-0 rounded-top rounded-end-0 fw-medium">
                                    Free</div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">AI Programming with Python</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">David Green</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>275+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>325+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(5.9)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/NLP.png" alt="Course Image"
                                    class="img-fluidrounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-success">NLP</span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Natural Language Processing with AI</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span class="fw-semibold text-body">
                                                Michael Brown</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>135+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>34+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.3)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/robotic.jpg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-success">Robotics</span>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">AI in Robotics</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">Joshua King</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>330+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>120+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.3)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-3">
                            <div class="position-relative">
                                <img src="assets/images/apps/AI.jpeg" alt="Course Image"
                                    class="img-fluid rounded-2 h-208px w-full object-fit-cover">
                                <div
                                    class="position-absolute top-0 start-0 mt-2 ms-2 d-flex gap-1 justify-content-center align-items-lg-center">
                                    <span class="badge bg-success">AI</span>
                                </div>
                                <div
                                    class="py-1 px-3 bg-white position-absolute bottom-0 end-0 rounded-top rounded-end-0 fw-medium">
                                    Free</div>
                            </div>
                            <div class="mt-5">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="text-truncate">Artificial Intelligence Essentials</h5>
                                        <p class="fs-12 mb-2 text-muted">Instructor: <span
                                                class="fw-semibold text-body">Sophia Green</span></p>
                                    </div>
                                    <button class="btn btn-text-light text-muted icon-btn"><i
                                            class="bi bi-pencil-square"></i></button>
                                </div>
                                <ul class="list-unstyled d-flex justify-content-between my-4">
                                    <li class="text-center w-50 border-end">
                                        <h6>200+</h6>
                                        <p class="mb-0 fs-13">Enrollments</p>
                                    </li>
                                    <li class="text-center w-50 border-end">
                                        <h6>60+</h6>
                                        <p class="mb-0 fs-13">Teachers</p>
                                    </li>
                                    <li class="text-center w-50">
                                        <h6><i class="bi bi-star-fill text-warning"></i></h6>
                                        <p class="mb-0 fs-13">(4.7)</p>
                                    </li>
                                </ul>
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

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
    <!-- File js -->
    <script src="assets/js/app/academy-list.init.js"></script>
@endsection
