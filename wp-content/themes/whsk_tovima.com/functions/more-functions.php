<?php
/*
======================================
ADD OPTIONS PAGES
*/
if( function_exists('acf_add_options_page') ) {
  
  /* NEWSLETTER PAGE
	$parentsidenews = acf_add_options_page(array(
    'menu_title' 	=> 'NEWSLETTER',
    'icon_url' => 'dashicons-schedule',
    'position' => 8
	));  
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'NEWSLETTER BHMA',
		'menu_title' 	=> 'NEWSLETTER BHMA',
		'menu_slug' 	=> 'tovima_newsletter',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_newsletter',
		'parent_slug' => $parentsidenews['menu_slug'],
	));
  /* NEWSLETTER PAGE */
  
/*
	$parentsidebar = acf_add_options_page(array(
    'menu_title' 	=> 'BHMA Sidebar',
    'icon_url' => 'dashicons-schedule',
    'position' => 3
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section BHMAτοδότης',
		'menu_title' 	=> 'Section BHMAτοδότης',
		'menu_slug' 	=> 'tovima_vimatodotis',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_vimatodotis',
		'parent_slug' => $parentsidebar['menu_slug'],
	));  
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Σίβυλλα',
		'menu_title' 	=> 'Section Σίβυλλα',
		'menu_slug' 	=> 'tovima_sivilla',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_sivilla',
		'parent_slug' => $parentsidebar['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Πολιτισμός',
		'menu_title' 	=> 'Section Πολιτισμός',
		'menu_slug' 	=> 'tovima_culture',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_culture',
		'parent_slug' => $parentsidebar['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section International',
		'menu_title' 	=> 'Section International',
		'menu_slug' 	=> 'tovima_international',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_international',
		'parent_slug' => $parentsidebar['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Books',
		'menu_title' 	=> 'Section Books',
		'menu_slug' 	=> 'tovima_books',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_books',
		'parent_slug' => $parentsidebar['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Market',
		'menu_title' 	=> 'Section Market',
		'menu_slug' 	=> 'tovima_media',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_media',
		'parent_slug' => $parentsidebar['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Κοινωνία',
		'menu_title' 	=> 'Section Κοινωνία',
		'menu_slug' 	=> 'tovima_society',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_society',
		'parent_slug' => $parentsidebar['menu_slug'],
	));



// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Section Αφιερώματα',
// 		'menu_title' 	=> 'Section Αφιερώματα',
// 		'menu_slug' 	=> 'tovima_afieromata',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//     'post_id'     => 'tovima_afieromata',
// 		'parent_slug' => $parentsidebar['menu_slug'],
// 	));


    // add parent
    $parentopinionsen = acf_add_options_page(array(
        //'page_title' 	=> 'Headlines'
        'menu_title' 	=> 'Ενθετα',
        //'redirect' 		=> false
        'icon_url' => 'dashicons-schedule',
        'position' => 3
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Εσωτερικά links',
        'menu_title' 	=> 'Εσωτερικά links',
        'post_id'     => 'internal_links',
        'menu_slug' 	=> 'internal_links',
        'capability' 	=> 'edit_posts',
        'redirect' 	=> false,
        'parent_slug' => $parentopinionsen['menu_slug'],
    ));
    
    
 	// add parent
	$parententipo = acf_add_options_page(array(
    'menu_title' 	=> 'BHMA ΕΝΤΥΠΗ',
    'icon_url' => 'dashicons-schedule',
    'position' => 4
	));



	acf_add_options_sub_page(array(
		'page_title' 	=> 'Πολιτική Έντυπη',
		'menu_title' 	=> 'Πολιτική Έντυπη',
		'menu_slug' 	=> 'tovimaprint_politics',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_politics',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Οικονομία Έντυπη',
		'menu_title' 	=> 'Οικονομία Έντυπη',
		'menu_slug' 	=> 'tovimaprint_economy',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_economy',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Γνώμες Έντυπη',
		'menu_title' 	=> 'Γνώμες Έντυπη',
		'menu_slug' 	=> 'tovimaprint_opinions',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_opinions',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Κοινωνία Έντυπη',
		'menu_title' 	=> 'Κοινωνία Έντυπη',
		'menu_slug' 	=> 'tovimaprint_society',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_society',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Κόσμος Έντυπη',
		'menu_title' 	=> 'Κόσμος Έντυπη',
		'menu_slug' 	=> 'tovimaprint_blogs',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_blogs',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Science Έντυπη',
		'menu_title' 	=> 'Science Έντυπη',
		'menu_slug' 	=> 'tovimaprint_world',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_world',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Αθλητισμός Έντυπη',
		'menu_title' 	=> 'Αθλητισμός Έντυπη',
		'menu_slug' 	=> 'tovimaprint_sports',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_sports',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Πολιτισμός Έντυπη',
		'menu_title' 	=> 'Πολιτισμός Έντυπη',
		'menu_slug' 	=> 'tovimaprint_culture',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_culture',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Νέες Εποχές',
		'menu_title' 	=> 'Νέες Εποχές',
		'menu_slug' 	=> 'tovimaprint_newages',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_newages',
		'parent_slug' => $parententipo['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Βιβλία Έντυπη',
		'menu_title' 	=> 'Βιβλία Έντυπη',
		'menu_slug' 	=> 'tovimaprint_books',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovimaprint_books',
		'parent_slug' => $parententipo['menu_slug'],
	));

*/
  
 	// add parent
	$parent = acf_add_options_page(array(
	'menu_title' 	=> 'BHMA Headlines',
    'icon_url' => 'dashicons-schedule',
    'position' => 2
	));
  
  /*
 	// add parent
	$parentH = acf_add_options_page(array(
	'menu_title' 	=> 'EKLOGES23',
  'icon_url' => 'dashicons-schedule',
  'position' => 3
	));
  
 	// add parent
	$parentN = acf_add_options_page(array(
	'menu_title'  => 'Newsletter',
  'icon_url' => 'dashicons-schedule',
  'position' => 4
	));
  
	acf_add_options_sub_page(array(
    'page_title'  => 'Newsletter 5 το πρωί',
    'menu_title'  => 'Newsletter 5 το πρωί',
    'menu_slug'   => 'five_toproi',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'post_id'     => 'five_toproi',
    'parent_slug' => $parentN['menu_slug'],
	));  
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Επιλογή Αθρων Εκλ.',
		'menu_title' 	=> 'Αρχική Κεντρικών',
		'menu_slug' 	=> 'election_index',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'election_index',
		'parent_slug' => $parentH['menu_slug'],
	));
  */
  

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Επιλογή Κεντρικών',
		'menu_title' 	=> 'Αρχική Κεντρικών',
		'menu_slug' 	=> 'tovima_index',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_index',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'Έκτακτη Είδηση',
		'menu_title'  => 'Έκτακτη Είδηση',
		'menu_slug'   => 'tovima_breaking',
		'capability'  => 'edit_posts',
		'redirect'    => false,
    	'post_id'     => 'tovima_breaking',
		'parent_slug' => $parent['menu_slug'],
	));	
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Γνώμες',
		'menu_title' 	=> 'Section Γνώμες',
		'menu_slug' 	=> 'tovima_opinions',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'post_id'     => 'tovima_opinions',
		'parent_slug' => $parent['menu_slug'],
	));
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section WSJ',
		'menu_title' 	=> 'Section WSJ',
		'menu_slug' 	=> 'tovima_wsj',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'post_id'     => 'tovima_wsj',
		'parent_slug' => $parent['menu_slug'],
	));  

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Section Έντυπη',
// 		'menu_title' 	=> 'Section Έντυπη',
// 		'menu_slug' 	=> 'tovima_printhome',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
// 		'post_id'     => 'tovima_printhome',
// 		'parent_slug' => $parent['menu_slug'],
// 	));
  
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Section Μόνο ΒΗΜΑ',
// 		'menu_title' 	=> 'Section Μόνο ΒΗΜΑ',
// 		'menu_slug' 	=> 'tovima_only_vima',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//     'post_id'     => 'tovima_only_vima',
// 		'parent_slug' => $parent['menu_slug'],
// 	));
  
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Section ΒΗΜΑgazino',
// 		'menu_title' 	=> 'Section ΒΗΜΑgazino',
// 		'menu_slug' 	=> 'tovima_vimagazino',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//    		 'post_id'     => 'tovima_vimagazino',
// 		'parent_slug' => $parent['menu_slug'],
// 	));
  

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Section Αφιερώματα',
// 		'menu_title' 	=> 'Section Αφιερώματα',
// 		'menu_slug' 	=> 'tovima_afieromata',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//     	'post_id'     => 'tovima_afieromata',
// 		'parent_slug' => $parent['menu_slug'],
// 	));

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Section Αφιερώματα 2',
// 		'menu_title' 	=> 'Section Αφιερώματα 2',
// 		'menu_slug' 	=> 'tovima_afieromata_2',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//     	'post_id'     => 'tovima_afieromata_2',
// 		'parent_slug' => $parent['menu_slug'],
// 	));

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Section Αφιερώματα 3',
// 		'menu_title' 	=> 'Section Αφιερώματα 3',
// 		'menu_slug' 	=> 'tovima_afieromata_3',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//     	'post_id'     => 'tovima_afieromata_3',
// 		'parent_slug' => $parent['menu_slug'],
// 	));
  
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Επιλεγμένα ΒΗΜΑ',
// 		'menu_title' 	=> 'Επιλεγμένα ΒΗΜΑ',
// 		'menu_slug' 	=> 'external_posts',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
// 		'post_id'     => 'external_posts',
// 		'parent_slug' => $parent['menu_slug'],
// 	));

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'ΝΕΕΣ ΕΠΟΧΕΣ',
// 		'menu_title' 	=> 'ΝΕΕΣ ΕΠΟΧΕΣ',
// 		'menu_slug' 	=> 'tovima_neesepoxes',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//    		'post_id'     => 'tovima_neesepoxes',
// 		'parent_slug' => $parent['menu_slug'],
// 	));

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'ΜΕΓΕΘΥΝΣΕΙΣ',
// 		'menu_title' 	=> 'ΜΕΓΕΘΥΝΣΕΙΣ',
// 		'menu_slug' 	=> 'tovima_megenthinseis',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//    		'post_id'     => 'tovima_megenthinseis',
// 		'parent_slug' => $parent['menu_slug'],
// 	));
  
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Χτυπήματα',
// 		'menu_title' 	=> 'Χτυπήματα',
// 		'menu_slug' 	=> 'tovimaprint_xtp',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//    		'post_id'     => 'tovimaprint_xtp',
// 		'parent_slug' => $parent['menu_slug'],
// 	));

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Κεντρικά Εντυπη',
// 		'menu_title' 	=> 'Κεντρικά Εντυπη',
// 		'menu_slug' 	=> 'tovimaprint_index',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//    		'post_id'     => 'tovimaprint_index',
// 		'parent_slug' => $parent['menu_slug'],
// 	));
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Tags / Θέματα',
		'menu_title' 	=> 'Tags / Θέματα',
		'menu_slug' 	=> 'tovima_tags',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    	'post_id'     => 'tovima_tags',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Προσφορές Banner',
		'menu_title' 	=> 'Προσφορές Banner',
		'menu_slug' 	=> 'tovima_οffers',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    	'post_id'     => 'tovima_οffers',
		'parent_slug' => $parent['menu_slug'],
	));

// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Stream Mega',
// 		'menu_title' 	=> 'Stream Mega',
// 		'menu_slug' 	=> 'tovima_strmega',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false,
//     	'post_id'     => 'tovima_strmega',
// 		'parent_slug' => $parentH['menu_slug'],
// 	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Podcast Vima',
		'menu_title' 	=> 'Podcast Vima',
		'menu_slug' 	=> 'tovimagr_podcast',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'post_id'     => 'tovimagr_podcast',
		'parent_slug' => $parent['menu_slug'],
	));
  
/*
acf_add_options_sub_page(array(
	'page_title' 	=> '5 το πρωϊ',
	'menu_title' 	=> '5 το πρωϊ',
	'menu_slug' 	=> 'tovimagr_fiveam',
	'capability'	=> 'edit_posts',
	'redirect'		=> false,
	'post_id'     => 'tovimagr_fiveam',
	'parent_slug' => $parent['menu_slug'],
));  

acf_add_options_sub_page(array(
	'page_title' 	=> 'Μαθητικές εφημερίδες',
	'menu_title' 	=> 'Μαθητικές εφημερίδες',
	'menu_slug' 	=> 'tovimagr_publications',
	'capability'	=> 'edit_posts',
	'redirect'		=> false,
	'post_id'     => 'tovimagr_publications',
	'parent_slug' => $parent['menu_slug'],
)); 

acf_add_options_sub_page(array(
	'page_title' 	=> 'Εκλόγες 2023',
	'menu_title' 	=> 'Εκλόγες 2023',
	'menu_slug' 	=> 'tovimagr_elections23',
	'capability'	=> 'edit_posts',
	'redirect'		=> false,
	'post_id'     => 'tovimagr_elections23',
	'parent_slug' => $parent['menu_slug'],
));  
  
	acf_add_options_sub_page(array(
		'page_title' 	=> 'BoilerPlate',
		'menu_title' 	=> 'BoilerPlate',
		'menu_slug' 	=> 'tovima_boilerpl',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_boilerpl',
		'parent_slug' => $parentH['menu_slug'],
	));	  
  
/*


	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Οικονομία',
		'menu_title' 	=> 'Section Οικονομία',
		'menu_slug' 	=> 'tovima_economy',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_economy',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Γνώμες',
		'menu_title' 	=> 'Section Γνώμες',
		'menu_slug' 	=> 'tovima_opinions',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_opinions',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Κόσμος',
		'menu_title' 	=> 'Section Κόσμος',
		'menu_slug' 	=> 'tovima_blogs',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_blogs',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Science',
		'menu_title' 	=> 'Section Science',
		'menu_slug' 	=> 'tovima_world',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_world',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Αθλητισμός',
		'menu_title' 	=> 'Section Αθλητισμός',
		'menu_slug' 	=> 'tovima_sports',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_sports',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section ΒΗΜΑ TV',
		'menu_title' 	=> 'Section ΒΗΜΑ TV',
		'menu_slug' 	=> 'tovima_vimatv',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_vimatv',
		'parent_slug' => $parent['menu_slug'],
	));




	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section Γευσιγνώστης',
		'menu_title' 	=> 'Section Γευσιγνώστης',
		'menu_slug' 	=> 'tovima_foodex',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_foodex',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Section AutoHub',
		'menu_title' 	=> 'Section AutoHub',
		'menu_slug' 	=> 'tovima_autohub',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_autohub',
		'parent_slug' => $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ελευθερο Section',
		'menu_title' 	=> 'Ελευθερο Section',
		'menu_slug' 	=> 'tovima_free',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'post_id'     => 'tovima_free',
		'parent_slug' => $parent['menu_slug'],
	));
  */


} // END ACF OPTIONS
?>