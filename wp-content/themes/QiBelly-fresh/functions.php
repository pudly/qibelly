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
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
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
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
    'taxonomies' => array('category')//, 'post_tag')
  ); 
  register_post_type('class',$args);
}
add_action( 'init', 'qib_classes_init' );


//add Biography
//function qib_biographies_init() {
//  $labels = array(
//    'name' => _x('Biographies', 'biographies'),
//    'singular_name' => _x('Biography', 'biography'),
//    'add_new' => _x('Add New', 'biography'),
//    'add_new_item' => __('Add New Biography'),
//    'edit_item' => __('Edit Biography'),
//    'new_item' => __('New Biography'),
//    'all_items' => __('All Biography'),
//    'view_item' => __('View Biography'),
//    'search_items' => __('Search Biographies'),
//    'not_found' =>  __('No Biographies found'),
//    'not_found_in_trash' => __('No Biographies found in Trash'), 
//    'parent_item_colon' => '',
//    'menu_name' => 'Biographies'
//
//  );
//  $args = array(
//    'labels' => $labels,
//    'public' => true,
//    'publicly_queryable' => true,
//    'show_ui' => true, 
//    'show_in_menu' => true, 
//    'query_var' => true,
//    'rewrite' => true,
//    'capability_type' => 'post',
//    'has_archive' => true, 
//    'hierarchical' => false,
//    'menu_position' => null,
//    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
//  ); 
//  register_post_type('biography',$args);
//}
//add_action( 'init', 'qib_biographies_init' );

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
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('category')//, 'post_tag')
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
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
    'taxonomies' => array('category')//, 'post_tag')
  ); 
  register_post_type('location',$args);
}
add_action( 'init', 'qib_locations_init' );

//add discipline
//function qib_disciplines_init() {
//  $labels = array(
//    'name' => _x('Disciplines', 'disciplines'),
//    'singular_name' => _x('Discipline', 'discipline'),
//    'add_new' => _x('Add New', 'discipline'),
//    'add_new_item' => __('Add New Discipline'),
//    'edit_item' => __('Edit Discipline'),
//    'new_item' => __('New Discipline'),
//    'all_items' => __('All Discipline'),
//    'view_item' => __('View Discipline'),
//    'search_items' => __('Search Disciplines'),
//    'not_found' =>  __('No Disciplines found'),
//    'not_found_in_trash' => __('No Disciplines found in Trash'), 
//    'parent_item_colon' => '',
//    'menu_name' => 'Disciplines'
//
//  );
//  $args = array(
//    'labels' => $labels,
//    'public' => true,
//    'publicly_queryable' => true,
//    'show_ui' => true, 
//    'show_in_menu' => true, 
//    'query_var' => true,
//    'rewrite' => true,
//    'capability_type' => 'post',
//    'has_archive' => true, 
//    'hierarchical' => false,
//    'menu_position' => null,
//    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
//    'taxonomies' => array('category', 'post_tag')
//  ); 
//  register_post_type('discipline',$args);
//}
//add_action( 'init', 'qib_disciplines_init' );

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

