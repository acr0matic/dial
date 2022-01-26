const partners = new Swiper('.slider-partners', {
  slidesPerView: 2,
  centeredSlides: true,
  spaceBetween: 15,
  loop: true,
  allowTouchMove: false,

  effect: "coverflow",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 485,
    modifier: 1,
    slideShadows: true
  },

  autoplay: {
    delay: 3000,
  },

  breakpoints: {
    976: {
      slidesPerView: 3,

      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 385,
        modifier: 1,
        slideShadows: true
      },
    }
  },

  navigation: {
    nextEl: '.partners .swiper-button-next',
    prevEl: '.partners .swiper-button-prev',
  },
});

if (window.matchMedia('(max-width: 576px)').matches) {
  const step = new Swiper('.slider-step', {
    slidesPerView: 'auto',
    spaceBetween: 25,
    autoHeight: true,

    pagination: {
      el: '.slider-step .swiper-pagination',
    },
  });

  const feedback = new Swiper('.slider-feedback', {
    slidesPerView: 'auto',
    spaceBetween: 25,
    autoHeight: true,

    pagination: {
      el: '.slider-feedback .swiper-pagination',
    },
  });
}