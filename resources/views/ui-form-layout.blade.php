@extends('partials.layouts.master')

@section('title', 'UI Form Layout | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Layout')
@section('css')
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">

    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection

@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Grid</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row g-4">
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="firstnameLayout1"
                                        placeholder="First Name">
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="lastnameLayout1" placeholder="Last Name">
                                </div>
                                <div class="col-xxl-6">
                                    <input type="email" class="form-control" id="emailLayout1" placeholder="Email">
                                </div>
                                <div class="col-xxl-6">
                                    <input type="tel" class="form-control" id="phoneLayout1" placeholder="Phone Number">
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="usernameLayout1" placeholder="Username">
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="basic-picker"
                                        placeholder="Date of Birth">
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="companyLayout1"
                                        placeholder="Company Name">
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="zipcodeLayout1" placeholder="Zip Code">
                                </div>
                                <div class="col-xxl-6">
                                    <input class="form-control" id="addressLayout1" placeholder="Address">
                                </div>
                                <div class="col-xxl-6">
                                    <select class="form-control" id="stateSelectLayout1">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="terms">
                                        <label class="form-check-label" for="terms">I agree to the terms and
                                            conditions</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Gutters</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row g-4">
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="firstnameLayout2"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="lastnameLayout2" placeholder="Last Name"
                                        required>
                                </div>
                                <div class="col-xxl-6">
                                    <input type="email" class="form-control" id="emailLayout2" placeholder="Email"
                                        required>
                                </div>
                                <div class="col-xxl-6">
                                    <input type="tel" class="form-control" id="phoneLayout2"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="col-xxl-6">
                                    <input type="password" class="form-control" id="passwordLayout2"
                                        placeholder="Password" required>
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control" id="basic-picker1"
                                        placeholder="Date of Birth" required>
                                </div>
                                <div class="col-12">
                                    <input class="form-control" id="addressLayout2" placeholder="Address" required>
                                </div>
                                <div class="col-xxl-6">
                                    <input class="form-control" id="cityLayout2" placeholder="City" required>
                                </div>
                                <div class="col-xxl-6">
                                    <select class="form-control" id="stateSelectLayout2" required>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="termsLayout2" required>
                                        <label class="form-check-label" for="termsLayout2">I agree to the terms and
                                            conditions</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Vertical Form With Label</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row g-4">
                                <div class="col-xxl-6">
                                    <label for="firstNameLayout3" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstNameLayout3"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="lastNameLayout3" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastNameLayout3"
                                        placeholder="Last Name" required>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="emailAddressLayout3" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="emailAddressLayout3"
                                        placeholder="Email" required>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="phoneNumberLayout3" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumberLayout3"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="basic-picker2" class="form-label">Date of Birth</label>
                                    <input type="text" class="form-control" id="basic-picker2"
                                        placeholder="Date of Birth" required>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="companyNameLayout3" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="companyNameLayout3"
                                        placeholder="Company Name" required>
                                </div>
                                <div class="col-12">
                                    <label for="addressInputLayout3" class="form-label">Address</label>
                                    <textarea class="form-control" id="addressInputLayout3" rows="2" placeholder="Address" required></textarea>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="zipCodeLayout3" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zipCodeLayout3"
                                        placeholder="Zip Code" required>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="stateSelect2Layout3" class="form-label">State</label>
                                    <select class="form-control" id="stateSelect2Layout3" required>
                                        <option value="Select State">Select State</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="termsLayout3" required>
                                        <label class="form-check-label" for="termsLayout3">I agree to the terms and
                                            conditions</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Vertical Form With Icon</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row g-4">
                                <div class="col-xxl-6">
                                    <label for="firstNameLayout4" class="form-label">First Name</label>
                                    <div class="form-icon">
                                        <i class="ri-user-line text-muted"></i>
                                        <input type="text" class="form-control form-control-icon"
                                            id="firstNameLayout4" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="lastNameLayout4" class="form-label">Last Name</label>
                                    <div class="form-icon">
                                        <i class="ri-user-line text-muted"></i>
                                        <input type="text" class="form-control form-control-icon" id="lastNameLayout4"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="emailAddressLayout4" class="form-label">Email</label>
                                    <div class="form-icon">
                                        <i class="ri-mail-line text-muted"></i>
                                        <input type="email" class="form-control form-control-icon"
                                            id="emailAddressLayout4" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="phoneNumberLayout4" class="form-label">Phone Number</label>
                                    <div class="form-icon">
                                        <i class="ri-phone-line text-muted"></i>
                                        <input type="tel" class="form-control form-control-icon"
                                            id="phoneNumberLayout4" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="basic-picker3" class="form-label">Date of Birth</label>
                                    <div class="form-icon">
                                        <i class="ri-calendar-line text-muted"></i>
                                        <input type="text" class="form-control form-control-icon" id="basic-picker3"
                                            placeholder="Date of Birth" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="companyNameLayout4" class="form-label">Company Name</label>
                                    <div class="form-icon">
                                        <i class="ri-building-line text-muted"></i>
                                        <input type="text" class="form-control form-control-icon"
                                            id="companyNameLayout4" placeholder="Company Name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="addressInputLayout4" class="form-label">Address</label>
                                    <div class="form-icon">
                                        <i class="ri-map-pin-line text-muted"></i>
                                        <input class="form-control form-control-icon" id="addressInputLayout4"
                                            rows="2" placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="zipCodeLayout4" class="form-label">Zip Code</label>
                                    <div class="form-icon">
                                        <i class="ri-map-pin-2-line text-muted"></i>
                                        <input type="text" class="form-control form-control-icon" id="zipCodeLayout4"
                                            placeholder="Zip Code" required>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <label for="stateSelect2Layout4" class="form-label">State</label>
                                    <div class="form-icon">
                                        <i class="ri-map-line text-muted"></i>
                                        <select class="form-control form-control-icon" id="stateSelect2Layout4" required>
                                            <option value="Select State">Select State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="termsLayout4" required>
                                        <label class="form-check-label" for="termsLayout4">I agree to the terms and
                                            conditions</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Horizontal Form With Label</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="firstNameLayout5" class="mb-2 mb-lg-0">Full Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="firstNameLayout5"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="emailAddressLayout5" class="mb-2 mb-lg-0">Email Address</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" id="emailAddressLayout5"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="passwordLayout5" class="mb-2 mb-lg-0">Password</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="passwordLayout5"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="phoneNumberLayout5" class="mb-2 mb-lg-0">Phone Number</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="phoneNumberLayout5"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="stateSelect2Layout5" class="mb-2 mb-lg-0">State</label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="form-control form-control-icon" id="stateSelect2Layout5" required>
                                        <option value="Select State">Select State</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 offset-lg-3">
                                <div class="form-check mb-5">
                                    <input type="checkbox" class="form-check-input" id="termsLayout5" required>
                                    <label class="form-check-label" for="termsLayout5">I agree to the terms and
                                        conditions</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Horizontal Form With Icon</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="firstNameLayout6" class="mb-2 mb-lg-0">Full Name</label>
                                </div>
                                <div class="col-lg-9 form-icon">
                                    <i class="ri-user-line text-muted"></i>
                                    <input type="text" class="form-control form-control-icon" id="firstNameLayout6"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="emailAddressLayout6" class="mb-2 mb-lg-0">Email Address</label>
                                </div>
                                <div class="col-lg-9 form-icon">
                                    <i class="ri-mail-line text-muted"></i>
                                    <input type="email" class="form-control form-control-icon" id="emailAddressLayout6"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="passwordLayout6" class="mb-2 mb-lg-0">Password</label>
                                </div>
                                <div class="col-lg-9 form-icon">
                                    <i class="ri-lock-line text-muted"></i>
                                    <input type="text" class="form-control form-control-icon" id="passwordLayout6"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="phoneNumberLayout6" class="mb-2 mb-lg-0">Phone Number</label>
                                </div>
                                <div class="col-lg-9 form-icon">
                                    <i class="ri-phone-line text-muted"></i>
                                    <input type="text" class="form-control form-control-icon" id="phoneNumberLayout6"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="stateSelect2Layout6" class="mb-2 mb-lg-0">State</label>
                                </div>
                                <div class="col-lg-9 form-icon">
                                    <i class="ri-map-line text-muted"></i>
                                    <select class="form-control form-control-icon" id="stateSelect2Layout6" required>
                                        <option value="Select State">Select State</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 offset-lg-3">
                                <div class="form-check mb-5">
                                    <input type="checkbox" class="form-check-input" id="termsLayout6" required>
                                    <label class="form-check-label" for="termsLayout6">I agree to the terms and
                                        conditions</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Horizontal form label sizing</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="colFormLabelSm" class="mb-2 mb-lg-0">Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="colFormLabel" class="mb-2 mb-lg-0">Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="colFormLabel" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label for="colFormLabelLg" class="mb-2 mb-lg-0">Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                                        placeholder="Email">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Column sizing</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Full Name"
                                        aria-label="Full Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" placeholder="Phone Number"
                                        aria-label="Phone Number">
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" placeholder="City" aria-label="City">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" placeholder="State" aria-label="State">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Inline forms</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <form action="javascript:void(0)" class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="col-12">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="Username">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                <select class="form-select" id="inlineFormSelectPref">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                    <label class="form-check-label" for="inlineFormCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')
    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="assets/js/form/form-layout.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
