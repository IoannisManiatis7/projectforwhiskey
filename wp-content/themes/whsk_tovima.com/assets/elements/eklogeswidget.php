<div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width">
      <div class="wrap-header-section inner-fullwindow-items">
        <a href="/ekloges-2023/" class="eklogesw-logo">
          <img alt="ΕΚΛΟΓΕΣ 2023" width="282" height="73" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/ekloges2023Logo.svg" />
        </a>
        <?php /*
        <ul class="ekloges-menu">
          <li class="menu-item"><a href="/tag/ekloges-2023/">ΕΙΔΗΣΕΙΣ</a></li>
          <li class="menu-item with-children">ΚΟΜΜΑΤΑ <span class="dashicons dashicons-arrow-down-alt2"></span>
            <ul class="submenu">
              <li class="menu-item"><a href="/tag/νέα-δημοκρατία/">ΝΔ</a></li>
              <li class="menu-item"><a href="/tag/συριζα/">ΣΥΡΙΖΑ</a></li>
              <li class="menu-item"><a href="/tag/πασοκ/">ΠΑΣΟΚ</a></li>
              <li class="menu-item"><a href="/tag/κκε/">ΚΚΕ</a></li>
              <li class="menu-item"><a href="/tag/elliniki-lysi/">ΕΛΛΗΝΙΚΗ ΛΥΣΗ</a></li>
            </ul>
          </li>
          <!-- <li class="menu-item"><a href="/tag/δημοσκόπηση/">ΔΗΜΟΣΚΟΠΗΣΕΙΣ</a></li>
          <li class="menu-item"><a href="/tag/synentefxeis-ypopsifion/">ΣΥΝΕΝΤΕΥΞΕΙΣ</a></li> -->
          <!-- <li class="menu-item"><a href="/category/videos/">VIDEOS</a></li> -->
          <li class="menu-item"><a href="/2023/05/04/politics/ekloges-2023-pou-psifizo-vreite-eykola-online-to-eklogiko-sas-kentro/">ΠΟΥ ΨΗΦΙΖΩ</a></li>
          <li class="menu-item"><a href="/tag/apotelesmata-eklogon/">ΠΕΡΙΦΕΡΕΙΕΣ</a></li>
          <li class="menu-item"><a href="/ekloges-2023/xartis-apotelesmaton/">ΧΑΡΤΗΣ ΑΠΟΤΕΛΕΣΜΑΤΩΝ</a></li>
        </ul>
        */ ?>
      </div>
    </div>
  </div>
  

  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-full is-mobile is-multiline is-variable level upper-header <?php echo VARIABLES; ?>">
    <div class="column is-4-desktop is-4-mobile is-full-small">
      <div class="wrap-header-section">
        <a href="/ekloges-2023/" class="eklogesw-logo">
          <picture>
        <source media="(max-width:767px)" srcset="/wp-content/themes/whsk_tovima.com/common/imgs/ekloges2023Logo.svg" />
        <source media="(min-width: 768px)" srcset="/wp-content/themes/whsk_tovima.com/common/imgs/ekloges2023Horizontal.svg" />
        <img loading="lazy" alt="ΕΚΛΟΓΕΣ 2023" src="/wp-content/themes/whsk_tovima.com/common/imgs/ekloges2023Logo.svg" width="282" height="73" style="width: 100%; height: auto;" />
      </picture>
        </a>
      </div>
    </div>
    <div class="column is-8-desktop is-8-mobile is-full-small has-text-right-desktop has-text-right-mobile has-text-left-small">
    <?php /*
      <ul class="ekloges-menu-horizontal">
      <li class="menu-item"><a href="/tag/ekloges-2023/">ΕΙΔΗΣΕΙΣ</a></li>
      <li class="menu-item with-children">ΚΟΜΜΑΤΑ <span class="dashicons dashicons-arrow-down-alt2"></span>
        <ul class="submenu">
          <li class="menu-item"><a href="/tag/νέα-δημοκρατία/">ΝΔ</a></li>
          <li class="menu-item"><a href="/tag/συριζα/">ΣΥΡΙΖΑ</a></li>
          <li class="menu-item"><a href="/tag/πασοκ/">ΠΑΣΟΚ</a></li>
          <li class="menu-item"><a href="/tag/κκε/">ΚΚΕ</a></li>
          <li class="menu-item"><a href="/tag/elliniki-lysi/">ΕΛΛΗΝΙΚΗ ΛΥΣΗ</a></li>
        </ul>
      </li>
      <!-- <li class="menu-item"><a href="/tag/δημοσκόπηση/">ΔΗΜΟΣΚΟΠΗΣΕΙΣ</a></li>
      <li class="menu-item"><a href="/tag/synentefxeis-ypopsifion/">ΣΥΝΕΝΤΕΥΞΕΙΣ</a></li> -->
      <!-- <li class="menu-item"><a href="/category/videos/">VIDEOS</a></li> -->
      <li class="menu-item"><a href="/2023/05/04/politics/ekloges-2023-pou-psifizo-vreite-eykola-online-to-eklogiko-sas-kentro/">ΠΟΥ ΨΗΦΙΖΩ</a></li>
      <li class="menu-item"><a href="/tag/apotelesmata-eklogon/">ΠΕΡΙΦΕΡΕΙΕΣ</a></li>
      <li class="menu-item"><a href="/ekloges-2023/xartis-apotelesmaton/">ΧΑΡΤΗΣ ΑΠΟΤΕΛΕΣΜΑΤΩΝ</a></li>
    </ul>
    */ ?>
    </div>
    </div>  
  </div>
  
  <div class="column">
  <div class="columns is-multiline is-mobile is-variable <?php echo VARIABLES; ?>">    
      <?php
      $relationship = 'boxn5_selection';
      $printposts = 'tovimagr_elections23';
      $cc = 0;
      $eklogesrowposts = get_field($relationship,$printposts);
      foreach($eklogesrowposts as $post) : setup_postdata($post); $cc++;
      if($cc > 5) continue;
      $extraclass = null;
      if($cc == 1) {
      $extraclass = 'flex-article';
      $varsize = 'is-size-1-desktop is-size-1-tablet is-size-2-mobile zonabold'; 
      } else {
      $varsize = 'is-size-3-1 zonabold'; 
      }
      ?>
  
    <div class="column <?php if($cc == 1) {echo 'is-9-desktop is-8-tablet is-8-mobile is-full-small'; } else {echo 'is-3-desktop is-half-tablet is-half-mobile is-full-small'; } ?>">
    <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
    </div>
  
    <?php if($cc == 1) { ?>
    <div class="column is-3-desktop is-4-mobile is-4-tablet is-full-small">
      <div class="sidebar-width">
        
        <?php
        $args = array(
        'numberposts' => 1, 
        'category_name' => 'opinions',
        'post_type' => array('post', 'printed_post'),
        'tag' => 'ekloges-2023',
        'no_found_rows' => true,
        'post_status' =>'publish', 
        'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))
        );  
        $gnomesmore = get_posts( $args );
        foreach($gnomesmore as $post) : setup_postdata($post); ?>
        <a href="<?php the_permalink(); ?>" class="boxone-wrap boxone-l2 opinion-box">
        <div class="l2-top">
        <div class="boxone-op-header">
          <h2 class="my-0 zonaultra is-size-4 f-400">ΓΝΩΜΕΣ</h2>
        </div>
        <div class="wrapbox-author">
        <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
        <?php if ($term_list) {
        $author_image = get_field('author-image', 'nea_authors_' . $term_list[0]->term_id . ''); ?>
        <?php if($author_image) { ?>
        <div class="is-relative authorimage" style="background-image:url(<?php echo $author_image; ?>)"></div>
        <?php } ?>
        <author class="author-name">
        <?php echo $term_list[0]->name; ?>
        </author>
        <?php } ?>
        </div>
        </div>
        <div class="wrap-post-header mt-5 pt-4">
        <h3 class="my-0 o-head zonareg not-black f-400 is-size-2-1">
        <?php the_title(); ?>
        </h3>
        </div>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
        
      </div>
    </div>
  
    <div class="column is-full separator-horizontal-row is-hidden-small">
      <sep></sep>
    </div>
    <?php } ?>
  
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>
  
</div>