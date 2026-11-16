// year in the footer
const yearSpan = document.getElementById("year");
if (yearSpan) {
  yearSpan.textContent = new Date().getFullYear();
}

// Mobile nav
const menuBtn = document.querySelector(".mobile-menu-btn");
const mainNav = document.querySelector(".main-nav");

if (menuBtn && mainNav) {
  menuBtn.addEventListener("click", () => {
    mainNav.classList.toggle("open");
  });
}
