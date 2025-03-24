<a href="<?php the_permalink(); ?>" 
   data-link-name="article"
   class="is-relative <?php if(get_field('locked_article')) {echo 'locked_article '; } if(isset($extraclass)) { echo $extraclass; } else { echo ' relative-box'; } ?>">
  <div class="wrap-thumb">
  <?php 
  $imgmeta = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); 
  $vimage = get_field('vertical_image'); ?>
    
  <?php if($vimage) { ?>    
  <figure style="background-color:#EEE" class="tile-image thumb-holder">
    <img loading="lazy" class="imagefit" alt="<?php the_title(); ?>" src="<?php echo esc_url($vimage['url']); ?>" width="<?php echo esc_attr($vimage['width']); ?>" height="<?php echo esc_attr($vimage['height']); ?>" />
  </figure>
  <?php } elseif ( has_post_thumbnail() ) { ?>
  <figure style="background-color:#EEE" class="tile-image thumb-holder <?php if ($imgmeta['2'] > $imgmeta['1']) { echo 'vertical-thumb'; } ?>">
  <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
  </figure>
  <?php } else { ?>
  <figure style="background-color:#EEE" class="tile-image thumb-holder">
  <img width="500" height="333" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
  </figure>
  <?php } ?>
  </div>
  <div class="tile-content">
  <div class="wrap-main-tile-content">
    <div class="wrap-ohead">
    <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
      <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
    </h3>
    </div>
    
      <p class="post-description text-ellipsis text-ellipsis-4">
        <?php 
       if(get_field('front_lead')) { 
         echo strip_tags(get_field('front_lead'));
      } elseif(has_excerpt()) { 
         echo get_the_excerpt();
       } ?>
      </p>
    
  </div>
  <div class="post-meta-wrapper">  
    
    <?php if(!is_category()) { ?>
      <span class="post-category manrope is-size-5 f-600"><?php echo strip_tags(post_taxonomy()); ?></span>
    <?php } ?>
    
    <div class="post-meta">
      <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
      <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
    </div>
  </div>
    
  </div>
</a>