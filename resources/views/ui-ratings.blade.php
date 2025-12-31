@extends('partials.layouts.master')

@section('title', 'UI Ratings | FabKin Admin & Dashboards Template')


@section('title-sub', 'Base UI')
@section('pagetitle', 'Ratings')
@section('css')
    <link rel="stylesheet" href="assets/libs/star-rating.js/star-rating.min.css">
@endsection
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Basic Rating </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <select class="basic-rating">
                                <option value="rating">Select a rating</option>
                                <option value="5">Excellent</option>
                                <option value="4">Very Good</option>
                                <option value="3">Average</option>
                                <option value="2">Poor</option>
                                <option value="1">Terrible</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Read Only </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <select class="read-only-rating" disabled>
                                <option value="rating">Select a rating</option>
                                <option value="5">Excellent</option>
                                <option value="4">Very Good</option>
                                <option value="3" selected>Average</option>
                                <option value="2">Poor</option>
                                <option value="1">Terrible</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Custom SVG </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <div class="heart-rating-main">
                                <select class="heart-rating">
                                    <option value="5">Excellent</option>
                                    <option value="4" selected>Very Good</option>
                                    <option value="3">Average</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Terrible</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Custom SVG </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <select class="rating-numbers">
                                <option value="3">Select a rating</option>
                                <option value="9">Outstanding</option>
                                <option value="8">Very Good</option>
                                <option value="7">Good</option>
                                <option value="6">Fair</option>
                                <option value="5">Average</option>
                                <option value="4">Below Average</option>
                                <option value="3">Needs Improvement</option>
                                <option value="2">Poor</option>
                                <option value="1">Terrible</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Star with Message Rating </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <div class="rating-container" data-rating-id="1">
                                <select class="selectedMessage" data-target="output1">
                                    <option value="5">Excellent</option>
                                    <option value="4">Very Good</option>
                                    <option value="3" selected>Average</option>
                                    <option value="2">Poor</option>
                                    <option value="1">Terrible</option>
                                </select>
                                <span class="selectedMessage" id="output1"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> On hover event </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <div class="d-flex align-items-center gap-3">
                                <select class="rating-values">
                                    <option value="5" title="Average">Average</option>
                                    <option value="4" title="Below Average">Below Average</option>
                                    <option value="3" title="Needs Improvement">Needs Improvement</option>
                                    <option value="2" title="Poor" selected>Poor</option>
                                    <option value="1" title="Terrible">Terrible</option>
                                </select>
                                <span class="current-rating">rating values</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Reset Rating </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <div class="d-flex align-items-center gap-3 reset-rating-main">
                                <select class="reset-rating">
                                    <option value="5" title="Average">Average</option>
                                    <option value="4" title="Below Average" selected>Below Average</option>
                                    <option value="3" title="Needs Improvement">Needs Improvement</option>
                                    <option value="2" title="Poor">Poor</option>
                                    <option value="1" title="Terrible">Terrible</option>
                                </select>
                                <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Right to Left Rating </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <div class="d-flex align-items-center gap-3" dir="rtl">
                                <select class="rtl-rating">
                                    <option value="5" title="Average">Average</option>
                                    <option value="4" title="Below Average">Below Average</option>
                                    <option value="3" title="Needs Improvement">Needs Improvement</option>
                                    <option value="2" title="Poor" selected>Poor</option>
                                    <option value="1" title="Terrible">Terrible</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Animated Rating </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="gl-star-rating gl-star-rating-prebuilt">
                                    <select id="glsr-prebuilt" class="star-rating-prebuilt">
                                        <option value="rating">Select a rating</option>
                                        <option value="5">5 Stars</option>
                                        <option value="4">4 Stars</option>
                                        <option value="3">3 Stars</option>
                                        <option value="2" selected>2 Stars</option>
                                        <option value="1">1 Star</option>
                                    </select>
                                    <span class="gl-star-rating--stars">
                                        <span data-value="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="gl-emote">
                                                <circle class="gl-emote-bg" fill="#FFA98D" cx="12" cy="12"
                                                    r="10"></circle>
                                                <path fill="#393939"
                                                    d="M12 14.6c1.48 0 2.9.38 4.15 1.1a.8.8 0 01-.79 1.39 6.76 6.76 0 00-6.72 0 .8.8 0 11-.8-1.4A8.36 8.36 0 0112 14.6zm4.6-6.25a1.62 1.62 0 01.58 1.51 1.6 1.6 0 11-2.92-1.13c.2-.04.25-.05.45-.08.21-.04.76-.11 1.12-.18.37-.07.46-.08.77-.12zm-9.2 0c.31.04.4.05.77.12.36.07.9.14 1.12.18.2.03.24.04.45.08a1.6 1.6 0 11-2.34-.38z">
                                                </path>
                                            </svg></span>
                                        <span data-value="2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="gl-emote">
                                                <circle class="gl-emote-bg" fill="#FFC385" cx="12" cy="12"
                                                    r="10"></circle>
                                                <path fill="#393939"
                                                    d="M12 14.8c1.48 0 3.08.28 3.97.75a.8.8 0 11-.74 1.41A8.28 8.28 0 0012 16.4a9.7 9.7 0 00-3.33.61.8.8 0 11-.54-1.5c1.35-.48 2.56-.71 3.87-.71zM15.7 8c.25.31.28.34.51.64.24.3.25.3.43.52.18.23.27.33.56.7A1.6 1.6 0 1115.7 8zM8.32 8a1.6 1.6 0 011.21 2.73 1.6 1.6 0 01-2.7-.87c.28-.37.37-.47.55-.7.18-.22.2-.23.43-.52.23-.3.26-.33.51-.64z">
                                                </path>
                                            </svg></span>
                                        <span data-value="3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="gl-emote">
                                                <circle class="gl-emote-bg" fill="#FFD885" cx="12" cy="12"
                                                    r="10"></circle>
                                                <path fill="#393939"
                                                    d="M15.33 15.2a.8.8 0 01.7.66.85.85 0 01-.68.94h-6.2c-.24 0-.67-.26-.76-.7-.1-.38.17-.81.6-.9zm.35-7.2a1.6 1.6 0 011.5 1.86A1.6 1.6 0 1115.68 8zM8.32 8a1.6 1.6 0 011.21 2.73A1.6 1.6 0 118.33 8z">
                                                </path>
                                            </svg></span>
                                        <span data-value="4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="gl-emote">
                                                <circle class="gl-emote-bg" fill="#FFD885" cx="12" cy="12"
                                                    r="10"></circle>
                                                <path fill="#393939"
                                                    d="M15.45 15.06a.8.8 0 11.8 1.38 8.36 8.36 0 01-8.5 0 .8.8 0 11.8-1.38 6.76 6.76 0 006.9 0zM15.68 8a1.6 1.6 0 011.5 1.86A1.6 1.6 0 1115.68 8zM8.32 8a1.6 1.6 0 011.21 2.73A1.6 1.6 0 118.33 8z">
                                                </path>
                                            </svg></span>
                                        <span data-value="5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="gl-emote">
                                                <circle class="gl-emote-bg" fill="#FFD885" cx="12" cy="12"
                                                    r="10"></circle>
                                                <path fill="#393939"
                                                    d="M16.8 14.4c.32 0 .59.2.72.45.12.25.11.56-.08.82a6.78 6.78 0 01-10.88 0 .78.78 0 01-.05-.87c.14-.23.37-.4.7-.4zM15.67 8a1.6 1.6 0 011.5 1.86A1.6 1.6 0 1115.68 8zM8.32 8a1.6 1.6 0 011.21 2.73A1.6 1.6 0 118.33 8z">
                                                </path>
                                            </svg></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Right to Left Rating </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="fs-14 mb-0 fw-medium">Show Some <span class="text-danger">❤</span> with rating :</p>
                            <div class="d-flex align-items-center gap-3">
                                <input class="custom-rating" max="5" step="0.5" type="range"
                                    value="2.5">
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


    <script src="assets/libs/star-rating.js/star-rating.min.js"></script>
    <script src="assets/js/ui/rating.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
