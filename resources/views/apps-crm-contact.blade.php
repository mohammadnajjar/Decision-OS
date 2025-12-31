@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'CRM')
@section('pagetitle', 'Contact')
@section('css')
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
    <!-- Selector Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                            <h6 class="card-title mb-0 fw-semibold">
                                Contacts <span class="badge bg-secondary-subtle text-secondary ms-1">20</span>
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
                                    <i class="bi bi-plus-lg me-1"></i>Create Contact
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault"
                                                    id="flexCheckDefault">
                                            </div>
                                        </th>
                                        <th scope="col">Contact Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Last Interaction</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault1"
                                                    id="flexCheckDefault1">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Zara Lume</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>zaralume123@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (234) 567-8901</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-1.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                BluePeak Digital
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info-subtle text-info">New Lead</span></td>
                                        <td>10 Feb 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault2"
                                                    id="flexCheckDefault2">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Max Orion</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>maxorion321@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (555) 123-4567</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-2.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                VantagePoint Solutions
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger-subtle text-danger">Lost</span></td>
                                        <td>01 Feb 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault3"
                                                    id="flexCheckDefault3">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Kael Drift</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>kaeldrift789@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (800) 987-6543</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-3.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                NextGen Ventures
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success-subtle text-success">Converted</span></td>
                                        <td>15 Jan 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault4"
                                                    id="flexCheckDefault4">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Elara Vex</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>elaravex456@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (321) 654-9870</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-4.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                CyberCore Labs
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info-subtle text-info">New Lead</span></td>
                                        <td>05 Apr 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault4"
                                                    id="flexCheckDefault4">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Juno Wraith</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>junowraith654@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (562) 254-4455</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-5.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                LumenTech Systems
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success-subtle text-success">Converted</span></td>
                                        <td>31 Dec 2024</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault6"
                                                    id="flexCheckDefault6">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Soren Thorne</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>sorenthorne951@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (451) 421-4514</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-6.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                Peak Industries
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info-subtle text-info">New Lead</span></td>
                                        <td>12 Feb 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault7"
                                                    id="flexCheckDefault7">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Lira Solace</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>lirasolace753@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (151) 445-9781</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-7.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                Skyline Innovations
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger-subtle text-danger">Lost</span></td>
                                        <td>05 Mar 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault8"
                                                    id="flexCheckDefault8">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Dax Zeno</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>daxzeno357@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (145) 120-4124</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-8.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                Apex Global Technologies
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger-subtle text-danger">Lost</span></td>
                                        <td>16 Nov 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault9"
                                                    id="flexCheckDefault9">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-9.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Rhea Nyx</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>rheanyx159@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (215) 145-1452</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-9.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                GreenWave Enterprises
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success-subtle text-success">Converted</span></td>
                                        <td>15 Oct 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="flexCheckDefault10" id="flexCheckDefault10">
                                            </div>
                                        </th>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-10.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Varek Stryde</h6>
                                            </div>
                                        </td>
                                        <td><i class="bi bi-envelope me-2 text-muted"></i>varekstryde137@gmail.com</td>
                                        <td><i class="bi bi-telephone-inbound me-2 text-muted"></i>+1 (546) 452-4415</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="h-32px w-32px p-1 bg-light-subtle rounded">
                                                    <img src="assets/images/auth/logo-10.png" alt="Logo Image"
                                                        class="img-fluid">
                                                </div>
                                                TechNova Solutions
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success-subtle text-success">Converted</span></td>
                                        <td>24 Dec 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit Contact">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete Contact">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap gap-3 align-items-center m-5">
                            <div class="fw-medium"> Showing 1 - 10 of 5 Entries</div>
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
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
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

        <!-- Contact Create Modal -->
        <div class="modal fade" id="createContactModal" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="createContactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createContactModalLabel">Create New Contact</h5>
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
                                                <i class="bi bi-camera"></i></div>
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
                                    <label for="contactCompany" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="contactCompany"
                                        placeholder="Enter company name" required>
                                </div>
                                <div class="col-12">
                                    <label for="contactStatus" class="form-label">Status</label>
                                    <select class="form-select" id="contactStatus" required>
                                        <option value="newLead">New Lead</option>
                                        <option value="converted">Converted</option>
                                        <option value="lost">Lost</option>
                                        <option value="returning">Returning</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="human-friendly-picker" class="form-label">Last Interaction</label>
                                    <input type="text" class="form-control" id="human-friendly-picker"
                                        placeholder="Select a date">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

@endsection

@section('js')

    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>
    <!-- Selector Js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- File Js -->
    <script src="assets/js/app/crm-contact.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
