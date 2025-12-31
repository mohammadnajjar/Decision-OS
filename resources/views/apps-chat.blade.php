@extends('partials.layouts.master')

@section('title', 'Chat | FabKin Admin & Dashboards Template')
@section('title-sub', 'Applications')
@section('pagetitle', 'Chat')
@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="row chat-wrapper g-0">
            <div class="col-xl-3 border-end">
                <div class="app-chat-sidebar active" id="app-chat-sidebar">
                    <div class="p-5">
                        <div class="mb-2">
                            <div class="d-flex align-items-start mb-4">
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar-wrapper active flex-shrink-0">
                                            <img src="assets/images/avatar/avatar-10.jpg" class="avatar-lg rounded-circle"
                                                alt="Avatar Image">
                                            <span class="user-status"></span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h6 class="text-truncate mb-0"><a class="text-reset" data-bs-toggle="offcanvas"
                                                    href="#userProfileCanvasExample"
                                                    aria-controls="userProfileCanvasExample">Paul Danielle</a></h6>
                                            <p class="text-truncate text-muted fs-14 mb-0 userStatus">
                                                <small>Available</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex gap-1 flex-shrink-0">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" class="text-muted btn btn-light-light icon-btn-sm"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="bi bi-three-dots-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="bi bi-gear"></i>Setting</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="bi bi-info-circle"></i>Help & Feedback</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i
                                                    class="bi bi-box-arrow-in-left"></i>Sign Out</a>
                                        </div>
                                    </div>
                                    <button class="btn btn-light-light icon-btn-sm text-muted fs-16 d-xl-none"
                                        id="close-chat-sidebar"><i class="bi bi-x"></i></button>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="form-icon right">
                                    <input type="text" class="form-control rounded-3 form-control-icon"
                                        placeholder="Search...">
                                    <i class="ri-search-2-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs-bordered nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab"
                                    aria-selected="true">
                                    Chats
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    Contacts
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content text-muted">
                            <div class="tab-pane active show" id="chats" role="tabpanel">
                                <div class="chat-room-list mx-n5 pt-3" data-simplebar>
                                    <ul id="chatList" class="list-unstyled mb-0">
                                        <li id="chat1" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-1.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">10:20am</span>
                                                    Gaston Lapierre
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">How are you today?</span>
                                                    <i class="bi bi-check-all text-success"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat2" class="d-flex align-items-center gap-3 px-5 py-3 active">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-12.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">Now</span>
                                                    Sophia Turner
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="text-success">Typing...</span></i>
                                                    <span class="badge bg-success-subtle text-success">3</span>
                                                </p>
                                            </div>
                                        </li>

                                        <li class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-2.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">12:45pm</span>
                                                    Sophia Turner
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Hey, are you free?</span>
                                                    <i class="bi bi-check-all text-muted"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat3" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-3.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">9:15am</span>
                                                    Oliver Smith
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Meeting at 2 PM?</span>
                                                    <i class="bi bi-check-all text-success"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat4" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-4.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">8:30am</span>
                                                    Emily Johnson
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">See you later!</span>
                                                    <i class="bi bi-check-all text-muted"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat5" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-5.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">7:50am</span>
                                                    William Brown
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Call me when you're free.</span>
                                                    <i class="bi bi-check-all text-success"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat6" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-6.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">6:20am</span>
                                                    Ava Martinez
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Good morning!</span>
                                                    <i class="bi bi-check text-muted"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat7" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-7.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">Yesterday</span>
                                                    Ethan Wilson
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Let's catch up soon!</span>
                                                    <i class="bi bi-check-all text-success"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat8" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-8.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">Yesterday</span>
                                                    Mia Davis
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Did you see my message?</span>
                                                    <i class="bi bi-check text-muted"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat9" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-9.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">Yesterday</span>
                                                    Lucas Anderson
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Thanks for your help!</span>
                                                    <i class="bi bi-check-all text-success"></i>
                                                </p>
                                            </div>
                                        </li>

                                        <li id="chat10" class="d-flex align-items-center gap-3 px-5 py-3">
                                            <div class="avatar-wrapper active flex-shrink-0 position-relative">
                                                <img src="assets/images/avatar/avatar-10.jpg"
                                                    class="avatar-lg rounded-circle" height="36" alt="avatar">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="my-0">
                                                    <span class="float-end fs-12 fw-normal text-body">Yesterday</span>
                                                    Amelia White
                                                </h6>
                                                <p
                                                    class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                    <span class="w-75">Let's plan for the weekend!</span>
                                                    <i class="bi bi-check-all text-muted"></i>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="contacts" role="tabpanel">
                                <div class="chat-room-list mx-n5 pt-3" data-simplebar>
                                    <div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">A </div>
                                            <ul class="list-unstyled contact-list mb-0">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <span
                                                                    class="avatar-title avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle text-body">AG</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Anthony Gledhill</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">B </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-4.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Bernard Erdmann</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">C </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <span
                                                                    class="avatar-title avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle text-body">CT</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Christine Thygesen</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <span
                                                                    class="avatar-title avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle text-body">CB</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Carisa Betancourt</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">E </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <span
                                                                    class="avatar-title avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle text-body">EE</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Elon Evans</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">F </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-3.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Franky Jeck</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">G </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <span
                                                                    class="avatar-title avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle text-body">GS</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Gebre Selam</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">J </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-4.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Jonny Core</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-7.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Jassy Jeck</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-1.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Jone Shina</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">K </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-5.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Koba Kack</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">L </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-2.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Landry</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">M </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <span
                                                                    class="avatar-title avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle text-body">MM</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Mashon Mack</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">N </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-6.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Neny Dan</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">R </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <span
                                                                    class="avatar-title avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle text-body">RD</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Rony Dui</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">S </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-5.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Surry Pair</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">V </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-10.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Vonny Shon</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="px-5 py-1 text-body fw-semibold">W </div>
                                            <ul class="list-unstyled contact-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div class="avatar-lg"> <img
                                                                    src="assets/images/avatar/avatar-2.jpg"
                                                                    class="img-fluid rounded-circle" alt="Avatar Image">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-truncate mb-0">Winta Afwerki</h6>
                                                            <p class="mb-0 fs-13 mt-1">789-456-1230</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown"> <a href="javascript:void(0)"
                                                                    class="text-muted" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> <i
                                                                        class="ri-more-2-fill"></i> </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-pencil-line me-2 align-bottom"></i>Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-forbid-2-line me-2 align-bottom"></i>Block</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                                            class="ri-delete-bin-6-line me-2 align-bottom"></i>Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="overflow-hidden">
                    <div class="p-5 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-8">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 d-block d-xl-none me-4">
                                        <a href="javascript: void(0);"
                                            class="btn btn-light-light text-muted icon-btn fs-5" id="open-chat-sidebar"><i
                                                class="ri-menu-2-fill"></i></a>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <div id="selectedUserProfile" class="d-flex align-items-center gap-2">
                                            <div id="selectedUserAvatarWrapper"
                                                class="avatar-wrapper active flex-shrink-0">
                                                <img id="selectedUserAvatar" src="assets/images/avatar/avatar-12.jpg"
                                                    class="avatar-lg rounded-circle" alt="Avatar Image">
                                                <span class="user-status"></span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 id="selectedUserName" class="text-truncate mb-0 fs-15">
                                                    <a id="selectedUserLink" class="text-reset"
                                                        data-bs-toggle="offcanvas" href="#userProfileCanvasExample"
                                                        aria-controls="userProfileCanvasExample"></a>Sophia Turner
                                                </h5>
                                                <p id="selectedUserStatus"
                                                    class="text-truncate text-muted fs-14 mb-0 userStatus">
                                                    <small>Online</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-4">
                                <div class="d-flex gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light-light text-muted icon-btn"><i
                                            class="bi bi-telephone-inbound"></i></button>
                                    <button type="button" class="btn btn-light-light text-muted icon-btn"><i
                                            class="bi bi-camera-video"></i></button>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" class="text-muted btn btn-light-light icon-btn"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="bi bi-three-dots-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0)">View Contact</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Mute Chat</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Block</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Clear Chat</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Report</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-conversation p-5" id="chat-conversation" data-simplebar>
                        <ul id="chat-list" class="list-unstyled chat-conversation-list"></ul>
                    </div>
                    <div class="border-top p-5">
                        <form id="chatinput-form" enctype="multipart/form-data">
                            <div class="row g-0 align-items-center">
                                <div class="col-auto">
                                    <div class="chat-input-links me-2">
                                        <div class="d-flex gap-4 align-items-center me-1">
                                            <a href="javascript:void(0)" class="link text-body fs-4"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Attach a Link">
                                                <i class="ri-link-m"></i>
                                            </a>
                                            <div class="file-upload">
                                                <a href="javascript:void(0)" class="link text-body fs-4"
                                                    data-bs-toggle="tooltip" data-bs-html="true" title="Add a File">
                                                    <input class="file-upload-item" type="file">
                                                    <i class="ri-file-add-line"></i>
                                                </a>
                                            </div>
                                            <a href="javascript:void(0)" class="link text-body fs-4"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Send an Emoji">
                                                <i class="ri-emoji-sticker-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="chat-input"
                                        placeholder="Type your message..." autocomplete="off">
                                </div>
                                <div class="col-auto">
                                    <div class="ms-2">
                                        <div class="links-list-item">
                                            <button type="submit" class="btn btn-light-light text-body">
                                                <i class="bi bi-send-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="app-chat-overlay"></div> -->
        </div>

    </div><!--End container-fluid-->
    </main>
    </div><!--End app-wrapper-->

@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
    <script src="assets/js/app/chat.init.js"></script>

@endsection
