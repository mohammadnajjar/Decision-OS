@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'Logistics')
@section('pagetitle', 'Overview')
@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">


        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Order ID : #INV1001</h6>
                        <div>
                            <span class="badge bg-secondary-subtle text-secondary">In Transit</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6 col-xl-3">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 border-bottom pb-5 mb-5">
                                            <div
                                                class="h-50px w-50px bg-primary text-white d-flex align-items-center justify-content-center rounded fs-3">
                                                <i class="bi bi-truck-front"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-2">1,250</h5>
                                                <p class="text-muted mb-0 fs-12">All Shipments</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fs-12 mb-0">Compare to yesterday</p>
                                            <span class="badge bg-success-subtle text-success"><i
                                                    class="bi bi-arrow-up-short"></i>2.1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 border-bottom pb-5 mb-5">
                                            <div
                                                class="h-50px w-50px bg-success text-white d-flex align-items-center justify-content-center rounded fs-3">
                                                <i class="bi bi-check-circle"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-2">559</h5>
                                                <p class="text-muted mb-0 fs-12">Delivered</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fs-12 mb-0">Compare to yesterday</p>
                                            <span class="badge bg-success-subtle text-success"><i
                                                    class="bi bi-arrow-up-short"></i>1.5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 border-bottom pb-5 mb-5">
                                            <div
                                                class="h-50px w-50px bg-info text-white d-flex align-items-center justify-content-center rounded fs-3">
                                                <i class="bi bi-hourglass-split"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-2">367</h5>
                                                <p class="text-muted mb-0 fs-12">Pending</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fs-12 mb-0">Compare to yesterday</p>
                                            <span class="badge bg-danger-subtle text-danger"><i
                                                    class="bi bi-arrow-down-short"></i>0.9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="d-flex gap-4 border-bottom pb-5 mb-5">
                                            <div
                                                class="h-50px w-50px bg-secondary text-white d-flex align-items-center justify-content-center rounded fs-3">
                                                <i class="bi bi-exclamation-circle"></i>
                                            </div>
                                            <div>
                                                <h5 class="mb-2">126</h5>
                                                <p class="text-muted mb-0 fs-12">Delayed</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="fs-12 mb-0">Compare to yesterday</p>
                                            <span class="badge bg-success-subtle text-success"><i
                                                    class="bi bi-arrow-up-short"></i>1.9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="horizontal timeline3">
                            <div class="steps">
                                <div class="step">
                                    <span class="text-center">To be prepares <br>
                                        <p class="text-muted fs-12">26 Dec, 2024</p>
                                    </span>
                                </div>
                                <div class="step">
                                    <span class="text-center">Sent to logistics<br>
                                        <p class="text-muted fs-12">27 Dec, 2024</p>
                                    </span>
                                </div>
                                <div class="step current">
                                    <span class="text-center">In preparation<br>
                                        <p class="text-muted fs-12">28 Dec, 2024</p>
                                    </span>
                                </div>
                                <div class="step">
                                    <span class="text-center">Shipped<br>
                                        <p class="text-muted fs-12">29 Dec, 2024</p>
                                    </span>
                                </div>
                                <div class="step">
                                    <span class="text-center">Delivered<br>
                                        <p class="text-muted fs-12">31 Dec, 2024</p>
                                    </span>
                                </div>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="row g-4 py-5">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-0 border">
                                    <div class="card-body">
                                        <h6 class="mb-4 text-uppercase"><i class="bi bi-ticket-detailed me-2"></i>Order
                                            Information</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="fs-12 text-muted">Pick up Date:</span>
                                                <p class="fw-medium">14:40:15 17, Feb 2024</p>
                                            </li>
                                            <li><span class="fs-12 text-muted">Drop of Estimation:</span>
                                                <p class="fw-medium">7 days</p>
                                            </li>
                                            <li><span class="fs-12 text-muted">Insurance:</span>
                                                <p class="fw-medium mb-0">SafeHorizon Insurance</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-0 card-h-100 border">
                                    <div class="card-body">
                                        <h6 class="mb-4 text-uppercase"><i class="bi bi-geo-alt me-2"></i>Location</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li><span class="fs-12 text-muted">Pick Up Location:</span>
                                                <p class="fw-medium">123 Main Street, New York, NY</p>
                                            </li>
                                            <li><span class="fs-12 text-muted">Drop Off Location:</span>
                                                <p class="fw-medium mb-0">456 Elm Avenue, Brooklyn, NY</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-0 border">
                                    <div class="card-body">
                                        <h6 class="mb-4 text-uppercase"><i class="bi bi-info-square me-2"></i>Cusomer
                                            Information</h6>
                                        <ul class="list-unstyled  mb-0">
                                            <li><span class="fs-12 text-muted">Full Name:</span>
                                                <p class="fw-medium">John Doe</p>
                                            </li>
                                            <li><span class="fs-12 text-muted">Email:</span>
                                                <p class="fw-medium">johndoe@example.com</p>
                                            </li>
                                            <li><span class="fs-12 text-muted">Phone Number:</span>
                                                <p class="fw-medium mb-0">+1 (123) 456-7890</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="py-5">
                            <h6>Item List</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap align-middle text-center">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Weight</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div
                                                        class="d-flex align-items-center h-40px w-40px p-1 rounded border">
                                                        <img src="assets/images/e-commerce/watch.png"
                                                            alt="Garmin vivomove" class="img-fluid object-fit-cover">
                                                    </div>
                                                    <div><strong>Garmin vivomove</strong></div>
                                                </div>
                                            </td>
                                            <td>Wearable Tech</td>
                                            <td>0.3kg</td>
                                            <td>1</td>
                                            <td>$250.00</td>
                                            <td>$250.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-start">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div
                                                        class="d-flex align-items-center h-40px w-40px p-1 rounded border">
                                                        <img src="assets/images/e-commerce/shoes.png"
                                                            alt="Men's Puma SD Shoes" class="img-fluid object-fit-cover">
                                                    </div>
                                                    <div><strong>Men's Puma SD Shoes</strong></div>
                                                </div>
                                            </td>
                                            <td>Footwear</td>
                                            <td>0.9kg</td>
                                            <td>2</td>
                                            <td>$75.00</td>
                                            <td>$150.00</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-start">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div
                                                        class="d-flex align-items-center h-40px w-40px p-1 rounded border">
                                                        <img src="assets/images/e-commerce/chair.png" alt="Chair AAC12"
                                                            class="img-fluid object-fit-cover">
                                                    </div>
                                                    <div><strong>Chair AAC12</strong></div>
                                                </div>
                                            </td>
                                            <td>Furniture</td>
                                            <td>5.0kg</td>
                                            <td>1</td>
                                            <td>$180.00</td>
                                            <td>$180.00</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div
                                                        class="d-flex align-items-center h-40px w-40px p-1 rounded border">
                                                        <img src="assets/images/e-commerce/crop-top.png"
                                                            alt="Paar Lokal Crop Top" class="img-fluid object-fit-cover">
                                                    </div>
                                                    <div><strong>Paar Lokal Crop Top</strong></div>
                                                </div>
                                            </td>
                                            <td>Clothing</td>
                                            <td>0.2kg</td>
                                            <td>3</td>
                                            <td>$25.00</td>
                                            <td>$75.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card position-sticky" style="top: 100px;">
                    <div class="card-header">
                        <h6 class="card-title">Tracking List</h6>
                    </div>
                    <div class="card-body">
                        <div class="pb-5 d-flex align-items-center gap-3">
                            <div class="position-relative w-100">
                                <div class="form-icon right">
                                    <input type="text" class="form-control rounded-3 border form-control-icon"
                                        placeholder="Search...">
                                    <i class="ri-search-2-line search-icon"></i>
                                </div>
                            </div>
                            <button class="btn btn-outline-light text-muted icon-btn flex-shrink-0 rounded-pill"><i
                                    class="bi bi-filter"></i></button>
                        </div>
                        <div class="mx-n5 px-5" data-simplebar style="height: 645px;">
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1001</h6>
                                    <p class="mb-0 fs-12 text-muted">179230150</p>
                                </div>
                                <div>
                                    <span class="badge bg-secondary-subtle text-secondary">In Transit</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1002</h6>
                                    <p class="mb-0 fs-12 text-muted">179230151</p>
                                </div>
                                <div>
                                    <span class="badge bg-success-subtle text-success">Delivered</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1003</h6>
                                    <p class="mb-0 fs-12 text-muted">179230152</p>
                                </div>
                                <div>
                                    <span class="badge bg-warning-subtle text-warning">Pending</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1004</h6>
                                    <p class="mb-0 fs-12 text-muted">179230153</p>
                                </div>
                                <div>
                                    <span class="badge bg-primary-subtle text-primary">Delayed</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1006</h6>
                                    <p class="mb-0 fs-12 text-muted">179230155</p>
                                </div>
                                <div>
                                    <span class="badge bg-danger-subtle text-danger">Canceled</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1007</h6>
                                    <p class="mb-0 fs-12 text-muted">179230156</p>
                                </div>
                                <div>
                                    <span class="badge bg-primary-subtle text-primary">In Transit</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1008</h6>
                                    <p class="mb-0 fs-12 text-muted">179230155</p>
                                </div>
                                <div>
                                    <span class="badge bg-success-subtle text-success">Delivered</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1009</h6>
                                    <p class="mb-0 fs-12 text-muted">179230156</p>
                                </div>
                                <div>
                                    <span class="badge bg-warning-subtle text-warning">Pending</span>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-center border-bottom border-dashed py-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1009</h6>
                                    <p class="mb-0 fs-12 text-muted">179230157</p>
                                </div>
                                <div>
                                    <span class="badge bg-primary-subtle text-primary">Delayed</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-4">
                                <div>
                                    <h6 class="mb-1"><span class="fw-normal me-2">ID</span>#INV1010</h6>
                                    <p class="mb-0 fs-12 text-muted">179230158</p>
                                </div>
                                <div>
                                    <span class="badge bg-danger-subtle text-danger">Canceled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

@endsection

@section('js')

    <script type="module" src="assets/js/app.js"></script>
@endsection
