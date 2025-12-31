@extends('partials.layouts.master')

@section('title', 'UI Accordions | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Accordions')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-accordion" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-accordion" type="button" role="tab"
                                    aria-controls="html-basic-accordion" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-accordion" type="button" role="tab"
                                    aria-controls="preview-basic-accordion" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>accordion</code> class to expand/collapse the accordion content.
                        </p>
                        <div class="tab-content" id="basic-accordionContent">
                            <div class="tab-pane fade show active" id="html-basic-accordion" role="tabpanel"
                                aria-labelledby="html-basic-accordion-tab" tabindex="0">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_01" aria-expanded="true"
                                                aria-controls="demo_accordion_item_01">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_01" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_02"
                                                aria-expanded="false" aria-controls="demo_accordion_item_02">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_02" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_03"
                                                aria-expanded="false" aria-controls="demo_accordion_item_03">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_03" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-basic-accordion" role="tabpanel"
                                aria-labelledby="preview-basic-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_01&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_01&quot;&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_01&quot; class=&quot;accordion-collapse collapse show&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_02&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_02&quot;&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_02&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_03&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_03&quot;&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_03&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
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
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Flush</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="flush-accordion" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-flush-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-flush-accordion" type="button" role="tab"
                                    aria-controls="html-flush-accordion" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-flush-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-flush-accordion" type="button" role="tab"
                                    aria-controls="preview-flush-accordion" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>accordion-flush</code> class to remove the default
                            background-color, some borders, and some rounded corners to render accordions edge-to-edge with
                            their parent container.</p>
                        <div class="tab-content" id="flush-accordionContent">
                            <div class="tab-pane fade show active" id="html-flush-accordion" role="tabpanel"
                                aria-labelledby="html-flush-accordion-tab" tabindex="0">
                                <div class="accordion accordion-flush" id="demo_accordion_main_02">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_11" aria-expanded="true"
                                                aria-controls="demo_accordion_item_11">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_11" class="accordion-collapse collapse show"
                                            data-bs-parent="#demo_accordion_main_02">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_12"
                                                aria-expanded="false" aria-controls="demo_accordion_item_12">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_12" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_02">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_13"
                                                aria-expanded="false" aria-controls="demo_accordion_item_13">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_13" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_02">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-flush-accordion" role="tabpanel"
                                aria-labelledby="preview-flush-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-flush&quot; id=&quot;demo_accordion_main_02&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_11&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_11&quot;&gt;
                Accordion Item #1
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_11&quot; class=&quot;accordion-collapse collapse show&quot; data-bs-parent=&quot;#demo_accordion_main_02&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_12&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_12&quot;&gt;
                Accordion Item #2
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_12&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_02&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_13&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_13&quot;&gt;
                Accordion Item #3
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_13&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_02&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
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
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Accordions with Icons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="icon-with-accordion" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-icon-with-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-icon-with-accordion" type="button" role="tab"
                                    aria-controls="html-icon-with-accordion" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-icon-with-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-icon-with-accordion" type="button" role="tab"
                                    aria-controls="preview-icon-with-accordion" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>accordion-icon</code> class to show custom icon at accordion.</p>
                        <div class="tab-content" id="icon-with-accordionContent">
                            <div class="tab-pane fade show active" id="html-icon-with-accordion" role="tabpanel"
                                aria-labelledby="html-icon-with-accordion-tab" tabindex="0">
                                <div class="accordion accordion-icon" id="demo_accordion_main_03">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_31"
                                                aria-expanded="true" aria-controls="demo_accordion_item_31">
                                                <i class="ri-code-line me-2"></i> Frontend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_31" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_03">
                                            <div class="accordion-body">
                                                <strong>Frontend Development</strong> focuses on creating the visual aspects
                                                of a website or application that users interact with. This includes
                                                designing and implementing user interfaces (UI) using HTML, CSS, and
                                                JavaScript. For example, using Bootstrap to quickly style and layout
                                                responsive components can significantly streamline the development process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_32"
                                                aria-expanded="false" aria-controls="demo_accordion_item_32">
                                                <i class="ri-braces-line me-2"></i> Backend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_32" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_03">
                                            <div class="accordion-body">
                                                <strong>Backend Development</strong> involves server-side programming that
                                                powers the functionalities behind the scenes of a website or application.
                                                This includes working with databases, server logic, and APIs. For instance,
                                                using frameworks like Node.js or Django helps in efficiently managing
                                                server-side operations and handling data interactions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_33"
                                                aria-expanded="false" aria-controls="demo_accordion_item_33">
                                                <i class="ri-paint-brush-line me-2"></i> Bootstrap Customizations
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_33" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_03">
                                            <div class="accordion-body">
                                                <strong>Bootstrap Customizations</strong> allow you to tailor the Bootstrap
                                                framework to better fit your project’s needs. This can involve overriding
                                                default Bootstrap variables using custom CSS, or utilizing the Bootstrap
                                                theme customizer. For example, you can adjust the color scheme and spacing
                                                of Bootstrap components to align with your branding guidelines and improve
                                                the overall aesthetics of your application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-icon-with-accordion" role="tabpanel"
                                aria-labelledby="preview-icon-with-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-icon&quot; id=&quot;demo_accordion_main_03&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_31&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_31&quot;&gt;
                &lt;i class=&quot;ri-code-line me-2&quot;&gt;&lt;/i&gt; Frontend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_31&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_03&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Frontend Development&lt;/strong&gt; focuses on creating the visual aspects of a website or application that users interact with. This includes designing and implementing user interfaces (UI) using HTML, CSS, and JavaScript. For example, using Bootstrap to quickly style and layout responsive components can significantly streamline the development process.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_32&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_32&quot;&gt;
                &lt;i class=&quot;ri-braces-line me-2&quot;&gt;&lt;/i&gt; Backend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_32&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_03&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Backend Development&lt;/strong&gt; involves server-side programming that powers the functionalities behind the scenes of a website or application. This includes working with databases, server logic, and APIs. For instance, using frameworks like Node.js or Django helps in efficiently managing server-side operations and handling data interactions.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_33&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_33&quot;&gt;
                &lt;i class=&quot;ri-paint-brush-line me-2&quot;&gt;&lt;/i&gt; Bootstrap Customizations
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_33&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_03&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Bootstrap Customizations&lt;/strong&gt; allow you to tailor the Bootstrap framework to better fit your project&rsquo;s needs. This can involve overriding default Bootstrap variables using custom CSS, or utilizing the Bootstrap theme customizer. For example, you can adjust the color scheme and spacing of Bootstrap components to align with your branding guidelines and improve the overall aesthetics of your application.
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
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Accordions without Icons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="icon-without-accordion"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-icon-without-accordion-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-icon-without-accordion" type="button"
                                    role="tab" aria-controls="html-icon-without-accordion"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-icon-without-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-icon-without-accordion" type="button" role="tab"
                                    aria-controls="preview-icon-without-accordion" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.accordion-icon-none</code> class to create Bootstrap
                            accordions <strong>without icons</strong>. This class hides any default icons, giving your
                            accordion a cleaner look.</p>
                        <div class="tab-content" id="icon-without-accordionContent">
                            <div class="tab-pane fade show active" id="html-icon-without-accordion" role="tabpanel"
                                aria-labelledby="html-icon-without-accordion-tab" tabindex="0">
                                <div class="accordion accordion-icon-none" id="demo_accordion_main_04">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_41"
                                                aria-expanded="true" aria-controls="demo_accordion_item_41">
                                                <span class="accordion-icon me-2">
                                                    <i class="ri-code-line"></i>
                                                </span>
                                                Frontend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_41" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_04">
                                            <div class="accordion-body">
                                                <strong>Frontend Development</strong> focuses on creating the visual aspects
                                                of a website or application that users interact with. This includes
                                                designing and implementing user interfaces (UI) using HTML, CSS, and
                                                JavaScript. For example, using Bootstrap to quickly style and layout
                                                responsive components can significantly streamline the development process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_42"
                                                aria-expanded="false" aria-controls="demo_accordion_item_42">
                                                <i class="ri-braces-line me-2"></i> Backend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_42" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_04">
                                            <div class="accordion-body">
                                                <strong>Backend Development</strong> involves server-side programming that
                                                powers the functionalities behind the scenes of a website or application.
                                                This includes working with databases, server logic, and APIs. For instance,
                                                using frameworks like Node.js or Django helps in efficiently managing
                                                server-side operations and handling data interactions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_43"
                                                aria-expanded="false" aria-controls="demo_accordion_item_43">
                                                <i class="ri-paint-brush-line me-2"></i> Bootstrap Customizations
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_43" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_04">
                                            <div class="accordion-body">
                                                <strong>Bootstrap Customizations</strong> allow you to tailor the Bootstrap
                                                framework to better fit your project’s needs. This can involve overriding
                                                default Bootstrap variables using custom CSS, or utilizing the Bootstrap
                                                theme customizer. For example, you can adjust the color scheme and spacing
                                                of Bootstrap components to align with your branding guidelines and improve
                                                the overall aesthetics of your application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-icon-without-accordion" role="tabpanel"
                                aria-labelledby="preview-icon-without-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-icon-none&quot; id=&quot;demo_accordion_main_04&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_41&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_41&quot;&gt;
                &lt;span class=&quot;accordion-icon me-2&quot;&gt;
                    &lt;i class=&quot;ri-code-line&quot;&gt;&lt;/i&gt;
                &lt;/span&gt;
                Frontend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_41&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_04&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Frontend Development&lt;/strong&gt; focuses on creating the visual aspects of a website or application that users interact with. This includes designing and implementing user interfaces (UI) using HTML, CSS, and JavaScript. For example, using Bootstrap to quickly style and layout responsive components can significantly streamline the development process.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_42&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_42&quot;&gt;
                &lt;i class=&quot;ri-braces-line me-2&quot;&gt;&lt;/i&gt; Backend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_42&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_04&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Backend Development&lt;/strong&gt; involves server-side programming that powers the functionalities behind the scenes of a website or application. This includes working with databases, server logic, and APIs. For instance, using frameworks like Node.js or Django helps in efficiently managing server-side operations and handling data interactions.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_43&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_43&quot;&gt;
                &lt;i class=&quot;ri-paint-brush-line me-2&quot;&gt;&lt;/i&gt; Bootstrap Customizations
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_43&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_04&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Bootstrap Customizations&lt;/strong&gt; allow you to tailor the Bootstrap framework to better fit your project&rsquo;s needs. This can involve overriding default Bootstrap variables using custom CSS, or utilizing the Bootstrap theme customizer. For example, you can adjust the color scheme and spacing of Bootstrap components to align with your branding guidelines and improve the overall aesthetics of your application.
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
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Accordions with Plus Icon</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="plus-icon-with-accordion"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-plus-icon-with-accordion-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-plus-icon-with-accordion" type="button"
                                    role="tab" aria-controls="html-plus-icon-with-accordion"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-plus-icon-with-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-plus-icon-with-accordion" type="button" role="tab"
                                    aria-controls="preview-plus-icon-with-accordion"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.accordion-with-plus</code> class to add a <strong>plus
                                icon</strong> to your Bootstrap accordion. Place the icon inside the
                            <code>.accordion-header</code> to indicate expand/collapse functionality.</p>
                        <div class="tab-content" id="plus-icon-with-accordionContent">
                            <div class="tab-pane fade show active" id="html-plus-icon-with-accordion" role="tabpanel"
                                aria-labelledby="html-plus-icon-with-accordion-tab" tabindex="0">
                                <div class="accordion accordion-with-plus" id="demo_accordion_main_06">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_61"
                                                aria-expanded="true" aria-controls="demo_accordion_item_61">
                                                <span class="accordion-icon me-2">
                                                    <i class="ri-code-line"></i>
                                                </span>
                                                Frontend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_61" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_06">
                                            <div class="accordion-body">
                                                <strong>Frontend Development</strong> focuses on creating the visual aspects
                                                of a website or application that users interact with. This includes
                                                designing and implementing user interfaces (UI) using HTML, CSS, and
                                                JavaScript. For example, using Bootstrap to quickly style and layout
                                                responsive components can significantly streamline the development process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_62"
                                                aria-expanded="false" aria-controls="demo_accordion_item_62">
                                                <i class="ri-braces-line me-2"></i> Backend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_62" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_06">
                                            <div class="accordion-body">
                                                <strong>Backend Development</strong> involves server-side programming that
                                                powers the functionalities behind the scenes of a website or application.
                                                This includes working with databases, server logic, and APIs. For instance,
                                                using frameworks like Node.js or Django helps in efficiently managing
                                                server-side operations and handling data interactions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_63"
                                                aria-expanded="false" aria-controls="demo_accordion_item_63">
                                                <i class="ri-paint-brush-line me-2"></i> Bootstrap Customizations
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_63" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_06">
                                            <div class="accordion-body">
                                                <strong>Bootstrap Customizations</strong> allow you to tailor the Bootstrap
                                                framework to better fit your project’s needs. This can involve overriding
                                                default Bootstrap variables using custom CSS, or utilizing the Bootstrap
                                                theme customizer. For example, you can adjust the color scheme and spacing
                                                of Bootstrap components to align with your branding guidelines and improve
                                                the overall aesthetics of your application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-plus-icon-with-accordion" role="tabpanel"
                                aria-labelledby="preview-plus-icon-with-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-with-plus&quot; id=&quot;demo_accordion_main_06&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_61&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_61&quot;&gt;
                &lt;span class=&quot;accordion-icon me-2&quot;&gt;
                    &lt;i class=&quot;ri-code-line&quot;&gt;&lt;/i&gt;
                &lt;/span&gt;
                Frontend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_61&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_06&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_62&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_62&quot;&gt;
                &lt;i class=&quot;ri-braces-line me-2&quot;&gt;&lt;/i&gt; Backend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_62&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_06&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_63&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_63&quot;&gt;
                &lt;i class=&quot;ri-paint-brush-line me-2&quot;&gt;&lt;/i&gt; Bootstrap Customizations
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_63&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_06&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
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
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Accordions with Left Icon with Plus Icon</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="left-plus-icon-with-accordion"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-left-plus-icon-with-accordion-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-left-plus-icon-with-accordion"
                                    type="button" role="tab" aria-controls="html-left-plus-icon-with-accordion"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-left-plus-icon-with-accordion-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-left-plus-icon-with-accordion"
                                    type="button" role="tab" aria-controls="preview-left-plus-icon-with-accordion"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.accordion-with-left-icon</code> class to add an <strong>icon
                                on the left</strong> of each accordion item. Place your icon in an <code>&lt;i&gt;</code>
                            tag within the <code>.accordion-header</code>.</p>
                        <div class="tab-content" id="left-plus-icon-with-accordionContent">
                            <div class="tab-pane fade show active" id="html-left-plus-icon-with-accordion"
                                role="tabpanel" aria-labelledby="html-left-plus-icon-with-accordion-tab" tabindex="0">
                                <div class="accordion accordion-with-plus accordion-with-left-icon"
                                    id="demo_accordion_main_07">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_71"
                                                aria-expanded="true" aria-controls="demo_accordion_item_71">
                                                Frontend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_71" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_07">
                                            <div class="accordion-body">
                                                <strong>Frontend Development</strong> focuses on creating the visual aspects
                                                of a website or application that users interact with. This includes
                                                designing and implementing user interfaces (UI) using HTML, CSS, and
                                                JavaScript. For example, using Bootstrap to quickly style and layout
                                                responsive components can significantly streamline the development process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_72"
                                                aria-expanded="false" aria-controls="demo_accordion_item_72">
                                                Backend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_72" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_07">
                                            <div class="accordion-body">
                                                <strong>Backend Development</strong> involves server-side programming that
                                                powers the functionalities behind the scenes of a website or application.
                                                This includes working with databases, server logic, and APIs. For instance,
                                                using frameworks like Node.js or Django helps in efficiently managing
                                                server-side operations and handling data interactions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_73"
                                                aria-expanded="false" aria-controls="demo_accordion_item_73">
                                                Bootstrap Customizations
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_73" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_07">
                                            <div class="accordion-body">
                                                <strong>Bootstrap Customizations</strong> allow you to tailor the Bootstrap
                                                framework to better fit your project’s needs. This can involve overriding
                                                default Bootstrap variables using custom CSS, or utilizing the Bootstrap
                                                theme customizer. For example, you can adjust the color scheme and spacing
                                                of Bootstrap components to align with your branding guidelines and improve
                                                the overall aesthetics of your application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-left-plus-icon-with-accordion" role="tabpanel"
                                aria-labelledby="preview-left-plus-icon-with-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-with-plus accordion-with-left-icon&quot; id=&quot;demo_accordion_main_07&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_71&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_71&quot;&gt;
                Frontend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_71&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_07&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_72&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_72&quot;&gt;
                Backend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_72&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_07&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_73&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_73&quot;&gt;
                Bootstrap Customizations
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_73&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_07&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
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
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Accordions with theme color</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="theme-color-accordion"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-theme-color-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-theme-color-accordion" type="button" role="tab"
                                    aria-controls="html-theme-color-accordion" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-theme-color-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-theme-color-accordion" type="button" role="tab"
                                    aria-controls="preview-theme-color-accordion" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Customize your Bootstrap accordion header with <strong>theme colors</strong>
                            by applying classes like <code>.accordion-primary</code> or <code>.text-white</code>.</p>
                        <div class="tab-content" id="theme-color-accordionContent">
                            <div class="tab-pane fade show active" id="html-theme-color-accordion" role="tabpanel"
                                aria-labelledby="html-theme-color-accordion-tab" tabindex="0">
                                <div class="accordion accordion-primary accordion-border-box" id="demo_accordion_main_08">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_81"
                                                aria-expanded="true" aria-controls="demo_accordion_item_81">
                                                Frontend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_81" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_08">
                                            <div class="accordion-body">
                                                <strong>Frontend Development</strong> focuses on creating the visual aspects
                                                of a website or application that users interact with. This includes
                                                designing and implementing user interfaces (UI) using HTML, CSS, and
                                                JavaScript. For example, using Bootstrap to quickly style and layout
                                                responsive components can significantly streamline the development process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_82"
                                                aria-expanded="false" aria-controls="demo_accordion_item_82">
                                                Backend Development
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_82" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_08">
                                            <div class="accordion-body">
                                                <strong>Backend Development</strong> involves server-side programming that
                                                powers the functionalities behind the scenes of a website or application.
                                                This includes working with databases, server logic, and APIs. For instance,
                                                using frameworks like Node.js or Django helps in efficiently managing
                                                server-side operations and handling data interactions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#demo_accordion_item_83"
                                                aria-expanded="false" aria-controls="demo_accordion_item_83">
                                                Bootstrap Customizations
                                            </button>
                                        </h2>
                                        <div id="demo_accordion_item_83" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_08">
                                            <div class="accordion-body">
                                                <strong>Bootstrap Customizations</strong> allow you to tailor the Bootstrap
                                                framework to better fit your project’s needs. This can involve overriding
                                                default Bootstrap variables using custom CSS, or utilizing the Bootstrap
                                                theme customizer. For example, you can adjust the color scheme and spacing
                                                of Bootstrap components to align with your branding guidelines and improve
                                                the overall aesthetics of your application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-theme-color-accordion" role="tabpanel"
                                aria-labelledby="preview-theme-color-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-primary accordion-border-box&quot; id=&quot;demo_accordion_main_08&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_81&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_81&quot;&gt;
                Frontend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_81&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_08&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_82&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_82&quot;&gt;
                Backend Development
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_82&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_08&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;button class=&quot;accordion-button collapsed&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_83&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_83&quot;&gt;
                Bootstrap Customizations
            &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_83&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_08&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
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
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Accordions with subtitle</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="subtitle-with-accordion"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-subtitle-with-accordion-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-subtitle-with-accordion" type="button"
                                    role="tab" aria-controls="html-subtitle-with-accordion"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-subtitle-with-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-subtitle-with-accordion" type="button" role="tab"
                                    aria-controls="preview-subtitle-with-accordion" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add <strong>subtitles</strong> to Bootstrap accordions by including a
                            <code>&lt;h6&gt;</code> or <code>&lt;small&gt;</code> tag in the <code>.accordion-header</code>.
                            This provides extra context for each section.</p>
                        <div class="tab-content" id="subtitle-with-accordionContent">
                            <div class="tab-pane fade show active" id="html-subtitle-with-accordion" role="tabpanel"
                                aria-labelledby="html-subtitle-with-accordion-tab" tabindex="0">
                                <div class="accordion accordion-primary accordion-border-box" id="demo_accordion_main_09">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_91" aria-expanded="true"
                                                aria-controls="demo_accordion_item_91">
                                                <div>
                                                    <p class="mb-0">Frontend Development</p>
                                                    <p class="fs-12 mb-0 mt-1">Press to expand</p>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="demo_accordion_item_91" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_09">
                                            <div class="accordion-body">
                                                <strong>Frontend Development</strong> focuses on creating the visual aspects
                                                of a website or application that users interact with. This includes
                                                designing and implementing user interfaces (UI) using HTML, CSS, and
                                                JavaScript. For example, using Bootstrap to quickly style and layout
                                                responsive components can significantly streamline the development process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_92" aria-expanded="false"
                                                aria-controls="demo_accordion_item_92">
                                                <div>
                                                    <p class="mb-0">Backend Development</p>
                                                    <p class="fs-12 mb-0 mt-1">Press to expand</p>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="demo_accordion_item_92" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_09">
                                            <div class="accordion-body">
                                                <strong>Backend Development</strong> involves server-side programming that
                                                powers the functionalities behind the scenes of a website or application.
                                                This includes working with databases, server logic, and APIs. For instance,
                                                using frameworks like Node.js or Django helps in efficiently managing
                                                server-side operations and handling data interactions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_93" aria-expanded="false"
                                                aria-controls="demo_accordion_item_93">
                                                <div>
                                                    <p class="mb-0">Bootstrap Customizations</p>
                                                    <p class="fs-12 mb-0 mt-1">Press to expand</p>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="demo_accordion_item_93" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_09">
                                            <div class="accordion-body">
                                                <strong>Bootstrap Customizations</strong> allow you to tailor the Bootstrap
                                                framework to better fit your project’s needs. This can involve overriding
                                                default Bootstrap variables using custom CSS, or utilizing the Bootstrap
                                                theme customizer. For example, you can adjust the color scheme and spacing
                                                of Bootstrap components to align with your branding guidelines and improve
                                                the overall aesthetics of your application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-subtitle-with-accordion" role="tabpanel"
                                aria-labelledby="preview-subtitle-with-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-primary accordion-border-box&quot; id=&quot;demo_accordion_main_09&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;div class=&quot;accordion-button collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_91&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_91&quot;&gt;
                &lt;div&gt;
                    &lt;p class=&quot;mb-0&quot;&gt;Frontend Development&lt;/p&gt;
                    &lt;p class=&quot;fs-12 mb-0 mt-1&quot;&gt;Press to expand&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_91&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_09&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;div class=&quot;accordion-button collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_92&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_92&quot;&gt;
                &lt;div&gt;
                    &lt;p class=&quot;mb-0&quot;&gt;Backend Development&lt;/p&gt;
                    &lt;p class=&quot;fs-12 mb-0 mt-1&quot;&gt;Press to expand&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_92&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_09&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;div class=&quot;accordion-button collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_93&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_93&quot;&gt;
                &lt;div&gt;
                    &lt;p class=&quot;mb-0&quot;&gt;Bootstrap Customizations&lt;/p&gt;
                    &lt;p class=&quot;fs-12 mb-0 mt-1&quot;&gt;Press to expand&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_93&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_09&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
            ...
            &lt;/div&gt;
        &lt;/div&gt;
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
                        <h5 class="card-title mb-0 flex-grow-1">Accordion With Content</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="content-with-accordion"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-content-with-accordion-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-content-with-accordion" type="button"
                                    role="tab" aria-controls="html-content-with-accordion"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-content-with-accordion-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-content-with-accordion" type="button" role="tab"
                                    aria-controls="preview-content-with-accordion" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You can create an <strong>accordion with images</strong> in Bootstrap by
                            including <code>&lt;img&gt;</code> tags within the <code>.accordion-header</code> section. This
                            lets you display images alongside text content, enhancing visual appeal and information
                            delivery.</p>
                        <div class="tab-content" id="content-with-accordionContent">
                            <div class="tab-pane fade show active" id="html-content-with-accordion" role="tabpanel"
                                aria-labelledby="html-content-with-accordion-tab" tabindex="0">
                                <div class="accordion accordion-border-box" id="demo_accordion_main_10">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_100" aria-expanded="true"
                                                aria-controls="demo_accordion_item_100">
                                                <div class="avatar-image avatar-lg me-3">
                                                    <img class="img-fluid rounded-2"
                                                        src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                </div>
                                                <div>
                                                    <p class="mb-0">Frontend Development</p>
                                                    <p class="fs-12 mb-0 mt-1">Press to expand</p>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="demo_accordion_item_100" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_10">
                                            <div class="accordion-body">
                                                <strong>Frontend Development</strong> focuses on creating the visual aspects
                                                of a website or application that users interact with. This includes
                                                designing and implementing user interfaces (UI) using HTML, CSS, and
                                                JavaScript. For example, using Bootstrap to quickly style and layout
                                                responsive components can significantly streamline the development process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_101" aria-expanded="false"
                                                aria-controls="demo_accordion_item_101">
                                                <div class="avatar-image avatar-lg me-3">
                                                    <img class="img-fluid rounded-2"
                                                        src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                </div>
                                                <div>
                                                    <p class="mb-0">Backend Development</p>
                                                    <p class="fs-12 mb-0 mt-1">Press to expand</p>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="demo_accordion_item_101" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_10">
                                            <div class="accordion-body">
                                                <strong>Backend Development</strong> involves server-side programming that
                                                powers the functionalities behind the scenes of a website or application.
                                                This includes working with databases, server logic, and APIs. For instance,
                                                using frameworks like Node.js or Django helps in efficiently managing
                                                server-side operations and handling data interactions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#demo_accordion_item_103" aria-expanded="false"
                                                aria-controls="demo_accordion_item_103">
                                                <div class="avatar-image avatar-lg me-3">
                                                    <img class="img-fluid rounded-2"
                                                        src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
                                                </div>
                                                <div>
                                                    <p class="mb-0">Bootstrap Customizations</p>
                                                    <p class="fs-12 mb-0 mt-1">Press to expand</p>
                                                </div>
                                            </div>
                                        </h2>
                                        <div id="demo_accordion_item_103" class="accordion-collapse collapse"
                                            data-bs-parent="#demo_accordion_main_10">
                                            <div class="accordion-body">
                                                <strong>Bootstrap Customizations</strong> allow you to tailor the Bootstrap
                                                framework to better fit your project’s needs. This can involve overriding
                                                default Bootstrap variables using custom CSS, or utilizing the Bootstrap
                                                theme customizer. For example, you can adjust the color scheme and spacing
                                                of Bootstrap components to align with your branding guidelines and improve
                                                the overall aesthetics of your application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-content-with-accordion" role="tabpanel"
                                aria-labelledby="preview-content-with-accordion-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;accordion accordion-border-box&quot; id=&quot;demo_accordion_main_10&quot;&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;div class=&quot;accordion-button collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_100&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;demo_accordion_item_100&quot;&gt;
                &lt;div class=&quot;avatar-image avatar-lg me-3&quot;&gt;
                    &lt;img class=&quot;img-fluid rounded-2&quot; src=&quot;assets/images/avatar/avatar-3.jpg&quot; alt=&quot;avatar image&quot;&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;p class=&quot;mb-0&quot;&gt;Frontend Development&lt;/p&gt;
                    &lt;p class=&quot;fs-12 mb-0 mt-1&quot;&gt;Press to expand&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_100&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_10&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Frontend Development&lt;/strong&gt; focuses on creating the visual aspects of a website or application that users interact with. This includes designing and implementing user interfaces (UI) using HTML, CSS, and JavaScript. For example, using Bootstrap to quickly style and layout responsive components can significantly streamline the development process.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;div class=&quot;accordion-button collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_101&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_101&quot;&gt;
                &lt;div class=&quot;avatar-image avatar-lg me-3&quot;&gt;
                    &lt;img class=&quot;img-fluid rounded-2&quot; src=&quot;assets/images/avatar/avatar-3.jpg&quot; alt=&quot;avatar image&quot;&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;p class=&quot;mb-0&quot;&gt;Backend Development&lt;/p&gt;
                    &lt;p class=&quot;fs-12 mb-0 mt-1&quot;&gt;Press to expand&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_101&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_10&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Backend Development&lt;/strong&gt; involves server-side programming that powers the functionalities behind the scenes of a website or application. This includes working with databases, server logic, and APIs. For instance, using frameworks like Node.js or Django helps in efficiently managing server-side operations and handling data interactions.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;accordion-item&quot;&gt;
        &lt;h2 class=&quot;accordion-header&quot;&gt;
            &lt;div class=&quot;accordion-button collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#demo_accordion_item_103&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;demo_accordion_item_103&quot;&gt;
                &lt;div class=&quot;avatar-image avatar-lg me-3&quot;&gt;
                    &lt;img class=&quot;img-fluid rounded-2&quot; src=&quot;assets/images/avatar/avatar-3.jpg&quot; alt=&quot;avatar image&quot;&gt;
                &lt;/div&gt;
                &lt;div&gt;
                    &lt;p class=&quot;mb-0&quot;&gt;Bootstrap Customizations&lt;/p&gt;
                    &lt;p class=&quot;fs-12 mb-0 mt-1&quot;&gt;Press to expand&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/h2&gt;
        &lt;div id=&quot;demo_accordion_item_103&quot; class=&quot;accordion-collapse collapse&quot; data-bs-parent=&quot;#demo_accordion_main_10&quot;&gt;
            &lt;div class=&quot;accordion-body&quot;&gt;
                &lt;strong&gt;Bootstrap Customizations&lt;/strong&gt; allow you to tailor the Bootstrap framework to better fit your project&rsquo;s needs. This can involve overriding default Bootstrap variables using custom CSS, or utilizing the Bootstrap theme customizer. For example, you can adjust the color scheme and spacing of Bootstrap components to align with your branding guidelines and improve the overall aesthetics of your application.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Nesting Accordions</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">With Bootstrap, you can create <strong>nested accordions</strong> to organize
                            content hierarchically. To do this, simply place an <code>&lt;accordion&gt;</code> component
                            inside another <code>&lt;accordion&gt;</code>. Make sure each nested accordion has a unique
                            <code>ID</code> for proper functionality.</p>
                        <!-- Main Accordion Wrapper -->
                        <div class="accordion" id="main_accordion">
                            <!-- Frontend Development Accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#step_1" aria-expanded="true" aria-controls="step_1">
                                        <i class="ri-code-line me-2"></i> Frontend Development
                                    </button>
                                </h2>
                                <div id="step_1" class="accordion-collapse collapse show"
                                    data-bs-parent="#main_accordion">
                                    <div class="accordion-body">
                                        <!-- Nested Frontend Steps Accordion -->
                                        <div class="accordion" id="frontend_steps">
                                            <!-- Frontend Step 1 Accordion -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#frontend_step_1"
                                                        aria-expanded="true" aria-controls="frontend_step_1">
                                                        <i class="ri-file-code-line me-2"></i> Step 1: Setting Up
                                                    </button>
                                                </h2>
                                                <div id="frontend_step_1" class="accordion-collapse collapse show"
                                                    data-bs-parent="#frontend_steps">
                                                    <div class="accordion-body">
                                                        Set up your development environment by installing necessary tools
                                                        and frameworks like Node.js, npm, and a code editor.

                                                        <!-- Additional Nested Level for Step 1 -->
                                                        <div class="accordion mt-3" id="frontend_setup_details">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#frontend_setup_step_1"
                                                                        aria-expanded="false"
                                                                        aria-controls="frontend_setup_step_1">
                                                                        <i class="ri-terminal-box-line me-2"></i> Tools
                                                                        Setup
                                                                    </button>
                                                                </h2>
                                                                <div id="frontend_setup_step_1"
                                                                    class="accordion-collapse collapse show"
                                                                    data-bs-parent="#frontend_setup_details">
                                                                    <div class="accordion-body">
                                                                        Install tools such as Node.js, npm, and any code
                                                                        editor like VSCode.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of Nested Level -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Frontend Step 1 Accordion -->
                                            <!-- Frontend Step 2 Accordion -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#frontend_step_2"
                                                        aria-expanded="false" aria-controls="frontend_step_2">
                                                        <i class="ri-brush-line me-2"></i> Step 2: Designing UI
                                                    </button>
                                                </h2>
                                                <div id="frontend_step_2" class="accordion-collapse collapse"
                                                    data-bs-parent="#frontend_steps">
                                                    <div class="accordion-body">
                                                        Design UI using tools like Figma or Adobe XD.

                                                        <!-- Additional Nested Level for Step 2 -->
                                                        <div class="accordion mt-3" id="frontend_design_details">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#frontend_design_step_1"
                                                                        aria-expanded="false"
                                                                        aria-controls="frontend_design_step_1">
                                                                        <i class="ri-layout-line me-2"></i> Wireframe
                                                                    </button>
                                                                </h2>
                                                                <div id="frontend_design_step_1"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#frontend_design_details">
                                                                    <div class="accordion-body">
                                                                        Create Wireframe to plan the application layout.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of Nested Level -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Frontend Step 2 Accordion -->

                                            <!-- Frontend Step 3 Accordion -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#frontend_step_3"
                                                        aria-expanded="false" aria-controls="frontend_step_3">
                                                        <i class="ri-terminal-line me-2"></i> Step 3: Coding and Testing
                                                    </button>
                                                </h2>
                                                <div id="frontend_step_3" class="accordion-collapse collapse"
                                                    data-bs-parent="#frontend_steps">
                                                    <div class="accordion-body">
                                                        Code frontend components and perform regular testing.

                                                        <!-- Additional Nested Level for Step 3 -->
                                                        <div class="accordion mt-3" id="frontend_coding_details">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#frontend_coding_step_1"
                                                                        aria-expanded="false"
                                                                        aria-controls="frontend_coding_step_1">
                                                                        <i class="ri-terminal-line me-2"></i> Coding
                                                                        Practices
                                                                    </button>
                                                                </h2>
                                                                <div id="frontend_coding_step_1"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#frontend_coding_details">
                                                                    <div class="accordion-body">
                                                                        Follow best coding practices and use frameworks like
                                                                        Bootstrap.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of Nested Level -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Frontend Step 3 Accordion -->
                                        </div>
                                        <!-- End of Nested Frontend Steps Accordion -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Frontend Development Accordion -->

                            <!-- Backend Development Accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#step_2" aria-expanded="false" aria-controls="step_2">
                                        <i class="ri-braces-line me-2"></i> Backend Development
                                    </button>
                                </h2>
                                <div id="step_2" class="accordion-collapse collapse" data-bs-parent="#main_accordion">
                                    <div class="accordion-body">

                                        <!-- Nested Backend Steps Accordion -->
                                        <div class="accordion" id="backend_steps">

                                            <!-- Backend Step 1 Accordion -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#backend_step_1"
                                                        aria-expanded="true" aria-controls="backend_step_1">
                                                        <i class="ri-database-line me-2"></i> Step 1: Setting Up
                                                    </button>
                                                </h2>
                                                <div id="backend_step_1" class="accordion-collapse collapse show"
                                                    data-bs-parent="#backend_steps">
                                                    <div class="accordion-body">
                                                        Install and configure backend environment.

                                                        <!-- Additional Nested Level for Step 1 -->
                                                        <div class="accordion mt-3" id="backend_setup_details">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#backend_setup_step_1"
                                                                        aria-expanded="false"
                                                                        aria-controls="backend_setup_step_1">
                                                                        <i class="ri-server-line me-2"></i> Server Setup
                                                                    </button>
                                                                </h2>
                                                                <div id="backend_setup_step_1"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#backend_setup_details">
                                                                    <div class="accordion-body">
                                                                        Install server frameworks and databases.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of Nested Level -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Backend Step 1 Accordion -->

                                            <!-- Backend Step 2 Accordion -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#backend_step_2"
                                                        aria-expanded="false" aria-controls="backend_step_2">
                                                        <i class="ri-server-line me-2"></i> Step 2: Building APIs
                                                    </button>
                                                </h2>
                                                <div id="backend_step_2" class="accordion-collapse collapse"
                                                    data-bs-parent="#backend_steps">
                                                    <div class="accordion-body">
                                                        Develop and test APIs using tools like Postman.

                                                        <!-- Additional Nested Level for Step 2 -->
                                                        <div class="accordion mt-3" id="backend_api_details">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#backend_api_step_1"
                                                                        aria-expanded="false"
                                                                        aria-controls="backend_api_step_1">
                                                                        <i class="ri-rest-time-line me-2"></i> API Testing
                                                                    </button>
                                                                </h2>
                                                                <div id="backend_api_step_1"
                                                                    class="accordion-collapse collapse"
                                                                    data-bs-parent="#backend_api_details">
                                                                    <div class="accordion-body">
                                                                        Use Postman to test API endpoints.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End of Nested Level -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Backend Step 2 Accordion -->
                                        </div>
                                        <!-- End of Nested Backend Steps Accordion -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Backend Development Accordion -->
                        </div>
                        <!-- End Main Accordion Wrapper -->
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Collapse Example</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="collapse-example" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-collapse-example-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-collapse-example" type="button" role="tab"
                                    aria-controls="html-collapse-example" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-collapse-example-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-collapse-example" type="button" role="tab"
                                    aria-controls="preview-collapse-example" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            You can use a link with the <code>href</code> attribute, or a button with the
                            <code>data-bs-target</code> attribute. In both cases, the
                            <code>data-bs-toggle="collapse"</code> is required.
                        </p>
                        <div class="tab-content" id="collapse-exampleContent">
                            <div class="tab-pane fade show active" id="html-collapse-example" role="tabpanel"
                                aria-labelledby="html-collapse-example-tab" tabindex="0">
                                <!-- Collapsible Trigger Area -->
                                <div class="d-inline-flex gap-2 mb-3">
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Link with href
                                    </a>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Button with data-bs-target
                                    </button>
                                </div>
                                <!-- Collapsible Content Area -->
                                <div class="collapse show" id="collapseExample">
                                    <div class="card card-body mb-0">
                                        <h5 class="card-title">More Details</h5>
                                        <p class="card-text">
                                            Here’s some extra information that might be useful. For example, if you’re
                                            reading about a product, you could find details about its features, user
                                            instructions, or any other interesting facts. This part is hidden by default and
                                            will appear when you click either of the buttons above.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-collapse-example" role="tabpanel"
                                aria-labelledby="preview-collapse-example-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Collapsible Trigger Area --&gt;
