<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package onestopshop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function onestopshop_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'onestopshop_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function onestopshop_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'onestopshop_pingback_header' );


add_action( 'init', 'one_stop_shop_init' );
/**
 * Register a one stop shop post type.
 *
 */
function one_stop_shop_init() {
	$labels = array(
		'name'               => _x( 'One Stop Shop', 'post type general name', 'onestopshop' ),
		'singular_name'      => _x( 'One Stop Shop', 'post type singular name', 'onestopshop' ),
		'menu_name'          => _x( 'One Stop Shop', 'admin menu', 'onestopshop' ),
		'name_admin_bar'     => _x( 'One Stop Shop', 'add new on admin bar', 'onestopshop' ),
		'add_new'            => _x( 'Add New', 'one-stop-shop', 'onestopshop' ),
		'add_new_item'       => __( 'Add New One Stop Shop', 'onestopshop' ),
		'new_item'           => __( 'New One Stop Shop', 'onestopshop' ),
		'edit_item'          => __( 'Edit One Stop Shop', 'onestopshop' ),
		'view_item'          => __( 'View One Stop Shop', 'onestopshop' ),
		'all_items'          => __( 'All One Stop Shop', 'onestopshop' ),
		'search_items'       => __( 'Search One Stop Shop', 'onestopshop' ),
		'parent_item_colon'  => __( 'Parent One Stop Shop:', 'onestopshop' ),
		'not_found'          => __( 'No One Stop Shop found.', 'onestopshop' ),
		'not_found_in_trash' => __( 'No One Stop Shop found in Trash.', 'onestopshop' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'onestopshop' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'one-stop-shop' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'one-stop-shop', $args );
}

function trunck_string($str = "", $len = 150, $more = 'true') {
    if ($str == "") return $str;
    if (is_array($str)) return $str;
    $str = strip_tags($str);	
    $str = trim($str);
    // if it's les than the size given, then return it
    if (strlen($str) <= $len) return $str;
    // else get that size of text
    $str = substr($str, 0, $len);
    // backtrack to the end of a word
    if ($str != "") {
      // check to see if there are any spaces left
      if (!substr_count($str , " ")) {
        if ($more == 'true') $str .= "...";
        return $str;
      }
      // backtrack
      while(strlen($str) && ($str[strlen($str)-1] != " ")) {
        $str = substr($str, 0, -1);
      }
      $str = substr($str, 0, -1);
      if ($more == 'true') $str .= "...";
      if ($more != 'true' and $more != 'false') $str .= $more;
    }
    return $str;
}
