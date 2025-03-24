document.addEventListener('DOMContentLoaded', function() {
  $("#st-registerbutton").click(function() {
    $(this).toggleClass("hide-button");    
    $(".newsletter-sticky").toggleClass("activeform");
  });  
});  

document.querySelector('#checkterms-st').addEventListener('change', function(e){
if(e.target.checked){
document.querySelector('.stbutton').disabled = false;
} else {
document.querySelector('.stbutton').disabled = true;
}
});

$("#closenewsletter").click(function() {
  $(".newsletter-sticky").addClass("removestickyform");
});

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) === ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) === 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function displayBanner() {
  var cookieName = "stickyNewsletterDisplayed";
  var banner = document.getElementById("stickyNewsletter");
  var cookieValue = getCookie(cookieName);

  // Check if the cookie exists and is valid
  if (cookieValue) {
    var lastDisplayed = parseInt(cookieValue);
    var currentDate = new Date().getTime();
    var threeDays = 3 * 24 * 60 * 60 * 1000; // 3 days in milliseconds

    if (currentDate - lastDisplayed < threeDays) {
      // The banner has been displayed within the last 3 days, so don't display it again
      return;
    }
  }

  // Display the banner
  banner.style.display = "block";

  // Update the cookie with the current timestamp
  setCookie(cookieName, new Date().getTime().toString(), 365); // Set the expiration to 1 year
}

// Call the displayBanner function on page load
window.onload = displayBanner;
