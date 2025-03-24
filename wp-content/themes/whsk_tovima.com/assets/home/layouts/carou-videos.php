<section class="carousel-section">
  <div class="carousel-inner-header">  
    <header class="">
    <a href="/category/videos/">
      <h4 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h4>
    </a>
    <div class="inner-section-end is-hidden-desktop">
    <div class="outside-arrows pl-0">
      <div id="tslider-prev" class="tslider-prev top-control carou-videos-prev"></div>
      <div id="tslider-next" class="tslider-next top-control carou-videos-next"></div>    
    </div>
    </div>
  </header>
  </div>
  <div class="carousel-inner-columns">
    <div class="wrap-carouselh">
      <div class="outside-arrows is-hidden-touch">
      <div id="tslider-prev" class="tslider-prev top-control carou-videos-prev"></div>
      <div id="tslider-next" class="tslider-next top-control carou-videos-next"></div>
      </div>
      
      <div class="carousel-video onerow">
    <?php 
    global $post;
    $threesamc = 0; 
    $carouposts = get_field('box4_selection', 'tovima_afieromata_2');
    foreach($carouposts as $post) : setup_postdata($post); $threesamc++; 
    $varsize = 'videos-headline zonabold'; ?>
    <div class="slick-items px-4 pb-0 pt-4">
      <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    
  </div>
    </div>
  </div>
</section>