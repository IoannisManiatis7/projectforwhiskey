<?php
$cc = 0;
if( have_rows('fiveam_bullets') ): ?>
<?php while( have_rows('fiveam_bullets') ) : the_row(); $cc++; 
$bulletsub = get_sub_field('fiveam_bullet_title');
$bulletmain = get_sub_field('fiveam_bullet_text');
?>
<div class="fiveam_area fv<?php echo $cc; ?>">
    <div class="fiveam_area_headline">
      <span class="bullet_a"><?php echo $cc; ?></span>
      <h3 class="bullet_subtitle my-0 f-400 zonaultra is-size-3-1"><?php echo $bulletsub; ?></h3>
    </div>
    <div class="fiveam_area_main">
      <?php echo $bulletmain; ?>
    </div>
    </div>

<?php if($cc == 2 && is_single()) { ?>
<div class="five-newsletter-row">
  <div class="vima-box">
    <header class="vima-box-header"><h4 class="vimabox-tile manrope is-size-normal f-700">Newsletter</h4></header>
    <div class="fivenlr-flex">
    <div class="wrap-lx">
    <h3 class="zonaultra f-400 is-size-3">Πέντε ειδήσεις για να ξεκινήσεις τη μέρα σου</h3>
    <span class="manrope is-size-5 f-700 is-block" style="margin-top:10px;margin-bottom:18px">Κάθε πρωί θα βρίσκεις στο inbox σου τις πιο σημαντικές ειδήσεις και τα πιο ενδιαφέροντα θέματα </span>
    <div class="fivenewsletter-form">
      <span id="registerbutton" class="registerbutton" style="background-color:var(--darkblue);border: none;color:#FFFFFF">ΕΓΓΡΑΦΗ</span>          
      <div class="wrap-signup">
      <div id="mc_embed_signup">
        <form action="https://tovima.us19.list-manage.com/subscribe/post?u=116d6eb4f76a4ab66194d2062&amp;id=930e9d8eb2&amp;f_id=002140e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Εισάγετε το email σας" required>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_116d6eb4f76a4ab66194d2062_930e9d8eb2" tabindex="-1" value=""></div>
        <input type="submit" disabled value="ΕΓΓΡΑΦΕΙΤΕ" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>

        <div class="checbox-flex">
        <input type="checkbox" id="checkterms">
        <label for="checkterms">Έχω διαβάσει και αποδέχομαι τους </label> <a target="_blank" title="πολιτικη προστασίας δεδομένων" href="/politiki-prostasias-dedomenon-prosopikou-xaraktira/">όρους της πολιτικής προστασίας δεδομένων</a>
        </div>
        </form>
      </div>
      </div>
    </div>
    </div>
      
    <div class="newsletter-image">
      <img alt="5 το πρωι" src="/wp-content/themes/whsk_tovima.com/common/imgs/5form-icon@2x.png" width="332" height="276" />
    </div>
      
    </div>
  </div>
</div>
<?php } ?>

<?php endwhile; ?>
<?php endif; ?>

<style>
.five-newsletter-row{position:relative}
.five-newsletter-row .vima-box-header{border-bottom:none}
.five-newsletter-row{border-bottom:1px solid #ddd;margin-bottom:6rem;margin-left:-4rem;padding-bottom:15px}
.fivenewsletter-form{display:flex}
.five-newsletter-row h3{margin:0;padding-top:10px}
.fivenewsletter-form #mc_embed_signup_scroll{border:1px solid #bfbfbf;margin-top:0;background-color:#f5f5f5;color:#444444}
#mc_embed_signup_scroll #mce-EMAIL{color:#444444}
.fivenewsletter-form #mc-embedded-subscribe{background-color:#3757ab}
.newsletter-image img{width:100%}
.wrap-lx {flex: 1}  
.wrap-signup  {display:none;transition:all 0.3s ease}
.wrap-signup.activeform {
    display: block;
}  
.fivenlr-flex {
    display: flex;
    justify-content: space-between;
}  
#registerbutton.hidei {
    display: none;
}  
.newsletter-image {width: 145px}  
.newsletter-image img {height: auto}  

@media screen and (min-width:1200px) {    
.five-newsletter-row {margin-inline:-3.5rem}
}
  
@media screen and (max-width:768px) {  
.fivenewsletter-form{flex-wrap:wrap}
.five-newsletter-row h3{display:block;max-width:200px}
.five-newsletter-row{margin-left:0;margin-bottom:6rem}
.fivenewsletter-form .checbox-flex {font-size: 10px}
#mc_embed_signup{margin-top:30px}
.newsletter-image{position:absolute;right:0;top: 25px;max-width:120px}
} 
</style>


<script>
document.addEventListener('DOMContentLoaded', function() {
  $("#registerbutton").click(function() {
    $(this).addClass("hidei");    
    $(".wrap-signup").toggleClass("activeform");
  });  
});  
</script>