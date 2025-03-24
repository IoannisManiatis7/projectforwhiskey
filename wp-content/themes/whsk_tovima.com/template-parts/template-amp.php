<!doctype html>
<html lang="el" ⚡>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="/wp-content/themes/whsk_tovima.com/common/imgs/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/whsk_tovima.com/common/imgs/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/whsk_tovima.com/common/imgs/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/whsk_tovima.com/common/imgs/icons/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/whsk_tovima.com/common/imgs/icons/site.webmanifest">
    <link rel="mask-icon" href="/wp-content/themes/whsk_tovima.com/common/imgs/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

  <?php
    $postexl = apply_filters( 'the_excerpt', get_the_excerpt() );
    $postexl = str_replace('&quot;', '"', $postexl);
    $postexl = str_replace('"', '', $postexl);
    $postexl = str_replace('<p>', '', $postexl);
    $postexl = str_replace('</p>', '', $postexl);
    $postexl = str_replace('\n', '', $postexl);
    $postexl = preg_replace( "/\r|\n/", "", strip_tags ($postexl) );
    ?>

	<meta name="author" content="tovima.com" />
	<meta name="description" content="<?php echo $postexl; ?>" />
	<meta property="og:site_name" content="tovima.com"/>
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:title" content="<?php echo wp_kses_data( $this->get( 'post_title' ) ); ?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:description" content="<?php echo $postexl; ?>" />
	<meta property="og:image" content="<?php the_post_thumbnail_url( 'large' ); ?>"/>
	<meta name="twitter:description" content="<?php echo $postexl; ?>" />
	<meta name="twitter:title" content="<?php echo wp_kses_data( $this->get( 'post_title' ) ); ?>" />
	<meta name="twitter:site" content="@tovimagr" />
	<meta name="twitter:image" content="<?php the_post_thumbnail_url( 'large' ); ?>" />
	<meta name="twitter:creator" content="@tovimagr" />

	<?php do_action( 'amp_post_template_head', $this ); ?>

	<style amp-custom>
    <?php $this->load_parts( array( 'style' ) ); ?>
    <?php do_action( 'amp_post_template_css', $this ); ?>

    #postPromptUI button {
      background: #368bd6;
      color: white;
      padding: 5px 15px;
      border: none;
      outline: none;
      display: flex;
      align-items: center;
      position: fixed;
      right: 0;
      bottom: 0;
      border-radius: 3px 0 0 3px;
      max-height: 30px;
      max-width: 110px;
      cursor: pointer;
    }
    
	</style>
	<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  
	<?php
	$gggg = $this->get( 'post_amp_content' );
	if(strpos($gggg, "data-instgrm-version")){ ?>
  <script async custom-element="amp-instagram" src="https://cdn.ampproject.org/v0/amp-instagram-0.1.js"></script>
	<?php } ?>
  
<script async custom-element="amp-consent" src="https://cdn.ampproject.org/v0/amp-consent-0.1.js"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" as="style">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">  
    
</head>

<body class="<?php echo esc_attr( $this->get( 'body_class' ) ); ?>">
  
<?php
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
} ?>

<amp-consent id="googlefc" layout="nodisplay" type="googlefc">
  <script type="application/json">
    {
      "clientConfig": {
        "publisherIdentifier": "pub-3451081775397713"
      }
    }
  </script>
</amp-consent>

<div id="fcConsentRevocation" style="position:fixed;bottom:0;right:0;z-index:9">
  <button class="googlefc" on="tap:googlefc.prompt">Privacy</button>
</div>

<!-- GA4 -->
<amp-analytics type="gtag" data-credentials="include">
<script type="application/json">
    {
        "vars" : {
            "gtag_id": "G-0MWHJJHT0E",
            "config" : { "G-0MWHJJHT0E": { "groups": "default" } }
        }
    }
</script>
</amp-analytics>
<!-- END GA4-->

