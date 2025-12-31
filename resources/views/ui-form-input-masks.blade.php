@extends('partials.layouts.master')

@section('title', 'UI Input Masks | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Input Masks')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Date Input Fields</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="row g-5">
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="simple-date">Select Date:</label>
                                <input type="text" class="form-control" id="simple-date" name="simple-date"
                                    placeholder="MM/DD/YYYY">
                                <small class="text-muted">Example: 10/31/2024</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="date-month">Date & Month:</label>
                                <input type="text" class="form-control" id="date-month" name="date-month"
                                    placeholder="DD/MM">
                                <small class="text-muted">Example: 08/10</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="formatted-date">Formatted Date:</label>
                                <input type="text" class="form-control" id="formatted-date" name="formatted-date"
                                    placeholder="YYYY-MM-DD">
                                <small class="text-muted">Example: 2024-10-31</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="date-delimiters">Date Delimiters:</label>
                                <input type="text" class="form-control" id="date-delimiters" name="date-delimiters"
                                    placeholder="DD/MM/YYYY">
                                <small class="text-muted">Example: 31.10.2024</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Time Input Fields</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a time. Make sure to follow the specified
                            format:</p>
                        <div class="row g-5">
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="simple-time">Select Time:</label>
                                <input type="text" class="form-control" id="simple-time" name="simple-time"
                                    placeholder="HH:MM:SS AM/PM">
                                <small class="text-muted">Example: 02:30:59 PM</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="minutes-seconds">Minutes & Seconds:</label>
                                <input type="text" class="form-control" id="minutes-seconds" name="minutes-seconds"
                                    placeholder="MM:SS">
                                <small class="text-muted">Example: 30:59</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="hours-minutes">Hours & Minutes:</label>
                                <input type="text" class="form-control" id="hours-minutes" name="hours-minutes"
                                    placeholder="HH:MM">
                                <small class="text-muted">Example: 02:30</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom Input Fields</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Fill out the following fields with your information. Please refer to the
                            placeholders for guidance:</p>
                        <div class="row g-5">
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="contact-number">Contact Number:</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-secondary-200" id="basic-addon1">+91</span>
                                    <input type="text" class="form-control" id="contact-number" name="contact-number"
                                        placeholder="123-456-7890">
                                </div>
                                <small class="text-muted">Example: 123-456-7890</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="formatted-contact">Formatted Contact:</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-secondary-200" id="basic-addon2">+91</span>
                                    <input type="text" class="form-control" id="formatted-contact"
                                        name="formatted-contact" placeholder="(123) (456) (7890)">
                                </div>
                                <small class="text-muted">Example: (123) (456) (7890)</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="credit-card">Credit Card Number:</label>
                                <input type="text" class="form-control" id="credit-card" name="credit-card"
                                    placeholder="XXXX XXXX XXXX XXXX">
                                <small class="text-muted">Example: 1234 5678 9012 3456</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="numeral-format">Numeral Format:</label>
                                <input type="text" class="form-control" id="numeral-format" name="numeral-format"
                                    placeholder="XX,XXX,XX">
                                <small class="text-muted">Example: 12,345</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="price">Price:</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="$0.00">
                                <small class="text-muted">Example: $123,45</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="formatted-price">Formatted Price:</label>
                                <input type="text" class="form-control" id="formatted-price" name="formatted-price"
                                    placeholder="$1,234.56">
                                <small class="text-muted">Example: $1,234.56</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="prefix">Prefix:</label>
                                <input type="text" class="form-control" id="prefix" name="prefix"
                                    placeholder="Prefix">
                                <small class="text-muted">Example: 123456 789</small>
                            </div>
                            <div class="col-12 col-xl-6 col-xxl-4">
                                <label class="form-label" for="prefix-delimiters">Prefix with Delimiters:</label>
                                <input type="text" class="form-control" id="prefix-delimiters"
                                    name="prefix-delimiters" placeholder="Prefix - Value">
                                <small class="text-muted">Example: PREFIX - 100-000.00</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script src="assets/libs/cleave.js/cleave.min.js"></script>
    <script src="assets/js/ui/input-masks.init.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
