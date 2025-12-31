/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: vector-maps File
*/

var worldemapmarkers = new jsVectorMap({
    selector: "#world-map", // Use the correct selector
    map: 'world',
    zoomOnScroll: false,
    selectedMarkers: [0, 2], // Select specific markers (index-based)
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fillOpacity: 1,
        },
    },
    markersSelectable: true,
    markers: [
        { name: "Palestine", coords: [31.9474, 35.2272] },
        { name: "Russia", coords: [61.524, 105.3188] },
        { name: "Canada", coords: [56.1304, -106.3468] },
        { name: "Greenland", coords: [71.7069, -42.6043] },
    ],
    markerStyle: {
        initial: {
            fill: "#adb5bd" // Default marker color
        },
        selected: { fill: "var(--bs-primary)" },
        hover: { fill: "var(--bs-primary)" },
    },
    labels: {
        markers: {
            render: function (marker) {
                return marker.name; // Render the marker name
            }
        }
    }
});

var worldlinemap = new jsVectorMap({
    map: "world",
    selector: "#world-map-markers-line",
    selectedMarkers: [0, 2], // Select specific markers (index-based)
    markers: [
        {
            name: "Greenland",
            coords: [72, -42]
        },
        {
            name: "Canada",
            coords: [56.1304, -106.3468]
        },
        {
            name: "Brazil",
            coords: [-14.2350, -51.9253]
        },
        {
            name: "Russia",
            coords: [61, 105]
        },
        {
            name: "China",
            coords: [35.8617, 104.1954]
        },
        {
            name: "Norway",
            coords: [60.472024, 8.468946]
        },
    ],
    lines: [
        {
            from: "Canada",
            to: "Brazil"
        },
        {
            from: "China",
            to: "Brazil"
        },
        {
            from: "Russia",
            to: "Brazil"
        },
        {
            from: "Greenland",
            to: "Brazil"
        },
        {
            from: "Brazil",
            to: "Brazil"
        },
        {
            from: "Norway",
            to: "Brazil"
        }
    ],
    lineStyle: {
        animation: true,
        strokeDasharray: "6 3 6",
    },
    labels: {
        markers: {
            render: function (marker) {
                return marker.name; // Render the marker name
            }
        }
    },
    markerStyle: {
        initial: {
            fill: "#adb5bd" // Default marker color
        },
        selected: { fill: "var(--bs-primary)" },
        hover: { fill: "var(--bs-primary)" },
    },
});