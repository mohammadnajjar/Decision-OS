@extends('partials.layouts.master')

@section('title', 'Email | FabKin Admin & Dashboards Template')
@section('title-sub', 'Applications')
@section('pagetitle', 'Email')

@section('css')
    <link rel="stylesheet" href="assets/libs/quill/quill.core.css">
    <link rel="stylesheet" href="assets/libs/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/libs/quill/quill.snow.css">
@endsection


@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="d-flex mail-wrapper">
            <div class="mail-sidebar active" id="email-sidebar">
                <div class="mb-4">
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleEmail"
                        class="btn btn-soft-success btn-sm material-shadow-none"><i
                            class="bi bi-plus-lg me-1"></i>Compose</button>
                </div>
                <div class="email-menu-sidebar-scroll px-5 mx-n5" data-simplebar>
                    <div class="mail-list">
                        <a href="javascript:void(0)" class="d-flex text-muted active"><i
                                class="ri-mail-fill me-3 text-muted"></i>All <span
                                class="text-muted ms-auto">(20)</span></a>
                        <a href="javascript:void(0)" class="d-flex text-muted"><i
                                class="ri-inbox-archive-fill me-3 text-muted"></i> Inbox <span
                                class="text-muted ms-auto">(12)</span></a>
                        <a href="javascript:void(0)" class="d-flex text-muted"><i
                                class="ri-send-plane-2-fill me-3 text-muted"></i>Sent</a>
                        <a href="javascript:void(0)" class="d-flex text-muted"><i
                                class="ri-edit-2-fill me-3 text-muted"></i>Draft<span
                                class="text-muted ms-auto">(9)</span></a>
                        <a href="javascript:void(0)" class="d-flex text-muted"><i
                                class="ri-error-warning-fill me-3 text-muted"></i>Spam</a>
                        <a href="javascript:void(0)" class="d-flex text-muted"><i
                                class="ri-delete-bin-5-fill me-3 text-muted"></i>Trash<span
                                class="text-muted ms-auto">(15)</span></a>
                        <a href="javascript:void(0)" class="d-flex text-muted"><i
                                class="ri-star-fill me-3 text-muted"></i>Starred<span
                                class="text-muted ms-auto">(8)</span></a>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center my-2">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted">Labels</p>
                            </div>
                        </div>
                        <div class="mail-list">
                            <a href="javascript:void(0)" class="d-flex text-muted"><i
                                    class="bi bi-tag me-3 text-info"></i><span class="mail-list-link"
                                    data-type="label">Work</span> <span class="text-muted ms-auto">(5)</span></a>
                            <a href="javascript:void(0)" class="d-flex text-muted"><i
                                    class="bi bi-tag me-3 text-warning"></i><span class="mail-list-link"
                                    data-type="label">Friends</span></a>
                            <a href="javascript:void(0)" class="d-flex text-muted"><i
                                    class="bi bi-tag me-3 text-primary"></i><span class="mail-list-link"
                                    data-type="label">Meeting</span> <span class="text-muted ms-auto">(2)</span></a>
                            <a href="javascript:void(0)" class="d-flex text-muted"><i
                                    class="bi bi-tag me-3 text-danger"></i><span class="mail-list-link"
                                    data-type="label">Events</span></a>
                            <a href="javascript:void(0)" class="d-flex text-muted"><i
                                    class="bi bi-tag me-3 text-warning"></i><span class="mail-list-link"
                                    data-type="label">Appointment</span></a>
                        </div>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-soft-success btn-sm material-shadow-none fw-semibold mt-2"><i
                                class="ri-add-line fs-6 me-2 text-muted"></i>Add New Label</button>
                    </div>
                </div>
            </div>
            <div class="w-100 position-relative" id="emailList">
                <div class="p-4 border-bottom">
                    <div class="d-flex align-items-center justify-content-between gap-4">
                        <div class="d-flex align-items-center gap-4">
                            <button type="button" class="btn btn-light-light icon-btn text-muted fs-5 d-xl-none"
                                id="sidebar-toggle">
                                <i class="ri-menu-2-fill"></i>
                            </button>
                            <div class="form-check form-check-inline m-0 d-none d-md-block">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxB" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxB"></label>
                            </div>
                            <h6 class="mb-0 flex-shrink-0 d-none d-md-block">All Mails</h6>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="form-icon">
                                <input type="text" class="form-control form-control-icon" id="firstNameLayout4"
                                    placeholder="Search Here ..." required>
                                <i class="ri-search-2-line text-muted"></i>
                            </div>
                            <div class="dropdown">
                                <button type="button" data-bs-toggle="dropdown"
                                    class="btn btn-light-light icon-btn text-muted">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply"></i>
                                            Reply</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                class="bi bi-arrow-right"></i> Forward</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                class="bi bi-envelope-open"></i> Mark as Read/Unread</a></li>
                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)"><i
                                                class="bi bi-exclamation-circle"></i> Report Spam</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-printer"></i>
                                            Print Email</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="message-list-content" data-simplebar>
                    <ul class="message-list" id="mail-list">
                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxB" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxB"></label>
                            </div>
                            <div class="important-mail active">
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Bisrat Girmay</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted  text-truncate">I received your message, but it seems to contain
                                    placeholder text. I'd be happy to review and respond accordingly.</p>
                            </div>
                            <div class="flex-shrink-0">2:30 PM</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>
                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxC" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxC"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-2.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Alex Johnson</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Please find the attached report and let me know if
                                    you need any revisions.</p>
                            </div>
                            <div class="flex-shrink-0">1:15 PM</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxD" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxD"></label>
                            </div>
                            <div class="important-mail active">
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-3.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Emily Carter</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">The client meeting has been rescheduled to next
                                    Monday at 10 AM.</p>
                            </div>
                            <div class="flex-shrink-0">10:05 AM</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxE" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxE"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-4.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Michael Smith</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Hey, just checking in! Did you get a chance to
                                    review the proposal?</p>
                            </div>
                            <div class="flex-shrink-0">Yesterday</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxF" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxF"></label>
                            </div>
                            <div class="important-mail active">
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-5.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Sarah Williams</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Thank you for your feedback! I’ll make the
                                    necessary changes today.</p>
                            </div>
                            <div class="flex-shrink-0">March 12</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>
                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxG" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxG"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-6.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">David Miller</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Can we schedule a call tomorrow to discuss the
                                    next steps?</p>
                            </div>
                            <div class="flex-shrink-0">8:45 AM</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxH" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxH"></label>
                            </div>
                            <div class="important-mail active">
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-7.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Sophia Adams</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Looking forward to your feedback on the proposal.
                                </p>
                            </div>
                            <div class="flex-shrink-0">Yesterday</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxI" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxI"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-8.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">John Doe</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Reminder: The deadline for the project submission
                                    is approaching.</p>
                            </div>
                            <div class="flex-shrink-0">March 10</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxJ" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxJ"></label>
                            </div>
                            <div class="important-mail active">
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-9.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Olivia Brown</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Let’s meet for lunch tomorrow to discuss our
                                    upcoming collaboration.</p>
                            </div>
                            <div class="flex-shrink-0">March 9</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxK" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxK"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-10.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">William Johnson</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">The files you requested have been uploaded to the
                                    shared drive.</p>
                            </div>
                            <div class="flex-shrink-0">March 8</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>
                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxL" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxL"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-11.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Emma Watson</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Your invoice for last month has been generated.
                                </p>
                            </div>
                            <div class="flex-shrink-0">March 7</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxM" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxM"></label>
                            </div>
                            <div class="important-mail active">
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-12.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">James Anderson</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Meeting has been rescheduled to Monday. Let me
                                    know if that works.</p>
                            </div>
                            <div class="flex-shrink-0">March 6</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxN" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxN"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-3.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Sophia Martinez</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">Just checking in to see if you had a chance to
                                    review the document.</p>
                            </div>
                            <div class="flex-shrink-0">March 5</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxO" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxO"></label>
                            </div>
                            <div class="important-mail active">
                                <i class="ri-star-fill"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-2.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Daniel Kim</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">The new design mockups are ready for review.</p>
                            </div>
                            <div class="flex-shrink-0">March 4</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                        <li
                            class="inbox-data d-flex gap-3 gap-md-4 gap-xxl-6 align-items-center py-3 px-4 border-bottom cursor-pointer position-relative">
                            <div class="form-check form-check-inline m-0">
                                <input class="form-check-input checkbox-primary" id="emailCheckboxP" type="checkbox"
                                    value="option1">
                                <label class="form-check-label" for="emailCheckboxP"></label>
                            </div>
                            <div class="important-mail">
                                <i class="ri-star-line"></i>
                            </div>
                            <div class="avatar-item avatar-md">
                                <img class="img-fluid avatar-md" src="assets/images/avatar/avatar-1.jpg"
                                    alt="avatar image">
                            </div>
                            <h6 class="mb-0 flex-shrink-0">Michael Carter</h6>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 text-muted text-truncate">The report is now finalized and ready for
                                    submission.</p>
                            </div>
                            <div class="flex-shrink-0">March 3</div>
                            <div class="d-none d-md-flex flex-nowrap gap-1">
                                <i class="ri-inbox-archive-line fs-5 text-muted px-1"></i>
                                <i class="ri-delete-bin-line fs-5 text-muted px-1"></i>
                                <i class="ri-mail-open-line fs-5 text-muted px-1"></i>
                                <i class="ri-time-line fs-5 text-muted px-1"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Mail Preview -->
            <div class="w-100 d-none" id="emailDetails">
                <div class="mail-preview">
                    <div class="mail-header">
                        <div class="d-flex align-items-center">
                            <img src="assets/images/avatar/avatar-1.jpg" class="avatar-md me-2 rounded-circle"
                                alt="Sender Avatar">
                            <div>
                                <h6 class="mb-0 flex-shrink-0">John Doe<i class="ri-star-fill text-warning ms-1"></i></h6>
                                <p class="mb-0 text-muted">johndoe@example.com</p>
                            </div>
                        </div>
                        <div>
                            <span class="text-muted d-none d-md-inline-block">March 10, 2025 | 10:45 AM</span>
                            <button class="btn btn-light-light rounded-pill icon-btn text-body ms-3 fs-4"
                                id="closeReadEmail"><i class="bi bi-x"></i></button>
                        </div>
                    </div>
                    <div class="px-5 mx-n5" data-simplebar style="height: 410px;">
                        <h5 class="mt-5">Subject: Project Updates & Next Steps</h5>
                        <div class="mail-body">
                            <p class="text-muted fs-15">Hi Team,</p>
                            <p class="text-muted fs-15">
                                I hope you're all doing well. I wanted to check in on the progress of our project updates
                                and ensure we are on track to finalize everything by the end of this week.
                                It's essential that we complete all necessary revisions to move forward without delays.
                            </p>
                            <p class="text-muted fs-15">
                                I have attached the latest version of the document for your review.
                                Please take the time to go through it carefully and provide any corrections, suggestions,
                                or additional inputs. Your feedback is crucial in refining the final version and making sure
                                we address any outstanding concerns.
                            </p>

                            <p class="text-muted fs-15 bold">Key Focus Areas:</p>
                            <p class="text-muted fs-15">
                                Please ensure that all content is accurate, formatted consistently, and aligns with our
                                standards.
                                If any sections need rewording for clarity, feel free to suggest changes. Additionally,
                                confirm if
                                the document is ready for final approval or if any refinements are required.
                            </p>

                            <p class="text-muted fs-15">
                                If there are any unresolved issues or areas requiring further discussion, please highlight
                                them.
                                If necessary, we can schedule a quick meeting to address them efficiently.
                            </p>

                            <p class="text-muted fs-15">
                                Let’s work together to finalize this smoothly. Please share your feedback by <strong>[insert
                                    deadline]</strong>
                                so we can proceed accordingly. Looking forward to your updates!
                            </p>

                            <p class="text-muted fs-15">Best regards, <br><strong>John</strong></p>

                            <h6 class="mt-4">Attachments:</h6>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="attachment">
                                    <div>
                                        <strong>Project_Details.docx</strong>
                                        <small class="d-block text-muted">256 KB • Click to download</small>
                                    </div>
                                    <div
                                        class="h-40px w-40px rounded-pill text-muted bg-light-subtle d-flex justify-content-center align-items-center fs-5">
                                        <i class="bi bi-file-earmark-arrow-down"></i>
                                    </div>
                                </div>
                                <div class="attachment">
                                    <div>
                                        <strong>Design_Mockup.jpg</strong>
                                        <small class="d-block text-muted">1.2 MB • Click to view</small>
                                    </div>
                                    <div
                                        class="h-40px w-40px rounded-pill text-muted bg-light-subtle d-flex justify-content-center align-items-center fs-5">
                                        <i class="bi bi-file-earmark-arrow-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body quick-reply position-relative">
                        <div class="mb-2">
                            <button class="btn btn-light-light rounded-pill icon-btn text-body" data-bs-toggle="modal"
                                data-bs-target="#replyModal"><i class="ri-reply-line"></i></button>
                            <button class="btn btn-light-light rounded-pill icon-btn text-body"><i
                                    class="bi bi-pin-angle"></i></button>
                            <button class="btn btn-light-light rounded-pill icon-btn text-body"><i
                                    class="ri-inbox-archive-line"></i></button>
                            <button class="btn btn-light-danger rounded-pill icon-btn delete"><i
                                    class="ri-delete-bin-line"></i></button>
                        </div>
                        <textarea class="form-control" rows="6" placeholder="Type your reply..."></textarea>
                        <div class="position-absolute bottom-0 end-0 mb-3 me-3">
                            <button class="btn btn-primary rounded-pill icon-btn"><i
                                    class="ri-send-plane-line"></i></button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="replyModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Reply to John Doe</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <textarea class="form-control" rows="4" placeholder="Type your reply..."></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary"><i class="ri-send-plane-line"></i> Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-chat-overlay" id="backdrop-overlay-email"></div>
        </div>
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

    <!-- Modal -->
    <div class="modal modal-lg fade" id="exampleEmail" tabindex="-1" aria-labelledby="exampleEmailLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleEmailLabel">New Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="position-relative">
                        <div class="d-flex align-items-center mb-4">
                            To
                            <input type="email" class="form-control border-0 border-bottom rounded-0"
                                placeholder="Enter Email">
                            <div class="position-absolute top-0 end-0">
                                <div class="d-flex">
                                    <button class="btn text-reset px-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#CcRecipientsCollapse" aria-expanded="false"
                                        aria-controls="CcRecipientsCollapse">
                                        Cc
                                    </button>
                                    <button class="btn text-reset px-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#BccRecipientsCollapse" aria-expanded="false"
                                        aria-controls="BccRecipientsCollapse">
                                        Bcc
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <input type="text" class="form-control border-0 border-bottom rounded-0 ps-0"
                                placeholder="Subject">
                        </div>
                        <div id="snowEditor">
                            <p>Put your things hear...</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-text-light text-muted" data-bs-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary btn-loader">
                        <span class="indicator-label">
                            Send
                        </span>
                        <span class="indicator-progress flex gap-2 align-items-center">
                            <span>Loading...</span>
                            <i class="ri-loader-2-fill"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">New label</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="position-relative">
                        <div class="form-icon">
                            <label class="mb-2 text-muted" for="Please enter a new label name:">Please enter a new label
                                name:</label>
                            <input type="text" class="form-control bg-light" placeholder="Enater Name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script src="assets/libs/quill/quill.js"></script>
    <script src="assets/js/app/apps-email.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
