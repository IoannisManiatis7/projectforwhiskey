<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-6">
        <div class="wrap-header-section">
          <a href="<?php echo $row['slug']; ?>">
            <h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2>
          </a>
        </div>
      </div>
      <div class="column is-6 has-text-right">
        <a href="<?php echo $row['slug']; ?>" class="manrope is-size-6 f-700 grey-c">ALL ARTICLES</a>
      </div>
    </div>
  </div>
  <div class="column is-visible-fullwindow is-narrow">
    <div class="sidebar-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">
        <a href="/category/<?php echo $row['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2></a>
        <a href="/category/<?php echo $row['slug']; ?>/" class="manrope is-size-6 f-700 grey-c">ALL ARTICLES</a> 
      </div>
    </div>
  </div>  
  
  <div class="column">
    
    <div class="columns onerow is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
    
      <?php
      $cc = 0;
      $rowposts = get_posts( 
      array('numberposts' => 5, 
            'category_name' => $row['slug'], 
            'no_found_rows' => true, 
            'post_status' =>'publish',
            'post_type'   => array('post', 'printed_post'),
            'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))
      ));
      foreach($rowposts as $post) : setup_postdata($post); $cc++;
      if($cc == 1) {
      $colsize = 'is-4-desktop is-full-small is-half-tablet is-half-mobile';
      $varsize = 'is-size-3-desktop is-size-3-tablet is-size-3-mobile zonabold';
      } elseif($cc == 2) {
      $colsize = 'is-2-desktop is-half-small is-half-tablet is-half-mobile';
      $varsize = 'is-size-3-desktop is-size-3-tablet is-size-4-mobile zonabold';
      } else {
      $colsize = 'is-2-desktop is-4-mobile is-4-tablet is-half-small';
      $varsize = 'is-size-3-desktop is-size-3-tablet is-size-4-mobile zonabold';
      }
      ?>
      <div class="column <?php echo $colsize; ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>    
    
  </div>
  
  </div> 
  
</div>