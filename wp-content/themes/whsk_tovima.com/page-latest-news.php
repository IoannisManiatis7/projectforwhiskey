<?php get_header(); ?>

<main class="maxgridrow">
  
<div class="columns is-mobile  is-variable is-multiline onerow <?php echo VARIABLES; ?>">
  
<div class="column is-full">
  <h1 class="category-name zonaultra f-400 mt-0 mb-3">Latest</h1>
</div>  
  
<div class="column is-relative">
<div class="columns is-variable is-multiline <?php echo VARIABLES; ?> is-0-mobile">  
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 
  'posts_per_page' => 20,
  'post_status' => 'publish',
  'post_type' =>  array('post', 'printed_post'),
  'paged' => $paged,
  'date_query' => array( array( 'after'  => '1 year ago') ) 
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
  <div class="sidebar-width is-relative full-height">
    <?php include(TEMPLATEPATH .'/assets/elements/archive-sidebar.php'); ?>
  </div>
</div>
  
</div>
  
</main>

<?php get_footer(); ?>