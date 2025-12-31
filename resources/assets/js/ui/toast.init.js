/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Toast init js
*/

const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
        toastBootstrap.show()
    })
}

// Get the select element and the toast container
const selectPlacement = document.getElementById('selectToastPlacement');
const toastContainer = document.getElementById('toastPlacement');

// Add an event listener to the select dropdown
selectPlacement.addEventListener('change', function () {
    // Get the selected option value
    const selectedValue = this.value;

    // Clear any previous position classes from the toast container
    toastContainer.className = 'toast-container position-absolute p-3';

    // Add the selected positioning class to the toast container
    if (selectedValue) {
        toastContainer.classList.add(...selectedValue.split(' '));
    }
});

// Toast instances array to initialize each toast element
const toastOptions = {
    animation: true,
    autohide: true,
    delay: 5000
};

// Create a map of toasts and their corresponding buttons
const toastMap = {
    showPrimaryToastBtn: 'toastPrimary',
    showSecondaryToastBtn: 'toastSecondary',
    showSuccessToastBtn: 'toastSuccess',
    showInfoToastBtn: 'toastInfo',
    showWarningToastBtn: 'toastWarning',
    showDangerToastBtn: 'toastDanger',
    showLightToastBtn: 'toastLight',
    showDarkToastBtn: 'toastDark'
};

// Initialize toasts with unique IDs
for (const [btnId, toastId] of Object.entries(toastMap)) {
    const toastEl = document.getElementById(toastId);
    const toastInstance = new bootstrap.Toast(toastEl, toastOptions);

    // Event listener for showing the toast
    document.getElementById(btnId).addEventListener('click', function () {
        toastInstance.show();
    });
}