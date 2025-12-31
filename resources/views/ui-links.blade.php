@extends('partials.layouts.master')

@section('title', 'UI Links | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Links')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')

    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Link Opacity</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="link-opacity" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-link-opacity-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-link-opacity" type="button" role="tab"
                                    aria-controls="html-link-opacity" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-link-opacity-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-link-opacity" type="button" role="tab"
                                    aria-controls="preview-link-opacity" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Change the alpha opacity of the link <code>rgba()</code> color value with
                            utilities. Please be aware that changes to a color’s opacity can lead to links with <a
                                href="https://getbootstrap.com/docs/5.3/getting-started/accessibility/#color-contrast"
                                target="_blank"><em>insufficient</em> contrast</a>.</p>
                        <div class="tab-content" id="link-opacityContent">
                            <div class="tab-pane fade show active" id="html-link-opacity" role="tabpanel"
                                aria-labelledby="html-link-opacity-tab" tabindex="0">
                                <div class="d-flex flex-column gap-3 flex-wrap">
                                    <a class="link-opacity-10" href="javascript:void(0)">Link opacity 10</a>
                                    <a class="link-opacity-25" href="javascript:void(0)">Link opacity 25</a>
                                    <a class="link-opacity-50" href="javascript:void(0)">Link opacity 50</a>
                                    <a class="link-opacity-75" href="javascript:void(0)">Link opacity 75</a>
                                    <a class="link-opacity-100" href="javascript:void(0)">Link opacity 100</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-link-opacity" role="tabpanel"
                                aria-labelledby="preview-link-opacity-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a class=&quot;link-opacity-10&quot; href=&quot;#&quot;&gt;Link opacity 10&lt;/a&gt;
&lt;a class=&quot;link-opacity-25&quot; href=&quot;#&quot;&gt;Link opacity 25&lt;/a&gt;
&lt;a class=&quot;link-opacity-50&quot; href=&quot;#&quot;&gt;Link opacity 50&lt;/a&gt;
&lt;a class=&quot;link-opacity-75&quot; href=&quot;#&quot;&gt;Link opacity 75&lt;/a&gt;
&lt;a class=&quot;link-opacity-100&quot; href=&quot;#&quot;&gt;Link opacity 100&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Link Hover Opacity</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="link-opacity-hover" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-link-opacity-hover-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-link-opacity-hover" type="button" role="tab"
                                    aria-controls="html-link-opacity-hover" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-link-opacity-hover-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-link-opacity-hover" type="button" role="tab"
                                    aria-controls="preview-link-opacity-hover" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"> Use <code>.link-opacity-*-hover</code> to adjust <strong>link hover
                                opacity</strong> in Bootstrap, making links more transparent on hover.</p>
                        <div class="tab-content" id="link-opacity-hoverContent">
                            <div class="tab-pane fade show active" id="html-link-opacity-hover" role="tabpanel"
                                aria-labelledby="html-link-opacity-hover-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap gap-3">
                                    <a class="link-opacity-10-hover" href="javascript:void(0)">Link hover opacity 10</a>
                                    <a class="link-opacity-25-hover" href="javascript:void(0)">Link hover opacity 25</a>
                                    <a class="link-opacity-50-hover" href="javascript:void(0)">Link hover opacity 50</a>
                                    <a class="link-opacity-75-hover" href="javascript:void(0)">Link hover opacity 75</a>
                                    <a class="link-opacity-100-hover" href="javascript:void(0)">Link hover opacity 100</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-link-opacity-hover" role="tabpanel"
                                aria-labelledby="preview-link-opacity-hover-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a class=&quot;link-opacity-10-hover&quot; href=&quot;#&quot;&gt;Link hover opacity 10&lt;/a&gt;
