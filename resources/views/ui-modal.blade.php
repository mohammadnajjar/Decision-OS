@extends('partials.layouts.master')

@section('title', 'UI Modal | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Modal')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Modal View</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-view" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-view-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-view" type="button" role="tab"
                                    aria-controls="html-modal-view" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-view-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-view" type="button" role="tab"
                                    aria-controls="preview-modal-view" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Below is a static modal example (meaning its <code>position</code> and
                            <code>display</code> have been overridden). Included are the modal header, modal body (required
                            for <code>padding</code>), and modal footer (optional). We ask that you include modal headers
                            with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
                        <div class="tab-content" id="modal-viewContent">
                            <div class="tab-pane fade show active" id="html-modal-view" role="tabpanel"
                                aria-labelledby="html-modal-view-tab" tabindex="0">
                                <div class="modal d-block position-relative z-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLabel">🌟 Exciting Updates!</h5>
                                                <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="fs-5 mb-3">Welcome to Our Platform!</h2>
                                                <p class="mb-4">We're thrilled to share the latest features designed to
                                                    enhance your experience:</p>
                                                <ul class="list-group">
                                                    <li class="list-group-item border-0 py-1">
                                                        <i class="ri-search-line me-2 text-primary"></i>Enhanced Search
                                                        Functionality
                                                    </li>
                                                    <li class="list-group-item border-0 py-1">
                                                        <i class="ri-bar-chart-line me-2 text-success"></i>Improved
                                                        Analytics Dashboard
                                                    </li>
                                                    <li class="list-group-item border-0 py-1">
                                                        <i class="ri-user-line me-2 text-warning"></i>User-Friendly
                                                        Interface Updates
                                                    </li>
                                                </ul>
                                                <p class="mt-4 mb-0">Join us as we continue to evolve and innovate!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-modal-view" role="tabpanel"
                                aria-labelledby="preview-modal-view-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;modal d-block position-relative z-1&quot; role=&quot;dialog&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;modalLabel&quot;&gt;🌟 Exciting Updates!&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;h2 class=&quot;fs-5 mb-3&quot;&gt;Welcome to Our Platform!&lt;/h2&gt;
                &lt;p class=&quot;mb-4&quot;&gt;We're thrilled to share the latest features designed to enhance your experience:&lt;/p&gt;
                &lt;ul class=&quot;list-group&quot;&gt;
                    &lt;li class=&quot;list-group-item border-0 py-1&quot;&gt;
                        &lt;i class=&quot;ri-search-line me-2 text-primary&quot;&gt;&lt;/i&gt;Enhanced Search Functionality
                    &lt;/li&gt;
                    &lt;li class=&quot;list-group-item border-0 py-1&quot;&gt;
                        &lt;i class=&quot;ri-bar-chart-line me-2 text-success&quot;&gt;&lt;/i&gt;Improved Analytics Dashboard
                    &lt;/li&gt;
                    &lt;li class=&quot;list-group-item border-0 py-1&quot;&gt;
                        &lt;i class=&quot;ri-user-line me-2 text-warning&quot;&gt;&lt;/i&gt;User-Friendly Interface Updates
                    &lt;/li&gt;
                &lt;/ul&gt;
                &lt;p class=&quot;mt-4 mb-0&quot;&gt;Join us as we continue to evolve and innovate!&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Modal</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-default" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-default-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-default" type="button" role="tab"
                                    aria-controls="html-modal-default" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-default-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-default" type="button" role="tab"
                                    aria-controls="preview-modal-default" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Toggle a working modal demo by clicking the button below. It will slide down
                            and fade in from the top of the page.</p>
                        <div class="tab-content" id="modal-defaultContent">
                            <div class="tab-pane fade show active" id="html-modal-default" role="tabpanel"
                                aria-labelledby="html-modal-default-tab" tabindex="0">
                                <!-- Default Modal Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#defaultModal">
                                    Launch Default Modal
                                </button>

                                <!-- start:: Default Modal -->
                                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog"
                                    aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLabel">
                                                    🚀 Get Ready for Our Next Event!
                                                </h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="fs-5 mb-3">Join Us for an Exclusive Webinar!</h2>
                                                <p class="mb-4">We're excited to invite you to our upcoming webinar,
                                                    where you'll learn:</p>
                                                <ul class="mt-3 list-group">
                                                    <li class="list-group-item border-0">
                                                        <i class="ri-bar-chart-line me-2 text-primary"></i>Tips and tricks
                                                        for maximizing productivity
                                                    </li>
                                                    <li class="list-group-item border-0">
                                                        <i class="ri-user-heart-line me-2 text-success"></i>Networking
                                                        opportunities with industry leaders
                                                    </li>
                                                    <li class="list-group-item border-0">
                                                        <i class="ri-search-line me-2 text-warning"></i>Insights into the
                                                        latest trends and technologies
                                                    </li>
                                                </ul>
                                                <hr class="my-4">
                                                <div class="text-center">
                                                    <p class="fw-bold mb-1">📅 <span class="text-primary">Date:</span>
                                                        September 30, 2024</p>
                                                    <p class="fw-bold mb-1">🕒 <span class="text-primary">Time:</span>
                                                        3:00 PM - 4:00 PM (EST)</p>
                                                    <p class="fw-bold mb-4">🔗 <span class="text-primary">Location:</span>
                                                        Online (link to be provided upon registration)</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Register Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-default" role="tabpanel"
                                aria-labelledby="preview-modal-default-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Default Modal Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#defaultModal&quot;&gt;
    Launch Default Modal
