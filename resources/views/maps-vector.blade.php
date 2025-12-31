@extends('partials.layouts.master')

@section('title', 'Vector Maps | FabKin Admin & Dashboards Template')

@section('title-sub', 'Maps')
@section('pagetitle', 'Vector Maps')

@section('css')
    <!-- plugin css -->
    <link rel="stylesheet" type="text/css" href="assets/libs/jsvectormap/jsvectormap.min.css">
@endsection

@section('content')
    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">World Map Markers</h5>
                    </div>
                    <div class="card-body">
                        <div id="world-map" class="min-h-320px"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">World Map With Marker Lines</h5>
                    </div>
                    <div class="card-body">
                        <div id="world-map-markers-line" class="min-h-320px"></div>
                    </div>
                </div>
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world.js"></script>

    <!-- vector-maps init -->
    <script src="assets/js/map/vector-maps.init.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
