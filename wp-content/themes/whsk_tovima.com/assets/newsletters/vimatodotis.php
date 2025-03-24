<?php
$vimatodotis = get_posts( 
array('numberposts' => 1, 'category_name' => 'inbox', 'no_found_rows' => true, 'post_status' =>'publish',
//       'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
)); foreach($vimatodotis as $post) : setup_postdata($post); ?>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
  <td width="100%">
    <div class="vimatodotis-header" style="background-color:#8597BB;padding:60px 0;text-align:center;">
  <a href="/" style="display:block;margin:0 auto;line-height:0;width:90%;max-width:245px;">
    <img width="246" height="38" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimatodotis_Logo.svg" alt="Όλο το παρασκήνιο της πολιτικής στο inbox σου" style="width:100%;max-width:100%;height:auto;" />
  </a>
</div>
  </td>    
</tr>
<tr>
  <td width="100%">
    <div class="vimatodotis-header-row" style="margin-top:5px;height:12px;background-color: #8597BB;margin-bottom: 30px;"></div>
  </td>
</tr>

<tr>
  <td width="100%">
    <div class="vimatodotis-header" style="text-align:center">
  <h1 class="vimatodotis-title" style="font-weight:bold;margin:0 auto;text-align:center;"><?php the_title(); ?></h1>
  
  <?php if(has_excerpt()) { ?>
    <h2 class="vimatodotis-summary" style="font-weight:normal;text-align:center;margin: 20px auto 30px;"><?php echo get_the_excerpt(); ?></h2>
  <?php } ?>
  
  <?php if ( has_post_thumbnail() ) { ?>  
  <div class="wrap-article-image" style="position:relative;width:100%;">
  <figure class="article-image" style="width:100%;margin:0 auto;padding:0">
    <?php the_post_thumbnail('full', array( 'alt' => get_the_title(), 'class' => 'imagefit no-lazy')); ?>
  </figure>
    <?php $get_description = get_post(get_post_thumbnail_id())->post_excerpt; ?>
    <?php if(!empty($get_description)){ echo '<div class="featured_caption">' . $get_description . '</div>'; } ?>
  </div>
  <?php } ?>
  
</div>
  </td>
</tr>

<tr>
  <td width="100%">
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
  <?php foreach($vimatodotis as $post) { setup_postdata($post); $cc++; ?>
  <td width="100%" align="right" vertical-align="center" style="color: #171717;font-size: 11px;line-height:1;padding-top:8px;border-bottom: 1px solid #ccc;padding-bottom: 10px;">
    <a target="_blank" href="https://www.tovima.gr/newsletter/vimatodotis-subscription/" style="padding-right:7px;margin-right:7px;color: #171717;font-size:11px;line-height:1;text-decoration:none;border-right:1px solid #CCC">ΕΓΓΡΑΦΕΙΤΕ</a>
    <a target="_blank"  href="<?php echo get_the_permalink(); ?>" style="color: #171717;font-size:11px;line-height:1;text-decoration:none">ΔΙΑΒΑΣΤΕ</a>
  </td>
  <?php } ?>
  </tr>
  <tr>
  <td><div style="height:30px;"></div></td>
  </tr>
  </table>
  </td>
</tr>

<tr>
  <td width="100%">  
  <div style="margin:0 auto 30px;" class="vimatodotis-content">
  
