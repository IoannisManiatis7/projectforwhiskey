<?php $thumb_full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
$thumb_single = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
$thumb_medium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'pro-medium' );
$thumb_mini = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
$post_author = get_userdata( $post->post_author ); ?>
<?php $gggg = get_the_content();
$gggg = str_replace('<script></script>', '', $gggg);
$gggg = str_replace('"', '', $gggg);
$gggg = str_replace("'", "", $gggg);
$gggg = str_replace('<p>', '', $gggg);
$gggg = str_replace('</p>', '', $gggg);
$gggg = str_replace('<br />', '', $gggg);
$gggg = str_replace('\\', '', $gggg);
$gggg = str_replace(array("\r", "\n"), '', $gggg);
?>
<?php $postT = get_the_title();
$res = preg_split('/\s+/', $postT);
$count = count($res);
$category = get_the_category();
if ( $category[0] ) {
  $catname = $category[0]->cat_name;
}
?>
<div id="hero" class="fullwidth">
  <div class="break-container super-darkgreen-bg">
    <div class="maxgridrow">
      <div id='div-gpt-ad-billboard-2'>
        <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-billboard-2'); });</script>
      </div>
    </div>
  </div>
</div>

<article class="post-article prel  <?php if ( wordcount ( get_the_content() ) < 100 ) { echo 'brief-content' ; } ?>" id="post-<?php echo get_the_ID(); ?>">
  <?php /*
  <div class="maxgridrow" style="position:relative">
    <div id='div-gpt-ad-billboard-3'>
      <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-billboard-3'); });</script>
    </div>
  </div>
  */ ?>

<?php /*
  <div id="div-gpt-ad-topsticky" class="inner-billboard">
    <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-topsticky'); });</script>
  </div>
*/ ?>

<div class="prel">
  <div class="columns prel columns-wrap-all">

    <div class="column prel article-left">

    <?php include(TEMPLATEPATH . '/assets/single/header.php'); ?>

    <div class="content-wrap">

    <div class="top-shares">
      <div class="sharethis-inline-share-buttons"></div>
    </div>

    <?php include(TEMPLATEPATH . '/assets/single/content.php'); ?>

    </div>

   <!--OUTSIDE WRAP-->


    <!--TAGS-->
    <?php include(TEMPLATEPATH . '/assets/single/tags.php'); ?>
    <!--TAGS-->


    
    <div class="glomexrow" style="margin-bottom:3rem;margin-top:3rem;clear:both">
    <div class="playlist-video">
      <glomex-integration integration-id="40599w1tl63c57ci" playlist-id="cl-cv4xtjbiozzn"></glomex-integration>
    </div>
    </div>

    <!--READMORE-->
    <?php // include(TEMPLATEPATH . '/assets/single/prasinanea.php'); ?>
    <?php include(TEMPLATEPATH . '/assets/single/readmore.php'); ?>

   <!--OUTSIDE WRAP-->


    </div><!--ARTICLE LEFT SIDE-->

    <div class="column is-narrow prel article-sidebar">
      <aside class="width-340">

      <?php /*
      <div class="prel min-height-430">
        <div class="ad-widget">
          <div id='div-gpt-ad-sidebar-0' class="">
            <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-sidebar-0'); });</script>
          </div>
        </div>
      </div>
      */ ?>

        <div class="prel min-height-600 side-element">
          <div class="ad-widget">
            <div id='div-gpt-ad-sidebar-1' class="">
              <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-sidebar-1'); });</script>
            </div>
          </div>
        </div>

        <?php include(TEMPLATEPATH . '/assets/widgets/news.php'); ?>

        <div class="ad-widget prel sticky-widget">
          <div id="div-gpt-ad-sidebar-2" class="">
            <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-sidebar-2'); });</script>
          </div>
        </div>

      </aside>
    </div>

  </div>
</div>
</article>

<?php if (has_tag()) { ?>
 <?php
   $posttags = get_the_tags();
   $tags = array();
   foreach($posttags as $tag) { $tags[] = str_replace("'", "",$tag->name); }
   $tagec = implode(',',$tags);
   $newtage = array();
   foreach($tags as $tagnew){
     $newtage[] = '"'.$tagnew.'"';
   }
   $tage_about = implode(',',$newtage);
 ?>
<?php } ?>