<amp-analytics type="chartbeat">
    <script type="application/json">
        {
            "vars": {
                "uid": "66944",
                "domain": "tovima.com"
            }
        }
    </script>
</amp-analytics>

<?php /*
<amp-sidebar id="sidebar"
  class="sidebar-vimagr"
  layout="nodisplay"
  side="left">
  
  <amp-img class="menu-logo" src="<?php echo get_template_directory_uri(); ?>/common/imgs/logo.svg" width="179" height="30" alt="tovima.gr"></amp-img>
  
  <div class="ul-menu">
    <li><a href="/">Πρώτη Σελίδα</a></li>
    <li><a href="/latest-news/">Τελευταία Νέα</a></li>
    <li><a href="/category/politics/">Πολιτική</a></li>
    <li><a href="/category/finance/">Ανάπτυξη</a></li>
    <li><a href="/category/opinions/">Γνώμες</a></li>
    <li><a href="/category/world/">Κόσμος</a></li>
    <li><a href="/category/science/">Science</a></li>
    <li><a href="/category/society/">Κοινωνία</a></li>
    <li><a href="/category/sports/">Αθλητισμός</a></li>
    <li><a href="/category/culture/">Πολιτισμός</a></li>
    <li><a href="/print/">Έντυπη Έκδοση</a></li>
    <li><a href="/category/international/">International</a></li>
    <li><a href="/category/vimagazino/">BHMAgazino</a></li>
    <li><a href="https://www.vita.gr/" target="_blank">Vita</a></li>
    <li><a href="/category/books-ideas/">Βιβλία</a></li>
    <li><a href="/category/nees-epoxes?printed">Νέες εποχές</a></li>
    <li><a href="/category/media/">Media</a></li>
    <li><a href="/category/autohub/">Autohub</a></li>
    <li><a href="/category/afieromata/">Αφιερώματα</a></li>
    <li><a href="/category/vimatv/">ΒήμαTV</a></li>
    <li><a href="/category/mega-gegonota-se-1">MEGA Γεγονότα σε 1'</a></li>  
  </div>
</amp-sidebar>
*/ ?>
  
<div class="wrapper-arm">

<div class="site-header">
  <a href="/" title="Αρχική" rel="home" class="main-logo">
    <amp-img layout="responsive" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" alt="tovima.gr" width="300" height="46"></amp-img>
  </a>
</div>

<div class="maxgridrow">
<article id="post-<?php the_ID(); ?>" class="amp-wp-article">

<?php global $post; 
  $thumb_full = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
  $post_content = apply_filters('the_content',get_the_content());
  $text = str_replace("'",'"',strip_tags( html_entity_decode( $post_content ) ) );
  $text = trim(preg_replace('/\s+/', ' ', $text));
?>  

<header class="article-header">
  <h1 class="f-400 post-title zonaultra is-size-2-mobile"><?php the_title(); ?></h1>
  <h2 class="post-summary zonabold"><?php echo get_the_excerpt(); ?></h2>
</header>

<?php
$featured_image = $this->get( 'featured_image' );
$amp_html = $featured_image['amp_html'];
$caption = $featured_image['caption'];
$thumbmain = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
?>
<figure class="amp-wp-article-featured-image wp-caption">
  <?php if ( has_post_thumbnail() ) { ?>
  <meta itemprop="image" content="<?php echo $thumbmain['0'];?>">
  <amp-img src="<?php echo $thumbmain['0'];?>" alt="<?php the_title(); ?>" width="<?php echo $thumbmain['1'];?>" height="<?php echo $thumbmain['2'];?>" layout="responsive"></amp-img>
  <?php } else { ?>
  <amp-img src="<?php echo get_template_directory_uri(); ?>/common/imgs/defaultImage2.jpg" width="1200" height="800" layout="responsive" alt="ΤΟ ΒΗΜΑ"></amp-img>
  <?php } ?>
</figure>

<?php include(TEMPLATEPATH .'/assets/single/post-meta.php'); ?>  
  
