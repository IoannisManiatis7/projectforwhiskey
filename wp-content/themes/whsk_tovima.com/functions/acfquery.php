<?php
add_filter('acf/fields/post_object/query', 'draft_filter', 10, 3);
function draft_filter($options, $field, $the_post) {
	$options['post_status'] = array('publish');
  $options['orderby'] = 'date';
  $options['order'] = 'DESC';  
  // $options['date_query'] = array( 'after'  => '8 months ago'); 
	return $options;
}

add_filter('acf/fields/relationship/query', 'draft_filtercat', 10, 4);
function draft_filtercat($options, $field, $the_post) {
  $options['post_status'] = array('publish');
  $options['orderby'] = 'date';
  $options['order'] = 'DESC';    
  // $options['date_query'] = array( 'after'  => '6 months ago'); 
	return $options;
}

function my_relationship_result( $title, $post, $field, $post_id ) {
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(50, 50) );
		$title  =  date_format(date_create_from_format('Y-m-d H:i:s', $post->post_date), 'd-m-Y');
		$title .= ' | ';
		$title .=  '<img src="'.$thumb['0'].'" width="30" />';
		$title .= $post->post_title;
        $title .= sprintf('<a href="%s" target="_blank">%s</a>', get_edit_post_link($post->ID), __('Edit'));
    return $title;
}
add_filter('acf/fields/relationship/result', 'my_relationship_result', 10, 4);
?>