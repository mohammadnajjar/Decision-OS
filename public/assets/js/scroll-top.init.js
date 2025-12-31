/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Scroll To Top Js File
*/

const scrollToTop = document.getElementById("progress-scroll");
if (scrollToTop) {
    const scroller = document.getElementById("progress-scroll");

    if (scroller) {
        scroller.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    document.addEventListener("DOMContentLoaded", () => {
        const progressWrap = document.querySelector('.progress-wrap');
        const progressCircle = document.querySelector('.progress');
        const pathLength = 282.6; // Circumference of the circle (2 * π * radius) = 2 * π * 45

        progressCircle.style.strokeDasharray = `${pathLength} ${pathLength}`;
        progressCircle.style.strokeDashoffset = `${pathLength}`;

        const updateProgress = () => {
            const scroll = window.scrollY || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            const progress = pathLength - (scroll * pathLength / height);
            progressCircle.style.strokeDashoffset = `${progress}`;
        };

        window.addEventListener('scroll', () => {
            updateProgress();

            if (window.scrollY > 200) {
                progressWrap.classList.add('active-progress');
            } else {
                progressWrap.classList.remove('active-progress');
            }
        });
    });
}