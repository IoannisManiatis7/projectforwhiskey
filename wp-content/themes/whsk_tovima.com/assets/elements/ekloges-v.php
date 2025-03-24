<div class="vima-box sidebar-widget latest-opinions">

  <header class="vima-box-header">
    <ul class="vima-header-tabs">
      <li class="tab-i-x activeTab" onclick="openx(event, 'v-ekloges')"><h2 class="vimabox-tile zonaultra">ΕΚΛΟΓΕΣ 2023</h2></li>
      <li class="tab-i-x" onclick="openx(event, 'v-gnones')"><h2 class="vimabox-tile zonaultra">ΓΝΩΜΕΣ</h2></li>
    </ul>
  </header>
  <div id="v-ekloges" class="tabcontent">
  <?php
  $cc = 0;
  $mustreadposts = get_posts( 
  array(
    'numberposts' => 5, 
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
  
  <a href="/latest-news/" class="call-action-button yellow-button">ΠΕΡΙΣΣΟΤΕΡΕΣ ΕΙΔΗΣΕΙΣ</a>    
  </div>
  <div id="v-gnones" class="tabcontent" style="display:none;">
  
  <?php
  $cc = 0;
  $args = array( 
    'category_name' => 'opinions', 'tag' => 'ekloges-2023', 'no_found_rows' => true, 'post_status' =>'publish', 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
  );
  $args['post_type'] = array('post', 'printed_post');
  $args['numberposts'] = 4;
  $gnomesmore = get_posts( $args );
  foreach($gnomesmore as $post) : setup_postdata($post); $cc++; 
  $varsize = 'is-size-3-1 is-size-4-mobile zonaregular'; ?>
  
  <div class="simple-row <?php if(get_field('locked_article')) {echo 'locked_article'; } ?>">
    
    <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
    <?php if ($term_list) { 
    $author_image = get_field('author-image', 'nea_authors_' . $term_list[0]->term_id . ''); ?>
    <a href="/editor/<?php echo $term_list[0]->slug; ?>">
    <author class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
      <?php echo $term_list[0]->name; ?>
    </author>
    </a>
    <?php } ?>
    
    <a class="<?php if($author_image) { echo 'resize-link'; } ?>" href="<?php the_permalink(); ?>">
      <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
        <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
      </h3>
    </a>
    
    <?php if($author_image) { ?>
      <div class="is-relative author_image overlay">
        <img loading="lazy" src="<?php echo $author_image; ?>" width="150" height="150" alt="<?php echo $term_list[0]->name; ?>" />
      </div>
    <?php } ?>
    
  </div>
  
  <?php endforeach; wp_reset_postdata(); ?>
  <div class="wra-call-action">
    <a href="/category/opinions/" class="call-action-button yellow-button">ΠΕΡΙΣΣΟΤΕΡΕΣ ΓΝΩΜΕΣ</a>  
  </div>
  
</div>
  
</div>