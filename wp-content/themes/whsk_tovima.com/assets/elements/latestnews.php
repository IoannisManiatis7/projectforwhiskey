<?php /* if(is_single()) { ?>
<?php if(get_field('active_offers','tovima_οffers')) {
$prosforestitle = get_field('offerstitle', 'tovima_οffers');  
$prosforeslink = get_field('url_προσφορών', 'tovima_οffers');
$prosforesimageD = get_field('offers_imageDesktop', 'tovima_οffers');
$prosforesimageL = get_field('offers_imageLaptop', 'tovima_οffers');
$prosforesimageT = get_field('offers_imageTablet', 'tovima_οffers');
$prosforesimageM = get_field('offers_imageMobile', 'tovima_οffers');
?>
<section class="inner-section">
  <div class="inner-section-flex">
    <a title="<?php echo $prosforestitle; ?>" href="<?php echo $prosforeslink; ?>" class="is-block">
      <picture>
        <source media="(max-width:767px)" srcset="<?php echo $prosforesimageM; ?>" />
        <source media="(max-width: 1023px)" srcset="<?php echo $prosforesimageT; ?>" />
        <source media="(max-width: 1550px)" srcset="<?php echo $prosforesimageL; ?>" />
        <source media="(min-width: 1550px)" srcset="<?php echo $prosforesimageD; ?>" />
        <img loading="lazy" alt="<?php echo $prosforestitle; ?>" src="<?php echo $prosforesimageM; ?>" width="1574" height="300" style="width: 100%; height: auto;" />
      </picture>
    </a>
  </div>
</section>  
<?php } ?> 
<?php } */ ?>

<section class="inner-section latestnews-section">
  <div class="inner-section-flex">
  <div class="wrap-inner-header">  
    <header class="">
    <a href="/latest-news/">
    <h4 class="header-section zonaultra f-400">LATEST NEWS</h4>
    </a>
    <div class="inner-section-end is-hidden-small">
    <div class="outside-arrows is-hidden-small">
      <div id="tslider-prev" class="tslider-prev top-control"></div>
      <div id="tslider-next" class="tslider-next top-control"></div>    
    </div>
    <a href="/latest-news/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
    </div>
  </header>
  </div>
    
  <div class="wrap-inner-columns">    
  <div class="latest-slick onerow">
    <?php 
    global $post;
    $threesamc = 0;
    $relatedposts = get_posts( 
    array('numberposts' => 12, 'no_found_rows' => true, 'post_status' =>'publish',
    'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
    ));
    foreach($relatedposts as $post) : setup_postdata($post); $threesamc++; 
    $varsize = 'is-size-3-desktop is-size-3-tablet is-size-4-mobile zonabold'; ?>
    <div class="slick-items">
      <?php include(TEMPLATEPATH .'/assets/blocks/ex-relative-box.php'); ?>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>
      
  </div>
</section>