<?php 
  $thirdparagraph = 3;
  $sixparagraph = 6;  
  $content = apply_filters('the_content', get_the_content());
  $content = explode("</p>", $content);
  for ($i = 0; $i <count($content); $i++) {
  if ($i == $thirdparagraph) { ?>

  <?php if(get_field('active_podcast', 'five_toproi')) { ?>
    <div class="podcast_wrapper">
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
          <td width="45px" align="left" style="vertical-align: top">
            <img alt="headset-icon" src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/headset.png" width="30" height="30" style="max-width:100%;height:auto;margin-top: 5px;" />              
          </td>
          <?php if(get_field('podcast_title', 'five_toproi')) { ?>
          <td>
            <?php if(get_field('podcast_link', 'five_toproi')) { ?>
            <a style="color:#000;text-decoration:none" href="<?php echo get_field('podcast_link', 'five_toproi'); ?>" target="_blank">
            <span class="podcast_title" style="color:#000;font-size:17px;letter-spacing: -0.34px;line-height: 24px;"><strong>Άκουσέ το: </strong><?php echo get_field('podcast_title', 'five_toproi'); ?></span>
            <?php } else { ?>
            <span class="podcast_title" style="font-size:17px;letter-spacing: -0.34px;line-height: 24px;"><strong>Άκουσέ το: </strong><?php echo get_field('podcast_title', 'five_toproi'); ?></span>
            <?php } ?>
          </td>
          <?php } ?>
          </tr>
          <?php if(get_field('podcast_image', 'five_toproi')) { ?>          
          <tr>
            <td colspan="2">
              <?php if(get_field('podcast_link', 'five_toproi')) { ?>
              <a href="<?php echo get_field('podcast_link', 'five_toproi'); ?>" target="_blank">
              <img style="max-width:100%;display: block;margin-top: 25px;" src="<?php echo get_field('podcast_image', 'five_toproi'); ?>" alt="podcast" />
              </a>
              <?php } else { ?>
              <img style="max-width:100%;display: block;margin-top: 25px;" src="<?php echo get_field('podcast_image', 'five_toproi'); ?>" alt="podcast" />
              <?php } ?>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>
  <?php } ?>
  
  <?php } elseif($i == $sixparagraph) { ?>
  
  <?php if(get_field('active_promo_1', 'five_toproi')) { ?>
  <div class="wrap-bullet_list" style="border-top: none;padding-top: 0;">
    <table cellpadding="0" cellspacing="0" border="0" style="border-top:4px solid #FFBA59;background-color:#F2F2F3;padding:20px;margin:30px auto">
          <tr>
            <td>
            <img alt="ExclamationMark" src="/wp-content/themes/whsk_tovima.com/common/imgs/ExclamationMark@2x.png" width="13" height="23" style="max-width:100%;height:auto;float:left;margin-right:10px;" />  
            <h3 style="margin: 0 0 20px;font-size:20px;line-height:26px;letter-spacing: -0.2px;color: #262626;"><?php echo get_field('promotional_text', 'five_toproi'); ?></h3></td>
          </tr>
          <tr>
            <td class="promotext"><?php echo get_field('promotional_body', 'five_toproi'); ?></td>
          </tr>
          <?php if(get_field('promotional_link', 'five_toproi')) { ?>
          <tr>
          <td>
          <a target="_blank" href="<?php echo get_field('promotional_link', 'five_toproi'); ?>" style="margin-left:0;margin-top:20px;font-size:13px;display: inline-block;border-width:1px;border-style:solid;border-color:#3757AB;border-radius: 4px;padding:6px 12px;text-align: center;text-decoration: none;color: #3757AB;display: inline-flex;align-items: center;justify-content: center;">ΔΙΑΒΑΣΕ ΤΟ</a>
          </td>
          </tr>
          <?php } ?>
        </table>
  </div>
  <?php } ?>
  
  <?php }
  echo $content[$i] /*. "</p>"*/;
}
?>  
  
</div>
</td>
</tr>
  
<?php if(get_field('active_promo_2', 'five_toproi')) { ?>
<tr>
<td width="100%">    
<div class="promo_footer" style="border-top:1px solid #ccc;padding-top:30px;margin-bottom:30px;border-bottom:1px solid #ccc">
<table cellpadding="0" cellspacing="0" border="0" style="">
<tr>
<td width="130" style="vertical-align: top">
  <div class="promoimage" style="margin-right:20px;width:110px">
    <div class="promoimage-i" style="border-radius:100%;overflow:hidden;width:110px;height:110px;position:relative;background-position:center;background-size:cover;background-image:url(<?php echo get_field('promotional_image', 'five_toproi'); ?>)"></div>
  </div>
</td>
<td class="promotext">
  <?php if(get_field('promotional_link_2', 'five_toproi')) { ?>
  <a style="color:#000;text-decoration:none;font-size: 19px;font-weight: bold;margin-bottom: 10px;display: block;" href="<?php echo get_field('promotional_link_2', 'five_toproi'); ?>">
    <span><?php echo get_field('promotional_text_2', 'five_toproi'); ?></span>
  </a>
  <?php } else { ?>
    <span class="color:#000;text-decoration:none;font-size: 19px;font-weight: bold;margin-bottom: 10px;display: block;"><?php echo get_field('promotional_text_2', 'five_toproi'); ?></span>
  <?php } ?>
  <div class="promo2">
  <?php echo get_field('promotional_body_2', 'five_toproi'); ?>
  </div>
</td>
</tr>
</table>
</div>
</td>
</tr>
<?php } ?>
  
<?php if(get_field('active_footer_text', 'five_toproi') && get_field('footer_text', 'five_toproi')) { ?>
<tr>
<td width="100%">      
<div class="footer-text">
<?php echo get_field('footer_text', 'five_toproi'); ?>
</div>
</td>
</tr>
<?php } ?>

</table>

<?php endforeach; wp_reset_postdata(); ?>

  <?php $social = array(
  array('title' => 'facebook', 'link' => 'https://www.facebook.com/tovimacom/', 'image' => 'facebook@2x.png'),
  array('title' => 'twitter', 'link' => 'http://www.twitter.com/tovimagr/', 'image' => 'twitter@2x.png'),
  array('title' => 'instagram', 'link' => 'https://www.instagram.com/tovimagr/', 'image' => 'instagram.png'),
  array('title' => 'linked', 'link' => 'https://www.linkedin.com/company/tovimagr/', 'image' => 'linkedin@2x.png'),
); ?>
  
  <div style="background-color:#001423;padding:25px;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:600px;margin:0 auto">
      <tr>
        <td align="center" width="100">
          <a href="/" class="main-logo is-block" title="ΤΟ ΒΗΜΑ" style="display:block;max-width:82px;margin:0 auto 20px">
            <img alt="TOBHMA" style="width:100%;height:auto"  src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/toVimaLogo.png" />
          </a>        
        </td>
      </tr>
      <tr>
        <td width="100%">
          <table class="footer-table" style="width: 100%; text-align: center;">
  <tr>
    <td>
      <a href="https://www.tovima.gr/category/politics/" target="_blank" style="display:block;padding:0 12px;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;">Πολιτική</a>
    </td>
    <td>
      <a href="https://www.tovima.gr/category/society/" target="_blank" style="display:block;padding:0 12px;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;">Κοινωνία</a>
    </td>
    <td>
      <a href="https://www.tovima.gr/category/finance/" target="_blank" style="display:block;padding:0 12px;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;">Οικονομία</a>
    </td>
    <td>
      <a href="https://www.tovima.gr/category/world/" target="_blank" style="display:block;padding:0 12px;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;">Κόσμος</a>
    </td>
    <td>
      <a href="https://www.tovima.gr/category/diplomatia/" target="_blank" style="display:block;padding:0 12px;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;">Διπλωματία</a>
    </td>
    <td>
      <a href="https://www.tovima.gr/category/culture/" target="_blank" style="display:block;padding:0 12px;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;">Πολιτισμός</a>
    </td>
  </tr>
</table>
        </td>
      </tr>
      <tr>
        <td align="center" width="100">
          <table style="margin-top:30px;">
            <tr>
              <?php foreach ($social as $socialitem) { ?>
              <td align="center">
                <a href="<?php echo $socialitem['link']; ?>" target="_blank" style="border:1px solid #FFF;padding: 3px;width: 22px;height: 22px;display: block;border-radius: 3px;margin:3px;box-sizing: border-box;">
                  <img style="width:100%;height:auto;display:block" src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/<?php echo $socialitem['image']; ?>" alt="<?php echo $socialitem['title']; ?>" />
                </a>
              </td>
              <?php } ?>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>