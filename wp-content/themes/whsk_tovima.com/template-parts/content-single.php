<?php global $post; $pageUrl = get_permalink();
$opinions = '/opinions/';
$temp_layout = get_field('temp_layout');
$categoryn = get_the_category($post->ID);
$getposcat = $categoryn[0]->cat_ID;
?>

<?php /* if(has_term('vimatodotis', 'nea_authors')) { ?>
  <div class="vimatodotis-header">
    <div class="maxgridrow is-relative">
      <a href="/editor/vimatodotis/" class="vimatodotis_logo is-block">
        <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimatodotis_Logo.svg" alt="BHMAτοδοτης" />
      </a>
      <a href="/editor/vimatodotis/" class="vimatodotis-all">All Articles</a>
    </div>
  </div>
  <div class="vimatodotis-sub-header"></div>
<?php } */ ?>


<?php if( in_category('science') && $temp_layout != 'art04' ) { ?>
<div class="column is-full">
  <div class="sponsored-row" style="padding: 5px 0;background-color:#FFFFFF;text-align:center;line-height: 1;">
    <a style="display: block;margin:0 auto;width:90%;max-width:270px;" href="https://www.metlengroup.com/" target="_blank">
    <img style="width:100%;height:auto" alt="powered-by-metlen" width="731" height="169" src="/wp-content/themes/whsk_tovima.com/common/imgs/ads/powered-by-metlen.png" />
    </a>
  </div>
</div>
<?php } ?>

<main class="is-relative post-wrapper maxgridrow art-<?php echo $temp_layout; ?>">
<article class="columns is-relative is-variable is-4-desktop is-multiline <?php if ( wordcount ( get_the_content() ) < 200 ) { echo 'brief-content' ; } ?> <?php if(has_term('vimatodotis', 'nea_authors')) {echo 'temp_vimatodotis'; } ?>">
    
    
    <?php if($temp_layout == 'art04') { ?>
      <?php include(TEMPLATEPATH .'/assets/single/header-row-5.php'); ?>
    <?php } else { ?>
    
    <div class="column is-full is-relative">

      <?php
      if (strpos($pageUrl, $opinions) == !false && ($temp_layout == 'art01' || $temp_layout == null)) {
      include(TEMPLATEPATH .'/assets/single/header-row-2.php');
      } elseif($temp_layout == 'art02') {
      include(TEMPLATEPATH .'/assets/single/header-row-3.php'); 
      } elseif($temp_layout == 'art03') {
      include(TEMPLATEPATH .'/assets/single/header-row-4.php');
      } else { 
      include(TEMPLATEPATH .'/assets/single/header-row-1.php');
      }
      ?>
    </div>
    <?php } ?>
    
    <div class="column is-narrow is-hidden-touch">
      <div class="half-width is-relative <?php if($temp_layout != 'art03') { echo 'full-height'; } ?>">
        <?php if($temp_layout != 'art03') { include(TEMPLATEPATH .'/assets/single/post-meta.php'); } ?>
        
        <?php if (strpos($pageUrl, $opinions) == !false) {
        include(TEMPLATEPATH .'/assets/single/gnomes.php');
        } else {
        include(TEMPLATEPATH .'/assets/single/left-article.php');  
        } ?>
      </div>
    </div>
    
    <div class="column is-relative">
      <div class="article-column">

      <?php if($temp_layout == 'art01' || $temp_layout == null) { ?>
      <div class="wrap-article-image is-relative z-index-1 slxoqx">
        
      <?php if(get_field('postvideo_url')) { ?>
        
      <div class="article-image" style="display:none"></div>
      <div class="wrap_videobox">
        <?php include(get_template_directory() .'/assets/single/videobox.php'); ?>
      </div>
        
      <?php } else { ?>  
      <figure class="article-image">
        <?php if ( has_post_thumbnail() ) { ?>
          <img alt="<?php echo get_the_title(); ?>" class="imagefit native_image" src="<?php echo $thumb_full[0]; ?>" width="<?php echo $thumb_full[1]; ?>" height="<?php echo $thumb_full[2]; ?>" />
        <?php } else { ?>
        <img width="1200" height="800" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit no-lazy" />
        <?php } ?>
      </figure>
        <?php $get_description = get_post(get_post_thumbnail_id())->post_excerpt; ?>
        <?php if(!empty($get_description)){ echo '<div class="featured_caption">' . $get_description . '</div>'; } ?>
      <?php } ?>
      </div>
      <?php } ?>
      
      <div class="single-article">
        
        <div class="is-hidden-desktop">
          <?php include(TEMPLATEPATH .'/assets/single/post-meta.php'); ?>
        </div>        
        
        <?php if(has_excerpt() && ($temp_layout == 'art01' || $temp_layout == null)) { ?>
        <h2 class="post-summary zonabold is-hidden-small">
          <?php echo get_the_excerpt(); ?>
        </h2>
        <?php } ?>
        
        <div class="post-body main-content pos-rel article-wrapper">
        <?php include(TEMPLATEPATH .'/assets/single/thecontent.php'); ?>
        </div>

        <?php if(has_tag('ekloges-2023') && get_field('activated_boilerplate', 'tovima_boilerpl')) { ?>
        <div class="boiler-plate">
        <span class="b-lines"></span>

        <div class="bolier-plate-content">
        <?php echo get_field('boilerplate_text', 'tovima_boilerpl'); ?>
        </div>

        </div>
        <?php } ?>
        
        <?php include(TEMPLATEPATH .'/assets/single/tags.php'); ?>
        
        <?php include(TEMPLATEPATH .'/assets/single/dfptext.php'); ?>
        
        <?php include(TEMPLATEPATH .'/assets/single/content-related.php'); ?>

        <!--RELATED-->
        <div id='320x50_bottom' class="div-320x50_bottom mt-6">
        <script type='text/javascript'>
          googletag.cmd.push(function() {
            googletag.display('320x50_bottom');
          });
        </script>
        </div>
        
      </div>
      </div>
    </div>
    
    

    <div class="column is-narrow is-relative post-sidebar">
      <div class="sidebar-width is-relative full-height sidebar-fxa">
        <?php include(TEMPLATEPATH .'/assets/single/single-sidebar.php'); ?>
      </div>
    </div>
    
  </article>
  
  <footer class="article-footer is-relative">
    <?php if (strpos($pageUrl, $opinions) == !false) { 
  include(TEMPLATEPATH .'/assets/single/author-related.php'); 
    } else {
    include(TEMPLATEPATH .'/assets/single/category-related.php'); 
    } ?>

  <?php // include(TEMPLATEPATH .'/assets/elements/podcasts.php'); ?>

  <?php // include(TEMPLATEPATH .'/assets/home/layouts/populars.php'); ?>
  <?php include(TEMPLATEPATH .'/assets/elements/latestnews.php'); ?>
  <?php // include(TEMPLATEPATH .'/assets/elements/network.php'); ?>    
    
  <?php /*
  <div class="shopflix-row mt-6">
    <div class="shopflix-wrapper" style="padding:0 0">
      <iframe id="Shopflix" scrolling="no" loading="lazy" src="https://epimenidis.in.gr/shopflix/widget.php?url=tovimagr&items=2" width="100%" frameborder="0" style="width:100%;border:0" onload="this.style.height=(this.contentWindow.document.body.scrollHeight+20)+'px';" ></iframe>
    </div>
    <style>
    #Shopflix{height: 345px;overflow: hidden}
    @media screen and (max-width: 667px) {
    #Shopflix {height: 540px;}
    }  
    </style>
  </div>
  */ ?>
    
  </footer>
  
</main>