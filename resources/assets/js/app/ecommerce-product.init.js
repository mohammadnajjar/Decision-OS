/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Product init js
*/

var sliderRound = document.getElementById('slider-round');

    noUiSlider.create(sliderRound, {
        start: [20, 80], // Initial values
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });

    var marginMin = document.getElementById('slider-margin-value-min'),
        marginMax = document.getElementById('slider-margin-value-max');

    sliderRound.noUiSlider.on('update', function (values, handle) {
        if (handle === 1) {
            marginMax.textContent = values[handle];
        } else {
            marginMin.textContent = values[handle];
        }
    });

const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
        if (e.target.className === "input-min") {
            rangeInput[0].value = minPrice;
            range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
        } else {
            rangeInput[1].value = maxPrice;
            range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
        }
    }
});
});

rangeInput.forEach((input) => {
input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
        if (e.target.className === "range-min") {
            rangeInput[0].value = maxVal - priceGap;
        } else {
            rangeInput[1].value = minVal + priceGap;
        }
    } else {
        priceInput[0].value = minVal;
        priceInput[1].value = maxVal;
        range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
        range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
});
});
