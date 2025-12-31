/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Coming Soon init js
*/

  // Set the target date (e.g., December 31, 2025 at midnight)
  const targetDate = new Date("2025-12-31T00:00:00").getTime();

  // Update the countdown every 1 second
  const countdownInterval = setInterval(function() {
    // Get the current date and time
    const currentDate = new Date().getTime();

    // Calculate the remaining time
    const remainingTime = targetDate - currentDate;

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
    const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

    // Display the results in the respective elements
    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;

    // If the countdown reaches 0, stop the interval
    if (remainingTime <= 0) {
      clearInterval(countdownInterval);
      document.getElementById("days").innerText = "0";
      document.getElementById("hours").innerText = "0";
      document.getElementById("minutes").innerText = "0";
      document.getElementById("seconds").innerText = "0";
      alert("Countdown reached!");
    }
  }, 1000);
