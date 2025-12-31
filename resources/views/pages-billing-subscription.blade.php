@extends('partials.layouts.master2')

@section('title', 'Billing & Subscription | FabKin Admin & Dashboards Template')
@section('title-sub', 'Pages')
@section('pagetitle', 'Billing & Subscription')

@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-1 flex-grow-1">Billing & Subscription</h5>
                <p class="text-muted mb-0">Manage your subscription, update billing information, and oversee your account's
                    payment settings.</p>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-12 col-xl-6">
                        <div class="p-5 border rounded">
                            <span class="badge bg-primary float-end">Popular</span>
                            <h5 class="fw-bold">Current Plan</h5>

                            <p class="mb-1 text-muted">Your Current Plan is <strong class="text-body">Premium</strong></p>
                            <p class="text-muted">Access to all premium features and priority support.</p>

                            <p class="mb-1 text-muted"><strong class="text-body">Active until March 15, 2025</strong></p>
                            <p class="text-muted">We will notify you before your subscription expires.</p>

                            <p class="mb-0 fw-bold fs-4">$29.99 Per Month
                            </p>

                            <p class="text-muted">Best plan for advanced analytics and dedicated support.</p>
                            <div class="mb-1 d-flex fw-medium justify-content-between">
                                <p class="mb-0">Days</p>
                                <p class="mb-0">24 of 30 Days</p>
                            </div>
                            <div class="progress progress-sm" role="progressbar" aria-label="Basic example"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secondary" style="width: 20%"></div>
                            </div>
                            <div class="d-flex justify-content-end gap-3 mt-3">
                                <button class="btn btn-text-light text-muted px-4">Cancel Subscription</button>
                                <button class="btn btn-light-primary px-4">Upgrade Plan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="p-5 border rounded">
                            <h5 class="card-title mb-5">Payment Method</h5>
                            <div class="d-flex align-items-start bg-light-subtle px-5 py-4 rounded-3 mb-5">
                                <div>
                                    <img src="assets/images/cards/img-02.png" alt="Card" class="h-40px">
                                    <p class="mb-1 text-muted mt-2"><strong>Visa **** 1234</strong></p>
                                    <p class="text-muted small mb-0">Expires 12/26</p>
                                </div>
                                <div class="ms-auto d-flex gap-2">
                                    <button class="btn btn-outline-secondary icon-btn-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger icon-btn-sm"><i class="bi bi-trash3"></i></button>
                                </div>
                            </div>
                            <div class="d-flex align-items-start bg-light-subtle px-5 py-4 rounded-3">
                                <div>
                                    <img src="assets/images/cards/img-01.png" alt="Card" class="h-40px">
                                    <p class="mb-1 text-muted mt-2"><strong>PayPal</strong></p>
                                    <p class="text-muted small mb-0">user@example.com</p>
                                </div>
                                <div class="ms-auto d-flex gap-2">
                                    <button class="btn btn-outline-secondary icon-btn-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger icon-btn-sm"><i class="bi bi-trash3"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center justify-content-end mb-5 gap-4">
                    <div class="subscription-card">
                        <div class="card border mb-0 overflow-hidden">
                            <div class="card-body">
                                <span class="badge bg-secondary-subtle text-secondary mb-2">Basic Plan</span>
                                <p class="text-body fw-normal fs-14 mb-5">Our most popular plan</p>
                                <h2 class="mb-0 text-secondary">$29.99 <small
                                        class="text-muted fs-13 fw-normal">/month</small></h2>
                                <button type="button" class="btn btn-light-secondary w-100 my-6">Current Plan</button>
                                <div class="bg-secondary-subtle pricing-layer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="subscription-card">
                        <div class="card border mb-0 border-primary ribbon right overflow-hidden">
                            <span class="text-center py-2 bg-primary text-white fw-semibold">
                                Popular Plan
                            </span>
                            <div class="card-body overflow-hidden">
                                <span class="badge bg-primary-subtle text-primary mb-2">Business Plan</span>
                                <p class="text-body fw-normal fs-14 mb-5">Best for growing teams.</p>
                                <h2 class="mb-0 text-primary">$39.99 <small
                                        class="text-muted fs-12 fw-normal">/month</small></h2>
                                <button type="button" class="btn btn-light-primary w-100 my-6">Upgrade Plan</button>
                                <div class="bg-primary-subtle pricing-layer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="subscription-card">
                        <div class="card border mb-0 overflow-hidden">
                            <div class="card-body">
                                <span class="badge bg-info-subtle text-info mb-2">Enterprise Plan</span>
                                <p class="text-body fw-normal fs-14 mb-5">Best for large teams.</p>
                                <h2 class="mb-0 text-info">$45.00 <small class="fs-13 text-muted fw-medium">/month</small>
                                </h2>
                                <button type="button" class="btn btn-light-info w-100 my-6">Growth Plan</button>
                                <div class="bg-info-subtle pricing-layer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-box table-responsive px-5 mx-n5" data-simplebar style="height: 400px;">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>Descriion</th>
                                <th>Basic</th>
                                <th>Popular</th>
                                <th>Enterprise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Users</td>
                                <td>1-3 Users</td>
                                <td>5-50 Users</td>
                                <td>50+ Users</td>
                            </tr>
                            <tr>
                                <td>Storage</td>
                                <td>10GB</td>
                                <td>100GB</td>
                                <td>1TB+</td>
                            </tr>
                            <tr>
                                <td>Email Support</td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Priority Email Support</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>24/7 Dedicated Support</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Basic Features</td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Advanced Features</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Full Customization</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>API Access</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Analytics & Reporting</td>
                                <td>Basic</td>
                                <td>Advanced</td>
                                <td>Advanced</td>
                            </tr>
                            <tr>
                                <td>Data Backup</td>
                                <td>Weekly</td>
                                <td>Daily</td>
                                <td>Real-Time</td>
                            </tr>
                            <tr>
                                <td>Integrations</td>
                                <td>Limited</td>
                                <td>Multiple</td>
                                <td>Unlimited</td>
                            </tr>
                            <tr>
                                <td>Custom Branding</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Multi-Device Support</td>
                                <td>1 Device</td>
                                <td>Up to 5 Devices</td>
                                <td>Unlimited Devices</td>
                            </tr>
                            <tr>
                                <td>Onboarding</td>
                                <td>Self-guided</td>
                                <td>Guided</td>
                                <td>Dedicated Team</td>
                            </tr>
                            <tr>
                                <td>Priority Features</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Usage Alerts</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Content Delivery Network</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Training & Webinars</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td>Monthly</td>
                                <td>Exclusive</td>
                            </tr>
                            <tr>
                                <td>Performance Monitoring</td>
                                <td><i class="bi bi-x-lg text-danger"></i></td>
                                <td><i class="bi bi-check2-circle text-success"></i></td>
                                <td>Advanced</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <button type="button" class="btn btn-light-dark">Get Started</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary">Get Started</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-dark">Get Started</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-wrap gap-4">
                    <div>
                        <h5 class="card-title mb-0 flex-grow-1">Billing History</h5>
                    </div>
                    <div class="ms-auto">
                        <div class="d-flex flex-wrap gap-3">
                            <div class="form-icon flex-shrink-0">
                                <input type="email" class="form-control form-control-icon" id="inputExample26"
                                    placeholder="Search for ...">
                                <i class="bi bi-search"></i>
                            </div>
                            <button class="btn btn-light-success"><i class="bi bi-funnel me-1"></i> Filter</button>
                            <button class="btn btn-light-info"><i class="bi bi-funnel me-1"></i> Export</button>
                        </div>
                    </div>
                </div><!--End row-->
            </div>
            <div class="card-body p-0">
                <div class="table-box table-responsive">
                    <table class="table align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">Purchase ID</th>
                                <th scope="col">Plan Name</th>
                                <th scope="col">Amounts</th>
                                <th scope="col">Purchase Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FK-1001</td>
                                <td>Starter Plan</td>
                                <td>$29.99</td>
                                <td>2024-01-01</td>
                                <td>2024-12-31</td>
                                <td><span class="badge text-success bg-success-subtle">Active</span></td>
                                <td>
                                    <button class="btn btn-text-primary btn-sm"><i class="bi bi-download"></i>
                                        Download</button>
                                    <button class="btn btn-text-body btn-sm"><i class="bi bi-eye"></i> View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>FK-1002</td>
                                <td>Growth Plan</td>
                                <td>$39.99</td>
                                <td>2024-06-15</td>
                                <td>2025-06-15</td>
                                <td><span class="badge text-success bg-success-subtle">Active</span></td>
                                <td>
                                    <button class="btn btn-text-primary btn-sm"><i class="bi bi-download"></i>
                                        Download</button>
                                    <button class="btn btn-text-body btn-sm"><i class="bi bi-eye"></i> View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>FK-1003</td>
                                <td>Growth Plan</td>
                                <td>$39.99</td>
                                <td>2023-08-01</td>
                                <td>2024-08-01</td>
                                <td><span class="badge text-danger bg-danger-subtle">Expired</span></td>
                                <td>
                                    <button class="btn btn-text-primary btn-sm"><i class="bi bi-download"></i>
                                        Download</button>
                                    <button class="btn btn-text-body btn-sm"><i class="bi bi-eye"></i> View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>FK-1004</td>
                                <td>Enterprise Plan</td>
                                <td>$499</td>
                                <td>2024-02-01</td>
                                <td>2025-02-01</td>
                                <td><span class="badge text-success bg-success-subtle">Active</span></td>
                                <td>
                                    <button class="btn btn-text-primary btn-sm"><i class="bi bi-download"></i>
                                        Download</button>
                                    <button class="btn btn-text-body btn-sm"><i class="bi bi-eye"></i> View</button>
                                </td>
                            </tr>
                            <tr>
                                <td>FK-1005</td>
                                <td>Enterprise Plan</td>
                                <td>$799</td>
                                <td>2023-05-20</td>
                                <td>2024-05-20</td>
                                <td><span class="badge text-danger bg-danger-subtle">Expired</span></td>
                                <td>
                                    <button class="btn btn-text-primary btn-sm"><i class="bi bi-download"></i>
                                        Download</button>
                                    <button class="btn btn-text-body btn-sm"><i class="bi bi-eye"></i> View</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center g-4 p-5">
                    <div class="col-lg-6">
                        <p class="text-muted mb-0">Showing <b>1</b> - <b>5</b> of <b>18</b> Results</p>
                    </div><!--End col-->
                    <div class="col-lg-6">
                        <!-- Pagination -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary justify-content-end mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="ri-arrow-left-s-line fw-semibold"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="ri-arrow-right-s-line fw-semibold"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!--End col-->
                </div><!--End row-->
            </div>
        </div>

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
