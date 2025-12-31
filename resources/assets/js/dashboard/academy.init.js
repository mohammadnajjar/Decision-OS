/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Academy init js
*/

// performance
var options = {
  series: [{
    name: 'Design',
    data: [10, 90, 20, 70, 40, 80, 10]
  }, {
    name: 'Development',
    data: [80, 10, 80, 30, 60, 20, 50]
  }],
  chart: {
    height: 380,
    type: 'area',
    toolbar: {
      show: false
    }
  },
  colors: ['#007bff', '#18a538'],
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth',
    width: 0.5,
  },
  xaxis: {
    type: 'datetime',
    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },
};

var chart = new ApexCharts(document.querySelector("#performance"), options);
chart.render();

// course
var options = {
  series: [{
    name: 'Analytics',
    data: [44, 55, 41, 67, 22, 43]
  }, {
    name: 'Design',
    data: [13, 23, 20, 8, 13, 27]
  }, {
    name: 'Marketing',
    data: [11, 17, 15, 15, 21, 14]
  }, {
    name: 'Programming',
    data: [21, 7, 25, 13, 22, 8]
  }],
  chart: {
    type: 'bar',
    height: 337,
    stacked: true,
    toolbar: {
      show: false
    },
    zoom: {
      enabled: true
    }
  },
  colors: ['#556ee6', '#34c38f', '#f1b44c', '#f46a6a'], // Updated Colors
  responsive: [{
    breakpoint: 480,
    options: {
      legend: {
        show: false
      }
    }
  }],
  plotOptions: {
    bar: {
      horizontal: false,
      borderRadius: 0,
      borderRadiusApplication: 'end',
      borderRadiusWhenStacked: 'last',
      dataLabels: {
        total: {
          enabled: true,
          style: {
            fontSize: '13px',
            fontWeight: 900
          }
        }
      }
    }
  },
  xaxis: {
    type: 'datetime',
    categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
      '01/05/2011 GMT', '01/06/2011 GMT'
    ],
  },
  legend: {
    show: false
  },
  fill: {
    opacity: 1
  }
};

var chart = new ApexCharts(document.querySelector("#course"), options);
chart.render();



