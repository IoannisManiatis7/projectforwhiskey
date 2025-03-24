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
  
  <?php $args = array('numberposts' => 2, 'category_name' => $row['slug'], 'no_found_rows' => true, 'post_status' =>'publish', 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP ))); $rowposts = get_posts( $args ); ?>  
  
  <div class="column">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
    <?php
    $cc = 0;
    foreach($rowposts as $post) : setup_postdata($post); $cc++;
    $extraclass = null;
    $varsize = 'is-size-3 is-size-3-1-mobile zonabold'; 
    ?>
    <div class="column is-half-tablet is-full-small">
      
      <div class="columns rowbox-box is-flex-direction-row-reverse">
  <div class="column is-relative is-8">
    <a href="<?php the_permalink(); ?>" class="wrap-thumb">
    <div class="double__imgage">
      <?php if(is_home() || is_page('print')) { ?>
      <figure class="thumb-holder laptop-only">
      <?php if ( has_post_thumbnail() ) { ?>    
      <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
      <?php } else { ?>
      <img width="500" height="333" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
      <?php } ?>
      </figure>
      <?php } ?>
      
      <figure class="thumb-holder hide-laptop">
      <?php if ( has_post_thumbnail() ) { ?>    
      <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
      <?php } else { ?>
      <img width="500" height="333" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
      <?php } ?>
      </figure>
    </div>
    </a>
  </div>
  <div class="column is-relative is-4">
    <div class="inner-col-row">
      <a href="<?php the_permalink(); ?>" class="is-block">
        <h3 class="o-head f-400 my-0 zonabold <?php if(is_home()) {echo 'is-size-2 is-size-3-1-mobile' ; } else {echo 'is-size-4-desktop is-size-4-tablet is-size-4-mobile'; } ?>">
          <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
        </h3>
      </a>
    </div>
  </div>        
  </div>      
      
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>

</div>