<?php get_header(); ?>

<main class="maxgridrow">
  
<div class="columns is-mobile is-variable is-multiline onerow <?php echo VARIABLES; ?>">
  
<div class="column is-full">
  <h1 class="category-name zonaultra f-400 mt-0 mb-3">Search Results: <span><?php echo get_search_query();?></h1>  
</div>  
  
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