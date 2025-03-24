<?php get_header(); 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
$count_cat = count_category_post($term_id);
global $wp;
$categorydescription = strip_tags(category_description());
?>

<main class="maxgridrow">
  
<div class="columns is-variable is-mobile is-multiline onerow  <?php echo VARIABLES; ?>">
  
<?php if(is_category('science')) { ?>
<style>

.sponsored-image {width:270px}
.sponsored-image img {width: 100%;height: auto}
</style>
<div class="column is-full">
  <div class="sponsored-row" style="padding-bottom:9px;border-bottom: 1px solid #ccc;">
  <div class="columns is-variable is-align-items-center is-mobile is-multiline is-justify-content-space-between <?php echo VARIABLES; ?>">
    <div class="column is-half">
     <h1 style="padding: 0;border: none" class="category-name zonaultra f-400 mt-0 mb-0"><?php single_cat_title(); ?></h1>
    </div>
    <div class="column is-half">
      <a target="_blank" href="https://www.metlengroup.com/" class="is-flex is-align-items-center is-justify-content-flex-end">
        <!-- <span class="manrope is-size-5 f-500" style="padding-right:15px;color:#A6A6A6">powered by</span> -->
        <div class="sponsored-image">
          <img alt="powered-by-metlen" width="731" height="169" src="/wp-content/themes/whsk_tovima.com/common/imgs/ads/powered-by-metlen.png" />
        </div>
      </a>
    </div>  
  </div>
  </div>
</div>
<?php } else { ?>
<div class="column is-full">
  <div class="wrap-section-t">
  <h1 class="category-name zonaultra f-400 mt-0 mb-0"><?php single_cat_title(); ?></h1>

  <?php /* if(is_category('finance')) { ?>
    <a href="https://www.ot.gr" target="_blank" class="powered">powered by <img src="/wp-content/themes/whsk_tovima.com/common/imgs/ot-96.png" width="96" height="96" loading="lazy" /></a>
  <?php } */ ?>
  </div>
</div>  
<?php } ?>
  
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// $category = get_queried_object(); $count_cat = $category->count; 
if($count_cat < 12 ) { ?>
<?php include(TEMPLATEPATH .'/assets/elements/flipbooks.php'); ?>
<div class="column is-relative count_<?php echo $count_cat; ?>">
<div class="columns is-variable is-mobile is-multiline <?php echo VARIABLES; ?>">  
<?php
$archivecounter = 0; $cc = 0;
while ( have_posts() ) : the_post(); $archivecounter++; $cc++; 
$varsize = 'is-size-2 zonabold';  ?>
  <div class="column is-full">
  <?php include(TEMPLATEPATH .'/assets/blocks/category-row.php'); ?>
  </div>
<?php endwhile; ?>
  
<div class="column is-full">
  <?php kriesi_pagination();?>  
</div>  
  
</div>
</div>  
  
<div class="column is-narrow is-hidden-touch">
  <div class="sidebar-width is-relative full-height">
    <?php include(TEMPLATEPATH .'/assets/elements/archive-sidebar.php'); ?>
  </div>  
</div>
  
<?php } elseif ($paged == 1) { ?>
<?php 
$archivecounter = 0; $cc = 0;
while ( have_posts() ) : the_post(); $archivecounter++; $cc++;
$extraclass = null;  
if($archivecounter < 9) {
if($cc == 1) {
  $extraclass = 'flex-article';
  $varsize = 'is-size-2-1 zonabold';
} else {
  $varsize = 'is-size-3-1 zonabold';
}
?>
<?php if($archivecounter == 1) { ?>
<div class="column is-full-touch">
  <div class="columns is-variable is-mobile is-multiline is-full onerow is-4-desktop is-0-mobile">
<?php } ?>
  
<div class="column <?php if($cc == 1) {echo 'is-full'; } elseif($cc > 1 && $cc < 5) {echo 'is-4-desktop is-4-tablet is-4-mobile is-full-small'; } else {echo 'is-3-desktop is-6-tablet is-6-mobile is-full-small'; } ?>">
  <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
</div>
    
<?php if($archivecounter == 4) { ?>    
  </div>
  </div>
  <div class="column is-narrow is-hidden-touch">
    <div class="sidebar-width is-relative full-height sidebar-sticky top-sidebar">
    <div id='300x250_r1' class="sticky-item das-r1 das-r1--in">
      <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r1'); });</script>
    </div>
    </div>  
  </div>  
<?php } ?>
  
<?php if($archivecounter == 4 || $archivecounter == 8) { ?>     
  <div class="column is-full separator-horizontal-row is-hidden-small">
    <sep></sep>
  </div>  
<?php } ?>
  
<?php } else {
  $varsize = 'is-size-2 zonabold';  ?>
  <?php if($archivecounter == 9) { ?>
  <?php if ($paged == 1) { ?>
  
  <?php include(TEMPLATEPATH .'/assets/elements/normal.php'); ?>
  <?php include(TEMPLATEPATH .'/assets/elements/flipbooks.php'); ?>
  
  <?php } ?>
  <div class="column is-relative">
  <div class="columns is-variable is-multiline onerow <?php echo VARIABLES; ?> is-0-mobile">
  <?php } ?>
  
  <div class="column is-full wrap-category-row">
  <?php include(TEMPLATEPATH .'/assets/blocks/category-row.php'); ?>
  </div>
<?php } ?>
    
<?php if($archivecounter == 20) { ?>

<div class="column is-full">
  <?php kriesi_pagination();?>  
</div>
    
  </div>
  </div>
  
  <div class="column is-narrow is-hidden-touch">
    <?php if ($paged == 1) { ?>
    <div class="sidebar-width is-relative full-height sidebar-sticky">
    <div id='300x250_r2' class=" das-r2 das-r2--in">
      <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r2'); });</script>    
    </div>

    <div id='300x250_r3' class="das-r3 das-r3--in">
      <script type='text/javascript'>googletag.cmd.push(function() { googletag.display('300x250_r3');});</script>
    </div>

    </div>
    <?php } else { ?>
    <div class="sidebar-width is-relative full-height sidebar-sticky">
    <div id='300x250_r1' class="sticky-item das-r1 das-r1--in">
      <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r1'); });</script>
    </div>
    </div>    
    <?php } ?>
    
  </div>
<?php } ?>
  
<?php endwhile; ?>
  
<?php } else { ?>
<div class="column is-relative">
<div class="columns is-variable is-multiline <?php echo VARIABLES; ?>">  
<?php
$archivecounter = 0; $cc = 0;
while ( have_posts() ) : the_post(); $archivecounter++; $cc++; 
$varsize = 'is-size-2 zonabold';  ?>
  <div class="column is-full wrap-category-row">
  <?php include(TEMPLATEPATH .'/assets/blocks/category-row.php'); ?>
  </div>
<?php endwhile; ?>
  
<div class="column is-full">
  <?php kriesi_pagination();?>  
</div>
  
</div>
</div>
  
<div class="column is-narrow">
  <div class="sidebar-width is-relative full-height">
    <?php include(TEMPLATEPATH .'/assets/elements/archive-sidebar.php'); ?>
  </div>  
</div>
  
<?php } ?>
  
</div>
</main>

<?php get_footer(); ?>