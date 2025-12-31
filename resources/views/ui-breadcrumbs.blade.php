@extends('partials.layouts.master')

@section('title', 'UI Breadcrumbs | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Breadcrumbs')
@section('content')

    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Breadcrumbs</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-breadcrumbs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-breadcrumbs-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-breadcrumbs" type="button" role="tab"
                                    aria-controls="html-default-breadcrumbs" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-breadcrumbs-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-breadcrumbs" type="button" role="tab"
                                    aria-controls="preview-default-breadcrumbs" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create navigational links with Bootstrap's <code>.breadcrumb</code> component.
                            Use <code>&lt;nav&gt;</code> and <code>&lt;ol class="breadcrumb"&gt;</code> to display a
                            breadcrumb trail, indicating the current page's location.</p>
                        <div class="tab-content" id="default-breadcrumbsContent">
                            <div class="tab-pane fade show active" id="html-default-breadcrumbs" role="tabpanel"
                                aria-labelledby="html-default-breadcrumbs-tab" tabindex="0">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="preview-default-breadcrumbs" role="tabpanel"
                                aria-labelledby="preview-default-breadcrumbs-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Home&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb mb-0&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Breadcrumb with line icon</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="line-icon-with-breadcrumbs"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-line-icon-with-breadcrumbs-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-line-icon-with-breadcrumbs" type="button"
                                    role="tab" aria-controls="html-line-icon-with-breadcrumbs"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-line-icon-with-breadcrumbs-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-line-icon-with-breadcrumbs" type="button" role="tab"
                                    aria-controls="preview-line-icon-with-breadcrumbs"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the custom <code>.breadcrumb-line</code> class to display breadcrumbs with
                            custom Remix Icons. Apply it to the <code>&lt;ol class="breadcrumb"&gt;</code> to enhance the
                            breadcrumb trail with icons.</p>
                        <div class="tab-content" id="line-icon-with-breadcrumbsContent">
                            <div class="tab-pane fade show active" id="html-line-icon-with-breadcrumbs" role="tabpanel"
                                aria-labelledby="html-line-icon-with-breadcrumbs-tab" tabindex="0">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-line">
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-line">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-line mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="preview-line-icon-with-breadcrumbs" role="tabpanel"
                                aria-labelledby="preview-line-icon-with-breadcrumbs-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-line&quot;&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Home&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-line&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-line mb-0&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Breadcrumb with arrow icon</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="arrow-icon-with-breadcrumbs"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-arrow-icon-with-breadcrumbs-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-arrow-icon-with-breadcrumbs"
                                    type="button" role="tab" aria-controls="html-arrow-icon-with-breadcrumbs"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-arrow-icon-with-breadcrumbs-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-arrow-icon-with-breadcrumbs"
                                    type="button" role="tab" aria-controls="preview-arrow-icon-with-breadcrumbs"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"> Use the custom <code>.breadcrumb-arrow</code> class to create breadcrumb
                            trails with arrow-shaped separators using Remix Icons. Apply it to the <code>&lt;ol
                                class="breadcrumb"&gt;</code> for a stylish, icon-based navigation.</p>
                        <div class="tab-content" id="arrow-icon-with-breadcrumbsContent">
                            <div class="tab-pane fade show active" id="html-arrow-icon-with-breadcrumbs" role="tabpanel"
                                aria-labelledby="html-arrow-icon-with-breadcrumbs-tab" tabindex="0">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-arrow">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="preview-arrow-icon-with-breadcrumbs" role="tabpanel"
                                aria-labelledby="preview-arrow-icon-with-breadcrumbs-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-arrow&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-arrow mb-0&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Breadcrumb with double arrow icon</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="double-arrow-icon-with-breadcrumbs"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-double-arrow-icon-with-breadcrumbs-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-double-arrow-icon-with-breadcrumbs"
                                    type="button" role="tab" aria-controls="html-double-arrow-icon-with-breadcrumbs"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-double-arrow-icon-with-breadcrumbs-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-double-arrow-icon-with-breadcrumbs"
                                    type="button" role="tab"
                                    aria-controls="preview-double-arrow-icon-with-breadcrumbs"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the custom <code>.breadcrumb-double-arrow</code> class to create
                            breadcrumb trails with double arrow separators using Remix Icons. Apply it to the <code>&lt;ol
                                class="breadcrumb"&gt;</code> for a unique and visually distinct navigation style.</p>
                        <div class="tab-content" id="double-arrow-icon-with-breadcrumbsContent">
                            <div class="tab-pane fade show active" id="html-double-arrow-icon-with-breadcrumbs"
                                role="tabpanel" aria-labelledby="html-double-arrow-icon-with-breadcrumbs-tab"
                                tabindex="0">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-double-arrow">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-double-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="preview-double-arrow-icon-with-breadcrumbs" role="tabpanel"
                                aria-labelledby="preview-double-arrow-icon-with-breadcrumbs-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-double-arrow&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb breadcrumb-double-arrow mb-0&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colored Breadcrumb</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colored-breadcrumbs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colored-breadcrumbs-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colored-breadcrumbs" type="button" role="tab"
                                    aria-controls="html-colored-breadcrumbs" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colored-breadcrumbs-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colored-breadcrumbs" type="button" role="tab"
                                    aria-controls="preview-colored-breadcrumbs" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create colorful breadcrumb trails by applying Bootstrap utility classes like
                            <code>.bg-primary</code> or <code>.text-light</code> to the <code>&lt;nav&gt;</code> or
                            <code>&lt;ol class="breadcrumb"&gt;</code>. This adds vibrant backgrounds or text colors to
                            your breadcrumb.
                        </p>
                        <div class="tab-content" id="colored-breadcrumbsContent">
                            <div class="tab-pane fade show active" id="html-colored-breadcrumbs" role="tabpanel"
                                aria-labelledby="html-colored-breadcrumbs-tab" tabindex="0">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-primary mb-3">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-secondary mb-3">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-success mb-3">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-info mb-3">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-warning mb-3">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-danger mb-3">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-light mb-3">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb colored-breadcrumb breadcrumb-double-arrow mb-0 bg-dark">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="preview-colored-breadcrumbs" role="tabpanel"
                                aria-labelledby="preview-colored-breadcrumbs-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-primary mb-3&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-secondary mb-3&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-success mb-3&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-info mb-3&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-warning mb-3&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-danger mb-3&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow bg-light mb-3&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
    &lt;ol class=&quot;breadcrumb colored-breadcrumb breadcrumb-double-arrow mb-0 bg-dark&quot;&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
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
