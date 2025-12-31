@extends('partials.layouts.master')

@section('title', 'UI Alerts | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Alerts')

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
                        <h5 class="card-title mb-0 flex-grow-1">Basic Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-alerts" type="button" role="tab"
                                    aria-controls="html-basic-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-alerts" type="button" role="tab"
                                    aria-controls="preview-basic-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Alerts are available for any length of text, as well as an optional close
                            button. For proper styling, use one of the eight <strong>required</strong> contextual classes
                            (e.g.,<code>.alert-success</code>).</p>
                        <div class="tab-content" id="basic-alertsContent">
                            <div class="tab-pane fade show active" id="html-basic-alerts" role="tabpanel"
                                aria-labelledby="html-basic-alerts-tab" tabindex="0">
                                <div class="alert alert-primary" role="alert">
                                    This information is for your reference
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    Check the details before proceeding.
                                </div>
                                <div class="alert alert-success" role="alert">
                                    Your action was successful.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    There was an error with your action.
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    There might be an issue you need to check.
                                </div>
                                <div class="alert alert-info" role="alert">
                                    Here is some information for you.
                                </div>
                                <div class="alert alert-light" role="alert">
                                    Try out the latest tool added to your dashboard.
                                </div>
                                <div class="alert alert-dark mb-0" role="alert">
                                    Updates are available in your profile settings.
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-basic-alerts" role="tabpanel"
                                aria-labelledby="preview-basic-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
    This information is for your reference
&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
    Check the details before proceeding.
&lt;/div&gt;
&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
    Your action was successful.
&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
    There was an error with your action.
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
    There might be an issue you need to check.
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
    Here is some information for you.
&lt;/div&gt;
&lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
    Try out the latest tool added to your dashboard.
