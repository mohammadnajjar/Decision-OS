/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Project init js
*/

document.addEventListener("DOMContentLoaded", () => {
    var basic_column_chart = {
        series: [{
            name: 'Pending',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Completed',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: 'Canceled',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        chart: {
            type: 'bar',
            height: 350,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        colors: ["#FF5733", "#3498DB", "#F1C40F"],
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        tooltip: {
            theme: "dark",
            y: {
                formatter: function (val) {
                    return "$ " + val + " thousands"
                }
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            labels: {
                colors: '#333'
            }
        }
    };

    var chart1 = new ApexCharts(document.querySelector("#basic_column_chart"), basic_column_chart);
    chart1.render();

    var spark1 = {
        chart: {
            id: 'sparkline1',
            type: 'line',
            height: 60,
            width: 100,
            sparkline: {
                enabled: true
            },
            group: 'sparklines1'
        },
        series: [{
            name: 'teal',
            data: [25, 66, 41, 59, 25, 44, 12, 80, 50, 60]
        }],
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: true,
                position: 'right'
            },
            x: {
                show: false
            }
        },
        colors: ['#f57433'], // Solid color applied
        fill: {
            opacity: 1 // No gradient, just solid fill
        },
        xaxis: {
            crosshairs: {
                width: 1
            },
        }
    };

    var spark2 = {
        chart: {
            id: 'sparkline2',
            type: 'line',
            height: 60,
            width: 100,
            sparkline: {
                enabled: true
            },
            group: 'sparklines2'
        },
        series: [{
            name: 'teal',
            data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
        }],
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: true,
                position: 'right'
            },
            x: {
                show: false
            }
        },
        colors: ['#007bff'], // Solid color applied
        fill: {
            opacity: 1 // No gradient, just solid fill
        },
        xaxis: {
            crosshairs: {
                width: 1
            },
        }
    };

    var spark3 = {
        chart: {
            id: 'sparkline3',
            type: 'line',
            height: 60,
            width: 100,
            sparkline: {
                enabled: true
            },
            group: 'sparklines3'
        },
        series: [{
            name: 'teal',
            data: [47, 45, 74, 32, 56, 31, 90, 30, 45, 80]
        }],
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: true,
                position: 'right'
            },
            x: {
                show: false
            }
        },
        colors: ['#ffc108'], // Solid color applied
        fill: {
            opacity: 1 // No gradient, just solid fill
        },
        xaxis: {
            crosshairs: {
                width: 1
            },
        }
    };

    var spark4 = {
        chart: {
            id: 'sparkline4',
            type: 'line',
            height: 60,
            width: 100,
            sparkline: {
                enabled: true
            },
            group: 'sparklines4'
        },
        series: [{
            name: 'teal',
            data: [47, 45, 74, 32, 56, 31, 50, 33, 90, 80]
        }],
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: true,
                position: 'right'
            },
            x: {
                show: false
            }
        },
        colors: ['#db355e'], // Solid color applied
        fill: {
            opacity: 1 // No gradient, just solid fill
        },
        xaxis: {
            crosshairs: {
                width: 1
            },
        }
    };

    new ApexCharts(document.querySelector("#spark1"), spark1).render();
    new ApexCharts(document.querySelector("#spark2"), spark2).render();
    new ApexCharts(document.querySelector("#spark3"), spark3).render();
    new ApexCharts(document.querySelector("#spark4"), spark4).render();
});

document.addEventListener("DOMContentLoaded", () => {
    new AirDatepicker('#div');
    // Or init with {inline: true} on <input> or <div> elements
    const localeEn = {
        days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        months: ['January','February','March','April','May','June', 'July','August','September','October','November','December'],
        monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        today: 'Today',
        clear: 'Clear',
        dateFormat: 'mm/dd/yyyy',
        timeFormat: 'hh:ii aa',
        firstDay: 0
    }
    new AirDatepicker('#inline-picker', {
        inline: true,
        locale: localeEn,
    })

    const counters = document.querySelectorAll(".count");

    counters.forEach(counter => {
        let target = +counter.dataset.count;
        let count = 0;
        let increment = target / 100; // Adjust speed by changing divisor

        let updateCount = () => {
            count += increment;
            if (count < target) {
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target.toLocaleString(); // Format with commas
            }
        };

        updateCount();
    });
});
