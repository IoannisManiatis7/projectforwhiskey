<div class="vima-box sidebar-widget gnomes-widget">

  <header class="vima-box-header">
    <a href="/category/opinions">
    <h4 class="vimabox-tile manrope is-size-normal f-700">More Opinions</h4>
    </a>
  </header>
  <?php
  $cc = 0;
  $gnomesmore = get_posts( 
  array('numberposts' => 4, 
        'category_name' => 'opinions', 'no_found_rows' => true, 
        'post__not_in' => array($post->ID), 'post_status' =>'publish',
        'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
  ));
  foreach($gnomesmore as $post) : setup_postdata($post); $cc++; 
  $varsize = 'is-size-4 zonabold'; ?>
  <div class="gnomes-row-post">
    
  <div class="simple-row <?php if(get_field('locked_article')) {echo 'locked_article'; } ?>">
    <a href="<?php the_permalink(); ?>">
      <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
        <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
      </h3>
    </a>
    <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
    <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
    <?php if ($term_list) { 
    $author_image = get_field('author-image', 'nea_authors_' . $term_list[0]->term_id . ''); ?>
    <a class="is-block mt-3 author-link" href="/editor/<?php echo $term_list[0]->slug; ?>">
    <author class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
      <?php echo $term_list[0]->name; ?>
    </author>
    </a>
    <?php } ?>
  </div>
    
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
</div>