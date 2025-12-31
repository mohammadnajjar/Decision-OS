@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Academy')
@section('pagetitle', 'Single Category')
@section('content')


    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="row">
            <div class="col-xxl-9">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-danger-subtle border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-8">
                                    <h6 class="fs-16 mb-0">New Student</h6>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                            <i class="ri-more-fill fs-5"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h3 class="mb-1">15k+</h3>
                                        <p class="mb-0">80% Increase in 18 days</p>
                                    </div>
                                    <div id="apex-line-chart" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-success-subtle border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-8">
                                    <h6 class="fs-16 mb-0">New Teachers</h6>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                            <i class="ri-more-fill fs-5"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h3 class="mb-1">6k+</h3>
                                        <p class="mb-0">40% Increase in 9 days</p>
                                    </div>
                                    <div id="apex-line-chart" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-secondary-subtle border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-8">
                                    <h6 class="fs-16 mb-0">New Courses</h6>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                            <i class="ri-more-fill fs-5"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h3 class="mb-1">143</h3>
                                        <p class="mb-0">76% Increase in 12 days</p>
                                    </div>
                                    <div id="apex-line-chart" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-info-subtle border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-8">
                                    <h6 class="fs-16 mb-0">Faculty Room</h6>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                            <i class="ri-more-fill fs-5"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h3 class="mb-1">55</h3>
                                        <p class="mb-0">89% Increase in 20 days</p>
                                    </div>
                                    <div id="apex-line-chart" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="academy_chart" class="apexcharts-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card card-h-100">
                            <div class="card-header">
                                <h6 class="mb-0">Courses Activites</h6>
                            </div>
                            <div class="card-body">
                                <div id="donut_chart" class="apexcharts-container"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h6 class="mb-5">January 2025</h6>
                                    <div class="text-center d-flex justify-content-between list-unstyled">
                                        <a href="javascript:void(0)" class="text-body">Sun<h6 class="mb-0 mt-2 day-item">
                                                01</h6></a>
                                        <a href="javascript:void(0)" class="text-body">Mon<h6 class="mb-0 mt-2 day-item">
                                                02</h6></a>
                                        <a href="javascript:void(0)" class="text-body">Tue<h6 class="mb-0 mt-2 day-item">
                                                03</h6></a>
                                        <a href="javascript:void(0)" class="text-body">Wed<h6 class="mb-0 mt-2 day-item">
                                                04</h6></a>
                                        <a href="javascript:void(0)" class="text-body">Thu<h6
                                                class="mb-0 mt-2 day-item active">05</h6></a>
                                        <a href="javascript:void(0)" class="text-body">Fri<h6 class="mb-0 mt-2 day-item">
                                                06</h6></a>
                                        <a href="javascript:void(0)" class="text-body">Sat<h6 class="mb-0 mt-2 day-item">
                                                07</h6></a>
                                    </div>
                                </div>
                                <div class="px-5 mx-n5" data-simplebar style="max-height: 463px;">
                                    <div class="mb-5">
                                        <p class="text-muted mb-5">Today</p>
                                        <div class="p-3 bg-light-subtle rounded-3 mb-4">
                                            <div class="dropdown float-end">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="text-muted">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                            here</a></li>
                                                </ul>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <div
                                                    class="h-50px w-50px bg-light rounded-2 d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-filetype-jsx fs-4"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">React for Beginners</h6>
                                                    <p class="text-muted mb-0 fs-12">09:00AM - 10:00AM</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="p-3 bg-light-subtle rounded-3">
                                            <div class="dropdown float-end">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    class="text-muted">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                            here</a></li>
                                                </ul>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">
                                                <div
                                                    class="h-50px w-50px bg-light rounded-2 d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-filetype-jsx fs-4"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">React for Beginners</h6>
                                                    <p class="text-muted mb-0 fs-12">09:00AM - 10:00AM</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <p class="text-muted mb-5">Sat, Jan 15</p>
                                    <div class="p-3 bg-light-subtle rounded-3 mb-4">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="h-50px w-50px bg-light rounded-2 d-flex justify-content-center align-items-center">
                                                <i class="bi bi-filetype-jsx fs-4"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">React for Beginners</h6>
                                                <p class="text-muted mb-0 fs-12">09:00AM - 10:00AM</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="p-3 bg-light-subtle rounded-3 mb-4">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="h-50px w-50px bg-light rounded-2 d-flex justify-content-center align-items-center">
                                                <i class="bi bi-filetype-jsx fs-4"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">React for Beginners</h6>
                                                <p class="text-muted mb-0 fs-12">09:00AM - 10:00AM</p>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="text-muted mb-5">Mon, Jan 17</p>
                                    <div class="p-3 bg-light-subtle rounded-3 mb-4">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="h-50px w-50px bg-light rounded-2 d-flex justify-content-center align-items-center">
                                                <i class="bi bi-filetype-html fs-4"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Python for Data Science</h6>
                                                <p class="text-muted mb-0 fs-12">10:30AM - 12:00PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light-subtle rounded-3">
                                        <div class="dropdown float-end">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                            </ul>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="h-50px w-50px bg-light rounded-2 d-flex justify-content-center align-items-center">
                                                <i class="bi bi-filetype-html fs-4"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Web Development Basics</h6>
                                                <p class="text-muted mb-0 fs-12">01:00PM - 02:30PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-header flex-wrap gap-3 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Database</h6>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <div class="form-icon">
                                <input type="text" class="form-control form-control-icon" id="firstNameLayout4"
                                    placeholder="Search Here ..." required>
                                <i class="ri-search-2-line text-muted"></i>
                            </div>
                            <button class="btn btn-primary"><i class="bi bi-plus-lg me-2"></i>Add More</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-box px-5 mx-n5" data-simplebar style="height: 308px;">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Score</th>
                                        <th>Submitted</th>
                                        <th>Grade</th>
                                        <th>Pass/Fail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <h6 class="mb-0">Alica Doe</h6>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">80/100</span>
                                        </td>
                                        <td>12/10/2025</td>
                                        <td>Excellent</td>
                                        <td><span class="badge bg-success-subtle text-success">Pass</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <h6 class="mb-0">John Smith</h6>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">65/100</span>
                                        </td>
                                        <td>13/10/2025</td>
                                        <td>Good</td>
                                        <td><span class="badge bg-success-subtle text-success">Pass</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <h6 class="mb-0">Emily Davis</h6>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">92/100</span>
                                        </td>
                                        <td>11/10/2025</td>
                                        <td>Outstanding</td>
                                        <td><span class="badge bg-success-subtle text-success">Pass</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <h6 class="mb-0">Michael Brown</h6>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">45/100</span>
                                        </td>
                                        <td>14/10/2025</td>
                                        <td>Poor</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Fail</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <h6 class="mb-0">Sophia Wilson</h6>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">88/100</span>
                                        </td>
                                        <td>10/10/2025</td>
                                        <td>Very Good</td>
                                        <td><span class="badge bg-success-subtle text-success">Pass</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <h6 class="mb-0">Daniel Garcia</h6>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">72/100</span>
                                        </td>
                                        <td>12/10/2025</td>
                                        <td>Good</td>
                                        <td><span class="badge bg-success-subtle text-success">Pass</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <h6 class="mb-0">Olivia Martinez</h6>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">39/100</span>
                                        </td>
                                        <td>13/10/2025</td>
                                        <td>Fail</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Fail</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="d-flex flex-wrap gap-3 align-items-center mt-5">
                            <div class="fw-medium"> Showing 1 - 4 of 3 Entries</div>
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
            <div class="col-xxl-3">
                <div class="row">
                    <div class="col-md-6 col-xxl-12">
                        <div class="card overflow-hidden position-relative">
                            <img src="assets/images/apps/rose-petals-info.svg" alt="Rose Petas Image"
                                class="position-absolute top-0 start-0 bottom-0 end-0 w-100 h-100 object-fit-cover">
                            <div class="card-body bg-info bg-opacity-10 border-info text-white position-relative">
                                <p class="text-uppercase">learning reminder</p>
                                <h4 class="text-white mb-1 mt-16">Set Your Learning Time</h4>
                                <p>Set your learning time as comfortable as you want</p>
                                <button class="btn bg-white text-info">Get Personalized Course</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-12">
                        <div class="card card-h-100 bg-danger-subtle border-0 overflow-hidden">
                            <div class="card-body">
                                <h4 class="mb-3 text-danger">Principle of design</h4>
                                <p class="mb-18">You have the flexibility to set your learning schedule in a way that best
                                    suits your comfort</p>
                                <button class="btn bg-danger text-white">Get Personalized Course</button>
                                <img src="assets/images/apps/alaram-clock.png" alt="alaram-clock Image"
                                    class="img-fluid h-160px w-160px alaram-img opacity-10">
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
    <script src="assets/js/app/academy-single-category.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

@endsection
