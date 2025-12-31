@extends('partials.layouts.master')

@section('title', 'UI Tooltip | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Tooltip')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />
@endsection
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">


        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Tooltip Directions</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="directions-tooltip" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-directions-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-directions-tooltip" type="button" role="tab"
                                    aria-controls="html-directions-tooltip" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-directions-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-directions-tooltip" type="button" role="tab"
                                    aria-controls="preview-directions-tooltip   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Tooltip example are available with following options, Directions are mirrored
                            when using Bootstrap in RTL.</p>
                        <div class="tab-content" id="directions-tooltipContent">
                            <div class="tab-pane fade show active" id="html-directions-tooltip" role="tabpanel"
                                aria-labelledby="html-directions-tooltip-tab" tabindex="0">
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-white" data-bs-placement="top"
                                        data-bs-title="Tooltip on top">
                                        Tooltip on top
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-white" data-bs-placement="right"
                                        data-bs-title="Tooltip on right">
                                        Tooltip on right
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-white" data-bs-placement="bottom"
                                        data-bs-title="Tooltip on bottom">
                                        Tooltip on bottom
                                    </button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                        data-bs-custom-class="tooltip-white" data-bs-placement="left"
                                        data-bs-title="Tooltip on left">
                                        Tooltip on left
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-directions-tooltip" role="tabpanel"
                                aria-labelledby="preview-directions-tooltip-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-white&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Tooltip on top
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-white&quot; data-bs-placement=&quot;right&quot; data-bs-title=&quot;Tooltip on right&quot;&gt;
    Tooltip on right
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-white&quot; data-bs-placement=&quot;bottom&quot; data-bs-title=&quot;Tooltip on bottom&quot;&gt;
    Tooltip on bottom
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-white&quot; data-bs-placement=&quot;left&quot; data-bs-title=&quot;Tooltip on left&quot;&gt;
    Tooltip on left
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Tooltip with HTML</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="html-with-tooltip" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-html-with-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-html-with-tooltip" type="button" role="tab"
                                    aria-controls="html-html-with-tooltip" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-html-with-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-html-with-tooltip" type="button" role="tab"
                                    aria-controls="preview-html-with-tooltip   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">When you hover over the button labeled "Tooltip with HTML," a tooltip will
                            appear displaying formatted text. The tooltip's content includes HTML elements such as
                            <code><em>italic</em>, <u>underlined</u>, and <b>bold</b></code> text. The
                            <code>`data-bs-html="true"`</code> attribute allows the tooltip to render HTML tags correctly.
                        </p>
                        <div class="tab-content" id="html-with-tooltipContent">
                            <div class="tab-pane fade show active" id="html-html-with-tooltip" role="tabpanel"
                                aria-labelledby="html-html-with-tooltip-tab" tabindex="0">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                    data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                    Tooltip with HTML
                                </button>
                            </div>
                            <div class="tab-pane fade" id="preview-html-with-tooltip" role="tabpanel"
                                aria-labelledby="preview-html-with-tooltip-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-html=&quot;true&quot; title=&quot;&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;&quot;&gt;
    Tooltip with HTML
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Custom Tooltips</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="custom-tooltip" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-custom-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-custom-tooltip" type="button" role="tab"
                                    aria-controls="html-custom-tooltip" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-custom-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-custom-tooltip" type="button" role="tab"
                                    aria-controls="preview-custom-tooltip   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You can customize the appearance of tooltips using CSS variables. We set a
                            custom class with <code>data-bs-custom-class="custom-tooltip"</code> to scope our custom
                            appearance and use it to override a local CSS variable.</p>
                        <div class="tab-content" id="custom-tooltipContent">
                            <div class="tab-pane fade show active" id="html-custom-tooltip" role="tabpanel"
                                aria-labelledby="html-custom-tooltip-tab" tabindex="0">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                    data-bs-title="This top tooltip is themed via CSS variables.">
                                    Custom tooltip
                                </button>
                            </div>
                            <div class="tab-pane fade" id="preview-custom-tooltip" role="tabpanel"
                                aria-labelledby="preview-custom-tooltip-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;custom-tooltip&quot; data-bs-title=&quot;This top tooltip is themed via CSS variables.&quot;&gt;
    Custom tooltip
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled elements</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-elements-tooltip"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-elements-tooltip-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-disabled-elements-tooltip" type="button"
                                    role="tab" aria-controls="html-disabled-elements-tooltip"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-elements-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-elements-tooltip" type="button" role="tab"
                                    aria-controls="preview-disabled-elements-tooltip   "
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Elements with the <code>disabled</code> attribute aren’t interactive, meaning
                            users cannot focus, hover, or click them to trigger a tooltip (or popover). As a workaround,
                            you’ll want to trigger the tooltip from a wrapper <code>&lt;div&gt;</code> or
                            <code>&lt;span&gt;</code>, ideally made keyboard-focusable using <code>tabindex="0"</code></p>
                        <div class="tab-content" id="disabled-elements-tooltipContent">
                            <div class="tab-pane fade show active" id="html-disabled-elements-tooltip" role="tabpanel"
                                aria-labelledby="html-disabled-elements-tooltip-tab" tabindex="0">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip"
                                    data-bs-title="Disabled tooltip">
                                    <button class="btn btn-primary" type="button" disabled>Disabled button</button>
                                </span>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-elements-tooltip" role="tabpanel"
                                aria-labelledby="preview-disabled-elements-tooltip-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;span class=&quot;d-inline-block&quot; tabindex=&quot;0&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Disabled tooltip&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
