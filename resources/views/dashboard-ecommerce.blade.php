@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'Dashboard')
@section('pagetitle', 'E-Commerce')

@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xxl-5">
                <div class="row">
                    <div class="col-xxl-6 col-xl-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="h-80px w-80px bg-info bg-opacity-10 position-absolute top-0 end-0 blur-md">
                                </div>
                                <div class="d-flex justify-content-between align-items-start mb-10">
                                    <div>
                                        <p class="text-muted mb-5">Customer</p>
                                        <h3 class="mb-0 fw-medium">35,458</h3>
                                    </div>
                                    <div
                                        class="h-50px w-50px position-relative d-flex justify-content-center align-items-center bg-info text-white fs-4 rounded-pill">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 fs-13">
                                    <p class="mb-0 text-success"><i class="bi bi-arrow-up-short fs-5"></i>5.26%
                                    </p>
                                    <p class="text-muted mb-0">For last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="h-80px w-80px bg-warning bg-opacity-10 position-absolute top-0 end-0 blur-md">
                                </div>
                                <div class="d-flex justify-content-between align-items-start mb-10">
                                    <div>
                                        <p class="text-muted mb-5">Order</p>
                                        <h3 class="mb-0 fw-medium">10,453</h3>
                                    </div>
                                    <div
                                        class="h-50px w-50px position-relative d-flex justify-content-center align-items-center bg-warning text-white fs-4 rounded-pill">
                                        <i class="bi bi-cart-check"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 fs-13">
                                    <p class="mb-0 text-danger"><i class="bi bi-arrow-down-short fs-5"></i>3.15%
                                    </p>
                                    <p class="text-muted mb-0">For last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="h-80px w-80px bg-success bg-opacity-10 position-absolute top-0 end-0 blur-md">
                                </div>
                                <div class="d-flex justify-content-between align-items-start mb-10">
                                    <div>
                                        <p class="text-muted mb-5">Revenue</p>
                                        <h3 class="mb-0 fw-medium">$423.652</h3>
                                    </div>
                                    <div
                                        class="h-50px w-50px position-relative d-flex justify-content-center align-items-center bg-success text-white fs-4 rounded-pill">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 fs-13">
                                    <p class="mb-0 text-danger"><i class="bi bi-arrow-up-short fs-5"></i>8.26%
                                    </p>
                                    <p class="text-muted mb-0">For last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-3 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="h-80px w-80px bg-primary bg-opacity-10 position-absolute top-0 end-0 blur-md">
                                </div>
                                <div class="d-flex justify-content-between align-items-start mb-10">
                                    <div>
                                        <p class="text-muted mb-5">Growth</p>
                                        <h3 class="mb-0 fw-medium">+ 41,553%</h3>
                                    </div>
                                    <div
                                        class="h-50px w-50px position-relative d-flex justify-content-center align-items-center bg-primary text-white fs-4 rounded-pill">
                                        <i class="bi bi-activity"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 fs-13">
                                    <p class="mb-0 text-success"><i class="bi bi-arrow-up-short fs-5"></i>4.76%
                                    </p>
                                    <p class="text-muted mb-0">For last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Sales Analytics</h6>
                        <div class="dropdown">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sales_revenue_chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Overall Progress</h6>
                    </div>
                    <div class="card-body">
                        <div id="daily_sales_chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Revenue Analytics</h6>
                        <div class="dropdown">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="revenue_chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4>$48,485</h4>
                                        <p class="text-muted mb-0">Total Earning</p>
                                    </div>
                                    <div
                                        class="h-40px w-40px d-flex justify-content-center align-items-center text-success bg-success-subtle rounded-pill">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>
                                </div>
                                <div class="my-8">
                                    <h5 class="fw-normal text-success mb-1">+ 48.5%</h5>
                                    <p>This month growth</p>
                                </div>
                                <button class="btn btn-primary">Withdraw Money<i
                                        class="bi bi-currency-dollar ms-1"></i></button>
                                <div class="mt-8 pt-8 border-top">
                                    <div class="d-flex gap-8">
                                        <div class="w-50">
                                            <div class="mb-1 fs-12 d-flex justify-content-between">
                                                <p class="mb-0 text-muted">Sales</p>
                                                <p class="mb-0 fw-semibold">80%</p>
                                            </div>
                                            <div class="progress progress-sm" role="progressbar"
                                                aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="--progress: 80;">
                                                <div class="progress-bar bg-secondary" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <div class="w-50">
                                            <div class="mb-1 fs-12 d-flex justify-content-between">
                                                <p class="mb-0 text-muted">Reffral</p>
                                                <p class="mb-0 fw-semibold">67%</p>
                                            </div>
                                            <div class="progress progress-sm" role="progressbar"
                                                aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="--progress: 67;">
                                                <div class="progress-bar bg-success" style="width: 67%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-h-100">
                            <div class="card-body">
                                <span
                                    class="badge bg-secondary-subtle text-secondary position-absolute top-0 end-0 mt-5 me-5">2025</span>
                                <div id="stroked_gauge_chart" class="apexcharts-container"></div>
                                <div class="p-3 rounded mt-6 bg-light-subtle border">
                                    <p class="text-center text-muted mb-0"><span
                                            class="text-success fw-semibold">67%</span> Company Growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-md-nowrap flex-wrap align-items-center">
                                    <div class="flex-shrink-0">
                                        <p class="mb-4">Monthly Order Lists</p>
                                        <div class="d-flex align-items-center gap-5 pe-6 me-6 border-end-md">
                                            <div
                                                class="h-50px w-50px d-flex justify-content-center align-items-center bg-light-subtle text-muted rounded fs-4">
                                                <i class="bi bi-currency-dollar"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-1 fw-medium">75,845</h5>
                                                <p class="text-muted fs-13 mb-0">Product Order</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <div id="product_order_chart" class="apexcharts-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Transactions</h6>
                        <div class="dropdown">
                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="text-muted">
                                <i class="bi bi-three-dots-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0)">This Week</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Month</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)">This Year</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <section class="px-5 mx-n5" data-simplebar style="height: 393px;">
                            <!-- Transaction Items -->
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-primary-subtle fs-4 text-primary">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Starbucks</h6>
                                        <p class="text-muted mb-0 fs-13">Wallet</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-success">+203.33</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-success-subtle fs-4 text-success">
                                        <i class="bi bi-credit-card"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Ordered Food</h6>
                                        <p class="text-muted mb-0 fs-13">Credit Card</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-danger">-838.71</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-danger-subtle fs-4 text-danger">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Send Money</h6>
                                        <p class="text-muted mb-0 fs-13">PayPal</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-success">+82.60</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-primary-subtle fs-4 text-primary">
                                        <i class="bi bi-wallet2"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Mac'D</h6>
                                        <p class="text-muted mb-0 fs-13">Wallet</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-success">+270.69</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-warning-subtle fs-4 text-warning">
                                        <i class="bi bi-credit-card"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Ordered Food</h6>
                                        <p class="text-muted mb-0 fs-13">Mastercard</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-danger">-92.45</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-info-subtle fs-4 text-info">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Refund</h6>
                                        <p class="text-muted mb-0 fs-13">Transfer</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-success">+637.91</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <!-- Additional Transactions -->
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-secondary-subtle fs-4 text-secondary">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Grocery Shopping</h6>
                                        <p class="text-muted mb-0 fs-13">Debit Card</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-danger">-125.50</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-dark-subtle fs-4 text-body">
                                        <i class="bi bi-bag"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Clothing Purchase</h6>
                                        <p class="text-muted mb-0 fs-13">Credit Card</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-danger">-300.00</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-3">
                                    <div
                                        class="h-44px w-44px d-flex justify-content-center align-items-center rounded bg-success-subtle fs-4 text-success">
                                        <i class="bi bi-piggy-bank"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Savings Deposit</h6>
                                        <p class="text-muted mb-0 fs-13">Bank Transfer</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <p class="mb-0 fw-medium text-success">+1,000.00</p>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="mb-0">Customer Reviews</h6>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between mb-2">
                                <div class="d-flex gap-1 align-items-center ">
                                    <h3 class="mb-0 ms-2">4.8</h3>
                                    <span class="badge bg-success-subtle text-success ms-2">Out of 5 Stars</span>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                            <p class="text-muted">Overall rating of 100 customer’s reviews</p>
                        </div>
                        <div class="my-8">
                            <div class="mb-3 d-flex align-items-center">
                                <div class="w-25">
                                    <span class="fw-medium">Excellent</span>
                                </div>
                                <div class="w-75 d-flex gap-3 align-items-center">
                                    <div class="progress progress-sm flex-grow-1">
                                        <div class="progress-bar bg-success" style="width: 80%;"></div>
                                    </div>
                                    <span class="text-muted">80</span>
                                </div>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <div class="w-25">
                                    <span class="fw-medium">Good</span>
                                </div>
                                <div class="w-75 d-flex gap-3 align-items-center">
                                    <div class="progress progress-sm flex-grow-1">
                                        <div class="progress-bar bg-danger" style="width: 70%;"></div>
                                    </div>
                                    <span class="text-muted">70</span>
                                </div>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <div class="w-25">
                                    <span class="fw-medium">Average</span>
                                </div>
                                <div class="w-75 d-flex gap-3 align-items-center">
                                    <div class="progress progress-sm flex-grow-1">
                                        <div class="progress-bar bg-warning" style="width: 60%;"></div>
                                    </div>
                                    <span class="text-muted">60</span>
                                </div>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <div class="w-25">
                                    <span class="fw-medium">Avg Below</span>
                                </div>
                                <div class="w-75 d-flex gap-3 align-items-center">
                                    <div class="progress progress-sm flex-grow-1">
                                        <div class="progress-bar bg-secondary" style="width: 50%;"></div>
                                    </div>
                                    <span class="text-muted">50</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="w-25">
                                    <span class="fw-medium">Poor</span>
                                </div>
                                <div class="w-75 d-flex gap-3 align-items-center">
                                    <div class="progress progress-sm flex-grow-1">
                                        <div class="progress-bar bg-primary" style="width: 40%;"></div>
                                    </div>
                                    <span class="text-muted">40</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-muted text-center">Result for the latest responses: Most would recommend this
                                product.</p>
                            <div class="text-center"><button class="btn btn-light-primary">See all Customer's
                                    Reviews</button></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6 col-xxl-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h6 class="mb-0">Top Seller</h6>
                        <a href="javascript:void(0)"
                            class="link link-primary fs-13 text-muted text-decoration-underline">See All<i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Sales</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="assets/images/avatar/avatar-1.jpg"
                                                    class="avatar-md rounded-circle me-2" alt="Seller1">
                                                <div>
                                                    <span class="fw-medium">John Doe</span>
                                                    <p class="mb-0 text-muted fs-13">johndoe1233@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/flag/us.svg" alt="Flag Image" class="w-30px">
                                            <span class="text-muted ms-2 fs-13">USA</span>
                                        </td>
                                        <td>320</td>
                                        <td><span class="badge bg-success-subtle text-success">$12,500</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="assets/images/avatar/avatar-2.jpg"
                                                    class="avatar-md rounded-circle me-2" alt="Seller2">
                                                <div>
                                                    <span class="fw-medium">Jane Smith</span>
                                                    <p class="mb-0 text-muted fs-13">janesmith876@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/flag/gb.svg" alt="Flag Image" class="w-30px">
                                            <span class="text-muted ms-2 fs-13">UK</span>
                                        </td>
                                        <td>280</td>
                                        <td><span class="badge bg-success-subtle text-success">$10,200</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="assets/images/avatar/avatar-3.jpg"
                                                    class="avatar-md rounded-circle me-2" alt="Seller3">
                                                <div>
                                                    <span class="fw-medium">Michael Lee</span>
                                                    <p class="mb-0 text-muted fs-13">michaellee321@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/flag/ca.svg" alt="Flag Image" class="w-30px">
                                            <span class="text-muted ms-2 fs-13">Canada</span>
                                        </td>
                                        <td>250</td>
                                        <td><span class="badge bg-success-subtle text-success">$9,500</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="assets/images/avatar/avatar-4.jpg"
                                                    class="avatar-md rounded-circle me-2" alt="Seller4">
                                                <div>
                                                    <span class="fw-medium">Emily Brown</span>
                                                    <p class="mb-0 text-muted fs-13">emilybrown99@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/flag/au.svg" alt="Flag Image" class="w-30px">
                                            <span class="text-muted ms-2 fs-13">Australia</span>
                                        </td>
                                        <td>220</td>
                                        <td><span class="badge bg-success-subtle text-success">$8,700</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="assets/images/avatar/avatar-5.jpg"
                                                    class="avatar-md rounded-circle me-2" alt="Seller5">
                                                <div>
                                                    <span class="fw-medium">Robert Johnson</span>
                                                    <p class="mb-0 text-muted fs-13">robertjohnson44@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/flag/de.svg" alt="Flag Image" class="w-30px">
                                            <span class="text-muted ms-2 fs-13">Germany</span>
                                        </td>
                                        <td>200</td>
                                        <td><span class="badge bg-success-subtle text-success">$7,800</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Customer Feedback</h6>
                    </div>
                    <div class="card-body">
                        <section class="px-5 mx-n5" data-simplebar style="height: 360px;">
                            <div class="d-flex align-items-start mb-6">
                                <img src="assets/images/avatar/avatar-6.jpg" class="avatar-md rounded-circle me-3"
                                    alt="User">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">John Doe<span
                                            class="badge bg-light-subtle text-muted float-end">Verified Buyer</span></h6>
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                                        <span class="ms-2 fs-12">(4.0)</span>
                                    </div>
                                    <p class="mb-0 text-muted">Great product! Really satisfied with the quality and
                                        support.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-6">
                                <img src="assets/images/avatar/avatar-7.jpg" class="avatar-md rounded-circle me-3"
                                    alt="User">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Jane Smith <span
                                            class="badge bg-light-subtle text-muted float-end">Verified Buyer</span></h6>
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                        <span class="ms-2 fs-12">(5.0)</span>
                                    </div>
                                    <p class="mb-0 text-muted">Absolutely loved it! Will definitely recommend to others.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-6">
                                <img src="assets/images/avatar/avatar-8.jpg" class="avatar-md rounded-circle me-3"
                                    alt="User">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Michael Lee <span
                                            class="badge bg-light-subtle text-muted float-end">Verified Buyer</span></h6>
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="text-warning">&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                                        <span class="ms-2 fs-12">(3.0)</span>
                                    </div>
                                    <p class="mb-0 text-muted">Good but could use some improvements in the delivery time.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="assets/images/avatar/avatar-9.jpg" class="avatar-md rounded-circle me-3"
                                    alt="User">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Emily Brown <span
                                            class="badge bg-light-subtle text-muted float-end">Verified Buyer</span></h6>
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                                        <span class="ms-2 fs-12">(4.0)</span>
                                    </div>
                                    <p class="mb-0 text-muted">Very satisfied! Quick delivery and great customer support.
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Top Categories</h5>
                    </div>
                    <div class="card-body">
                        <div id="categories_chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Order List</h6>
                        <a href="javascript:void(0)" class="link link-primary text-muted text-decoration-underline">See
                            All <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Published</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="assets/images/product/img-01.png"
                                                    class="avatar-lg border rounded-1 p-1" alt="Product Iamge">
                                                <div>
                                                    <h6 class="mb-0">Crop Top</h6>
                                                    <small class="text-muted">Cotton fabric </small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Fashion Wear</td>
                                        <td>$299</td>
                                        <td>61</td>
                                        <td>2024-04-25</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="assets/images/product/img-02.png"
                                                    class="avatar-lg border rounded-1 p-1" alt="Product Iamge">
                                                <div>
                                                    <h6 class="mb-0">Watch</h6>
                                                    <small class="text-muted">Stop Watch</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Watches</td>
                                        <td>$699</td>
                                        <td>79</td>
                                        <td>2024-04-25</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="assets/images/product/img-03.png"
                                                    class="avatar-lg border rounded-1 p-1" alt="Product Iamge">
                                                <div>
                                                    <h6 class="mb-0">Jeens Shoes</h6>
                                                    <small class="text-muted">Designer Mans Shoes</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Fashion Wear</td>
                                        <td>$599</td>
                                        <td>489</td>
                                        <td>2024-08-19</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="assets/images/product/img-04.png"
                                                    class="avatar-lg border rounded-1 p-1" alt="Product Iamge">
                                                <div>
                                                    <h6 class="mb-0">Pink Crop Top</h6>
                                                    <small class="text-muted">Lycra fabric </small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Fashion Wear</td>
                                        <td>$499</td>
                                        <td>185</td>
                                        <td>2024-08-05</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                    href="javascript:void(0)" data-discover="true">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
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

    </div>

    <!-- Submit Section -->
    </main>
@endsection

@section('js')

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- File js -->
    <script src="assets/js/dashboard/e-commerce.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

@endsection
