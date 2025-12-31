@extends('partials.layouts.master')

@section('title', 'UI Button Group | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Button Group')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection

@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row g-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic Example</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-button-group" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-button-group" type="button" role="tab"
                                    aria-controls="html-basic-button-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-button-group" type="button" role="tab"
                                    aria-controls="preview-basic-button-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                        </p>
                        <div class="tab-content" id="basic-button-groupContent">
                            <div class="tab-pane fade show active" id="html-basic-button-group" role="tabpanel"
                                aria-labelledby="html-basic-button-group-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary">Left</button>
                                            <button type="button" class="btn btn-primary">Middle</button>
                                            <button type="button" class="btn btn-primary">Right</button>
                                        </div>
                                    </div><!--End col-->
                                    <div class="col-xl-6">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="btn btn-primary active"
                                                aria-current="page">Active link</a>
                                            <a href="javascript:void(0)" class="btn btn-primary">Link</a>
                                            <a href="javascript:void(0)" class="btn btn-primary">Link</a>
                                        </div>
                                    </div><!--End col-->
                                </div><!--End row-->
                            </div>
                            <div class="tab-pane fade" id="preview-basic-button-group" role="tabpanel"
                                aria-labelledby="preview-basic-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary active&quot; aria-current=&quot;page&quot;&gt;Active link&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Link&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Link&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Mixed Styles</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="mixed-style-button-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-mixed-style-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-mixed-style-button-group" type="button" role="tab"
                                    aria-controls="html-mixed-style-button-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-mixed-style-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-mixed-style-button-group" type="button" role="tab"
                                    aria-controls="preview-mixed-style-button-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="mixed-style-button-groupContent">
                            <div class="tab-pane fade show active" id="html-mixed-style-button-group" role="tabpanel"
                                aria-labelledby="html-mixed-style-button-group-tab" tabindex="0">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-danger">Left</button>
                                    <button type="button" class="btn btn-warning">Middle</button>
                                    <button type="button" class="btn btn-success">Right</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-mixed-style-button-group" role="tabpanel"
                                aria-labelledby="preview-mixed-style-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic mixed styles example&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Left&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Middle&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Outlined Styles</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="outlined-style-button-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-outlined-style-button-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-outlined-style-button-group"
                                    type="button" role="tab" aria-controls="html-outlined-style-button-group"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-outlined-style-button-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-outlined-style-button-group"
                                    type="button" role="tab" aria-controls="preview-outlined-style-button-group"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="outlined-style-button-groupContent">
                            <div class="tab-pane fade show active" id="html-outlined-style-button-group" role="tabpanel"
                                aria-labelledby="html-outlined-style-button-group-tab" tabindex="0">
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-primary">Left</button>
                                    <button type="button" class="btn btn-outline-primary">Middle</button>
                                    <button type="button" class="btn btn-outline-primary">Right</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-outlined-style-button-group" role="tabpanel"
                                aria-labelledby="preview-outlined-style-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic outlined example&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Checkbox & Radio Button Groups</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="checkbox-radio-button-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-checkbox-radio-button-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-checkbox-radio-button-group"
                                    type="button" role="tab" aria-controls="html-checkbox-radio-button-group"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-checkbox-radio-button-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-checkbox-radio-button-group"
                                    type="button" role="tab" aria-controls="preview-checkbox-radio-button-group"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Combine button-like checkbox and radio toggle buttons into a seamless looking
                            button group.</p>
                        <div class="tab-content" id="checkbox-radio-button-groupContent">
                            <div class="tab-pane fade show active" id="html-checkbox-radio-button-group" role="tabpanel"
                                aria-labelledby="html-checkbox-radio-button-group-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="btn-group" role="group"
                                            aria-label="Basic checkbox toggle button group">
                                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-xl-6">
                                        <div class="btn-group" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                                autocomplete="off" checked>
                                            <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <div class="tab-pane fade" id="preview-checkbox-radio-button-group" role="tabpanel"
                                aria-labelledby="preview-checkbox-radio-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic checkbox toggle button group&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck1&quot; autocomplete=&quot;off&quot;&gt;
    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck1&quot;&gt;Checkbox 1&lt;/label&gt;

    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck2&quot; autocomplete=&quot;off&quot;&gt;
    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck2&quot;&gt;Checkbox 2&lt;/label&gt;

    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck3&quot; autocomplete=&quot;off&quot;&gt;
    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck3&quot;&gt;Checkbox 3&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic radio toggle button group&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio1&quot; autocomplete=&quot;off&quot; checked&gt;
    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btnradio1&quot;&gt;Radio 1&lt;/label&gt;

    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio2&quot; autocomplete=&quot;off&quot;&gt;
    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btnradio2&quot;&gt;Radio 2&lt;/label&gt;

    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio3&quot; autocomplete=&quot;off&quot;&gt;
    &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btnradio3&quot;&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Button toolbar</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="toolbar-button-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-toolbar-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-toolbar-button-group" type="button" role="tab"
                                    aria-controls="html-toolbar-button-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-toolbar-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-toolbar-button-group" type="button" role="tab"
                                    aria-controls="preview-toolbar-button-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Combine sets of button groups into button toolbars for more complex
                            components. Use utility classes as needed to space out groups, buttons, and more.</p>
                        <div class="tab-content" id="toolbar-button-groupContent">
                            <div class="tab-pane fade show active" id="html-toolbar-button-group" role="tabpanel"
                                aria-labelledby="html-toolbar-button-group-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="btn-toolbar gap-3" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-grou" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-primary">1</button>
                                                <button type="button" class="btn btn-primary">2</button>
                                                <button type="button" class="btn btn-primary">3</button>
                                                <button type="button" class="btn btn-primary">4</button>
                                            </div>
                                            <div class="btn-grou" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-secondary">5</button>
                                                <button type="button" class="btn btn-secondary">6</button>
                                                <button type="button" class="btn btn-secondary">7</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-info">8</button>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-xl-6">
                                        <div class="d-flex gap-3 align-items-center flex-wrap">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-outline-secondary">1</button>
                                                <button type="button" class="btn btn-outline-secondary">2</button>
                                                <button type="button" class="btn btn-outline-secondary">3</button>
                                                <button type="button" class="btn btn-outline-secondary">4</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-outline-secondary">1</button>
                                                <button type="button" class="btn btn-outline-secondary">2</button>
                                                <button type="button" class="btn btn-outline-secondary">3</button>
                                                <button type="button" class="btn btn-outline-secondary">4</button>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <div class="tab-pane fade" id="preview-toolbar-button-group" role="tabpanel"
                                aria-labelledby="preview-toolbar-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-toolbar gap-3&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
    &lt;div class=&quot;btn-group me-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;3&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;btn-group me-2&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;5&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;6&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;7&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;8&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex gap-3 align-items-center flex-wrap&quot;&gt;
    &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;1&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;2&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;3&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;1&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;2&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;3&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;4&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Sizing</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizing-button-group" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizing-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizing-button-group" type="button" role="tab"
                                    aria-controls="html-sizing-button-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizing-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizing-button-group" type="button" role="tab"
                                    aria-controls="preview-sizing-button-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Instead of applying button sizing classes to every button in a group, just
                            add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting
                            multiple groups.</p>
                        <div class="tab-content" id="sizing-button-groupContent">
                            <div class="tab-pane fade show active" id="html-sizing-button-group" role="tabpanel"
                                aria-labelledby="html-sizing-button-group-tab" tabindex="0">
                                <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
                                    <button type="button" class="btn btn-outline-primary">Left</button>
                                    <button type="button" class="btn btn-outline-primary">Middle</button>
                                    <button type="button" class="btn btn-outline-primary">Right</button>
                                </div>
                                <br>
                                <div class="btn-group mb-3" role="group" aria-label="Default button group">
                                    <button type="button" class="btn btn-outline-primary">Left</button>
                                    <button type="button" class="btn btn-outline-primary">Middle</button>
                                    <button type="button" class="btn btn-outline-primary">Right</button>
                                </div>
                                <br>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                    <button type="button" class="btn btn-outline-primary">Left</button>
                                    <button type="button" class="btn btn-outline-primary">Middle</button>
                                    <button type="button" class="btn btn-outline-primary">Right</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizing-button-group" role="tabpanel"
                                aria-labelledby="preview-sizing-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-group btn-group-lg mb-3&quot; role=&quot;group&quot; aria-label=&quot;Large button group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;br&gt;
