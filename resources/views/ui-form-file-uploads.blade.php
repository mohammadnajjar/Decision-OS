@extends('partials.layouts.master')

@section('title', 'UI File Upload | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'File Upload')
@section('css')
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css">
@endsection
@section('content')

    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Basic File Upload</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to upload a file. Only images (JPG, PNG, GIF) up to 2MB
                            are allowed.</p>
                        <div>
                            <label for="formFile" class="form-label">Upload your file</label>
                            <input class="form-control" type="file" id="formFile">
                            <small id="fileError" class="text-danger mt-2 d-block"></small>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Avatar uploader 1</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to upload your avatar.</p>
                        <div class="d-flex align-items-center flex-wrap gap-3" data-uploader>
                            <div class="avatar-item avatar-xl">
                                <img class="img-fluid avatar-xl" alt="avatar image"
                                    data-default-src="assets/images/avatar/avatar-2.jpg" data-action="avatar-image">
                            </div>
                            <div class="file-upload">
                                <button type="button" class="btn btn-primary" data-action="choose-file">
                                    Choose File
                                </button>
                                <input class="file-upload-item" type="file" accept="image/*" data-action="file-input">
                            </div>
                            <button class="btn btn-outline-primary" data-action="delete-image">Delete</button>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">File Upload with Button</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to upload a file. Only images (JPG, PNG, GIF) up to 2MB
                            are allowed.</p>

                        <div class="d-flex flex-wrap gap-3 align-items-center mb-5">
                            <div class="file-upload">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-upload-2-line me-2"></i> Choose File
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                            <div class="file-upload">
                                <button type="button" class="btn btn-success">
                                    Choose File <i class="ri-upload-2-line ms-2"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                            <div class="file-upload">
                                <button type="button" class="btn btn-outline-primary">
                                    Choose File <i class="ri-upload-2-line ms-2"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-3 align-items-center mb-5">
                            <div class="file-upload">
                                <button type="button" class="btn btn-light-primary rounded-pill icon-btn">
                                    <i class="ri-upload-2-line"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                            <div class="file-upload">
                                <button type="button" class="btn btn-outline-danger rounded-pill icon-btn">
                                    <i class="ri-upload-2-line"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                            <div class="file-upload">
                                <button type="button" class="btn btn-primary rounded-pill icon-btn">
                                    <i class="ri-upload-2-line"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-3 align-items-center">
                            <div class="file-upload">
                                <button type="button" class="btn btn-outline-primary rounded-pill icon-btn-lg">
                                    <i class="ri-upload-2-line"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                            <div class="file-upload">
                                <button type="button" class="btn btn-outline-primary rounded-pill icon-btn">
                                    <i class="ri-upload-2-line"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                            <div class="file-upload">
                                <button type="button" class="btn btn-outline-primary rounded-pill icon-btn-sm">
                                    <i class="ri-upload-2-line"></i>
                                </button>
                                <input class="file-upload-item" type="file">
                                <small class="file-error text-danger mt-2 d-block"></small>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Avatar uploader 2</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to upload your avatar.</p>
                        <div class="file-upload dropzone" id="my-dropzone"></div>
                    </div>
                </div>
            </div><!--End col-->

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <script src="assets/js/form/file-upload.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