&lt;a class=&quot;link-opacity-25-hover&quot; href=&quot;#&quot;&gt;Link hover opacity 25&lt;/a&gt;
&lt;a class=&quot;link-opacity-50-hover&quot; href=&quot;#&quot;&gt;Link hover opacity 50&lt;/a&gt;
&lt;a class=&quot;link-opacity-75-hover&quot; href=&quot;#&quot;&gt;Link hover opacity 75&lt;/a&gt;
&lt;a class=&quot;link-opacity-100-hover&quot; href=&quot;#&quot;&gt;Link hover opacity 100&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Link hover variants</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="link-underline-hover"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-link-underline-hover-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-link-underline-hover" type="button" role="tab"
                                    aria-controls="html-link-underline-hover" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-link-underline-hover-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-link-underline-hover" type="button" role="tab"
                                    aria-controls="preview-link-underline-hover" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Just like the <code>.link-opacity-*-hover</code> utilities,
                            <code>.link-offset</code> and <code>.link-underline-opacity</code> utilities include
                            <code>:hover</code> variants by default. Mix and match to create unique link styles.</p>
                        <div class="tab-content" id="link-underline-hoverContent">
                            <div class="tab-pane fade show active" id="html-link-underline-hover" role="tabpanel"
                                aria-labelledby="html-link-underline-hover-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap">
                                    <a class="text-decoration-underline link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                        href="javascript:void(0)">
                                        Underline opacity 0
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-link-underline-hover" role="tabpanel"
                                aria-labelledby="preview-link-underline-hover-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a class=&quot;text-decoration-underline link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover&quot; href=&quot;#&quot;&gt;
    Underline opacity 0
&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Underline opacity</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="underline-opacity" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-underline-opacity-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-underline-opacity" type="button" role="tab"
                                    aria-controls="html-underline-opacity" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-underline-opacity-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-underline-opacity" type="button" role="tab"
                                    aria-controls="preview-underline-opacity" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Change the underline’s opacity. Requires adding <code>.link-underline</code>
                            to first set an <code>rgba()</code> color we use to then modify the alpha opacity.</p>
                        <div class="tab-content" id="underline-opacityContent">
                            <div class="tab-pane fade show active" id="html-underline-opacity" role="tabpanel"
                                aria-labelledby="html-underline-opacity-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap gap-3">
                                    <a href="javascript:void(0)"
                                        class="link-offset-2 text-decoration-underline link-underline link-underline-opacity-0">Underline
                                        opacity 0</a>
                                    <a href="javascript:void(0)"
                                        class="link-offset-2 text-decoration-underline link-underline link-underline-opacity-10">Underline
                                        opacity 10</a>
                                    <a href="javascript:void(0)"
                                        class="link-offset-2 text-decoration-underline link-underline link-underline-opacity-25">Underline
                                        opacity 25</a>
                                    <a href="javascript:void(0)"
                                        class="link-offset-2 text-decoration-underline link-underline link-underline-opacity-50">Underline
                                        opacity 50</a>
                                    <a href="javascript:void(0)"
                                        class="link-offset-2 text-decoration-underline link-underline link-underline-opacity-75">Underline
                                        opacity 75</a>
                                    <a href="javascript:void(0)"
                                        class="link-offset-2 text-decoration-underline link-underline link-underline-opacity-100">Underline
                                        opacity 100</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-underline-opacity" role="tabpanel"
                                aria-labelledby="preview-underline-opacity-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a href=&quot;#&quot; class=&quot;link-offset-2 text-decoration-underline link-underline link-underline-opacity-0&quot;&gt;Underline opacity 0&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-offset-2 text-decoration-underline link-underline link-underline-opacity-10&quot;&gt;Underline opacity 10&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-offset-2 text-decoration-underline link-underline link-underline-opacity-25&quot;&gt;Underline opacity 25&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-offset-2 text-decoration-underline link-underline link-underline-opacity-50&quot;&gt;Underline opacity 50&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-offset-2 text-decoration-underline link-underline link-underline-opacity-75&quot;&gt;Underline opacity 75&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-offset-2 text-decoration-underline link-underline link-underline-opacity-100&quot;&gt;Underline opacity 100&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Underline offset</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="underline-offset" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-underline-offset-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-underline-offset" type="button" role="tab"
                                    aria-controls="html-underline-offset" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-underline-offset-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-underline-offset" type="button" role="tab"
                                    aria-controls="preview-underline-offset" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Change the underline’s distance from your text. Offset is set in
                            <code>em</code> units to automatically scale with the element’s current <code>font-size</code>.
                        </p>
                        <div class="tab-content" id="underline-offsetContent">
                            <div class="tab-pane fade show active" id="html-underline-offset" role="tabpanel"
                                aria-labelledby="html-underline-offset-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap gap-3">
                                    <a href="javascript:void(0)">Default link</a>
                                    <a class="text-decoration-underline link-offset-1" href="javascript:void(0)">Offset 1
                                        link</a>
                                    <a class="text-decoration-underline link-offset-1" href="javascript:void(0)">Offset 2
                                        link</a>
                                    <a class="text-decoration-underline link-offset-1" href="javascript:void(0)">Offset 3
                                        link</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-underline-offset" role="tabpanel"
                                aria-labelledby="preview-underline-offset-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a href=&quot;#&quot;&gt;Default link&lt;/a&gt;
