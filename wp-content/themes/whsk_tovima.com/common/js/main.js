$(document).ready(function() {
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    $('body').addClass('is-mobile');
  } else {
    $('body').addClass('is-desktop');
  }
});


const TopBill = document.getElementById('dk-ad-sticky-toggle');
//   let TopBillboardH;
//   TopBillboardH = TopBill.offsetHeight;
//   const varbody =  document.querySelector('.tovimagr');
//   varbody.style.paddingTop = ''+TopBillboardH+'px';

window.billboardHeight = 0;
window.addEventListener('scroll', function(e){
  var BillTopH = document.querySelector("#dk-ad-sticky-toggle").offsetHeight;
  const art4header = document.querySelector('.post-full-layout-header');
  let art4headerH;
  if(art4header) {
    art4headerH = art4header.offsetHeight;
  }
  const header =  document.getElementById("identity");
  const headerHeight = header.offsetHeight;
  // console.log(headerHeight, headerHeight + BillTopH, window.pageYOffset);
  if (window.pageYOffset > headerHeight + BillTopH) {
    header.classList.add("wrapper-sticky");
    TopBill.style.marginTop = '-'+BillTopH+'px';
  } else {
    header.classList.remove("wrapper-sticky");
    TopBill.style.marginTop = '0px';
  }
  if(art4headerH && window.pageYOffset > art4headerH) {
    header.classList.add("wrapper-sticky-art4");
  } else {
    header.classList.remove("wrapper-sticky-art4");
  }
});


/* REMOVE NIKOS BILLBOARD
function stickyBilboard(billElement) {
window.addEventListener('scroll', function(e) {
  if(window.pageYOffset === 0) {
      billElement.parentElement.style.transition = "transform 0.5s";
      billElement.parentElement.style.transform = null;
    } else if(window.pageYOffset > billElement.offsetHeight) {
      billElement.parentElement.style.transition = null;
      billElement.parentElement.style.transform = `translateY(-${window.pageYOffset - billElement.offsetHeight}px)`;
    }
});
}
*/

// function scrollFunction2() {
//   var BillTopID = document.querySelector(".das-billboard");
//   var BillTop = document.querySelector(".das-billboard").offsetHeight;
//   var Header =  document.getElementById("identity");
//   var HeaderH = document.getElementById("identity").offsetHeight + BillTop + 60;
// //   console.log(HeaderH)
//   if (window.pageYOffset > HeaderH) {
//     document.body.style.paddingTop = '0px';
//     document.body.classList.add("break-billboard");
//     BillTopID.style.top = '-100%';
//   } else {
//     document.body.style.paddingTop = ''+BillTop+'px';
//     document.body.classList.remove("break-billboard");
//     BillTopID.style.top = '0px';
//   }
// }



document.addEventListener('DOMContentLoaded', function() {
  
$("#news-ico").click(function() {
  $(this).toggleClass("active-item");
  $("#LatestTop").toggleClass("openL");
  $("body").toggleClass("activeLatest");
});  
  
$(".burger-aria").click(function(e) {
  e.stopPropagation();
  $("body").addClass("activemenu");
  $(".background-overlay").addClass("openoverlay");
})
$("#closem").click(function() {
  $("body").removeClass("activemenu");
  $(".background-overlay").removeClass("openoverlay");
});
$(".background-overlay").click(function() {
  $("body").removeClass("activemenu");
  $(".background-overlay").removeClass("openoverlay");    
});

$("#close-player").click(function() {
  $(".sticky-player-inner").toggleClass("notstuck");
   $(".sticky-player-inner").removeClass('stuck');
   $(".sticky-player-inner").removeClass('prestuck');
    $('.sticky-player').height('auto')
});  

});


var dropbtn = document.querySelectorAll('.smb');
for (var i = 0; i < dropbtn.length; i++) {
dropbtn[i].addEventListener("click", function(){ this.parentElement.parentElement.classList.toggle('active'); });
}


document.addEventListener('DOMContentLoaded', function() {
  var $mapButton = $("#button-map");
  var $mapSection = $("#append__map");
  var $newsButton = $("#button-news");
  var $newsSection = $("#append__news");
  var $newspButton = $("#button-p");
  var $newspSection = $("#append__nt");
  var $closeAllButton = $("#news-ico");

  $mapButton.click(function() {
    $mapButton.toggleClass("activeTab");
    $("body").toggleClass("openbottom");
    $mapSection.toggleClass("opened");
    if ($newsSection.hasClass("opened")) {
      $newsButton.removeClass("activeTab");
      $("body").removeClass("openbottom");
      $newsSection.removeClass("opened");
    }
    if ($newspSection.hasClass("opened")) {
      $newspButton.removeClass("activeTab");
      $("body").removeClass("openbottom");
      $newspSection.removeClass("opened");
    }
  });

  $("#closemap").click(function() {
    $mapButton.removeClass("activeTab");
    $("body").removeClass("openbottom");
    $mapSection.removeClass("opened");
  });

  $newsButton.click(function() {
    $newsButton.toggleClass("activeTab");
    $("body").toggleClass("openbottom");
    $newsSection.toggleClass("opened");
    if ($mapSection.hasClass("opened")) {
      $mapButton.removeClass("activeTab");
      $("body").removeClass("openbottom");
      $mapSection.removeClass("opened");
    }
    if ($newspSection.hasClass("opened")) {
      $newspButton.removeClass("activeTab");
      $("body").removeClass("openbottom");
      $newspSection.removeClass("opened");
    }
  });

  $("#closenews").click(function() {
    $newsButton.removeClass("activeTab");
    $("body").removeClass("openbottom");
    $newsSection.removeClass("opened");
  });

  $newspButton.click(function() {
    $newspButton.toggleClass("activeTab");
    $("body").toggleClass("openbottom");
    $newspSection.toggleClass("opened");
    if ($mapSection.hasClass("opened")) {
      $mapButton.removeClass("activeTab");
      $("body").removeClass("openbottom");
      $mapSection.removeClass("opened");
    }
    if ($newsSection.hasClass("opened")) {
      $newsButton.removeClass("activeTab");
      $("body").removeClass("openbottom");
      $newsSection.removeClass("opened");
    }
  });

  $("#closenewsp").click(function() {
    $newspButton.removeClass("activeTab");
    $("body").removeClass("openbottom");
    $newspSection.removeClass("opened");
  });

  $closeAllButton.click(function() {
    $mapButton.removeClass("activeTab");
    $newsButton.removeClass("activeTab");
    $newspButton.removeClass("activeTab");
    $("body").removeClass("openbottom");
    $mapSection.removeClass("opened");
    $newsSection.removeClass("opened");
    $newspSection.removeClass("opened");
  });
});




