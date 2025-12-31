@extends('partials.layouts.master')

@section('title', 'UI Button | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Button')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Button</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-button" type="button" role="tab"
                                    aria-controls="html-default-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-button" type="button" role="tab"
                                    aria-controls="preview-default-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="default-buttonContent">
                        <div class="tab-pane fade show active" id="html-default-button" role="tabpanel"
                            aria-labelledby="html-default-button-tab" tabindex="0">
                            <div class="card-body">
                                <p class="text-muted">Create buttons in Bootstrap by adding the <code>.btn</code> class
                                    along with contextual classes like <code>.btn-primary</code>,
                                    <code>.btn-secondary</code>, or <code>.btn-success</code> to style the button.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-dark">Dark</button>
                                    <button type="button" class="btn btn-link">Link</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="card-body">
                                <p class="text-muted">Use the <code>.btn</code> class to create buttons in Bootstrap. Add
                                    the <code>.rounded-pill</code> class to give the button rounded edges, creating a
                                    pill-shaped button.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn rounded-pill btn-primary">Primary</button>
                                    <button type="button" class="btn rounded-pill btn-secondary">Secondary</button>
                                    <button type="button" class="btn rounded-pill btn-success">Success</button>
                                    <button type="button" class="btn rounded-pill btn-info">Info</button>
                                    <button type="button" class="btn rounded-pill btn-warning">Warning</button>
                                    <button type="button" class="btn rounded-pill btn-danger">Danger</button>
                                    <button type="button" class="btn rounded-pill btn-dark">Dark</button>
                                    <button type="button" class="btn rounded-pill btn-link">Link</button>
                                    <button type="button" class="btn rounded-pill btn-light">Light</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-default-button" role="tabpanel"
                            aria-labelledby="preview-default-button-tab" tabindex="0">
                            <div class="card-body">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-dark&quot;&gt;Dark&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-link&quot;&gt;Link&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light&quot;&gt;Light&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Light Button</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="light-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-light-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-light-button" type="button" role="tab"
                                    aria-controls="html-light-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-light-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-light-button" type="button" role="tab"
                                    aria-controls="preview-light-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="light-buttonContent">
                        <div class="tab-pane fade show active" id="html-light-button" role="tabpanel"
                            aria-labelledby="html-light-button-tab" tabindex="0">
                            <div class="card-body">
                                <p class="text-muted">Create light-themed buttons in Bootstrap by using the
                                    <code>.btn-light</code> class. You can also add variations like
                                    <code>.btn-light-primary</code> or <code>.btn-light-secondary</code> for different color
                                    accents.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-light-primary">Primary</button>
                                    <button type="button" class="btn btn-light-secondary">Secondary</button>
                                    <button type="button" class="btn btn-light-success">Success</button>
                                    <button type="button" class="btn btn-light-info">Info</button>
                                    <button type="button" class="btn btn-light-warning">Warning</button>
                                    <button type="button" class="btn btn-light-danger">Danger</button>
                                    <button type="button" class="btn btn-light-dark">Dark</button>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="card-body">
                                <p class="text-muted">Create light-themed, pill-shaped buttons in Bootstrap by combining
                                    the <code>.btn-light-*</code> class with <code>.rounded-pill</code>. This gives the
                                    button a light color and rounded edges for a sleek look.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn rounded-pill btn-light-primary">Primary</button>
                                    <button type="button" class="btn rounded-pill btn-light-secondary">Secondary</button>
                                    <button type="button" class="btn rounded-pill btn-light-success">Success</button>
                                    <button type="button" class="btn rounded-pill btn-light-info">Info</button>
                                    <button type="button" class="btn rounded-pill btn-light-warning">Warning</button>
                                    <button type="button" class="btn rounded-pill btn-light-danger">Danger</button>
                                    <button type="button" class="btn rounded-pill btn-light-dark">Dark</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-light-button" role="tabpanel"
                            aria-labelledby="preview-light-button-tab" tabindex="0">
                            <div class="card-body">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-dark&quot;&gt;Dark&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-dark&quot;&gt;Dark&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Outline Button</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="outline-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-outline-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-outline-button" type="button" role="tab"
                                    aria-controls="html-outline-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-outline-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-outline-button" type="button" role="tab"
                                    aria-controls="preview-outline-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="outline-buttonContent">
                        <div class="tab-pane fade show active" id="html-outline-button" role="tabpanel"
                            aria-labelledby="html-outline-button-tab" tabindex="0">
                            <div class="card-body">
                                <p class="text-muted">Create outline buttons in Bootstrap using the
                                    <code>.btn-outline-*</code> class. This gives the button a border and transparent
                                    background, with color variations like <code>.btn-outline-primary</code> or
                                    <code>.btn-outline-secondary</code>.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success">Success</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="card-body">
                                <p class="text-muted">Create outline buttons with rounded edges in Bootstrap by using the
                                    <code>.btn-outline-*</code> class along with <code>.rounded-pill</code>. This combines a
                                    transparent button with a sleek, pill-shaped design.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn rounded-pill btn-outline-primary">Primary</button>
                                    <button type="button"
                                        class="btn rounded-pill btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn rounded-pill btn-outline-success">Success</button>
                                    <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
                                    <button type="button" class="btn rounded-pill btn-outline-warning">Warning</button>
                                    <button type="button" class="btn rounded-pill btn-outline-danger">Danger</button>
                                    <button type="button" class="btn rounded-pill btn-outline-dark">Dark</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-outline-button" role="tabpanel"
                            aria-labelledby="preview-outline-button-tab" tabindex="0">
                            <div class="card-body">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-dark&quot;&gt;Dark&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Text Button</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="text-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-text-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-text-button" type="button" role="tab"
                                    aria-controls="html-text-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-text-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-text-button" type="button" role="tab"
                                    aria-controls="preview-text-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create text-only buttons in Bootstrap using the <code>.btn-text-*</code>
                            class. This removes the background and border, leaving only the text styled as a button.</p>
                        <div class="tab-content" id="text-buttonContent">
                            <div class="tab-pane fade show active" id="html-text-button" role="tabpanel"
                                aria-labelledby="html-text-button-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-text-primary">Primary</button>
                                    <button type="button" class="btn btn-text-secondary">Secondary</button>
                                    <button type="button" class="btn btn-text-success">Success</button>
                                    <button type="button" class="btn btn-text-info">Info</button>
                                    <button type="button" class="btn btn-text-warning">Warning</button>
                                    <button type="button" class="btn btn-text-danger">Danger</button>
                                    <button type="button" class="btn btn-text-dark">Dark</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-text-button" role="tabpanel"
                                aria-labelledby="preview-text-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-text-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-text-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-text-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-text-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-text-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-text-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-text-dark&quot;&gt;Dark&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Buttons Size</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="size-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-size-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-size-button" type="button" role="tab"
                                    aria-controls="html-size-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-size-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-size-button" type="button" role="tab"
                                    aria-controls="preview-size-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Adjust button sizes in Bootstrap by using the size classes
                            <code>.btn-sm</code> for smaller buttons and <code>.btn-lg</code> for larger buttons. The
                            default size is applied when no size class is used.</p>
                        <div class="tab-content" id="size-buttonContent">
                            <div class="tab-pane fade show active" id="html-size-button" role="tabpanel"
                                aria-labelledby="html-size-button-tab" tabindex="0">
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <!-- Small Button -->
                                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                    <!-- Normal Button -->
                                    <button type="button" class="btn btn-primary">Large button</button>
                                    <!-- Large Button -->
                                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-size-button" role="tabpanel"
                                aria-labelledby="preview-size-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Small Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Small button&lt;/button&gt;

