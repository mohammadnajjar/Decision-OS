@extends('partials.layouts.master')

@section('title', 'UI Popovers | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Popovers')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center gap-3">
                    <h5 class="card-title mb-0 flex-grow-1">Default Popover</h5>
                    <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-popover" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="html-default-popover-tab" data-bs-toggle="pill"
                                data-bs-target="#html-default-popover" type="button" role="tab"
                                aria-controls="html-default-popover" aria-selected="true">HTML</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="preview-default-popover-tab" data-bs-toggle="pill"
                                data-bs-target="#preview-default-popover" type="button" role="tab"
                                aria-controls="preview-default-popover   " aria-selected="false">Preview</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <p class="text-muted">Use a <strong>default popover</strong> in Bootstrap by adding the
                        <code>data-bs-toggle="popover"</code> attribute to an element. Set the popover content with the
                        <code>data-bs-content</code> attribute.</p>
                    <div class="tab-content" id="default-popoverContent">
                        <div class="tab-pane fade show active" id="html-default-popover" role="tabpanel"
                            aria-labelledby="html-default-popover-tab" tabindex="0">
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <button type="button" class="btn btn-primary" data-bs-placement="top"
                                    data-bs-toggle="popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Default Popover
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-custom-class="popover-no-arrow"
                                    data-bs-placement="top" data-bs-toggle="popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    No Arrow Popover
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-default-popover" role="tabpanel"
                            aria-labelledby="preview-default-popover-tab" tabindex="0">
                            <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-placement=&quot;top&quot; data-bs-toggle=&quot;popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Default Popover
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;popover-no-arrow&quot; data-bs-placement=&quot;top&quot; data-bs-toggle=&quot;popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    No Arrow Popover
&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End col-->

        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center gap-3">
                    <h5 class="card-title mb-0 flex-grow-1">Popover Directions</h5>
                    <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="directions-popover" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="html-directions-popover-tab" data-bs-toggle="pill"
                                data-bs-target="#html-directions-popover" type="button" role="tab"
                                aria-controls="html-directions-popover" aria-selected="true">HTML</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="preview-directions-popover-tab" data-bs-toggle="pill"
                                data-bs-target="#preview-directions-popover" type="button" role="tab"
                                aria-controls="preview-directions-popover   " aria-selected="false">Preview</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <p class="text-muted">Set <strong>popover directions</strong> in Bootstrap with classes like
                        <code>data-bs-placement="top"</code> or <code>data-bs-placement="bottom"</code>. These classes
                        control where the popover appears relative to the element.</p>
                    <div class="tab-content" id="directions-popoverContent">
                        <div class="tab-pane fade show active" id="html-directions-popover" role="tabpanel"
                            aria-labelledby="html-directions-popover-tab" tabindex="0">
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <button type="button" class="btn btn-primary" data-bs-custom-class="popover-primary"
                                    data-bs-placement="top" data-bs-toggle="popover" title="Top Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Popover on top
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-custom-class="popover-primary"
                                    data-bs-placement="right" data-bs-toggle="popover" title="Right Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Popover on right
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-custom-class="popover-primary"
                                    data-bs-placement="bottom" data-bs-toggle="popover" title="Bottom Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Popover on bottom
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-custom-class="popover-primary"
                                    data-bs-placement="left" data-bs-toggle="popover" title="Left Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Popover on left
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-directions-popover" role="tabpanel"
                            aria-labelledby="preview-directions-popover-tab" tabindex="0">
                            <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;popover-primary&quot; data-bs-placement=&quot;top&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Top Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Popover on top
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;popover-primary&quot; data-bs-placement=&quot;right&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Right Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Popover on right
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;popover-primary&quot; data-bs-placement=&quot;bottom&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Bottom Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Popover on bottom
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;popover-primary&quot; data-bs-placement=&quot;left&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Left Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Popover on left
&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End col-->

        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center gap-3">
                    <h5 class="card-title mb-0 flex-grow-1">Colored Popover</h5>
                    <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colored-popover" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="html-colored-popover-tab" data-bs-toggle="pill"
                                data-bs-target="#html-colored-popover" type="button" role="tab"
                                aria-controls="html-colored-popover" aria-selected="true">HTML</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="preview-colored-popover-tab" data-bs-toggle="pill"
                                data-bs-target="#preview-colored-popover" type="button" role="tab"
                                aria-controls="preview-colored-popover   " aria-selected="false">Preview</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <p class="text-muted">Apply a <strong>custom color</strong> to your Bootstrap popover using the
                        <code>data-bs-custom-class="popover-*"</code> attribute. This class sets a custom background color
                        for the popover.</p>
                    <div class="tab-content" id="colored-popoverContent">
                        <div class="tab-pane fade show active" id="html-colored-popover" role="tabpanel"
                            aria-labelledby="html-colored-popover-tab" tabindex="0">
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <button type="button" class="btn btn-primary" data-bs-custom-class="popover-primary"
                                    data-bs-placement="top" data-bs-toggle="popover" title="Primary Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Primary
                                </button>
                                <button type="button" class="btn btn-secondary" data-bs-custom-class="popover-secondary"
                                    data-bs-placement="top" data-bs-toggle="popover" title="Secondary Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Secondary
                                </button>
                                <button type="button" class="btn btn-success" data-bs-custom-class="popover-success"
                                    data-bs-placement="bottom" data-bs-toggle="popover" title="Success Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Success
                                </button>
                                <button type="button" class="btn btn-info" data-bs-custom-class="popover-info"
                                    data-bs-placement="bottom" data-bs-toggle="popover" title="Info Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Info
                                </button>
                                <button type="button" class="btn btn-warning" data-bs-custom-class="popover-warning"
                                    data-bs-placement="right" data-bs-toggle="popover" title="Warning Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Warning
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-custom-class="popover-danger"
                                    data-bs-placement="right" data-bs-toggle="popover" title="Danger Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Danger
                                </button>
                                <button type="button" class="btn btn-light" data-bs-custom-class="popover-light"
                                    data-bs-placement="left" data-bs-toggle="popover" title="Light Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Light
                                </button>
                                <button type="button" class="btn btn-dark" data-bs-custom-class="popover-dark"
                                    data-bs-placement="left" data-bs-toggle="popover" title="Dark Popover"
                                    data-bs-content="This is a very beautiful popover, show some love.">
                                    Dark
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-colored-popover" role="tabpanel"
                            aria-labelledby="preview-colored-popover-tab" tabindex="0">
                            <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;popover-primary&quot; data-bs-placement=&quot;top&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Primary Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Primary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-custom-class=&quot;popover-secondary&quot; data-bs-placement=&quot;top&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Secondary Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Secondary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-custom-class=&quot;popover-success&quot; data-bs-placement=&quot;bottom&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Success Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Success
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-custom-class=&quot;popover-info&quot; data-bs-placement=&quot;bottom&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Info Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Info
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-custom-class=&quot;popover-warning&quot; data-bs-placement=&quot;right&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Warning Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Warning
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-custom-class=&quot;popover-danger&quot; data-bs-placement=&quot;right&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Danger Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Danger
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-custom-class=&quot;popover-light&quot; data-bs-placement=&quot;left&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Light Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Light
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-custom-class=&quot;popover-dark&quot; data-bs-placement=&quot;left&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Dark Popover&quot; data-bs-content=&quot;This is a very beautiful popover, show some love.&quot;&gt;
    Dark
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
