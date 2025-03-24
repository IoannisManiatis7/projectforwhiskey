<?php get_header(); ?>

<?php 
$homerows = array(
  
  array('layout' => 'top'),  
  array('layout' => 'podcast'),
  array('title' => 'STORIES', 'slug' => 'stories', 'layout' => 'ft-1'),
  array('title' => 'POLITICS', 'slug' => 'politics', 'layout' => 'normal', 'extra-class' => 'no-bp-rows'),  
  array('title' => 'FINANCE', 'slug' => 'finance', 'layout' => 'normal', 'extra-class' => 'no-b-rows'),
  array('title' => 'SOCIETY', 'slug' => 'society', 'layout' => 'unorder'),
  array('title' => '', 'slug' => 'wsj', 'active' => 'yes', 'layout' => 'onerow', 'relationship' => 'yes', 'acfname' => 'box5_selection', 'pagename' => 'tovima_wsj', 'pubitems' => '4', 'extra-class' => 'wsj'),
  array('title' => 'CLIMATE', 'slug' => 'climate', 'layout' => 'double'),
  array('title' => 'ΒΗΜΑ HISTORY', 'slug' => 'vima-history', 'layout' => 'ft-1'),
  array('title' => 'CULTURE', 'slug' => 'culture', 'layout' => 'ft-1'),
  
  
  // array('title' => 'ΝΕΕΣ ΕΠΟΧΕΣ', 'active' => 'yes', 'slug' => 'nees-epoxes', 'layout' => 'onerow', 'relationship' => 'yes', 'acfname' => 'box4_selection', 'pagename' => 'tovima_neesepoxes', 'pubitems' => '4'),  
//   array('title' => 'ΜΟΝΟ ΑΠΟ ΤΟ ΒΗΜΑ', 'layout' => 'carousel'), 

//   array('layout' => 'onerow', 'relationship' => 'yes', 'acfname' => 'box4_selection', 'pagename' => 'tovima_afieromata_2', 'pubitems' => '4'),
//   array('layout' => 'latest', 'slug' => 'latest', 'extra-class' => 'is-visible-laptop is-hidden-small'),  
//   array('layout' => 'prosfores'),  
//   // array('title' => 'ΜΟΝΟ ΑΠΟ ΤΟ ΒΗΜΑ', 'layout' => 'carousel'), 
//   array('layout' => 'billboard-row'),
//   array('layout' => 'populars'),
//   array('layout' => 'vita'),
  
  // array('layout' => 'entipo', 'title' => 'ΑΠΟ ΤΗΝ ΕΝΤΥΠΗ ΕΚΔΟΣΗ', 'extra-class' => 'break-container'),
//   array('layout' => 'vimagazino', 'slug' => 'vimagazino', 'extra-class' => 'break-container'),
//   array('layout' => 'onerow', 'relationship' => 'yes', 'acfname' => 'box4_selection', 'pagename' => 'tovima_afieromata_3', 'pubitems' => '4', 'extra-class' => 'v__images'),
//   array('layout' => 'mustread'),
//   array('title' => 'ΠΟΛΙΤΙΚΗ', 'slug' => 'politics', 'layout' => 'normal'),
//   array('layout' => 'onerow', 'relationship' => 'yes', 'acfname' => 'box4_selection', 'pagename' => 'tovima_afieromata_4', 'pubitems' => '4'),
//   array('title' => 'ΔΙΠΛΩΜΑΤΙΑ', 'slug' => 'diplomatia', 'layout' => 'onerow', 'pubitems' => '3'),
//   array('title' => 'ΚΟΙΝΩΝΙΑ', 'slug' => 'society', 'layout' => 'normal'),  
//   array('title' => 'OIKONOMIA', 'slug' => 'finance', 'layout' => 'normal', 'extra-class' => ''),
//   array('title' => 'BHMA GREEN', 'slug' => 'green', 'layout' => 'onerow', 'pubitems' => '3'),  
//   array('title' => 'ΚΟΣΜΟΣ', 'slug' => 'world', 'layout' => 'normal'),
//   array('title' => 'SCIENCE', 'slug' => 'science', 'layout' => 'onerow', 'pubitems' => '4'),  
//   array('title' => 'ΠΟΛΙΤΙΣΜΟΣ', 'slug' => 'culture', 'layout' => 'ex-normal'),
//   array('title' => 'ΒΙΒΛΙΑ', 'slug' => 'books-ideas', 'layout' => 'onerow', 'pubitems' => '3'),  
//   array('title' => 'ΑΘΛΗΤΙΣΜΟΣ', 'slug' => 'sports', 'layout' => 'ft-1'),  
//   array('title' => 'ΝΕΑ ΤΗΣ ΑΓΟΡΑΣ', 'slug' => 'market', 'layout' => 'onerow', 'pubitems' => '3'),  
  // array('subitems' => array(
  //   array('title' => 'ΒΙΒΛΙΑ', 'slug' => 'books-ideas', 'layout' => 'big-triple', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq'),
  //   array('title' => 'ΜΑΘΗΤΙΚΕΣ ΕΦΗΜΕΡΙΔΕΣ', 'slug' => 'mathitikes-efimerides', 'layout' => 'big-triple', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq'),
  //   array('title' => 'MEDIA', 'slug' => 'media', 'layout' => 'triple', 'size' => 'donti-1-3 is-full-tablet is-full-mobile is-full-small sq'),
  // )),
  // array('layout' => 'onerow', 'title' => 'MEDIA', 'slug' => 'media', 'pubitems' => '4', 'extra-class' => 'double-items'),
  /*
  array('subitems' => array(
    array('title' => 'ΑΘΛΗΤΙΣΜΟΣ', 'slug' => 'sports', 'layout' => 'big-triple', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq'),
    array('title' => 'ΑΥΤΟΚΙΝΗΤΟ', 'slug' => 'autohub', 'layout' => 'big-triple', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq'),
    array('title' => 'ΝΕΑ ΤΗΣ ΑΓΟΡΑΣ', 'slug' => 'market', 'layout' => 'triple', 'size' => 'donti-1-3 is-full-tablet is-full-mobile is-full-small sq'),
  )),
  */
  // array('layout' => 'megaview', 'extra-class' => 'break-container'),  
  // array('title' => 'INTERNATIONAL', 'slug' => 'international', 'layout' => 'biggeronerow'),
);
?>

