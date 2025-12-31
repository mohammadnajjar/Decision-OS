/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Invoice Create init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let status = document.getElementById('status');
    if (status) {
        const status = new Choices('#status', {
            placeholderValue: 'Select Status',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let paymentStatus = document.getElementById('paymentStatus');
    if (paymentStatus) {
        const status = new Choices('#paymentStatus', {
            placeholderValue: 'Select Status',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
})

var myDropzoneMain = document.getElementById('my-dropzone');

if (myDropzoneMain) {
    // Disable auto discover for all elements
    Dropzone.autoDiscover = false;

    // Create a new Dropzone
    const myDropzone = new Dropzone("#my-dropzone", {
        url: "/file-upload", // Change this to your server endpoint
        maxFilesize: 2, // MB
        acceptedFiles: ".jpg,.jpeg,.png,.gif",
        init: function () {
            this.on("success", function (file, response) {
                console.log("File uploaded successfully:", response);
            });

            this.on("error", function (file, errorMessage) {
                console.error("File upload error:", errorMessage);
            });
        }
    });
}


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
new AirDatepicker('#human-friendly-picker1', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});
new AirDatepicker('#human-friendly-picker2', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});
new AirDatepicker('#human-friendly-picker3', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});