<?php if(is_singular('abstracts')) { ?>
  <script type="application/ld+json">
  {
  "@context": "http://schema.org",
  "@type": "Person",
  "@id": "<?php the_permalink();?>",
  "description": "<?php echo str_replace('"', "'", get_the_excerpt());?>",
  "articleBody": "<?php echo wp_strip_all_tags($gggg); ?>",
  "mainEntityOfPage": "<?php the_permalink();?>",
  "image": [{
  "@type": "ImageObject",
    "url": "<?php echo $thumb_full['0'];?>",
    "width": <?php echo $thumb_full['1'];?>,
    "height": <?php echo $thumb_full['2'];?>
  }],
  "name": "<?php the_title(); ?>",
  "gender": "<?php the_field('a_genre'); ?>",
  <?php if( have_rows('a_sameas') ):
  $rows = get_field('a_sameas');
  $sameascounter = -1; ?>
  "sameAs": [
  <?php while ( have_rows('a_sameas') ) : the_row(); $sameascounter++; ?>
    "<?php the_sub_field('sameas_url'); ?>"<?php if ($sameascounter < (count($rows) - 1)){echo ","; } ?>
     <?php echo "\n"; ?>
  <?php endwhile; ?>
  ],
  <?php endif; ?>
  "url": ["<?php the_permalink();?>"]
  }
</script>
<?php } else { ?>
<script type="application/ld+json">
    {
      "@context":"http://schema.org",
<?php if(in_category(7) || post_is_in_descendant_category(7) ) { ?>
      "@type":"BlogPosting",
<?php } else { ?>
      "@type":"NewsArticle",
<?php } ?>
      "headline":"<?php the_title(); ?>",
      <?php if(get_field('neos__titlos')) { ?>
      "alternativeHeadline":"<?php $headline = get_field('neos__titlos'); echo str_replace('"', "'", $headline); ?>",
      <?php } ?>
      "url": "<?php the_permalink();?>",
      "thumbnailUrl":"<?php echo $thumb_full['0'];?>",
      "dateCreated":"<?php $da = gida(get_post_time('Y-m-d H:i:s',true)); echo $da; ?>",
      "datePublished":"<?php $da = gida(get_post_time('Y-m-d H:i:s',true)); echo $da; ?>",
      "dateModified":"<?php $das = gida(get_the_modified_date('Y-m-d H:i:s',true)); echo $das; ?>",
      "copyrightYear":"<?php the_time('Y'); ?>",
      "publisher": {
        "@id": "#Publisher",
        "@type": "Organization",
        "name": "PANATHINAIKOS24",
        "logo": {
          "@type": "ImageObject",
          "url": "<?php echo get_stylesheet_directory_uri().'/common/imgs/publisherlogo.png'; ?>",
          "width": 425,
          "height": 60
        },
        "sameAs": [
          "https://panathinaikos24.gr/",
          "https://www.facebook.com/Panathinaikos24/",
          "https://www.twitter.com/p24gr/",
          "https://www.youtube.com/user/Panathinaikos24TV/",
          "https://www.instagram.com/panathinaikos24/"
        ]
      },
      <?php include (TEMPLATEPATH . '/assets/single/triples.php'); ?>
      "mainEntityOfPage": {
          "@type": "WebPage",
          "@id": "<?php the_permalink();?>"
        },
       <?php if ( $post_author->ID != 16 ) {
          $authordesc = get_field('author_bio', 'user_'.$post_author->ID );
          $author_image = get_field('author_image', 'user_'.$post_author->ID );
          $authordesc = str_replace('<p>', '', $authordesc);
          $authordesc = str_replace('</p>', '', $authordesc);
          $authordesc = str_replace('<br />', '', $authordesc);
          $authordesc = str_replace(array("\r", "\n"), '', $authordesc);
          ?>
          "author": {
            "@type":"Person",
            "name":"<?php echo esc_html( $post_author->display_name ); ?>",
            "url":"<?php echo get_author_posts_url( $post->post_author ); ?>",
            "email":"<?php echo esc_html( $post_author->user_login ); ?>@panathinaikos24.gr",
<?php if($authordesc) { ?>
            "description":"<?php echo wp_strip_all_tags($authordesc); ?>",
            "sameAs": [
              <?php if($post_author->twitter) { ?>"https://twitter.com/<?php echo esc_html( $post_author->twitter);  ?>/",
              <?php } ?>
              <?php if($post_author->facebook) { ?>"<?php echo esc_html( $post_author->facebook); ?>"<?php } ?>
              ],
<?php } ?>
            "image": {
              "@type": "ImageObject",
              "url": "<?php echo $author_image; ?>",
              "width": 160,
              "height": 160
            }
          },
      <?php } else { ?>
          "author": {
          "@type":"Organization",
          "name":"PANATHINAIKOS24",
          "url":"https://panathinaikos24.gr"
          },
      <?php }
      ?>
      "articleSection": "<?php if(in_category(3)){ ?>Παναθηναϊκός Ποδόσφαιρο<?php } elseif(in_category(4)){ ?>Παναθηναϊκός Μπάσκετ<?php } elseif(in_category(6)){ ?>Παναθηναϊκός Ερασιτέχνης<?php } elseif(in_category(7)){ ?>Παναθηναϊκός Άποψη<?php } else { ?>Παναθηναϊκός Ειδήσεις<?php } ?>",
      "description":"<?php echo str_replace('"', "'", get_the_excerpt()); ?>",
      "articleBody": "<?php echo wp_strip_all_tags($gggg); ?>",
      "keywords": ["<?php echo $tagec; ?>"],
      "image": {
        "@type": "ImageObject",
        "url": "<?php echo $thumb_full['0'];?>",
        "width": <?php echo $thumb_full['1'];?>,
        "height": <?php echo $thumb_full['2'];?>,
        "description": "<?php echo str_replace('"', "'", get_the_excerpt()); ?>"}
<?php
$imagecounter = -1;
$attachments = get_children(
  array('post_parent' => $post->ID,
        'post_status' => 'inherit',
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'order' => 'ASC',
        'orderby' => 'menu_order ID')
);
if($attachments) { ?>
,
"associatedMedia": [
      <?php
      foreach($attachments as $att_id => $attachment) {
      $imagecounter++;
      $full_img_url = wp_get_attachment_image_src( $attachment->ID, 'full' );?>
        {
          "@type": "ImageObject",
          "representativeOfPage": "http://schema.org/True",
          "url": "<?php echo $full_img_url['0']; ?>",
          "width": <?php echo $full_img_url['1'];?>,
          "height": <?php echo $full_img_url['2']; echo "\n"; ?>}<?php if ($imagecounter < (count($attachments) - 1)){echo ","; } } ?>
        ]
    <?php } ?>
    }
</script>
<?php } ?>