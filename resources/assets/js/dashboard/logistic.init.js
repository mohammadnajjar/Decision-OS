/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: logistic init js
*/

// Revenue
var spline_area_chart = {
  series: [{
      name: 'Revenue',
      data: [80, 120, 35, 75, 50, 130, 115]
  }, {
      name: 'Target',
      data: [120, 45, 60, 100, 50, 75, 60]
  }],
  chart: {
      height: 300,
      type: 'area',
      toolbar: {
          show: false  // Hides the toolbar
      }
  },
  colors: ['#A5D8FF', '#FFC3A0'], // Light Sky Blue & Soft Peach
  dataLabels: {
      enabled: false
  },
  stroke: {
      curve: 'smooth',
      width: 2
  },
  fill: {
      type: 'gradient',
      gradient: {
          shade: 'light',
          type: 'vertical',
          gradientToColors: ['#C2E9FB', '#FFD3B5'], // Sky Blue → Light Blue | Peach → Light Peach
          shadeIntensity: 0.4,
          opacityFrom: 0.7,
          opacityTo: 0.3,
          stops: [0, 90, 100]
      }
  },
  xaxis: {
      type: 'datetime',
      categories: [
          "2024-01-01T00:00:00.000Z", "2024-02-01T00:00:00.000Z", 
          "2024-03-01T00:00:00.000Z", "2024-04-01T00:00:00.000Z", 
          "2024-05-01T00:00:00.000Z", "2024-06-01T00:00:00.000Z", 
          "2024-07-01T00:00:00.000Z"
      ]
  },
  tooltip: {
      x: {
          format: 'MMM yyyy'
      }
  },
};

var chart = new ApexCharts(document.querySelector("#spline_area_chart"), spline_area_chart);
chart.render();


// Status

var range_combo_chart = {
    series: [
    {
      type: 'rangeArea',
      name: 'Team B Range',
  
      data: [
        {
          x: 'Jan',
          y: [1100, 1900]
        },
        {
          x: 'Feb',
          y: [1200, 1800]
        },
        {
          x: 'Mar',
          y: [900, 2900]
        },
        {
          x: 'Apr',
          y: [1400, 2700]
        },
        {
          x: 'May',
          y: [2600, 3900]
        },
        {
          x: 'Jun',
          y: [500, 1700]
        },
        {
          x: 'Jul',
          y: [1900, 2300]
        },
        {
          x: 'Aug',
          y: [1000, 1500]
        }
      ]
    },
  
    {
      type: 'rangeArea',
      name: 'Team A Range',
      data: [
        {
          x: 'Jan',
          y: [3100, 3400]
        },
        {
          x: 'Feb',
          y: [4200, 5200]
        },
        {
          x: 'Mar',
          y: [3900, 4900]
        },
        {
          x: 'Apr',
          y: [3400, 3900]
        },
        {
          x: 'May',
          y: [5100, 5900]
        },
        {
          x: 'Jun',
          y: [5400, 6700]
        },
        {
          x: 'Jul',
          y: [4300, 4600]
        },
        {
          x: 'Aug',
          y: [2100, 2900]
        }
      ]
    },
  
    {
      type: 'line',
      name: 'Team B Median',
      data: [
        {
          x: 'Jan',
          y: 1500
        },
        {
          x: 'Feb',
          y: 1700
        },
        {
          x: 'Mar',
          y: 1900
        },
        {
          x: 'Apr',
          y: 2200
        },
        {
          x: 'May',
          y: 3000
        },
        {
          x: 'Jun',
          y: 1000
        },
        {
          x: 'Jul',
          y: 2100
        },
        {
          x: 'Aug',
          y: 1200
        },
        {
          x: 'Sep',
          y: 1800
        },
        {
          x: 'Oct',
          y: 2000
        }
      ]
    },
    {
      type: 'line',
      name: 'Team A Median',
      data: [
        {
          x: 'Jan',
          y: 3300
        },
        {
          x: 'Feb',
          y: 4900
        },
        {
          x: 'Mar',
          y: 4300
        },
        {
          x: 'Apr',
          y: 3700
        },
        {
          x: 'May',
          y: 5500
        },
        {
          x: 'Jun',
          y: 5900
        },
        {
          x: 'Jul',
          y: 4500
        },
        {
          x: 'Aug',
          y: 2400
        },
        {
          x: 'Sep',
          y: 2100
        },
        {
          x: 'Oct',
          y: 1500
        }
      ]
    }
  ],
    chart: {
    height: 335,
    type: 'rangeArea',
    animations: {
      speed: 500
    },
    toolbar: {
        show: false  // Hides the toolbar
    },
  },
  colors: ['#d4526e', '#33b2df', '#d4526e', '#33b2df'],
  dataLabels: {
    enabled: false
  },
  fill: {
    opacity: [0.24, 0.24, 1, 1]
  },
  forecastDataPoints: {
    count: 2
  },
  stroke: {
    curve: 'straight',
    width: [0, 0, 2, 2]
  },
  legend: {
    show: true,
    customLegendItems: ['Team B', 'Team A'],
    inverseOrder: true
  },
  markers: {
    hover: {
      sizeOffset: 5
    }
  }
  };

