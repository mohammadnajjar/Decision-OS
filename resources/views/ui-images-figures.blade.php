@extends('partials.layouts.master')

@section('title', 'UI Images Figures | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Images Figures')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection

@section('content')


    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">1:1 Aspect Ratio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="aspect-ratio-1-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-aspect-ratio-1-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-aspect-ratio-1-1" type="button" role="tab"
                                    aria-controls="html-aspect-ratio-1-1" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-aspect-ratio-1-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-aspect-ratio-1-1" type="button" role="tab"
                                    aria-controls="preview-aspect-ratio-1-1" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Ensure <strong>1:1 aspect ratio</strong> for images by applying
                            <code>.image-wrapper</code> and <code>.image-1x1</code> classes. This maintains a square shape
                            for consistent image display.</p>
                        <div class="tab-content" id="aspect-ratio-1-1Content">
                            <div class="tab-pane fade show active" id="html-aspect-ratio-1-1" role="tabpanel"
                                aria-labelledby="html-aspect-ratio-1-1-tab" tabindex="0">
                                <div class="image-wrapper image-1x1">
                                    <img src="assets/images/small/img-10.jpg" alt="1x1 Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-aspect-ratio-1-1" role="tabpanel"
                                aria-labelledby="preview-aspect-ratio-1-1-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;image-wrapper image-1x1&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-10.jpg&quot; alt=&quot;1x1 Image&quot; class=&quot;img-fluid&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">4:3 Aspect Ratio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="aspect-ratio-4-3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-aspect-ratio-4-3-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-aspect-ratio-4-3" type="button" role="tab"
                                    aria-controls="html-aspect-ratio-4-3" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-aspect-ratio-4-3-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-aspect-ratio-4-3" type="button" role="tab"
                                    aria-controls="preview-aspect-ratio-4-3" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <strong>4:3 aspect ratio</strong> for images with the <code>.image-wrapper
                                .image-4x3</code> class. Apply this class to maintain a 4:3 ratio for your images and
                            elements.</p>
                        <div class="tab-content" id="aspect-ratio-4-3Content">
                            <div class="tab-pane fade show active" id="html-aspect-ratio-4-3" role="tabpanel"
                                aria-labelledby="html-aspect-ratio-4-3-tab" tabindex="0">
                                <div class="image-wrapper image-4x3">
                                    <img src="assets/images/small/img-2.jpg" alt="4x3 Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-aspect-ratio-4-3" role="tabpanel"
                                aria-labelledby="preview-aspect-ratio-4-3-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;image-wrapper image-4x3&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-2.jpg&quot; alt=&quot;4x3 Image&quot; class=&quot;img-fluid&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">3:2 Aspect Ratio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="aspect-ratio-3-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-aspect-ratio-3-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-aspect-ratio-3-2" type="button" role="tab"
                                    aria-controls="html-aspect-ratio-3-2" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-aspect-ratio-3-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-aspect-ratio-3-2" type="button" role="tab"
                                    aria-controls="preview-aspect-ratio-3-2" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <strong>3:2 aspect ratio</strong> by applying the
                            <code>.image-wrapper .image-3x2</code> class to your elements. This ensures your images and
                            content maintain a 3:2 ratio.</p>
                        <div class="tab-content" id="aspect-ratio-3-2Content">
                            <div class="tab-pane fade show active" id="html-aspect-ratio-3-2" role="tabpanel"
                                aria-labelledby="html-aspect-ratio-3-2-tab" tabindex="0">
                                <div class="image-wrapper image-3x2">
                                    <img src="assets/images/small/img-3.jpg" alt="3x2 Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-aspect-ratio-3-2" role="tabpanel"
                                aria-labelledby="preview-aspect-ratio-3-2-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;image-wrapper image-3x2&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-3.jpg&quot; alt=&quot;3x2 Image&quot; class=&quot;img-fluid&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">16:9 Aspect Ratio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="aspect-ratio-16-9" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-aspect-ratio-16-9-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-aspect-ratio-16-9" type="button" role="tab"
                                    aria-controls="html-aspect-ratio-16-9" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-aspect-ratio-16-9-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-aspect-ratio-16-9" type="button" role="tab"
                                    aria-controls="preview-aspect-ratio-16-9" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"> Maintain a <strong>16:9 aspect ratio</strong> by using the
                            <code>.image-wrapper .image-16x9</code> class. Apply this class to ensure your images and
                            elements keep a 16:9 ratio.</p>
                        <div class="tab-content" id="aspect-ratio-16-9Content">
                            <div class="tab-pane fade show active" id="html-aspect-ratio-16-9" role="tabpanel"
                                aria-labelledby="html-aspect-ratio-16-9-tab" tabindex="0">
                                <div class="image-wrapper image-16x9">
                                    <img src="assets/images/small/img-7.jpg" alt="16x9 Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-aspect-ratio-16-9" role="tabpanel"
                                aria-labelledby="preview-aspect-ratio-16-9-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;image-wrapper image-16x9&quot;&gt;
    &lt;img src=&quot;assets/images/small/img-7.jpg&quot; alt=&quot;16x9 Image&quot; class=&quot;img-fluid&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Figures</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="figures" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-figures-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-figures" type="button" role="tab"
                                    aria-controls="html-figures" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-figures-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-figures" type="button" role="tab"
                                    aria-controls="preview-figures" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use Bootstrap's <code>&lt;figure&gt;</code> component to display images with
                            captions. Wrap the image in a <code>&lt;figure&gt;</code> tag and use
                            <code>&lt;figcaption&gt;</code> for the caption below the image.</p>
                        <div class="tab-content" id="figuresContent">
                            <div class="tab-pane fade show active" id="html-figures" role="tabpanel"
                                aria-labelledby="html-figures-tab" tabindex="0">
                                <figure class="figure mb-0">
                                    <img src="assets/images/avatar/avatar-1.jpg" class="figure-img img-fluid rounded"
                                        alt="...">
                                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                                </figure>
                            </div>
                            <div class="tab-pane fade" id="preview-figures" role="tabpanel"
                                aria-labelledby="preview-figures-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;figure class=&quot;figure mb-0&quot;&gt;
    &lt;img src=&quot;assets/images/avatar/avatar-1.jpg&quot; class=&quot;figure-img img-fluid rounded&quot; alt=&quot;...&quot;&gt;
    &lt;figcaption class=&quot;figure-caption&quot;&gt;A caption for the above image.&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Image Center Align</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-center-align" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-center-align-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-image-center-align" type="button" role="tab"
                                    aria-controls="html-image-center-align" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-center-align-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-center-align" type="button" role="tab"
                                    aria-controls="preview-image-center-align" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Center an <strong>image</strong> with <code>.mx-auto</code> and
                            <code>.d-block</code> on the <code>&lt;img&gt;</code> tag.</p>
                        <div class="tab-content" id="image-center-alignContent">
                            <div class="tab-pane fade show active" id="html-image-center-align" role="tabpanel"
                                aria-labelledby="html-image-center-align-tab" tabindex="0">
                                <img class="rounded mx-auto d-block" src="assets/images/avatar/avatar-2.jpg"
                                    alt="...">
                            </div>
                            <div class="tab-pane fade" id="preview-image-center-align" role="tabpanel"
                                aria-labelledby="preview-image-center-align-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;img class=&quot;rounded mx-auto d-block&quot; src=&quot;assets/images/avatar/avatar-2.jpg&quot; alt=&quot;...&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Image Right Align</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-right-align" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-right-align-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-image-right-align" type="button" role="tab"
                                    aria-controls="html-image-right-align" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-right-align-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-right-align" type="button" role="tab"
                                    aria-controls="preview-image-right-align" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Right-align an <strong>image</strong> with the <code>.float-end</code> class
                            on the <code>&lt;img&gt;</code> tag.</p>
                        <div class="tab-content" id="image-right-alignContent">
                            <div class="tab-pane fade show active" id="html-image-right-align" role="tabpanel"
                                aria-labelledby="html-image-right-align-tab" tabindex="0">
                                <img class="rounded float-end" src="assets/images/avatar/avatar-3.jpg" alt="...">
                            </div>
                            <div class="tab-pane fade" id="preview-image-right-align" role="tabpanel"
                                aria-labelledby="preview-image-right-align-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;img class=&quot;rounded float-end&quot; src=&quot;assets/images/avatar/avatar-3.jpg&quot; alt=&quot;...&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Image Left Align</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-left-align" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-left-align-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-image-left-align" type="button" role="tab"
                                    aria-controls="html-image-left-align" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-left-align-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-left-align" type="button" role="tab"
                                    aria-controls="preview-image-left-align" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Left-align an <strong>image</strong> with the <code>.float-start</code> class
                            on the <code>&lt;img&gt;</code> tag.</p>
                        <div class="tab-content" id="image-left-alignContent">
                            <div class="tab-pane fade show active" id="html-image-left-align" role="tabpanel"
                                aria-labelledby="html-image-left-align-tab" tabindex="0">
                                <img class="rounded float-start" src="assets/images/avatar/avatar-4.jpg" alt="...">
                            </div>
                            <div class="tab-pane fade" id="preview-image-left-align" role="tabpanel"
                                aria-labelledby="preview-image-left-align-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;img class=&quot;rounded float-start&quot; src=&quot;assets/images/avatar/avatar-4.jpg&quot; alt=&quot;...&quot;&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Image With Radius</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-with-radius" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-with-radius-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-image-with-radius" type="button" role="tab"
                                    aria-controls="html-image-with-radius" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-with-radius-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-with-radius" type="button" role="tab"
                                    aria-controls="preview-image-with-radius" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add a border radius to an <strong>image</strong> with the
                            <code>.rounded-*</code> class. Use this class on the <code>&lt;img&gt;</code> tag for a rounded
                            effect.</p>
                        <div class="tab-content" id="image-with-radiusContent">
                            <div class="tab-pane fade show active" id="html-image-with-radius" role="tabpanel"
                                aria-labelledby="html-image-with-radius-tab" tabindex="0">
                                <div class="text-center">
                                    <img class="img-fluid rounded-5" src="assets/images/avatar/avatar-5.jpg"
                                        alt="...">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-image-with-radius" role="tabpanel"
                                aria-labelledby="preview-image-with-radius-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;text-center&quot;&gt;
    &lt;img class=&quot;img-fluid rounded-5&quot; src=&quot;assets/images/avatar/avatar-5.jpg&quot; alt=&quot;...&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Rounded Image</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-with-rounded" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-with-rounded-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-image-with-rounded" type="button" role="tab"
                                    aria-controls="html-image-with-rounded" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-with-rounded-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-with-rounded" type="button" role="tab"
                                    aria-controls="preview-image-with-rounded" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a <strong>rounded image</strong> with the <code>.rounded-pill</code>
                            class. Apply this class to the <code>&lt;img&gt;</code> tag for a pill-shaped rounded effect.
                        </p>
                        <div class="tab-content" id="image-with-roundedContent">
                            <div class="tab-pane fade show active" id="html-image-with-rounded" role="tabpanel"
                                aria-labelledby="html-image-with-rounded-tab" tabindex="0">
                                <div class="text-center">
                                    <img class="img-fluid rounded-pill" src="assets/images/avatar/avatar-2.jpg"
                                        alt="...">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-image-with-rounded" role="tabpanel"
                                aria-labelledby="preview-image-with-rounded-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;text-center&quot;&gt;
    &lt;img class=&quot;img-fluid rounded-pill&quot; src=&quot;assets/images/avatar/avatar-2.jpg&quot; alt=&quot;...&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Image Thumbnail</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-thumbnail" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-thumbnail-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-image-thumbnail" type="button" role="tab"
                                    aria-controls="html-image-thumbnail" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-thumbnail-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-thumbnail" type="button" role="tab"
                                    aria-controls="preview-image-thumbnail" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Style an <strong>image</strong> as a thumbnail with the
                            <code>.img-thumbnail</code> class. Apply this class to the <code>&lt;img&gt;</code> tag for a
                            bordered, rounded image.</p>
                        <div class="tab-content" id="image-thumbnailContent">
                            <div class="tab-pane fade show active" id="html-image-thumbnail" role="tabpanel"
                                aria-labelledby="html-image-thumbnail-tab" tabindex="0">
                                <div class="text-center">
                                    <img class="img-thumbnail" src="assets/images/avatar/avatar-1.jpg" alt="...">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-image-thumbnail" role="tabpanel"
                                aria-labelledby="preview-image-thumbnail-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;text-center&quot;&gt;
    &lt;img class=&quot;img-thumbnail&quot; src=&quot;assets/images/avatar/avatar-1.jpg&quot; alt=&quot;...&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Rounded Thumbnail</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="image-thumbnail-rounded"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-image-thumbnail-rounded-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-image-thumbnail-rounded" type="button"
                                    role="tab" aria-controls="html-image-thumbnail-rounded"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-image-thumbnail-rounded-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-image-thumbnail-rounded" type="button" role="tab"
                                    aria-controls="preview-image-thumbnail-rounded" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <strong>rounded thumbnails</strong> with <code>.img-thumbnail</code> and
                            <code>.rounded-pill</code> on the <code>&lt;img&gt;</code> tag.</p>
                        <div class="tab-content" id="image-thumbnail-roundedContent">
                            <div class="tab-pane fade show active" id="html-image-thumbnail-rounded" role="tabpanel"
                                aria-labelledby="html-image-thumbnail-rounded-tab" tabindex="0">
                                <div class="text-center">
                                    <img class="img-thumbnail rounded-pill" src="assets/images/avatar/avatar-3.jpg"
                                        alt="...">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-image-thumbnail-rounded" role="tabpanel"
                                aria-labelledby="preview-image-thumbnail-rounded-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;text-center&quot;&gt;
    &lt;img class=&quot;img-thumbnail rounded-pill&quot; src=&quot;assets/images/avatar/avatar-3.jpg&quot; alt=&quot;...&quot;&gt;
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
