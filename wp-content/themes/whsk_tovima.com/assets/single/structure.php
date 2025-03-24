<script type="application/ld+json">
{
"@context":"http://schema.org",
"@type":"NewsArticle",
  "headline":"<?php the_title(); ?>",
  "thumbnailUrl":"<?php echo $thumb_full['0'];?>",
  "dateCreated":"<?php $da = gida(get_post_time('Y-m-d H:i:s',true)); echo $da; ?>",
  "datePublished":"<?php $da = gida(get_post_time('Y-m-d H:i:s',true)); echo $da; ?>",
  "description":"<?php echo str_replace('"', "'", get_the_excerpt()); ?>",
  "articleSection": "<?php echo strip_tags(post_taxonomy()); ?>",
  "keywords":["<?php echo $tagec; ?>"],
  <?php
  $authorlist = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all"));
  if ($authorlist) { ?>
  "author":{
    "@type":"person",
    "name":"<?php echo $authorlist[0]->name; ?>"
  },
  <?php } else { ?>
  "author":{
    "@type":"thing",
    "name":"tovima.com"
  },
  <?php } ?>
  "url": "<?php the_permalink();?>",
  "articleBody": "<?php echo $text; ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php echo $thumb_full['0'];?>",
    "width": <?php echo $thumb_full['1'];?>,
    "height": <?php echo $thumb_full['2'];?>,
    "description": "<?php echo str_replace('"', "'", get_the_excerpt()); ?>"
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php the_permalink();?>"
  },
  "publisher":{
  "@type":"Organization",
  "name":"tovima.com",
  "url":"https://www.tovima.com",
  "sameAs": [
    "https://www.facebook.com/tovimacom/",
    "http://www.twitter.com/tovimagr/",
    "https://www.linkedin.com/company/tovimagr/"
    ],
    "logo":{
      "@type":"ImageObject",
      "url":"<?php echo get_template_directory_uri(); ?>/common/imgs/toVima-publisher.png",
      "width":600,
      "height":60
    }
  }
}
</script>