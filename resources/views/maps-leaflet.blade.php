@extends('partials.layouts.master')

@section('title', 'Leaflet Maps | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Leaflet Maps')
@section('css')
    <link rel="stylesheet" href="assets/libs/leaflet/leaflet.css">
@endsection

@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Leaflet Map</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="leaflet_map"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Map With Markers,circles and Polygons</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="leaflet_map_markers"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Map With Popup</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="leaflet_map_popup"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Map With Custom Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="leaflet_map_custom_icon"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Map With Custom pane</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="leaflet_map_custom_pane"></div>
                    </div>
                </div>
            </div>


        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <!--  Leaflet Maps plugins -->
    <script src="assets/libs/leaflet/leaflet.js"></script>

    <script src="assets/js/map/leaflet-map.init.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
