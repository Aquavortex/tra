$(document).ready(function () {

  $('a[href^="#"]').click(function () {
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
    return false;
  });

  $("img.panorama").panorama();


  $('.rev-block-v2 .container').slick({
    infinite: true,
    autoplay: false,
    adaptiveHeight: false,
    dots: true,
    arrows: true,
    fade: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
    nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>'
  });

});