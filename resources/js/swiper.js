import Swiper, { Navigation, Pagination } from 'swiper';

var swiper = new Swiper('.swiper-activities', {

      modules: [Navigation, Pagination],
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination",
    },
    loop: true,

    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
    }
    
  });