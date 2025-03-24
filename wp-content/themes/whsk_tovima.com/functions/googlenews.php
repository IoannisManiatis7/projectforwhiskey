<?php
add_action( 'publish_post', 'itsg_create_sitemap' );
// add_action( 'publish_page', 'itsg_create_sitemap' );
function itsg_create_sitemap() {
    $postsForSitemap = get_posts(array(
        'numberposts' => -1,
        'orderby' => 'modified',
        'post_type'  => 'post',
        'date_query' => array( array( 'after'  => '48 hours ago')), 
        'order'    => 'DESC'
    ));

    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<urlset xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach( $postsForSitemap as $post ) {
		setup_postdata( $post );

		$postDate = strtotime($post->post_date);
    $tags = get_the_tags($post->ID);
    if ($tags) {
      $tag_list = array();
      foreach ($tags as $tag) { $tag_list[] = $tag->name; }
    }

    $sitemap .= '<url>'.
        '<loc>' . str_replace("wp.mgmt.tovima.com", "www.tovima.com", get_permalink( $post->ID )) . '</loc>' .
        '<image:image>'.
            '<image:loc>' . wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0] . '</image:loc>'.
        '</image:image>'.
        '<news:news>' .
        '<news:publication>' .
            '<news:name>tovima.com</news:name>'.
            '<news:language>el</news:language>'.
        '</news:publication>'.
        '<news:publication_date>' .str_replace(" ", "T", $post->post_date_gmt).'Z'.'</news:publication_date>'.
        '<news:title>' . get_the_title( $post->ID ) . '</news:title>'.
        '<news:keywords>'.implode(', ', $tag_list).'</news:keywords>'.
        '</news:news>'.
        '</url>';
    }

    $sitemap .= '</urlset>';

    $fp = fopen( ABSPATH . '/wp-content/uploads/json/sitemap-news.xml', 'w' );

    fwrite( $fp, $sitemap );
    fclose( $fp );
}
?>