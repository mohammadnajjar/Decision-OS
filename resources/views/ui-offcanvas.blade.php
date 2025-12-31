@extends('partials.layouts.master')

@section('title', 'UI Off-Canvas | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Off-Canvas')
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
                        <h5 class="card-title mb-0 flex-grow-1">Offcanvas Basic</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="offcanvas-basic" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-offcanvas-basic-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-offcanvas-basic" type="button" role="tab"
                                    aria-controls="html-offcanvas-basic" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-offcanvas-basic-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-offcanvas-basic" type="button" role="tab"
                                    aria-controls="preview-offcanvas-basic" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use the buttons below to show and hide an offcanvas element via
                            JavaScript that toggles the <code>.show</code> class on an element with the
                            <code>.offcanvas</code> class.</p>
                        <div class="tab-content" id="offcanvas-basicContent">
                            <div class="tab-pane fade show active" id="html-offcanvas-basic" role="tabpanel"
                                aria-labelledby="html-offcanvas-basic-tab" tabindex="0">
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                        role="button" aria-controls="offcanvasExample">
                                        Link with href
                                    </a>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        Button with data-bs-target
                                    </button>
                                </div>

                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                    aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div>
                                            Some text as placeholder. In real life you can have the elements you have
                                            chosen. Like, text, images, lists, etc.
                                        </div>
                                        <div class="dropdown mt-3">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown">
                                                Dropdown button
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-offcanvas-basic" role="tabpanel"
                                aria-labelledby="preview-offcanvas-basic-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;offcanvas&quot; href=&quot;#offcanvasExample&quot; role=&quot;button&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
        Link with href
    &lt;/a&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasExample&quot; aria-controls=&quot;offcanvasExample&quot;&gt;
        Button with data-bs-target
    &lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasExample&quot; aria-labelledby=&quot;offcanvasExampleLabel&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasExampleLabel&quot;&gt;Offcanvas&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;
        &lt;div&gt;
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        &lt;/div&gt;
        &lt;div class=&quot;dropdown mt-3&quot;&gt;
            &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot;&gt;
                Dropdown button
            &lt;/button&gt;
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Body Scrolling</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="body-scrolling" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-body-scrolling-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-body-scrolling" type="button" role="tab"
                                    aria-controls="html-body-scrolling" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-body-scrolling-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-body-scrolling" type="button" role="tab"
                                    aria-controls="preview-body-scrolling" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">You can also enable <code>&lt;body&gt;</code> scrolling with a visible
                            backdrop.</p>
                        <div class="tab-content" id="body-scrollingContent">
                            <div class="tab-pane fade show active" id="html-body-scrolling" role="tabpanel"
                                aria-labelledby="html-body-scrolling-tab" tabindex="0">
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions"
                                    aria-controls="offcanvasWithBothOptions">Enable body scrolling</button>

                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"
                                    tabindex="-1" id="offcanvasWithBothOptions"
                                    aria-labelledby="offcanvasWithBothOptionsLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with
                                            scrolling</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <p>Try scrolling the rest of the page to see this option in action.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-body-scrolling" role="tabpanel"
                                aria-labelledby="preview-body-scrolling-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBothOptions&quot; aria-controls=&quot;offcanvasWithBothOptions&quot;&gt;Enable both scrolling &amp; backdrop&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-scroll=&quot;true&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasWithBothOptions&quot; aria-labelledby=&quot;offcanvasWithBothOptionsLabel&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBothOptionsLabel&quot;&gt;Backdrop with scrolling&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Static Backdrop</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="static-backdrop" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-static-backdrop-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-static-backdrop" type="button" role="tab"
                                    aria-controls="html-static-backdrop" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-static-backdrop-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-static-backdrop" type="button" role="tab"
                                    aria-controls="preview-static-backdrop" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">When backdrop is set to static, the offcanvas will not close when
                            clicking outside of it.</p>
                        <div class="tab-content" id="static-backdropContent">
                            <div class="tab-pane fade show active" id="html-static-backdrop" role="tabpanel"
                                aria-labelledby="html-static-backdrop-tab" tabindex="0">
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                    Toggle static offcanvas
                                </button>

                                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1"
                                    id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div>
                                            I will not close if you click outside of me.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-static-backdrop" role="tabpanel"
                                aria-labelledby="preview-static-backdrop-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#staticBackdrop&quot; aria-controls=&quot;staticBackdrop&quot;&gt;
    Toggle static offcanvas
