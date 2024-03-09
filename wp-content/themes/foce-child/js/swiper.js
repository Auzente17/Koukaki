// SWIPPER POUR LE CAROUSSEL DES PERSONNAGES //

document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".swiper")) {
    const swiper = new Swiper(".swiper", {
      // configuration de Swiper
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
  }
});
