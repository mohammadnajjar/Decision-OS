/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: sweetalert.init.js
*/
const commonAlertOptions = {
    customClass: {
        confirmButton: 'btn btn-primary',
        denyButton: 'btn btn-warning',
        cancelButton: 'btn btn-secondary'
    }
};

const alerts = {
    basicMessage: () => Swal.fire("Any fool can use a computer", '', 'info', commonAlertOptions),

    titleText: () => Swal.fire("The Internet?", "That thing is still around?", "question", commonAlertOptions),

    errorType: () => Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
        ...commonAlertOptions
    }),

    customHtml: () => Swal.fire({
        title: '<h2 class="fs-5">Welcome to Our Platform!</h2>',
        icon: "info",
        html: `
            <p class="mb-4">We're thrilled to share the latest features designed to enhance your experience:</p>
            <ul class="list-group">
                <li class="list-group-item border-0 py-1">
                    <i class="ri-search-line me-2 text-primary"></i>Enhanced Search Functionality
                </li>
                <li class="list-group-item border-0 py-1">
                    <i class="ri-bar-chart-line me-2 text-success"></i>Improved Analytics Dashboard
                </li>
                <li class="list-group-item border-0 py-1">
                    <i class="ri-user-line me-2 text-warning"></i>User-Friendly Interface Updates
                </li>
            </ul>
            <p class="mt-4 mb-0">Join us as we continue to evolve and innovate!</p>
    `,
        // html: 'You can use <b>bold text</b>, <a href="//sweetalert2.github.io" class="btn btn-link">links</a> and other HTML tags',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: '<i class="ri-thumb-up-line"></i> Great!',
        cancelButtonText: 'Cancel <i class="ri-thumb-down-line"></i>',
        ...commonAlertOptions
    }),

    threeButtons: () => Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save As",
        denyButtonText: "Don't save",
        ...commonAlertOptions
    }).then(result => {
        if (result.isConfirmed) {
            Swal.fire("Saved!", "", "success");
        } else if (result.isDenied) {
            Swal.fire("Changes are not saved", "", "info");
        }
    }),

    customPosition: () => Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Your work has been saved",
        showConfirmButton: false,
        timer: 1500,
    }),

    customImage: () => Swal.fire({
        title: "Fabkin!",
        text: "Modal with a Brand Logo.",
        imageUrl: "assets/images/logo-md.png",
        imageWidth: 80,
        imageHeight: 80,
        imageAlt: "Custom image",
        ...commonAlertOptions
    }),

    customWidth: () => Swal.fire({
        title: "Custom width, padding, background.",
        width: 600,
        padding: 50,
        background: "url('assets/images/small/img-1.jpg')",
        backgroundSize: "cover",
        backgroundPosition: "center",
        ...commonAlertOptions
    }),

    rtl: () => Swal.fire({
        title: "هل تريد الاستمرار؟",
        icon: "question",
        iconHtml: "؟",
        confirmButtonText: "نعم",
        cancelButtonText: "لا",
        showCancelButton: true,
        showCloseButton: true,
        // ...commonAlertOptions
    }),

    timer: () => {
        let timerInterval;
        Swal.fire({
            title: "Auto close alert!",
            html: "I will close in <b></b> milliseconds.",
            timer: 2000, // Set timer to 20 seconds
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                    const content = Swal.getHtmlContainer(); // Get the HTML container
                    if (content) {
                        const b = content.querySelector("b");
                        if (b) {
                            b.textContent = Swal.getTimerLeft(); // Update remaining time
                        }
                    }
                }, 100); // Update every 100 milliseconds
            },
            willClose: () => {
                clearInterval(timerInterval); // Clear the interval when closing
            },
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            ...commonAlertOptions
        });
    },

    warningConfirm: () => Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        ...commonAlertOptions
    }).then(result => {
        if (result.isConfirmed) {
            Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
    }),

    handleDismiss: () => Swal.fire({
        buttonsStyling: false,
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
        ...commonAlertOptions
    }).then(result => {
        if (result.isConfirmed) {
            Swal.fire("Deleted!", "Your file has been deleted.", "success");
        } else (
            Swal.fire("Cancelled!", "Your imaginary file is safe :)", "error")
        )
    }),

    ajaxRequest: () => Swal.fire({
        title: "Submit your Github username",
        input: "text",
        inputAttributes: { autocapitalize: "off" },
        showCancelButton: true,
        confirmButtonText: "Look up",
        showLoaderOnConfirm: true,
        preConfirm: (username) => fetch(`https://api.github.com/users/${username}`)
            .then(response => {
                if (!response.ok) throw new Error(response.statusText);
                return response.json();
            }).catch(() => {
                Swal.showValidationMessage("Request failed");
            }),
        allowOutsideClick: () => !Swal.isLoading(),
        ...commonAlertOptions
    }).then(result => {
        if (result.isConfirmed) {
            Swal.fire({
                title: `${result.value.login}'s Fabkin`,
                imageUrl: result.value.avatar_url,
                ...commonAlertOptions
            });
        }
    }),

    showSuccessToast: () => ToastMixin.fire({
        icon: "success",
        title: "Signed in successfully"
    }),

    showErrorToast: () => ToastMixin.fire({
        icon: "error",
        title: "Error occurred while signing in"
    }),

    showWarningToast: () => ToastMixin.fire({
        icon: "warning",
        title: "Please check your details"
    }),

    showInfoToast: () => ToastMixin.fire({
        icon: "info",
        title: "You have new notifications"
    }),

    //Email
    emailAlerts: async () => {
        const { value: email } = await Swal.fire({
            title: "Input email address",
            input: "email",
            inputLabel: "Your email address",
            inputPlaceholder: "Enter your email address",
            customClass: {
                input: "form-control w-auto",
                confirmButton: 'btn btn-primary'
            },
        });

        if (email) {
            Swal.fire({
                title: "Email Entered",
                text: `Your email address is: ${email}`,
                icon: "success",
                customClass: {
                    confirmButton: "btn btn-success"
                }
            });
        }
    },

    //URL
    urlAlerts: async () => {
        const { value: url } = await Swal.fire({
            input: "url",
            inputLabel: "URL address",
            inputPlaceholder: "Enter the URL",
            customClass: {
                input: "form-control w-auto",
                confirmButton: 'btn btn-primary'
            },
        });

        if (url) {
            Swal.fire({
                text: `Entered URL: ${url}`,
                icon: "success",
                customClass: {
                    confirmButton: "btn btn-success"
                }
            });
        }
    },

    //password
    passwordAlerts: async () => {
        const { value: password } = await Swal.fire({
            title: "Enter your password",
            input: "password",
            inputLabel: "Password",
            inputPlaceholder: "Enter your password",
            inputAttributes: {
                maxlength: "10",
                autocapitalize: "off",
                autocorrect: "off"
            },
            customClass: {
                input: "form-control w-auto",
                confirmButton: 'btn btn-primary'
            },
        });

        if (password) {
            Swal.fire({
                title: `Entered password: ${password}`,
                customClass: {
                    confirmButton: 'btn btn-secondary'
                },
            });
        }
    },

    //Textarea
    textareaAlerts: async () => {
        const { value: text } = await Swal.fire({
            input: "textarea",
            inputLabel: "Message",
            inputPlaceholder: "Type your message here...",
            inputAttributes: {
                "aria-label": "Type your message here"
            },
            showCancelButton: true,
            customClass: {
                input: "form-control w-auto",
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-light-secondary',
            },
        });

        if (text) {
            Swal.fire({
                title: `${text}`,
                customClass: {
                    confirmButton: 'btn btn-secondary'
                },
            });
        }
    },

    //date
    selectDepartureDate: async () => {
        const { value: date } = await Swal.fire({
            title: "Select Departure Date",
            input: "date",
            inputAttributes: {
                "aria-label": "Select a departure date",
            },
            customClass: {
                confirmButton: "btn btn-primary", // Custom class for confirm button
            },
            didOpen: () => {
                const today = new Date().toISOString().split("T")[0];
                Swal.getInput().min = today; // Set minimum date to today
            },
        });

        if (date) {
            Swal.fire({
                title: "Selected Departure Date",
                text: date,
                icon: "info",
                customClass: {
                    confirmButton: "btn btn-primary", // Custom class for confirm button
                },
            });
        }
    },

    //File Upload & Show Images
    uploadImage: async () => {
        const { value: file } = await Swal.fire({
            title: "Select image",
            input: "file",
            inputAttributes: {
                accept: "image/*",
                "aria-label": "Upload your profile picture"
            },
            customClass: {
                input: "form-control", // Add the custom class to the input element
                confirmButton: 'btn btn-primary'
            },
        });
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                Swal.fire({
                    title: "Your uploaded picture",
                    imageUrl: e.target.result,
                    imageAlt: "The uploaded picture",
                    customClass: {
                        image: "img-thumbnail", // Add the custom class to the image
                        confirmButton: 'btn btn-primary'
                    }
                });
            };
            reader.readAsDataURL(file);
        }
    },

    //
    acceptTermsAndConditions: async () => {
        const { value: accept } = await Swal.fire({
            title: "Terms and Conditions",
            input: "checkbox",
            inputValue: 0, // Default value is unchecked
            inputPlaceholder: "I agree with the terms and conditions",
            confirmButtonText: `Continue&nbsp;<i class="fa fa-arrow-right"></i>`,
            showCancelButton: true, // Add a cancel button for better UX
            cancelButtonText: "Cancel",
            customClass: {
                confirmButton: "btn btn-primary", // Styling for confirm button
                cancelButton: "btn btn-secondary", // Styling for cancel button
            },
            didOpen: () => {
                const validationMessage = Swal.getValidationMessage();
                if (validationMessage) {
                    validationMessage.classList.add("alert", "alert-info");
                }
            },
            inputValidator: (result) => {
                return !result && "You need to agree with the terms and conditions!";
            },
        });

        if (accept) {
            Swal.fire({
                title: "Thank You!",
                text: "You agreed with the terms and conditions. :)",
                icon: "success",
                confirmButtonText: "Close",
                customClass: {
                    confirmButton: "btn btn-primary", // Styling for confirm button
                },
            });
        } else {
            Swal.fire({
                title: "Action Canceled",
                text: "You did not agree with the terms and conditions.",
                icon: "warning",
                confirmButtonText: "Close",
                customClass: {
                    confirmButton: "btn btn-secondary", // Styling for confirm button
                },
            });
        }
    },

    //Range
    rangeInput: () => Swal.fire({
        title: "How old are you?",
        icon: "question",
        input: "range",
        inputLabel: "Your age",
        inputAttributes: {
            min: "8",
            max: "120",
            step: "1",
            class: 'form-range'
        },
        customClass: {
            confirmButton: 'btn btn-primary'
        },
        inputValue: 25
    }),
};

function executeAlert(key) {
    const alertFunc = alerts[key];
    if (alertFunc) {
        alertFunc();
    } else {
        console.warn(`Alert "${key}" not found.`);
    }
}

// Add event listeners for buttons with data-alert attribute
document.querySelectorAll('button[data-alert]').forEach(button => {
    button.addEventListener('click', () => {
        const alertKey = button.getAttribute('data-alert');
        executeAlert(alertKey);
    });
});


const ToastMixin = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 30000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});