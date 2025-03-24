<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <?php 
$vartitle = false;
$varslug = false;
$varspimage = false;
$varsplink = false;
  if(isset($row['url'])) {
    $varslug = '/tag/δημοσκόπηση/';
    $vartitle = $row['title'];
  } elseif(isset($row['title'])) {
  $varslug = '/category/'.$row['slug'];
  $vartitle = $row['title'];
  } elseif( isset($row['relationship']) && get_field('header_widget_title', $row['pagename'])) {
  $varslug = get_field('header_widget_link', $row['pagename']);
  $vartitle = get_field('header_widget_title', $row['pagename']);
  $varspimage = get_field('sponsored_image', $row['pagename']);
  $varsplink = get_field('sponsored_link', $row['pagename']);  
  } ?>  
  
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-mobile is-multiline level is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-6-desktop is-8-mobile">
        <div class="wrap-header-section">
          <?php if(isset($row['pagename']) && $row['pagename'] === 'tovima_only_vima') { ?>
          <h2 class="header-section zonaultra f-400 uppercase"><?php echo $vartitle; ?></h2>          
          <?php } else { ?>
          <a href="<?php echo $varslug; ?>">
            <h2 class="header-section zonaultra f-400 uppercase"><?php echo $vartitle; ?></h2>
          </a>
          <?php if(isset($row['extra-class']) && $row['extra-class'] === 'wsj') { ?>
            <div class="wsj-row" style="max-width:225px;line-height: 0;margin-top:0">
            <a href="/category/wsj">
            <img alt="WSJ" width="450" height="38" style="height:auto;width:100%" src="/wp-content/themes/whsk_tovima.com/common/imgs/WSJSection.png" />
            </a>
          </div>
          <?php } ?>
          <?php } ?>
          <?php if($varspimage) { ?>
            <div class="powered-wrap" style="clear:both">
              <span class="powered">powered by 
                <?php if($varsplink) { ?>
                  <a href="<?php echo $varsplink; ?>" target="_blank">  
                    <img alt="powered by" src="<?php echo get_field('sponsored_image',  $row['pagename']); ?>" />
                  </a>
                <?php } else { ?>
                <img alt="powered by" src="<?php echo get_field('sponsored_image',  $row['pagename']); ?>" />
                <?php } ?>
                </span>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="column is-6-desktop is-4-mobile has-text-right">
        <?php if(isset($row['pagename']) && $row['pagename'] === 'tovima_only_vima') { ?>
        <?php } else { ?>
        <a href="<?php echo $varslug; ?>" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
        <?php } ?>
      </div>
    </div>
  </div>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">
        <div class="top-items">
        <a href="<?php echo $varslug; ?>"><h2 class="header-section zonaultra f-400 uppercase"><?php echo $vartitle; ?></h2></a>
        <?php if(isset($row['extra-class']) && $row['extra-class'] === 'wsj') { ?>
          <div class="wsj-row" style="max-width:225px;line-height: 0;margin-top:0">
          <a href="/category/wsj">
            <img alt="WSJ" width="450" height="38" style="height:auto;width:100%" src="/wp-content/themes/whsk_tovima.com/common/imgs/WSJSection.png" />
          </a>
          </div>
        <?php } ?>
        <?php if($varspimage) { ?>
            <div class="powered-wrap" style="clear:both">
              <span class="powered">powered by 
                <?php if($varsplink) { ?>
                  <a href="<?php echo $varsplink; ?>" target="_blank">  
                    <img alt="powered by" src="<?php echo get_field('sponsored_image',  $row['pagename']); ?>" />
                  </a>
                <?php } else { ?>
                <img alt="powered by" src="<?php echo get_field('sponsored_image',  $row['pagename']); ?>" />
                <?php } ?>
                </span>
            </div>
          <?php } ?>
        </div>
        <div class="footer-items">
        <a href="<?php echo $varslug; ?>" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a> 
        </div>
      </div>
    </div>
  </div>  
  
  <div class="column">
    
  <div class="columns onerow is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
    
      <?php
      $cc = 0;
    
      if(isset($row['relationship']) && $row['relationship'] == 'yes') {
        $onerowposts = get_field($row['acfname'], $row['pagename']);
      } else {
       
      $args = array(
        'numberposts' => 4, 
        'category_name' => $row['slug'], 
        'no_found_rows' => true,
        'post_status' =>'publish',
        'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP ))
      );
        
      $onerowposts = get_posts($args);
      }
      $bon_count = count($onerowposts);
      foreach($onerowposts as $post) : setup_postdata($post); $cc++;
      if(isset($row['extra-class']) && $row['extra-class'] === 'wsj' && $cc == 3) {
      $varsize = 'is-size-1 zonabold';
      } else {
       $varsize = 'is-size-3 is-size-3-1-mobile zonaregular';   
      }
      ?>
      <div class="onr_<?php echo $cc; ?> total_<?php echo $bon_count; ?> column <?php if($bon_count == '4') {echo 'is-3-desktop is-4-tablet is-4-mobile is-full-small'; } elseif($bon_count == '3') {echo 'is-4-desktop is-4-tablet is-4-mobile is-full-small'; } elseif($bon_count == '6') { echo 'is-2-desktop is-4-tablet is-4-mobile is-full-small'; } ?> <?php if($bon_count == '4' && $cc == 4) {echo 'disable-portait'; } ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>    
    
  </div>
  
  </div>
  
</div>