<div class="wrap-article-header">
  <div class="columns">
    <div class="column is-narrow is-hidden-touch">
      <div class="half-width">
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
    </div>
    <div class="column">
      <header class="article-header">
          
        <?php if($curwsj === 'the wall street journal') { ?>
          <div class="wrap-post-category is-hidden-desktop">
            <a style="max-width: 190px;margin-bottom: 10px" href="/category/wsj/" class="parent-category is-block">
            <img style="max-width:100%;height:auto" width="225" height="19" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/WSJSection.png" alt="wsj" />
            </a>
          </div>
        <?php } ?>
          
        <h1 class="f-400 post-title zonaultra is-size-1-desktop is-size-2-mobile is-size-2-tablet">
          <?php the_title(); ?>
        </h1>
        <h2 class="post-summary zonabold is-visible-small">
          <?php echo get_the_excerpt(); ?>
        </h2>
      </header>
    </div>
  </div>
</div>