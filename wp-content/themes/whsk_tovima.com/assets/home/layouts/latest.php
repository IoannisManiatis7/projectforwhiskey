<div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
  <div class="column is-6-desktop is-7-touch">
    <a title="Περισσότερες Ειδήσεις" href="/latestnews/">
      <h2 style="white-space:nowrap" class="header-section zonaultra f-400">ΤΕΛΕΥΤΑΙΕΣ ΕΙΔΗΣΕΙΣ</h2>
    </a>
  </div>
  <div class="column is-6-desktop is-5-touch has-text-right-desktop is-hidden-small">
    <div class="inner-section-end">
      <div class="outside-arrows is-hidden-small">
        <div id="tslider-prev" class="tslider-prev top-control"></div>
        <div id="tslider-next" class="tslider-next top-control"></div>
      </div>
      <a title="Περισσότερες Ειδήσεις" href="/latestnews/" class="manrope is-size-6 f-700 grey-c">ΟΛΗ Η ΡΟΗ ΕΙΔΗΣΕΩΝ</a>
    </div>
  </div>
</div> 
<div class="wrap-latestnews">
  <div class="latest-slick onerow">
    <?php 
    global $post;
    $threesamc = 0;
    $relatedposts = get_posts( 
    array('numberposts' => 12, 'no_found_rows' => true, 'post_status' =>'publish',
    'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
    ));
    foreach($relatedposts as $post) : setup_postdata($post); $threesamc++; 
    $varsize = 'is-size-3-1 is-size-4-mobile zonabold'; ?>
    <div class="slick-items p-4">
      <?php include(TEMPLATEPATH .'/assets/blocks/ex-relative-box.php'); ?>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    
    <div class="wra-call-action is-visible-small">
      <a title="Περισσότερες Ειδήσεις" href="/latest-news/" class="call-action-button yellow-button">ΟΛΕΣ ΟΙ ΕΙΔΗΣΕΙΣ</a>  
    </div>    
    
  </div>
</div>