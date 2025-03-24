<a href="<?php the_permalink(); ?>" data-link-name="article" class="<?php if(get_field('locked_article')) {echo 'locked_article'; } ?> ex-relative-box relative-box">
  <div class="tile-content py-0">
    <div class="wrap-main-tile-content">
      <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
        <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
      </h3>
      <?php /*
      <p class="is-hidden-small is-size-normal mb-0 text-ellipsis text-ellipsis-4 grey-c line-height-1-3">
        <?php
        if(get_field('front_lead')) { echo strip_tags(get_field('front_lead'));
        } elseif(has_excerpt()) { 
        echo get_the_excerpt();
        } ?>
      </p>
      */ ?>
    </div>
    <div class="post-meta-wrapper">
    <span class="post-category manrope is-size-5 f-600 py-2 grey-c"><?php echo strip_tags(post_taxonomy()); ?></span>
      <div class="post-meta">
        <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
      </div>
    </div>
  </div>
</a>