@extends('partials.layouts.master')

@section('title', 'Form Wizards | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Wizards')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Basic Date Picker</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <div class="stepper">
                            <form action="#" class="form-steps" autocomplete="off">
                                <div class="text-center pt-3 pb-4 mb-1">
                                    <h5>Registration Process</h5>
                                </div>
                                <div class="custom-stepper mb-4">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 0%;"></div>
                                    </div>

                                    <ul class="nav nav-pills mt-3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-circle p-0 avatar-md active"
                                                type="button">1</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-circle p-0 avatar-md" type="button">2</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-circle p-0 avatar-md" type="button">3</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-circle p-0 avatar-md" type="button">4</button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active">
                                        <div class="mb-4">
                                            <h5 class="mb-1">Create Your Account</h5>
                                            <p class="text-muted">Please provide your account information.</p>

                                            <div class="row g-4">
                                                <div class="col-xl-6">
                                                    <input type="text" placeholder="Username" class="form-control"
                                                        id="usernameInput">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="email" placeholder="Email Address" class="form-control"
                                                        id="emailInput">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="password" placeholder="Password" class="form-control"
                                                        id="passwordInput">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="password" placeholder="Confirm Password"
                                                        class="form-control" id="confirmPasswordInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-end gap-3 mt-4">
                                            <button type="button" class="btn btn-primary nexttab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade">
                                        <div class="mb-4">
                                            <h5 class="mb-1">Personal Information</h5>
                                            <p class="text-muted">Provide your personal details.</p>
                                            <div class="row g-4">
                                                <div class="col-xl-6">
                                                    <input type="text" placeholder="First Name" class="form-control"
                                                        id="firstNameInput">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="text" placeholder="Last Name" class="form-control"
                                                        id="lastNameInput">
                                                </div>
                                                <div class="col-xl-6 col-xl-4">
                                                    <input type="text" placeholder="Phone Number" class="form-control"
                                                        id="phoneNumberInput">
                                                </div>
                                                <div class="col-xl-6 col-xl-4">
                                                    <input type="number" placeholder="Age" class="form-control"
                                                        id="ageInput">
                                                </div>
                                                <div class="col-xl-6 col-xl-4">
                                                    <select class="form-select" aria-label="Language Select"
                                                        id="languageSelect">
                                                        <option value="en">English</option>
                                                        <option value="fr">French</option>
                                                        <option value="sp">Spanish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between gap-3 mt-4">
                                            <button type="button"
                                                class="btn btn-outline-secondary previestab">Previous</button>
                                            <button type="button" class="btn btn-primary nexttab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade">
                                        <div class="mb-4">
                                            <h5 class="mb-1">Address Details</h5>
                                            <p class="text-muted">Fill in your address information.</p>
                                            <div class="row g-4">
                                                <div class="col-xl-6">
                                                    <input type="text" placeholder="Street Address"
                                                        class="form-control" id="address1Input">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="text" placeholder="Apartment, Suite, etc."
                                                        class="form-control" id="address2Input">
                                                </div>
                                                <div class="col-xl-6 col-xl-4">
                                                    <input type="text" placeholder="City" class="form-control"
                                                        id="cityInput">
                                                </div>
                                                <div class="col-xl-6 col-xl-4">
                                                    <input type="text" placeholder="Postal Code" class="form-control"
                                                        id="postalCodeInput">
                                                </div>
                                                <div class="col-xl-6 col-xl-4">
                                                    <select class="form-select" aria-label="Country Select"
                                                        id="countrySelect">
                                                        <option value="in">India</option>
                                                        <option value="us">USA</option>
                                                        <option value="ca">Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between gap-3 mt-4">
                                            <button type="button"
                                                class="btn btn-outline-secondary previestab">Previous</button>
                                            <button type="button" class="btn btn-primary nexttab">Next</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade">
                                        <div class="mb-4">
                                            <h5 class="mb-1">Social Media Links</h5>
                                            <p class="text-muted">Share your social media profiles.</p>
                                            <div class="row g-4">
                                                <div class="col-xl-6">
                                                    <input type="url" placeholder="Facebook Profile"
                                                        class="form-control" id="facebookInput">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="url" placeholder="Twitter Profile"
                                                        class="form-control" id="twitterInput">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="url" placeholder="LinkedIn Profile"
                                                        class="form-control" id="linkedinInput">
                                                </div>
                                                <div class="col-xl-6">
                                                    <input type="url" placeholder="Instagram Profile"
                                                        class="form-control" id="instagramInput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start justify-content-between gap-3 mt-4">
                                            <button type="button"
                                                class="btn btn-outline-secondary previestab">Previous</button>
                                            <button type="submit" class="btn btn-success nexttab">Submit</button>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade">
                                        <div class="mb-4 text-center">
                                            <h5 class="mb-1">Thank You!</h5>
                                            <p class="text-muted">Your registration was successful. We appreciate your
                                                submission!</p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <button type="button" class="btn btn-success"
                                                onclick="location.reload();">Go to Home</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Vertical</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <div class="stepper">
                            <form action="#" class="form-steps form-steps-vertical" autocomplete="off">
                                <div class="text-center pt-3 pb-4 mb-1">
                                    <h5>Registration Process</h5>
                                </div>

                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="custom-stepper mb-4">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                            </div>

                                            <ul class="nav nav-pills flex-column" role="tablist">
                                                <li class="nav-item">
                                                    <button class="nav-link rounded-circle p-0 avatar-md my-2 active"
                                                        type="button">1</button>
                                                    <div>
                                                        <h6>Create Account</h6>
                                                        <span class="fs-12 text-muted">Set up your account
                                                            credentials.</span>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link rounded-circle p-0 avatar-md my-2"
                                                        type="button">2</button>
                                                    <div>
                                                        <h6>Personal Information</h6>
                                                        <span class="fs-12 text-muted">Tell us about yourself.</span>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link rounded-circle p-0 avatar-md my-2"
                                                        type="button">3</button>
                                                    <div>
                                                        <h6>Address Details</h6>
                                                        <span class="fs-12 text-muted">Provide your address
                                                            information.</span>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <button class="nav-link rounded-circle p-0 avatar-md my-2"
                                                        type="button">4</button>
                                                    <div>
                                                        <h6>Social Media Links</h6>
                                                        <span class="fs-12 text-muted">Connect your social profiles.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active">
                                                <div class="mb-4">
                                                    <p class="text-muted">Please provide your account details below.</p>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Choose a Username"
                                                            class="form-control" id="userUsername" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="email" placeholder="Email Address"
                                                            class="form-control" id="userEmail" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="password" placeholder="Create a Password"
                                                            class="form-control" id="userPassword" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="password" placeholder="Confirm Your Password"
                                                            class="form-control" id="userConfirmPassword" required>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary nexttab">Next</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade">
                                                <div class="mb-4">
                                                    <p class="text-muted">Help us know more about you.</p>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="First Name"
                                                            class="form-control" id="userFirstName" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Last Name"
                                                            class="form-control" id="userLastName" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="tel" placeholder="Phone Number"
                                                            class="form-control" id="userPhoneNumber" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="number" placeholder="Age" class="form-control"
                                                            id="userAge" min="1" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <select class="form-select" aria-label="Preferred Language"
                                                            id="userLanguage" required>
                                                            <option value="Language" disabled selected>Select Language
                                                            </option>
                                                            <option value="en">English</option>
                                                            <option value="fr">French</option>
                                                            <option value="es">Spanish</option>
                                                            <option value="de">German</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary previestab">Previous</button>
                                                    <button type="button" class="btn btn-primary nexttab">Next</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade">
                                                <div class="mb-4">
                                                    <p class="text-muted">Please provide your address.</p>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Street Address"
                                                            class="form-control" id="userAddressLine1" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Apartment, Suite, etc."
                                                            class="form-control" id="userAddressLine2">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="City" class="form-control"
                                                            id="userCity" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" placeholder="Postal Code"
                                                            class="form-control" id="userPostalCode" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <select class="form-select" aria-label="Country" id="userCountry"
                                                            required>
                                                            <option value="Country" disabled selected>Select Country
                                                            </option>
                                                            <option value="us">United States</option>
                                                            <option value="ca">Canada</option>
                                                            <option value="uk">United Kingdom</option>
                                                            <option value="au">Australia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary previestab">Previous</button>
                                                    <button type="button" class="btn btn-primary nexttab">Next</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade">
                                                <div class="mb-4">
                                                    <p class="text-muted">Optional: Share your social profiles.</p>
                                                    <div class="mb-3">
                                                        <input type="url" placeholder="Facebook Profile URL"
                                                            class="form-control" id="userFacebook">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="url" placeholder="Twitter Profile URL"
                                                            class="form-control" id="userTwitter">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="url" placeholder="LinkedIn Profile URL"
                                                            class="form-control" id="userLinkedIn">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="url" placeholder="Instagram Profile URL"
                                                            class="form-control" id="userInstagram">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary previestab">Previous</button>
                                                    <button type="button" class="btn btn-primary nexttab">Finish
                                                        Registration</button>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade">
                                                <div class="mb-4 text-center">
                                                    <h5 class="mb-1">Thank You for Registering!</h5>
                                                    <p class="text-muted">Your account has been created successfully.
                                                        Welcome aboard!</p>
                                                </div>
                                                <div class="d-flex justify-content-center mt-4">
                                                    <button type="button" class="btn btn-success"
                                                        onclick="location.reload();">Go to Dashboard</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')


    <script src="assets/js/form/stepper.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
