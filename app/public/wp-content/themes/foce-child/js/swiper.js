
  // Paramettres Carrousel 
const swiper = new Swiper(".swiper-container", {
  direction: 'horizontal',
  centeredSlides: true,
  slidesPerView: 3,
  speed: 1000,
  autoplay: {
      delay: 1000,
      disableOnInteraction: false,
  },
  loop: true, // Boucle à l'infinie 
  loopedSlides: 2,
  loopAdditionalSlides: 1,
  effect: "coverflow",
  coverflowEffect: {
      slideShadows: false,
      rotate: 70,
      stretch: 0,
      depth: 50,
      modifier: 1,
  },
});