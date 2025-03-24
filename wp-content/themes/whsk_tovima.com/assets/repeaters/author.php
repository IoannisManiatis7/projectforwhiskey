<span class="vima-author">
  <?php $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all")); ?>

  <?php if(get_field('exauthor_textn')) { ?>
    <?php the_field('exauthor_textn'); ?>
  <?php } elseif ($term_list) {
    $tl = 0;
    foreach($term_list as $termitem) { $tl++; 
    $author_image = get_field('author-image', 'nea_authors_' . $termitem->term_id . ''); ?>
    <div class="wrap-inner-author">
    <?php if ($author_image) { ?>
    <div class="author__image" style="background-image:url(<?php echo $author_image; ?>);"></div>
    <?php } ?>
    <a href="/editor/<?php echo $termitem->slug ?>" title="VIEW ALL <?php echo $termitem->name; ?>">
      <?php echo $termitem->name; ?>
    </a>
    </div>
    <?php } ?>
  <?php } else { ?> Newsroom
  <?php } ?>
</span>