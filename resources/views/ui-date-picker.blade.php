@extends('partials.layouts.master')

@section('title', 'UI Columns | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Columns')
@section('css')
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection

@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Basic Date Picker</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a basic date picker by initializing Air Datepickr with <code>Air
                                Datepickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>
                        <input type="text" class="form-control" id="basic-picker" placeholder="Select a date">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Select date on initialization</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">For selecting initial date use option. <code>selectedDates</code></p>
                        <input type="text" class="form-control" id="select-initialization-piker"
                            placeholder="Select date on initialization">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Month selection</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">For choosing only month without any certain date you could use combination of
                            two options
                            <code>view</code> and <code>minView</code> - with first option we setting up current view of
                            calendar and with second we set minimal possible view.
                        </p>
                        <input type="text" class="form-control" id="month-selection-picker" placeholder="Month a date">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Mobile devices mode</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Air Datepicker has a mode that allows you to open the calendar as a modal
                            window - in this mode it appears in the center of the screen in slightly enlarged sizes to
                            facilitate date selection.</p>
                        <input type="text" class="form-control" id="mobile-devices-picker"
                            placeholder="Mobile Devices date">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Positioning</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Position of the calendar is set up by <code>position</code> option - it can be
                            either a string or a function.</p>
                        <input type="text" class="form-control" id="positioning-picker" placeholder="Positioning">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Range of dates</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">For choosing range of dates use parameter <code>{range:true}</code>. After
                            selecting both dates you could correct them by dragging active dates. </p>
                        <input type="text" class="form-control" id="range-picker" placeholder="Range Of Dates">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Timepicker</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Pass <code>{timepicker:true} </code>to be able to pick time. By default the
                            user's time is set. Start datetime value could be configured with parameter startDate.</p>
                        <input type="text" class="form-control" id="timepicker" placeholder="Timepicker">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Cells content</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Air Datepicker allows you to change cells content anyway you want. Content,
                            classes and status (active/disabled) are controlled by option <code>{onRenderCell:({date,
                                cellType})=>{})}.</code> </p>
                        <input type="text" class="form-control" id="cells-picker" placeholder="Select a date range">
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Preinstalled buttons</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">To add buttons, use the <code>buttons</code> option - it accepts an array of
                            strings or an array of objects with a description of the button.</p>
                        <input type="text" class="form-control" id="preinstalled-picker" placeholder="Preinstalled">
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>
    <script src="assets/js/ui/air-datepicker.init.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
