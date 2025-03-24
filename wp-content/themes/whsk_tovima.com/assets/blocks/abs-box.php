<a href="<?php the_permalink(); ?><?php echo URL; ?>" data-link-name="article" class="is-relative absvideo-box">
  <div class="abs-sand">
    <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
      <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
    </h3>
  </div>
  <div class="wrap-thumb">
  <figure class="tile-image thumb-holder">
      <?php if ( has_post_thumbnail() ) { ?>    
      <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
      <?php } else { ?>
      <img width="427" height="250" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/vima-def-f-s.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
      <?php } ?>    
  </figure>
  </div>
</a>