jQuery(function ($){
  var dir = $('#l-body').attr('data-tmpdir') + 'assets/img';
  jQuery('.js-about__slider').slick({
    autoplay: true,
    speed: 400,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
  });
});
