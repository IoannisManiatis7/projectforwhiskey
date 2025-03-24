<div class="wrap-footer-items is-relative">
<div class="maxgridrow">  

<?php /*
<div class="up-footer">
  <div class="columns is-mobile is-multiline">
    <div class="column is-2-desktop is-2-mobile  is-full-small"><h3 class="manrope font-bold is-size-5 m-0">Θέματα σήμερα</h3></div>
    <div class="column is-10-desktop is-10-mobile is-full-small">
      <ul class="today-news">
        <?php while ( have_rows('tags_rows', 'tovima_tags') ) : the_row();
        $tagname = get_sub_field('tagn_name'); 
        $tagsslug = get_sub_field('tag_link'); ?>
        <li class="tag-item"><a href="<?php echo $tagsslug; ?>"><?php echo $tagname; ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>  
  </div>
</div>
*/ ?>

<footer class="site-footer is-relative">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?> is-mobile">
  
      <div class="column is-full">
       <a href="/" title="tovima.com">
          <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" alt="tovima.com" style="width:100%;">
       </a>
      </div>

      <div class="column is-4-desktop is-full-small is-6-mobile">

        <div class="social-footer">
      <div class="is-flex">
        <a href="https://www.facebook.com/tovimacom/" target="_blank" rel="nofollow" title="tovima.com @ FACEBOOK">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
            <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.02,9.563l.467-3.077H7.568v-2A1.53,1.53,0,0,1,9.283,2.827h1.327V.208A16,16,0,0,0,8.255,0c-2.4,0-3.974,1.474-3.974,4.141V6.486H1.609V9.563H4.281V17H7.568V9.563Z" transform="translate(-1.609)" fill="#262626"/>
          </svg>
        </a>
        <a href="https://twitter.com/tovimacom/" target="_blank" rel="nofollow" title="tovima.com @ TWITTER">
          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15">
            <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M17.047,7.119c.012.164.012.328.012.492A10.842,10.842,0,0,1,5.98,18.381,11.235,11.235,0,0,1,0,16.682a8.285,8.285,0,0,0,.94.047,7.942,7.942,0,0,0,4.834-1.617,3.889,3.889,0,0,1-3.641-2.625,5.049,5.049,0,0,0,.735.059,4.23,4.23,0,0,0,1.025-.129A3.814,3.814,0,0,1,.772,8.7V8.654a4.007,4.007,0,0,0,1.76.48A3.756,3.756,0,0,1,.8,5.982a3.677,3.677,0,0,1,.53-1.91A11.177,11.177,0,0,0,9.355,8.033a4.158,4.158,0,0,1-.1-.867,3.839,3.839,0,0,1,3.894-3.785A3.938,3.938,0,0,1,16,4.576a7.8,7.8,0,0,0,2.471-.914,3.8,3.8,0,0,1-1.712,2.086A7.984,7.984,0,0,0,19,5.162a8.247,8.247,0,0,1-1.953,1.957Z" transform="translate(0 -3.381)" fill="#262626"/>
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

        <div class="newsletter-form">
          <h4 class="is-size-4 zonaultra my-0 f-400">Newsletter</h4>
          <p class="mb-0 manrope f-700 is-size-5">Κάθε μέρα οι πιο σημαντικές ειδήσεις στο email σας.</p>
          <div id="mc_embed_signup">
<form action="https://tovima.us19.list-manage.com/subscribe/post?u=116d6eb4f76a4ab66194d2062&amp;id=6102ed11dd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div id="mc_embed_signup_scroll">
<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Εισάγετε το email σας" required>
<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_116d6eb4f76a4ab66194d2062_6102ed11dd" tabindex="-1" value=""></div>
<input type="submit" disabled value="ΕΓΓΡΑΦΕΙΤΕ" name="subscribe" id="mc-embedded-subscribe" class="button">
</div>

<div class="checbox-flex">
<input type="checkbox" id="checkterms">
<label for="checkterms">Έχω διαβάσει και αποδέχομαι τους </label> <a target="_blank" title="πολιτικη προστασίας δεδομένων" href="/politiki-prostasias-dedomenon-prosopikou-xaraktira/">όρους της πολιτικής προστασίας δεδομένων</a>
</div>


</form>
</div>
        </div>
        <div class="helioskiosk">
          <h4 class="is-size-4 zonaultra my-0">App</h4>
          <a href="https://www.helioskiosk.gr/newspapers-digital" target="_blank">
            <div class="helioskiosk-image">
              <div class="helios-desk is-hidden-touch">
                <img loading="lazy" width="392" height="78" alt="HliosKioskDesktop" src="/wp-content/themes/whsk_tovima.com/common/imgs/HliosKioskDesktop.svg" />
              </div>
              
              <div class="helios-desk is-hidden-desktop is-hidden-small">
                <img loading="lazy" width="288" height="155" alt="HliosKioskTablet" src="/wp-content/themes/whsk_tovima.com/common/imgs/HliosKioskTablet.svg" />
              </div>
              
              <div class="helios-desk is-hidden is-visible-small">
                <img loading="lazy" width="330" height="79" alt="HliosKioskMobile" src="/wp-content/themes/whsk_tovima.com/common/imgs/HliosKioskMobile.svg" />
              </div>              
              
            </div>
          </a>
        </div>
      </div>
      
      <div class="column is-8-desktop is-full-small is-6-mobile">
        <div class="footer-menu">
          
        <?php 
        include(TEMPLATEPATH .'/assets/elements/footermenu.php');          
        foreach ($footer_menu as $footeritems) { ?>
        <div class="wrap-menu-items">
          <?php foreach ($footeritems as $fitems) { ?>
          <div class="wrap-f-column">
          <div class="wrap-item-header">
            <?php if(isset($fitems['link'])) { ?>
            <a href="<?php echo $fitems['link']; ?>" class="headline-link">
              <h4 class="menu-item-header zonaultra is-size-3 f-400"><?php echo $fitems['headline']; ?></h4>
            </a>
            <?php } else { ?>
            <h4 class="menu-item-header zonaultra is-size-3 f-400"><?php echo $fitems['headline']; ?></h4>    
            <?php } ?>
            <?php if(isset($fitems['subitems'])) { ?>
            <span class="smb"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
            <?php } ?>
          </div>
          <?php if(isset($fitems['subitems'])) { ?>
          <ul class="menu-items">
            <?php foreach ($fitems['subitems'] as $fitem) { ?>
            <?php if(isset($fitem['term'])) {
            $term = get_term( $fitem['term'], 'nea_authors' );
            $term_link = get_term_link( $term ); 
            $term_link = str_replace('?nea_authors=', '/editor/', $term_link); ?>
            <li class="menu-item"><a href="<?php echo $term_link; ?>"><?php echo $fitem['title']; ?></a></li>      
            <?php } else { ?>            
            <li class="menu-item">
            <a href="<?php echo $fitem['link']; ?>"><?php echo $fitem['title']; ?></a>
            </li>
            <?php } ?>
            <?php } ?>
          </ul>
          <?php } ?>
          </div>
          <?php } ?>
        </div>
        <?php } ?>
        
        </div>
      </div>
      
    </div>
</footer>
</div>
</div>