&lt;a class=&quot;text-decoration-underline link-offset-1&quot; href=&quot;#&quot;&gt;Offset 1 link&lt;/a&gt;
&lt;a class=&quot;text-decoration-underline link-offset-1&quot; href=&quot;#&quot;&gt;Offset 2 link&lt;/a&gt;
&lt;a class=&quot;text-decoration-underline link-offset-1&quot; href=&quot;#&quot;&gt;Offset 3 link&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Pointer Event</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="pointer-event" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-pointer-event-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-pointer-event" type="button" role="tab"
                                    aria-controls="html-pointer-event" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-pointer-event-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-pointer-event" type="button" role="tab"
                                    aria-controls="preview-pointer-event" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="pointer-eventContent">
                            <div class="tab-pane fade show active" id="html-pointer-event" role="tabpanel"
                                aria-labelledby="html-pointer-event-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap">
                                    <p><a href="javascript:void(0)"
                                            class="pe-none text-primary fw-medium text-decoration-underline"
                                            tabindex="-1">This link</a> can not be clicked.</p>
                                    <p><a href="javascript:void(0)"
                                            class="pe-auto text-primary fw-medium text-decoration-underline">This link</a>
                                        can be clicked (this is default behavior).</p>
                                    <p class="pe-none mb-0"><a href="javascript:void(0)" tabindex="-1"
                                            class="text-primary fw-medium text-decoration-underline">This link</a> can not
                                        be clicked because the <code>pointer-events</code> property is inherited from its
                                        parent. However, <a href="javascript:void(0)" class="pe-auto">this link</a> has a
                                        <code>pe-auto</code> class and can be clicked.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-pointer-event" role="tabpanel"
                                aria-labelledby="preview-pointer-event-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;p&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;pe-none text-primary fw-medium text-decoration-underline&quot; tabindex=&quot;-1&quot;&gt;This link&lt;/a&gt; can not be clicked.&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;pe-auto text-primary fw-medium text-decoration-underline&quot;&gt;This link&lt;/a&gt; can be clicked (this is default behavior).&lt;/p&gt;
