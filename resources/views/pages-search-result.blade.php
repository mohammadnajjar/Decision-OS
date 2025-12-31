@extends('partials.layouts.master')

@section('title', 'Page | FabKin Admin & Dashboards Template')

@section('title-sub', 'Page')
@section('pagetitle', 'Search')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row justify-content-center g-4">
            <div class="col">
                <div class="position-relative">
                    <div class="form-icon right">
                        <input type="text" class="form-control border form-control-icon" placeholder="Search...">
                        <i class="ri-mic-ai-line fs-5 text-primary cursor-pointer"></i>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary"><i class="mdi mdi-magnify me-1"></i> Search</button>
            </div>
            <div class="mt-4">
                <ul class="nav nav-pills justify-content-center pt-3 mb-6" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="information-tab" data-bs-toggle="tab"
                            data-bs-target="#information-tab-pane" type="button" role="tab"
                            aria-controls="information-tab-pane" aria-selected="false" tabindex="-1">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ecommerce-tab" data-bs-toggle="tab"
                            data-bs-target="#ecommerce-tab-pane" type="button" role="tab"
                            aria-controls="ecommerce-tab-pane" aria-selected="true">Ecommerce</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="blog-tab" data-bs-toggle="tab" data-bs-target="#blog-tab-pane"
                            type="button" role="tab" aria-controls="blog-tab-pane" aria-selected="true">Blog</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane"
                            type="button" role="tab" aria-controls="video-tab-pane" aria-selected="true">Video</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event-tab-pane"
                            type="button" role="tab" aria-controls="event-tab-pane" aria-selected="true">Event</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="information-tab-pane" role="tabpanel"
                        aria-labelledby="information-tab" tabindex="0">
                        <div class="row gx-6 gy-2">
                            <!-- E-Commerce -->
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger text-muted d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>236</a>
                                            <span class="badge bg-primary">30% off</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/crop-top.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5" alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$125.00</span>
                                            <h6 class="mb-1 mt-2">Paar Lokal Crop Top</h6>
                                            <p class="text-muted mb-5">Ton HM Gether Crop Top</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>270</a>
                                            <span class="badge bg-info">New Collection</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/watch.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$199.99</span>
                                            <h6 class="mb-1 mt-2">Garmin vivomove</h6>
                                            <p class="text-muted mb-5">Trend Women's Smartwatch</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger text-muted d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>150</a>
                                            <span class="badge bg-primary">5% off</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/purse.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$80.00</span>
                                            <h6 class="mb-1 mt-2">Genuine Leather Bags</h6>
                                            <p class="text-muted mb-5">New Fashion Ladis Women's Bag</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger text-muted d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>97</a>
                                            <span class="badge bg-primary">10% off</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/shoes.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$232.00</span>
                                            <h6 class="mb-1 mt-2">Men's Puma SD Shoes</h6>
                                            <p class="text-muted mb-5">Black / White Speed Cat Shoes</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog -->
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-2.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-3.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-4.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-5.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Video -->
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex-shrink-0 ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video"
                                                allowfullscreen class="rounded" width="100%"></iframe>
                                        </div>
                                        <div class="mt-5">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi magnam ipsa
                                                quas cupiditate enim repellendus incidunt tempore. Ullam facilis autem
                                                libero fuga veritatis ut, rem, minus quia architecto, rerum a!</p>
                                            <div class="d-flex justify-content-between border-top border-dashed">
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-thumb-up-line me-1 text-primary fs-15"></i> 15 Likes</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-share-forward-line me-1 text-primary fs-15"></i> 5
                                                    Share</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-notification-4-line me-1 text-primary fs-15"></i> 150
                                                    Subscrib</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-save-line me-1 text-primary fs-15"></i> 3 Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex-shrink-0 ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video"
                                                allowfullscreen class="rounded" width="100%"></iframe>
                                        </div>
                                        <div class="mt-5">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi magnam ipsa
                                                quas cupiditate enim repellendus incidunt tempore. Ullam facilis autem
                                                libero fuga veritatis ut, rem, minus quia architecto, rerum a!</p>
                                            <div class="d-flex justify-content-between border-top border-dashed">
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-thumb-up-line me-1 text-primary fs-15"></i> 15 Likes</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-share-forward-line me-1 text-primary fs-15"></i> 5
                                                    Share</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-notification-4-line me-1 text-primary fs-15"></i> 150
                                                    Subscrib</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-save-line me-1 text-primary fs-15"></i> 3 Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Event -->
                            <div class="col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-4">
                                                <img src="assets/images/small/img-2.jpg" alt="Image"
                                                    class="h-full object-fit-cover img-fluid">
                                            </div>
                                            <div class="p-5 col-lg-8 position-relative">
                                                <p
                                                    class="bg-primary-subtle d-inline-block position-absolute top-0 start-0 py-3 px-5 pe-8 fw-semibold rounded-end-pill text-primary mt-5">
                                                    24 Oct 2025 - New York</p>
                                                <p class="fw-semibold mt-16 mb-2">Karen Carter</p>
                                                <h5 class="text-truncate">The Evolution of Minimalism in Design</h5>
                                                <p class="text-muted mb-2">It's a movement that continues to influence
                                                    design.</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-4">
                                                <img src="assets/images/small/img-3.jpg" alt="Image"
                                                    class="h-full object-fit-cover img-fluid">
                                            </div>
                                            <div class="p-5 col-lg-8 position-relative">
                                                <p
                                                    class="bg-primary-subtle d-inline-block position-absolute top-0 start-0 py-3 px-5 pe-8 fw-semibold rounded-end-pill text-primary mt-5">
                                                    24 Oct 2025 - New York</p>
                                                <p class="fw-semibold mt-16 mb-2">Karen Carter</p>
                                                <h5 class="text-truncate">The Evolution of Minimalism in Design</h5>
                                                <p class="text-muted mb-2">It's a movement that continues to influence
                                                    design.</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ecommerce-tab-pane" role="tabpanel" aria-labelledby="ecommerce-tab"
                        tabindex="0">
                        <div class="row gx-6 gy-2">
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger text-muted d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>236</a>
                                            <span class="badge bg-primary">30% off</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/crop-top.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$125.00</span>
                                            <h6 class="mb-1 mt-2">Paar Lokal Crop Top</h6>
                                            <p class="text-muted mb-5">Ton HM Gether Crop Top</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>270</a>
                                            <span class="badge bg-info">New Collection</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/watch.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$199.99</span>
                                            <h6 class="mb-1 mt-2">Garmin vivomove</h6>
                                            <p class="text-muted mb-5">Trend Women's Smartwatch</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger text-muted d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>150</a>
                                            <span class="badge bg-primary">5% off</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/purse.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$80.00</span>
                                            <h6 class="mb-1 mt-2">Genuine Leather Bags</h6>
                                            <p class="text-muted mb-5">New Fashion Ladis Women's Bag</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger text-muted d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>97</a>
                                            <span class="badge bg-primary">10% off</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/shoes.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$232.00</span>
                                            <h6 class="mb-1 mt-2">Men's Puma SD Shoes</h6>
                                            <p class="text-muted mb-5">Black / White Speed Cat Shoes</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center cursor-pointer">
                                            <a href="javascript:void(0)"
                                                class="link link-danger text-muted d-flex align-items-center gap-2"><i
                                                    class="bi bi-heart-fill"></i>36</a>
                                            <span class="badge bg-primary">15% off</span>
                                        </div>
                                        <div class="rounded-3">
                                            <img src="assets/images/e-commerce/chair.png"
                                                class="img-fluid h-256px w-256px mx-auto d-block p-5"
                                                alt="Red Nike Shoes">
                                        </div>
                                        <div class="text-center">
                                            <span class="fs-4 fw-bold">$89.00</span>
                                            <h6 class="mb-1 mt-2">Chair AAC12</h6>
                                            <p class="text-muted mb-5">Black Finish Design Chair</p>
                                            <div class="d-flex justify-content-center gap-3">
                                                <button class="btn btn-primary">Buy Now</button>
                                                <button class="btn btn-light-light text-muted"><i
                                                        class="bi bi-basket3 me-2"></i>Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="blog-tab-pane" role="tabpanel" aria-labelledby="blog-tab"
                        tabindex="0">
                        <div class="row gx-6 gy-2">
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-1.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0 fs-15">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="ps-1 text-muted">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="ps-1 text-muted">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="ps-1 text-muted">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-2.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-3.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-4.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-5.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                                <div class="blogCard">
                                    <div class="card overflow-hidden cursor-pointer">
                                        <div class="card-body p-0">
                                            <img src="assets/images/small/img-6.jpg"
                                                class="img-fluid h-224px w-full object-fit-cover overflow-hidden"
                                                alt="Image">
                                            <div class="p-5">
                                                <div class="d-flex justify-content-between">
                                                    <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Image"
                                                        class="blog-avatar h-56px w-56px mt-n12 rounded-pill border border-4 border-white shadow-sm">
                                                    <div>
                                                        <h6 class="mb-0">By: Karen Carter</h6>
                                                    </div>
                                                </div>
                                                <h4 class="mt-6 mb-4 text-truncate">The Evolution of Minimalism in Design
                                                </h4>
                                                <p class="mb-6 fs-15">It's a movement that continues to influence design
                                                    worldwide. Learn how simplicity in design evolved and why it remains
                                                    impactful today.</p>
                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                    <div>
                                                        <i class="ri-time-line fs-14"></i>
                                                        <span class="text-muted ps-1">Mar 2, 2024</span>
                                                    </div>
                                                    <div class="d-flex gap-3 align-items-center">
                                                        <div>
                                                            <i class="ri-eye-line fs-14"></i>
                                                            <span class="text-muted ps-1">62</span>
                                                        </div>
                                                        <div>
                                                            <i class="bi bi-chat-dots fs-14"></i>
                                                            <span class="text-muted ps-1">15</span>
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
                    <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab"
                        tabindex="0">
                        <div class="row gx-6 gy-2">
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex-shrink-0 ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video"
                                                allowfullscreen class="rounded" width="100%"></iframe>
                                        </div>
                                        <div class="mt-5">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi magnam ipsa
                                                quas cupiditate enim repellendus incidunt tempore. Ullam facilis autem
                                                libero fuga veritatis ut, rem, minus quia architecto, rerum a!</p>
                                            <div class="d-flex justify-content-between border-top border-dashed">
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-thumb-up-line me-1 text-primary fs-15"></i> 15 Likes</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-share-forward-line me-1 text-primary fs-15"></i> 5
                                                    Share</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-notification-4-line me-1 text-primary fs-15"></i> 150
                                                    Subscrib</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-save-line me-1 text-primary fs-15"></i> 3 Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex-shrink-0 ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video"
                                                allowfullscreen class="rounded" width="100%"></iframe>
                                        </div>
                                        <div class="mt-5">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi magnam ipsa
                                                quas cupiditate enim repellendus incidunt tempore. Ullam facilis autem
                                                libero fuga veritatis ut, rem, minus quia architecto, rerum a!</p>
                                            <div class="d-flex justify-content-between border-top border-dashed">
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-thumb-up-line me-1 text-primary fs-15"></i> 15 Likes</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-share-forward-line me-1 text-primary fs-15"></i> 5
                                                    Share</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-notification-4-line me-1 text-primary fs-15"></i> 150
                                                    Subscrib</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-save-line me-1 text-primary fs-15"></i> 3 Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex-shrink-0 ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video"
                                                allowfullscreen class="rounded" width="100%"></iframe>
                                        </div>
                                        <div class="mt-5">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi magnam ipsa
                                                quas cupiditate enim repellendus incidunt tempore. Ullam facilis autem
                                                libero fuga veritatis ut, rem, minus quia architecto, rerum a!</p>
                                            <div class="d-flex justify-content-between border-top border-dashed">
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-thumb-up-line me-1 text-primary fs-15"></i> 15 Likes</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-share-forward-line me-1 text-primary fs-15"></i> 5
                                                    Share</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-notification-4-line me-1 text-primary fs-15"></i> 150
                                                    Subscrib</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-save-line me-1 text-primary fs-15"></i> 3 Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex-shrink-0 ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video"
                                                allowfullscreen class="rounded" width="100%"></iframe>
                                        </div>
                                        <div class="mt-5">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi magnam ipsa
                                                quas cupiditate enim repellendus incidunt tempore. Ullam facilis autem
                                                libero fuga veritatis ut, rem, minus quia architecto, rerum a!</p>
                                            <div class="d-flex justify-content-between border-top border-dashed">
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-thumb-up-line me-1 text-primary fs-15"></i> 15 Likes</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-share-forward-line me-1 text-primary fs-15"></i> 5
                                                    Share</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-notification-4-line me-1 text-primary fs-15"></i> 150
                                                    Subscrib</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-save-line me-1 text-primary fs-15"></i> 3 Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex-shrink-0 ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/GfSZtaoc5bw" title="YouTube video"
                                                allowfullscreen class="rounded" width="100%"></iframe>
                                        </div>
                                        <div class="mt-5">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi magnam ipsa
                                                quas cupiditate enim repellendus incidunt tempore. Ullam facilis autem
                                                libero fuga veritatis ut, rem, minus quia architecto, rerum a!</p>
                                            <div class="d-flex justify-content-between border-top border-dashed">
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-thumb-up-line me-1 text-primary fs-15"></i> 15 Likes</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-share-forward-line me-1 text-primary fs-15"></i> 5
                                                    Share</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-notification-4-line me-1 text-primary fs-15"></i> 150
                                                    Subscrib</a>
                                                <a href="javascript:void(0)" class="d-block pt-4 text-body fs-12"><i
                                                        class="ri-save-line me-1 text-primary fs-15"></i> 3 Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="event-tab-pane" role="tabpanel" aria-labelledby="event-tab"
                        tabindex="0">
                        <div class="row gx-6 gy-2">
                            <div class="col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <img src="assets/images/small/img-2.jpg" alt="Image"
                                                    class="h-full object-fit-cover img-fluid">
                                            </div>
                                            <div class="p-5 col-8 position-relative">
                                                <p
                                                    class="bg-primary-subtle d-inline-block position-absolute top-0 start-0 py-3 px-5 pe-8 fw-semibold rounded-end-pill text-primary mt-5">
                                                    24 Oct 2025 - New York</p>
                                                <p class="text-body fw-semibold mt-16 mb-2">Karen Carter</p>
                                                <h5 class="text-truncate">The Evolution of Minimalism in Design</h5>
                                                <p class="text-muted mb-2">It's a movement that continues to influence
                                                    design.</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <img src="assets/images/small/img-3.jpg" alt="Image"
                                                    class="h-full object-fit-cover img-fluid">
                                            </div>
                                            <div class="p-5 col-8 position-relative">
                                                <p
                                                    class="bg-primary-subtle d-inline-block position-absolute top-0 start-0 py-3 px-5 pe-8 fw-semibold rounded-end-pill text-primary mt-5">
                                                    24 Oct 2025 - New York</p>
                                                <p class="text-body fw-semibold mt-16 mb-2">Karen Carter</p>
                                                <h5 class="text-truncate">The Evolution of Minimalism in Design</h5>
                                                <p class="text-muted mb-2">It's a movement that continues to influence
                                                    design.</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <img src="assets/images/small/img-8.jpg" alt="Image"
                                                    class="h-full object-fit-cover img-fluid">
                                            </div>
                                            <div class="p-5 col-8 position-relative">
                                                <p
                                                    class="bg-primary-subtle d-inline-block position-absolute top-0 start-0 py-3 px-5 pe-8 fw-semibold rounded-end-pill text-primary mt-5">
                                                    24 Oct 2025 - New York</p>
                                                <p class="text-body fw-semibold mt-16 mb-2">Karen Carter</p>
                                                <h5 class="text-truncate">The Evolution of Minimalism in Design</h5>
                                                <p class="text-muted mb-2">It's a movement that continues to influence
                                                    design.</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <img src="assets/images/small/img-7.jpg" alt="Image"
                                                    class="h-full object-fit-cover img-fluid">
                                            </div>
                                            <div class="p-5 col-8 position-relative">
                                                <p
                                                    class="bg-primary-subtle d-inline-block position-absolute top-0 start-0 py-3 px-5 pe-8 fw-semibold rounded-end-pill text-primary mt-5">
                                                    24 Oct 2025 - New York</p>
                                                <p class="text-body fw-semibold mt-16 mb-2">Karen Carter</p>
                                                <h5 class="text-truncate">The Evolution of Minimalism in Design</h5>
                                                <p class="text-muted mb-2">It's a movement that continues to influence
                                                    design.</p>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary">Book Now</button>
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

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
