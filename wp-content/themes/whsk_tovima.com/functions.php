<?php
define('VARIABLES', 'is-4-desktop');
define('WHSK_DATE_QUERY', '');
define('WHSK_DATE_QUERY_UP', '');
define('URL', '');
define('READMORE', 'VIEW ALL');

add_filter('show_admin_bar', '__return_false');



/* SAVE ACF FIELDS IN TO A NEW JSON */
function my_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

function my_acf_json_load_point( $paths ) {
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/acf-json';
  return $paths;
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );


function makeInternalLinkRelative($src){
  return str_replace(get_option('siteurl'),'',$src);
}

add_filter('style_loader_src',function($src, $handle){ return makeInternalLinkRelative($src); },10,4);
add_filter('script_loader_src',function($src, $handle){ return makeInternalLinkRelative($src); },10,4);


/* SVG SUPPORT */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');


/* COUNT CATEGORIES */
function count_category_post( $category )  {
  if( is_string( $category ) ) :
      $category_Id = get_cat_ID( $category );
  elseif( is_numeric( $category ) ) :
      $category_Id = $category;
  endif;

  $cat = get_category( $category_Id );

  return ! empty( $cat->count ) ? $cat->count : 0;

}


/* Settings gia ton metriti grammatwn (word count) sto post page */
function tks_pg_settings_api_init() {
  add_settings_section('tks_pg_setting_section','Ρυθμίσεις για όριο γραμμάτων','tks_pg_setting_section_callback_function','general');
 	add_settings_field('tks_count1','Τίτλος εσωτερικός','tks_pg_callback_function1','general','tks_pg_setting_section');
 	add_settings_field('tks_count2','Τίτλος Εξωτερικός','tks_pg_callback_function2','general','tks_pg_setting_section');    
 	add_settings_field('tks_count3','Λιντάκι εσωτερικός','tks_pg_callback_function3','general','tks_pg_setting_section');
 	add_settings_field('tks_count4','Λιντάκι Εξωτρικό','tks_pg_callback_function4','general','tks_pg_setting_section');  
 	register_setting( 'general', 'tks_count1' );
 	register_setting( 'general', 'tks_count2' );
 	register_setting( 'general', 'tks_count3' );
 	register_setting( 'general', 'tks_count4' );
 	register_setting( 'general', 'tks_count5' );
}
add_action( 'admin_init', 'tks_pg_settings_api_init' );

function tks_pg_setting_section_callback_function() {
  echo '<p>Συμπληρώστε τον απαιτούμενο αριθμών γραμμάτων πριν κοκκινήσουν τα αντίστοιχα πεδία:</p>';
}

function tks_pg_callback_function1() {
 	echo '<input name="tks_count1" id="tks_count1" type="text" value="'.get_option( 'tks_count1' ).'" />';
}
function tks_pg_callback_function2() {
 	echo '<input name="tks_count2" id="tks_count2" type="text" value="'.get_option( 'tks_count2' ).'" />';
}
function tks_pg_callback_function3() {
 	echo '<input name="tks_count3" id="tks_count3" type="text" value="'.get_option( 'tks_count3' ).'" />';
}
function tks_pg_callback_function4() {
 	echo '<input name="tks_count4" id="tks_count4" type="text" value="'.get_option( 'tks_count4' ).'" />';
}


/* Admin Script */
add_action('admin_enqueue_scripts', 'tks_scriptload');
function tks_scriptload($hook) {
  if ($hook != 'edit.php') {
//     wp_register_script( 'custom-admin-scripts', get_template_directory_uri() . '/common/js/adminpost.js', array('jquery', 'jquery-ui-sortable' ) , null, true );
//     wp_enqueue_script( 'custom-admin-scripts' );
    wp_enqueue_script( 'tks_tinymce-script', get_template_directory_uri() . '/common/js/tks_tinymce.js', array( 'jquery' ));

    wp_enqueue_script( 'tks_wordcount-script', get_template_directory_uri() . '/common/js/tks_wordcount.js', array( 'jquery' ));
    wp_localize_script( 'tks_wordcount-script', 'tks_wc_vars', array(
      'tks_max_title' => get_option( 'tks_count1' ),
      'tks_max_excerpt' => get_option( 'tks_count3' ),
      )
    );

  }
}



global $a; 
$a = array("a"=>"/common/imgs/fallback/vima-def-a.jpg",
           "b"=>"/common/imgs/fallback/vima-def-b.jpg",
           "c"=>"/common/imgs/fallback/vima-def-c.jpg",
           "d"=>"/common/imgs/fallback/vima-def-d.jpg",
           "e"=>"/common/imgs/fallback/vima-def-e.jpg",
           "f"=>"/common/imgs/fallback/vima-def-f.jpg",
           "g"=>"/common/imgs/fallback/vima-def-g.jpg",
           "h"=>"/common/imgs/fallback/vima-def-h.jpg",
           "i"=>"/common/imgs/fallback/vima-def-a.jpg",
          );
// echo(array_rand($a,1));

/* IMAGE UPLOAD PATH */
add_filter('upload_dir', 'cdn_upload_url');
function cdn_upload_url($args) { 
  $args['baseurl'] = 'https://www.tovima.com/wp-content/uploads';
  return $args;
}


add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
echo '<style>
.acf-relationship .selection .choices .list img, .acf-relationship .list li img {max-width: 24px;float: left;margin-right: 5px;}
.categorydiv div.tabs-panel {max-height:400px}
.acf-field.acf-field-text.acf-field-5a801ac4e0saasd8,
.acf-field.acf-field-oembed.acf-field-5a8087d0c24f1,
.acf-field.acf-field-oembed.acf-field-5a9811cfd3023,
.acf-field.acf-field-oembed.acf-field-5aa3e8699c4d4,
div#acf-group_5a745e41546d0 {display: none}
li#toplevel_page_inboxtool {background-color: #ff0000;}
.acf-relationship .list {height: 510px !important;}
#tagsdiv-post_tag,
#tagsdiv-nea_authors{display:none}

