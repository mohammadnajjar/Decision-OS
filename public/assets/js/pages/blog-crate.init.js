/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Blog Create init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let blogChoice = document.getElementById('default-choice');
    if (blogChoice) {
        const choices = new Choices('#default-choice', {
            placeholderValue: 'Select Category',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let multipleChoice = document.getElementById('choices-default-multiple');
    if (multipleChoice) {
      const multipleChoices = new Choices('#choices-default-multiple', {
        placeholderValue: '',
        searchPlaceholderValue: 'Search...',
        removeItemButton: true,
        itemSelectText: 'Press to select',
        shouldSort: false,
      });
      multipleChoice.selectedIndex = 0;
      multipleChoices.setChoiceByValue(multipleChoice.options[0].value);
    }
    let publisgChoice = document.getElementById('choices-publish-status');
    if (publisgChoice) {
        const publisgChoice = new Choices('#choices-publish-status', {
            placeholderValue: 'Select Status',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let visibilityChoice = document.getElementById('choices-blog-visibility');
    if (visibilityChoice) {
        const visibilityChoice = new Choices('#choices-blog-visibility', {
            placeholderValue: 'Select Visibility',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
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
    new AirDatepicker('#human-friendly-picker', {
        autoClose: false,
        dateFormat: 'dd/MM/yyyy',
        locale: localeEn,
    });
});