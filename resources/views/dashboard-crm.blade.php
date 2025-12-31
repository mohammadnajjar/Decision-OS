@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Dashboard')
@section('pagetitle', 'CRM')

@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xxl-5 col-xl-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <div class="d-flex flex-md-row flex-column align-items-center">
                                    <div class="welcome-content text-md-start text-center">
                                        <h4 class="mb-1 fw-normal ">Welcome to <span class="fw-semibold"> John Doe!</span> 🎉
                                        </h4>
                                        <p class="mb-5 fs-15  text-opacity-70">Boost your sales and track leads
                                            effortlessly.</p>
                                        <h4 class="fw-medium mb-1 fs-18">$14.26k</h4>
                                        <p class=" text-opacity-70">85% of salling target</p>
                                        <a href="javascript:void(0)" class="btn btn-primary mt-1">View Reports</a>
                                    </div>
                                    <div class="vector-image ms-md-auto text-center">
                                        <img src="assets/images/dashboard/welcome.png" alt="CRM Vector"
                                            class="img-fluid welcome-img w-208px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-12">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">View Details</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Export Data</a></li>
                                    </ul>
                                </div>
                                <p class="mb-5 fw-medium text-truncate">Total Revenue</p>
                                <h3 class="mb-1">$125.4K</h3>
                                <p class="text-muted mb-2 text-truncate">Since Last Month</p>
                                <div class="d-flex align-items-end justify-content-between">
                                    <span class="badge bg-success-subtle text-success mb-4">+ 18%<i
                                            class="ri-arrow-right-up-line text-success ms-1"></i></span>
                                    <div class="circular-progress circular-md circular-progress-success"
                                        style="--progress: 85;">
                                        <svg class="circular-inner" viewBox="0 0 76 76">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">85%</div>
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
                                        <li><a class="dropdown-item" href="javascript:void(0)">View Details</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Export Data</a></li>
                                    </ul>
                                </div>
                                <p class="mb-5 fw-medium text-truncate">New Customers</p>
                                <h3 class="mb-1">3,482</h3>
                                <p class="text-muted mb-2 text-truncate">Compared to Last Month</p>
                                <div class="d-flex align-items-end justify-content-between">
                                    <span class="badge bg-warning-subtle text-warning mb-4">+ 5%<i
                                            class="ri-arrow-right-up-line text-warning ms-1"></i></span>
                                    <div class="circular-progress circular-md circular-progress-warning"
                                        style="--progress: 68;">
                                        <svg class="circular-inner" viewBox="0 0 76 76">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">68%</div>
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
                                        <li><a class="dropdown-item" href="javascript:void(0)">View Details</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Export Data</a></li>
                                    </ul>
                                </div>
                                <p class="mb-5 fw-medium text-truncate">Orders Processed</p>
                                <h3 class="mb-1">7,890</h3>
                                <p class="text-muted mb-2 text-truncate">This Quarter</p>
                                <div class="d-flex align-items-end justify-content-between">
                                    <span class="badge bg-info-subtle text-info mb-4">+ 22%<i
                                            class="ri-arrow-right-up-line text-info ms-1"></i></span>
                                    <div class="circular-progress circular-md circular-progress-info"
                                        style="--progress: 92;">
                                        <svg class="circular-inner" viewBox="0 0 76 76">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">92%</div>
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
                                        <li><a class="dropdown-item" href="javascript:void(0)">View Details</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Export Data</a></li>
                                    </ul>
                                </div>
                                <p class="mb-5 fw-medium text-truncate">Active Subscriptions</p>
                                <h3 class="mb-1">1,245</h3>
                                <p class="text-muted mb-2 text-truncate">Since Last Update</p>
                                <div class="d-flex align-items-end justify-content-between">
                                    <span class="badge bg-danger-subtle text-danger mb-4">- 3%<i
                                            class="ri-arrow-right-down-line text-danger ms-1"></i></span>
                                    <div class="circular-progress circular-md circular-progress-danger"
                                        style="--progress: 55;">
                                        <svg class="circular-inner" viewBox="0 0 76 76">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">55%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Top Leads </h5>
                    </div>
                    <div class="card-body">
                        <section class="toplead-height px-5 mx-n5" data-simplebar style="height: 395px;">
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Socrates Itumay"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Socrates Itumay</strong>
                                        <p class="mb-0 text-muted fs-12">socratesitumay@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$1,835</strong>
                            </div>
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Json Taylor"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Json Taylor</strong>
                                        <p class="mb-0 text-muted fs-12">jsontaylor2416@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$2,415</strong>
                            </div>
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Suzika Stallone"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Suzika Stallone</strong>
                                        <p class="mb-0 text-muted fs-12">suzikastallone3214@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$2,314</strong>
                            </div>
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Angelina Hose"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Angelina Hose</strong>
                                        <p class="mb-0 text-muted fs-12">AngelinaHose3214@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$2,624</strong>
                            </div>
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Selena Deoyl"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Selena Deoyl</strong>
                                        <p class="mb-0 text-muted fs-12">selenadeoyl114@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$1,035</strong>
                            </div>
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-6.jpg" alt="Charlie Davieson"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Charlie Davieson</strong>
                                        <p class="mb-0 text-muted fs-12">charliedavieson@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$1,835</strong>
                            </div>
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-7.jpg" alt="Selena Deoyl"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Selena Deoyl</strong>
                                        <p class="mb-0 text-muted fs-12">selenadeoyl114@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$1,035</strong>
                            </div>
                            <div class="pb-3 mb-3 border-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-8.jpg" alt="Leo Phillip"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Leo Phillip</strong>
                                        <p class="mb-0 text-muted fs-12">leophillips@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$3,856</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/avatar/avatar-9.jpg" alt="Sophia Carter"
                                        class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <strong>Sophia Carter</strong>
                                        <p class="mb-0 text-muted fs-12">sophiacarter21@gmail.com</p>
                                    </div>
                                </div>
                                <strong>$2,450</strong>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title">Sales Performance</h5>
                    </div>
                    <div class="card-body">
                        <div id="sales_managment" class="apexcharts-container"></div>
                        <div class="d-flex flex-wrap column-gap-4 row-gap-4 justify-content-center">
                            <div class="px-3 py-1 bg-primary-subtle rounded text-primary border border-primary-subtle">
                                <span class="bullet h-10px w-10px me-2 bg-primary"></span>Mobile</div>
                            <div
                                class="px-3 py-1 bg-secondary-subtle rounded text-secondary border border-secondary-subtle">
                                <span class="bullet h-10px w-10px me-2 bg-secondary"></span>Desktop</div>
                            <div class="px-3 py-1 bg-danger-subtle rounded text-danger border border-danger-subtle"><span
                                    class="bullet h-10px w-10px me-2 bg-danger"></span>Laptop</div>
                            <div class="px-3 py-1 bg-warning-subtle rounded text-warning border border-warning-subtle">
                                <span class="bullet h-10px w-10px me-2 bg-warning"></span>Tablet</div>
                            <div class="px-3 py-1 bg-success-subtle rounded text-success border border-success-subtle">
                                <span class="bullet h-10px w-10px me-2 bg-info"></span>LED</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title">Revenue Analytics</h5>
                    </div>
                    <div class="card-body">
                        <div id="crm_revenue" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Deals Overview</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Client</th>
                                        <th scope="col">Deal</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fw-medium">
                                                <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Image"
                                                    class="avatar-md rounded-pill">
                                                Acme Corp
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-1.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                BluePeak Digital
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success-subtle text-success">Closed Won</span></td>
                                        <td>$250,000</td>
                                        <td class="text-end">
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
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fw-medium">
                                                <img src="assets/images/avatar/avatar-9.jpg" alt="Avatar Image"
                                                    class="avatar-md rounded-pill">
                                                Beta Solutions
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-2.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                VantagePoint Solutions
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning-subtle text-warning">In Progress</span></td>
                                        <td>$75,000</td>
                                        <td class="text-end">
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
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fw-medium">
                                                <img src="assets/images/avatar/avatar-10.jpg" alt="Avatar Image"
                                                    class="avatar-md rounded-pill">
                                                Gamma Tech
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-3.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                NextGen Ventures
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger-subtle text-danger">Lost</span></td>
                                        <td>$150,000</td>
                                        <td class="text-end">
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
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fw-medium">
                                                <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                                    class="avatar-md rounded-pill">
                                                Delta Media
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-4.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                CyberCore Labs
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info-subtle text-info">Negotiation</span></td>
                                        <td>$50,000</td>
                                        <td class="text-end">
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
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fw-medium">
                                                <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                    class="avatar-md rounded-pill">
                                                Juno Wraith
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-5.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                LumenTech Systems
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning-subtle text-warning">In Progress</span></td>
                                        <td>$41,000</td>
                                        <td class="text-end">
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
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fw-medium">
                                                <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                    class="avatar-md rounded-pill">
                                                Soren Thorne
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-6.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                Peak Industries
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger-subtle text-danger">Lost</span></td>
                                        <td>$23,000</td>
                                        <td class="text-end">
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
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title">Leads Management</h5>
                    </div>
                    <div class="card-body">
                        <div id="lead_managment" class="apexcharts-container"></div>
                        <div class="list-group-item px-0 d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex gap-2">
                                <span class="d-block mt-2 rounded-pill h-8px w-8px me-2 bg-info"></span>
                                <div>
                                    <p class="my-0 fw-semibold">Hot Leads</p>
                                    <p class="mb-0 text-muted fs-12">Increased by <span class="text-success">0.64% <i
                                                class="bi bi-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="text-end">
                                <h6 class="mb-0">1,754</h6>
                                <small class="text-muted fs-12">Leads</small>
                            </div>
                        </div>
                        <div class="list-group-item px-0 d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex gap-2">
                                <span class="d-block mt-2 rounded-pill h-8px w-8px me-2 bg-info bg-opacity-70"></span>
                                <div>
                                    <p class="my-0 fw-semibold">Warm Leads</p>
                                    <p class="mb-0 text-muted fs-12">Decreased by <span class="text-danger">2.75% <i
                                                class="bi bi-arrow-down"></i></span></p>
                                </div>
                            </div>
                            <div class="text-end">
                                <h6 class="mb-0">1,234</h6>
                                <small class="text-muted fs-12">Leads</small>
                            </div>
                        </div>
                        <div class="list-group-item px-0 d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex gap-2">
                                <span class="d-block mt-2 rounded-pill h-8px w-8px me-2 bg-info bg-opacity-50"></span>
                                <div>
                                    <p class="my-0 fw-semibold">Cold Leads</p>
                                    <p class="mb-0 text-muted fs-12">Increased by <span class="text-success">1.54% <i
                                                class="bi bi-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="text-end">
                                <h6 class="mb-0">878</h6>
                                <small class="text-muted fs-12">Leads</small>
                            </div>
                        </div>
                        <div class="list-group-item px-0 d-flex justify-content-between align-items-center">
                            <div class="d-flex gap-2">
                                <span class="d-block mt-2 rounded-pill h-8px w-8px me-2 bg-info bg-opacity-30"></span>
                                <div>
                                    <p class="my-0 fw-semibold">Lost Leads</p>
                                    <p class="mb-0 text-muted fs-12">Increased by <span class="text-success">1.54% <i
                                                class="bi bi-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="text-end">
                                <h6 class="mb-0">270</h6>
                                <small class="text-muted fs-12">Leads</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Team Collaboration</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0 text-muted">Boost productivity with seamless teamwork and efficient communication.
                        </p>
                        <ul class="list-group list-group-flush list-borderless my-3">
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                Clear Communication
                                <div
                                    class="h-36px w-36px bg-primary-subtle rounded d-flex align-items-center justify-content-center">
                                    <i class="bi bi-chat-dots-fill text-primary"></i>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between">
                                Task Management
                                <div
                                    class="h-36px w-36px bg-success-subtle rounded d-flex align-items-center justify-content-center">
                                    <i class="bi bi-kanban-fill text-success"></i>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Collaborative Tools
                                <div
                                    class="h-36px w-36px bg-info-subtle rounded d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people-fill text-info"></i>
                                </div>
                            </li>
                        </ul>
                        <div class="border p-4 rounded" data-simplebar style="height: 182px;">
                            <h6 class="fw-medium mb-5"><i class="bi bi-people-fill me-2"></i> Team Members</h6>
                            <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-11.jpg" alt="John Doe"
                                        class="rounded avatar-md">
                                    <div>
                                        <strong>John Doe</strong>
                                        <p class="text-muted small mb-0">Project Manager</p>
                                    </div>
                                </div>
                                <strong>$2,500</strong>
                            </div>

                            <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-12.jpg" alt="Emily Smith"
                                        class="rounded avatar-md">
                                    <div>
                                        <strong>Emily Smith</strong>
                                        <p class="text-muted small mb-0">Lead Developer</p>
                                    </div>
                                </div>
                                <strong>$3,100</strong>
                            </div>

                            <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Michael Brown"
                                        class="rounded avatar-md">
                                    <div>
                                        <strong>Michael Brown</strong>
                                        <p class="text-muted small mb-0">UI/UX Designer</p>
                                    </div>
                                </div>
                                <strong>$2,800</strong>
                            </div>

                            <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Sarah Johnson"
                                        class="rounded avatar-md">
                                    <div>
                                        <strong>Sarah Johnson</strong>
                                        <p class="text-muted small mb-0">QA Engineer</p>
                                    </div>
                                </div>
                                <strong>$2,400</strong>
                            </div>

                            <div class="d-flex justify-content-between align-items-center gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="David Wilson"
                                        class="rounded avatar-md">
                                    <div>
                                        <strong>David Wilson</strong>
                                        <p class="text-muted small mb-0">Marketing Specialist</p>
                                    </div>
                                </div>
                                <strong>$2,900</strong>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Recent Activity</h5>
                        <div class="btn-group">
                            <button class="btn btn-outline-light text-muted btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                See All
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0)">Import</a>
                                <a class="dropdown-item" href="javascript:void(0)">Export</a>
                                <a class="dropdown-item" href="javascript:void(0)">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <section class="crmactivity-height px-5 mx-n5" data-simplebar>
                            <div class="timeline2">
                                <ul>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1"><strong>John Doe</strong> approved the <a
                                                href="javascript:void(0)" class="text-primary fw-semibold">Project
                                                Budget</a></p>
                                        <small class="text-muted">10 mins ago</small>
                                    </li>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1">New client <strong>Lisa Carter</strong> signed the <span
                                                class="badge bg-success-subtle text-success">Contract</span></p>
                                        <small class="text-muted">30 mins ago</small>
                                    </li>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1"><span class="fw-bold text-secondary">Reminder:</span> Marketing
                                            meeting scheduled for <span class="badge bg-warning-subtle text-warning">2:00
                                                PM</span></p>
                                        <small class="text-muted">1 hr ago</small>

                                    </li>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1"><strong>Sarah Johnson</strong> uploaded a new <a
                                                href="javascript:void(0)" class="text-info fw-semibold">Sales
                                                Report.pdf</a></p>
                                        <small class="text-muted">2 hrs ago</small>

                                    </li>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1"><strong>Urgent:</strong> Deadline for <a
                                                href="javascript:void(0)" class="text-danger text-decoration-underline">Q1
                                                Revenue Forecast</a> extended<i
                                                class="bi bi-x-diamond-fill ms-1 text-danger"></i></p>
                                        <small class="text-muted">3 hrs ago</small>
                                    </li>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1"><strong>Kevin Smith</strong> added <a href="javascript:void(0)"
                                                class="text-secondary fw-semibold">Jane Cooper</a> to the Sales team.</p>
                                        <small class="text-muted">5 hrs ago</small>
                                    </li>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1">Customer <strong>Michael Lee</strong> sent a new <a
                                                href="javascript:void(0)" class="text-body">support ticket<i
                                                    class="bi bi-check-circle-fill text-success ms-1"></i></a></p>
                                        <small class="text-muted">6 hrs ago</small>
                                    </li>
                                    <li class="card border-0 box">
                                        <span></span>
                                        <p class="mb-1"><strong>Jane Doe</strong> completed the documentation for <a
                                                href="javascript:void(0)" class="text-primary fw-semibold">CRM API
                                                Integration</a></p>
                                        <small class="text-muted">8 hrs ago</small>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Lead Report</h5>
                        <div class="btn-group">
                            <button class="btn btn-outline-light text-muted btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                See All
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Import</a>
                                <a class="dropdown-item" href="javascript:void(0)">Export</a>
                                <a class="dropdown-item" href="javascript:void(0)">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault"
                                                    id="flexCheckDefault">
                                            </div>
                                        </th>
                                        <th scope="col">Contact Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Last Interaction</th>
                                        <th scope="col">Lead Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault01" id="flexCheckDefault01">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Zara Lume</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="bi bi-envelope me-2 text-muted"></i>zaralume123@gmail.com</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (234) 567-8901
                                            </div>
                                        </td>
                                        <td>10 Feb 2025</td>
                                        <td><span class="badge bg-light-subtle text-body">New</span></td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault02" id="flexCheckDefault02">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Kael Drift</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="bi bi-envelope me-2 text-muted"></i>kaeldrift789@gmail.com</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (234) 567-8901
                                            </div>
                                        </td>
                                        <td>15 Jan 2025</td>
                                        <td><span class="badge bg-light-subtle text-body">Follow-up</span></td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault03" id="flexCheckDefault03">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Elara Vex</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="bi bi-envelope me-2 text-muted"></i>elaravex456@gmail.com</div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (321) 654-9870
                                            </div>
                                        </td>
                                        <td>05 Apr 2025</td>
                                        <td><span class="badge bg-light-subtle text-body">New</span></td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault04" id="flexCheckDefault04">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Juno Wraith</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-md-center"><i
                                                    class="bi bi-envelope me-2 text-muted"></i>junowraith654@gmail.com
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center"><i
                                                    class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (562) 254-4455
                                            </div>
                                        </td>
                                        <td>31 Dec 2024</td>
                                        <td><span class="badge bg-light-subtle text-body">Follow-up</span></td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
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
        </div>
        <!-- Submit Section -->
        </main>
    @endsection

    @section('js')

        <script src="assets/libs/chart.js/chart.umd.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- File js -->
        <script src="assets/js/dashboard/crm.init.js"></script>
        <!-- App js -->
        <script type="module" src="assets/js/app.js"></script>
    @endsection
