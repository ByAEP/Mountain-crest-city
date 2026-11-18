const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
speed: 500,  // Set the speed to 500 milliseconds (0.5 second)
  autoplay: {
    delay: 5000,
  },
});
