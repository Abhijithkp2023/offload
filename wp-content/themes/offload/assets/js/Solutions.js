document.addEventListener('DOMContentLoaded', () => {
  const swiperEl = document.querySelector('.solutions-swiper');
  if (!swiperEl || typeof window.Swiper === 'undefined') {
    return;
  }

  new Swiper(swiperEl, {
    slidesPerView: 4,
    spaceBetween: 26,
    loop: false,
    speed: 600,
    breakpoints: {
      0: { slidesPerView: 1.1, spaceBetween: 16 },
      640: { slidesPerView: 2, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 24 },
      1280: { slidesPerView: 4, spaceBetween: 24 },
    },
  });
});

