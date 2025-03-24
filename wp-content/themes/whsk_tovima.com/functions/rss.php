<?php
remove_all_actions( 'do_feed_rss2' );  
function create_my_custom_feed() {  
    load_template( TEMPLATEPATH . '/functions/feed-rss2.php');  
}  
add_action('do_feed_rss2', 'create_my_custom_feed', 10, 1);

function exclude_category($query) {
    if ( $query->is_feed ) {
        $query->set( 'date_query', ['after' => date( 'Y-m-d H:i', strtotime( '-24 hours' ) ),]);
        $query->set('post_status', 'publish');
    }
return $query;
}
add_filter('pre_get_posts', 'exclude_category');



/*REMOVE WORDPRESS GENERATOR */
function remove_wp_version_rss() { return''; }
add_filter('the_generator','remove_wp_version_rss');

/*ADD RSS LOGO */
function addRssImage() {
  echo "<image>
    <title>tovima.com</title>
    <url>" . get_bloginfo('template_directory') . "/common/imgs/vimalogo.png</url>
    <link>" . get_bloginfo('url') ."</link>
    <description>Breaking News, Analysis and Opinion from To Vima’s International Edition</description>
    </image>";
}
add_action('rss2_head', 'addRssImage');


/* RSS IMAGE */
// function add_featured_image_in_rss() {
//     if ( function_exists( 'get_the_image' ) && ( $featured_image = get_the_image('format=array&echo=0') ) ) {
//         $featured_image[0] = $featured_image['url'];
//     } elseif ( function_exists( 'has_post_thumbnail' ) and has_post_thumbnail() ) {
//         $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' );
//     } elseif ( function_exists( 'get_post_thumbnail_src' ) ) {
//         $featured_image = get_post_thumbnail_src();
//         if ( preg_match( '|^<img src="([^"]+)"|', $featured_image[0], $m ) )
//             $featured_image[0] = $m[1];
//     } else {
//         $featured_image = false;
//     }
//     if ( ! empty( $featured_image ) ) {
//         echo "\t" . '<enclosure url="' . $featured_image[0] . '" />' . "\n";
//     }
    
// }
// add_action( 'rss2_item', 'add_featured_image_in_rss' );


function featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
}
return $content;
}
 
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

?>