/*
Template Name: FabKin - Admin & Dashboard Template
Author: Pixeleyez
File: Air Datapickr js
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
    autoClose: false,
    dateFormat: 'dd/MM/yyyy',
    locale: localeEn,
});

new AirDatepicker('#select-initialization-piker', {
    selectedDates: [new Date()],
    locale: localeEn,
})

new AirDatepicker('#month-selection-picker', {
    view: 'months',
    minView: 'months',
    dateFormat: 'MMMM yyyy',
    locale: localeEn,
})

new AirDatepicker('#mobile-devices-picker', {
    isMobile: true,
    autoClose: true,
    locale: localeEn,
});

new AirDatepicker('#positioning-picker', {
    position: 'right center',
    locale: localeEn,
})

new AirDatepicker('#range-picker', {
    range: true,
    multipleDatesSeparator: ' - ',
    locale: localeEn,
});

new AirDatepicker('#timepicker', {
    timepicker: true,
    locale: localeEn,
});

let today = new Date();

new AirDatepicker('#cells-picker', {
    // Handle render process
    onRenderCell({date, cellType}) {
        let dates = [1, 5, 7, 10, 15, 20, 25],
            emoji = ['💕', '😃', '🍙', '🍣', '🍻', '🎉', '🥁'],
            isDay = cellType === 'day',
            _date = date.getDate(),
            shouldChangeContent = isDay && dates.includes(_date),
            randomEmoji = emoji[Math.floor(Math.random() * emoji.length)];
    
        return {
            html: shouldChangeContent ? randomEmoji : undefined,
            classes: shouldChangeContent ? '-emoji-cell-' : undefined,
            attrs: {
                title: shouldChangeContent ? randomEmoji : ''
            }
        }
    },
    locale: localeEn,
    
    // Select 10th day of the month
    selectedDates: new Date(today.getFullYear(), today.getMonth(), 10)
});

new AirDatepicker('#preinstalled-picker', {
    buttons: ['today', 'clear'],
    locale: localeEn,
})