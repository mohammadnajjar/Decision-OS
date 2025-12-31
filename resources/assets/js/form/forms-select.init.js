/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Forms Select js
*/

document.addEventListener('DOMContentLoaded', function () {
    // Function to initialize Choices
    const initializeChoices = (selector, options) => {
        const element = document.querySelector(selector);
        return element ? new Choices(element, options) : null;
    };

    // Configurations for Choices
    const choicesConfigs = [
        {
            selector: '#default-choice',
            options: {
                placeholderValue: 'Select an option',
                searchPlaceholderValue: 'Search...',
            },
        },
        {
            selector: '#choices-groups',
            options: {
                placeholderValue: 'Select an option groups',
                searchPlaceholderValue: 'Search...',
            },
        },
        {
            selector: '#choices-default-multiple',
            options: {
                placeholderValue: 'Add items...',
            },
        },
        {
            selector: '#choices-multiple-close-icon',
            options: {
                removeItemButton: true,
                placeholderValue: 'Add items...',
            },
        },
        {
            selector: '#choices-multiple-limit',
            options: {
                maxItemCount: 3,
                removeItemButton: true,
                placeholderValue: 'Add items...',
            },
        },
        {
            selector: '#choices-multiple-option-group',
            options: {
                removeItemButton: true,
                placeholderValue: 'Add items...',
            },
        },
        {
            selector: '#choices-text-inputs',
            options: {
                editItems: true,
                removeItemButton: true,
                placeholderValue: 'Add items...',
            },
        },
        {
            selector: '#choices-unique-text-inputs',
            options: {
                editItems: true,
                paste: false,
                duplicateItemsAllowed: false,
                removeItemButton: true,
                placeholderValue: 'Add items...',
            },
        },
        {
            selector: '#choices-text-email-filter',
            options: {
                editItems: true,
                removeItemButton: true,
                addItemFilter: function (value) {
                    if (!value) return false;

                    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return regex.test(value);
                },
                placeholderValue: 'Enter valid email...',
            },
            initialValue: ['joe@bloggs.com'],
        }
    ];

    // Initialize Choices and handle events
    choicesConfigs.forEach(config => {
        const instance = initializeChoices(config.selector, config.options);

        // Set initial values if provided
        if (config.initialValue) {
            // Ensure initialValue is in the correct format
            instance?.setValue(config.initialValue.map(email => ({ value: email })));
        }
    });
});

const flexCheckIndeterminate = document.getElementById('flexCheckIndeterminate');
if (flexCheckIndeterminate) {
    const checkbox = flexCheckIndeterminate.indeterminate = true;
}