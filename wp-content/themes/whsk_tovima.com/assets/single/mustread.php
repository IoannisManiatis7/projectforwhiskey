<div class="vima-box sidebar-widget">

  <header class="vima-box-header">
    <h4 class="vimabox-tile manrope is-size-normal f-700">Read More</h4>
  </header>
  <?php
  $cc = 0;
  $mustreadposts = get_field('box8_selection','tovima_index');
  foreach($mustreadposts as $post) : setup_postdata($post); $cc++; 
  if($cc > 3) continue; 
  $varsize = 'is-size-3 zonabold'; ?>
  <div class="row-post">
    <?php if($cc == 1) { ?>
    <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    <?php } else { ?>
    <?php include(TEMPLATEPATH .'/assets/blocks/row-box.php'); ?>
    <?php } ?>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
</div>