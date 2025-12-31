@extends('partials.layouts.master')

@section('title', 'Cart | FabKin Admin & Dashboards Template')
@section('title-sub', 'Eccomerce')
@section('pagetitle', 'Cart')
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-sm-auto">
                                <div class="bg-light rounded p-1 text-center">
                                    <img src="assets/images/product/img-01.png" alt="Product Image" width="140"
                                        class="img-fluid">
                                </div>
                                <ul class="list-inline mt-4 mb-0 text-center">
                                    <li class="list-inline-item"><a class="text-body fw-bold" href="#!">Save for
                                            Latter</a></li>
                                    <li class="list-inline-item"><a class="text-body fw-bold" href="#!">Remove</a></li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <h5 class="fs-14 text-truncate"><a href="javascript:void(0)" class="text-body">Crop Top
                                        (Light Blue)</a></h5>
                                <ul class="list-inline text-muted mb-2">
                                    <li class="list-inline-item">Size : <span class="fw-medium">M</span></li>
                                    <li class="list-inline-item mb-2">Color : <span class="fw-medium">Blue</span></li>
                                    <li class="mb-2"><span class="badge bg-warning-subtle text-warning">In Stock</span>
                                    </li>
                                    <li class="mb-2"><span>Eligible for FREE Shipping</span></li>
                                    <li class="list-inline-item">
                                        <p class="text-muted mb-1">Item Price:</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="fs-14">$<span>119.99</span></h5>
                                    </li>
                                </ul>
                                <div class="qty-input qty-input-rounded mb-3">
                                    <button type="button" data-action="minus">
                                        <i class="ri-subtract-line"></i>
                                    </button>
                                    <input id="rounded-default-touchspin" type="number" value="2" min="0"
                                        max="100">
                                    <button type="button" data-action="plus">
                                        <i class="ri-add-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-auto mt-auto">
                                <div class="text-lg-end">
                                    <p class="text-muted mb-1">Item Price:</p>
                                    <h5 class="fs-14 mb-0">$<span>119.99</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-sm-auto">
                                <div class="bg-light rounded p-1 text-center">
                                    <img src="assets/images/product/img-07.png" alt="Product Image" width="140"
                                        class="img-fluid">
                                </div>
                                <ul class="list-inline mt-4 mb-0 text-center">
                                    <li class="list-inline-item"><a class="text-body fw-bold" href="#!">Save for
                                            Latter</a></li>
                                    <li class="list-inline-item"><a class="text-body fw-bold" href="#!">Remove</a></li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <h5 class="fs-14 text-truncate"><a href="javascript:void(0)" class="text-body">Girls Hill (5
                                        inches)</a></h5>
                                <ul class="list-inline text-muted mb-2">
                                    <li class="list-inline-item">Size : <span class="fw-medium">M</span></li>
                                    <li class="list-inline-item mb-2">Color : <span class="fw-medium">Yellow</span></li>
                                    <li class="mb-2"><span class="badge bg-warning-subtle text-warning">In Stock</span>
                                    </li>
                                    <li class="mb-2"><span>Eligible for FREE Shipping</span></li>
                                    <li class="list-inline-item">
                                        <p class="text-muted mb-1">Item Price:</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="fs-14">$<span>568.49</span></h5>
                                    </li>
                                </ul>
                                <div class="qty-input qty-input-rounded mb-3">
                                    <button type="button" data-action="minus">
                                        <i class="ri-subtract-line"></i>
                                    </button>
                                    <input id="rounded-default-touchspin" type="number" value="2" min="0"
                                        max="100">
                                    <button type="button" data-action="plus">
                                        <i class="ri-add-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-auto mt-auto">
                                <div class="text-lg-end">
                                    <p class="text-muted mb-1">Item Price:</p>
                                    <h5 class="fs-14 mb-0">$<span>568.49</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row gy-3">
                            <div class="col-sm-auto">
                                <div class="bg-light rounded p-1 text-center">
                                    <img src="assets/images/product/img-08.png" alt="Product Image" width="140"
                                        class="img-fluid">
                                </div>
                                <ul class="list-inline mt-4 mb-0 text-center">
                                    <li class="list-inline-item"><a class="text-body fw-bold" href="#!">Save for
                                            Latter</a></li>
                                    <li class="list-inline-item"><a class="text-body fw-bold" href="#!">Remove</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <h5 class="fs-14 text-truncate"><a href="javascript:void(0)" class="text-body">Purse
                                        Women's (Red Womens Purcse)</a></h5>
                                <ul class="list-inline text-muted mb-2">
                                    <li class="list-inline-item">Size : <span class="fw-medium">L</span></li>
                                    <li class="list-inline-item mb-2">Color : <span class="fw-medium">Red</span></li>
                                    <li class="mb-2"><span class="badge bg-danger-subtle text-danger">Out Of
                                            Stock</span></li>
                                    <li class="mb-2"><span>Eligible for FREE Shipping</span></li>
                                    <li class="list-inline-item">
                                        <p class="text-muted mb-1">Item Price:</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="fs-14">$<span>489.78</span></h5>
                                    </li>
                                </ul>
                                <div class="qty-input qty-input-rounded mb-3">
                                    <button type="button" data-action="minus">
                                        <i class="ri-subtract-line"></i>
                                    </button>
                                    <input id="rounded-default-touchspin" type="number" value="2" min="0"
                                        max="100">
                                    <button type="button" data-action="plus">
                                        <i class="ri-add-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-auto mt-auto">
                                <div class="text-lg-end">
                                    <p class="text-muted mb-1">Item Price:</p>
                                    <h5 class="fs-14 mb-0">$<span>489.78</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Summery</div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-secondary text-center" role="alert">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold fs-14">
                                    <i class="ri-coupon-line fs-14 me-1"></i>#UKDP5ER
                                </span>
                                <a href="javascript:void(0)" class="text-secondary fs-14 fw-semibold">Apply</a>
                            </div>
                        </div>
                        <h6 class="font-semibold mb-3">Delivery:</h6>
                        <ul class="nav nav-tabs cart-navs gap-3 border-bottom-0">
                            <li class="nav-item me-0">
                                <a class="nav-link px-2 text-break border" data-bs-toggle="tab" role="tab"
                                    aria-current="page" href="#employee-vertical" aria-selected="false" tabindex="-1">
                                    Free Delivery
                                    <span class="float-end text-primary fs-16">
                                        <i class="ri-check-double-line active-check-icon d-none"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 text-break border active" data-bs-toggle="tab" role="tab"
                                    aria-current="page" href="#customers-vertical" aria-selected="true">
                                    Express Delivery
                                    <span class="float-end text-primary fs-16">
                                        <i class="ri-check-double-line active-check-icon d-none"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane text-muted p-0 border-0" id="employee-vertical" role="tabpanel">
                                <p class="my-2">Delivered Within 7 Days</p>
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-borderless border rounded mb-3">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Sub Total</h5>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-14 fw-semibold"> 1,178.26 </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Delivery
                                                        <span class="fs-12 text-primary ms-1">(3 Items)</span>
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-14 fw-semibold"> 0 </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Pickup Point
                                                        <span class="fs-12 text-primary ms-1">(1 Item)</span>
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-14 text-danger fw-semibold"> Free </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Over All Discount</span>
                                                </td>
                                                <td class="text-end ">
                                                    <span class="fs-14 fw-semibold">- 10%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Shipping Charges</span>
                                                </td>
                                                <td class="text-end fs-14">
                                                    <span class="fs-14 fw-semibold">0 (Free)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Tax</span>
                                                </td>
                                                <td class="text-end fs-14 fw-semibold"> +25% </td>
                                            </tr>
                                            <tr class="border-top border-bottom">
                                                <td>
                                                    <span class="fs-14 text-success">#UKDP5ER</span>
                                                </td>
                                                <td class="text-end text-success">
                                                    <i class="ri-checkbox-circle-line fs-18"></i>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td>
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
                            <div class="tab-pane text-muted p-0 border-0 active show" id="customers-vertical"
                                role="tabpanel">
                                <p class="my-2"> Delivered by Tomorrow</p>
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-borderless border rounded mb-3">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="mb-0">Sub Total</h5>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-14 fw-semibold"> 1,178.26 </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Delivery
                                                        <span class="fs-12 text-primary ms-1">(3 Items) </span>
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-14 fw-semibold"> +45 </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Pickup Point
                                                        <span class="fs-12 text-primary ms-1">(1 Item)</span>
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="fs-14 text-danger fw-semibold"> Free </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Over All Discount</span>
                                                </td>
                                                <td class="text-end ">
                                                    <span class="fs-14 fw-semibold">- 10%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Shipping Charges</span>
                                                </td>
                                                <td class="text-end fs-14">
                                                    <span class="fs-14 fw-semibold">0 (Free)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fs-14">Tex</span>
                                                </td>
                                                <td class="text-end fs-14 fw-semibold"> +25% </td>
                                            </tr>
                                            <tr class="border-top border-bottom">
                                                <td>
                                                    <span class="fs-14 text-success">#UKDP5ER</span>
                                                </td>
                                                <td class="text-end text-success">
                                                    <i class="ri-checkbox-circle-line fs-18"></i>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td>
                                                    <span class="fw-semibold fs-14">Total</span>
                                                </td>
                                                <td class="text-end ">
                                                    <span class="fw-semibold fs-14">$1,376.16</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-0 flex-wrap">
                            <a href="apps-ecommerce-checkout" class="btn btn-secondary btn-w-lg m-1 flex-fill">Check Out
                                <i class="ti ti-arrow-right me-2"></i>
                            </a>
                            <a href="apps-ecommerce-products" class="btn btn-primary flex-fill m-1">Continue Shopping
                                <i class="ti ti-arrow-right me-2"></i>
                            </a>
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
