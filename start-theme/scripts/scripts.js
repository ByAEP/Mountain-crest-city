document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector(".mobile-menu-btn");
  const mainNav = document.querySelector(".main-nav");

  if (menuBtn && mainNav) {
    menuBtn.addEventListener("click", () => {
      mainNav.classList.toggle("open");
    });
  }
});
