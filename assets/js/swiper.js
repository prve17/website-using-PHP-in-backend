// Slider 
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

// Team javascript code
var swiper = new Swiper(".teamSwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 50,
    modifier: 1,
    slideShadows: true,
  },
  // autoplay: {
  //         delay: 2500,
  //         disableOnInteraction: false,
  //       },
    pagination: {
    el: ".swiper-pagination",
  },
});
