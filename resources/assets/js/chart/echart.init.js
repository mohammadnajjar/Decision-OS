/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: echart.init.js
*/


// Basic Line Chart
var basicChartDom = document.getElementById('BasicLineChart');
var basicChart = echarts.init(basicChartDom);
var basicOption = {
  xAxis: {
    type: 'category',
    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [150, 230, 224, 218, 135, 147, 260],
      type: 'line'
    }
  ],
  grid: {
    top: '5%',
    left: '4%',
    right: '0%',
    bottom: '8%',
  }
};
basicChart.setOption(basicOption);
window.addEventListener('resize', function () {
  basicChart.resize();
});

// Step Line Chart
var stepChartDom = document.getElementById('StepLine');
var stepChart = echarts.init(stepChartDom);
var stepOption = {
  tooltip: {
    trigger: 'axis'
  },
  legend: {
    data: ['Step Start', 'Step Middle', 'Step End']
  },
  grid: {
    left: '3%',
    right: '4%',
    bottom: '3%',
    containLabel: true
  },
  toolbox: {
    feature: {
      saveAsImage: {}
    }
  },
  xAxis: {
    type: 'category',
    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      name: 'Step Start',
      type: 'line',
      step: 'start',
      data: [120, 132, 101, 134, 90, 230, 210]
    },
    {
      name: 'Step Middle',
      type: 'line',
      step: 'middle',
      data: [220, 282, 201, 234, 290, 430, 410]
    },
    {
      name: 'Step End',
      type: 'line',
      step: 'end',
      data: [450, 432, 401, 454, 590, 530, 510]
    }
  ]
};
stepChart.setOption(stepOption);
window.addEventListener('resize', function () {
  stepChart.resize();
});

// Basic Bar Chart

var BasicBarChartDom = document.getElementById('BasicBarChart');
var BasicBarChart = echarts.init(BasicBarChartDom);
var option;

option = {
  xAxis: {
    type: 'category',
    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [120, 200, 150, 80, 70, 110, 130],
      type: 'bar'
    }
  ],
  grid: {
    top: '10%',
    left: '4%',
    right: '0%',
    bottom: '8%',
  }
};

option && BasicBarChart.setOption(option);

// Simple Example of Dataset Chart

var app = {};

var DatasetChartDom = document.getElementById('DatasetChart');
var DatasetChart = echarts.init(DatasetChartDom);
var option;

option = {
  legend: {},
  tooltip: {},
  dataset: {
    source: [
      ['product', '2015', '2016', '2017'],
      ['Matcha Latte', 43.3, 85.8, 93.7],
      ['Milk Tea', 83.1, 73.4, 55.1],
      ['Cheese Cocoa', 86.4, 65.2, 82.5],
      ['Walnut Brownie', 72.4, 53.9, 39.1]
    ]
  },
  xAxis: { type: 'category' },
  yAxis: {},
  // Declare several bar series, each will be mapped
  // to a column of dataset.source by default.
  series: [{ type: 'bar' }, { type: 'bar' }, { type: 'bar' }],
  grid: {
    top: '10%',
    left: '4%',
    right: '0%',
    bottom: '8%',
  }
};

option && DatasetChart.setOption(option);

// Nightingale Chart

var NightingaleChartDom = document.getElementById('NightingaleChart');
var NightingaleChart = echarts.init(NightingaleChartDom);
var option;

option = {
  legend: {
    top: 'bottom'
  },
  toolbox: {
    show: true,
    feature: {
      mark: { show: true },
      dataView: { show: true, readOnly: false },
      restore: { show: true },
      saveAsImage: { show: true }
    }
  },
  series: [
    {
      name: 'Nightingale Chart',
      type: 'pie',
      radius: [50, 130],
      center: ['50%', '50%'],
      roseType: 'area',
      itemStyle: {
        borderRadius: 8
      },
      data: [
        { value: 40, name: 'rose 1' },
        { value: 38, name: 'rose 2' },
        { value: 32, name: 'rose 3' },
        { value: 30, name: 'rose 4' },
        { value: 28, name: 'rose 5' },
        { value: 26, name: 'rose 6' },
        { value: 22, name: 'rose 7' },
        { value: 18, name: 'rose 8' }
      ]
    }
  ]
};

option && NightingaleChart.setOption(option);

// Basic Candlestick Chart

// Ensure the DOM element exists
var BasicCandlestickChartDom = document.getElementById('BasicCandlestickChart');
if (!BasicCandlestickChartDom) {
    console.error("Chart container not found!");
} else {
    var BasicCandlestickChart = echarts.init(BasicCandlestickChartDom);

    var option = {
        title: {
            text: 'Basic Candlestick Chart',
            left: 'center'
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross'
            }
        },
        grid: {
            top: '10%',
            left: '4%',
            right: '0%',
            bottom: '8%',
          },
        xAxis: {
            type: 'category',
            data: ['2017-10-24', '2017-10-25', '2017-10-26', '2017-10-27'],
            axisLine: { lineStyle: { color: '#777' } }
        },
        yAxis: {
            type: 'value',
            scale: true,
            axisLine: { lineStyle: { color: '#777' } },
            splitLine: { show: true, lineStyle: { type: 'dashed' } }
        },
        series: [
            {
                name: 'Candlestick',
                type: 'candlestick',
                data: [
                    [20, 34, 10, 38], // Open, Close, Lowest, Highest
                    [40, 35, 30, 50],
                    [31, 38, 33, 44],
                    [38, 15, 5, 42]
                ],
                itemStyle: {
                    color: '#00da3c',  // Bullish (Up)
                    color0: '#ec0000', // Bearish (Down)
                    borderColor: '#00da3c',
                    borderColor0: '#ec0000'
                }
            }
        ]
    };

    // Apply the chart options
    BasicCandlestickChart.setOption(option);

    // Handle chart resizing
    window.addEventListener('resize', function () {
        BasicCandlestickChart.resize();
    });
}

