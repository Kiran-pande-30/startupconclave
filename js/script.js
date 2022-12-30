var swiper1 = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination-1",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next-1",
      prevEl: ".swiper-button-prev-1",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

  var swiper2 = new Swiper(".slide-content-2", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination-2",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next-2",
      prevEl: ".swiper-button-prev-2",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

