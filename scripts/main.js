const navbarToggle = document.querySelector("#navbar-toggle");
const navLinks = document.querySelectorAll(".nav-link");
const navUl = document.querySelector("header>ul");

navbarToggle.addEventListener("click", () => {
  Array.from(navLinks).map((link) => link.classList.toggle("nav-active"));
  navUl.classList.toggle("ul-active");
  navUl.parentNode.classList.toggle("header-active");
});
