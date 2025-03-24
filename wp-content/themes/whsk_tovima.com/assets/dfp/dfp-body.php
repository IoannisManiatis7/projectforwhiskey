<?php if(is_home()){ ?>
<div style="height: 0px;" id="1x1_over"></div>
<script>

  var hidden, visibilityChange, activeFlag;
  activeFlag = true;
  if (typeof document.hidden !== "undefined") { // Opera 12.10 and Firefox 18 and later support 
    hidden = "hidden";
    visibilityChange = "visibilitychange";
  } else if (typeof document.msHidden !== "undefined") {
    hidden = "msHidden";
    visibilityChange = "msvisibilitychange";
  } else if (typeof document.webkitHidden !== "undefined") {
    hidden = "webkitHidden";
    visibilityChange = "webkitvisibilitychange";
  }

  function handleVisibilityChange() {
    if (document[hidden]) {

    } else {
      if (activeFlag) {
        if (w > 668){          
          googletag.cmd.push(function() {
              googletag.display('1x1_over');
              // googletag.display('1x1_out');
              googletag.display('300x250_r1');
              googletag.display('300x250_r2');
              googletag.display('300x250_r3');
              googletag.display('970x90_top')
              googletag.display('970x90_middle');
            });}
         activeFlag = false;
         var infocus = 1;          
      }
    }
  }
  if (typeof document.addEventListener === "undefined" || typeof document[hidden] === "undefined") {
      if (w > 668){
        googletag.cmd.push(function() {
        googletag.display('1x1_over');
        // googletag.display('1x1_out');
        googletag.display('300x250_r1');
        googletag.display('300x250_r2');
        googletag.display('300x250_r3');
        googletag.display('970x90_top');
        googletag.display('970x90_middle');
    });}
    var infocus = 1;      
  } else {
    if (document[hidden] == true) {
      document.addEventListener(visibilityChange, handleVisibilityChange, false);
    } else {
      if (w > 668){        
        googletag.cmd.push(function() {
        googletag.display('1x1_over');
        // googletag.display('1x1_out');
        googletag.display('300x250_r1');
        googletag.display('300x250_r2');
        googletag.display('300x250_r3');
        googletag.display('970x90_top');
        googletag.display('970x90_middle');
      });}
      var infocus = 1;        
    }
  }
</script>


<!-- 320X50 -->	
<div id='320x50_top' class='das-320-mobile mobile-display'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('320x50_top')})
</script>
</div>
<!-- 320X50 -->

<?php /*
<div id="1x1_out" class="das das-bg neaskin"></div>
*/ ?>

<?php } else { ?>
<div style="height: 0px;" id="1x1_over"></div>
<script>
        var hidden, visibilityChange, activeFlag; 
        activeFlag = true;
        if (typeof document.hidden !== "undefined") { // Opera 12.10 and Firefox 18 and later support 
          hidden = "hidden";
          visibilityChange = "visibilitychange";
        } else if (typeof document.msHidden !== "undefined") {
          hidden = "msHidden";
          visibilityChange = "msvisibilitychange";
        } else if (typeof document.webkitHidden !== "undefined") {
          hidden = "webkitHidden";
          visibilityChange = "webkitvisibilitychange";
        }
        function handleVisibilityChange() {
            if (document[hidden]) {
                }else {
                    if(activeFlag) {
                        googletag.cmd.push(function() { googletag.display('1x1_over'); });
                        activeFlag = false;
                      var infocus = 1;                        
                    }
                }
        }
        if (typeof document.addEventListener === "undefined" || typeof document[hidden] === "undefined") {
            googletag.cmd.push(function() { googletag.display('1x1_over'); });
            var infocus = 1;            
        } else {
            if (document[hidden] == true) {
                document.addEventListener(visibilityChange, handleVisibilityChange, false);
            }
            else {
                googletag.cmd.push(function() { googletag.display('1x1_over'); });
          var infocus = 1;                
            }    
        }
    </script>


<!-- 320X50 -->	
<div id='320x50_top' class='das-320-mobile mobile-display'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('320x50_top')})
</script>
</div>
<!-- 320X50 -->

<?php /*
<div id="1x1_out" class="das das-bg neaskin" >
<script>
  googletag.cmd.push(function() { googletag.display('1x1_out'); });
</script>
</div>
*/ ?>

<?php } // END PAGES PARAMETERS ?>