/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Academy Single Category init js
*/

var academyCategoryChart = {
    series: [
        {
            name: 'Web Development',
            data: [120, 150, 180, 200, 220, 250, 280, 300, 320, 340, 360, 400]
        },
        {
            name: 'Data Science',
            data: [80, 100, 120, 140, 160, 180, 200, 220, 240, 260, 280, 300]
        },
        {
            name: 'Machine Learning',
            data: [60, 80, 100, 120, 140, 160, 180, 200, 220, 240, 260, 280]
        },
        {
            name: 'UI/UX Design',
            data: [50, 70, 90, 110, 130, 150, 170, 190, 210, 230, 250, 270]
        },
        {
            name: 'Cyber Security',
            data: [40, 60, 80, 100, 120, 140, 160, 180, 200, 220, 240, 260]
        }
    ],
    chart: {
        type: 'bar',
        height: 400,
        stacked: false
    },
    title: {
        text: 'Academy Course Enrollment (Monthly)',
        align: 'left'
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '50%'
        }
    },
    dataLabels: {
        enabled: false
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        axisBorder: { show: false },
        axisTicks: { show: false }
    },
    yaxis: {
        title: {
            text: "No. of Students"
        }
    },
    legend: {
        position: 'top'
    },
    colors: ['#007bff', '#28a745', '#ffc107', '#6610f2', '#dc3545']
};

var chart = new ApexCharts(document.querySelector("#academy_chart"), academyCategoryChart);
chart.render();


var donut_chart = {
    series: [40, 35, 25], // Market share percentages
    chart: {
        type: 'donut',
        height: 298,
    },
    labels: ['New Student', 'New Teachers', 'New Courses'], // Updated brand names
    legend: {
        position: 'bottom', // Positioning the legend at the bottom
    },
    dataLabels: {
        enabled: true, // Enable data labels for clarity
    },
    colors: ['#FF4560', '#00E396', '#008FFB'], // Custom colors for each slice
};
var chart = new ApexCharts(document.querySelector("#donut_chart"), donut_chart);
chart.render();