&lt;div class=&quot;btn-group mb-3&quot; role=&quot;group&quot; aria-label=&quot;Default button group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;
&lt;br&gt;
&lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;Small button group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Vertical Variation</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="vertical-variation-button-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-vertical-variation-button-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-vertical-variation-button-group"
                                    type="button" role="tab" aria-controls="html-vertical-variation-button-group"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-vertical-variation-button-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-vertical-variation-button-group"
                                    type="button" role="tab" aria-controls="preview-vertical-variation-button-group"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Make a set of buttons appear vertically stacked rather than horizontally.
                            Split button dropdowns are not supported here.</p>
                        <div class="tab-content" id="vertical-variation-button-groupContent">
                            <div class="tab-pane fade show active" id="html-vertical-variation-button-group"
                                role="tabpanel" aria-labelledby="html-vertical-variation-button-group-tab"
                                tabindex="0">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="btn-group-vertical" role="group"
                                            aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4">
                                        <div class="btn-group-vertical" role="group"
                                            aria-label="Vertical button group">
                                            <button type="button" class="btn btn-primary">Button</button>
                                            <button type="button" class="btn btn-primary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Dropdown
                                                            link</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Dropdown
                                                            link</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group dropstart" role="group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Dropdown
                                                            link</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Dropdown
                                                            link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-4">
                                        <div class="btn-group-vertical" role="group"
                                            aria-label="Vertical radio toggle button group">
                                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1"
                                                autocomplete="off" checked>
                                            <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2"
                                                autocomplete="off">
                                            <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3"
                                                autocomplete="off">
                                            <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            <div class="tab-pane fade" id="preview-vertical-variation-button-group" role="tabpanel"
                                aria-labelledby="preview-vertical-variation-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical button group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical button group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
    &lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Dropdown
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;btn-group dropstart&quot; role=&quot;group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Dropdown
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical radio toggle button group&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio1&quot; autocomplete=&quot;off&quot; checked&gt;
    &lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio1&quot;&gt;Radio 1&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio2&quot; autocomplete=&quot;off&quot;&gt;
    &lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio2&quot;&gt;Radio 2&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;vbtn-radio&quot; id=&quot;vbtn-radio3&quot; autocomplete=&quot;off&quot;&gt;
    &lt;label class=&quot;btn btn-outline-danger&quot; for=&quot;vbtn-radio3&quot;&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Nesting</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="nesting-button-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-nesting-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-nesting-button-group" type="button" role="tab"
                                    aria-controls="html-nesting-button-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-nesting-button-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-nesting-button-group" type="button" role="tab"
                                    aria-controls="preview-nesting-button-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Place a <code>.btn-group</code> within another <code>.btn-group</code> when
                            you want dropdown menus mixed with a series of buttons.</p>
                        <div class="tab-content" id="nesting-button-groupContent">
                            <div class="tab-pane fade show active" id="html-nesting-button-group" role="tabpanel"
                                aria-labelledby="html-nesting-button-group-tab" tabindex="0">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-primary">1</button>
                                    <button type="button" class="btn btn-primary">2</button>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-nesting-button-group" role="tabpanel"
                                aria-labelledby="preview-nesting-button-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Button group with nested dropdown&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;1&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;2&lt;/button&gt;

    &lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
            Dropdown
        &lt;/button&gt;
        &lt;ul class=&quot;dropdown-menu&quot;&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
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
    <!--App js-->
    <script type="module" src="assets/js/app.js"></script>
@endsection
