<div class="vima-box sidebar-widget">

  <header class="vima-box-header">    
    <h4 class="vimabox-tile manrope is-size-normal f-700">Από την έντυπη έκδοση</h4>
    <?php if(isset($_COOKIE['user_email'])) { ?>
    <?php } else { ?>
    <a target="_blank" href="/member-login/" class="is-flex locked_article_row">
    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11.667" viewBox="0 0 10 11.667">
    <path id="lock" d="M11.333,6.5A1.667,1.667,0,0,1,13,8.167V11.5a1.667,1.667,0,0,1-1.667,1.667H4.667A1.667,1.667,0,0,1,3,11.5V8.167A1.667,1.667,0,0,1,4.667,6.5V4.833a3.333,3.333,0,0,1,6.667,0ZM8,2.611a2.222,2.222,0,0,1,2.222,2.222V6.5H5.778V4.833A2.222,2.222,0,0,1,8,2.611Zm3.333,5H4.667a.556.556,0,0,0-.556.556V11.5a.556.556,0,0,0,.556.556h6.667a.556.556,0,0,0,.556-.556V8.167A.556.556,0,0,0,11.333,7.611Z" transform="translate(-3 -1.5)" fill="#bf7217" fill-rule="evenodd"/>
    </svg>
    <span class="manrope is-size-5 semigrey-c">Είσοδος</span>
    </a>
    <?php }  ?>
  </header>
    <?php
    $printitem = get_posts( 
      array(
      'post_type' => 'kioski_posts',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'no_found_rows' => true,
      'date_query' => array( array( 'after'  => WHSK_DATE_QUERY)),
      'tax_query' => array(
        array(
          'taxonomy' => 'magazines',
          'field' => 'slug',
          'terms' => 'to-vima'
        )
      )
    ));
    foreach($printitem as $post) : setup_postdata($post); ?>
    <a href="/to-vima/" class="is-block">  
      <div class="wrap-paper">
      <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?>          
      </div>
    </a>
    <?php endforeach; wp_reset_postdata(); ?>
  <?php
  $cc = 0;
  $entiporowposts = get_field('box8_selection','tovimaprint_index');
  foreach($entiporowposts as $post) : setup_postdata($post); $cc++;
  if($cc > 2) continue;
  $varsize = 'is-size-3 zonabold'; ?>
  <div class="row-post printed-post">
    <?php include(TEMPLATEPATH .'/assets/blocks/row-box.php'); ?>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
</div>