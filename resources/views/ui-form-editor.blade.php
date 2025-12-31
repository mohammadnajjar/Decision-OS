@extends('partials.layouts.master')

@section('title', 'UI Editor | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Editor')
@section('css')
    <link rel="stylesheet" href="assets/libs/quill/quill.core.css">
    <link rel="stylesheet" href="assets/libs/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/libs/quill/quill.snow.css">
@endsection
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Default Editor</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <div id="snowEditor">
                            <h3>Hello World!</h3>
                            <p>Some initial <strong>bold</strong> text</p>
                            <p><br /></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Bubble Editor</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a basic date picker by initializing Flatpickr with
                            <code>flatpickr("#basic-picker")</code> to allow users to select a single date from a calendar.
                        </p>

                        <div id="bubbleEditor">
                            <h3>Hello World!</h3>
                            <p>Some initial <strong>bold</strong> text</p>
                            <p><br /></p>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <script src="assets/libs/quill/quill.js"></script>
    <script src="assets/js/form/form-editor.init.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
