/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Product detail init js
*/ 
 
 // Product detail layout 01 swiper
 var productSmall = new Swiper(".productSmall", {
    spaceBetween: 10,
    slidesPerView: 6,
    direction: "vertical",
    breakpoints: {
        100: {
            direction: "horizontal",
            slidesPerView: 4,
        },
        1200: {
            direction: "vertical",

        }
    },
});
var productMain = new Swiper(".productMain", {
    slidesPerView: 1,
    spaceBetween: 10,
    direction: 'horizontal',
    autoHeight: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: productSmall,
    },
});

var productMain = new Swiper(".swiper-reviews", {
    slidesPerView: 1,
    spaceBetween: 10,
    direction: 'horizontal',
    autoHeight: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: productSmall,
    },
});