&lt;!-- Normal Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Large button&lt;/button&gt;

&lt;!-- Large Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large button&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Social Buttons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="social-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-social-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-social-button" type="button" role="tab"
                                    aria-controls="html-social-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-social-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-social-button" type="button" role="tab"
                                    aria-controls="preview-social-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="social-buttonContent">
                        <div class="tab-pane fade show active" id="html-social-button" role="tabpanel"
                            aria-labelledby="html-social-button-tab" tabindex="0">
                            <div class="card-body">
                                <p class="text-muted">Create social media buttons in Bootstrap by using the
                                    <code>.btn</code> class along with custom color classes for each platform, such as
                                    <code>.btn-facebook</code>, <code>.btn-light-facebook</code>,<code>.btn-twitter</code>
                                    or <code>.btn-light-twitter</code>, to match the respective brand styles.</p>
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <button type="button" class="btn btn-facebook icon-btn">
                                            <i class="ri-facebook-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-google icon-btn">
                                            <i class="ri-google-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-twitter icon-btn">
                                            <i class="ri-twitter-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-instagram icon-btn">
                                            <i class="ri-instagram-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-youtube icon-btn">
                                            <i class="ri-youtube-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-linkedin icon-btn">
                                            <i class="ri-linkedin-box-fill"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <button type="button" class="btn btn-light-facebook icon-btn">
                                            <i class="ri-facebook-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-google icon-btn">
                                            <i class="ri-google-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-twitter icon-btn">
                                            <i class="ri-twitter-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-instagram icon-btn">
                                            <i class="ri-instagram-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-youtube icon-btn">
                                            <i class="ri-youtube-fill"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-linkedin icon-btn">
                                            <i class="ri-linkedin-box-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="card-body">
                                <p class="text-muted">Create social media outline buttons in Bootstrap using the <code>.btn
                                        btn-outline-youtube</code> class. This gives the button a transparent background
                                    with a colored border, styled for the YouTube brand.</p>
                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <button type="button" class="btn btn-outline-facebook icon-btn">
                                        <i class="ri-facebook-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-google icon-btn">
                                        <i class="ri-google-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-twitter icon-btn">
                                        <i class="ri-twitter-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-instagram icon-btn">
                                        <i class="ri-instagram-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-youtube icon-btn">
                                        <i class="ri-youtube-fill"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-linkedin icon-btn">
                                        <i class="ri-linkedin-box-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-social-button" role="tabpanel"
                            aria-labelledby="preview-social-button-tab" tabindex="0">
                            <div class="card-body">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-facebook icon-btn&quot;&gt;
  &lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-google icon-btn&quot;&gt;
  &lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-twitter icon-btn&quot;&gt;
  &lt;i class=&quot;ri-twitter-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-instagram icon-btn&quot;&gt;
  &lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-youtube icon-btn&quot;&gt;
  &lt;i class=&quot;ri-youtube-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-linkedin icon-btn&quot;&gt;
  &lt;i class=&quot;ri-linkedin-box-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light-facebook icon-btn&quot;&gt;
  &lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-google icon-btn&quot;&gt;
  &lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-twitter icon-btn&quot;&gt;
  &lt;i class=&quot;ri-twitter-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-instagram icon-btn&quot;&gt;
  &lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-youtube icon-btn&quot;&gt;
  &lt;i class=&quot;ri-youtube-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-linkedin icon-btn&quot;&gt;
  &lt;i class=&quot;ri-linkedin-box-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-facebook icon-btn&quot;&gt;
    &lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-google icon-btn&quot;&gt;
    &lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-twitter icon-btn&quot;&gt;
    &lt;i class=&quot;ri-twitter-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-instagram icon-btn&quot;&gt;
    &lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-youtube icon-btn&quot;&gt;
    &lt;i class=&quot;ri-youtube-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-linkedin icon-btn&quot;&gt;
    &lt;i class=&quot;ri-linkedin-box-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Icon Buttons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="icon-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-icon-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-icon-button" type="button" role="tab"
                                    aria-controls="html-icon-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-icon-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-icon-button" type="button" role="tab"
                                    aria-controls="preview-icon-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="icon-buttonContent">
                        <div class="tab-pane fade show active" id="html-icon-button" role="tabpanel"
                            aria-labelledby="html-icon-button-tab" tabindex="0">
                            <div class="card-body">
                                <p class="text-muted">Create icon buttons in Bootstrap by combining the <code>.btn</code>
                                    class with an icon, such as using an icon from a library like Remix Icon. This allows
                                    you to add visual elements alongside button text.</p>
                                <div class="row g-4">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="d-flex flex-column gap-2">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="ri-star-line me-2"></i>
                                                    Primary
                                                </button>
                                                <button type="button" class="btn rounded-pill btn-primary">
                                                    <i class="ri-star-line me-2"></i>
                                                    Primary
                                                </button>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <button type="button" class="btn btn-secondary">
                                                    <i class="ri-notification-4-line me-2"></i>
                                                    Secondary
                                                </button>
                                                <button type="button" class="btn rounded-pill btn-secondary">
                                                    <i class="ri-notification-4-line me-2"></i>
                                                    Secondary
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="d-flex flex-column gap-2">
                                                <button type="button" class="btn btn-light-primary">
                                                    <i class="ri-star-line me-2"></i>
                                                    Primary
                                                </button>
                                                <button type="button" class="btn rounded-pill btn-light-primary">
                                                    <i class="ri-star-line me-2"></i>
                                                    Primary
                                                </button>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <button type="button" class="btn btn-light-secondary">
                                                    <i class="ri-notification-4-line me-2"></i>
                                                    Secondary
                                                </button>
                                                <button type="button" class="btn rounded-pill btn-light-secondary">
                                                    <i class="ri-notification-4-line me-2"></i>
                                                    Secondary
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="d-flex flex-column gap-2">
                                                <button type="button" class="btn btn-outline-primary">
                                                    <i class="ri-star-line me-2"></i>
                                                    Primary
                                                </button>
                                                <button type="button" class="btn rounded-pill btn-outline-primary">
                                                    <i class="ri-star-line me-2"></i>
                                                    Primary
                                                </button>
                                            </div>
                                            <div class="d-flex flex-column gap-2">
                                                <button type="button" class="btn btn-outline-secondary">
                                                    <i class="ri-notification-4-line me-2"></i>
                                                    Secondary
                                                </button>
                                                <button type="button" class="btn rounded-pill btn-outline-secondary">
                                                    <i class="ri-notification-4-line me-2"></i>
                                                    Secondary
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="card-body">
                                <p class="text-muted">Create icon buttons in Bootstrap by using the <code>.icon-btn</code>
                                    class along with an icon from an icon library. This class styles the button to
                                    incorporate an icon, making it visually appealing and functional.</p>
                                <div class="row g-4">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <button type="button" class="btn btn-primary icon-btn">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-secondary icon-btn">
                                                <i class="ri-notification-4-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-primary rounded-pill icon-btn">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-secondary rounded-pill icon-btn">
                                                <i class="ri-notification-4-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <button type="button" class="btn btn-light-primary icon-btn">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-light-secondary icon-btn">
                                                <i class="ri-notification-4-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-light-primary rounded-pill icon-btn">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-light-secondary rounded-pill icon-btn">
                                                <i class="ri-notification-4-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="d-flex flex-wrap gap-2 align-items-center">
                                            <button type="button" class="btn btn-outline-primary icon-btn">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary icon-btn">
                                                <i class="ri-notification-4-line"></i>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary rounded-pill icon-btn">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-outline-secondary rounded-pill icon-btn">
                                                <i class="ri-notification-4-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="preview-icon-button" role="tabpanel"
                            aria-labelledby="preview-icon-button-tab" tabindex="0">
                            <div class="card-body">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
  &lt;i class=&quot;ri-star-line me-2&quot;&gt;&lt;/i&gt;
  Primary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-primary&quot;&gt;
  &lt;i class=&quot;ri-star-line me-2&quot;&gt;&lt;/i&gt;
  Primary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line me-2&quot;&gt;&lt;/i&gt;
  Secondary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-secondary&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line me-2&quot;&gt;&lt;/i&gt;
  Secondary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary&quot;&gt;
  &lt;i class=&quot;ri-star-line me-2&quot;&gt;&lt;/i&gt;
  Primary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-primary&quot;&gt;
  &lt;i class=&quot;ri-star-line me-2&quot;&gt;&lt;/i&gt;
  Primary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line me-2&quot;&gt;&lt;/i&gt;
  Secondary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-light-secondary&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line me-2&quot;&gt;&lt;/i&gt;
  Secondary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;
  &lt;i class=&quot;ri-star-line me-2&quot;&gt;&lt;/i&gt;
  Primary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-primary&quot;&gt;
  &lt;i class=&quot;ri-star-line me-2&quot;&gt;&lt;/i&gt;
  Primary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line me-2&quot;&gt;&lt;/i&gt;
  Secondary
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn rounded-pill btn-outline-secondary&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line me-2&quot;&gt;&lt;/i&gt;
  Secondary