.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:first-child {background-color:#e2f0ff;border-bottom: 2px solid blue}
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(2),
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(3){background-color:#d1ccc0}
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(3){border-bottom: 2px solid blue}

.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(4),
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(5),
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(6),
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(7),
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(8){background-color:#fff6ea}
.toplevel_page_tovima_index #acf-field_5b09d570bdf81 .values .ui-sortable li:nth-child(8){border-bottom: 2px solid blue}

.now.button {background-color: #ffba59;color: #000}

</style>';
}

  
  $dayNameGreeks = array( 0 => "της Κυριακής", 1 => "της Δευτέρας", 2 => "της Τρίτης", 3 => "της Τετάρτης", 4 => "της Πέμπτης", 5 => "της Παρασκευής", 6 => "του Σαββάτου", );
  $dayNameGreek = array( 0 => "Sunday", 1 => "Monday", 2 => "Tuesday", 3 => "Wednesday", 4 => "Thursday", 5 => "Friday", 6 => "Saturday", );
  $monthNameGreek = array(1 => "Ιαν", 2 => "Φεβρ", 3 => "Μαρ", 4 => "Απρ", 5 => "Μαϊ", 6 => "Ιουν",7 => "Ιουλ", 8 => "Αυγ", 9 => "Σεπτ", 10 => "Οκτ", 11 => "Νοεμ", 12 => "Δεκ");
 function showCurrentDateTime() { 
   global $dayNameGreek; global $monthNameGreek; 
    $date = new DateTime("now", new DateTimeZone('Europe/Athens') ); ?>
    <div class="fulldate">
      <span class="imeratext"><?php echo $dayNameGreek[ $date->format('w') ]; ?>,</span>
      <span class="minastext"><?php echo $date->format('M') ?>.</span>
      <span class="imeranumber"> <?php echo $date->format('d'); ?></span>
      <span class="yearnumber"><?php echo $date->format('Y');  ?></span>
    </div>
  <?php }



 function showCurrentDay() { 
   global $dayNameGreeks;
    $date = new DateTime("now", new DateTimeZone('Europe/Athens') ); ?>
    <?php echo $dayNameGreeks[ $date->format('w') ]; ?>
  <?php }

  /*
  add_action( 'wp_enqueue_scripts', function () {
    global $dayNameGreek; global $monthNameGreek; 
    $date = new DateTime("now", new DateTimeZone('Europe/Athens') );
    wp_enqueue_script('timejs', get_template_directory_uri() . '/common/js/time.js', '','',true);
    wp_localize_script('timejs', "dateobj", array('day'=>$dayNameGreek,'month'=> $monthNameGreek, 'curdate' => $date->format('Ymd') ) );
  } );
  */ 

	/* REMOVE FROM HEADER
	================================*/
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_resource_hints', 2 );
	remove_action('wp_head', 'print_emoji_detection_script', 7 );
	remove_action('wp_print_styles', 'print_emoji_styles' );
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_shortlink_wp_head');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'rest_output_link_wp_head');

  if (defined('WPSEO_VERSION')){
  add_action('get_header',function (){ ob_start(function ($o){
  return preg_replace('/^<!--.*?[Y]oast.*?-->$/mi','',$o); }); });
  add_action('wp_head',function (){ ob_end_flush(); }, 999);
  }

  add_theme_support( 'post-thumbnails' );
  add_image_size( 'image90x90', 90, 90, true );
  add_image_size( 'ingr-medium', 400, 240, true );
  
  // add_filter('jpeg_quality', function($arg){return 90;});


  /**
   * Enqueue scripts and styles.
   */


function tovimacom_styles() {
    wp_enqueue_style( 'tovima-style', get_stylesheet_uri() , '1.0.1');
    $src = get_template_directory_uri();
    // $src = str_replace('http://wp.mgmt.tovima.com', '/', $src);
    $version = '1.2.9';
  
    wp_enqueue_script('jquery.3.6.3', $src. '/common/js/jquery.3.6.3.min.js', array(), '', false );
  
    wp_enqueue_style('format', $src. '/common/css/format.css', '', $version, 'all');
    wp_enqueue_style( 'dashicons' );

    if(is_home() || is_category('vimagazino') || is_page(array('print', 'vimagazino', 'ekloges-2023'))) { 
      wp_enqueue_style( 'homecss', $src. '/common/css/home.css', '', '1.3.7', 'all');
    } 
  
    if(is_page('to-vima')) {
      wp_enqueue_style( 'datecss', $src. '/common/css/datepicker.css');
    }
  
    if(is_page('member-login')) {
      wp_enqueue_style( 'memberlogin', $src. '/common/css/login.css', '', $version, 'all');
    }

    if(is_single()) { 
      wp_enqueue_style( 'singlecss', $src. '/common/css/single.css', '', $version, 'all');
//       wp_enqueue_style( 'printcss', $src. '/common/css/print.css', '', $version, 'all');
    }
  
    if(is_archive() || is_page('latest-news') || is_search() || is_page('entypi-ekdosi') || is_page(array('vimagazino', 'ekloges-2023', 'print'))) { 
      wp_enqueue_style( 'archivecss', $src. '/common/css/archive.css', '', $version, 'all');
    }

    if(is_404()) {
      wp_enqueue_style( 'singlecss', $src. '/common/css/single.css', '', $version, 'all');
    }
  
    if(is_page('contact')) {
      wp_enqueue_style( 'contact', $src. '/common/css/contact.css');
    }

    if(is_home() || is_single()) {
      wp_enqueue_style( 'podcast', $src. '/common/css/podcast.css', '', $version, 'all');
    }

    if(is_page('ekloges-2023')) {
      wp_enqueue_style( 'ekloges', $src. '/common/css/ekloges.css', '', $version, 'all');
    }
  
    wp_enqueue_script( 'main', $src. '/common/js/main.js', array(), '1.3.55', true );
  
    if(is_single() || is_home() || is_404() || is_page('ekloges-2023')) {
      wp_enqueue_style( 'slickcss', $src. '/common/slick/slick.css','', '1.0', 'all' );
      wp_enqueue_style( 'slickcsstheme', $src. '/common/slick/slick-theme.css','', '1.0', 'all' );
      wp_enqueue_script('slickjs', $src. '/common/slick/slick.min.js', '','1', true);
    }
  
    if(is_single() || is_404()) {
      wp_enqueue_script('single', $src. '/common/js/single.js', array(), '1.0', true );
      // if(!is_404()) {
      // wp_enqueue_script('zencdn', '//vjs.zencdn.net/5.3/video.min.js', array(), false, true);
      // wp_enqueue_script('ima3aem', '//www.tovima.gr/filesjs/ima/ima3aem.js?v=1.2a', array(), false, true);
      // wp_enqueue_script('cloudflare', '//cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/4.2.5/videojs.ads.min.js', array(), false, true );
      // wp_enqueue_script('videojs', '//www.alteregomedia.org/files/js/videojs.ima.js?v=6', array(), false, true );
      // wp_enqueue_script('inread', '//www.alteregomedia.org/files/js/inread.js?v=1.1', array(), false, true );
      // }
    }
  
    if(is_home()) {  
      wp_enqueue_script( 'home', $src. '/common/js/home.js', array(), '1.0.4', true );
    }

    if(is_page('ekloges-2023')) {  
      wp_enqueue_script( 'ekloges', $src. '/common/js/ekloges.js', array(), '1.0.3', true );
    }
  
    if(is_page('to-vima')) {  
      wp_enqueue_script( 'datepicker', $src. '/common/js/datepicker.js', array(), '', true );
    }
  
//     wp_enqueue_script('stickynewsletter', $src. '/common/js/stickynewsletter.js', array(), '', true );
    wp_enqueue_script('uppercase', $src. '/common/js/uppercase.js', array(), '', true );    

    if(is_single() && get_field('postvideo_url') || is_home() ) {
      wp_enqueue_style( 'plyr', 'https://cdn.plyr.io/3.7.8/plyr.css','', '1.0', 'all' );    
      wp_enqueue_script('plyr', 'https://cdn.plyr.io/3.7.8/plyr.js', '','1.0', true);
      // wp_enqueue_script('hls', 'https://cdn.jsdelivr.net/npm/hls.js', '','1.0', false);
      wp_enqueue_script('hlsinline', $src. '/common/js/hls.js', '','0.0.1', true);      
      wp_enqueue_script('plyrinner', $src. '/common/js/plyr.js', '','1.1.4', true);      
    }  
      
  
}
add_action('wp_enqueue_scripts', 'tovimacom_styles');


/* INCLUDES
==============================*/
include(get_template_directory() . '/functions/more-functions.php');
include(get_template_directory() . '/functions/greekenglish.php');
include(get_template_directory() . '/functions/editors.php');
include(get_template_directory() . '/functions/acf-entipis.php');
include(get_template_directory() . '/functions/vimagazino-fields.php');
include(get_template_directory() . '/functions/ac-functions.php');
include(get_template_directory() . '/functions/acfquery.php');
include(get_template_directory() . '/functions/cpt.php');
include(get_template_directory() . '/functions/relationships.php');
include(get_template_directory() . '/functions/optimize-query.php');
include(get_template_directory() . '/functions/numeric.php');
include(get_template_directory() . '/functions/post-layout.php');
include(get_template_directory() . '/functions/mustreadwidget.php');
include(get_template_directory() . '/functions/hottags.php');
include(get_template_directory() . '/functions/home-ac.php');
// include(get_template_directory() . '/functions/disable-search.php');
include(get_template_directory() . '/restapi.php');
 include(get_template_directory() . '/functions/amp.php');
include(get_template_directory() . '/functions/disable_comments.php');
include(get_template_directory() . '/functions/redirect.php');
include(get_template_directory() . '/functions/rss.php');
include(get_template_directory() . '/functions/podcast.php');
include(get_template_directory() . '/functions/breaking.php');
include(get_template_directory() . '/functions/elections.php');
// include(get_template_directory() . '/functions/fiveam_newsletter_fields.php');
include(get_template_directory() . '/functions/limit300.php');
include(get_template_directory() . '/functions/googlenews.php');

// Add ID's to posts & pages overviews
add_filter('manage_posts_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns_id', 5);
add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);

function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function posts_custom_id_columns($column_name, $id){
        if($column_name === 'wps_post_id'){echo $id;
    }
}

// Determine ID column width
add_action('admin_head', 'custom_admin_styling');
function custom_admin_styling() {
echo '<style type="text/css">';
echo 'th#wps_post_id{width:100px;}';
echo '</style>';
}


/* ADD COLUMNS  */
function add_acf_columns ( $columns ) {
  $counter = 0;$newcolumn = array();
  foreach($columns as $kco => $vco){
    $counter++;
    if($counter == 4){
      $newcolumn[$kco] = $vco;
      $newcolumn['locked'] = ('Locked Article');
      $newcolumn['time'] = ('Ωρα Δημ');
    } else {
      $newcolumn[$kco] = $vco;
    }
  }
//   $newcolumn['opensite'] = ('Προβολή');
  return $newcolumn;
}
add_filter ( 'manage_printed_post_posts_columns', 'add_acf_columns');


function posts_custom_column ( $column, $post_id ) {
  switch ( $column ) {
     case 'locked':
     $metaData = get_field( 'locked_article', $post_id);
     if($metaData) {
     echo '<div style="display: flex;align-items: center;"><img src="/wp-content/themes/whsk_tovima.com/common/imgs/lock.svg" alt="lock" loading="lazy" width="12" height="13" /><span style="font-size:11px;font-weight:bold;color:#bf7217;padding-left:5px">ΚΛΕΙΔ.<span></div>';
     }
     break;
     case 'time':
     echo get_the_time( 'H:i' );
     break;
  }
}
add_action ( 'manage_printed_post_posts_custom_column', 'posts_custom_column', 10, 2 );


/* REMOVE EXPERT AFTER TITLE
==============================*/
function oz_remove_normal_excerpt() {
	remove_meta_box( 'postexcerpt' , 'post' , 'normal' );
  remove_meta_box( 'postexcerpt' , 'printed_post' , 'normal' );
}
add_action( 'admin_menu' , 'oz_remove_normal_excerpt' );

function oz_add_excerpt_meta_box( $post_type ) {
	if ( in_array( $post_type, array( 'post', 'page', 'printed_post' ) ) ) {
		add_meta_box(
			'oz_postexcerpt',
			__( 'Excerpt', 'thetab-theme' ),
			'post_excerpt_meta_box',
			$post_type,
			'after_title',
			'high'
		);
	}
}
add_action( 'add_meta_boxes', 'oz_add_excerpt_meta_box' );
function oz_run_after_title_meta_boxes() {
	global $post, $wp_meta_boxes;
	# Output the `below_title` meta boxes:
	do_meta_boxes( get_current_screen(), 'after_title', $post );
}
add_action( 'edit_form_after_title', 'oz_run_after_title_meta_boxes' );


/* DAY PER UPLOAD 
============================== */
function wpcb_upload_dir_filter($uploads){
    $day = date('d');
    $uploads['path'] .= '/' . $day;
    $uploads['url']  .= '/' . $day;
    return $uploads;
}
add_filter('upload_dir', 'wpcb_upload_dir_filter');


/* WORDCOUNT TEXT
============================== */
function wordcount($str) {
return count(explode(" ",$str));
}

/* SHOW PUBLISHED POSTS AF FIRST
============================== */
function wcs_change_admin_post_link() {
    global $submenu;
    $submenu['edit.php'][5][2] = 'edit.php?post_status=publish';
}
add_action( 'admin_menu', 'wcs_change_admin_post_link' );



/*======Limit Excert===== */
function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).'...';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}

