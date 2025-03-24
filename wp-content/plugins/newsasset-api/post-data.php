<?php
namespace newsasset;

use Exception;

function get_log_filename() {
    try {
        $data = get_req();
        $publication = isset( $data["Publication"] ) ? $data["Publication"] : [];

        return str_replace( " ", "", str_replace( "/", "-", join( "", [
            isset( $publication["PublicationDescription"] ) ? trim( $publication["PublicationDescription"] ) : "",
            "_",
            isset( $publication["SectionDescription"] ) ? trim( $publication["SectionDescription"] ) : "",
            "_",
            isset( $publication["IssueDescription"] ) ? trim( $publication["IssueDescription"] ) : "",
            "_",
            isset( $publication["IssueDate"] ) ? trim( $publication["IssueDate"] ) : "",
            "_",
            isset( $publication["LayoutID"] ) ? trim( $publication["LayoutID"] ) : "",
            "_",
            isset( $publication["LayoutDescription"] ) ? trim( $publication["LayoutDescription"] ) : "",
            "_",
            isset( $data["DocID"] ) ? $data["DocID"] : "",
            "_",
            date( "Y-m-d\TH:i:s" ),
            ".log"
        ] ) ) );;
    }

    catch( Exception $err ) {
        return date( "Y-m-d\TH:i:s" ) . ".log";
    }
}

function is_attachment( array $data ) {
    if ( !empty( $data["FileName"] ) ) return true;

    return false;
}


function get_post_id( array $data ) {
    if ( !empty( $data["WebID"] ) ) return $data["WebID"];

    return null;
}

function get_document_id( array $data ) {
    if ( !empty( $data["DocID"] ) ) return $data["DocID"];

    return null;
}

function get_post_title( array $data ) {
    if ( !empty( $data["Headline"] ) ) return $data["Headline"];
    
    $element = get_publication_element( -3, "Τίτλος", $data );
    if ( !empty( $element["Content"] ) ) return $element["Content"];

    return null;
}

function get_post_excerpt( array $data ) {
    // @NOTE This was comment out because of: “Υπότιτλος» or “Υπέρτιτλος»,
    // should be mapped at the “Excerpt” cell from gzavalis@alteregomedia.org
    // at Aug 3, 2018, 1:23 AM

    // if ( !empty( $data["Caption"] ) ) return $data["Caption"];

    // $element = get_publication_element( 5, "Περίληψη", $data );
    // if ( !empty( $element["Content"] ) ) return $element["Content"];

    $subtitle = get_subtitle( $data );
    if ( !empty( $subtitle ) ) return $subtitle;

    $super_title = get_super_title( $data );
    if ( !empty( $super_title ) ) return $super_title;

    return null;
}

function get_post_content( array $data ) {
    if ( !empty( $data["HTML"] ) ) return $data["HTML"];

    return null;
}

//function get_post_date( array $data ) {
//    // @NOTE This was comment out because of: The articles published date is the current
//    // datetime of the export and not the issue’s publication date/time
//    // from gzavalis@alteregomedia.org at Aug 3, 2018, 1:23 AM
//
//    // if ( !empty( $data["IssueDate"] ) ) return $data["IssueDate"];
//
//    if ( !empty( $data["Publication"]["IssueDate"] ) ) return format_post_date( $data["Publication"]["IssueDate"] );
//
//    return null;
//}


function get_post_date( array $data ) {
    $hours = defined( "NA_PUBLICATION_HOURS" ) ? intval( NA_PUBLICATION_HOURS ) : null;
    $minutes = defined( "NA_PUBLICATION_MINUTES" ) ? intval( NA_PUBLICATION_MINUTES ) : null;
    $seconds = defined( "NA_PUBLICATION_SECONDS" ) ? intval( NA_PUBLICATION_SECONDS ) : null;
    // @NOTE This was comment out because of: The articles published date is the current
    // datetime of the export and not the issue’s publication date/time
    // from gzavalis@alteregomedia.org at Aug 3, 2018, 1:23 AM

    // if ( !empty( $data["IssueDate"] ) ) return $data["IssueDate"];


    if ( !empty( $data["Publication"]["IssueDate"] ) ) {
        
        if ( !empty( $data["Publication"]["SectionID"] ) ) {
            $category = $data["Publication"]["SectionID"];
           if( ('126' === $category) || ('127' === $category) || ('128' === $category) || ('131' === $category) ||
               ('132' === $category) || ('134' === $category) || ('134' === $category) || ('135' === $category) ||
               ('133' === $category) || ('129' === $category) || ('130' === $category) || ('138' === $category) ||
               ('136' === $category) ) {
//                return format_post_date( "tomorrow", 8, 0, 0 );    
                return format_post_date( $data["Publication"]["IssueDate"], 24 + 8, 0, 0 );
//                 return format_post_date( "tomorrow", $hours, $minutes, $seconds );
            }
        }

        return format_post_date( $data["Publication"]["IssueDate"], $hours, $minutes, $seconds );
    }
    

    return null;
}