&lt;div class=&quot;d-inline-flex gap-2 mb-3&quot;&gt;
    &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
        Link with href
    &lt;/a&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
        Button with data-bs-target
    &lt;/button&gt;
&lt;/div&gt;
&lt;!-- Collapsible Content Area --&gt;
&lt;div class=&quot;collapse show&quot; id=&quot;collapseExample&quot;&gt;
    &lt;div class=&quot;card card-body mb-0&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;More Details&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;
            Here&rsquo;s some extra information that might be useful. For example, if you&rsquo;re reading about a product, you could find details about its features, user instructions, or any other interesting facts. This part is hidden by default and will appear when you click either of the buttons above.
        &lt;/p&gt;
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
                        <h5 class="card-title mb-0 flex-grow-1">Horizontal Collapse</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="collapse-horizontal" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-collapse-horizontal-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-collapse-horizontal" type="button"
                                    role="tab" aria-controls="html-collapse-horizontal"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-collapse-horizontal-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-collapse-horizontal" type="button" role="tab"
                                    aria-controls="preview-collapse-horizontal" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>collapse-horizontal</code> class to make elements slide open
                            and closed horizontally, instead of vertically. Make sure to set a specific <code>width</code>
                            on the child element that you want to collapse.</p>
                        <div class="tab-content" id="collapse-horizontalContent">
                            <div class="tab-pane fade show active" id="html-collapse-horizontal" role="tabpanel"
                                aria-labelledby="html-collapse-horizontal-tab" tabindex="0">
                                <!-- Collapsible Trigger Area -->
                                <div class="d-inline-flex gap-2 mb-3">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseWidthExample" aria-expanded="false"
                                        aria-controls="collapseWidthExample">
                                        Toggle width collapse
                                    </button>
                                </div>

                                <!-- Collapsible Content Area -->
                                <div class="collapse show collapse-horizontal" id="collapseWidthExample">
                                    <div class="card card-body mb-0" style="width: 300px;">
                                        This is some placeholder content for a horizontal collapse. It's hidden by default
                                        and shown when you click the button.
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-collapse-horizontal" role="tabpanel"
                                aria-labelledby="preview-collapse-horizontal-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Collapsible Trigger Area --&gt;
