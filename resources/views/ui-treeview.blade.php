@extends('partials.layouts.master')

@section('title', 'UI Tree View | FabKin Admin & Dashboards Template')


@section('title-sub', 'Base UI')
@section('pagetitle', 'Tree View')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" />
@endsection
@section('content')



    <!--begin::App-->
    <div id="layout-wrapper">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Basic Example</h5>
                    </div>
                    <div class="card-body">
                        <div id="tree-container-2" class="tree"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Default Close</h5>
                    </div>
                    <div class="card-body">
                        <div id="tree-container-3" class="tree"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom Icons and Colors</h5>
                    </div>
                    <div class="card-body">
                        <div id="tree-container-1" class="tree"></div>
                    </div>
                </div>
            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')


    <script src="assets/js/ui/jstree.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
