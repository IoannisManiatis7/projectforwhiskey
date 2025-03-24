<div class="column is-full">
  <div class="break-container" style="z-index: 9;position: relative">
    <header class="post-full-layout-header">
      <div class="columns is-multiline is-gapless is-mobile full-height">
        <div class="column is-half-desktop is-half-tablet is-half-mobile is-full-small is-relative">

          <div class="full-layout-inner-header">
            <div id="burger-item" class="burger-aria">
              <div class="burger-lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <a href="/" class="main-logo is-block">
              <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" />
            </a>
          </div>
          
          <div class="full-height">
            <div class="wrap-full-inner">
              <div class="post-full-inner">
              <h1 class="post-title zonareg is-size-0 f-400 is-size-2-mobile is-size-2-tablet">
                <?php the_title(); ?>
              </h1>
              <h2 class="post-summary zonareg f-400 is-size-3">
                <?php echo get_the_excerpt(); ?>
              </h2>
            </div>
            </div>
          </div>

        </div>

        <div class="column is-half-desktop is-half-tablet is-half-mobile is-full-small">
          <figure class="article-image">
            <?php 
            $vimage = get_field('vertical_image');
            if($vimage) { ?>    
            <img class="imagefit no-lazy" alt="<?php the_title(); ?>" src="<?php echo esc_url($vimage['url']); ?>" width="<?php echo esc_attr($vimage['width']); ?>" height="<?php echo esc_attr($vimage['height']); ?>" />
            <?php } elseif ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail('full', array( 'alt' => get_the_title(), 'class' => 'imagefit no-lazy')); ?>
            <?php } else { ?>
            <img width="1024" height="600" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/vima-def-f.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
            <?php } ?>
          </figure>
        </div>

        <?php $get_description = get_post(get_post_thumbnail_id())->post_excerpt; ?>
        <?php if(!empty($get_description)) { ?> 
        <div class="column is-full">
          <div class="featured_caption templ5050"><?php echo $get_description; ?></div>
        </div>
        <?php } ?>
        
      </div>
    </header>
  </div>
</div>