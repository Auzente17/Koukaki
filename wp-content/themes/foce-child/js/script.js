// ANIMATION DES TITRES EN FONCTION DU SCROLL //

console.log("Démarrage du script");

document.addEventListener("DOMContentLoaded", function () {
  // Ajouter la classe active à la section banner au chargement de la page
  var bannerElement = document.querySelector(".banner");

  if (bannerElement) {
    bannerElement.classList.add("active");
  }

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
  const sections = document.querySelectorAll("span.title, span.title-studio");

  // Ajouter l'observateur d'intersection à chaque section
  sections.forEach((section) => {
    sectionObserver.observe(section);
  });
});
