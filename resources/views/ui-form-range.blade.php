@extends('partials.layouts.master')

@section('title', 'UI Range Slider | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Range Slider')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection

@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic Range</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-range" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-range" type="button" role="tab"
                                    aria-controls="html-basic-range" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-range" type="button" role="tab"
                                    aria-controls="preview-basic-range" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create custom <code>&lt;input type="range"&gt;</code> controls with
                            <code>.form-range</code>. The track (the background) and thumb (the value) are both styled to
                            appear the same across browsers. As only Firefox supports “filling” their track from the left or
                            right of the thumb as a means to visually indicate progress, we do not currently support it.</p>
                        <div class="tab-content" id="basic-range">
                            <div class="tab-pane fade show active" id="html-basic-range" role="tabpanel"
                                aria-labelledby="html-basic-range-tab" tabindex="0">
                                <input type="range" class="form-range">
                            </div>
                            <div class="tab-pane fade" id="preview-basic-range" role="tabpanel"
                                aria-labelledby="preview-basic-range-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;input type=&quot;range&quot; class=&quot;form-range&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled Range</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-range" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-disabled-range" type="button" role="tab"
                                    aria-controls="html-disabled-range" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-range" type="button" role="tab"
                                    aria-controls="preview-disabled-range" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add the <code>disabled</code> boolean attribute on an input to give it a
                            grayed out appearance, remove pointer events, and prevent focusing.</p>
                        <div class="tab-content" id="disabled-range">
                            <div class="tab-pane fade show active" id="html-disabled-range" role="tabpanel"
                                aria-labelledby="html-disabled-range-tab" tabindex="0">
                                <input type="range" class="form-range" disabled>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-range" role="tabpanel"
                                aria-labelledby="preview-disabled-range-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;input type=&quot;range&quot; class=&quot;form-range&quot; disabled&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Min and Max</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="min-max-range" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-min-max-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-min-max-range" type="button" role="tab"
                                    aria-controls="html-min-max-range" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-min-max-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-min-max-range" type="button" role="tab"
                                    aria-controls="preview-min-max-range" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Range inputs have implicit values for <code>min</code> and <code>max—0</code>
                            and <code>100</code>, respectively. You may specify new values for those using the
                            <code>min</code> and <code>max</code> attributes.</p>
                        <div class="tab-content" id="min-max-range">
                            <div class="tab-pane fade show active" id="html-min-max-range" role="tabpanel"
                                aria-labelledby="html-min-max-range-tab" tabindex="0">
                                <input type="range" class="form-range" min="0" max="5">
                            </div>
                            <div class="tab-pane fade" id="preview-min-max-range" role="tabpanel"
                                aria-labelledby="preview-min-max-range-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;input type=&quot;range&quot; class=&quot;form-range&quot; min=&quot;0&quot; max=&quot;5&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Steps</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="steps-range" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-steps-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-steps-range" type="button" role="tab"
                                    aria-controls="html-steps-range" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-steps-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-steps-range" type="button" role="tab"
                                    aria-controls="preview-steps-range" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">By default, range inputs “snap” to integer values. To change this, you can
                            specify a <code>step</code> value. In the example below, we double the number of steps by using
                            <code>step="0.5"</code>.</p>
                        <div class="tab-content" id="steps-range">
                            <div class="tab-pane fade show active" id="html-steps-range" role="tabpanel"
                                aria-labelledby="html-steps-range-tab" tabindex="0">
                                <input type="range" class="form-range" min="0" max="5" step="0.5">
                            </div>
                            <div class="tab-pane fade" id="preview-steps-range" role="tabpanel"
                                aria-labelledby="preview-steps-range-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;input type=&quot;range&quot; class=&quot;form-range&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;0.5&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Range Colors</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colors-range" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colors-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colors-range" type="button" role="tab"
                                    aria-controls="html-colors-range" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colors-range-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colors-range" type="button" role="tab"
                                    aria-controls="preview-colors-range" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="colors-range">
                            <div class="tab-pane fade show active" id="html-colors-range" role="tabpanel"
                                aria-labelledby="html-colors-range-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-primary" min="0"
                                            max="5" step="0.2">
                                    </div><!--End col-->
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-secondary" min="0"
                                            max="5" step="0.1">
                                    </div><!--End col-->
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-success" min="0"
                                            max="5" step="0.3">
                                    </div><!--End col-->
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-warning" min="0"
                                            max="5" step="0.9">
                                    </div><!--End col-->
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-info" min="0"
                                            max="5" step="3">
                                    </div><!--End col-->
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-danger" min="0"
                                            max="5" step="2">
                                    </div><!--End col-->
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-dark" min="0"
                                            max="5" step="4">
                                    </div><!--End col-->
                                    <div class="col-12 col-xl-6">
                                        <input type="range" class="form-range form-range-light" min="0"
                                            max="5" step="2">
                                    </div><!--End col-->
                                </div><!--End row-->
                            </div>
                            <div class="tab-pane fade" id="preview-colors-range" role="tabpanel"
                                aria-labelledby="preview-colors-range-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-primary&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;0.2&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-secondary&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;0.1&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-success&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;0.3&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-warning&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;0.9&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-info&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;3&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-danger&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;2&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-dark&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;4&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;range&quot; class=&quot;form-range form-range-light&quot; min=&quot;0&quot; max=&quot;5&quot; step=&quot;2&quot;&gt;
    &lt;/div&gt;&lt;!--End col--&gt;