var chart = new ApexCharts(document.querySelector("#range_combo_chart"), range_combo_chart);
chart.render();

// Analityc View
      
var stepline_chart = {
  series: [
    {
      name: "2024",
      data: [3, 5, 8, 4, 12, 9, 7, 11, 10, 6, 8, 9],
      color: "#6D28D9" // Purple color
    },
    {
      name: "2025",
      data: [2, 4, 6, 3, 10, 7, 5, 9, 8, 4, 6, 7],
      color: "#F59E0B" // Orange color
    }
  ],
  chart: {
    type: "line",
    height: 350,
    toolbar: {
      show: false // Removes toolbar
    }
  },
  stroke: {
    curve: "stepline",
    width: 3
  },
  dataLabels: {
    enabled: false
  },
  markers: {
    size: 5,
    colors: ["#6D28D9", "#F59E0B"],
    strokeWidth: 3
  },
  tooltip: {
    shared: true,
    intersect: false,
    x: {
      format: "MMM yyyy"
    }
  },
  xaxis: {
    categories: [
      "Jan", "Feb", "Mar", "Apr", "May", "Jun",
      "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ]
  }
};

var chart = new ApexCharts(document.querySelector("#stepline_chart"), stepline_chart);
chart.render();

var area_adwords = {
  chart: {
    type: 'bar',
    height: 250,
    width: '100%',
    stacked: true,
    foreColor: '#999',
  },
  plotOptions: {
    bar: {
      dataLabels: {
        enabled: false
      },
      columnWidth: '75%',
      borderRadius: 7
    }
  },
  colors: ["#00C5A4", '#e34b36'],
  series: [{
    name: "Monthly",
    data: [20, 16, 24, 28, 26, 22, 15, 5, 14, 16, 22, 29, 24, 19, 15, 10, 11, 15, 19, 23],
  }, {
    name: "Yearly",
    data: [20, 16, 24, 28, 26, 22, 15, 5, 14, 16, 22, 29, 24, 19, 15, 10, 11, 15, 19, 23],
  }],
  labels: [15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 1, 2, 3, 4],
  xaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      show: false
    },
    labels: {
      show: false,
      style: {
        fontSize: '14px'
      }
    },
  },
  grid: {
    xaxis: {
      lines: {
        show: false
      },
    },
    yaxis: {
      lines: {
        show: false
      },
    }
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    labels: {
      show: false
    },
  },
  legend: {
    floating: true,
    position: 'top',
    horizontalAlign: 'right',
    offsetY: -36
  },
  title: {
    text: 'Sales Report',
    align: 'left',
  },
  subtitle: {
    text: 'Monthly and Yearly'
  },
  tooltip: {
    shared: true,
    intersect: false
  }

}

var chartBar = new ApexCharts(document.querySelector('#area_adwords'), area_adwords);
chartBar.render();


// Leaflet Map

function initializeMap(mapId, coords) {
    const map = L.map(mapId).setView(coords, 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    return map;
}

// Initialize only the leaflet_map_popup
const mapPopup = initializeMap('leaflet_map_popup', [51.505, -0.09]);

// Add a logistics marker with a popup
const logisticsMarker = L.marker([51.5, -0.09]).addTo(mapPopup);
logisticsMarker.bindPopup("<b>Out for Delivery</b><br>ETA: 2:30 PM 🚚").openPopup();



