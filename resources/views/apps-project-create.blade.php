@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Project')
@section('pagetitle', 'Create')

@section('css')
    <!-- Selector Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <!-- Editor  Css-->
    <link rel="stylesheet" href="assets/libs/quill/quill.snow.css">
    <!-- File Upload Css -->
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css">
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/submit-project" method="POST">
                            <div class="row g-5">
                                <div class="col-12">
                                    <label for="projectName" class="form-label">Project Title</label>
                                    <input type="text" class="form-control" id="projectName" name="projectName"
                                        placeholder="Enter project name" required>
                                </div>
                                <div class="col-12">
                                    <label for="projectDescription" class="form-label">Project Description</label>
                                    <div id="snowEditor"></div>
                                </div>

                                <div class="col-xl-6">
                                    <label for="human-friendly-picker1" class="form-label">Start Date</label>
                                    <input type="text" class="form-control" id="human-friendly-picker1"
                                        placeholder="Select a date">
                                </div>
                                <div class="col-xl-6">
                                    <label for="human-friendly-picker2" class="form-label">End Date</label>
                                    <input type="text" class="form-control" id="human-friendly-picker2"
                                        placeholder="Select a date">
                                </div>
                                <div class="col-xl-6">
                                    <label for="projectStatus" class="form-label">Project Status</label>
                                    <select class="form-select" id="projectStatus" name="projectStatus" required>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Pending">Pending</option>
                                        <option value="On Hold">On Hold</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <label for="priority" class="form-label">Priority</label>
                                    <select class="form-select" id="priority" name="priority" required>
                                        <option value="High">High</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Low">Low</option>
                                    </select>
                                </div>
                                <div class="col-xl-6">
                                    <label for="budget" class="form-label">Project Budget</label>
                                    <input type="number" class="form-control" id="budget" name="budget"
                                        placeholder="Enter budget" required>
                                </div>
                                <div class="col-xl-6">
                                    <label for="projectSize" class="form-label">Project Size</label>
                                    <select class="form-select" id="projectSize" name="projectSize" required>
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Big">Big</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="my-dropzone" class="form-label">Upload project file</label>
                                    <div class="file-upload dropzone" id="my-dropzone"></div>
                                </div>
                                <div class="col-12">
                                    <label for="assignedTo" class="form-label">Assigned To</label>
                                    <select class="form-select mb-3" id="assignedTo" name="assignedTo" required>
                                        <option value="Zara Lume">Zara Lume</option>
                                        <option value="Max Orion">Max Orion</option>
                                        <option value="Kael Drift">Kael Drift</option>
                                        <option value="Elara Vex">Elara Vex</option>
                                        <option value="Juno Wraith">Juno Wraith</option>
                                        <option value="Soren Thorne">Soren Thorne</option>
                                    </select>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar Image"
                                            class="avatar-md rounded-pill">
                                        <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Image"
                                            class="avatar-md rounded-pill">
                                        <img src="assets/images/avatar/avatar-9.jpg" alt="Avatar Image"
                                            class="avatar-md rounded-pill">
                                        <div
                                            class="h-36px w-36px rounded-pill bg-primary-subtle text-primary d-flex justify-content-center align-items-center">
                                            <i class="bi bi-plus-lg"></i></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mb-8 d-flex justify-content-end gap-3">
                    <button class="btn btn-light-primary">Cancel</button>
                    <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Create Project</button>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection

@section('js')

    <!-- Selector Js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Editor Js -->
    <script src="assets/libs/quill/quill.js"></script>
    <script src="assets/js/form/form-editor.init.js"></script>
    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>
    <!-- File Upload Js -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>
    <!-- File Js -->
    <script src="assets/js/app/project-create.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
