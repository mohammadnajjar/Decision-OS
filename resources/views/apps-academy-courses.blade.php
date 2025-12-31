@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('css')
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
@endsection
@section('title-sub', 'Academy')
@section('pagetitle', 'Courses Category')
@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="card">
            <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                <h6 class="mb-0">Courses List</h6>
                <div class="d-flex flex-wrap gap-3 ms-auto">
                    <div class="form-icon">
                        <input type="text" class="form-control form-control-icon" id="firstNameLayout4"
                            placeholder="Search Here ..." required>
                        <i class="ri-search-2-line text-muted"></i>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-light text-muted dropdown-toggle" type="button" id="sortByDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sort By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortByDropdown">
                            <li><a class="dropdown-item" href="javascript:void(0)">Low to High</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">High to Low</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-light text-muted dropdown-toggle" type="button"
                            id="filterByDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Filter By
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="filterByDropdown">
                            <li><a class="dropdown-item" href="javascript:void(0)">Upcoming</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Active</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">Completed</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)">All Courses</a></li>
                        </ul>
                    </div>

                    <!-- Add New Course Button -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCourseModal">
                        <i class="bi bi-plus-lg me-1"></i>Add New
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-box table-responsive">
                    <table class="table text-nowrap table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Lessons & Sections</th>
                                <th>Enrolled Students</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Rating</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Web Development Bootcamp</h6>
                                        <p class="fs-12 mb-0 text-muted">instructor: <span class="fw-semibold">John
                                                Doe</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Web
                                        Development</span></td>
                                <td>
                                    <span class="mb-0">Lessons: 12 / Sections: 3</span>
                                </td>
                                <td>450</td>
                                <td><span class="badge bg-warning-subtle text-warning">Upcoming</span></td>
                                <td>$299</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-2.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Data Science Masterclass</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">Jane
                                                Smith</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Data Science</span>
                                </td>
                                <td>
                                    <span class="mb-0">Lessons: 20 / Sections: 5</span>
                                </td>
                                <td>320</td>
                                <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                <td>$399</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-light"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">AI for Beginners</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">John
                                                Doe</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">AI</span></td>
                                <td>
                                    <span class="mb-0">Lessons: 15 / Sections: 4</span>
                                </td>
                                <td>245</td>
                                <td><span class="badge bg-warning-subtle text-warning">Upcoming</span></td>
                                <td>$299</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                        <i class="bi bi-star-fill text-light"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Web Development Bootcamp</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">Alice
                                                Johnson</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Web
                                        Development</span></td>
                                <td>
                                    <span class="mb-0">Lessons: 25 / Sections: 6</span>
                                </td>
                                <td>410</td>
                                <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                <td>$499</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Python for Data Analysis</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">Mark
                                                Lee</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Python</span></td>
                                <td>
                                    <span class="mb-0">Lessons: 18 / Sections: 5</span>
                                </td>
                                <td>310</td>
                                <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                <td>$249</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                        <i class="bi bi-star-fill text-light"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-6.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Introduction to Cloud Computing</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">Sarah
                                                Williams</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Cloud
                                        Computing</span></td>
                                <td>
                                    <span class="mb-0">Lessons: 22 / Sections: 5</span>
                                </td>
                                <td>198</td>
                                <td><span class="badge bg-warning-subtle text-warning">Upcoming</span></td>
                                <td>$399</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">React Native Development</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">Jessica
                                                Brown</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Mobile
                                        Development</span></td>
                                <td>
                                    <span class="mb-0">Lessons: 20 / Sections: 5</span>
                                </td>
                                <td>360</td>
                                <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                <td>$399</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-half text-warning"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Cybersecurity Fundamentals</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">David
                                                Harris</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Cybersecurity</span>
                                </td>
                                <td>
                                    <span class="mb-0">Lessons: 30 / Sections: 7</span>
                                </td>
                                <td>520</td>
                                <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                <td>$549</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-light"></i>
                                        <i class="bi bi-star-fill text-light"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-9.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Blockchain Development</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">James
                                                Green</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Blockchain</span>
                                </td>
                                <td>
                                    <span class="mb-0">Lessons: 28 / Sections: 6</span>
                                </td>
                                <td>415</td>
                                <td><span class="badge bg-success-subtle text-success">Active</span></td>
                                <td>$599</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-light-primary icon-btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn-sm"><i
                                            class="ri-delete-bin-line"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td class="d-flex align-items-center gap-3">
                                    <img src="assets/images/avatar/avatar-10.jpg" alt="Avatar Image"
                                        class="avatar-md rounded-pill">
                                    <div>
                                        <h6 class="mb-1">Introduction to SQL</h6>
                                        <p class="fs-12 mb-0 text-muted">Instructor: <span class="fw-semibold">Olivia
                                                Wilson</span></p>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary">Database</span></td>
                                <td>
                                    <span class="mb-0">Lessons: 18 / Sections: 4</span>
                                </td>
                                <td>300</td>
                                <td><span class="badge bg-warning-subtle text-warning">Upcoming</span></td>
                                <td>$199</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-light"></i>
                                    </div>
                                </td>
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
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a>
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

        <!-- Course Create Modal -->
        <div class="modal fade" id="createCourseModal" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="createCourseModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createCourseModalLabel">Create New Course</h5>
                        <button type="button" class="btn-close icon-btn-sm" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ri-close-large-line fw-semibold"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center p-3 rounded">
                                        <div class="position-relative">
                                            <img id="avatarPreview" src="assets/images/avatar/15.jpg"
                                                alt="Avatar Preview"
                                                class="img-fluid rounded-circle h-80px w-80px object-fit-cover">
                                            <div
                                                class="h-24px w-24px rounded-pill bg-primary d-flex justify-content-center align-items-center text-white border border-3 border-white position-absolute fs-10 top-0 end-0">
                                                <i class="bi bi-camera"></i>
                                            </div>
                                            <input type="file"
                                                class="position-absolute top-0 end-0 w-100 h-100 opacity-0 form-control"
                                                id="avatar">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="courseTitle" class="form-label">Course Title</label>
                                    <input type="text" class="form-control" id="courseTitle"
                                        placeholder="Enter course title" required>
                                </div>
                                <div class="col-12">
                                    <label for="courseCategory" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="courseCategory"
                                        placeholder="Enter category" required>
                                </div>
                                <div class="col-12">
                                    <label for="courseLessons" class="form-label">Lessons & Sections</label>
                                    <input type="text" class="form-control" id="courseLessons"
                                        placeholder="Enter lessons and sections" required>
                                </div>
                                <div class="col-12">
                                    <label for="courseEnrolled" class="form-label">Enrolled Students</label>
                                    <input type="number" class="form-control" id="courseEnrolled"
                                        placeholder="Enter enrolled" required>
                                </div>
                                <div class="col-12">
                                    <label for="courseStatus" class="form-label">Status</label>
                                    <select id="status">
                                        <option value="javascript">Active</option>
                                        <option value="python">Upcoming</option>
                                        <option value="java">Completed</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="coursePrice" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="coursePrice"
                                        placeholder="Enter course price" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit Section -->
    </div>
    </main>
@endsection

@section('js')

    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- File js -->
    <script src="assets/js/app/academy-list.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

@endsection