&lt;/button&gt;

&lt;!-- start:: Default Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;defaultModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;modalLabel&quot;&gt;
                    🚀 Get Ready for Our Next Event!
                &lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;h2 class=&quot;fs-5 mb-3&quot;&gt;Join Us for an Exclusive Webinar!&lt;/h2&gt;
                &lt;p class=&quot;mb-4&quot;&gt;We're excited to invite you to our upcoming webinar, where you'll learn:&lt;/p&gt;
                &lt;ul class=&quot;mt-3 list-group&quot;&gt;
                    &lt;li class=&quot;list-group-item border-0&quot;&gt;
                        &lt;i class=&quot;ri-bar-chart-line me-2 text-primary&quot;&gt;&lt;/i&gt;Tips and tricks for maximizing productivity
                    &lt;/li&gt;
                    &lt;li class=&quot;list-group-item border-0&quot;&gt;
                        &lt;i class=&quot;ri-user-heart-line me-2 text-success&quot;&gt;&lt;/i&gt;Networking opportunities with industry leaders
                    &lt;/li&gt;
                    &lt;li class=&quot;list-group-item border-0&quot;&gt;
                        &lt;i class=&quot;ri-search-line me-2 text-warning&quot;&gt;&lt;/i&gt;Insights into the latest trends and technologies
                    &lt;/li&gt;
                &lt;/ul&gt;
                &lt;hr class=&quot;my-4&quot;&gt;
                &lt;div class=&quot;text-center&quot;&gt;
                    &lt;p class=&quot;fw-bold mb-1&quot;&gt;📅 &lt;span class=&quot;text-primary&quot;&gt;Date:&lt;/span&gt; September 30, 2024&lt;/p&gt;
                    &lt;p class=&quot;fw-bold mb-1&quot;&gt;🕒 &lt;span class=&quot;text-primary&quot;&gt;Time:&lt;/span&gt; 3:00 PM - 4:00 PM (EST)&lt;/p&gt;
                    &lt;p class=&quot;fw-bold mb-4&quot;&gt;🔗 &lt;span class=&quot;text-primary&quot;&gt;Location:&lt;/span&gt; Online (link to be provided upon registration)&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Register Now&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Static backdrop</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-static-backdrop"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-static-backdrop-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-static-backdrop" type="button" role="tab"
                                    aria-controls="html-modal-static-backdrop" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-static-backdrop-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-static-backdrop" type="button" role="tab"
                                    aria-controls="preview-modal-static-backdrop" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">When backdrop is set to static, the modal will not close when clicking
                            outside of it. Click the button below to try it.</p>
                        <div class="tab-content" id="modal-static-backdropContent">
                            <div class="tab-pane fade show active" id="html-modal-static-backdrop" role="tabpanel"
                                aria-labelledby="html-modal-static-backdrop-tab" tabindex="0">
                                <!-- Static Modal Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Launch static backdrop modal
                                </button>

                                <!-- start:: Static Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-static-backdrop" role="tabpanel"
                                aria-labelledby="preview-modal-static-backdrop-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Static Modal Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#staticBackdrop&quot;&gt;
    Launch static backdrop modal
