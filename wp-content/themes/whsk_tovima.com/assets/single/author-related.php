<?php
  global $post;
  $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all"));
?>

<?php 
//var_dump($category);
$authorposts = get_posts( 
array(
'numberposts' => 4, 
'no_found_rows' => true, 
'post_type' => array('post', 'printed_post'),
'post__not_in' => array($post->ID), 
'post_status' =>'publish',
'tax_query' => array(
  array(
  'taxonomy' => 'nea_authors',
  'field' => 'slug',
  'terms' => $term_list[0]->slug,
  )
),
'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
)); 
$countposts = count($authorposts);
?>


<section class="inner-section posts-from-category">
  <div class="inner-section-flex">
  <div class="wrap-inner-header">
    <header class="">
      <a href="/editor/<?php echo $term_list[0]->slug ?>">
      <h4 class="header-section zonaultra f-400 uppercase">
      <?php echo $term_list[0]->name; ?>        
      </h4>
      </a>
      <a href="/editor/<?php echo $term_list[0]->slug ?>" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
    </header>
  </div>
  <div class="wrap-inner-columns">
  <div class="columns is-mobile onerow is-variable is-4-desktop is-multiline">
    <?php 
    foreach($authorposts as $post) : setup_postdata($post);
    $varsize = 'is-size-3 zonabold'; ?>
    <div class="column is-3-desktop is-half-tablet is-half-mobile is-full-small">
      <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>
  </div>
</section>