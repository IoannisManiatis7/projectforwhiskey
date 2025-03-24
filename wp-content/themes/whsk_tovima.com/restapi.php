<?php 
function rest_api_homepage(WP_REST_Request $request) {
	$page = !empty($request->get_param('page')) ? $request->get_param('page') : 1 ;
	$per_page = !empty($request->get_param('per_page')) ? $request->get_param('per_page') : 10 ;

$sliderposts = array(
get_field('top__ingr_1', 'newsitindex_15'),
get_field('top__ingr_2', 'newsitindex_15'),
get_field('top__ingr_3', 'newsitindex_15'),
get_field('top__ingr_4', 'newsitindex_15'),
get_field('top__ingr_5', 'newsitindex_15'),
);

	$args = array( 
		'posts_per_page' =>5,
		'paged' => 1,
		'post_type' => 'post',
// 		'date_query' => array(
// 			array(
// 				'after' => '24 hours ago'
// 				)
// 		  )
	);
	$recent_postlist = new WP_Query( $args );
	$recent_posts = $recent_postlist->posts;
	$cats= array(
		139,//in tv
		125,//english edition
		107,//apopsi
		2,//ellada
		4,//oikonomia
		77,//politiki
		28,//psixagogia
		7,//politismos
		50,//igieia
		6,//epistimi
		104,//gineka
		12,//spor
		3,//kosmos
		35,//vivlio
		37,//life
		108,//sinedefksis
		5,//ta nea tis agoras
		38,//black strawberry
		11,//media
		82,//paraskinio
		109,//prosopa
		39,//diakopes
		110,//gefsignostis
		19,//auto
		34,//pedi
		9, //viral
		137 //gallery
	);
	$cat_counter= array(
		3,//in tv
		3,//english edition
		5,//apopsi
		3,//ellada
		3,//oikonomia
		3,//politiki
		3,//psixagogia
		3,//politismos
		2,//igiea
		3,//epistimi
		3,//gineka
		3,//spor
		4,//kosmos	
		2,//vivlio
		3,//life
		3,//sindefksis
		6,//ta nea tis agoras
		3,//black strawberry
		3,//media
		3,//paraskinio
		3,//prosopa
		3,//diakopes
		3,//gefsignostis
		3,//auto
		4,//pedi
		3,//viral
		6//gallery
	);

  $posts_thumbs['posts']=array();
  foreach ($cats as $key=>$cat){
  
	$args = array( 
		'posts_per_page' =>$cat_counter[$key],
		'cat' => $cat,
		'post_type' => 'post',
// 		'date_query' => array(
// 			array(
// 				'after' => '24 hours ago'
// 				)
// 		  )
	   );
		
	$da_postlist = new WP_Query( $args );
	$posts = $da_postlist->posts;

    $posts_thumbs['posts']=array_merge($posts_thumbs['posts'],$posts);
	}
	
	$posts_thumbs['posts']=array_merge($sliderposts,$recent_posts,$posts_thumbs['posts']);

	$postController = new \WP_REST_Posts_Controller('post');
	$response =  array();

	$posts_thumbs['posts'] = array_slice($posts_thumbs['posts'], $per_page * ($page -1), $per_page);

	foreach($posts_thumbs['posts'] as $post){
		$prepared = $postController->prepare_item_for_response( $post, $request );
		array_push($response, $prepared->data);
	}

	return new WP_REST_Response( $response );
}

if( !class_exists('\\Mobileapp\\Base') ) {
	require ( __DIR__ . "/mobileapp/class.php" );
}

function rest_api_categories_mirror(WP_REST_Request $request) {
	$cat = !empty($request->get_param('categories')) ? $request->get_param('categories') : 0 ;
	$page = !empty($request->get_param('page')) ? $request->get_param('page') : 1 ;
	$per_page = !empty($request->get_param('per_page')) ? $request->get_param('per_page') : 10 ;
	
	$args = array( 
		'posts_per_page' => $per_page, 
		'cat' => $cat,
		'paged' => $page,
		'post_type' => array('post','printed_post'),
		'date_query' => array(
			array(
			'after' => '1 month ago'
            )
		  )
	   ); 
	$postslist = new WP_Query( $args );
	$response =  array();

	$posts = array_merge($sticky, $postslist->posts);
	$postController = new \WP_REST_Posts_Controller('post', 'printed_post');
	
	foreach($posts as $post){
		$prepared = $postController->prepare_item_for_response( $post, $request );
		array_push($response, $prepared->data);
	}

	$mobileapp = new Mobileapp\Base();
	return $mobileapp->format_response( new WP_REST_Response( $response ) );
}




