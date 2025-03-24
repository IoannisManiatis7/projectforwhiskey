<?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
<?php if(get_field('exauthor_textn')) { ?>
<span class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
  <?php the_field('exauthor_textn'); ?>
</span>
<?php } elseif (is_array($term_list) && count($term_list) === 1) {
$tl = 0;
foreach($term_list as $termitem) { $tl++;
$author_image = get_field('author-image', 'nea_authors_' . $termitem->term_id . ''); ?>
<span class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
  <?php echo $termitem->name; ?>
</span>
<?php } } ?>