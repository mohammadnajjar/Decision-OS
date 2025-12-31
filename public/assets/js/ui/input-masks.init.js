/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Masks Js File
*/

// **------ 1 Date Input**
new Cleave('#simple-date', {
    date: true,
    delimter: '/',
    datePattern: ['d', 'm', 'Y']
});
new Cleave('#date-month', {
    date: true,
    datePattern: ['d', 'm']
});
new Cleave('#formatted-date', {
    date: true,
    delimiter: '-',
    datePattern: ['Y', 'm', 'd']
});
new Cleave('#date-delimiters', {
    date: true,
    delimiter: '.',
    datePattern: ['d', 'm', 'Y']
});

// **------ 2 Time Input**
new Cleave('#simple-time', {
    time: true,
    timePattern: ['h', 'm', 's']
});
new Cleave('#minutes-seconds', {
    time: true,
    timePattern: ['h', 's']
});
new Cleave('#hours-minutes', {
    time: true,
    timePattern: ['h', 'm']
});

//  **------ 3 Custom Input**
new Cleave('#contact-number', {
    delimiter: '-',
    blocks: [3, 3, 4],
});
new Cleave('#formatted-contact', {
    delimiters: ['(', ')', '(', ')', '(', ')'],
    blocks: [0, 3, 0, 3, 0, 4, 0],
    uppercase: true
});
new Cleave('#credit-card', {
    creditCard: true,
});
new Cleave('#numeral-format', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
});
new Cleave('#price', {
    numeral: true,
    prefix: '$',
    signBeforePrefix: true
});
new Cleave('#formatted-price', {
    numeral: true,
    prefix: '€',
    tailPrefix: true
});
new Cleave('#prefix', {
    blocks: [6, 3, 3, 3],
    prefix: '123'
});
new Cleave('#prefix-delimiters', {
    prefix: 'PREFIX',
    delimiters: ['-', '-', '.'],
    blocks: [6, 3, 3, 2],
    uppercase: true
});
