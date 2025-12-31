/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Tour init js
*/

import Shepherd from '../../libs/shepherd.js/esm/shepherd.mjs';

document.addEventListener('DOMContentLoaded', function () {
    const tour = new Shepherd.Tour({
        useModalOverlay: true,
        defaultStepOptions: {
            cancelIcon: { enabled: true },
            classes: 'shepherd-theme-arrows',
            scrollTo: true,
            classPrefix: 'my-tour-'
        }
    });

    tour.addStep({
        id: 'welcome',
        text: 'Welcome to Fabkin! This template offers advanced features for your admin dashboard.',
        attachTo: { element: 'h2', on: 'bottom' },
        buttons: [{ text: 'Next', action: tour.next }]
    });

    tour.addStep({
        id: 'project-management',
        text: 'This section provides tools for effective project management.',
        attachTo: { element: '.card:nth-child(1)', on: 'top' },
        buttons: [
            { text: 'Back', action: tour.back },
            { text: 'Next', action: tour.next }
        ]
    });

    tour.addStep({
        id: 'task-automation',
        text: 'Here, you can streamline your workflow with automation solutions.',
        attachTo: { element: '.card:nth-child(2)', on: 'top' },
        buttons: [
            { text: 'Back', action: tour.back },
            { text: 'Next', action: tour.next }
        ]
    });

    tour.addStep({
        id: 'data-analysis',
        text: 'This section helps you turn data into actionable insights.',
        attachTo: { element: '.card:nth-child(3)', on: 'top' },
        buttons: [
            { text: 'Back', action: tour.back },
            { text: 'Next', action: tour.next }
        ]
    });

    tour.addStep({
        id: 'who-we-are',
        text: 'Learn more about us and our commitment to excellence.',
        attachTo: { element: 'h4:nth-of-type(2)', on: 'bottom' },
        buttons: [
            { text: 'Back', action: tour.back },
            { text: 'Finish', action: tour.complete }
        ]
    });

    // Automatically start the tour when the page loads
    tour.start();
});