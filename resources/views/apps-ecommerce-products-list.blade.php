@extends('partials.layouts.master')

@section('title', 'Product List | FabKin Admin & Dashboards Template')

@section('css')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
@endsection

@section('title-sub', 'Eccomerce')
@section('pagetitle', 'Product List')

@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- start:: Basic Datatable -->
                        <table id="default_datatable" class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-01.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Crop Top</h6>
                                                <small class="text-muted">Cotton fabric </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$299</td>
                                    <td>61</td>
                                    <td>2024-04-25</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-02.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Watch</h6>
                                                <small class="text-muted">Stop Watch</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Watches</td>
                                    <td>$699</td>
                                    <td>79</td>
                                    <td>2024-04-25</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-03.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Jeens Shoes</h6>
                                                <small class="text-muted">Designer Mans Shoes</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$599</td>
                                    <td>489</td>
                                    <td>2024-08-19</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-04.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Pink Crop Top</h6>
                                                <small class="text-muted">Lycra fabric </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$499</td>
                                    <td>185</td>
                                    <td>2024-08-05</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-05.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Mens T-shirt</h6>
                                                <small class="text-muted">Cotton fabric </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$199</td>
                                    <td>265</td>
                                    <td>2024-10-30</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-06.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Black Bra</h6>
                                                <small class="text-muted">Cotton fabric </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$149</td>
                                    <td>465</td>
                                    <td>2024-11-01</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-07.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Girls Hill</h6>
                                                <small class="text-muted">Yellow 5 inches hill </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$489</td>
                                    <td>58</td>
                                    <td>2024-12-15</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-08.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Purse Women's</h6>
                                                <small class="text-muted">Red Womens Purcse </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$469</td>
                                    <td>256</td>
                                    <td>2024-12-01</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-09.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Mens T-shirt</h6>
                                                <small class="text-muted">Cotton fabric </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$498</td>
                                    <td>356</td>
                                    <td>2024-11-19</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-10.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Round Hat for Her</h6>
                                                <small class="text-muted">Womens Hat </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$329</td>
                                    <td>432</td>
                                    <td>2024-11-03</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-11.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Mens Shoes</h6>
                                                <small class="text-muted">Green Shoes </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$599</td>
                                    <td>728</td>
                                    <td>2024-11-22</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/images/product/img-12.png"
                                                class="avatar-lg border rounded-1 p-1" alt="Product Image">
                                            <div>
                                                <h6 class="mb-0">Jeens Shorty</h6>
                                                <small class="text-muted">Funky jeans for women </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion Wear</td>
                                    <td>$359</td>
                                    <td>476</td>
                                    <td>2024-12-12</td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a class="btn bg-primary-subtle text-primary btn-sm btn-primary-light"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <a class="btn bg-danger-subtle text-danger btn-sm btn-danger-light product-btn"
                                                href="javascript:void(0)" data-discover="true">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end:: Basic Datatable -->
                    </div>
                </div>
            </div>
        </div>

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="assets/js/table/datatable.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
