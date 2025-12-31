/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: google-maps File
*/


var map = new GMaps({
    el: '#basic_gmap',
    lat: -12.043333,
    lng: -77.028333
});

var map = new GMaps({
    el: '#gmap_with_marker',
    lat: -12.043333,
    lng: -77.028333,
    title: 'Lima',
    click: function (e) {
        alert('You clicked in this marker');
    },
    infoWindow: {
        content: '<p>HTML Content</p>'
    }
});

// Markers
const gmap_with_marker = document.getElementById('gmap_with_marker');
if (gmap_with_marker) {
    map = new GMaps({
        div: gmap_with_marker,
        lat: -12.043333,
        lng: -77.028333
    });
    map.addMarker({
        lat: -12.043333,
        lng: -77.03,
        title: 'Lima',
        details: {
            database_id: 42,
            author: 'HPNeo'
        },
        click: function (event) {
            console.log(event);
            alert('You clicked on this marker');
        }
    });
}

const gmap_with_overlays = document.getElementById('gmap_with_overlays');
if (gmap_with_overlays) {
    map = new GMaps({
        div: gmap_with_overlays,
        lat: -12.043333,
        lng: -77.028333
    });
    map.drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        content: '<div class="gmaps-overlay">Lima<div class="gmaps-overlay_arrow above"></div></div>',
        verticalAlign: 'top',
        horizontalAlign: 'center'
    });
}

const gmap_map_type = document.getElementById('gmap_map_type');
if (gmap_map_type) {
    map = new GMaps({
        div: gmap_map_type,
        lat: -12.043333,
        lng: -77.028333,
        mapTypeControlOptions: {
            mapTypeIds: ["hybrid", "roadmap", "satellite", "terrain", "osm"]
        }
    });
    map.addMapType("osm", {
        getTileUrl: function (coord, zoom) {
            return "https://a.tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenStreetMap",
        maxZoom: 18
    });
    map.setMapTypeId("osm");
}