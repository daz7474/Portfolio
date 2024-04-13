// ======================================
// Mobile Menu
// ======================================

// Get ref to burger menu button
const menuBtn = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");
const burgerBar = document.querySelector(".bar");
const menulink = document.querySelectorAll(".mobile-menu div a");

// On click, toggles class "toggle" to mobile menu to show/hide
menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("menu-active");
  // Toggles the class "x" to add/remove a cross
  setTimeout(() => {
    burgerBar.classList.toggle("rotate");
  }, 100)
});

// Hides menu when each link is clicked
for (let i = 0; i < menulink.length; i++) {
  menulink[i].addEventListener("click", () => {
    mobileMenu.classList.toggle("menu-active");
    // Toggles the class "x" to add/remove a cross
    setTimeout(() => {
      burgerBar.classList.remove("rotate");
    }, 150)
  })
};

$(".top-nav").sticky();