&lt;p class=&quot;pe-none mb-0&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; tabindex=&quot;-1&quot; class=&quot;text-primary fw-medium text-decoration-underline&quot;&gt;This link&lt;/a&gt; can not be clicked because the &lt;code&gt;pointer-events&lt;/code&gt; property is inherited from its parent. However, &lt;a href=&quot;javascript:void(0)&quot; class=&quot;pe-auto&quot;&gt;this link&lt;/a&gt; has a &lt;code&gt;pe-auto&lt;/code&gt; class and can be clicked.&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Underline color</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="underline-color" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-underline-color-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-underline-color" type="button" role="tab"
                                    aria-controls="html-underline-color" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-underline-color-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-underline-color" type="button" role="tab"
                                    aria-controls="preview-underline-color" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Change the underline’s color independent of the link text color.</p>
                        <div class="tab-content" id="underline-colorContent">
                            <div class="tab-pane fade show active" id="html-underline-color" role="tabpanel"
                                aria-labelledby="html-underline-color-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap gap-3">
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-primary">Primary underline</a>
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-secondary">Secondary underline</a>
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-success">Success underline</a>
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-danger">Danger underline</a>
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-warning">Warning underline</a>
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-info">Info underline</a>
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-light">Light underline</a>
                                    <a href="javascript:void(0)"
                                        class="text-decoration-underline link-underline-dark">Dark underline</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-underline-color" role="tabpanel"
                                aria-labelledby="preview-underline-color-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-primary&quot;&gt;Primary underline&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-secondary&quot;&gt;Secondary underline&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-success&quot;&gt;Success underline&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-danger&quot;&gt;Danger underline&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-warning&quot;&gt;Warning underline&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-info&quot;&gt;Info underline&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-light&quot;&gt;Light underline&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;text-decoration-underline link-underline-dark&quot;&gt;Dark underline&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Link colors</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="link-colors" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-link-colors-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-link-colors" type="button" role="tab"
                                    aria-controls="html-link-colors" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-link-colors-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-link-colors" type="button" role="tab"
                                    aria-controls="preview-link-colors" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.link-*</code> classes to style links with color, including
                            <code>:hover</code> and <code>:focus</code> states. Some colors are lighter and work best on
                            dark backgrounds for better contrast.</p>
                        <div class="tab-content" id="link-colorContents">
                            <div class="tab-pane fade show active" id="html-link-colors" role="tabpanel"
                                aria-labelledby="html-link-colors-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap gap-3">
                                    <a href="javascript:void(0)"
                                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Primary
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Secondary
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Success
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Danger
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Warning
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Light
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Dark
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Emphasis
                                        link</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-link-colors" role="tabpanel"
                                aria-labelledby="preview-link-colors-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a href=&quot;#&quot; class=&quot;link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Primary link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Secondary link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Success link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Danger link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Warning link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Info link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Light link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover&quot;&gt;Dark link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover&quot;&gt;Emphasis link&lt;/a&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Link utilities</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="link-utilities" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-link-utilities-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-link-utilities" type="button" role="tab"
                                    aria-controls="html-link-utilities" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-link-utilities-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-link-utilities" type="button" role="tab"
                                    aria-controls="preview-link-utilities" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Link styling has been enhanced with new utilities. You can now adjust link
                            opacity, underline opacity, and underline offset using these updated helpers.</p>
                        <div class="tab-content" id="link-colorContents">
                            <div class="tab-pane fade show active" id="html-link-utilities" role="tabpanel"
                                aria-labelledby="html-link-utilities-tab" tabindex="0">
                                <div class="d-flex flex-column flex-wrap gap-3">
                                    <a href="javascript:void(0)"
                                        class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25-hover">Primary
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-secondary link-offset-2 text-decoration-underline link-underline-opacity-100-hover">Secondary
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-success link-offset-2 text-decoration-underline link-underline-opacity-75-hover">Success
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-danger link-offset-2 text-decoration-underline link-underline-opacity-50-hover">Danger
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-warning link-offset-2 text-decoration-underline link-underline-opacity-100-hover">Warning
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-info link-offset-2 text-decoration-underline link-underline-opacity-100-hover">Info
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-light link-offset-2 text-decoration-underline link-underline-opacity-75-hover">Light
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-dark link-offset-2 text-decoration-underline link-underline-opacity-100-hover">Dark
                                        link</a>
                                    <a href="javascript:void(0)"
                                        class="link-body-emphasis link-offset-2 text-decoration-underline link-underline-opacity-25-hover">Emphasis
                                        link</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-link-utilities" role="tabpanel"
                                aria-labelledby="preview-link-utilities-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a href=&quot;#&quot; class=&quot;link-primary link-offset-2 text-decoration-underline link-underline-opacity-25-hover&quot;&gt;Primary link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-secondary link-offset-2 text-decoration-underline link-underline-opacity-100-hover&quot;&gt;Secondary link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-success link-offset-2 text-decoration-underline link-underline-opacity-75-hover&quot;&gt;Success link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-danger link-offset-2 text-decoration-underline link-underline-opacity-50-hover&quot;&gt;Danger link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-warning link-offset-2 text-decoration-underline link-underline-opacity-100-hover&quot;&gt;Warning link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-info link-offset-2 text-decoration-underline link-underline-opacity-100-hover&quot;&gt;Info link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-light link-offset-2 text-decoration-underline link-underline-opacity-75-hover&quot;&gt;Light link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-dark link-offset-2 text-decoration-underline link-underline-opacity-100-hover&quot;&gt;Dark link&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;link-body-emphasis link-offset-2 text-decoration-underline link-underline-opacity-25-hover&quot;&gt;Emphasis link&lt;/a&gt;</code></pre>
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
