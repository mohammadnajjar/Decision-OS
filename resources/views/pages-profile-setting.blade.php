@extends('partials.layouts.master')

@section('title', 'Pages | FabKin Admin & Dashboards Template')

@section('title-sub', 'Pages')
@section('pagetitle', 'Profile')
@section('css')
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection

@section('content')

    <div id="layout-wrapper">


        <div class="card overflow-hidden">
            <div class="card-body h-176px"
                style="background-image: url('assets/images/background.png');background-repeat: no-repeat;background-position: right;">
            </div>
            <div class="mt-2">
                <div class="card-body p-5">
                    <div class="d-flex float-end gap-2 flex-shrink-0">
                        <button type="button" class="btn btn-light-dark">Hire me</button>
                        <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Follow</button>
                    </div>
                    <div class="d-flex flex-wrap align-items-start gap-5">
                        <div class="mt-n12 flex-shrink-0">
                            <div class="position-relative d-inline-block">
                                <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                    class="h-128px w-128px border border-4 border-white shadow-lg">
                                <span class="position-absolute profile-dot bg-success rounded-circle">
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="mb-5">
                                <h5 class="mb-1">Sophia Bethany <i
                                        class="bi bi-patch-check-fill fs-16 ms-1 text-info"></i></h5>
                                <p class="text-muted fs-12 mb-0">Fashion &amp; Graphic Designer</p>
                            </div>
                            <div class="w-50 border-dashed border border-1">
                                <div class="p-4 d-flex">
                                    <div
                                        class="d-flex flex-column justify-content-center gap-1 w-208px text-center border-end border-dark border-opacity-20">
                                        <h5 class="mb-0 lh-1">102</h5>
                                        <span class="text-muted lh-sm fs-12">Post</span>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center gap-1 w-208px text-center border-end border-dark border-opacity-20">
                                        <h5 class="mb-0 lh-1">951</h5>
                                        <span class="text-muted lh-sm fs-12">Like</span>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center gap-1 w-208px text-center">
                                        <h5 class="mb-0 lh-1">3.2k</h5>
                                        <span class="text-muted lh-sm fs-12">Subcribers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-5 mt-2">
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-map fs-16"></i>
                                        <p class="text-muted mb-2">Location</p>
                                    </div>
                                    <h6 class="mb-0">Los Angeles, California</h6>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-mailbox fs-16"></i>
                                        <p class="text-muted mb-2">Email</p>
                                    </div>
                                    <h6 class="mb-0">kenneth@example.com</h6>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-telephone fs-16"></i>
                                        <p class="text-muted mb-2">Phone No</p>
                                    </div>
                                    <h6 class="mb-0">+(254) 956 784 4546</h6>
                                </div>
                                <div class="col-md-4 col-xl-3">
                                    <div class="d-flex gap-2">
                                        <i class="bi bi-globe-central-south-asia fs-16"></i>
                                        <p class="text-muted mb-2">Website</p>
                                    </div>
                                    <h6 class="mb-0">www.example.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-6">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="information-tab" data-bs-toggle="tab"
                                data-bs-target="#information-tab-pane" type="button" role="tab"
                                aria-controls="information-tab-pane" aria-selected="true">Information</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                        aria-labelledby="profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col-12 col-xl-3">
                                <div class="card">
                                    <div class="card-header align-items-center">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-action-title mb-0">Work</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-6">
                                            <div class="d-flex justify-content-between mb-1">
                                                <h6 class="mb-0">Spotify New york</h6>
                                                <div class="badge bg-primary-subtle text-primary">Primary</div>
                                            </div>
                                            <p class="text-muted fs-12">825 Romano Street Cambridge, MA 02141</p>
                                        </div>
                                        <div>
                                            <div class="d-flex justify-content-between mb-1">
                                                <h6 class="mb-0">Metropolitan Museum</h6>
                                                <div class="badge bg-primary-subtle text-primary">Primary</div>
                                            </div>
                                            <p class="text-muted mb-0 fs-12">2587 Bubby Drive Austin, TX 78749</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header align-items-center">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-action-title mb-0">Skills</h5>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-wrap gap-3">
                                        <span class="badge bg-secondary-subtle text-secondary">Branding <a
                                                href="javascript:void(0)"><i
                                                    class="bi bi-x ms-1 link link-danger text-secondary fs-12"></i></a></span>
                                        <span class="badge bg-secondary-subtle text-secondary">Designer <a
                                                href="javascript:void(0)"><i
                                                    class="bi bi-x ms-1 link link-danger text-secondary fs-12"></i></a></span>
                                        <span class="badge bg-secondary-subtle text-secondary">Designning <a
                                                href="javascript:void(0)"><i
                                                    class="bi bi-x ms-1 link link-danger text-secondary fs-12"></i></a></span>
                                        <span class="badge bg-secondary-subtle text-secondary">figma <a
                                                href="javascript:void(0)"><i
                                                    class="bi bi-x ms-1 link link-danger text-secondary fs-12"></i></a></span>
                                        <span class="badge bg-secondary-subtle text-secondary">UI UX <a
                                                href="javascript:void(0)"><i
                                                    class="bi bi-x ms-1 link link-danger text-secondary fs-12"></i></a></span>
                                        <span class="badge bg-secondary-subtle text-secondary">sketch <a
                                                href="javascript:void(0)"><i
                                                    class="bi bi-x ms-1 link link-danger text-secondary fs-12"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header align-items-center">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-action-title mb-0">About</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fs-16 mb-5">Contact Information</h6>
                                        <div class="mb-8">
                                            <div class="row my-3">
                                                <div class="col-3">
                                                    <label for="firstNameLayout1" class="mb-2 mb-lg-0 text-muted">Full
                                                        Name:</label>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0 fw-medium">Ralph Nolette</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="firstNameLayout2" class="mb-2 mb-lg-0 text-muted">Phone
                                                        No:</label>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0 fw-medium">+1 987 7897 65445</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="firstNameLayout3" class="mb-2 mb-lg-0 text-muted">Address:
                                                    </label>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0 fw-medium">2449 Prospect Valley Road Redondo Beach, CA
                                                        90278</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="firstNameLayout4" class="mb-2 mb-lg-0 text-muted">Email:
                                                    </label>
                                                </div>
                                                <div class="col-9">
                                                    <a href="javascript:void(0)"
                                                        class="link link-primary fw-medium text-body">Example@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="firstNameLayout5" class="mb-2 mb-lg-0 text-muted">Website:
                                                    </label>
                                                </div>
                                                <div class="col-9">
                                                    <a href="javascript:void(0)"
                                                        class="link link-primary text-body fw-medium">www.example.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="fs-16 mb-5">Basic Information</h6>
                                        <div>
                                            <div class="row my-3">
                                                <div class="col-3">
                                                    <label for="firstNameLayout6"
                                                        class="mb-2 mb-lg-0 text-muted">BirthDay:</label>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0 fw-medium">April 15, 1999</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="firstNameLayout7"
                                                        class="mb-2 mb-lg-0 text-muted">Gender:</label>
                                                </div>
                                                <div class="col-9">
                                                    <p class="mb-0 fw-medium">Male</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-5">
                                <div class="card">
                                    <div class="card-header align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="card-action-title mb-0">Job experience</h5>
                                            <a href="javascript:void(0)"
                                                class="btn-link link-primary accordion text-body fs-13"><i
                                                    class="bi bi-plus"></i>Add More</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="timeline2">
                                            <ul>
                                                <li class="card border-0 box">
                                                    <span></span>
                                                    <div class="title">Graphic Designer</div>
                                                    <div class="sub-title">Figma</div>
                                                    <div class="info">There are many variations of passages of Lorem
                                                        Ipsum available, but the majority have suffered alteration in some
                                                        form, by injected humour</div>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="text-muted fs-13"><i
                                                                class="ri ri-time-fill me-1"></i>Jan 2020 - 2022</span>
                                                        <span class="text-muted fs-13"><i
                                                                class="ri ri-mac-fill me-1"></i>Canada, USA</span>
                                                    </div>
                                                </li>
                                                <li class="card border-0 box">
                                                    <span></span>
                                                    <div class="title">UI/UX Designer</div>
                                                    <div class="sub-title">Figma</div>
                                                    <div class="info">Available the majority have suffered alteration in
                                                        some form, by injected humour</div>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="text-muted fs-13"><i
                                                                class="ri ri-time-fill me-1"></i>Jan 2022 - 2023</span>
                                                        <span class="text-muted fs-13"><i
                                                                class="ri ri-mac-fill me-1"></i>Canada, USA</span>
                                                    </div>
                                                </li>
                                                <li class="card border-0 box">
                                                    <span></span>
                                                    <div class="title">FrontEnd Designer</div>
                                                    <div class="sub-title">Bootstrap</div>
                                                    <div class="info">Many variations of passages of Lorem Ipsum
                                                        available, but the majority have suffered alteration in some form,
                                                        by injected humour</div>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="text-muted fs-13"><i
                                                                class="ri ri-time-fill me-1"></i>Jan 2024 - 2025</span>
                                                        <span class="text-muted fs-13"><i
                                                                class="ri ri-mac-fill me-1"></i>Canada, USA</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="information-tab-pane" role="tabpanel"
                        aria-labelledby="information-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body p-6">
                                <form action="#" method="POST" class="py-4">
                                    <div class="row g-5">
                                        <div class="col-lg-4">
                                            <div class="tab-pane fade show active" id="html-label-input-required"
                                                role="tabpanel" aria-labelledby="html-label-input-required-tab"
                                                tabindex="0">
                                                <label for="labelInputRequired" class="form-label">Name<span
                                                        class="text-danger ms-1">*</span></label>
                                                <input type="text" placeholder="Enter Your Name" class="form-control"
                                                    id="labelInputRequired" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="inputExample26" class="form-label">Email<span
                                                    class="text-danger ms-1">*</span></label>
                                            <div class="form-icon">
                                                <input type="email" class="form-control" id="inputExample26"
                                                    placeholder="example@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label" for="contact-number">Contact Number</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-secondary-200"
                                                    id="basic-addon1">+91</span>
                                                <input type="text" class="form-control" id="contact-number"
                                                    name="contact-number" placeholder="123-456-7890">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label" for="simple-date">Select Date:</label>
                                            <input type="text" class="form-control" id="simple-date"
                                                name="simple-date" placeholder="MM/DD/YYYY">
                                            <small class="text-muted">Example: 10/31/2024</small>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="validationCustom04" class="form-label">Gender</label>
                                            <select id="gender-choice">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="website" class="form-label">Website (optional)<span
                                                    class="text-danger ms-1">*</span></label>
                                            <div class="input-group">
                                                <input class="form-control" type="url" id="website" name="website"
                                                    placeholder="Enter your website URL">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="addressInputLayout4" class="form-label">Address<span
                                                    class="text-danger ms-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control form-control-icon" id="addressInputLayout4"
                                                    placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="zipCodeLayout1" class="form-label">Zip Code<span
                                                    class="text-danger ms-1">*</span></label>
                                            <div class="form-icon">
                                                <i class="ri-map-pin-2-line text-muted"></i>
                                                <input type="text" class="form-control form-control-icon"
                                                    id="zipCodeLayout1" placeholder="Zip Code" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="stateSelect2Layout4" class="form-label">State</label>
                                            <div class="form-icon">
                                                <select id="state-choice">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-end gap-2 flex-shrink-0 mt-8">
                                            <button type="button" class="btn btn-light-dark text-body">Cancel</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
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

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/js/pages/profile-setting.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
