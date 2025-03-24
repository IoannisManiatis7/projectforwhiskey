<?php // require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php'); ?>
<!-- <xsl:stylesheet -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" 
 xmlns:v="urn:schemas-microsoft-com:vml"
 xmlns:o="urn:schemas-microsoft-com:office:office">
  
<?php
$cc = 0;
$g5morex = get_posts( 
array('numberposts' => 1, 
'category_name' => '5-to-proi', 'no_found_rows' => true, 'post_status' =>'publish','date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
)); ?>
  
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
  <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS 7-9 -->
  <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS 7-9 -->
  
  <?php foreach($g5morex as $post) : setup_postdata($post); $cc++; ?>
  <title><?php the_title(); ?></title>
  <?php endforeach; wp_reset_postdata(); ?>
  
  <!--[if gte mso 9]><xml>
   <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
   </o:OfficeDocumentSettings>
  </xml><![endif]-->
  <!-- fix outlook zooming on 120 DPI windows devices -->  
  
<style>
#subject-line-1{display:none}
body{margin:0;padding:0;background-color:#fff;-ms-text-size-adjust:none;-webkit-text-size-adjust:none;font-family:'Arial',sans-serif}
table{border-spacing:0}
table td{border-collapse:collapse}
.bullet-row{border-bottom:1px solid #ccc;padding-bottom:30px;margin-bottom:30px}
.fiveam_area_main ul li{font-size:18px;line-height:23px;margin-bottom:24px;color:#262626}
.fiveam_area_main ul li:last-child{margin-bottom:0}
.fiveam_area_main ul{margin-left:0;padding-left:30px}
.fiveam_area_main ul li a{background-color:#f8e0b9;padding:2px;color:#262626;text-decoration:none}
.wrap-bullet_list{border-top:1px solid #ccc;border-bottom:1px solid #ccc;margin-bottom:30px}
.slides{margin:0;padding:0;padding-left:20px}
.slides li p{margin:0;font-size:16px;line-height:22px;color:#000}
.slides li{margin-bottom:20px}
.slides li:last-child{margin-bottom:0}
.podcast_wrapper{border-bottom:1px solid #ccc;padding-bottom:30px;margin-bottom:30px}
.promotext,.promotext p{color:#000;font-size:17px;letter-spacing:-.34px;line-height:24px;margin:0}
.footer-text p{color:#000;margin-top:0;margin-bottom:20px;font-size:15px;line-height:20px}
.footer-text p:last-child{margin-bottom:0}
.footer-text p a {color: #3A55A6}
.author__image{border-radius:100%;overflow:hidden;margin-right:10px;border:1px solid #92a2b9}
.promo2,.promo2 p{color:#000;font-size:17px;line-height:24px;margin-bottom:20px}

.promotext p a,
.slides li p a {background-color: #f8e0b9;padding: 2px;color: #262626;text-decoration: none}
  
@media (max-width:550px) {
.footer-table td{display:inline-block;width:33.333%;box-sizing:border-box}
}  
</style>
  
</head>
  
<body style="margin:0; padding:0;" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  

  <div style="max-width:510px;margin:0 auto;padding:5px">
    <table cellpadding="0" cellspacing="0" border="0" width="100%">

    <tr>
      <td align="center">
        <div style="margin:20px -10px">
        <img style="max-width:100%;height:auto" src="/wp-content/themes/whsk_tovima.com/common/imgs/5_headerImagex2.png" alt="5_headerImage.png" width="594" height="198" />
        </div>
      </td>
    </tr>
    <tr><td width="100%"></td></tr>
    
    <?php foreach($g5morex as $post) { setup_postdata($post); $cc++; ?>
    <?php if(has_excerpt()) { ?>
      <tr>
        <td width="100%"><span style="font-size:18px;line-height:23px;display:block;margin-top:10px;margin-bottom:20px;letter-spacing: -0.36px;color: #0D0D0D;"><?php echo get_the_excerpt(); ?></td>
      </tr>
      <tr>
        <td width="100%"></td>
      </tr>
    <?php }  ?>
      <tr>
        <td>
         <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>

        <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
        <?php if(get_field('exauthor_textn')) { ?>
        <td><?php the_field('exauthor_textn'); ?></td>
        <?php } elseif ($term_list) {
          $tl = 0;
          foreach($term_list as $termitem) { $tl++; 
          $author_image = get_field('author-image', 'nea_authors_' . $termitem->term_id . ''); ?>
          <?php if ($author_image) { ?>
          <td width="60px">
            <div class="author__image" style="position: relative;height: 47px;width: 47px;display: block;overflow:hidden;border-radius: 100%;background-size: contain;background-position:center;background-image:url(<?php echo $author_image; ?>)"></div>
            </td>
          <?php } ?>
          <td>
          <a style="text-decoration:none;color:#000;font-weight:bold" href="/editor/<?php echo $termitem->slug ?>" title="VIEW ALL <?php echo $termitem->name; ?>"><?php echo alternate_name($termitem->name); ?></a>
          </td>
          <?php } ?>
        <?php } else { ?>
        <td><strong>Newsroom</strong></td>
        <?php } ?>
        </tr>
        </table>
        </td>
      </tr>
    <?php } ?>
    
    
      <tr>
        <td align="center">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <?php foreach($g5morex as $post) { setup_postdata($post); $cc++; ?>
              <td width="100%" align="right" vertical-align="center" style="color: #171717;font-size: 11px;line-height:1;padding-top: 5px;border-bottom: 1px solid #ccc;padding-bottom: 10px;">
                <a target="_blank" href="https://www.tovima.gr/newsletter/5-to-proi-subscription/" style="padding-right:7px;margin-right:7px;color: #171717;font-size:11px;line-height:1;text-decoration:none;border-right:1px solid #CCC">ΕΓΓΡΑΦΕΙΤΕ</a>
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
      <td width="100%" cellpadding="0" cellspacing="0" border="0" style="padding:0 0 0;">
        
      <?php if(get_field('active_bullets', 'five_toproi')) { ?>
        <div class="wrap-bullet_list" style="padding-top:0;border-top:none!important">
        <table cellpadding="0" cellspacing="0" border="0" style="border-top:4px solid #3A55A6;background-color:#F2F2F3;padding:20px 30px;margin:0 auto 30px">
          <?php if(get_field('bullet_header', 'five_toproi')) { ?>
          <tr>
            <td><span style="display:block;margin-bottom:27px;color:#3A55A6;font-size:14px;line-height:1;font-weight:bold;"><?php echo get_field('bullet_header', 'five_toproi'); ?></span></td>
          </tr>
          <?php } ?>
          <tr>
           <td>
             <?php $rows = get_field('bullet_list', 'five_toproi'); if( $rows ) { ?>
                <?php
                echo '<ul class="slides">';
                foreach( $rows as $row ) {
                $bullet_textarea = $row['bullet_textarea'];
                echo '<li>';
                echo $bullet_textarea;
                echo '</li>';
                }
                echo '</ul>';
                ?>
             <?php } ?>
          </td>
          </tr>
        </table>
        </div>
      <?php } ?>
        
      <?php foreach($g5morex as $post) : setup_postdata($post); $cc++;
      $cc = 0;
      if( have_rows('fiveam_bullets') ): ?>
      <?php while( have_rows('fiveam_bullets') ) : the_row(); $cc++; 
      $bulletsub = get_sub_field('fiveam_bullet_title');
      $bulletmain = get_sub_field('fiveam_bullet_text');
      $bulletlink = get_sub_field('link_bullet');
      $bulletlink = str_replace('wp.mgmt.', 'www.', $bulletlink);
      ?>
      <table class="bullet-row" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td width="100%" align="left">
          <table cellpadding="0" cellspacing="0" border="0" width="100%"  valign="top">
            <tr>
              <td width="40" align="left"  valign="top">
                <img src="/wp-content/themes/whsk_tovima.com/common/imgs/newsletter/<?php echo $cc; ?>.png" width="30" height="30" />
              </td>
              <td  valign="top">
              <h3 style="margin:0;font-size:20px;line-height:26px;letter-spacing: -0.2px;color: #262626;"><?php echo $bulletsub; ?></h3>                
              </td>              
            </tr>
          </table>
          </td>
        </tr>
        <tr>
          <td width="100%" align="left">
            <div class="fiveam_area_main"><?php echo $bulletmain; ?>
          <?php if($bulletlink) { ?>              
          <a target="_blank" href="<?php echo $bulletlink; ?>" style="margin-left:30px;margin-top:10px;font-size:13px;background-color:#FFF;display: inline-block;border-width:1px;border-style:solid;border-color:#3757AB;border-radius: 4px;padding:6px 12px;text-align: center;text-decoration: none;color: #3757AB;display: inline-flex;align-items: center;justify-content: center;">ΔΙΑΒΑΣΕ ΤΟ</a>
          <?php } ?>
            </div>
          </td>
        </tr>
      </table>
        
        
      <?php if($cc == 1 && get_field('active_podcast', 'five_toproi')) { ?>
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
        
      <?php if($cc == 4 && get_field('active_promo_1', 'five_toproi')) { ?>
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
        
        
      <?php endwhile; ?>
      <?php endif; ?>
        
      <?php endforeach; wp_reset_postdata() ;?>
        
      <?php if(get_field('active_promo_2', 'five_toproi')) { ?>
      <div class="promo_footer" style="border-top: none;padding-top: 0;margin-bottom:30px;border-bottom:1px solid #ccc">
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
      <?php } ?>
        
      </td>
    </tr>
    
  </table>
    
  
    <?php if(get_field('active_footer_text', 'five_toproi') && get_field('footer_text', 'five_toproi')) { ?>
    <div class="footer-text">
      <?php echo get_field('footer_text', 'five_toproi'); ?>
    </div>
    <?php } ?>
    
  </div>
  
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
  
</body>
</html>