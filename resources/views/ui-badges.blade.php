@extends('partials.layouts.master')

@section('title', 'UI Badges | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Badges')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection

@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h5 class="card-title mb-0 flex-grow-1">Default Badges</h5>
                                <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-badges" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="html-default-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#html-default-badges" type="button" role="tab"
                                            aria-controls="html-default-badges" aria-selected="true">HTML</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preview-default-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#preview-default-badges" type="button" role="tab"
                                            aria-controls="preview-default-badges" aria-selected="false">Preview</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="default-badgesContent">
                                <div class="tab-pane fade show active" id="html-default-badges" role="tabpanel"
                                    aria-labelledby="html-default-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <p class="text-muted">
                                            In Bootstrap, you can create <strong>default badges</strong> by utilizing the
                                            <code>.badge</code> class. To customize the appearance of your badges, simply
                                            add color classes such as <code>.bg-primary</code>, <code>.bg-secondary</code>,
                                            and others to style them according to your design needs.
                                        </p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-primary">Primary</span>
                                            <span class="badge bg-secondary">Secondary</span>
                                            <span class="badge bg-success">Success</span>
                                            <span class="badge bg-info">Info</span>
                                            <span class="badge bg-warning">Warning</span>
                                            <span class="badge bg-danger">Danger</span>
                                            <span class="badge bg-dark">Dark</span>
                                            <span class="badge bg-light text-body">Light</span>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body">
                                        <p class="text-muted">
                                            To create a <strong>badge</strong> with a primary background and a rounded pill
                                            shape, use the following Bootstrap classes: <code>.badge</code>,
                                            <code>.bg-primary</code>, and <code>.rounded-pill</code>.
                                        </p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-primary rounded-pill">Primary</span>
                                            <span class="badge bg-secondary rounded-pill">Secondary</span>
                                            <span class="badge bg-success rounded-pill">Success</span>
                                            <span class="badge bg-info rounded-pill">Info</span>
                                            <span class="badge bg-warning rounded-pill">Warning</span>
                                            <span class="badge bg-danger rounded-pill">Danger</span>
                                            <span class="badge bg-dark rounded-pill">Dark</span>
                                            <span class="badge bg-light rounded-pill text-body">Light</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-default-badges" role="tabpanel"
                                    aria-labelledby="preview-default-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <pre class="language-html"><code>&lt;span class=&quot;badge bg-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-dark&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge bg-light text-body&quot;&gt;Light&lt;/span&gt;</code>
<code>&lt;span class=&quot;badge bg-primary rounded-pill&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary rounded-pill&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success rounded-pill&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-info rounded-pill&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-warning rounded-pill&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-danger rounded-pill&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-dark rounded-pill&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge bg-light rounded-pill text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h5 class="card-title mb-0 flex-grow-1">Light Badges</h5>
                                <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="light-badges" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="html-light-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#html-light-badges" type="button" role="tab"
                                            aria-controls="html-light-badges" aria-selected="true">HTML</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preview-light-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#preview-light-badges" type="button" role="tab"
                                            aria-controls="preview-light-badges" aria-selected="false">Preview</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="light-badgesContent">
                                <div class="tab-pane fade show active" id="html-light-badges" role="tabpanel"
                                    aria-labelledby="html-light-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <p class="text-muted">
                                            To create <strong>Light badges</strong> in Bootstrap, utilize the
                                            <code>.badge</code> class. You can enhance the appearance of your badges by
                                            applying color classes such as <code>.bg-primary-subtle</code>,
                                            <code>.badge-secondary-subtle</code> etc.
                                        </p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-primary-subtle text-primary">Primary</span>
                                            <span class="badge bg-secondary-subtle text-secondary">Secondary</span>
                                            <span class="badge bg-success-subtle text-success">Success</span>
                                            <span class="badge bg-info-subtle text-info">Info</span>
                                            <span class="badge bg-warning-subtle text-warning">Warning</span>
                                            <span class="badge bg-danger-subtle text-danger">Danger</span>
                                            <span class="badge bg-dark-subtle text-body">Dark</span>
                                            <span class="badge bg-light-subtle text-body text-body">Light</span>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body">
                                        <p class="text-muted">
                                            To create a stylish <strong>badge</strong> with a primary color background and a
                                            rounded pill shape, you can utilize the <code>.badge</code>,
                                            <code>.bg-primary-subtle</code>, and <code>.rounded-pill</code> classes.
                                        </p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge rounded-pill bg-primary-subtle text-primary">Primary</span>
                                            <span
                                                class="badge rounded-pill bg-secondary-subtle text-secondary">Secondary</span>
                                            <span class="badge rounded-pill bg-success-subtle text-success">Success</span>
                                            <span class="badge rounded-pill bg-info-subtle text-info">Info</span>
                                            <span class="badge rounded-pill bg-warning-subtle text-warning">Warning</span>
                                            <span class="badge rounded-pill bg-danger-subtle text-danger">Danger</span>
                                            <span class="badge rounded-pill bg-dark-subtle text-body">Dark</span>
                                            <span
                                                class="badge rounded-pill bg-light-subtle text-body text-body">Light</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-light-badges" role="tabpanel"
                                    aria-labelledby="preview-light-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <pre class="language-html"><code>&lt;span class=&quot;badge bg-primary-subtle text-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge bg-secondary-subtle text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge bg-info-subtle text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge bg-warning-subtle text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge bg-danger-subtle text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge bg-dark-subtle text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge bg-light-subtle text-body text-body&quot;&gt;Light&lt;/span&gt;</code>
