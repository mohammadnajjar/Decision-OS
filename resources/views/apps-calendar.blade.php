@extends('partials.layouts.master')

@section('title', 'Calendar | FabKin Admin & Dashboards Template')
@section('title-sub', 'Applications')
@section('pagetitle', 'Calendar')
@section('content')

    <!-- begin::App -->
    <div id="layout-wrapper">
        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="p-5 pb-0">
                        <div>
                            <button type="button" class="btn btn-primary w-100" data-bs-target="#exampleModalToggle"
                                data-bs-toggle="modal">
                                <svg width="20" height="20" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Create Event
                            </button>
                            <div id="external-events-container">
                                <div class="external-event bg-success-subtle text-success py-2 my-1"
                                    data-class="bg-success-subtle" data-title="Holiday"
                                    data-description="Today is a Holiday">
                                    <i class="mdi mdi-checkbox-blank-circle me-2"></i> Holiday
                                </div>
                                <div class="external-event bg-primary-subtle text-primary py-2 my-1"
                                    data-class="bg-primary-subtle" data-title="Meeting"
                                    data-description="Today is a Meeting">
                                    <i class="mdi mdi-checkbox-blank-circle me-2"></i> Meeting
                                </div>
                                <div class="external-event bg-warning-subtle text-warning py-2 my-1"
                                    data-class="bg-warning-subtle" data-title="Deadline"
                                    data-description="Today is a Deadline">
                                    <i class="mdi mdi-checkbox-blank-circle me-2"></i> Deadline
                                </div>
                                <div class="external-event bg-danger-subtle text-danger py-2 my-1"
                                    data-class="bg-danger-subtle" data-title="Birthday"
                                    data-description="Today is a Birthday">
                                    <i class="mdi mdi-checkbox-blank-circle me-2"></i> Birthday
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-action-title mb-0">Reminders</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" data-simplebar style="height: 250px;">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Valerie Farmer</h6>
                                        <span class="fs-10">Today - 1:00 PM </span>

                                    </div>
                                    <div>
                                        <div class="badge bg-primary-subtle text-primary">
                                            <i class="ri-video-on-fill"></i> Meeting
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Mathew Self</h6>
                                        <span class="fs-10">Today</span>
                                    </div>
                                    <div>
                                        <div class="badge bg-danger-subtle text-danger">
                                            <i class="ri-cake-line"></i> BirthDay
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Fabkin Project</h6>
                                        <span class="fs-10">Today - 6:00 PM </span>
                                    </div>
                                    <div>
                                        <div class="badge bg-warning-subtle text-warning">
                                            <i class="ri-calendar-schedule-line"></i> Deadline
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Labor Day</h6>
                                        <span class="fs-10">Tomorrow </span>
                                    </div>
                                    <div>
                                        <div class="badge bg-success-subtle text-success">
                                            <i class="ri-umbrella-line"></i> Holiday
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-0">Hannah Greiner</h6>
                                        <span class="fs-10">Tomorrow - 11:00 AM </span>
                                    </div>
                                    <div>
                                        <div class="badge bg-primary-subtle text-primary">
                                            <i class="ri-video-on-fill"></i> Meeting
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-action-title mb-0">Evenets Type</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="-item" href="javascript:void(0)">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="badge bg-light text-body">
                                <i class="ri-calendar-line"></i> All Events
                            </div>
                            <div class="form-check form-switch form-switch-dark mb-0">
                                <input class="form-check-input event-filter" type="checkbox" id="filter-all" checked>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="badge bg-primary-subtle text-primary">
                                <i class="ri-video-on-fill"></i> Meeting
                            </div>
                            <div class="form-check form-switch form-switch-primary mb-0">
                                <input class="form-check-input event-filter" type="checkbox" id="filter-meeting" checked>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="badge bg-danger-subtle text-danger">
                                <i class="ri-cake-line"></i> Birthday
                            </div>
                            <div class="form-check form-switch form-switch-danger mb-0">
                                <input class="form-check-input event-filter" type="checkbox" id="filter-birthday"
                                    checked>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="badge bg-warning-subtle text-warning">
                                <i class="ri-calendar-schedule-line"></i> Deadline
                            </div>
                            <div class="form-check form-switch form-switch-warning mb-0">
                                <input class="form-check-input event-filter" type="checkbox" id="filter-deadline"
                                    checked>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="badge bg-success-subtle text-success">
                                <i class="ri-umbrella-line"></i> Holiday
                            </div>
                            <div class="form-check form-switch form-switch-success mb-0">
                                <input class="form-check-input event-filter" type="checkbox" id="filter-holiday" checked>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="badge bg-info-subtle text-info">
                                <i class="ri-thermometer-line"></i> Sick Leave
                            </div>
                            <div class="form-check form-switch form-switch-info mb-0">
                                <input class="form-check-input event-filter" type="checkbox" id="filter-sickleave"
                                    checked>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

    </div>
    <!-- End Begin page -->

    <!-- modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-3">
                    <h5 class="modal-title">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="needs-validation" name="event-form" id="form-event">
                        <input type="hidden" id="eventId">
                        <label for="title" class="mb-2">Event Title:</label>
                        <input type="text" placeholder="Enter Event Title" class="form-control moving-placeholder"
                            id="inputExample" required>
                        <div class="text-danger mt-2" id="titleErr"></div>
                        <label class="mb-2" for="calendarProps">Label:</label>
                        <select class="form-select mb-2" id="form-select-01" name="form-select-01"
                            aria-label="Default select example">
                            <option selected="select menu">Open this select menu</option>
                            <option value="bg-danger-subtle">Danger</option>
                            <option value="bg-warning-subtle">Warning</option>
                            <option value="bg-primary-subtle">Primary</option>
                            <option value="bg-success-subtle">Success</option>
                        </select>
                        <div class="col-12 mb-2">
                            <label for="inputExample" class="form-label">From:</label>
                            <input type="date" class="form-control" id="inputExample">
                        </div>
                        <div class="col-12 mb-2">
                            <label for="inputExample" class="form-label">To:</label>
                            <input type="date" class="form-control" id="inputExample">
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control d-block" id="description" placeholder="Enter a description" rows="3"
                                    spellcheck="false"></textarea>
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-end">
                            <button type="submit" class="btn btn-primary">Add Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div class="modal fade" id="eventDetailsModal" aria-hidden="true" aria-labelledby="eventDetailsModalLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-3">
                    <h5 class="modal-title" id="eventDetailsTitle">Event Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p id="eventDetailsTitleText"></p>
                    <p id="eventDetailsLabel"></p>
                    <p id="eventDetailsStart"></p>
                    <p id="eventDetailsEnd"></p>
                    <p id="eventDetailsDescription"></p>
                    <input type="hidden" id="eventId">
                </div>
                <div class="modal-footer">
                    <button id="editEventBtn" class="btn btn-primary">Edit</button>
                    <button id="deleteEventBtn" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
    <script src="assets/libs/sweetalert2/sweetalert2.all.js"></script>
    <script type="module" src="assets/js/app/apps-calendar.init.js"></script>
@endsection