/*======Limit Excert===== */



/* SERVER CONTENT URL
=======================*/
add_filter( 'the_content', 'the_content_filter', 20 );
function the_content_filter( $content ) {
  
//     $content = preg_replace('#<div>(.*?)</div>#i', '<p>\1</p>', $content);
    $content = preg_replace('#<div dir="auto">(.*?)</div>#i', '<p>\1</p>', $content);  
    $content = str_replace( '{{{ graph }}}', '', $content  );
    $content = str_replace( '{{{ gallery }}}', '', $content  );
    $content = str_replace( 'src="/files/', 'src="//www.tovima.gr/files/', $content );
    $content = str_replace( 'wp.mgmt.tovima.com', 'www.tovima.com', $content );
    $content = str_replace( 'width=""', '', $content);
    $content = str_replace( '<a href="files', '<a href="/files', $content);
    $content = str_replace( '<a href="oldphotos', '<a href="/oldphotos', $content);
    $content = str_replace( '<a href="www.', '<a href="http://www.', $content);
    $content = str_replace( '<a href="http:// www"></a>', '', $content);
    $content = str_replace( '<a class="ApplyClass" href="http://"></a>', '', $content);
    $content = str_replace( 'xmlns="http://www.w3.org/1999/xhtml"', '', $content);
    $content = str_replace( '<div><strong><br></strong></div>', '', $content  );
    $content = str_replace( '<p><strong><br></strong></p>', '', $content  );
    $content = str_replace( 'style="text-align: center;"', "style='text-align: center;'", $content  );
    $content = str_replace( 'style="text-align: left;"', "style='text-align: left;'", $content  );  
    $content = str_replace( "<blockquote>\n<p style='text-align: left;'>", "<blockquote class='align-left'><p>", $content  );       
    $content = str_replace( "<blockquote>\n<p style='text-align: center;'>", "<blockquote class='align-center'><p>", $content  );  
    $content = str_replace( '{MES}', '', $content  );
    $content = str_replace( '{MEX}', '', $content  );
    $content = str_replace( '{XT}', '', $content  );
    $content = str_replace( '{APX}', '', $content  );
    $content = str_replace( '{LF}', '', $content  );
    $content = str_replace( '{EXE}', '', $content  );
    $content = str_replace( '{EXS}', '', $content  );
    $content = str_replace( '{L}', '', $content  );
    $content = str_replace( '{EXT}', '', $content  );
    $content = str_replace( '{CR}', '', $content  );
    $content = str_replace( '<div></div>', '', $content  );
    $content = str_replace( '<figure>\n</figure>', '', $content  );
    $content = str_replace( '<figure></figure>', '', $content  );  
    $content = str_replace('src="http://www.in.gr', 'src="https://www.in.gr', $content);
    $content = str_replace('src="http://www.tanea.gr', 'src="https://www.tanea.gr', $content);
    $content = str_replace('src="http://www.tovima.com', 'src="https://www.tovima.com', $content);
    $content = str_replace('http://www.in.gr', 'https://www.in.gr', $content);
    $content = str_replace('http://www.tanea.gr', 'https://www.tanea.gr', $content);
    $content = str_replace('http://www.tovima.com', 'https://www.tovima.com', $content);
    $content = str_replace('http://www.vita.gr', 'https://www.vita.gr', $content);
    $content = str_replace('http://www.imommy.gr', 'https://www.imommy.gr', $content);
    $content = str_replace('http://www.ot.gr', 'https://www.ot.gr', $content);
    $content = str_replace('&nbsp;','',$content);
    // if(!is_amp_endpoint()) {
    $content = str_replace('wrap-video-container','',$content);
    $content = str_replace('position: relative; padding-bottom: 56.25%;','',$content);
    $content = str_replace('position:relative;padding-bottom:56.25%;','',$content);
    // }
    
    $content = preg_replace( '/\s+/', ' ', $content );
    return $content;
}

