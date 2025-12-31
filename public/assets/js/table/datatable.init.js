/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: DataTable init js
*/
"use strict";

// Default DataTable configuration for Bootstrap 5
var defaults = {
    language: {
        info: "Showing _START_ to _END_ of _TOTAL_ records",
        infoEmpty: "Showing no records",
        lengthMenu: "_MENU_",
        paginate: {
            first: '<i class="ri-arrow-left-double-line"></i>',
            last: '<i class="ri-arrow-right-double-line"></i>',
            next: '<i class="ri-arrow-right-s-line"></i>',
            previous: '<i class="ri-arrow-left-s-line"></i>'
        }
    }
};

// Extend jQuery DataTable defaults
$.extend(true, $.fn.dataTable.defaults, defaults);

// DataTable initialization
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery', 'datatables.net'], factory);
    } else {
        factory(jQuery);
    }
}(function ($) {
    var DataTable = $.fn.dataTable;

    // Set DataTable defaults
    $.extend(true, DataTable.defaults, {
        pagingType: 'simple_numbers',
        dom: "<'table-responsive'tr><'d-flex gap-3 justify-content-center justify-content-md-between flex-wrap'l p>",
        renderer: 'bootstrap'
    });

    // Default classes for Bootstrap 5
    $.extend(DataTable.ext.classes, {
        sWrapper: "dataTables_wrapper dt-bootstrap5",
        sFilterInput: "form-control",
        sLengthSelect: "form-select",
        sPageButton: "paginate_button page-item"
    });

    return DataTable;
}));

// Add Bootstrap classes to filter input
$(document).on('init.dt', function (e, settings) {
    $(settings.nTableWrapper).find('.dt-buttons button.dt-button').addClass('btn btn-primary'); // Style input
    $(settings.nTableWrapper).find('.dataTables_filter input').addClass('form-control');
});


// ------------------------------------------------

$(document).ready(function () {
    $('#default_datatable').DataTable();
});

document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#scroll-vertical', {
        "scrollY": "210px",
        "scrollCollapse": true,
        "paging": false
    });

});

document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#scroll-horizontal', {
        "scrollX": true
    });
});

document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#alternative-pagination', {
        "pagingType": "full_numbers"
    });
});


//buttons exmples
document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#buttons-datatables', {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print', 'pdf'
        ]
    });
});