&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-backdrop=&quot;static&quot; tabindex=&quot;-1&quot; id=&quot;staticBackdrop&quot; aria-labelledby=&quot;staticBackdropLabel&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;staticBackdropLabel&quot;&gt;Offcanvas&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;
        &lt;div&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Body Scrolling & Backdrop</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="body-scrolling-backdrop"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-body-scrolling-backdrop-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-body-scrolling-backdrop" type="button"
                                    role="tab" aria-controls="html-body-scrolling-backdrop"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-body-scrolling-backdrop-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-body-scrolling-backdrop" type="button" role="tab"
                                    aria-controls="preview-body-scrolling-backdrop" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Scrolling the <code>&lt;body&gt;</code> element is disabled when an
                            offcanvas and its backdrop are visible. Use the data-bs-scroll attribute to enable
                            <code>&lt;body&gt;</code> scrolling.</p>
                        <div class="tab-content" id="body-scrolling-backdropContent">
                            <div class="tab-pane fade show active" id="html-body-scrolling-backdrop" role="tabpanel"
                                aria-labelledby="html-body-scrolling-backdrop-tab" tabindex="0">
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions2"
                                    aria-controls="offcanvasWithBothOptions2">Enable both scrolling & backdrop</button>

                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                    id="offcanvasWithBothOptions2" aria-labelledby="offcanvasWithBothOptions2Label">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasWithBothOptions2Label">Backdrop with
                                            scrolling</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="card">
                                            <img src="assets/images/small/img-10.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 1">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-rocket-line ri-2x mb-3 text-primary"></i>
                                                <h5 class="card-title"><strong>New Launch:</strong> Smartwatch XYZ</h5>
                                                <p class="card-text text-muted">Experience cutting-edge technology with
                                                    heart rate monitoring, GPS tracking, and customizable watch faces.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-3">Learn More</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-11.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 2">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-store-line ri-2x mb-3 text-danger"></i>
                                                <h5 class="card-title"><strong>Flash Sale:</strong> Up to 50% off!</h5>
                                                <p class="card-text text-muted">Hurry! Limited-time offers on selected
                                                    items. Don't miss out on great deals!</p>
                                                <a href="javascript:void(0)" class="btn btn-danger mt-3">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-12.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 3">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-t-shirt-line ri-2x mb-3 text-success"></i>
                                                <h5 class="card-title"><strong>New Arrivals:</strong> Latest Fashion Trends
                                                </h5>
                                                <p class="card-text text-muted">Update your wardrobe with our stylish new
                                                    arrivals. Stand out from the crowd!</p>
                                                <a href="javascript:void(0)" class="btn btn-success mt-3">Explore
                                                    Collection</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-13.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 4">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-smartphone-line ri-2x mb-3 text-info"></i>
                                                <h5 class="card-title"><strong>Tech Update:</strong> Explore New Gadgets
                                                </h5>
                                                <p class="card-text text-muted">Discover the latest tech innovations that
                                                    simplify your life and enhance productivity.</p>
                                                <a href="javascript:void(0)" class="btn btn-info mt-3">See Gadgets</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-body-scrolling-backdrop" role="tabpanel"
                                aria-labelledby="preview-body-scrolling-backdrop-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasWithBothOptions2&quot; aria-controls=&quot;offcanvasWithBothOptions2&quot;&gt;Enable both scrolling &amp; backdrop&lt;/button&gt;