&lt;div class=&quot;d-inline-flex gap-2 mb-3&quot;&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseWidthExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseWidthExample&quot;&gt;
        Toggle width collapse
    &lt;/button&gt;
&lt;/div&gt;

&lt;!-- Collapsible Content Area --&gt;
&lt;div class=&quot;collapse show collapse-horizontal&quot; id=&quot;collapseWidthExample&quot;&gt;
    &lt;div class=&quot;card card-body&quot; style=&quot;width: 300px;&quot;&gt;
        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when you click the button.
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
                        <h5 class="card-title mb-0 flex-grow-1">Collapse with Icon</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="collapse-with-icon"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-collapse-with-icon-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-collapse-with-icon" type="button" role="tab"
                                    aria-controls="html-collapse-with-icon" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-collapse-with-icon-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-collapse-with-icon" type="button" role="tab"
                                    aria-controls="preview-collapse-with-icon" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Click the icon to toggle the collapse.</p>
                        <div class="tab-content" id="collapse-with-iconContent">
                            <div class="tab-pane fade show active" id="html-collapse-with-icon" role="tabpanel"
                                aria-labelledby="html-collapse-with-icon-tab" tabindex="0">
                                <!-- Collapsible Trigger Area with Remix Icon -->
                                <div class="d-flex flex-wrap gap-5 align-items-center mb-3">
                                    <button class="btn btn-primary icon-btn custom-toggle" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseContent"
                                        aria-expanded="false" aria-controls="collapseContent">
                                        <span class="icon-on">
                                            <i class="ri-subtract-line"></i>
                                        </span>
                                        <span class="icon-off">
                                            <i class="ri-add-line"></i>
                                        </span>
                                    </button>
                                    <div class="custom-toggle fw-semibold d-flex align-items-center"
                                        data-bs-toggle="collapse" data-bs-target="#collapseContent"
                                        aria-expanded="false" aria-controls="collapseContent" role="button">
                                        <span class="icon-on">
                                            Read Less
                                            <i class="ri-arrow-up-s-line ms-2"></i>
                                        </span>
                                        <span class="icon-off">
                                            Read More
                                            <i class="ri-arrow-down-s-line ms-2"></i>
                                        </span>
                                    </div>
                                </div>
                                <!-- Collapsible Content Area -->
                                <div class="collapse show" id="collapseContent">
                                    <div class="card card-body mb-0">
                                        This is some detailed content that gets revealed when you click "Read More" and
                                        hidden when you click "Read Less". Customize this text as needed for your
                                        application.
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-collapse-with-icon" role="tabpanel"
                                aria-labelledby="preview-collapse-with-icon-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Collapsible Trigger Area with Remix Icon --&gt;
