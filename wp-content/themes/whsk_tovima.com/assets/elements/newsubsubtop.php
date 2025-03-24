<div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">   
<?php
  $i = 0;
  $cc = 4;
  $bottoml_lead =  get_field('box8_selection','tovima_index', false);
  $bottoml_query = new WP_Query(array(
  'posts_per_page'  => 5, 'offset' => 3, 'post_type' => array('post', 'printed_post'),
  'post__in' => $bottoml_lead, 'post_status'  => 'publish', 'orderby' => 'post__in',
  )); ?>
  <?php while ( $bottoml_query->have_posts() ) : $bottoml_query->the_post(); $i++; $cc++;
  $extraclass = null;
  $has___excpert = null;
  if($i == 1 || $i == 5) {
  $extraclass = 'flex-article reverse-row full-height';      
  $has___excpert = 'true';
  }
  
  if($i == 1) { 
    $varsize = 'hero-size zonaultra'; 
  } elseif($i == 5) { 
   $varsize = 'hero-size zonaregular';     
  } else {
  $varsize = 'is-size-3-1 zonabold';
  }
  
?>
<?php if($i == 1 || $i == 5) { ?>
<div class="column is-full lcr_<?php echo $i; ?>">
  <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
</div>
<?php } else { ?>
<div class="column">
  <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
</div>
<?php } ?>
  
<?php if($i == 4 || $i == 1) { ?>
<div class="column is-full">
  <div class="separator-horizontal-row"><sep></sep></div>
</div>
<?php } ?>

<?php endwhile; wp_reset_postdata(); $has___excpert = 'false';?>
</div>

<style>
@media screen and (min-width:1300px){
.latest-col-row .lcr_1 .flex-article .wrap-thumb{width: 58.33333%}
.latest-col-row .lcr_1 .flex-article .tile-content {width: 41.66667%}
  
.latest-col-row .lcr_5 .flex-article .wrap-thumb,
.latest-col-row .lcr_5 .flex-article .tile-content {width:50%}  
}
</style>