&lt;/div&gt;
&lt;div class=&quot;alert alert-dark mb-0&quot; role=&quot;alert&quot;&gt;
    Updates are available in your profile settings.
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Outline Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="outline-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-outline-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-outline-alerts" type="button" role="tab"
                                    aria-controls="html-outline-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-outline-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-outline-alerts" type="button" role="tab"
                                    aria-controls="preview-outline-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create <strong>outline alerts</strong> with Bootstrap using the
                            <code>.alert-outline-*</code> classes. Replace <code>*</code> with a color variant like
                            <code>primary</code>, <code>success</code>, or <code>danger</code> for different outline styles.
                        </p>
                        <div class="tab-content" id="outline-alertsContent">
                            <div class="tab-pane fade show active" id="html-outline-alerts" role="tabpanel"
                                aria-labelledby="html-outline-alerts-tab" tabindex="0">
                                <div class="alert alert-outline-primary" role="alert">
                                    This information is for your reference
                                </div>
                                <div class="alert alert-outline-secondary" role="alert">
                                    Check the details before proceeding.
                                </div>
                                <div class="alert alert-outline-success" role="alert">
                                    Everything is set up and ready to go.
                                </div>
                                <div class="alert alert-outline-danger" role="alert">
                                    We couldn’t process your request. Please try again later.
                                </div>
                                <div class="alert alert-outline-warning" role="alert">
                                    This action will permanently delete the item.
                                </div>
                                <div class="alert alert-outline-info" role="alert">
                                    Scheduled maintenance will occur at midnight.
                                </div>
                                <div class="alert alert-outline-light" role="alert">
                                    You can enable notifications in your profile.
                                </div>
                                <div class="alert alert-outline-dark mb-0" role="alert">
                                    Try out the latest tool added to your dashboard.
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-outline-alerts" role="tabpanel"
                                aria-labelledby="preview-outline-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-outline-primary&quot; role=&quot;alert&quot;&gt;
    This information is for your reference
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-secondary&quot; role=&quot;alert&quot;&gt;
    Check the details before proceeding.
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-success&quot; role=&quot;alert&quot;&gt;
    Everything is set up and ready to go.
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-danger&quot; role=&quot;alert&quot;&gt;
    We couldn&rsquo;t process your request. Please try again later.
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-warning&quot; role=&quot;alert&quot;&gt;
    This action will permanently delete the item.
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-info&quot; role=&quot;alert&quot;&gt;
    Scheduled maintenance will occur at midnight.
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-light&quot; role=&quot;alert&quot;&gt;
    You can enable notifications in your profile.
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-dark mb-0&quot; role=&quot;alert&quot;&gt;
    Try out the latest tool added to your dashboard.
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Subtle Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="subtle-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-subtle-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-subtle-alerts" type="button" role="tab"
                                    aria-controls="html-subtle-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-subtle-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-subtle-alerts" type="button" role="tab"
                                    aria-controls="preview-subtle-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create <strong>outline alerts</strong> with Bootstrap using the
                            <code>.alert-subtle-*</code> classes. Replace <code>*</code> with a color variant like
                            <code>primary</code>, <code>success</code>, or <code>danger</code> for different outline styles.
                        </p>
                        <div class="tab-content" id="subtle-alertsContent">
                            <div class="tab-pane fade show active" id="html-subtle-alerts" role="tabpanel"
                                aria-labelledby="html-subtle-alerts-tab" tabindex="0">
                                <div class="alert alert-subtle-primary" role="alert">
                                    A simple primary alert—check it out!
                                </div>
                                <div class="alert alert-subtle-secondary" role="alert">
                                    A simple secondary alert—check it out!
                                </div>
                                <div class="alert alert-subtle-success" role="alert">
                                    A simple success alert—check it out!
                                </div>
                                <div class="alert alert-subtle-danger" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-subtle-warning" role="alert">
                                    A simple warning alert—check it out!
                                </div>
                                <div class="alert alert-subtle-info" role="alert">
                                    A simple info alert—check it out!
                                </div>
                                <div class="alert alert-subtle-light" role="alert">
                                    A simple light alert—check it out!
                                </div>
                                <div class="alert alert-subtle-dark" role="alert">
                                    A simple dark alert—check it out!
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-subtle-alerts" role="tabpanel"
                                aria-labelledby="preview-subtle-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-subtle-primary&quot; role=&quot;alert&quot;&gt;
    A simple primary alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-secondary&quot; role=&quot;alert&quot;&gt;
    A simple secondary alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-success&quot; role=&quot;alert&quot;&gt;
    A simple success alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-danger&quot; role=&quot;alert&quot;&gt;
    A simple danger alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-warning&quot; role=&quot;alert&quot;&gt;
    A simple warning alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-info&quot; role=&quot;alert&quot;&gt;
    A simple info alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-light&quot; role=&quot;alert&quot;&gt;
    A simple light alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-dark&quot; role=&quot;alert&quot;&gt;
    A simple dark alert&mdash;check it out!
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Left Border Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="left-border-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-left-border-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-left-border-alerts" type="button" role="tab"
                                    aria-controls="html-left-border-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-left-border-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-left-border-alerts" type="button" role="tab"
                                    aria-controls="preview-left-border-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"> Add a <strong>left border</strong> to alerts in Bootstrap using the
                            <code>.alert-border-*</code> class. This class applies a primary color border to the left side
                            of the alert box.
                        </p>
                        <div class="tab-content" id="left-border-alertsContent">
                            <div class="tab-pane fade show active" id="html-left-border-alerts" role="tabpanel"
                                aria-labelledby="html-left-border-alerts-tab" tabindex="0">
                                <div class="alert alert-border-primary" role="alert">
                                    A simple primary alert—check it out!
                                </div>
                                <div class="alert alert-border-secondary" role="alert">
                                    A simple secondary alert—check it out!
                                </div>
                                <div class="alert alert-border-success" role="alert">
                                    A simple success alert—check it out!
                                </div>
                                <div class="alert alert-border-danger" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-border-warning" role="alert">
                                    A simple warning alert—check it out!
                                </div>
                                <div class="alert alert-border-info" role="alert">
                                    A simple info alert—check it out!
                                </div>
                                <div class="alert alert-border-light" role="alert">
                                    A simple light alert—check it out!
                                </div>
                                <div class="alert alert-border-dark" role="alert">
                                    A simple dark alert—check it out!
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-left-border-alerts" role="tabpanel"
                                aria-labelledby="preview-left-border-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-border-primary&quot; role=&quot;alert&quot;&gt;
    A simple primary alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-secondary&quot; role=&quot;alert&quot;&gt;
    A simple secondary alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-success&quot; role=&quot;alert&quot;&gt;
    A simple success alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-danger&quot; role=&quot;alert&quot;&gt;
    A simple danger alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-warning&quot; role=&quot;alert&quot;&gt;
    A simple warning alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-info&quot; role=&quot;alert&quot;&gt;
    A simple info alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-light&quot; role=&quot;alert&quot;&gt;
    A simple light alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-dark&quot; role=&quot;alert&quot;&gt;
    A simple dark alert&mdash;check it out!
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Solid Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="solid-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-solid-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-solid-alerts" type="button" role="tab"
                                    aria-controls="html-solid-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-solid-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-solid-alerts" type="button" role="tab"
                                    aria-controls="preview-solid-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Display <strong>default alerts</strong> in Bootstrap using the
                            <code>.alert</code> class. Add contextual classes like <code>.alert-primary</code>,
                            <code>.alert-success</code>, or <code>.alert-danger</code> for different alert styles.
                        </p>
                        <div class="tab-content" id="solid-alertsContent">
                            <div class="tab-pane fade show active" id="html-solid-alerts" role="tabpanel"
                                aria-labelledby="html-solid-alerts-tab" tabindex="0">
                                <div class="alert alert-solid-primary" role="alert">
                                    A simple primary alert—check it out!
                                </div>
                                <div class="alert alert-solid-secondary" role="alert">
                                    A simple secondary alert—check it out!
                                </div>
                                <div class="alert alert-solid-success" role="alert">
                                    A simple success alert—check it out!
                                </div>
                                <div class="alert alert-solid-danger" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-solid-warning" role="alert">
                                    A simple warning alert—check it out!
                                </div>
                                <div class="alert alert-solid-info" role="alert">
                                    A simple info alert—check it out!
                                </div>
                                <div class="alert alert-solid-light" role="alert">
                                    A simple light alert—check it out!
                                </div>
                                <div class="alert alert-solid-dark mb-0" role="alert">
                                    A simple dark alert—check it out!
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-solid-alerts" role="tabpanel"
                                aria-labelledby="preview-solid-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-solid-primary&quot; role=&quot;alert&quot;&gt;
    A simple primary alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-secondary&quot; role=&quot;alert&quot;&gt;
    A simple secondary alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-success&quot; role=&quot;alert&quot;&gt;
    A simple success alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-danger&quot; role=&quot;alert&quot;&gt;
    A simple danger alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-warning&quot; role=&quot;alert&quot;&gt;
    A simple warning alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-info&quot; role=&quot;alert&quot;&gt;
    A simple info alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-light&quot; role=&quot;alert&quot;&gt;
    A simple light alert&mdash;check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-dark mb-0&quot; role=&quot;alert&quot;&gt;
    A simple dark alert&mdash;check it out!
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Link Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="link-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-link-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-link-alerts" type="button" role="tab"
                                    aria-controls="html-link-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-link-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-link-alerts" type="button" role="tab"
                                    aria-controls="preview-link-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.alert-link</code> utility class to quickly provide matching
                            colored links within any alert.</p>
                        <div class="tab-content" id="link-alertsContent">
                            <div class="tab-pane fade show active" id="html-link-alerts" role="tabpanel"
                                aria-labelledby="html-link-alerts-tab" tabindex="0">
                                <div class="alert alert-primary" role="alert">
                                    A simple primary alert with <a href="javascript:void(0)" class="alert-link">an example
                                        link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    A simple secondary alert with <a href="javascript:void(0)" class="alert-link">an
                                        example link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-success" role="alert">
                                    A simple success alert with <a href="javascript:void(0)" class="alert-link">an example
                                        link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    A simple danger alert with <a href="javascript:void(0)" class="alert-link">an example
                                        link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    A simple warning alert with <a href="javascript:void(0)" class="alert-link">an example
                                        link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-info" role="alert">
                                    A simple info alert with <a href="javascript:void(0)" class="alert-link">an example
                                        link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-light" role="alert">
                                    A simple light alert with <a href="javascript:void(0)" class="alert-link">an example
                                        link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-dark mb-0" role="alert">
                                    A simple dark alert with <a href="javascript:void(0)" class="alert-link">an example
                                        link</a>. Give it a click if you like.
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-link-alerts" role="tabpanel"
                                aria-labelledby="preview-link-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
    A simple primary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
    A simple secondary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
    A simple success alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
    A simple danger alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
    A simple warning alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
    A simple info alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
    A simple light alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-dark mb-0&quot; role=&quot;alert&quot;&gt;
    A simple dark alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-lg-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Additional content</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="additional-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-additional-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-additional-alerts" type="button" role="tab"
                                    aria-controls="html-additional-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-additional-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-additional-alerts" type="button" role="tab"
                                    aria-controls="preview-additional-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Alerts can also contain additional HTML elements like headings, paragraphs
                            and dividers.</p>
                        <div class="tab-content" id="additional-alertsContent">
                            <div class="tab-pane fade show active" id="html-additional-alerts" role="tabpanel"
                                aria-labelledby="html-additional-alerts-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="alert alert-success mb-0" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example
                                                text is going to run a bit longer so that you can see how spacing within an
                                                alert works with this kind of content.</p>
                                            <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                                things nice and tidy.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-outline-danger mb-0" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example
                                                text is going to run a bit longer so that you can see how spacing within an
                                                alert works with this kind of content.</p>
                                            <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                                things nice and tidy.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-subtle-warning mb-0" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example
                                                text is going to run a bit longer so that you can see how spacing within an
                                                alert works with this kind of content.</p>
                                            <hr class="border-warning border-opacity-30 border-top">
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                                things nice and tidy.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-solid-primary mb-0" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This example
                                                text is going to run a bit longer so that you can see how spacing within an
                                                alert works with this kind of content.</p>
                                            <hr class="border-light border-opacity-20 border-top">
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                                things nice and tidy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-additional-alerts" role="tabpanel"
                                aria-labelledby="preview-additional-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-success mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
    &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of 
    content.&lt;/p&gt;
    &lt;hr&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert-outline-danger mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
    &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of 
    content.&lt;/p&gt;
    &lt;hr&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert-subtle-warning mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
    &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of 
    content.&lt;/p&gt;
    &lt;hr class=&quot;border-warning border-opacity-30 border-top&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert-solid-primary mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
    &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of 
    content.&lt;/p&gt;
    &lt;hr class=&quot;border-light border-opacity-20 border-top&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-lg-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Icons Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="icons-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-icons-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-icons-alerts" type="button" role="tab"
                                    aria-controls="html-icons-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-icons-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-icons-alerts" type="button" role="tab"
                                    aria-controls="preview-icons-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Similarly, you can use flexbox utilities and Bootstrap Icons to create alerts
                            with icons. Depending on your icons and content, you may want to add more utilities or custom
                            styles.</p>
                        <div class="tab-content" id="icons-alertsContent">
                            <div class="tab-pane fade show active" id="html-icons-alerts" role="tabpanel"
                                aria-labelledby="html-icons-alerts-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="alert alert-info d-flex align-items-center mb-0" role="alert">
                                            <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i>
                                            <div>
                                                An example alert with an icon
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-outline-success d-flex align-items-center mb-0"
                                            role="alert">
                                            <i class="bi bi-check-circle-fill flex-shrink-0 me-2"></i>
                                            <div>
                                                An example success alert with an icon
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-border-warning d-flex align-items-center mb-0"
                                            role="alert">
                                            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
                                            <div>
                                                An example warning alert with an icon
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-subtle-danger d-flex align-items-center mb-0"
                                            role="alert">
                                            <i class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"></i>
                                            <div>
                                                An example danger alert with an icon
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-icons-alerts" role="tabpanel"
                                aria-labelledby="preview-icons-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-info d-flex align-items-center mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;i class=&quot;bi bi-info-circle-fill flex-shrink-0 me-2&quot;&gt;&lt;/i&gt;
    &lt;div&gt;
        An example alert with an icon
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-success d-flex align-items-center mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;i class=&quot;bi bi-check-circle-fill flex-shrink-0 me-2&quot;&gt;&lt;/i&gt;
    &lt;div&gt;
        An example success alert with an icon
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-warning d-flex align-items-center mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;i class=&quot;bi bi-exclamation-triangle-fill flex-shrink-0 me-2&quot;&gt;&lt;/i&gt;
    &lt;div&gt;
        An example warning alert with an icon
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-subtle-danger d-flex align-items-center mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;i class=&quot;bi bi-exclamation-triangle-fill flex-shrink-0 me-2&quot;&gt;&lt;/i&gt;
    &lt;div&gt;
        An example danger alert with an icon
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-lg-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Dismissing Alerts</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="dismissing-alerts" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-dismissing-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-dismissing-alerts" type="button" role="tab"
                                    aria-controls="html-dismissing-alerts" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-dismissing-alerts-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-dismissing-alerts" type="button" role="tab"
                                    aria-controls="preview-dismissing-alerts" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Using the alert JavaScript plugin, it’s possible to dismiss any alert inline.
                        </p>
                        <div class="tab-content" id="dismissing-alertsContent">
                            <div class="tab-pane fade show active" id="html-dismissing-alerts" role="tabpanel"
                                aria-labelledby="html-dismissing-alerts-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                            <strong>You’re All Set!</strong> The changes were saved without any issues.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-outline-danger alert-dismissible fade show mb-0"
                                            role="alert">
                                            <strong>Critical Error!</strong> Something went wrong. Contact support if this
                                            continues.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-border-warning alert-dismissible fade show mb-0"
                                            role="alert">
                                            <strong>Password Expiring!</strong> Update your password to keep your account
                                            secure.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="alert alert-solid-info alert-dismissible fade show mb-0"
                                            role="alert">
                                            <strong>Upcoming Changes:</strong> Some features may be unavailable during the
                                            update.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-dismissing-alerts" role="tabpanel"
                                aria-labelledby="preview-dismissing-alerts-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;alert alert-success alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;strong&gt;You&rsquo;re All Set!&lt;/strong&gt; The changes were saved without any issues.
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-outline-danger alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;strong&gt;Critical Error!&lt;/strong&gt; Something went wrong. Contact support if this continues.
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-border-warning alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;strong&gt;Password Expiring!&lt;/strong&gt; Update your password to keep your account secure.
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert alert-solid-info alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
    &lt;strong&gt;Upcoming Changes:&lt;/strong&gt; Some features may be unavailable during the update.
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
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
