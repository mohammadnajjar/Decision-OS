@extends('partials.layouts.master')

@section('title', 'UI Form Validation | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Form Validation')
@section('content')

    </head>
    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Input Form Validation</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <form class="needs-validation" novalidate>
                            <label for="userNameValidation01" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" id="userNameValidation01"
                                required>
                            <div class="invalid-feedback">
                                Username must be at least 1 characters.
                            </div>
                            <button class="btn btn-primary w-max mt-3" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Validation with tooltip</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <form class="needs-validation" novalidate>
                            <div class="position-relative">
                                <label for="userNameValidation02" class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Username" id="userNameValidation02"
                                    required>
                                <div class="invalid-tooltip">
                                    Username must be at least 1 characters.
                                </div>
                            </div>
                            <button class="btn btn-primary w-max mt-3" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom styles</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-xl-4">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" value="John" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Doe" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="validationCustom03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <label for="validationCustom04" class="form-label">State</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="State">Choose...</option>
                                    <option value="NY">New York</option>
                                    <option value="CA">California</option>
                                    <option value="TX">Texas</option>
                                    <option value="FL">Florida</option>
                                    <option value="IL">Illinois</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <label for="validationCustom05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="invalidCheck" id="invalidCheck"
                                        required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Browser defaults</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <form class="row g-3 needs-validation">
                            <div class="col-xl-4">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" value="John"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" value="Doe"
                                    required>
                            </div>
                            <div class="col-xl-4">
                                <label for="validationDefaultUsername" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                        aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="validationDefault03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationDefault03" required>
                            </div>
                            <div class="col-xl-3">
                                <label for="validationDefault04" class="form-label">State</label>
                                <select class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="State">Choose...</option>
                                    <option value="CA">California</option>
                                    <option value="NY">New York</option>
                                    <option value="TX">Texas</option>
                                    <option value="FL">Florida</option>
                                    <!-- Add more states as needed -->
                                </select>
                            </div>
                            <div class="col-xl-3">
                                <label for="validationDefault05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationDefault05" required>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="invalidCheck2"
                                        id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Server-side</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <form class="row g-3 needs-validation">
                            <div class="col-xl-4">
                                <label for="validationServer01" class="form-label">First name</label>
                                <input type="text" class="form-control is-valid" id="validationServer01"
                                    value="John" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <label for="validationServer02" class="form-label">Last name</label>
                                <input type="text" class="form-control is-valid" id="validationServer02"
                                    value="Smith" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <label for="validationServerUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                    <input type="text" class="form-control is-invalid" id="validationServerUsername"
                                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="validationServer03" class="form-label">City</label>
                                <input type="text" class="form-control is-invalid" id="validationServer03"
                                    aria-describedby="validationServer03Feedback" required>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <label for="validationServer04" class="form-label">State</label>
                                <select class="form-select is-invalid" id="validationServer04"
                                    aria-describedby="validationServer04Feedback" required>
                                    <option selected disabled value="invalidCheck2">Choose...</option>
                                    <option value="CA">California</option>
                                    <option value="NY">New York</option>
                                    <option value="TX">Texas</option>
                                    <option value="FL">Florida</option>
                                    <!-- Add more states as needed -->
                                </select>
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <label for="validationServer05" class="form-label">Zip</label>
                                <input type="text" class="form-control is-invalid" id="validationServer05"
                                    aria-describedby="validationServer05Feedback" required>
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input is-invalid" type="checkbox" value="invalidCheck3"
                                        id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Supported elements</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <form class="was-validated needs-validation">
                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Textarea</label>
                                <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a message in the textarea.
                                </div>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                                <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                                <div class="invalid-feedback">Example invalid feedback text</div>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="validationFormCheck2"
                                    name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3"
                                    name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck3">Or toggle this other
                                    radio</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" required aria-label="select example">
                                    <option value="menu">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                            </div>

                            <div class="mb-3">
                                <input type="file" class="form-control" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" disabled>Submit form</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tooltips </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-xl-4 position-relative">
                                <label for="validationTooltip01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01" value="Mark"
                                    required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-4 position-relative">
                                <label for="validationTooltip02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationTooltip02" value="Otto"
                                    required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-xl-4 position-relative">
                                <label for="validationTooltipUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    <input type="text" class="form-control" id="validationTooltipUsername"
                                        aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 position-relative">
                                <label for="validationTooltip03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationTooltip03" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-xl-3 position-relative">
                                <label for="validationTooltip04" class="form-label">State</label>
                                <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled>Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-xl-3 position-relative">
                                <label for="validationTooltip05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationTooltip05" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
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

    <script src="assets/js/form/form-validation.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