<div class="post-body" itemprop="articleBody">
    <?php
    //   $post_tags = get_the_tags($post->ID);
      $paragraphAfter= 1; //display after the first paragraph
      if(is_category()){
        $getcategories = explode(";",get_category_parents(get_category($cat)->term_id, false, ";", true));
        array_pop ( $getcategories );
        $maincat = $getcategories[0];
        if(count($getcategories) >= 2) { $subcat = $getcategories[1]; } else { $subcat = ""; }
      } elseif(is_single()) {
        $getcatars = get_the_category(); $pushcatar = array(); $pushcatarparent = array();
        foreach ($getcatars as $getcatar) { if($getcatar->category_parent != "0"){ array_push($pushcatar, $getcatar->term_id); } }
        if (count($pushcatar) > 0){
          $getcatego = explode(";",get_category_parents($pushcatar[0], false, ";", true));
          $maincat = $getcatego[0];
          $subcat = $getcatego[1];
        } else {
          foreach ($getcatars as $getcatar) { if($getcatar->category_parent == "0"){ array_push($pushcatarparent, $getcatar->slug); } }
          if (count($pushcatarparent) > 0){
            $maincat = $pushcatarparent[0];
          } else {
            $maincat = "";
          }
          $subcat = "";
        }
      }
    ?>

    <?php
      $gggg1 = str_replace('<script></script>', '', $gggg);
      $gggg1 = str_replace('<div></div>', '', $gggg);
      $gggg1 = str_replace('<div xmlns="http://www.w3.org/1999/xhtml" class="entry"> </div>', '', $gggg);
      $gggg1 = str_replace('xmlns="http://www.w3.org/1999/xhtml"', '', $gggg);
      $gggg1 = str_replace('<div class="entry" xmlns="http://www.w3.org/1999/xhtml"> </div>', '', $gggg);
      $gggg1 = str_replace('<a class="ApplyClass" href="http://"></a>', '', $gggg);
      $gggg1 = str_replace('<a href="http://"></a>', '', $gggg);
      $gggg1 = str_replace('<a href="http:// www"></a>', '', $gggg);
      $gggg1 = str_replace('width=""', '', $gggg);
      $gggg1 = str_replace('http:// www.', 'http://www', $gggg);
      $gggg1 = str_replace('href="http://"', '#', $gggg);
      $gggg1 = str_replace('http:///', 'http://', $gggg);        
      $gggg1 = str_replace('<br />', '', $gggg);
      $gggg1 = str_replace('type="_moz"','',$gggg);  ?>

<?php $gggg1 = explode("</p>", $gggg1);


  $posttags = get_the_tags();
  $tags = array();
  $tagec = "";
  if(!empty($posttags)){
    foreach($posttags as $tag) { $tags[] = str_replace("'", "",$tag->name); }
    $tagec = implode(',',$tags);
  } else {
    $tagec = 'Το Βημα,Πολιτική, Οικονομία,Εφημερίδα, Πρωτοσέλιδο Σήμερα, Επικαιρότητα, Κόσμος, Ειδήσεις, Νέα, Πολιτισμός';
  }


for ($i = 0; $i < count($gggg1); $i++ ) {
if ($i == $paragraphAfter) { ?>

<div class="dfpslot">
   <amp-ad width=300 height=250
      type="doubleclick"
      data-slot="/28509845/tovima_group/tovima_mobile_300x250_amp"
      json='{"targeting":{
            "Category":["<?php echo $maincat; ?>"],
            "Platform":["amp"],
            "SubCategory":["<?php echo $subcat; ?>"],
            "Item_Id":["<?php echo get_the_ID(); ?>"],
            <?php if(!empty ($posttags)) { ?>
            "Tags":["<?php echo $tagec; ?>"]
            <?php } ?>
            }}'>
      <div fallback>
         <a target="_blank" href="https://www.helioskiosk.gr/newspapers-digital">
            <amp-img src="https://tpc.googlesyndication.com/pageadimg/imgad?id=CICAgKDrifbGBBCsAhj6ASgBMggy89u6sZTGtA" width="300" height="250" layout="responsive"></amp-img>
         </a>
      </div>
   </amp-ad>
