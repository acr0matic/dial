const partners = new Swiper('.slider-partners', {
  slidesPerView: 3,
  centeredSlides: true,
  spaceBetween: 15,
  loop: true,
  allowTouchMove: false,

  effect: "coverflow",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 385,
    modifier: 1,
    slideShadows: true
  },

  autoplay: {
    delay: 3000,
  },

  navigation: {
    nextEl: '.partners .swiper-button-next',
    prevEl: '.partners .swiper-button-prev',
  },
});