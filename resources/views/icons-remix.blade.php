@extends('partials.layouts.master')

@section('title', 'Remix Icons | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Remix Icons')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Remix Icons
                        </h5>
                        <p class="card-title-desc text-muted mb-0">
                            Easily incorporate icons into your project. Use <code>&lt;i
                                class="ri-ICONNAME"&gt;&lt;/i&gt;</code> to display any icon from the list below.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="row mb-5 pb-1">
                            <div class="col-md-5 mx-auto">
                                <div class="form-icon right">
                                    <input type="text" class="form-control form-control-icon" id="iconSearch"
                                        placeholder="Type to search ...">
                                    <i class="ri-search-2-line text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <div class="icon-list" id="iconList"></div>
                        <div class="p-3 border border-primary-subtle bg-primary-subtle rounded mt-5">
                            <div class="row">
                                <div class="col">
                                    <h5 class="text-primary mb-2">Remix Icons</h5>
                                    <p class="text-muted mb-0 text-sm">Open-source neutral-style system symbols elaborately
                                        crafted for designers and developers.
                                        All of the icons are free for both personal and commercial use.</p>
                                </div> <!--end col-->
                                <div class="col-auto align-self-center">
                                    <a href="https://remixicon.com" target="_blank" type="button"
                                        class="btn btn-primary">View All Icons</a>
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div>
                        <div class="alert alert-solid-primary fade show position-fixed mx-auto" id="copyAlert"
                            role="alert">
                            <strong class="fw-semibold">Add to Collection</strong>
                        </div>
                    </div>
                </div>

            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <script src="assets/js/icon/icons-remix.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
