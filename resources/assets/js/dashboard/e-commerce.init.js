/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: E-Commerce init js
*/

var color = "#0d6efd"; 
var gradientColors = ["#0d6efd", "#64b5f6"];

var salesRevenueChart = {
  series: [{
    name: 'Sales ($)',
    data: [
      5000, 12000, 6500, 17000, 7500, 9200, 15000, 20000, 19200, 10200, 11500, 13000, // Year 1
    ]
  }],
  chart: {
    height: 265,
    type: 'bar',
    toolbar: {
      show: false
    }
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "light",
      type: "vertical",
      gradientToColors: [gradientColors[1]],
      stops: [0, 100]
    }
  },
  colors: [gradientColors[0]], // Gradient effect applied
  plotOptions: {
    bar: {
      columnWidth: '35%',
      distributed: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['#fff']
  },
  tooltip: {
    y: {
      formatter: function(val) {
        return "$" + val.toLocaleString();
      }
    }
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: [
      'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 
    ],
    labels: {
      style: {
        colors: color,
        fontSize: '12px'
      }
    }
  },
  yaxis: {
    labels: {
      formatter: function(val) {
        return "$" + val.toLocaleString();
      }
    }
  }
};

document.addEventListener("DOMContentLoaded", function () {
  var chart = new ApexCharts(document.querySelector("#sales_revenue_chart"), salesRevenueChart);
  chart.render();
});

// Daily Sales
var daily_sales_chart = {
  series: [55, 65, 76, 91],
  chart: {
    height: 275,
    type: 'radialBar'
  },
  colors: ['#16a2b8', '#ffc108', '#19a63a', '#f27333'], // Blue, Purple, Green, Orange
  plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '22px'
        },
        value: {
          fontSize: '16px'
        },
        total: {
          show: true,
          label: 'Progress',
          formatter: function (w) {
            return 9.26;
          }
        }
      }
    }
  },
  labels: ['Customer', 'Orders', 'Revenue', 'Growth']
};

var chart = new ApexCharts(document.querySelector("#daily_sales_chart"), daily_sales_chart);
chart.render();

// Revenue
var revenueChart = {
    series: [
      {
        name: "Monthly",
        data: [80, 20, 50, 20, 120, 90, 60, 100]
      },
      {
        name: "Yearly",
        data: [0, 20, 100, 40, 75, 50, 95, 60]
      }
    ],
    chart: {
      height: 380,
      type: "area",
      toolbar: { show: false }
    },
    colors: ["#0d6efd", "#28a745"], 
    dataLabels: { enabled: false },
    stroke: { curve: "smooth", width: 2 },
    grid: { show: false },
    xaxis: {
      categories: ["2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015"],
      axisBorder: { show: false },
    },
    yaxis: {
      axisBorder: { show: false },
    },
    tooltip: { theme: "dark" }
  };
  
document.addEventListener("DOMContentLoaded", function () {
  var chart = new ApexCharts(document.querySelector("#revenue_chart"), revenueChart);
  chart.render();
});

// Company Growth

var stroked_gauge_chart = {
    series: [67], // Update the percentage here
    chart: {
        height: 300,
        type: 'radialBar',
        offsetY: 0 // Ensures centering
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 135,
            hollow: {
                size: "50%" // Adjust to center the text inside
            },
            track: {
                background: "#e5e7eb", // Light grey background
                strokeWidth: "100%"
            },
            dataLabels: {
                name: {
                    show: false // Hide label
                },
                value: {
                    fontSize: '26px',
                    fontWeight: 'bold',
                    color: "#111827",
                    offsetY: 10, // Centers the text
                    formatter: function (val) {
                        return val + "%";
                    }
                }
            }
        }
    },
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            shadeIntensity: 0.5,
            gradientToColors: ['#9333ea'], // Purple
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 65, 91]
        },
    },
    stroke: {
        dashArray: 4,
        colors: ['#0ea5e9'] // Blue stroke outline
    }
};

var chart = new ApexCharts(document.querySelector("#stroked_gauge_chart"), stroked_gauge_chart);
chart.render();

// Product Order
var product_order_chart = {
  series: [{
    data: [74, 50, 64, 47, 42, 80, 47, 75, 65, 90, 56, 85]
  }],
  chart: {
    type: 'bar',
    height: 87,
    width: '100%', // Ensures full width
    sparkline: {
      enabled: true
    }
  },
  plotOptions: {
    bar: {
      columnWidth: '30%', // Adjusted for better fit
      borderRadius: 6      // Apply rounded corners
    }
  },
  colors: [ '#f27333'], // New vibrant colors
  xaxis: {
    crosshairs: {
      width: 1
    },
  },
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function () {
          return ''
        }
      }
    },
    marker: {
      show: false
    }
  }
};

var chart6 = new ApexCharts(document.querySelector("#product_order_chart"), product_order_chart);
chart6.render();

// Top Categories

var categories_chart = {
  series: [{
    name: 'Electronics',
    data: [80, 50, 30, 40, 100, 20],
  },{
    name: 'Clothing',
    data: [20, 10, 80, 50, 20, 80],
  },{
    name: 'Fashion',
    data: [50, 80, 20, 80, 40, 50],
  }],
  chart: {
    height: 380,
    type: 'radar',
  },
  stroke: {
    width: 2
  },
  markers: {
    size: 3
  },
  title: {
    text: 'Basic Radar Chart'
  },
  yaxis: {
    stepSize: 20
  },
  xaxis: {
    categories: ['January', 'February', 'March', 'April', 'May', 'June']
  }
};;

var chart = new ApexCharts(document.querySelector("#categories_chart"), categories_chart);
chart.render();