&lt;/button&gt;

&lt;!-- start:: Static Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;staticBackdrop&quot; data-bs-backdrop=&quot;static&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;staticBackdropLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;staticBackdropLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-0&quot;&gt;Modal body text goes here.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Scrolling long content</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-scrolling-long"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-scrolling-long-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-scrolling-long" type="button" role="tab"
                                    aria-controls="html-modal-scrolling-long" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-scrolling-long-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-scrolling-long" type="button" role="tab"
                                    aria-controls="preview-modal-scrolling-long" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You can also create a scrollable modal that allows scrolling the modal body
                            by adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
                        <div class="tab-content" id="modal-scrolling-longContent">
                            <div class="tab-pane fade show active" id="html-modal-scrolling-long" role="tabpanel"
                                aria-labelledby="html-modal-scrolling-long-tab" tabindex="0">
                                <!-- Scrollable  Modal Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#scrollable">
                                    Launch Scrollable modal
                                </button>

                                <!-- start:: Scrollable  Modal -->
                                <div class="modal fade" id="scrollable" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="scrollableLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollableLabel">Modal title</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>This is some placeholder content to show the scrolling behavior for
                                                    modals. We use repeated line breaks to demonstrate how content can
                                                    exceed minimum inner height, thereby showing inner scrolling. When
                                                    content becomes longer than the predefined max-height of modal, content
                                                    will be cropped and scrollable within the modal.</p>
                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                                <p>This content should appear at the bottom after you scroll.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-scrolling-long" role="tabpanel"
                                aria-labelledby="preview-modal-scrolling-long-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Scrollable  Modal Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#scrollable&quot;&gt;
    Launch Scrollable modal
&lt;/button&gt;

&lt;!-- start:: Scrollable  Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;scrollable&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;scrollableLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;scrollableLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p&gt;This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.&lt;/p&gt;
                &lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;
                &lt;p&gt;This content should appear at the bottom after you scroll.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Vertically Centered</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-vertically-centered"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-vertically-centered-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-modal-vertically-centered" type="button"
                                    role="tab" aria-controls="html-modal-vertically-centered"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-vertically-centered-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-vertically-centered" type="button" role="tab"
                                    aria-controls="preview-modal-vertically-centered"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to
                            vertically center the modal.</p>
                        <div class="tab-content" id="modal-vertically-centeredContent">
                            <div class="tab-pane fade show active" id="html-modal-vertically-centered" role="tabpanel"
                                aria-labelledby="html-modal-vertically-centered-tab" tabindex="0">
                                <!-- Centered Modal Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#centered">
                                    Vertically Centered modal
                                </button>

                                <!-- start:: Centered Modal -->
                                <div class="modal fade" id="centered" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="centeredLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="centeredLabel">Modal title</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-vertically-centered" role="tabpanel"
                                aria-labelledby="preview-modal-vertically-centered-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Centered Modal Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#centered&quot;&gt;
    Vertically Centered modal
&lt;/button&gt;

