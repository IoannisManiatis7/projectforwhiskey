<?php get_header(); ?>

<?php 
$homerows = array(
  array('layout' => 'entipo', 'title' => 'ΑΠΟ ΤΗΝ ΕΝΤΥΠΗ ΕΚΔΟΣΗ', 'extra-class' => 'break-container'),  
  array('layout' => 'vimagazino', 'slug' => 'vimagazino', 'extra-class' => 'break-container'),
  // array('title' => 'ΠΟΛΙΤΙΚΗ', 'slug' => 'politics', 'layout' => 'normal'),
//   array('title' => 'ΜΕΓΕΘΥΝΣΕΙΣ', 'slug' => 'megethynseis', 'layout' => 'ft-1'),  
//   array('title' => 'ΝΕΕΣ ΕΠΟΧΕΣ', 'slug' => 'nees-epoxes', 'layout' => 'normal'),
//   array('subitems' => array(
//     array('title' => 'ΒΗΜΑΤΟΔΟΤΗΣ', 'type' => 'cat',  'slug' => 'vimatodotis', 'layout' => 'big-triple', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq'),
//     array('title' => 'ΠΑΝΔΩΡΑ', 'type' => 'cat',  'slug' => 'pandora', 'layout' => 'big-triple', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq'),
//     array('title' => 'ΣΙΒΥΛΛΑ', 'type' => 'cat',  'slug' => 'sivylla', 'layout' => 'triple', 'size' => 'donti-1-3 is-full-tablet is-full-mobile is-full-small sq'),    
//   )),  
//   array('title' => 'ΔΙΠΛΩΜΑΤΙΑ', 'slug' => 'diplomatia', 'layout' => 'ft-1'),
//   array('title' => 'ΑΝΑΠΤΥΞΗ', 'slug' => 'finance', 'layout' => 'normal', 'extra-class' => ''),
//   array('title' => 'ΚΟΙΝΩΝΙΑ', 'slug' => 'society', 'layout' => 'normal'),
//   array('title' => 'ΚΟΣΜΟΣ', 'slug' => 'world', 'layout' => 'normal'),
//   array('title' => 'SCIENCE','layout' => 'onerow', 'slug' => 'science', 'pubitems' => '4'),
//   array('title' => 'ΠΟΛΙΤΙΣΜΟΣ', 'slug' => 'culture', 'layout' => 'ft-1'),
// //   array('subitems' => array(
// //     array('title' => 'ΜΑΘΗΤΙΚΕΣ ΕΦΗΜΕΡΙΔΕΣ', 'slug' => 'mathitikes-efimerides', 'layout' => 'triple', 'size' => 'donti-1-3 is-full-tablet is-full-mobile is-full-small sq'),    
// //   )),  
//   array('title' => 'ΑΘΛΗΤΙΣΜΟΣ', 'slug' => 'sports', 'layout' => 'ft-1'),
//   array('title' => 'ΒΙΒΛΙΑ', 'slug' => 'books-ideas', 'layout' => 'ft-1'),  
//   array('layout' => 'onerow', 'title' => 'ΑΥΤΟΚΙΝΗΤΟ', 'slug' => 'autohub', 'pubitems' => '3'),
);
?>


<div class="maxgridrow">
<div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  <div class="column is-full">
    <?php include(TEMPLATEPATH .'/assets/elements/toponerow.php'); ?>
  </div>
  <div class="column is-full">  
    <div class="wrap-print-top mb-6">
      <div class="columns is-multiline is-mobile is-variable <?php echo VARIABLES; ?>">
        <?php 
        $topxtip = get_field('box4_selection','tovimaprint_xtp');
        foreach($topxtip as $post) : setup_postdata($post); $cc++; ?>
        <div class="column is-3-desktop is-6-tablet is-6-mobile is-full-small">
      <a href="<?php the_permalink(); ?>" data-link-name="article" class="relative-box">
      <div class="tile-content py-0">
      <div class="post-meta mb-2">
      <?php include(TEMPLATEPATH .'/assets/repeaters/author-lite.php'); ?>
      </div>        
      <div class="wrap-ohead">
        <h3 class="o-head f-400 my-0 is-size-3-desktop is-size-3-tablet is-size-4-mobile zonabold">
      <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
        </h3>
      </div>
    </div>
    </a>
  </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>
</div>

