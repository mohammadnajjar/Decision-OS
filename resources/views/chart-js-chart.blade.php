@extends('partials.layouts.master2')

@section('title', 'ChartJs | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'ChartJs')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Basic line Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="eCommerceChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Bar Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="barChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">horizontal Bar Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="horizontalBarChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Polar Area Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="polarChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Pie Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="myPieChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Stacked Bar & Line Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="stackedLineChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Radar Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="radarChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Line Area Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="lineAreaChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>
            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Doughnut Chart</h6>
                    </div>
                    <div class="card-body">

                        <canvas class="chartjs" id="doughnutChart"></canvas>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/chart/chartjs.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
