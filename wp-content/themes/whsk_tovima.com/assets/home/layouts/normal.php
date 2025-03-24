<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-6 general-title-col">
        <div class="wrap-header-section">
          <div class="wrap-section-t">  
          <a href="/category/<?php echo $row['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2></a>
          <?php /* if($row['slug'] === 'finance') { ?>
            <a href="https://www.ot.gr" target="_blank" class="powered">powered by <img src="/wp-content/themes/whsk_tovima.com/common/imgs/ot-96.png" width="96" height="96" loading="lazy" /></a>
          <?php } */ ?>
          </div>
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
        <div class="wrap-section-t">  
        <a href="/category/<?php echo $row['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2></a>
          <?php /* if($row['slug'] === 'finance') { ?>
            <a href="https://www.ot.gr" target="_blank" class="powered">powered by <img src="/wp-content/themes/whsk_tovima.com/common/imgs/ot-96.png" width="96" height="96" loading="lazy" /></a>
          <?php } */ ?>
        </div>
        <a href="/category/<?php echo $row['slug']; ?>/" class="manrope is-size-6 f-700 grey-c"><?php echo READMORE; ?></a> 
      </div>
    </div>
  </div>
  
<?php
  $args = array('numberposts' => 20, 'category_name' => $row['slug'], 'no_found_rows' => true, 'post_status' =>'publish', 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP )));
  $rowposts = get_posts( $args );
?>
  
  <div class="column">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
    <div class="column is-full-touch">
    <div class="columns onerow is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
      <?php
      $cc = 0;
      $rowposts_a = array_slice($rowposts, 0, 4);
      foreach($rowposts_a as $post) : setup_postdata($post); $cc++;
      $extraclass = null;
      if($cc == 1) {
      $extraclass = 'flex-article reverse-row';
      $varsize = 'is-size-1 zonaultra'; 
      } else {
      $varsize = 'is-size-3-desktop is-size-3-1-mobile is-size-3-tablet zonabold'; 
      }
      ?>
      <div class="column <?php if($cc == 1) {echo 'is-full'; } else {echo 'is-4-desktop is-4-tablet is-4-mobile is-full-small'; } ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
      </div>
      
      <?php if($cc === 1 || $cc === 4) { ?>
        <div class="column is-full separator-horizontal-row">
          <sep></sep>  
        </div>
      <?php } ?>
      
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    </div>
    <div class="column is-narrow-desktop is-full-touch">
    <div class="sidebar-width">
      <?php if(is_page('print') && $row['slug'] == 'nees-epoxes') { ?>
      <?php include(TEMPLATEPATH .'/assets/elements/gnomes-v.php'); ?>
      <?php } else { ?>
      <ul class="home-cat-latest row-items">
      <?php 
      $ii = 0;  
  /*
      $args = array(
        'numberposts' => 5, 
        'category_name' => $row['slug'], 'no_found_rows' => true, 
        'post_status' =>'publish',
        'offset' => 4,
        'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
      );
      if(is_home()) {
        $args['post_type'] = array('post', 'printed_post');
      //   $args['meta_query'] = array(
      //     'relation' => 'OR',
      //     array(
      //       'key'   => 'locked_article',
      //       'compare'   => 'NOT EXISTS',
      //     ),          
      //     array(
      //       'key'   => 'locked_article',
      //       'value' => false,
      //       'type' => 'BOOLEAN',
      //     )
      // );
      } elseif(is_page('print')) {
        $args['post_type'] = array('printed_post');
      }
      $latestrowposts = get_posts( $args );
  */
      $rowposts_b = array_slice($rowposts, 4, 3);
      foreach($rowposts_b as $post) : setup_postdata($post); $ii++;
      $varsize = 'is-size-3-desktop is-size-3-1-mobile is-size-3-tablet zonaregular'; ?>
      <?php if($ii == 1) { ?>
      <li class="row-item rt_<?php echo $ii ; ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
      </li>        
      <?php } else { ?>
      <li class="row-item rt_<?php echo $ii ; ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/simple-row.php'); ?>
      </li>
      <?php } ?>
      <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php } ?>
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