&lt;div class=&quot;d-flex flex-wrap gap-5 align-items-center mb-3&quot;&gt;
    &lt;button class=&quot;btn btn-primary icon-btn custom-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseContent&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseContent&quot;&gt;
        &lt;span class=&quot;icon-on&quot;&gt;
            &lt;i class=&quot;ri-subtract-line&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;icon-off&quot;&gt;
            &lt;i class=&quot;ri-add-line&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
    &lt;/button&gt;
    &lt;div class=&quot;custom-toggle fw-semibold d-flex align-items-center&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseContent&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseContent&quot; role=&quot;button&quot;&gt;
        &lt;span class=&quot;icon-on&quot;&gt;
            Read Less
            &lt;i class=&quot;ri-arrow-up-s-line ms-2&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;icon-off&quot;&gt;
            Read More
            &lt;i class=&quot;ri-arrow-down-s-line ms-2&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Collapsible Content Area --&gt;
&lt;div class=&quot;collapse show&quot; id=&quot;collapseContent&quot;&gt;
    &lt;div class=&quot;card card-body mb-0&quot;&gt;
        This is some detailed content that gets revealed when you click &quot;Read More&quot; and hidden when you click &quot;Read Less&quot;. Customize this text as needed for your application.
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
                        <h5 class="card-title mb-0 flex-grow-1">Controlling Multiple Collapses</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="collapse-multiple"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-collapse-multiple-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-collapse-multiple" type="button" role="tab"
                                    aria-controls="html-collapse-multiple" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-collapse-multiple-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-collapse-multiple" type="button" role="tab"
                                    aria-controls="preview-collapse-multiple" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            You can use a <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> to control multiple
                            collapsible elements at once by using the same <code>data-bs-target</code> or <code>href</code>
                            attribute. Similarly, a single <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can control
                            multiple collapsible elements if you use the same attribute value for all.
                        </p>
                        <div class="tab-content" id="collapse-multipleContent">
                            <div class="tab-pane fade show active" id="html-collapse-multiple" role="tabpanel"
                                aria-labelledby="html-collapse-multiple-tab" tabindex="0">
                                <!-- Collapsible Trigger Buttons -->
                                <div class="d-inline-flex gap-2 mb-3">
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseOne"
                                        role="button" aria-expanded="false" aria-controls="collapseOne">Toggle First
                                        Section</a>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">Toggle Second Section</button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target=".multi-collapse" aria-expanded="false"
                                        aria-controls="collapseOne collapseTwo">Toggle Both Sections</button>
                                </div>

                                <!-- Collapsible Content Sections -->
                                <div class="row">
                                    <div class="col">
                                        <div class="collapse show multi-collapse" id="collapseOne">
                                            <div class="card card-body mb-0">
                                                This is the content for the first section. It’s hidden by default and will
                                                be shown when the appropriate button is clicked.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="collapse show multi-collapse" id="collapseTwo">
                                            <div class="card card-body mb-0">
                                                This is the content for the second section. It’s hidden by default and will
                                                be shown when the appropriate button is clicked.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-collapse-multiple" role="tabpanel"
                                aria-labelledby="preview-collapse-multiple-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Collapsible Trigger Buttons --&gt;
&lt;div class=&quot;d-inline-flex gap-2 mb-3&quot;&gt;
    &lt;a class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseOne&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseOne&quot;&gt;Toggle First Section&lt;/a&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;Toggle Second Section&lt;/button&gt;
    &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseOne collapseTwo&quot;&gt;Toggle Both Sections&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Collapsible Content Sections --&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;collapse show multi-collapse&quot; id=&quot;collapseOne&quot;&gt;
            &lt;div class=&quot;card card-body mb-0&quot;&gt;
                This is the content for the first section. It&rsquo;s hidden by default and will be shown when the appropriate button is clicked.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col&quot;&gt;
        &lt;div class=&quot;collapse show multi-collapse&quot; id=&quot;collapseTwo&quot;&gt;
            &lt;div class=&quot;card card-body mb-0&quot;&gt;
                This is the content for the second section. It&rsquo;s hidden by default and will be shown when the appropriate button is clicked.
            &lt;/div&gt;
        &lt;/div&gt;
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
    <!--App js-->
    <script type="module" src="assets/js/app.js"></script>
@endsection
