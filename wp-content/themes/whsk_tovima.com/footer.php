<?php /* if(is_category() || is_singular(array('post', 'printed_post'))) { ?>
<div class="maxgridrow is-relative">
    <?php include(TEMPLATEPATH .'/assets/home/layouts/populars.php'); ?>
  </div>
<?php } */ ?>

<div class="background-overlay"></div>

<div id="burger-menu">
  <div class="burger-inner scroll-s">
  <div class="burger-header columns is-multiline is-justify-content-space-between is-align-items-center level is-mobile">  
    
  
    <div class="is-hidden-desktop column has-text-left">
     <div class="burger-logo has-text-left">
       <a href="/" title="tovima.com">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" alt="tovima.com" style="width:100%;">
       </a>
     </div>
    </div>
    
    <div class="column is-12-desktop is-3-mobile has-text-right">
      <div id="closem">
        <svg xmlns="http://www.w3.org/2000/svg" width="12.728" height="12.729" viewBox="0 0 12.728 12.729">
        <g id="Group_816" data-name="Group 816" transform="translate(-9.636 -8.635)">
        <line id="line" x1="16" transform="translate(10.343 20.656) rotate(-45)" fill="none" stroke="#0d0d0d" stroke-width="2"/>
        <line id="line-2" data-name="line" x1="16" transform="translate(10.343 9.344) rotate(45)" fill="none" stroke="#0d0d0d" stroke-width="2"/>
        </g>
        </svg>
      </div>
    </div>

    <div class="column is-full">
      <div class="wrap-search-area">
        <div class="search-area">
          <form method="get" id="searchform" action="/">
            <label for="s" class="assistive-text"></label>
            <input type="text" class="field" name="s" id="s" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search'">
            <input type="submit" class="submit" name="submit" id="searchsubmit" value="Search">
          </form>
          </div>
      </div>
    </div>

    <?php /*
    <div class="column is-6-desktop is-3-mobile has-text-right">
    <div class="member-area">
      <?php if(isset($_COOKIE['user_email'])): ?>
      <?php $_COOKIE['user_email']; ?>
        <button class="logoutbtn" onclick="logOutBtn()"><span class="is-hidden-small is-hidden-touch">Έξοδος</span><span class="dashicons dashicons-exit"></span></button>
      <?php else: ?>
      <form class="header-form" action="/member-login/" method="post">
        <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI']; ?>" name="login_url">
        <button class="logginbutton"><span class="is-hidden-small">Είσοδος</span></button>
      </form>
      <?php endif; ?>
    </div>
    </div>
    */ ?>
  </div>
  <?php include(TEMPLATEPATH .'/assets/elements/burgermenu.php'); ?>
  </div>
  
  <div class="burger-footer">
    <div class="social-footer">
      <div class="is-flex">
        <a href="https://www.facebook.com/tovimacom/" target="_blank" rel="nofollow" title="tovima.com @ FACEBOOK">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
            <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.02,9.563l.467-3.077H7.568v-2A1.53,1.53,0,0,1,9.283,2.827h1.327V.208A16,16,0,0,0,8.255,0c-2.4,0-3.974,1.474-3.974,4.141V6.486H1.609V9.563H4.281V17H7.568V9.563Z" transform="translate(-1.609)" fill="#262626"/>
          </svg>
        </a>
        <a href="https://twitter.com/tovimacom/" target="_blank" rel="nofollow" title="tovima.com @ TWITTER">
          <svg fill="#262626" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
          </svg>
        </a>
        <a href="https://www.instagram.com/tovimacom/" target="_blank" rel="nofollow" title="tovima.com @ INSTAGRAM">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17.996" viewBox="0 0 18 17.996">
            <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M9,6.622a4.614,4.614,0,1,0,4.614,4.614A4.607,4.607,0,0,0,9,6.622Zm0,7.614a3,3,0,1,1,3-3A3.005,3.005,0,0,1,9,14.235Zm5.879-7.8A1.076,1.076,0,1,1,13.8,5.357,1.074,1.074,0,0,1,14.876,6.433Zm3.056,1.092a5.326,5.326,0,0,0-1.454-3.771A5.361,5.361,0,0,0,12.707,2.3c-1.486-.084-5.939-.084-7.425,0a5.353,5.353,0,0,0-3.771,1.45A5.343,5.343,0,0,0,.058,7.521c-.084,1.486-.084,5.939,0,7.425a5.326,5.326,0,0,0,1.454,3.771A5.368,5.368,0,0,0,5.282,20.17c1.486.084,5.939.084,7.425,0a5.326,5.326,0,0,0,3.771-1.454,5.361,5.361,0,0,0,1.454-3.771c.084-1.486.084-5.935,0-7.421ZM16.012,16.54A3.037,3.037,0,0,1,14.3,18.251c-1.185.47-4,.361-5.3.361s-4.124.1-5.3-.361A3.037,3.037,0,0,1,1.981,16.54c-.47-1.185-.361-4-.361-5.3s-.1-4.124.361-5.3A3.037,3.037,0,0,1,3.692,4.22c1.185-.47,4-.361,5.3-.361s4.124-.1,5.3.361a3.037,3.037,0,0,1,1.711,1.711c.47,1.185.361,4,.361,5.3S16.482,15.36,16.012,16.54Z" transform="translate(0.005 -2.238)" fill="#262626"/>
          </svg>
        </a>
        <a href="https://www.linkedin.com/showcase/tovima-com/" target="_blank" rel="nofollow" title="tovima.com @ LINKEDIN">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M4.029,18H.3V5.983H4.029ZM2.161,4.344A2.171,2.171,0,1,1,4.322,2.162,2.179,2.179,0,0,1,2.161,4.344ZM18,18H14.272V12.15c0-1.394-.028-3.182-1.94-3.182-1.94,0-2.238,1.515-2.238,3.082V18H6.367V5.983H9.946V7.622H10a3.921,3.921,0,0,1,3.531-1.941C17.306,5.682,18,8.169,18,11.4V18Z" transform="translate(0 -0.001)" fill="#262626"/>
          </svg>
        </a>
        <a href="https://www.youtube.com/@tovima-cq9ze" rel="nofollow" title="tovima.com @ YOUTUBE">
          <svg height="67px" width="67px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 461.001 461.001" xml:space="preserve" fill="#262626"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#262626;" d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728 c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137 C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607 c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z"></path> </g> </g></svg>
        </a>
      </div>
    </div>
   <div class="burger-logo">
     <img loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" alt="tovima.com" width="130" height="20" />
   </div>    
    <p class="copyright-footer-text m-0 manrope f-500" style="color:#8C8C8C;font-size:12px">
      © 2025 TOVIMA.COM • All rights reserved.
    </p>
  </div>
  
