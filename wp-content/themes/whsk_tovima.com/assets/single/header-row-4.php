<div class="wrap-article-header art--03">
  <div class="columns is-multiline">
  <div class="column is-full is-relative">
    <figure class="article-image thumb-holder">
      <?php if ( has_post_thumbnail() ) { ?>
      <?php the_post_thumbnail('full', array( 'alt' => get_the_title(), 'class' => 'imagefit no-lazy')); ?>
      <?php } else { ?>
      <img width="1024" height="600" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/vima-def-f.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
      <?php } ?>
    </figure>    
    <header class="article-header">
      <div class="columns is-mobile is-multiline">
      <div class="column is-hidden-touch is-4-desktop is-narrow-desktop is-full-tablet is-full-mobile is-hidden-small">
        <div class="sidebar-width">
          <?php include(TEMPLATEPATH .'/assets/single/post-meta.php'); ?>
        </div>
      </div>
      <div class="column is-8-desktop is-full-tablet is-full-mobile ">
        <h1 class="f-400 post-title zonaultra is-size-0 is-size-2-mobile is-size-2-tablet"><?php the_title(); ?></h1>
      </div>
      </div>
    </header>
  </div>
    
  <?php $get_description = get_post(get_post_thumbnail_id())->post_excerpt; ?>
  <?php if(!empty($get_description)) { ?> 
  <div class="column is-full">
    <div class="featured_caption templ5050"><?php echo $get_description; ?></div>
  </div>
  <?php } ?>
    
  <div class="column is-full">
    <div class="wrap-art-3-summ">
    <h2 class="post-summary zonareg"><?php echo get_the_excerpt(); ?></h2>
    </div>
  </div>  
    
  </div>
</div>