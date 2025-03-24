<?php get_header(); ?>
<!-- 
Κεντρικά θέματα ίδια με το widget της homepage

Opinion ότι έχει tag Εκλογές 2023 και ειναι section opinion

ΣΥΝΕΝΤΕΥΞΕΙΣ από /tag/συνεντεύξείς-υποψηφίων/

Δημοσκοπήσεις με tag δημοσκοπήσεις & εκλογές 2023 -->

<?php 
$eklogesrow = array(
  array('title' => 'ΕΠΙΛΕΓΜΕΝΑ', 'relationship' => 'yes', 'layout' => 's-normal',  'acfname' => 'box8_selection', 'pagename' => 'tovima_index', 'pubitems' => '5'),
  array('title' => 'ΣΥΝΕΝΤΕΥΞΕΙΣ', 'layout' => 'vertical-carousel', 'acfname' => 'box8_selection', 'pagename' => 'tovima_index'),
  array('layout' => 'onerow', 'title' => 'ΔΗΜΟΣΚΟΠΗΣΕΙΣ', 'pubitems' => '4', 'tags' => '10259,174250', 'url' => 'dimoskopiseis'),
  array('layout' => 'carou-videos', 'title' => 'VIDEOS'),  
); ?>


<header class="ekloges-header">
  <div class="maxgridrow px-0">
    <div class="ekloges-logo">
      <a href="/ekloges-2023/">
      <img src="/wp-content/themes/whsk_tovima.com/common/imgs/ekloges2023Logo.svg" />
      </a>
    </div>
    <div class="ekloges-menu-wrapper">
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
      <li class="menu-item"><a href="/tag/synentefxeis-ypopsifion/">ΣΥΝΕΝΤΕΥΞΕΙΣ</a></li>
      <li class="menu-item"><a href="/category/videos/">VIDEOS</a></li>
      <li class="menu-item"><a href="/2023/05/04/politics/ekloges-2023-pou-psifizo-vreite-eykola-online-to-eklogiko-sas-kentro/">ΠΟΥ ΨΗΦΙΖΩ</a></li>
      <li class="menu-item"><a href="/xartis-apotelesmaton/">ΑΠΟΤΕΛΕΣΜΑΤΑ</a></li>
    </ul>
    </div>
  </div>
</header>

<main class="maxgridrow ekloges-grid">
  
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; if ($paged == 1) { ?>  
<?php foreach ($eklogesrow as $row) { ?>
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
<?php } } ?>
  
  
<section class="more-news is-relative home-section">
<div class="columns is-variable is-multiline <?php echo VARIABLES; ?> is-0-mobile">  
<div class="column is-full"><span class="zonaultra section-label">ΠΡΟΣΦΑΤΕΣ ΕΙΔΗΣΕΙΣ</span></div>
<div class="column is-relative">
<div class="columns is-variable is-multiline <?php echo VARIABLES; ?> is-0-mobile">  
<?php 
$args = array( 
  'posts_per_page' => 8,
  'post_status' => 'publish',
  'post_type' =>  array('post', 'printed_post'),
  'paged' => $paged,
  'date_query' => array( array( 'after'  => '1 year ago') ),
  'tag' => 'ekloges-2023'
);
$count = 0;
$latestquery = new WP_Query($args); while ( $latestquery->have_posts() ) : $latestquery->the_post(); $count++;
$varsize = 'is-size-2 zonabold'; ?>
  <div class="column is-full wrap-category-row">
  <?php include(TEMPLATEPATH .'/assets/blocks/category-row.php'); ?>
  </div>
<?php endwhile; ?>
  
<div class="column is-full">
  <?php kriesi_pagination($latestquery->max_num_pages); ?>
</div>
  
</div>
</div>
<div class="column is-narrow is-hidden-touch">
  <div class="sidebar-width is-relative full-height sidebar-sticky">
    
    <div id='300x250_r1' class="sticky-item das-r1 das-r1--in">
        <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r1'); });</script>
    </div>
    
  </div>
</div>  
</div>
</section>  
  
  
</main>

<?php get_footer(); ?>