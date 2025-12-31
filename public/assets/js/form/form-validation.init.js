/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Email init js
*/

document.addEventListener("DOMContentLoaded", function () {
    // Select all forms that require validation
    const forms = document.querySelectorAll(".needs-validation");

    forms.forEach(form => {
        // Handle form submission
        form.addEventListener("submit", function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();

                // Focus the first invalid element for better accessibility
                const firstInvalid = form.querySelector(":invalid");
                if (firstInvalid) {
                    firstInvalid.focus();
                }
            }
            form.classList.add("was-validated");
        });

        // Use event delegation instead of attaching listeners to each input
        form.addEventListener("input", function (event) {
            const input = event.target;

            // Only process input and select elements
            if (input.tagName === "INPUT" || input.tagName === "SELECT") {
                // Add debounce for better performance on text inputs
                if (input.type === "text" || input.type === "email" || input.type === "password") {
                    clearTimeout(input.dataset.debounceTimeout);
                    input.dataset.debounceTimeout = setTimeout(() => validateInput(input), 300);
                } else {
                    validateInput(input);
                }
            }
        });

        // Add blur event for validation when user leaves a field
        form.addEventListener("blur", function (event) {
            const input = event.target;
            if ((input.tagName === "INPUT" || input.tagName === "SELECT") && !input.dataset.validated) {
                validateInput(input);
                // Mark as having been validated once
                input.dataset.validated = "true";
            }
        }, true);

        // Reset validation state when form is reset
        form.addEventListener("reset", function () {
            form.classList.remove("was-validated");
            const inputs = form.querySelectorAll("input, select");
            inputs.forEach(input => {
                input.classList.remove("is-valid", "is-invalid");
                input.dataset.validated = "";

                // Clear any custom error messages
                const feedbackElement = input.parentElement.querySelector(".invalid-feedback");
                if (feedbackElement) {
                    feedbackElement.textContent = input.validationMessage || "";
                }
            });
        });
    });

    // Function to validate an individual input
    function validateInput(input) {
        if (input.checkValidity()) {
            input.classList.remove("is-invalid");
            input.classList.add("is-valid");
        } else {
            input.classList.remove("is-valid");
            input.classList.add("is-invalid");

            // Update custom error message if element exists
            const feedbackElement = input.parentElement.querySelector(".invalid-feedback");
            if (feedbackElement) {
                feedbackElement.textContent = input.validationMessage || "";
            }
        }
    }
});