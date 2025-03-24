<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  <div class="column is-full">
    <div class="wrap-header-section">
      <?php
      if(isset($subitem['type']) && $subitem['type'] == 'tax') {
      $varpath = 'editor';
      } else {
      $varpath = 'category';  
      } ?>      
    <a href="/<?php echo $varpath; ?>/<?php echo $subitem['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $subitem['title']; ?></h2></a>
    </div>
  </div>
  <div class="column is-full">
    <div class="triple-wrapper">
        <?php
        $cc = 0;
        if(isset($subitem['relationship']) && $subitem['relationship'] == 'yes') {
          $subposts = get_field($subitem['acfname'], $subitem['pagename']);
          $totalposts = '3';
        } else {
        $args = array(
        'numberposts' => 3,
        'no_found_rows' => true,
//         'category_name' => $subitem['slug'],
        'post_status' =>'publish',
        'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
        );
        if(is_home()) {
        $args['post_type'] = array('post', 'printed_post');
        } elseif(is_page('print')) {
        $args['post_type'] = array('printed_post');
        }
      
        if(isset($subitem['type']) && $subitem['type'] == 'tax') {
          $args['tax_query'] = array(
            array('taxonomy'  => 'nea_authors', 'field' => 'slug', 'terms' => $subitem['slug']),
          );
        } else {
          $args['category_name'] = $subitem['slug'];
        }
      
        $subposts = get_posts( $args );
        $totalposts = count($subposts);
        }
        foreach($subposts as $post) : setup_postdata($post); $cc++;
        if($cc == 1) {
        $varsize = 'is-size-3-1 zonabold'; 
        } else {
        $varsize = 'is-size-3-desktop is-size-4-mobile zonabold';     
        }
        ?>
        
        <?php if($cc == 1) { ?>
        <div class="triple-wr-o">
          <div class="triple-row-post tp_<?php echo $cc; ?>">
            <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
          </div>
        </div>
        <div class="triple-wr-s">
          <div class="inner-triple-wr-s">
        <?php } else { ?>
        <div class="triple-row-post tp_<?php echo $cc; ?>">      
        <?php include(TEMPLATEPATH .'/assets/blocks/row-box.php'); ?>
        </div>
        <?php } ?>
      
        <?php if($cc == $totalposts) { ?>
          </div></div>
        <?php } ?>      
      
        <?php endforeach; wp_reset_postdata(); ?>
    </div>      
  </div>
</div>