  <?php
  $cc = 0;
  $mustreadposts = get_posts( 
  array(
    'numberposts' => 1, 
    'no_found_rows' => true, 
    'post_status' =>'publish',
    'date_query' => array( array( 'after'  => WHSK_DATE_QUERY)),    
    'tax_query' => array(
    array(
      'taxonomy' => 'nea_authors',
      'field' => 'slug',
      'terms' => 'vimatodotis',
    )
    ),    
    'post_type' => array('post', 'printed_post'),
  ));
  foreach($mustreadposts as $post) : setup_postdata($post); $cc++; ?>
  <a class="is-relative vimatodotis-widget is-block" href="<?php the_permalink(); ?>">
    <span class="border-1"></span>
    <span class="border-2"></span>
    <?php // the_post_thumbnail('large', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
    <div class="vimatodotis-inner is-relative">
      <div class="columns is-multiline level">
        <div class="column is-8">
          <div class="wrap-vimatodotis-header">
        <div class="vimatodotis-logo">
         <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimatodotis_Logo.svg" alt="vimatodotis" width="172" height="25" loading="lazy" />
        </div>
        <h3 class="white-c o-head zonabold f-400"><?php the_title(); ?></h3>
        <span class="call-action">ΔΙΑΒΑΣΕ ΤΟ</span>
        </div>
        </div>
        <div class="column is-4 is-hidden-touch">
          <figure class="thumb-holder">
            <?php the_post_thumbnail('large', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
          </figure>
        </div>
      </div>
    </div>
  </a>
<?php endforeach; wp_reset_postdata(); ?>