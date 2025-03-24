<div class="is-relative <?php if(isset($extraclass)) { echo $extraclass; } else { echo ' relative-box'; } ?>  <?php $curwsj = strtolower(strip_tags(post_taxonomy())); if($curwsj === 'the wall street journal') { echo 'wsj_article'; } ?>">
  <div href="<?php the_permalink(); ?>"  class="wrap-thumb">
  <?php 
  $imgmeta = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); 
  $vimage = get_field('vertical_image'); ?>
    
  <?php if ( has_post_thumbnail() ) { ?>
  <figure style="<?php if(get_field('postvideo_url')) { echo 'padding-bottom: 56.25%;'; } ?> background-color:#EEE" class="<?php if(in_category('videos')) {echo 'video-figure'; } ?> tile-image thumb-holder <?php if ($imgmeta['2'] > $imgmeta['1']) { echo 'vertical-thumb'; } ?>">
    <?php if(
    is_category() && $cc == 1 ||
    isset($row['layout']) && ($row['layout'] == 'normal' && $cc == 1) ||
    isset($row['layout']) && ($row['layout'] == 's-normal' && $cc == 1) ||
    isset($row['layout']) && ($row['layout'] == 'ex-normal' && $cc == 1) ||
    isset($row['layout']) && ($row['layout'] == 'ft-1' && $cc == 1) ||
    isset($row['layout']) && ($row['layout'] == 'entipo' && $cc == 1) ||
    isset($row['layout']) && ($row['layout'] == 'vimagazino') ||
    isset($row['layout']) && ($row['layout'] == 'top' && $cc == 8) ||
    isset($row['layout']) && ($row['layout'] == 'top' && $cc == 13) ||
    isset($row['layout']) && ($row['layout'] === 'carou-videos')) {
//     isset($row['layout']) && ($row['layout'] == 'top' && $cc == 1)) { ?>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('large', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
    </a>
    
   <?php } elseif( isset($row['layout']) && ($row['layout'] == 'top' && $cc == 1)) { ?>
    
      <?php if(get_field('postvideo_url')) { ?>
      <div class="wrap_videobox">
        <?php include(get_template_directory() .'/assets/single/videobox.php'); ?>
      </div>
      <?php } else { ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('large', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
      </a>
      <?php } ?>
    
    <?php } else { ?>
      <a href="<?php the_permalink(); ?>">    
      <?php the_post_thumbnail('large', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
    </a>
    <?php } ?>
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

      <?php if(isset($row['layout']) && $row['layout'] === 'carou-videos') { ?>
      <?php if(get_field('hypertext')) { ?>
      <div class="wrap-vinieta">
      <span class="vinieta-i"><?php echo get_field('hypertext'); ?></span>
      </div>
      <?php } } ?>    

    <a href="<?php the_permalink(); ?>" class="is-block">
      <?php $curwsj = strtolower(strip_tags(post_taxonomy())); ?>
      <?php if($curwsj === 'the wall street journal') { ?>
      <div class="add-wsj">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/WSJ.png" alt="wsj" width="60" height="34" loading="lazy" />
      </div>
      <?php } ?>
      <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
        <?php if(is_home() && (isset($row['layout']) && $row['layout'] == 'top' && $cc == 1)) { ?>
        <span><?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?></span>
        <?php } else { ?>
        <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
        <?php } ?>
      </h3>
    </a>
    </div>
    <div class="wrap-post-desc">
    <p class="is-size-normal post-description text-ellipsis text-ellipsis-4">
      <?php if(get_field('front_lead')) { echo strip_tags(get_field('front_lead')); } elseif(has_excerpt()) { echo get_the_excerpt(); } ?>
    </p>
    </div>
  </div>
  <div class="post-meta-wrapper">
    
    <?php if( (is_category() || is_page('latest-news'))  && $cc == 1) { ?>
      <p class="post-description text-ellipsis text-ellipsis-4">
        <?php echo get_the_excerpt(); ?>
      </p>
    <?php } ?>
    
    <?php if(!is_category()) { ?>
      <span class="post-category manrope is-size-5 f-600"><?php echo strip_tags(post_taxonomy()); ?></span>
    <?php  } ?>
     <?php // echo strip_tags(wpse_first_tag()); ?>
    <?php // } ?>
    
    <div class="post-meta">
      <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
      <?php if(get_field('exauthor_textn')) { ?>
      <span class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
        <?php echo get_field('exauthor_textn'); ?>
      </span>
      <?php } else { ?>
      <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
      <?php } ?>
    </div>
  </div>
    
    <?php if(is_home() && $rxtr == true) { ?>
    <?php $innerposts = get_field('chosen_posts'); ?>
    <?php $in = 0; foreach ($innerposts as $p) { $in++; ?>
    <?php if($in > 1) continue; ?>
    <div class="rxtr">
      <a href="<?php echo get_the_permalink($p->ID); ?>" class="is-block">
        <h3 class="o-head f-400 my-0 is-size-3">
          <?php echo get_the_title($p->ID); ?>
        </h3>
      </a>
    </div>
    <?php } } ?>
    
  </div>
</div>