</div>

</div><!--end pagesite-->


<div id="vima-footer" class="is-relative">
<?php // include(TEMPLATEPATH .'/assets/elements/mainfooter.php'); ?>
<div class="maxgridrow is-relative">
  
  <div class="footer-logo">
       <a href="/" title="tovima.com">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" alt="tovima.com" style="width: 100%;">
       </a>
  </div>
  
  <ul class="menu-wrapper">
    <li class=""><a title="Read More about Politics" href="/category/politics/">Politics</a></li>
    <li class=""><a title="Read More about World" href="/category/world/">World</a></li>
    <li class=""><a title="Read More about Society" href="/category/society/">Society</a></li>
    <li class=""><a title="Read More about Finance" href="/category/finance/">Finance</a></li>
    <li class=""><a title="Read More about Culture" href="/category/culture/">Culture</a></li>
    <li class=""><a title="Read More about Science" href="/category/travel/">Travel</a></li>
    <li class=""><a title="Read More about Climate" href="/category/climate/">Climate</a></li>
    <li class=""><a title="Read More about Opinions" href="/category/opinions/">Opinions</a></li>
    <li class=""><a title="Read More about Stories" href="/category/stories/">Stories</a></li>
    <li class=""><a title="Read More about WSJ" href="/category/wsj/">The Wall Street Journal</a></li>
  </ul>
  
  <ul class="terms-menu">
    <li><a href="/about/">About</a></li>
    <li><a href="/contact/">Contact</a></li>
    <li><a href="/terms-of-use/">Terms of Use</a></li>
    <li><a href="/data-protection-policy/">Privacy Policy</a></li>
    <li><a href="/cookies/">Cookies</a></li>
  </ul>
  
  <div class="copyright-footer" style="padding:12px 0;text-align:center">
    <p class="copyright-footer-text m-0 manrope f-500" style="color:#8C8C8C;font-size:12px">
      © <?php echo date('Y'); ?>  tovima.com • Publishing Partner: The Wall Street Journal • All rights reserved.
    </p>
  </div>
</div>
</div>

<?php /* if(get_field('mega_act', 'tovima_strmega') && get_field('activated_elections', 'election_index') === true) { ?>
<div class="stream-outline">
<div id="stream-button">
  <div class="live-label">
    <dot></dot>
    <span>LIVE</span>
  </div>
</div>
<div id="stream"></div>
</div>
<?php } */ ?>

<?php // include(TEMPLATEPATH.'/assets/elements/newsletter-sticky.php'); ?>

<?php wp_footer(); ?>

<?php if(is_single()) { ?>
<script src="//vjs.zencdn.net/5.3/video.min.js"></script>
<script src="//www.tovima.com/filesjs/ima/ima3aem.js?v=1.4"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/4.2.5/videojs.ads.min.js"></script>
<script src="//www.alteregomedia.org/files/js/videojs.ima.js?v=6"></script>
<script src="//www.alteregomedia.org/files/js/inread.js?v=1.1"></script>
<?php } ?>

