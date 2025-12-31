@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'Dashboard')
@section('pagetitle', 'Logistic')
@section('css')
    <!-- Picker css -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">

    <link rel="stylesheet" href="assets/libs/leaflet/leaflet.css">
@endsection

@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xxl-8">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div class="row gy-5">
                            <div class="col-md-4 col-xxl-3">
                                <p>Overview of Last Month</p>
                                <div class="my-8 my-md-12">
                                    <h3 class="mb-1">$5698.45</h3>
                                    <p class="text-muted">Current Monthly Earning</p>
                                </div>
                                <div class="mb-8 mb-md-12">
                                    <h3 class="mb-1">452</h3>
                                    <p class="text-muted">Current Monthly Sales</p>
                                </div>
                                <button class="btn btn-primary rounded-pill">Last Month Summary</button>
                            </div>
                            <div class="col-md-8 col-xxl-9">
                                <div id="range_combo_chart" class="apexcharts-container"></div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-48px w-48px rounded-pill bg-info-subtle text-info d-flex justify-content-center align-items-center fs-4 flex-shrink-0">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <div>
                                        <p class="mb-2 text-muted">Total Shipments</p>
                                        <h5>18,425</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-48px w-48px rounded-pill text-success bg-success-subtle d-flex justify-content-center align-items-center fs-4 flex-shrink-0">
                                        <i class="ri-bar-chart-fill"></i>
                                    </div>
                                    <div>
                                        <p class="mb-2 text-muted">Compelted Order</p>
                                        <h5>12,412</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-48px w-48px rounded-pill text-warning bg-warning-subtle d-flex justify-content-center align-items-center fs-4 flex-shrink-0">
                                        <i class="ri-honour-line"></i>
                                    </div>
                                    <div>
                                        <p class="mb-2 text-muted">Pending Order</p>
                                        <h5>8,485</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-48px w-48px rounded-pill text-danger bg-danger-subtle d-flex justify-content-center align-items-center fs-4 flex-shrink-0">
                                        <i class="ri-wallet-3-line"></i>
                                    </div>
                                    <div>
                                        <p class="mb-2 text-muted">Total Earning</p>
                                        <h5>$485.63</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Session by Country</h6>
                        <a href="javascript:void(0)"
                            class="link link-primary text-muted fs-13 text-decoration-underline">See All <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-4 mb-5">
                            <img src="assets/images/flag/ad.svg" alt="Product Image" class="avatar-md">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center fs-13">
                                    <p class="text-muted mb-1">Andorra</p>
                                    <div class="d-flex fw-semibold align-items-center gap-2">
                                        <p class="mb-0">850
                                        <div class="h-4px w-4px rounded-pill bg-primary"></div> 6.5%</p>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 mb-5">
                            <img src="assets/images/flag/af.svg" alt="Product Image" class="avatar-md">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center fs-13">
                                    <p class="text-muted mb-1">Afghanistan</p>
                                    <div class="d-flex fw-semibold align-items-center gap-2">
                                        <p class="mb-0">720
                                        <div class="h-4px w-4px rounded-pill bg-primary"></div> 7.5%</p>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-striped bg-secondary" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 mb-5">
                            <img src="assets/images/flag/ag.svg" alt="Product Image" class="avatar-md">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center fs-13">
                                    <p class="text-muted mb-1">Antigua & Barbuda</p>
                                    <div class="d-flex fw-semibold align-items-center gap-2">
                                        <p class="mb-0">600
                                        <div class="h-4px w-4px rounded-pill bg-primary"></div> 4.5%</p>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-striped" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 mb-5">
                            <img src="assets/images/flag/ar.svg" alt="Product Image" class="avatar-md">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center fs-13">
                                    <p class="text-muted mb-1">Argentina</p>
                                    <div class="d-flex fw-semibold align-items-center gap-2">
                                        <p class="mb-0">480
                                        <div class="h-4px w-4px rounded-pill bg-primary"></div> 2.3%</p>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-striped bg-warning" style="width: 23%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 mb-5">
                            <img src="assets/images/flag/al.svg" alt="Product Image" class="avatar-md">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center fs-13">
                                    <p class="text-muted mb-1">Albania</p>
                                    <div class="d-flex fw-semibold align-items-center gap-2">
                                        <p class="mb-0">350
                                        <div class="h-4px w-4px rounded-pill bg-primary"></div> 4.8%</p>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-striped bg-info" style="width: 48%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 mb-5">
                            <img src="assets/images/flag/aw.svg" alt="Product Image" class="avatar-md">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center fs-13">
                                    <p class="text-muted mb-1">Aruba</p>
                                    <div class="d-flex fw-semibold align-items-center gap-2">
                                        <p class="mb-0">250
                                        <div class="h-4px w-4px rounded-pill bg-primary"></div> 6.2%</p>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-striped bg-success" style="width: 62%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4">
                            <img src="assets/images/flag/at.svg" alt="Product Image" class="avatar-md">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center fs-13">
                                    <p class="text-muted mb-1">Aruba</p>
                                    <div class="d-flex fw-semibold align-items-center gap-2">
                                        <p class="mb-0">250
                                        <div class="h-4px w-4px rounded-pill bg-primary"></div> 5.3%</p>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-striped bg-dark" style="width: 53%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-xxl-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Live Shipment Tracking</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-5">
                                    <div class="col-md-7">
                                        <span class="badge bg-secondary-subtle text-secondary float-end">In
                                            Transit</span>
                                        <div class="d-flex align-items-end gap-2 mb-10">
                                            <h3 class="mb-0">2.5km</h3>
                                            <span class="text-muted">Left</span>
                                        </div>
                                        <div class="timeline2 mb-8">
                                            <ul>
                                                <li class="card border-0 box">
                                                    <span></span>
                                                    <div class="badge border text-muted position-absolute top-0 end-0">
                                                        Today, 9:30 AM</div>
                                                    <h6 class="mt-1 mb-2">Checking</h6>
                                                    <p class="text-muted mb-0 fs-13">Warehouse #A12 → In Transit</p>
                                                </li>
                                                <li class="card border-0 box">
                                                    <span></span>
                                                    <div class="badge border text-muted position-absolute top-0 end-0">
                                                        Today, 11:00 AM</div>
                                                    <h6 class="mt-1 mb-2">Transit</h6>
                                                    <p class="text-muted mb-0 fs-13">Expected Delivery: 3:00 PM</p>
                                                </li>
                                                <li class="card border-0 box">
                                                    <span></span>
                                                    <div class="badge border text-muted position-absolute top-0 end-0">
                                                        Yesterday, 6:45 PM</div>
                                                    <h6 class="mt-1 mb-2">Delivered</h6>
                                                    <p class="text-muted mb-0 fs-13">Sorting Hub: NY Central</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-3 border border-dashed rounded">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center gap-4">
                                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                        class="avatar-lg rounded">
                                                    <div>
                                                        <p class="mb-1 text-muted fs-13">Curior</p>
                                                        <h6 class="mb-0">Sophia Mia</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-light-light h-44px w-44px text-muted fs-5">
                                                        <i class="bi bi-chat-dots"></i>
                                                    </button>
                                                    <button class="btn btn-light-light h-44px w-44px text-muted fs-5">
                                                        <i class="bi bi-telephone-inbound"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="w-100 tracking-map rounded" id="leaflet_map_popup"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Revenue</h6>
                        <div class="dropdown">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="ri-more-fill fs-5"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-6 gap-md-12">
                            <div class="d-flex gap-3">
                                <div class="h-8px w-8px mt-2 rounded-pill bg-primary"></div>
                                <div>
                                    <p class="text-muted mb-2 fs-13 mt-0">Total Revenue</p>
                                    <div class="d-flex align-items-end gap-2">
                                        <h5 class="mb-0">$55,485.66</h5>
                                        <span class="text-success fs-13">85%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="h-8px w-8px mt-2 rounded-pill bg-secondary"></div>
                                <div>
                                    <p class="text-muted mb-2 fs-13 mt-0">Total Target</p>
                                    <div class="d-flex align-items-end gap-2">
                                        <h5 class="mb-0">$45,485.66</h5>
                                        <span class="text-danger fs-13">78%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="spline_area_chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Analityc View</h6>
                        <div class="dropdown">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="ri-more-fill fs-5"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">Weekly</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Monthly</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">Yearly</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="stepline_chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card overflow-hidden card-h-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Avg. Monthly Delivered</h6>
                                <a href="javascript:void(0)" class="link link-primary text-muted fs-13">Read<i
                                        class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1">Consistent and Reliable Deliveries</h5>
                                        <p class="mb-2 text-muted">Avg. Monthly Delivered</p>
                                        <div class="my-10">
                                            <div class="d-flex align-items-center gap-2 mb-2">
                                                <h2 class="mb-0">12,345</h2>
                                                <p class="text-success fw-medium mb-0">+4.23%<i
                                                        class="bi bi-arrow-up-right ms-1"></i></p>
                                            </div>
                                            <p class="mb-0">Monthly average of packages successfully reaching
                                                destinations on time</p>
                                            <!-- Rating Stars -->
                                            <div class="mt-2">
                                                <i class="ri-star-fill text-warning"></i>
                                                <i class="ri-star-fill text-warning"></i>
                                                <i class="ri-star-fill text-warning"></i>
                                                <i class="ri-star-fill text-warning"></i>
                                                <i class="ri-star-half-line text-warning"></i>
                                                <span class="text-muted small ms-1">(4.5/5)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="circular-progress circular-md circular-progress-info" style="--progress: 82;">
                                    <svg class="circular-inner" viewBox="0 0 76 76">
                                        <circle class="bg-circular-progress"></circle>
                                        <circle class="fg-circular-progress"></circle>
                                    </svg>
                                    <div class="circular-text">82%</div>
                                </div>
                                <p class="fw-medium mt-4 mb-0">+8% last month</p>

                                <img src="assets/images/dashboard/truck.png" alt="Truck Image"
                                    class="img-fluid w-300px truck-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Sales Report</h6>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                        <i class="ri-more-fill fs-5"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Weekly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Monthly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Yearly</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="area_adwords" class="apexcharts-container"></div>
                                <div class="d-flex gap-4 gap-md-6">
                                    <div class="p-3 border rounded w-50">
                                        <p class="text-muted mb-2">Monthly</p>
                                        <h5 class="mb-2">$23,458.63</h5>
                                        <p class="fw-semibold text-primary mb-0 fs-13">+$75.00k</p>
                                    </div>
                                    <div class="p-3 border rounded w-50">
                                        <p class="text-muted mb-2">Yearly</p>
                                        <h5 class="mb-2">$45,458.63</h5>
                                        <p class="fw-semibold text-primary mb-0 fs-13">+$184.00k</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header gap-4 d-flex flex-wrap justify-content-between align-items-center">
                        <h6 class="mb-0">Shipments Activity</h6>
                        <div class="d-flex gap-3 align-items-center">
                            <div class="form-icon">
                                <input type="text" class="form-control form-control-icon" id="firstNameLayout4"
                                    placeholder="Search Here ..." required>
                                <i class="ri-search-2-line text-muted"></i>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-outline-light text-muted dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Shipment
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0)">All Shipment</a>
                                    <a class="dropdown-item" href="javascript:void(0)">In Transit</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Delivered</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Pending</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Delayed</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Canceled</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault"
                                                    id="flexCheckDefault">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Status</th>
                                        <th>Tracking Number</th>
                                        <th>Quantity</th>
                                        <th>Location</th>
                                        <th>Driver</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault01" id="flexCheckDefault01">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1001</a></td>
                                        <td>John Doe</td>
                                        <td>Alice Smith</td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">In Transit</span></td>
                                        <td>179230150</td>
                                        <td>150</td>
                                        <td>Warehouse A</td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault02" id="flexCheckDefault02">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1002</a></td>
                                        <td>Maria Lee</td>
                                        <td>Tom Brown</td>
                                        <td><span class="badge bg-success-subtle text-success">Delivered</span></td>
                                        <td>179230151</td>
                                        <td>20</td>
                                        <td>Warehouse B</td>
                                        <td>Maria Lee</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault03" id="flexCheckDefault03">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1003</a></td>
                                        <td>Greg Turner</td>
                                        <td>Sarah Davis</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>179230152</td>
                                        <td>10</td>
                                        <td>Warehouse C</td>
                                        <td>Mark White</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault04" id="flexCheckDefault04">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1004</a></td>
                                        <td>Lucy Scott</td>
                                        <td>Mike Green</td>
                                        <td><span class="badge bg-info-subtle text-info">Delayed</span></td>
                                        <td>179230153</td>
                                        <td>100</td>
                                        <td>Warehouse D</td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault05" id="flexCheckDefault05">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1005</a></td>
                                        <td>Sam Harris</td>
                                        <td>Emma White</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Canceled</span></td>
                                        <td>179230154</td>
                                        <td>5</td>
                                        <td>Warehouse E</td>
                                        <td>Sarah Green</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault06" id="flexCheckDefault06">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1010</a></td>
                                        <td>Charlie Brown</td>
                                        <td>Grace Lee</td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">In Transit</span></td>
                                        <td>179230159</td>
                                        <td>40</td>
                                        <td>Warehouse J</td>
                                        <td>Sarah Green</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap gap-4 align-items-center p-5">
                            <div class="fw-medium"> Showing 1 - 6 of 5 Entries </div>
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
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
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
    </div>
    <!-- Submit Section -->
    </main>
@endsection

@section('js')

    <script src="assets/libs/chart.js/chart.umd.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/libs/leaflet/leaflet.js"></script>
    <!-- File js -->
    <script src="assets/js/dashboard/logistic.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