&lt;/div&gt;&lt;!--End row--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->

        <h6 class="mb-3 fs-15 text-decoration-underline">Nouislider Plugins:</h6>
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Default Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="defaultSlider"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Disabled Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="disabledSlider"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Vertical Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="verticalSlider" class="min-h-176px mx-auto"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Two Handle Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="rangeSlider"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Margin Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="marginSlider"></div>
                        <div class="d-flex align-items-center justify-content-between gap-1 flex-wrap mt-5">
                            <p class="m-0 fw-semibold">Min Val: <span class="fs-12 fw-medium text-muted"
                                    id="slider-margin-value-min"></span></p>
                            <p class="m-0 fw-semibold">Max Val: <span class="fs-12 fw-medium text-muted"
                                    id="slider-margin-value-max"></span></p>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Step Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="stepsSlider"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">RTL Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="rtlSlider"></div>
                        <p class="mt-5 mb-0 fw-semibold">Max Val: <span class="fs-12 fw-medium text-muted"
                                id="field"></span></p>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tooltips Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="mt-5 pt-5">
                            <div id="tooltipsSlider"></div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Multiple Tyle Range Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div id="multipleTyleRangeSlider"></div>
                        <p class="mt-5 mb-0 fw-semibold">Max Val: <span class="fs-12 fw-medium text-muted"
                                id="multipleTyleRangeSlider-step-value">20.00</span></p>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Slider Fit Style</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="mt-5 slider-fit" id="slider-fit"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Rounded Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="mt-5 no-handle-slider no-handle-rounded" id="slider-round"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Square Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="mt-5 no-handle-slider no-handle-square" id="slider-square"></div>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->

        <div class="row">
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Slider Sizes</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="mt-5">
                            <div id="large-slider" class="large-slider"></div>
                        </div>
                        <div class="pt-5 mt-5">
                            <div id="default-slider"></div>
                        </div>
                        <div class="pt-5 mt-5">
                            <div id="small-slider" class="small-slider"></div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Soft Limit Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="min-h-40px mt-5">
                            <div id="arbitrary-values-slider"></div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->

        <div class="row">
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Secondary Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="noUi-target-secondary" id="noUi-target-secoundry"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Success Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="noUi-target-success" id="noUi-target-success"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Success Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="noUi-target-info" id="noUi-target-info"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Warning Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="noUi-target-warning" id="noUi-target-warning"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Danger Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="noUi-target-danger" id="noUi-target-danger"></div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dark Slider</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the fields below to enter a date. Please follow the specified format for
                            each field:</p>
                        <div class="noUi-target-dark" id="noUi-target-dark"></div>
                    </div>
                </div>
            </div><!--End col-->

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/wNumb/wNumb.min.js"></script>
    <script src="assets/libs/nouislider/nouislider.min.js"></script>
    <script src="assets/js/ui/nouislider.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
