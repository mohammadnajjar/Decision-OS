@extends('partials.layouts.master')

@section('title', 'UI Toast | FabKin Admin & Dashboards Template')


@section('title-sub', 'Base UI')
@section('pagetitle', 'Toast')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Toast</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-toast" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-toast-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-toast" type="button" role="tab"
                                    aria-controls="html-default-toast" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-toast-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-toast" type="button" role="tab"
                                    aria-controls="preview-default-toast   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use Bootstrap's <strong>default toast</strong> to display notifications with
                            <code>.toast</code> class. To show a toast, add the <code>.show</code> class and use JavaScript
                            for automatic dismissal.</p>
                        <div class="tab-content" id="default-toastContent">
                            <div class="tab-pane fade show active" id="html-default-toast" role="tabpanel"
                                aria-labelledby="html-default-toast-tab" tabindex="0">
                                <div class="toast show mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="assets/images/logo-dark.png" class="me-auto" height="20"
                                            alt="...">
                                        <small class="text-muted">11 min ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="assets/images/logo-dark.png" class="me-auto" height="20"
                                            alt="...">
                                        <small class="text-muted">11 min ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        <h5 class="mb-1 fs-15">Your account will be permanently deleted?</h5>
                                        <p class="mb-0">Do you intend to continue?</p>
                                        <div class="mt-3 pt-3 border-top d-flex gap-2">
                                            <button class="btn btn-dark btn-sm" type="button">I'm not sure</button>
                                            <button class="btn btn-danger btn-sm" type="button"
                                                data-bs-dismiss="toast">Remove My Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-default-toast" role="tabpanel"
                                aria-labelledby="preview-default-toast-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;toast show mb-4&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;assets/images/logo-dark.png&quot; class=&quot;me-auto&quot; height=&quot;20&quot; alt=&quot;...&quot;&gt;
        &lt;small class=&quot;text-muted&quot;&gt;11 min ago&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        Hello, world! This is a toast message.
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;toast-header&quot;&gt;
        &lt;img src=&quot;assets/images/logo-dark.png&quot; class=&quot;me-auto&quot; height=&quot;20&quot; alt=&quot;...&quot;&gt;
        &lt;small class=&quot;text-muted&quot;&gt;11 min ago&lt;/small&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toast-body&quot;&gt;
        &lt;h5 class=&quot;mb-1 fs-15&quot;&gt;Your account will be permanently deleted?&lt;/h5&gt;
        &lt;p class=&quot;mb-0&quot;&gt;Do you intend to continue?&lt;/p&gt;
        &lt;div class=&quot;mt-3 pt-3 border-top d-flex gap-2&quot;&gt;
            &lt;button class=&quot;btn btn-dark btn-sm&quot; type=&quot;button&quot;&gt;I'm not sure&lt;/button&gt;
            &lt;button class=&quot;btn btn-danger btn-sm&quot; type=&quot;button&quot; data-bs-dismiss=&quot;toast&quot;&gt;Remove My Account&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Live example</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="live-example-toast" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-live-example-toast-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-live-example-toast" type="button" role="tab"
                                    aria-controls="html-live-example-toast" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-live-example-toast-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-live-example-toast" type="button" role="tab"
                                    aria-controls="preview-live-example-toast   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Check out the <strong>live example</strong> of a Bootstrap toast by adding a
                            <code>&lt;div class="toast"&gt;</code> with <code>.toast</code> class to your page. Use
                            JavaScript to show or hide the toast and customize its content as needed.</p>
                        <div class="tab-content" id="live-example-toastContent">
                            <div class="tab-pane fade show active" id="html-live-example-toast" role="tabpanel"
                                aria-labelledby="html-live-example-toast-tab" tabindex="0">
                                <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
                                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                    <div id="liveToast" class="toast" role="alert" aria-live="assertive"
                                        aria-atomic="true">
                                        <div class="toast-header">
                                            <img src="assets/images/logo-dark.png" class="me-auto" height="20"
                                                alt="...">
                                            <small class="text-muted">11 min ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                            <h6 class="mb-0">Hello, world! This is a toast message.</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-live-example-toast" role="tabpanel"
                                aria-labelledby="preview-live-example-toast-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveToastBtn&quot;&gt;Show live toast&lt;/button&gt;