function wpse_filter_post_titles( $title ) {
    $title = str_replace( '{MES}', '', $title  );
    $title = str_replace( '{MEX}', '', $title  );
    $title = str_replace( '{XT}', '', $title  );
    $title = str_replace( '{APX}', '', $title  );
    $title = str_replace( '{LF}', '', $title  );
    $title = str_replace( '{EXE}', '', $title  );
    $title = str_replace( '{EXS}', '', $title  );
    $title = str_replace( '{L}', '', $title  );
    $title = str_replace( '{EXT}', '', $title  );
    $title = str_replace( '{CR}', '', $title  );
    return $title;
}
add_filter( 'the_title', 'wpse_filter_post_titles' );



/* REMOVE /%%SITENAME%% FROM OG:TITLE
======================= */
add_filter('wpseo_opengraph_title','mysite_ogtitle', 999);
function mysite_ogtitle($title) {
    $title = str_replace( '{MES}', '', $title  );
    $title = str_replace( '{MEX}', '', $title  );
    $title = str_replace( '{XT}', '', $title  );
    $title = str_replace( '{APX}', '', $title  );
    $title = str_replace( '{LF}', '', $title  );
    $title = str_replace( '{EXS}', '', $title  );
    $title = str_replace( '{L}', '', $title  );
    $title = str_replace( '{EXE}', '', $title  );
    $title = str_replace( '{EXT}', '', $title  );
    $title = str_replace( '{CR}', '', $title  );
  
  if( is_singular( 'post') ) {
     if(get_field("front_title")) {
      $title = get_field("front_title");
      $title = $title . " | " . get_bloginfo("name");
     }
  }  
  
    return $title;
}



add_filter('wpseo_opengraph_desc','facebook_ogdesccc', 999);
function facebook_ogdesccc($excerpt) {
$excerpt = str_replace('{LF}','',$excerpt);
$excerpt = str_replace('{MEX}','',$excerpt);
$excerpt = str_replace('{MES}', '', $excerpt );
$excerpt = str_replace('{XT}', '', $excerpt );
$excerpt = str_replace('{APX}', '', $excerpt );
$excerpt = str_replace('{LF}', '', $excerpt );
$excerpt = str_replace( '{EXS}', '', $excerpt );
$excerpt = str_replace( '{L}', '', $excerpt );
$excerpt = str_replace('{EXE}', '', $excerpt );
$excerpt = str_replace('{EXT}', '', $excerpt );
$excerpt = str_replace('{CR}', '', $excerpt );
	return $excerpt;
}

add_filter('wpseo_twitter_description','twitter_ogdesccc', 999);
function twitter_ogdesccc($excerpt) {
$excerpt = str_replace('{LF}','',$excerpt);
$excerpt = str_replace('{MEX}','',$excerpt);
$excerpt = str_replace('{MES}', '', $excerpt );
$excerpt = str_replace('{XT}', '', $excerpt );
$excerpt = str_replace('{APX}', '', $excerpt );
$excerpt = str_replace('{LF}', '', $excerpt );
$excerpt = str_replace('{EXE}', '', $excerpt );
$excerpt = str_replace( '{EXS}', '', $excerpt );
$excerpt = str_replace( '{L}', '', $excerpt );
$excerpt = str_replace('{EXT}', '', $excerpt );
$excerpt = str_replace('{CR}', '', $excerpt );
	return $excerpt;
}

add_filter('wpseo_twitter_title','twitter_ogtitle', 999);
function twitter_ogtitle($title) {
$title = str_replace('{LF}','',$title);
$title = str_replace('{MEX}','',$title);
$title = str_replace('{MES}', '', $title );
$title = str_replace('{XT}', '', $title );
$title = str_replace('{APX}', '', $title );
$title = str_replace('{LF}', '', $title );
$title = str_replace('{EXE}', '', $title );
$title = str_replace( '{EXS}', '', $title );
$title = str_replace( '{L}', '', $title );
$title = str_replace('{EXT}', '', $title );
$title = str_replace('{CR}', '', $title );
	return $title;
}

add_filter('wpseo_metadesc','meta_desc', 999);
function meta_desc($excerpt) {
$excerpt = str_replace('{LF}','',$excerpt);
$excerpt = str_replace('{MEX}','',$excerpt);
$excerpt = str_replace('{MES}', '', $excerpt );
$excerpt = str_replace('{XT}', '', $excerpt );
$excerpt = str_replace('{APX}', '', $excerpt );
$excerpt = str_replace('{LF}', '', $excerpt );
$excerpt = str_replace('{EXE}', '', $excerpt );
$excerpt = str_replace( '{EXS}', '', $excerpt );
$excerpt = str_replace( '{L}', '', $excerpt );
$excerpt = str_replace('{EXT}', '', $excerpt );
$excerpt = str_replace('{CR}', '', $excerpt );
	return $excerpt;
}

