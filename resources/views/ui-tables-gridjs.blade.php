@extends('partials.layouts.master')

@section('title', 'Grid JS Tables | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Grid JS Tables')
@section('css')
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">
@endsection
@section('content')

    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Basic Table </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->

                        <div id="gridjs_basic-table"></div>

                        <!-- end:: Default Navbar -->

                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table With Sorting </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->

                        <div id="gridjs_sort-table"></div>

                        <!-- end:: Default Navbar -->

                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table With Pagination </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->

                        <div id="gridjs_pagination-table"></div>

                        <!-- end:: Default Navbar -->

                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table With Search </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->

                        <div id="gridjs_search-table"></div>

                        <!-- end:: Default Navbar -->

                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table Loading </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->

                        <div id="gridjs_loading-table"></div>

                        <!-- end:: Default Navbar -->

                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Fixed Header </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Default Navbar -->

                        <div id="gridjs_fixed-header-table"></div>

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


    <script src="assets/libs/gridjs/gridjs.umd.js" type="text/javascript"></script>
    <script src="assets/js/ui/gridjs.init.js" type="text/javascript"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
