<?php

namespace Mobileapp;

use WP_REST_Posts_Controller;
use WP_REST_Request;

class Base {
    protected $formater;
    protected $request;

    public function __construct() {
        $this->formater = new WP_REST_Posts_Controller( 'post' );
        $this->request = new WP_REST_Request();
    }

    public function get_video_type( $raw ) {
        $video = strtolower( $raw );
        if ( false !== strpos( $video, "youtube" ) ) return "youtube";
        if ( false !== strpos( $video, "youtu.be" ) ) return "youtube";
        if ( false !== strpos( $video, "facebook" ) ) return "facebook";
        if ( false !== strpos( $video, "jwplatform" ) ) return "jwplatform";
        if ( false !== strpos( $video, "iframe" ) ) return "iframe";
        if ( false !== strpos( $video, "mp4" ) ) return "mp4";
        return null;
    }

    public function format_json( $data ) {
        if( isset( $data['content']['rendered'] ) ) {
            $content = $data['content']['rendered'];
            $content = str_replace( '{{{ graph }}}', '', $content );
            $content = str_replace( '{{{ gallery }}}', '', $content );
            $content = str_replace( 'src="/files/', 'src="//www.in.gr/files/', $content );
            $data['content']['rendered'] = htmlspecialchars_decode( $content );
        }

        if( isset( $data['excerpt']['rendered'] ) ) {
            $data['excerpt']['rendered'] = htmlspecialchars_decode( $data['excerpt']['rendered'] );
        }

        if( isset( $data['title']['rendered'] ) ) {
            $data['title']['rendered'] = htmlspecialchars_decode( $data['title']['rendered'] );
        }
        
        //var_dump($this->get_video_type( $data['extra_video'] ) );
        
        if( isset( $data['extra_video'] ) ) {
            switch( $this->get_video_type( $data['extra_video'] ) ) {
                case "youtube": $data['youtube_player'] = $data['extra_video']; break;
                case "jwplatform": $data['extra_video_mobile_app'] = $data['extra_video']; break;
                case "facebook": $data['facebook_player'] = $data['extra_video']; break;
                case "mp4": $data['mp4_player'] = $data['extra_video']; break;
                case "iframe": $data['extra_video_mobile_app'] = $data['extra_video']; break;
            }
        }
       // die('FINE DAY TO DIE');
        return $data;
    }

    public function format_post( $post ) {
          
         return $this->format_json( $this->formater->prepare_item_for_response( $post, $this->request )->data );
    }

    public function is_valid( $post ) {
        if( !is_array( $post ) ) return false;
        if( !isset( $post['status'] ) ) return false;
        if( "publish" !==  $post['status'] ) return false;
        
        return true;
    }
    
    public function format_posts( $posts ) {
        $format = array( $this, 'format_post' );
        $is_valid = array( $this, 'is_valid' );
        
        return array_filter( array_map( $format , $posts ), $is_valid );
    }

    public function format_response( $response ) {
        $format = array( $this, 'format_json' );
        $is_valid = array( $this, 'is_valid' );
        $response->data = array_filter( array_map( $format , $response->data ), $is_valid );
        
        return $response;
    } 

    public function limit( $posts, $limit ) {
        return $limit ? array_slice( $posts, 0, $limit ) : $posts;
    }

    public function get_field( $field, $zone, $limit = null ) {
        return $this->format_posts( $this->limit( get_field( $field, $zone ), $limit ) );
    }

    public function apopsi() {
        $posts = $this->get_field( 'category_query_fourposts', 'apopsi16' );

        foreach( $posts as $key => $post ) {
            $posts[$key]['author_image'] = get_field( 'author-image', 'user_'. $post['author'] );
        }

        return $posts;
    }

    public function get_roi_eidhseon() {
        $args = array(
            'posts_per_page' => 6,
            'no_found_rows' => true,
            'date_query' => array(
                array(
                    'after' => '1 day ago'
                )
            )
        );

        return $this->format_posts( get_posts( $args ) );
    }

public function get_category($cat_name) {
        $args = array(
            'posts_per_page' => 5,
            'no_found_rows' => true,
            'category_name' => $cat_name,
            'date_query' => array(
                array(
                    'after' => '2 months ago'
                )
            )
        );
        return $this->format_posts( get_posts( $args ) );
    }
    
   
}