function cst_rest_prepare_post( $data, $post, $request ) {
  
	$_data = $data->data;
  
	$super_title = get_field( 'super_title', $post->ID, false);
	$_data['super_title'] = $super_title;  
  
  $_data['title']['rendered'] = html_entity_decode(get_the_title($post->ID)); 
 
	$term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all"));
	if($term_list) { $_data['cwp_author'] = $term_list[0]->name; } else {  $_data['cwp_author'] = 'TοΒΗΜΑ Team'; } 

	$defaults = array('fields' => 'all');
	$args = wp_parse_args( [], $defaults );
	 
    /* THE CONTENT */
    $my_post = get_post( $post->ID);
    $my_post_content = $my_post->post_content;
    $my_post_content = apply_filters('the_content', $my_post_content);
    $my_formatted_content = str_replace('data-src', 'src', $my_post_content);
    $my_formatted_content = preg_replace('#<div(.*?)class="wp-video"(.*?)>(.*?)</div>#i', '\3', $my_formatted_content);
    $my_formatted_content = preg_replace('#<video(.*?)><source#i', '<vsource', $my_formatted_content);
    $my_formatted_content = preg_replace('#</video>#i', '', $my_formatted_content);
    $_data['thecontent']['rendered'] = $my_formatted_content;

	$cats = wp_get_object_terms($post->ID, 'category', $args);
	$_data['cwp_category'] = $cats;

	$tags = wp_get_object_terms($post->ID, 'post_tag', $args);
  if($tags) {
	$_data['cwp_tags'] = $tags;
    
  } else {
    $_data['cwp_tags'] = array(
        'name'  => "ΤΟ ΒΗΜΑ",
        'slug'  => "tovima-gr",
        'term_group' => '0',
        'term_taxonomy_id' => '41091',
        'taxonomy' => 'post_tag',
        'description' => "",
        'parent' => '0',
        'count' => '1',
        'filter' => "raw"
    );
  }

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
	$_data['cwp_featured_thumbnail'] = $thumbnail[0];

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
	$_data['cwp_featured_full'] = $thumbnail[0];

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium', false );
	$_data['cwp_featured_medium'] = $thumbnail[0];

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large', false );
	$_data['cwp_featured_medium_large'] = $thumbnail[0];

	$locked_article = get_field( 'locked_article', $post->ID, false);
	$_data['locked_article'] = $locked_article;  
  
	$youtube_player = get_field( 'youtube_player', $post->ID, false);
	$_data['youtube_player'] = $youtube_player;

	$facebook_player = get_field( 'facebook_player', $post->ID, false);
	$_data['facebook_player'] = $facebook_player;

	$jw_player = get_field( 'extra_video', $post->ID, false);
	$_data['extra_video_mobile_app'] = $jw_player;
  $_data['extra_video'] = $jw_player;

	$data->data = $_data;
  
	return $data;
}
add_filter( 'rest_prepare_post', 'cst_rest_prepare_post', 10, 3 );


function cst_rest_prepare_printed_post( $data, $post, $request ) {
  
	$_data = $data->data;
  
	$super_title = get_field( 'super_title', $post->ID, false);
	$_data['super_title'] = $super_title;  
  
  $_data['title']['rendered'] = html_entity_decode(get_the_title($post->ID)); 
 
	$term_list = wp_get_post_terms($post->ID, 'nea_authors', array("fields" => "all"));
	if($term_list) { $_data['cwp_author'] = $term_list[0]->name; } else {  $_data['cwp_author'] = 'TοΒΗΜΑ Team'; } 

	$defaults = array('fields' => 'all');
	$args = wp_parse_args( [], $defaults );
	 
	$cats = wp_get_object_terms($post->ID, 'category', $args);
	$_data['cwp_category'] = $cats;

	$tags = wp_get_object_terms($post->ID, 'post_tag', $args);
  if($tags) {
	$_data['cwp_tags'] = $tags;
    
  } else {
    $_data['cwp_tags'] = array(
        'name'  => "ΤΟ ΒΗΜΑ",
        'slug'  => "tovima-gr",
        'term_group' => '0',
        'term_taxonomy_id' => '41091',
        'taxonomy' => 'post_tag',
        'description' => "",
        'parent' => '0',
        'count' => '1',
        'filter' => "raw"
    );
  }

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));
	$_data['cwp_featured_thumbnail'] = $thumbnail[0];

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
	$_data['cwp_featured_full'] = $thumbnail[0];

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium', false );
	$_data['cwp_featured_medium'] = $thumbnail[0];

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large', false );
	$_data['cwp_featured_medium_large'] = $thumbnail[0];

	$locked_article = get_field( 'locked_article', $post->ID, false);
	$_data['locked_article'] = $locked_article;  
  
	$youtube_player = get_field( 'youtube_player', $post->ID, false);
	$_data['youtube_player'] = $youtube_player;

	$facebook_player = get_field( 'facebook_player', $post->ID, false);
	$_data['facebook_player'] = $facebook_player;

	$jw_player = get_field( 'extra_video', $post->ID, false);
	$_data['extra_video_mobile_app'] = $jw_player;
  $_data['extra_video'] = $jw_player;

	$data->data = $_data;
  
	return $data;
}
add_filter( 'rest_prepare_printed_post', 'cst_rest_prepare_printed_post', 10, 3 );



/*
function mobileapp_post_format( $reponse, $server, $request ) {
	$mobileapp = new Mobileapp\Base();
	return $mobileapp->format_response( $reponse );
}

add_filter( 'rest_post_dispatch', 'mobileapp_post_format', 10, 3  );

//intialize custom endpoints
add_action( 'rest_api_init', function () {
	$version = '2';
	$namespace = 'custom_td/v' . $version;
	$base = 'popular';
	
  register_rest_route( $namespace, '/' . 'home',
    array(
      'methods'         => WP_REST_Server::READABLE,
      'callback'        => 'rest_api_homepage',
    )
  );

  register_rest_route( $namespace, '/' . 'categories_mirror',
	array(
		'methods'         => WP_REST_Server::READABLE,
		'callback'        => 'rest_api_categories_mirror',
	)
	);
  
});
*/

?>