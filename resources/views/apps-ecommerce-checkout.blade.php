@extends('partials.layouts.master')

@section('title', 'Checkout | FabKin Admin & Dashboards Template')
@section('title-sub', 'Eccomerce')
@section('pagetitle', 'Checkout')
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <ul class="nav nav-pills nav-justified bg-light-subtle" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link d-flex align-items-center gap-2" id="pills-bill-info-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-bill-info" type="button"
                                            role="tab" aria-controls="pills-bill-info" aria-selected="true"
                                            data-position="0">
                                            <i
                                                class="ri-user-2-line fs-16 avatar-md d-flex justify-content-center align-items-center bg-primary-subtle rounded-circle flex-shrink-0"></i>
                                            Personal Info
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link d-flex align-items-center gap-2 active"
                                            id="pills-bill-address-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-bill-address" type="button" role="tab"
                                            aria-controls="pills-bill-address" aria-selected="false" data-position="1"
                                            tabindex="-1">
                                            <i
                                                class="ri-truck-line fs-16 avatar-md d-flex justify-content-center align-items-center bg-primary-subtle rounded-circle flex-shrink-0"></i>
                                            Shipping Info
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link d-flex align-items-center gap-2" id="pills-payment-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-payment" type="button"
                                            role="tab" aria-controls="pills-payment" aria-selected="false"
                                            data-position="2" tabindex="-1">
                                            <i
                                                class="ri-bank-card-line fs-16 avatar-md d-flex justify-content-center align-items-center bg-primary-subtle rounded-circle flex-shrink-0"></i>
                                            Payment Info
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link d-flex align-items-center gap-2" id="pills-finish-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-finish" type="button"
                                            role="tab" aria-controls="pills-finish" aria-selected="false"
                                            data-position="3" tabindex="-1">
                                            <i
                                                class="ri-checkbox-circle-line fs-16 avatar-md d-flex justify-content-center align-items-center bg-primary-subtle rounded-circle flex-shrink-0"></i>
                                            Finish
                                        </button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="pills-bill-info" role="tabpanel"
                                    aria-labelledby="pills-bill-info-tab">
                                    <p class="mb-1 fw-semibold text-end text-muted op-5 fs-20">01</p>
                                    <p class="fs-15 fw-semibold">Personal Details :</p>
                                    <div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="billinginfo-firstName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="billinginfo-firstName"
                                                        placeholder="Enter first name" value="First Name">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="billinginfo-lastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="billinginfo-lastName"
                                                        placeholder="Enter last name" value="Last Name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="billinginfo-email" class="form-label">Email <span
                                                            class="text-muted">(Optional)</span></label>
                                                    <input type="email" class="form-control" id="billinginfo-email"
                                                        placeholder="Enter email">
                                                    <p class="form-text">We'll never share your email with anyone else.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="billinginfo-phone" class="form-label">Phone</label>
                                                    <input type="text" class="form-control" id="billinginfo-phone"
                                                        placeholder="Enter phone no.">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Telephone</label>
                                                    <input type="tel" class="form-control" value="+91 (999)-999-999"
                                                        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="billinginfo-address" class="form-label">Address</label>
                                            <textarea class="form-control" id="billinginfo-address" placeholder="Enter address" rows="3"></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class="mb-3">
                                                    <label for="zip" class="form-label">Zip Code</label>
                                                    <input type="text" class="form-control" id="zip"
                                                        placeholder="Enter zip code">
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <label class="form-label" for="city-new">City</label>
                                                <input placeholder="City" type="text" id="city-new"
                                                    class="form-control">
                                            </div>
                                            <div class="col-xl-3">
                                                <label class="form-label" for="state-new">State</label>
                                                <input placeholder="State" type="text" id="state-new"
                                                    class="form-control">
                                            </div>
                                            <div class="col-xl-3">
                                                <label class="form-label" for="country-new">Country</label>
                                                <input placeholder="Country" type="text" id="country-new"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start gap-3 mt-3">
                                            <button type="button" class="btn btn-primary ms-auto"
                                                data-nexttab="pills-bill-address-tab">
                                                <i class="ri-truck-line me-2"></i>
                                                Proceed to Shipping
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane fade active show" id="pills-bill-address" role="tabpanel"
                                    aria-labelledby="pills-bill-address-tab">
                                    <p class="mb-1 fw-semibold text-end text-muted op-5 fs-20">02</p>
                                    <p class="fs-15 fw-semibold">Your Address :</p>
                                    <div class="mt-4">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-14 mb-0">Saved Address</h5>
                                            </div>
                                        </div>
                                        <div class="row gy-3">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="card address-content">
                                                    <div class="card-body">
                                                        <div>
                                                            <label class="check-box">
                                                                <input id="shippingAddress01" name="shippingAddress"
                                                                    type="radio" class="form-check-input" checked>
                                                                <label class="form-check-label" for="shippingAddress01">
                                                                    <span
                                                                        class="mb-4 fw-semibold d-block text-uppercase">Home
                                                                        Address</span>
                                                                </label>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <p class="text-muted">214 Rantoul St, Beverly, Massachusetts,
                                                                01915 donny@tolly.net</p>
                                                            <p>+1 (978) 927-2880</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="card address-content">
                                                    <div class="card-body">
                                                        <div>
                                                            <input id="shippingAddress02" name="shippingAddress"
                                                                type="radio" class="form-check-input">
                                                            <label class="form-check-label" for="shippingAddress02">
                                                                <span
                                                                    class="mb-4 fw-semibold d-block text-uppercase">Office
                                                                    Address</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <p class="text-muted">214 Rantoul St, Beverly, Massachusetts,
                                                                01915 donny@tolly.net</p>
                                                            <p>+1 (978) 927-2880</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="card card-h-100 address-content">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-center">
                                                        <a role="button" class="link-primary text-center"><i
                                                                class="ri-add-circle-line fs-4"></i>
                                                            <p> Add A New Address</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-light btn-label previestab"
                                            data-previous="pills-bill-info-tab">
                                            <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to
                                            Personal Info
                                        </button>
                                        <button type="button" class="btn btn-primary ms-auto"
                                            data-nexttab="pills-bill-address-tab">
                                            <i class="ri-bank-card-line me-2"></i> Continue to Payment
                                        </button>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                    aria-labelledby="pills-payment-tab">
                                    <p class="mb-1 fw-semibold text-end text-muted op-5 fs-20">03</p>
                                    <p class="fs-15 fw-semibold">Payment Details :</p>
                                    <div class="d-flex align-items-center gap-6">
                                        <div class="border rounded w-100 p-4">
                                            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show"
                                                aria-expanded="false" aria-controls="paymentmethodCollapse">
                                                <div class="form-check card-radio">
                                                    <input id="paymentMethod1" name="paymentMethod" type="radio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="paymentMethod1">
                                                        <span class="fs-16 text-muted me-2"><i
                                                                class="ri-paypal-fill align-bottom"></i></span>
                                                        <span class="fs-14 text-wrap">Paypal</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded w-100 p-4">
                                            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse"
                                                aria-expanded="true" aria-controls="paymentmethodCollapse">
                                                <div class="form-check card-radio">
                                                    <input id="paymentMethod2" name="paymentMethod" type="radio"
                                                        class="form-check-input" checked>
                                                    <label class="form-check-label" for="paymentMethod2">
                                                        <span class="fs-16 text-muted me-2"><i
                                                                class="ri-bank-card-fill align-bottom"></i></span>
                                                        <span class="fs-14 text-wrap">Credit / Debit Card</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border rounded w-100 p-4">
                                            <div data-bs-toggle="collapse" data-bs-target="#paymentmethodCollapse.show"
                                                aria-expanded="false" aria-controls="paymentmethodCollapse">
                                                <div class="form-check card-radio">
                                                    <input id="paymentMethod3" name="paymentMethod" type="radio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="paymentMethod3">
                                                        <span class="fs-16 text-muted me-2"><i
                                                                class="ri-money-dollar-box-fill align-bottom"></i></span>
                                                        <span class="fs-14 text-wrap">Cash on Delivery</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse show" id="paymentmethodCollapse">
                                        <div class="card p-4 border shadow-none mb-0 mt-4">
                                            <div class="row gy-3">
                                                <div class="col-md-12">
                                                    <label for="cc-name" class="form-label">Cardholder Name</label>
                                                    <input type="text" class="form-control" id="cc-name"
                                                        placeholder="Enter name">
                                                    <small class="text-muted">Full name as displayed on card</small>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="cc-number" class="form-label">Card number</label>
                                                    <input type="text" class="form-control" id="cc-number"
                                                        placeholder="xxxx xxxx xxxx xxxx">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="cc-expiration" class="form-label">Expiration Date</label>
                                                    <input type="text" class="form-control" id="cc-expiration"
                                                        placeholder="MM/YY">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="cc-cvv" class="form-label">CVV code</label>
                                                    <input type="text" class="form-control" id="cc-cvv"
                                                        placeholder="xxx">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-light btn-label previestab"
                                            data-previous="pills-bill-address-tab"><i
                                                class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to
                                            Shipping</button>
                                        <button type="button" class="btn btn-primary btn-label right ms-auto nexttab"
                                            data-nexttab="pills-finish-tab"><i
                                                class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Complete
                                            Order</button>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane fade" id="pills-finish" role="tabpanel"
                                    aria-labelledby="pills-finish-tab">
                                    <div class="text-center mx-auto w-384px p-5 rounded shadow-lg mt-6">
                                        <div class="mb-4">
                                            <img src="assets/images/e-commerce/successfull.png" width="150"
                                                alt="Payment Successful">
                                        </div>
                                        <h4 class="fw-semibold text-success">Payment Successful!</h4>
                                        <p class="text-muted">Thank you for your purchase. Your order has been placed
                                            successfully.</p>

                                        <h6 class="fw-semibold mt-3">Order ID:
                                            <a href="apps-ecommerce-order-details"
                                                class="text-decoration-underline text-primary">FG4564</a>
                                        </h6>
                                    </div>

                                </div>
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-borderless border rounded">
                                <thead class="table-light text-muted">
                                    <tr>
                                        <th style="width: 90px;" scope="col">Product</th>
                                        <th scope="col">Product Info</th>
                                        <th scope="col" class="text-end">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="avatar-lg bg-light rounded p-1">
                                                <img src="assets/images/product/img-08.png" alt="Product Image"
                                                    class="img-fluid d-block">
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-14"><a href="javascript:void(0)" class="text-body">Purse
                                                    Women's (Red Womens Purcse)</a></h5>
                                            <p class="text-muted mb-0">$489.78</p>
                                        </td>
                                        <td class="text-end">$489.78</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-lg bg-light rounded p-1">
                                                <img src="assets/images/product/img-07.png" alt="Product Image"
                                                    class="img-fluid d-block">
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-14"><a href="javascript:void(0)" class="text-body">Girls Hill
                                                    (5 inches)</a></h5>
                                            <p class="text-muted mb-0">$568.49</p>
                                        </td>
                                        <td class="text-end">$568.49</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-lg bg-light rounded p-1">
                                                <img src="assets/images/product/img-01.png" alt="Product Image"
                                                    class="img-fluid d-block">
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="fs-14"><a href="javascript:void(0)" class="text-body">Crop Top
                                                    (Light Blue)</a></h5>
                                            <p class="text-muted mb-0">$119.99 x 2</p>
                                        </td>
                                        <td class="text-end">$ 239.98</td>
                                    </tr>
                                    <tr class="border-top border-bottom">
                                        <td colspan="2">
                                            <span class="fs-14 text-success">#UKDP5ER</span>
                                        </td>
                                        <td class="text-end text-success">
                                            <i class="ri-checkbox-circle-line fs-18"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span class="fs-14">Sub Total</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fs-14 fw-semibold"> 1,178.26 </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span class="fs-14">Delivery
                                                <span class="fs-12 text-primary ms-1">(3 Items)</span>
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fs-14 fw-semibold"> 0 </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span class="fs-14">Pickup Point
                                                <span class="fs-12 text-primary ms-1">(1 Item)</span>
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <span class="fs-14 text-danger fw-semibold"> Free </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span class="fs-14">Over All Discount</span>
                                        </td>
                                        <td class="text-end ">
                                            <span class="fs-14 fw-semibold">- 10%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span class="fs-14">Shipping Charges</span>
                                        </td>
                                        <td class="text-end fs-14">
                                            <span class="fs-14 fw-semibold">0 (Free)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <span class="fs-14">Tax</span>
                                        </td>
                                        <td class="text-end fs-14 fw-semibold"> +25% </td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <td colspan="2">
                                            <span class="fw-semibold fs-14">Total</span>
                                        </td>
                                        <td class="text-end ">
                                            <span class="fw-semibold fs-14">$1,296.08</span>
                                        </td>
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

    <script src="assets/js/app/ecommerce-checkout.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
