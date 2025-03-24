<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  <div class="column is-full">
    <div class="wrap-header-section">
      <?php
      if(isset($subitem['type']) && $subitem['type'] == 'tax') {
      $varpath = 'editor';
      } else {
      $varpath = 'category';  
      } ?>
      <a href="/<?php echo $varpath; ?>/<?php echo $subitem['slug']; ?>/">
        <h2 class="header-section zonaultra f-400"><?php echo $subitem['title']; ?></h2>
      </a>
    </div>
  </div>
  <div class="column is-full is-relative wrap-triples ro_<?php echo $subitem['slug']; ?>">
<?php
  $cc = 0;

  if(isset($subitem['relationship']) && $subitem['relationship'] == 'yes') {
    $subposts = get_field($subitem['acfname'], $subitem['pagename']);
    $totalposts = '3';
  } else {

  $args = array(
  'numberposts' => 3,
  'no_found_rows' => true,
//   'category_name' => $subitem['slug'],
  'post_status' =>'publish',
  'date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
  );
    
  if(is_home()) {
    $args['post_type'] = array('post', 'printed_post');
  } elseif(is_page('print')) {
    $args['post_type'] = array('printed_post');
  }

  if(is_home() && $subitem['slug'] === 'mathitikes-efimerides') {
    $args['date_query'] =  array( array( 'after'  => '45 days ago'));
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
  $extraclass = null;
  $varsize = 'zonabold'; ?>
    <?php if($cc == 1) { ?>
    <div class="triple-row-post big-triple bg_<?php echo $cc; ?>">
      <a href="<?php the_permalink(); ?>" 
      data-link-name="article"
      class="is-block is-relative <?php if(get_field('locked_article')) {echo 'locked_article '; } ?> relative-box">
      <div class="wrap-thumb">
      <?php 
      $imgmeta = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
      <figure style="--background:#EEEEEE" class="tile-image thumb-holder <?php if ($imgmeta['2'] > $imgmeta['1']) { echo 'vertical-thumb'; } ?>">
      <?php if ( has_post_thumbnail() ) { ?>    
      <?php the_post_thumbnail('large', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
      <?php } else { ?>
      <img width="500" height="333" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" alt="<?php echo get_the_title(); ?>" class="imagefit" />
      <?php } ?>    
      </figure>
      </div>
      <div class="tile-content">
      <div class="wrap-main-tile-content">
      <div class="wrap-ohead">
      <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
      <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
      </h3>
      </div>
      </div>
      <div class="post-meta-wrapper">

      <span class="post-category manrope is-size-5 f-600"><?php echo strip_tags(post_taxonomy()); ?></span>

      <div class="post-meta">
      <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
      <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
      </div>
      </div>


      <p class="is-size-normal post-description text-ellipsis text-ellipsis-4">
      <?php
        if(get_field('front_lead')) { echo strip_tags(get_field('front_lead'));
        } elseif(has_excerpt()) { 
        echo get_the_excerpt();
        } ?>
      </p>

      </div>
      </a>
    </div>
    <div class="wrap-big-triple-rest">
    <?php } else { ?>
    <div class="triple-row-post big-triple bg_<?php echo $cc; ?>">
    <?php include(TEMPLATEPATH .'/assets/blocks/row-box.php'); ?>
    </div>
    <?php } ?>
    
    <?php if($cc == $totalposts) { ?>
    </div>
    <?php } ?>
    
  <?php endforeach; wp_reset_postdata(); ?>
  </div>
</div>