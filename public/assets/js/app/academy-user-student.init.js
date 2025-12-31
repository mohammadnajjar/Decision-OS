/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Academy user student init js
*/

var apex_line_chart = {
    chart: {
        type: "area",
        stacked: false,
        height: 260,
    },
    title: {
        text: 'Monthly Progress',
        align: 'left'
    },
    dataLabels: {
        enabled: false,
    },
    grid: {
        strokeDashArray: 3,
    },
    series: [
        {
            data: [8000, 10000, 20000, 25000, 40000, 50000],
        },
    ],
    labels: ["Web", "JavaScript ", "Data", "Python", "CSS ", "CSS ", "Machine Learning"],
    xaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            show: true,
        },
        tooltip: {
            enabled: false,
        },
    },
    yaxis: {
        min: 0,
        max: 50000,
        tickAmount: 5,
        labels: {
            formatter: function (value) {
                return value >= 1000 ? value / 1000 + "K" : value.toLocaleString();
            },
        },
    },
    tooltip: {
        y: {
            formatter: function (value) {
                return value >= 1000 ? value / 1000 + "K" : value.toLocaleString();
            },
        }
    }
};
document.addEventListener('DOMContentLoaded', function () {
    var chart = new ApexCharts(document.querySelector("#apex-line-chart"), apex_line_chart);
    chart.render();
});

