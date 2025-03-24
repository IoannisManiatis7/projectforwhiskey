<?php if(has_tag('100-xronia-to-vima') && in_category('afieromata')) {
  include(TEMPLATEPATH.'/template-parts/template-hundred-post.php');
} else {
get_header(); ?>

  <?php
  $thumb_full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
  // $post_content = apply_filters('the_content',get_the_content());
  // $text = str_replace("'",'"',strip_tags( html_entity_decode( $post_content ) ) );
  // $text = trim(preg_replace('/\s+/', ' ', $text));

  $post_content = apply_filters('the_content',get_the_content());
  $post_content = preg_replace("/<div id='300x250_m1'.*?<\/div>/is", '', $post_content);
  $post_content = preg_replace("/<div id='300x250_m2'.*?<\/div>/is", '', $post_content);
  $post_content = preg_replace("/<div id='300x250_middle_2'.*?<\/div>/is", '', $post_content);
  $post_content = preg_replace("/<div id='300x250_middle_3'.*?<\/div>/is", '', $post_content);
  $text = str_replace("'", '"', strip_tags(html_entity_decode($post_content)));
  $text = trim(preg_replace('/\s+/', ' ', $text));
  $text = html_entity_decode($text);
  
  $posttags = get_the_tags();
  if($posttags) {
  $tags = array();
  foreach($posttags as $tag) { $tags[] = str_replace("'", "",$tag->name); }
  $tagec = implode(',',$tags);
  } else {
    $tagec = 'tovima.com, news in english, Politics, Society, Finance, Tourism, Culture, Science, Climate, Opinions, WSJ, Tovima English, english vima, tovima english edition';
  }
  
  function gida($datr) { // GiTieM DAte
  $dttz = new DateTime('now', new DateTimeZone('Europe/Athens'));
  $dtdiff = $dttz->format('P');
  $timefromdbbuild = $datr; // date('Y-m-d H:i:s');
  $gmt = new DateTimeZone('GMT');
  $date = new DateTime($timefromdbbuild, $gmt);
  $timefromphpbuild1 = $date->format('Y-m-d');
  $timefromphpbuild2 = $date->format('H:i:s');
  $timefromphpbuild = $timefromphpbuild1."T".$timefromphpbuild2.$dtdiff;
  return $timefromphpbuild;
  }
  ?>

  <?php while ( have_posts() ) : the_post(); ?>
  <?php $post = $wp_query->post;
    include(TEMPLATEPATH.'/template-parts/content-single.php');
  ?>

  <?php include(TEMPLATEPATH .'/assets/single/structure.php'); ?>
  <?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
<?php } ?>