&lt;!-- start:: Centered Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;centered&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;centeredLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;centeredLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-0&quot;&gt;Modal body text goes here.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Tooltips and popovers</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-tooltips" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-tooltips-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-tooltips" type="button" role="tab"
                                    aria-controls="html-modal-tooltips" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-tooltips-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-tooltips" type="button" role="tab"
                                    aria-controls="preview-modal-tooltips" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"><a href="https://getbootstrap.com/docs/5.3/components/tooltips"
                                target="_blank">Tooltips</a> and <a
                                href="https://getbootstrap.com/docs/5.3/components/popovers" target="_blank">popovers</a>
                            can be placed within modals as needed. When modals are closed, any tooltips and popovers within
                            are also automatically dismissed.</p>
                        <div class="tab-content" id="modal-tooltipsContent">
                            <div class="tab-pane fade show active" id="html-modal-tooltips" role="tabpanel"
                                aria-labelledby="html-modal-tooltips-tab" tabindex="0">
                                <!-- Tooltips and popovers Modal Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#popovers">
                                    Tooltips and Popovers modal
                                </button>

                                <!-- start:: Tooltips and popovers Modal -->
                                <div class="modal fade" id="popovers" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="popoversLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content rounded-4 shadow">
                                            <div class="modal-header bg-gradient text-white">
                                                <h5 class="modal-title" id="popoversLabel">✨ Discover Exciting Features!
                                                </h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="fs-5 text-primary">🎉 Popover in a Modal</h2>
                                                <p>
                                                    Experience our interactive feature:
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-custom-class="popover-primary" data-bs-placement="top"
                                                        data-bs-toggle="popover" title="✨ Primary Popover"
                                                        data-bs-content="This is a delightful popover, show some love! 💖">
                                                        Click Me!
                                                    </button>
                                                    to unveil a surprise.
                                                </p>
                                                <hr>
                                                <h2 class="fs-5 text-success">💡 Tooltips in Action</h2>
                                                <p>
                                                    Hover over these links for more info:
                                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                                        title="Tooltip with additional details! 🌟">This link</a>
                                                    and
                                                    <a href="javascript:void(0)" data-bs-toggle="tooltip"
                                                        title="Learn more here! 🌈">that link</a>.
                                                </p>
                                                <hr>
                                                <div class="text-center mt-4">
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Exciting Feature"
                                                        class="img-fluid rounded-circle shadow-sm" />
                                                    <p class="mt-2">Join our community and stay updated with the latest
                                                        features!</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-tooltips" role="tabpanel"
                                aria-labelledby="preview-modal-tooltips-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Tooltips and popovers Modal Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#popovers&quot;&gt;
    Tooltips and Popovers modal
&lt;/button&gt;

