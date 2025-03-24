<?php
  $chosen = 0;
  $chosen_left = get_field('chosen_posts', false, false); 
  if ($chosen_left):
  $bon_count = count(get_field('chosen_posts'));
  if ($bon_count >= 1) { 
  foreach ($chosen_left as $post): $chosen++;
  if($chosen > 1) continue; ?>
  <div class="is-hidden-touch related-left">
  <div class="vima-box single__related">

  <header class="vima-box-header">
    <h4 class="vimabox-tile manrope is-size-4 f-700">Related Article</h4>  
  </header>
  
  <?php $varsize = 'is-size-3 zonabold'; ?>
  <div class="row-post">
    <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
  </div>
  
</div>
  </div>
<?php endforeach; wp_reset_postdata(); ?>
<?php } endif; ?>