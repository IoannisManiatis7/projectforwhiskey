<?php get_header(); 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
$count_cat = count_category_post($term_id);
//
?>

<style>
.author-header{margin-top:5rem;border-bottom:1px solid #ddd;padding-bottom:2rem;margin-bottom:3rem}
.author-in-image{width:175px;height:175px;overflow:hidden;border-radius:100%;position:relative;border:1px solid #92a2b9}
.author-in-image img{width:100%;height:100%;object-fit:cover}
.author-bio{font-size:21px;line-height:24px;letter-spacing:-.21px;max-width:1044px;display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;margin-top:12px}
.author-bio p{margin:0}
.wrap_tax{padding-left:25px}
.author-bio.collapsed{display:block}
#expand-button{width:125px;height:25px;border:.5px solid #3757ab;border-radius:4px;-webkit-appearance:none;background-color:transparent;font-size:12px;color:#3757ab;margin-top:25px;font:normal normal bold 12px/18px Manrope;letter-spacing:0;cursor:pointer;display:flex;align-items:center;justify-content:space-around}
#expand-button:hover{background-color:var(--darkblue);color:#fff}
@media screen and (max-width:1023px){
.author-bio{-webkit-line-clamp:8;font-size:18px;line-height:1.3;display:block}
.wrap_tax{padding-left:0}
.author-header{margin-top:3.5rem}
.author-in-image{width:120px;height:120px;margin:0 auto}
.wrap_tax h1{text-align:center}
}
</style>

<?php /*
<script>
function expandText() {
    const textContainer = document.querySelector('.text-container');
    const expandButton = document.querySelector('#expand-button');

    // Toggle the class
    textContainer.classList.toggle('collapsed');

    // Check if the text-container is collapsed or not and change the button text accordingly
    if (textContainer.classList.contains('collapsed')) {
        expandButton.innerHTML = 'LESS <span class="dashicons dashicons-arrow-up-alt2"></span>';
    } else {
        expandButton.innerHTML = 'MORE <span class="dashicons dashicons-arrow-down-alt2"></span>';
    }
}

// Initially, set the button text to "Expand"
const expandButton = document.querySelector('#expand-button');
expandButton.innerHTML = 'MORE <span class="dashicons dashicons-arrow-down-alt2"></span>';
</script>
*/ ?>

<main class="maxgridrow">
  
<?php if(is_archive() && is_tax('nea_authors')) {
  $author_image = get_field('author-image', 'nea_authors_' . $term_id. ''); 
  $author_bio = get_term_field( 'description', $term_id );
?>
  
<div class="author-header">
<div class="columns">
  <div class="column is-narrow">
    <div class="author-in-image">
      <img loading="lazy" src="<?php echo $author_image; ?>" width="200" height="200" alt="<?php echo $term_list[0]->name; ?>" />
    </div>
  </div>
  <div class="column">
    <div class="wrap_tax">
      <h1 style="padding-bottom: 0;border: none" class="category-name zonaultra f-400 mt-0 mb-3"><?php single_cat_title(); ?></h1>
      <?php if($author_bio) { ?>
      <div class="author-bio text-container">
      <p><?php echo strip_tags($author_bio); ?></p>
    </div>
      <!-- <button id="expand-button" onclick="expandText()">MORE <span class="dashicons dashicons-arrow-down-alt2"></span></button> -->
      <?php } ?>
    </div>
  </div>
</div>
</div>
<?php } ?>
  
<div class="columns is-mobile is-variable is-multiline onerow <?php echo VARIABLES; ?>">
  
<?php if(is_tax('nea_authors')) { ?>  
<?php } else { ?>
<div class="column is-full">
  <h1 class="category-name zonaultra f-400 mt-0 mb-3"><?php single_cat_title(); ?></h1>  
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
<?php endwhile; wp_reset_postdata(); ?>
  
<div class="column is-full">
  <?php kriesi_pagination();?>  
</div>
  
</div>
</div>  
  
<div class="column is-narrow is-hidden-touch">
  <div class="sidebar-width is-relative full-height">
    <?php // include(TEMPLATEPATH .'/assets/elements/archive-sidebar.php'); ?>
  </div>
</div>
  
</div>
  
</main>

<?php get_footer(); ?>