add_filter('wpseo_title','meta_title', 999);
function meta_title($title) {
$title = str_replace('{LF}','',$title);
$title = str_replace('{MEX}','',$title);
$title = str_replace('{MES}', '', $title );
$title = str_replace('{XT}', '', $title );
$title = str_replace('{APX}', '', $title );
$title = str_replace('{LF}', '', $title );
$title = str_replace('{EXE}', '', $title );
$title = str_replace( '{EXS}', '', $title );
$title = str_replace( '{L}', '', $title );
$title = str_replace('{EXT}', '', $title );
$title = str_replace('{CR}', '', $title );
	return $title;
}





function wpshout_make_excerpt_text_interesting( $excerpt ) {
if ( is_admin() ) {
    return $excerpt;
}
$excerpt = str_replace('{LF}','',$excerpt);
$excerpt = str_replace('{MEX}','',$excerpt);
$excerpt = str_replace('{MES}', '', $excerpt );
$excerpt = str_replace('{XT}', '', $excerpt );
$excerpt = str_replace('{APX}', '', $excerpt );
$excerpt = str_replace('{LF}', '', $excerpt );
$excerpt = str_replace('{EXE}', '', $excerpt );
$excerpt = str_replace('{EXT}', '', $excerpt );
$excerpt = str_replace('{CR}', '', $excerpt );
	return $excerpt;
}
add_filter( 'get_the_excerpt', 'wpshout_make_excerpt_text_interesting', 999 );

add_filter('wpseo_title', 'filter_product_wpseo_titlelf');
function filter_product_wpseo_titlelf($title) {
$title = str_replace('{LF}','',$title);
$title = str_replace('{MEX}','',$title);
$title = str_replace('{MES}', '', $title );
$title = str_replace('{XT}', '', $title );
$title = str_replace('{APX}', '', $title );
$title = str_replace('{LF}', '', $title );
$title = str_replace('{EXE}', '', $title );
$title = str_replace('{EXT}', '', $title );
$title = str_replace('{CR}', '', $title );
  //$titlen = str_replace('of', 'από', $title);
	return $title ;
}

add_filter( 'wp_title', 'filter_wp_title' );
function filter_wp_title($title) {
$title = str_replace('{LF}','',$title);
$title = str_replace('{MEX}','',$title);
$title = str_replace('{MES}', '', $title );
$title = str_replace('{XT}', '', $title );
$title = str_replace('{APX}', '', $title );
$title = str_replace('{LF}', '', $title );
$title = str_replace('{EXE}', '', $title );
$title = str_replace('{EXT}', '', $title );
$title = str_replace('{CR}', '', $title );
  //$titlen = str_replace('of', 'από', $title);
	return $title ;
}


/* NEW FUCTION
FOR SAVE SANITIZE CONTENT
=======================*/
function save_sanitize_content( $content ) {
		$content = str_replace('wp.mgmt.tovima.com', 'www.tovima.com', $content );
    $content = str_replace('width=""', '', $content);
    return $content ;
}

add_filter( 'content_save_pre' , 'save_sanitize_content' , 10, 1);

function edit_sanitize_content( $content ) {
		$content = str_replace('wp.mgmt.tovima.com', 'www.tovima.com', $content );
    $content = str_replace('width=""', '', $content);
    return $content ;
}
add_filter( 'content_edit_pre' , 'edit_sanitize_content' , 10, 1);


function add_iframe($initArray) {
$initArray['extended_valid_elements'] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]";
return $initArray;
}

// this function alters the way the WordPress editor filters your code
add_filter('tiny_mce_before_init', 'add_iframe');

/* PRINTED POSTS */
add_action('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if($query->is_main_query() && !is_admin() && is_archive()) {
//     parse_str(substr($_SERVER['REQUEST_URI'],(strpos ($_SERVER['REQUEST_URI'], "?", 0) + 1) ),$request);
//     if(isset($request['printed'])){
      $query->set( 'post_type', array('printed_post', 'post') );
//     } else {
//       $query->set( 'post_type', array('post') );
//     }
  }
}
/* PRINTED POSTS */

// function get_first_paragraph(){
//     global $post;
//     $str = wpautop( get_the_content() );
//     $str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
//     $str = strip_tags($str, '<a><strong><em>');
//     return '<p>' . $str . '</p>';
// }

// function get_second_paragraph(){
//     global $post;
//     $str = wpautop( get_the_content() );
//     $str = substr( $str, 5, strpos( $str, '</p>' ) + 4 );
//     $str = strip_tags($str, '<a><strong><em>');
//     return '<p>' . $str . '</p>';
// }

/* PRINTED POSTS */

/* TAXONOMIES */
function post_taxonomy() {
global $post, $post_id;
$primaryCat = new WPSEO_Primary_Term('category', get_the_ID());
$primaryCat = $primaryCat->get_primary_term();
$primaryCat = get_cat_name($primaryCat);
//$author_name = $author->display_name;
$author_name = get_the_author();
$author_link = get_author_posts_url($post->post_author);

$categories = get_the_category();
foreach( $categories as $category ) {
   $defaultCat = $category->name;
   $defaultCatLink = get_category_link( $category->term_id );
}

if ( $primaryCat !== "" ) {
   $cat = new WPSEO_Primary_Term('category', get_the_ID());
   $cat = $cat->get_primary_term();

   $catName = get_cat_name($cat);
   $catLink = get_category_link($cat);

} else {
   $catName = $defaultCat;
   $catLink = $defaultCatLink;
}
// if(in_category('48') || in_category('49') ) {
// $out ='<a class="td-post-category" href="' .$author_link. '">'.$author_name.' </a>';
// } else {
// $out = $catName ;
$out ='<a class="parent-category" href="' .$catLink. '">'.$catName.'</a>';  
//   }
return $out;

}

function alternate_name($name) {
  $exp_name = explode(' ', $name);
  if(count($exp_name) === 3) {
    return "{$exp_name[1]} {$exp_name[2]} {$exp_name[0]}";
  } elseif(count($exp_name) === 2) {
  return "{$exp_name[1]} {$exp_name[0]}";
  } else {
    return "{$exp_name[0]}";
  }
  
  
}
// function post_author() {
// global $post, $post_id;
// //   $term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all"));
// //   if ($term_list) {
  
//   $authorname = $term_list[0]->name; 
//   $authorname = (explode(" ",$authorname));
//   $name = $authorname[1].'&nbsp;';
//   if ($authorname[2]) {
//   $middlename = $authorname[2].'&nbsp;';
//   }
//   $lastname = $authorname[0];
    
//   $output = $name.$middlename.$lastname;
//   return $output;
//   }
// }

