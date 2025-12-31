/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Placeholder init js
*/

// Sample data array including image URLs
const cardData = [
    {
        title: "Card Title 1",
        text: "This is some example text for card 1.",
        imageUrl: "assets/images/small/img-4.jpg"
    },
    {
        title: "Card Title 2",
        text: "This is some example text for card 2.",
        imageUrl: "assets/images/small/img-5.jpg"
    },
    {
        title: "Card Title 3",
        text: "This is some example text for card 3.",
        imageUrl: "assets/images/small/img-6.jpg"
    }
];

/**
 * Creates a single card element as HTML string.
 * @param {Object} data - The card data object.
 * @param {boolean} isPlaceholder - Whether to render as a placeholder.
 * @returns {string} - HTML string for the card.
 */
const createCard = (data = {}, isPlaceholder = false) => {
    if (isPlaceholder) {
        return `
            <div class="col-md-6 col-xl-4">
                <div class="card mb-0">
                    <img class="card-img-top h-200px object-fit-cover" src="assets/images/placeholder-3.jpg" alt="Placeholder">
                    <div class="card-body">
                        <h6 class="card-title placeholder col-6"></h6>
                        <p class="card-text placeholder col-12"></p>
                        <a class="btn btn-primary placeholder disabled">Go somewhere</a>
                    </div>
                </div>
            </div>
        `;
    }
    return `
        <div class="col-md-6 col-xl-4">
            <div class="card mb-0">
                <img class="card-img-top h-200px object-fit-cover" src="${data.imageUrl}" alt="${data.title}">
                <div class="card-body">
                    <h6 class="card-title">${data.title}</h6>
                    <p class="card-text">${data.text}</p>
                    <a class="btn btn-primary" href="javascript:void(0)">Go somewhere</a>
                </div>
            </div>
        </div>
    `;
};

/**
 * Renders cards into the container.
 * @param {boolean} isPlaceholder - Whether to render placeholders.
 */
const renderCards = (isPlaceholder = false) => {
    const cardRow = document.getElementById('cardRow');
    const content = isPlaceholder
        ? Array(3).fill().map(() => createCard({}, true)).join('') // Render 3 placeholders
        : cardData.map(data => createCard(data)).join(''); // Render actual cards

    cardRow.innerHTML = content;
};

// Automatically reload cards
const autoReload = () => {
    renderCards(true); // Show placeholders
    setTimeout(() => renderCards(false), 500); // Simulate loading real cards after 500ms
};

// Start auto-reload every 5 seconds
window.onload = () => {
    autoReload(); // Initial load
    setInterval(autoReload, 5000); // Auto-reload every 5 seconds
};