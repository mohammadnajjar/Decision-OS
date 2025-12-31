@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Project')
@section('pagetitle', 'Overview')
@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-md-4 col-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start pb-4 gap-4 border-bottom border-dashed">
                            <div class="flex-grow-1">
                                <h3>145</h3>
                                <h6 class="fw-medium mb-0">Total Task</h6>
                            </div>
                            <div
                                class="flex-shrink-0 h-50px w-50px bg-primary-subtle d-flex justify-content-center align-items-center rounded text-primary fs-4">
                                <i class="bi bi-list-check"></i>
                            </div>
                        </div>
                        <p class="fs-12 pt-4 mb-0 text-muted text-center">Projects this month <span class="text-success"><i
                                    class="bi bi-arrow-up"></i> +60%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start pb-4 gap-4 border-bottom border-dashed">
                            <div class="flex-grow-1">
                                <h3>96</h3>
                                <h6 class="fw-medium mb-0">Pending</h6>
                            </div>
                            <div
                                class="flex-shrink-0 h-50px w-50px bg-secondary-subtle d-flex justify-content-center align-items-center rounded text-secondary fs-4">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                        <p class="fs-12 pt-4 mb-0 text-muted text-center">Projects this month <span class="text-success"><i
                                    class="bi bi-arrow-up"></i> +55%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start pb-4 gap-4 border-bottom border-dashed">
                            <div class="flex-grow-1">
                                <h3>101</h3>
                                <h6 class="fw-medium mb-0">Completed</h6>
                            </div>
                            <div
                                class="flex-shrink-0 h-50px w-50px bg-success-subtle d-flex justify-content-center align-items-center rounded text-success fs-4">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                        <p class="fs-12 pt-4 mb-0 text-muted text-center">Projects this month <span class="text-success"><i
                                    class="bi bi-arrow-up"></i> +71%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start pb-4 gap-4 border-bottom border-dashed">
                            <div class="flex-grow-1">
                                <h3>60+</h3>
                                <h6 class="fw-medium mb-0">Team Members</h6>
                            </div>
                            <div
                                class="flex-shrink-0 h-50px w-50px bg-info-subtle d-flex justify-content-center align-items-center rounded text-info fs-4">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <p class="fs-12 pt-4 mb-0 text-muted text-center">Projects this month <span class="text-success"><i
                                    class="bi bi-arrow-up"></i> +87%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start pb-4 gap-4 border-bottom border-dashed">
                            <div class="flex-grow-1">
                                <h3>75</h3>
                                <h6 class="fw-medium mb-0">High Priority</h6>
                            </div>
                            <div
                                class="flex-shrink-0 h-50px w-50px bg-warning-subtle d-flex justify-content-center align-items-center rounded text-warning fs-4">
                                <i class="bi bi-flag"></i>
                            </div>
                        </div>
                        <p class="fs-12 pt-4 mb-0 text-muted text-center">Projects this month <span class="text-danger"><i
                                    class="bi bi-arrow-down"></i> -45%</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start pb-4 gap-4 border-bottom border-dashed">
                            <div class="flex-grow-1">
                                <h3>50</h3>
                                <h6 class="fw-medium mb-0">Medium Priority</h6>
                            </div>
                            <div
                                class="flex-shrink-0 h-50px w-50px bg-danger-subtle d-flex justify-content-center align-items-center rounded text-danger fs-4">
                                <i class="bi bi-exclamation-circle"></i>
                            </div>
                        </div>
                        <p class="fs-12 pt-4 mb-0 text-muted text-center">Projects this month <span class="text-success"><i
                                    class="bi bi-arrow-up"></i> +55%</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title">Projects Roadmap</h6>
                    </div>
                    <div class="card-body">
                        <div id="apex-line-chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">About Project</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-4 mb-8">
                            <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image" class="avatar-lg rounded">
                            <div class="flex-grow-1">
                                <h6 class="mb-2">Redesign Website User Interface</h6>
                                <p class="text-muted fs-12 mb-0">Creating a Seamless User Experience through Modern UI
                                    Design</p>
                            </div>
                            <div>
                                <span class="badge bg-warning-subtle text-warning">In Progress</span>
                            </div>
                        </div>
                        <h6>Project Details :</h6>
                        <p>Website User Interface Corporation’s website redesign aims to create a modern, user-friendly
                            interface that aligns with the company’s evolving brand identity. The project will enhance
                            usability, improve navigation, and ensure a seamless experience across both desktop and mobile
                            devices. Additionally, it will provide an easy-to-manage content system for internal
                            stakeholders.</p>
                        <ul class="list-group list-borderless">
                            <li class="list-group-item"> <span class="bullet me-2"></span>Redesign the website to align with
                                ABC Corporation’s updated brand identity.</li>
                            <li class="list-group-item"> <span class="bullet me-2"></span>Improve user navigation and
                                overall website usability for both desktop and mobile users.</li>
                            <li class="list-group-item"> <span class="bullet me-2"></span>Implement an intuitive content
                                management system for easy internal updates and maintenance.</li>
                        </ul>
                        <div class="row mt-8">
                            <div class="col-4">
                                <h6 class="fs-14">
                                    <i class="bi bi-calendar text-primary fs-12 me-1"></i>
                                    Start Date
                                </h6>
                                <p class="text-muted mb-0 fs-12">08 Jan, 2025</p>
                            </div>
                            <div class="col-4">
                                <h6 class="fs-14">
                                    <i class="bi bi-calendar text-primary fs-12 me-1"></i>
                                    Due Date
                                </h6>
                                <p class="text-muted mb-0 fs-12">15 Jan, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Team Members</h6>
                    </div>
                    <div class="card-body">
                        <table class="table align-middle">
                            <tbody>
                                <tr>
                                    <td class="w-50px"><img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                            class="avatar-md rounded"></td>
                                    <td>
                                        <h6 class="mb-0">Develop Mobile Application</h6>
                                    </td>
                                    <td>
                                        <span class="badge bg-info-subtle text-info">Frontend</span>
                                        <span class="badge bg-primary-subtle text-primary">UI</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50px"><img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                            class="avatar-md rounded"></td>
                                    <td>
                                        <h6 class="mb-0">Update Website Content</h6>
                                    </td>
                                    <td> <span class="badge bg-primary-subtle text-primary">UI/UX</span></td>
                                </tr>
                                <tr>
                                    <td class="w-50px"><img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                            class="avatar-md rounded"></td>
                                    <td>
                                        <h6 class="mb-0">Redesign Website User Interface</h6>
                                    </td>
                                    <td><span class="badge bg-info-subtle text-info">Backend</span></td>
                                </tr>
                                <tr>
                                    <td class="w-50px"><img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                            class="avatar-md rounded"></td>
                                    <td>
                                        <h6 class="mb-0">Create New Dashboard Design</h6>
                                    </td>
                                    <td>
                                        <span class="badge bg-info-subtle text-info">Frontend</span>
                                        <span class="badge bg-primary-subtle text-primary">UI</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50px"><img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                            class="avatar-md rounded"></td>
                                    <td>
                                        <h6 class="mb-0">Build Reporting Dashboard</h6>
                                    </td>
                                    <td><span class="badge bg-info-subtle text-info">Backend</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title">Attached Files</h6>
                    </div>
                    <div class="card-body">
                        <table class="table align-middle table-hover">
                            <tbody>
                                <tr>
                                    <td class="w-50px">
                                        <div
                                            class="h-50px w-50px rounded-pill bg-primary-subtle d-flex justify-content-center align-items-center text-primary">
                                            <i class="bi bi-file-earmark-arrow-down-fill fs-5"></i></div>
                                    </td>
                                    <td>
                                        <p class="fs-12 text-muted mb-1">Size : 3.25 MB</p>
                                        <h6 class="mb-0">Project_overview_1.zip</h6>
                                    </td>
                                    <td class="w-50px">
                                        <a href="javascript:void(0)"><i
                                                class="bi bi-box-arrow-down text-primary fs-4"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50px">
                                        <div
                                            class="h-50px w-50px rounded-pill bg-primary-subtle d-flex justify-content-center align-items-center text-primary">
                                            <i class="bi bi-file-earmark-arrow-down-fill fs-5"></i></div>
                                    </td>
                                    <td>
                                        <p class="fs-12 text-muted mb-1">Size : 2.36 MB</p>
                                        <h6 class="mb-0">Project_overview_2.zip</h6>
                                    </td>
                                    <td class="w-50px">
                                        <a href="javascript:void(0)"><i
                                                class="bi bi-box-arrow-down text-primary fs-4"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50px">
                                        <div
                                            class="h-50px w-50px rounded-pill bg-primary-subtle d-flex justify-content-center align-items-center text-primary">
                                            <i class="bi bi-file-earmark-arrow-down-fill fs-5"></i></div>
                                    </td>
                                    <td>
                                        <p class="fs-12 text-muted mb-1">Size : 3.00 MB</p>
                                        <h6 class="mb-0">Project_overview_3.zip</h6>
                                    </td>
                                    <td class="w-50px">
                                        <a href="javascript:void(0)"><i
                                                class="bi bi-box-arrow-down text-primary fs-4"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-50px">
                                        <div
                                            class="h-50px w-50px rounded-pill bg-primary-subtle d-flex justify-content-center align-items-center text-primary">
                                            <i class="bi bi-file-earmark-arrow-down-fill fs-5"></i></div>
                                    </td>
                                    <td>
                                        <p class="fs-12 text-muted mb-1">Size : 2.25 MB</p>
                                        <h6 class="mb-0">Project_overview_4.zip</h6>
                                    </td>
                                    <td class="w-50px">
                                        <a href="javascript:void(0)"><i
                                                class="bi bi-box-arrow-down text-primary fs-4"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h6 class="card-title">Tasks Overview</h6>
                    </div>
                    <div class="card-body">
                        <div id="task_overview_chart" class="apexcharts-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection

@section('js')

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/app/project-overview.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
