<?php get_header();
/*
 * Template Name: TEMPLATE 5 TO ΠΡΩΙ
 * Template Post Type: post
 */
?>
  <?php
  $thumb_full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
  $post_content = apply_filters('the_content',get_the_content());
  $text = str_replace("'",'"',strip_tags( html_entity_decode( $post_content ) ) );
  $text = trim(preg_replace('/\s+/', ' ', $text));
  
  $posttags = get_the_tags();
  if($posttags) {
  $tags = array();
  foreach($posttags as $tag) { $tags[] = str_replace("'", "",$tag->name); }
  $tagec = implode(',',$tags);
  } else {
    $tagec = 'Το Βημα,Πολιτική, Οικονομία,Εφημερίδα, Πρωτοσέλιδο Σήμερα, Επικαιρότητα, Κόσμος, Ειδήσεις, Νέα, Πολιτισμός';
  }
  
  function gida($datr) { // GiTieM DAte
  $dttz = new DateTime('now', new DateTimeZone('Europe/Athens'));
  $dtdiff = $dttz->format('P');
  $timefromdbbuild = $datr; // date('Y-m-d H:i:s');
  $gmt = new DateTimeZone('GMT');
  $date = new DateTime($timefromdbbuild, $gmt);
  $timefromphpbuild1 = $date->format('Y-m-d');
  $timefromphpbuild2 = $date->format('H:i:s');
  $timefromphpbuild = $timefromphpbuild1."T".$timefromphpbuild2.$dtdiff;
  return $timefromphpbuild;
  }
  ?>

  <?php while ( have_posts() ) : the_post(); ?>

  <main class="is-relative post-wrapper maxgridrow art-fiveam">
    <article class="columns is-relative is-variable is-4-desktop is-multiline">

      <div class="column is-narrow is-hidden-touch">
        <div class="half-width is-relative full-height">
          <?php include(TEMPLATEPATH .'/assets/single/post-meta.php'); 
          include(TEMPLATEPATH .'/assets/single/left-article.php'); ?>
        </div>
      </div>

      <div class="column is-relative">
        <div class="article-column">
          <div class="article-image"></div>
          
          <div class="fiveam-logo">
            <img alt="5 το πρωι" src="/wp-content/themes/whsk_tovima.com/common/imgs/5toPrwiLogo.svg" width="133" height="144" />
          </div>
          
          <div class="has-text-centered fiveam-headline">
            <h1 class="my-0 f-400 post-title zonaultra is-size-1-desktop is-size-2-mobile is-size-2-tablet">
              <?php the_title(); ?>
            </h1>
          </div>
          
          <div class="single-article">
          <div class="is-hidden-desktop">
            <?php include(TEMPLATEPATH .'/assets/single/post-meta.php'); ?>
          </div>
          <?php include(TEMPLATEPATH .'/assets/single/fiiveam-rpt.php'); ?>
            
        <?php include(TEMPLATEPATH .'/assets/single/tags.php'); ?>
        
        <?php include(TEMPLATEPATH .'/assets/single/dfptext.php'); ?>
        
        <?php include(TEMPLATEPATH .'/assets/single/content-related.php'); ?>

        <!--RELATED-->
        <div id='320x50_bottom' class="div-320x50_bottom">
        <script type='text/javascript'>
          googletag.cmd.push(function() {
            googletag.display('320x50_bottom');
          });
        </script>
        </div>

        <div style="text-align:center;margin-top:20px">
          <div id='320x50_bottom_2' style="display: none" class="div-320x50_bottom"></div>
        </div>
            
          </div>
          
        </div>
      </div>

      <div class="column is-narrow is-relative post-sidebar">
        <div class="sidebar-width is-relative full-height sidebar-fxa">
          <?php include(TEMPLATEPATH .'/assets/single/single-sidebar.php'); ?>
        </div>
      </div>

    </article>
    
  <footer class="article-footer is-relative">
  <?php include(TEMPLATEPATH .'/assets/single/category-related.php'); ?>
  <?php include(TEMPLATEPATH .'/assets/elements/latestnews.php'); ?>
  <?php include(TEMPLATEPATH .'/assets/elements/network.php'); ?>    
    
  <div class="shopflix-row mt-6">
    <div class="shopflix-wrapper" style="padding:0 0">
      <iframe id="Shopflix" scrolling="no" loading="lazy" src="https://epimenidis.in.gr/shopflix/widget.php?url=tovimagr&items=2" width="100%" frameborder="0" style="width:100%;border:0" onload="this.style.height=(this.contentWindow.document.body.scrollHeight+20)+'px';" ></iframe>
    </div>
    <style>
    #Shopflix{height: 345px;overflow: hidden}
    @media screen and (max-width: 667px) {
    #Shopflix {height: 540px;}
    }  
    </style>
  </div>
    
  </footer>
    
  </main>

  <?php include(TEMPLATEPATH .'/assets/single/structure.php'); ?>
  <?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>