&lt;div class=&quot;offcanvas offcanvas-start&quot; data-bs-scroll=&quot;true&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasWithBothOptions2&quot; aria-labelledby=&quot;offcanvasWithBothOptions2Label&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasWithBothOptions2Label&quot;&gt;Backdrop with scrolling&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;offcanvas-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Offcanvas Placements</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="offcanvas-placements"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-offcanvas-placements-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-offcanvas-placements" type="button" role="tab"
                                    aria-controls="html-offcanvas-placements" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-offcanvas-placements-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-offcanvas-placements" type="button" role="tab"
                                    aria-controls="preview-offcanvas-placements" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use Bootstrap's offcanvas component to display content from different
                            directions. Add the <code>offcanvas-start</code>, <code>offcanvas-end</code>,
                            <code>offcanvas-top</code>, or <code>offcanvas-bottom</code> classes to control the placement.
                        </p>
                        <div class="tab-content" id="offcanvas-placementsContent">
                            <div class="tab-pane fade show active" id="html-offcanvas-placements" role="tabpanel"
                                aria-labelledby="html-offcanvas-placements-tab" tabindex="0">
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasStart" aria-controls="offcanvasStart">
                                        Toggle Start
                                    </button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        Toggle Top
                                    </button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">
                                        Toggle End
                                    </button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                                        Toggle Bottom
                                    </button>
                                </div>

                                <!-- start:: Start Offcanvas -->
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart"
                                    aria-labelledby="offcanvasStartLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasStartLabel">Explore Our Offerings</h5>
                                        <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="offcanvas"
                                            aria-label="Close">
                                            <i class="ri-close-large-line fw-semibold"></i>
                                        </button>
                                    </div>

                                    <div class="offcanvas-body">

                                        <div class="card">
                                            <img src="assets/images/small/img-1.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 1">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-rocket-line ri-2x mb-3 text-primary"></i>
                                                <h5 class="card-title"><strong>New Launch:</strong> Smartwatch XYZ</h5>
                                                <p class="card-text text-muted">Experience cutting-edge technology with
                                                    heart rate monitoring, GPS tracking, and customizable watch faces.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-3">Learn More</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-2.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 2">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-store-line ri-2x mb-3 text-danger"></i>
                                                <h5 class="card-title"><strong>Flash Sale:</strong> Up to 50% off!</h5>
                                                <p class="card-text text-muted">Hurry! Limited-time offers on selected
                                                    items. Don't miss out on great deals!</p>
                                                <a href="javascript:void(0)" class="btn btn-danger mt-3">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-3.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 3">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-t-shirt-line ri-2x mb-3 text-success"></i>
                                                <h5 class="card-title"><strong>New Arrivals:</strong> Latest Fashion Trends
                                                </h5>
                                                <p class="card-text text-muted">Update your wardrobe with our stylish new
                                                    arrivals. Stand out from the crowd!</p>
                                                <a href="javascript:void(0)" class="btn btn-success mt-3">Explore
                                                    Collection</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-4.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 4">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-smartphone-line ri-2x mb-3 text-info"></i>
                                                <h5 class="card-title"><strong>Tech Update:</strong> Explore New Gadgets
                                                </h5>
                                                <p class="card-text text-muted">Discover the latest tech innovations that
                                                    simplify your life and enhance productivity.</p>
                                                <a href="javascript:void(0)" class="btn btn-info mt-3">See Gadgets</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: Start Offcanvas -->

                                <!-- start:: Top Offcanvas -->
                                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                                    aria-labelledby="offcanvasTopLabel" style="min-height:481px;">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasStartLabel">Explore Our Offerings</h5>
                                        <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="offcanvas"
                                            aria-label="Close">
                                            <i class="ri-close-large-line fw-semibold"></i>
                                        </button>
                                    </div>

                                    <div class="offcanvas-body">

                                        <div class="row g-5">
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 1">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-rocket-line ri-2x mb-3 text-primary"></i>
                                                        <h5 class="card-title"><strong>New Launch:</strong> Smartwatch XYZ
                                                        </h5>
                                                        <p class="card-text text-muted text-truncate-2">Experience
                                                            cutting-edge technology with heart rate monitoring, GPS
                                                            tracking, and customizable watch faces.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 2">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-store-line ri-2x mb-3 text-danger"></i>
                                                        <h5 class="card-title"><strong>Flash Sale:</strong> Up to 50% off!
                                                        </h5>
                                                        <p class="card-text text-muted text-truncate-2">Hurry! Limited-time
                                                            offers on selected items. Don't miss out on great deals!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 3">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-t-shirt-line ri-2x mb-3 text-success"></i>
                                                        <h5 class="card-title"><strong>New Arrivals:</strong> Fashion
                                                            Trends</h5>
                                                        <p class="card-text text-muted text-truncate-2">Update your
                                                            wardrobe with our stylish new arrivals. Stand out from the
                                                            crowd!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 4">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-smartphone-line ri-2x mb-3 text-info"></i>
                                                        <h5 class="card-title"><strong>Tech Update:</strong> Explore
                                                            Gadgets</h5>
                                                        <p class="card-text text-muted text-truncate-2">Discover the latest
                                                            tech innovations that simplify your life and enhance
                                                            productivity.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end:: Top Offcanvas -->

                                <!-- start:: End Offcanvas -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd"
                                    aria-labelledby="offcanvasEndLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasStartLabel">Explore Our Offerings</h5>
                                        <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="offcanvas"
                                            aria-label="Close">
                                            <i class="ri-close-large-line fw-semibold"></i>
                                        </button>
                                    </div>

                                    <div class="offcanvas-body">

                                        <div class="card">
                                            <img src="assets/images/small/img-6.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 1">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-rocket-line ri-2x mb-3 text-primary"></i>
                                                <h5 class="card-title"><strong>New Launch:</strong> Smartwatch XYZ</h5>
                                                <p class="card-text text-muted">Experience cutting-edge technology with
                                                    heart rate monitoring, GPS tracking, and customizable watch faces.</p>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-3">Learn More</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-7.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 2">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-store-line ri-2x mb-3 text-danger"></i>
                                                <h5 class="card-title"><strong>Flash Sale:</strong> Up to 50% off!</h5>
                                                <p class="card-text text-muted">Hurry! Limited-time offers on selected
                                                    items. Don't miss out on great deals!</p>
                                                <a href="javascript:void(0)" class="btn btn-danger mt-3">Shop Now</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-8.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 3">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-t-shirt-line ri-2x mb-3 text-success"></i>
                                                <h5 class="card-title"><strong>New Arrivals:</strong> Latest Fashion Trends
                                                </h5>
                                                <p class="card-text text-muted">Update your wardrobe with our stylish new
                                                    arrivals. Stand out from the crowd!</p>
                                                <a href="javascript:void(0)" class="btn btn-success mt-3">Explore
                                                    Collection</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="assets/images/small/img-9.jpg"
                                                class="img-fluid rounded-top max-h-240px object-fit-cover"
                                                alt="Recent Activity 4">
                                            <div class="card-body p-4 text-center">
                                                <i class="ri-smartphone-line ri-2x mb-3 text-info"></i>
                                                <h5 class="card-title"><strong>Tech Update:</strong> Explore New Gadgets
                                                </h5>
                                                <p class="card-text text-muted">Discover the latest tech innovations that
                                                    simplify your life and enhance productivity.</p>
                                                <a href="javascript:void(0)" class="btn btn-info mt-3">See Gadgets</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: End Offcanvas -->

                                <!-- start:: Bottom Offcanvas -->
                                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                                    aria-labelledby="offcanvasBottomLabel" style="min-height:481px;">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasStartLabel">Explore Our Offerings</h5>
                                        <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="offcanvas"
                                            aria-label="Close">
                                            <i class="ri-close-large-line fw-semibold"></i>
                                        </button>
                                    </div>

                                    <div class="offcanvas-body">

                                        <div class="row g-5">
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 1">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-rocket-line ri-2x mb-3 text-primary"></i>
                                                        <h5 class="card-title"><strong>New Launch:</strong> Smartwatch XYZ
                                                        </h5>
                                                        <p class="card-text text-muted text-truncate-2">Experience
                                                            cutting-edge technology with heart rate monitoring, GPS
                                                            tracking, and customizable watch faces.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 2">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-store-line ri-2x mb-3 text-danger"></i>
                                                        <h5 class="card-title"><strong>Flash Sale:</strong> Up to 50% off!
                                                        </h5>
                                                        <p class="card-text text-muted text-truncate-2">Hurry! Limited-time
                                                            offers on selected items. Don't miss out on great deals!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 3">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-t-shirt-line ri-2x mb-3 text-success"></i>
                                                        <h5 class="card-title"><strong>New Arrivals:</strong> Fashion
                                                            Trends</h5>
                                                        <p class="card-text text-muted text-truncate-2">Update your
                                                            wardrobe with our stylish new arrivals. Stand out from the
                                                            crowd!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <div class="card mb-0">
                                                    <img src="assets/images/small/img-2.jpg"
                                                        class="img-fluid object-fit-cover rounded-top h-224px"
                                                        alt="Recent Activity 4">
                                                    <div class="card-body p-4 text-center">
                                                        <i class="ri-smartphone-line ri-2x mb-3 text-info"></i>
                                                        <h5 class="card-title"><strong>Tech Update:</strong> Explore
                                                            Gadgets</h5>
                                                        <p class="card-text text-muted text-truncate-2">Discover the latest
                                                            tech innovations that simplify your life and enhance
                                                            productivity.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-offcanvas-placements" role="tabpanel"
                                aria-labelledby="preview-offcanvas-placements-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex align-items-center gap-3 flex-wrap&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasStart&quot; aria-controls=&quot;offcanvasStart&quot;&gt;
        Toggle Start
    &lt;/button&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasTop&quot; aria-controls=&quot;offcanvasTop&quot;&gt;
        Toggle Top
    &lt;/button&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasEnd&quot; aria-controls=&quot;offcanvasEnd&quot;&gt;
        Toggle End
    &lt;/button&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasBottom&quot; aria-controls=&quot;offcanvasBottom&quot;&gt;
        Toggle Bottom
    &lt;/button&gt;
