/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: app js
*/

// Initialize Bootstrap tooltips and popovers
function initializeBootstrapComponents(selector, Component) {
    const triggerList = document.querySelectorAll(selector);
    return [...triggerList].map((triggerEl) => new Component(triggerEl));
}

// Initialize tooltips
const tooltips = initializeBootstrapComponents(
    '[data-bs-toggle="tooltip"]',
    bootstrap.Tooltip
);

// Initialize popovers
const popovers = initializeBootstrapComponents(
    '[data-bs-toggle="popover"]',
    bootstrap.Popover
);

// Function to handle both sticky menu and button loading
function initializeAppFeatures() {
    const stickyMenu = document.getElementById("appHeader"); // Ensure this ID matches your HTML
    const stickyOffset = stickyMenu.offsetTop;

    // Function to toggle sticky class on scroll
    function toggleStickyMenu() {
        if (window.scrollY > stickyOffset) {
            stickyMenu.classList.add("sticky-scroll");
        } else {
            stickyMenu.classList.remove("sticky-scroll");
        }
    }

    // Attach the scroll event listener
    window.addEventListener("scroll", toggleStickyMenu);

    // Attach click event listeners to all loader buttons
    document.querySelectorAll(".btn-loader").forEach((button) => {
        button.addEventListener("click", function () {
            const indicatorLabel = this.querySelector(".indicator-label");
            const originalText = indicatorLabel.textContent;
            const loadingText = this.getAttribute("data-loading-text");

            // Show loading indicator and disable button
            this.classList.add("loading");
            indicatorLabel.textContent = loadingText;
            this.disabled = true;

            // Simulate an asynchronous operation (e.g., form submission)
            setTimeout(() => {
                // Hide loading indicator and reset button
                this.classList.remove("loading");
                indicatorLabel.textContent = originalText;
                this.disabled = false;
            }, 1500); // Simulated delay of 1.5 seconds
        });
    });
}

// Call the function to initialize features
document.addEventListener("DOMContentLoaded", initializeAppFeatures);
