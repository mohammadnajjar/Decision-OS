@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'Project')
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
                    <div class="card-header d-flex">
                        <div class="col-md-4 col-xl-3 col-xxl-2 me-2">
                            <select id="status-choice">
                                <option value="javascript">On Hold</option>
                                <option value="python">Completed</option>
                                <option value="java">In Progress</option>
                                <option value="csharp">Pending</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-3 col-xxl-2">
                            <select id="priority-choice">
                                <option value="javascript">High</option>
                                <option value="python">Medium</option>
                                <option value="java">Low</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-6 col-xxl-8 text-end">
                            <a href="apps-project-create">
                                <button class="btn btn-primary"><i class="bi bi-plus-circle-dotted me-2"></i>Add
                                    Project</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-box table-responsive">
                            <table class="table text-nowrap align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Project</th>
                                        <th scope="col">Members</th>
                                        <th scope="col">Completion</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Budget</th>
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
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 07 Mar 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-1.jpg"
                                                        alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-2.jpg"
                                                        alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-3.jpg"
                                                        alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-4.jpg"
                                                        alt="avatar image">
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
                                        <td>$150.00</td>
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
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 15 Feb 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-5.jpg"
                                                        alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-6.jpg"
                                                        alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm" src="assets/images/avatar/avatar-7.jpg"
                                                        alt="avatar image">
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
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>$300.00</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Medium</span></td>
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
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 01 Mar 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-8.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-10.jpg" alt="avatar image">
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
                                        <td>$500.00</td>
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
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 10 Jan 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-8.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item avatar-sm fw-semibold avatar-title bg-primary">
                                                    3+
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
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>$120.00</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Medium</span></td>
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
                                                        <h6 class="mb-1">Improve Search Engine Optimization (SEO)</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 25 Feb 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fs-12 fw-semibold">10%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="10"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 10%"></div>
                                            </div>
                                        </td>
                                        <td>31 Dec 2024</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>$350.00</td>
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
                                                        value="CustomflexCheck06" id="CustomflexCheck06">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck06">
                                                        <h6 class="mb-1">Redesign Website User Interface</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 20 Mar 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-10.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fs-12 fw-semibold">65%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 65%"></div>
                                            </div>
                                        </td>
                                        <td>01 Dec 2024</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>$200.00</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Medium</span></td>
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
                                                        value="CustomflexCheck07" id="CustomflexCheck07">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck06">
                                                        <h6 class="mb-1">Redesign Website User Interface</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 20 Mar 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fs-12 fw-semibold">65%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 65%"></div>
                                            </div>
                                        </td>
                                        <td>01 Dec 2024</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                        <td>$200.00</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Medium</span></td>
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
                                                        value="CustomflexCheck08" id="CustomflexCheck08">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck07">
                                                        <h6 class="mb-1">Create New Dashboard Design</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 15 Apr 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-10.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-2.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-7.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item avatar-sm fw-semibold avatar-title bg-primary">
                                                    4+
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fs-12 fw-semibold">30%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="30"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td>30 Sep 2024</td>
                                        <td><span class="badge bg-info-subtle text-info">In Progress</span></td>
                                        <td>$400.00</td>
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
                                                        value="CustomflexCheck09" id="CustomflexCheck09">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck08">
                                                        <h6 class="mb-1">Implement Analytics System</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 10 Feb 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-7.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-8.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-4.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-6.jpg" alt="avatar image">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fs-12 fw-semibold">90%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td>15 Nov 2024</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>$500.00</td>
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
                                                        value="CustomflexCheck10" id="CustomflexCheck10">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck09">
                                                        <h6 class="mb-1">Cloud Infrastructure Migration</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 01 Apr 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-1.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-10.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-3.jpg" alt="avatar image">
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
                                        <td>01 Jul 2024</td>
                                        <td><span class="badge bg-info-subtle text-info">In Progress</span></td>
                                        <td>$550.00</td>
                                        <td><span class="badge bg-warning-subtle text-warning">Medium</span></td>
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
                                                        value="CustomflexCheck11" id="CustomflexCheck11">
                                                    <label class="form-check-label ms-3" for="CustomflexCheck10">
                                                        <h6 class="mb-1">Build Reporting Dashboard</h6>
                                                        <p class="mb-0 fs-12 text-muted">Assigned - 05 Jun 2024</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-9.jpg" alt="avatar image">
                                                </div>
                                                <div class="avatar-item">
                                                    <img class="img-fluid avatar-sm"
                                                        src="assets/images/avatar/avatar-5.jpg" alt="avatar image">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="fs-12 fw-semibold">80%</span>
                                            <div class="progress progress-xs" role="progressbar" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 80%"></div>
                                            </div>
                                        </td>
                                        <td>30 Aug 2024</td>
                                        <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                        <td>$600.00</td>
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
                        <div class="d-flex flex-wrap align-items-center gap-4 m-5">
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
    </div>
    </main>
@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script src="assets/js/app/project-list.init.js"></script>
@endsection
