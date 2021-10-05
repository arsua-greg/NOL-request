$('.slider').slick({
    centerMode: true,
    infinite: true,
    // centerPadding: '0',
    slidesToShow: .92,
    slideWidth: 425,
    speed: 500,
    arrows: false,
    dots: true,
    variableWidth: false,
    rtl: false,
  });


  $('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    console.log('beforeChange', currentSlide, nextSlide);
  });
  $('.slider').on('afterChange', function(event, slick, currentSlide){
    console.log('afterChange', currentSlide);
  });