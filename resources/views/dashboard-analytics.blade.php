@extends('partials.layouts.master')

@section('title', 'Analytics | FabKin Admin & Dashboards Template')
@section('title-sub', 'Dashboard')
@section('pagetitle', 'Analytics')
@section('content')

    <div id="layout-wrapper">
        <div class="row">
            <div class="col-xxl-7">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Total Sale</h5>
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
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Sales Finnel</h5>
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
                                <div id="funnel"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Product Revenue</p>
                                        <h2 class="mt-10 mb-3 fs-22 fw-semibold">
                                            <span class="counter-value" data-target="28.05">28.05</span>k
                                        </h2>
                                        <p class="mb-0 text-muted text-truncate">
                                            <span class="badge bg-success-subtle text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 16.24 %
                                            </span> vs. previous month
                                        </p>
                                    </div>
                                    <div
                                        class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-secondary border border-dark border-opacity-20 shadow-sm fs-5">
                                        <i class="ri-money-dollar-circle-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Total Deals</p>
                                        <h2 class="mt-10 mb-3 fs-22 fw-semibold">
                                            <span class="counter-value" data-target="28.05">28.05</span>k
                                        </h2>
                                        <p class="mb-0 text-muted text-truncate">
                                            <span class="badge bg-success-subtle text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 16.24 %
                                            </span> vs. previous month
                                        </p>
                                    </div>
                                    <div
                                        class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-success border border-dark border-opacity-20 shadow-sm fs-5">
                                        <i class="bi bi-percent"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Created Tickets</p>
                                        <h2 class="mt-10 mb-3 fs-22 fw-semibold">
                                            <span class="counter-value" data-target="28.05">28.05</span>k
                                        </h2>
                                        <p class="mb-0 text-muted text-truncate">
                                            <span class="badge bg-success-subtle text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 16.24 %
                                            </span> vs. previous month
                                        </p>
                                    </div>
                                    <div
                                        class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-danger border border-dark border-opacity-20 shadow-sm fs-5">
                                        <i class="ri-ticket-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Average Reply</p>
                                        <h2 class="mt-10 mb-3 fs-22 fw-semibold">
                                            <span class="counter-value" data-target="28.05">28.05</span>k
                                        </h2>
                                        <p class="mb-0 text-muted text-truncate">
                                            <span class="badge bg-success-subtle text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 16.24 %
                                            </span> vs. previous month
                                        </p>
                                    </div>
                                    <div
                                        class="avatar-md d-flex justify-content-center align-items-center rounded-circle text-info border border-dark border-opacity-20 shadow-sm fs-5">
                                        <i class="ri-time-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Audiences Metrics</h4>
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
                            <div class="card-header p-0 border-0">
                                <div class="row g-0 text-center">
                                    <div class="col-lg-12">
                                        <div id="category"></div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="py-6 px-4 border border-dashed border-bottom-0 border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="789">789</span>
                                                <span class="text-success ms-1 fs-12">59%<i
                                                        class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                            </h5>
                                            <p class="text-muted mb-0">Avg. Session</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="py-6 px-4 border border-dashed border-bottom-0 border-start-0">
                                            <h5 class="mb-1"><span class="counter-value"
                                                    data-target="1563">1,563</span>
                                                <span class="text-success ms-1 fs-12">69%<i
                                                        class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                            </h5>
                                            <p class="text-muted mb-0">Conversion Rate</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div
                                            class="py-6 px-4 border border-dashed border-bottom-0 border-start-0 border-end-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="2">2</span>m
                                                <span class="counter-value" data-target="50">50</span>sec
                                                <span class="text-success ms-1 fs-12">45%<i
                                                        class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                            </h5>
                                            <p class="text-muted mb-0">Avg. Session Duration</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Campaign Source</h5>
                        <a href="javascript:void(0)"
                            class="link link-primary fs-13 text-muted text-decoration-underline">See All<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Campaign Name</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Medium</th>
                                        <th scope="col">Clicks</th>
                                        <th scope="col">Conversions</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/google.png" alt="Instructor"
                                                    class="avatar-md rounded-circle">
                                                <h6 class="mb-1">Winter Sale <span class="fs-11 fw-normal ms-2"><i
                                                            class="bi bi-star-fill text-warning me-1"></i>(4.8)</span></h6>
                                            </div>
                                        </th>
                                        <td>Google Ads</td>
                                        <td>PPC</td>
                                        <td>12,500</td>
                                        <td>1,250</td>
                                        <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                        <td>$18,750</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/secialmedia/instagram.png" alt="Instructor"
                                                    class="avatar-md rounded-circle">
                                                <div>
                                                    <h6 class="mb-1">Summer Deals <span class="fs-11 fw-normal ms-2"><i
                                                                class="bi bi-star-fill text-warning me-1"></i>(4.3)</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </th>
                                        <td>Instagram</td>
                                        <td>Influencer</td>
                                        <td>6,700</td>
                                        <td>670</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>$10,050</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/avatar/avatar-1.jpg" alt="Instructor"
                                                    class="avatar-md rounded-circle">
                                                <div>
                                                    <h6 class="mb-1">Back to School <span
                                                            class="fs-11 fw-normal ms-2"><i
                                                                class="bi bi-star-fill text-warning me-1"></i>(4.0)</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </th>
                                        <td>Twitter</td>
                                        <td>Social</td>
                                        <td>4,200</td>
                                        <td>315</td>
                                        <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                        <td>$6,750</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/avatar/avatar-8.jpg" alt="Instructor"
                                                    class="avatar-md rounded-circle">
                                                <div>
                                                    <h6 class="mb-1">New Year Promo <span
                                                            class="fs-11 fw-normal ms-2"><i
                                                                class="bi bi-star-fill text-warning me-1"></i>(4.9)</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </th>
                                        <td>Email</td>
                                        <td>Newsletter</td>
                                        <td>8,500</td>
                                        <td>425</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Expired</span></td>
                                        <td>$7,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap gap-3 align-items-center m-5">
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
            <div class="col-lg-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0 flex-grow-1">Top Performing Pages</h4>
                        <a href="javascript:void(0)"
                            class="link link-primary fs-13 text-muted text-decoration-underline">See All<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Page</th>
                                        <th scope="col">Conversion Rate</th>
                                        <th scope="col">Views</th>
                                        <th scope="col">Bounce Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0)" class="fw-medium text-body">home</a></td>
                                        <td>4.2%</td>
                                        <td>15,320</td>
                                        <td>35%</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" class="fw-medium text-body">product-page</a></td>
                                        <td>3.8%</td>
                                        <td>12,650</td>
                                        <td>42%</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" class="fw-medium text-body">checkout</a></td>
                                        <td>8.5%</td>
                                        <td>9,820</td>
                                        <td>20%</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" class="fw-medium text-body">article-1</a></td>
                                        <td>2.1%</td>
                                        <td>7,560</td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" class="fw-medium text-body">contact-us</a></td>
                                        <td>5.7%</td>
                                        <td>4,210</td>
                                        <td>28%</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" class="fw-medium text-body">about-us</a></td>
                                        <td>6.3%</td>
                                        <td>4,856</td>
                                        <td>64%</td>
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

    <script src="assets/js/dashboard/analytics.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
