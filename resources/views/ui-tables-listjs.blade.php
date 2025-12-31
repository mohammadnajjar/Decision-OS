@extends('partials.layouts.master')

@section('title', 'List JS Tables | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'List JS Tables')
@section('content')
    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Data Attributes + Custom </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->
                        <div id="users">
                            <div class="input-group">
                                <input class="search form-control" placeholder="Search" />
                                <button class="sort btn btn-light" data-sort="name">
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                            <ul class="list-group list fs-13 fw-medium mt-3">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Jonny Stromberg">Jonny Stromberg</p>
                                            <p class="m-0 email text-muted" data-email="jonny@example.com">jonny@example.com
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Jonas Arnklint">Jonas Arnklint</p>
                                            <p class="m-0 email text-muted" data-email="jonas@example.com">jonas@example.com
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Martina Elm">Martina Elm</p>
                                            <p class="m-0 email text-muted" data-email="martina@example.com">
                                                martina@example.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Gustaf Lindqvist">Gustaf Lindqvist
                                            </p>
                                            <p class="m-0 email text-muted" data-email="gustaf@example.com">
                                                gustaf@example.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Sophia Andersson">Sophia Andersson
                                            </p>
                                            <p class="m-0 email text-muted" data-email="sophia@example.com">
                                                sophia@example.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Liam Johansson">Liam Johansson</p>
                                            <p class="m-0 email text-muted" data-email="liam@example.com">liam@example.com
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-7.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Emma Bergström">Emma Bergström</p>
                                            <p class="m-0 email text-muted" data-email="emma@example.com">emma@example.com
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-8.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Noah Eriksson">Noah Eriksson</p>
                                            <p class="m-0 email text-muted" data-email="noah@example.com">noah@example.com
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar-md" src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                        <div>
                                            <p class="m-0 name fw-semibold" data-name="Olivia Karlsson">Olivia Karlsson</p>
                                            <p class="m-0 email text-muted" data-email="olivia@example.com">
                                                olivia@example.com</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-group list no-results" style="display: none;">
                                <li class="list-group-item text-muted">No data found</li>
                            </ul>
                        </div>
                        <!-- end:: Default Navbar -->
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Existing list </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->
                        <div id="existinglist">
                            <div class="input-group">
                                <input class="search form-control" placeholder="Search" />
                                <button class="sort btn btn-light" data-sort="name">
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                            <ul class="list-group list fs-13 fw-medium mt-3">
                                <li class="list-group-item">
                                    <p class="m-0 name fw-semibold">Jonny Stromberg</p>
                                    <p class="m-0 email text-muted">jonny@example.com</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="m-0 name fw-semibold">Jonas Arnklint</p>
                                    <p class="m-0 email text-muted">jonas@example.com</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="m-0 name fw-semibold">Martina Elm</p>
                                    <p class="m-0 email text-muted">martina@example.com</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="m-0 name fw-semibold">Gustaf Lindqvist</p>
                                    <p class="m-0 email text-muted">gustaf@example.com</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="m-0 name fw-semibold">Sophia Andersson</p>
                                    <p class="m-0 email text-muted">sophia@example.com</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="m-0 name fw-semibold">Liam Johansson</p>
                                    <p class="m-0 email text-muted">liam@example.com</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="m-0 name fw-semibold">Emma Bergström</p>
                                    <p class="m-0 email text-muted">emma@example.com</p>
                                </li>
                            </ul>
                            <ul class="list-group list no-results" style="display: none;">
                                <li class="list-group-item text-muted">No data found</li>
                            </ul>
                        </div>
                        <!-- end:: Default Navbar -->
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Fuzzy search </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->
                        <div id="test-list">
                            <div class="input-group">
                                <input class="search form-control" placeholder="Search" />
                                <button class="sort btn btn-light" data-sort="name">
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                            <ul class="list-group list fs-13 fw-medium mt-3">
                                <li class="list-group-item">
                                    <p class="name mb-0">Guybrush Threepwood</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Elaine Marley</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">LeChuck</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Stan</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Voodoo Lady</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Herman Toothrot</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Meathook</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Carla</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Otis</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Rapp Scallion</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Rum Rogers Sr.</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Men of Low Moral Fiber</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Murray</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="name mb-0">Cannibals</p>
                                </li>
                            </ul>
                            <ul class="list-group list no-results" style="display: none;">
                                <li class="list-group-item text-muted">No data found</li>
                            </ul>
                        </div>
                        <!-- end:: Default Navbar -->
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> New list </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->
                        <div id="new-list">
                            <div class="input-group">
                                <input class="search form-control" placeholder="Search" />
                                <button class="sort btn btn-light" data-sort="name">
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                            <ul class="list-group list fs-13 fw-medium mt-3"></ul>
                            <ul class="list-group list no-results" style="display: none;">
                                <li class="list-group-item text-muted">No data found</li>
                            </ul>
                        </div>
                        <!-- end:: Default Navbar -->
                    </div>
                </div>
                <!--end::card-->
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')


    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/js/ui/listjs.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
