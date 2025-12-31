@extends('partials.layouts.master')

@section('title', 'Avatars | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Avatars')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection

@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Avatars Letter</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="avatar-letter" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-avatar-letter-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-avatar-letter" type="button" role="tab"
                                    aria-controls="html-avatar-letter" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-avatar-letter-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-avatar-letter" type="button" role="tab"
                                    aria-controls="preview-avatar-letter" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="avatar-letter">
                            <div class="tab-pane fade show active" id="html-avatar-letter" role="tabpanel"
                                aria-labelledby="html-avatar-letter-tab" tabindex="0">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="avatar-item avatar-md avatar-title text-white bg-primary">
                                        PR
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-secondary">
                                        LK
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-success">
                                        KE
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-info">
                                        AU
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-warning">
                                        PR
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-danger">
                                        PI
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-avatar-letter" role="tabpanel"
                                aria-labelledby="preview-avatar-letter-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-primary&quot;&gt;
    PR
&lt;/div&gt;
&lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-secondary&quot;&gt;
    LK
&lt;/div&gt;
&lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-success&quot;&gt;
    KE
&lt;/div&gt;
&lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-info&quot;&gt;
    AU
&lt;/div&gt;
&lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-warning&quot;&gt;
    PR
&lt;/div&gt;
&lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-danger&quot;&gt;
    PI
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Avatars Group Letter</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="avatar-group-letter" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-avatar-group-letter-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-avatar-group-letter" type="button" role="tab"
                                    aria-controls="html-avatar-group-letter" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-avatar-group-letter-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-avatar-group-letter" type="button" role="tab"
                                    aria-controls="preview-avatar-group-letter" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="avatar-group-letter">
                            <div class="tab-pane fade show active" id="html-avatar-group-letter" role="tabpanel"
                                aria-labelledby="html-avatar-group-letter-tab" tabindex="0">
                                <div class="avatar-group">
                                    <div class="avatar-item avatar-md avatar-title text-white bg-primary">
                                        PR
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-secondary">
                                        LI
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-success">
                                        SH
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-info">
                                        SU
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-warning">
                                        PR
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-white bg-danger">
                                        SR
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-avatar-group-letter" role="tabpanel"
                                aria-labelledby="preview-avatar-group-letter-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;avatar-group&quot;&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-primary&quot;&gt;
        PR
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-secondary&quot;&gt;
        LI
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-success&quot;&gt;
        SH
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-info&quot;&gt;
        SU
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-warning&quot;&gt;
        PR
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-white bg-danger&quot;&gt;
        SR
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Light Avatars Group Letter</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="light-avatar-group-letter"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-light-avatar-group-letter-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-light-avatar-group-letter" type="button"
                                    role="tab" aria-controls="html-light-avatar-group-letter"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-light-avatar-group-letter-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-light-avatar-group-letter" type="button" role="tab"
                                    aria-controls="preview-light-avatar-group-letter"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="light-avatar-group-letter">
                            <div class="tab-pane fade show active" id="html-light-avatar-group-letter" role="tabpanel"
                                aria-labelledby="html-light-avatar-group-letter-tab" tabindex="0">
                                <div class="avatar-group">
                                    <div class="avatar-item avatar-md avatar-title text-primary bg-primary-subtle">
                                        PR
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-secondary bg-secondary-subtle">
                                        LI
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-success bg-success-subtle">
                                        SH
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-info bg-info-subtle">
                                        SU
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-warning bg-warning-subtle">
                                        PR
                                    </div>
                                    <div class="avatar-item avatar-md avatar-title text-danger bg-danger-subtle">
                                        SR
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-light-avatar-group-letter" role="tabpanel"
                                aria-labelledby="preview-light-avatar-group-letter-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;avatar-group&quot;&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-primary bg-primary-subtle&quot;&gt;
        PR
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-secondary bg-secondary-subtle&quot;&gt;
        LI
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-success bg-success-subtle&quot;&gt;
        SH
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-info bg-info-subtle&quot;&gt;
        SU
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-warning bg-warning-subtle&quot;&gt;
        PR
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md avatar-title text-danger bg-danger-subtle&quot;&gt;
        SR
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Avatars Group Image</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-avatar-group" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-avatar-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-image-avatar-group" type="button" role="tab"
                                    aria-controls="html-image-avatar-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-avatar-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-avatar-group" type="button" role="tab"
                                    aria-controls="preview-image-avatar-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="image-avatar-group">
                            <div class="tab-pane fade show active" id="html-image-avatar-group" role="tabpanel"
                                aria-labelledby="html-image-avatar-group-tab" tabindex="0">
                                <div class="avatar-group">
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-image-avatar-group" role="tabpanel"
                                aria-labelledby="preview-image-avatar-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;avatar-group&quot;&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Indicator Position And Icon</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="indicator-position-icon-avatar"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-indicator-position-icon-avatar-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-indicator-position-icon-avatar"
                                    type="button" role="tab" aria-controls="html-indicator-position-icon-avatar"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-indicator-position-icon-avatar-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-indicator-position-icon-avatar"
                                    type="button" role="tab" aria-controls="preview-indicator-position-icon-avatar"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="indicator-position-icon-avatar">
                            <div class="tab-pane fade show active" id="html-indicator-position-icon-avatar"
                                role="tabpanel" aria-labelledby="html-indicator-position-icon-avatar-tab" tabindex="0">
                                <div class="d-flex align-items-center flex-wrap gap-3">
                                    <div class="position-relative">
                                        <div class="avatar-item avatar-md avatar-title text-primary bg-primary-subtle">
                                            <i class="ri-user-fill"></i>
                                        </div>
                                        <span
                                            class="position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-primary end-0 bottom-0"></span>
                                    </div>
                                    <div class="position-relative">
                                        <div class="avatar-item avatar-md avatar-title text-danger bg-danger-subtle">
                                            <i class="ri-user-fill"></i>
                                        </div>
                                        <span
                                            class="position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-danger end-0 top-0"></span>
                                    </div>
                                    <div class="position-relative">
                                        <div class="avatar-item avatar-md">
                                            <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                                alt="avatar image">
                                        </div>
                                        <span
                                            class="position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-success end-0 bottom-0"></span>
                                    </div>
                                    <div class="position-relative">
                                        <div class="avatar-item avatar-md">
                                            <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                                alt="avatar image">
                                        </div>
                                        <span
                                            class="position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-success end-0 top-0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-indicator-position-icon-avatar" role="tabpanel"
                                aria-labelledby="preview-indicator-position-icon-avatar-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex align-items-center flex-wrap gap-3&quot;&gt;
    &lt;div class=&quot;position-relative&quot;&gt;
        &lt;div class=&quot;avatar-item avatar-md avatar-title text-primary bg-primary-subtle&quot;&gt;
            &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;span class=&quot;position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-primary end-0 bottom-0&quot;&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;position-relative&quot;&gt;
        &lt;div class=&quot;avatar-item avatar-md avatar-title text-danger bg-danger-subtle&quot;&gt;
            &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;span class=&quot;position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-danger end-0 top-0&quot;&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;position-relative&quot;&gt;
        &lt;div class=&quot;avatar-item avatar-md&quot;&gt;
            &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
        &lt;/div&gt;
        &lt;span class=&quot;position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-success end-0 bottom-0&quot;&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class=&quot;position-relative&quot;&gt;
        &lt;div class=&quot;avatar-item avatar-md&quot;&gt;
            &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
        &lt;/div&gt;
        &lt;span class=&quot;position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-success end-0 top-0&quot;&gt;&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Radius</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="radius-avatar" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-radius-avatar-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-radius-avatar" type="button" role="tab"
                                    aria-controls="html-radius-avatar" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-radius-avatar-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-radius-avatar" type="button" role="tab"
                                    aria-controls="preview-radius-avatar" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="radius-avatar">
                            <div class="tab-pane fade show active" id="html-radius-avatar" role="tabpanel"
                                aria-labelledby="html-radius-avatar-tab" tabindex="0">
                                <div class="d-flex align-items-center flex-wrap gap-3">
                                    <div
                                        class="avatar-item avatar-lg rounded-0 avatar-title text-primary bg-primary-subtle">
                                        <i class="ri-user-fill"></i>
                                    </div>
                                    <div
                                        class="avatar-item avatar-lg rounded-2 avatar-title text-primary bg-primary-subtle">
                                        <i class="ri-user-fill"></i>
                                    </div>
                                    <div class="avatar-item avatar-lg avatar-title text-primary bg-primary-subtle">
                                        <i class="ri-user-fill"></i>
                                    </div>
                                    <div class="avatar-item avatar-lg">
                                        <img class="img-fluid avatar-lg rounded-0" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item avatar-lg">
                                        <img class="img-fluid avatar-lg rounded-2" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item avatar-lg">
                                        <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-radius-avatar" role="tabpanel"
                                aria-labelledby="preview-radius-avatar-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex align-items-center flex-wrap gap-3&quot;&gt;
    &lt;div class=&quot;avatar-item avatar-lg rounded-0 avatar-title text-primary bg-primary-subtle&quot;&gt;
        &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-lg rounded-2 avatar-title text-primary bg-primary-subtle&quot;&gt;
        &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-lg avatar-title text-primary bg-primary-subtle&quot;&gt;
        &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-lg&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg rounded-0&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-lg&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg rounded-2&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-lg&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Avatars Size</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="size-avatar" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-size-avatar-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-size-avatar" type="button" role="tab"
                                    aria-controls="html-size-avatar" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-size-avatar-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-size-avatar" type="button" role="tab"
                                    aria-controls="preview-size-avatar" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="size-avatar">
                            <div class="tab-pane fade show active" id="html-size-avatar" role="tabpanel"
                                aria-labelledby="html-size-avatar-tab" tabindex="0">
                                <div class="d-flex align-items-center flex-wrap gap-3">
                                    <div class="avatar-item avatar-xl">
                                        <img class="img-fluid avatar-xl" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item avatar-lg">
                                        <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item avatar-md">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item avatar-sm">
                                        <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item avatar-xs">
                                        <img class="img-fluid avatar-xs" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-size-avatar" role="tabpanel"
                                aria-labelledby="preview-size-avatar-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex align-items-center flex-wrap gap-3&quot;&gt;
    &lt;div class=&quot;avatar-item avatar-xl&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-xl&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-lg&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-sm&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-sm&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-xs&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-xs&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Avatars Group Size</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="size-group-avatar" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-size-group-avatar-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-size-group-avatar" type="button" role="tab"
                                    aria-controls="html-size-group-avatar" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-size-group-avatar-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-size-group-avatar" type="button" role="tab"
                                    aria-controls="preview-size-group-avatar" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="size-group-avatar">
                            <div class="tab-pane fade show active" id="html-size-group-avatar" role="tabpanel"
                                aria-labelledby="html-size-group-avatar-tab" tabindex="0">
                                <div class="avatar-group mb-3">
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-lg" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item fw-semibold avatar-title bg-primary">
                                        <span class="d-flex align-items-center justify-content-center avatar-lg">5+</span>
                                    </div>
                                </div>
                                <div class="avatar-group mb-3">
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item fw-semibold avatar-title bg-primary">
                                        <span class="d-flex align-items-center justify-content-center avatar-md">5+</span>
                                    </div>
                                </div>
                                <div class="avatar-group">
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item">
                                        <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                            alt="avatar image">
                                    </div>
                                    <div class="avatar-item fw-semibold avatar-title bg-primary">
                                        <span class="d-flex align-items-center justify-content-center avatar-sm">5+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-size-group-avatar" role="tabpanel"
                                aria-labelledby="preview-size-group-avatar-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;avatar-group&quot;&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-lg&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-lg fw-semibold avatar-title bg-primary&quot;&gt;
        5+
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group&quot;&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-md&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-md fw-semibold avatar-title bg-primary&quot;&gt;
        5+
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;avatar-group&quot;&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-sm&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-sm&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-sm&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-sm&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item&quot;&gt;
        &lt;img class=&quot;img-fluid avatar-sm&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;avatar image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;avatar-item avatar-sm fw-semibold avatar-title bg-primary&quot;&gt;
        5+
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
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
