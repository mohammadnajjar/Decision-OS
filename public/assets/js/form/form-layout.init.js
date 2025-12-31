/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Form Layout Js File
*/

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
new AirDatepicker('#basic-picker', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});

new AirDatepicker('#basic-picker1', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});

new AirDatepicker('#basic-picker2', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});

new AirDatepicker('#basic-picker3', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});

// Initialize Choice.js
const stateSelect = new Choices('#stateSelectLayout1', {
    searchEnabled: false,
    placeholder: true,
    placeholderValue: 'Select State',
});

// Initialize Choice.js
const stateSelect2 = new Choices('#stateSelectLayout2', {
    searchEnabled: false,
    placeholder: true,
    placeholderValue: 'Select State',
});

// Initialize Choice.js
const stateSelect3 = new Choices('#stateSelect2Layout3', {
    searchEnabled: false,
    placeholder: true,
    placeholderValue: 'Select State',
});
// Initialize Choice.js
const stateSelect2Layout4 = new Choices('#stateSelect2Layout4', {
    searchEnabled: false,
    placeholder: true,
    placeholderValue: 'Select State',
});
// Initialize Choice.js
const stateSelect2Layout5 = new Choices('#stateSelect2Layout5', {
    searchEnabled: false,
    placeholder: true,
    placeholderValue: 'Select State',
});
// Initialize Choice.js
const stateSelect2Layout6 = new Choices('#stateSelect2Layout6', {
    searchEnabled: false,
    placeholder: true,
    placeholderValue: 'Select State',
});