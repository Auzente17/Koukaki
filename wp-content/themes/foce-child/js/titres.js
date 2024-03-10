console.log("Démarrage du script");

// Créer un observateur pour gérer l'animation des titres
const sectionObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
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
const sections = document.querySelectorAll("span.title");

// Ajouter l'observateur d'intersection à chaque section
sections.forEach((section) => {
  sectionObserver.observe(section);
});
