<div id="WrapLatest" class="vima-box sidebar-widget latest-news">

  <header class="vima-box-header">
    <a href="/latest-news/">
      <h2 class="vimabox-tile zonaultra">ΤΕΛΕΥΤΑΙΕΣ ΕΙΔΗΣΕΙΣ</h2>
    </a>
  </header>
  <?php
  $cc = 0;
  $mustreadposts = get_posts( 
  array(
    'numberposts' => 8, 
    'no_found_rows' => true, 'post_status' =>'publish',
    'post_type' => array('post', 'printed_post'),
    'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
  ));
  foreach($mustreadposts as $post) : setup_postdata($post); $cc++; ?>
  
  <div class="simple-row <?php if(get_field('locked_article')) {echo 'locked_article'; } ?>">
    <a href="<?php the_permalink(); ?>">
      <h3 class="o-head f-400 mt-0 mb-3 is-size-4-desktop is-size-4-tablet is-size-4-mobile zonaregular"><?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?></h3>
    </a>
   <span class="post-category manrope is-size-5 f-600"><?php echo strip_tags(post_taxonomy()); ?></span>
    
    <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
  </div>
  
  <?php endforeach; wp_reset_postdata(); ?>
  
  <a href="/latest-news/" class="call-action-button blue-button">ΠΕΡΙΣΣΟΤΕΡΕΣ ΕΙΔΗΣΕΙΣ</a>
</div>