/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Rating init js
*/

// Reusable function to initialize star ratings
function initStarRating(selector, options) {
    return new StarRating(selector, {
        classNames: {
            active: 'gl-active',
            base: 'gl-star-rating',
            selected: 'gl-selected',
        },
        clearable: true,
        prebuilt: false,
        tooltip: false,
        ...options,
    });
}

document.addEventListener('DOMContentLoaded', () => {
    // Initialize different star ratings
    initStarRating('.basic-rating', { maxStars: 5 });
    initStarRating('.read-only-rating', { maxStars: 5 });
    initStarRating('.heart-rating', { maxStars: 5 });
    initStarRating('.rating-numbers', { maxStars: 10 });
    initStarRating('.selectedMessage', { maxStars: 5 });
    initStarRating('.rating-values', { maxStars: 5 });
    initStarRating('.reset-rating', { maxStars: 5 });
    initStarRating('.rtl-rating', { maxStars: 5 });
    initStarRating('.star-rating-prebuilt', { prebuilt: true, maxStars: 5 });
    initStarRating('.half-star-rating', { maxStars: 5 });

    // Update selected text for select elements
    const selectElements = document.querySelectorAll('.rating-container select.selectedMessage');
    selectElements.forEach(selectElement => {
        const outputSpan = document.getElementById(selectElement.getAttribute('data-target'));

        const updateSelectedText = () => {
            const selectedValue = selectElement.value;
            const selectedIndex = selectElement.selectedIndex;

            if (selectedIndex >= 0) {
                const selectedText = selectElement.options[selectedIndex].text;
                outputSpan.textContent = selectedText; // Update span text
                selectElement.classList.toggle('gl-active', selectedValue !== '5'); // Adjust condition as needed
            }
        };

        updateSelectedText(); // Initial update
        selectElement.addEventListener('change', updateSelectedText); // Update on change
    });

    // Initialize rating values display
    const ratingSelect = document.querySelector('.rating-values');
    const ratingDisplay = document.querySelector('.current-rating');

    // Update the display with the initial value
    ratingDisplay.textContent = `Rating: ${ratingSelect.value}`;

    // Update the rating display on change
    ratingSelect.addEventListener('change', function () {
        ratingDisplay.textContent = `Rating: ${this.value}`;
    });

    // Reset ratings functionality
    const resetButton = document.querySelector('.reset-rating-main .btn[type="reset"]');
    const resetSelects = document.querySelectorAll('.reset-rating-main .gl-star-rating--stars span');

    // Ensure the resetButton exists before adding the event listener
    resetButton?.addEventListener('click', () => {
        resetSelects.forEach(select => select.classList.remove('gl-active'));
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const ratingInput = document.querySelector('.custom-rating');

    ratingInput.addEventListener('input', () => {
        ratingInput.style.setProperty('--value', ratingInput.value);
    });

    // Initialize the value on page load
    ratingInput.style.setProperty('--value', ratingInput.value);
});