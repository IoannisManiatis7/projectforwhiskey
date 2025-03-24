<div class="googlenews">
  Follow tovima.com on <a target="_blank" href="https://news.google.com/publications/CAAqBwgKMI_6ggswkoKOAw">Google News</a> to keep up with the <a href="/latest-news/">latest stories</a>
</div>

<?php
    $chosen = 0;
    $chosen_lead = get_field('chosen_posts', false, false); 
    if ($chosen_lead):
    $bon_count = count(get_field('chosen_posts'));
    if ($bon_count >= 2) { ?>
    <div class="vima-box single__related">    
    <header class="vima-box-header">
      <h4 class="vimabox-tile manrope is-size-4 f-600">Related Articles</h4>  
    </header>
    <?php foreach ($chosen_lead as $post): $chosen++; ?>
    <div class="row-post <?php if($chosen == 1) {echo 'is-hidden-desktop'; } ?>">
      <a href="<?php the_permalink(); ?>" class="columns rowbow-box is-mobile">
        <div class="column is-relative is-7-touch">
          <div class="inner-col-row">
            <h3 class="o-head f-400 my-0 is-size-3-desktop is-size-4-touch zonabold"><?php the_title(); ?></h3>
            <time class="mt-5 line-height-1 post-date updated manrope is-size-5 grey-c" datetime="<?php the_time('d-m-Y'); ?>"><?php the_time('d.m.Y'); ?>, <?php the_time('H:i'); ?></time>
          </div>
        </div>
        <div class="column is-narrow-desktop is-5-touch">
          <div class="half-width mobile-100">
            <figure class="thumb-holder">
              <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
            </figure>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
    </div>
    <?php } endif; wp_reset_postdata(); ?>