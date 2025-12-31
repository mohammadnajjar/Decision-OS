@extends('partials.layouts.master')

@section('title', 'Pages | FabKin Admin & Dashboards Template')

@section('title-sub', 'Pages')
@section('pagetitle', 'Profile')
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="card overflow-hidden">
            <div class="card-body h-176px"
                style="background-image: url('assets/images/background.png');background-repeat: no-repeat;background-position: right;">
            </div>
            <div class="mt-2">
                <div class="card-body p-5">
                    <div class="d-flex float-end gap-2 flex-shrink-0">
                        <button type="button" class="btn btn-light-secondary">Hire me</button>
                        <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Follow</button>
                    </div>
                    <div class="d-flex flex-wrap align-items-start gap-5">
                        <div class="mt-n12 flex-shrink-0">
                            <div class="position-relative d-inline-block">
                                <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                    class="h-128px w-128px border border-4 border-light-subtle shadow-lg">
                                <span class="position-absolute profile-dot bg-success rounded-circle">
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-5">
                                <h5 class="mb-1">Sophia Bethany <i
                                        class="bi bi-patch-check-fill fs-16 ms-1 text-info"></i></h5>
                                <p class="text-muted fs-12 mb-0">Fashion &amp; Graphic Designer</p>
                            </div>
                            <div class="w-50 border-dashed border border-1">
                                <div class="p-4 d-flex">
                                    <div
                                        class="d-flex flex-column justify-content-center gap-1 w-208px text-center border-end border-dark border-opacity-20">
                                        <h5 class="mb-0 lh-1">102</h5>
                                        <span class="text-muted lh-sm fs-12">Post</span>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center gap-1 w-208px text-center border-end border-dark border-opacity-20">
                                        <h5 class="mb-0 lh-1">951</h5>
                                        <span class="text-muted lh-sm fs-12">Like</span>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center gap-1 w-208px text-center">
                                        <h5 class="mb-0 lh-1">3.2k</h5>
                                        <span class="text-muted lh-sm fs-12">Subcribers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-5 mt-2">
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-map fs-16"></i>
                                        <p class="text-muted mb-2">Location</p>
                                    </div>
                                    <h6 class="mb-0">Los Angeles, California</h6>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-mailbox fs-16"></i>
                                        <p class="text-muted mb-2">Email</p>
                                    </div>
                                    <h6 class="mb-0">kenneth@example.com</h6>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-telephone fs-16"></i>
                                        <p class="text-muted mb-2">Phone No</p>
                                    </div>
                                    <h6 class="mb-0">+(254) 956 784 4546</h6>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-globe-central-south-asia fs-16"></i>
                                        <p class="text-muted mb-2">Website</p>
                                    </div>
                                    <h6 class="mb-0">www.example.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header align-items-center">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title mb-0">Job Information</h5>
                            <button class="btn btn-outline-light text-muted btn-sm"><i class="bi bi-plus"></i>Add
                                info</button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Department</th>
                                        <th scope="col">Division</th>
                                        <th scope="col">Salary</th>
                                        <th scope="col">Contact No.</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Employment Type</th>
                                        <th scope="col">Work Hours</th>
                                        <th scope="col">Experience Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Marketing Team</td>
                                        <td>Project Management</td>
                                        <td>$65,000 per year</td>
                                        <td>+1 234-567-8901</td>
                                        <td>alex.foster@example.com</td>
                                        <td><span class="badge bg-success-subtle text-success">Full-Time</span></td>
                                        <td>9 AM - 5 PM</td>
                                        <td><span class="badge bg-primary-subtle text-primary">Mid-Level</span></td>
                                    </tr>
                                    <tr>
                                        <td>IT Department</td>
                                        <td>Software Development</td>
                                        <td>$95,000 per year</td>
                                        <td>+1 987-654-3210</td>
                                        <td>jessica.smith@example.com</td>
                                        <td><span class="badge bg-success-subtle text-success">Full-Time</span></td>
                                        <td>10 AM - 6 PM</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Senior</span></td>
                                    </tr>
                                    <tr>
                                        <td>HR Department</td>
                                        <td>Employee Relations</td>
                                        <td>$58,000 per year</td>
                                        <td>+1 456-789-0123</td>
                                        <td>michael.johnson@example.com</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Part-Time</span></td>
                                        <td>10 AM - 3 PM</td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">Junior</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sales Team</td>
                                        <td>Business Development</td>
                                        <td>$75,000 per year</td>
                                        <td>+1 321-654-0987</td>
                                        <td>emily.carter@example.com</td>
                                        <td><span class="badge bg-success-subtle text-success">Full-Time</span></td>
                                        <td>8 AM - 4 PM</td>
                                        <td><span class="badge bg-primary-subtle text-primary">Mid-Level</span></td>
                                    </tr>
                                    <tr>
                                        <td>Finance</td>
                                        <td>Accounting</td>
                                        <td>$70,000 per year</td>
                                        <td>+1 765-432-1098</td>
                                        <td>robert.miller@example.com</td>
                                        <td><span class="badge bg-success-subtle text-success">Full-Time</span></td>
                                        <td>9 AM - 5 PM</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Senior</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card ">
                    <div class="card-header  d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Skills Overview</h5>
                        <div class="dropdown">
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
                    <div class="card-body">
                        <div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-medium">React.js</span>
                                    <span class="fw-medium">90%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Default striped example"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-medium">Vue.js</span>
                                    <span class="fw-medium">75%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Default striped example"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                        style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-medium">Node.js</span>
                                    <span class="fw-medium">60%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Default striped example"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                        style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-medium">Python</span>
                                    <span class="fw-medium">85%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Default striped example"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                        style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-medium">SQL</span>
                                    <span class="fw-medium">50%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Default striped example"
                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                        style="width: 50%"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-medium">JavaScript</span>
                                    <span class="fw-medium">80%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Default striped example"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-medium">SQL</span>
                                    <span class="fw-medium">62%</span>
                                </div>
                                <div class="progress progress-sm" role="progressbar" aria-label="Default striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        style="width: 62%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Activity</h5>
                        <div class="dropdown">
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
                    <div class="card-body">
                        <div data-simplebar class="px-5 mx-n5" style="height: 355px;">
                            <div class="d-flex gap-3 border p-4 rounded mb-4">
                                <img src="assets/images/avatar/avatar-1.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <span class="float-end fs-12 fw-medium">Jul 13, 2024</span>
                                    <h6 class="mb-1 fs-15">Andrea Gutierrez</h6>
                                    <span class="text-muted"><i
                                            class="bi bi-hand-thumbs-up text-primary me-1 fs-16"></i>Liked your post
                                        "Excellent Design"</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3 border p-4 rounded mb-4">
                                <img src="assets/images/avatar/avatar-4.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <span class="float-end fs-12 fw-medium">Jul 25, 2024</span>
                                    <h6 class="mb-1 fs-15">Sophia Lopez</h6>
                                    <span class="text-muted"><i
                                            class="bi bi-chat-left-text text-success me-1 fs-16"></i>Commented on your post
                                        "Great Work!"</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border p-4 rounded mb-4">
                                <img src="assets/images/avatar/avatar-2.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <span class="float-end fs-12 fw-medium">Jul 18, 2024</span>
                                    <h6 class="mb-1 fs-15">Adolfo Wallace</h6>
                                    <span class="text-muted"><i
                                            class="bi bi-hand-thumbs-up text-primary me-1 fs-16"></i>Liked your post "Nice
                                        Design"</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border p-4 rounded mb-4">
                                <img src="assets/images/avatar/avatar-3.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <span class="float-end fs-12 fw-medium">Jul 22, 2024</span>
                                    <h6 class="mb-1 fs-15">Tara Harvey</h6>
                                    <span class="text-muted"><i
                                            class="bi bi-hand-thumbs-up text-primary me-1 fs-16"></i>Liked your post "This
                                        is too good to be true!"</span>
                                </div>
                            </div>


                            <div class="d-flex gap-3 border p-4 rounded mb-4">
                                <img src="assets/images/avatar/avatar-5.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <span class="float-end fs-12 fw-medium">Jul 27, 2024</span>
                                    <h6 class="mb-1 fs-15">Liam Johnson</h6>
                                    <span class="text-muted"><i class="bi bi-repeat text-warning me-1 fs-16"></i>Shared
                                        your post "Amazing Content!"</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border p-4 rounded">
                                <img src="assets/images/avatar/avatar-6.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <span class="float-end fs-12 fw-medium">Jul 30, 2024</span>
                                    <h6 class="mb-1 fs-15">Olivia Martinez</h6>
                                    <span class="text-muted"><i
                                            class="bi bi-person-plus text-danger me-1 fs-16"></i>Started following
                                        you</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Compensation</h5>
                        <div class="dropdown">
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
                    <div class="card-body p-0">
                        <div data-simplebar style="height: 395px;">
                            <div class="d-flex gap-3 border-bottom p-5">
                                <img src="assets/images/avatar/avatar-9.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <button class="btn btn-light-light text-muted btn-sm rounded float-end">Follow</button>
                                    <h6 class="mb-1 fs-15">James Anderson</h6>
                                    <span class="text-muted">james.anderson@example.com</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border-bottom p-5">
                                <img src="assets/images/avatar/avatar-11.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <button class="btn btn-light-light text-muted btn-sm rounded float-end">Follow</button>
                                    <h6 class="mb-1 fs-15">Sophia Williams</h6>
                                    <span class="text-muted">sophia.williams@example.com</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border-bottom p-5">
                                <img src="assets/images/avatar/avatar-12.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <button class="btn btn-light-light text-muted btn-sm rounded float-end">Follow</button>
                                    <h6 class="mb-1 fs-15">Liam Johnson</h6>
                                    <span class="text-muted">liam.johnson@example.com</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border-bottom p-5">
                                <img src="assets/images/avatar/avatar-10.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <button class="btn btn-light-light text-muted btn-sm rounded float-end">Follow</button>
                                    <h6 class="mb-1 fs-15">Olivia Martinez</h6>
                                    <span class="text-muted">olivia.martinez@example.com</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border-bottom p-5">
                                <img src="assets/images/avatar/avatar-5.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <button class="btn btn-light-light text-muted btn-sm rounded float-end">Follow</button>
                                    <h6 class="mb-1 fs-15">Noah Davis</h6>
                                    <span class="text-muted">noah.davis@example.com</span>
                                </div>
                            </div>

                            <div class="d-flex gap-3 border-bottom p-5">
                                <img src="assets/images/avatar/avatar-6.jpg"
                                    class="avatar-lg flex-shrink-0 rounded-circle" alt="Avatar Image">
                                <div class="flex-grow-1">
                                    <button class="btn btn-light-light text-muted btn-sm rounded float-end">Follow</button>
                                    <h6 class="mb-1 fs-15">Emma Robinson</h6>
                                    <span class="text-muted">emma.robinson@example.com</span>
                                </div>
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