<main class="maxgridrow">
  
<?php foreach ($homerows as $row) { ?>
  <?php if($row['layout'] === 'billboard-row') { ?>
    <div class="is-hidden-touch">
      <div id='970x90_middle' class="das-billboard-middle"></div>
    </div>  
  
  <?php } elseif($row['layout'] === 'prosfores') { ?>
  <section class="home-section">
    <?php include(TEMPLATEPATH.'/assets/home/layouts/prosfores.php'); ?>
  </section>

  <?php } elseif($row['layout'] === 'podcast') { ?>
  <section class="home-section">
    <?php include(TEMPLATEPATH.'/assets/elements/podcast.php'); ?>
  </section>  

  <?php } elseif($row['layout'] === 'vita') { ?>
  <section id="vitagr" class="is-relative home-section layout-onerow">
    <?php include(TEMPLATEPATH.'/assets/elements/vita.php'); ?>
  </section>
  
  <?php } else { ?>
  <?php if((isset($row['relationship']) && get_field('activated_widget', $row['pagename'])) || isset($row['relationship']) && isset($row['active']) && $row['active'] == 'yes' || !isset($row['relationship'])) { ?>
  <section id="<?php if(isset($row['slug'])) { echo 'home-'.$row['slug']; } ?>" class="is-relative <?php if(isset($row['extra-class'])) { echo $row['extra-class']; } ?> home-section <?php if(isset($row['layout'])) { echo 'layout-'.$row['layout']; } ?>">
    <div class="wrap-section-columns">
    <?php if(isset($row['layout'])) { ?>
      <?php include(get_template_directory() .'/assets/home/layouts/'.$row['layout'].'.php'); ?>
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
  <?php } ?>
<?php } ?>
</main>
  
<?php get_footer(); ?>