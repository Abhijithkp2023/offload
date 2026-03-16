document.addEventListener('DOMContentLoaded', () => {
  const banner = document.querySelector('.banner-hero');
  if (!banner) {
    return;
  }

  if (typeof window.gsap === 'undefined') {
    banner.style.opacity = '1';
    return;
  }

  const title = banner.querySelector('.banner-display-text');
  const images = banner.querySelectorAll('.banner-media-item');
  const video = banner.querySelector('.banner-media-video');

  gsap.set(banner, { opacity: 1 });

  if (title) {
    gsap.set(title, {
      scale: 8,
      x: -1000,
      color: '#2F3033',
      transformOrigin: 'center center',
    });
  }

  if (images.length) {
    gsap.set(images, { y: -1000, opacity: 0 });
  }

  if (video) {
    gsap.set(video, { y: -1000, opacity: 1 });
  }

  const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
  if (title) {
    tl.to(title, { scale: 1, x: 0, color: '#D9D9D9', duration: 4.8 }, 0);
  }

  if (images.length) {
    tl.to(images, { y: 0, opacity: 1, duration: 3.6, stagger: 0.05 }, 0.6);
  }

  if (video) {
    tl.to(video, { y: 0, opacity: 1, duration: 3.6 }, 0.9);
  }
});

