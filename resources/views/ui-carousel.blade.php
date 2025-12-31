@extends('partials.layouts.master')

@section('title', 'UI Carousel | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Carousel')

@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Carousel Only</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="carousel-only" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-carousel-only-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-carousel-only" type="button" role="tab"
                                    aria-controls="html-carousel-only" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-carousel-only-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-carousel-only" type="button" role="tab"
                                    aria-controls="preview-carousel-only" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a default carousel using Bootstrap's <code>.carousel</code> class. Use
                            <code>&lt;div class="carousel slide"&gt;</code> to set up the carousel, and include
                            <code>&lt;div class="carousel-inner"&gt;</code> with <code>&lt;div
                                class="carousel-item"&gt;</code> elements for each slide.</p>
                        <div class="tab-content" id="carousel-onlyContent">
                            <div class="tab-pane fade show active" id="html-carousel-only" role="tabpanel"
                                aria-labelledby="html-carousel-only-tab" tabindex="0">
                                <div id="carousel_only" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="4000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/small/img-2.jpg" class="d-block w-100" alt="Product 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-3.jpg" class="d-block w-100" alt="Product 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-1.jpg" class="d-block w-100" alt="Product 3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-carousel-only" role="tabpanel"
                                aria-labelledby="preview-carousel-only-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div id=&quot;carousel_only&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot; data-bs-interval=&quot;4000&quot;&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-2.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 1&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-3.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 2&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 3&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">With Controls</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="carousel-with-controls" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-carousel-with-controls-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-carousel-with-controls" type="button" role="tab"
                                    aria-controls="html-carousel-with-controls" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-carousel-with-controls-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-carousel-with-controls" type="button" role="tab"
                                    aria-controls="preview-carousel-with-controls" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add navigation controls to a Bootstrap carousel by including <code>&lt;button
                                class="carousel-control-prev"&gt;</code> and <code>&lt;button
                                class="carousel-control-next"&gt;</code> elements. These controls allow users to move
                            between slides in the carousel.</p>
                        <div class="tab-content" id="carousel-with-controlsContent">
                            <div class="tab-pane fade show active" id="html-carousel-with-controls" role="tabpanel"
                                aria-labelledby="html-carousel-with-controls-tab" tabindex="0">
                                <div id="with_controls" class="carousel slide" data-bs-ride="carousel"
                                    data-bs-interval="4000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/small/img-4.jpg" class="d-block w-100"
                                                alt="Product 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-5.jpg" class="d-block w-100"
                                                alt="Product 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-6.jpg" class="d-block w-100"
                                                alt="Product 3">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#with_controls"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#with_controls"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-carousel-with-controls" role="tabpanel"
                                aria-labelledby="preview-carousel-with-controls-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div id=&quot;with_controls&quot; class=&quot;carousel slide&quot; data-bs-ride=&quot;carousel&quot; data-bs-interval=&quot;4000&quot;&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-4.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 1&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-5.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 2&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-6.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 3&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#with_controls&quot; data-bs-slide=&quot;prev&quot;&gt;
        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#with_controls&quot; data-bs-slide=&quot;next&quot;&gt;
        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">With default Indicators</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="carousel-with-indicators"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-carousel-with-indicators-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-carousel-with-indicators" type="button"
                                    role="tab" aria-controls="html-carousel-with-indicators"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-carousel-with-indicators-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-carousel-with-indicators" type="button" role="tab"
                                    aria-controls="preview-carousel-with-indicators"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add default indicators to a Bootstrap carousel by including <code>&lt;ol
                                class="carousel-indicators"&gt;</code> with <code>&lt;li data-bs-target="#carouselExample"
                                data-bs-slide-to="0"&gt;</code> elements for each slide. These indicators provide visual
                            navigation for users.</p>
                        <div class="tab-content" id="carousel-with-indicatorsContent">
                            <div class="tab-pane fade show active" id="html-carousel-with-indicators" role="tabpanel"
                                aria-labelledby="html-carousel-with-indicators-tab" tabindex="0">
                                <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel"
                                    data-bs-interval="4000">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/small/img-7.jpg" class="d-block w-100"
                                                alt="Product 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-8.jpg" class="d-block w-100"
                                                alt="Product 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-9.jpg" class="d-block w-100"
                                                alt="Product 3">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-carousel-with-indicators" role="tabpanel"
                                aria-labelledby="preview-carousel-with-indicators-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;carousel slide&quot; id=&quot;carouselExampleIndicators&quot; data-bs-ride=&quot;carousel&quot; data-bs-interval=&quot;4000&quot;&gt;
    &lt;div class=&quot;carousel-indicators&quot;&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-7.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 1&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-8.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 2&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-9.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 3&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide=&quot;prev&quot;&gt;
        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleIndicators&quot; data-bs-slide=&quot;next&quot;&gt;
        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Crossfade Animation</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="carousel-crossfade-animation"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-carousel-crossfade-animation-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-carousel-crossfade-animation"
                                    type="button" role="tab" aria-controls="html-carousel-crossfade-animation"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-carousel-crossfade-animation-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-carousel-crossfade-animation"
                                    type="button" role="tab" aria-controls="preview-carousel-crossfade-animation"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Enable crossfade animation in a Bootstrap carousel by adding the
                            <code>.carousel-fade</code> class to the <code>&lt;div class="carousel slide"&gt;</code>. This
                            creates a smooth fade transition between slides.</p>
                        <div class="tab-content" id="carousel-crossfade-animationContent">
                            <div class="tab-pane fade show active" id="html-carousel-crossfade-animation" role="tabpanel"
                                aria-labelledby="html-carousel-crossfade-animation-tab" tabindex="0">
                                <div class="carousel slide carousel-fade" id="carousel-fade" data-bs-ride="carousel"
                                    data-bs-interval="4000">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel-fade" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel-fade" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carousel-fade" data-bs-slide-to="2"
                                            aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/small/img-10.jpg" class="d-block w-100"
                                                alt="Product 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-11.jpg" class="d-block w-100"
                                                alt="Product 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-12.jpg" class="d-block w-100"
                                                alt="Product 3">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-fade"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-fade"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-carousel-crossfade-animation" role="tabpanel"
                                aria-labelledby="preview-carousel-crossfade-animation-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;carousel slide carousel-fade&quot; id=&quot;carousel-fade&quot; data-bs-ride=&quot;carousel&quot; data-bs-interval=&quot;4000&quot;&gt;
    &lt;div class=&quot;carousel-indicators&quot;&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carousel-fade&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carousel-fade&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carousel-fade&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-10.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 1&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-11.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 2&quot;&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-12.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 3&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carousel-fade&quot; data-bs-slide=&quot;prev&quot;&gt;
        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carousel-fade&quot; data-bs-slide=&quot;next&quot;&gt;
        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div id="productCarousel" class="card carousel-custom carousel slide" data-bs-ride="carousel"
                    data-bs-interval="4000">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Dots Indicators</h5>
                        <div class="carousel-indicators carousel-indicators-success carousel-indicators-dots">
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"> Use custom dots for carousel indicators by adding <code>&lt;div
                                class="carousel-indicators-dots"&gt;</code> with your desired dot styles. Replace the
                            default <code>&lt;ol class="carousel-indicators"&gt;</code> with your custom dots to style
                            carousel navigation.</p>
                        <div id="carouselExample" class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/small/img-13.jpg" class="d-block w-100" alt="Product 1">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/small/img-14.jpg" class="d-block w-100" alt="Product 2">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/small/img-1.jpg" class="d-block w-100" alt="Product 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div id="bullet_indicators" class="card carousel-custom carousel slide" data-bs-ride="carousel"
                    data-bs-interval="4000">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Bullet Indicators</h5>
                        <div class="carousel-indicators carousel-indicators-bullet carousel-indicators-danger">
                            <button type="button" data-bs-target="#bullet_indicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#bullet_indicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#bullet_indicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Customize carousel indicators with bullet styles by using <code>&lt;ul
                                class="carousel-indicators-bullet"&gt;</code> instead of the default <code>&lt;ol
                                class="carousel-indicators"&gt;</code>. Style each <code>&lt;li&gt;</code> to create unique
                            bullet indicators for your carousel.</p>
                        <div id="carouselExample" class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/small/img-1.jpg" class="d-block w-100" alt="Product 1">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/small/img-3.jpg" class="d-block w-100" alt="Product 2">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/small/img-4.jpg" class="d-block w-100" alt="Product 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">With Captions</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="carousel-with-captions"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-carousel-with-captions-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-carousel-with-captions" type="button"
                                    role="tab" aria-controls="html-carousel-with-captions"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-carousel-with-captions-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-carousel-with-captions" type="button" role="tab"
                                    aria-controls="preview-carousel-with-captions" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add captions to Bootstrap carousel slides by including <code>&lt;div
                                class="carousel-caption"&gt;</code> inside each <code>&lt;div
                                class="carousel-item"&gt;</code>. Place your caption text within this container to provide
                            additional information on each slide.</p>
                        <div class="tab-content" id="carousel-with-captionsContent">
                            <div class="tab-pane fade show active" id="html-carousel-with-captions" role="tabpanel"
                                aria-labelledby="html-carousel-with-captions-tab" tabindex="0">
                                <div class="carousel slide" id="carouselExampleCaptions">
                                    <div
                                        class="carousel-indicators carousel-indicators-bullet carousel-indicators-warning">
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/small/img-5.jpg" class="d-block w-100"
                                                alt="Product 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-6.jpg" class="d-block w-100"
                                                alt="Product 2">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Second slide label</h5>
                                                <p>Some representative placeholder content for the second slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-7.jpg" class="d-block w-100"
                                                alt="Product 3">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 class="text-white">Third slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-carousel-with-captions" role="tabpanel"
                                aria-labelledby="preview-carousel-with-captions-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;carousel slide&quot; id=&quot;carouselExampleCaptions&quot;&gt;
    &lt;div class=&quot;carousel-indicators carousel-indicators-bullet carousel-indicators-warning&quot;&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-5.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 1&quot;&gt;
            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                &lt;h5 class=&quot;text-white&quot;&gt;First slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the first slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-6.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 2&quot;&gt;
            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                &lt;h5 class=&quot;text-white&quot;&gt;Second slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the second slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-7.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 3&quot;&gt;
            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                &lt;h5 class=&quot;text-white&quot;&gt;Third slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the third slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide=&quot;prev&quot;&gt;
        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#carouselExampleCaptions&quot; data-bs-slide=&quot;next&quot;&gt;
        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Dark variant carousel</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="carousel-dark" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-carousel-dark-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-carousel-dark" type="button" role="tab"
                                    aria-controls="html-carousel-dark" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-carousel-dark-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-carousel-dark" type="button" role="tab"
                                    aria-controls="preview-carousel-dark" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a dark variant of a Bootstrap carousel by adding the
                            <code>.carousel-dark</code> class to the <code>&lt;div class="carousel slide"&gt;</code>. This
                            adjusts the carousel's text and controls for better visibility on dark backgrounds.</p>
                        <div class="tab-content" id="carousel-darkContent">
                            <div class="tab-pane fade show active" id="html-carousel-dark" role="tabpanel"
                                aria-labelledby="html-carousel-dark-tab" tabindex="0">
                                <div class="carousel slide carousel-dark" id="dark_variant">
                                    <div
                                        class="carousel-indicators carousel-indicators-bullet carousel-indicators-warning">
                                        <button type="button" data-bs-target="#dark_variant" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#dark_variant" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#dark_variant" data-bs-slide-to="2"
                                            aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/small/img-8.jpg" class="d-block w-100"
                                                alt="Product 1">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-9.jpg" class="d-block w-100"
                                                alt="Product 2">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Second slide label</h5>
                                                <p>Some representative placeholder content for the second slide.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/small/img-10.jpg" class="d-block w-100"
                                                alt="Product 3">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Third slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#dark_variant"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#dark_variant"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-carousel-dark" role="tabpanel"
                                aria-labelledby="preview-carousel-dark-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;carousel slide carousel-dark&quot; id=&quot;dark_variant&quot;&gt;
    &lt;div class=&quot;carousel-indicators carousel-indicators-bullet carousel-indicators-warning&quot;&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#dark_variant&quot; data-bs-slide-to=&quot;0&quot; class=&quot;active&quot; aria-current=&quot;true&quot; aria-label=&quot;Slide 1&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#dark_variant&quot; data-bs-slide-to=&quot;1&quot; aria-label=&quot;Slide 2&quot;&gt;&lt;/button&gt;
        &lt;button type=&quot;button&quot; data-bs-target=&quot;#dark_variant&quot; data-bs-slide-to=&quot;2&quot; aria-label=&quot;Slide 3&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class=&quot;carousel-inner&quot;&gt;
        &lt;div class=&quot;carousel-item active&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-8.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 1&quot;&gt;
            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                &lt;h5&gt;First slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the first slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-9.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 2&quot;&gt;
            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                &lt;h5&gt;Second slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the second slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;carousel-item&quot;&gt;
            &lt;img src=&quot;assets/images/small/img-10.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;Product 3&quot;&gt;
            &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
                &lt;h5&gt;Third slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the third slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class=&quot;carousel-control-prev&quot; type=&quot;button&quot; data-bs-target=&quot;#dark_variant&quot; data-bs-slide=&quot;prev&quot;&gt;
        &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class=&quot;carousel-control-next&quot; type=&quot;button&quot; data-bs-target=&quot;#dark_variant&quot; data-bs-slide=&quot;next&quot;&gt;
        &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Next&lt;/span&gt;
    &lt;/button&gt;
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
