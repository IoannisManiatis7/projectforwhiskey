<?php
/*
 * Template Name: Mobileapp Home
 */

 if( !class_exists('\\Mobileapp\\Base') ) {
	require ( __DIR__ . "/class.php" );
}

$mobileapp = new Mobileapp\Base();


$sections = array(
  
    /* ΚΕΝΤΡΙΚΑ ΘΕΜΑΤΑ */
    array(
        "type" => "top_articles",
        "posts" => $mobileapp->get_field('box8_selection','tovima_index'),
    ),    
  
  
    /* POLITICS */
    array(
        "type" => "politics",
        "header" => "Πολιτική",
        "ID" => "1",
        "posts" => $mobileapp->get_category('politics'),
    ),  
  
    /* LATEST NEWS */  
    array(
        "type" => "roi_eidhseon",
        "header" => "Τελευταία Νέα",
        "posts" => $mobileapp->get_roi_eidhseon(),
    ),
 
  
    /* FINANCE */
    array(
        "type" => "finance",
        "header" => "Ανάπτυξη",
        "ID" => "2",      
        "posts" => $mobileapp->get_category('finance'),
    ),
  
    /* OPINION */
    array(
        "type" => "apopsi",
        "header" => "Γνώμες",
        "ID" => "3",      
        "posts" => $mobileapp->get_category('opinions'),
    ),
 
  /* WORLD */
    array(
        "type" => "World",
        "header" => "Κόσμος",
        "ID" => "4",
        "posts" => $mobileapp->get_category('world'),
    ),
  
  /* SCIENCE */
    array(
        "type" => "science",
        "header" => "Science",
        "ID" => "5",  
        "posts" => $mobileapp->get_category('science'),
    ),  
  
  /* ΑΘΛΗΤΙΣΜΟΣ */
    array(
        "type" => "sports",
        "header" => "Αθλητισμός",
        "ID" => "6",
        "posts" => $mobileapp->get_category('sports'),
    ),  
  
  /* AUTOHUB */
    array(
        "type" => "autohub",
        "header" => "AutoHub",
        "ID" => "7",
        "posts" => $mobileapp->get_category('autohub'),
    ),
  
  /* BHMAgazino */
    array(
        "type" => "vimagazino",
        "header" => "BHMAgazino",
        "ID" => "8",
        "posts" => $mobileapp->get_category('vimagazino'),
    ),
  
  /* International */
    array(
        "type" => "international",
        "header" => "International",
        "ID" => "11",
        "posts" => $mobileapp->get_category('international'),
    ),
  
  /* ΚΟΙΝΩΝΙΑ */
    array(
        "type" => "society",
        "header" => "Κοινωνία",
        "ID" => "12",
        "posts" => $mobileapp->get_category('society'),
    ), 
  
  
  /* ΠΟΛΙΤΙΣΜΟΣ */
    array(
        "type" => "culture",
        "header" => "Πολιτισμός",
        "ID" => "13",
        "posts" => $mobileapp->get_category('culture'),
    ),
  
  
  /* ΒΙΒΛΙΑ */
    array(
        "type" => "books",
        "header" => "Βιβλία",
        "ID" => "14",
        "posts" => $mobileapp->get_category('books-ideas'),
    ),

 
  
);

header( "Content-type:application/json" );
echo json_encode( $sections, JSON_UNESCAPED_UNICODE );