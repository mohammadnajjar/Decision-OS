@extends('partials.layouts.master')

@section('title', 'UI Navbar | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Navbar')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Navbar with sub-component </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="javascript:void(0)">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-outline-primary" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                        <!-- end:: Default Navbar -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Brand Image and text </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <nav class="navbar bg-body-tertiary mb-3">
                            <div class="container-fluid">
                                <a aria-label="anchor" class="navbar-brand" href="javascript:void(0)">
                                    <img src="https://spruko.com/demo/xintra/dist/assets/images/brand-logos/toggle-logo.png"
                                        alt="Toggle Image">
                                </a>
                            </div>
                        </nav>
                        <nav class="navbar bg-body-tertiary mb-3">
                            <div class="container-fluid">
                                <span class="navbar-brand mb-0 h1">Navbar</span>
                            </div>
                        </nav>
                        <nav class="navbar bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="javascript:void(0)">
                                    <img src="https://spruko.com/demo/xintra/dist/assets/images/brand-logos/toggle-logo.png"
                                        alt="Logo" class="d-inline-block align-text-middle">
                                    Bootstrap
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Nav with lists and links. </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="javascript:void(0)">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Solid Color Schemes </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body mb-3" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="javascript:void(0)">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="javascript:void(0)">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Brand Image and text </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="container mb-5">
                            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                                </div>
                            </nav>
                        </div>
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-md">
                                <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Brand Image and text </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <nav class="navbar sticky-bottom bg-body-tertiary">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="javascript:void(0)">Sticky top</a>
                            </div>
                        </nav>
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
@endsection