/*
setTimeout(function(){
var HeaderAd = document.getElementById("320x50_top");

if(HeaderAd) {
  HeaderAdH = HeaderAd.offsetHeight;
} else{
  HeaderAdH = '';
}
document.querySelectorAll(".tabselem").style.height = 'calc(100vh - '+Fheader+ 'px)';
$('.scroll-news').css("height", 'calc(100vh - '+ HeaderAdH + 'px)')
}, 2500);
*/ 

// document.addEventListener('DOMContentLoaded', function() {
//   (function($) {
//   $(document).ready(function() {
//   var e = $(".das-billboard");
//     $(window).width() > 767 && ($(".bottom-wr").addClass("original").clone().insertAfter(".bottom-wr").addClass("cloned").css("position", "fixed").css("top", "0").css("margin-top", "0").css("z-index", "500").removeClass("original").hide(), scrollIntervalID = setInterval(function() {
//   var i = $(".original").offset();
//   orgElementTop = i.top, $(window).scrollTop() >= orgElementTop ? (orgElement = $(".original"), coordsOrgElement = orgElement.offset(), leftOrgElement = coordsOrgElement.left, widthOrgElement = orgElement.css("width"), $(".cloned").css("left", leftOrgElement + "px").css("top", 0).css("width", widthOrgElement).show(), $(".original").css("visibility", "hidden")) : ($(".cloned").hide(), $(".original").css("visibility", "visible")), orgElementTop = (i.top, $(window).scrollTop() >= orgElementTop && e.hasClass("adActive") ? e.addClass("adFixed") : e.removeClass("adFixed"))
//     }, 10))
//   });
//   })(jQuery);
// });

/* REMOVE NEWSLETTER 
document.querySelector('#checkterms').addEventListener('change', function(e){
if(e.target.checked){
document.querySelector('input[name="subscribe"]').disabled = false;
} else {
document.querySelector('input[name="subscribe"]').disabled = true;
}
});
*/

//  $(".sticky-player-inner").addClass("notstuck");
// function scrollBox($) {
  setTimeout(function() {
    var $window = $(window);
    if ($window.width() > 766) {
      var $videoWrap = $('.sticky-player');
      if ($videoWrap.length > 0) { // Check if $videoWrap exists
        var $video = $('.sticky-player-inner');
        var videoHeight = $video.outerHeight();
        var videoWidth = $video.outerWidth();
        $window.on('scroll', function() {
          if (!$video.hasClass('notstuck')) {
            var windowScrollTop = $window.scrollTop();
            var videoBottom = (videoHeight / 2) + $videoWrap.offset().top;
            if (windowScrollTop > videoBottom) {
              if (!$video.hasClass('prestuck')) {
                $videoWrap.height(videoHeight);
                const videoWrap = document.querySelector('.sticky-player-inner').getBoundingClientRect();
                $video.addClass('prestuck');
                setTimeout(function() {
                  $video.addClass('stuck');
                }, 100);
              }
            } else {
              if ($video.hasClass('prestuck')) {
                const videoWrap = document.querySelector('.sticky-player').getBoundingClientRect();
                $video.removeClass('stuck');
                setTimeout(function() {
                  $video.removeClass('prestuck');
                  $videoWrap.height('auto');
                }, 100);
              }
            }
          }
        });
      }
    }
  }, 500);
  


// }



/* OFFERS */
var div1 = document.getElementById('offer1');
var div2 = document.getElementById('offer2');

function getRandomInt(min, max) {
min = Math.ceil(min);
max = Math.floor(max);
return Math.floor(Math.random() * (max - min + 1)) + min;
}

function toggleDiv() {
  if (div2) {
    var randomNumber = getRandomInt(1, 2);
    if (randomNumber === 1) {
      div1.classList.remove('hide-el');
      div2.classList.add('hide-el');
    } else {
      div1.classList.add('hide-el');
      div2.classList.remove('hide-el');
    }
  }
}

toggleDiv(); // Initial toggle

setInterval(toggleDiv, getRandomInt(5000, 10000)); // Random interval between 5 and 10 seconds


  if ($(window).width() < 667 ) {  
    $('.sidebar-stream').appendTo('#stream');
  }
  
  $("#stream-button").click(function() {
    $(this).toggleClass("active-b");
    $("#stream").toggleClass("active-stream");
  });


/* add bodyclass for morning */
var now = new Date();
var athensHour = now.getUTCHours() + 2;

if (athensHour >= 6 && athensHour < 9) {
  document.body.classList.add("morning-time");
}

//
//$("#closeEmbed").click(function() {
//  $("#EmbedSpot").addClass("remove__embed");
//});