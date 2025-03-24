<div class="simple-row <?php $curwsj = strtolower(strip_tags(post_taxonomy())); if($curwsj === 'the wall street journal') { echo 'wsj_article'; } ?>">
  <a class="columns is-mobile is-multiline" href="<?php the_permalink(); ?>">
    
    <div class="column is-2-desktop is-2-tablet is-2-mobile is-full-small">
      <time class="line-height-1 mr-3 post-date updated manrope is-size-5 semigrey-c">
        <?php the_time('m.d.Y'); ?>, <?php the_time('H:i'); ?>
      </time>   
    </div>
    
    <div class="column is-6-desktop is-6-tablet is-6-mobile is-full-small">
      <div class="wrap-row-header-n-desk">
      <div class="is-block">
        <?php if($curwsj === 'the wall street journal') { ?>
        <div class="add-wsj">
          <img src="/wp-content/themes/whsk_tovima.com/common/imgs/WSJ.png" alt="wsj" width="60" height="34" loading="lazy" />
        </div>
        <?php } ?>
        <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
          <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
        </h3>
      </div>
      <p class="is-size-normal mb-0 mt-4 text-ellipsis text-ellipsis-4 grey-c line-height-1-3">
        <?php echo get_the_excerpt(); ?>
      </p>

      <div class="pt-4 category-row-footer">
      <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
      </div>
      </div>
    </div>
    
    <div class="column is-4-desktop is-4-tablet is-4-mobile is-full-small">
    <div class="wrap-thumb">
      <?php
      $imgmeta = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );  ?>
      <?php if ( has_post_thumbnail() ) { ?>
      <figure style="--background:#EEE" class="tile-image thumb-holder <?php if ($imgmeta['2'] > $imgmeta['1']) { echo 'vertical-thumb'; } ?>">
      <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
      </figure>
      <?php } else { ?>
      <figure class="tile-image thumb-holder">
      <img width="500" height="333" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
      </figure>
      <?php } ?>
    </div>
    </div>
    
  </a>
</div>