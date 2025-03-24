<div class="maxgridrow">
<div class="wrap-vimagazino-mini">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns level is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-6">
        <div class="wrap-header-section">
        <a href="/vimagazino/" class="is-block minivimagazino-logo">
            <img alt="vimagazino" width="305" height="67" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimagazino-black.svg" />
          </a>
        </div>
      </div>
      <div class="column is-6 has-text-right">
        <a href="/vimagazino/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
      </div>
    </div>
  </div>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="sidebar-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">      
        <a href="/vimagazino/" class="is-block minivimagazino-logo">
          <img alt="vimagazino" width="305" height="67" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimagazino-black.svg" />          
        </a>
        <a href="/vimagazino/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a> 
      </div>
    </div>
  </div>
  
  <div class="column">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
    <div class="column is-full-touch">
    <div class="columns onerow is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
      <?php
      $cc = 0;
      $rowposts = get_field('box4_selection','tovima_vimagazino');
      foreach($rowposts as $post) : setup_postdata($post); $cc++;
      $extraclass = null;
      if($cc == 1) {
      $extraclass = 'flex-article vimagz';
      $varsize = 'is-size-1 zonabold is-size-3-1-mobile'; 
      } elseif($cc == 2) {
      $extraclass = 'full-height flex-article reverse-row vimagz2';        
      $varsize = 'is-size-2-1 zonabold is-size-3-1-mobile';
      } else {
      $varsize = 'is-size-3-1 zonabold is-size-3-1-mobile';
      }
      ?>
      <div class="is-relative vm_<?php echo $cc; ?> column <?php if($cc == 1) {echo 'is-full'; } elseif($cc == 2 ) { 
  echo 'is-6-desktop is-full-mobile is-full-tablet is-full-small'; } else {
  echo 'is-3-desktop is-half-mobile is-half-tablet is-full-small'; } ?>">
        <?php if($cc == 2) { 
          include(TEMPLATEPATH .'/assets/blocks/vert-box.php');          
        } else {
          include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); 
        } ?>
      </div>
      
      <?php if($cc == 1) { ?>
    <div class="column is-full separator-horizontal-row">
      <sep></sep>
    </div>      
      <?php } ?>
      
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    </div>
  </div>
  </div>
  
</div>
</div>
</div>