//add faq
function qib_videos_init() {
  $labels = array(
    'name' => _x('Videos', 'videos'),
    'singular_name' => _x('Video', 'video'),
    'add_new' => _x('Add New', 'video'),
    'add_new_item' => __('Add New Video'),
    'edit_item' => __('Edit Video'),
    'new_item' => __('New Video'),
    'all_items' => __('All Video'),
    'view_item' => __('View Video'),
    'search_items' => __('Search Videos'),
    'not_found' =>  __('No Videos found'),
    'not_found_in_trash' => __('No Videos found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Videos'

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
  register_post_type('video',$args);
}
add_action( 'init', 'qib_videos_init' );

class Walker_Secondary_Nav extends Walker_page {
function start_el(&$output, $page, $depth, $args, $current_page) {
    if ( $depth )
        $indent = str_repeat("\t", $depth);
    else
        $indent = '';

    $output .= $indent . '<li class="small"><a href="' . get_permalink($page->ID) . '">' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</a>';

} // End start_el
} // End Walker Class

class Post_Category_Walker extends Walker_Category {
 
	/**
	 * @see Walker::$tree_type
	 * @since 2.1.0
	 * @var string
	 */
	var $tree_type = 'category';

	/**
	 * @see Walker::$db_fields
	 * @since 2.1.0
	 * @todo Decouple this
	 * @var array
	 */
	var $db_fields = array ('parent' => 'parent', 'id' => 'term_id');

	/**
	 * @see Walker::start_lvl()
	 * @since 2.1.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of category. Used for tab indentation.
	 * @param array $args Will only append content if style argument value is 'list'.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 'list' != $args['style'] )
			return;

		$indent = str_repeat("\t", $depth);
		$output .= "$indent<ul class='children'>\n";
	}

	/**
	 * @see Walker::end_lvl()
	 * @since 2.1.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of category. Used for tab indentation.
	 * @param array $args Will only append content if style argument value is 'list'.
	 */
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 'list' != $args['style'] )
			return;

		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}

	/**
	 * @see Walker::start_el()
	 * @since 2.1.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $category Category data object.
	 * @param int $depth Depth of category in reference to parents.
	 * @param array $args
	 */
	function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
		extract($args);

		$cat_name = esc_attr( $category->name );
		$cat_name = apply_filters( 'list_cats', $cat_name, $category );
                $rel .= $category->slug;
		//$output .=  ;
                            
		$link = '<a rel="'.$rel.'" href="' . esc_url( get_term_link($category) ) . '" ';
		if ( $use_desc_for_title == 0 || empty($category->description) )
			$link .= 'title="' . esc_attr( sprintf(__( 'View all posts filed under %s' ), $cat_name) ) . '"';
		else
			$link .= 'title="' . esc_attr( strip_tags( apply_filters( 'category_description', $category->description, $category ) ) ) . '"';
		$link .= '>';
		$link .= $cat_name . '</a>';

		if ( !empty($feed_image) || !empty($feed) ) {
			$link .= ' ';

			if ( empty($feed_image) )
				$link .= '(';

			$link .= '<a href="' . esc_url( get_term_feed_link( $category->term_id, $category->taxonomy, $feed_type ) ) . '"';

			if ( empty($feed) ) {
				$alt = ' alt="' . sprintf(__( 'Feed for all posts filed under %s' ), $cat_name ) . '"';
			} else {
				$title = ' title="' . $feed . '"';
				$alt = ' alt="' . $feed . '"';
				$name = $feed;
				$link .= $title;
			}

			$link .= '>';

			if ( empty($feed_image) )
				$link .= $name;
			else
				$link .= "<img src='$feed_image'$alt$title" . ' />';

			$link .= '</a>';

			if ( empty($feed_image) )
				$link .= ')';
		}

		if ( !empty($show_count) )
			$link .= ' (' . intval($category->count) . ')';

		if ( 'list' == $args['style'] ) {
			$output .= "\t<li";
			$class = 'cat-item cat-item-' . $category->term_id;
			if ( !empty($current_category) ) {
				$_current_category = get_term( $current_category, $category->taxonomy );
				if ( $category->term_id == $current_category )
					$class .=  ' current-cat';
				elseif ( $category->term_id == $_current_category->parent )
					$class .=  ' current-cat-parent';
			}
			$output .=  ' class="' . $class . '"';
			$output .= ">$link\n";
		} else {
			$output .= "\t$link<br />\n";
		}
	}

	/**
	 * @see Walker::end_el()
	 * @since 2.1.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $page Not used.
	 * @param int $depth Depth of category. Not used.
	 * @param array $args Only uses 'list' for whether should append to output.
	 */
	function end_el( &$output, $page, $depth = 0, $args = array() ) {
		if ( 'list' != $args['style'] )
			return;

		$output .= "</li>\n";
	}

}
/*
//adding read more link
function new_excerpt_more($more) {
       global $post;
	return '<p><a href="'. get_permalink($post->ID) . '">Read the Rest...</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');*/

//Add Excerpts to Pages
//add_action('init', 'qib_add_post_excerpt_support');
//
//function qib_add_post_excerpt_support() {
//	add_post_type_support( 'post', 'excerpt' );
//}

//Add them support
add_theme_support( 'post-thumbnails' ); 

//Add Excerpts to Pages
add_action('init', 'qib_add_page_excerpt_support');

function qib_add_page_excerpt_support() {
	add_post_type_support( 'page', 'excerpt' );
}


//New trim excerpt
function new_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]>', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '');//removed <a>
                $excerpt_length = 65;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '');//removed </a>
                        $text = implode(' ', $words);
                }
        }
        return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_trim_excerpt');

/*
// Change what's hidden by default
add_filter('default_hidden_meta_boxes', 'be_hidden_meta_boxes', 10, 2);
function be_hidden_meta_boxes($hidden, $screen) {
	if ( 'post' == $screen->base || 'page' == $screen->base )
		$hidden = array('slugdiv', 'trackbacksdiv', 'commentstatusdiv', 'commentsdiv', 'authordiv', 'revisionsdiv','categorydiv');
		// removed 'postexcerpt', 'postcustom',
	return $hidden;
}*/

////Add Excerpts to Pages
//add_action('template_redirect', 'qib_redirect');
//
//function qib_redirect(){
//    
//    if($_GET['page_id'] == 26){
//        //echo"location:".get_bloginfo("wpurl")."?cat=0";
//
//        header("location:".get_bloginfo("wpurl")."/?cat=1");
//    }
//}

//add_image_size('blog-list-size',320,9999,false);
add_image_size('blog-list-size',390,9999, true);
add_image_size('blog-deets-size',420,9999, true);

add_post_type_support( 'page', 'excerpt' );
?>