      <div class="wrap-article-header art--02">
        <div class="columns is-multiline">
        <div class="column is-full has-text-centered">
            <div class="wrap-post-category">
                <?php $curwsj = strtolower(strip_tags(post_taxonomy())); ?>
                <?php if($curwsj === 'the wall street journal') { ?>
                <a href="/category/wsj/" class="parent-category is-block">
                    <img style="max-width:100%;height:auto" width="225" height="19" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/WSJSection.png" alt="wsj" />
                </a>
                <?php } else { ?>
                <?php echo post_taxonomy(); ?>
                <?php } ?>
            </div>
        </div>
        <div class="column is-full has-text-centered">
          <header class="article-header">
            <?php if($curwsj === 'the wall street journal') { ?>
              <div class="wrap-post-category is-hidden-desktop">
                <a style="max-width: 190px;margin-bottom: 10px" href="/category/wsj/" class="parent-category is-block">
                <img style="max-width:100%;height:auto" width="225" height="19" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/WSJSection.png" alt="wsj" />
                </a>
              </div>
            <?php } ?>
            <h1 class="f-400 post-title zonaultra is-size-0 is-size-2-mobile is-size-2-tablet"><?php the_title(); ?></h1>
            <h2 class="post-summary zonabold">
              <?php echo get_the_excerpt(); ?>
            </h2>
          </header>
        </div>
        <div class="column is-full">
          
        <?php if(get_field('postvideo_url')) { ?>  
        <div class="videoWrap">
        <div class="wrap_videobox">
          <?php include(get_template_directory() .'/assets/single/videobox.php'); ?>
        </div>
        </div>
        <?php } else { ?>
        <figure class="article-image thumb-holder">
          <?php if ( has_post_thumbnail() ) { ?>
          <?php the_post_thumbnail('full', array( 'alt' => get_the_title(), 'class' => 'imagefit no-lazy')); ?>
          <?php } else { ?>
          <img width="1024" height="600" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/vima-def-f.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
          <?php } ?>
        </figure>
        <?php } ?>
          
        </div>
        </div>
      </div>

<?php if(get_field('postvideo_url')) { ?>  
<style>
:root {  
--plyr-color-main:rgba(25, 25, 25, 0.6);
--plyr-range-fill-background:#ffba59
/* --plyr-color-main:#ffba59 */
 }
.plyr--full-ui button:hover svg {fill:#ffba59}
.plyr__poster {background-size: cover}
.videoWrap .plyr__control--overlaid {
    border: 4px solid #fff;
}
@media screen and (min-width:1280px) {
.videoWrap .plyr--full-ui.plyr--video .plyr__control--overlaid {padding: 25px}
.videoWrap .plyr__control--overlaid svg {fill: #FFFFFF;width: 30px;height: 30px}
}  
</style>
<?php } ?>
