@extends('partials.layouts.master')

@section('title', 'UI Elements | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Elements')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')

    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic Input Text</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-input-text" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-input-text-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-input-text" type="button" role="tab"
                                    aria-controls="html-basic-input-text" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-input-text-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-input-text" type="button" role="tab"
                                    aria-controls="preview-basic-input-text" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="basic-input-textContent">
                            <div class="tab-pane fade show active" id="html-basic-input-text" role="tabpanel"
                                aria-labelledby="html-basic-input-text-tab" tabindex="0">
                                <input type="text" placeholder="Username" class="form-control moving-placeholder"
                                    id="inputExample01">
                            </div>
                            <div class="tab-pane fade" id="preview-basic-input-text" role="tabpanel"
                                aria-labelledby="preview-basic-input-text-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-control moving-placeholder&quot; id=&quot;inputExample01&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled Text Input</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-input-text" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-input-text-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-disabled-input-text" type="button" role="tab"
                                    aria-controls="html-disabled-input-text" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-input-text-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-input-text" type="button" role="tab"
                                    aria-controls="preview-disabled-input-text" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="disabled-input-textContent">
                            <div class="tab-pane fade show active" id="html-disabled-input-text" role="tabpanel"
                                aria-labelledby="html-disabled-input-text-tab" tabindex="0">
                                <input type="text" placeholder="Username" class="form-control" id="inputExample02"
                                    disabled>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-input-text" role="tabpanel"
                                aria-labelledby="preview-disabled-input-text-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-control&quot; id=&quot;inputExample02&quot; disabled&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Label Input</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="label-input" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-label-input-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-label-input" type="button" role="tab"
                                    aria-controls="html-label-input" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-label-input-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-label-input" type="button" role="tab"
                                    aria-controls="preview-label-input" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="label-input">
                            <div class="tab-pane fade show active" id="html-label-input" role="tabpanel"
                                aria-labelledby="html-label-input-tab" tabindex="0">
                                <label for="inputLabelExample" class="form-label">Username</label>
                                <input type="text" placeholder="Enter Your Name" class="form-control"
                                    id="inputLabelExample">
                            </div>
                            <div class="tab-pane fade" id="preview-label-input" role="tabpanel"
                                aria-labelledby="preview-label-input-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;label for=&quot;inputLabelExample&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
&lt;input type=&quot;text&quot; placeholder=&quot;Enter Your Name&quot; class=&quot;form-control&quot; id=&quot;inputLabelExample&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Label Input Required</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="label-input-required"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-label-input-required-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-label-input-required" type="button" role="tab"
                                    aria-controls="html-label-input-required" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-label-input-required-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-label-input-required" type="button" role="tab"
                                    aria-controls="preview-label-input-required" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="label-input-required">
                            <div class="tab-pane fade show active" id="html-label-input-required" role="tabpanel"
                                aria-labelledby="html-label-input-required-tab" tabindex="0">
                                <label for="labelInputRequired" class="form-label">Name<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" placeholder="Enter Your Name" class="form-control"
                                    id="labelInputRequired" required>
                            </div>
                            <div class="tab-pane fade" id="preview-label-input-required" role="tabpanel"
                                aria-labelledby="preview-label-input-required-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;label for=&quot;labelInputRequired&quot; class=&quot;form-label&quot;&gt;Name&lt;span class=&quot;text-danger ms-1&quot;&gt;*&lt;/span&gt;&lt;/label&gt;
&lt;input type=&quot;text&quot; placeholder=&quot;Enter Your Name&quot; class=&quot;form-control&quot; id=&quot;labelInputRequired&quot; required&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Read Only</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="label-input-readonly"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-label-input-readonly-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-label-input-readonly" type="button" role="tab"
                                    aria-controls="html-label-input-readonly" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-label-input-readonly-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-label-input-readonly" type="button" role="tab"
                                    aria-controls="preview-label-input-readonly" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="label-input-readonly">
                            <div class="tab-pane fade show active" id="html-label-input-readonly" role="tabpanel"
                                aria-labelledby="html-label-input-readonly-tab" tabindex="0">
                                <label for="InputReadOnly" class="form-label">Read Only</label>
                                <input type="text" placeholder="You can read only me" class="form-control"
                                    id="InputReadOnly" readonly>
                            </div>
                            <div class="tab-pane fade" id="preview-label-input-readonly" role="tabpanel"
                                aria-labelledby="preview-label-input-readonly-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;label for=&quot;InputReadOnly&quot; class=&quot;form-label&quot;&gt;Read Only&lt;/label&gt;
