@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'CMS')
@section('pagetitle', 'Add Content')
@section('css')
    <!-- Editor css -->
    <link rel="stylesheet" href="assets/libs/quill/quill.snow.css">
    <!-- Select css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <!-- Uploaded css -->
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css">
@endsection

@section('content')



    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Add Content</h6>
                        <a href="apps-cms-content" class="btn btn-light-light text-muted"><i
                                class="bi bi-arrow-left me-1"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <label for="contentTitle" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="contentTitle"
                                        placeholder="Enter content title">
                                </div>
                                <div class="col-xl-6">
                                    <label for="AuthorName" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="AuthorName"
                                        placeholder="Enter Author Name">
                                </div>
                                <div class="col-12">
                                    <div id="snowEditor"></div>
                                </div>
                                <h6 class="mb-0">Custom Field</h6>
                                <div class="col-xl-6">
                                    <label for="Fieldstitle" class="form-label">Fields Title</label>
                                    <input type="text" class="form-control" id="Fieldstitle"
                                        placeholder="Enter Fields title">
                                </div>
                                <div class="col-xl-6">
                                    <label for="FieldsValue" class="form-label">Fields Value</label>
                                    <input type="text" class="form-control" id="FieldsValue"
                                        placeholder="Enter Fields Value">
                                </div>
                                <h6 class="mb-0">Seo</h6>
                                <div class="col-xl-6">
                                    <label for="Pagetitle" class="form-label">Page Title</label>
                                    <input type="text" class="form-control" id="Pagetitle"
                                        placeholder="Enter Page title">
                                </div>
                                <div class="col-xl-6">
                                    <label for="Keywords" class="form-label">Keywords</label>
                                    <input type="text" class="form-control" id="Keywords" placeholder="Enter Keywords">
                                </div>
                                <div class="col-12">
                                    <label for="Descriptions" class="form-label">Descriptions</label>
                                    <textarea name="description" id="Descriptions" rows="4" class="form-control" placeholder="Enter Descriptions.."></textarea>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card position-sticky" style="top: 100px;">
                    <div class="card-header">
                        <h6>Add Content</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-12">
                                <label for="AttributesTitle" class="form-label">Title</label>
                                <select id="AttributesTitle">
                                    <option value="javascript">Privacy Policy</option>
                                    <option value="python">Contact Us</option>
                                    <option value="java">Important Information</option>
                                    <option value="csharp">Free Shipping</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="PageType" class="form-label">Content Type</label>
                                <select id="PageType">
                                    <option value="javascript">Page</option>
                                    <option value="python">Widget</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="Keywords1" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="Keywords1"
                                    placeholder="http://localhost:3000/apps-cms-add-content">
                            </div>
                            <div class="col-12">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" class="form-select">
                                    <option value="published">Published</option>
                                    <option value="draft">Draft</option>
                                    <option value="trash">Trash</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="visibility" class="form-label">Visibility</label>
                                <select id="visibility" class="form-select">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="hidden">Hidden</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" rows="5" placeholder="Write your content here..."></textarea>
                            </div>
                            <div class="col-12">
                                <label for="featured-image" class="form-label">Featured Image</label>
                                <input class="form-control" type="file" id="featured-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Submit Section -->
    </main>
@endsection

@section('js')

    <!-- Editor js -->
    <script src="assets/libs/quill/quill.js"></script>
    <script src="assets/js/form/form-editor.init.js"></script>

    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app/academy-cms-add-content.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>

@endsection
