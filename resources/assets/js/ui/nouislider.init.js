/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: nouislider Js File
*/

// Create a slider
var defaultSlider = document.getElementById('defaultSlider');
noUiSlider.create(defaultSlider, {
    start: 40,
    connect: 'lower',
    range: {
        'min': 0,
        'max': 100
    }
});
var disabledSlider = document.getElementById('disabledSlider');
// Initialize noUiSlider
noUiSlider.create(disabledSlider, {
    start: [20],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});

// Disable the slider
disabledSlider.noUiSlider.disable();

var rangeSlider = document.getElementById('rangeSlider');
noUiSlider.create(rangeSlider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});

var marginSlider = document.getElementById('marginSlider');
noUiSlider.create(marginSlider, {
    start: [20, 80],
    connect: true,
    margin: 30,
    range: {
        'min': 0,
        'max': 100
    }
});

var marginMin = document.getElementById('slider-margin-value-min'),
    marginMax = document.getElementById('slider-margin-value-max');

marginSlider.noUiSlider.on('update', function (values, handle) {
    if (handle) {
        marginMax.innerHTML = values[handle];
    } else {
        marginMin.innerHTML = values[handle];
    }
});

var stepsSlider = document.getElementById('stepsSlider');
noUiSlider.create(stepsSlider, {
    start: [20, 80],
    connect: true,
    step: 10,
    range: {
        'min': 0,
        'max': 100
    }
});

var verticalSlider = document.getElementById('verticalSlider');
noUiSlider.create(verticalSlider, {
    start: 40,
    connect: true,
    step: 20,
    orientation: 'vertical',
    range: {
        'min': 0,
        'max': 100
    }
});

var rtlSlider = document.getElementById('rtlSlider');
noUiSlider.create(rtlSlider, {
    start: 20,
    connect: 'lower',
    direction: 'rtl',
    range: {
        'min': 0,
        'max': 100
    }
});
var directionField = document.getElementById('field');

rtlSlider.noUiSlider.on('update', function (values, handle) {
    directionField.innerHTML = values[handle];
});

var tooltipSlider = document.getElementById('tooltipsSlider');
noUiSlider.create(tooltipSlider, {
    start: [20, 80],
    keyboardSupport: true,
    connect: true,
    tooltips: [wNumb({ decimals: 0 }), true],
    range: {
        'min': 0,
        'max': 100
    }
});

var multipleTyleRangeSlider = document.getElementById('multipleTyleRangeSlider');
noUiSlider.create(multipleTyleRangeSlider, {
    connect: true,
    start: [500, 4000],
    range: {
        'min': [0],
        '10%': [500, 500],
        '50%': [4000, 1000],
        'max': [10000]
    }
});
var multipleTyleRangeSliderElement = document.getElementById('multipleTyleRangeSlider-step-value');
multipleTyleRangeSlider.noUiSlider.on('update', function (values) {
    multipleTyleRangeSliderElement.innerHTML = values.join(' - ');
});


var sliderFit = document.getElementById('slider-fit');
noUiSlider.create(sliderFit, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});

var sliderRound = document.getElementById('slider-round');
noUiSlider.create(sliderRound, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});

var sliderSquare = document.getElementById('slider-square');
noUiSlider.create(sliderSquare, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});

var noUiTargetSecoundry = document.getElementById('noUi-target-secoundry');
noUiSlider.create(noUiTargetSecoundry, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});
var noUiTargetSuccess = document.getElementById('noUi-target-success');
noUiSlider.create(noUiTargetSuccess, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});
var noUiTargetInfo = document.getElementById('noUi-target-info');
noUiSlider.create(noUiTargetInfo, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});
var noUiTargetWarning = document.getElementById('noUi-target-warning');
noUiSlider.create(noUiTargetWarning, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});
var noUiTargetDanger = document.getElementById('noUi-target-danger');
noUiSlider.create(noUiTargetDanger, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});
var noUiTargetDark = document.getElementById('noUi-target-dark');
noUiSlider.create(noUiTargetDark, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});

var largeSlider = document.getElementById('large-slider');
noUiSlider.create(largeSlider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});
var defaultSlider = document.getElementById('default-slider');
noUiSlider.create(defaultSlider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});
var smallSlider = document.getElementById('small-slider');
noUiSlider.create(smallSlider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': [0],
        'max': [100]
    }
});

var arbitraryValuesSlider = document.getElementById('arbitrary-values-slider');
noUiSlider.create(arbitraryValuesSlider, {
    start: 50,
    range: {
        min: 0,
        max: 100
    },
    pips: {
        mode: "values",
        values: [0, 25, 50, 75, 100],
        density: 4
    }
});