/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Calendar init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let today = new Date();
    let y = today.getFullYear();
    let m = today.getMonth();
    let d = today.getDate();

    let calendarEl = document.getElementById('calendar');
    let eventTitleInput = document.getElementById('inputExample');
    let eventStartDateInput = document.querySelectorAll('input[type="date"]')[0];
    let eventEndDateInput = document.querySelectorAll('input[type="date"]')[1];
    let eventDescriptionInput = document.getElementById('description');

    let events = [
        { id: "1", title: "World Braille Day", start: "2024-10-01", className: "bg-success-subtle", allDay: true, extendedProps: { label: "Holiday", description: "Celebrating the importance of Braille." } },
        { id: "2", title: "World Leprosy Day", start: "2024-10-22", className: "bg-primary-subtle", allDay: true, extendedProps: { label: "Meeting", description: "Raising awareness about leprosy." } },
        { id: "3", title: "All Day Event", start: new Date(y, m, 1), className: "bg-primary-subtle", allDay: true, extendedProps: { label: "Meeting", description: "General all-day event." } },
        { id: "4", title: "Birthday Party", start: new Date(y, m, d + 1), className: "bg-danger-subtle", allDay: true, extendedProps: { label: "Birthday", description: "Celebrating a friend's birthday." } },
        { id: "5", title: "Repeating Event", start: new Date(y, m, d + 4), end: new Date(y, m, d + 9), className: "bg-warning-subtle", allDay: true, extendedProps: { label: "Deadline", description: "A repeating event over multiple days." } },
        { id: "6", title: "Weekend Trip", start: new Date(y, m, d + 15), className: "bg-success-subtle", allDay: true, extendedProps: { label: "Holiday", description: "Weekend trip to relax and enjoy nature." } },
        { id: "7", title: "Medical Leave", start: new Date(y, m, d - 2), className: "bg-info-subtle", allDay: true, extendedProps: { label: "Sick Leave", description: "Medical leave due to illness." } },
        { id: "8", title: "Company Annual Meeting", start: new Date(y, m, d + 10), className: "bg-primary-subtle", allDay: true, extendedProps: { label: "Meeting", description: "Annual company-wide meeting." } },
        { id: "9", title: "Project Deadline", start: new Date(y, m, d + 18), className: "bg-warning-subtle", allDay: true, extendedProps: { label: "Deadline", description: "Final submission deadline for project." } },
        { id: "15", title: "National Holiday", start: new Date(y, m, d + 20), className: "bg-success-subtle", allDay: true, extendedProps: { label: "Holiday", description: "Public national holiday." } },
        { id: "16", title: "Training Session", start: new Date(y, m, d + 11), className: "bg-primary-subtle", allDay: true, extendedProps: { label: "Meeting", description: "Employee training and skill development." } },
        { id: "17", title: "Financial Report Submission", start: new Date(y, m, d + 9), className: "bg-warning-subtle", allDay: true, extendedProps: { label: "Deadline", description: "Deadline for financial report submission." } },
        { id: "18", title: "Kids' Sports Day", start: new Date(y, m, d + 6), className: "bg-danger-subtle", allDay: true, extendedProps: { label: "Birthday", description: "A fun sports event for kids." } },
        { id: "19", title: "Camping Trip", start: new Date(y, m, d + 14), className: "bg-success-subtle", allDay: true, extendedProps: { label: "Holiday", description: "Outdoor camping with friends and family." } },
        { id: "20", title: "Health Checkup", start: new Date(y, m, d - 1), className: "bg-info-subtle", allDay: true, extendedProps: { label: "Sick Leave", description: "Routine health checkup." } },
    ];

    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        editable: true,
        droppable: true,
        events: events,
        eventReceive: function (info) {
            calendar.addEvent({
                title: info.event.title,
                start: info.event.start,
                end: info.event.end,
                allDay: true,
                className: info.event.classNames[0],
                extendedProps: {
                    label: info.event.title,
                    description: info.event.description
                }
            });
        },
        eventDidMount: function (info) {
            let selectedCategories = getSelectedCategories();
            if (!selectedCategories.includes(info.event.extendedProps.label)) {
                info.el.style.display = "none";
            }
        },
        eventClick: function (info) {
            let event = info.event;

            let titleEl = document.getElementById('eventDetailsTitleText');
            let labelEl = document.getElementById('eventDetailsLabel');
            let startEl = document.getElementById('eventDetailsStart');
            let endEl = document.getElementById('eventDetailsEnd');
            let descEl = document.getElementById('eventDetailsDescription');

            if (titleEl) titleEl.innerText = event.title || "No Title";
            if (labelEl) labelEl.innerText = event.extendedProps.label || "No Label";
            if (startEl) startEl.innerText = event.start ? event.start.toISOString().split('T')[0] : "N/A";
            if (endEl) endEl.innerText = event.end ? event.end.toISOString().split('T')[0] : "N/A";
            if (descEl) descEl.innerText = event.extendedProps.description || "No Description";

            document.getElementById('eventId').value = event.id || "";

            let detailsModal = new bootstrap.Modal(document.getElementById('eventDetailsModal'));
            detailsModal.show();

            document.getElementById('deleteEventBtn').onclick = function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        event.remove();
                        Swal.fire("Deleted!", "Your event has been deleted.", "success");

                        let eventModalEl = document.getElementById('eventDetailsModal');
                        let eventModal = bootstrap.Modal.getInstance(eventModalEl);
                        eventModal.hide();
                    }
                });
            };

            document.getElementById('editEventBtn').onclick = function () {
                let detailsModalEl = document.getElementById('eventDetailsModal');
                let detailsModal = bootstrap.Modal.getInstance(detailsModalEl);
                detailsModal.hide();

                let titleInput = document.getElementById('inputExample');
                let labelInput = document.getElementById('form-select-01');
                let startInput = document.querySelectorAll('input[type="date"]')[0];
                let endInput = document.querySelectorAll('input[type="date"]')[1];
                let descInput = document.getElementById('description');

                if (titleInput) titleInput.value = event.title || "";
                if (labelInput) labelInput.value = event.extendedProps.label || "";
                if (startInput) startInput.value = event.start ? event.start.toISOString().split('T')[0] : "";
                if (endInput) endInput.value = event.end ? event.end.toISOString().split('T')[0] : "";
                if (descInput) descInput.value = event.extendedProps.description || "";

                let editModal = new bootstrap.Modal(document.getElementById('exampleModalToggle'));
                editModal.show();
            };
        },

        dateClick: function (info) {
            eventStartDateInput.value = info.dateStr;
            eventEndDateInput.value = info.dateStr;
            eventTitleInput.value = "";
            eventDescriptionInput.value = "";
            document.getElementById('eventId').value = "";
            let modal = new bootstrap.Modal(document.getElementById('exampleModalToggle'));
            modal.show();
        }
    });

    calendar.render();

    document.getElementById('form-event').addEventListener('submit', function (e) {
        e.preventDefault();

        let eventId = document.getElementById('eventId').value;
        let title = document.getElementById('inputExample').value;
        let start = document.querySelectorAll('input[type="date"]')[0].value;
        let end = document.querySelectorAll('input[type="date"]')[1].value || start;
        let description = document.getElementById('description').value;
        let label = document.getElementById('form-select-01').selectedOptions[0].text;

        if (!title.trim()) {
            document.getElementById('titleErr').innerText = "Event title is required!";
            return;
        } else {
            document.getElementById('titleErr').innerText = "";
        }

        start = new Date(start + 'T00:00:00');
        end = new Date(end + 'T23:59:59');
        let event = calendar.getEventById(eventId);
        if (event) {
            event.setProp('title', title);
            event.setStart(start);
            event.setEnd(end);
            event.setExtendedProp('description', description);
            event.setExtendedProp('label', label);
        } else {
            calendar.addEvent({
                title: title,
                start: start,
                end: end,
                allDay: true,
                className: 'bg-info-subtle',
                extendedProps: {
                    label: label,
                    description: description
                }
            });
        }

        document.getElementById('form-event').reset();
        let modalElement = document.getElementById('exampleModalToggle');
        let modalInstance = bootstrap.Modal.getInstance(modalElement);
        modalInstance.hide();
    });

    function getSelectedCategories() {
        let selected = [];
        if (document.getElementById("filter-all").checked) selected.push("All");
        if (document.getElementById("filter-meeting").checked) selected.push("Meeting");
        if (document.getElementById("filter-birthday").checked) selected.push("Birthday");
        if (document.getElementById("filter-deadline").checked) selected.push("Deadline");
        if (document.getElementById("filter-holiday").checked) selected.push("Holiday");
        if (document.getElementById("filter-sickleave").checked) selected.push("Sick Leave");
        return selected;
    }

    document.querySelectorAll(".event-filter").forEach(input => {
        input.addEventListener("change", () => {
            let selectedCategories = getSelectedCategories();
            calendar.getEvents().forEach(event => {
                let showEvent = selectedCategories.includes(event.extendedProps.label);
                event.setProp("display", showEvent ? "block" : "none");
            });
        });
    });

    let externalEventsContainer = document.getElementById("external-events-container");

    new FullCalendar.Draggable(externalEventsContainer, {
        itemSelector: ".external-event",
        eventData: function (eventEl) {
            return {
                title: eventEl.getAttribute("data-title"),
                classNames: [eventEl.getAttribute("data-class")],
                allDay: true,
            };
        },
    });

});