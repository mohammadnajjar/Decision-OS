@extends('partials.layouts.master')

@section('title', 'UI Sweetalert | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Sweetalert')
@section('css')
    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Basic</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">A basic message</p>
                        <button class="btn btn-primary" data-alert="basicMessage">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Error Message</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Show an error message with a title and footer </p>
                        <button class="btn btn-primary" data-alert="errorType">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description Message</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Display a title with a description</p>
                        <button class="btn btn-primary" data-alert="titleText">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom HTML Message</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use custom HTML with descriptive buttons</p>
                        <button class="btn btn-primary" data-alert="customHtml">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Three Options</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Display a dialog with three options</p>
                        <button class="btn btn-primary" data-alert="threeButtons">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom Position</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Show a dialog in a custom position</p>
                        <button class="btn btn-primary" data-alert="customPosition">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Warning Message</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Confirm action with a warning message</p>
                        <button class="btn btn-primary" data-alert="warningConfirm">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Handle Dismiss</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Execute different actions based on cancellation</p>
                        <button class="btn btn-primary" data-alert="handleDismiss">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom Image</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Display a message with a custom image</p>
                        <button class="btn btn-primary" data-alert="customImage">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom Styles</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Show a message with custom dimensions and styling</p>
                        <button class="btn btn-primary" data-alert="customWidth">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Auto Close Message</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Auto-close message after a few seconds</p>
                        <button class="btn btn-primary" data-alert="timer">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Right to Left (RTL)</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Support for right-to-left languages</p>
                        <button class="btn btn-primary" data-alert="rtl">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Ajax Request</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Example of an AJAX request</p>
                        <button class="btn btn-primary" data-alert="ajaxRequest">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Email</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="emailAlerts">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">URL</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="urlAlerts">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Password</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="passwordAlerts">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Textarea</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="textareaAlerts">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Checkbox</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="acceptTermsAndConditions">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Date</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="selectDepartureDate">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">File Upload & Show Images</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="uploadImage">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-md-6 col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Range</h5>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" data-alert="rangeInput">Click Me</button>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Trigger Toast </h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-5 justify-content-center">
                            <button class="btn btn-success" data-alert="showSuccessToast">Show Success Toast</button>
                            <button class="btn btn-danger" data-alert="showErrorToast">Show Error Toast</button>
                            <button class="btn btn-warning" data-alert="showWarningToast">Show Warning Toast</button>
                            <button class="btn btn-info" data-alert="showInfoToast">Show Info Toast</button>
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


    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="assets/js/ui/sweetalert.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

@endsection