&lt;input type=&quot;text&quot; placeholder=&quot;You can read only me&quot; class=&quot;form-control&quot; id=&quot;InputReadOnly&quot; readonly&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Input With Button</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="input-with-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-input-with-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-input-with-button" type="button" role="tab"
                                    aria-controls="html-input-with-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-input-with-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-input-with-button" type="button" role="tab"
                                    aria-controls="preview-input-with-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="input-with-button">
                            <div class="tab-pane fade show active" id="html-input-with-button" role="tabpanel"
                                aria-labelledby="html-input-with-button-tab" tabindex="0">
                                <div class="d-flex align-items-center gap-3">
                                    <input type="text" placeholder="Enter your email" class="form-control">
                                    <button class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-input-with-button" role="tabpanel"
                                aria-labelledby="preview-input-with-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex align-items-center gap-3&quot;&gt;
    &lt;input type=&quot;text&quot; placeholder=&quot;Enter your email&quot; class=&quot;form-control&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot;&gt;Subscribe&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">With Description</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="input-with-description"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-input-with-description-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-input-with-description" type="button"
                                    role="tab" aria-controls="html-input-with-description"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-input-with-description-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-input-with-description" type="button" role="tab"
                                    aria-controls="preview-input-with-description" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="input-with-description">
                            <div class="tab-pane fade show active" id="html-input-with-description" role="tabpanel"
                                aria-labelledby="html-input-with-description-tab" tabindex="0">
                                <input type="text" placeholder="Username" class="form-control"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="tab-pane fade" id="preview-input-with-description" role="tabpanel"
                                aria-labelledby="preview-input-with-description-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;input type=&quot;text&quot; placeholder=&quot;Username&quot; class=&quot;form-control&quot; aria-describedby=&quot;emailHelp&quot;&gt;
&lt;div id=&quot;emailHelp&quot; class=&quot;form-text&quot;&gt;We'll never share your email with anyone else.&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">With Error Message</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="input-with-error-message"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-input-with-error-message-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-input-with-error-message" type="button"
                                    role="tab" aria-controls="html-input-with-error-message"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-input-with-error-message-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-input-with-error-message" type="button" role="tab"
                                    aria-controls="preview-input-with-error-message"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="input-with-error-message">
                            <div class="tab-pane fade show active" id="html-input-with-error-message" role="tabpanel"
                                aria-labelledby="html-input-with-error-message-tab" tabindex="0">
                                <label for="InputErrorMessage" class="form-label is-invalid">Username</label>
                                <input type="text" class="form-control is-invalid" id="InputErrorMessage"
                                    placeholder="Username" required>
                                <div class="invalid-feedback">
                                    Please provide a valid username.
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-input-with-error-message" role="tabpanel"
                                aria-labelledby="preview-input-with-error-message-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;label for=&quot;InputErrorMessage&quot; class=&quot;form-label is-invalid&quot;&gt;Username&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;InputErrorMessage&quot; placeholder=&quot;Username&quot; required&gt;
&lt;div class=&quot;invalid-feedback&quot;&gt;
    Please provide a valid username.
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Input Size & Rounded</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="input-size-rounded" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-input-size-rounded-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-input-size-rounded" type="button" role="tab"
                                    aria-controls="html-input-size-rounded" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-input-size-rounded-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-input-size-rounded" type="button" role="tab"
                                    aria-controls="preview-input-size-rounded" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You have the option to include <code>supportive text</code> either below or
                            above the input field.</p>
                        <div class="tab-content" id="input-size-rounded">
                            <div class="tab-pane fade show active" id="html-input-size-rounded" role="tabpanel"
                                aria-labelledby="html-input-size-rounded-tab" tabindex="0">
                                <div class="row g-3">
                                    <div class="col-xl-6">
                                        <!--Input Size-->
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-sm"
                                                id="inputExample10" placeholder="Username">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="inputExample11"
                                                placeholder="Username">
                                        </div>
                                        <div>
                                            <input type="text" class="form-control form-control-lg"
                                                id="inputExample12" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <!-- Input rounded -->
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-0" id="inputExample13"
                                                placeholder="Username">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-1" id="inputExample14"
                                                placeholder="Username">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control rounded-4" id="inputExample15"
                                                placeholder="Username">
                                        </div>
                                        <div>
                                            <input type="text" class="form-control rounded-5" id="inputExample16"
                                                placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-input-size-rounded" role="tabpanel"
                                aria-labelledby="preview-input-size-rounded-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!--Input Size--&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-sm&quot; id=&quot;inputExample10&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputExample11&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control form-control-lg&quot; id=&quot;inputExample12&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;

