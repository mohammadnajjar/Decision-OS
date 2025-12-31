/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Checkout init js
*/

// Function to update the selected card
function updateSelectedCard(selectedRadio) {
    // First, remove selected class from all cards
    document.querySelectorAll('.address-content').forEach(content => {
        content.classList.remove('selected');
    });

    // Then add selected class to the card containing the checked radio
    if (selectedRadio && selectedRadio.checked) {
        const cardBody = selectedRadio.closest('.address-content');
        if (cardBody) {
            cardBody.classList.add('selected');
        }
    }
}

// Get all radio buttons
const radioButtons = document.querySelectorAll('input[name="shippingAddress"]');

// Add event listener to each radio button
radioButtons.forEach(radio => {
    radio.addEventListener('change', function () {
        updateSelectedCard(this);
    });
});

// Make entire card clickable
const cards = document.querySelectorAll('.card');
cards.forEach(card => {
    card.addEventListener('click', function (e) {
        // Prevent default behavior if clicking on the radio itself
        if (e.target.type !== 'radio') {
            const radio = this.querySelector('input[type="radio"]');
            if (radio) {
                radio.checked = true;
                updateSelectedCard(radio);
            }
        }
    });
});

// Initialize on page load to ensure correct state
window.addEventListener('DOMContentLoaded', function () {
    const checkedRadio = document.querySelector('input[name="shippingAddress"]:checked');
    updateSelectedCard(checkedRadio);
});