/*
// Extend video embedding to support megatv.com URLs [added 2020.03.10]
function uembed_css() {
    $themePath = get_bloginfo('template_url');
    wp_enqueue_style('uembed', $themePath.'/common/css/uembed.css?v=20200306', '20200306', true);
}
add_action('wp_enqueue_scripts', 'uembed_css');
//add_action('admin_enqueue_scripts', 'uembed_css', 10, 1);

function wp_embed_handler_megatv($matches, $attr, $url, $rawattr) {
    $embed = '<div class="uEmbedContainer uEmbedVideoContainer"><iframe width="620" height="360" src="https://www.megatv.com/embed/?p='.esc_attr($matches[5]).'" frameborder="0" scrolling="no" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen" allowfullscreen></iframe></div>';
    return apply_filters('embed_megatv', $embed, $matches, $attr, $url, $rawattr);
}
wp_embed_register_handler('megatv', '#http(s)://(www\.)megatv\.com/(.*)(p|pubid)=(.*)#i', 'wp_embed_handler_megatv');
*/ 


function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


add_action( 'wp_enqueue_scripts', '_remove_style', PHP_INT_MAX );
function _remove_style() {
    wp_dequeue_style( 'wp-polls' );
    wp_dequeue_script('wp-polls');
}
/*
function isa_remove_jquery_migrate( $scripts ) { 
  if( !is_admin() ) { 
      $scripts->remove( 'jquery' );
  } 
} add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );
*/ 

/* REMOVE TAG FROM IMAGES
function fb_unautop_4_img( $content )
{ 
    $content = preg_replace( 
        '/<p>\\s*?(<a rel=\"attachment.*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', 
        '<figure>$1</figure>', 
        $content 
    ); 
    return $content; 
} 
add_filter( 'the_content', 'fb_unautop_4_img', 99 );
*/


function wpse_first_tag() {
  if ( $posttags = get_the_tags() ) 
    {
        $tag = current( $posttags );
        printf(
            '<span class="manrope is-size-6 f-600 article-tag">%2$s</span>',
            get_tag_link( $tag->term_id ),
            esc_html( $tag->name )
         );
    }
}


add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
     if ( is_search() || is_page(array('latest-news', 'vimagazino', 'entypi-ekdosi')))
          $classes[] = 'archive';
    
    if ( is_page(array('vimagazino')))
       $classes[] = 'page-vimagazino';
  
     return $classes; 
}


// Remove Global Styles and SVG Filters from WP 5.9.1 - 2022-02-27
function remove_global_styles_and_svg_filters() {
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action('init', 'remove_global_styles_and_svg_filters');

/* ACF TAXONOMIES */
function taxonomieslist() {
	$args_cats = array(
	   'type' => 'post',
	   'hide_empty' => true,
	   'hierarchical'  => 1,
	   'taxonomy' => 'category',
   );
 
   $categories = get_categories( $args_cats );
 
   $temparr = array();
   $taxonomieslist = [];
   foreach ($categories as $ca) {
	 $temparr[$ca->parent][$ca->term_id] = $ca;
   }
 
   foreach($temparr[0] as $pa) {
	 $taxonomieslist[] = 'category:'.$pa->slug;
	 if(isset($temparr[$pa->term_id])){
	   foreach($temparr[$pa->term_id] as $cat) {
	   $taxonomieslist[] = 'category:'.$cat->slug;  
	   } 
	 }
   }
   
   return $taxonomieslist;
 }





/* ONESIGNAL*/
add_filter('onesignal_send_notification', 'onesignal_send_notification_filter', 10, 4);
function onesignal_send_notification_filter($fields, $new_status, $old_status, $post) {
  $onesignal_set = OneSignal::get_onesignal_settings();
  
  $the_title = get_the_title($post);
  $the_title = str_replace("&#8211;", "-", $the_title);
  $the_title = str_replace("&#038;", "&", $the_title);
  $the_title = str_replace("&#8217;", "'", $the_title);
  $the_title = str_replace("&#8230;", "...", $the_title);

  $the_permalink = get_the_permalink($post);
  $the_permalink = str_replace('wp.mgmt', 'www', $the_permalink);

    // ANDROID IOS
  $fieldsa = array(
    'app_id' => $onesignal_set['app_id'],
    'included_segments' => array( 'All' ),
    'data' => array( "post_id" => $post->ID, "page_url" => $the_permalink ),
    'contents' => array("en" => $the_title),
    'big_picture' =>  str_replace('wp.mgmt.',"www.",wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium', false ) ),    
    'isAndroid' => true,
    'isIos' => true, // TURN TRUE WHEN IPHONE APP UPLOADED
    'isAnyWeb' => false,
    'isWP' => false,
    'isChrome' => false,
    'isAdm' => false
  );
  $fieldsa = json_encode($fieldsa);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json; charset=utf-8',
    'Authorization: Basic '.$onesignal_set['app_rest_api_key']
  ));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_POST, TRUE);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldsa);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  $response = curl_exec($ch);
  curl_close($ch);
    
    // WEB
  $fieldsb = array(
    'app_id' => $onesignal_set['app_id'],
    'included_segments' => array( 'All' ),
    'url' => $the_permalink,
    'contents' => array("en" => $the_title),
    'big_picture' =>  str_replace('wp.mgmt.',"www.",wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium', false ) ),    
    'isAndroid' => false,
    'isIos' => false,
    'isAnyWeb' => true,
    'isWP' => false,
    'isChrome' => true,
    'isAdm' => false
  );
  $fieldsb = json_encode($fieldsb);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json; charset=utf-8',
    'Authorization: Basic '.$onesignal_set['app_rest_api_key']
  ));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_POST, TRUE);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldsb);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  $response = curl_exec($ch);
  curl_close($ch);

//  $fields['isAndroid'] = false;
//  $fields['isIos'] = false;
//  $fields['isAnyWeb'] = false;
//  $fields['isWP'] = false;
//  $fields['isAdm'] = false;
//  $fields['isChrome'] = false;
//  $fields['url'] = str_replace('wp.mgmt.',"www.",get_the_permalink($post) );
  return;
}


function custom_page_inbox(){
  add_menu_page(
      'Inbox',
      'Inbox',
      'edit_pages',
      'inboxtool',
      'inboxpage',
      'dashicons-image-filter',
      10
  );
}
add_action( 'admin_menu', 'custom_page_inbox' );

function inboxpage(){
  include(get_template_directory() .'/page-inbox.php');
}


add_filter( 'post_thumbnail_html', 'wpdd_modify_post_thumbnail_html', 10, 5 );
/**
 * Add `loading="lazy"` attribute to images output by the_post_thumbnail().
 *
 * @param  string $html	The post thumbnail HTML.
 * @param  int $post_id	The post ID.
 * @param  string $post_thumbnail_id	The post thumbnail ID.
 * @param  string|array $size	The post thumbnail size. Image size or array of width and height values (in that order). Default 'post-thumbnail'.
 * @param  string $attr	Query string of attributes.
 * 
 * @return string	The modified post thumbnail HTML.
 */
function wpdd_modify_post_thumbnail_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {

	return str_replace( '<img', '<img loading="lazy"', $html );

}


/**
 * Preload attachment image, defaults to post thumbnail
 */
