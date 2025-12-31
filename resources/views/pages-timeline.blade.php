@extends('partials.layouts.master')

@section('title', 'Page | FabKin Admin & Dashboards Template')

@section('title-sub', 'Page')
@section('pagetitle', 'Timeline')

@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-5">Basic Timeline</h5>
                        <div class="timeline2 mb-10">
                            <ul>
                                <li class="card border-0 box">
                                    <span></span>
                                    <div class="title">April 2024</div>
                                    <div class="sub-title">created by MARK</div>
                                    <div class="info">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Perferendis, corrupti.</div>
                                    <div class="time">
                                        <span>12:00pm</span>
                                        <span>4:45am</span>
                                    </div>
                                </li>
                                <li class="card border-0 box">
                                    <span></span>
                                    <div class="title">May 2024</div>
                                    <div class="sub-title">created by MARK</div>
                                    <div class="info">Lorem ipsum dolor sit amet.</div>
                                    <div class="time">
                                        <span>7:00am</span>
                                        <span>11:30</span>
                                    </div>
                                </li>
                                <li class="card border-0 box">
                                    <span></span>
                                    <div class="title">Jun</div>
                                    <div class="sub-title">created by MARK</div>
                                    <div class="info">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
                                        iste perspiciatis eos eum rerum amet!</div>
                                    <div class="time">
                                        <span>1:00pm</span>
                                        <span>5:00pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h5 class="mb-5">Advance Timeline</h5>
                        <ul class="timeline">
                            <li>
                                <div class="card direction-l border-0 shadow-lg">
                                    <div class="card-body text-center flag">
                                        <h4 class="mb-1">April 2024</h4>
                                        <p class="desc text-muted">WooCommerce integration, release of Point of Sale system
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card direction-r border-0 shadow-lg">
                                    <div class="card-body text-center flag">
                                        <h4 class="mb-1">March 2024</h4>
                                        <p class="desc text-muted">WooCommerce integration, release of Point of Sale system
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card direction-l border-0 shadow-lg">
                                    <div class="card-body text-center flag xl">
                                        <h4 class="mb-1">May 2024 </h4>
                                        <p class="desc text-muted">WooCommerce integration, release of Point of Sale system
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card direction-r border-0 shadow-lg">
                                    <div class="card-body text-center flag">
                                        <h4 class="mb-1">June 2024</h4>
                                        <p class="desc text-muted">Shopify integration, Cometa Token private sale for early
                                            investors and ICO</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card direction-l border-0 shadow-lg">
                                    <div class="card-body text-center flag">
                                        <h4 class="mb-1">July</h4>
                                        <div class="desc text-muted">Shopify integration, Cometa Token private sale for
                                            early investors and ICO</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
