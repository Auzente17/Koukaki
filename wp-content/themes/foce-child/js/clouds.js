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

  // Log des valeurs
  console.log("scroll Y:", scrollY);
  console.log("element Top Offset:", elementTopOffset);
  console.log("Vertical Shift:", verticalShift);

  console.log("Clouds Position X:", cloudsPositionX);

  // Condition pour assigner la position calculée en pixels à la variable CSS --cloudsPositionX
  if (cloudsPositionX <= 0 && cloudsPositionX > -300) {
    root.style.setProperty("--cloudsPositionX", `${cloudsPositionX}px`);
  }
}

window.addEventListener("scroll", () => {
  root.style.setProperty("--speed", "1s");
  adjustCloudsPosition();
});
