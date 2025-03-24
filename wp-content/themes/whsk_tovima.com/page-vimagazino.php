<?php get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ($paged == 1) {
include(TEMPLATEPATH.'/assets/home/layouts/vimagazino.php'); 
} ?>

<main class="maxgridrow">
  
<div class="columns is-variable is-multiline onerow  <?php echo VARIABLES; ?>">
  
<?php if ($paged == 1) { ?>  
<div class="column is-full">
  <h1 class="category-name zonaultra f-400 mt-0 mb-3">Περισσότερα άρθρα</h1>
</div>  
<?php } ?>
  
<div class="column is-relative">
<div class="columns is-variable is-multiline <?php echo VARIABLES; ?>">  
<?php 
$args = array( 
  'posts_per_page' => 20,
  'post_status' => 'publish',
  'post_type' => array('post', 'printed_post'),
  'paged' => $paged,
  'category_name' => 'vimagazino', 
  'date_query' => array( array( 'after'  => '1 year ago') ) 
);
$count = 0;
$wp_query = new WP_Query($args); while ( have_posts() ) : the_post(); $count++;
$varsize = 'is-size-2 zonabold'; ?>
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