&lt;!-- start:: Tooltips and popovers Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;popovers&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;popoversLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-lg&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content rounded-4 shadow&quot;&gt;
            &lt;div class=&quot;modal-header bg-gradient text-white&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;popoversLabel&quot;&gt;✨ Discover Exciting Features!&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;h2 class=&quot;fs-5 text-primary&quot;&gt;🎉 Popover in a Modal&lt;/h2&gt;
                &lt;p&gt;
                    Experience our interactive feature:
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-custom-class=&quot;popover-primary&quot; data-bs-placement=&quot;top&quot; data-bs-toggle=&quot;popover&quot; title=&quot;✨ Primary Popover&quot; data-bs-content=&quot;This is a delightful popover, show some love! 💖&quot;&gt;
                        Click Me!
                    &lt;/button&gt;
                    to unveil a surprise.
                &lt;/p&gt;
                &lt;hr&gt;
                &lt;h2 class=&quot;fs-5 text-success&quot;&gt;💡 Tooltips in Action&lt;/h2&gt;
                &lt;p&gt;
                    Hover over these links for more info:
                    &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Tooltip with additional details! 🌟&quot;&gt;This link&lt;/a&gt;
                    and
                    &lt;a href=&quot;#&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Learn more here! 🌈&quot;&gt;that link&lt;/a&gt;.
                &lt;/p&gt;
                &lt;hr&gt;
                &lt;div class=&quot;text-center mt-4&quot;&gt;
                    &lt;img src=&quot;assets/images/avatar/avatar-2.jpg&quot; alt=&quot;Exciting Feature&quot; class=&quot;img-fluid rounded-circle shadow-sm&quot; /&gt;
                    &lt;p class=&quot;mt-2&quot;&gt;Join our community and stay updated with the latest features!&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save Changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Toggle Between Modals</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-toggle-between"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-toggle-between-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-toggle-between" type="button" role="tab"
                                    aria-controls="html-modal-toggle-between" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-toggle-between-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-toggle-between" type="button" role="tab"
                                    aria-controls="preview-modal-toggle-between" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Toggle between multiple modals with some clever placement of the
                            <code>data-bs-target</code> and <code>data-bs-toggle</code> attributes. For example, you could
                            toggle a password reset modal from within an already open sign in modal. Please note multiple
                            modals cannot be open at the same time—this method simply toggles between two separate modals.
                        </p>
                        <div class="tab-content" id="modal-toggle-betweenContent">
                            <div class="tab-pane fade show active" id="html-modal-toggle-between" role="tabpanel"
                                aria-labelledby="html-modal-toggle-between-tab" tabindex="0">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                    data-bs-toggle="modal">Open first modal</button>
                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h2>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Show a second modal and hide this one with the button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                                    data-bs-toggle="modal">Open second modal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h2>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Hide this modal and show the first with the button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                                    data-bs-toggle="modal">Back to first</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-toggle-between" role="tabpanel"
                                aria-labelledby="preview-modal-toggle-between-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button class=&quot;btn btn-primary&quot; data-bs-target=&quot;#exampleModalToggle&quot; data-bs-toggle=&quot;modal&quot;&gt;Open first modal&lt;/button&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalToggle&quot; aria-hidden=&quot;true&quot; aria-labelledby=&quot;exampleModalToggleLabel&quot; tabindex=&quot;-1&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h2 class=&quot;modal-title fs-5&quot; id=&quot;exampleModalToggleLabel&quot;&gt;Modal 1&lt;/h2&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                Show a second modal and hide this one with the button below.
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button class=&quot;btn btn-primary&quot; data-bs-target=&quot;#exampleModalToggle2&quot; data-bs-toggle=&quot;modal&quot;&gt;Open second modal&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalToggle2&quot; aria-hidden=&quot;true&quot; aria-labelledby=&quot;exampleModalToggleLabel2&quot; tabindex=&quot;-1&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h2 class=&quot;modal-title fs-5&quot; id=&quot;exampleModalToggleLabel2&quot;&gt;Modal 2&lt;/h2&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                Hide this modal and show the first with the button below.
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button class=&quot;btn btn-primary&quot; data-bs-target=&quot;#exampleModalToggle&quot; data-bs-toggle=&quot;modal&quot;&gt;Back to first&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Varying Modal Content</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-varying" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-varying-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-varying" type="button" role="tab"
                                    aria-controls="html-modal-varying" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-varying-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-varying" type="button" role="tab"
                                    aria-controls="preview-modal-varying" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-1">Have a bunch of buttons that all trigger the same modal with slightly
                            different contents? Use <code>event.relatedTarget</code> and HTML data-bs-* attributes to vary
                            the contents of the modal depending on which button was clicked.</p>
                        <p class="text-muted">Below is a live demo followed by example HTML and JavaScript. For more
                            information, read the modal events docs for details on <code>relatedTarget</code>.</p>
                        <div class="tab-content" id="modal-varyingContent">
                            <div class="tab-pane fade show active gap-1 d-flex flex-wrap" id="html-modal-varying"
                                role="tabpanel" aria-labelledby="html-modal-varying-tab" tabindex="0">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for
                                    @getbootstrap</button>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title fs-5" id="exampleModalLabel">New message</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="recipient-name"
                                                            class="col-form-label pt-0">Recipient:</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div>
                                                        <label for="message-text"
                                                            class="col-form-label pt-0">Message:</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-varying" role="tabpanel"
                                aria-labelledby="preview-modal-varying-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; data-bs-whatever=&quot;@mdo&quot;&gt;Open modal for @mdo&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; data-bs-whatever=&quot;@fat&quot;&gt;Open modal for @fat&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot; data-bs-whatever=&quot;@getbootstrap&quot;&gt;Open modal for @getbootstrap&lt;/button&gt;

&lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h2 class=&quot;modal-title fs-5&quot; id=&quot;exampleModalLabel&quot;&gt;New message&lt;/h2&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;form&gt;
                    &lt;div class=&quot;mb-3&quot;&gt;
                        &lt;label for=&quot;recipient-name&quot; class=&quot;col-form-label pt-0&quot;&gt;Recipient:&lt;/label&gt;
                        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;recipient-name&quot;&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;label for=&quot;message-text&quot; class=&quot;col-form-label pt-0&quot;&gt;Message:&lt;/label&gt;
                        &lt;textarea class=&quot;form-control&quot; id=&quot;message-text&quot;&gt;&lt;/textarea&gt;
                    &lt;/div&gt;
                &lt;/form&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Send message&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div clas>
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Modal Size</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-size" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-size-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-size" type="button" role="tab"
                                    aria-controls="html-modal-size" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-size-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-size" type="button" role="tab"
                                    aria-controls="preview-modal-size" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Adjust the size of a Bootstrap modal by adding size-specific classes like
                            <code>.modal-sm</code> for small, <code>.modal-lg</code> for large, or <code>.modal-xl</code>
                            for extra-large to the <code>&lt;div class="modal-dialog"&gt;</code>.</p>
                        <div class="tab-content" id="modal-sizeContent">
                            <div class="tab-pane fade show active d-flex flex-wrap gap-1" id="html-modal-size"
                                role="tabpanel" aria-labelledby="html-modal-size-tab" tabindex="0">
                                <!-- Extra Large Modal Size Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#extraLargeModel">
                                    Extra Large Modal
                                </button>

                                <!-- Large Modal Size Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#largeModel">
                                    Large Modal
                                </button>

                                <!-- Small Modal Size Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#smallModel">
                                    Small Modal
                                </button>

                                <!-- start:: Extra Large Modal Size -->
                                <div class="modal fade" id="extraLargeModel" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="extraLargeModelLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="extraLargeModelLabel">Modal title</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end:: Extra Large Modal Size -->

                                <!-- start:: Large Modal Size -->
                                <div class="modal fade" id="largeModel" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="largeModelLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="largeModelLabel">Modal title</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end:: Large Modal Size -->

                                <!-- start:: Small Modal Size -->
                                <div class="modal fade" id="smallModel" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="smallModelLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="smallModelLabel">Modal title</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Modal body text goes here.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end:: Small Modal Size -->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-size" role="tabpanel"
                                aria-labelledby="preview-modal-size-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Extra Large Modal Size Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#extraLargeModel&quot;&gt;
    Extra Large Modal
&lt;/button&gt;

&lt;!-- Large Modal Size Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#largeModel&quot;&gt;
    Large Modal
&lt;/button&gt;

&lt;!-- Small Modal Size Button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#smallModel&quot;&gt;
    Small Modal
&lt;/button&gt;

&lt;!-- start:: Extra Large Modal Size --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;extraLargeModel&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;extraLargeModelLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-xl modal-dialog-centered&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;extraLargeModelLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-0&quot;&gt;Modal body text goes here.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- end:: Extra Large Modal Size --&gt;

&lt;!-- start:: Large Modal Size --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;largeModel&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;largeModelLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-lg modal-dialog-centered&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;largeModelLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-0&quot;&gt;Modal body text goes here.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- end:: Large Modal Size --&gt;

