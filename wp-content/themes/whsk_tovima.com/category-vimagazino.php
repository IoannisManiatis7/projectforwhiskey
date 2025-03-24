<?php get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ($paged == 1) {
include(TEMPLATEPATH.'/assets/home/layouts/vimagazino.php'); 
} ?>

<main class="maxgridrow">
  
<div class="columns is-mobile is-variable is-multiline onerow <?php echo VARIABLES; ?>">

<?php if ($paged == 1) { ?> 
  
<?php if(get_field('flipbook_headline', 'tovima_vimagazino') && get_field('tag_flipbook', 'tovima_vimagazino')) { ?>
  <div class="column is-full">
    <div class="columns is-variable is-multiline <?php echo VARIABLES; ?> is-0-mobile">
      <div class="column is-full is-hidden-fullwindow">
        <h2 class="header-section zonaultra f-400"><?php echo get_field('flipbook_headline', 'tovima_vimagazino'); ?></h2>
      </div>
      <div class="column is-visible-fullwindow is-narrow">
        <div class="sidebar-width"><h2 class="header-section zonaultra f-400"><?php echo get_field('flipbook_headline', 'tovima_vimagazino'); ?></h2></div>
      </div>

      <div class="column is-relative">
      <?php $flipbook = get_field('tag_flipbook', 'tovima_vimagazino'); ?>
      <?php echo do_shortcode($flipbook); ?>
      </div>

    </div>
  </div>
<?php } ?>

<div class="column is-full">
  <h1 class="category-name zonaultra f-400 mt-0 mb-3">Περισσότερα άρθρα</h1>
</div>  
<?php } ?>
  
<div class="column is-relative">
<div class="columns is-variable is-multiline <?php echo VARIABLES; ?> is-0-mobile">
<?php
$archivecounter = 0; $cc = 0;
while ( have_posts() ) : the_post(); $archivecounter++; $cc++; 
$varsize = 'is-size-2 zonabold';  ?>
  <div class="column is-full wrap-category-row">
  <?php include(TEMPLATEPATH .'/assets/blocks/category-row.php'); ?>
  </div>
<?php endwhile; ?>
  
<div class="column is-full">
  <?php kriesi_pagination();?>  
</div>
  
</div>
</div>  
  
<div class="column is-narrow is-hidden-touch">
  <div class="sidebar-width is-relative full-height">
    <?php include(TEMPLATEPATH .'/assets/elements/archive-sidebar.php'); ?>
  </div>
</div>
  
</div>
  
</main>

<?php get_footer(); ?>