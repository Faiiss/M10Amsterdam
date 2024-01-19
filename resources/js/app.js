import './bootstrap';
$(document).ready(function(){
    $('.slider').slick({
      prevArrow: '<a class="slick-prev" onclick="changeSlide(-1)"</a>',
      nextArrow: '<a class="slick-next" onclick="changeSlide(1)"</a>',
      autoplay: true,
      slidesToShow: 1,
      autoplaySpeed: 5000, // Change slide every 5 seconds
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      adaptiveHeight: true
    });
  });