function get_post_references( array $data ) {
    if ( !empty( $data["References"] ) ) return $data["References"];
    return [];
}

function get_post_type( array $data ) {
    if ( !empty( $data["Publication"]["SectionID"] ) ) {
        switch( $data["Publication"]["SectionID"] ) {
            case "55": return "printed_post";
            case "56": return "printed_post";
            case "57": return "printed_post";
            case "60": return "printed_post";
            case "61": return "printed_post";
            case "62": return "printed_post";
            case "63": return "printed_post";
            case "64": return "printed_post";
            case "92": return "printed_post";
            case "58": return "printed_post";
            case "59": return "printed_post";
            case "73": return "printed_post";
            case "74": return "printed_post";
            case "126": return "post";
            case "127": return "post";
            case "128": return "post";
            case "131": return "post";
            case "132": return "post";
            case "134": return "post";
            case "135": return "post";
            case "133": return "post";
            case "129": return "post";
            case "130": return "post";
            case "138": return "post";
            case "136": return "post";
        }
    }

    return "printed_post";
}

function get_categories( array $data ) {
    if ( !empty( $data["Publication"]["SectionID"] ) ) {
        switch( $data["Publication"]["SectionID"] ) {
            case "55": return [3];
            case "56": return [5];
            case "57": return [2];
            case "60": return [9];
            case "61": return [13];
            case "62": return [16];
            case "63": return [79810];
            case "64": return [6];
            case "92": return [17];
            case "58": return [7];
            case "59": return [8];
            case "73": return [11];
            case "74": return [11];
            case "126": return [3];
            case "127": return [5];
            case "128": return [2];
            case "131": return [9];
            case "132": return [13];
            case "134": return [79810];
            case "135": return [6];
            case "133": return [15];
            case "129": return [7];
            case "130": return [8];
            case "138": return [15];
            case "136": return [7];
        }
    }

    return null;
}

function get_editors( array $data ) {
    if ( !empty( $data["Authors"] ) ) {
        if ( !empty( $data["Authors"][0] ) ) {
            if ( !empty( $data["Authors"][0]["name"] ) ) {
                return $data["Authors"][0]["name"];
            }
        }
    }

    return null;
}

function get_keywords( array $data ) {
    return null; // Not provided.
}

function get_caption( array $data ) {
    if ( !empty( $data["Caption"] ) ) return $data["Caption"];

    $element = get_publication_element( 5, "Περίληψη", $data );
    if ( !empty( $element["Content"] ) ) return $element["Content"];

    return null;
}

function get_modified( array $data ) {
    return null; // Not provided.
}

function get_subtitle( array $data ) {
    $element = get_publication_element( 4, "ΥπόΤιτλος", $data );
    if ( !empty( $element["Content"] ) ) return $element["Content"];

    return null;
}

function get_super_title( array $data ) {
    $element = get_publication_element( 3, "Υπέρτιτλος", $data );
    if ( !empty( $element["Content"] ) ) return $element["Content"];

    return null;
}

function get_tags( array $data ) {
    return null; // Not provided.
}

function get_video( array $data ) {
    return null; // Not provided.
}

function get_image_name( array $data ) {
    if ( !empty( $data["FileName"] ) ) return $data["FileName"];
    return null;
}

function get_image_date( array $data ) {
    if ( !empty( $data["EventDate"] ) ) return $data["EventDate"];

    return null;
}

function get_image_content( array $data ) {
    if ( !empty( $data["MediumImage"] ) ) return $data["MediumImage"];
    return null;
}

function get_image_alt( array $data ) {
    return null; // Not Provided
}

function get_image_data( array $data ) {
    return [
        "post_title" => get_post_title( $data ),
        "post_content" => get_post_content( $data ),
        "post_alt" => get_image_alt( $data ),
        "post_excerpt" => get_caption( $data ),
        "post_status" => "inherit",
    ];
}

function get_post_fields( array $data ) {
    return [
        "categories" => get_categories( $data ),
        "editors" => get_editors( $data ),
        "keywords" => get_keywords( $data ),
        "modified" => null, // Not provided ???
        "subtitle" => get_subtitle( $data ),
        "super_title" => get_super_title( $data ),
        "tags" => get_tags( $data ), 
        "video" => get_video( $data ),
    ];
}

function get_post_data( array $data ) {
    $date = date( 'Y-m-d H:i:s', strtotime( get_post_date( $data ) ) );

    return [
        "fields" => get_post_fields( $data ),
        "comment_status" => "closed",
        "ping_status" => "closed",
        "post_title" => get_post_title( $data ),
        "post_excerpt" => get_post_excerpt( $data ),
        "post_content" => get_post_content( $data ),
        "post_date" => $date,
        "post_date_gmt" => get_gmt_from_date( $date ),
        "post_status" => "publish",
        "post_type" => get_post_type( $data ),
        // "post_author" => null, // Not provided. Add the default?
        // "post_modified" => null, // Let WP handle?,
        "post_name" => greeklish_permalinks( get_post_title( $data ) ),
    ];
}

