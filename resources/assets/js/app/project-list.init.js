/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Project list init js
*/

document.addEventListener('DOMContentLoaded', function () {
    let statusChoice = document.getElementById('status-choice');
    if (statusChoice) {
        const choices = new Choices('#status-choice', {
            placeholderValue: 'Select Satus',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
    let priorityChoice = document.getElementById('priority-choice');
    if (priorityChoice) {
        const choices = new Choices('#priority-choice', {
            placeholderValue: 'Select Priority',
            searchPlaceholderValue: 'Search...',
            removeItemButton: true,
            itemSelectText: 'Press to select',
        });
    }
});