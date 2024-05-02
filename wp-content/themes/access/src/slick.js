jQuery(document).ready(function($){

    $('.slider').slick({
        infinite: true,
        centerMode: true,
        centerPadding: 0,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed:5000,
        speed: 500,
        autoplay:true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: true,
              centerMode: true,
           
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              slidesToShow: 1,
            
            }
          }
        ]
      });
    // $('.slider').slick({
      
    //     centerPadding: 0,
    //     centerMode: true,
    //     infinite: true,
    //     slidesToShow: 3,
    //     autoplay: true,
    //     autoplaySpeed: 5000,
    //     dots: false,
    //     arrows:true,
    //     // prevArrow: $(`.${cls}-arrow.prev-arrow`),
    //     // nextArrow: $(`.${cls}-arrow.next-arrow`),
    //     cssEase: 'cubic-bezier(.4, 0, .2, 1)',
    // });
})

