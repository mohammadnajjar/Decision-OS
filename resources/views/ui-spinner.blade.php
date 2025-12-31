@extends('partials.layouts.master')

@section('title', 'UI Spinner | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Spinner')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />
@endsection
@section('content')

    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colors Spinner</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colors-spinner" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colors-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colors-spinner" type="button" role="tab"
                                    aria-controls="html-colors-spinner" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colors-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colors-spinner" type="button" role="tab"
                                    aria-controls="preview-colors-spinner   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">The border spinner uses <code>currentColor</code> for its
                            <code>border-color</code>, meaning you can customize the color with <a
                                href="https://getbootstrap.com/docs/5.3/utilities/colors/">text color utilities</a>. You can
                            use any of our text color utilities on the standard spinner.</p>
                        <div class="tab-content" id="colors-spinnerContent">
                            <div class="tab-pane fade show active" id="html-colors-spinner" role="tabpanel"
                                aria-labelledby="html-colors-spinner-tab" tabindex="0">
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-secondary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-danger" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-info" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-dark" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-colors-spinner" role="tabpanel"
                                aria-labelledby="preview-colors-spinner-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-secondary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-success&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-danger&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-warning&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-info&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-light&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-border text-dark&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Growing spinner</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="growing-spinner" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-growing-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-growing-spinner" type="button" role="tab"
                                    aria-controls="html-growing-spinner" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-growing-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-growing-spinner" type="button" role="tab"
                                    aria-controls="preview-growing-spinner   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">If you don’t fancy a border spinner, switch to the grow spinner. While it
                            doesn’t technically spin, it does repeatedly grow!</p>
                        <div class="tab-content" id="growing-spinnerContent">
                            <div class="tab-pane fade show active" id="html-growing-spinner" role="tabpanel"
                                aria-labelledby="html-growing-spinner-tab" tabindex="0">
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <div class="spinner-grow text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-light" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-dark" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-growing-spinner" role="tabpanel"
                                aria-labelledby="preview-growing-spinner-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;spinner-grow text-primary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-secondary&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-success&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-danger&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-warning&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-info&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-light&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;
&lt;div class=&quot;spinner-grow text-dark&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Button spinner</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="button-spinner" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-button-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-button-spinner" type="button" role="tab"
                                    aria-controls="html-button-spinner" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-button-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-button-spinner" type="button" role="tab"
                                    aria-controls="preview-button-spinner   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use spinners within buttons to indicate an action is currently processing or
                            taking place. </p>
                        <div class="tab-content" id="button-spinnerContent">
                            <div class="tab-pane fade show active" id="html-button-spinner" role="tabpanel"
                                aria-labelledby="html-button-spinner-tab" tabindex="0">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <button class="btn btn-primary icon-btn" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <span class="visually-hidden" role="status">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary text-primary bg-primary-subtle" type="button"
                                            disabled>
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <span class="ms-1" role="status">Loading...</span>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <button class="btn btn-danger icon-btn" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <span class="visually-hidden" role="status">Loading...</span>
                                        </button>
                                        <button class="btn btn-danger text-danger bg-danger-subtle" type="button"
                                            disabled>
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <span class="ms-1" role="status">Loading...</span>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <button class="btn btn-success icon-btn" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <span class="visually-hidden" role="status">Loading...</span>
                                        </button>
                                        <button class="btn btn-success text-success bg-success-subtle" type="button"
                                            disabled>
                                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                            <span class="ms-1" role="status">Loading...</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-button-spinner" role="tabpanel"
                                aria-labelledby="preview-button-spinner-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex flex-wrap align-items-center gap-3&quot;&gt;
    &lt;button class=&quot;btn btn-primary icon-btn&quot; type=&quot;button&quot; disabled&gt;
        &lt;span class=&quot;spinner-border spinner-border-sm&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot; role=&quot;status&quot;&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;btn btn-primary text-primary bg-primary-subtle&quot; type=&quot;button&quot; disabled&gt;
        &lt;span class=&quot;spinner-border spinner-border-sm&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;ms-1&quot; role=&quot;status&quot;&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap align-items-center gap-3&quot;&gt;
    &lt;button class=&quot;btn btn-danger icon-btn&quot; type=&quot;button&quot; disabled&gt;
        &lt;span class=&quot;spinner-border spinner-border-sm&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot; role=&quot;status&quot;&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;btn btn-danger text-danger bg-danger-subtle&quot; type=&quot;button&quot; disabled&gt;
        &lt;span class=&quot;spinner-border spinner-border-sm&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;ms-1&quot; role=&quot;status&quot;&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap align-items-center gap-3&quot;&gt;
    &lt;button class=&quot;btn btn-success icon-btn&quot; type=&quot;button&quot; disabled&gt;
        &lt;span class=&quot;spinner-border spinner-border-sm&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot; role=&quot;status&quot;&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;btn btn-success text-success bg-success-subtle&quot; type=&quot;button&quot; disabled&gt;
        &lt;span class=&quot;spinner-border spinner-border-sm&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;ms-1&quot; role=&quot;status&quot;&gt;Loading...&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Spinner Sizes</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizes-spinner" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizes-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizes-spinner" type="button" role="tab"
                                    aria-controls="html-sizes-spinner" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizes-spinner-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizes-spinner" type="button" role="tab"
                                    aria-controls="preview-sizes-spinner   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use spinners within buttons to indicate an action is currently processing or
                            taking place. </p>
                        <div class="tab-content" id="sizes-spinnerContent">
                            <div class="tab-pane fade show active" id="html-sizes-spinner" role="tabpanel"
                                aria-labelledby="html-sizes-spinner-tab" tabindex="0">
                                <div class="d-flex flex-wrap align-items-center gap-5">
                                    <div class="d-flex flex-wrap align-items-center gap-5">
                                        <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center gap-5 ps-5">
                                        <div class="spinner-border spinner-border-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizes-spinner" role="tabpanel"
                                aria-labelledby="preview-sizes-spinner-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex flex-wrap align-items-center gap-5&quot;&gt;
    &lt;div class=&quot;spinner-border&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;spinner-grow&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap align-items-center gap-5 ps-5&quot;&gt;
    &lt;div class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
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
