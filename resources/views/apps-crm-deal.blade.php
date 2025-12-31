@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'CRM')
@section('pagetitle', 'Deal')
@section('css')
    <!-- Selector Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <link rel="stylesheet" href="assets/libs/dragula/dragula.min.css">
@endsection

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                            <h6 class="card-title mb-0 fw-semibold">
                                Deal <span class="badge bg-secondary-subtle text-secondary ms-1">12</span>
                            </h6>
                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Sort By
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Date Added</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">A - Z</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-light-info">Export As CSV</button>
                                <button type="button" class="btn btn-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#createContactModal">
                                    <i class="bi bi-plus-lg me-1"></i>Create Deal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex overflow-x-scroll gap-4">
                    <!-- New Deals -->
                    <div class="kanban-list">
                        <div class="rounded d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">New</h6>
                            <div class="d-flex align-items-center gap-3">
                                <button class="btn p-0"><i class="bi bi-plus-circle"></i></button>
                                <div class="dropdown dropdown-menu-end">
                                    <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-icon right my-4">
                            <input type="text" class="form-control rounded border form-control-icon"
                                placeholder="Search...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div id="b1">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-secondary-subtle text-secondary">New</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-7.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Dax Zeno</h6>
                                            <p class="mb-0 fs-13">Lira Solace</p>
                                            <a href="javascript:void(0)" class="text-muted fs-12">daxzeno357@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>May 27, 2025</p>
                                        <h6 class="mb-0 fs-13 text-secondary">$29,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>236</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>89</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>51</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-secondary-subtle text-secondary">New</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-1.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Dax Zeno</h6>
                                            <p class="mb-0 fs-13">Zara Lume</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">zaralume123@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>May 31, 2025</p>
                                        <h6 class="mb-0 fs-13 text-secondary">$25,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>147</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>69</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>53</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-secondary-subtle text-secondary">New</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-3.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Dax Zeno</h6>
                                            <p class="mb-0 fs-13">Kael Drift</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">kaeldrift789@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>Jun 2, 2025</p>
                                        <h6 class="mb-0 fs-13 text-secondary">$52,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>265</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>45</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>32</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- In Progress -->
                    <div class="kanban-list">
                        <div class="rounded d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Proposal Sent</h6>
                            <div class="d-flex align-items-center gap-3">
                                <button class="btn p-0"><i class="bi bi-plus-circle"></i></button>
                                <div class="dropdown dropdown-menu-end">
                                    <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-icon right my-4">
                            <input type="text" class="form-control rounded border form-control-icon"
                                placeholder="Search...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div id="b2">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-primary-subtle text-primary">Website</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-9.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Dax Zeno</h6>
                                            <p class="mb-0 fs-13">Rhea Nyx</p>
                                            <a href="javascript:void(0)" class="text-muted fs-12">rheanyx159@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>May 20, 2025</p>
                                        <h6 class="mb-0 fs-13 text-primary">$36,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>110</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>25</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>32</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-primary-subtle text-primary">Website</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-8.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Acme Corp</h6>
                                            <p class="mb-0 fs-13">Dax Zeno</p>
                                            <a href="javascript:void(0)" class="text-muted fs-12">daxzeno357@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>May 5, 2025</p>
                                        <h6 class="mb-0 fs-13 text-primary">$23,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>142</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>45</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>45</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Closed Won -->
                    <div class="kanban-list">
                        <div class="rounded d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Negotiation</h6>
                            <div class="d-flex align-items-center gap-3">
                                <button class="btn p-0"><i class="bi bi-plus-circle"></i></button>
                                <div class="dropdown dropdown-menu-end">
                                    <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-icon right my-4">
                            <input type="text" class="form-control rounded border form-control-icon"
                                placeholder="Search...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div id="b3">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-info-subtle text-info">Negotiation</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-1.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Acme Corp</h6>
                                            <p class="mb-0 fs-13">Zara Lume</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">zaralume123@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>Feb 28, 2025</p>
                                        <h6 class="mb-0 fs-13 text-info">$20,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>149</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>59</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>39</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-info-subtle text-info">Negotiation</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-2.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Acme Corp</h6>
                                            <p class="mb-0 fs-13">Max Orion</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">maxorion321@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>Mar 15, 2025</p>
                                        <h6 class="mb-0 fs-13 text-info">$25,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>145</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>54</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>52</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-info-subtle text-info">Negotiation</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-3.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Acme Corp</h6>
                                            <p class="mb-0 fs-13">Kael Drift</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">kaeldrift789@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>Feb 15, 2025</p>
                                        <h6 class="mb-0 fs-13 text-info">$14,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>149</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>59</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>39</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Closed Lost -->
                    <div class="kanban-list">
                        <div class="rounded d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Closed Won</h6>
                            <div class="d-flex align-items-center gap-3">
                                <button class="btn p-0"><i class="bi bi-plus-circle"></i></button>
                                <div class="dropdown dropdown-menu-end">
                                    <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-icon right my-4">
                            <input type="text" class="form-control rounded border form-control-icon"
                                placeholder="Search...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div id="b4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-success-subtle text-success">High</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-4.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Acme Corp</h6>
                                            <p class="mb-0 fs-13">Elara Vex</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">elaravex456@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>Apr 16, 2025</p>
                                        <h6 class="mb-0 fs-13 text-success">$42,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>123</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>42</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>23</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-success-subtle text-success">High</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-5.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Acme Corp</h6>
                                            <p class="mb-0 fs-13">Juno Wraith</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">junowraith654@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>Apr 28, 2025</p>
                                        <h6 class="mb-0 fs-13 text-success">$43,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>123</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>42</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>23</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Closed Lost -->
                    <div class="kanban-list">
                        <div class="rounded d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Closed Lost</h6>
                            <div class="d-flex align-items-center gap-3">
                                <button class="btn p-0"><i class="bi bi-plus-circle"></i></button>
                                <div class="dropdown dropdown-menu-end">
                                    <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Member</a></li>
                                        <a class="dropdown-item" href="javascript:void(0)">Add Due Date</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-icon right my-4">
                            <input type="text" class="form-control rounded border form-control-icon"
                                placeholder="Search...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div id="b5">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div>
                                        <span class="badge bg-danger-subtle text-danger">Low</span>
                                        <div class="dropdown dropdown-menu-end float-end">
                                            <a class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Delete</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Archive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 my-5">
                                        <img src="assets/images/avatar/avatar-6.jpg" alt="Zara Lume"
                                            class="avatar-md rounded-pill">
                                        <div>
                                            <h6 class="mb-1">Acme Corp</h6>
                                            <p class="mb-0 fs-13">Soren Thorne</p>
                                            <a href="javascript:void(0)"
                                                class="text-muted fs-12">sorenthorne951@gmail.com</a>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center p-3 bg-light-subtle rounded">
                                        <p class="mb-0 fs-12"><i class="bi bi-calendar2 me-2"></i>May 5, 2025</p>
                                        <h6 class="mb-0 fs-13 text-danger">$10,000</h6>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-end gap-6 align-content-center fs-12">
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-heart me-2"></i>25</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-send me-2"></i>12</a>
                                        <a href="javascript:void(0)" class="text-muted"><i
                                                class="bi bi-chat-dots me-2"></i>5</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lead Create Modal -->
        <div class="modal fade" id="createContactModal" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="createContactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createContactModalLabel">Create New Lead</h5>
                        <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ri-close-large-line fw-semibold"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center p-3 rounded">
                                        <div class="position-relative">
                                            <img id="avatarPreview" src="assets/images/avatar/15.jpg"
                                                alt="Avatar Preview"
                                                class="img-fluid rounded-circle h-80px w-80px object-fit-cover">
                                            <div
                                                class="h-24px w-24px rounded-pill bg-primary d-flex justify-content-center align-items-center text-white border border-3 border-white position-absolute fs-10 top-0 end-0">
                                                <i class="bi bi-camera"></i>
                                            </div>
                                            <input type="file"
                                                class="position-absolute top-0 end-0 w-100 h-100 opacity-0 form-control"
                                                id="avatar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="contactName" class="form-label">Contact Name</label>
                                    <input type="text" class="form-control" id="contactName"
                                        placeholder="Enter Contact name" required>
                                </div>
                                <div class="col-12">
                                    <label for="contactEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="contactEmail"
                                        placeholder="Enter email address" required>
                                </div>
                                <div class="col-12">
                                    <label for="contactPhone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="contactPhone"
                                        placeholder="Enter phone number" required>
                                </div>
                                <div class="col-12">
                                    <label for="dealStatus" class="form-label">Deal Status</label>
                                    <select class="form-select" id="dealStatus" required>
                                        <option value="newLead">New</option>
                                        <option value="converted">High</option>
                                        <option value="lost">Low</option>
                                        <option value="returning">Website</option>
                                        <option value="returning">Negotiation</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Deal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

@endsection

@section('js')

    <!-- Selector Js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="assets/libs/dragula/dragula.min.js"></script>
    <!-- File Js -->
    <script src="assets/js/app/crm-deal.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
