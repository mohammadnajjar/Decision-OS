@extends('partials.layouts.master')

@section('title', 'Blog Details | FabKin Admin & Dashboards Template')

@section('title-sub', 'Pages')
@section('pagetitle', 'Pricing')
@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="row gy-8 mb-5">
            <div class="col-12">
                <div class="text-center mb-10">
                    <h4 class="mb-2">Pricing Plan 1</h4>
                    <p class="text-muted">Plans that seamlessly adjust to your changing you always have the flexibility you
                        need.</p>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-12 col-xl-4 col-xxl-3">
                        <div class="card border mb-0 overflow-hidden">
                            <div class="card-body">
                                <span class="badge bg-secondary-subtle text-secondary mb-6">Starter Plan</span>
                                <h2 class="mb-0 text-secondary">$29.99 <small
                                        class="text-muted fs-13 fw-normal">/month</small></h2>
                                <span class="text-body fw-normal fs-14"><span
                                        class="text-secondary me-2 fw-semibold">+10/</span>Person Per month</span>
                                <button type="button" class="btn btn-light-secondary w-100 my-6">Current Plan</button>
                                <div class="bg-secondary-subtle pricing-layer"></div>
                                <ul class="d-flex flex-column gap-3 list-unstyled mb-8 text-body">
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Designed for individuals and small teams</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Access to essential features with limited usage.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Includes up to 1-2 users on the account.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Limited storage and bandwidth included.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Email support during business hours.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Basic integrations with key tools.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Free updates for core features.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--End col-->
                    <div class="col-12 col-xl-4 col-xxl-3">
                        <div class="card border mb-0 ribbon right overflow-hidden">
                            <span class="ribbon1 ribbon-primary">
                                Popular Plan
                            </span>
                            <div class="card-body overflow-hidden">
                                <span class="badge bg-primary-subtle text-primary mb-6">Upgrade Plan</span>
                                <h2 class="mb-0 text-primary">$39.99 <small
                                        class="text-muted fs-12 fw-normal">/month</small></h2>
                                <span class="text-body fw-normal fs-14"><span
                                        class="text-primary me-2 fw-semibold">+15/</span>Person Per month</span>
                                <button type="button" class="btn btn-light-primary w-100 my-6">Upgrade Plan</button>
                                <ul class="d-flex flex-column gap-3 list-unstyled mb-8 text-body">
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Perfect for expanding teams and businesses.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Includes all features from the Starter Plan plus advanced tools.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Supports up to 10 users with scalable access.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Increased storage and bandwidth for growing needs.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Priority email and chat support with faster response times.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Access to premium integrations with popular platforms.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>30-day free trial to explore the plan’s benefits.</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bg-primary-subtle pricing-layer"></div>
                            </div>
                        </div>
                    </div><!--End col-->
                    <div class="col-12 col-xl-4 col-xxl-3">
                        <div class="card border mb-0 overflow-hidden">
                            <div class="card-body">
                                <span class="badge bg-info-subtle text-info mb-6">Growth Plan</span>
                                <h2 class="mb-0 text-info">$45.00 <small class="fs-13 text-muted fw-medium">/month</small>
                                </h2>
                                <span class="text-body fw-normal fs-14"><span
                                        class="text-info me-2 fw-semibold">+20/</span>Person Per month</span>
                                <button type="button" class="btn btn-light-info w-100 my-6">Growth Plan</button>
                                <div class="bg-info-subtle pricing-layer"></div>
                                <ul class="d-flex flex-column gap-3 list-unstyled mb-8 text-body">
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Tailored for large organizations with complex needs.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Customizable features and advanced security options.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Supports unlimited users with scalable access.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Dedicated account manager and 24/7 priority support.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>High storage and bandwidth capacity for enterprise-level usage.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Custom onboarding and training for teams.</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-check-all text-primary fs-16"></i>
                                            <span>Flexible pricing based on usage and requirements.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--End col-->
                </div><!--End col-->
            </div>
            <div class="col-12">
                <div class="text-center mb-10">
                    <h4 class="mb-2">Pricing Plan 2</h4>
                    <p class="text-muted">Plans that seamlessly adjust to your changing you always have the flexibility you
                        need.</p>
                </div>
                <div class="row justify-content-center align-items-end g-4">
                    <div class="col-12 col-xl-4 col-xxl-3">
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
                    </div><!--End col-->
                    <div class="col-12 col-xl-4 col-xxl-3">
                        <div class="card border mb-0 border-primary ribbon right overflow-hidden">
                            <span class="text-center py-3 bg-primary text-white fw-semibold">
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
                    </div><!--End col-->
                    <div class="col-12 col-xl-4 col-xxl-3">
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
                    </div><!--End col-->
                </div><!--End col-->
            </div>
        </div>
    </div>
    </main>

@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
