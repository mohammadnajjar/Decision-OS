/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: File Upload Js File
*/
// script.js


// File Upload

document.addEventListener("DOMContentLoaded", function () {
    const uploaders = document.querySelectorAll('[data-uploader]');

    uploaders.forEach(uploader => {
        const img = uploader.querySelector('[data-action="avatar-image"]');
        const fileInput = uploader.querySelector('[data-action="file-input"]');
        const chooseFileBtn = uploader.querySelector('[data-action="choose-file"]');
        const deleteBtn = uploader.querySelector('[data-action="delete-image"]');

        // Set the default image on load
        img.src = img.dataset.defaultSrc;

        // Event listener for choosing a file
        chooseFileBtn.addEventListener('click', function () {
            fileInput.click();
        });

        // Event listener for file input change
        fileInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    img.src = e.target.result; // Update the image source to the uploaded file
                };
                reader.readAsDataURL(file); // Convert the file to a Data URL
            }
        });

        // Event listener for deleting the image
        deleteBtn.addEventListener('click', function () {
            img.src = img.dataset.defaultSrc; // Reset to default image
            fileInput.value = ""; // Clear the file input
        });
    });
});


var myDropzoneMain = document.getElementById('my-dropzone');

if (myDropzoneMain) {
    // Disable auto discover for all elements
    Dropzone.autoDiscover = false;

    // Create a new Dropzone
    const myDropzone = new Dropzone("#my-dropzone", {
        url: "/file-upload", // Change this to your server endpoint
        maxFilesize: 2, // MB
        acceptedFiles: ".jpg,.jpeg,.png,.gif",
        init: function () {
            this.on("success", function (file, response) {
                console.log("File uploaded successfully:", response);
            });

            this.on("error", function (file, errorMessage) {
                console.error("File upload error:", errorMessage);
            });
        }
    });
}

document.getElementById("formFile")?.addEventListener("change", function () {
    const file = this.files[0];
    const errorMsg = document.getElementById("fileError");
    errorMsg.textContent = ""; // Clear previous errors

    if (file) {
        const allowedTypes = ["image/jpeg", "image/png", "image/gif"];
        const maxSize = 2 * 1024 * 1024; // 2MB

        if (!allowedTypes.includes(file.type)) {
            errorMsg.textContent = "Error: Only JPG, PNG, or GIF files are allowed.";
            this.value = ""; // Reset input
            return;
        }

        if (file.size > maxSize) {
            errorMsg.textContent = "Error: File size must be 2MB or less.";
            this.value = ""; // Reset input
            return;
        }
    }
});

document.querySelectorAll(".file-upload-item")?.forEach(input => {
    input.addEventListener("change", function () {
        const file = this.files[0];
        const errorMsg = this.nextElementSibling;
        errorMsg.textContent = ""; // Clear previous errors

        if (file) {
            const allowedTypes = ["image/jpeg", "image/png", "image/gif"];
            const maxSize = 2 * 1024 * 1024; // 2MB

            if (!allowedTypes.includes(file.type)) {
                errorMsg.textContent = "Error: Only JPG, PNG, or GIF files are allowed.";
                this.value = ""; // Reset input
                return;
            }

            if (file.size > maxSize) {
                errorMsg.textContent = "Error: File size must be 2MB or less.";
                this.value = ""; // Reset input
                return;
            }
        }
    });
});