&lt;!-- start:: Small Modal Size --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;smallModel&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;smallModelLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-sm modal-dialog-centered&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;smallModelLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-0&quot;&gt;Modal body text goes here.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!-- end:: Small Modal Size --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Fullscreen Modals Example</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-fullscreen" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-fullscreen-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-fullscreen" type="button" role="tab"
                                    aria-controls="html-modal-fullscreen" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-fullscreen-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-fullscreen" type="button" role="tab"
                                    aria-controls="preview-modal-fullscreen" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Handle long content in a Bootstrap modal by adding
                            <code>.modal-dialog-scrollable</code> to the <code>&lt;div class="modal-dialog"&gt;</code>.
                            This allows the modal body to scroll while keeping the header and footer fixed.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Availability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.modal-fullscreen</code></td>
                                        <td>Always</td>
                                    </tr>
                                    <tr>
                                        <td><code>.modal-fullscreen-sm-down</code></td>
                                        <td><code>576px</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.modal-fullscreen-md-down</code></td>
                                        <td><code>768px</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.modal-fullscreen-lg-down</code></td>
                                        <td><code>992px</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.modal-fullscreen-xl-down</code></td>
                                        <td><code>1200px</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.modal-fullscreen-xxl-down</code></td>
                                        <td><code>1400px</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-content" id="modal-fullscreenContent">
                            <div class="tab-pane fade show active" id="html-modal-fullscreen" role="tabpanel"
                                aria-labelledby="html-modal-fullscreen-tab" tabindex="0">
                                <!-- Scrollable  Modal Button -->
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreen">Full Screen</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenSm">Full Screen below sm</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenMd">Full Screen below md</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenLg">Full Screen below lg</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenXl">Full Screen below xl</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalFullscreenXxl">Full Screen below xxl</button>
                                </div>

                                <!-- Modals -->
                                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
                                    aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenLabel">Fullscreen Modal
                                                </h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-2 fw-semibold">This is a <span class="highlight">fullscreen
                                                        modal</span> that occupies the entire viewport.</p>
                                                <p class="m-0">It is useful for displaying important content without
                                                    distractions.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
                                    aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenSmLabel">Fullscreen
                                                    below sm</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-2 fw-semibold">This modal is designed to be <span
                                                        class="highlight">fullscreen below 576px</span>.</p>
                                                <p class="m-0">It ensures a better viewing experience on small devices.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
                                    aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenMdLabel">Fullscreen
                                                    below md</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-2 fw-semibold">This modal will appear <span
                                                        class="highlight">fullscreen below 768px</span>.</p>
                                                <p class="m-0">Ideal for mid-sized screens, allowing for more content
                                                    visibility.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
                                    aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenLgLabel">Fullscreen
                                                    below lg</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-2 fw-semibold">This modal is designed to be <span
                                                        class="highlight">fullscreen below 992px</span>.</p>
                                                <p class="m-0">Useful for tablets and larger mobile devices.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
                                    aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenXlLabel">Fullscreen
                                                    below xl</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-2 fw-semibold">This modal will be <span
                                                        class="highlight">fullscreen below 1200px</span>.</p>
                                                <p class="m-0">Great for larger screens to maintain a focused view.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
                                    aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xxl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalFullscreenXxlLabel">Fullscreen
                                                    below xxl</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-2 fw-semibold">This modal is set to be <span
                                                        class="highlight">fullscreen below 1400px</span>.</p>
                                                <p class="m-0">It's ideal for a clean and uninterrupted display of
                                                    content.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-modal-fullscreen" role="tabpanel"
                                aria-labelledby="preview-modal-fullscreen-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Scrollable  Modal Button --&gt;