&lt;/span&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Tooltips on links</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="links-on-tooltip" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-links-on-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-links-on-tooltip" type="button" role="tab"
                                    aria-controls="html-links-on-tooltip" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-links-on-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-links-on-tooltip" type="button" role="tab"
                                    aria-controls="preview-links-on-tooltip   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="links-on-tooltipContent">
                            <div class="tab-pane fade show active" id="html-links-on-tooltip" role="tabpanel"
                                aria-labelledby="html-links-on-tooltip-tab" tabindex="0">
                                <p class="text-muted mb-0">This is sample text intended to showcase some
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-title="Tooltip for inline links">inline links</a>
                                    with tooltips. Currently, it serves as placeholder content—essentially filler—meant to
                                    illustrate how
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-title="Tooltip for real text">real text</a>
                                    might be represented. By viewing this example, you should get a clear idea of how
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-title="Tooltip for tooltips on links">tooltips on links</a>
                                    function in practice. This will help you understand how they can be effectively used on
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                        data-bs-title="Tooltip for your own site">your own</a> site or project.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="preview-links-on-tooltip" role="tabpanel"
                                aria-labelledby="preview-links-on-tooltip-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;p class=&quot;text-muted mb-0&quot;&gt;This is sample text intended to showcase some
    &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Tooltip for inline links&quot;&gt;inline links&lt;/a&gt;
    with tooltips. Currently, it serves as placeholder content&mdash;essentially filler&mdash;meant to illustrate how
    &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Tooltip for real text&quot;&gt;real text&lt;/a&gt;
    might be represented. By viewing this example, you should get a clear idea of how
    &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Tooltip for tooltips on links&quot;&gt;tooltips on links&lt;/a&gt;
    function in practice. This will help you understand how they can be effectively used on
    &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-title=&quot;Tooltip for your own site&quot;&gt;your own&lt;/a&gt; site or project.
&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> </h5>
                    </div>
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colored Tooltips</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colored-tooltip" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colored-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colored-tooltip" type="button" role="tab"
                                    aria-controls="html-colored-tooltip" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colored-tooltip-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colored-tooltip" type="button" role="tab"
                                    aria-controls="preview-colored-tooltip   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code> data-bs-custom-class="tooltip-*" </code> attribute to apply a
                            custom tooltip style with a primary color theme. This allows you to customize the appearance of
                            the tooltip, giving it a distinct look that matches the primary color scheme of your
                            application.</p>
                        <div class="tab-content" id="colored-tooltipContent">
                            <div class="tab-pane fade show active" id="html-colored-tooltip" role="tabpanel"
                                aria-labelledby="html-colored-tooltip-tab" tabindex="0">
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <button type="button" class="btn btn-primary" data-bs-custom-class="tooltip-primary"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Primary Tooltip
                                    </button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-custom-class="tooltip-secondary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Secondary Tooltip
                                    </button>
                                    <button type="button" class="btn btn-success" data-bs-custom-class="tooltip-success"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Success Tooltip
                                    </button>
                                    <button type="button" class="btn btn-info" data-bs-custom-class="tooltip-info"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Info Tooltip
                                    </button>
                                    <button type="button" class="btn btn-warning" data-bs-custom-class="tooltip-warning"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Warning Tooltip
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-custom-class="tooltip-danger"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Danger Tooltip
                                    </button>
                                    <button type="button" class="btn btn-light" data-bs-custom-class="tooltip-light"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Light Tooltip
                                    </button>
                                    <button type="button" class="btn btn-dark" data-bs-custom-class="tooltip-dark"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                        Dark Tooltip
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-colored-tooltip" role="tabpanel"
                                aria-labelledby="preview-colored-tooltip-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;tooltip-primary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Primary Tooltip
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-custom-class=&quot;tooltip-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Secondary Tooltip
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-custom-class=&quot;tooltip-success&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Success Tooltip
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-custom-class=&quot;tooltip-info&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Info Tooltip
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-custom-class=&quot;tooltip-warning&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Warning Tooltip
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-custom-class=&quot;tooltip-danger&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Danger Tooltip
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-custom-class=&quot;tooltip-light&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Light Tooltip
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-custom-class=&quot;tooltip-dark&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
    Dark Tooltip
&lt;/button&gt;</code></pre>
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
