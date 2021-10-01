
var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  slidesPerView: 'auto',
  centeredSlides: true,
  paginationClickable: true,
  spaceBetween: 30,
  autoplay: {
    delay: 6500,
    disableOnInteraction: false,
  },
});
document.querySelector('.prepend-2-slides').addEventListener('click', function(e) {
  e.preventDefault();
  swiper.prependSlide([
    '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>',
    '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>'
  ]);
});
document.querySelector('.prepend-slide').addEventListener('click', function(e) {
  e.preventDefault();
  swiper.prependSlide('<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>');
});
document.querySelector('.append-slide').addEventListener('click', function(e) {
  e.preventDefault();
  swiper.appendSlide('<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>');
});
document.querySelector('.append-2-slides').addEventListener('click', function(e) {
  e.preventDefault();
  swiper.appendSlide([
    '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>',
    '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>'
  ]);
});