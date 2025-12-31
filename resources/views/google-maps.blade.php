@extends('partials.layouts.master')

@section('title', 'Google Maps | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Google Maps')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Basic Map</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="basic_gmap"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Map With Marker</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="gmap_with_marker"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Map With Overlays</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="gmap_with_overlays"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Map Type</h5>
                    </div>
                    <div class="card-body">
                        <div class="w-100 min-h-320px" id="gmap_map_type"></div>
                    </div>
                </div>
            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <!-- google maps api -->
    <script src="http://maps.google.com/maps/api/js"></script>

    <script src="assets/libs/gmaps/gmaps.min.js"></script>
    <script src="assets/js/map/google-map.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
