jQuery(document).ready(function($){

    $('.slider').slick({
        infinite: true,
        centerMode: true,
        centerPadding: 0,       
        slidesToShow: 1,
        slidesToScroll: 3,
        autoplaySpeed:5000,
        // speed: 500,
        autoplay:false,
        arrows: true,
         prevArrow: $('.prev-arrow'),
         nextArrow: $('.next-arrow'),
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

