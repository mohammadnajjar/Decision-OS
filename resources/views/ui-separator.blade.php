@extends('partials.layouts.master')

@section('title', 'UI Separator | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Separator')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic Horizontal Row</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-horizontal-row" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-horizontal-row" type="button" role="tab"
                                    aria-controls="html-basic-horizontal-row" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-horizontal-row" type="button" role="tab"
                                    aria-controls="preview-basic-horizontal-row   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="basic-horizontal-rowContent">
                            <div class="tab-pane fade show active" id="html-basic-horizontal-row" role="tabpanel"
                                aria-labelledby="html-basic-horizontal-row-tab" tabindex="0">
                                <div>
                                    <p>Welcome to FabKin! Here, you'll find a wealth of information and resources designed
                                        to enhance your experience.</p>
                                    <hr>
                                    <p>Explore our latest updates and discover exciting opportunities that await you.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-basic-horizontal-row" role="tabpanel"
                                aria-labelledby="preview-basic-horizontal-row-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div&gt;
    &lt;p&gt;Welcome to FabKin! Here, you'll find a wealth of information and resources designed to enhance your experience.&lt;/p&gt;
    &lt;hr&gt;
    &lt;p&gt;Explore our latest updates and discover exciting opportunities that await you.&lt;/p&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Horizontal Row Styles</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="styles-horizontal-row" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-styles-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-styles-horizontal-row" type="button" role="tab"
                                    aria-controls="html-styles-horizontal-row" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-styles-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-styles-horizontal-row" type="button" role="tab"
                                    aria-controls="preview-styles-horizontal-row   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="styles-horizontal-rowContent">
                            <div class="tab-pane fade show active" id="html-styles-horizontal-row" role="tabpanel"
                                aria-labelledby="html-styles-horizontal-row-tab" tabindex="0">
                                <hr class="mb-5 border-danger border-dashed">
                                <hr class="mt-5 border-primary border-dashed">
                            </div>
                            <div class="tab-pane fade" id="preview-styles-horizontal-row" role="tabpanel"
                                aria-labelledby="preview-styles-horizontal-row-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;hr class=&quot;mb-5 border-danger border-dashed&quot;&gt;
&lt;hr class=&quot;mt-5 border-primary border-dashed&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Horizontal Row Colors</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colors-horizontal-row" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colors-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colors-horizontal-row" type="button" role="tab"
                                    aria-controls="html-colors-horizontal-row" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colors-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colors-horizontal-row" type="button" role="tab"
                                    aria-controls="preview-colors-horizontal-row   "
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="colors-horizontal-rowContent">
                            <div class="tab-pane fade show active" id="html-colors-horizontal-row" role="tabpanel"
                                aria-labelledby="html-colors-horizontal-row-tab" tabindex="0">
                                <hr class="mb-5">
                                <hr class="my-5 border-primary">
                                <hr class="my-5 border-secondary">
                                <hr class="my-5 border-success">
                                <hr class="mt-5 border-info">
                                <hr class="mt-5 border-warning">
                                <hr class="mt-5 border-danger">
                                <hr class="mt-5 border-dark">
                            </div>
                            <div class="tab-pane fade" id="preview-colors-horizontal-row" role="tabpanel"
                                aria-labelledby="preview-colors-horizontal-row-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;hr class=&quot;mb-5&quot;&gt;
