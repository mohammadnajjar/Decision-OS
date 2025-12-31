/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Project create init js
*/


// Picker
const localeEn = {
    days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    months: ['January','February','March','April','May','June', 'July','August','September','October','November','December'],
    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    today: 'Today',
    clear: 'Clear',
    dateFormat: 'mm/dd/yyyy',
    timeFormat: 'hh:ii aa',
    firstDay: 0
}
let dpMin, dpMax;
dpMin = new AirDatepicker('#human-friendly-picker1', {
    locale: localeEn,
    onSelect({date}) {
        dpMax.update({
            minDate: date,
        })
    }
})

dpMax = new AirDatepicker('#human-friendly-picker2', {
    locale: localeEn,
    onSelect({date}) {
        dpMin.update({
            maxDate: date,
        })
    }
})

// Selector
document.addEventListener('DOMContentLoaded', function () {
    let projectStatus = document.getElementById('projectStatus');
    if (projectStatus) {
        const projectStatus = new Choices('#projectStatus', {
            placeholderValue: 'Select Status',
            searchEnabled: false,
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let priority = document.getElementById('priority');
    if (priority) {
        const priority = new Choices('#priority', {
            placeholderValue: 'Select Status',
            searchEnabled: false,
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let projectSize = document.getElementById('projectSize');
    if (projectSize) {
        const projectSize = new Choices('#projectSize', {
            placeholderValue: 'Select Size',
            searchEnabled: false,
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let assignedTo = document.getElementById('assignedTo');
    if (assignedTo) {
        const assignedTo = new Choices('#assignedTo', {
            placeholderValue: 'Assigned To',
            searchEnabled: false,
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
});