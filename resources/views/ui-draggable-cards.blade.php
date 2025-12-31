@extends('partials.layouts.master')

@section('title', 'UI Draggable Cards | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('title', 'Draggable Cards')

@section('content')

    <!--begin::App-->
    <div id="layout-wrapper"> 

                <div class="row">
                        <div class="col-12">
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Draggable Cards Example</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-4">Create draggable cards using <code>Sortable.js</code> by applying it to a container with card elements. This allows users to drag and rearrange cards within the container, making the layout interactive and customizable.</p>
                                    <div class="row g-3" id="sortable-container">
                                        <div class="col-xl-4">
                                            <div class="card border mb-0" id="card001">
                                                <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                    <h5 class="card-title mb-0">1. Drag me!</h5>
                                                    <ul class="card-actions list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-move">
                                                                <i class="ri-drag-move-2-fill"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-close">
                                                                <i class="ri-close-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                    <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card border mb-0" id="card02">
                                                <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                    <h5 class="card-title mb-0">2. Drag me!</h5>
                                                    <ul class="card-actions list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-move">
                                                                <i class="ri-drag-move-2-fill"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-close">
                                                                <i class="ri-close-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                    <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card border mb-0" id="card03">
                                                <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                    <h5 class="card-title mb-0">3. Drag me!</h5>
                                                    <ul class="card-actions list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-move">
                                                                <i class="ri-drag-move-2-fill"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-close">
                                                                <i class="ri-close-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                    <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card border mb-0" id="card04">
                                                <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                    <h5 class="card-title mb-0">4. Drag me!</h5>
                                                    <ul class="card-actions list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-move">
                                                                <i class="ri-drag-move-2-fill"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-close">
                                                                <i class="ri-close-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                    <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card border mb-0" id="card05">
                                                <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                    <h5 class="card-title mb-0">5. Drag me!</h5>
                                                    <ul class="card-actions list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-move">
                                                                <i class="ri-drag-move-2-fill"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-close">
                                                                <i class="ri-close-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                    <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card border mb-0" id="card06">
                                                <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                    <h5 class="card-title mb-0">6. Drag me!</h5>
                                                    <ul class="card-actions list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-move">
                                                                <i class="ri-drag-move-2-fill"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0)" class="card-close">
                                                                <i class="ri-close-line"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                    <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
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
                                    <h5 class="card-title mb-0">Draggable over Multiple Containers Example</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-4">Enable dragging of items across multiple containers using <code>Sortable.js</code>. Apply <code>Sortable</code> to each container and configure the <code>group</code> option to allow items to be moved between them.</p>
                                    <div class="card border">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Container A</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-xl-4" id="multiple-containers01">
                                                    <div class="card border mb-0" id="card08">
                                                        <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">A1. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4" id="multiple-containers03">
                                                    <div class="card border mb-0" id="card09">
                                                        <div class="card-header d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">A2. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-xl-4">
                                            <div class="card border mb-0">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Container B</h5>
                                                </div>
                                                <div class="card-body" id="multiple-containers02">
                                                    <div class="card bg-primary-subtle border-primary-subtle" id="card10">
                                                        <div class="card-header border-primary-subtle d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">B1. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card bg-primary-subtle border-primary-subtle" id="card11">
                                                        <div class="card-header border-primary-subtle d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">B2. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card bg-primary-subtle border-primary-subtle mb-0" id="card12">
                                                        <div class="card-header border-primary-subtle d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">B3. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::card-->
                                        </div>
                                        <div class="col-xl-4">
                                            <!--start::card-->
                                            <div class="card border mb-0">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Container C</h5>
                                                </div>
                                                <div class="card-body" id="multiple-containers04">
                                                    <div class="card bg-danger-subtle border-danger-subtle" id="card10">
                                                        <div class="card-header border-danger-subtle d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">C1. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card bg-danger-subtle border-danger-subtle" id="card11">
                                                        <div class="card-header border-danger-subtle d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">C2. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card bg-danger-subtle border-danger-subtle mb-0" id="card12">
                                                        <div class="card-header border-danger-subtle d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                                            <h5 class="card-title mb-0">C3. Drag me!</h5>
                                                            <ul class="card-actions list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-move">
                                                                        <i class="ri-drag-move-2-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript:void(0)" class="card-close">
                                                                        <i class="ri-close-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>This is a draggable card. It can be dragged and dropped between columns. Try moving it around!</p>
                                                            <p class="mb-0">Suggestions: Add more interactive elements or dynamic content here for a better user experience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::card-->
                                            </div>
                                        </div>
                                    </div><!--End row-->
                                </div>
                            </div>
                        </div><!--End col-->

                </div><!--End row-->
            </div><!--End container-fluid-->
        </main><!--End app-wrapper-->

 @endsection

@section('js')

<script src="assets/libs/sortablejs/Sortable.min.js"></script>
<script src="assets/js/ui/card.init.js"></script>
<script type="module" src="assets/js/app.js"></script>
 @endsection