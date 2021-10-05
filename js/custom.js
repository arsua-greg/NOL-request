$(".slider").slick({
    arrows: true,
    slidesToShow: 1.1,
    centerMode: true,
    centerPadding: '0',
    infinite: false,
    dots: true,
    responsive: [
        {
            breakpoint: 769,
            settings: {
                arrows: false,
                slidesToShow: 1.3,
                centerMode: true,
                centerPadding: '0',
                infinite: false,
                dots: true,
            }
        },
        // {
        //     breakpoint: 500,
        //     settings: {
        //         centerPadding: '40px',
        //     }
        // },
        //         {
        //     breakpoint: 371,
        //     settings: {
        //         centerPadding: '30px',
        //     }
        // },  
    ]
    
});