<?php if(isset($_COOKIE['user_email'])) { ?>
<?php } else { ?>
<div class="print-disclaimer">
  <div class="maxgridrow">
  <div class="level columns is-justify-content-space-between">
  <div class="column is-8">
  <h3 class="line-height-1 py-1 manrope is-size-normal my-0 f-600">
    Ένα μέρος του περιεχομένου του tovima.gr είναι διαθέσιμο μόνο σε συνδρομητές.    
  </h3>
  <h4 class="line-height-1 py-2 manrope is-size-5 my-0 f-400">
    Αποκτήστε μία συνδρομή σήμερα ή κάντε είσοδο για να έχετε πλήρη πρόσβαση.
  </h4>
  </div>
  <div class="column is-4 has-text-right-desktop">
  <a href="https://www.helioskiosk.gr/newspapers-digital" target="_blank" class="call-action-button white-button">
  ΑΠΟΚΤΗΣΤΕ ΣΥΝΔΡΟΜΗ ΣΗΜΕΡΑ
  </a>
  </div>    
  </div>
  </div>
</div>
<?php } ?>



<main class="maxgridrow">
  
<?php foreach ($homerows as $row) { ?>
  <section id="<?php if(isset($row['slug'])) { echo 'home-'.$row['slug']; } ?>" class="is-relative <?php if(isset($row['extra-class'])) { echo $row['extra-class']; } ?> home-section <?php if(isset($row['layout'])) { echo 'layout-'.$row['layout']; } ?>">
    <div class="wrap-section-columns">
    <?php if(isset($row['layout'])) { ?>
      <?php include(TEMPLATEPATH.'/assets/home/layouts/'.$row['layout'].'.php'); ?>
    <?php } ?>
    <?php if(isset($row['subitems'])) { ?>
      <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
      <?php foreach ($row['subitems'] as $subitem) { ?>
        <div class="column <?php echo $subitem['size']; ?>">
        <?php include(TEMPLATEPATH.'/assets/home/layouts/'.$subitem['layout'].'.php'); ?>
        </div>
      <?php } ?>
      </div>
    <?php } ?>
    </div>
  </section>

<?php } ?>

<section class="is-relative  home-section">
  <div class="column is-full is-relative">
  <section class="inner-section">
    <div class="inner-section-flex">
      <a title="ΜΑΘΗΤΙΚΕΣ ΕΦΗΜΕΡΙΔΕΣ" href="/mathitikes-efimerides/" class="is-block">
        <picture>
          <source media="(max-width:767px)" srcset="/wp-content/themes/whsk_tovima.com/common/imgs/billboards/mathitikesMobile.jpg" />
          <source media="(max-width: 1023px)" srcset="/wp-content/themes/whsk_tovima.com/common/imgs/billboards/mathitikesTablet.jpg" />
          <source media="(max-width: 1550px)" srcset="/wp-content/themes/whsk_tovima.com/common/imgs/billboards/mathitikesLaptop.jpg" />
          <source media="(min-width: 1550px)" srcset="/wp-content/themes/whsk_tovima.com/common/imgs/billboards/mathitikesDesktop.jpg" />
          <img loading="lazy" alt="ΜΑΘΗΤΙΚΕΣ ΕΦΗΜΕΡΙΔΕΣ" src="/wp-content/themes/whsk_tovima.com/common/imgs/billboards/mathitikesMobile.jpg" width="1574" height="300" style="width: 100%; height: auto;" />
        </picture>
      </a>
    </div>
  </section> 
  </div>   
  </section>

  <section class="is-relative home-section more-news">
    
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  <div class="column is-full">
    <span class="zonaultra section-label">ΠΡΟΣΦΑΤΕΣ ΕΙΔΗΣΕΙΣ</span>
  </div>

  <div class="column is-relative">
    <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
      <?php  
      $args = array( 
      'posts_per_page' => 50,
      'post_status' => 'publish',
      'post_type' =>  array('printed_post'),
      'no_found_rows' => true,
      'date_query' => array( array( 'after'  => '1 month ago') ) 
      );
      $count = 0;
      $latestquery = get_posts($args); 
      foreach($latestquery as $post) : setup_postdata($post); $ii++;
      $varsize = 'is-size-2 zonabold'; ?>
      <div class="column is-full wrap-category-row">
      <?php include(TEMPLATEPATH .'/assets/blocks/category-row.php'); ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
      </div>
  </div>
    
  <div class="column is-narrow is-hidden-touch">
    <div class="sidebar-width is-relative full-height sidebar-sticky">
    
    <div id='300x250_r1' class="sticky-item das-r1 das-r1--in">
        <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r1'); });</script>
    </div>
    
  </div>
  </div>
    
  <div class="column has-text-center">
    <a href="#" class="call-action-button blue-button">ΠΕΡΙΣΣΟΤΕΡΕΣ ΕΙΔΗΣΕΙΣ</a>  
  </div>
    
  </div>
  </section>

</main>
  
<?php get_footer(); ?>