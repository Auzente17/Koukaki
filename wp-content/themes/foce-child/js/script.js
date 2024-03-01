console.log("Démarrage du script");

// Créer un observateur pour savoir à quel moment chaue section devient visible
const sectionObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        observer.unobserve(entry.target); // Arrête d'observer une fois l'effet appliqué
      }
    });
  },
  { rootMargin: "0px", threshold: 0.5 }
);

jQuery(document).ready(function ($) {
  // Ajouter la classe active à la section banner au chargement de la page
  $(".banner").addClass("active");
});
