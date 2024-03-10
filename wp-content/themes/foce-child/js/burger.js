// MENU BURGER //

const buttonMenu = document.querySelector(".buttonMenu");
const burger = document.querySelector(".activeMenu");
const menuLinks = document.querySelectorAll(".activeMenu ul li a");
const animTitles = document.querySelectorAll(".animeLink, .animateTitle");

const toggleMenu = () => {
  console.log("Menu burger ouvert");
  if (!burger.classList.contains("active_nav")) {
    burger.classList.add("active_nav");
    buttonMenu.classList.add("active");
  } else {
    closeMenu();
  }
};

const closeMenu = () => {
  console.log("Menu burger fermé");
  burger.classList.add("inactive_nav"); // Ajout de la classe d'animation de fermeture
  buttonMenu.classList.remove("active");
  setTimeout(() => {
    burger.classList.remove("active_nav"); // Supprime la classe active_nav après l'animation de fermeture
    burger.classList.remove("inactive_nav"); // Supprime la classe d'animation de fermeture
  }, 1000);
};

buttonMenu.addEventListener("click", toggleMenu);

menuLinks.forEach((link) => {
  link.addEventListener("click", closeMenu);
});

animTitles.forEach((title) => {
  title.addEventListener("click", () => {
    document.body.style.overflowY = "";
    document.body.style.paddingRight = "";
  });
});
