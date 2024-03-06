// ANIMATION DES TITRES EN FONCTION DU SCROLL //

console.log("Démarrage du script");

// Créer un observateur pour gérer l'animation des titres
const sectionObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      console.log(`Element ${entry.target} is intersecting.`);
      if (entry.isIntersecting) {
        entry.target.classList.add("title-animation");
      } else {
        entry.target.classList.remove("title-animation");
      }
    });
  },
  { rootMargin: "0px", threshold: 0 }
);

// Sélectionner les sections à animer
const sections = document.querySelectorAll(
  ".story span.title, .studio span.title"
);

// Ajouter l'observateur d'intersection à chaque section
sections.forEach((section) => {
  sectionObserver.observe(section);
});

// SWIPPERJS POUR LE CAROUSSEL DES PERSONNAGES //

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 60,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    spaceBetween: 40,
    speed: 1000,
    autoplay: {
      delay: 1500,
    },
  });
});

// DEPLACEMENT DES NUAGES //

// Mise en place de la variable pour le mouvement des nuages
let cloudsPositionX = 0;

// Elements pour le mouvement des nuages
const root = document.documentElement;
const locationElement = document.getElementById("place");

// Fonction pour l'ajustement de la position des nuages lors du scroll
function adjustCloudsPosition() {
  const { scrollY } = window;
  const elementTopOffset = locationElement.offsetTop;
  const verticalShift = 300;

  // Calcule de la position des nuages en fonction du scroll
  cloudsPositionX = Math.round(
    0 - (scrollY - elementTopOffset - verticalShift)
  );

  // Condition qui assigne la position calculée en pixels à la variable CSS --cloudsPositionX
  if (cloudsPositionX <= 0 && cloudsPositionX > -300) {
    root.style.setProperty("--cloudsPositionX", `${cloudsPositionX}px`);
  }
}

window.addEventListener("scroll", () => {
  root.style.setProperty("--speed", "1s");
  adjustCloudsPosition();
});

jQuery(document).ready(function ($) {
  // Ajouter la classe active à la section banner au chargement de la page
  $(".banner").addClass("active");
});
