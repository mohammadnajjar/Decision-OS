@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'CMS')
@section('pagetitle', 'Content')
@section('css')
    <!-- Picker css -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
    <!-- Choices css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection

@section('content')
    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="accordion accordion-icon accordion-primary accordion-border-box" id="demo_accordion_main_03">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#demo_accordion_item_31" aria-expanded="true"
                                aria-controls="demo_accordion_item_31">
                                <i class="bi bi-funnel-fill me-2"></i> Filter
                            </button>
                        </h2>
                        <div id="demo_accordion_item_31" class="accordion-collapse collapse show"
                            data-bs-parent="#demo_accordion_main_03">
                            <div class="accordion-body py-5">
                                <div class="row g-4">
                                    <div class="col-md-4 col-xl">
                                        <input type="text" class="form-control form-control-icon" id="Name"
                                            placeholder="Enter Name">
                                    </div>
                                    <div class="col-md-4 col-xl">
                                        <select id="status-choice" class="form-select">
                                            <option value="javascript">Published</option>
                                            <option value="python">Draft</option>
                                            <option value="java">Trash</option>
                                            <option value="csharp">Private</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-xl">
                                        <input type="text" class="form-control" id="human-friendly-picker"
                                            placeholder="Select a date">
                                    </div>
                                    <div class="col-xl d-flex justify-content-end align-items-center gap-2">
                                        <button class="btn btn-light-primary" type="button"><i
                                                class="ri-equalizer-line me-2"></i>Add Filter</button>
                                        <button class="btn btn-light-danger" type="button">Remove Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">Content List</h6>
                        <a href="apps-cms-add-content" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add
                            Content</a>
                    </div>
                    <div class="card-body">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Visibility</th>
                                        <th scope="col">Modified</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>About</td>
                                        <td><span class="badge bg-light text-muted">Published</span></td>
                                        <td><span class="badge bg-success-subtle text-success">Publish</span></td>
                                        <td>01 Jan 2025</td>
                                        <td class="text-muted">06 Feb 2025, 10:56AM</td>
                                        <td class="text-muted">01 Jan 2025, 10:56AM</td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Contact</td>
                                        <td><span class="badge bg-light text-muted">Draft</span></td>
                                        <td><span class="badge bg-warning-subtle text-warning">Private</span></td>
                                        <td>15 Jan 2025</td>
                                        <td class="text-muted">10 Feb 2025, 02:30PM</td>
                                        <td class="text-muted">15 Jan 2025, 09:15AM</td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Privacy Policy</td>
                                        <td><span class="badge bg-light text-muted">Published</span></td>
                                        <td><span class="badge bg-success-subtle text-success">Public</span></td>
                                        <td>20 Jan 2025</td>
                                        <td class="text-muted">11 Feb 2025, 11:45AM</td>
                                        <td class="text-muted">20 Jan 2025, 08:00AM</td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Terms & Conditions</td>
                                        <td><span class="badge bg-light text-muted">Under Review</span></td>
                                        <td><span class="badge bg-danger-subtle text-danger">Hidden</span></td>
                                        <td>05 Feb 2025</td>
                                        <td class="text-muted">12 Feb 2025, 04:20PM</td>
                                        <td class="text-muted">05 Feb 2025, 02:10PM</td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>FAQ</td>
                                        <td><span class="badge bg-light text-muted">Published</span></td>
                                        <td><span class="badge bg-success-subtle text-success">Public</span></td>
                                        <td>10 Feb 2025</td>
                                        <td class="text-muted">15 Feb 2025, 01:20PM</td>
                                        <td class="text-muted">10 Feb 2025, 11:45AM</td>
                                        <td>
                                            <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                                    class="ri-delete-bin-line"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Blog</td>
                                        <td><span class="badge bg-light text-muted">Draft</span></td>
                                        <td><span class="badge bg-warning-subtle text-warning">Private</span></td>
                                        <td>15 Feb 2025</td>
                                        <td class="text-muted">16 Feb 2025, 09:00AM</td>
                                        <td class="text-muted">15 Feb 2025, 05:30PM</td>
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
                        <div class="d-flex flex-wrap align-items-center mt-5 gap-3">
                            <div class="fw-medium"> Showing 1 - 6 of 6 Entries </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-primary mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="ri-arrow-left-s-line fw-semibold"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
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
    <!-- Submit Section -->
    </main>
@endsection

@section('js')

    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- File js -->
    <script src="assets/js/app/academy-cms-content.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
