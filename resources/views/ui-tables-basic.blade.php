@extends('partials.layouts.master')

@section('title', 'Basic Tables | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Basic Tables')
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Basic Table </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The basic table in Bootstrap is created using the
                            <code>&lt;table&gt;</code> element with the <code>.table</code> class. This class adds basic
                            styling like borders, padding, and hover effects to make the table look clean and organized.</p>
                        <!-- start:: Basic Table -->
                        <div class="table-responsive" data-simplebar>
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Invoice</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#4201</a></th>
                                        <td>Alice Johnson</td>
                                        <td>November 12, 2023</td>
                                        <td>$3,000</td>
                                        <td><span class="badge border border-primary text-primary">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#4202</a></th>
                                        <td>Michael Smith</td>
                                        <td>November 10, 2023</td>
                                        <td>$4,750</td>
                                        <td><span class="badge border border-warning text-warning">Failed</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#4203</a></th>
                                        <td>Susan Lee</td>
                                        <td>November 5, 2023</td>
                                        <td>$1,800</td>
                                        <td><span class="badge border border-success text-success">Success</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#4204</a></th>
                                        <td>David Brown</td>
                                        <td>November 1, 2023</td>
                                        <td>$6,250</td>
                                        <td><span class="badge border border-info text-info">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end:: Basic Table -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Bordered Table </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">A bordered table in Bootstrap is created by adding the
                            <code>.table-bordered</code> class to a <code>&lt;table&gt;</code>. This adds borders around all
                            the table cells, making each row and column more distinct.</p>
                        <!-- start:: Bordered Table -->
                        <div class="table-responsive" data-simplebar>
                            <table class="table text-nowrap table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date Added</th>
                                        <th scope="col">Stock Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">01</td>
                                        <td>Wireless Headphones</td>
                                        <td>$150</td>
                                        <td>Oct 12, 2023</td>
                                        <td><i class="ri-checkbox-circle-line align-middle text-success"></i> In Stock</td>
                                        <td>
                                            <div class="hstack gap-3">
                                                <button type="button"
                                                    class="btn btn-light-primary border-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="ri-edit-2-line"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-light-danger border-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">02</td>
                                        <td>Smartphone</td>
                                        <td>$999</td>
                                        <td>Oct 10, 2023</td>
                                        <td><i class="ri-close-circle-line align-middle text-danger"></i> Out of Stock</td>
                                        <td>
                                            <div class="hstack gap-3">
                                                <button type="button"
                                                    class="btn btn-light-primary border-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="ri-edit-2-line"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-light-danger border-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">03</td>
                                        <td>Laptop</td>
                                        <td>$1,200</td>
                                        <td>Oct 5, 2023</td>
                                        <td><i class="ri-checkbox-circle-line align-middle text-success"></i> In Stock</td>
                                        <td>
                                            <div class="hstack gap-3">
                                                <button type="button"
                                                    class="btn btn-light-primary border-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="ri-edit-2-line"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-light-danger border-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">04</td>
                                        <td>Smartwatch</td>
                                        <td>$250</td>
                                        <td>Oct 12, 2023</td>
                                        <td><i class="ri-checkbox-circle-line align-middle text-success"></i> In Stock</td>
                                        <td>
                                            <div class="hstack gap-3">
                                                <button type="button"
                                                    class="btn btn-light-primary border-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="ri-edit-2-line"></i>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-light-danger border-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end:: Bordered Table -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Borderedless Table </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Borderless Table</strong> in Bootstrap removes all table
                            borders, providing a clean and minimal design. Use the <code>.table-borderless</code> class to
                            apply this style to your table.</p>
                        <!-- start:: Borderedless Table -->
                        <div class="table-responsive" data-simplebar>
                            <table class="table text-nowrap table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Stock Status</th>
                                        <th scope="col">Price Performance</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">01</td>
                                        <td><img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/ecommerce/210.png"
                                                alt="Wireless Headphones" class="h-40px w-40px"></td>
                                        <td>Wireless Headphones</td>
                                        <td>$150</td>
                                        <td><i class="ri-checkbox-circle-line align-middle text-success"></i> In Stock</td>
                                        <td><span class="text-success fw-semibold">5% <i
                                                    class="ri-arrow-up-line"></i></span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-light-primary icon-btn" type="button"
                                                    id="actionMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line fw-semibold fs-16"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="actionMenu1">
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-edit-2-line"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-eye-line"></i>View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-delete-bin-line"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">02</td>
                                        <td><img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/ecommerce/210.png"
                                                alt="Smartphone" class="h-40px w-40px"></td>
                                        <td>Smartphone</td>
                                        <td>$999</td>
                                        <td><i class="ri-close-circle-line align-middle text-danger"></i> Out of Stock</td>
                                        <td><span class="text-danger fw-semibold">3% <i
                                                    class="ri-arrow-down-line"></i></span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-light-primary icon-btn" type="button"
                                                    id="actionMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line fw-semibold fs-16"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="actionMenu2">
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-edit-2-line"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-eye-line"></i>View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-delete-bin-line"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">03</td>
                                        <td><img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/ecommerce/210.png"
                                                alt="Laptop" class="h-40px w-40px"></td>
                                        <td>Laptop</td>
                                        <td>$1,200</td>
                                        <td><i class="ri-checkbox-circle-line align-middle text-success"></i> In Stock</td>
                                        <td><span class="text-success fw-semibold">10% <i
                                                    class="ri-arrow-up-line"></i></span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-light-primary icon-btn" type="button"
                                                    id="actionMenu3" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line fw-semibold fs-16"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="actionMenu3">
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-edit-2-line"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-eye-line"></i>View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-delete-bin-line"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">04</td>
                                        <td><img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/ecommerce/210.png"
                                                alt="Smartwatch" class="h-40px w-40px"></td>
                                        <td>Smartwatch</td>
                                        <td>$250</td>
                                        <td><i class="ri-checkbox-circle-line align-middle text-success"></i> In Stock</td>
                                        <td><span class="text-success fw-semibold">8% <i
                                                    class="ri-arrow-up-line"></i></span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-light-primary icon-btn" type="button"
                                                    id="actionMenu4" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-line fw-semibold fs-16"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="actionMenu4">
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-edit-2-line"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-eye-line"></i>View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                                class="ri-delete-bin-line"></i>Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end:: Borderedless Table -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table Striped Column </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Striped Column Table</strong> in Bootstrap adds alternating
                            background colors to table columns for better readability. Use the
                            <code>.table-striped-columns</code> class to apply this effect.</p>
                        <!-- start:: Table Striped Column -->
                        <div class="table-responsive" data-simplebar>
                            <table class="table table-striped-columns text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Coach</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Student</th>
                                        <th scope="col">Specialty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">01</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="position-relative w-max">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Emily Johnson" class="avatar-item avatar-sm border-0">
                                                    <span
                                                        class="position-absolute border-1 border border-white h-8px w-8px rounded-circle bg-success end-0 bottom-0"></span>
                                                </div>
                                                <h6 class="m-0 lh-1">Emily Johnson</h6>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">emily.johnson@example.com</span></td>
                                        <td>(123) 456-7890</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar-item overflow-hidden avatar-sm">
                                                    <img class="img-fluid"
                                                        src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Client 1">
                                                </div>
                                                <div class="avatar-item overflow-hidden avatar-sm">
                                                    <img class="img-fluid"
                                                        src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Client 2">
                                                </div>
                                                <div class="avatar-item overflow-hidden avatar-sm">
                                                    <img class="img-fluid"
                                                        src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Client 3">
                                                </div>
                                                <div class="avatar-item avatar-sm fw-semibold avatar-title bg-primary">
                                                    5+
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-body">Web Development</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">02</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="position-relative w-max">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Michael Smith" class="avatar-item avatar-sm border-0">
                                                    <span
                                                        class="position-absolute border-1 border border-white h-8px w-8px rounded-circle bg-warning end-0 bottom-0"></span>
                                                </div>
                                                <h6 class="m-0 lh-1">Michael Smith</h6>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">michael.smith@example.com</span></td>
                                        <td>(987) 654-3210</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar-item overflow-hidden avatar-sm">
                                                    <img class="img-fluid"
                                                        src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Client 1">
                                                </div>
                                                <div class="avatar-item overflow-hidden avatar-sm">
                                                    <img class="img-fluid"
                                                        src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Client 2">
                                                </div>
                                                <div class="avatar-item avatar-sm fw-semibold avatar-title bg-warning">
                                                    3+
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-body">UI/UX</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">03</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="position-relative w-max">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Alice Brown" class="avatar-item avatar-sm border-0">
                                                    <span
                                                        class="position-absolute border-1 border border-white h-8px w-8px rounded-circle bg-primary end-0 bottom-0"></span>
                                                </div>
                                                <h6 class="m-0 lh-1">Alice Brown</h6>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">alice.brown@example.com</span></td>
                                        <td>(555) 123-4567</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar-item overflow-hidden avatar-sm">
                                                    <img class="img-fluid"
                                                        src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Client 1">
                                                </div>
                                                <div class="avatar-item avatar-sm fw-semibold avatar-title bg-primary">
                                                    10+
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-body">Full Stack</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">04</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="position-relative w-max">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="David Wilson" class="avatar-item avatar-sm border-0">
                                                    <span
                                                        class="position-absolute border-1 border border-white h-8px w-8px rounded-circle bg-danger end-0 bottom-0"></span>
                                                </div>
                                                <h6 class="m-0 lh-1">David Wilson</h6>
                                            </div>
                                        </td>
                                        <td><span class="text-muted">david.wilson@example.com</span></td>
                                        <td>(444) 321-9876</td>
                                        <td>
                                            <div class="avatar-group flex-nowrap">
                                                <div class="avatar-item overflow-hidden avatar-sm">
                                                    <img class="img-fluid"
                                                        src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Client 1">
                                                </div>
                                                <div class="avatar-item avatar-sm fw-semibold avatar-title bg-danger">
                                                    1+
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-light text-body">Web Designer</span></td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                        <!-- end:: Table Striped Column -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Striped Rows </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Striped Rows Table</strong> in Bootstrap adds alternating
                            background colors to table rows for a cleaner look. Apply the effect using the
                            <code>.table-striped</code> class.</p>
                        <!-- start:: Striped Rows -->
                        <div class="table-responsive" data-simplebar>
                            <table class="table table-striped text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">01</td>
                                        <td>Emily Johnson</td>
                                        <td>emily.johnson@example.com</td>
                                        <td>(123) 456-7890</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">02</td>
                                        <td>Michael Smith</td>
                                        <td>michael.smith@example.com</td>
                                        <td>(987) 654-3210</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">03</td>
                                        <td>Alice Brown</td>
                                        <td>alice.brown@example.com</td>
                                        <td>(555) 123-4567</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">04</td>
                                        <td>David Wilson</td>
                                        <td>david.wilson@example.com</td>
                                        <td>(444) 321-9876</td>
                                        <td><span class="badge bg-danger">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end:: Striped Rows -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Hoverable rows </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Hoverable Rows Table</strong> in Bootstrap highlights table
                            rows when hovered. Use the <code>.table-hover</code> class to apply this effect.</p>
                        <!-- start:: Hoverable rows -->
                        <div class="table-responsive">
                            <table class="table table-nowrap text-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Contact Information</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">01</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Sarah Connor"
                                                        class="avatar-item border-0 avatar-md rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0 lh-1">Sarah Connor</h6>
                                                    <div class="lh-1"><span
                                                            class="fs-11 text-muted">sarah.connor@example.com</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>(555) 765-4321</td>
                                        <td><span class="badge text-success bg-success-subtle">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">02</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="John Doe"
                                                        class="avatar-item border-0 avatar-md rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0 lh-1">John Doe</h6>
                                                    <div class="lh-1"><span
                                                            class="fs-11 text-muted">john.doe@example.com</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>(123) 987-6543</td>
                                        <td><span class="badge text-warning bg-warning-subtle">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">03</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Jane Smith"
                                                        class="avatar-item border-0 avatar-md rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0 lh-1">Jane Smith</h6>
                                                    <div class="lh-1"><span
                                                            class="fs-11 text-muted">jane.smith@example.com</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>(321) 654-0987</td>
                                        <td><span class="badge text-success bg-success-subtle">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">04</td>
                                        <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="https://dash-tail.vercel.app/_next/static/media/avatar-1.f70409c3.jpg"
                                                        alt="Chris Evans"
                                                        class="avatar-item border-0 avatar-md rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="m-0 lh-1">Chris Evans</h6>
                                                    <div class="lh-1"><span
                                                            class="fs-11 text-muted">chris.evans@example.com</span></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>(987) 321-4567</td>
                                        <td><span class="badge text-danger bg-danger-subtle">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end:: Hoverable rows -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table Dark </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Table Dark</strong> example in Bootstrap uses the
                            <code>.table-dark</code> class to apply a dark background to the table, making the text stand
                            out with lighter colors.</p>
                        <!-- start:: Table Dark -->
                        <div class="table-responsive">
                            <table class="table table-dark table-striped table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">05</td>
                                        <td>Emily Carter</td>
                                        <td>Oct 05, 2023</td>
                                        <td>$1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">06</td>
                                        <td>David Smith</td>
                                        <td>Oct 12, 2023</td>
                                        <td>$2,750</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">07</td>
                                        <td>Sarah Johnson</td>
                                        <td>Oct 15, 2023</td>
                                        <td>$4,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">08</td>
                                        <td>Michael Brown</td>
                                        <td>Oct 20, 2023</td>
                                        <td>$5,600</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- end:: Table Dark -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table Primary </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Table Primary</strong> example in Bootstrap applies the
                            <code>.table-primary</code> class to give the table a blue background, following the primary
                            theme color for a highlighted look.</p>
                        <!-- start:: Table Primary -->
                        <div class="table-responsive">
                            <table class="table table-primary table-hover table-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">05</td>
                                        <td>Emily Carter</td>
                                        <td>Oct 05, 2023</td>
                                        <td>$1,200</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">06</td>
                                        <td>David Smith</td>
                                        <td>Oct 12, 2023</td>
                                        <td>$2,750</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">07</td>
                                        <td>Sarah Johnson</td>
                                        <td>Oct 15, 2023</td>
                                        <td>$4,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">08</td>
                                        <td>Michael Brown</td>
                                        <td>Oct 20, 2023</td>
                                        <td>$5,600</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- end:: Table Primary -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Active Table </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Active Table</strong> example in Bootstrap adds an active
                            state to a specific row or cell using the <code>.table-active</code> class. This highlights the
                            selected row or cell with a gray background.</p>
                        <!-- start:: Active Table -->
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">09</td>
                                        <td>Alice Green</td>
                                        <td>Oct 22, 2023</td>
                                        <td>$1,500</td>
                                    </tr>
                                    <tr class="table-active">
                                        <td class="fw-medium">10</td>
                                        <td>John Doe</td>
                                        <td>Oct 25, 2023</td>
                                        <td>$3,200</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">11</td>
                                        <td>Linda White</td>
                                        <td>Oct 30, 2023</td>
                                        <td>$2,800</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">12</td>
                                        <td>Robert Black</td>
                                        <td>Nov 02, 2023</td>
                                        <td class="table-active">$4,400</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- end:: Active Table -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table Small </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Table Small</strong> example in Bootstrap uses the
                            <code>.table-sm</code> class to create a compact table. This reduces padding and makes the table
                            more condensed, ideal for displaying data in a smaller footprint.</p>
                        <!-- start:: Table Small -->
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-medium">1</td>
                                        <td>Michael Brown</td>
                                        <td>Nov 05, 2023</td>
                                        <td>$2,000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">2</td>
                                        <td>Sarah Johnson</td>
                                        <td>Nov 10, 2023</td>
                                        <td>$1,750</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">3</td>
                                        <td>David Lee</td>
                                        <td>Nov 12, 2023</td>
                                        <td>$3,100</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">4</td>
                                        <td>Emily Davis</td>
                                        <td>Nov 15, 2023</td>
                                        <td>$4,500</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">5</td>
                                        <td>Chris Martin</td>
                                        <td>Nov 20, 2023</td>
                                        <td>$2,300</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">6</td>
                                        <td>Amy Wilson</td>
                                        <td>Nov 25, 2023</td>
                                        <td>$3,600</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <!-- end:: Table Small -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Vertical alignment </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Vertical Alignment</strong> example in Bootstrap
                            demonstrates how to align table cell content vertically. You can use classes like
                            <code>.align-top</code>, <code>.align-middle</code>, and <code>.align-bottom</code> to position
                            content at the top, middle, or bottom of the cell, enhancing the table's readability and
                            organization.</p>
                        <!-- start:: Vertical alignment -->
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col" class="w-25">Heading 1</th>
                                        <th scope="col" class="w-25">Heading 2</th>
                                        <th scope="col" class="w-25">Heading 3</th>
                                        <th scope="col" class="w-25">Heading 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This here is some placeholder text, intended to take up quite a bit of vertical
                                            space, to demonstrate how the vertical alignment works in the preceding cells.
                                        </td>
                                    </tr>
                                    <tr class="align-bottom">
                                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                        <td>This here is some placeholder text, intended to take up quite a bit of vertical
                                            space, to demonstrate how the vertical alignment works in the preceding cells.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td class="align-top">This cell is aligned to the top.</td>
                                        <td>This here is some placeholder text, intended to take up quite a bit of vertical
                                            space, to demonstrate how the vertical alignment works in the preceding cells.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- end:: Vertical alignment -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card card-h-100">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Nested Table </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Nested Table</strong> example in Bootstrap shows how to
                            create a table within another table. This allows you to organize complex data hierarchically.
                            You can use the same Bootstrap table classes to style the nested table, ensuring a consistent
                            look while presenting detailed information effectively.</p>
                        <!-- start:: Nested Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Item 1</td>
                                        <td>
                                            <table class="table table-primary table-bordered m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Sub-item</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sub-item 1A</td>
                                                        <td>This sub-item focuses on the specifications of the primary item,
                                                            detailing dimensions, weight, and material used.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sub-item 1B</td>
                                                        <td>Here we discuss the features such as color options, warranty
                                                            information, and user reviews.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Item 2</td>
                                        <td>
                                            <table class="table table-info table-bordered m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Sub-item</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sub-item 2A</td>
                                                        <td>This sub-item covers the performance metrics of the item,
                                                            including speed, efficiency, and reliability.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sub-item 2B</td>
                                                        <td>Detailed analysis of user experiences, common issues, and
                                                            customer support options.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- end:: Nested Table -->
                    </div>
                </div>
                <!--end::card-->
            </div>

            <div class="col-12">
                <div class="card mb-0">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Table Anatomy </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The <strong>Table Anatomy</strong> example in Bootstrap illustrates the
                            basic structure of a table. It includes essential elements like the table header
                            <code>&lt;thead&gt;</code>, body <code>&lt;tbody&gt;</code>, and footer
                            <code>&lt;tfoot&gt;</code>, showcasing how to organize data in a clear and readable format.</p>
                        <!-- start:: Table Anatomy -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <caption class="caption-top">Our Vibrant Community of Users</caption>
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Bio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark Otto</td>
                                        <td>Developer</td>
                                        <td>@mdo</td>
                                        <td>Passionate about coding and open-source contributions. Enjoys hiking in his
                                            spare time.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob Thornton</td>
                                        <td>Designer</td>
                                        <td>@fat</td>
                                        <td>Creative graphic designer focused on user experience. Loves coffee and art.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry Bird</td>
                                        <td>Community Manager</td>
                                        <td>@twitter</td>
                                        <td>Engaging with the community to create meaningful connections. Avid reader and
                                            birdwatcher.</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-center">Join our community and connect with these
                                            amazing individuals!</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- end:: Table Anatomy -->
                    </div>
                </div>
                <!--end::card-->
            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')


    <script type="module" src="assets/js/app.js"></script>
@endsection
