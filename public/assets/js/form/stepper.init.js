/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Stepper init js
*/

document.querySelectorAll('.stepper, .form-steps-vertical').forEach(stepper => {
    const nextButtons = stepper.querySelectorAll('.nexttab');
    const prevButtons = stepper.querySelectorAll('.previestab');
    const tabs = stepper.querySelectorAll('.tab-pane');
    const progressBar = stepper.querySelector('.progress-bar');
    const tabButtons = stepper.querySelectorAll('.nav-link'); // Get all tab buttons
    let currentTab = 0;

    function updateTabs() {
        tabs.forEach((tab, index) => {
            tab.classList.remove('show', 'active');
            if (index === currentTab) {
                tab.classList.add('show', 'active');
            }
        });

        // Determine if the stepper is vertical or horizontal
        const isVertical = stepper.classList.contains('form-steps-vertical');

        if (isVertical) {
            // Update progress bar height based on completed steps for vertical stepper
            const completedSteps = Math.min(currentTab, tabs.length - 1);
            const totalSteps = tabs.length - 2; // Excluding the last "Thank You" step
            const progressHeight = (completedSteps / totalSteps) * 100;
            progressBar.style.height = `${progressHeight}%`;
            progressBar.style.width = '100%'; // Ensure width is full
        } else {
            // Update progress bar width based on currentTab for horizontal stepper
            const progressPercentage = (currentTab / (tabs.length - 2)) * 100; // Excluding last step
            progressBar.style.width = `${progressPercentage}%`;
            progressBar.style.height = '5px'; // Default height for horizontal
        }

        // Update the active tab button
        tabButtons.forEach((button, index) => {
            button.classList.remove('active', 'activeComplete');
            if (index === currentTab) {
                button.classList.add('active');
            } else if (index < currentTab) {
                button.classList.add('activeComplete');
                button.innerHTML = `<i class="ri-check-line"></i>`; // Add check icon
            }
        });
    }

    // Add event listener for each tab button
    tabButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            currentTab = index; // Set current tab to the clicked button's index
            updateTabs();
        });
    });

    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentTab < tabs.length - 1) {
                currentTab++;
                updateTabs();
            }
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentTab > 0) {
                currentTab--;
                updateTabs();
            }
        });
    });

    // Initial setup
    updateTabs();
});
