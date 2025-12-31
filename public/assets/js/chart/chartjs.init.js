/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: chartjs.init.js
*/

// Utility function to get a Bootstrap CSS variable
function getBootstrapVariable(variableName) {
    const value = getComputedStyle(document.documentElement).getPropertyValue(variableName).trim();
    return value || null; // Return null if the variable is not found
}

// Example usage to get Bootstrap's primary color
const primaryColor = getBootstrapVariable('--bs-primary');

// Example usage to get other Bootstrap variables
const secondaryColor = getBootstrapVariable('--bs-secondary');
const successColor = getBootstrapVariable('--bs-success');

// Log the values to verify
console.log('Primary Color:', primaryColor);
console.log('Secondary Color:', secondaryColor);
console.log('Success Color:', successColor);


// Check if the canvas element exists
const eCommerceChart = document.getElementById("eCommerceChart");
if (eCommerceChart) {
    const ctx = eCommerceChart.getContext('2d');

    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10], // Static time labels
            datasets: [{
                label: 'Sales ($)',
                data: [500, 1500, 800, 2000, 2200, 3000, 3500, 4000, 4500, 5000], // Static sales data
                fill: false,
                borderColor: getBootstrapVariable('--bs-primary'),
                backgroundColor: getBootstrapVariable('--bs-primary'),
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
        }
    });
}

// Grouped Bar Chart
const barChartCanvas = document.getElementById("barChart");
if (barChartCanvas) {
    var ctx1 = barChartCanvas.getContext('2d');
    var barChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets: [{
                label: 'Data-1',
                data: [12, 19, 3, 17, 28, 24, 7],
                backgroundColor: getBootstrapVariable('--bs-primary')
            }, {
                label: 'Data-2',
                data: [30, 29, 5, 5, 20, 3, 10],
                backgroundColor: getBootstrapVariable('--bs-success')
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Horizontal Chart
const horizontalBarChartCanvas = document.getElementById("horizontalBarChart");
if (horizontalBarChartCanvas) {
    var ctx1 = horizontalBarChartCanvas.getContext('2d');
    var horizontalBarChart = new Chart(ctx1, {
        type: 'bar', // Use 'bar' type
        data: {
            labels: ["Product A", "Product B", "Product C", "Product D", "Product E"], // Product labels
            datasets: [{
                label: 'Sales ($)',
                data: [5000, 7000, 3000, 6000, 4000], // Sales data
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)', // Color for Product A
                    'rgba(54, 162, 235, 0.5)', // Color for Product B
                    'rgba(255, 206, 86, 0.5)', // Color for Product C
                    'rgba(75, 192, 192, 0.5)', // Color for Product D
                    'rgba(153, 102, 255, 0.5)' // Color for Product E
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)', // Border color for Product A
                    'rgba(54, 162, 235, 1)', // Border color for Product B
                    'rgba(255, 206, 86, 1)', // Border color for Product C
                    'rgba(75, 192, 192, 1)', // Border color for Product D
                    'rgba(153, 102, 255, 1)' // Border color for Product E
                ],
                borderWidth: 1,
                borderRadius: 50, // Added border radius here
                barThickness: 15 // Set custom bar height
            }]
        },
        options: {
            indexAxis: 'y', // Set indexAxis to 'y' for horizontal bars
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true // Start X-axis at zero
                }
            }
        }
    });
}

// polar Chart
const polarChartCanvas = document.getElementById("polarChart");
if (polarChartCanvas) {
    var ctx1 = polarChartCanvas.getContext('2d');
    var polarChart = new Chart(ctx1, {
        type: 'polarArea',
        data: {
            labels: ["Academics", "Sports", "Arts", "Clubs", "Community Service"], // Categories
            datasets: [{
                label: 'School Contributions',
                data: [70, 50, 40, 60, 30], // Updated data values
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                r: {
                    beginAtZero: true // Start scale at zero
                }
            }
        }
    });
}

// Pie Chart
const pieChartCanvas = document.getElementById("myPieChart");
if (pieChartCanvas) {
    var ctx1 = pieChartCanvas.getContext('2d');
    var pieChart = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ["January", "February", "March", "April"], // Labels for the pie slices
            datasets: [{
                label: 'My Dataset',
                data: [300, 50, 100, 75], // Data for each slice
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)', // Red
                    'rgba(54, 162, 235, 0.2)', // Blue
                    'rgba(255, 206, 86, 0.2)', // Yellow
                    'rgba(75, 192, 192, 0.2)'  // Green
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)', // Red
                    'rgba(54, 162, 235, 1)', // Blue
                    'rgba(255, 206, 86, 1)', // Yellow
                    'rgba(75, 192, 192, 1)'  // Green
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    });
}