function preload_post_thumbnail() {
  global $post;
  /** Prevent preloading for specific content types or post types */
  if ( ! is_singular() ) {
      return;
  }
  /** Adjust image size based on post type or other factor. */
  $image_size = 'full';

  if ( is_singular() ) {
      $image_size = 'full';

  }
  $image_size = apply_filters( 'preload_post_thumbnail_image_size', $image_size, $post );
  /** Get post thumbnail if an attachment ID isn't specified. */
  $thumbnail_id = apply_filters( 'preload_post_thumbnail_id', get_post_thumbnail_id( $post->ID ), $post );

  /** Get the image */
  $image = wp_get_attachment_image_src( $thumbnail_id, $image_size );
  $src = '';
  $additional_attr_array = array();
  $additional_attr = '';

  if ( $image ) {
      list( $src, $width, $height ) = $image;

      /**
       * The following code which generates the srcset is plucked straight
       * out of wp_get_attachment_image() for consistency as it's important
       * that the output matches otherwise the preloading could become ineffective.
       */
      $image_meta = wp_get_attachment_metadata( $thumbnail_id );

      if ( is_array( $image_meta ) ) {
          $size_array = array( absint( $width ), absint( $height ) );
          $srcset     = wp_calculate_image_srcset( $size_array, $src, $image_meta, $thumbnail_id );
          $sizes      = wp_calculate_image_sizes( $size_array, $src, $image_meta, $thumbnail_id );

          if ( $srcset && ( $sizes || ! empty( $attr['sizes'] ) ) ) {
              $additional_attr_array['imagesrcset'] = $srcset;

              if ( empty( $attr['sizes'] ) ) {
                  $additional_attr_array['imagesizes'] = $sizes;
              }
          }
      }

      foreach ( $additional_attr_array as $name => $value ) {
          $additional_attr .= "$name=" . '"' . $value . '" ';
      }

  } else {
      /** Early exit if no image is found. */
      return;
  }

  /** Output the link HTML tag */
  printf( '<link rel="preload" as="image" href="%s" %s/>', esc_url( $src ), $additional_attr );
}
add_action( 'wp_head', 'preload_post_thumbnail' );


/* NEW POST STATUS
===================== */
function tks_custom_status_creation(){
	register_post_status( 'topublish', array(
		'label'                     => 'Review Post', // I used only minimum of parameters
		'label_count'               => _n_noop( 'Review <span class="count">(%s)</span>', 'Review <span class="count">(%s)</span>'),
		'public'                    => true,
		'show_in_admin_all_list'    => true,
		'protected'                 => true
	));
}
add_action( 'init', 'tks_custom_status_creation' );

function tks_display_status_label( $statuses ) {
	global $post; // we need it to check current post status
	if( get_query_var( 'post_status' ) != 'topublish' ){ // not for pages with all posts of this status
		if( $post->post_status == 'topublish' ){
			return array('Review'); // returning our status label
		}
	}
	return $statuses; // returning the array with default statuses
}
add_filter( 'display_post_states', 'tks_display_status_label' );

add_action('admin_footer-post.php', 'tks_append_post_status_list');
function tks_append_post_status_list(){
 global $post;
 $complete = '';
 $label = '';
 if($post->post_type == 'post'){
      if($post->post_status == 'topublish'){
           $complete = ' selected=\"selected\"';
           $label = '<span id=\"post-status-display\"> Review</span>';
      }
      echo '
      <script>
      jQuery(document).ready(function($){
           $("select#post_status").append("<option value=\"topublish\" '.$complete.'>Review</option>");
           $(".misc-pub-section label").append("'.$label.'");
      });
      </script>
      ';
  }
}

add_action('admin_footer-edit.php','tks_status_into_inline_edit');
function tks_status_into_inline_edit() {
  global $post;
  if($post->post_type == 'post'){
  	echo "<script>
	  jQuery(document).ready( function() {
	  	jQuery( 'select[name=\"_status\"]' ).append( '<option value=\"topublish\">Review</option>' );
	  });
	  </script>";
  }
}


/* WORDPRESS NOW BUTTON */
add_action('admin_head', 'AddNowButton');
function AddNowButton() {
			?>
			<script type="text/javascript">
			jQuery(document).ready(function() {
				if (jQuery('#timestampdiv').length > 0) {
					jQuery('#timestampdiv').find('div')
						.append('&nbsp;')
						.append(jQuery('<a>')
							.attr('class', 'now button')
							.append('<?php _e( 'Now', 'datetime-now-button' ); ?>')
						);
				}

				if (jQuery('.inline-edit-date').length > 0) {
					jQuery('.inline-edit-date').find('div')
						.append('&nbsp;')
						.append(jQuery('<a>')
							.attr('class', 'now button')
							.append('<?php _e( 'Now', 'datetime-now-button' ); ?>')
						);
				}

				jQuery('.now.button').bind('click', function() {
					<?php
					$time_adj = current_time('timestamp');
					$cur_mm = gmdate( 'm', $time_adj );
					$cur_jj = gmdate( 'd', $time_adj );
					$cur_aa = gmdate( 'Y', $time_adj );
					$cur_hh = gmdate( 'H', $time_adj );
					$cur_mn = gmdate( 'i', $time_adj );
					?>

					if (jQuery('select[name="mm"]').length > 0) jQuery('select[name="mm"]').val('<?php echo $cur_mm; ?>');
					if (jQuery('input[name="jj"]').length > 0) jQuery('input[name="jj"]').val('<?php echo $cur_jj; ?>');
					if (jQuery('input[name="aa"]').length > 0) jQuery('input[name="aa"]').val('<?php echo $cur_aa; ?>');
					if (jQuery('input[name="hh"]').length > 0) jQuery('input[name="hh"]').val('<?php echo $cur_hh; ?>');
					if (jQuery('input[name="mn"]').length > 0) jQuery('input[name="mn"]').val('<?php echo $cur_mn; ?>');
				});
			});
			</script>
			<?php
}


/* OVERWRITE SEARCH */
function fb_change_search_url_rewrite() {
	if ( is_search() && ! empty( $_GET['s'] ) ) {
	wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
	exit();
	}
}
add_action( 'template_redirect', 'fb_change_search_url_rewrite' );


function __search_by_title_only( $search, $wp_query ) {
  global $wpdb;
  if(empty($search)) {
      return $search; // skip processing - no search term in query
  }
  if($wp_query->query_vars['post_type'] == "attachment"){
    return $search; // skip processing - no search term in query
  }
  $q = $wp_query->query_vars;
  $n = !empty($q['exact']) ? '' : '%';
  $search =
  $searchand = '';
  foreach ((array)$q['search_terms'] as $term) {
      $term = esc_sql($wpdb->esc_like($term));
      $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
      $searchand = ' AND ';
  }
  if (!empty($search)) {
      $search = " AND ({$search}) ";
      if (!is_user_logged_in())
          $search .= " AND ($wpdb->posts.post_password = '') ";
  }
  return $search;
}
add_filter('posts_search', '__search_by_title_only', 500, 2);


