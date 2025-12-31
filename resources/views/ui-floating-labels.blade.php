@extends('partials.layouts.master')

@section('title', 'UI Floating Labels | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Floating Labels')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Basic Floating Label</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Floating Label With Values</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <form>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputValue"
                                    placeholder="name@example.com" value="test@example.com">
                                <label for="floatingInputValue">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingInputValue2" placeholder="Password"
                                    value="123456">
                                <label for="floatingInputValue2">Password</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Invalid Floating Label</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <form>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control is-invalid" id="floatingInputInvalid"
                                    placeholder="name@example.com" value="test@example.com">
                                <label for="floatingInputInvalid">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control is-invalid" id="floatingInputInvalid2"
                                    placeholder="Password" value="123456">
                                <label for="floatingInputInvalid2">Password</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Readonly plaintext</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <div class="form-floating mb-3">
                            <input type="email" readonly class="form-control-plaintext" id="floatingEmptyPlaintextInput"
                                placeholder="name@example.com">
                            <label for="floatingEmptyPlaintextInput">Empty input</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" readonly class="form-control-plaintext" id="floatingPlaintextInput"
                                placeholder="name@example.com" value="name@example.com">
                            <label for="floatingPlaintextInput">Input with value</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Floating Textarea</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Floating Select</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Works with selects</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Floating Input groups</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <div class="input-group mb-3">
                            <span class="input-group-text">@</span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1"
                                    placeholder="Username">
                                <label for="floatingInputGroup1">Username</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Floating Input groups</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the fields below to enter a date. Please follow the specified format
                            for each field:</p>

                        <div class="floating-input mb-3">
                            <input type="email" class="form-control form-control-sm" id="floating-input-sm"
                                placeholder="name@example.com">
                            <label for="floating-input-sm">Email address</label>
                        </div>
                        <div class="floating-input mb-3">
                            <input type="email" class="form-control" id="floating-input"
                                placeholder="name@example.com">
                            <label for="floating-input">Email address</label>
                        </div>
                        <div class="floating-input mb-3">
                            <input type="email" class="form-control form-control-lg" id="floating-input-lg"
                                placeholder="name@example.com">
                            <label for="floating-input-lg">Email address</label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')


    <script type="module" src="assets/js/app.js"></script>
@endsection