<code>&lt;span class=&quot;badge rounded-pill bg-primary-subtle text-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-secondary-subtle text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-success-subtle text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-info-subtle text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-warning-subtle text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-danger-subtle text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-dark-subtle text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill bg-light-subtle text-body text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h5 class="card-title mb-0 flex-grow-1">Outline Badges</h5>
                                <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="light-badges"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="html-light-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#html-light-badges" type="button" role="tab"
                                            aria-controls="html-light-badges" aria-selected="true">HTML</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preview-light-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#preview-light-badges" type="button" role="tab"
                                            aria-controls="preview-light-badges" aria-selected="false">Preview</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="light-badgesContent">
                                <div class="tab-pane fade show active" id="html-light-badges" role="tabpanel"
                                    aria-labelledby="html-light-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <p class="text-muted">Use <strong>default badges</strong> in Bootstrap with the
                                            <code>.badge</code> class. Add color classes like <code>.border</code>,
                                            <code>.border-*</code>, etc., to style the badge.</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge border border-primary text-primary">Primary</span>
                                            <span class="badge border border-secondary text-secondary">Secondary</span>
                                            <span class="badge border border-success text-success">Success</span>
                                            <span class="badge border border-info text-info">Info</span>
                                            <span class="badge border border-warning text-warning">Warning</span>
                                            <span class="badge border border-danger text-danger">Danger</span>
                                            <span class="badge border border-dark text-body">Dark</span>
                                            <span class="badge border border-light text-body">Light</span>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body">
                                        <p class="text-muted">Create a <strong>badge</strong> with a primary background and
                                            rounded pill shape using <code>.badge</code>, <code>.border</code>,
                                            <code>.border-*</code> and <code>.rounded-pill</code> classes.</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span
                                                class="badge rounded-pill border border-primary text-primary">Primary</span>
                                            <span
                                                class="badge rounded-pill border border-secondary text-secondary">Secondary</span>
                                            <span
                                                class="badge rounded-pill border border-success text-success">Success</span>
                                            <span class="badge rounded-pill border border-info text-info">Info</span>
                                            <span
                                                class="badge rounded-pill border border-warning text-warning">Warning</span>
                                            <span class="badge rounded-pill border border-danger text-danger">Danger</span>
                                            <span class="badge rounded-pill border border-dark text-body">Dark</span>
                                            <span class="badge rounded-pill border border-light text-body">Light</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-light-badges" role="tabpanel"
                                    aria-labelledby="preview-light-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <pre class="language-html"><code>&lt;span class=&quot;badge border border-primary text-primary&quot;&gt;Primary&lt;/sp&gt;
