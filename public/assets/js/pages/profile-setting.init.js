/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Profile Setting init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let genderChoice = document.getElementById('gender-choice');
    if (genderChoice) {
        const choices = new Choices('#gender-choice', {
            placeholderValue: 'Select Gender',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let stateChoice = document.getElementById('state-choice');
    if (stateChoice) {
        const choices = new Choices('#state-choice', {
            placeholderValue: 'Select State',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
});