&lt;div class=&quot;d-flex align-items-center gap-3 flex-wrap&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreen&quot;&gt;Full Screen&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenSm&quot;&gt;Full Screen below sm&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenMd&quot;&gt;Full Screen below md&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenLg&quot;&gt;Full Screen below lg&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenXl&quot;&gt;Full Screen below xl&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModalFullscreenXxl&quot;&gt;Full Screen below xxl&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Modals --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreen&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-fullscreen&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenLabel&quot;&gt;Fullscreen Modal&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-2 fw-semibold&quot;&gt;This is a &lt;span class=&quot;highlight&quot;&gt;fullscreen modal&lt;/span&gt; that occupies the entire viewport.&lt;/p&gt;
                &lt;p class=&quot;m-0&quot;&gt;It is useful for displaying important content without distractions.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenSm&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenSmLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-fullscreen-sm-down&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenSmLabel&quot;&gt;Fullscreen below sm&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-2 fw-semibold&quot;&gt;This modal is designed to be &lt;span class=&quot;highlight&quot;&gt;fullscreen below 576px&lt;/span&gt;.&lt;/p&gt;
                &lt;p class=&quot;m-0&quot;&gt;It ensures a better viewing experience on small devices.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenMd&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenMdLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-fullscreen-md-down&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenMdLabel&quot;&gt;Fullscreen below md&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-2 fw-semibold&quot;&gt;This modal will appear &lt;span class=&quot;highlight&quot;&gt;fullscreen below 768px&lt;/span&gt;.&lt;/p&gt;
                &lt;p class=&quot;m-0&quot;&gt;Ideal for mid-sized screens, allowing for more content visibility.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenLg&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenLgLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-fullscreen-lg-down&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenLgLabel&quot;&gt;Fullscreen below lg&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-2 fw-semibold&quot;&gt;This modal is designed to be &lt;span class=&quot;highlight&quot;&gt;fullscreen below 992px&lt;/span&gt;.&lt;/p&gt;
                &lt;p class=&quot;m-0&quot;&gt;Useful for tablets and larger mobile devices.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenXl&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenXlLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-fullscreen-xl-down&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenXlLabel&quot;&gt;Fullscreen below xl&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-2 fw-semibold&quot;&gt;This modal will be &lt;span class=&quot;highlight&quot;&gt;fullscreen below 1200px&lt;/span&gt;.&lt;/p&gt;
                &lt;p class=&quot;m-0&quot;&gt;Great for larger screens to maintain a focused view.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalFullscreenXxl&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalFullscreenXxlLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog modal-fullscreen-xxl-down&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalFullscreenXxlLabel&quot;&gt;Fullscreen below xxl&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt;
                &lt;p class=&quot;mb-2 fw-semibold&quot;&gt;This modal is set to be &lt;span class=&quot;highlight&quot;&gt;fullscreen below 1400px&lt;/span&gt;.&lt;/p&gt;
                &lt;p class=&quot;m-0&quot;&gt;It's ideal for a clean and uninterrupted display of content.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Draggable Modal</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="modal-draggable" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-modal-draggable-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-modal-draggable" type="button" role="tab"
                                    aria-controls="html-modal-draggable" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-modal-draggable-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-modal-draggable" type="button" role="tab"
                                    aria-controls="preview-modal-draggable" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Make a Bootstrap modal draggable by adding the
                            <code>data-draggable="true"</code> attribute to the <code>&lt;div class="modal"&gt;</code>
                            element. This allows users to move the modal around the screen.</p>
                        <div class="tab-content" id="modal-draggableContent">
                            <div class="tab-pane fade show active" id="html-modal-draggable" role="tabpanel"
                                aria-labelledby="html-modal-draggable-tab" tabindex="0">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#dragModal">
                                    Launch Scrollable modal
                                </button>

                                <div class="modal fade" id="dragModal" data-draggable="true"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="dragModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dragModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close icon-btn-sm"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ri-close-large-line fw-semibold"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="draggableContent">
                                                <p>This content should appear at the bottom after you scroll.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End modal-->
                            </div>
                            <div class="tab-pane fade" id="preview-modal-draggable" role="tabpanel"
                                aria-labelledby="preview-modal-draggable-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#dragModal&quot;&gt;
    Launch Scrollable modal
&lt;/button&gt;

&lt;div class=&quot;modal fade&quot; id=&quot;dragModal&quot; data-draggable=&quot;true&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;dragModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title&quot; id=&quot;dragModalLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot; id=&quot;draggableContent&quot;&gt;
                &lt;p&gt;This content should appear at the bottom after you scroll.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End modal--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Animated Modal</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Choose an animation from the dropdown and click <strong>Show Modal</strong>
                            to see the Bootstrap modal open with a smooth animation effect.</p>

                        <div class="input-group">
                            <select id="animationSelector" class="form-select">
                                <option value="fade" selected>Fade</option>
                                <option value="scale-in">Scale In</option>
                                <option value="slide-in-right">Slide In Right</option>
                                <option value="slide-in-bottom">Slide In Bottom</option>
                                <option value="flip-vertical">Flip Vertical</option>
                                <option value="flip-horizontal">Flip Horizontal</option>
                                <option value="zoom-in">Zoom In</option>
                                <option value="slide-in-left">Slide In Left</option>
                                <option value="slide-in-top">Slide In Top</option>
                                <option value="rotate-in">Rotate In</option>
                                <option value="shake">Shake</option>
                                <option value="swing">Swing</option>
                                <option value="zoom-out">Zoom Out</option>
                            </select>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#anime1">
                                Show modal
                            </button>
                        </div>

                        <div class="modal" id="anime1" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="anime1Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="anime1Label">Modal title</h5>
                                        <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i class="ri-close-large-line fw-semibold"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="draggableContent">
                                        <p>This content should appear at the bottom after you scroll.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
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
    <script src="assets/libs/sortablejs/Sortable.min.js"></script>
    <script type="module" src="assets/js/ui/modal.init.js"></script>
    <!--App js-->
    <script type="module" src="assets/js/app.js"></script>
@endsection
