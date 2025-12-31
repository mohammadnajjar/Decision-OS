@extends('partials.layouts.master')

@section('title', 'UI Typography | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Typography')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Font Family</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 text-muted">
                                <p>Body Font Family</p>
                                <p class="display-6 text-body">Aa</p>
                                <p class="mb-2">Font Family</p>
                                <h5 class="mb-0">"Inter", sans-serif</h5>
                            </div>

                            <div class="col-sm-6 text-muted mt-4 mt-sm-0">
                                <p>Heading Font Family</p>
                                <h1 class="text-body">Aa</h1>
                                <p class="mb-2">Font Family</p>
                                <h5 class="mb-0">"Poppins", sans-serif</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Headings</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.
                        </p>
                        <p class="h1">h1. Bootstrap heading</p>
                        <p class="h2">h2. Bootstrap heading</p>
                        <p class="h3">h3. Bootstrap heading</p>
                        <p class="h4">h4. Bootstrap heading</p>
                        <p class="h5">h5. Bootstrap heading</p>
                        <p class="h6 mb-0">h6. Bootstrap heading</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Display Headings</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>fs-1</code>, <code>fs-2</code>, <code>fs-3</code>,
                            <code>fs-4</code>, <code>fs-5</code>, or <code>fs-6</code>, class to change the
                            font-size respectively.
                        </p>
                        <p class="fs-1">.fs-1 text</p>
                        <p class="fs-2">.fs-2 text</p>
                        <p class="fs-3">.fs-3 text</p>
                        <p class="fs-4">.fs-4 text</p>
                        <p class="fs-5">.fs-5 text</p>
                        <p class="fs-6 mb-0">.fs-6 text</p>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Display Headings</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Traditional heading elements are designed to work best in
                            the meat of your page content.
                        </p>
                        <h2 class="display-1">Display 1</h2>
                        <h2 class="display-2">Display 2</h2>
                        <h2 class="display-3">Display 3</h2>
                        <h2 class="display-4">Display 4</h2>
                        <h2 class="display-5">Display 5</h2>
                        <h2 class="display-6 mb-0">Display 6</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Inline Text Elements</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Styling for common inline HTML5 elements.
                        </p>
                        <p>
                            You can use the mark tag to <mark>highlight</mark> text.
                        </p>
                        <p>
                            <del>This line of text is meant to be treated as deleted
                                text.</del>
                        </p>
                        <p>
                            <s>This line of text is meant to be treated as no longeraccurate.</s>
                        </p>
                        <p>
                            <ins>This line of text is meant to be treated as an addition
                                to the document.</ins>
                        </p>
                        <p><u>This line of text will render as underlined.</u></p>
                        <p>
                            <small>This line of text is meant to be treated as fine
                                print.</small>
                        </p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p class="mb-0">
                            <em>This line rendered as italicized text.</em>
                        </p>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Left Aligned Blockquote</h5>
                    </div>
                    <div class="card-body">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Right Aligned Blockquote</h5>
                    </div>
                    <div class="card-body">
                        <figure class="text-end mb-0">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Center Aligned Blockquote</h5>
                    </div>
                    <div class="card-body">
                        <figure class="text-center mb-0">
                            <blockquote class="blockquote">
                                <p>"The only limit to our realization of tomorrow is our doubts of today."</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0">
                                Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom Blockquote</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-primary">
                                    <blockquote class="blockquote">
                                        <p>"The only limit to our realization of tomorrow is our doubts of today."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-secondary">
                                    <blockquote class="blockquote">
                                        <p>"Our doubts today are the sole barriers to what we can achieve tomorrow."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-success">
                                    <blockquote class="blockquote">
                                        <p>"Our fears today are the only obstacles to achieving what we hope for tomorrow."
                                        </p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-danger">
                                    <blockquote class="blockquote">
                                        <p>"The barriers to our future success are created by the uncertainties we hold
                                            today."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-info">
                                    <blockquote class="blockquote">
                                        <p>"Our doubts today are the only barriers to achieving our dreams for tomorrow."
                                        </p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-warning">
                                    <blockquote class="blockquote">
                                        <p>"The only thing standing between us and our future achievements is the
                                            uncertainty."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-dark">
                                    <blockquote class="blockquote">
                                        <p>"Our present doubts are the only barriers to the possibilities of our future."
                                        </p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed blockquote-light">
                                    <blockquote class="blockquote">
                                        <p>"The doubts we hold today are the only obstacles to achieving our dreams for
                                            tomorrow."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                            <div class="col-xl-6">
                                <figure class="mb-0 blockquote-boxed">
                                    <blockquote class="blockquote">
                                        <p>"The doubts we hold today are the only obstacles to achieving our dreams for
                                            tomorrow."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0">
                                        Franklin D. Roosevelt in <cite title="Source Title">The Great Depression</cite>
                                    </figcaption>
                                </figure>
                            </div><!--End col-->
                        </div><!--End row-->
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->


    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')


    <script type="module" src="assets/js/app.js"></script>

@endsection
