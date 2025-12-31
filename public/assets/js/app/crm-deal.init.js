/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: CRM deal init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let dealStatus = document.getElementById('dealStatus');
    if (dealStatus) {
        const dealStatus = new Choices('#dealStatus', {
            placeholderValue: 'Select Status',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
});

dragula([document.querySelector('#b1'), document.querySelector('#b2'), document.querySelector('#b3'), document.querySelector('#b4'), document.querySelector('#b5')]);