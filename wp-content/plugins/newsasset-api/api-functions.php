<?php
namespace newsasset;

use DateTime;
use Exception;

// Returns time elapsed since last call.
function time_elapsed() {
    static $last = null;

    $now = microtime( true );
    $elapsed = $last ? $now - $last : 0;
    $last = $now;

    return intval(  $elapsed * 1000, 10 );
}

function get_op() {
    if ( isset( $_GET["op"] ) ) return $_GET["op"];
    if ( isset( $_POST["op"] ) ) return $_POST["op"];

    throw new Exception( "Missing operation type" );
}

function get_json_error( $code ) {
    switch( $code ) {
        case JSON_ERROR_DEPTH: return "JSON: The maximum stack depth has been exceeded";
        case JSON_ERROR_STATE_MISMATCH: return "JSON: Invalid or malformed JSON";
        case JSON_ERROR_CTRL_CHAR: return "JSON: Control character error, possibly incorrectly encoded";
        case JSON_ERROR_SYNTAX: return "JSON: Syntax error";
        case JSON_ERROR_UTF8: return "JSON: Malformed UTF-8 characters, possibly incorrectly encoded";
        case JSON_ERROR_RECURSION: return "One or more recursive references in the value to be encoded";
        case JSON_ERROR_INF_OR_NAN: return "One or more NAN or INF values in the value to be encoded";
        case JSON_ERROR_UNSUPPORTED_TYPE: return "A value of a type that cannot be encoded was given";
        case JSON_ERROR_INVALID_PROPERTY_NAME: return "A property name that cannot be encoded was given";
        case JSON_ERROR_UTF16: return "Malformed UTF-16 characters, possibly incorrectly encoded";
    }
}

function get_req() {
    $content = file_get_contents( "php://input" );

    if ( empty( $content ) ) throw new Exception( "Missing json content" );

    $req = json_decode( $content, true );

    if ( !empty( $req ) ) return $req;
   
    throw new Exception( get_json_error( json_last_error() ) ?: "Failed to parse request" );
}

function log_request() {
    if ( NA_SAVE_REQUESTS ) {
        $date = date( "Y-m-d\TH:i:s" );

        try {
            file_put_contents( NA_SAVE_REQUESTS . "/" . get_log_filename(), print_r( [
                "date" => $date,
                "GET" => $_GET,
                "POST" => $_POST,
                "BODY" => file_get_contents( "php://input" ),
            ], true ) );            
        }
        
        catch( Exception $err ) {
            file_put_contents( NA_SAVE_REQUESTS . "/$date.log", $err->getMessage() );
        }
    }
}

function greeklish_permalinks( $title ) {
    $expressions = [
        '/[αΑ][ιίΙΊ]/u' => 'ai',
        '/[οΟ][ιίΙΊ]/u' => 'oi',
        '/[Εε][ιίΙΊ]/u' => 'ei',
        '/[αΑ][υύΥΎ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'ay$1',
        '/[αΑ][υύΥΎ]/u' => 'ay',
        '/[εΕ][υύΥΎ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'ey$1',
        '/[εΕ][υύΥΎ]/u' => 'ey',
        '/[οΟ][υύΥΎ]/u' => 'ou',
        '/[νΝ][τΤ]/u' => 'nt',
        '/[τΤ][σΣ]/u' => 'ts',
        '/[τΤ][ζΖ]/u' => 'tz',
        '/[γΓ][γΓ]/u' => 'gg',
        '/[γΓ][κΚ]/u' => 'gk',
        '/[ηΗ][υΥ]([θΘκΚξΞπΠσςΣτTφΡχΧψΨ]|\s|$)/u' => 'if$1',
        '/[ηΗ][υΥ]/u' => 'iu',
        '/[θΘ]/u' => 'th',
        '/[ψΨ]/u' => 'ps',
        '/[ξΞ]/u' => 'ks',
        '/[αάΑΆ]/u' => 'a',
        '/[βΒ]/u' => 'v',
        '/[γΓ]/u' => 'g',
        '/[δΔ]/u' => 'd',
        '/[εέΕΈ]/u' => 'e',
        '/[€]/u' => ' ',
        '/[ζΖ]/u' => 'z',
        '/[ηήΗΉ]/u' => 'i',
        '/[ιίϊΐΙΊΪ]/u' => 'i',
        '/[κΚ]/u' => 'k',
        '/[λΛ]/u' => 'l',
        '/[μΜ]/u' => 'm',
        '/[νΝ]/u' => 'n',
        '/[οόΟΌ]/u' => 'o',
        '/[πΠ]/u' => 'p',
        '/[ρΡ]/u' => 'r',
        '/[σςΣ]/u' => 's',
        '/[τΤ]/u' => 't',
        '/[υύϋΥΎΫ]/u' => 'y',
        '/[φΦ]/iu' => 'f',
        '/[χΧ]/u' => 'x',
        '/[ωώ]/iu' => 'o',
    ];

	return preg_replace( array_keys( $expressions ), array_values( $expressions ), $title );
}

function get_publication_element( $id, $description, array $data ) {
    $key = strtolower( $description );

    if ( !empty( $data["PublicationElements"] ) && is_array( $data["PublicationElements"] ) ) {
        foreach( $data["PublicationElements"] as $element ) {
            if ( !empty( $element["ElementID"] ) && $element["ElementID"] == $id ) {
                return $element;
            }

            if ( !empty( $element["Description"] ) && strtolower($element["Description"]) == $key ) {
                return $data;
            }
        }
    }

    return null;
}

//function format_post_date( string $raw ) {
//    try {
//        $date = new DateTime( $raw );
//        $hours = defined( "NA_PUBLICATION_HOURS" ) ? intval( NA_PUBLICATION_HOURS ) : null;
//        $minutes = defined( "NA_PUBLICATION_MINUTES" ) ? intval( NA_PUBLICATION_MINUTES ) : null;
//        $seconds = defined( "NA_PUBLICATION_SECONDS" ) ? intval( NA_PUBLICATION_SECONDS ) : null;
//        $date->setTime( $hours, $minutes, $seconds );
//    
//        return $date->format( DateTime::ATOM );
//    }
//    catch ( Exception $err ) {
//        return $raw;
//    }
//}

function format_post_date( string $raw, $hours = null, $minutes = null, $seconds = null ) {
    try {
        $date = new DateTime( $raw );
        $date->setTime( $hours, $minutes, $seconds );
    
        return $date->format( DateTime::ATOM );
    }
    catch ( Exception $err ) {
        return $raw;
    }
}