console.log("Démarrage du script");

document.addEventListener("DOMContentLoaded", function () {
  // Ajouter la classe active à la section banner au chargement de la page
  var bannerElement = document.querySelector(".banner");

  if (bannerElement) {
    bannerElement.classList.add("active");
  }
});
