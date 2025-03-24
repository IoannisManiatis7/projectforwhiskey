<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  

  <div class="column is-full is-hidden-fullwindow is-hidden-touch">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-6">
        <div class="wrap-header-section">
        <?php if(isset($row['slug'])) { ?>
        <h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2>
        <?php } else { ?>
        <a href="/category/<?php echo $row['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2></a>
        <?php } ?>
        </div>
      </div>
      <div class="column is-6 has-text-right">
        <?php if(isset($row['slug'])) { ?>        
        <a href="/category/<?php echo $row['slug']; ?>/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
        <?php } ?>
      </div>
    </div>
  </div>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">
        <?php if(isset($row['slug'])) { ?>
        <a href="/category/<?php echo $row['slug']; ?>/"><h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2></a>        
        <a href="/category/<?php echo $row['slug']; ?>/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a> 
        <?php } else { ?>
        <h2 class="header-section zonaultra f-400"><?php echo $row['title']; ?></h2>
        <?php } ?>
      </div>
    </div>
  </div>
  
  <div class="column">
<div class="columns is-multiline is-mobile is-variable <?php echo VARIABLES; ?>">    
      <?php
      $args = array('numberposts' => 20, 'category_name' => $row['slug'], 'no_found_rows' => true, 'post_status' =>'publish', 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP )));
      if(is_home()) {
        $args['post_type'] = array('post');
        
        $argsp = $args;
        $argsp['post_type'] = array('printed_post');
        $argsp['tax_query'] = array(
            array(
                'taxonomy' => 'post_tag',
                'field' => 'slug',
                'terms' => 'entypi-ekdosi'
            )
        );
        
        $rowposts = array_merge(get_posts($args), get_posts($argsp));
        
        usort($rowposts, function($post_a, $post_b) {
        // Compare the post_date of the posts, and if $post_b is newer, then it will be displayed first
          return $post_b->post_date <=> $post_a->post_date;
        });
        
     } elseif(is_page('print')) {
        $args['post_type'] = array('printed_post');
        $rowposts = get_posts( $args );
      } ?>
  
    <?php
    $cc = 0;
    $rowposts_a = array_slice($rowposts, 0, 4);
    foreach($rowposts_a as $post) : setup_postdata($post); $cc++;
    $extraclass = null;
    if($cc == 1) {
    $extraclass = 'flex-article reverse-row';
    $varsize = 'is-size-2 zonabold'; 
    } else {
    $varsize = 'is-size-3 is-size-3-1-mobile zonabold'; 
    }
    ?>
    <div class="column <?php if($cc == 1) {echo ''; } else {echo 'is-4-desktop is-4-tablet is-4-mobile is-full-small'; } ?>">
    <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
  
    <?php if($cc == 1) { ?>
    <div class="column is-narrow-desktop is-4-mobile is-4-tablet is-full-small">
      <div class="sidebar-width">
        <div class="sivilla">
        <?php
        $args = array(
        'numberposts' => 1, 
        'category_name' => 'sivylla',
        'post_type' => array('post', 'printed_post'),
        'no_found_rows' => true,
        'post_status' =>'publish', 
        'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))
        );  
        $gnomesmore = get_posts( $args );
        foreach($gnomesmore as $post) : setup_postdata($post); ?>
        <a href="<?php the_permalink(); ?>" class="boxone-wrap boxone-l2 opinion-box">
        <div class="l2-top">
          <div class="boxone-op-header">
            <h2 class="my-0 zonaultra is-size-4 f-400">ΣΙΒΥΛΛΑ</h2>
          </div>
          <div class="wrapbox-author">
            <div class="is-relative authorimage" style="border: 2px solid #FFF;background-image:url('/wp-content/themes/whsk_tovima.com/common/imgs/sivila.png')"></div>
          </div>
        </div>
        <div class="wrap-post-header mt-5 pt-4">
          <h3 class="my-0 o-head zonareg not-black f-400 is-size-2-1"><?php the_title(); ?></h3>
        </div>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <div class="column is-full is-hidden-small p-0">
    </div>
    <?php } ?>
  
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>


</div>