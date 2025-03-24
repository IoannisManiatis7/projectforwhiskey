<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  
  <?php
  if(is_category()) {
    $term = get_queried_object();
    $keywords = get_field('taxonomy_keywords', $term); 
    if($keywords) {
      echo '<meta name="keywords" content="'.$keywords.'">';
    }
  } ?>

  <?php if(is_home() || is_archive() || is_page('latest-news')) { ?>
  <meta http-equiv="refresh" content="420" />
  <?php } ?>

  
  <?php wp_head(); ?>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/common/imgs/iconsv_2/android-chrome-256x256.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/common/imgs/iconsv_2/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/common/imgs/iconsv_2/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/common/imgs/iconsv_2/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/common/imgs/iconsv_2/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/common/imgs/iconsv_2/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">  
    
  <link href='https://fonts.googleapis.com' rel='preconnect' crossorigin>
  <link href='https://fonts.gstatic.com' rel='preconnect' crossorigin>
  <link href='https://www.googletagmanager.com' rel='preconnect' crossorigin>
  <link href='https://www.google-analytics.com' rel='preconnect' crossorigin>
  <link href='https://stats.g.doubleclick.net' rel='preconnect' crossorigin>
  <link href='https://www.google.com' rel='preconnect' crossorigin>
  <link href='https://cse.google.com' rel='preconnect' crossorigin>
  <link href='https://apis.google.com' rel='preconnect' crossorigin>
  <link href='https://www.gstatic.com' rel='preconnect' crossorigin>
  <link href='https://accounts.google.com' rel='preconnect' crossorigin>
  <link href='https://ssl.gstatic.com' rel='preconnect' crossorigin>
  
  <script src="<?php echo get_template_directory_uri(); ?>/common/js/compliance.js"></script>
  <?php include (TEMPLATEPATH . '/assets/headers.php'); ?>
  <?php include (TEMPLATEPATH . '/assets/dfp/dfp-tags.php'); ?>
  
  <!-- code snippet for Google Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" as="fetch" crossorigin="anonymous">
  <script type="text/javascript">
  !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap",r="__3perf_googleFonts_2c850";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
  </script>
  <!-- code snippet for Google Fonts -->

  <link rel="preload" as="font" type="font/woff" href="/wp-content/themes/whsk_tovima.com/common/fonts/vega/regular/BFVEGA10-REGULAR.woff" crossorigin="anonymous" />
  <link rel="preload" as="font" type="font/woff" href="/wp-content/themes/whsk_tovima.com/common/fonts/vega/bold/BFVEGASEMI10-BOLD.woff" crossorigin="anonymous" />
  <link rel="preload" as="font" type="font/woff" href="/wp-content/themes/whsk_tovima.com/common/fonts/vega/ultra/BFVEGAULTRA10-REGULAR.woff" crossorigin="anonymous" />
  
  <?php 
  global $post; if(is_home()) {
  $sectionsvar = '';
  $authorname = '';
  } elseif(is_category() || is_tag()) {
  $sectionsvar = get_queried_object()->name;
  $authorname = '';
  } elseif(is_page()) {
  $sectionsvar = get_the_title();
  $authorname = '';
  } elseif(is_single()) {
  $authorname = '';
  $sectionsvar = strip_tags(post_taxonomy());
  $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all"));     
  if ($term_list) {
    $authorname = $term_list[0]->name;
  }
    
  }
  ?>
  <script type="text/javascript">
  (function() {
  var _sf_async_config = window._sf_async_config = (window._sf_async_config || {});
  _sf_async_config.uid = 66944;
  _sf_async_config.domain = 'tovima.com';
  _sf_async_config.flickerControl = false;
  _sf_async_config.useCanonical = true;
  _sf_async_config.useCanonicalDomain = true;
  _sf_async_config.sections = '<?php echo $sectionsvar; ?>';
  _sf_async_config.authors = '<?php echo $authorname; ?>';
  function loadChartbeat() {
      var e = document.createElement('script');
      var n = document.getElementsByTagName('script')[0];
      e.type = 'text/javascript';
      e.async = true;
      e.src = '//static.chartbeat.com/js/chartbeat.js';;
      n.parentNode.insertBefore(e, n);
  }
  loadChartbeat();
  })();
  </script>
  <script async src="//static.chartbeat.com/js/chartbeat_mab.js"></script> 
  
  
  <?php if(is_single()) { ?>
  <script src="<?php echo get_template_directory_uri(); ?>/common/js/noframework.waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/common/js/waypoints-sticky.min.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/common/css/videojs.ads.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/common/css/video-js.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/common/css/videojs.ima.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/common/css/vidadStyle.css" rel="stylesheet">
  <style>
    .article-wrapper{width:100%;height:auto;position:relative;max-width:860px;}
    .frame_640x360{width:100%;position:absolute;z-index:10000;-webkit-transform:scale(1);-webkit-transform-origin:0 -20px;-moz-transform:scale(1);-moz-transform-origin:0 5px!important;-o-transform:scale(1);-o-transform-origin:0 0;transform:scale(1);transform-origin:0 -20px;}
    .frame_640x360_small{-webkit-transform-origin:0 -50px;-moz-transform-origin:0 -92px!important;-o-transform-origin:0 0;transform-origin:0 -50px;position:absolute;z-index:10000;}
    #ind-vid{margin-top:20px;margin-bottom:20px;}
  </style>
  <?php } ?>
  
  <?php if(get_field('mega_act', 'tovima_strmega')) { ?>
  <script type="text/javascript" src="https://player.kwikmotion.com/ClientsTemplates/Megatv/KwikLink_311592e7-13f8-4268-b02a-633895abae3b.js"></script>
  <?php } ?>
  
  <script data-cmp-script="text/javascript" data-src="/wp-content/themes/whsk_tovima.com/common/js/facebookpixel.js"></script>

  <?php /*
  <script data-schema="NewsMediaOrganization" type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsMediaOrganization",
      "name": "tovima.gr",
      "url": "https://www.tovima.gr",
      "description": "Ειδήσεις και Ενημέρωση από την Ελλάδα και τον Κόσμο",
      "address":[{
        "@type":"PostalAddress",
        "addressCountry":"Greece",
        "addressLocality":"Αθήνα",
        "addressRegion":"GR",
        "postalCode":"176 73",
        "streetAddress":"Συγγρού 340, Καλλιθέα"
        }
      ],
      "contactPoint":[{
        "@type":"ContactPoint",
        "areaServed":"GR",
        "contactType":"customer service",
        "telephone":"+30-2107547000"
        }
      ],
      "logo": {
        "@type": "ImageObject",
        "url":"<?php echo get_template_directory_uri(); ?>/common/imgs/toVima-publisher.png",
        "width":600,
        "height":60
      }
    }
  </script>
  */ ?>


</head>
<body <?php body_class('tovimagr'); ?>>
  
<?php include(TEMPLATEPATH . '/assets/dfp/dfp-body.php') ;?>
  
<?php global $post; $pageUrl = get_permalink();
$opinions = '/opinions/';
?>
  
<div id="page" class="<?php if( isset($_GET['width']) ) { echo 'width-'.$_GET['width'];} ?> site vimasite is-relative <?php if (strpos($pageUrl, $opinions) == !false) { echo 'opinions'; } ?>">

<?php include (TEMPLATEPATH .'/assets/elements/mainheader.php'); ?>
