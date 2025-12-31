@extends('partials.layouts.master')

@section('title', 'Product Details | FabKin Admin & Dashboards Template')
@section('title-sub', 'Product Details')
@section('pagetitle', 'Calendar')

@section('css')
    <link rel="stylesheet" href="assets/libs/@yaireo/tagify/tagify.css">
    <link rel="stylesheet" href="assets/libs/dual-listbox/dual-listbox.css">

    <!-- Swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">
@endsection

@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xxl-1">
                <div class="swiper productSmall">
                    <div class="swiper-wrapper">
                        <div class="card mb-5 swiper-slide">
                            <img src="assets/images/product/img-25.png"
                                class="img-fluid d-flex mx-auto h-100 cursor-pointer" />
                        </div>
                        <div class="card mb-5 swiper-slide">
                            <img src="assets/images/product/img-26.png"
                                class="img-fluid d-flex mx-auto h-100 cursor-pointer" />
                        </div>
                        <div class="card mb-5 swiper-slide">
                            <img src="assets/images/product/img-27.png"
                                class="img-fluid d-flex mx-auto h-100 cursor-pointer" />
                        </div>
                        <div class="card mb-5 swiper-slide">
                            <img src="assets/images/product/img-28.png"
                                class="img-fluid d-flex mx-auto h-100 cursor-pointer" />
                        </div>
                        <div class="card swiper-slide">
                            <img src="assets/images/product/img-29.png"
                                class="img-fluid d-flex mx-auto h-100 cursor-pointer" />
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="swiper productMain">
                            <div class="swiper-wrapper product-container">
                                <div class="cursor"></div>
                                <div class="swiper-slide product">
                                    <div>
                                        <img class="drift-demo-trigger img-fluid w-100"
                                            src="assets/images/product/img-25.png">
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <div>
                                        <img class="drift-demo-trigger img-fluid w-100"
                                            src="assets/images/product/img-26.png">
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <div>
                                        <img class="drift-demo-trigger img-fluid w-100"
                                            src="assets/images/product/img-27.png">
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <div>
                                        <img class="drift-demo-trigger img-fluid w-100"
                                            src="assets/images/product/img-28.png">
                                    </div>
                                </div>
                                <div class="swiper-slide product">
                                    <div>
                                        <img class="drift-demo-trigger img-fluid w-100"
                                            src="assets/images/product/img-29.png">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="card-footer text-center d-flex gap-2 flex-wrap justify-content-sm-center">
                        <a class="btn btn-primary btn-w-lg me-2" href="javascript:voide(0)" data-discover="true">
                            Buy Now
                        </a>
                        <a class="btn btn-success" href="apps-ecommerce-cart" data-discover="true">
                            <i class="ri-shopping-cart-line fs-16 align-middle"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xxl-7">
                <div class="card">
                    <div class="card-body">
                        <h3> Schiffli full Slive unique pattern and designer pcs' newest product and design winter cloth and
                            good fabric quality </h3>
                        <p class="fs-16 mb-3">
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill text-warning"></i>
                            <i class="ri-star-fill-half text-warning"></i>
                            <span class="fw-medium ms-1 fs-13">4.6
                                <a class="text-muted ms-2" href="javascript:voide(0)">(4.7k Reviews)</a>
                            </span>
                        </p>
                        <div class="d-flex gap-3 align-items-center mb-3">
                            <p class="mb-1">
                                <span class="h2 fw-semibold">$899</span>
                            </p>
                            <div class="mb-0 text-muted fs-12">
                                <p class="mb-0"> <s> $999</s></p>
                                <p class="mb-0 text-info fw-medium fs-15">Save Up to 26% OFF!</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="fs-15 fw-semibold mb-1">Description :</p>
                            <p class="text-muted mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deserunt voluptates explicabo laudantium error nesciunt illo non impedit quas dolor! Officia
                                consequuntur magni voluptatum ex in molestias tempora id, corrupti pariatur.</p>
                        </div>
                        <div class="d-flex gap-4 align-items-center mb-3 justify-content-between flex-wrap">
                            <div class="d-flex gap-3 align-items-center">
                                <p class="fs-15 fw-semibold mb-1">Size :</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        data-bs-original-title="Out of Stock">
                                        <input type="radio" class="btn-check" name="productsize-radio"
                                            id="productsize-radio1" disabled>
                                        <label
                                            class="btn btn-primary avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center"
                                            for="productsize-radio1">S</label>
                                    </div>

                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        data-bs-original-title="04 Items Available">
                                        <input type="radio" class="btn-check" name="productsize-radio"
                                            id="productsize-radio2">
                                        <label
                                            class="btn btn-primary avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center"
                                            for="productsize-radio2">M</label>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        data-bs-original-title="06 Items Available">
                                        <input type="radio" class="btn-check" name="productsize-radio"
                                            id="productsize-radio3">
                                        <label
                                            class="btn btn-primary avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center"
                                            for="productsize-radio3">L</label>
                                    </div>

                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        data-bs-original-title="Out of Stock">
                                        <input type="radio" class="btn-check" name="productsize-radio"
                                            id="productsize-radio4" disabled>
                                        <label
                                            class="btn btn-primary avatar-md rounded-circle p-0 d-flex justify-content-center align-items-center"
                                            for="productsize-radio4">XL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <p class="fs-15 fw-semibold mb-1">Color:</p>
                                <button
                                    class="btn bg-primary-subtle text-primary color-btn mb-1 d-flex align-items-center justify-content-center"><i
                                        class="ri-circle-fill fs-14"></i></button>
                                <button class="btn bg-secondary-subtle text-secondary color-btn mb-1"><i
                                        class="ri-circle-fill fs-14"></i></button>
                                <button class="btn bg-danger-subtle text-danger color-btn mb-1"><i
                                        class="ri-circle-fill fs-14"></i></button>
                                <button class="btn bg-warning-subtle text-warning color-btn mb-1"><i
                                        class="ri-circle-fill fs-14"></i></button>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <a class="mb-0 text-primary3 fw-medium text-decoration-underline"
                                    href="javascript:voide(0)">
                                    <i class="ri-coupon-2-line me-1 align-middle d-inline-block"></i>Get a Coupon
                                </a>
                            </div>
                        </div>
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
                        <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                            <p class="mb-1 text-success py-1 px-2 bg-success-subtle rounded-1 fs-12">
                                <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Instock
                            </p>
                            <p class="mb-1 text-success py-1 px-2 bg-success-subtle rounded-1 fs-12">
                                <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Apply Coupon Code
                            </p>
                            <p class="mb-1 text-success py-1 px-2 bg-success-subtle rounded-1 fs-12">
                                <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Offers Available
                            </p>
                            <p class="mb-1 text-success py-1 px-2 bg-success-subtle rounded-1 fs-12">
                                <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Free Shipping
                            </p>
                            <p class="mb-1 text-success py-1 px-2 bg-success-subtle rounded-1 fs-12">
                                <i class="ri-checkbox-circle-fill me-1 align-middle d-inline-block"></i> Easy Return
                            </p>
                            <p class="mb-1 text-danger py-1 px-2 bg-danger-subtle rounded-1 fs-12">
                                <i class="ri-close-circle-fill me-1 align-middle d-inline-block"></i> <del>Promo Code</del>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mt-3">
                                    <h5 class="fs-14">Features :</h5>
                                    <ul class="list-unstyled">
                                        <li class="py-1"><i
                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> Crop Top
                                        </li>
                                        <li class="py-1"><i
                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> Full Sleeve
                                        </li>
                                        <li class="py-1"><i
                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> Schiffli
                                            Work</li>
                                        <li class="py-1"><i
                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> All Sizes
                                            available</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mt-3">
                                    <h5 class="fs-14">Services :</h5>
                                    <ul class="list-unstyled product-desc-list">
                                        <li class="py-1">7 Days Return</li>
                                        <li class="py-1">7 Days Replacement</li>
                                        <li class="py-1">Cash on Delivery available</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->

        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header border-0 align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-action-title mb-0">Product Description :</h5>
                        </div>
                    </div>
                    <nav>
                        <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="nav-specify-tab" data-bs-toggle="tab" href="#nav-specify"
                                    role="tab" aria-controls="nav-specify" aria-selected="true">Specification</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="nav-details-tab" data-bs-toggle="tab" href="#nav-details"
                                    role="tab" aria-controls="nav-details" aria-selected="false"
                                    tabindex="-1">Details</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tab-content border border-0 p-4">
                        <div class="tab-pane fade active show" id="nav-specify" role="tabpanel"
                            aria-labelledby="nav-specify-tab">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="width: 200px;">Category</th>
                                            <td>T-Shirt</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Material</th>
                                            <td>Schiffli</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Brand</th>
                                            <td>Uniqlo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>Gray</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Weight</th>
                                            <td>250 Gram</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
                            <h5 class="fs-16 mb-3">Uniqlo Women's Oversized Schiffli Shirt</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                                nam beatae vitae dolore ex animi, deleniti repudiandae ipsam, debitis commodi necessitatibus
                                et voluptates doloribus explicabo, quam corporis rem! Distinctio, perspiciatis!</p>
                            <div>
                                <p class="mb-2"><i
                                        class="ri-checkbox-blank-circle-fill fs-10 me-1 text-muted align-middle"></i> Hand
                                    Wash</p>
                                <p class="mb-2"><i
                                        class="ri-checkbox-blank-circle-fill fs-10 me-1 text-muted align-middle"></i> Fit
                                    Type: Oversized</p>
                                <p class="mb-2"><i
                                        class="ri-checkbox-blank-circle-fill fs-10 me-1 text-muted align-middle"></i> 100%
                                    Schiffli</p>
                                <p class="mb-0"><i
                                        class="ri-checkbox-blank-circle-fill fs-10 me-1 text-muted align-middle"></i> Long
                                    sleeve</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 border-end">
                                <h6 class="mb-3">User Reviews</h6>
                                <p class="bg-success badge mb-3">Very Good</p>
                                <h3 class="fw-semibold">4.76
                                    <sub class="fs-12 text-muted ms-2">Out of 5</sub>
                                </h3>
                                <p class="mb-0 text-muted fs-12">
                                    <i class="ri-star-line me-1 fs-13"></i>Based on (23,435) ratings
                                </p>
                            </div>
                            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12 px-3">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="fs-12 me-2 fw-semibold">5
                                        <i class="ri-star-fill fs-10"></i>
                                    </div>
                                    <div class="progress progress-xs flex-fill">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted ms-2 fs-12">Design</div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="fs-12 me-2 fw-semibold">4
                                        <i class="ri-star-fill fs-10"></i>
                                    </div>
                                    <div class="progress progress-xs flex-fill">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 22%"
                                            aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted ms-2 fs-12">Material</div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="fs-12 me-2 fw-semibold">3
                                        <i class="ri-star-fill fs-10"></i>
                                    </div>
                                    <div class="progress progress-xs flex-fill">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 8%"
                                            aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted ms-2 fs-12">Confort</div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="fs-12 me-2 fw-semibold">2
                                        <i class="ri-star-fill fs-10"></i>
                                    </div>
                                    <div class="progress progress-xs flex-fill">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 9%"
                                            aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted ms-2 fs-12">Quality</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="fs-12 me-2 fw-semibold">1
                                        <i class="ri-star-fill fs-10"></i>
                                    </div>
                                    <div class="progress progress-xs flex-fill">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 6%"
                                            aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted ms-2 fs-12">Color</div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="swiper swiper-reviews">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide card border shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-sm-flex d-block align-items-center mb-3">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <span class="avatar avatar-sm me-2">
                                                            <img src="assets/images/avatar/avatar-1.jpg"
                                                                class="img-fluid rounded-circle" alt="Avatar Image">
                                                        </span>
                                                        <p class="mb-0 fs-14 lh-1 fw-semibold">Semret Yonatan
                                                            <span class="mb-0 fs-12 fw-normal ms-1">
                                                                <i
                                                                    class="ri-star-s-fill text-warning align-middle lh-1 fs-10 me-1 fw-normal align-middle"></i>
                                                                4.3
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                        <span class="badge undefined badge bg-success">Verified
                                                            Purchase</span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <p class="fw-semibold mb-1">Unique Design And comfortable!</p>
                                                    <p class="mb-0 fs-11">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Nisi cumque, laboriosam deserunt dolor quod totam?
                                                    </p>
                                                </div>
                                                <div class="product-images ps-0">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="products-review-images d-flex">
                                                                <a href="javascript:voide(0)" data-discover="true">
                                                                    <img src="assets/images/product/img-02.png"
                                                                        class="avatar-lg" alt="Product Image">
                                                                </a>
                                                                <a href="javascript:voide(0)" data-discover="true">
                                                                    <img src="assets/images/product/img-03.png"
                                                                        class="avatar-lg" alt="Product Image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                            <button class="btn-wave me-2 btn btn-light btn-sm">Report
                                                                abuse</button>
                                                            <button class="btn btn-sm me-1 bg-primary-subtle">
                                                                <i class="ri-thumb-up-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm bg-primary-subtle">
                                                                <i class="ri-thumb-down-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide card border shadow-none mb-0">
                                            <div class="card-body">
                                                <div class="d-sm-flex d-block align-items-center mb-3">
                                                    <div class="d-flex flex-fill align-items-center">
                                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="assets/images/avatar/avatar-2.jpg"
                                                                class="img-fluid rounded-circle" alt="Avatar Image">
                                                        </span>
                                                        <p class="mb-0 fs-14 lh-1 fw-semibold">Kibra Haile
                                                            <span class="mb-0 fs-12 fw-normal ms-1">
                                                                <i
                                                                    class="ri-star-s-fill text-warning align-middle lh-1 fs-10 me-1 fw-normal align-middle"></i>
                                                                4.3
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="ps-sm-0 mt-sm-0 mt-3 ps-sm-0 ps-2">
                                                        <span class="badge undefined badge bg-success">Verified
                                                            Purchase</span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <p class="fw-semibold mb-1">Sleek Design, Fast Delivery, Hassle-Free
                                                        Returns!</p>
                                                    <p class="mb-0 fs-11">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Nisi cumque, laboriosam deserunt dolor quod totam?
                                                    </p>
                                                </div>
                                                <div class="product-images ps-0">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="products-review-images d-flex">
                                                                <a href="javascript:voide(0)" data-discover="true">
                                                                    <img src="assets/images/product/img-02.png"
                                                                        class="avatar-lg" alt="Avatar Image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-xl-6 d-flex align-items-end justify-content-sm-end mt-sm-0 mt-2">
                                                            <button class="btn-wave me-2 btn btn-light btn-sm">Report
                                                                abuse</button>
                                                            <button class="btn btn-sm me-1 bg-primary-subtle">
                                                                <i class="ri-thumb-up-line"></i>
                                                            </button>
                                                            <button class="btn btn-sm me-1 bg-primary-subtle">
                                                                <i class="ri-thumb-down-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script src="assets/libs/@yaireo/tagify/tagify.js"></script>
    <script src="assets/libs/dual-listbox/dual-listbox.js"></script>

    <!-- Swiper JS -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/form/advanced-form.init.js"></script>

    <script src="assets/js/app/ecommerce-product-detail.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
