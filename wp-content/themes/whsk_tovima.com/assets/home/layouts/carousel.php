<section class="carousel-section">
  <div class="carousel-inner-header">  
    <header class="">
    <h4 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h4>
    <div class="inner-section-end">
    <div class="outside-arrows pl-0">
      <div id="tslider-prev" class="tslider-prev top-control only-vima-prev"></div>
      <div id="tslider-next" class="tslider-next top-control only-vima-next"></div>    
    </div>
    </div>
  </header>
  </div>
  <div class="carousel-inner-columns">
    <div class="wrap-carouselh">
      <div class="carousel-slick onerow">
    <?php 
    global $post;
    $threesamc = 0; 
    $carouposts = get_field('box8_selection', 'tovima_only_vima');
    foreach($carouposts as $post) : setup_postdata($post); $threesamc++; 
    $varsize = 'is-size-3-1 is-size-4-mobile zonabold'; ?>
    <div class="slick-items p-4">
      <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    
  </div>
    </div>
  </div>
</section>