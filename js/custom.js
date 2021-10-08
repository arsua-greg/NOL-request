$('.slider').slick({
  centerMode: true,
  infinite: true,
  // centerPadding: '0',
  slidesToShow: 1.925,
  slideWidth: 425,
  speed: 500,
  arrows: false,
  // autoplay: true,
  autoplaySpeed: 5000,
  dots: true,
  variableWidth: false,
  rtl: false,
  responsive : [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
        slideWidth: 425,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        centerMode: false,
        infinite: true,
        variableWidth: false,
      }
    },
    {
      breakpoint: 1025,
      settings: {
        centerMode: true,
        infinite: true,
        slidesToShow: .92,
        slideWidth: 425,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        variableWidth: false,
        rtl: false,
      }
    },
    {
      breakpoint: 1401,
      settings: {
        centerMode: true,
        infinite: true,
        slidesToShow: 0.96,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        variableWidth: false,
        rtl: false,
      }
    },
    {
      breakpoint: 1701,
      settings: {
        centerMode: true,
        infinite: true,
        // centerPadding: '0',
        // slidesToShow: .925,
        slidesToShow: 0.95,
        speed: 500,
        arrows: false,
        // autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        variableWidth: false,
        rtl: false,
      }
    }
  ]
});


$('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  console.log('beforeChange', currentSlide, nextSlide);
});
$('.slider').on('afterChange', function(event, slick, currentSlide){
  console.log('afterChange', currentSlide);
});