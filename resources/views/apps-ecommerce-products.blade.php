@extends('partials.layouts.master')

@section('title', 'Products | FabKin Admin & Dashboards Template')
@section('title-sub', 'Eccomerce')
@section('pagetitle', 'Products')
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h5 class="fs-16">Filters</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="javascript:void(0)" class="link link-primary text-muted">Clear All</a>
                            </div>
                        </div>
                        <div class="form-icon right">
                            <input type="text" class="form-control rounded-3 border form-control-icon"
                                placeholder="Search...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                    </div>

                    <div class="accordion filter-accordion">
                        <div class="card-body border-bottom">
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Products</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-1" type="checkbox" value="Items">
                                <label class="form-check-label" for="p-1"> All Items </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-2" type="checkbox" value="Fashion">
                                <label class="form-check-label" for="p-2"> Fashion </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-3" type="checkbox" value="Appliances">
                                <label class="form-check-label" for="p-3"> Appliances </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-4" type="checkbox" value="Watches">
                                <label class="form-check-label" for="p-4"> Watches </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-5" type="checkbox" value="Electronics">
                                <label class="form-check-label" for="p-5"> Electronics </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-6" type="checkbox" value="Furniture">
                                <label class="form-check-label" for="p-6"> Furniture </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-7" type="checkbox"
                                    value="Automotive Accessories">
                                <label class="form-check-label" for="p-7"> Automotive Accessories </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-8" type="checkbox" value="Grocery">
                                <label class="form-check-label" for="p-8"> Grocery </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input me-2" id="p-9" type="checkbox" value="Kids">
                                <label class="form-check-label" for="p-9"> Kids </label>
                            </div>
                            <a href="javascript:void(0)" class="text-decoration-underline text-primary">View All</a>
                        </div>

                        <div class="card-body border-bottom">
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>
                            <div class="mt-5 no-handle-slider no-handle-rounded" id="slider-round"></div>
                            <div class="d-flex align-items-center justify-content-between gap-1 flex-wrap mt-5">
                                <p class="m-0 fw-semibold">Min Val: <span class="fs-12 fw-medium text-muted"
                                        id="slider-margin-value-min"></span></p>
                                <p class="m-0 fw-semibold">Max Val: <span class="fs-12 fw-medium text-muted"
                                        id="slider-margin-value-max"></span></p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-Brands" aria-expanded="true"
                                    aria-controls="flush-Brands">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span> <span
                                        class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-Brands" class="accordion-collapse collapse show">
                                <div class="accordion-body text-body pt-0">
                                    <div class="form-icon right">
                                        <input type="text" class="form-control rounded-3 border form-control-icon"
                                            placeholder="Search...">
                                        <i class="ri-search-2-line search-icon"></i>
                                    </div>
                                    <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Addidass"
                                                id="productBrandRadio5" checked>
                                            <label class="form-check-label" for="productBrandRadio5">Addidass</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Guess"
                                                id="productBrandRadio4">
                                            <label class="form-check-label" for="productBrandRadio4">Guess</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Rollex"
                                                id="productBrandRadio3">
                                            <label class="form-check-label" for="productBrandRadio3">Rollex</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Kitten"
                                                id="productBrandRadio2">
                                            <label class="form-check-label" for="productBrandRadio2">Kitten</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Zara"
                                                id="productBrandRadio1" checked>
                                            <label class="form-check-label" for="productBrandRadio1">Zara</label>
                                        </div>

                                        <div>
                                            <button type="button"
                                                class="btn btn-link text-decoration-none text-uppercase fw-medium p-0">1,235
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent shadow-none collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-Discount" aria-expanded="true"
                                    aria-controls="flush-Discount">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span> <span
                                        class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>
                            <div id="flush-Discount" class="accordion-collapse collapse">
                                <div class="accordion-body text-body pt-1">
                                    <div class="d-flex flex-column gap-2 filter-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="50% or more"
                                                id="productdiscountRadio6">
                                            <label class="form-check-label" for="productdiscountRadio6">50% or
                                                more</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="40% or more"
                                                id="productdiscountRadio5">
                                            <label class="form-check-label" for="productdiscountRadio5">40% or
                                                more</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="30% or more"
                                                id="productdiscountRadio4">
                                            <label class="form-check-label" for="productdiscountRadio4">
                                                30% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="20% or more"
                                                id="productdiscountRadio3" checked>
                                            <label class="form-check-label" for="productdiscountRadio3">
                                                20% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="10% or more"
                                                id="productdiscountRadio2">
                                            <label class="form-check-label" for="productdiscountRadio2">
                                                10% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Less than 10%"
                                                id="productdiscountRadio1">
                                            <label class="form-check-label" for="productdiscountRadio1">
                                                Less than 10%
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-transparent shadow-none collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-Rating" aria-expanded="false"
                                    aria-controls="flush-Rating">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span> <span
                                        class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-Rating" class="accordion-collapse collapse">
                                <div class="accordion-body text-body">
                                    <div class="d-flex flex-column gap-2 filter-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4 & Above Star"
                                                id="productratingRadio4" checked>
                                            <label class="form-check-label" for="productratingRadio4">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 4 & Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3 & Above Star"
                                                id="productratingRadio3">
                                            <label class="form-check-label" for="productratingRadio3">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 3 & Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2 & Above Star"
                                                id="productratingRadio2">
                                            <label class="form-check-label" for="productratingRadio2">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 2 & Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1 Star"
                                                id="productratingRadio1">
                                            <label class="form-check-label" for="productratingRadio1">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 1
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <div
                                        class="badge bg-success d-inline-flex gap-1 lh-1 align-items-center text-fixed-white mb-1">
                                        <div class="badge-text">New</div>
                                    </div>
                                    <span class="badge bg-primary">15% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-03.png" alt="img"
                                            class="scale-img img-fluid w-100 bg-primary-transparent rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details"
                                            class="link link-primary text-body">Addidass Shoes</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(789)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$450</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$489</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <div
                                        class="badge bg-info d-inline-flex gap-1 lh-1 align-items-center text-fixed-white mb-1">
                                        <div class="badge-text">Tranding</div>
                                    </div>
                                    <span class="badge bg-primary">20% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-01.png" alt="img"
                                            class="scale-img img-fluid w-100 rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details" class="link link-primary text-body">Crop
                                            Top</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(456)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$399</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$499</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <span class="badge bg-primary">50% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-02.png" alt="img"
                                            class="scale-img img-fluid w-100 bg-primary-transparent rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details"
                                            class="link link-primary text-body">Rollex Watch</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(598)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$899</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$1899</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <span class="badge bg-primary">25% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-04.png" alt="img"
                                            class="scale-img img-fluid w-100 bg-primary-transparent rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details"
                                            class="link link-primary text-body">Solder Crop top</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(299)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$299</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$350</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <div
                                        class="badge bg-success d-inline-flex gap-1 lh-1 align-items-center text-fixed-white mb-1">
                                        <div class="badge-text">New</div>
                                    </div>
                                    <span class="badge bg-primary">20% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-07.png" alt="img"
                                            class="scale-img img-fluid w-100 bg-primary-transparent rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details"
                                            class="link link-primary text-body">Styles Heels 5 inches</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(563)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$798</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$897</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <span class="badge bg-primary">15% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-08.png" alt="img"
                                            class="scale-img img-fluid w-100 bg-primary-transparent rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details"
                                            class="link link-primary text-body">Textured Handheld Bag</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(698)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$999</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$1599</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <div
                                        class="badge bg-success d-inline-flex gap-1 lh-1 align-items-center text-fixed-white mb-1">
                                        <div class="badge-text">New</div>
                                    </div>
                                    <span class="badge bg-primary">30% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-10.png" alt="img"
                                            class="scale-img img-fluid w-100 bg-primary-transparent rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details"
                                            class="link link-primary text-body">Round Hat for Her</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(985)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$359</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$499</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3">
                        <div class="card-style-2 card">
                            <div class="p-0 card-body">
                                <div class="top-left-badge">
                                    <span class="badge bg-primary">22% Off</span>
                                </div>
                                <div class="card-img-top border-bottom border-block-end-dashed">
                                    <div class="btns-container-1 align-items-center gap-1">
                                        <a class="btn btn-icon btn-primary rounded-circle" href="javascript:void(0)">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger rounded-circle" href="javascript:void(0)">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                        <a class="btn btn-icon btn-warning rounded-circle" href="javascript:void(0)">
                                            <i class="ri-shopping-cart-line"></i>
                                        </a>
                                    </div>
                                    <div class="img-box-2">
                                        <img src="assets/images/product/img-11.png" alt="img"
                                            class="scale-img img-fluid w-100 bg-primary-transparent rounded">
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="mb-1 fw-semibold fs-16">
                                        <a href="apps-ecommerce-products-details"
                                            class="link link-primary text-body">Addidass Shoes</a>
                                    </h6>
                                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, adipisicing elit.</p>
                                    <div class="d-flex align-items-baseline fs-11">
                                        <div class="min-w-fit-content">
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-fill me-1"></i>
                                            </span>
                                            <span class="text-warning">
                                                <i class="ri-star-half-fill"></i>
                                            </span>
                                        </div>
                                        <p class="ms-1 min-w-fit-content text-muted">
                                            <span>(789)</span>
                                            <span> Ratings</span>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between flex-wrap mb-3">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-semibold">Color:</h6>
                                            <div class="d-flex">
                                                <button
                                                    class="btn bg-primary-subtle text-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button
                                                    class="btn bg-secondary-subtle text-secondary color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-danger-subtle text-danger color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                                <button class="btn bg-warning-subtle text-warning color-btn me-2 mb-1"><i
                                                        class="ri-circle-fill fs-14"></i></button>
                                            </div>
                                        </div>
                                        <div class="min-w-fit-content">
                                            <h5 class="fw-semibold text-body mb-0">$450</h5>
                                            <span class="fs-13 ms-2 text-muted text-decoration-line-through">$489</span>
                                        </div>
                                    </div>
                                    <div class="w-100">
                                        <a href="apps-ecommerce-cart" class="w-full btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex flex-wrap gap-4 align-items-center p-5 pt-0">
                            <div class="fw-medium"> Showing 1 - 10 of 18 Entries</div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-primary mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:voide(0)">
                                                <i class="ri-arrow-left-s-line fw-semibold"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:voide(0)">1</a></li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:voide(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:voide(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:voide(0)">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:voide(0)">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:voide(0)">
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
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')


    <script src="assets/libs/nouislider/nouislider.min.js"></script>
    <script type="module" src="assets/js/app/ecommerce-product.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
