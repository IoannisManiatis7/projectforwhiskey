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

if ($(window).width() < 660) {
   $('#WrapLatest').appendTo('#append-latest');
   $('#Gnomes').appendTo('#append-gnomes');  
}





// window.addEventListener('DOMContentLoaded', (event) => {
//    const body = document.body;
//    const tablinks = document.querySelectorAll('.tab-button');
//    if(tablinks.length > 0) {
//      tablinks.forEach(
//       tablink => {
//         console.log(tablink);
//         tablink.addEventListener('click', () => {
//           if (tablink.classList.contains('activeTab')) {
//              tablink.classList.remove('activeTab');
//              body.classList.remove('openbottom');
//           } else {
//             tablinks.forEach(l => {l.classList.remove('activeTab')});
//             tablink.classList.add('activeTab');
//             body.classList.add('openbottom');
//           }
//         })
//       }
//      )
//    }
// });


function openx(e, t) {
    var n, a, s;
    for (a = document.getElementsByClassName("tabcontent"), n = 0; n < a.length; n++) a[n].style.display = "none";
    for (s = document.getElementsByClassName("tab-i-x"), n = 0; n < s.length; n++) s[n].className = s[n].className.replace(" activeTab", "");
    document.getElementById(t).style.display = "block", e.currentTarget.className += " activeTab"
} 

if ($(window).width() > 767 && $(window).width() < 1024) {  
$('#wrap-subs-items').appendTo('#restItems');
}

/* PODCAST SUBSC */
var dropbtn = document.querySelectorAll('.subscribe-label');
  for (var i = 0; i < dropbtn.length; i++) {
  dropbtn[i].addEventListener("click", function(){ this.parentElement.classList.toggle('active'); });
}