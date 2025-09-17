// mobile menu
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenuLogo = document.getElementById("mobile-menu-logo");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeMenuBtn = document.getElementById("close-menu");

  mobileMenuBtn.addEventListener("click", function () {
    mobileMenu.classList.add("z-50");
    mobileMenu.classList.remove("opacity-0", "-z-50");
    setTimeout(() => {
      mobileMenuLogo.classList.remove("pl-24");
    }, 300);
  });

  closeMenuBtn.addEventListener("click", function () {
    mobileMenu.classList.add("opacity-0", "-z-50");
    mobileMenu.classList.remove("z-50");
    mobileMenuLogo.classList.add("pl-24");
  });
});

if (window.innerWidth < 1024) {
  // Select the element to add/remove class from
  const targetElement = document.querySelector("#mobile-menu-bar-icons-row");
  const header = document.querySelector("#main-menu-header");

  // Define scroll threshold in pixels
  const scrollThreshold = 100;

  // Listen for scroll event on window
  window.addEventListener("scroll", () => {
    if (window.scrollY > scrollThreshold) {
      targetElement?.classList.add("mobile-menu-bar-icon-row-scrolled");
      header?.classList.remove("bg-transparent");
      header?.classList.add("bg-black");
      console.log(header);
    } else {
      targetElement?.classList.remove("mobile-menu-bar-icon-row-scrolled");
      header?.classList.remove("bg-black");
      header?.classList.add("bg-transparent");
    }
  });
}
