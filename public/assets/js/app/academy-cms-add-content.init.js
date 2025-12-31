/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Academy Cms Content  init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let AttributesTitle = document.getElementById('AttributesTitle');
    if (AttributesTitle) {
        const AttributesTitle = new Choices('#AttributesTitle', {
            placeholderValue: 'AttributesTitle',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let PageType = document.getElementById('PageType');
    if (PageType) {
        const PageType = new Choices('#PageType', {
            placeholderValue: 'AttributesTitle',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let status = document.getElementById('status');
    if (status) {
        const status = new Choices('#status', {
            placeholderValue: 'AttributesTitle',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let visibility = document.getElementById('visibility');
    if (visibility) {
        const visibility = new Choices('#visibility', {
            placeholderValue: 'AttributesTitle',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
});