// stackedLine Chart
const stackedLineChartCanvas = document.getElementById("stackedLineChart");
if (stackedLineChartCanvas) {
    var ctx1 = stackedLineChartCanvas.getContext('2d');
    var stackedLineChart = new Chart(ctx1, {
        type: 'bar', // Base type is bar
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"], // X-axis labels
            datasets: [
                {
                    label: 'Sales',
                    data: [12, 19, 3, 17, 28, 24, 7],
                    backgroundColor: "rgba(255, 99, 132, 0.5)", // Color for the sales bar
                    stack: 'Stack 0' // Specify stack
                },
                {
                    label: 'Expenses',
                    data: [5, 10, 7, 3, 12, 4, 9],
                    backgroundColor: "rgba(54, 162, 235, 0.5)", // Color for the expenses bar
                    stack: 'Stack 0' // Specify stack
                },
                {
                    label: 'Profit',
                    type: 'line', // Specify that this dataset is a line chart
                    data: [7, 9, -4, 14, 16, 20, -2],
                    borderColor: "rgba(75, 192, 192, 1)", // Color for the line
                    fill: false, // Don't fill under the line
                    yAxisID: 'y-axis-1' // Specify which Y-axis to use
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    stacked: true, // Enable stacking for the y-axis
                    beginAtZero: true
                },
                'y-axis-1': {
                    type: 'linear', // Use a linear scale for the line chart
                    position: 'right', // Place this y-axis on the right
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
}

// Radar Chart
const radarChartCanvas = document.getElementById("radarChart");
if (radarChartCanvas) {
    var ctx1 = radarChartCanvas.getContext('2d');
    var radarChart = new Chart(ctx1, {
        type: 'radar',
        data: {
            labels: ["Code Quality", "Project Management", "Client Satisfaction", "Team Collaboration", "Innovation"], // Categories
            datasets: [
                {
                    label: 'Team Alpha',
                    data: [85, 90, 80, 75, 70], // Scores for Team Alpha
                    backgroundColor: "rgba(255, 99, 132, 0.2)", // Background color
                    borderColor: "rgba(255, 99, 132, 1)", // Border color
                    borderWidth: 1
                },
                {
                    label: 'Team Beta',
                    data: [75, 85, 90, 80, 60], // Scores for Team Beta
                    backgroundColor: "rgba(54, 162, 235, 0.2)", // Background color
                    borderColor: "rgba(54, 162, 235, 1)", // Border color
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            scale: {
                ticks: {
                    beginAtZero: true, // Start scale at zero
                    max: 100 // Maximum value
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20
                    }
                },
                tooltip: {
                    // Custom tooltip options
                }
            }
        }
    });
}

// lineAreaChart Chart
const lineAreaChartCanvas = document.getElementById("lineAreaChart");
if (lineAreaChartCanvas) {
    var ctx1 = lineAreaChartCanvas.getContext('2d');
    var lineAreaChart = new Chart(ctx1, {
        type: 'line', // Use 'line' type for area chart
        data: {
            labels: ["Week 1", "Week 2", "Week 3", "Week 4"], // X-axis labels
            datasets: [
                {
                    label: 'Product C', // Now the smallest values
                    data: [10, 20, 30, 40], // Adjusted sales data for Product C
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Color for Product C
                    borderColor: 'rgba(54, 162, 235, 1)', // Line color for Product C
                    borderWidth: 2
                },
                {
                    label: 'Product A', // Now the middle values
                    data: [20, 30, 40, 60], // Adjusted sales data for Product A
                    fill: true,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)', // Color for Product A
                    borderColor: 'rgba(75, 192, 192, 1)', // Line color for Product A
                    borderWidth: 2
                },
                {
                    label: 'Product B', // Now the largest values
                    data: [30, 50, 80, 100], // Adjusted sales data for Product B
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // Color for Product B
                    borderColor: 'rgba(255, 99, 132, 1)', // Line color for Product B
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true, // Start Y-axis at zero
                    title: {
                        display: true,
                        text: 'Sales (Units)'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Weeks'
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20
                    }
                },
                tooltip: {
                    // Custom tooltip options
                }
            }
        }
    });
}

// lineAreaChart Chart
const doughnutChartCanvas = document.getElementById("doughnutChart");
if (doughnutChartCanvas) {
    var ctx1 = doughnutChartCanvas.getContext('2d');
    var doughnutChart = new Chart(ctx1, {
        type: 'doughnut', // Doughnut chart type
        data: {
            labels: ['Electronics', 'Clothing', 'Groceries', 'Books', 'Toys'], // Categories
            datasets: [{
                label: 'Sales ($)',
                data: [3000, 1500, 2000, 800, 1200], // Sales data
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return tooltipItem.label + ': $' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    });
}