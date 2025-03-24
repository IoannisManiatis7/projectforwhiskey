<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-6">
        <div class="wrap-header-section">
        <a href="/category/<?php echo $row['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2></a>
        </div>
      </div>
      <div class="column is-6 has-text-right">
        <a href="/category/<?php echo $row['slug']; ?>/" class="manrope is-size-6 f-700 grey-c"><?php echo READMORE; ?></a>
      </div>
    </div>
  </div>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">      
        <a href="/category/<?php echo $row['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2></a>
        <a href="/category/<?php echo $row['slug']; ?>/" class="manrope is-size-6 f-700 grey-c"><?php echo READMORE; ?></a> 
      </div>
    </div>
  </div>
  
  <?php $args = array('numberposts' => 4, 'category_name' => $row['slug'], 'no_found_rows' => true, 'post_status' =>'publish', 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))); $rowposts = get_posts( $args ); ?>
  
  <div class="column">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">    
    <div class="column is-full-touch">
    <div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
      <?php
      $cc = 0;
      $ftrowposts = array_slice($rowposts, 0, 1);
      foreach($ftrowposts as $post) : setup_postdata($post); $cc++;
      $extraclass = null;
      if($cc == 1) {
      $extraclass = 'flex-article reverse-row';
      $varsize = 'hero-size zonaregular'; 
      } else {
      $varsize = 'is-size-4 zonabold'; 
      }
      ?>
      <div class="column <?php if($cc == 1) {echo 'is-full'; } else {echo 'is-4'; } ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
    <div class="column is-narrow-desktop is-full-touch">
    <div class="sidebar-width">
      <div class="wrap-ft-rows">      
      <?php 
      $ii = 0;
      $ftrowposts_b = array_slice($rowposts, 1, 4);
      foreach($ftrowposts_b as $post) : setup_postdata($post); $ii++;
      $extraclass = null;
      $varsize = 'is-size-3 zonabold'; ?>
      <?php if($row['slug'] === 'culture' || $row['slug'] === 'stories' || $row['slug'] === 'vima-history') { ?>
      <?php if($ii > 2) continue; ?>
      <div class="ft_row_wwr wwr_<?php echo $ii; ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
      </div>
        
      <?php } else { ?>
      <div class="wrap-ft-row rt_<?php echo $ii; ?> <?php if($ii == 4) {echo 'is-hidden-desktop'; } ?>">
      <?php include(TEMPLATEPATH .'/assets/blocks/row-box.php'); ?>
      </div>
      <?php } ?>
      <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  <?php /*
  <div class="column is-visible-fullwindow is-narrow">
    <div class="sidebar-width has-text-right">
      <a href="/category/<?php echo $row['slug']; ?>/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>      
    </div>
  </div>
  */ ?>

</div>