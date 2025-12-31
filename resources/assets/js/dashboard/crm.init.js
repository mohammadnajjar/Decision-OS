/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: CRM init js
*/

// Revenue Analytics
var crm_revenue = {
    series: [{
        name: 'Revenue',
        type: 'column',
        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
    }, {
        name: 'Expenses',
        type: 'area',
        data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
    }, {
        name: 'Profit Ratio',
        type: 'line',
        data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
    }],
    chart: {
        height: 380,
        type: 'line',
        stacked: false,
    },
    colors: ['#19463a', '#ededed', '#16a2b8'], // Custom colors
    stroke: {
        width: [0, 2, 2],  // Change width: 4px for TEAM C
        curve: 'smooth',
        dashArray: [0, 0, 6] // Dashed line for TEAM C (6px dash)
    },
    plotOptions: {
        bar: {
            columnWidth: '30%'
        }
    },
    fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
        }
    },
    labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003',
        '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'
    ],
    markers: {
        size: 0
    },
    xaxis: {
        type: 'datetime'
    },
    tooltip: {
        shared: true,
        intersect: false,
        y: {
            formatter: function(y) {
                if (typeof y !== "undefined") {
                    return y.toFixed(0) + " points";
                }
                return y;
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#crm_revenue"), crm_revenue);
chart.render();

// Sales Management
var sales_managment = {
    series: [42, 47, 52, 58, 65],
    chart: {
        width: 360,
        type: 'polarArea'
    },
    labels: [],
    fill: {
        opacity: 1
    },
    stroke: {
        width: 1,
        colors: undefined
    },
    yaxis: {
        show: false
    },
    legend: {
        show: false
    },
    dataLabels: {
        enabled: false
    },
    plotOptions: {
        polarArea: {
            rings: {
                strokeWidth: 0
            },
            spokes: {
                strokeWidth: 0
            },
        }
    },
    colors: ['#556ee6', '#34c38f', '#f46a6a', '#ffc108', '#50a5f1'],// New colors
};

var chart = new ApexCharts(document.querySelector("#sales_managment"), sales_managment);
chart.render();

// Lead Management with Gradient

var lead_managment = {
    series: [28, 23.8, 25.6, 15],
    chart: {
        type: 'donut',
    },
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 90,
            offsetY: 10
        }
    },
    fill: {
        type: "solid", // Removed gradient
    },
    colors: ["#16a2b8", "#63b9c7", "#7cd0de", "#97dae6"], // Matching dashboard colors
    dataLabels: {
        enabled: false // Removes text from the chart
    },
    legend: {
        show: false
    },
    grid: {
        padding: {
            bottom: -100
        }
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#lead_managment"), lead_managment);
chart.render();
