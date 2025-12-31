@extends('partials.layouts.master')

@section('title', 'Order | FabKin Admin & Dashboards Template')

@section('title-sub', 'Eccomerce')
@section('pagetitle', 'Order')
@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center">
                            <h6 class="card-title mb-0 fw-semibold">Order History</h6>
                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                <div class="form-icon">
                                    <input type="text" class="form-control form-control-icon" id="firstNameLayout4"
                                        placeholder="Search Here ..." required>
                                    <i class="ri-search-2-line text-muted"></i>
                                </div>
                                <a href="javascript:void(0)"><button class="btn btn-primary"><i
                                            class="bi bi-plus-lg me-1"></i>Creat Order</button></a>
                                <div class="dropdown">
                                    <button class="btn btn-light icon-btn dropdown-toggle arrow-none" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="bi bi-three-dots-vertical"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">All Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Pending Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Paid Order</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Cancelled Order</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Created On</th>
                                        <th scope="col">Ordered To</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Payment Mode</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4201</a></th>
                                        <td> Black Bra</td>
                                        <td>01 Jan 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Zara Lume</h6>
                                                <p class="mb-0 fs-11 text-muted">zaralume123@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$165.00</td>
                                        <td>Cash On Delivery</td>
                                        <td> <span class="badge bg-success-subtle text-success">Shipped</span></td>
                                        <td>06 Jan 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4202</a></th>
                                        <td>Crop Top</td>
                                        <td>10 Jan 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Max Orion</h6>
                                                <p class="mb-0 fs-11 text-muted">maxorion321@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$325.00</td>
                                        <td>Online Payment</td>
                                        <td> <span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>15 Jan 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4203</a>
                                        </th>
                                        <td>Girls Hill</td>
                                        <td>15 Jan 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Kael Drift</h6>
                                                <p class="mb-0 fs-11 text-muted">kaeldrift789@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$100.00</td>
                                        <td>Cash On Delivery</td>
                                        <td> <span class="badge bg-success-subtle text-success">Shipped</span></td>
                                        <td>21 Jan 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4204</a>
                                        </th>
                                        <td>Jeens Shoes</td>
                                        <td>22 Jan 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Elara Vex</h6>
                                                <p class="mb-0 fs-11 text-muted">elaravex456@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$144.00</td>
                                        <td>Online Payment</td>
                                        <td> <span class="badge bg-success-subtle text-success">Shipped</span></td>
                                        <td>27 Jan 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4205</a>
                                        </th>
                                        <td>Jeens Shorty</td>
                                        <td>01 Feb 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Juno Wraith</h6>
                                                <p class="mb-0 fs-11 text-muted">junowraith654@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$97.00</td>
                                        <td>Cash On Delivery</td>
                                        <td> <span class="badge bg-danger-subtle text-danger">Cancelled</span></td>
                                        <td>09 Feb 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4206</a>
                                        </th>
                                        <td>Mens Shoes</td>
                                        <td>11 Feb 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Soren Thorne</h6>
                                                <p class="mb-0 fs-11 text-muted">sorenthorne951@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$123.00</td>
                                        <td>Cash On Delivery</td>
                                        <td> <span class="badge bg-danger-subtle text-danger">Cancelled</span></td>
                                        <td>15 Feb 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4207</a>
                                        </th>
                                        <td>Mens T-shirt</td>
                                        <td>14 Feb 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Lira Solace</h6>
                                                <p class="mb-0 fs-11 text-muted">lirasolace753@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$200.00</td>
                                        <td>Online Payment</td>
                                        <td> <span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>18 Feb 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4208</a>
                                        </th>
                                        <td>Mens T-shirt</td>
                                        <td>03 Mar 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Dax Zeno</h6>
                                                <p class="mb-0 fs-11 text-muted">daxzeno357@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$188.00</td>
                                        <td>Online Payment</td>
                                        <td> <span class="badge bg-success-subtle text-success">Shipped</span></td>
                                        <td>09 Mar 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4209</a>
                                        </th>
                                        <td>Pink Crop Top</td>
                                        <td>11 Mar 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-9.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Rhea Nyx</h6>
                                                <p class="mb-0 fs-11 text-muted">rheanyx159@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$176.00</td>
                                        <td>Online Payment</td>
                                        <td> <span class="badge bg-success-subtle text-success">Shipped</span></td>
                                        <td>14 Mar 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void(0)" class="fw-medium">#KI-4210</a>
                                        </th>
                                        <td>Purse Women's</td>
                                        <td>21 Mar 2025</td>
                                        <td class="d-flex align-items-center gap-3">
                                            <img src="assets/images/avatar/avatar-10.jpg" alt="Avatar Image"
                                                class="avatar-md rounded-pill">
                                            <div>
                                                <h6 class="mb-0 fw-medium fs-13">Varek Stryde</h6>
                                                <p class="mb-0 fs-11 text-muted">varekstryde137@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>$167.00</td>
                                        <td>Cash On Delivery</td>
                                        <td> <span class="badge bg-danger-subtle text-danger">Cancelled</span></td>
                                        <td>22 Mar 2025</td>
                                        <td>
                                            <div class="hstack gap-2">
                                                <button type="button" class="btn btn-light-success icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-primary icon-btn-sm"
                                                    data-bs-toggle="tooltip" data-bs-custom-class="tooltip-white"
                                                    data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-light-danger icon-btn-sm"
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
                        <div class="d-flex flex-wrap gap-3 align-items-center m-5">
                            <div class="fw-medium"> Showing 1 - 10 of 18 Entries</div>
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

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