&lt;/button&gt;</code>
<code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary icon-btn&quot;&gt;
  &lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary icon-btn&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill icon-btn&quot;&gt;
  &lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-pill icon-btn&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary icon-btn&quot;&gt;
  &lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary icon-btn&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-primary rounded-pill icon-btn&quot;&gt;
  &lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light-secondary rounded-pill icon-btn&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary icon-btn&quot;&gt;
  &lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary icon-btn&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-pill icon-btn&quot;&gt;
  &lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-pill icon-btn&quot;&gt;
  &lt;i class=&quot;ri-notification-4-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Icon Button Size</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="icon-size-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-icon-size-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-icon-size-button" type="button" role="tab"
                                    aria-controls="html-icon-size-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-icon-size-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-icon-size-button" type="button" role="tab"
                                    aria-controls="preview-icon-size-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create icon buttons in Bootstrap using the <code>.icon-btn</code> class.
                            Adjust the size with <code>.icon-btn-sm</code> for smaller buttons, allowing for a compact
                            design while incorporating icons.</p>
                        <div class="tab-content" id="icon-size-buttonContent">
                            <div class="tab-pane fade show active" id="html-icon-size-button" role="tabpanel"
                                aria-labelledby="html-icon-size-button-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary icon-btn-sm">
                                        <i class="ri-home-2-line"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary icon-btn">
                                        <i class="ri-home-2-line"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary icon-btn-lg">
                                        <i class="ri-home-2-line"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-icon-size-button" role="tabpanel"
                                aria-labelledby="preview-icon-size-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary icon-btn-sm&quot;&gt;
  &lt;i class=&quot;ri-home-2-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary icon-btn&quot;&gt;
  &lt;i class=&quot;ri-home-2-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary icon-btn-lg&quot;&gt;
  &lt;i class=&quot;ri-home-2-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Custom Toggle Buttons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="custom-toggle-button"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-custom-toggle-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-custom-toggle-button" type="button" role="tab"
                                    aria-controls="html-custom-toggle-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-custom-toggle-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-custom-toggle-button" type="button" role="tab"
                                    aria-controls="preview-custom-toggle-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create custom toggle buttons in Bootstrap using the <code>.btn-loader</code>
                            class to show a loading state. By default, use <code>.indicator-label</code> for button text,
                            which changes to <code>.indicator-progress</code> after clicking to indicate the loading
                            process.</p>
                        <div class="tab-content" id="custom-toggle-buttonContent">
                            <div class="tab-pane fade show active" id="html-custom-toggle-button" role="tabpanel"
                                aria-labelledby="html-custom-toggle-button-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary btn-loader">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress flex gap-2 align-items-center">
                                            <span>Loading...</span>
                                            <i class="ri-loader-2-fill"></i>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-loader">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress flex gap-2 align-items-center">
                                            <span>Please Wait...</span>
                                            <i class="ri-loader-2-fill"></i>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary custom-toggle" data-bs-toggle="button">
                                        <span class="icon-on">
                                            <i class="ri-add-line align-bottom me-1"></i> Unfollow
                                        </span>
                                        <span class="icon-off">
                                            <i class="ri-user-unfollow-line align-bottom me-1"></i> Follow
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary custom-toggle" data-bs-toggle="button">
                                        <span class="icon-on">
                                            Inactive
                                        </span>
                                        <span class="icon-off">
                                            Active
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-dark icon-btn custom-toggle"
                                        data-bs-toggle="button">
                                        <span class="icon-on">
                                            <i class="ri-bookmark-line"></i>
                                        </span>
                                        <span class="icon-off">
                                            <i class="ri-bookmark-fill"></i>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-success icon-btn custom-toggle"
                                        data-bs-toggle="button">
                                        <span class="icon-on">
                                            <i class="ri-heart-line"></i>
                                        </span>
                                        <span class="icon-off">
                                            <i class="ri-heart-fill"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-custom-toggle-button" role="tabpanel"
                                aria-labelledby="preview-custom-toggle-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-loader&quot;&gt;
  &lt;span class=&quot;indicator-label&quot;&gt;
    Submit
  &lt;/span&gt;
  &lt;span class=&quot;indicator-progress flex gap-2 align-items-center&quot;&gt;
    &lt;span&gt;Loading...&lt;/span&gt;
    &lt;i class=&quot;ri-loader-2-fill&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-loader&quot;&gt;
  &lt;span class=&quot;indicator-label&quot;&gt;
    Submit
  &lt;/span&gt;
  &lt;span class=&quot;indicator-progress flex gap-2 align-items-center&quot;&gt;
    &lt;span&gt;Please Wait...&lt;/span&gt;
    &lt;i class=&quot;ri-loader-2-fill&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary custom-toggle&quot; data-bs-toggle=&quot;button&quot;&gt;
  &lt;span class=&quot;icon-on&quot;&gt;
    &lt;i class=&quot;ri-add-line align-bottom me-1&quot;&gt;&lt;/i&gt; Unfollow
  &lt;/span&gt;
  &lt;span class=&quot;icon-off&quot;&gt;
    &lt;i class=&quot;ri-user-unfollow-line align-bottom me-1&quot;&gt;&lt;/i&gt; Follow
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary custom-toggle&quot; data-bs-toggle=&quot;button&quot;&gt;
  &lt;span class=&quot;icon-on&quot;&gt;
    Inactive
  &lt;/span&gt;
  &lt;span class=&quot;icon-off&quot;&gt;
    Active
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark icon-btn custom-toggle&quot; data-bs-toggle=&quot;button&quot;&gt;
  &lt;span class=&quot;icon-on&quot;&gt;
    &lt;i class=&quot;ri-bookmark-line&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;icon-off&quot;&gt;
    &lt;i class=&quot;ri-bookmark-fill&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success icon-btn custom-toggle&quot; data-bs-toggle=&quot;button&quot;&gt;
  &lt;span class=&quot;icon-on&quot;&gt;
    &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;icon-off&quot;&gt;
    &lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Loading Animations</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="loading-animations-button"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-loading-animations-button-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-loading-animations-button" type="button"
                                    role="tab" aria-controls="html-loading-animations-button"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-loading-animations-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-loading-animations-button" type="button" role="tab"
                                    aria-controls="preview-loading-animations-button"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add loading animations in Bootstrap using the <code>.btn-loader</code> class.
                            Incorporate <code>.spinner-grow</code> or <code>.spinner-border</code> classes to show different
                            types of spinners, providing visual feedback during loading processes.</p>
                        <div class="tab-content" id="loading-animations-buttonContent">
                            <div class="tab-pane fade show active" id="html-loading-animations-button" role="tabpanel"
                                aria-labelledby="html-loading-animations-button-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary btn-loader">
                                        <span class="d-flex gap-2 align-items-center">
                                            <span class="flex-grow-1">
                                                Loading...
                                            </span>
                                            <span class="flex-shrink-0">
                                                <i class="ri-loader-2-fill"></i>
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-loader">
                                        <span class="d-flex gap-2 align-items-center">
                                            <span class="flex-grow-1">
                                                Please Wait...
                                            </span>
                                            <span class="flex-shrink-0">
                                                <i class="ri-refresh-line"></i>
                                                <span class="visually-hidden">Please Wait...</span>
                                            </span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <span class="d-flex align-items-center">
                                            <span class="spinner-border spinner-border-sm me-2 flex-shrink-0"
                                                role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </span>
                                            <span class="flex-grow-1 ms-2">
                                                Loading...
                                            </span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <span class="d-flex align-items-center">
                                            <span class="flex-grow-1 me-2">
                                                Wait...
                                            </span>
                                            <span class="spinner-border spinner-border-sm me-2 flex-shrink-0"
                                                role="status">
                                                <span class="visually-hidden">Wait...</span>
                                            </span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-success icon-btn">
                                        <span class="spinner-grow spinner-grow-sm flex-shrink-0" role="status">
                                            <span class="visually-hidden">Wait...</span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-success icon-btn">
                                        <span class="spinner-border spinner-border-sm flex-shrink-0" role="status">
                                            <span class="visually-hidden">Wait...</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-loading-animations-button" role="tabpanel"
                                aria-labelledby="preview-loading-animations-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-loader&quot;&gt;
  &lt;span class=&quot;d-flex gap-2 align-items-center&quot;&gt;
    &lt;span class=&quot;flex-grow-1&quot;&gt;
      Loading...
    &lt;/span&gt;
    &lt;span class=&quot;flex-shrink-0&quot;&gt;
      &lt;i class=&quot;ri-loader-2-fill&quot;&gt;&lt;/i&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
    &lt;/span&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-loader&quot;&gt;
  &lt;span class=&quot;d-flex gap-2 align-items-center&quot;&gt;
    &lt;span class=&quot;flex-grow-1&quot;&gt;
      Please Wait...
    &lt;/span&gt;
    &lt;span class=&quot;flex-shrink-0&quot;&gt;
      &lt;i class=&quot;ri-refresh-line&quot;&gt;&lt;/i&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Please Wait...&lt;/span&gt;
    &lt;/span&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
  &lt;span class=&quot;d-flex align-items-center&quot;&gt;
    &lt;span class=&quot;spinner-border spinner-border-sm me-2 flex-shrink-0&quot; role=&quot;status&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class=&quot;flex-grow-1 ms-2&quot;&gt;
      Loading...
    &lt;/span&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;
  &lt;span class=&quot;d-flex align-items-center&quot;&gt;
    &lt;span class=&quot;flex-grow-1 me-2&quot;&gt;
      Wait...
    &lt;/span&gt;
    &lt;span class=&quot;spinner-border spinner-border-sm me-2 flex-shrink-0&quot; role=&quot;status&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Wait...&lt;/span&gt;
    &lt;/span&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success icon-btn&quot;&gt;
  &lt;span class=&quot;spinner-grow spinner-grow-sm flex-shrink-0&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Wait...&lt;/span&gt;
  &lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success icon-btn&quot;&gt;
  &lt;span class=&quot;spinner-border spinner-border-sm flex-shrink-0&quot; role=&quot;status&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Wait...&lt;/span&gt;
  &lt;/span&gt;