&lt;/div&gt;

&lt;!-- start:: Start Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasStart&quot; aria-labelledby=&quot;offcanvasStartLabel&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasStartLabel&quot;&gt;Explore Our Offerings&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;
            &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;offcanvas-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- end:: Start Offcanvas --&gt;

&lt;!-- start:: Top Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-top&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasTop&quot; aria-labelledby=&quot;offcanvasTopLabel&quot; style=&quot;min-height:481px;&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasStartLabel&quot;&gt;Explore Our Offerings&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;
            &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;offcanvas-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- end:: Top Offcanvas --&gt;

&lt;!-- start:: End Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-end&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasEnd&quot; aria-labelledby=&quot;offcanvasEndLabel&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasStartLabel&quot;&gt;Explore Our Offerings&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;
            &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;offcanvas-body&quot;&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- end:: End Offcanvas --&gt;

&lt;!-- start:: Bottom Offcanvas --&gt;
&lt;div class=&quot;offcanvas offcanvas-bottom&quot; tabindex=&quot;-1&quot; id=&quot;offcanvasBottom&quot; aria-labelledby=&quot;offcanvasBottomLabel&quot; style=&quot;min-height:481px;&quot;&gt;
    &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasStartLabel&quot;&gt;Explore Our Offerings&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close icon-btn-sm&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;
            &lt;i class=&quot;ri-close-large-line fw-semibold&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;offcanvas-body&quot;&gt;
        ...
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
