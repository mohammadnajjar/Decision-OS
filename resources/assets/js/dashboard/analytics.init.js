/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Analytics init js
*/

var options = {
    series: [{
        data: [21, 22, 10, 28, 16, 21, 10, 28, 16, 21, 10, 28, 16, 21, 10, 28]
    }],
    chart: {
        height: 320,
        type: 'bar',
        toolbar: {
            show: false
        },
    },
    plotOptions: {
        bar: {
            columnWidth: '35%',
            borderRadius: 8,
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: [
            ['Apr'], ['May'], ['Jun'], ['Jul'], ['Aug'], ['Sep'], ['Oct'], ['Nov'], ['Dec'], ['Jan'], ['Feb'], ['Mar'], ['Jul'], ['Aug'], ['Sep'], ['Oct']
        ],
        labels: {
            style: {
                fontSize: '12px'
            }
        }
    },
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'light',
            type: 'vertical',
            shadeIntensity: 0.4,
            gradientToColors: ['#ffcc80', '#ffe0b2'], // Soft Orange Gradient
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100]
        }
    },
    colors: ['#ffb74d'] // Warm Light Orange Base Color
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


var options = {
    series: [
        {
            name: "Revenue",
            data: [20, 60, 50, 45, 90, 150, 200, 180, 240, 190, 110, 130] // Updated data
        },
        {
            name: "Expense",
            data: [50, 90, 80, 100, 140, 160, 220, 210, 180, 170, 140, 120] // Updated data
        }
    ],
    chart: {
        type: "area",
        height: 350,
        toolbar: { show: false }
    },
    colors: ["#2962FF", "#E0E0E0"], // Blue & Light Gray
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.4,
            opacityTo: 0,
            stops: [0, 90, 100]
        }
    },
    dataLabels: { enabled: false },
    stroke: {
        curve: "smooth",
        width: 3
    },
    grid: {
        show: true,
        borderColor: "#EAEAEA",
        strokeDashArray: 4
    },
    xaxis: {
        categories: [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ], 
    },
    legend: {
        position: "bottom",
        horizontalAlign: "center",
    },
    tooltip: {
        x: { format: "MMM" }
    }
};

var chart = new ApexCharts(document.querySelector("#funnel"), options);
chart.render();

var options = {
    series: [
        {
            name: 'New Visitors',
            data: [
                { x: 'Direct', y: 503 },
                { x: 'Organic Search', y: 580 },
                { x: 'Social Media', y: 135 },
            ],
        },
        {
            name: 'Returning Visitors',
            data: [
                { x: 'Direct', y: 733 },
                { x: 'Organic Search', y: 385 },
                { x: 'Social Media', y: 715 },
            ],
        },
        {
            name: 'Referrals',
            data: [
                { x: 'Direct', y: 255 },
                { x: 'Organic Search', y: 211 },
                { x: 'Social Media', y: 441 },
            ],
        },
        {
            name: 'Bounce Rate',
            data: [
                { x: 'Direct', y: 428 },
                { x: 'Organic Search', y: 749 },
                { x: 'Social Media', y: 559 },
            ],
        },
    ],
    chart: {
        type: 'line',
        height: 377,
        width: "100%", // Make it responsive
        toolbar: {
            show: false, // Hide toolbar on small screens
        },
    },
    plotOptions: {
        line: {
            isSlopeChart: true,
        },
    },
    tooltip: {
        followCursor: true,
        intersect: false,
        shared: true,
    },
    dataLabels: {
        background: {
            enabled: true,
        },
        formatter(val, opts) {
            const seriesName = opts.w.config.series[opts.seriesIndex].name;
            return val !== null ? seriesName : '';
        },
    },
    yaxis: {
        title: {
            text: 'User Engagement',
            style: { fontSize: '14px', fontWeight: 'bold' }
        },
        labels: {
            show: true,
        },
    },
    xaxis: {
        categories: ['Direct', 'Organic Search', 'Social Media'],
        position: 'bottom',
    },
    legend: {
        show: false,
    },
    stroke: {
        width: [2, 3, 4, 2],
        dashArray: [0, 0, 5, 2],
        curve: 'smooth',
    },
    responsive: [
        {
            breakpoint: 768, // For tablets & mobile devices
            options: {
                chart: {
                    height: 300, // Adjust height for smaller screens
                },
                dataLabels: {
                    enabled: false, // Hide data labels for better visibility
                },
                xaxis: {
                    labels: {
                        rotate: -45, // Rotate labels for better fit
                    }
                }
            }
        },
        {
            breakpoint: 480, // For small mobile devices
            options: {
                chart: {
                    height: 250, // Reduce chart height further
                },
                stroke: {
                    width: [1, 2, 2, 1], // Reduce stroke width
                }
            }
        }
    ]
};

var chart = new ApexCharts(document.querySelector("#category"), options);
chart.render();