&lt;hr class=&quot;my-5 border-primary&quot;&gt;
&lt;hr class=&quot;my-5 border-secondary&quot;&gt;
&lt;hr class=&quot;my-5 border-success&quot;&gt;
&lt;hr class=&quot;mt-5 border-info&quot;&gt;
&lt;hr class=&quot;mt-5 border-warning&quot;&gt;
&lt;hr class=&quot;mt-5 border-danger&quot;&gt;
&lt;hr class=&quot;mt-5 border-dark&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Horizontal Row Sizes</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizes-horizontal-row"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizes-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizes-horizontal-row" type="button" role="tab"
                                    aria-controls="html-sizes-horizontal-row" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizes-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizes-horizontal-row" type="button" role="tab"
                                    aria-controls="preview-sizes-horizontal-row   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="sizes-horizontal-rowContent">
                            <div class="tab-pane fade show active" id="html-sizes-horizontal-row" role="tabpanel"
                                aria-labelledby="html-sizes-horizontal-row-tab" tabindex="0">
                                <hr class="mb-5">
                                <hr class="my-5 border-2">
                                <hr class="my-5 border-3">
                                <hr class="my-5 border-4">
                                <hr class="mt-5 border-5">
                            </div>
                            <div class="tab-pane fade" id="preview-sizes-horizontal-row" role="tabpanel"
                                aria-labelledby="preview-sizes-horizontal-row-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;hr class=&quot;mb-5&quot;&gt;
&lt;hr class=&quot;my-5 border-2&quot;&gt;
&lt;hr class=&quot;my-5 border-3&quot;&gt;
&lt;hr class=&quot;my-5 border-4&quot;&gt;
&lt;hr class=&quot;mt-5 border-5&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Horizontal Row Content</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="content-horizontal-row"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-content-horizontal-row-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-content-horizontal-row" type="button"
                                    role="tab" aria-controls="html-content-horizontal-row"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-content-horizontal-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-content-horizontal-row" type="button" role="tab"
                                    aria-controls="preview-content-horizontal-row   "
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="content-horizontal-rowContent">
                            <div class="tab-pane fade show active" id="html-content-horizontal-row" role="tabpanel"
                                aria-labelledby="html-content-horizontal-row-tab" tabindex="0">
                                <div class="center-hr my-5">FabKin</div>
                                <div class="center-hr mb-5 hr-secondary"><span class="h1 m-0">FabKin</span></div>
                                <div class="center-hr mb-5 hr-primary border-dashed"><span
                                        class="min-w-256px fw-bold">Long separator title label</span></div>
                            </div>
                            <div class="tab-pane fade" id="preview-content-horizontal-row" role="tabpanel"
                                aria-labelledby="preview-content-horizontal-row-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;center-hr my-5&quot;&gt;FabKin&lt;/div&gt;
&lt;div class=&quot;center-hr mb-5 hr-secondary&quot;&gt;&lt;span class=&quot;h1 m-0&quot;&gt;FabKin&lt;/span&gt;&lt;/div&gt;
&lt;div class=&quot;center-hr mb-5 hr-primary border-dashed&quot;&gt;&lt;span class=&quot;min-w-256px fw-bold&quot;&gt;Long separator title label&lt;/span&gt;&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic Vertical Row</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-vertical-row" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-vertical-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-vertical-row" type="button" role="tab"
                                    aria-controls="html-basic-vertical-row" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-vertical-row-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-vertical-row" type="button" role="tab"
                                    aria-controls="preview-basic-vertical-row   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="basic-vertical-rowContent">
                            <div class="tab-pane fade show active" id="html-basic-vertical-row" role="tabpanel"
                                aria-labelledby="html-basic-vertical-row-tab" tabindex="0">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3">Left Content</span>
                                        <div class="vr bg-light"></div>
                                        <span class="mx-3">Right Content</span>
                                    </div>
                                    <div class="ms-auto d-flex align-items-center">
                                        <div class="vr bg-primary"></div>
                                        <span class="mx-3">Right Content</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-basic-vertical-row" role="tabpanel"
                                aria-labelledby="preview-basic-vertical-row-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex align-items-center gap-5&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center&quot;&gt;
        &lt;span class=&quot;mx-3&quot;&gt;Left Content&lt;/span&gt;
        &lt;div class=&quot;vr bg-light&quot;&gt;&lt;/div&gt;
        &lt;span class=&quot;mx-3&quot;&gt;Right Content&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;ms-auto d-flex align-items-center&quot;&gt;
        &lt;div class=&quot;vr bg-primary&quot;&gt;&lt;/div&gt;
        &lt;span class=&quot;mx-3&quot;&gt;Right Content&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
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
    <script src="assets/libs/prismjs/prism.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
