@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Dashboard')
@section('pagetitle', 'Project')
@section('css')
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection

@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="row">
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between gap-4 border-bottom border-dashed pb-8 mb-4">
                                    <div>
                                        <h3>1036</h3>
                                        <p class="text-muted mb-0">Active Projects</p>
                                    </div>
                                    <div>
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center rounded bg-info-subtle text-info fs-3">
                                            <i class="bi bi-folder2-open"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-success"><span class="fs-12 fw-medium">+ 80%</span><i
                                            class="bi bi-caret-up-fill ms-1"></i></div>
                                    <div class="fs-12 text-muted fw-medium">+ Projects This Week</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between gap-4 border-bottom border-dashed pb-8 mb-4">
                                    <div>
                                        <h3>$352</h3>
                                        <p class="text-muted mb-0">Earnings</p>
                                    </div>
                                    <div>
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center rounded bg-success-subtle text-success fs-3">
                                            <i class="bi bi-coin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-success"><span class="fs-12 fw-medium">+ 60.5%</span><i
                                            class="bi bi-caret-up-fill ms-1"></i></div>
                                    <div class="fs-12 text-muted fw-medium">+ Projects last Week</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between gap-4 border-bottom border-dashed pb-8 mb-4">
                                    <div>
                                        <h3>896</h3>
                                        <p class="text-muted mb-0">Total Clients</p>
                                    </div>
                                    <div>
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center rounded bg-danger-subtle text-danger fs-3">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-success"><span class="fs-12 fw-medium">+ 41%</span><i
                                            class="bi bi-caret-up-fill ms-1"></i></div>
                                    <div class="fs-12 text-muted fw-medium">+ Compare last month</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Report Chart</h6>
                                <button class="btn btn-outline-light text-muted btn-sm">All Projects<i
                                        class="bi bi-arrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body">
                                <div id="basic_column_chart" class="apexcharts-container"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-h-100">
                            <div class="card-header">
                                <h6 class="mb-0">Project Budget</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-5">
                                    <div class="avatar-group float-end">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-3.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">5+</span>
                                        </a>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center bg-secondary-subtle rounded-2 text-secondary">
                                            <i class="bi bi-bounding-box-circles fs-5"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Design</h6>
                                            <p class="mb-0 fs-13 text-muted">Allocate: <span
                                                    class="fw-semibold text-body">$20,000</span> | Srent: <span
                                                    class="fw-semibold text-body">$15,000</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="avatar-group float-end">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">3+</span>
                                        </a>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center bg-primary-subtle rounded-2 text-primary">
                                            <i class="bi bi-code-slash fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Development</h6>
                                            <p class="mb-0 fs-13 text-muted">Allocate: <span
                                                    class="fw-semibold text-body">$25,000</span> | Srent: <span
                                                    class="fw-semibold text-body">$23,000</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="avatar-group float-end">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-7.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">6+</span>
                                        </a>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center bg-success-subtle rounded-2 text-success">
                                            <i class="bi bi-bar-chart-line fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Marketing</h6>
                                            <p class="mb-0 fs-13 text-muted">Allocate: <span
                                                    class="fw-semibold text-body">$18,000</span> | Srent: <span
                                                    class="fw-semibold text-body">$36,000</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="avatar-group float-end">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">4+</span>
                                        </a>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center bg-danger-subtle rounded-2 text-danger">
                                            <i class="bi bi-pie-chart fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Sales</h6>
                                            <p class="mb-0 fs-13 text-muted">Allocate: <span
                                                    class="fw-semibold text-body">$22,500</span> | Spent: <span
                                                    class="fw-semibold text-body">$40,000</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="avatar-group float-end">
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-3.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-item">
                                            <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg"
                                                alt="avatar image">
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="avatar-item fw-semibold avatar-title bg-primary">
                                            <span class="d-flex justify-content-center avatar-sm">3+</span>
                                        </a>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div
                                            class="h-48px w-48px d-flex justify-content-center align-items-center bg-warning-subtle rounded-2 text-warning">
                                            <i class="bi bi-graph-up-arrow fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Development</h6>
                                            <p class="mb-0 fs-13 text-muted">Allocate: <span
                                                    class="fw-semibold text-body">$30,000</span> | Spent: <span
                                                    class="fw-semibold text-body">$50,000</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Today Activities</h6>
                            </div>
                            <div class="card-body">
                                <section data-simplebar class="px-5 mx-n5" style="max-height: 340px;">
                                    <div class="timeline2">
                                        <ul>
                                            <li class="card border-0 box">
                                                <span></span>
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div
                                                            class="h-40px w-40px d-flex justify-content-center align-items-center bg-light-subtle text-muted rounded-pill">
                                                            <i class="bi bi-cup-hot fs-5"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">Team Standup Meeting</h6>
                                                            <p class="fs-12 text-muted mb-0">- Hosted by Sarah
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted mb-1">10:00 AM</div>
                                                        <div class="avatar-group">
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-1.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-2.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-3.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="mb-1 fw-normal"><i
                                                        class="bi bi-camera-video me-2 text-muted"></i>Zoom
                                                    Meeting
                                                    with client</h6>
                                                <p class="text-muted mb-1">Lead ByMichel Jeksone</p>
                                            </li>
                                            <li class="card border-0 box">
                                                <span></span>
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div
                                                            class="h-40px w-40px d-flex justify-content-center align-items-center bg-light-subtle text-muted rounded-pill">
                                                            <i class="bi bi-gem fs-5"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">Team Standup Meeting</h6>
                                                            <p class="fs-12 text-muted mb-0">- Hosted by Sarah
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted mb-1">10:00 AM</div>
                                                        <div class="avatar-group">
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-1.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-2.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-3.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="mb-1 fw-normal"><i
                                                        class="bi bi-chat-left-dots me-2 text-muted"></i>Feedback
                                                    for "<span class="text-success">Design</span>"</h6>
                                                <p class="text-muted mb-0">Good Design is all about making
                                                    other designers feel like <strong class="text-body">because
                                                        that idea wasn't theirs</strong></p>
                                                <div class="d-flex justify-content-end">
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-text-secondary icon-btn-sm"><i
                                                            class="bi bi-pen text-secondary"></i></a>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-text-danger icon-btn-sm"><i
                                                            class="bi bi-trash3 text-danger"></i></a>
                                                </div>
                                            </li>
                                            <li class="card border-0 box">
                                                <span></span>
                                                <div class="d-flex justify-content-between align-items-start mb-5">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                            class="avatar-md rounded-pill">
                                                        <div>
                                                            <h6 class="mb-1 max-w-200px text-truncate"> Lucy
                                                                Peterson was added to the group, group name is
                                                                Overtake</h6>
                                                            <p class="fs-12 text-muted mb-0">- Hosted by Sophia
                                                                Mia
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted mb-1">11:30 AM</div>
                                                    </div>
                                                </div>
                                                <h6 class="mb-1 fw-normal"><i
                                                        class="bi bi-file-earmark-arrow-down me-2 text-muted"></i>Create
                                                    a New Project related admin panel</h6>
                                                <p class="text-muted mb-1">This project is high demanded</p>
                                            </li>
                                            <li class="card border-0 box">
                                                <span></span>
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div
                                                            class="h-40px w-40px d-flex justify-content-center align-items-center bg-light-subtle text-muted rounded-pill">
                                                            <i class="bi bi-clock-history fs-5"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">Image Added</h6>
                                                            <p class="text-muted mb-0">Mores Clarke added new
                                                                video</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="text-muted mb-1">5:15 AM</div>
                                                        <div class="avatar-group">
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-1.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-2.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                            <a href="javascript:voide(0)" class="avatar-item">
                                                                <img class="img-fluid avatar-sm"
                                                                    src="assets/images/avatar/avatar-3.jpg"
                                                                    alt="avatar image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 border border-dashed rounded cursor-pointer">
                                                    <div class="d-flex justify-content-between align-items-start">
                                                        <div>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <img src="assets/images/small/img-2.jpg" alt="Image"
                                                                    class="h-40px w-40px rounded-pill object-fit-cover">
                                                                <div>
                                                                    <h6 class="mb-1">Add Project Images </h6>
                                                                    <p class="mb-0 text-muted">This image is for
                                                                        project</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-muted fs-13">512MB</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card overflow-hidden upgrade-card">
                    <div class="card-body">
                        <div class="row">
                            <h2 class="fw-bold text-white">$49<span class="text-white fs-6">/month</span></h2>
                            <h6 class="text-white">Upgrade Your Plan</h6>
                            <p class="max-w-320px text-opacity-50 text-white">Get access to all premium features
                                & priority support.</p>
                            <div class="mt-6">
                                <button class="btn bg-white text-secondary">Upgrade Now</button>
                            </div>
                            <img src="assets/images/dashboard/upgrade-img.png" alt="Upgrade Image"
                                class="position-absolute top-50 translate-middle-y end-0 w-200px">
                            <img src="assets/images/dashboard/circle.png" alt="Circle Image"
                                class="flower w-320px opacity-10">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2 mb-4">
                                    <div
                                        class="h-48px w-48px d-flex justify-content-center align-items-center rounded bg-light-subtle text-muted fs-4">
                                        <i class="bi bi-wallet"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 count" data-count="8521">0</h4>
                                        <p class="text-muted mb-0">Total Project</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="fw-medium fs-13 text-success">+ 2.9%</div>
                                    <div id="spark1" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2 mb-4">
                                    <div
                                        class="h-48px w-48px d-flex justify-content-center align-items-center rounded bg-light-subtle text-muted fs-4">
                                        <i class="bi bi-calendar2-check"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 count" data-count="7125">0</h4>
                                        <p class="text-muted mb-0">Completed Projects</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="fw-medium fs-13 text-success">+ 2.7%</div>
                                    <div id="spark2" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2 mb-4">
                                    <div
                                        class="h-48px w-48px d-flex justify-content-center align-items-center rounded bg-light-subtle text-muted fs-4">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 count" data-count="4525">0</h4>
                                        <p class="text-muted mb-0">Pending Projects</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="fw-medium fs-13 text-success">+ 1.9%</div>
                                    <div id="spark3" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2 mb-4">
                                    <div
                                        class="h-48px w-48px d-flex justify-content-center align-items-center rounded bg-light-subtle text-muted fs-4">
                                        <i class="bi bi-hourglass"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 count" data-count="3562">0</h4>
                                        <p class="text-muted mb-0">Upcoming Deadlines</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="fw-medium fs-13 text-success">+ 2.1%</div>
                                    <div id="spark4" class="apexcharts-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Projects Calendar</h6>
                        <button class="btn btn-outline-light btn-sm text-muted">Report<i
                                class="bi bi-arrow-right ms-1"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-light-subtle">
                                    <div class="card-body">
                                        <span class="bullet me-2 bg-success"></span><span class="text-muted fs-12">7, Feb
                                            2025</span>
                                        <h6 class="mt-4 mb-0">Meeting with Client</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light-subtle">
                                    <div class="card-body">
                                        <span class="bullet me-2 bg-danger"></span><span class="text-muted fs-12">23, Feb
                                            2025</span>
                                        <h6 class="mt-4 mb-0">Deal with New Client</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="datepicker-container">
                                    <input type="text" class="form-control d-none" id="inline-picker"
                                        placeholder="Select a date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Team Member</h6>
                        <button class="btn btn-outline-light text-muted btn-sm">See All<i
                                class="bi bi-arrow-right ms-1"></i></button>
                    </div>
                    <div class="card-body">
                        <section data-simplebar class="px-5 mx-n5" style="max-height: 436px;">
                            <div class="p-3 border rounded-2 mb-4">
                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                            class="avatar-lg rounded-pill">
                                        <div>
                                            <h6 class="mb-1">John Doe</h6>
                                            <p class="fs-12 text-muted mb-0 max-w-112px min-w-112px text-truncate">
                                                UI / UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="fs-12 text-muted">
                                        <p class="mb-1">Tasks : <span class="text-body">23</span></p>
                                        <p class="mb-0">Hours : <span class="text-body">1h 23m</span></p>
                                    </div>
                                    <div>
                                        <div class="circular-progress circular-sm">
                                            <svg class="circular-inner" viewBox="0 0 56 56">
                                                <circle class="bg-circular-progress"></circle>
                                                <circle class="fg-circular-progress"></circle>
                                            </svg>
                                            <div class="circular-text">40%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border rounded-2 mb-4">
                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                            class="avatar-lg rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Kael Drift</h6>
                                            <p class="fs-12 text-muted mb-0 max-w-112px min-w-112px text-truncate">
                                                Develop Mobile Application</p>
                                        </div>
                                    </div>
                                    <div class="fs-12 text-muted">
                                        <p class="mb-1">Tasks : <span class="text-body">65</span></p>
                                        <p class="mb-0">Hours : <span class="text-body">3h 45m</span></p>
                                    </div>
                                    <div>
                                        <div class="circular-progress circular-sm circular-progress-success"
                                            style="--progress: 80;">
                                            <svg class="circular-inner" viewBox="0 0 56 56">
                                                <circle class="bg-circular-progress"></circle>
                                                <circle class="fg-circular-progress"></circle>
                                            </svg>
                                            <div class="circular-text">80%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border rounded-2 mb-4">
                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                            class="avatar-lg rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Elara Vex</h6>
                                            <p class="fs-12 text-muted mb-0 max-w-112px min-w-112px text-truncate">
                                                Web Designer</p>
                                        </div>
                                    </div>
                                    <div class="fs-12 text-muted">
                                        <p class="mb-1">Tasks : <span class="text-body">45</span></p>
                                        <p class="mb-0">Hours : <span class="text-body">2h 52m</span></p>
                                    </div>
                                    <div>
                                        <div class="circular-progress circular-sm circular-progress-warning"
                                            style="--progress: 71;">
                                            <svg class="circular-inner" viewBox="0 0 56 56">
                                                <circle class="bg-circular-progress"></circle>
                                                <circle class="fg-circular-progress"></circle>
                                            </svg>
                                            <div class="circular-text">71%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border rounded-2 mb-4">
                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                            class="avatar-lg rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Soren Thorne</h6>
                                            <p class="fs-12 text-muted mb-0 max-w-112px min-w-112px text-truncate">
                                                Development</p>
                                        </div>
                                    </div>
                                    <div class="fs-12 text-muted">
                                        <p class="mb-1">Tasks : <span class="text-body">23</span></p>
                                        <p class="mb-0">Hours : <span class="text-body">1h 23m</span></p>
                                    </div>
                                    <div>
                                        <div class="circular-progress circular-sm circular-progress-info"
                                            style="--progress: 60;">
                                            <svg class="circular-inner" viewBox="0 0 56 56">
                                                <circle class="bg-circular-progress"></circle>
                                                <circle class="fg-circular-progress"></circle>
                                            </svg>
                                            <div class="circular-text">60%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border rounded-2 mb-4">
                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                            class="avatar-lg rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Lira Solace</h6>
                                            <p class="fs-12 text-muted mb-0 max-w-112px min-w-112px text-truncate">
                                                UI / UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="fs-12 text-muted">
                                        <p class="mb-1">Tasks : <span class="text-body">12</span></p>
                                        <p class="mb-0">Hours : <span class="text-body">4h 23m</span></p>
                                    </div>
                                    <div>
                                        <div class="circular-progress circular-sm circular-progress-secondary"
                                            style="--progress: 30;">
                                            <svg class="circular-inner" viewBox="0 0 56 56">
                                                <circle class="bg-circular-progress"></circle>
                                                <circle class="fg-circular-progress"></circle>
                                            </svg>
                                            <div class="circular-text">30%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border rounded-2 mb-4">
                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <div class="d-flex align-items-center gap-4">
                                        <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Image"
                                            class="avatar-lg rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Varek Stryde</h6>
                                            <p class="fs-12 text-muted mb-0">UI / UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="fs-12 text-muted">
                                        <p class="mb-1">Tasks : <span class="text-body">23</span></p>
                                        <p class="mb-0">Hours : <span class="text-body">1h 23m</span></p>
                                    </div>
                                    <div>
                                        <div class="circular-progress circular-sm circular-progress-success"
                                            style="--progress: 80;">
                                            <svg class="circular-inner" viewBox="0 0 56 56">
                                                <circle class="bg-circular-progress"></circle>
                                                <circle class="fg-circular-progress"></circle>
                                            </svg>
                                            <div class="circular-text">40%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-xxl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Project Status</h6>
                        <button class="btn btn-outline-light text-muted btn-sm">See All<i
                                class="bi bi-arrow-right ms-1"></i></button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Project</th>
                                        <th scope="col">Completion</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <div class="form-check form-check-primary">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="CustomflexCheck01" id="CustomflexCheck01">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck01">
                                                        <h6 class="mb-1">Deploy The App To App Stores</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 07 Mar 2024
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="fs-12 fw-semibold">50%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                        </td>
                                        <td>01 Jan 2025</td>
                                        <td><span class="badge bg-info-subtle text-info">In Progress</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger">High</span></td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <div class="form-check form-check-primary">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="CustomflexCheck02" id="CustomflexCheck02">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck02">
                                                        <h6 class="mb-1">Develop Mobile Application</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 15 Feb 2024
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="fs-12 fw-semibold">75%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 75%"></div>
                                            </div>
                                        </td>
                                        <td>30 Jun 2025</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span>
                                        </td>
                                        <td><span class="badge bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <div class="form-check form-check-primary">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="CustomflexCheck03" id="CustomflexCheck03">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck03">
                                                        <h6 class="mb-1">Launch New Marketing Campaign</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 01 Mar 2024
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="fs-12 fw-semibold">25%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 25%"></div>
                                            </div>
                                        </td>
                                        <td>01 Oct 2024</td>
                                        <td><span class="badge bg-danger-subtle text-danger">On Hold</span></td>
                                        <td><span class="badge bg-success-subtle text-success">Low</span></td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <div class="form-check form-check-primary">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="CustomflexCheck04" id="CustomflexCheck04">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck04">
                                                        <h6 class="mb-1">Update Website Content</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 10 Jan 2024
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="fs-12 fw-semibold">100%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="100"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div>
                                        </td>
                                        <td>15 Jul 2024</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span>
                                        </td>
                                        <td><span class="badge bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <div class="form-check form-check-primary">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="CustomflexCheck05" id="CustomflexCheck05">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck05">
                                                        <h6 class="mb-1">Improve Search Engine Optimization
                                                            (SEO)</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 25 Feb 2024
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="fs-12 fw-semibold">64%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="10"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 64%"></div>
                                            </div>
                                        </td>
                                        <td>31 Dec 2024</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span>
                                        </td>
                                        <td><span class="badge bg-danger-subtle text-danger">High</span></td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap gap-4 align-items-center p-5">
                            <div class="fw-medium"> Showing 1 - 5 of 3 Entries</div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-primary mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="ri-arrow-left-s-line fw-semibold"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="ri-arrow-right-s-line fw-semibold"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit Section -->

    </div>
    </main>
@endsection

@section('js')
    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>
    <script src="assets/libs/chart.js/chart.umd.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- File js -->
    <script src="assets/js/dashboard/project.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

@endsection
