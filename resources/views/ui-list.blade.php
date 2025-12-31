@extends('partials.layouts.master')

@section('title', 'UI List Group | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'List Group')
@section('content')

    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default List</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default" type="button" role="tab"
                                    aria-controls="html-default" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default" type="button" role="tab"
                                    aria-controls="preview-default" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>list-group</code> class in an unordered list and
                            <code>list-group-item</code> class to create a default list group.</p>
                        <div class="tab-content" id="default-listContent">
                            <div class="tab-pane fade show active" id="html-default" role="tabpanel"
                                aria-labelledby="html-default-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item">Buy fresh vegetables for dinner</li>
                                    <li class="list-group-item">Pick up groceries from the store</li>
                                    <li class="list-group-item">Order takeout for the family tonight</li>
                                    <li class="list-group-item">Prepare snacks for the movie night</li>
                                    <li class="list-group-item">Plan a weekend picnic in the park</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-default" role="tabpanel"
                                aria-labelledby="preview-default-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Buy fresh vegetables for dinner&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Pick up groceries from the store&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Order takeout for the family tonight&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Prepare snacks for the movie night&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Plan a weekend picnic in the park&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Active Item List</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="active-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-active-item-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-active-item" type="button" role="tab"
                                    aria-controls="html-active-item" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-active-item-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-active-item" type="button" role="tab"
                                    aria-controls="preview-active-item" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>active</code> class to <code>list-group-item</code> to indicate
                            the current active selection.</p>
                        <div class="tab-content" id="active-listContent">
                            <div class="tab-pane fade show active" id="html-active-item" role="tabpanel"
                                aria-labelledby="html-active-item-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true">Currently selected task in
                                        progress</li>
                                    <li class="list-group-item">Complete the project proposal by Friday</li>
                                    <li class="list-group-item">Schedule a meeting with the team</li>
                                    <li class="list-group-item">Review the budget for next quarter</li>
                                    <li class="list-group-item">Prepare presentation for client meeting</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-active-item" role="tabpanel"
                                aria-labelledby="preview-default-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
&lt;li class=&quot;list-group-item active&quot; aria-current=&quot;true&quot;&gt;Currently selected task in progress&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Complete the project proposal by Friday&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Schedule a meeting with the team&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Review the budget for next quarter&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Prepare presentation for client meeting&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>


                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled Items List</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-item-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-disabled-item" type="button" role="tab"
                                    aria-controls="html-disabled-item" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-item-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-item" type="button" role="tab"
                                    aria-controls="preview-disabled-item" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>disabled</code> class to <code>list-group-item</code> to make
                            it appear disabled.</p>
                        <div class="tab-content" id="disabled-listContent">
                            <div class="tab-pane fade show active" id="html-disabled-item" role="tabpanel"
                                aria-labelledby="html-disabled-item-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item disabled" aria-disabled="true">Currently unavailable item
                                        in stock</li>
                                    <li class="list-group-item">Fresh organic apples from local farm</li>
                                    <li class="list-group-item">Ripe bananas perfect for smoothies today</li>
                                    <li class="list-group-item">Sweet cherries for your summer desserts</li>
                                    <li class="list-group-item">Dried dates, great for snacking anytime</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-item" role="tabpanel"
                                aria-labelledby="preview-disabled-item-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
&lt;li class=&quot;list-group-item disabled&quot; aria-disabled=&quot;true&quot;&gt;Currently unavailable item in stock&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Fresh organic apples from local farm&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Ripe bananas perfect for smoothies today&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Sweet cherries for your summer desserts&lt;/li&gt;
&lt;li class=&quot;list-group-item&quot;&gt;Dried dates, great for snacking anytime&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">List with Link</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="link-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-with-link-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-with-link" type="button" role="tab"
                                    aria-controls="html-list-with-link" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-with-link-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-with-link" type="button" role="tab"
                                    aria-controls="preview-list-with-link" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>&lt;a&gt;</code> tag to create actionable list group items
                            with hover, disabled, and active states by adding list-group-item-action.</p>
                        <div class="tab-content" id="link-listContent">
                            <div class="tab-pane fade show active" id="html-list-with-link" role="tabpanel"
                                aria-labelledby="html-list-with-link-tab" tabindex="0">
                                <div class="list-group">
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action active"
                                        aria-current="true">
                                        The current link item
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">A second
                                        link item</a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">A third
                                        link item</a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">A fourth
                                        link item</a>
                                    <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A
                                        disabled link item</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-list-with-link" role="tabpanel"
                                aria-labelledby="preview-list-with-link-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;list-group&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot; aria-current=&quot;true&quot;&gt;
The current link item
&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A second link item&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A third link item&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A fourth link item&lt;/a&gt;
&lt;a class=&quot;list-group-item list-group-item-action disabled&quot; aria-disabled=&quot;true&quot;&gt;A disabled link item&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">List with Button</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="button-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-with-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-with-button" type="button" role="tab"
                                    aria-controls="html-list-with-button" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-with-button-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-with-button" type="button" role="tab"
                                    aria-controls="preview-list-with-button" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>&lt;button&gt;</code> tag to create actionable list group
                            items with hover, disabled, and active states by adding list-group-item-action.</p>
                        <div class="tab-content" id="button-listContent">
                            <div class="tab-pane fade show active" id="html-list-with-button" role="tabpanel"
                                aria-labelledby="html-list-with-button-tab" tabindex="0">
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action active"
                                        aria-current="true">
                                        Simply dummy text of the printing
                                        <span class="badge float-end bg-primary">243</span>
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        There are many variations of passages
                                        <span class="badge float-end bg-secondary-subtle text-secondary">35</span>
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        All the Lorem Ipsum generators
                                        <span class="badge float-end bg-info-subtle text-info">132</span>
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        All the Lorem Ipsum generators
                                        <span class="badge float-end bg-success-subtle text-success">2525</span>
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action" disabled>
                                        A disabled item meant to be disabled
                                        <span class="badge float-end bg-danger-subtle text-danger">21</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-list-with-button" role="tabpanel"
                                aria-labelledby="preview-list-with-button-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;list-group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action active&quot; aria-current=&quot;true&quot;&gt;
Simply dummy text of the printing
&lt;span class=&quot;badge float-end bg-primary&quot;&gt;243&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
There are many variations of passages
&lt;span class=&quot;badge float-end bg-secondary-subtle text-secondary&quot;&gt;35&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
All the Lorem Ipsum generators
&lt;span class=&quot;badge float-end bg-info-subtle text-info&quot;&gt;132&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
All the Lorem Ipsum generators
&lt;span class=&quot;badge float-end bg-success-subtle text-success&quot;&gt;2525&lt;/span&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot; disabled&gt;
A disabled item meant to be disabled
&lt;span class=&quot;badge float-end bg-danger-subtle text-danger&quot;&gt;21&lt;/span&gt;
&lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">List with Numbered</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="numbered-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-with-numbered-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-with-numbered" type="button" role="tab"
                                    aria-controls="html-list-with-numbered" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-with-numbered-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-with-numbered" type="button" role="tab"
                                    aria-controls="preview-list-with-numbered" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>list-group-numbered</code> class (optionally use an
                            <code>&lt;ol&gt;</code> element) to show numbered list group items. </p>
                        <div class="tab-content" id="numbered-listContent">
                            <div class="tab-pane fade show active" id="html-list-with-numbered" role="tabpanel"
                                aria-labelledby="html-list-with-numbered-tab" tabindex="0">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Prepare the project timeline</li>
                                    <li class="list-group-item">Conduct a market analysis</li>
                                    <li class="list-group-item">Draft the initial design concepts</li>
                                    <li class="list-group-item">Gather feedback from stakeholders</li>
                                    <li class="list-group-item">Finalize the project plan</li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="preview-list-with-numbered" role="tabpanel"
                                aria-labelledby="preview-list-with-numbered-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ol class=&quot;list-group list-group-numbered&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Prepare the project timeline&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Conduct a market analysis&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Draft the initial design concepts&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Gather feedback from stakeholders&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Finalize the project plan&lt;/li&gt;
&lt;/ol&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Flush List</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="flush-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-flush-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-flush" type="button" role="tab"
                                    aria-controls="html-list-flush" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-flush-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-flush" type="button" role="tab"
                                    aria-controls="preview-list-flush" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>list-group-flush</code> class to remove some borders and
                            rounded corners to render list group items.</p>
                        <div class="tab-content" id="flush-listContent">
                            <div class="tab-pane fade show active" id="html-list-flush" role="tabpanel"
                                aria-labelledby="html-list-flush-tab" tabindex="0">
                                <ul class="list-group fs-13 fw-medium list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-item avatar avatar-title text-primary bg-primary-subtle">
                                                JD
                                            </div>
                                            John Doe
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div
                                                class="avatar-item avatar avatar-title text-secondary bg-secondary-subtle">
                                                JS
                                            </div>
                                            Jane Smith
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-item avatar avatar-title text-info bg-info-subtle">
                                                EJ
                                            </div>
                                            Emily Johnson
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-item avatar avatar-title text-danger bg-danger-subtle">
                                                MB
                                            </div>
                                            Michael Brown
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-item avatar avatar-title text-warning bg-warning-subtle">
                                                SD
                                            </div>
                                            Sarah Davis
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-list-flush" role="tabpanel"
                                aria-labelledby="preview-list-flush-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group fs-13 fw-medium list-group-flush&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;div class=&quot;d-flex align-items-center gap-2&quot;&gt;
            &lt;div class=&quot;avatar-item avatar avatar-title text-primary bg-primary-subtle&quot;&gt;
                JD
            &lt;/div&gt;
            John Doe
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;div class=&quot;d-flex align-items-center gap-2&quot;&gt;
            &lt;div class=&quot;avatar-item avatar avatar-title text-secondary bg-secondary-subtle&quot;&gt;
                JS
            &lt;/div&gt;
            Jane Smith
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;div class=&quot;d-flex align-items-center gap-2&quot;&gt;
            &lt;div class=&quot;avatar-item avatar avatar-title text-info bg-info-subtle&quot;&gt;
                EJ
            &lt;/div&gt;
            Emily Johnson
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;div class=&quot;d-flex align-items-center gap-2&quot;&gt;
            &lt;div class=&quot;avatar-item avatar avatar-title text-danger bg-danger-subtle&quot;&gt;
                MB
            &lt;/div&gt;
            Michael Brown
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;div class=&quot;d-flex align-items-center gap-2&quot;&gt;
            &lt;div class=&quot;avatar-item avatar avatar-title text-warning bg-warning-subtle&quot;&gt;
                SD
            &lt;/div&gt;
            Sarah Davis
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Borderless List</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="borderless-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-borderless-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-borderless" type="button" role="tab"
                                    aria-controls="html-list-borderless" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-borderless-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-borderless" type="button" role="tab"
                                    aria-controls="preview-list-borderless" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>list-borderless</code> class to <code>list-group-item</code>
                            to remove border and create a normal list.</p>
                        <div class="tab-content" id="borderless-listContent">
                            <div class="tab-pane fade show active" id="html-list-borderless" role="tabpanel"
                                aria-labelledby="html-list-borderless-tab" tabindex="0">
                                <ul class="list-group list-borderless">
                                    <li class="list-group-item"> <span class="bullet me-2"></span>First item description
                                    </li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Second item description
                                    </li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Third item description
                                    </li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Fourth item description
                                    </li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Fifth item description
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-list-borderless" role="tabpanel"
                                aria-labelledby="preview-list-borderless-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group list-borderless&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;First item description&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Second item description&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Third item description&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Fourth item description&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Fifth item description&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Small Size List</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="small-size-list" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-small-size-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-small-size" type="button" role="tab"
                                    aria-controls="html-small-size" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-small-size-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-small-size" type="button" role="tab"
                                    aria-controls="preview-small-size" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use <code>list-group-sm</code> class to <code>list-group-item</code> to
                            create a small size list.</p>
                        <div class="tab-content" id="small-size-listContent">
                            <div class="tab-pane fade show active" id="html-small-size" role="tabpanel"
                                aria-labelledby="html-small-size-tab" tabindex="0">
                                <ul class="list-group list-group-sm list-borderless">
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Complete the project
                                        proposal</li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Review the budget report
                                    </li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Schedule the team
                                        meeting</li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Prepare presentation
                                        slides</li>
                                    <li class="list-group-item"> <span class="bullet me-2"></span>Send out the meeting
                                        agenda</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-small-size" role="tabpanel"
                                aria-labelledby="preview-small-size-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group list-group-sm list-borderless&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Complete the project proposal&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Review the budget report&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Schedule the team meeting&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Prepare presentation slides&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt; &lt;span class=&quot;bullet me-2&quot;&gt;&lt;/span&gt;Send out the meeting agenda&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">List with Badges</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="list-with-badges" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-with-badges-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-with-badges" type="button" role="tab"
                                    aria-controls="html-list-with-badges" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-with-badges-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-with-badges" type="button" role="tab"
                                    aria-controls="preview-list-with-badges" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use badges to any list group item to show unread counts, activity, and
                            more with the help of some <a
                                href="https://getbootstrap.com/docs/5.1/utilities/">utilities</a>.</p>
                        <div class="tab-content" id="list-with-badgesContent">
                            <div class="tab-pane fade show active" id="html-list-with-badges" role="tabpanel"
                                aria-labelledby="html-list-with-badges-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Top Gaming Headsets of 2023
                                        <span class="badge bg-success-subtle text-success">Published</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ultra HD Sound System
                                        <span class="badge bg-primary-subtle text-primary">In Development</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Summer Music Festival Highlights
                                        <span class="badge bg-success-subtle text-success">Published</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wireless Earbuds Giveaway
                                        <span class="badge bg-warning-subtle text-warning">Pending Approval</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Next-Gen Audio Accessories
                                        <span class="badge bg-primary-subtle text-primary">In Development</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-list-with-badges" role="tabpanel"
                                aria-labelledby="preview-list-with-badges-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        Top Gaming Headsets of 2023
        &lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Published&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        Ultra HD Sound System
        &lt;span class=&quot;badge bg-primary-subtle text-primary&quot;&gt;In Development&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        Summer Music Festival Highlights
        &lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Published&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        Wireless Earbuds Giveaway
        &lt;span class=&quot;badge bg-warning-subtle text-warning&quot;&gt;Pending Approval&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
        Next-Gen Audio Accessories
        &lt;span class=&quot;badge bg-primary-subtle text-primary&quot;&gt;In Development&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!--end::card-->
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">List with Checkbox</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="list-with-checkbox" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-with-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-with-checkbox" type="button" role="tab"
                                    aria-controls="html-list-with-checkbox" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-with-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-with-checkbox" type="button" role="tab"
                                    aria-controls="preview-list-with-checkbox" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use Bootstrap’s checkboxes within list group items and customize as needed.
                        </p>
                        <div class="tab-content" id="list-with-checkboxContent">
                            <div class="tab-pane fade show active" id="html-list-with-checkbox" role="tabpanel"
                                aria-labelledby="html-list-with-checkbox-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" id="firstCheckbox">
                                        <label class="form-check-label" for="firstCheckbox">Responsive Design
                                            Templates</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" id="secondCheckbox">
                                        <label class="form-check-label" for="secondCheckbox">Interactive Data
                                            Visualizations</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" id="thirdCheckbox">
                                        <label class="form-check-label" for="thirdCheckbox">Customizable Dashboard
                                            Widgets</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" id="forthCheckbox">
                                        <label class="form-check-label" for="forthCheckbox">Mobile App UI Kits</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" id="fifthCheckbox">
                                        <label class="form-check-label" for="fifthCheckbox">User Experience
                                            Enhancements</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-list-with-checkbox" role="tabpanel"
                                aria-labelledby="preview-list-with-checkbox-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; id=&quot;firstCheckbox&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;firstCheckbox&quot;&gt;Responsive Design Templates&lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; id=&quot;secondCheckbox&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;secondCheckbox&quot;&gt;Interactive Data Visualizations&lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; id=&quot;thirdCheckbox&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;thirdCheckbox&quot;&gt;Customizable Dashboard Widgets&lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; id=&quot;forthCheckbox&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;forthCheckbox&quot;&gt;Mobile App UI Kits&lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;checkbox&quot; id=&quot;fifthCheckbox&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;fifthCheckbox&quot;&gt;User Experience Enhancements&lt;/label&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">List with Radios</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="list-with-radios" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-with-radios-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-with-radios" type="button" role="tab"
                                    aria-controls="html-list-with-radios" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-with-radios-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-with-radios" type="button" role="tab"
                                    aria-controls="preview-list-with-radios" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use Bootstrap’s radios within list group items and customize as needed.</p>
                        <div class="tab-content" id="list-with-radiosContent">
                            <div class="tab-pane fade show active" id="html-list-with-radios" role="tabpanel"
                                aria-labelledby="html-list-with-radios-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio"
                                            id="firstRadio" checked>
                                        <label class="form-check-label" for="firstRadio"> Fresh Produce </label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio"
                                            id="secondRadio">
                                        <label class="form-check-label" for="secondRadio"> Home Decor </label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio"
                                            id="thirdRadio">
                                        <label class="form-check-label" for="thirdRadio"> Skincare Products </label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio"
                                            id="forthRadio">
                                        <label class="form-check-label" for="forthRadio"> Fiction Novels </label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="listGroupRadio"
                                            id="fifthRadio">
                                        <label class="form-check-label" for="fifthRadio"> Smart Home Devices </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-list-with-radios" role="tabpanel"
                                aria-labelledby="preview-list-with-radios-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;radio&quot; name=&quot;listGroupRadio&quot; id=&quot;firstRadio&quot; checked&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;firstRadio&quot;&gt; Fresh Produce &lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;radio&quot; name=&quot;listGroupRadio&quot; id=&quot;secondRadio&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;secondRadio&quot;&gt; Home Decor &lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;radio&quot; name=&quot;listGroupRadio&quot; id=&quot;thirdRadio&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;thirdRadio&quot;&gt; Skincare Products &lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;radio&quot; name=&quot;listGroupRadio&quot; id=&quot;forthRadio&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;forthRadio&quot;&gt; Fiction Novels &lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;
        &lt;input class=&quot;form-check-input me-1&quot; type=&quot;radio&quot; name=&quot;listGroupRadio&quot; id=&quot;fifthRadio&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;fifthRadio&quot;&gt; Smart Home Devices &lt;/label&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Contextual Classes</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="list-contextual-classes"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-contextual-classes-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-list-contextual-classes" type="button"
                                    role="tab" aria-controls="html-list-contextual-classes"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-contextual-classes-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-contextual-classes" type="button" role="tab"
                                    aria-controls="preview-list-contextual-classes" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use contextual classes to style list items with a stateful background and
                            color.</p>
                        <div class="tab-content" id="list-contextual-classesContent">
                            <div class="tab-pane fade show active" id="html-list-contextual-classes" role="tabpanel"
                                aria-labelledby="html-list-contextual-classes-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item list-group-item-primary">A simple primary list group item
                                    </li>
                                    <li class="list-group-item list-group-item-secondary">A simple secondary list group
                                        item</li>
                                    <li class="list-group-item list-group-item-success">A simple success list group item
                                    </li>
                                    <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                    <li class="list-group-item list-group-item-warning">A simple warning list group item
                                    </li>
                                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                    <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                    <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-list-contextual-classes" role="tabpanel"
                                aria-labelledby="preview-list-contextual-classes-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-primary&quot;&gt;A simple primary list group item&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-secondary&quot;&gt;A simple secondary list group item&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-success&quot;&gt;A simple success list group item&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-danger&quot;&gt;A simple danger list group item&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-warning&quot;&gt;A simple warning list group item&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-info&quot;&gt;A simple info list group item&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-light&quot;&gt;A simple light list group item&lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-dark&quot;&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Sub headings</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="list-sub-headings" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-sub-headings-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-sub-headings" type="button" role="tab"
                                    aria-controls="html-list-sub-headings" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-sub-headings-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-sub-headings" type="button" role="tab"
                                    aria-controls="preview-list-sub-headings" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use contextual classes to style list items with a stateful background and
                            color.</p>
                        <div class="tab-content" id="list-sub-headingsContent">
                            <div class="tab-pane fade show active" id="html-list-sub-headings" role="tabpanel"
                                aria-labelledby="html-list-sub-headings-tab" tabindex="0">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                        <p class="ms-2 me-auto mb-0 text-muted">
                                            <span class="fw-semibold fs-14">Quantum Computing Breakthroughs</span> New
                                            algorithms are enhancing processing speeds significantly.
                                        </p>
                                        <span class="badge bg-primary-subtle text-primary">320 Views</span>
                                    </li>
                                    <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                        <p class="ms-2 mb-0 me-auto text-muted">
                                            <span class="fw-semibold fs-14">Renewable Energy Growth</span> Solar and wind
                                            power installations reach record highs this year.
                                        </p>
                                        <span class="badge bg-secondary-subtle text-secondary">180 Views</span>
                                    </li>
                                    <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                        <p class="ms-2 mb-0 me-auto text-muted">
                                            <span class="fw-semibold fs-14">Cybersecurity Challenges</span> Rising threats
                                            demand innovative security solutions.
                                        </p>
                                        <span class="badge bg-success-subtle text-success">275 Views</span>
                                    </li>
                                    <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                        <p class="ms-2 mb-0 me-auto text-muted">
                                            <span class="fw-semibold fs-14">Space Exploration Milestones</span> Mars
                                            missions unveil new discoveries about the planet's geology.
                                        </p>
                                        <span class="badge bg-danger-subtle text-danger">150 Views</span>
                                    </li>
                                </ol>
                            </div>
                            <div class="tab-pane fade" id="preview-list-sub-headings" role="tabpanel"
                                aria-labelledby="preview-list-sub-headings-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ol class=&quot;list-group list-group-numbered&quot;&gt;
    &lt;li class=&quot;list-group-item d-sm-flex justify-content-between align-items-start&quot;&gt;
        &lt;p class=&quot;ms-2 me-auto mb-0 text-muted&quot;&gt;
            &lt;span class=&quot;fw-semibold fs-14&quot;&gt;Quantum Computing Breakthroughs&lt;/span&gt; New algorithms are enhancing processing speeds significantly.
        &lt;/p&gt;
        &lt;span class=&quot;badge bg-primary-subtle text-primary&quot;&gt;320 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-sm-flex justify-content-between align-items-start&quot;&gt;
        &lt;p class=&quot;ms-2 mb-0 me-auto text-muted&quot;&gt;
            &lt;span class=&quot;fw-semibold fs-14&quot;&gt;Renewable Energy Growth&lt;/span&gt; Solar and wind power installations reach record highs this year.
        &lt;/p&gt;
        &lt;span class=&quot;badge bg-secondary-subtle text-secondary&quot;&gt;180 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-sm-flex justify-content-between align-items-start&quot;&gt;
        &lt;p class=&quot;ms-2 mb-0 me-auto text-muted&quot;&gt;
            &lt;span class=&quot;fw-semibold fs-14&quot;&gt;Cybersecurity Challenges&lt;/span&gt; Rising threats demand innovative security solutions.
        &lt;/p&gt;
        &lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;275 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item d-sm-flex justify-content-between align-items-start&quot;&gt;
        &lt;p class=&quot;ms-2 mb-0 me-auto text-muted&quot;&gt;
            &lt;span class=&quot;fw-semibold fs-14&quot;&gt;Space Exploration Milestones&lt;/span&gt; Mars missions unveil new discoveries about the planet's geology.
        &lt;/p&gt;
        &lt;span class=&quot;badge bg-danger-subtle text-danger&quot;&gt;150 Views&lt;/span&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Horizontal List</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="list-horizontal" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-horizontal-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-horizontal" type="button" role="tab"
                                    aria-controls="html-list-horizontal" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-horizontal-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-horizontal" type="button" role="tab"
                                    aria-controls="preview-list-horizontal" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>list-group-horizontal</code> class to change the layout of list
                            group items from vertical to horizontal across all breakpoints.</p>
                        <div class="tab-content" id="list-horizontalContent">
                            <div class="tab-pane fade show active" id="html-list-horizontal" role="tabpanel"
                                aria-labelledby="html-list-horizontal-tab" tabindex="0">
                                <ul class="list-group list-group-horizontal-md mb-3">
                                    <li class="list-group-item">Inbox</li>
                                    <li class="list-group-item">Work</li>
                                    <li class="list-group-item">Shopping</li>
                                </ul>
                                <ul class="list-group list-group-horizontal-md justify-content-center mb-3">
                                    <li class="list-group-item">Inbox</li>
                                    <li class="list-group-item">Work</li>
                                    <li class="list-group-item">Shopping</li>
                                </ul>
                                <ul class="list-group list-group-horizontal-md justify-content-end">
                                    <li class="list-group-item">Inbox</li>
                                    <li class="list-group-item">Work</li>
                                    <li class="list-group-item">Shopping</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-list-horizontal" role="tabpanel"
                                aria-labelledby="preview-list-horizontal-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group list-group-horizontal-md mb-3&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Inbox&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Work&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Shopping&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class=&quot;list-group list-group-horizontal-md justify-content-center mb-3&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Inbox&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Work&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Shopping&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class=&quot;list-group list-group-horizontal-md justify-content-end&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Inbox&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Work&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Shopping&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Custom Content</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="list-custom-content" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-list-custom-content-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-list-custom-content" type="button" role="tab"
                                    aria-controls="html-list-custom-content" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-list-custom-content-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-list-custom-content" type="button" role="tab"
                                    aria-controls="preview-list-custom-content" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add nearly any HTML within, even for linked list groups like the one below,
                            with the help of <a href="https://getbootstrap.com/docs/5.1/utilities/flex/">flexbox
                                utilities</a>.</p>
                        <div class="tab-content" id="list-custom-contentContent">
                            <div class="tab-pane fade show active" id="html-list-custom-content" role="tabpanel"
                                aria-labelledby="html-list-custom-content-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-header d-flex align-items-center gap-3">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb--1">Charlie Pritchard</h6>
                                                    <p class="mb-0 text-muted">12 minutes ago</p>
                                                </div>
                                                <span
                                                    class="badge bg-primary flex-shrink-0 rounded-pill status-badge">Pending</span>
                                            </li>
                                            <li class="list-group-item list-group-item-content">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                                        class="avatar-lg rounded-circle flex-shrink-0">
                                                    <p class="mb-0 flex-grow-1 text-muted">Charlie has just started a new
                                                        project and is currently collecting feedback from the team. The
                                                        initial responses have been positive, but some adjustments are still
                                                        needed before the final review.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-header d-flex align-items-center gap-3">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb--1">Dominic Charlton</h6>
                                                    <p class="mb-0 text-muted">15 minutes ago</p>
                                                </div>
                                                <span
                                                    class="badge bg-primary rounded-pill status-badge flex-shrink-0">Pending</span>
                                            </li>
                                            <li class="list-group-item list-group-item-content">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                                        class="avatar-lg rounded-circle flex-shrink-0">
                                                    <p class="mb-0 flex-grow-1 text-muted">Dominic is finalizing the
                                                        details of his proposal and needs to address a few client concerns
                                                        before submission. He’s been working late to ensure everything is
                                                        perfect.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <ul class="list-group">
                                            <li
                                                class="list-group-item list-group-header d-flex align-items-center gap-3 bg-light">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb--1">Declan Long</h6>
                                                    <p class="mb-0 text-muted">1 hour ago</p>
                                                </div>
                                                <span
                                                    class="badge bg-danger rounded-pill status-badge flex-shrink-0">Rejected</span>
                                            </li>
                                            <li class="list-group-item list-group-item-content">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                        class="avatar-lg rounded-circle flex-shrink-0">
                                                    <p class="mb-0 flex-grow-1 text-muted">Declan's proposal was
                                                        unfortunately rejected due to missing key details. He’s currently
                                                        reviewing the feedback to improve and resubmit his proposal for
                                                        reconsideration.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group">
                                            <li
                                                class="list-group-item list-group-header d-flex align-items-center gap-3 bg-light">
                                                <div class="flex-grow-1">
                                                    <h6 class="mb--1">Angela Bernier</h6>
                                                    <p class="mb-0 text-muted">5 days ago</p>
                                                </div>
                                                <span
                                                    class="badge bg-success rounded-pill status-badge flex-shrink-0">Successful</span>
                                            </li>
                                            <li class="list-group-item list-group-item-content">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                        class="avatar-lg rounded-circle flex-shrink-0">
                                                    <p class="mb-0 flex-grow-1 text-muted">Angela’s project has been a
                                                        resounding success. Her innovative approach and attention to detail
                                                        impressed the client, leading to a contract extension and positive
                                                        feedback.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-list-custom-content" role="tabpanel"
                                aria-labelledby="preview-list-custom-content-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;ul class=&quot;list-group&quot;&gt;
            &lt;li class=&quot;list-group-item list-group-header d-flex align-items-center gap-3&quot;&gt;
                &lt;div class=&quot;flex-grow-1&quot;&gt;
                    &lt;h6 class=&quot;mb--1&quot;&gt;Charlie Pritchard&lt;/h6&gt;
                    &lt;p class=&quot;mb-0 text-muted&quot;&gt;12 minutes ago&lt;/p&gt;
                &lt;/div&gt;
                &lt;span class=&quot;badge bg-primary flex-shrink-0 rounded-pill status-badge&quot;&gt;Pending&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;list-group-item list-group-item-content&quot;&gt;
                &lt;div class=&quot;d-flex align-items-center gap-3&quot;&gt;
                    &lt;img src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;&quot; class=&quot;avatar-lg rounded-circle flex-shrink-0&quot;&gt;
                    &lt;p class=&quot;mb-0 flex-grow-1 text-muted&quot;&gt;Charlie has just started a new project and is currently collecting feedback from the team. The initial responses have been positive, but some adjustments are still needed before the final review.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;ul class=&quot;list-group&quot;&gt;
            &lt;li class=&quot;list-group-item list-group-header d-flex align-items-center gap-3&quot;&gt;
                &lt;div class=&quot;flex-grow-1&quot;&gt;
                    &lt;h6 class=&quot;mb--1&quot;&gt;Dominic Charlton&lt;/h6&gt;
                    &lt;p class=&quot;mb-0 text-muted&quot;&gt;15 minutes ago&lt;/p&gt;
                &lt;/div&gt;
                &lt;span class=&quot;badge bg-primary rounded-pill status-badge flex-shrink-0&quot;&gt;Pending&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;list-group-item list-group-item-content&quot;&gt;
                &lt;div class=&quot;d-flex align-items-center gap-3&quot;&gt;
                    &lt;img src=&quot;assets/images/avatar/avatar-2.jpg&quot; alt=&quot;&quot; class=&quot;avatar-lg rounded-circle flex-shrink-0&quot;&gt;
                    &lt;p class=&quot;mb-0 flex-grow-1 text-muted&quot;&gt;Dominic is finalizing the details of his proposal and needs to address a few client concerns before submission. He&rsquo;s been working late to ensure everything is perfect.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row mt-3&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;ul class=&quot;list-group&quot;&gt;
            &lt;li class=&quot;list-group-item list-group-header d-flex align-items-center gap-3 bg-light&quot;&gt;
                &lt;div class=&quot;flex-grow-1&quot;&gt;
                    &lt;h6 class=&quot;mb--1&quot;&gt;Declan Long&lt;/h6&gt;
                    &lt;p class=&quot;mb-0 text-muted&quot;&gt;1 hour ago&lt;/p&gt;
                &lt;/div&gt;
                &lt;span class=&quot;badge bg-danger rounded-pill status-badge flex-shrink-0&quot;&gt;Rejected&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;list-group-item list-group-item-content&quot;&gt;
                &lt;div class=&quot;d-flex align-items-center gap-3&quot;&gt;
                    &lt;img src=&quot;assets/images/avatar/avatar-3.jpg&quot; alt=&quot;&quot; class=&quot;avatar-lg rounded-circle flex-shrink-0&quot;&gt;
                    &lt;p class=&quot;mb-0 flex-grow-1 text-muted&quot;&gt;Declan's proposal was unfortunately rejected due to missing key details. He&rsquo;s currently reviewing the feedback to improve and resubmit his proposal for reconsideration.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;ul class=&quot;list-group&quot;&gt;
            &lt;li class=&quot;list-group-item list-group-header d-flex align-items-center gap-3 bg-light&quot;&gt;
                &lt;div class=&quot;flex-grow-1&quot;&gt;
                    &lt;h6 class=&quot;mb--1&quot;&gt;Angela Bernier&lt;/h6&gt;
                    &lt;p class=&quot;mb-0 text-muted&quot;&gt;5 days ago&lt;/p&gt;
                &lt;/div&gt;
                &lt;span class=&quot;badge bg-success rounded-pill status-badge flex-shrink-0&quot;&gt;Successful&lt;/span&gt;
            &lt;/li&gt;
            &lt;li class=&quot;list-group-item list-group-item-content&quot;&gt;
                &lt;div class=&quot;d-flex align-items-center gap-3&quot;&gt;
                    &lt;img src=&quot;assets/images/avatar/avatar-4.jpg&quot; alt=&quot;&quot; class=&quot;avatar-lg rounded-circle flex-shrink-0&quot;&gt;
                    &lt;p class=&quot;mb-0 flex-grow-1 text-muted&quot;&gt;Angela&rsquo;s project has been a resounding success. Her innovative approach and attention to detail impressed the client, leading to a contract extension and positive feedback.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
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

    <script type="module" src="assets/js/app.js"></script>
@endsection
