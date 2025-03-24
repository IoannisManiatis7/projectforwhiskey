<?php 
$mathsrt = get_field('taxonomy_math_shr', $taxonomy . '_' . $term_id); 
$mathname = get_field('taxonomy_math_name', $taxonomy . '_' . $term_id); 

if($mathname && $mathsrt) { ?>
  <div class="column is-full">
    <div class="columns is-variable is-multiline <?php echo VARIABLES; ?> is-0-mobile">
      <div class="column is-full is-hidden-fullwindow">
        <h2 class="header-section zonaultra f-400"><?php echo $mathname; ?></h2>
      </div>
      <div class="column is-visible-fullwindow is-narrow">
        <div class="sidebar-width">
            <h2 class="header-section zonaultra f-400"><?php echo $mathname; ?></h2>
        </div>
      </div>

      <div class="column is-relative">
      <?php $flipbook = $mathsrt ?>
      <?php echo do_shortcode($flipbook); ?>
      </div>

    </div>
  </div>
  <div class="column is-full separator-horizontal-row"> <sep></sep></div>  
<?php } ?>