&lt;div class=&quot;toast-container position-fixed bottom-0 end-0 p-3&quot;&gt;
    &lt;div id=&quot;liveToast&quot; class=&quot;toast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
        &lt;div class=&quot;toast-header&quot;&gt;
            &lt;img src=&quot;assets/images/logo-dark.png&quot; class=&quot;me-auto&quot; height=&quot;20&quot; alt=&quot;...&quot;&gt;
            &lt;small class=&quot;text-muted&quot;&gt;11 min ago&lt;/small&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            &lt;h6 class=&quot;mb-0&quot;&gt;Hello, world! This is a toast message.&lt;/h6&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Color schemes</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="color-schemes-toast" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-color-schemes-toast-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-color-schemes-toast" type="button" role="tab"
                                    aria-controls="html-color-schemes-toast" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-color-schemes-toast-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-color-schemes-toast" type="button" role="tab"
                                    aria-controls="preview-color-schemes-toast   " aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Apply <strong>color schemes</strong> to Bootstrap toasts using classes like
                            <code>.bg-success</code> or <code>.bg-danger</code>. These classes change the toast's background
                            color to match different themes, such as success or error.</p>
                        <div class="tab-content" id="color-schemes-toastContent">
                            <div class="tab-pane fade show active" id="html-color-schemes-toast" role="tabpanel"
                                aria-labelledby="html-color-schemes-toast-tab" tabindex="0">
                                <div class="toast show align-items-center text-white text-bg-primary border-0"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the Primary toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast show align-items-center text-white text-bg-secondary border-0 mt-3"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the Secondary toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast show align-items-center text-white text-bg-success border-0 mt-3"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the Success toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast show align-items-center text-white text-bg-info border-0 mt-3"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the Info toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast show align-items-center text-white text-bg-warning border-0 mt-3"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the warning toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast show align-items-center text-white text-bg-danger border-0 mt-3"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the danger toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast show align-items-center text-bg-light border-0 mt-3" role="alert"
                                    aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the light toast message.
                                        </div>
                                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast show align-items-center text-white text-bg-dark border-0 mt-3"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is the dark toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-color-schemes-toast" role="tabpanel"
                                aria-labelledby="preview-color-schemes-toast-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;toast show align-items-center text-white text-bg-primary border-0&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the Primary toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show align-items-center text-white text-bg-secondary border-0 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the Secondary toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show align-items-center text-white text-bg-success border-0 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the Success toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show align-items-center text-white text-bg-info border-0 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the Info toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show align-items-center text-white text-bg-warning border-0 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the warning toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show align-items-center text-white text-bg-danger border-0 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the danger toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show align-items-center text-bg-light border-0 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the light toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;toast show align-items-center text-white text-bg-dark border-0 mt-3&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex&quot;&gt;
        &lt;div class=&quot;toast-body&quot;&gt;
            Hello, world! This is the dark toast message.
        &lt;/div&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white me-2 m-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Toast Placement </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Set <strong>toast placement</strong> in Bootstrap using classes like
                            <code>.top-0 .start-50</code> or <code>.bottom-0 .end-0</code>. These classes position the toast
                            in different corners of the screen.</p>
                        <form>
                            <div class="mb-3">
                                <label for="selectToastPlacement">Toast placement</label>
                                <select class="form-select mt-2" id="selectToastPlacement">
                                    <option value="top-0 start-0" selected>Top left</option>
                                    <option value="top-0 start-50 translate-middle-x">Top center</option>
                                    <option value="top-0 end-0">Top right</option>
                                    <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                    <option value="top-50 start-50 translate-middle">Middle center</option>
                                    <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                    <option value="bottom-0 start-0">Bottom left</option>
                                    <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                    <option value="bottom-0 end-0">Bottom right</option>
                                </select>
                            </div>
                        </form>
                        <div aria-live="polite" aria-atomic="true" class="bd-example bg-light position-relative"
                            style="height: 300px;">
                            <div class="toast-container position-absolute p-3" id="toastPlacement">
                                <div class="toast show">
                                    <div class="toast-header">
                                        <img src="assets/images/logo-dark.png" class="me-auto" height="20"
                                            alt="...">
                                        <small class="text-muted">11 min ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom toast color example </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Customize <strong>toast colors</strong> in Bootstrap by applying classes like
                            <code>.bg-primary</code> or <code>.text-light</code> to the <code>&lt;div
                                class="toast"&gt;</code>. This allows you to set custom background and text colors for
                            your toasts.</p>
                        <!-- Buttons to trigger toasts with dynamic placement -->
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-primary" id="showPrimaryToastBtn">New Message</button>
                            <button class="btn btn-secondary" id="showSecondaryToastBtn">System Update</button>
                            <button class="btn btn-success" id="showSuccessToastBtn">Payment Successful</button>
                            <button class="btn btn-info" id="showInfoToastBtn">Profile Updated</button>
                            <button class="btn btn-warning" id="showWarningToastBtn">Low Storage</button>
                            <button class="btn btn-danger" id="showDangerToastBtn">Security Alert</button>
                            <button class="btn btn-light" id="showLightToastBtn">Friend Request</button>
                            <button class="btn btn-dark" id="showDarkToastBtn">Night Mode</button>
                        </div>

                        <!-- Top-Right Placement -->
                        <div class="toast-container position-fixed top-0 end-0 p-3">
                            <!-- Primary Toast -->
                            <div id="toastPrimary" class="toast align-items-center toast-primary mb-3" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <i class="ri-mail-fill me-2"></i>
                                    <strong class="me-auto">New Message</strong>
                                    <small>Just Now</small>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p class="mb-1">You've got a new message from Jane:</p>
                                    <h6 class="mb-1 text-reset">"Hi, can we change the time for our meeting?"</h6>
                                    <p class="mb-0"><a href="javascript:void(0)"
                                            class="text-reset text-decoration-underline">Respond now</a> or visit your
                                        inbox for further information.</p>
                                </div>
                            </div>

                            <!-- Secondary Toast -->
                            <div id="toastSecondary" class="toast align-items-center toast-secondary mb-3" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <i class="ri-settings-3-fill me-2"></i>
                                    <strong class="me-auto">System Update</strong>
                                    <small>Just Now</small>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p class="mb-1">Your software has been successfully updated to version 2.5.2.</p>
                                    <strong>New Features:</strong>
                                    <ul>
                                        <li>Enhanced startup performance</li>
                                        <li>Resolved bugs and improved user interface</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="text-reset">Check the complete changelog</a>.
                                </div>
                            </div>
                        </div>

                        <!-- Bottom-Left Placement -->
                        <div class="toast-container position-fixed bottom-0 start-0 p-3">
                            <!-- Success Toast -->
                            <div id="toastSuccess" class="toast align-items-center mb-3 toast-success" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <i class="ri-check-fill me-2"></i>
                                    <strong class="me-auto">Payment Successful</strong>
                                    <small>Just Now</small>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p class="mb-1">Your payment of $250 has been successfully processed.</p>
                                    <p class="mb-1">Transaction ID: <strong>124589</strong>.</p>
                                    <a href="javascript:void(0)" class="text-reset">View receipt</a> or <a
                                        href="javascript:void(0)" class="text-reset">download PDF</a>.
                                </div>
                            </div>

                            <!-- Info Toast -->
                            <div id="toastInfo" class="toast align-items-center toast-info mb-3" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <i class="ri-information-fill me-2"></i>
                                    <strong class="me-auto">Profile Updated</strong>
                                    <small>2 hours ago</small>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p class="mb-1">Your profile was successfully updated with the following details:</p>
                                    <p class="mb-1"><strong>Email:</strong> john.doe@example.com</p>
                                    <p class="mb-1"><strong>Phone:</strong> +1234567890</p>
                                    <a href="javascript:void(0)" class="text-reset">Review changes</a>.
                                </div>
                            </div>
                        </div>

                        <!-- Middle-Center Placement -->
                        <div class="toast-container position-fixed top-50 start-50 translate-middle p-3">
                            <!-- Warning Toast -->
                            <div id="toastWarning" class="toast align-items-center toast-warning mb-3" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <i class="ri-alert-fill me-2"></i>
                                    <strong class="me-auto">Low Storage</strong>
                                    <small>45 min ago</small>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p class="mb-1">Your device is running low on storage (<strong>2GB left</strong>).
                                    </p>
                                    <a href="javascript:void(0)" class="text-reset">Manage storage</a> or <a
                                        href="javascript:void(0)" class="text-reset">buy more space</a>.
                                </div>
                            </div>
                        </div>

                        <!-- Bottom-Right Placement -->
                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <!-- Danger Toast -->
                            <div id="toastDanger" class="toast align-items-center toast-danger border-0 mb-3"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header bg-danger-subtle">
                                    <i class="ri-shield-cross-fill me-2"></i>
                                    <strong class="me-auto">Security Alert</strong>
                                    <small>30 min ago</small>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p class="mb-1">Suspicious login attempt detected from Los Angeles, USA.</p>
                                    <p class="mb-0"><a href="javascript:void(0)" class="text-reset">Secure your
                                            account</a> or review recent activity.</p>
                                </div>
                            </div>

                            <!-- Light Toast -->
                            <div id="toastLight" class="toast align-items-center toast-light border-0 mb-3"
                                role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <i class="ri-user-add-fill me-2"></i>
                                    <strong class="me-auto">Friend Request</strong>
                                    <small>1 hour ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p class="mb-1">You have a new friend request from Emily Brown.</p>
                                    <p class="mb-0"><a href="javascript:void(0)">View profile</a> or <a
                                            href="javascript:void(0)">Accept request</a>.</p>
                                </div>
                            </div>

                            <!-- Dark Toast -->
                            <div id="toastDark" class="toast align-items-center toast-dark border-0" role="alert"
                                aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <i class="ri-moon-fill me-2"></i>
                                    <strong class="me-auto">Night Mode</strong>
                                    <small>2 min ago</small>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Night Mode has been activated. Enjoy a more comfortable browsing experience in low-light
                                    settings.
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

    <script type="module" src="assets/js/ui/toast.init.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
