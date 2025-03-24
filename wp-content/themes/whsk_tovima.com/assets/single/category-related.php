<?php
  global $post;
  $category = get_the_category($post->ID);
  $category_id = $category[0]->term_id;
  $category_name = $category[0]->slug;
  $category_title = $category[0]->name;
?>

<section class="inner-section posts-from-category">
  <div class="inner-section-flex">
  <div class="wrap-inner-header">
    <header class="">
      <a href="/category/<?php echo $category_name; ?>">
      <h4 class="header-section zonaultra f-400 uppercase"><?php echo $category_title; ?></h4>
      </a>
      <a href="/category/<?php echo $category_name; ?>" class="manrope is-size-6 f-700 grey-c"><?php echo READMORE; ?></a>
    </header>
  </div>
  <div class="wrap-inner-columns">
  <div class="columns is-mobile onerow is-variable is-4-desktop is-multiline">
    <?php 
    //var_dump($category);
    $relatedposts = get_posts( 
    array('numberposts' => 4,  'cat' => $category_id, 
    'no_found_rows' => true, 'post__not_in' => array($post->ID), 'post_status' =>'publish',
    'post_type' => array('post', 'printed_post'),
    'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
    ));
    foreach($relatedposts as $post) : setup_postdata($post);
    $varsize = 'is-size-3 zonabold'; ?>
    <div class="column is-3-desktop is-half-tablet is-half-mobile is-full-small">
      <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div> 
    
  </div>
</section>