/* NEW EDITOR BLOCK */
function wpb_mce_buttons_2($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
  }
  add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
  
  
  function my_mce_before_init_insert_formats( $init_array ) {
  
  // Define the style_formats array
  
  $style_formats = array(
    array(
    'title' => 'Blue Box',
    'block' => 'div',
    'classes' => 'blue-box',
    'wrapper' => true,
    ),
  );
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats'] = json_encode( $style_formats );
  
  return $init_array;
  
  }
  
  // Attach callback to 'tiny_mce_before_init'
  add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );
  
  
  function custom_editor_styles() {
      add_editor_style( 'editor-styles.css' );
  }
  add_action( 'admin_init', 'custom_editor_styles' );


// CANONICAL URL START 
function filter_wpseo_canonical( $canonical ) {
  if ( !is_home() ) {
    global $post;
    $meta = get_post_meta($post->ID, '_yoast_wpseo_canonical', true);
    if ( !empty($meta) ) {
      return $meta;
    } else {
      // Ensure the URL uses https instead of http
      $canonical = str_replace('http:', 'https:', $canonical);
      return str_replace(parse_url($canonical)['host'], 'www.tovima.com', $canonical);
    }
  }
}
add_filter( 'wpseo_canonical', 'filter_wpseo_canonical', 10, 1 );

function bybe_remove_yoast_json($data){
  $data = array();
  return $data;
  }
add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);

add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);

add_filter( 'wpseo_opengraph_image', 'change_opengraph_image_url' );
function change_opengraph_image_url( $url ) {
  $url = str_replace('http://wp.mgmt.', 'https://www.', $url);
  return $url;
}

add_filter( 'wpseo_opengraph_url', 'my_opengraph_url' );
function my_opengraph_url( $url ) {
  $url = str_replace('http://wp.mgmt.', 'https://www.', $url);
  return $url;
}


/* add 300x250_m1 after 3rd Paragraph */
function insert_banner_after_third_paragraph($content) {
  // Check if it is not an AMP endpoint
  if (!is_amp_endpoint()) {
      $paragraphs = explode('</p>', $content);

      if (count($paragraphs) < 3) {
          return $content;
      }

      $first_part = implode('</p>', array_slice($paragraphs, 0, 3)) . '</p>';
      $remaining_content = implode('</p>', array_slice($paragraphs, 3));

      if (strlen(strip_tags($remaining_content)) >= 300) {
          $banner = "<div id='300x250_m1' style='display:none;margin-bottom:30px'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('300x250_m1'); });</script></div>";
          return $first_part . $banner . $remaining_content;
      }
  }

  return $content;
}

add_filter('the_content', 'insert_banner_after_third_paragraph');


/* add 300x250_m2 after 6rd Paragraph */
function insert_banner_after_six_paragraph($content) {
  // Check if it is not an AMP endpoint
  if (!is_amp_endpoint()) {
      $paragraphs = explode('</p>', $content);

      if (count($paragraphs) < 6) {
          return $content;
      }

      $first_part = implode('</p>', array_slice($paragraphs, 0, 6)) . '</p>';
      $remaining_content = implode('</p>', array_slice($paragraphs, 6));

      if (strlen(strip_tags($remaining_content)) >= 450) {
          $banner = "<div id='300x250_m2' style='display:none;margin-bottom:30px'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('300x250_m2'); });</script></div>";
          return $first_part . $banner . $remaining_content;
      }
  }

  return $content;
}
add_filter('the_content', 'insert_banner_after_six_paragraph');

/* ADD BANNER AFTER 4TH WITH CONDITION */
add_filter('the_content', 'insert_banner_in_content');
function insert_banner_in_content($content) {
    // Ελέγξτε αν είναι AMP σελίδα
    if (function_exists('is_amp_endpoint') && is_amp_endpoint()) {
        return $content; // Επιστρέψτε το αρχικό περιεχόμενο για AMP σελίδες
    }

    $paragraphs = explode('</p>', $content);

    // Ελέγξτε ότι υπάρχουν τουλάχιστον 5 παράγραφοι
    if (count($paragraphs) < 5) {
        return $content; // Δεν υπάρχουν αρκετές παράγραφοι
    }

    // Ορισμός μετρητών για το μήκος χαρακτήρων και τη θέση του banner
    $total_chars = 0;
    $insert_position = -1;

    // Βρόχος που ξεκινά από την 4η παράγραφο
    for ($i = 3; $i < count($paragraphs); $i++) {
        // Αφαιρέστε τα HTML tags και μετρήστε χαρακτήρες για την τρέχουσα παράγραφο
        $paragraph_chars = mb_strlen(strip_tags($paragraphs[$i]));
        $total_chars += $paragraph_chars;

        // Αν ο συνολικός αριθμός χαρακτήρων ξεπερνά τους 500 και δεν έχει εισαχθεί το banner
        if ($total_chars >= 500 && $insert_position == -1) {
            // Έλεγχος αν υπάρχουν τουλάχιστον 300 χαρακτήρες μετά από αυτήν την παράγραφο
            $remaining_content = '';
            for ($j = $i + 1; $j < count($paragraphs); $j++) {
                $remaining_content .= strip_tags($paragraphs[$j]);
            }
            $remaining_chars = mb_strlen($remaining_content);

            if ($remaining_chars >= 300) {
                $insert_position = $i + 1;
                break;
            }
        }
    }

    // Αν βρέθηκε κατάλληλο σημείο εισαγωγής, προσθέστε το banner
    if ($insert_position != -1) {
        $banner_html = "<div id='300x250_middle_2' style='display:none;margin-bottom:30px'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('300x250_middle_2'); });</script></div>";
        array_splice($paragraphs, $insert_position, 0, $banner_html);

        // Υπολογίστε τη νέα θέση για το δεύτερο banner (800 χαρακτήρες μετά)
        $new_total_chars = 0;
        $second_insert_position = -1;

        for ($k = $insert_position; $k < count($paragraphs); $k++) {
            $paragraph_chars = mb_strlen(strip_tags($paragraphs[$k]));
            $new_total_chars += $paragraph_chars;

            if ($new_total_chars >= 800) {
                // Ελέγξτε αν υπάρχουν τουλάχιστον 300 χαρακτήρες μετά το δεύτερο banner
                $remaining_content = '';
                for ($m = $k + 1; $m < count($paragraphs); $m++) {
                    $remaining_content .= strip_tags($paragraphs[$m]);
                }
                $remaining_chars = mb_strlen($remaining_content);

                if ($remaining_chars >= 300) {
                    $second_insert_position = $k + 1;
                    break;
                }
            }
        }

        // Εισάγετε το δεύτερο banner αν βρέθηκε κατάλληλο σημείο
        if ($second_insert_position != -1) {
            $second_banner_html = "<div id='300x250_middle_3' style='display:none;margin-bottom:30px'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('300x250_middle_3'); });</script></div>";
            array_splice($paragraphs, $second_insert_position, 0, $second_banner_html);
        }
    }

    // Αναδημιουργήστε το περιεχόμενο από τον πίνακα παραγράφων
    return implode('</p>', $paragraphs) . '</p>';
}