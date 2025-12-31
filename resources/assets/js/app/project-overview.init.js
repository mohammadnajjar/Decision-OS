/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Project Overview init js
*/

var apex_line_chart = {
    chart: {
        type: "area",
        stacked: false,
        height: 350,
        toolbar: {
            show: false // Removes toolbar
        }
    },
    dataLabels: {
        enabled: false,
    },
    grid: {
        strokeDashArray: 3,
    },
    stroke: {
        width: 2, // Set stroke width to 2
        curve: 'smooth' // Makes the line smoother
    },
    series: [
        {
            name: "Sales",
            data: [8000, 4000, 5000, 17000, 18000, 40000, 18000, 10000, 6000, 20000],
            color: "#16a2b8" // Line color
        },
    ],
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
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


document.addEventListener("DOMContentLoaded", function () {
    var task_overview_chart = {
        series: [52.9, 29.4, 17.6], // Task Distribution Data
        chart: {
            type: 'pie',
            height: 320,
        },
        labels: ['Completed', 'In Progress', 'Pending'],
        dataLabels: {
            enabled: true, // Show percentage values
        },
        colors: [
            "#A3D9A5", // Light Green (Completed)
            "#90CAF9", // Soft Blue (In Progress)
            "#FFD699"  // Light Yellow (Pending)
        ],
        legend: {
            position: 'bottom', // Keeps legend clean
        }
    };

    var chart = new ApexCharts(document.querySelector("#task_overview_chart"), task_overview_chart);
    chart.render();
});

