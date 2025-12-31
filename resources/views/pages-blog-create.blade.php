@extends('partials.layouts.master')

@section('title', 'Blog Details | FabKin Admin & Dashboards Template')
@section('title-sub', 'Page')
@section('pagetitle', 'Blog Create')

@section('css')
    <!-- Editor css -->
    <link rel="stylesheet" href="assets/libs/quill/quill.snow.css">
    <!-- Select css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <!-- Uploaded css -->
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
                    <div class="card-header">
                        <h6 class="card-title">New Blog</h6>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="row g-5">
                                <div class="col-12 col-xl-6">
                                    <label for="blogTitle" class="form-label">Blog Title<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" placeholder="Blog Title" class="form-control" id="blogTitle"
                                        required>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label for="default-choice" class="form-label">Blog Category</label>
                                    <select id="default-choice">
                                        <option value="python">Web Development</option>
                                        <option value="javascript">Technology</option>
                                        <option value="csharp">Marketing</option>
                                        <option value="java">Lifestyle</option>
                                        <option value="ruby">Ruby</option>
                                    </select>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label for="blogAuthor" class="form-label">Blog Author<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" placeholder="Enter Name" class="form-control" id="blogAuthor"
                                        required>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label for="choices-default-multiple" class="form-label">Blog Tags</label>
                                    <select id="choices-default-multiple" multiple>
                                        <option value="react">Social Media Marketing</option>
                                        <option value="Marketing">Digital Marketing</option>
                                        <option value="Business">Online Business</option>
                                        <option value="Startups">Startups</option>
                                    </select>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <label for="human-friendly-picker" class="form-label">Publish Date</label>
                                    <input type="text" class="form-control" id="human-friendly-picker"
                                        placeholder="Select a date">
                                </div>
                                <div class="col-12 col-xl-4">
                                    <label for="choices-publish-status" class="form-label">Publish Status</label>
                                    <select id="choices-publish-status">
                                        <option value="pending-review">Pending</option>
                                        <option value="published">Published</option>
                                        <option value="scheduled">Scheduled</option>
                                    </select>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <label for="choices-blog-visibility" class="form-label">Blog Visibility</label>
                                    <select id="choices-blog-visibility">
                                        <option value="pending-review">Public</option>
                                        <option value="published">Private</option>
                                        <option value="scheduled">Password Protected</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <label for="BlogExcerpt" class="form-label">Blog Excerpt<span
                                            class="text-danger ms-1">*</span></label>
                                    <textarea name="forsummary" id="BlogExcerpt" rows="4" class="form-control" placeholder="Write short summary..."></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <label for="snowEditor" class="form-label">Blog Content</label>
                                    <div id="snowEditor"></div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="my-dropzone" class="form-label">Blog Image</label>
                                    <div class="file-upload dropzone " id="my-dropzone"></div>
                                </div>
                                <div class="col-lg-12 justify-content-end d-flex gap-3 mt-6">
                                    <button class="btn btn-light-light text-body">Save as Draft</button>
                                    <button class="btn btn-primary">Publish Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </main>
@endsection

@section('js')

    <!-- Editor js -->
    <script src="assets/libs/quill/quill.js"></script>

    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Uploaded js -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>

    <script src="assets/js/form/form-editor.init.js"></script>

    <script src="assets/js/form/file-upload.init.js"></script>

    <script src="assets/js/pages/blog-crate.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

@endsection
