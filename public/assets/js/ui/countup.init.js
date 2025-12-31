/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Countup Js File
*/

import { CountUp } from '../../libs/countup.js/countUp.min.js';

function initializeCounters() {
    const counters = document.querySelectorAll('[data-target]');

    counters.forEach(counterElement => {
        const target = parseFloat(counterElement.getAttribute('data-target'));
        const duration = parseFloat(counterElement.getAttribute('data-duration'));
        const separator = counterElement.getAttribute('data-separator') || '';
        const prefix = counterElement.getAttribute('data-prefix') || '';
        const suffix = counterElement.getAttribute('data-suffix') || '';
        const decimalPlaces = counterElement.getAttribute('data-decimal-places') ? parseInt(counterElement.getAttribute('data-decimal-places')) : 0;

        const countUp = new CountUp(counterElement, target, {
            duration: duration,
            separator: separator,
            prefix: prefix,
            suffix: suffix,
            decimalPlaces: decimalPlaces,
            useEasing: true,
            useGrouping: true,
        });

        countUp.start();
    });
}

// Start counters on page load
window.onload = initializeCounters;

const lossCounterOptions = {
    startVal: 24583,
    prefix: "-",
    suffix: "$",
    duration: 5, // Duration in seconds
    useEasing: true, // Use easing for animation
    decimalPlaces: 0 // No decimal places
};
let demo2 = new CountUp('lossCounter', 840, lossCounterOptions); // Counting up to 10000
if (!demo2.error) {
    demo2.start();
} else {
    console.error(demo2.error);
}