</div>

<?php } echo $gggg1[$i] . "</p>";  } ?>
    
<div class="dfpslot">
   <amp-ad width=300 height=450
      type="doubleclick"
       data-loading-strategy="prefer-viewability-over-views"
      data-slot="/28509845/tovima_group/tovima_mobile_300x450_amp"
      json='{"targeting":{
            "Category":["<?php echo $maincat; ?>"],
            "Platform":["amp"],
            "SubCategory":["<?php echo $subcat; ?>"],
            "Item_Id":["<?php echo get_the_ID(); ?>"],
            <?php if(!empty ($posttags)) { ?>
            "Tags":["<?php echo $tagec; ?>"]
            <?php } ?>
            }}'>
   </amp-ad>
</div>

</div>
  
<?php include(TEMPLATEPATH .'/assets/single/tags.php'); ?>
  
<?php include(TEMPLATEPATH .'/assets/single/content-related.php'); ?>

<?php include(TEMPLATEPATH .'/assets/single/mustread.php'); ?>
  
<?php include(TEMPLATEPATH .'/assets/single/structure.php'); ?>  
  
</article>
  
<footer class="article-footer is-relative">
  <?php 
  $pageUrl = get_permalink();
  $opinions = '/opinions/';
  if (strpos($pageUrl, $opinions) == !false) { 
include(TEMPLATEPATH .'/assets/single/author-related.php'); 
  } else {
  include(TEMPLATEPATH .'/assets/single/category-related.php'); 
  } ?>
<?php include(TEMPLATEPATH .'/assets/elements/latestnews.php'); ?>
<?php // include(TEMPLATEPATH .'/assets/elements/network.php'); ?>
</footer>
</div>
  
  
<div id="vima-footer" class="is-relative">

<div class="wrap-footer-items is-relative">
<div class="maxgridrow">  
  
<footer class="site-footer is-relative">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?> is-mobile">
      
      <div class="column is-full">
        <a href="/" class="footer-logo">
          <amp-img layout="responsive" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" alt="tovima.gr" width="300" height="46"></amp-img>
        </a>
      </div>
      
      <div class="column is-full">
        
      <div class="footer-menu">
        <ul class="menu-wrapper">
          <li class=""><a href="/category/politics/">Politics</a></li>
          <li class=""><a href="/category/society/">Society</a></li>
          <li class=""><a href="/category/finance/">Finance</a></li>
          <li class=""><a href="/category/culture/">Culture</a></li>
          <li class=""><a href="/category/science/">Science</a></li>
          <li class=""><a href="/category/climate/">Climate</a></li>
          <li class=""><a href="/category/opinions/">Opinions</a></li>
          <li class=""><a href="/category/wsj/">WSJ</a></li>
        </ul>

        <ul class="terms-menu">
          <li><a href="/about/">About</a></li>
          <li><a href="/contact/">Contact</a></li>
          <li><a href="/terms-of-use/">Terms of Use</a></li>
          <li><a href="/data-protection-policy/">Privacy Policy</a></li>
          <li><a href="/cookies/">Cookies</a></li>
        </ul>
      </div>
    </div>
    
  </div>
</footer>
  
<div class="is-relative">
  <div class="copyright-footer" style="padding:12px 0;border-top:1px solid #ddd">
    <p class="copyright-footer-text m-0 manrope f-500" style="color:#8C8C8C;font-size:12px">
      © <?php echo date('Y'); ?>  tovima.com • Publishing Partner: The Wall Street Journal • All rights reserved.
    </p>
  </div>
</div>
</div>
</div>
</div>
  
<?php do_action( 'amp_post_template_footer', $this ); ?>
</div>

</body>
</html>