<div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <?php 
  $printitem = get_posts( 
  array('post_type' => 'kioski_posts', 'post_status' => 'publish', 'posts_per_page' => 1, 'no_found_rows' => true, 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY)), 'tax_query' => array(
  array( 'taxonomy' => 'magazines', 'field' => 'slug', 'terms' => 'to-vima')))); ?>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width">
      <div class="wrap-header-section">
       <?php if(is_home()) { ?>
        <a href="/print/">        
        <h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2>
        </a>
        <?php } elseif(is_page('print')) { ?>
        <?php
        foreach($printitem as $p) { ?>
        <h2 class="header-section zonaultra f-400 uppercase">
          ΑΠΟ ΤΟ ΒΗΜΑ ΤΗΣ ΚΥΡΙΑΚΗΣ<br />
<?php	/*
$thedate = get_field('kioski_date', $p->ID, false);
$thedate = date('Ymd', strtotime($thedate . " -".date('w', strtotime( $thedate ))." days"));
$datename = array("της Κυριακής","της Δευτέρας","της Τρίτης","της ετάρτης","της Πέμπτης","της Παρασκευής","του Σαββάτου");
// echo date("l d F Y", strtotime($datefield));
$ccdate = $datename[date('w', strtotime($thedate))] . " " . date('d/m/Y', strtotime($thedate)); echo $ccdate; */ 
?>
        </h2>
        <?php } ?>
        <?php } ?>
        <div class="wrap-helioskiosk is-inline-block">
          <a href="https://www.helioskiosk.gr/newspapers-digital" target="_blank" class="call-action-button yellow-button">
            ΑΠΟΚΤΗΣΤΕ ΣΥΝΔΡΟΜΗ ΣΗΜΕΡΑ
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <?php if(is_home()) { ?>
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-full is-mobile is-multiline is-variable level upper-header <?php echo VARIABLES; ?>">
    <div class="column is-4-desktop is-6-mobile is-full-small">
      <div class="wrap-header-section">
      <a href="/print/">
        <h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2>
      </a>
      </div>
    </div>
    <div class="column is-8-desktop is-6-mobile is-full-small has-text-right-desktop has-text-right-mobile has-text-left-small">
    <div class="is-inline-block">
    <a href="https://www.helioskiosk.gr/newspapers-digital" target="_blank" class="call-action-button yellow-button">
    ΑΠΟΚΤΗΣΤΕ ΣΥΝΔΡΟΜΗ ΣΗΜΕΡΑ
    </a>
    </div>
    </div>
    </div>  
  </div>
  <?php } ?>
  
  <div class="column">
  <div class="columns is-multiline is-mobile is-variable <?php echo VARIABLES; ?>">    
      <?php
      if(is_home()) {
       $relationship =  'box6_selection';
       $printposts = 'tovima_printhome';
      } elseif(is_page('print')) {
       $relationship =  'boxn5_selection';        
       $printposts = 'tovimaprint_index';
      }
      $cc = 0;
      $entiporowposts = get_field($relationship,$printposts);
      foreach($entiporowposts as $post) : setup_postdata($post); $cc++;
      if($cc > 5) continue;
      $extraclass = null;
      if($cc == 1) {
      $extraclass = 'flex-article';
      $varsize = 'is-size-1-desktop is-size-1-tablet is-size-2-mobile zonabold'; 
      } else {
      $varsize = 'is-size-3-1 zonabold'; 
      }
      ?>
  
    <div class="column <?php if($cc == 1) {echo ''; } else {echo 'is-3-desktop is-half-tablet is-half-mobile is-full-small'; } ?>">
    <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
  
    <?php if($cc == 1) { ?>
    <div class="column is-narrow-desktop is-4-mobile is-4-tablet is-full-small">
      <div class="sidebar-width">
        <?php /*
        <div class="upper-header mx-0 is-hidden-fullwindow">
          <span class="manrope-title is-size-normal manrope f-500"><strong>ΔΩΡΕΑΝ</strong> η έκδοση 25.12.22</span>
        </div>
        */ ?>
        
        <?php
        foreach($printitem as $post) : setup_postdata($post); ?>
        <a href="/to-vima/" class="is-block">
        <div class="wrap-paper">
          <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>          
        </div>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  
    <div class="column is-full separator-horizontal-row">
      <sep></sep>
    </div>
    <?php } ?>
  
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>
  

<?php if(get_field('active_offers','tovima_οffers')) {
$prosforestitle = get_field('offerstitle', 'tovima_οffers');  
$prosforeslink = get_field('url_προσφορών', 'tovima_οffers');
$prosforesimageD = get_field('offers_imageDesktop', 'tovima_οffers');
$prosforesimageL = get_field('offers_imageLaptop', 'tovima_οffers');
$prosforesimageT = get_field('offers_imageTablet', 'tovima_οffers');
$prosforesimageM = get_field('offers_imageMobile', 'tovima_οffers');
?>
<div id="offer1" class="column is-full is-relative">
<section class="inner-section">
  <div class="inner-section-flex">
    <a title="<?php echo $prosforestitle; ?>" href="<?php echo $prosforeslink; ?>" class="is-block">
      <picture>
        <source media="(max-width:767px)" srcset="<?php echo $prosforesimageM; ?>" />
        <source media="(max-width: 1023px)" srcset="<?php echo $prosforesimageT; ?>" />
        <source media="(max-width: 1550px)" srcset="<?php echo $prosforesimageL; ?>" />
        <source media="(min-width: 1550px)" srcset="<?php echo $prosforesimageD; ?>" />
        <img loading="lazy" alt="<?php echo $prosforestitle; ?>" src="<?php echo $prosforesimageM; ?>" width="1574" height="300" style="width: 100%; height: auto;" />
      </picture>
    </a>
  </div>
</section> 
</div> 
<?php } ?> 

<?php if(get_field('active_offers_2','tovima_οffers')) {
$prosforestitle2 = get_field('offerstitle_2', 'tovima_οffers');  
$prosforeslink2 = get_field('url_προσφορών_2', 'tovima_οffers');
$prosforesimageD2 = get_field('offers_imageDesktop_2', 'tovima_οffers');
$prosforesimageL2 = get_field('offers_imageLaptop_2', 'tovima_οffers');
$prosforesimageT2 = get_field('offers_imageTablet_2', 'tovima_οffers');
$prosforesimageM2 = get_field('offers_imageMobile_2', 'tovima_οffers');
?>
<div id="offer2" class="column is-full is-relative hide-el">
<section class="inner-section">
  <div class="inner-section-flex">
    <a title="<?php echo $prosforestitle2; ?>" href="<?php echo $prosforeslink2; ?>" class="is-block">
      <picture>
        <source media="(max-width:767px)" srcset="<?php echo $prosforesimageM2; ?>" />
        <source media="(max-width: 1023px)" srcset="<?php echo $prosforesimageT2; ?>" />
        <source media="(max-width: 1550px)" srcset="<?php echo $prosforesimageL2; ?>" />
        <source media="(min-width: 1550px)" srcset="<?php echo $prosforesimageD2; ?>" />
        <img loading="lazy" alt="<?php echo $prosforestitle2; ?>" src="<?php echo $prosforesimageM2; ?>" width="1574" height="300" style="width: 100%; height: auto;" />
      </picture>
    </a>
  </div>
</section> 
</div> 
<?php } ?> 
  
</div>