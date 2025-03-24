<?php

// PHP basic options
error_reporting( 0 ); // Disable report all PHP errors
@ini_set( "error_reporting", 0 ); // Disable report all PHP errors
// setlocale( LC_ALL,'C.UTF-8' );
date_default_timezone_set( "Europe/Athens" );
header( "Content-Type: application/json" );

// Newsasset basic options
define( "NA_SAVE_REQUESTS", __DIR__ . "/logs" ); // Will save all the requests in the logs
define( "NA_ALWAYS_ADD_ATTACHMENT", false ); // If set to true will always insert new file
define( "NA_WP_ROOT", "../../../" ); // Set WP ROOT path
define( "NA_JSON_OPTS", JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE ); // Set WP ROOT path
define( "NA_PUBLICATION_HOURS", "06" ); // Sets the publication HR
define( "NA_PUBLICATION_MINUTES", "0" ); // Sets the publication MIN
define( "NA_PUBLICATION_SECONDS", "0" ); // Sets the publication SEC
define( "NA_DEFAULT_IMAGE", "1685978" ); // Sets the image
define( "NA_ENABLE_INSERTS", true ); // Disable inserts
define( "NA_ENABLE_UPDATES", true ); // Disable updates
define( "NA_ENABLE_DELETES", false ); // Disable deletes

// WP basic options
define( "AUTOSAVE_INTERVAL", 60*60*60*24*365 ); // Disable autosave 1x per year
define( "EMPTY_TRASH_DAYS",  0 ); // Zero days for trash
define( "WP_POST_REVISIONS", false ); // Disable revisions

// Load api core functions
require "api-functions.php"; // Basic api functions
require "post-data.php"; // Post data functions
require "wp-insert-attachment.php"; // Image upload functions
require "wp-insert-post.php"; // Post create functions
require "wp-update-post.php"; // Post update functions
require "wp-delete-post.php"; // Post delete functions

chdir( NA_WP_ROOT ); // Move to WP root so WP includes works

// Load WP core functions
require_once "wp-load.php";
require_once "wp-admin/includes/image.php";

try {
    \newsasset\time_elapsed();
    \newsasset\log_request();

    // Removes the custom upload dir function from theme-functions
    remove_filter( "upload_dir", "wpcb_upload_dir_filter" );

    $op = \newsasset\get_op();
    $req = \newsasset\get_req();
    $res = ["ErrorCode" => 0, "ErrorMsg" => ""];

    switch( $op ) {
        case "create": $res["Result"] = \newsasset\wp_insert_post( $req ); break;
        case "update": \newsasset\wp_update_post( $req ); break;
        case "delete": \newsasset\wp_delete_post( $req ); break;
        default: throw new Exception( "Invalid operation type" );
    }

    $res["elapsed"] = \newsasset\time_elapsed();

    echo json_encode( $res, NA_JSON_OPTS );
}

catch( Exception $err ) {    
    echo json_encode( [
        "ErrorCode" => -1,
        "ErrorMsg" => $err->getMessage(),
        "elapsed" =>  \newsasset\time_elapsed(),
    ], NA_JSON_OPTS );
}
