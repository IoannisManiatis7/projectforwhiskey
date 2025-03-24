<?php
      $g5morex = get_posts( 
      array('numberposts' => 1, 
      'category_name' => '5-to-proi', 'no_found_rows' => true, 'post_status' =>'publish','date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
      )); foreach($g5morex as $post) : setup_postdata($post); ?>

  <?php if(has_excerpt()) { ?>
<p style="font-size:16px;line-height:23px;display:block;margin-top:10px;margin-bottom:20px;letter-spacing: -0.36px;color: #0D0D0D;"><?php echo get_the_excerpt(); ?></p>
    <?php } ?>
    
<?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
    <div style="padding: 0; margin: 0; border: 0; width: 100%;">
  <div style="display: flex; flex-wrap: wrap;align-items:center;font-size: 14px;">
    <?php if (get_field('exauthor_textn')) { ?>
      <div><?php the_field('exauthor_textn'); ?></div>
    <?php } elseif ($term_list) {
      $tl = 0;
      foreach ($term_list as $termitem) {
        $tl++;
        $author_image = get_field('author-image', 'nea_authors_' . $termitem->term_id . '');
        ?>
        <?php if ($author_image) { ?>
          <div class="author__image" style="position: relative; height: 47px; width: 47px; display: block; overflow: hidden; border-radius: 100%; background-size: contain; background-position: center; background-image: url(<?php echo $author_image; ?>);"></div>
        <?php } ?>
        <div>
          <a style="text-decoration: none; color: #000; font-weight: bold;" href="/editor/<?php echo $termitem->slug ?>" title="VIEW ALL <?php echo $termitem->name; ?>"><?php echo alternate_name($termitem->name); ?></a>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div><strong>Newsroom</strong></div>
    <?php } ?>
  </div>
</div>

    <?php foreach($g5morex as $post) { setup_postdata($post); $cc++; ?>
    <div style="display:flex;justify-content:flex-end;color: #171717;font-size: 11px;line-height:1;padding-top: 5px;border-bottom: 1px solid #ccc;padding-bottom: 10px;">
    <a target="_blank" href="https://www.tovima.gr/newsletter/5-to-proi-subscription/" style="padding-right:7px;margin-right:7px;color: #171717;font-size:11px;line-height:1;text-decoration:none;border-right:1px solid #CCC">ΕΓΓΡΑΦΕΙΤΕ</a>
    <a target="_blank"  href="<?php echo get_the_permalink(); ?>" style="color: #171717;font-size:11px;line-height:1;text-decoration:none">ΔΙΑΒΑΣΤΕ</a>
    </div>
    <?php } ?>
    
    
  
      <?php if(get_field('active_bullets', 'five_toproi')) { ?>
        <div class="upper-wrap">
        <div class="wrap-bullet_list" style="">
          <?php if(get_field('bullet_header', 'five_toproi')) { ?>
          <span style="display:block;margin-bottom:27px;color:#3A55A6;font-size:14px;line-height:1;font-weight:bold;">
            <?php echo get_field('bullet_header', 'five_toproi'); ?>
          </span>
  <?php } ?>
  <?php $rows = get_field('bullet_list', 'five_toproi'); if( $rows ) { ?>
  <?php
          echo '<ul class="slides">';
          foreach( $rows as $row ) {
          $bullet_textarea = $row['bullet_textarea'];
          echo '<li>';
          echo $bullet_textarea;
          echo '</li>';
          }
          echo '</ul>'; } ?>
    </div>
    </div>
    <?php } ?>


    <?php if( have_rows('fiveam_bullets') ): ?>
    <?php while( have_rows('fiveam_bullets') ) : the_row(); $cc++; 
      $bulletsub = get_sub_field('fiveam_bullet_title');
      $bulletmain = get_sub_field('fiveam_bullet_text');
      $bulletlink = get_sub_field('link_bullet');
      $bulletlink = str_replace('wp.mgmt.', 'www.', $bulletlink);
      ?>
    <div class="fiveam_area_main">
      <div class="fiveam_area_main_header">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/<?php echo $cc; ?>.png" width="30" height="30" />
        <h3>
          <?php echo $bulletsub; ?>
        </h3>
      </div>
      <?php echo $bulletmain; ?>
      <?php if($bulletlink) { ?>
      <a class="repeater-link" target="_blank" href="<?php echo $bulletlink; ?>">ΔΙΑΒΑΣΕ ΤΟ</a>
      <?php } ?>
    </div>

    <?php if($cc == 1 && get_field('active_podcast', 'five_toproi')) { ?>
    <div class="podcast_wrapper">
      <div class="podcast_header">
        <img alt="headset-icon" src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/headset.png" width="30" height="30" style="max-width:100%;height:auto;margin-top: 5px;" />
        <?php if(get_field('podcast_title', 'five_toproi')) { ?>
        <a href="<?php echo get_field('podcast_link', 'five_toproi'); ?>" target="_blank">
        <span class="podcast_title"><strong>Άκουσέ το: </strong><?php echo get_field('podcast_title', 'five_toproi'); ?></span>
        </a>
        <?php } ?>
      </div>

      <?php if(get_field('podcast_image', 'five_toproi')) { ?>
      <a href="<?php echo get_field('podcast_link', 'five_toproi'); ?>" target="_blank">
          <img style="max-width:100%;display: block;margin-top: 25px;" src="<?php echo get_field('podcast_image', 'five_toproi'); ?>" alt="podcast" />
          </a>
      <?php } ?>
    </div>
    <?php } ?>

    <?php if($cc == 4 && get_field('active_promo_1', 'five_toproi')) { ?>
    <div class="upper-wrap">
      <div class="wrap-bullet_list" style="border-top:4px solid #FFBA59">
        <div class="promo1-header">
          <img alt="ExclamationMark" src="/wp-content/themes/whsk_tovima.com/common/imgs/ExclamationMark@2x.png" width="13" height="23" style="max-width:100%;height:auto;float:left;margin-right:10px;" />
          <h3 style="margin: 0 0 20px;font-size:17px;line-height:1.3;letter-spacing: -0.2px;color: #262626;">
            <?php echo get_field('promotional_text', 'five_toproi'); ?>
          </h3>
        </div>

        <div class="promotext">
          <?php echo get_field('promotional_body', 'five_toproi'); ?>
        </div>

        <?php if(get_field('promotional_link', 'five_toproi')) { ?>
        <a target="_blank" href="<?php echo get_field('promotional_link', 'five_toproi'); ?>" class="repeater-link">
            ΔΙΑΒΑΣΕ ΤΟ
          </a>
        <?php } ?>
      </div>
    </div>
    <?php } ?>

    <?php endwhile; ?>
    <?php endif; ?>

    <?php endforeach; wp_reset_postdata() ;?>


      <?php if(get_field('active_promo_2', 'five_toproi')) { ?>
      <div class="promo_footer" style="border-top: none;padding-top: 0;margin-bottom:30px;border-bottom:1px solid #ccc">
        
        <div class="promoimage" style="margin-right:20px;width:110px">
          <div class="promoimage-i" style="border-radius:100%;overflow:hidden;width:110px;height:110px;position:relative;background-position:center;background-size:cover;background-image:url(<?php echo get_field('promotional_image', 'five_toproi'); ?>)"></div>
        </div>
        
        <div class="promotext">
        <?php if(get_field('promotional_link_2', 'five_toproi')) { ?>
        <a style="color:#000;text-decoration:none;font-size:18px;font-weight: bold;margin-bottom: 10px;display: block;" href="<?php echo get_field('promotional_link_2', 'five_toproi'); ?>">
          <span><?php echo get_field('promotional_text_2', 'five_toproi'); ?></span>
        </a>
        <?php } else { ?>
          <span class="color:#000;text-decoration:none;font-size:18px;font-weight: bold;margin-bottom: 10px;display: block;"><?php echo get_field('promotional_text_2', 'five_toproi'); ?></span>
        <?php } ?>
        <div class="promo2">
        <?php echo get_field('promotional_body_2', 'five_toproi'); ?>
        </div>
        </div>

      </div>
      <?php } ?>    
    
    <?php if(get_field('active_footer_text', 'five_toproi') && get_field('footer_text', 'five_toproi')) { ?>
    <div class="nv-footer-text">
      <?php echo get_field('footer_text', 'five_toproi'); ?>
    </div>
    <?php } ?>

    <?php $social = array(
  array('title' => 'facebook', 'link' => 'https://www.facebook.com/tovimacom/', 'image' => 'facebook@2x.png'),
  array('title' => 'twitter', 'link' => 'http://www.twitter.com/tovimagr/', 'image' => 'twitter@2x.png'),
  array('title' => 'instagram', 'link' => 'https://www.instagram.com/tovimagr/', 'image' => 'instagram.png'),
  array('title' => 'linked', 'link' => 'https://www.linkedin.com/company/tovimagr/', 'image' => 'linkedin@2x.png'),
); ?>

    <div style="background-color:#001423;padding:25px;">
      <div class="is-mobile columns is-multiline">
        <div class="column is-full">
          <a href="/" class="main-logo is-block" title="ΤΟ ΒΗΜΑ" style="display:block;max-width:82px;margin:0 auto 20px">
        <img alt="TOBHMA" style="width:100%;height:auto"  src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/toVimaLogo.png" />
      </a>
        </div>
        <div class="column is-4">
          <a href="https://www.tovima.gr/category/politics/" target="_blank" style="display:block;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;text-align:center;">Πολιτική</a>
        </div>
        <div class="column is-4">
          <a href="https://www.tovima.gr/category/society/" target="_blank" style="display:block;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;text-align:center;">Κοινωνία</a>
        </div>
        <div class="column is-4">
          <a href="https://www.tovima.gr/category/finance/" target="_blank" style="display:block;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;text-align:center;">Οικονομία</a>
        </div>
        <div class="column is-4">
          <a href="https://www.tovima.gr/category/world/" target="_blank" style="display:block;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;text-align:center;">Κόσμος</a>
        </div>
        <div class="column is-4">
          <a href="https://www.tovima.gr/category/diplomatia/" target="_blank" style="display:block;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;text-align:center;">Διπλωματία</a>
        </div>
        <div class="column is-4">
          <a href="https://www.tovima.gr/category/culture/" target="_blank" style="display:block;color:#FFF;font-size:13px;line-height:18px;text-decoration:none;text-align:center;">Πολιτισμός</a>
        </div>

        <div class="column is-full has-text-centered">
          <div class="nv-social-footer">
          <?php foreach ($social as $socialitem) { ?>
          <a href="<?php echo $socialitem['link']; ?>" target="_blank" style="border:1px solid #FFF;padding:3px;width:22px;height: 22px;display: block;border-radius: 3px;margin:3px;box-sizing: border-box;">
    <img style="width:100%;height:auto;display:block" src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/<?php echo $socialitem['image']; ?>" alt="<?php echo $socialitem['title']; ?>" />
    </a>
          <?php } ?>
          </div>
        </div>

      </div>

    </div>