&lt;!-- Input rounded --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-0&quot; id=&quot;inputExample13&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-1&quot; id=&quot;inputExample14&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;mb-3&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-4&quot; id=&quot;inputExample15&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control rounded-5&quot; id=&quot;inputExample16&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colors</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="input-colors" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-input-colors-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-input-colors" type="button" role="tab"
                                    aria-controls="html-input-colors" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-input-colors-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-input-colors" type="button" role="tab"
                                    aria-controls="preview-input-colors" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You have the option to include <code>supportive text</code> either below or
                            above the input field.</p>
                        <div class="tab-content" id="input-colors">
                            <div class="tab-pane fade show active" id="html-input-colors" role="tabpanel"
                                aria-labelledby="html-input-colors-tab" tabindex="0">
                                <div class="row g-3">
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control" id="inputExample17"
                                            placeholder="Default">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control form-control-primary"
                                            id="inputExample18" placeholder="Primary">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control form-control-secondary"
                                            id="inputExample19" placeholder="Secondary">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control form-control-success"
                                            id="inputExample20" placeholder="Success">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control form-control-info" id="inputExample21"
                                            placeholder="Info">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control form-control-warning"
                                            id="inputExample22" placeholder="Warning">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control form-control-danger"
                                            id="inputExample23" placeholder="Danger">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="text" class="form-control form-control-dark" id="inputExample25"
                                            placeholder="Dark">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-input-colors" role="tabpanel"
                                aria-labelledby="preview-input-colors-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-3&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inputExample17&quot; placeholder=&quot;Default&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-primary&quot; id=&quot;inputExample18&quot; placeholder=&quot;Primary&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-secondary&quot; id=&quot;inputExample19&quot; placeholder=&quot;Secondary&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-success&quot; id=&quot;inputExample20&quot; placeholder=&quot;Success&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-info&quot; id=&quot;inputExample21&quot; placeholder=&quot;Info&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-warning&quot; id=&quot;inputExample22&quot; placeholder=&quot;Warning&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-danger&quot; id=&quot;inputExample23&quot; placeholder=&quot;Danger&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control form-control-dark&quot; id=&quot;inputExample25&quot; placeholder=&quot;Dark&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Variant</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="input-variant" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-input-variant-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-input-variant" type="button" role="tab"
                                    aria-controls="html-input-variant" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-input-variant-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-input-variant" type="button" role="tab"
                                    aria-controls="preview-input-variant" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You have the option to include <code>supportive text</code> either below or
                            above the input field.</p>
                        <div class="tab-content" id="input-variant">
                            <div class="tab-pane fade show active" id="html-input-variant" role="tabpanel"
                                aria-labelledby="html-input-variant-tab" tabindex="0">
                                <div class="row gy-4">
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample26" class="form-label">Input with Icon</label>
                                        <div class="form-icon">
                                            <input type="email" class="form-control form-control-icon"
                                                id="inputExample26" placeholder="example@gmail.com">
                                            <i class="ri-mail-unread-line"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample27" class="form-label">Input with Icon Right</label>
                                        <div class="form-icon right">
                                            <input type="email" class="form-control form-control-icon"
                                                id="inputExample27" placeholder="example@gmail.com">
                                            <i class="ri-mail-unread-line"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample28" class="form-label">Input Date</label>
                                        <input type="date" class="form-control" id="inputExample28">
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample29" class="form-label">Input Time</label>
                                        <input type="time" class="form-control" id="inputExample29">
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample30" class="form-label">Color Picker</label>
                                        <input type="color" class="form-control form-control-color w-100"
                                            value="#007bff" title="Choose your color" id="inputExample30">
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample31" class="form-label">Country Selector</label>
                                        <input list="datalistOptions" class="form-control"
                                            placeholder="Search your country..." id="inputExample31">
                                        <datalist id="datalistOptions">
                                            <option value="United States">
                                            <option value="Canada">
                                            <option value="United Kingdom">
                                            <option value="Australia">
                                            <option value="Germany">
                                            <option value="France">
                                            <option value="Italy">
                                            <option value="Spain">
                                        </datalist>
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample32" class="form-label">Textarea</label>
                                        <textarea class="form-control" id="inputExample32" rows="3"></textarea>
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample33" class="form-label">Plain Text</label>
                                        <input type="text" readonly class="form-control-plaintext" id="inputExample33"
                                            value="email@example.com">
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <label for="inputExample34" class="form-label">Type Search</label>
                                        <input type="search" class="form-control" id="inputExample34"
                                            placeholder="Search">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-input-variant" role="tabpanel"
                                aria-labelledby="preview-input-variant-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row gy-4&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample26&quot; class=&quot;form-label&quot;&gt;Input with Icon&lt;/label&gt;
        &lt;div class=&quot;form-icon&quot;&gt;
            &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;inputExample26&quot; placeholder=&quot;example@gmail.com&quot;&gt;
            &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample27&quot; class=&quot;form-label&quot;&gt;Input with Icon Right&lt;/label&gt;
        &lt;div class=&quot;form-icon right&quot;&gt;
            &lt;input type=&quot;email&quot; class=&quot;form-control form-control-icon&quot; id=&quot;inputExample27&quot; placeholder=&quot;example@gmail.com&quot;&gt;
            &lt;i class=&quot;ri-mail-unread-line&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample28&quot; class=&quot;form-label&quot;&gt;Input Date&lt;/label&gt;
        &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;inputExample28&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample29&quot; class=&quot;form-label&quot;&gt;Input Time&lt;/label&gt;
        &lt;input type=&quot;time&quot; class=&quot;form-control&quot; id=&quot;inputExample29&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample30&quot; class=&quot;form-label&quot;&gt;Color Picker&lt;/label&gt;
        &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color w-100&quot; value=&quot;#007bff&quot; title=&quot;Choose your color&quot; id=&quot;inputExample30&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample31&quot; class=&quot;form-label&quot;&gt;Country Selector&lt;/label&gt;
        &lt;input list=&quot;datalistOptions&quot; class=&quot;form-control&quot; placeholder=&quot;Search your country...&quot; id=&quot;inputExample31&quot;&gt;
        &lt;datalist id=&quot;datalistOptions&quot;&gt;
            &lt;option value=&quot;United States&quot;&gt;
            &lt;option value=&quot;Canada&quot;&gt;
            &lt;option value=&quot;United Kingdom&quot;&gt;
            &lt;option value=&quot;Australia&quot;&gt;
            &lt;option value=&quot;Germany&quot;&gt;
            &lt;option value=&quot;France&quot;&gt;
            &lt;option value=&quot;Italy&quot;&gt;
            &lt;option value=&quot;Spain&quot;&gt;
        &lt;/datalist&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample32&quot; class=&quot;form-label&quot;&gt;Textarea&lt;/label&gt;
        &lt;textarea class=&quot;form-control&quot; id=&quot;inputExample32&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample33&quot; class=&quot;form-label&quot;&gt;Plain Text&lt;/label&gt;
        &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;inputExample33&quot; value=&quot;email@example.com&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;label for=&quot;inputExample34&quot; class=&quot;form-label&quot;&gt;Type Search&lt;/label&gt;
        &lt;input type=&quot;search&quot; class=&quot;form-control&quot; id=&quot;inputExample34&quot; placeholder=&quot;Search&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic File Upload</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="input-file-upload" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-input-file-upload-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-input-file-upload" type="button" role="tab"
                                    aria-controls="html-input-file-upload" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-input-file-upload-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-input-file-upload" type="button" role="tab"
                                    aria-controls="preview-input-file-upload" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You have the option to include <code>supportive text</code> either below or
                            above the input field.</p>
                        <div class="tab-content" id="input-file-upload">
                            <div class="tab-pane fade show active" id="html-input-file-upload" role="tabpanel"
                                aria-labelledby="html-input-file-upload-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-xl-6">
                                        <label for="inputExample35" class="form-label">Default file input example</label>
                                        <input class="form-control" type="file" id="inputExample35">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <label for="inputExample36" class="form-label">Multiple files input
                                            example</label>
                                        <input class="form-control" type="file" id="inputExample36" multiple>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <label for="inputExample37" class="form-label">Disabled file input example</label>
                                        <input class="form-control" type="file" id="inputExample37" disabled>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <label for="inputExample38" class="form-label">Small file input example</label>
                                        <input class="form-control form-control-sm" id="inputExample38" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-input-file-upload" role="tabpanel"
                                aria-labelledby="preview-input-file-upload-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;label for=&quot;inputExample35&quot; class=&quot;form-label&quot;&gt;Default file input example&lt;/label&gt;
        &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;inputExample35&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;label for=&quot;inputExample36&quot; class=&quot;form-label&quot;&gt;Multiple files input example&lt;/label&gt;
        &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;inputExample36&quot; multiple&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;label for=&quot;inputExample37&quot; class=&quot;form-label&quot;&gt;Disabled file input example&lt;/label&gt;
        &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;inputExample37&quot; disabled&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;label for=&quot;inputExample38&quot; class=&quot;form-label&quot;&gt;Small file input example&lt;/label&gt;
        &lt;input class=&quot;form-control form-control-sm&quot; id=&quot;inputExample38&quot; type=&quot;file&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->


        </div><!--End row-->
    </div><!--End container-fluid-->
    </div><!--End app-wrapper-->

@endsection

@section('js')

    <script src="assets/libs/prismjs/prism.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
