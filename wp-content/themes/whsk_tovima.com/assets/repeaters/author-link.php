<?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>
<?php if(get_field('exauthor_textn')) { ?>
<author class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
  <?php the_field('exauthor_textn'); ?>
</author>
<?php } elseif ($term_list) { 
$author_image = get_field('author-image', 'nea_authors_' . $term_list[0]->term_id . ''); ?>
<a href="/editor/<?php echo $term_list[0]->slug; ?>">
<author class="vima-author line-height-1 manrope is-size-5 notblack-c f-700">
  <?php echo $term_list[0]->name; ?>
</author>
</a>
<?php } ?>