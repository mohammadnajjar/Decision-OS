/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Auth init js
*/

document.addEventListener("DOMContentLoaded", () => {
  const otpInputs = document.querySelectorAll("[data-otp-input]");

  otpInputs.forEach((input, index) => {
    input.addEventListener("input", (event) => {
      // Ensure only numbers are entered
      event.target.value = event.target.value.replace(/[^0-9]/g, "");
      
      // Move to next input if a digit is entered
      if (event.target.value.length === 1) {
        const nextInput = otpInputs[index + 1];
        if (nextInput) {
          nextInput.focus();
        }
      }
    });

    input.addEventListener("keydown", (event) => {
      if (event.key === "Backspace" && !input.value) {
        const previousInput = otpInputs[index - 1];
        if (previousInput) {
          previousInput.focus();
        }
      }
    });
  });

  otpInputs[0].focus(); // Automatically focus first input
});
