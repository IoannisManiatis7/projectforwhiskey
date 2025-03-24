<?php 
$featured_posts = get_field('box_topone', 'tovima_index');
if( $featured_posts ):
foreach( $featured_posts as $post ): setup_postdata($post); ?>
<?php if(in_category('kirio-arthro')) { ?>
<a href="<?php the_permalink(); ?>" class="boxone-wrap boxone-l1">
  <div class="b-logo-wrapp">
  <div class="b-logo">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="68" height="68" viewBox="0 0 68 68">
  <defs>
    <clipPath id="clip-path">
      <rect id="Rectangle_54" data-name="Rectangle 54" width="39" height="54" fill="none" stroke="#707070" stroke-width="1"/>
    </clipPath>
  </defs>
  <g id="B_logo" data-name="B logo" transform="translate(-14858 -3003)">
    <rect id="Rectangle_53" data-name="Rectangle 53" width="68" height="68" transform="translate(14858 3003)" fill="#3a55a6"/>
    <g id="blogo" transform="translate(14872.5 3010)" clip-path="url(#clip-path)">
      <path id="Path_54" data-name="Path 54" d="M130.309,44.049c-1.059,0-2.382-.187-2.382-2.159,0-1.483,1.223-1.977,1.868-2.345s1.411-.6,1.411-3.581l-.138-27.419c0-2.967-.762-3.208-1.411-3.581a2.511,2.511,0,0,1-1.63-2.345C128.033.641,129.338.394,130.42.394h17.561c1.731,0,9.972,1.116,9.972,9.509,0,8.032-5.1,10.13-5.1,10.13s6.508,2.466,6.508,11.855-8.019,12.162-11.814,12.162Zm8.537-5.385H143.4c1.841,0,7.7-.368,7.7-7.778s-5.293-7.413-5.293-7.413h-6.96ZM138.74,5.8V17.808h6.508s4.875.374,4.875-5.68a6.1,6.1,0,0,0-5.743-6.422c-.869,0-5.637.109-5.637.109Z" transform="translate(-124.026 4.7)" fill="#fff"/>
    </g>
  </g>
</svg>
  </div>
  <span class="darkblue-c is-size-5 manrope f-700 is-block" style="padding-top:10px;white-space:nowrap">Κύριο Άρθρο</span>
  </div>
  <div class="l1-wrapper">
    <div class="boxone-header">
      <h3 class="f-400 not-black is-size-2 zonaregular my-0"><?php the_title(); ?></h3>
      <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
      <?php if ($term_list) { ?>      
      <author><?php echo $term_list[0]->name; ?></author>
      <?php } ?>
    </div>
    <div class="kl-desc">
    <p>
      <?php 
      if(get_field('front_lead')) { 
      echo strip_tags(get_field('front_lead'));
      } else { 
      echo get_the_excerpt();
      } ?></p>
    </div>
  </div>
</a>
<?php } else if(in_category('opinions')) { ?>
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
  <div class="wrap-post-header mt-4">
    <h3 class="my-0 o-head zonabold not-black f-400 is-size-2-1">
      <?php the_title(); ?>
    </h3>
    <p>
        <?php 
       if(get_field('front_lead')) { 
         echo strip_tags(get_field('front_lead'));
       } else { 
         echo get_the_excerpt();
       } ?>
    </p>
  </div>
</a>
<?php } else { ?>
<a href="<?php the_permalink(); ?>" data-link-name="article" class="boxone-wrap  is-relative relative-box">
  <div class="wrap-thumb">
    <figure style="" class="tile-image thumb-holder ">
      <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>
    </figure>
  </div>
  <div class="tile-content">
    <div class="wrap-main-tile-content">
      <div class="wrap-ohead">
        <h3 class="o-head f-400 my-0 is-size-3-1 zonabold">
          <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
        </h3>
      </div>
      <p>
        <?php 
       if(get_field('front_lead')) { 
         echo strip_tags(get_field('front_lead'));
       } else { 
         echo get_the_excerpt();
       } ?>
      </p>
    </div>
    <div class="post-meta-wrapper">
      <span class="post-category manrope is-size-5 f-600"><?php echo strip_tags(post_taxonomy()); ?></span>
      <div class="post-meta">
        <?php include(TEMPLATEPATH .'/assets/repeaters/time.php'); ?>
        <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
      </div>
    </div>
  </div>
</a>
<?php } ?>
<?php endforeach; wp_reset_postdata(); 
endif; ?>