&lt;span class=&quot;badge border border-secondary text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge border border-success text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge border border-info text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge border border-warning text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge border border-danger text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge border border-dark text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge border border-light text-body&quot;&gt;Light&lt;/span&gt;</code>
<code>&lt;span class=&quot;badge rounded-pill border border-primary text-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-secondary text-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-success text-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-info text-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-warning text-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-danger text-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-dark text-body&quot;&gt;Dark&lt;/span&gt;
&lt;span class=&quot;badge rounded-pill border border-light text-body&quot;&gt;Light&lt;/span&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h5 class="card-title mb-0 flex-grow-1">Button Badges</h5>
                                <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="button-badges"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="html-button-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#html-button-badges" type="button" role="tab"
                                            aria-controls="html-button-badges" aria-selected="true">HTML</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preview-button-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#preview-button-badges" type="button" role="tab"
                                            aria-controls="preview-button-badges" aria-selected="false">Preview</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Add a badge to a Bootstrap button by placing a <code>&lt;span
                                        class="badge"&gt;</code> inside the button. This is great for showing counts or
                                    notifications on the button.</p>
                                <div class="tab-content" id="button-badgesContent">
                                    <div class="tab-pane fade show active" id="html-button-badges" role="tabpanel"
                                        aria-labelledby="html-button-badges-tab" tabindex="0">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary">
                                                Notifications <span class="badge bg-success ms-1">4</span>
                                            </button>
                                            <button type="button" class="btn btn-success">
                                                Messages <span class="badge bg-danger ms-1">2</span>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary">
                                                Draft <span class="badge bg-success ms-1">2</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="preview-button-badges" role="tabpanel"
                                        aria-labelledby="preview-button-badges-tab" tabindex="0">
                                        <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
    Notifications &lt;span class=&quot;badge bg-success ms-1&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;
    Messages &lt;span class=&quot;badge bg-danger ms-1&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;
    Draft &lt;span class=&quot;badge bg-success ms-1&quot;&gt;2&lt;/span&gt;
&lt;/button&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h5 class="card-title mb-0 flex-grow-1">Button Position Badges</h5>
                                <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="button-position-badges"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="html-button-position-badges-tab"
                                            data-bs-toggle="pill" data-bs-target="#html-button-position-badges"
                                            type="button" role="tab" aria-controls="html-button-position-badges"
                                            aria-selected="true">HTML</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preview-button-position-badges-tab"
                                            data-bs-toggle="pill" data-bs-target="#preview-button-position-badges"
                                            type="button" role="tab" aria-controls="preview-button-position-badges"
                                            aria-selected="false">Preview</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Position badges on Bootstrap buttons by placing a <code>&lt;span
                                        class="badge position-absolute"&gt;</code> inside the button. Use utility classes
                                    like <code>.top-0</code> and <code>.end-0</code> to adjust the badge position.</p>
                                <div class="tab-content" id="button-position-badgesContent">
                                    <div class="tab-pane fade show active" id="html-button-position-badges"
                                        role="tabpanel" aria-labelledby="html-button-position-badges-tab" tabindex="0">
                                        <div class="d-flex flex-wrap gap-4">
                                            <button type="button" class="btn btn-primary position-relative">
                                                Mails <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">+9
                                                    <span class="visually-hidden">unread messages</span></span>
                                            </button>
                                            <button type="button" class="btn btn-light position-relative">
                                                Alerts <span
                                                    class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span
                                                        class="visually-hidden">unread messages</span></span>
                                            </button>
                                            <button type="button"
                                                class="btn btn-primary position-relative p-0 icon-btn rounded">
                                                <i class="ri-mail-fill"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span
                                                        class="visually-hidden">unread messages</span></span>
                                            </button>
                                            <button type="button"
                                                class="btn btn-light position-relative p-0 icon-btn rounded-circle">
                                                <i class="ri-notification-4-fill"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-light position-relative p-0 icon-btn rounded-circle">
                                                <i class="ri-menu-line"></i>
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-success p-1"><span
                                                        class="visually-hidden">unread messages</span></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="preview-button-position-badges" role="tabpanel"
                                        aria-labelledby="preview-button-position-badges-tab" tabindex="0">
                                        <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative&quot;&gt;
    Mails &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success&quot;&gt;+9 &lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light position-relative&quot;&gt;
    Alerts &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary position-relative p-0 icon-btn rounded&quot;&gt;
    &lt;i class=&quot;ri-mail-fill&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light position-relative p-0 icon-btn rounded-circle&quot;&gt;
    &lt;i class=&quot;ri-notification-4-fill&quot;&gt;&lt;/i&gt;
&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-light position-relative p-0 icon-btn rounded-circle&quot;&gt;
    &lt;i class=&quot;ri-menu-line&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-success p-1&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;unread messages&lt;/span&gt;&lt;/span&gt;
