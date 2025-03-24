if(document.querySelector('body').classList.contains('single')) {
var contentHeight = document.querySelector('.single-article').offsetHeight;
var contentImage = document.querySelector('.article-image').offsetHeight;
var postmetavar =  document.querySelector('.half-width .post-meta');

var gpost =  document.querySelector('.gnomes-widget');
var lpost =  document.querySelector('.related-left');
if(postmetavar) {
  var postmeta =  document.querySelector('.half-width .post-meta').offsetHeight;
}

if(lpost) {
lpost.style.marginTop = ''+contentHeight / 2 +'px';
}
if(gpost) {
gpost.style.marginTop = ''+ contentImage - postmeta +'px';
}


$('iframe[src*="megatv.com/embed/"]').wrap("<div class='wrap-video-container'></div>");
$('iframe[src*="youtube"]').wrap("<div class='wrap-video-container'></div>");
$('iframe[src*="facebook"]').wrap("<div class='wrap-facebook'></div>");
$('iframe[src*="instagram"]').wrap("<div class='wrap-instagram'></div>");
$('iframe[src*="webtools"]').wrap("<div class='wrap-video-container'></div>");
$('iframe[src*="player.glomex"]').wrap("<div class='wrap-video-container'></div>");  

 $(".main-content img").each(function(){
  var $this = $(this);
  if ($this.width() > $this.height()) {
    $this.addClass("horizontal");
  } else{
    $this.addClass("vertical");
  }
});
  
$('img.horizontal').wrap("<div class='wrap-horizontal-image'></div>"); 
  
$('.vertical-carousel').slick({
  infinite: true,
  dots:false,
  arrows:false,
  draggable:false,
  vertical:true,
  autoplay: true,
  autoplaySpeed: 2500,  
  slidesToShow: 1,
  slidesToScroll: 1
});
  
}


$('.latest-slick').slick({
  infinite: false,
  dots:false,
  draggable:true,
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow: ".tslider-prev",
  nextArrow: ".tslider-next",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 767,
      settings: "unslick"
    },
  ] 
});