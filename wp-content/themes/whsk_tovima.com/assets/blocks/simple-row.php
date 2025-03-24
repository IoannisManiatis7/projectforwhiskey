<div class="simple-row">
  <a class="header-link is-block" href="<?php the_permalink(); ?>">
    <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
      <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
    </h3>
  </a>
  <div class="post-meta-wrapper">
    <div class="post-meta">
    <?php /*
    <span class="post-category manrope is-size-5 f-600"><?php echo strip_tags(post_taxonomy()); ?></span>
    */ ?>
    <?php // echo strip_tags(wpse_first_tag()); ?>
    <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
    <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
    </div>
  </div>
</div>