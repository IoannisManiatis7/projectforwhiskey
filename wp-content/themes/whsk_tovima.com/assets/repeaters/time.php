<?php if(get_field('locked_article')) { ?>
<div class="locked_article_row">
  <img src="/wp-content/themes/whsk_tovima.com/common/imgs/lock.svg" alt="lock" loading="lazy" width="10" height="11" />
  <span class="manrope is-size-5 semigrey-c">Έντυπη έκδοση</span>
</div>
<?php } else {
$currentdate = strtotime(date("Y-m-d H:i:s", strtotime('-2 Hours ')));
$currentdatem = strtotime(date("Y-m-d H:i:s", strtotime('+2 Hours - 10 min')));  
$post_time = strtotime(get_the_time('Y-m-d H:i:s'));
if( $currentdate < $post_time) { ?>
<span class="line-height-1 mr-3 post-date updated manrope is-size-5 semigrey-c" <?php if($currentdatem < $post_time) {echo 'style="color:#CC0000"'; }?>><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
<?php  } ?>
<?php /*
<time class="line-height-1 mr-3 post-date updated manrope is-size-5 semigrey-c"><?php the_time('d.m.Y'); ?>, <?php the_time('H:i'); ?></time>
*/ ?>
<?php } ?>