<?php if(get_field('mega_strurl', 'tovima_strmega')) {
  $streamurl = get_field('mega_strurl', 'tovima_strmega');
} else { 
  $streamurl = 'https://c98db5952cb54b358365984178fb898a.msvdn.net/live/S86713049/gonOwuUacAxM/playlist.m3u8';
} ?>

<?php /* if(is_home() || is_single()) { ?>
<?php if(get_field('mega_act', 'tovima_strmega')) { ?>
<script>
  kwikMotion("player_mob_id", {
  width: 720,
  height: 406,
  image: "",
  aspectratio: "16:9",
  autostart : true,
  debug: false,
  designStudio: {
  primary: '#FFFFFF',
  highlight: '#00ccff',
  },
  sources: [
  {file: '<?php echo $streamurl; ?>' }
  ],
  drm: {
  type: 'com.widevine.alpha',
  license: 'https://mainstreaming.test.ott.irdeto.com/licenseServer/widevine/v1/mainstreaming/license'
  },

  });    
  kwikMotion("player_div_id", {
  width: 720,
  height: 406,
  image: "",
  aspectratio: "16:9",
  sharing:false,  
  autostart : true,
  debug: false,
  designStudio: {
  primary: '#FFFFFF',
  highlight: '#00ccff',
  },
  sources: [
    {file: '<?php echo $streamurl; ?>' }
  ],
  drm: {
  type: 'com.widevine.alpha',
  license: 'https://mainstreaming.test.ott.irdeto.com/licenseServer/widevine/v1/mainstreaming/license'
  },

  });
  
  </script>
<?php } ?>
<?php } */ ?>

<script>
window.addEventListener('DOMContentLoaded', () => {
setInterval(() => {
  const elemTxt = document.querySelector(".qc-cmp2-footer-links .css-1gnnvc2:last-child");
  if(elemTxt) {elemTxt.innerHTML = 'ΕΝΝΟΜΟ ΣΥΜΦΕΡΟΝ';}
}, 200)
});
</script>

<style>
@media screen and (max-width:667px) {    
.stream-outline{position:fixed;bottom:40px;right:20px;width:80vw;z-index:9}
#stream-button {
    background-color: #FFF;
    width: 60px;
    height: 60px;
    border-radius: 100%;
    float: right;
    cursor: pointer;
    position: absolute;
    right: 0;
    margin-top: -65px;
    border: 2px solid #262626;
    display: flex;
    align-items: center;
    padding-bottom: 4px;
    padding-left: 3px;  
    flex-direction: column;
    justify-content: center;
    background-repeat: no-repeat;
    background-position: center 39%;  
    background-image:url('data:image/svg+xml, <svg xmlns="http://www.w3.org/2000/svg" width="17" height="19" viewBox="0 0 17 19"> <path id="Icon_awesome-play" data-name="Icon awesome-play" d="M16.1,7.968,2.747.246A1.812,1.812,0,0,0,0,1.779V17.219a1.821,1.821,0,0,0,2.747,1.533L16.1,11.033a1.76,1.76,0,0,0,0-3.065Z" transform="translate(0 -0.002)" fill="%23262626"/></svg>');
}#stream-button .live-label {
    display: flex;
    font-size: 9px;
    font-family: 'Manrope';
    color: #CC0000;
    font-weight: 700;
    position: absolute;
    bottom: 7px;
    margin-left:-5px;
    align-items: center;
}
  
  #stream-button.active-b {
    background-size: 16px;    
background-image:url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="12.728" height="12.729" viewBox="0 0 12.728 12.729"> <g id="Group_816" data-name="Group 816" transform="translate(-9.636 -8.635)"> <line id="line" x1="16" transform="translate(10.343 20.656) rotate(-45)" fill="none" stroke="%230d0d0d" stroke-width="2"></line> <line id="line-2" data-name="line" x1="16" transform="translate(10.343 9.344) rotate(45)" fill="none" stroke="%230d0d0d" stroke-width="2"></line> </g> </svg>');    
  }  
  
  #stream-button .live-label dot {
        animation: blinker 2s linear infinite;
    display: block;
    width: 3px;
    height: 3px;
    background: #CC0000;
    margin-right: 3px;
    border-radius: 100%;
}@keyframes blinker {
  50% {
    opacity: 0;
  }
}

.stream-outline #stream{transition:all .2s ease;height:0;overflow:hidden}
.stream-outline #stream.active-stream{height:auto;background-color:#fff;overflow:initial}
#stream .sidebar-stream{margin-bottom:0;box-shadow:-2px -2px 10px #ccc;border:1px solid #eee;padding:12px}
#stream .vima-box .vima-box-header .vimabox-tile {font-size: 15px}  
}
</style>

<a href="#" style="z-index: 1;background-color:#000000;color:#FFF;font-size:11px;padding:5px 8px;position:fixed;bottom:0;right:0" class="googlefc" onclick="googlefc.callbackQueue.push(googlefc.showRevocationMessage); return false;">Privacy</a>


</body>
</html>