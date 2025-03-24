<?php if(get_field('activate_fiveam', 'tovimagr_fiveam')) { ?>
<div id="tovimagr_fiveam" class="column is-full">
<div class="columns is-multiline is-variable is-4-desktop level">
  <div class="column is-narrow">
    <div class="sidebar-width">
      <div class="wrapfiveam-logo">
        <div class="fiveam-logo">
          <a href="<?php echo get_field('link_widget', 'tovimagr_fiveam'); ?>" class="fiveam-module">
          <img alt="5 το πρωι" src="/wp-content/themes/whsk_tovima.com/common/imgs/5toPrwiLogo.svg" width="133" height="144" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <h4 class="fiveam-label f-700 my-0 manrope is-size-5">ΠΕΝΤΕ ΕΙΔΗΣΕΙΣ ΓΙΑ ΝΑ ΞΕΚΙΝΗΣΕΙΣ ΤΗ ΜΕΡΑ ΣΟΥ</h4>
    <a href="<?php echo get_field('link_widget', 'tovimagr_fiveam'); ?>" class="fiveam-module">    
      <h3 class="o-head my-0 f-400 fiveam-headline zonabold">
        <?php echo get_field('fiveam_title', 'tovimagr_fiveam'); ?>
      </h3>
    </a>
    <div class="wrap-register-button">
      <a href="/newsletter/5-to-proi-subscription/" class="call-action-button yellow-button">ΕΓΓΡΑΦΗ</a>
    </div>
  </div>
  <div class="column is-full separator-horizontal-row">
    <sep></sep>
  </div>
</div>
</div>
<?php } ?>
<style>
.wrapfiveam-logo{width:100%;height:100%;display:flex;align-items:center;justify-content:center}
.fiveam-logo{width:90px;height:auto}
.fiveam-logo img{width:100%;height:auto}
.fiveam-label{line-height:16px;color:var(--darkblue);display:block;padding-bottom:8px}
.fiveam-headline{font-size:28px;line-height:1.2;letter-spacing:-.56px}
.wrap-register-button .call-action-button{height:27px;display:flex;align-items:center}
.wrap-register-button{margin-top:20px;display:flex}
.fiveo-mobiletop-i{display:none}
.fiveo-mobiletop{border-bottom:1px solid var(--linelight);padding-bottom:15px}
.fiveo-mobiletop .fiveo-label{font-size:23px;font-weight:400;font-family:Vegabold;line-height:22px;margin:15px 0 10px}
.fiveo-mobiletop .fiveam-headline{text-align:left;font-size:18px;line-height:22px}
  
@media screen and (max-width:767px) {
.fiveo-mobiletop-i {display:none}  
.morning-time .fiveo-mobiletop-i {display:block}
.fiveam-label{max-width:292px;margin:0 auto;text-align:center}  
.fiveam-module{text-align:center;width:90%;margin:0 auto}
.fiveam-logo{width:70px}
.fiveam-headline {font-size:22px;text-align: center}
.wrap-register-button{margin:20px auto 0;clear:both;text-align:center;align-items:center;justify-content: center}
.morning-time #tovimagr_fiveam{display:none;}
}
</style>