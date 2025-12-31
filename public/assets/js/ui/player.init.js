/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Player init js
*/

document.addEventListener('DOMContentLoaded', () => {
    // Change "{}" to your options
    const plyr__audio = new Plyr('audio', {
        controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
        autoplay: false, // Set to true to autoplay
        loop: { active: false }, // Set to true to loop the audio
        muted: false // Set to true to start muted
    });

    // Expose player so it can be used from the console
    window.player = player;
});

let timeout;
const player = new Plyr('#video_player');

const urlInput = document.getElementById('url-input');
const loadVideoButton = document.getElementById('load-video');

loadVideoButton.addEventListener('click', () => {
    clearTimeout(timeout);
    timeout = setTimeout(() => {
        const url = urlInput.value.trim();
        const videoId = extractVideoID(url);
        if (videoId) {
            player.source = {
                type: 'video',
                sources: [{
                    src: videoId,
                    provider: 'youtube',
                }],
            };
        } else {
            alert('Please enter a valid YouTube URL.');
        }
    }, 300);
});

function extractVideoID(url) {
    const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
    const match = url.match(regex);
    return match ? match[1] : null;
}