<?php

//add testimonitals
function qib_testimonials_init() {
  $labels = array(
    'name' => _x('Testimonials', 'testimonials'),
    'singular_name' => _x('Testimonial', 'testimonial'),
    'add_new' => _x('Add New', 'testimonial'),
    'add_new_item' => __('Add New Testimonial'),
    'edit_item' => __('Edit Testimonial'),
    'new_item' => __('New Testimonial'),
    'all_items' => __('All Testimonials'),
    'view_item' => __('View Testimonial'),
    'search_items' => __('Search Testimonials'),
    'not_found' =>  __('No Testimonials found'),
    'not_found_in_trash' => __('No Testimonials found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Testimonials'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('testimonial',$args);
}
add_action( 'init', 'qib_testimonials_init' );

//add classes
function qib_classes_init() {
  $labels = array(
    'name' => _x('Classes', 'classes'),
    'singular_name' => _x('Class', 'class'),
    'add_new' => _x('Add New', 'class'),
    'add_new_item' => __('Add New Class'),
    'edit_item' => __('Edit Class'),
    'new_item' => __('New Class'),
    'all_items' => __('All Classes'),
    'view_item' => __('View Class'),
    'search_items' => __('Search Classes'),
    'not_found' =>  __('No Classes found'),
    'not_found_in_trash' => __('No Classes found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Classes'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('class',$args);
}
add_action( 'init', 'qib_classes_init' );


//add Biography
function qib_biographies_init() {
  $labels = array(
    'name' => _x('Biographies', 'biographies'),
    'singular_name' => _x('Biography', 'biography'),
    'add_new' => _x('Add New', 'biography'),
    'add_new_item' => __('Add New Biography'),
    'edit_item' => __('Edit Biography'),
    'new_item' => __('New Biography'),
    'all_items' => __('All Biography'),
    'view_item' => __('View Biography'),
    'search_items' => __('Search Biographies'),
    'not_found' =>  __('No Biographies found'),
    'not_found_in_trash' => __('No Biographies found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Biographies'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('biography',$args);
}
add_action( 'init', 'qib_biographies_init' );

//add lineage
function qib_lineages_and_training_init() {
  $labels = array(
    'name' => _x('Lineages & Training', 'lineages-training'),
    'singular_name' => _x('Lineage & Training', 'lineage-training'),
    'add_new' => _x('Add New', 'lineage-training'),
    'add_new_item' => __('Add New Lineage & Training'),
    'edit_item' => __('Edit Lineage & Training'),
    'new_item' => __('New Lineage & Training'),
    'all_items' => __('All Lineages & Training'),
    'view_item' => __('View Lineage & Training'),
    'search_items' => __('Search Lineages & Training'),
    'not_found' =>  __('No Lineages & Training found'),
    'not_found_in_trash' => __('No Lineages  & Training found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Lineages & Training'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('lineage-training',$args);
}
add_action( 'init', 'qib_lineages_and_training_init' );

//add location
function qib_locations_init() {
  $labels = array(
    'name' => _x('Locations', 'locations'),
    'singular_name' => _x('Location', 'location'),
    'add_new' => _x('Add New', 'location'),
    'add_new_item' => __('Add New Location'),
    'edit_item' => __('Edit Location'),
    'new_item' => __('New Location'),
    'all_items' => __('All Location'),
    'view_item' => __('View Location'),
    'search_items' => __('Search Locations'),
    'not_found' =>  __('No Locations found'),
    'not_found_in_trash' => __('No Locations found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Locations'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('location',$args);
}
add_action( 'init', 'qib_locations_init' );

//add discipline
function qib_disciplines_init() {
  $labels = array(
    'name' => _x('Disciplines', 'disciplines'),
    'singular_name' => _x('Discipline', 'discipline'),
    'add_new' => _x('Add New', 'discipline'),
    'add_new_item' => __('Add New Discipline'),
    'edit_item' => __('Edit Discipline'),
    'new_item' => __('New Discipline'),
    'all_items' => __('All Discipline'),
    'view_item' => __('View Discipline'),
    'search_items' => __('Search Disciplines'),
    'not_found' =>  __('No Disciplines found'),
    'not_found_in_trash' => __('No Disciplines found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Disciplines'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('discipline',$args);
}
add_action( 'init', 'qib_disciplines_init' );

//add faq
function qib_faqs_init() {
  $labels = array(
    'name' => _x('FAQs', 'faqs'),
    'singular_name' => _x('FAQ', 'faq'),
    'add_new' => _x('Add New', 'faq'),
    'add_new_item' => __('Add New FAQ'),
    'edit_item' => __('Edit FAQ'),
    'new_item' => __('New FAQ'),
    'all_items' => __('All FAQ'),
    'view_item' => __('View FAQ'),
    'search_items' => __('Search FAQs'),
    'not_found' =>  __('No FAQs found'),
    'not_found_in_trash' => __('No FAQs found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'FAQs'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('faq',$args);
}
add_action( 'init', 'qib_faqs_init' );
?>