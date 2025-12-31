@extends('partials.layouts.master2')

@section('title', 'Dropdowns | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Dropdowns')

@section('content')

    </head>

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Default dropdowns</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create <strong>dropdowns</strong> with Bootstrap using the <code>&lt;div
                                class="dropdown"&gt;</code> class and <code>&lt;button
                                class="btn btn-secondary dropdown-toggle"&gt;</code> for the toggle. Include <code>&lt;ul
                                class="dropdown-menu"&gt;</code> for the menu items.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a href="javascript:void(0)" class="btn btn-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dropdown Color Variant</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <strong>dropdown color variants</strong> in Bootstrap by applying color
                            classes like <code>.btn-primary</code> or <code>.btn-success</code> to the <code>&lt;button
                                class="btn btn-primary"&gt;</code> for different styles.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Primary
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Secondary
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Success
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Info
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Warning
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Danger
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Light
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dark
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Split Button Dropdown</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a <strong>split button dropdown</strong> with Bootstrap by using
                            <code>.btn-group</code> and <code>.dropdown-toggle-split</code> classes. Apply these to separate
                            the button and dropdown toggle.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-light">Light</button>
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Dark</button>
                                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dropdown Sizing</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Use <code>btn-lg</code> class to create a large size dropdown button and
                            <code>btn-sm</code> to create a small size dropdown button.</p>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <div class="btn-group">
                                <button class="btn btn-primary btn-lg dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Large button
                                </button>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-light btn-lg" type="button">
                                    Large split button
                                </button>
                                <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Small button
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </div>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-light btn-sm" type="button">
                                    Small split button
                                </button>
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dropdown Colors</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Primary
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown dropdown-secondary">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Secondary
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown dropdown-success">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Success
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown dropdown-info">
                                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Info
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown dropdown-warning">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Warning
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown dropdown-danger">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Danger
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                            <div class="dropdown dropdown-dark">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dark
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dark Dropdowns</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Style <strong>dark dropdowns</strong> with Bootstrap by using the
                            <code>.dropdown-menu-dark</code> class on the <code>&lt;ul&gt;</code> element for a dark theme.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item active" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Hover dropdowns</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Enable <strong>hover dropdowns</strong> with Bootstrap by using the
                            <code>.dropdown-hover</code> class. Apply this class to the <code>&lt;div
                                class="dropdown"&gt;</code> container for dropdowns that appear on hover.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle arrow-none" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item active" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="dropdown dropdown-hover">
                                <button class="btn btn-primary dropdown-toggle arrow-none" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Hover Dropdown
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item active" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Alignment options</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Align <strong>dropdown menus</strong> with Bootstrap using
                            <code>.dropdown-menu-end</code> to right-align and <code>.dropdown-menu-start</code> to
                            left-align the dropdown menu relative to the toggle button.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Right-aligned menu
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-display="static" aria-expanded="false">
                                    Left-aligned, right-aligned lg
                                </button>
                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-display="static" aria-expanded="false">
                                    Right-aligned, left-aligned lg
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group dropstart">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropstart
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group dropend">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropend
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropup
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="dropdown-center">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Centered dropdown
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action two</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dropdown Menu Item Color</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                        Click to open menu
                                    </button>
                                    <ul class="dropdown-menu">
                                        <div class="dropdown-header"> Quick Actions </div>
                                        <div class="dropdown-divider opacity-50"></div>
                                        <li><a class="dropdown-item" href="javascript:void(0)">New Ticket</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">New Customer</a></li>
                                        <li class="dropend">
                                            <a class="dropdown-item dropdown-toggle" role="button"
                                                id="dropdownMenuButton2" data-bs-toggle="dropdown" data-bs-offset="-9,2"
                                                aria-expanded="false" href="javascript:void(0)">New Group</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Admin Group </a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Staff Group </a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Member Group </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">New Contact</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dropdown Options</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Customize <strong>dropdown options</strong> in Bootstrap with
                            <code>data-bs-offset</code> to adjust the dropdown position and <code>data-bs-reference</code>
                            to specify the reference element for positioning.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false" data-bs-offset="10,20">
                                    Offset
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Reference</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Auto Close Behavior</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Control <strong>auto-close behavior</strong> of dropdowns in Bootstrap using
                            the <code>data-bs-auto-close</code> attribute. Set it to <code>"true"</code>,
                            <code>"outside"</code>, or <code>"inside"</code> to define when the dropdown should close
                            automatically.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <div class="btn-group">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="true" aria-expanded="false">
                                    Default dropdown
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="inside" aria-expanded="false">
                                    Clickable inside
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    Clickable outside
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="false" aria-expanded="false">
                                    Manual close
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Menu item</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dropdown Menu Item Color</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="font-size-13 mb-3">Dropdown Menu Success link example</h6>
                                <p class="text-muted">Add<code> .disabled </code>to items in the dropdown to <strong>style
                                        them as disabled</strong></p>
                                <div class="dropdown-menu d-inline-block position-relative">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item active" href="javascript:void(0)">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="font-size-13 mb-3">Dropdown Menu Disabled example</h6>
                                <p class="text-muted">Add<code> .disabled </code>to items in the dropdown to <strong>style
                                        them as disabled</strong></p>
                                <ul class="dropdown-menu d-inline-block position-relative">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item disabled" aria-disabled="true">Something else here</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Menu Content</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Example of dropdown menu containing<code> Headers, Text and Forms
                            </code>content.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <!-- Header -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Header
                                </button>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header"> Welcome Fabkin User! </div>
                                    <!-- item-->
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Text
                                </button>
                                <div class="dropdown-menu dropdown-menu-md p-3">
                                    <p>
                                        Some example text that's free-flowing within the dropdown menu.
                                    </p>
                                    <p class="mb-0">
                                        And this is more example text.
                                    </p>
                                </div>
                            </div>

                            <!-- Forms -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Forms
                                </button>
                                <div class="dropdown-menu p-4 min-w-200px">
                                    <form>
                                        <div class="mb-2">
                                            <label class="form-label" for="exampleDropdownFormEmail">Email address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail"
                                                placeholder="email@example.com">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="exampleDropdownFormPassword">Password</label>
                                            <input type="password" class="form-control" id="exampleDropdownFormPassword"
                                                placeholder="Password">
                                        </div>
                                        <div class="mb-2">
                                            <div
                                                class="form-check form-check-sm custom-checkbox d-flex align-items-center gap-2 mb-3">
                                                <input type="checkbox" class="form-check-input"
                                                    id="rememberdropdownCheck">
                                                <label class="form-check-label" for="rememberdropdownCheck">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')


    <script type="module" src="assets/js/app.js"></script>

@endsection
