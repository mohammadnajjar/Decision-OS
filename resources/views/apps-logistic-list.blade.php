@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Logistics')
@section('pagetitle', 'List')

@section('css')
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection

@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-wrap gap-3 justify-content-between align-items-center">
                        <h6 class="card-title">Tracking List</h6>

                        <!-- Search Bar -->
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <div class="form-icon">
                                <input type="text" class="form-control form-control-icon" id="firstNameLayout4"
                                    placeholder="Search Here ..." required>
                                <i class="ri-search-2-line text-muted"></i>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-primary" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Status
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">All</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">In Transit</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Delivered</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Pending</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="mainflexCheckDefault"
                                                    id="mainflexCheckDefault">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Sender</th>
                                        <th>Recipient</th>
                                        <th>Status</th>
                                        <th>Tracking Number</th>
                                        <th>Quantity</th>
                                        <th>Location</th>
                                        <th>Driver</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault"
                                                    id="flexCheckDefault">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1001</a></td>
                                        <td>John Doe</td>
                                        <td>Alice Smith</td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">In
                                                Transit</span></td>
                                        <td>179230150</td>
                                        <td>150</td>
                                        <td>Warehouse A</td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault1"
                                                    id="flexCheckDefault1">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1002</a></td>
                                        <td>Maria Lee</td>
                                        <td>Tom Brown</td>
                                        <td><span class="badge bg-success-subtle text-success">Delivered</span>
                                        </td>
                                        <td>179230151</td>
                                        <td>20</td>
                                        <td>Warehouse B</td>
                                        <td>Maria Lee</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault2"
                                                    id="flexCheckDefault2">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1003</a></td>
                                        <td>Greg Turner</td>
                                        <td>Sarah Davis</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span>
                                        </td>
                                        <td>179230152</td>
                                        <td>10</td>
                                        <td>Warehouse C</td>
                                        <td>Mark White</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault3"
                                                    id="flexCheckDefault3">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1004</a></td>
                                        <td>Lucy Scott</td>
                                        <td>Mike Green</td>
                                        <td><span class="badge bg-info-subtle text-info">Delayed</span></td>
                                        <td>179230153</td>
                                        <td>100</td>
                                        <td>Warehouse D</td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault4"
                                                    id="flexCheckDefault4">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1005</a></td>
                                        <td>Sam Harris</td>
                                        <td>Emma White</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Canceled</span>
                                        </td>
                                        <td>179230154</td>
                                        <td>5</td>
                                        <td>Warehouse E</td>
                                        <td>Sarah Green</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault5"
                                                    id="flexCheckDefault5">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1006</a></td>
                                        <td>Tom Wilson</td>
                                        <td>Sarah Smith</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span>
                                        </td>
                                        <td>179230155</td>
                                        <td>30</td>
                                        <td>Warehouse F</td>
                                        <td>Mark White</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault6"
                                                    id="flexCheckDefault6">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1007</a></td>
                                        <td>James Black</td>
                                        <td>Linda Green</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span>
                                        </td>
                                        <td>179230156</td>
                                        <td>80</td>
                                        <td>Warehouse G</td>
                                        <td>Sarah Green</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault7"
                                                    id="flexCheckDefault7">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1008</a></td>
                                        <td>Kelly Blue</td>
                                        <td>Anna White</td>
                                        <td><span class="badge bg-success-subtle text-success">Delivered</span>
                                        </td>
                                        <td>179230157</td>
                                        <td>45</td>
                                        <td>Warehouse H</td>
                                        <td>Mark White</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault8"
                                                    id="flexCheckDefault8">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1009</a></td>
                                        <td>Olivia Stone</td>
                                        <td>Daniel King</td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">In
                                                Transit</span></td>
                                        <td>179230158</td>
                                        <td>60</td>
                                        <td>Warehouse I</td>
                                        <td>John Doe</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="flexCheckDefault9"
                                                    id="flexCheckDefault9">
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0)">#INV1010</a></td>
                                        <td>Charlie Brown</td>
                                        <td>Grace Lee</td>
                                        <td><span class="badge bg-secondary-subtle text-secondary">In
                                                Transit</span></td>
                                        <td>179230159</td>
                                        <td>40</td>
                                        <td>Warehouse J</td>
                                        <td>Sarah Green</td>
                                        <td>
                                            <div class="dropdown dropdown-menu-end">
                                                <button class="btn p-0" type="button" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">View</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Track</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap gap-3 align-items-center m-5">
                            <div class="fw-medium"> Showing 1 - 10 of 3 Entries</div>
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
    </div>
    </main>
@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="assets/js/app/project-list.init.js"></script>

@endsection
