<?php get_header(); ?>
<style>
.site-header{margin-bottom:0}
.newsletter-subscription-hero {
    position: absolute;
    right: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    top: 0;
    bottom: 0;
}  
.newsletter-subscription{padding:0;margin-bottom:3rem;width:100vw;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw}
.inner-newsletter {background: rgba(255,255,255,0.25);padding: 4rem 0 2rem}
  
.newsletetr-5-logo img{width:100%}
.newsletetr-5-logo{width:95px;margin-bottom:25px}
.newsletter-summary{font-weight:600;color:#595959;font-size:15px;line-height:1.3;max-width:475px}
#mc-embedded-subscribe.navy {background-color: var(--darkblue)} 
.latestposts-headine{margin-bottom:25px}
.latest-five-posts{max-width:740px;width:100%;margin-bottom:8rem;min-height:370px}
.latest-five-row{align-items:flex-start;padding-bottom:15px;border-bottom:1px solid var(--darklight);margin-bottom:15px}
.latest-five-row .latestfive-thumb{width:165px}
.latest-five-row .latestfive-text{width:calc(100% - 165px);padding:0 10px}
.latest-five-row:last-child{margin-bottom:0;padding-bottom:0;border:none}
.latest-five-row .latestfive-text h4{margin:0}
.mobileView {
    width: 345px;
    height: 690px;
    margin-top: 4rem;
    background-image: url(/wp-content/themes/whsk_tovima.com/common/imgs/mobile.svg);
    background-repeat: no-repeat;
    background-size: contain;
    display: block;
    padding: 50px 25px;
    float: right;
    position: relative;
    z-index: 2;
}
.inner-mobileView {width: 100%;display: block}

.inner-mobileView .inner-mv-header {width: 100%}
.inner-mobileView .inner-mv-header img {width: 100%;height: auto}
.inner-mv-scroll .five-newsletter-row {display: none}  
/* .inner-mv-scroll {padding-top:10px;padding-left: 45px;padding-right: 5px;height: 500px;overflow-y: scroll} */
.inner-mv-scroll {
    padding-top: 0;
    padding-left: 0;
    padding-right: 0;
    height: 610px;
    overflow-y: scroll;
}  
.inner-mv-scroll::-webkit-scrollbar {display: none}
  
.fiveam_area.fv1{margin-top:2rem}
.fiveam_area{position:relative;max-width:620px;margin:0 auto;font-size:22px;line-height:30px;letter-spacing:-.22px;margin-bottom:6rem}
.bullet_a{width:30px;height:30px;background-color:var(--darkblue);display:flex;font-size:18px;line-height:30px;justify-content:center;align-items:center;color:#fff;border-radius:100%;position:absolute;left:-40px;padding-top:3px;top:-2px}
.fiveam_area_main ul li strong{font-weight:400;font-family:'Vegaultra'}
.fiveam_area_main ul li a{background-color:#f8e0b9;padding:2px}  
.bullet_a{width:24px;height:24px;font-size:15px}
.fiveam_area{position:relative;max-width:620px;margin:0 auto;font-size:15px;line-height:1.3;letter-spacing:-.22px;margin-bottom:2.5rem}
.fiveam_area_headline .bullet_subtitle.is-size-3-1{font-size:16px!important}
.fiveam_area_main{position:relative;margin-top:2.5rem}
.fiveam_area_main ul li{margin-bottom:2rem}
.inner-newsletter .wrap-signup {display: block}
.inner-mv-upper {font-size: 11px;font-family: 'Manrope';text-align: right;padding-bottom: 6px;padding-right: 6px;font-weight: 600}
.wrap-wrap-newsletetr-header .newsletetr-5-logo {display: none}  
.calendar-row {
    display: flex;
    align-items: center;
    font-size: 11px;
    font-family: 'Manrope';
    font-weight: 600;
    color: #595959;
}  
.calendar-row span{display:block;margin-left:15px}  
  
@media only screen  and (min-device-width : 768px) and (max-device-width : 1024px)  and (orientation : portrait) {  
.newsletetr-5-logo.is-hidden-x{display:none}
.latest-five-posts {max-width: calc(100% - 355px)}
.wrap-wrap-newsletetr-header {display: flex;justify-content: space-between}  
.mobileView {position: absolute; right: 0;bottom: 0;top:22%}
.latest-five-posts{min-height:550px}
.wrap-wrap-newsletetr-header .newsletetr-5-logo{display:block}  
}
  
@media screen and (max-width:767px) {  
.wrap-newsletter-sub{display:flex;flex-direction:column}  
.mobileView{float:none;margin:0 auto;order:3}
.latest-five-row .latestfive-thumb{width:95px}
.latest-five-row .latestfive-text{width:calc(100% - 95px)}
.latest-five-posts{min-height:initial;margin-bottom:3rem}
}
  
.inner-mv-scroll *{font-family:'Arial'!important}
.fiveam_area_main_header{display:flex;align-items:flex-start;margin-bottom:15px}
.fiveam_area_main_header h3{margin:0;font-size:17px;line-height:1.2;margin-left:15px}
.repeater-link{margin-top:24px;font-size:13px;background-color:#fff;border-width:1px;border-style:solid;border-color:#3757ab;border-radius:4px;padding:6px 12px;text-align:center;text-decoration:none;color:#3757ab!important;display:inline-flex;align-items:center;justify-content:center;line-height:1}
.podcast_header{display:flex;align-items:flex-start}
.podcast_header img{margin-right:15px}
.fiveam_area_main{border-bottom:1px solid #ccc;padding-bottom:30px;margin-bottom:30px}
.wrap-bullet_list{border-top:4px solid #3a55a6;background-color:#f2f2f3;padding:20px;margin:30px auto}
.slides{margin:0;padding:0;padding-left:20px}
.slides li{font-size:16px;line-height:1.3;margin-bottom:24px;color:#262626}
.slides li p{margin:0;font-size:16px;line-height:22px;color:#000}
.slides li:last-child{margin-bottom:0}
.promotext p a,.slides li p a{background-color:#f8e0b9;padding:2px;color:#262626;text-decoration:none}
.fiveam_area_main ul li{font-size:17px;line-height:23px;margin-bottom:24px;color:#262626}
.fiveam_area_main ul{margin-left:0;padding-left:30px}
.fiveam_area_main .repeater-link{margin-left:30px}
.fiveam_area_main ul li:last-child{margin-bottom:0}
.promotext,.promotext p{color:#000;font-size:17px;letter-spacing:-.34px;line-height:24px;margin:0}
.upper-wrap{padding-bottom:0;border-bottom:1px solid #ddd}  
.nv-social-footer {
    display: flex;
    justify-content: center;
}
.nv-footer-text p {
    color: #000;
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 15px;
    line-height: 20px;
}.nv-footer-text p a {
    color: #3A55A6;
}  
.promo_footer {
    display: flex;
}  
.promo2, .promo2 p {
    color: #000;
    font-size: 17px;
    line-height: 24px;
    margin-bottom: 20px;
}  
.author__image {
    border-radius: 100%;
    overflow: hidden;
    margin-right: 10px;
    border: 1px solid #92a2b9;
}  
</style>

<div class="maxgridrow">
<div class="wrap-newsletter-sub is-relative">
  
<div class="mobileView">
  <div class="inner-mobileView">
    <?php /*
    <div class="inner-mv-upper">
      ΔΙΑΒΑΣΤΕ
    </div>
    <div class="inner-mv-header">
      <img src="/wp-content/themes/whsk_tovima.com/common/imgs/5_headerImage.png" alt="5_headerImage.png" width="594" height="198" />
    </div>
    */ ?>
    
  <div class="inner-mv-scroll" style="font-family:Arial">
    <div class="inner-mv-header">
      <img src="/wp-content/themes/whsk_tovima.com/common/imgs/5_headerImage.png" alt="5_headerImage.png" width="594" height="198" />
    </div>
    <?php include(TEMPLATEPATH.'/assets/newsletters/5.php'); ?>
  </div>
</div>
</div>
  
<header class="newsletter-subscription is-relative">
  <img src="/wp-content/themes/whsk_tovima.com/common/imgs/5_bgImage.jpg" class="newsletter-subscription-hero" alt="NEWSLETTER" />
  <div class="inner-newsletter is-relative">
  <div class="maxgridrow is-relative">

    <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">

    <div class="column is-full is-hidden-fullwindow">
      <h2 class="zonaultra f-400 is-size-3 my-0">NEWSLETTER</h2>  
    </div>      
      
      
    <div class="column is-visible-fullwindow is-narrow">
      <div class="rect-width">
        <h2 class="zonaultra f-400 is-size-3 my-0">NEWSLETTER</h2>
      </div>
    </div>

    <div class="column">
      <div class="newsletetr-5-logo is-hidden-x">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/5toPrwiLogo.svg" alt="Πέντε ειδήσεις για να ξεκινήσεις τη μέρα σου" />
      </div>
      <div class="wrap-wrap-newsletetr-header">
      <div class="wrap-newsletetr-headr">
      <h1 class="f-400 zonaultra is-size-2-1 mt-0 mb-4">Πέντε ειδήσεις για να ξεκινήσεις τη μέρα σου</h1>
      <h2 class="manrope newsletter-summary">
        <?php echo get_the_excerpt(); ?>
      </h2>
      <div class="calendar-row">
<svg id="event_black_24dp" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <path id="Path_1504" data-name="Path 1504" d="M0,0H20V20H0Z" fill="none"/>
  <path id="Path_1505" data-name="Path 1505" d="M14.647,10.158h-4.16V14.32h4.16ZM13.815,1V2.665H7.16V1H5.5V2.665H4.664A1.657,1.657,0,0,0,3.008,4.33L3,15.985A1.664,1.664,0,0,0,4.664,17.65H16.311a1.669,1.669,0,0,0,1.664-1.665V4.33a1.669,1.669,0,0,0-1.664-1.665h-.832V1Zm2.5,14.985H4.664V6.828H16.311Z" transform="translate(-0.488 -0.163)" fill="#595959"/>
</svg>        <span>ΔΕΥ - ΠΑΡ</span>
      </div>  
    
      <div class="wrap-signup">
        <div id="mc_embed_signup">
          
    <form action="https://tovima.us19.list-manage.com/subscribe/post?u=116d6eb4f76a4ab66194d2062&amp;id=930e9d8eb2&amp;f_id=002140e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self" novalidate="">
        <div id="">
            <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""></div><div class="mc-field-group"><label for="mce-undefined">Φύλο <span class="asterisk">*</span></label><select class="required" id="mce-undefined"><option value=""></option><option value="Άνδρας">Άνδρας</option><option value="Γυναίκα">Γυναίκα</option><option value="Άλλο">Άλλο</option></select></div><div class="mc-field-group size1of2"><label for="mce-MMERGE6-month">Ημερομηνία Γέννησης <span class="asterisk">*</span></label><div class="datefield"><span class="subfield dayfield"><input class="datepart required" type="text" pattern="[0-9]*" placeholder="DD" size="2" maxlength="2" name="MMERGE6[day]" id="mce-MMERGE6-day" value=""></span> /<span class="subfield monthfield"><input class="datepart required" type="text" pattern="[0-9]*" placeholder="MM" size="2" maxlength="2" name="MMERGE6[month]" id="mce-MMERGE6-month" value=""></span> /<span class="subfield yearfield"><input class="datepart required" type="text" pattern="[0-9]*" placeholder="YYYY" size="4" maxlength="4" name="MMERGE6[year]" id="mce-MMERGE6-year" value=""></span><span class="small-meta nowrap">( dd / mm / yyyy )</span></div></div>
        <div id="mce-responses" class="clearfalse">
            <div class="response" id="mce-error-response" style="display: none;"></div>
            <div class="response" id="mce-success-response" style="display: none;"></div>
        </div>
          <div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_116d6eb4f76a4ab66194d2062_930e9d8eb2" tabindex="-1" value=""></div>
          <div class="clear">
            <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
          </div>
    </div>
      
    <div class="checbox-flex">
      <input type="checkbox" id="checktermsi">
      <label for="checktermsi">Έχω διαβάσει και αποδέχομαι τους </label> <a target="_blank" title="πολιτικη προστασίας δεδομένων" href="/politiki-prostasias-dedomenon-prosopikou-xaraktira/">όρους της πολιτικής προστασίας δεδομένων</a>
    </div>
      
</form>
          
          <?php /*
          <form action="https://tovima.us19.list-manage.com/subscribe/post?u=116d6eb4f76a4ab66194d2062&amp;id=930e9d8eb2&amp;f_id=002140e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll" style="background-color: #F5F5F5;border: 1px solid #BFBFBF">
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Εισάγετε το email σας" required>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_116d6eb4f76a4ab66194d2062_930e9d8eb2" tabindex="-1" value=""></div>
              <input type="submit" disabled value="ΕΓΓΡΑΦΕΙΤΕ" name="subscribe" id="mc-embedded-subscribe" class="button navy">
            </div>

            <div class="checbox-flex">
              <input type="checkbox" id="checktermsi">
              <label for="checktermsi">Έχω διαβάσει και αποδέχομαι τους </label> <a target="_blank" title="πολιτικη προστασίας δεδομένων" href="/politiki-prostasias-dedomenon-prosopikou-xaraktira/">όρους της πολιτικής προστασίας δεδομένων</a>
            </div>
          </form>
          */ ?>
          
        </div>
      </div>
      </div>
      <div class="newsletetr-5-logo">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/5toPrwiLogo.svg" alt="Πέντε ειδήσεις για να ξεκινήσεις τη μέρα σου" />
      </div>  
      </div>
    </div>
    </div>
    
  </div>
  </div>
</header>


  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
    <div class="column is-visible-fullwindow is-narrow">
      <div class="rect-width">

    </div>
    </div>
    <div class="column is-relative">
      <h3 class="f-400 zonaultra is-size-5 mt-0 latestposts-headine">ΤΕΛΕΥΤΑΙΑ ΑΡΘΡΑ 5 ΤΟ ΠΡΩΙ</h3>
      
      <div class="latest-five-posts">
          
          <?php
          $cc = 0;
          $g5more = get_posts( 
          array('numberposts' => 3, 
          'category_name' => '5-to-proi', 'no_found_rows' => true, 'post_status' =>'publish',
//           'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
          ));
          foreach($g5more as $post) : setup_postdata($post); $cc++; 
          $varsize = 'is-size-4 zonabold'; ?>
        
          <a class="latest-five-row is-flex" href="<?php the_permalink(); ?>">
            <div class="latestfive-thumb">
              <div class="thumb-holder">
                
              </div>
            </div>
            <div class="latestfive-text">
              <h4 class="zonabold is-size-3-desktop is-size-4-touch">
                <?php the_title(); ?>
              </h4>
            </div>
          </a>
          <?php endforeach; wp_reset_postdata(); ?>
         
      </div>
      
    </div>
    
    
  </div>

</div>
</div>

<?php get_footer(); ?>