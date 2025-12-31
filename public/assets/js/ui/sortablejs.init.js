/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Card init js
*/

// Common options for all sortable instances
const commonOptions = {
    animation: 150,
    ghostClass: 'sortable-ghost',
    chosenClass: 'sortable-chosen',
    fallbackOnBody: true,
    swapThreshold: 0.65
};

// Function to initialize Sortable for a given container with additional options
const initializeSortable = (containerId, additionalOptions = {}) => {
    const options = { ...commonOptions, ...additionalOptions };
    const container = document.getElementById(containerId);
    if (container) {
        new Sortable(container, options);
    }
};

// Reusable configuration for sortable instances
const sortableConfigs = [
    {
        id: 'js-sortable',
        options: {
            handle: '.list-group-item'
        }
    },
    {
        id: 'js-sortable-2',
        options: {
            handle: '.list-group-item',
            group: 'shared'
        }
    },
    {
        id: 'js-sortable-3',
        options: {
            handle: '.list-group-item',
            group: 'shared'
        }
    },
    {
        id: 'js-sortable-4',
        options: {
            handle: '.list-group-item',
            group: {
                name: 'disable_sort',
                pull: 'clone',
            },
            sort: false
        }
    },
    {
        id: 'js-sortable-5',
        options: {
            handle: '.list-group-item',
            group: {
                name: 'disable_sort',
                pull: 'clone',
            },
        }
    },
    {
        id: 'js-sortable-6',
        options: {
            handle: '.sortablejs-custom-handle'
        }
    },
    {
        id: 'js-sortable-7',
        options: {
            handle: '.list-group-item',
            filter: '.sortablejs-custom-disabled'
        }
    },
    {
        id: 'js-sortable-8',
        options: {
            handle: '.col-md-2'
        }
    },
    {
        id: 'js-sortable-9',
        options: {
            handle: '.list-group-item',
        }
    },
    {
        id: 'js-sortable-10',
        options: {
            handle: '.list-group-item'
        }
    },
    {
        id: 'js-sortable-11',
        options: {
            multiDrag: true,
            selectedClass: "active",
            handle: '.list-group-item'
        }
    },
    {
        id: 'js-sortable-12',
        options: {
            swap: true,
            swapClass: "active",
            handle: '.list-group-item'
        }
    },
    {
        id: 'nested-sortable-1',
        options: {
            group: 'nested', // Enable nested sorting for this container
            handle: '.list-group-item'
        }
    },
    {
        id: 'nested-sortable-2',
        options: {
            group: 'nested', // Enable nested sorting for this container
            handle: '.list-group-item'
        }
    },
    {
        id: 'nested-sortable-1-1', // Nested sortables if needed
        options: {
            group: 'nested',
            handle: '.list-group-item'
        }
    }
];

// Initialize all sortable instances
sortableConfigs.forEach(({ id, options }) => initializeSortable(id, options));
