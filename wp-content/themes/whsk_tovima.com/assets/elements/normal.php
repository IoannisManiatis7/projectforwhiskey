<?php 
$tagsection = get_field('taxonomy_tagsection', $taxonomy . '_' . $term_id); 
$tagname = get_field('taxonomy_tag_name', $taxonomy . '_' . $term_id); 
if($tagsection) { ?>
<div class="column is-full">
<div class='category-tag-inner'>
<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-6">
        <div class="wrap-header-section">
          <a href="/tag/<?php echo $tagsection; ?>"><h2 class="header-section zonaultra f-400"><?php echo $tagname; ?></h2></a>
        </div>
      </div>
      <div class="column is-6 has-text-right">
        <a href="/tag/<?php echo $tagsection; ?>" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
      </div>
    </div>
  </div>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">
        <a href="/tag/<?php echo $tagsection; ?>"><h2 class="header-section zonaultra f-400"><?php echo $tagname; ?></h2></a>
        <a href="/tag/<?php echo $tagsection; ?>" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a> 
      </div>
    </div>
  </div>
  
  <div class="column">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
    <div class="column is-full-touch">
    <div class="columns onerow is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
      <?php
      $cc = 0;
      $args = array('numberposts' => 4, 
            'tag' => $tagsection,
                    'no_found_rows' => true, 
            'post_status' =>'publish',
            'post_type' =>  array('post', 'printed_post'),
//             'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))
      );
      $rowposts = get_posts( $args );
      foreach($rowposts as $post) : setup_postdata($post); $cc++;
      $extraclass = null;
      if($cc == 1) {
      $extraclass = 'flex-article reverse-row';
      $varsize = 'is-size-2 zonabold'; 
      } else {
      $varsize = 'is-size-3 is-size-3-1-mobile zonabold'; 
      }
      ?>
      <div class="column <?php if($cc == 1) {echo 'is-full'; } else {echo 'is-4-desktop is-4-tablet is-4-mobile is-full-small'; } ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    </div>
    <div class="column is-narrow-desktop is-full-touch">
    <div class="sidebar-width">
      <ul class="home-cat-latest row-items">
      <?php 
      $ii = 0;  
      $args = array(
        'numberposts' => 5, 
        'tag' => $tagsection,
        'no_found_rows' => true, 
        'post_status' =>'publish',
        'offset' => 4,
//         'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
      );
      if(is_home()) {
        $args['post_type'] = array('post', 'printed_post');
      } elseif(is_page('print')) {
        $args['post_type'] = array('printed_post');
      }
      $latestrowposts = get_posts( $args );
      foreach($latestrowposts as $post) : setup_postdata($post); $ii++;
      $varsize = 'is-size-3-desktop is-size-4-mobile is-size-4-tablet zonabold'; ?>
      <li class="row-item rt_<?php echo $ii ; ?>"><?php include(TEMPLATEPATH .'/assets/blocks/simple-row.php'); ?></li>
      <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
  </div>
  </div>
  
</div>
</div>
</div>
<?php } ?>