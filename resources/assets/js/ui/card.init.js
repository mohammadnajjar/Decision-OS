/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Card init js
*/

document.addEventListener('DOMContentLoaded', () => {
    const createLoader = () => {
        const loader = document.createElement('div');
        loader.className = 'card-loader';
        loader.innerHTML = `
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <span class="mt-3">Loading...</span>
        `;
        return loader;
    };

    const showLoader = card => {
        let loader = card.querySelector('.card-loader');
        if (!loader) {
            loader = createLoader();
            card.appendChild(loader);
        }
        loader.classList.add('show');
        return loader;
    };

    const hideLoader = card => {
        const loader = card.querySelector('.card-loader');
        if (loader) {
            loader.classList.remove('show');
            setTimeout(() => loader.remove(), 300);
        }
    };

    document.querySelectorAll('.card').forEach(card => {
        const cardId = card.getAttribute('id'); // Get the card ID dynamically

        const reloadButton = card.querySelector('.card-reload');
        if (reloadButton) {
            reloadButton.addEventListener('click', () => {
                const loader = showLoader(card);
                setTimeout(() => hideLoader(card), 2000); // Simulate content refresh
            });
        }

        const expandButton = card.querySelector('.card-expand');
        if (expandButton) {
            expandButton.addEventListener('click', () => {
                const isFullscreen = card.classList.toggle('fullscreen');
                const icon = expandButton.querySelector('i');
                if (icon) {
                    icon.classList.toggle('ri-fullscreen-line', !isFullscreen);
                    icon.classList.toggle('ri-fullscreen-exit-line', isFullscreen);
                }
            });
        }

        const closeButton = card.querySelector('.card-close');
        if (closeButton) {
            closeButton.addEventListener('click', () => card.remove());
        }
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            document.querySelectorAll('.card.fullscreen').forEach(card => {
                card.classList.remove('fullscreen');
                const expandButton = card.querySelector('.card-expand i');
                if (expandButton) {
                    expandButton.classList.replace('ri-fullscreen-exit-line', 'ri-fullscreen-line');
                }
            });
        }
    });

    // Initialize Sortable.js for the card container
    const sortable = new Sortable(document.getElementById('sortable-container'), {
        animation: 150,
        ghostClass: 'sortable-ghost',  // Class for the placeholder while dragging
        chosenClass: 'sortable-chosen', // Class for the dragged item
        handle: '.card-move',         // Drag handle, only card headers are draggable
    });

    const containers = [
        'multiple-containers01',
        'multiple-containers02',
        'multiple-containers03',
        'multiple-containers04'
    ];

    containers.forEach(containerId => {
        new Sortable(document.getElementById(containerId), {
            animation: 150,
            ghostClass: 'sortable-ghost',
            chosenClass: 'sortable-chosen',
            handle: '.card-move',
            group: 'shared',
        });
    });

});