&lt;/button&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Full width button</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="full-width-button" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-full-width-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-full-width-button" type="button" role="tab"
                                    aria-controls="html-full-width-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-full-width-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-full-width-button" type="button" role="tab"
                                    aria-controls="preview-full-width-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a full-width button in Bootstrap by using the <code>.w-100</code>
                            class along with the <code>.btn</code> class. This makes the button stretch to fill its
                            container, ensuring it occupies the entire width available.</p>
                        <div class="tab-content" id="full-width-buttonContent">
                            <div class="tab-pane fade show active" id="html-full-width-button" role="tabpanel"
                                aria-labelledby="html-full-width-button-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 col-12">
                                        <button class="btn btn-primary w-100 mb-2" type="button">Button</button>
                                        <button class="btn btn-secondary w-100" type="button">Button</button>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-12">
                                        <button class="btn btn-light-primary w-100 mb-2" type="button">Button</button>
                                        <button class="btn btn-light-secondary w-100" type="button">Button</button>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-12">
                                        <button class="btn btn-outline-primary w-100 mb-2" type="button">Button</button>
                                        <button class="btn btn-outline-secondary w-100" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-full-width-button" role="tabpanel"
                                aria-labelledby="preview-full-width-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button class=&quot;btn btn-primary w-100&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;button class=&quot;btn btn-secondary w-100&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;

&lt;button class=&quot;btn btn-light-primary w-100&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;button class=&quot;btn btn-light-secondary w-100&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;

&lt;button class=&quot;btn btn-outline-primary w-100&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
&lt;button class=&quot;btn btn-outline-secondary w-100&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;</code></pre>
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
