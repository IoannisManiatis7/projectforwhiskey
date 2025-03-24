<div class="column is-full">
  <div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
    
    <?php 
    $cc = 0;
    $toprowposts = get_field('box8_selection','tovima_index');
    foreach($toprowposts as $post) : setup_postdata($post); $cc++; ?>
    <?php if($cc > 1) continue; $rxtr = true; $extraclass = 'flex-article reverse-row'; $varsize = 'is-size-1 zonaultra'; ?>
    <div class="column is-relative main-article">
      <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
    <?php endforeach; wp_reset_postdata(); $rxtr = false; ?>
    
    <div class="column is-narrow">
      <div class="sidebar-width">
        <?php 
        $cc = 0;
        $toprowposts = get_field('box8_selection','tovima_index');
        foreach($toprowposts as $post) : setup_postdata($post); $cc++; ?>
        <?php if($cc < 2 || $cc > 3) continue; $varsize = 'is-size-3-1 zonabold'; $extraclass = ''; ?>
        <div class="sidebar-article">
          <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>    
    
    <div class="column is-full separator-horizontal-row">
      <sep></sep>  
    </div>
    
  </div>
</div>