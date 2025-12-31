@extends('partials.layouts.master')

@section('title', 'UI Placeholders | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Placeholders')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css" />
@endsection
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Placeholder Cards</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="card-placeholder" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-card-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-card-placeholder" type="button" role="tab"
                                    aria-controls="html-card-placeholder" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-card-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-card-placeholder" type="button" role="tab"
                                    aria-controls="preview-card-placeholder" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">In the example below, we take a typical card component and recreate it with
                            placeholders applied to create a “loading card”. Size and proportions are the same between the
                            two.</p>
                        <div class="tab-content" id="card-placeholderContent">
                            <div class="tab-pane fade show active" id="html-card-placeholder" role="tabpanel"
                                aria-labelledby="html-card-placeholder-tab" tabindex="0">
                                <div class="row gy-3">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-0 h-100" aria-hidden="true">
                                            <img class="card-img-top h-200px img-fluid object-fit-cover" loading="lazy"
                                                src="assets/images/small/img-2.jpg" alt="#">
                                            <div class="card-body" id="cardContent">
                                                <h6 class="card-title">Card Title</h6>
                                                <p class="card-text c-o-light">Some quick example text to build on the card
                                                    title and make up the bulk of the card's content.</p>
                                                <a class="btn btn-primary" href="javascript:void(0)">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card text-secondary mb-0 h-100" aria-hidden="true"><img
                                                class="card-img-top h-200px img-fluid object-fit-cover"
                                                src="assets/images/placeholder-3.jpg" alt="#">
                                            <div class="card-body">
                                                <h6 class="card-title text-secondary"><span
                                                        class="placeholder col-6 placeholder-light"></span></h6>
                                                <div class="card-text mb-3">
                                                    <div class="placeholder col-7 placeholder-light"></div>
                                                    <div class="placeholder col-4 placeholder-light"></div>
                                                    <div class="placeholder col-4 placeholder-light"></div>
                                                    <div class="placeholder col-6 placeholder-light"></div>
                                                    <div class="placeholder col-8 placeholder-light"></div>
                                                </div><a class="btn btn-primary disabled placeholder col-6"
                                                    href="javascript:void(0)"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--End row-->
                            </div>
                            <div class="tab-pane fade" id="preview-card-placeholder" role="tabpanel"
                                aria-labelledby="preview-card-placeholder-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row gy-3&quot;&gt;
    &lt;div class=&quot;col-md-6 col-xl-4&quot;&gt;
        &lt;div class=&quot;card mb-0 h-100&quot; aria-hidden=&quot;true&quot;&gt;
            &lt;img class=&quot;card-img-top h-200px img-fluid object-fit-cover&quot; loading=&quot;lazy&quot; src=&quot;assets/images/small/img-2.jpg&quot; alt=&quot;#&quot;&gt;
            &lt;div class=&quot;card-body&quot; id=&quot;cardContent&quot;&gt;
                &lt;h6 class=&quot;card-title&quot;&gt;Card Title&lt;/h6&gt;
                &lt;p class=&quot;card-text c-o-light&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
                &lt;a class=&quot;btn btn-primary&quot; href=&quot;#!&quot;&gt;Go somewhere&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6 col-xl-4&quot;&gt;
        &lt;div class=&quot;card text-secondary mb-0 h-100&quot; aria-hidden=&quot;true&quot;&gt;&lt;img class=&quot;card-img-top h-200px img-fluid object-fit-cover&quot; src=&quot;assets/images/placeholder-3.jpg&quot; alt=&quot;#&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
                &lt;h6 class=&quot;card-title text-secondary&quot;&gt;&lt;span class=&quot;placeholder col-6 placeholder-light&quot;&gt;&lt;/span&gt;&lt;/h6&gt;
                &lt;div class=&quot;card-text mb-3&quot;&gt;
                    &lt;div class=&quot;placeholder col-7 placeholder-light&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;placeholder col-4 placeholder-light&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;placeholder col-4 placeholder-light&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;placeholder col-6 placeholder-light&quot;&gt;&lt;/div&gt;
                    &lt;div class=&quot;placeholder col-8 placeholder-light&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;&lt;a class=&quot;btn btn-primary disabled placeholder col-6&quot; href=&quot;#!&quot;&gt;&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;&lt;!--End row--&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Placeholder Width</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="width-placeholder" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-width-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-width-placeholder" type="button" role="tab"
                                    aria-controls="html-width-placeholder" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-width-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-width-placeholder" type="button" role="tab"
                                    aria-controls="preview-width-placeholder" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You can change the width through grid column classes, width utilities, or
                            inline styles.<code> (like: w-25 , w-50 , w-75 , w-100 ) </code></p>
                        <div class="tab-content" id="width-placeholderContent">
                            <div class="tab-pane fade show active" id="html-width-placeholder" role="tabpanel"
                                aria-labelledby="html-width-placeholder-tab" tabindex="0">
                                <div>
                                    <span class="placeholder w-50 placeholder-light"></span>
                                    <span class="placeholder w-75 placeholder-light"></span>
                                    <span class="placeholder w-100 placeholder-light"></span>
                                    <span class="placeholder w-25 placeholder-light"></span>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-width-placeholder" role="tabpanel"
                                aria-labelledby="preview-width-placeholder-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div&gt;
    &lt;span class=&quot;placeholder w-50 placeholder-light&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder w-75 placeholder-light&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder w-100 placeholder-light&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder w-25 placeholder-light&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Placeholder Sizing</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizing-placeholder" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizing-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizing-placeholder" type="button" role="tab"
                                    aria-controls="html-sizing-placeholder" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizing-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizing-placeholder" type="button" role="tab"
                                    aria-controls="preview-sizing-placeholder" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">The size of <code>placeholder</code> are based on the typographic style of
                            the parent element. Customize them with sizing modifiers: <code>placeholder-lg, placeholder-sm,
                                or placeholder-xs</code>.</p>
                        <div class="tab-content" id="sizing-placeholderContent">
                            <div class="tab-pane fade show active" id="html-sizing-placeholder" role="tabpanel"
                                aria-labelledby="html-sizing-placeholder-tab" tabindex="0">
                                <div>
                                    <span class="placeholder col-12 placeholder-lg placeholder-light"></span>
                                    <span class="placeholder col-12 placeholder-light"></span>
                                    <span class="placeholder col-12 placeholder-sm placeholder-light"></span>
                                    <span class="placeholder col-12 placeholder-xs placeholder-light"></span>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizing-placeholder" role="tabpanel"
                                aria-labelledby="preview-sizing-placeholder-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div&gt;
    &lt;span class=&quot;placeholder col-12 placeholder-lg placeholder-light&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 placeholder-light&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 placeholder-sm placeholder-light&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 placeholder-xs placeholder-light&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Placeholder Animations</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="animations-placeholder"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-animations-placeholder-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-animations-placeholder" type="button"
                                    role="tab" aria-controls="html-animations-placeholder"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-animations-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-animations-placeholder" type="button" role="tab"
                                    aria-controls="preview-animations-placeholder" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add animations to Bootstrap placeholders using the
                            <code>.placeholder-glow</code> or <code>.placeholder-wave</code> classes for a smooth loading
                            effect while content is being loaded.</p>
                        <div class="tab-content" id="animations-placeholderContent">
                            <div class="tab-pane fade show active" id="html-animations-placeholder" role="tabpanel"
                                aria-labelledby="html-animations-placeholder-tab" tabindex="0">
                                <div>
                                    <p class="placeholder-glow mb-0"><span
                                            class="placeholder col-12 placeholder-light"></span></p>
                                    <p class="placeholder-wave mb-0"><span
                                            class="placeholder col-12 placeholder-light"></span></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-animations-placeholder" role="tabpanel"
                                aria-labelledby="preview-animations-placeholder-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div&gt;
    &lt;p class=&quot;placeholder-glow mb-0&quot;&gt;&lt;span class=&quot;placeholder col-12 placeholder-light&quot;&gt;&lt;/span&gt;&lt;/p&gt;
    &lt;p class=&quot;placeholder-wave mb-0&quot;&gt;&lt;span class=&quot;placeholder col-12 placeholder-light&quot;&gt;&lt;/span&gt;&lt;/p&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colors Placeholder</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colors-placeholder" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colors-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colors-placeholder" type="button" role="tab"
                                    aria-controls="html-colors-placeholder" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colors-placeholder-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colors-placeholder" type="button" role="tab"
                                    aria-controls="preview-colors-placeholder" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">By default, the <code>placeholder </code>uses <code>currentcolor</code>. This
                            can be overridden with a custom color or utility class.</p>
                        <div class="tab-content" id="colors-placeholderContent">
                            <div class="tab-pane fade show active" id="html-colors-placeholder" role="tabpanel"
                                aria-labelledby="html-colors-placeholder-tab" tabindex="0">
                                <div class="placeholder-glow">
                                    <span class="placeholder col-12"></span>
                                    <span class="placeholder col-12 bg-primary"></span>
                                    <span class="placeholder col-12 bg-secondary"></span>
                                    <span class="placeholder col-12 bg-success"></span>
                                    <span class="placeholder col-12 bg-danger"></span>
                                    <span class="placeholder col-12 bg-warning"></span>
                                    <span class="placeholder col-12 bg-info"></span>
                                    <span class="placeholder col-12 bg-light"></span>
                                    <span class="placeholder col-12 bg-dark"></span>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-colors-placeholder" role="tabpanel"
                                aria-labelledby="preview-colors-placeholder-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;placeholder-glow&quot;&gt;
    &lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-primary&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-secondary&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-success&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-danger&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-warning&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-info&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-light&quot;&gt;&lt;/span&gt;
    &lt;span class=&quot;placeholder col-12 bg-dark&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Custom Animation Placeholder</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="custom-animation-placeholder"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-custom-animation-placeholder-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-custom-animation-placeholder"
                                    type="button" role="tab" aria-controls="html-custom-animation-placeholder"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-custom-animation-placeholder-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-custom-animation-placeholder"
                                    type="button" role="tab" aria-controls="preview-custom-animation-placeholder"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">With the <code>wave-left-lines</code> custom animation, placeholders may be
                            used into your unique design.</p>
                        <div class="tab-content" id="custom-animation-placeholderContent">
                            <div class="tab-pane fade show active" id="html-custom-animation-placeholder" role="tabpanel"
                                aria-labelledby="html-custom-animation-placeholder-tab" tabindex="0">
                                <div class="d-flex flex-column gap-5">
                                    <div class="placeholder-body">
                                        <div class="placeholder-start square"></div>
                                        <div class="placeholder-end">
                                            <div class="placeholder-line placeholder w-25"></div>
                                            <div class="placeholder-line placeholder placeholder-xs w-100"></div>
                                            <div class="placeholder-line placeholder placeholder-xs w-100"></div>
                                            <div class="placeholder-line placeholder placeholder-xs w-50"></div>
                                        </div>
                                    </div>
                                    <div class="placeholder-body">
                                        <div class="placeholder-start circle"></div>
                                        <div class="placeholder-end">
                                            <div class="placeholder-line placeholder-lg w-25"></div>
                                            <div class="placeholder-line placeholder placeholder-xs w-100"></div>
                                            <div class="placeholder-line placeholder placeholder-xs w-100"></div>
                                            <div class="placeholder-line placeholder placeholder-xs w-25"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-custom-animation-placeholder" role="tabpanel"
                                aria-labelledby="preview-custom-animation-placeholder-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex flex-column gap-5&quot;&gt;
    &lt;div class=&quot;placeholder-body&quot;&gt;
        &lt;div class=&quot;placeholder-start square&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;placeholder-end&quot;&gt;
            &lt;div class=&quot;placeholder-line placeholder w-25&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;placeholder-line placeholder placeholder-xs w-100&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;placeholder-line placeholder placeholder-xs w-100&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;placeholder-line placeholder placeholder-xs w-50&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;placeholder-body&quot;&gt;
        &lt;div class=&quot;placeholder-start circle&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;placeholder-end&quot;&gt;
            &lt;div class=&quot;placeholder-line placeholder-lg w-25&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;placeholder-line placeholder placeholder-xs w-100&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;placeholder-line placeholder placeholder-xs w-100&quot;&gt;&lt;/div&gt;
            &lt;div class=&quot;placeholder-line placeholder placeholder-xs w-25&quot;&gt;&lt;/div&gt;
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
                        <h5 class="card-title mb-0"> Placeholder </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create interactive placeholders in Bootstrap by using buttons or links. When
                            clicked, the placeholder content is replaced with the actual content, simulating a loading
                            effect.</p>

                        <!-- start:: Default Placeholder -->
                        <div class="row g-5" id="cardRow">
                            <!-- Cards will be injected here -->
                        </div>
                        <!-- end:: Default Placeholder -->
                    </div>
                </div>
            </div><!--End col-->

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/js/ui/placeholder.init.js"></script>
    <!--App js-->
    <script type="module" src="assets/js/app.js"></script>
@endsection
