/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Leaflet-maps File
*/

// Function to initialize maps
function initializeMap(mapId, coords) {
    const map = L.map(mapId).setView(coords, 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    return map;
}

// Initialize maps
const map1 = initializeMap('leaflet_map', [51.505, -0.09]);
const map2 = initializeMap('leaflet_map_markers', [51.505, -0.09]);
const map3 = initializeMap('leaflet_map_popup', [51.505, -0.09]);
const map4 = initializeMap('leaflet_map_custom_icon', [51.505, -0.09]);

// Add shapes and markers to map2
L.marker([51.5, -0.09]).addTo(map2);
L.circle([51.508, -0.11], { color: 'red', fillColor: '#f03', fillOpacity: 0.5, radius: 500 }).addTo(map2);
L.polygon([[51.509, -0.08], [51.503, -0.06], [51.51, -0.047]]).addTo(map2);

// Add a popup to map3
const markerPopup = L.marker([51.5, -0.09]).addTo(map3);
markerPopup.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
L.popup().setLatLng([51.513, -0.09]).setContent("I am a standalone popup.").openOn(map3);

// Custom icon setup
const LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
        iconSize: [38, 95],
        shadowSize: [50, 64],
        iconAnchor: [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor: [-3, -76]
    }
});

const icons = {
    green: new LeafIcon({ iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png' }),
    red: new LeafIcon({ iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-red.png' }),
    orange: new LeafIcon({ iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-orange.png' })
};

// Add custom icons to map4
L.marker([51.5, -0.09], { icon: icons.green }).addTo(map4).bindPopup("I am a green leaf.");
L.marker([51.495, -0.083], { icon: icons.red }).addTo(map4).bindPopup("I am a red leaf.");
L.marker([51.49, -0.1], { icon: icons.orange }).addTo(map4).bindPopup("I am an orange leaf.");

// Create custom pane for labels in a new map
const leaflet_map_custom_pane = L.map('leaflet_map_custom_pane').setView([55.0, -3.0], 5);
leaflet_map_custom_pane.createPane('labels').style.zIndex = 650;
leaflet_map_custom_pane.getPane('labels').style.pointerEvents = 'none';

// Add base and labels layer
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap, © CartoDB'
}).addTo(leaflet_map_custom_pane);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_only_labels/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap, © CartoDB',
    pane: 'labels'
}).addTo(leaflet_map_custom_pane);

// GeoJSON data for cities
const geoJsonData = {
    "type": "FeatureCollection",
    "features": [
        { "type": "Feature", "properties": { "name": "London" }, "geometry": { "type": "Point", "coordinates": [-0.09, 51.505] } },
        { "type": "Feature", "properties": { "name": "Birmingham" }, "geometry": { "type": "Point", "coordinates": [-1.8904, 52.4862] } },
        { "type": "Feature", "properties": { "name": "Manchester" }, "geometry": { "type": "Point", "coordinates": [-2.2426, 53.4808] } },
        { "type": "Feature", "properties": { "name": "Newcastle" }, "geometry": { "type": "Point", "coordinates": [-1.6174, 54.9784] } },
        { "type": "Feature", "properties": { "name": "Leeds" }, "geometry": { "type": "Point", "coordinates": [-1.5491, 53.8008] } },
        { "type": "Feature", "properties": { "name": "Bristol" }, "geometry": { "type": "Point", "coordinates": [-2.5879, 51.4545] } },
        { "type": "Feature", "properties": { "name": "Nottingham" }, "geometry": { "type": "Point", "coordinates": [-1.1614, 52.9548] } }
    ]
};

// Add GeoJSON layer and bind popups
const geojson = L.geoJson(geoJsonData).addTo(leaflet_map_custom_pane);
geojson.eachLayer(layer => layer.bindPopup(layer.feature.properties.name));

// Fit map to GeoJSON bounds
leaflet_map_custom_pane.fitBounds(geojson.getBounds());