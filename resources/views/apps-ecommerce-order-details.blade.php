@extends('partials.layouts.master')

@section('title', 'Order Details | FabKin Admin & Dashboards Template')
@section('title-sub', 'Eccomerce')
@section('pagetitle', 'Order Details')
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Order Details</h5>
                        <div
                            class="avatar-sm bg-primary-subtle text-primary d-flex justify-content-center align-items-center rounded-2">
                            <i class="ri-discuss-line"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between gap-2">
                            <h6><i class="ti ti-calendar fs-18 me-2"></i>Date</h6>
                            <div class="text-end">
                                <p>05/10/2024</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <h6><i class="ti ti-credit-card fs-18 me-2"></i>Payment</h6>
                            <div class="text-end">
                                <p>Online</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <h6 class="mb-0"><i class="ti ti-truck-delivery fs-18 me-2"></i>Shipping</h6>
                            <div class="text-end">
                                <p class="mb-0"> Fast Shipping</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Customer Details</h5>
                        <div
                            class="avatar-sm bg-primary-subtle text-primary d-flex justify-content-center align-items-center rounded-2">
                            <i class="ri-id-card-line"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between gap-2">
                            <h6><i class="ti ti-file-invoice f-s-18 me-2"></i>Customer</h6>
                            <div class="text-end">
                                <p>Kedija Eyob</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <h6><i class="ti ti-mail f-s-18 me-2"></i>Email</h6>
                            <div class="text-end">
                                <p>eyob@1234.com</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <h6 class="mb-0"><i class="ti ti-device-mobile f-s-18 me-2"></i>contact</h6>
                            <div class="text-end">
                                <p class="mb-0">+1 123 456 789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Delivery Address</h5>
                        <div
                            class="avatar-sm bg-primary-subtle text-primary d-flex justify-content-center align-items-center rounded-2">
                            <i class="ri-printer-line"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between gap-2">
                            <h6><i class="ti ti-file-invoice f-s-18 me-2"></i>Invoice</h6>
                            <div class="text-end">
                                <p> #DRF-89465</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <h6><i class="ti ti-mail f-s-18 me-2"></i>Flat/Building Name</h6>
                            <div class="text-end">
                                <p>New York</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <h6 class="mb-0"><i class="ti ti-truck-delivery f-s-18 me-2"></i>Shipping</h6>
                            <div class="text-end">
                                <p class="mb-0">#OR-4798455</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Payment Details</h5>
                        <div
                            class="avatar-sm bg-primary-subtle text-primary d-flex justify-content-center align-items-center rounded-2">
                            <i class="ri-secure-payment-line"></i></div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Transactions:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">#QLR5456465</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Payment Method:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Credit Card</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Card Holder Name:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Kedija Eyob</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Card Number:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">xxxx xxxx xxxx 7895</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0">Total Amount:</p>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">$1111</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Order #496874</h5>
                            <div class="flex-shrink-0">
                                <a href="javascript:void(0)" class="btn btn-success btn-sm"><i
                                        class="ri-download-2-fill align-middle me-1"></i> Invoice</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-box">
                            <table class="table table-borderless">
                                <thead class="border-bottom">
                                    <tr>
                                        <th>Item</th>
                                        <th>Tracking Mo.</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex gap-3 align-items-center">
                                                <div
                                                    class="h-56px w-56px d-flex justify-content-center align-items-center p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/e-commerce/crop-top.png" alt="Product Image"
                                                        class="img-fluid">
                                                </div>
                                                <div>
                                                    <h6 class="mb-2">Wireless Headphones</h6>
                                                    <div class="d-flex align-items-center">
                                                        <p class="text-muted mb-0 fs-13 fw-medium pe-3 me-3 border-end">
                                                            <span class="text-body me-1">Size:</span>Large</p>
                                                        <p class="text-muted mb-0 fs-13 fw-medium"><span
                                                                class="text-body me-1">Color:</span>Blue</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)" class="fw-semibold">FBK1218153459</a></td>
                                        <td>1</td>
                                        <td>$99.99</td>
                                        <td>$99.99</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex gap-3 align-items-center">
                                                <div
                                                    class="h-56px w-56px d-flex justify-content-center align-items-center p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/e-commerce/watch.png" alt="Product Image"
                                                        class="img-fluid">
                                                </div>
                                                <div>
                                                    <h6 class="mb-2">Smartphone</h6>
                                                    <div class="d-flex align-items-center">
                                                        <p class="text-muted mb-0 fs-13 fw-medium pe-3 me-3 border-end">
                                                            <span class="text-body me-1">Size:</span>Medium</p>
                                                        <p class="text-muted mb-0 fs-13 fw-medium"><span
                                                                class="text-body me-1">Color:</span>Black</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)" class="fw-semibold">FBK1218153745</a></td>
                                        <td>1</td>
                                        <td>$149.99</td>
                                        <td>$149.99</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex gap-3 align-items-center">
                                                <div
                                                    class="h-56px w-56px d-flex justify-content-center align-items-center p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/e-commerce/shoes.png" alt="Product Image"
                                                        class="img-fluid">
                                                </div>
                                                <div>
                                                    <h6 class="mb-2">Shooes</h6>
                                                    <div class="d-flex align-items-center">
                                                        <p class="text-muted mb-0 fs-13 fw-medium pe-3 me-3 border-end">
                                                            <span class="text-body me-1">Size:</span>Large</p>
                                                        <p class="text-muted mb-0 fs-13 fw-medium"><span
                                                                class="text-body me-1">Color:</span>White</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)" class="fw-semibold">FBK1218153563</a></td>
                                        <td>2</td>
                                        <td>$15.00</td>
                                        <td>$30.00</td>
                                    </tr>
                                    <tr class="total">
                                        <td colspan="3"></td>
                                        <td class="fw-semibold">Total Items:</td>
                                        <td>3</td>
                                    </tr>
                                    <tr class="total">
                                        <td colspan="3"></td>
                                        <td class="fw-semibold">Sub Total:</td>
                                        <td>$279.98</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="fw-semibold">Shipping:</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="fw-semibold">Tax (8%):</td>
                                        <td>$22.40</td>
                                    </tr>
                                    <tr class="total">
                                        <td colspan="3"></td>
                                        <td class="fw-semibold">Total Amount:</td>
                                        <td>$302.38</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card card-h-100">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center">
                            <h5 class="card-title flex-grow-1 mb-0">Order tracking</h5>
                            <div
                                class="avatar-sm bg-primary-subtle text-primary d-flex justify-content-center align-items-center rounded-2">
                                <i class="ri-truck-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="timeline2 profile-timeline">
                            <ul>
                                <li class="card border-0 box">
                                    <span
                                        class="h-28px w-28px d-flex justify-content-center align-items-center text-white"><i
                                            class="ri-shopping-bag-line"></i></span>
                                    <div class="title">15 Dec 2024 <span class="badge bg-primary float-end">Order
                                            Placed</span></div>
                                    <div class="sub-title">Order successfully placed</div>
                                    <div class="info text-muted">Order placed by Austin Ninus</div>
                                </li>
                                <li class="card border-0 box">
                                    <span
                                        class="h-28px w-28px d-flex justify-content-center align-items-center text-white"><i
                                            class="ri-inbox-unarchive-line"></i></span>
                                    <div class="title">15 Dec 2024 <span
                                            class="badge bg-secondary float-end">Packed</span></div>
                                    <div class="sub-title">Order packed</div>
                                    <div class="info text-muted">Collected by Suguna Enterprises</div>
                                </li>
                                <li class="card border-0 box">
                                    <span
                                        class="h-28px w-28px d-flex justify-content-center align-items-center text-white"><i
                                            class="ri-truck-line"></i></span>
                                    <div class="title">16 Dec 2024 <span
                                            class="badge bg-warning float-end">Shipping</span></div>
                                    <div class="sub-title">On the way</div>
                                    <div class="info text-muted">Order picked and en route</div>
                                </li>
                                <li class="card border-0 box">
                                    <span
                                        class="h-28px w-28px d-flex justify-content-center align-items-center text-white"><i
                                            class="ri-e-bike-2-line"></i></span>
                                    <div class="title">17 Dec 2024 <span class="badge bg-info float-end">Delivery</span>
                                    </div>
                                    <div class="sub-title">Delivery in progress</div>
                                    <div class="info text-muted">Your package is out for delivery</div>
                                </li>
                                <li class="card border-0 box">
                                    <span
                                        class="h-28px w-28px d-flex justify-content-center align-items-center text-white"><i
                                            class="ri-hand-coin-line"></i></span>
                                    <div class="title">17 Dec 2024 <span
                                            class="badge bg-success float-end">Delivered</span></div>
                                    <div class="sub-title">Order completed</div>
                                    <div class="info text-muted">Successfully delivered</div>
                                </li>
                            </ul>
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
