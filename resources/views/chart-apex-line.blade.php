@extends('partials.layouts.master2')

@section('title', 'Apex Line | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Apex Line')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12 col-md-6 col-xl-4">
                <!--start::card-->
                <div class="card card-h-100">

                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Basic Pie Chart</h6>
                    </div>
                    <div class="card-body">

                        <div id="basic_pie_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Donut Chart</h6>
                    </div>
                    <div class="card-body">

                        <div id="donut_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Basic Radar Chart</h6>
                    </div>
                    <div class="card-body px-0">

                        <div id="radar_charts" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Radar Multiple Chart</h6>
                    </div>
                    <div class="card-body">

                        <div id="radar_multiple_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Radialbar Chart</h6>
                    </div>
                    <div class="card-body">

                        <div id="radialbar_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Multiple Radialbar Chart</h6>
                    </div>
                    <div class="card-body">

                        <div id="multiple_radialbars_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100 d-flex flex-column justify-content-between overflow-hidden">
                    <!--start::card-->
                    <div class="card-body">

                        <div id="basic_line_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100 d-flex flex-column justify-content-between overflow-hidden">
                    <!--start::card-->
                    <div class="card-body">

                        <div id="line_with_data_label" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100 d-flex flex-column justify-content-between overflow-hidden">
                    <!--start::card-->
                    <div class="card-body">

                        <div id="step_line_line_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100 d-flex flex-column justify-content-between overflow-hidden">
                    <!--start::card-->
                    <div class="card-body">

                        <div id="dashedChart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="apex-line-chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="spline_area_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div class="toolbar">
                            <button class="btn btn-sm btn-outline-secondary" id="one_month">
                                1M
                            </button>

                            <button class="btn btn-sm btn-outline-secondary" id="six_months">
                                6M
                            </button>

                            <button class="btn btn-sm btn-outline-secondary" id="one_year">
                                1Y
                            </button>

                            <button class="btn btn-sm btn-outline-secondary" id="ytd">
                                YTD
                            </button>

                            <button class="btn btn-sm btn-outline-secondary" id="all">
                                ALL
                            </button>
                        </div>

                        <div id="datetime_xaxis_area_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="basic_column_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="column_with_label" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="dumbbell_column_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="basic_bar_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="negative_bar_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="line_column_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="funnel_chart" class="apexcharts-container"></div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <!--start::card-->
                <div class="card card-h-100">
                    <div class="card-body">

                        <div id="candlestick_chart" class="apexcharts-container"></div>

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

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/chart/apexcharts-line.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
