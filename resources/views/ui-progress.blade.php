@extends('partials.layouts.master')

@section('title', 'UI Progress | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Progress')
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic Progress</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-progress" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-progress" type="button" role="tab"
                                    aria-controls="html-basic-progress" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-progress" type="button" role="tab"
                                    aria-controls="preview-basic-progress   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a <strong>progress bar</strong> with Bootstrap using
                            <code>.progress</code>and <code>.progress-bar</code> classes. Set the width of the progress bar
                            with inline styles or utility classes to show progress.</p>
                        <div class="tab-content" id="basic-progressContent">
                            <div class="tab-pane fade show active" id="html-basic-progress" role="tabpanel"
                                aria-labelledby="html-basic-progress-tab" tabindex="0">
                                <div class="d-flex flex-column gap-3">
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 25%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 75%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-basic-progress" role="tabpanel"
                                aria-labelledby="preview-basic-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;0&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 0%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 25%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 50%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 100%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colored Progress</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colored-progress" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colored-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colored-progress" type="button" role="tab"
                                    aria-controls="html-colored-progress" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colored-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colored-progress" type="button" role="tab"
                                    aria-controls="preview-colored-progress   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <strong>colored progress bars</strong> in Bootstrap by applying classes
                            like <code>.bg-success</code> or <code>.bg-danger</code> to the <code>.progress-bar</code> for
                            different colors.</p>
                        <div class="tab-content" id="colored-progressContent">
                            <div class="tab-pane fade show active" id="html-colored-progress" role="tabpanel"
                                aria-labelledby="html-colored-progress-tab" tabindex="0">
                                <div class="d-flex flex-column gap-3">
                                    <div class="progress" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger" style="width: 25%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning" style="width: 75%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-colored-progress" role="tabpanel"
                                aria-labelledby="preview-colored-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;0&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 0%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-danger&quot; style=&quot;width: 25%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-success&quot; style=&quot;width: 50%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-warning&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Basic example&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-info&quot; style=&quot;width: 100%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Progress With Labels</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="labels-progress" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-labels-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-labels-progress" type="button" role="tab"
                                    aria-controls="html-labels-progress" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-labels-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-labels-progress" type="button" role="tab"
                                    aria-controls="preview-labels-progress   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Display <strong>labels</strong> on Bootstrap progress bars by adding text
                            inside the <code>&lt;div class="progress-bar"&gt;</code>. Use classes like
                            <code>.text-white</code> for text color.</p>
                        <div class="tab-content" id="labels-progressContent">
                            <div class="tab-pane fade show active" id="html-labels-progress" role="tabpanel"
                                aria-labelledby="html-labels-progress-tab" tabindex="0">
                                <div class="d-flex flex-column gap-3">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 20%">20%</div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 40%">40%</div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Info example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 60%">60%</div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Warning example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning" style="width: 80%">80%</div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Danger example"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-danger" style="width: 100%">100%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-labels-progress" role="tabpanel"
                                aria-labelledby="preview-labels-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Success example&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-primary&quot; style=&quot;width: 20%&quot;&gt;20%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Success example&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-success&quot; style=&quot;width: 40%&quot;&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Info example&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-info&quot; style=&quot;width: 60%&quot;&gt;60%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Warning example&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-warning&quot; style=&quot;width: 80%&quot;&gt;80%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Danger example&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar bg-danger&quot; style=&quot;width: 100%&quot;&gt;100%&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Progress size</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="size-progress" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-size-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-size-progress" type="button" role="tab"
                                    aria-controls="html-size-progress" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-size-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-size-progress" type="button" role="tab"
                                    aria-controls="preview-size-progress   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Easily adjust the size of progress bars using custom classes. The
                            <code>.progress-xs</code> class represents an extra small progress bar, perfect for compact
                            layouts.</p>
                        <div class="tab-content" id="size-progressContent">
                            <div class="tab-pane fade show active" id="html-size-progress" role="tabpanel"
                                aria-labelledby="html-size-progress-tab" tabindex="0">
                                <div class="d-flex flex-column gap-3">
                                    <div class="progress progress-xs" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 20%"></div>
                                    </div>
                                    <div class="progress progress-sm" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar" style="width: 60%"></div>
                                    </div>
                                    <div class="progress progress-lg" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 80%"></div>
                                    </div>
                                    <div class="progress progress-xl" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-size-progress" role="tabpanel"
                                aria-labelledby="preview-size-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;progress progress-xs&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 20%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress progress-sm&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 40%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 60%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress progress-lg&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 80%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress progress-xl&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; style=&quot;width: 100%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Striped Progress</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="striped-progress" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-striped-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-striped-progress" type="button" role="tab"
                                    aria-controls="html-striped-progress" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-striped-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-striped-progress" type="button" role="tab"
                                    aria-controls="preview-striped-progress   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create <strong>striped progress bars</strong> in Bootstrap by adding the
                            <code>.progress-bar-striped</code> class to your <code>&lt;div class="progress-bar"&gt;</code>.
                            This adds a striped pattern to the progress bar for a dynamic look.</p>
                        <div class="tab-content" id="striped-progressContent">
                            <div class="tab-pane fade show active" id="html-striped-progress" role="tabpanel"
                                aria-labelledby="html-striped-progress-tab" tabindex="0">
                                <div class="d-flex flex-column gap-3">
                                    <div class="progress" role="progressbar" aria-label="Default striped example"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped" style="width: 10%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Success striped example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-success" style="width: 25%">
                                        </div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Info striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-info" style="width: 50%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Warning striped example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-warning" style="width: 75%">
                                        </div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Danger striped example"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped bg-danger" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-striped-progress" role="tabpanel"
                                aria-labelledby="preview-striped-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Default striped example&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped&quot; style=&quot;width: 10%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Success striped example&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-success&quot; style=&quot;width: 25%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Info striped example&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-info&quot; style=&quot;width: 50%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Warning striped example&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-warning&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Danger striped example&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped bg-danger&quot; style=&quot;width: 100%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Animated Striped Progress</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="animated-striped-progress"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-animated-striped-progress-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-animated-striped-progress" type="button"
                                    role="tab" aria-controls="html-animated-striped-progress"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-animated-striped-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-animated-striped-progress" type="button" role="tab"
                                    aria-controls="preview-animated-striped-progress   "
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add <strong>animation</strong> to striped progress bars in Bootstrap by using
                            <code>.progress-bar-animated</code> with <code>.progress-bar-striped</code>. This makes the
                            stripes move, creating a dynamic effect.</p>
                        <div class="tab-content" id="animated-striped-progressContent">
                            <div class="tab-pane fade show active" id="html-animated-striped-progress" role="tabpanel"
                                aria-labelledby="html-animated-striped-progress-tab" tabindex="0">
                                <div class="d-flex flex-column gap-3">
                                    <div class="progress" role="progressbar" aria-label="Default striped example"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            style="width: 10%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Success striped example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                            style="width: 25%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Info striped example"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                            style="width: 50%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Warning striped example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                            style="width: 75%"></div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Danger striped example"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                            style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-animated-striped-progress" role="tabpanel"
                                aria-labelledby="preview-animated-striped-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Default striped example&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated&quot; style=&quot;width: 10%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Success striped example&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-success&quot; style=&quot;width: 25%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Info striped example&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-info&quot; style=&quot;width: 50%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Warning striped example&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-warning&quot; style=&quot;width: 75%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Danger striped example&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-danger&quot; style=&quot;width: 100%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Circle Progress Bar</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-circle-progress"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-circle-progress-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-default-circle-progress" type="button"
                                    role="tab" aria-controls="html-default-circle-progress"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-circle-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-circle-progress" type="button" role="tab"
                                    aria-controls="preview-default-circle-progress   "
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <strong>custom circle progress bar</strong> by adding a
                            <code>.circular-progress</code> class. Inside, use an <code>&lt;svg&gt;</code> element with
                            <code>&lt;circle&gt;</code> elements for the background and foreground to visually display
                            progress.</p>
                        <div class="tab-content" id="default-circle-progressContent">
                            <div class="tab-pane fade show active" id="html-default-circle-progress" role="tabpanel"
                                aria-labelledby="html-default-circle-progress-tab" tabindex="0">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="circular-progress">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                    </div>
                                    <div class="circular-progress" style="--progress: 70;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">70%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-default-circle-progress" role="tabpanel"
                                aria-labelledby="preview-default-circle-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;circular-progress&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
