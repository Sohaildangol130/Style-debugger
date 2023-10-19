export const lazyLoad = () => {
  const imgList = document.querySelectorAll('img.js-lazy-media');
  if ('IntersectionObserver' in window) {
    // Lazy loading for image
    let lazyImageObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          let img = entry.target;
          img.src = img.dataset.src;
          img.dataset.src = '';

          img.addEventListener('load', () => {
            img.classList.remove('js-lazy-media');
            img.classList.add('is-lazy-media-loaded');
          });

          lazyImageObserver.unobserve(img);
        }
      });
    });

    imgList.forEach(function (lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });
  }
};
