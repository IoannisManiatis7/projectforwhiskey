<a href="<?php the_permalink(); ?>" class="columns is-mobile rowbox-box">
  <div class="column is-relative <?php if(is_home()) { echo 'is-4'; } ?>">
    <div class="inner-col-row">
      <h3 class="o-head f-400 my-0 zonabold <?php if(is_home()) {echo 'is-size-2 is-size-3-1-mobile' ; } else {echo 'is-size-4-desktop is-size-4-tablet is-size-4-mobile'; } ?>">
        <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
      </h3>
    </div>
  </div>
  <div class="column is-relative <?php if(is_home()) { echo 'is-8'; } else { echo 'is-narrow'; } ?>">
    <div class="<?php if(is_home()) { echo 'double__imgage'; } else { echo 'block-item'; } ?>">
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
  </div>
</a>