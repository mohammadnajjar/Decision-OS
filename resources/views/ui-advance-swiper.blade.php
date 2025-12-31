@extends('partials.layouts.master')

@section('title', 'UI Swiper Slider | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Swiper Slider')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">


        <div class="row">

            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Basic Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.default-swiper</code> class creates a basic, touch-enabled
                            slider for smooth content transitions in Swiper.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper default-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-2.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-3.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-4.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-5.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-6.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Navigation & Pagination Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.navigation-swiper</code> class adds navigation arrows and
                            pagination dots to the Swiper, enabling easy slide control and tracking.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper navigation-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-1.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-7.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-8.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-9.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-10.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Pagination Dynamic Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.pagination-dynamic-swiper</code> class adds dynamic pagination
                            to Swiper, updating the visible dots as you swipe through slides.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper pagination-dynamic-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-11.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-12.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-13.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-1.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-2.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-pagination dynamic-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Pagination Fraction Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.pagination-fraction-swiper</code> class adds fraction-style
                            pagination to Swiper, displaying the current slide number over the total number of slides.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper pagination-fraction-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-3.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-4.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-5.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-6.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-7.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Pagination Progress Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.pagination-progress-swiper</code> class adds a progress
                            bar-style pagination to Swiper, showing the current slide's progress as you navigate through the
                            slides.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper pagination-progress-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-8.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-9.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-10.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-11.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-12.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Scrollbar Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.pagination-scrollbar-swiper</code> class adds a draggable
                            scrollbar to Swiper, allowing users to scroll through the slides smoothly.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper pagination-scrollbar-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-13.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-1.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-2.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-3.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-4.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Vertical Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.vertical-swiper</code> class creates a Swiper with vertical
                            slide transitions, allowing users to swipe up and down between slides.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper vertical-swiper rounded h-320px">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-5.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-6.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-7.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-8.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-9.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Mousewheel Control Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.mousewheel-control-swiper</code> class enables Swiper control
                            through the mousewheel, allowing users to scroll slides using their mouse.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper mousewheel-control-swiper rounded h-320px">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-10.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-11.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-12.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-13.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-1.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Effect Fade Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>effect-fade-swiper</code> class creates a smooth fading
                            transition between slides, enhancing the visual experience when navigating through the content.
                        </p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper effect-fade-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-2.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-3.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-4.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-5.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-6.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Effect Creative Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>effect-creative-swiper</code> class showcases a unique slide
                            transition effect, adding a dynamic touch as slides creatively shift into view, making your
                            content visually engaging.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper effect-creative-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-7.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-8.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-9.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-10.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-11.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Effect Flip Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>effect-flip-swiper</code> class provides a 3D flip animation
                            for slide transitions, creating an eye-catching visual effect as slides rotate into place,
                            enhancing user interaction.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper effect-flip-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-12.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-13.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-1.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-2.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-3.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Zoom Effect Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>zoom-effect-swiper</code> class allows slides to zoom in and
                            out during transitions, offering a dynamic and engaging visual experience as users navigate
                            through the content.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper zoom-effect-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="assets/images/small/img-4.jpg" alt="Image"
                                            class="img-fluid object-fit-cover h-100" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="assets/images/small/img-5.jpg" alt="Image"
                                            class="img-fluid object-fit-cover h-100" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="assets/images/small/img-6.jpg" alt="Image"
                                            class="img-fluid object-fit-cover h-100" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="assets/images/small/img-7.jpg" alt="Image"
                                            class="img-fluid object-fit-cover h-100" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container">
                                        <img src="assets/images/small/img-8.jpg" alt="Image"
                                            class="img-fluid object-fit-cover h-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Parallax Swiper </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>parallax-swiper</code> class creates a parallax scrolling
                            effect, where the background moves at a different speed than the foreground, enhancing the depth
                            and immersion of the swiper content.</p>
                        <!-- Swiper -->
                        <div dir="ltr" class="swiper parallax-swiper rounded h-500px p-5">
                            <div class="parallax-bg" style="background-image: url('assets/images/small/img-9.jpg');"
                                data-swiper-parallax="-23%"></div>
                            <div class="swiper-wrapper">
                                <div
                                    class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center text-white">
                                    <div class="display-4 fw-semibold" data-swiper-parallax="-1000">Paris, France</div>
                                    <div class="fs-18" data-swiper-parallax="-1100">The City of Light</div>
                                    <div class="fs-14 lh-sm mt-3 max-w-500px" data-swiper-parallax="-1500">
                                        <p>Experience the romantic ambiance of Paris. From the Eiffel Tower to the charming
                                            streets of Montmartre, Paris is a treasure trove of culture and history.</p>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center text-white">
                                    <div class="display-4 fw-semibold" data-swiper-parallax="-1000">Tokyo, Japan</div>
                                    <div class="fs-18" data-swiper-parallax="-1100">A Blend of Tradition and Modernity
                                    </div>
                                    <div class="fs-14 lh-sm mt-3 max-w-500px" data-swiper-parallax="-1500">
                                        <p>Discover the vibrant culture of Tokyo, where ancient temples coexist with
                                            futuristic skyscrapers. Enjoy sushi, cherry blossoms, and the hustle of Shibuya.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center text-white">
                                    <div class="display-4 fw-semibold" data-swiper-parallax="-1000">Sydney, Australia
                                    </div>
                                    <div class="fs-18" data-swiper-parallax="-1100">Gateway to Adventure</div>
                                    <div class="fs-14 lh-sm mt-3 max-w-500px" data-swiper-parallax="-1500">
                                        <p>Explore the stunning beaches of Sydney, visit the iconic Opera House, and
                                            experience the rich wildlife of Australia. Adventure awaits at every corner!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-lg-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Thumbs gallery </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <code>.thumb-view-swiper</code> class is used for a thumbnail
                            gallery where small images below the main swiper allow users to select and view larger versions.
                            The <code>.thumbs-swiper</code> class links the thumbnail view with the main image display,
                            enhancing the browsing experience.</p>
                        <!-- Thumb View Swiper -->
                        <div dir="ltr" class="swiper thumb-view-swiper rounded">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-7.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100 w-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-8.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100 w-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-9.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100 w-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-10.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100 w-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-11.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100 w-100" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- Thumbs Swiper -->
                        <div dir="ltr" class="swiper thumbs-swiper rounded mt-3" thumbsSlider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-7.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-8.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-9.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-10.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/small/img-11.jpg" alt="Image"
                                        class="img-fluid object-fit-cover h-100" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>


        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')


    <script type="module" src="assets/js/app.js"></script>
    <script src="assets/js/ui/swiper.init.js"></script>
@endsection
