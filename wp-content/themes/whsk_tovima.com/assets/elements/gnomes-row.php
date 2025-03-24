<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
  <div class="column is-full">
    <div class="separator-horizontal-row"><sep></sep></div>
  </div>
  
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
      <div class="column is-6">
        <div class="wrap-header-section">
        <a href="/category/opinions/"><h2 class="header-section zonaultra f-400">OPINIONS</h2></a>
        </div>
      </div>
      <div class="column is-6 has-text-right">
        <a href="/category/opinions/" class="manrope is-size-6 f-700 grey-c"><?php echo READMORE; ?></a>
      </div>
    </div>
  </div>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">      
        <a href="/category/opinions/"><h2 class="header-section zonaultra f-400">OPINIONS</h2></a>
        <a href="/category/opinions/" class="manrope is-size-6 f-700 grey-c"><?php echo READMORE; ?></a> 
      </div>
    </div>
  </div> 
  
  <div class="column">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
      
      <?php 
      $cc = 0; $gnomesmore = get_field('box5_selection','tovima_opinions'); foreach($gnomesmore as $post) { setup_postdata($post); $cc++; if($cc > 2) continue; 
      $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
      <div class="column is-4-tablet is-4-mobile is-full-small is-relative br edit__col">
        <div class="author-col">
        <div class="author-post-col">
        <?php if(get_field('exauthor_textn')) { ?>
          <span style="color:var(--darkblue)" class="is-block vima-author line-height-1 manrope is-size-5 f-700 mb-5">
            <?php the_field('exauthor_textn'); ?>
          </span>
          <?php } elseif ($term_list) { ?>
          <a href="/editor/<?php echo $term_list[0]->slug; ?>">
          <span style="color:var(--darkblue)" class="is-block vima-author line-height-1 manrope is-size-5 f-700 mb-5">
            <?php echo $term_list[0]->name; ?>
          </span>
          </a>
          <?php } ?>
          <a href="<?php the_permalink(); ?>">
            <h3 class="o-head f-400 my-0 <?php if($cc == 1) {echo 'zonabold hero-size is-size-1-touch'; } else { echo 'zonareg is-size-1-desktop is-size-2-touch'; } ?>">
              <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
            </h3>
          </a>
        </div>
          
        <?php if($term_list) { 
        $author_image = get_field('author-image', 'nea_authors_' . $term_list[0]->term_id . '');
        if($author_image) { ?>
        <div class="author-image-col">
          <div class="is-relative author_image overlay">
            <img loading="lazy" src="<?php echo $author_image; ?>" width="150" height="150" alt="<?php echo $term_list[0]->name; ?>" />
          </div>
        </div>
        <?php } } ?>
          
        </div>
      </div>
      <?php } wp_reset_postdata(); ?>
      
      <div class="column is-4-tablet is-4-mobile is-full-small is-relative the---last--column">
      <?php $cc = 0; $gnomesmorex = get_field('box5_selection','tovima_opinions'); foreach($gnomesmorex as $post) { setup_postdata($post); $cc++; if($cc < 3) continue; ?>
        <div class="author-col author--col--<?php echo $cc; ?>">
        <div class="author-post-col">
          <?php 
          $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
          <?php if(get_field('exauthor_textn')) { ?>
          <span style="color:var(--darkblue)" class="is-block vima-author line-height-1 manrope is-size-5 f-700 mb-5">
            <?php the_field('exauthor_textn'); ?>
          </span>
          <?php } elseif ($term_list) { ?>
            <a href="/editor/<?php echo $term_list[0]->slug; ?>">
            <span style="color:var(--darkblue)" class="is-block vima-author line-height-1 manrope is-size-5 f-700 mb-5">
              <?php echo $term_list[0]->name; ?>
            </span>
            </a>
          <?php } ?>
          <a style="width:212px;display:block" href="<?php the_permalink(); ?>">
            <h3 class="o-head f-400 my-0 is-size-4-desktop is-size-3-touch">
              <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
            </h3>
          </a>
        </div>
          
        <?php if($term_list) { 
        $author_image = get_field('author-image', 'nea_authors_' . $term_list[0]->term_id . ''); 
        if($author_image) { ?>
        <div class="author-image-col">
          <div class="is-relative author_image overlay">
            <img loading="lazy" src="<?php echo $author_image; ?>" width="150" height="150" alt="<?php echo $term_list[0]->name; ?>" />
          </div>
        </div>
        <?php } } ?>
          
        </div>
        <?php if($cc == 3) { ?>
        <div class="gnsp is-hidden-touch"></div>
        <?php } ?>
      <?php } wp_reset_postdata(); ?>
      </div>
      
    </div>
  </div>

</div>