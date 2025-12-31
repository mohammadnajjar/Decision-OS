@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'CMS')
@section('pagetitle', 'Menus')
@section('css')
    <!-- Picker css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection

@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-1_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Menu</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-1_profile" role="tab"
                                    aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Screen Options</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active show" id="demo-tab-1_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Menu</h6>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label for="menus-choice" class="form-label">Select a menu to edit :</label>
                                        <select id="menus-choice">
                                            <option value="javascript">Information</option>
                                            <option value="python">India</option>
                                            <option value="java">New Menu</option>
                                            <option value="csharp">Page Menu</option>
                                        </select>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end gap-3">
                                        <button type="button" class="btn btn-light-light text-muted">Cancel</button>
                                        <button type="button" class="btn btn-primary">Select Menu</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="demo-tab-1_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Screen Options</h6>
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="Page" id="Page">
                                            <label class="form-check-label" for="Page">Page</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="Blog" id="Blog"
                                                checked>
                                            <label class="form-check-label" for="Blog">Blog</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="ClassAttribute"
                                                id="ClassAttribute">
                                            <label class="form-check-label" for="ClassAttribute">Class Attribute</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="TargetAttribute"
                                                id="TargetAttribute" checked>
                                            <label class="form-check-label" for="TargetAttribute">Target Attribute</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="Description"
                                                id="Description" checked>
                                            <label class="form-check-label" for="Description">Description</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="CustomLink"
                                                id="CustomLink">
                                            <label class="form-check-label" for="CustomLink">CustomLink</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="TitleAttribute"
                                                id="TitleAttribute">
                                            <label class="form-check-label" for="TitleAttribute">Title Attribute</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Menu Name</h6>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-primary accordion-border-box" id="demo_accordion_main_06">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_61" aria-expanded="true"
                                        aria-controls="demo_accordion_item_61">
                                        <span class="accordion-icon me-2">
                                            <i class="bi bi-arrows-move me-2"></i>
                                        </span>
                                        About
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_61" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="courseNavigation" class="form-label">Navigation Label</label>
                                                <input type="text" class="form-control" id="courseNavigation"
                                                    placeholder="Navigation Label" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="courseTitle" class="form-label">Title Attribute</label>
                                                <input type="text" class="form-control" id="courseTitle"
                                                    placeholder="Title Attribute" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="courseURL" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="courseURL"
                                                    placeholder="http://localhost:3000/apps-cms-menus" required>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end gap-3">
                                                <button class="btn btn-light-light text-muted">Remove</button>
                                                <button class="btn btn-light-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_62" aria-expanded="false"
                                        aria-controls="demo_accordion_item_62">
                                        <i class="bi bi-arrows-move me-2"></i> Contact
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_62" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="courseNavigation1" class="form-label">Navigation Label</label>
                                                <input type="text" class="form-control" id="courseNavigation1"
                                                    placeholder="Navigation Label" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="courseTitle1" class="form-label">Title Attribute</label>
                                                <input type="text" class="form-control" id="courseTitle1"
                                                    placeholder="Title Attribute" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="courseURL1" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="courseURL1"
                                                    placeholder="http://localhost:3000/apps-cms-menus" required>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end gap-3">
                                                <button class="btn btn-light-light text-muted">Remove</button>
                                                <button class="btn btn-light-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_63" aria-expanded="false"
                                        aria-controls="demo_accordion_item_63">
                                        <i class="bi bi-arrows-move me-2"></i> Privacy Policy
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_63" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="courseNavigation2" class="form-label">Navigation Label</label>
                                                <input type="text" class="form-control" id="courseNavigation2"
                                                    placeholder="Navigation Label" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="courseTitle2" class="form-label">Title Attribute</label>
                                                <input type="text" class="form-control" id="courseTitle2"
                                                    placeholder="Title Attribute" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="courseURL2" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="courseURL2"
                                                    placeholder="http://localhost:3000/apps-cms-menus" required>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end gap-3">
                                                <button class="btn btn-light-light text-muted">Remove</button>
                                                <button class="btn btn-light-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_64" aria-expanded="false"
                                        aria-controls="demo_accordion_item_64">
                                        <i class="bi bi-arrows-move me-2"></i>Terms & Conditions
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_64" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="courseNavigation3" class="form-label">Navigation Label</label>
                                                <input type="text" class="form-control" id="courseNavigation3"
                                                    placeholder="Navigation Label" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="courseTitle3" class="form-label">Title Attribute</label>
                                                <input type="text" class="form-control" id="courseTitle3"
                                                    placeholder="Title Attribute" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="courseURL3" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="courseURL3"
                                                    placeholder="http://localhost:3000/apps-cms-menus" required>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end gap-3">
                                                <button class="btn btn-light-light text-muted">Remove</button>
                                                <button class="btn btn-light-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_65" aria-expanded="false"
                                        aria-controls="demo_accordion_item_65">
                                        <i class="bi bi-arrows-move me-2"></i>FAQ's
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_65" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="courseNavigation4" class="form-label">Navigation Label</label>
                                                <input type="text" class="form-control" id="courseNavigation4"
                                                    placeholder="Navigation Label" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="courseTitle4" class="form-label">Title Attribute</label>
                                                <input type="text" class="form-control" id="courseTitle4"
                                                    placeholder="Title Attribute" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="courseURL4" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="courseURL4"
                                                    placeholder="http://localhost:3000/apps-cms-menus" required>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end gap-3">
                                                <button class="btn btn-light-light text-muted">Remove</button>
                                                <button class="btn btn-light-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_66" aria-expanded="false"
                                        aria-controls="demo_accordion_item_66">
                                        <i class="bi bi-arrows-move me-2"></i>Blog
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_66" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="courseNavigation5" class="form-label">Navigation Label</label>
                                                <input type="text" class="form-control" id="courseNavigation5"
                                                    placeholder="Navigation Label" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="courseTitle5" class="form-label">Title Attribute</label>
                                                <input type="text" class="form-control" id="courseTitle5"
                                                    placeholder="Title Attribute" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="courseURL5" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="courseURL5"
                                                    placeholder="http://localhost:3000/apps-cms-menus" required>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end gap-3">
                                                <button class="btn btn-light-light text-muted">Remove</button>
                                                <button class="btn btn-light-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-light-danger">Cancel</button>
                        <button class="btn btn-light-primary">Save Menu</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Menus</h6>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-with-plus accordion-primary accordion-border-box"
                            id="demo_accordion_main_06">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_67" aria-expanded="true"
                                        aria-controls="demo_accordion_item_67">
                                        <span class="accordion-icon me-2">
                                            <i class="bi bi-file-earmark-arrow-down"></i>
                                        </span>
                                        Page
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_67" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="form-icon right mb-5">
                                            <input type="text" class="form-control rounded-3 border form-control-icon"
                                                placeholder="Search...">
                                            <i class="ri-search-2-line search-icon"></i>
                                        </div>
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="About"
                                                id="About">
                                            <label class="form-check-label" for="About">About</label>
                                        </div>
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="Contact"
                                                id="Contact">
                                            <label class="form-check-label" for="Contact">Contact</label>
                                        </div>
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="PrivacyPolicy"
                                                id="PrivacyPolicy">
                                            <label class="form-check-label" for="PrivacyPolicy">Privacy Policy</label>
                                        </div>
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="Conditions"
                                                id="Conditions">
                                            <label class="form-check-label" for="Conditions">Terms & Conditions</label>
                                        </div>
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="FAQ"
                                                id="FAQ">
                                            <label class="form-check-label" for="FAQ">FAQ</label>
                                        </div>
                                        <div class="form-check form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" value="Blog"
                                                id="Blog">
                                            <label class="form-check-label" for="Blog">Blog</label>
                                        </div>
                                        <div class="col-12 text-end">
                                            <button class="btn btn-light-primary">Add to menu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#demo_accordion_item_68" aria-expanded="false"
                                        aria-controls="demo_accordion_item_68">
                                        <span class="accordion-icon me-2">
                                            <i class="bi bi-link-45deg"></i>
                                        </span>
                                        Custom Link
                                    </button>
                                </h2>
                                <div id="demo_accordion_item_68" class="accordion-collapse collapse"
                                    data-bs-parent="#demo_accordion_main_06">
                                    <div class="accordion-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="courseTitle6" class="form-label">Label</label>
                                                <input type="text" class="form-control" id="courseTitle6"
                                                    placeholder="Label" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="courseURL6" class="form-label">URL</label>
                                                <input type="text" class="form-control" id="courseURL6"
                                                    placeholder="http://localhost:3000/apps-cms-menus" required>
                                            </div>
                                            <div class="col-12 text-end">
                                                <button class="btn btn-light-primary">Add to menu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- File js -->
    <script src="assets/js/app/academy-cms-menus.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
