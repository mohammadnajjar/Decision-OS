@extends('partials.layouts.master')

@section('title', 'Academy | FabKin Admin & Dashboards Template')
@section('title-sub', 'E-Commerce ')
@section('pagetitle', 'Academy')
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body position-relative z-1">
                        <div class="d-flex gap-2 justify-content-between">
                            <div>
                                <span class="d-block mb-5">Students</span>
                                <h4 class="mb-4 fw-semibold">23.15K</h4>
                                <p class="mb-0 fw-medium">24.24%<i class="bi bi-arrow-up-right text-success ms-1"></i></p>
                                <p class="mb-0 fs-12">Since last week</p>
                            </div>
                            <div
                                class="h-50px w-50px d-flex justify-content-center align-items-center bg-info rounded-pill text-white fs-4">
                                <i class="ri-graduation-cap-line"></i>
                            </div>
                        </div>
                    </div>
                    <img src="assets/images/dashboard/academy-bg1.png" alt="Academy Image"
                        class="position-absolute bottom-0 right  h-100 w-100 object-fit-cover  opacity-5">
                </div>
            </div>
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body position-relative z-1">
                        <div class="d-flex gap-2 justify-content-between">
                            <div>
                                <span class="d-block mb-5">Teachers</span>
                                <h4 class="mb-4 fw-semibold">2.01K</h4>
                                <p class="mb-0 fw-medium">24.24%<i class="bi bi-arrow-up-right text-success ms-1"></i></p>
                                <p class="mb-0 fs-12">Since last week</p>
                            </div>
                            <div
                                class="h-50px w-50px d-flex justify-content-center align-items-center bg-primary rounded-pill text-white fs-4">
                                <i class="ri-presentation-line"></i>
                            </div>
                        </div>
                    </div>
                    <img src="assets/images/dashboard/academy-bg3.png" alt="Academy Image"
                        class="position-absolute bottom-0 right  h-100 w-100 object-fit-cover  opacity-5">
                </div>
            </div>
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body position-relative z-1">
                        <div class="d-flex gap-2 justify-content-between">
                            <div>
                                <span class="d-block mb-5">Parents</span>
                                <h4 class="mb-4 fw-semibold">6.21K</h4>
                                <p class="mb-0 fw-medium">24.24%<i class="bi bi-arrow-up-right text-success ms-1"></i></p>
                                <p class="mb-0 fs-12">Since last week</p>
                            </div>
                            <div
                                class="h-50px w-50px d-flex justify-content-center align-items-center bg-secondary rounded-pill text-white fs-4">
                                <i class="ri-group-line"></i>
                            </div>
                        </div>
                    </div>
                    <img src="assets/images/dashboard/academy-bg2.png" alt="Academy Image"
                        class="position-absolute bottom-0 right  h-100 w-100 object-fit-cover  opacity-5">
                </div>
            </div>
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body position-relative z-1">
                        <div class="d-flex gap-2 justify-content-between">
                            <div>
                                <span class="d-block mb-5">Earnings</span>
                                <h4 class="mb-4 fw-semibold">$59.9K</h4>
                                <p class="mb-0 fw-medium">24.24%<i class="bi bi-arrow-up-right text-success ms-1"></i></p>
                                <p class="mb-0 fs-12">Since last week</p>
                            </div>
                            <div
                                class="h-50px w-50px d-flex justify-content-center align-items-center bg-warning rounded-pill text-white fs-4">
                                <i class="ri-wallet-line"></i>
                            </div>
                        </div>
                    </div>
                    <img src="assets/images/dashboard/academy-bg4.png" alt="Academy Image"
                        class="position-absolute bottom-0 right  h-100 w-100 object-fit-cover  opacity-5">
                </div>
            </div>
            <div class="col-xxl col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex gap-2 justify-content-between">
                            <div>
                                <span class="d-block mb-5">Awards</span>
                                <h4 class="mb-4 fw-semibold">132</h4>
                                <p class="mb-0 fw-medium">24.24%<i class="bi bi-arrow-up-right text-success ms-1"></i></p>
                                <p class="mb-0 fs-12">Since last week</p>
                            </div>
                            <div
                                class="h-50px w-50px d-flex justify-content-center align-items-center bg-success rounded-pill text-white fs-4">
                                <i class="ri-award-line"></i>
                            </div>
                        </div>
                    </div>
                    <img src="assets/images/dashboard/academy-bg5.png" alt="Academy Image"
                        class="position-absolute bottom-0 right  h-100 w-100 object-fit-cover  opacity-5">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Performance</h5>
                            <div class="d-flex align-items-center mb-3 gap-10 mb-sm-0">
                                <div class="d-flex gap-3">
                                    <div class="h-8px w-8px bg-secondary rounded d-block mt-2"></div>
                                    <div>
                                        <span class="fs-14 text-muted">This Week</span>
                                        <h4 class="fs-5 mt-1 mb-0">1.245</h4>
                                    </div>
                                </div>
                                <div class="d-flex gap-3">
                                    <div class="h-8px w-8px bg-success rounded d-block mt-2"></div>
                                    <div>
                                        <span class="fs-14 text-muted">Last Week</span>
                                        <h4 class="fs-5 mt-1 mb-0">1.356</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="performance"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Upcoming Live Sessions</h5>
                        <a href="javascript:void(0)"
                            class="link link-primary fs-13 text-muted text-decoration-underline">Read More<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body position-relative">
                        <span class="badge bg-danger-subtle text-danger float-end">Live</span>
                        <h5>Mastering Web Development</h5>
                        <p class="text-muted">Explore the latest advancements in frontend and backend development.
                            Learn how to build dynamic and frameworks.</p>
                        <div class="d-flex justify-content-around my-3">

                        </div>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <div class="d-flex align-items-center gap-4 mb-8">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-light-subtle text-muted fs-5">
                                        <i class="bi bi-calendar-event"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-medium fs-15 mb-1">20 Mar 24</h6>
                                        <p class="text-muted mb-0">Date</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-4 mb-8">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-light-subtle text-muted fs-5">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-medium fs-15 mb-1">60 Minutes</h6>
                                        <p class="text-muted mb-0">Session Duration</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-4 mb-8">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-light-subtle text-muted fs-5">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-medium fs-15 mb-1">John Doe</h6>
                                        <p class="text-muted mb-0">Instructor</p>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Join the Session</button>
                            </div>
                            <img src="assets/images/dashboard/student.png" class="img-fluid w-160px animation-bounce"
                                alt="Live Session">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7">
                <div class="card courses-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">All Courses</h5>
                        <a href="javascript:void(0)"
                            class="link link-primary fs-13 text-muted text-decoration-underline">See All<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Name</th>
                                        <th>Category</th>
                                        <th>Duration</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Web Development</td>
                                        <td>Programming</td>
                                        <td>6 Months</td>
                                        <td>$499</td>
                                        <td><span class="badge bg-success-subtle text-success">Available</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="text-muted">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Graphic Design</td>
                                        <td>Design</td>
                                        <td>4 Months</td>
                                        <td>$299</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Limited</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="text-muted">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Data Science</td>
                                        <td>Analytics</td>
                                        <td>8 Months</td>
                                        <td>$799</td>
                                        <td><span class="badge bg-success-subtle text-success">Available</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="text-muted">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Digital Marketing</td>
                                        <td>Marketing</td>
                                        <td>3 Months</td>
                                        <td>$199</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Full</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="text-muted">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Machine Learning</td>
                                        <td>AI</td>
                                        <td>9 Months</td>
                                        <td>$999</td>
                                        <td><span class="badge bg-success-subtle text-success">Available</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="text-muted">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap gap-3 align-items-center m-5">
                            <div class="fw-medium"> Showing 1 - 5 of 3 Entries</div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-primary mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="ri-arrow-left-s-line fw-semibold"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="ri-arrow-right-s-line fw-semibold"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Course Schedule</h5>
                        <div class="dropdown">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">View All</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Import</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Export</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="course"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Popular Instructors</h5>
                        <a href="javascript:void(0)"
                            class="link link-primary fs-13 text-muted text-decoration-underline">See All<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list-borderless">
                            <li class="list-group-item d-flex justify-content-between py-3">
                                <div class="d-flex gap-3">
                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Instructor"
                                        class="avatar-md rounded-circle">
                                    <div>
                                        <h6 class="mb-1">John Doe <span class="fs-11 fw-normal ms-2"><i
                                                    class="bi bi-star-fill text-warning me-1"></i>(4.8)</span></h6>
                                        <p class="text-muted mb-1">Web Development</p>
                                    </div>
                                </div>
                                <small class="text-muted">15 Courses • 10K Students</small>
                            </li>
                            <li class="list-group-item d-flex justify-content-between py-3">
                                <div class="d-flex gap-3">
                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Instructor"
                                        class="avatar-md rounded-circle">
                                    <div>
                                        <h6 class="mb-1">Sarah Smith <span class="fs-11 fw-normal ms-2"><i
                                                    class="bi bi-star-fill text-warning me-1"></i>(4.9)</span></h6>
                                        <p class="text-muted mb-1">Data Science</p>
                                    </div>
                                </div>
                                <small class="text-muted">20 Courses • 12K Students</small>
                            </li>
                            <li class="list-group-item d-flex justify-content-between py-3">
                                <div class="d-flex gap-3">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Instructor"
                                        class="avatar-md rounded-circle">
                                    <div>
                                        <h6 class="mb-1">Michael Lee <span class="fs-11 fw-normal ms-2"><i
                                                    class="bi bi-star-fill text-warning me-1"></i>(4.7)</span></h6>
                                        <p class="text-muted mb-1">UI/UX Design</p>
                                    </div>
                                </div>
                                <small class="text-muted">12 Courses • 8K Students</small>
                            </li>
                            <li class="list-group-item d-flex justify-content-between py-3">
                                <div class="d-flex gap-3">
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Instructor"
                                        class="avatar-md rounded-circle">
                                    <div>
                                        <h6 class="mb-1">Emily Brown <span class="fs-11 fw-normal ms-2"><i
                                                    class="bi bi-star-fill text-warning me-1"></i>(4.6)</span></h6>
                                        <p class="text-muted mb-1">Digital Marketing</p>
                                    </div>
                                </div>
                                <small class="text-muted">10 Courses • 6K Students</small>
                            </li>
                            <li class="list-group-item d-flex justify-content-between py-3">
                                <div class="d-flex gap-3">
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Instructor"
                                        class="avatar-md rounded-circle">
                                    <div>
                                        <h6 class="mb-1">Daniel Wilson <span class="fs-11 fw-normal ms-2"><i
                                                    class="bi bi-star-fill text-warning me-1"></i>(4.9)</span></h6>
                                        <p class="text-muted mb-1">Cybersecurity</p>
                                    </div>
                                </div>
                                <small class="text-muted">18 Courses • 14K Students</small>
                            </li>
                            <li class="list-group-item d-flex justify-content-between pt-3 pb-0">
                                <div class="d-flex gap-3">
                                    <img src="assets/images/avatar/avatar-6.jpg" alt="Instructor"
                                        class="avatar-md rounded-circle">
                                    <div>
                                        <h6 class="mb-1">Sophia Miller <span class="fs-11 fw-normal ms-2"><i
                                                    class="bi bi-star-fill text-warning me-1"></i>(4.5)</span></h6>
                                        <p class="text-muted mb-1">Artificial Intelligence</p>
                                    </div>
                                </div>
                                <small class="text-muted">22 Courses • 16K Students</small>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Assignment Progress</h5>
                        <div class="dropdown ms-auto">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">Tday</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <section class="px-5 mx-n5" data-simplebar style="max-height: 410px;">
                            <div class="d-flex gap-4 align-items-center p-3 border rounded-3 mb-4">
                                <div class="circular-progress circular-sm circular-progress-primary"
                                    style="--progress: 55;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">55%</div>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-semibold">Web Development Basics</h6>
                                    <p class="text-muted mb-0">150 Tasks</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center p-3 border rounded-3 mb-4">
                                <div class="circular-progress circular-sm circular-progress-info" style="--progress: 75;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">75%</div>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-semibold">Advanced JavaScript</h6>
                                    <p class="text-muted mb-0">45 Tasks</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center p-3 border rounded-3 mb-4">
                                <div class="circular-progress circular-sm circular-progress-danger"
                                    style="--progress: 63;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">63%</div>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-semibold">React & Vue Frameworks</h6>
                                    <p class="text-muted mb-0">90 Tasks</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center p-3 border rounded">
                                <div class="circular-progress circular-sm circular-progress-warning"
                                    style="--progress: 46;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">46%</div>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-semibold">Backend Development</h6>
                                    <p class="text-muted mb-0">60 Tasks</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center p-3 border rounded mt-3">
                                <div class="circular-progress circular-sm circular-progress-success"
                                    style="--progress: 72;">
                                    <svg class="circular-inner" viewBox="0 0 56 56">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">72%</div>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-semibold">UI/UX Design Fundamentals</h6>
                                    <p class="text-muted mb-0">85 Tasks</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center card-header">
                        <h5 class="card-title mb-0">Notice Board</h5>
                        <div class="dropdown">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">View All</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Import</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Export</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-0 card-body">
                        <div class="table-box table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="avatar-md bg-warning-subtle text-warning d-flex justify-content-center align-items-center rounded">
                                                    <i class="ri-user-community-line fs-5"></i>
                                                </div>
                                                <div>
                                                    <div class="fw-medium d-block mb-1 fs-14">Parents Meeting</div>
                                                    <p class="text-muted fs-12 mb-0 max-w-300px">An interactive
                                                        session to discuss students' progress and academic
                                                        performance.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end"><span class="badge bg-light text-body">20 Mar
                                                2025</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="avatar-md bg-danger-subtle text-danger d-flex justify-content-center align-items-center rounded">
                                                    <i class="ri-swap-2-fill fs-5"></i>
                                                </div>
                                                <div>
                                                    <div class="fw-medium d-block mb-1 fs-14">Teachers Workshop
                                                    </div>
                                                    <p class="text-muted fs-12 mb-0 max-w-300px">A professional
                                                        development event focusing on innovative teaching methods.
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end"><span class="badge bg-light text-body">25 Mar
                                                2025</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="avatar-md bg-primary-subtle text-primary d-flex justify-content-center align-items-center rounded">
                                                    <i class="ri-exchange-funds-line fs-5"></i>
                                                </div>
                                                <div>
                                                    <div class="fw-medium d-block mb-1 fs-14">Art & Science
                                                        Exhibition</div>
                                                    <p class="text-muted fs-12 mb-0 max-w-300px">Students showcase
                                                        their creativity and scientific projects in an engaging
                                                        exhibition.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end"><span class="badge bg-light text-body">30 Mar
                                                2025</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="avatar-md bg-success-subtle text-success d-flex justify-content-center align-items-center rounded">
                                                    <i class="ri-exchange-2-line fs-5"></i>
                                                </div>
                                                <div>
                                                    <div class="fw-medium d-block mb-1 fs-14">Cultural Festival
                                                    </div>
                                                    <p class="text-muted fs-12 mb-0 max-w-300px">A vibrant
                                                        celebration of diverse traditions, music, and dance
                                                        performances.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end"><span class="badge bg-light text-body">2 April
                                                2025</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-4">
                                                <div
                                                    class="avatar-md bg-info-subtle text-info d-flex justify-content-center align-items-center rounded">
                                                    <i class="ri-slideshow-view fs-5"></i>
                                                </div>
                                                <div>
                                                    <div class="fw-medium d-block mb-1 fs-14">Annual Talent Show
                                                    </div>
                                                    <p class="text-muted fs-12 mb-0 max-w-300px">A stage for
                                                        students to display their talents in music, dance, and
                                                        drama.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end"><span class="badge bg-light text-body">15 April
                                                2025</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/dashboard/academy.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
