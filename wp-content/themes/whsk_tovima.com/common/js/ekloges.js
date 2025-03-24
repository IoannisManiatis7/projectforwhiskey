$('.carousel-slick').slick({
  infinite: false,
  dots:false,
  draggable:true,
  slidesToShow: 4.2,
  slidesToScroll: 4,
  prevArrow: ".only-vima-prev",
  nextArrow: ".only-vima-next",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2.2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        draggable:false,
        arrows:false,
        slidesToShow: 1.2,
        slidesToScroll: 1,
      }
    },
  ] 
});

$('.carousel-video').slick({
  infinite: false,
  dots:false,
  draggable:true,
  slidesToShow: 1.3,
  slidesToScroll: 1,
  prevArrow: ".carou-videos-prev",
  nextArrow: ".carou-videos-next",
  responsive: [
    {
      breakpoint: 767,
      settings: {
        draggable:false,
        arrows:false,
        slidesToShow: 1.1,
        slidesToScroll: 1,
      }
    },
  ]   
});