@extends('partials.layouts.master')

@section('title', 'UI Pagination | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Pagination')

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
                        <h5 class="card-title mb-0 flex-grow-1">Default Pagination</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-pagination" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-pagination" type="button" role="tab"
                                    aria-controls="html-default-pagination" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-pagination" type="button" role="tab"
                                    aria-controls="preview-default-pagination" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>pagination-*</code> class to ul element to indicate a series of
                            related content exists across multiple pages.</p>
                        <div class="tab-content" id="default-paginationContent">
                            <div class="tab-pane fade show active" id="html-default-pagination" role="tabpanel"
                                aria-labelledby="html-default-pagination-tab" tabindex="0">
                                <div class="d-flex flex-column gap-2">
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-dark mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-default-pagination" role="tabpanel"
                                aria-labelledby="preview-default-pagination-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-primary mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-dark mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled Pagination</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-pagination" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-disabled-pagination" type="button" role="tab"
                                    aria-controls="html-disabled-pagination" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-pagination" type="button" role="tab"
                                    aria-controls="preview-disabled-pagination" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>disabled</code> class to ul element to indicate a series of related
                            content exists across multiple pages.</p>
                        <div class="tab-content" id="disabled-paginationContent">
                            <div class="tab-pane fade show active" id="html-disabled-pagination" role="tabpanel"
                                aria-labelledby="html-disabled-pagination-tab" tabindex="0">
                                <div class="d-flex flex-column gap-2">
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item disabled"><a class="page-link"
                                                    href="javascript:void(0)">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-pagination" role="tabpanel"
                                aria-labelledby="preview-disabled-pagination-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-primary mb-0&quot;&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item disabled&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Subtle Pagination</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="subtle-pagination" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-subtle-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-subtle-pagination" type="button" role="tab"
                                    aria-controls="html-subtle-pagination" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-subtle-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-subtle-pagination" type="button" role="tab"
                                    aria-controls="preview-subtle-pagination" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>pagination-*-light</code> class to ul element to indicate a series
                            of related content exists across multiple pages.</p>
                        <div class="tab-content" id="subtle-paginationContent">
                            <div class="tab-pane fade show active" id="html-subtle-pagination" role="tabpanel"
                                aria-labelledby="html-subtle-pagination-tab" tabindex="0">
                                <div class="d-flex flex-column gap-2">
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-primary-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-dark-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-secondary-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-subtle-pagination" role="tabpanel"
                                aria-labelledby="preview-subtle-pagination-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-primary-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-dark-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-secondary-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Rounded Pagination</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="rounded-pagination" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-rounded-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-rounded-pagination" type="button" role="tab"
                                    aria-controls="html-rounded-pagination" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-rounded-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-rounded-pagination" type="button" role="tab"
                                    aria-controls="preview-rounded-pagination" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>.pagination-rounded</code> class to ul element to indicate a series
                            of related content exists across multiple pages.</p>
                        <div class="tab-content" id="rounded-paginationContent">
                            <div class="tab-pane fade show active" id="html-rounded-pagination" role="tabpanel"
                                aria-labelledby="html-rounded-pagination-tab" tabindex="0">
                                <div class="d-flex flex-column gap-2">
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-rounded pagination-primary mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-rounded pagination-dark mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-rounded pagination-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-rounded-pagination" role="tabpanel"
                                aria-labelledby="preview-rounded-pagination-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-rounded pagination-primary mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-rounded pagination-dark mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-rounded pagination-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Rounded Pagination light</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="rounded-light-pagination"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-rounded-light-pagination-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-rounded-light-pagination" type="button"
                                    role="tab" aria-controls="html-rounded-light-pagination"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-rounded-light-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-rounded-light-pagination" type="button" role="tab"
                                    aria-controls="preview-rounded-light-pagination"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>.pagination-rounded</code> class to ul element to indicate a series
                            of related content exists across multiple pages.</p>
                        <div class="tab-content" id="rounded-light-paginationContent">
                            <div class="tab-pane fade show active" id="html-rounded-light-pagination" role="tabpanel"
                                aria-labelledby="html-rounded-light-pagination-tab" tabindex="0">
                                <div class="d-flex flex-column gap-2">
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-rounded pagination-primary-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-rounded pagination-dark-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-rounded pagination-light-light mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-rounded-light-pagination" role="tabpanel"
                                aria-labelledby="preview-rounded-light-pagination-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-rounded pagination-primary-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-rounded pagination-dark-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-rounded pagination-light-light mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Pagination Sizes</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizes-pagination" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizes-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizes-pagination" type="button" role="tab"
                                    aria-controls="html-sizes-pagination" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizes-pagination-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizes-pagination" type="button" role="tab"
                                    aria-controls="preview-sizes-pagination" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>.pagination-sm</code> class to ul element to indicate a series of
                            related content exists across multiple pages.</p>
                        <div class="tab-content" id="sizes-paginationContent">
                            <div class="tab-pane fade show active" id="html-sizes-pagination" role="tabpanel"
                                aria-labelledby="html-sizes-pagination-tab" tabindex="0">
                                <div class="d-flex flex-column align-items-center gap-2">
                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-sm mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-md mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-lg mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-left-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link"
                                                    href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="ri-arrow-right-s-line fw-semibold"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizes-pagination" role="tabpanel"
                                aria-labelledby="preview-sizes-pagination-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-sm mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-md mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Pagination --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination pagination-lg mb-0&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-left-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;
                &lt;i class=&quot;ri-arrow-right-s-line fw-semibold&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
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