&lt;/div&gt;
&lt;div class=&quot;circular-progress&quot; style=&quot;--progress: 70;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;70%&lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Circle Size Progress</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="size-circle-progress"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-size-circle-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-size-circle-progress" type="button" role="tab"
                                    aria-controls="html-size-circle-progress" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-size-circle-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-size-circle-progress" type="button" role="tab"
                                    aria-controls="preview-size-circle-progress   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <strong>size classes</strong> like <code>.circular-*</code> to adjust the
                            circle progress bar size in Bootstrap. Apply it to <code>.circular-progress</code> for a larger
                            display.</p>
                        <div class="tab-content" id="size-circle-progressContent">
                            <div class="tab-pane fade show active" id="html-size-circle-progress" role="tabpanel"
                                aria-labelledby="html-size-circle-progress-tab" tabindex="0">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="circular-progress circular-xxl">
                                        <svg class="circular-inner" viewBox="0 0 130 130">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>

                                    <div class="circular-progress circular-xl">
                                        <svg class="circular-inner" viewBox="0 0 110 110">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>

                                    <div class="circular-progress circular-progress-secondary">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>

                                    <div class="circular-progress circular-md">
                                        <svg class="circular-inner" viewBox="0 0 76 76">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>

                                    <div class="circular-progress circular-sm">
                                        <svg class="circular-inner" viewBox="0 0 56 56">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-size-circle-progress" role="tabpanel"
                                aria-labelledby="preview-size-circle-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex align-items-center gap-3&quot;&gt;
    &lt;div class=&quot;circular-progress circular-xxl&quot;&gt;
        &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 130 130&quot;&gt;
            &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
            &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;/svg&gt;
        &lt;div class=&quot;circular-text&quot;&gt;40%&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;circular-progress circular-xl&quot;&gt;
        &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 110 110&quot;&gt;
            &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
            &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;/svg&gt;
        &lt;div class=&quot;circular-text&quot;&gt;40%&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;circular-progress circular-progress-secondary&quot;&gt;
        &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
            &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
            &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;/svg&gt;
        &lt;div class=&quot;circular-text&quot;&gt;40%&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;circular-progress circular-md&quot;&gt;
        &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 76 76&quot;&gt;
            &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
            &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;/svg&gt;
        &lt;div class=&quot;circular-text&quot;&gt;40%&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;circular-progress circular-sm&quot;&gt;
        &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 56 56&quot;&gt;
            &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
            &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;/svg&gt;
        &lt;div class=&quot;circular-text&quot;&gt;40%&lt;/div&gt;
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
                        <h5 class="card-title mb-0 flex-grow-1">Circle Color Progress</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="color-circle-progress"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-color-circle-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-color-circle-progress" type="button" role="tab"
                                    aria-controls="html-color-circle-progress" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-color-circle-progress-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-color-circle-progress" type="button" role="tab"
                                    aria-controls="preview-color-circle-progress   "
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Change the <strong>color</strong> of your circle progress bar using the
                            <code>.circular-progress-*</code> class. Apply this class to <code>.circular-progress</code> for
                            a color scheme.</p>
                        <div class="tab-content" id="color-circle-progressContent">
                            <div class="tab-pane fade show active" id="html-color-circle-progress" role="tabpanel"
                                aria-labelledby="html-color-circle-progress-tab" tabindex="0">
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <div class="circular-progress circular-progress-primary" style="--progress: 10;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">10%</div>
                                    </div>
                                    <div class="circular-progress circular-progress-secondary" style="--progress: 70;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">70%</div>
                                    </div>
                                    <div class="circular-progress circular-progress-success" style="--progress: 40;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>
                                    <div class="circular-progress circular-progress-info" style="--progress: 22;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">22%</div>
                                    </div>
                                    <div class="circular-progress circular-progress-warning" style="--progress: 90;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">90%</div>
                                    </div>
                                    <div class="circular-progress circular-progress-danger" style="--progress: 40;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">40%</div>
                                    </div>
                                    <div class="circular-progress circular-progress-dark" style="--progress: 50;">
                                        <svg class="circular-inner" viewBox="0 0 90 90">
                                            <circle class="bg-circular-progress"></circle>
                                            <circle class="fg-circular-progress"></circle>
                                        </svg>
                                        <div class="circular-text">50%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-color-circle-progress" role="tabpanel"
                                aria-labelledby="preview-color-circle-progress-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;circular-progress circular-progress-primary&quot; style=&quot;--progress: 10;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;10%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;circular-progress circular-progress-secondary&quot; style=&quot;--progress: 70;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;70%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;circular-progress circular-progress-success&quot; style=&quot;--progress: 40;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;circular-progress circular-progress-info&quot; style=&quot;--progress: 22;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;22%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;circular-progress circular-progress-warning&quot; style=&quot;--progress: 90;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;90%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;circular-progress circular-progress-danger&quot; style=&quot;--progress: 40;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;40%&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;circular-progress circular-progress-dark&quot; style=&quot;--progress: 50;&quot;&gt;
    &lt;svg class=&quot;circular-inner&quot; viewBox=&quot;0 0 90 90&quot;&gt;
        &lt;circle class=&quot;bg-circular-progress&quot;&gt;&lt;/circle&gt;
        &lt;circle class=&quot;fg-circular-progress&quot;&gt;&lt;/circle&gt;
    &lt;/svg&gt;
    &lt;div class=&quot;circular-text&quot;&gt;50%&lt;/div&gt;
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

    <script type="module" src="assets/js/app.js"></script>
@endsection
