@extends('partials.layouts.master')

@section('title', 'Add Product | FabKin Admin & Dashboards Template')
@section('title-sub', 'Add Product')
@section('pagetitle', 'Calendar')
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


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-12">
                                <label class="form-label" for="product-name-add">Product Name</label>
                                <input placeholder="Name" type="text" id="product-name-add" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="product-description-add">Product Description</label>
                                <textarea class="form-control" rows="3" placeholder="Description..." id="floatingTextarea"></textarea>
                            </div>

                            <div class="col-xl-6">
                                <div>
                                    <div class="tab-content" id="default-select">
                                        <div class="tab-pane fade show active" id="html-default-select" role="tabpanel"
                                            aria-labelledby="html-default-select-tab" tabindex="0">
                                            <label class="form-label" for="product-size-add">Size</label>
                                            <select class="form-select" id="form-select-01" name="form-select-01"
                                                aria-label="Default select example">
                                                <option selected>Select</option>
                                                <option value="1">Extra Small</option>
                                                <option value="2">Small</option>
                                                <option value="3">Medium</option>
                                                <option value="4">Large</option>
                                                <option value="5">Extra Large</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="tab-content" id="default-select">
                                    <div class="tab-pane fade show active" id="html-default-select" role="tabpanel"
                                        aria-labelledby="html-default-select-tab" tabindex="0">
                                        <label class="form-label" for="product-size-add">Brand</label>
                                        <select class="form-select" id="form-select-01" name="form-select-01"
                                            aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">Titan</option>
                                            <option value="2">Gucci</option>
                                            <option value="3">Nike</option>
                                            <option value="4">Adidas</option>
                                            <option value="5">Zara</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="tab-content" id="default-select">
                                    <div class="tab-pane fade show active" id="html-default-select" role="tabpanel"
                                        aria-labelledby="html-default-select-tab" tabindex="0">
                                        <label class="form-label" for="product-size-add">Category</label>
                                        <select class="form-select" id="form-select-01" name="form-select-01"
                                            aria-label="Default select example">
                                            <option selected>Category</option>
                                            <option value="1">Fashion</option>
                                            <option value="2">Kitchen</option>
                                            <option value="3">Electric</option>
                                            <option value="4">Toys</option>
                                            <option value="5">Footwear</option>
                                            <option value="6">Children Wear</option>
                                            <option value="7">Grocery</option>
                                            <option value="8">Jewellery</option>
                                            <option value="9">Dining</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="tab-content" id="default-select">
                                    <div class="tab-pane fade show active" id="html-default-select" role="tabpanel"
                                        aria-labelledby="html-default-select-tab" tabindex="0">
                                        <label class="form-label" for="product-size-add">Gender</label>
                                        <select class="form-select" id="form-select-01" name="form-select-01"
                                            aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">All</option>
                                            <option value="2">Male</option>
                                            <option value="3">Female</option>
                                            <option value="4">General</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-cost-add">Add Colors</label>
                                <select id="choices-multiple-close-icon" multiple>
                                    <option value="gray">Gray</option>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                </select>
                            </div><!--End col-->

                            <div class="col-xl-6">
                                <label class="form-label" for="product-cost-add">Enter Cost</label>
                                <input placeholder="Cost" type="text" id="product-cost-add" class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-product-type-add">Product Type</label>
                                <input placeholder="Product-type" type="text" id="product-type-add"
                                    class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-weight-add">Item Weight</label>
                                <input placeholder="Weight" type="text" id="product-weight-add" class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-weight-add">Length</label>
                                <input placeholder="Weight" type="text" id="product-weight-add" class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-weight-add">Width</label>
                                <input placeholder="Weight" type="text" id="product-weight-add" class="form-control">
                            </div>

                            <div class="col-lg-12">
                                <div class="tab-content" id="default-select">
                                    <div class="tab-pane fade show active" id="html-default-select" role="tabpanel"
                                        aria-labelledby="html-default-select-tab" tabindex="0">
                                        <label class="form-label" for="product-size-add">Visibility</label>
                                        <select class="form-select" id="form-select-01" name="form-select-01"
                                            aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">Published</option>
                                            <option value="2">Schedule</option>
                                            <option value="3">Hidden</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-12">
                                <label for="prodcutImage" class="form-label">Product Images :</label>
                                <div class="file-upload dropzone" id="my-dropzone"></div>
                            </div>

                            <div class="col-12">
                                <label for="productfeatures" class="form-label">Product Features :</label>
                                <div id="snowEditor"></div>
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-price-add">Price :</label>
                                <input placeholder="Price" type="text" id="product-price-add" class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-compare-add">Compare at price :</label>
                                <input placeholder="Compare" type="text" id="product-compare-price"
                                    class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-discount-add">Discount(%) :</label>
                                <input placeholder="Discount" type="text" id="product-discount-price"
                                    class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label class="form-label" for="product-discount-add">Discount Type :</label>
                                <input placeholder="Discount Type" type="text" id="product-discount-price"
                                    class="form-control">
                            </div>

                            <div class="col-xl-6">
                                <label for="PublishDate" class="form-label">Publish Date</label>
                                <input type="text" class="form-control" id="human-friendly-picker"
                                    placeholder="Select a date">
                            </div>

                            <div class="col-xl-6 mt-xl-auto">
                                <div class="text-end">
                                    <button type="button" class="btn btn-light-primary">Discard</button>
                                    <a href="javascript:void(0)" role="button" class="btn btn-primary">Add Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <!-- Editor js -->
    <script src="assets/libs/quill/quill.js"></script>

    <!-- Uploaded js -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>

    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/js/form/forms-select.init.js"></script>

    <script src="assets/js/form/form-editor.init.js"></script>

    <script src="assets/js/form/file-upload.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