// Graph on Cartesian Chart

var GraphonCartesianChartDom = document.getElementById('GraphonCartesianChart');
var GraphonCartesianChart = echarts.init(GraphonCartesianChartDom);
var option;

const axisData = ['Mon', 'Tue', 'Wed', 'Very Loooong Thu', 'Fri', 'Sat', 'Sun'];
const data = axisData.map(function (item, i) {
  return Math.round(Math.random() * 1000 * (i + 1));
});
const links = data.map(function (item, i) {
  return {
    source: i,
    target: i + 1
  };
});
links.pop();
option = {
  tooltip: {},
  xAxis: {
    type: 'category',
    boundaryGap: false,
    data: axisData
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      type: 'graph',
      layout: 'none',
      coordinateSystem: 'cartesian2d',
      symbolSize: 40,
      label: {
        show: true
      },
      edgeSymbol: ['circle', 'arrow'],
      edgeSymbolSize: [4, 10],
      data: data,
      links: links,
      lineStyle: {
        color: '#2f4554'
      }
    }
  ],
  grid: {
    top: '10%',
    left: '4%',
    right: '3%',
    bottom: '8%',
  }
};

option && GraphonCartesianChart.setOption(option);

// Simple Gauge Chart

var SimpleGaugeChartDom = document.getElementById('SimpleGaugeChart');
var SimpleGaugeChart = echarts.init(SimpleGaugeChartDom);
var option;

option = {
  tooltip: {
    formatter: '{a} <br/>{b} : {c}%'
  },
  series: [
    {
      name: 'Pressure',
      type: 'gauge',
      progress: {
        show: true
      },
      detail: {
        valueAnimation: true,
        formatter: '{value}'
      },
      data: [
        {
          value: 50,
          name: 'SCORE'
        }
      ]
    }
  ]
};

option && SimpleGaugeChart.setOption(option);

// Basic Sankey Chart

var BasicSankeyChartDom = document.getElementById('BasicSankeyChart');
var BasicSankeyChart = echarts.init(BasicSankeyChartDom);
var option;

option = {
  series: {
    type: 'sankey',
    layout: 'none',
    emphasis: {
      focus: 'adjacency'
    },
    data: [
      {
        name: 'a'
      },
      {
        name: 'b'
      },
      {
        name: 'a1'
      },
      {
        name: 'a2'
      },
      {
        name: 'b1'
      },
      {
        name: 'c'
      }
    ],
    links: [
      {
        source: 'a',
        target: 'a1',
        value: 5
      },
      {
        source: 'a',
        target: 'a2',
        value: 3
      },
      {
        source: 'b',
        target: 'b1',
        value: 8
      },
      {
        source: 'a',
        target: 'b1',
        value: 3
      },
      {
        source: 'b1',
        target: 'a1',
        value: 1
      },
      {
        source: 'b1',
        target: 'c',
        value: 2
      }
    ]
  }
};

option && BasicSankeyChart.setOption(option);

// Customized Funnel Chart

var CustomizedFunnelChartDom = document.getElementById('CustomizedFunnelChart');
var CustomizedFunnelChart = echarts.init(CustomizedFunnelChartDom);
var option;

option = {
  tooltip: {
    trigger: 'item',
    formatter: '{a} <br/>{b} : {c}%'
  },
  toolbox: {
    feature: {
      dataView: { readOnly: false },
      restore: {},
      saveAsImage: {}
    }
  },
  legend: {
    data: ['Show', 'Click', 'Visit', 'Inquiry', 'Order']
  },
  series: [
    {
      name: 'Expected',
      type: 'funnel',
      left: '10%',
      width: '80%',
      label: {
        formatter: '{b}Expected'
      },
      labelLine: {
        show: false
      },
      itemStyle: {
        opacity: 0.7
      },
      emphasis: {
        label: {
          position: 'inside',
          formatter: '{b}Expected: {c}%'
        }
      },
      data: [
        { value: 60, name: 'Visit' },
        { value: 40, name: 'Inquiry' },
        { value: 20, name: 'Order' },
        { value: 80, name: 'Click' },
        { value: 100, name: 'Show' }
      ]
    },
    {
      name: 'Actual',
      type: 'funnel',
      left: '10%',
      width: '80%',
      maxSize: '80%',
      label: {
        position: 'inside',
        formatter: '{c}%',
        color: '#fff'
      },
      itemStyle: {
        opacity: 0.5,
        borderColor: '#fff',
        borderWidth: 2
      },
      emphasis: {
        label: {
          position: 'inside',
          formatter: '{b}Actual: {c}%'
        }
      },
      data: [
        { value: 30, name: 'Visit' },
        { value: 10, name: 'Inquiry' },
        { value: 5, name: 'Order' },
        { value: 50, name: 'Click' },
        { value: 80, name: 'Show' }
      ],
      // Ensure outer shape will not be over inner shape when hover.
      z: 100
    }
  ],
};

option && CustomizedFunnelChart.setOption(option);




