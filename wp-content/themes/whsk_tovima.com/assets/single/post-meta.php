<div class="post-meta-wrap-r post-meta">
  <div class="post-meta-r2">
    <time class="line-height-1 post-date manrope" datetime="<?php the_time('d-m-Y'); ?>"><?php the_time('d.m.Y'); ?></time>
    <time class="line-height-1 post-date manrope lightgrey-c"><?php the_time('H:i'); ?></time>
  </div>
  <div class="post-meta-r1">
    <div class="is-hidden-desktop">
      <div class="wrap-post-category">
        <?php echo post_taxonomy(); ?>
      </div>
    </div>
    <?php // if (!in_category('opinions')) {
      include(TEMPLATEPATH.'/assets/repeaters/author.php');
    // } ?>
  </div>
    
    <div class="is-hidden-touch">
        <?php include(TEMPLATEPATH.'/assets/single/social.php'); ?>
    </div>
</div>