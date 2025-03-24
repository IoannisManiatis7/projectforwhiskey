<!DOCTYPE html>
<?php $time = time(); ?>
<html lang="el">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta id="metaViewport" name=viewport content="width=device-width, initial-scale=1.0, user-scalable=no" />
  
  <link rel="shortcut icon" href="/wp-content/themes/tovima/common/imgs/favicon-256.png">
  <link href="/wp-content/themes/tovima/common/imgs/touch-icon-iphone/icon-60x60.png" rel="apple-touch-icon" />
  <link href="/wp-content/themes/tovima/common/imgs/touch-icon-iphone/icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
  <link href="/wp-content/themes/tovima/common/imgs/touch-icon-iphone/icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
  <link href="/wp-content/themes/tovima/common/imgs/touch-icon-iphone/icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />  

  <meta property="og:locale" content="el_GR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php the_title(); ?> - tovima.gr" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:site_name" content="ToVima.gr" />
  <meta property="fb:app_id" content="184884834877395" />
  <meta property="og:image" content="/wp-content/themes/tovima/common/imgs/100xronia-m/ogimage.jpg" />
  <meta property="og:image:secure_url" content="/wp-content/themes/tovima/common/imgs/100xronia-m/ogimage.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:title" content="<?php the_title(); ?> - tovima.gr" />
  <meta name="twitter:site" content="@tovimagr" />
  <meta name="twitter:image" content="/wp-content/themes/tovima/common/imgs/100xronia-m/ogimage.jpg" />  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>  
  
  <link rel="stylesheet" href="/wp-content/themes/tovima/common/css/100xroniam.css?v=<?php echo $time; ?>" />
  <link href="/wp-includes/css/dashicons.min.css" rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" as="style">
  <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28563335-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-28563335-2', { 'anonymize_ip': true });
  </script>

</head>
<body class="single hundred-years-mini">
  
<header class="hundred-mini-header">
   <a href="/100-xronia-vima/" class="site-logo">
      <img alt="100-xronia-vima" src="/wp-content/themes/tovima/common/imgs/100xronia-m/vimaLogo100.svg" />
    </a>
</header>
  
<?php 
while ( have_posts() ) : the_post(); ?>
<main class="hundred-single">
  <div class="post-container">
    
    <header class="post-header">
      
      <div class="header-meta">
        <?php $author_sub = get_field('author-exp'); ?>
        <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
        <?php if ($term_list) { ?>
        <span class="author-name pfdinbold uppercase"><?php echo $term_list[0]->name; ?></span>
        <span class="author-desc pfdinbold"><?php echo $author_sub; ?></span>
        <?php } ?>
      </div>
      
      <h1 class="post-title">
        <?php the_title(); ?>
      </h1>
    </header>
    
    <div class="social-wrap">
  <div class="share-this-label">
    <span class="pfdin">SHARE</span>
    <span class="dashicons dashicons-arrow-down-alt2"></span>
  </div>
<div class="social-box">
    <a onclick="window.open(this.href, 'mywin',
    'left=50,top=50,width=550,height=550,toolbar=1,resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank">
    <i class="dashicons dashicons-facebook-alt"></i>
    </a>
    <a onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=550,height=550,toolbar=1,resizable=0'); return false;" href="https://twitter.com/intent/tweet?text=<?php echo (get_the_title()); ?>+<?php echo get_permalink(); ?>" target="_blank">
    <i class="dashicons dashicons-twitter"></i>
    </a>
  </div>
</div>    
    
    <div class="post-body">
    <?php the_content(); ?>
    </div>
    
  </div>  
</main>  
<?php endwhile; // End of the loop. ?>
  
<section class="all-list">
  <div class="maxgridrow">
    <div class="inner-title-wrap">
    <span class="inner-title pfdinbold">ΓΡΑΦΟΥΝ ΓΙΑ ΤΑ 100 ΧΡΟΝΙΑ ΤΟΥ ΒΗΜΑΤΟΣ</span>
    </div>
    
    <ul class="all-list-items">
      <?php $prota = get_field('100xronia_one', 'tovima_100xronia');
      foreach ($prota as $post) { setup_postdata($post); ?>
      <li class="list-item">
        <a href="<?php the_permalink(); ?>" class="is-relative is-block">
        <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
        <?php if ($term_list) { ?>
        <author class="author-name pfdinbold uppercase"><?php echo $term_list[0]->name; ?></author>
        <?php }?>
        <h3 class="o-head"><?php the_title(); ?></h3>
        </a>
      </li>
      <?php } ?>
      <?php $three = get_field('100xronia_three', 'tovima_100xronia');
      foreach ($three as $post) { setup_postdata($post); ?>
      <li class="list-item">
        <a href="<?php the_permalink(); ?>" class="is-relative is-block">
        <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
        <?php if ($term_list) { ?>
        <author class="author-name pfdinbold  uppercase"><?php echo $term_list[0]->name; ?></author>
        <?php }?>
        <h3 class="o-head"><?php the_title(); ?></h3>
        </a>
      </li>
      <?php } ?>
      <?php $three = get_field('100xronia_lista', 'tovima_100xronia');
      foreach ($three as $post) { setup_postdata($post); ?>
      <li class="list-item">
        <a href="<?php the_permalink(); ?>" class="is-relative is-block">
        <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
        <?php if ($term_list) { ?>
        <author class="author-name pfdinbold  uppercase"><?php echo $term_list[0]->name; ?></author>
        <?php }?>
        <h3 class="o-head"><?php the_title(); ?></h3>
        </a>
      </li>
      <?php } ?>
    </ul>
    
  </div>
</section>
  
<div style="background-color: #EFF3FB;">
  <div class="skew skew-normal"></div>
</div>
<footer class="site-footer">
   <a class="site-logo is-block" href="/100-xronia-vima/">
      <img alt="100-xronia-vima" src="/wp-content/themes/tovima/common/imgs/100xronia-m/vimaLogo100.svg" />
    </a> 
  <div class="copyright-footer">
    ©Copyright 2023
  </div>
</footer>  
  
  
<script>
  $(".social-wrap").click(function() {
    $(this).toggleClass("opensocial")
});
</script>  
  
</body>
</html>  