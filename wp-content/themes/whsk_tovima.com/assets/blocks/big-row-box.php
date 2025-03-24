<a href="<?php the_permalink(); ?>" class="columns is-mobile rowbox-box">
  <div class="column is-relative">
    <div class="inner-col-row">
      <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>"><?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?></h3>
      
      <div class="post-meta-wrapper">
      <span class="post-category manrope is-size-5 f-600"><?php echo strip_tags(post_taxonomy()); ?></span>
      <?php // echo strip_tags(wpse_first_tag()); ?>
      <div class="post-meta">
        <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
        <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
      </div>
      </div>
      
    </div>
  </div>
  <div class="column is-narrow">
    <div class="half-width">
      <figure class="thumb-holder bigger-ratio">
      <?php if ( has_post_thumbnail() ) { ?>    
      <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
      <?php } else { ?>
      <img width="500" height="333" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
      <?php } ?>
      </figure>
    </div>
  </div>
</a>