&lt;/button&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h5 class="card-title mb-0 flex-grow-1">Badges with Heading</h5>
                                <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="heading-badges"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="html-heading-badges-tab"
                                            data-bs-toggle="pill" data-bs-target="#html-heading-badges" type="button"
                                            role="tab" aria-controls="html-heading-badges"
                                            aria-selected="true">HTML</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preview-heading-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#preview-heading-badges" type="button" role="tab"
                                            aria-controls="preview-heading-badges" aria-selected="false">Preview</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Add badges to headings by placing a <code>&lt;span
                                        class="badge"&gt;</code> next to the heading text. This is useful for highlighting
                                    important information or counts.</p>
                                <div class="tab-content" id="heading-badgesContent">
                                    <div class="tab-pane fade show active" id="html-heading-badges" role="tabpanel"
                                        aria-labelledby="html-heading-badges-tab" tabindex="0">
                                        <div>
                                            <h1>Example heading <span class="badge bg-primary">New</span></h1>
                                            <h2>Example heading <span class="badge bg-primary">New</span></h2>
                                            <h3>Example heading <span class="badge bg-primary">New</span></h3>
                                            <h4>Example heading <span class="badge bg-primary">New</span></h4>
                                            <h5>Example heading <span class="badge bg-primary">New</span></h5>
                                            <h6 class="mb-0">Example heading <span class="badge bg-primary">New</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="preview-heading-badges" role="tabpanel"
                                        aria-labelledby="preview-heading-badges-tab" tabindex="0">
                                        <pre class="language-html"><code>&lt;h1&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6 class=&quot;mb-0&quot;&gt;Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center gap-3">
                                <h5 class="card-title mb-0 flex-grow-1">Square Badges</h5>
                                <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="square-badges"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="html-square-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#html-square-badges" type="button" role="tab"
                                            aria-controls="html-square-badges" aria-selected="true">HTML</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="preview-square-badges-tab" data-bs-toggle="pill"
                                            data-bs-target="#preview-square-badges" type="button" role="tab"
                                            aria-controls="preview-square-badges" aria-selected="false">Preview</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="square-badgesContent">
                                <div class="tab-pane fade show active" id="html-square-badges" role="tabpanel"
                                    aria-labelledby="html-square-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge border border-primary bg-primary">5</span>
                                            <span class="badge border border-secondary bg-secondary">5</span>
                                            <span class="badge border border-success bg-success">5</span>
                                            <span class="badge border border-info bg-info">5</span>
                                            <span class="badge border border-warning bg-warning">5</span>
                                            <span class="badge border border-danger bg-danger">5</span>
                                            <span class="badge border border-dark bg-dark">5</span>
                                            <span class="badge border border-light bg-light text-light-emphasis">5</span>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body">
                                        <p class="text-muted">Theme color Archive just adding class<code> .badge </code>
                                        </p>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span
                                                class="badge border text-primary border-primary-subtle bg-primary-subtle">5</span>
                                            <span
                                                class="badge border text-secondary border-secondary-subtle bg-secondary-subtle">5</span>
                                            <span
                                                class="badge border text-success border-success-subtle bg-success-subtle">5</span>
                                            <span class="badge border text-info border-info-subtle bg-info-subtle">5</span>
                                            <span
                                                class="badge border text-warning border-warning-subtle bg-warning-subtle">5</span>
                                            <span
                                                class="badge border text-danger border-danger-subtle bg-danger-subtle">5</span>
                                            <span class="badge border text-dark border-dark-subtle bg-dark-subtle">5</span>
                                            <span
                                                class="badge border text-dark border-light-subtle bg-light-subtle">5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="preview-square-badges" role="tabpanel"
                                    aria-labelledby="preview-square-badges-tab" tabindex="0">
                                    <div class="card-body">
                                        <pre class="language-html"><code>&lt;span class=&quot;badge border border-primary bg-primary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-secondary bg-secondary&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-success bg-success&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-info bg-info&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-warning bg-warning&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-danger bg-danger&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-dark bg-dark&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border border-light bg-light text-light-emphasis&quot;&gt;5&lt;/span&gt;</code>
<code>&lt;span class=&quot;badge border text-primary border-primary-subtle bg-primary-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border text-secondary border-secondary-subtle bg-secondary-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border text-success border-success-subtle bg-success-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border text-info border-info-subtle bg-info-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border text-warning border-warning-subtle bg-warning-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border text-danger border-danger-subtle bg-danger-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border text-dark border-dark-subtle bg-dark-subtle&quot;&gt;5&lt;/span&gt;
&lt;span class=&quot;badge border text-dark border-light-subtle bg-light-subtle&quot;&gt;5&lt;/span&gt;</code></pre>
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
