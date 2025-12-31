/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Logistic create init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let state = document.getElementById('state');
    if (state) {
        const state = new Choices('#state', {
            placeholderValue: 'Select State',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let city = document.getElementById('city');
    if (city) {
        const city = new Choices('#city', {
            placeholderValue: 'Select City',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
});


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
            minDate: date
        })
    }
})

dpMax = new AirDatepicker('#human-friendly-picker2', {
    locale: localeEn,
    onSelect({date}) {
        dpMin.update({
            maxDate: date
        })
    }
})

// Leaflet Map

function initializeMap(mapId, coords) {
    const map = L.map(mapId).setView(coords, 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    return map;
}

// Initialize only the leaflet_map_popup
const mapPopup = initializeMap('leaflet_map_popup', [51.505, -0.09]);

// Add a logistics marker with a popup
const logisticsMarker = L.marker([51.5, -0.09]).addTo(mapPopup);
logisticsMarker.bindPopup("<b>Out for Delivery</b><br>ETA: 2:30 PM 🚚").openPopup();

