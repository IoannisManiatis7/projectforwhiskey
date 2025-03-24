<?php get_header(); ?>
<style>
.site-header{margin-bottom:0}
.newsletter-subscription{background-color:#8597BB;padding:0;margin-bottom:5px;width:100vw;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw}
.border-bottom {
    height: 12px;
    background-color: #8597bb;
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    margin-bottom: 3rem;
}  
.inner-newsletter {padding: 4rem 0 2rem}
.inner-newsletter .wrap-signup{display:block}  
  

.newsletter-summary{font-weight:600;color:#ffffff;font-size:15px;line-height:1.3;max-width:600px}
#mc-embedded-subscribe.navy {background-color: var(--darkblue)} 
.latestposts-headine{margin-bottom:25px}
.latest-newsletter-posts{max-width:740px;width:100%;margin-bottom:8rem;min-height:370px}
.latest-newsletter-row{align-items:flex-start;padding-bottom:15px;border-bottom:1px solid var(--darklight);margin-bottom:15px}
.latest-newsletter-row .latestfive-thumb{width:165px}
.latest-newsletter-row .latestfive-text{width:calc(100% - 165px);padding:0 10px}
.latest-newsletter-row:last-child{margin-bottom:0;padding-bottom:0;border:none}
.latest-newsletter-row .latestfive-text h4{margin:0}
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
.newsletter-subscription-logo {width: 100%;max-width: 265px;margin-bottom: 5rem}  
.newsletter-subscription-logo img {width: 100%}  
.wrap-wrap-newsletetr-header .newsletter-subscription-logo {display: none}  
.calendar-row {display: flex;align-items: center; font-size: 11px;font-family: 'Manrope';font-weight: 600;color: #ffffff}  
.calendar-row span{display:block;margin-left:15px}  
  
@media only screen  and (min-device-width : 768px) and (max-device-width : 1024px)  and (orientation : portrait) {  
.newsletter-subscription-logo.is-hidden-x{display:none}
.latest-newsletter-posts {max-width: calc(100% - 355px)}
.wrap-wrap-newsletetr-header {display: flex;justify-content: space-between}  
.mobileView {position: absolute; right: 0;bottom: 0;top:22%}
.latest-newsletter-posts{min-height:550px}
.wrap-wrap-newsletetr-header .newsletter-subscription-logo{display:block}  
}
  
@media screen and (max-width:767px) {  
.wrap-newsletter-sub{display:flex;flex-direction:column}  
.mobileView{float:none;margin:0 auto;order:3}
.latest-newsletter-row .latestfive-thumb{width:95px}
.latest-newsletter-row .latestfive-text{width:calc(100% - 95px)}
.latest-newsletter-posts{min-height:initial;margin-bottom:3rem}
}
  
.inner-mv-scroll *{font-family:'Arial'!important}
.podcast_wrapper {
    border-bottom: 1px solid #ccc;
    padding-bottom: 30px;
    margin-bottom: 30px;
    border-top: 1px solid #ccc;
    padding-top: 30px;
}  
.podcast_header{display:flex;align-items:flex-start}
.podcast_header img{margin-right:15px}
.slides{margin:0;padding:0;padding-left:20px}
.slides li{font-size:16px;line-height:1.3;margin-bottom:24px;color:#262626}
.slides li p{margin:0;font-size:16px;line-height:22px;color:#000}
.slides li:last-child{margin-bottom:0}
.promotext p a,.slides li p a{background-color:#f8e0b9;padding:2px;color:#262626;text-decoration:none}
.promotext,.promotext p{color:#000;font-size:17px;letter-spacing:-.34px;line-height:24px;margin:0}
.upper-wrap{padding-bottom:0;border-bottom:1px solid #ddd}  
.nv-social-footer {display: flex;justify-content: center}
.nv-footer-text p {
    color: #000;
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 15px;
    line-height: 20px;
}.nv-footer-text p a {
    color: #3A55A6;
}  
.promo_footer {display: flex}  
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
  
.vimatodotis-header .vimatodotis-title{letter-spacing:-0.24px;font-size:24px;line-height:1.2}
.vimatodotis-header .vimatodotis-summary{font-size:18px;line-height:22px}
  
.vimatodotis-header .article-image img{width:100%;max-width:100%;height:auto}
.vimatodotis-content{font-size:17px;line-height:1.3}
.vimatodotis-content blockquote{font-family:'Georgia';font-size:18px;padding: 0 15px;text-align:center;margin:30px auto;max-width:400px}
.vimatodotis-content blockquote *{font-family:'Georgia'!important}  
.vimatodotis-content h2,
.vimatodotis-content h3{color:#8597bb;margin-bottom:20px;font-size:22px;text-align:left}
.vimatodotis-content h2{text-align:center;font-size:24px}
.vimatodotis-content blockquote h3, .vimatodotis-content blockquote h2 {text-align: center;color: #000}
.vimatodotis-content p{margin:0 0 29px}  
.vimatodotis-content p:last-child {
    margin-bottom: 0;
}  
.vimatodotis-content p img{max-width:100%;height:auto}
.vimatodotis-content p a {background-color: #d5e0f5;text-decoration:none;color:#222}    
.blue-box{background-color:#d5e0f5;text-align:left;padding:20px 20px;position:relative;margin-bottom:30px}
.blue-box:before{content:"";display:block;height:16px;width:83px;background-color:#8597bb;margin-bottom:24px;position:relative;margin-top:-20px}
.blue-box p{margin:0 0 30px}
.blue-box p:last-child{margin-bottom:0}
  
.footer-text p{color:#000;margin-top:0;margin-bottom:20px;font-size:15px;line-height:20px}
.footer-text p:last-child{margin-bottom:0}
.footer-text p a {color: #3A55A6}
.footer-table td {
    display: inline-block;
    width: 33.333%;
    box-sizing: border-box;
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
    <?php include(TEMPLATEPATH.'/assets/newsletters/vimatodotis.php'); ?>
  </div>
</div>
</div>
  
<header class="newsletter-subscription is-relative">
  <div class="inner-newsletter is-relative">
  <div class="maxgridrow is-relative">

    <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">

    <div class="column is-full is-hidden-fullwindow">
      <h2 class="zonaultra f-400 is-size-3 my-0 white-c">NEWSLETTER</h2>  
    </div>      
      
      
    <div class="column is-visible-fullwindow is-narrow">
      <div class="rect-width">
        <h2 class="zonaultra f-400 is-size-3 my-0 white-c">NEWSLETTER</h2>
      </div>
    </div>

    <div class="column">
      <div class="newsletter-subscription-logo is-hidden-x">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimatodotis_Logo.svg" alt="Όλο το παρασκήνιο της πολιτικής στο inbox σου" />
      </div>
      <div class="wrap-wrap-newsletetr-header">
      <div class="wrap-newsletetr-headr">
      <h1 class="f-400 zonaultra is-size-2-1 mt-0 mb-4 white-c">Όλο το παρασκήνιο της πολιτικής στο inbox σου</h1>
      <h2 class="manrope newsletter-summary">
        Κάθε μέρα από Κυριακή έως Παρασκευή ο Βηματοδότης, η ιστορική στήλη του Βήματος, καταγράφει, παρουσιάζει και σχολιάζει όσα συμβαίνουν πίσω από τις κλειστές πόρτες των πολιτικών γραφείων.
      </h2>
      <div class="calendar-row">
<svg id="event_black_24dp" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <path id="Path_1504" data-name="Path 1504" d="M0,0H20V20H0Z" fill="none"/>
  <path id="Path_1505" data-name="Path 1505" d="M14.647,10.158h-4.16V14.32h4.16ZM13.815,1V2.665H7.16V1H5.5V2.665H4.664A1.657,1.657,0,0,0,3.008,4.33L3,15.985A1.664,1.664,0,0,0,4.664,17.65H16.311a1.669,1.669,0,0,0,1.664-1.665V4.33a1.669,1.669,0,0,0-1.664-1.665h-.832V1Zm2.5,14.985H4.664V6.828H16.311Z" transform="translate(-0.488 -0.163)" fill="#ffffff"/>
</svg>        <span>ΔΕΥ - ΣΑΒ</span>
      </div>  
    
      <div class="wrap-signup">
        <div id="mc_embed_signup">
          
          <form action="https://tovima.us19.list-manage.com/subscribe/post?u=116d6eb4f76a4ab66194d2062&amp;id=930e9d8eb2&amp;f_id=002140e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll" style="background-color: #F5F5F5;border: 1px solid #BFBFBF">
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Εισάγετε το email σας" required>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_116d6eb4f76a4ab66194d2062_930e9d8eb2" tabindex="-1" value=""></div>
              <input type="submit" disabled value="ΕΓΓΡΑΦΕΙΤΕ" name="subscribe" id="mc-embedded-subscribe" class="button navy">
            </div>

            <div class="checbox-flex" style="color:#FFF">
              <input type="checkbox" id="checktermsi">
              <label for="checktermsi">Έχω διαβάσει και αποδέχομαι τους </label> <a style="color:#FFF" target="_blank" title="πολιτικη προστασίας δεδομένων" href="/politiki-prostasias-dedomenon-prosopikou-xaraktira/">όρους της πολιτικής προστασίας δεδομένων</a>
            </div>
          </form>
          
        </div>
      </div>
      </div>
      <div class="newsletter-subscription-logo">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimatodotis_Logo.svg" alt="Όλο το παρασκήνιο της πολιτικής στο inbox σου" />
      </div>  
      </div>
    </div>
    </div>
    
  </div>
  </div>
</header>
  <div class="border-bottom"></div>


  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
    <div class="column is-visible-fullwindow is-narrow">
      <div class="rect-width">

    </div>
    </div>
    <div class="column is-relative">
      <h3 class="f-400 zonaultra is-size-5 mt-0 latestposts-headine">ΤΕΛΕΥΤΑΙΑ ΑΡΘΡΑ ΒΗΜΑΤΟΔΟΤΗ</h3>
      
      <div class="latest-newsletter-posts">
          
          <?php
          $cc = 0;
          $g5more = get_posts( 
          array('numberposts' => 3, 
//           'category_name' => 'vimatodotis', 
                'no_found_rows' => true, 'post_status' =>'publish',
//           'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
          ));
          foreach($g5more as $post) : setup_postdata($post); $cc++; 
          $varsize = 'is-size-4 zonabold'; ?>
        
          <a class="latest-newsletter-row is-flex" href="<?php the_permalink(); ?>">
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