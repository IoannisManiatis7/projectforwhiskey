<div id="Gnomes" class="vima-box sidebar-widget latest-opinions">

  <header class="vima-box-header">
    <a href="/category/opinions/">
      <h2 class="vimabox-tile zonaultra">ΓΝΩΜΕΣ</h2>
    </a>
  </header>
  
  <?php
  $cc = 0;
  // $args = array(
  //       'category_name' => 'opinions',
  //       'no_found_rows' => true,
  //       'post_status' =>'publish',
  //       'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
  // );
  // if(is_home()) {
  //   $args['post_type'] = array('post', 'printed_post');
  //   $args['numberposts'] = 8;
  // } elseif(is_page('print')) {
  //   $args['numberposts'] = 6;
  //   $args['post_type'] = array('printed_post');
  // }
  $gnomesmore = get_field('box5_selection','tovima_opinions');
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
    <a href="/category/opinions/" class="call-action-button blue-button">ΠΕΡΙΣΣΟΤΕΡΕΣ ΓΝΩΜΕΣ</a>  
  </div>
  
</div>