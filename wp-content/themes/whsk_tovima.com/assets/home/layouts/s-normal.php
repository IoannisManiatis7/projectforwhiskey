<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <?php /*
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
  */ ?>
  
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
      $cc = 0;
      if(isset($row['relationship']) && $row['relationship'] === 'yes') {
      $rowposts = get_field($row['acfname'], $row['pagename']);
      }
      foreach($rowposts as $post) : setup_postdata($post); $cc++;
      if($cc > $row['pubitems']) continue;
      $extraclass = null;
      if($cc == 1) {
      $extraclass = 'flex-article';
      $varsize = 'is-size-1-desktop is-size-1-tablet is-size-2-mobile zonabold'; 
      } else {
      $varsize = 'is-size-3-1 zonabold'; 
      }
      ?>
  
    <div class="column <?php if($cc == 1) {echo ''; } else {echo 'is-3-desktop is-half-tablet is-half-mobile is-full-small'; } ?>">
    <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
  
    <?php if($cc == 1) { ?>
    <div class="column is-narrow-desktop is-4-mobile is-4-tablet is-full-small">
      <div class="sidebar-width">
        <div id="Gnomes" class="vima-box sidebar-widget latest-opinions">

  <header class="vima-box-header">
    <a href="/category/opinions/">
      <h2 class="vimabox-tile zonaultra">ΓΝΩΜΕΣ</h2>
    </a>
  </header>
  
  <?php
  $cci = 0;
  $args = array(
  'numberposts' => 3, 
  'category_name' => 'opinions',
  'post_type' => array('post', 'printed_post'),
  'tag' => 'ekloges-2023',
  'no_found_rows' => true,
  'post_status' =>'publish', 
  'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))
  );  
  $gnomesmore = get_posts( $args );
  foreach($gnomesmore as $post) : setup_postdata($post); $cci++; 
  if($cci > 3) continue;
  $varsize = 'is-size-3-1 is-size-4-mobile zonaregular'; ?>
  
  <div class="simple-row <?php if(get_field('locked_article')) {echo 'locked_article'; } ?>">
    
    <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
    <?php if ($term_list) {
    $author_image = get_field('author-image', 'nea_authors_' . $term_list[0]->term_id . ''); ?>
    <a href="/editor/<?php echo $term_list[0]->slug; ?>">
    <author class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
      <?php echo $term_list[0]->name; ?>
    </author>
    </a>
    <?php } ?>
    
    <a class="<?php if($author_image) { echo 'resize-link'; } ?>" href="<?php the_permalink(); ?>">
      <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
        <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
      </h3>
    </a>
    
    <?php if($author_image) { ?>
      <div class="is-relative author_image overlay">
        <img loading="lazy" src="<?php echo $author_image; ?>" width="150" height="150" alt="<?php echo $term_list[0]->name; ?>" />
      </div>
    <?php } ?>
    
  </div>
  
  <?php endforeach; wp_reset_postdata(); ?>
  <div class="wra-call-action">
    <a href="/category/opinions/" class="call-action-button yellow-button">ΠΕΡΙΣΣΟΤΕΡΕΣ ΓΝΩΜΕΣ</a>  
  </div>
  
</div>
      </div>
    </div>
  
    <div class="column is-full separator-horizontal-row is-hidden-small">
      <sep></sep>
    </div>
    <?php } ?>
  
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>

<!--   <div class="column is-full">
  <div style="margin:30px auto">
    <div class="maxgridrow">
      <div class="has-text-centered">
        <a href="https://what2vote.gr/el/" target="_blank" style="display:block;margin:0 auto">
          <picture>
          <source media="(min-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/common/imgs/matheTiPsifizeis1500x100.gif">
          <img src="<?php echo get_template_directory_uri(); ?>/common/imgs/matheTiPsifizeis300x150.gif" alt="MatheTiPsifizeis" style="width:100%;max-width:100%;">
          </picture>
        </a>
      </div>
    </div>
  </div>
  </div> -->
  
</div>