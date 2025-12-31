/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Swiper init js
*/

// Function to initialize multiple Swipers
let swipers = [];

function initSwipers(isRtl) {
    // Destroy existing Swipers
    swipers.forEach(swiper => swiper.destroy());
    swipers = []; // Reset Swipers array
    // Common options for all Swipers
    const commonOptions = {
        rtl: isRtl,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    };

    // Define options for each Swiper type
    const swiperOptions = {
        'default-swiper': {
            ...commonOptions,
            slidesPerView: 1,
        },
        'navigation-swiper': {
            ...commonOptions,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                clickable: true,
                el: ".swiper-pagination",
            },
        },
        'pagination-dynamic-swiper': {
            ...commonOptions,
            pagination: {
                clickable: true,
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        },
        'pagination-fraction-swiper': {
            ...commonOptions,
            pagination: {
                clickable: true,
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        },
        'pagination-progress-swiper': {
            ...commonOptions,
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        },
        'pagination-scrollbar-swiper': {
            ...commonOptions,
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        },
        'vertical-swiper': {
            ...commonOptions,
            direction: "vertical",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        'mousewheel-control-swiper': {
            ...commonOptions,
            direction: "vertical",
            mousewheel: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        'effect-fade-swiper': {
            ...commonOptions,
            effect: "fade",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        'effect-creative-swiper': {
            ...commonOptions,
            effect: "fade",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        'effect-creative-swiper': {
            ...commonOptions,
            grabCursor: true,
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: [0, 0, -400],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        'effect-flip-swiper': {
            ...commonOptions,
            effect: "flip",
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        'zoom-effect-swiper': {
            ...commonOptions,
            zoom: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        'parallax-swiper': {
            parallax: true,
            ...commonOptions,
            effect: 'fade',
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        },
    };

    // Initialize new Swipers with specific options
    const swiperContainers = document.querySelectorAll('.swiper');
    swiperContainers.forEach(container => {
        const className = Array.from(container.classList).find(cls => swiperOptions[cls]);
        if (className) {
            const options = swiperOptions[className];
            const swiper = new Swiper(container, options);
            swipers.push(swiper); // Add to Swipers array
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        var thumbsSwiper = new Swiper(".thumbs-swiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var thumbViewSwiper = new Swiper(".thumb-view-swiper", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: thumbsSwiper,
            },
        });
    });
}

// Initialize Swipers initially in LTR mode
initSwipers(false);