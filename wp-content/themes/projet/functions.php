<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function projet_setup() {
add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 840, 341, array('center','cebter'));
	/*add_theme_support('title-tag');*/
/*	add_theme_support( 'custom-logo', array(
	'height'      => 72,
	'width'       => 72,
	'flex-width'  => false,
) );*/
  /* add_theme_support( 'html5',array('search-form'));
register_nav_menus( array(
		'site-nav'    => __( 'En Haut de page', 'projet' ),
	) );*/
 }
 add_action( 'after_setup_theme', 'projet_setup' );

 function projet_scripts() {
	 //font awesome
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('assets/css/font-awesome.min.css') );
    wp_enqueue_style( 'projet-style', get_stylesheet_uri('assets/css/main.css') );
	  //Html5shiv
    wp_enqueue_script( 'projet-ie8-shiv', get_theme_file_uri('assets/js/ie/html5shiv.js'));
	wp_script_add_data( 'projet-ie8-shiv', 'conditional', 'lte IE 8' );
	
    // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
    wp_enqueue_style( 'projet-ie9', get_theme_file_uri('assets/css/ie9.css'));
	wp_style_add_data( 'projet-ie9', 'conditional', 'lte IE 9' );
    // Load the Internet Explorer 8 specific stylesheet
	wp_enqueue_style( 'projet-ie8', get_theme_file_uri('assets/css/ie8.css'));
	wp_style_add_data( 'projet-ie8', 'conditional', 'lte IE 8' );
	//Script de Footer
	wp_enqueue_script( 'projet-jquery', get_theme_file_uri( 'assets/js/jquery.min.js'), array(),4.7,true);
	wp_enqueue_script( 'projet-skrolly', get_theme_file_uri( 'assets/js/jquery.scrolly.min.js'), array(),4.7,true);
	wp_enqueue_script( 'projet-skrolex', get_theme_file_uri( 'assets/js/jquery.scrollex.min.js'), array(),4.7,true);
	wp_enqueue_script( 'projet-skel', get_theme_file_uri( 'assets/js/skel.min.js' ), array(),4.7,true );
	wp_enqueue_script( 'projet-util', get_theme_file_uri( 'assets/js/util.js'), array(),4.7,true);
	wp_enqueue_script( 'projet-respond', get_theme_file_uri( 'assets/js/ie/respond.min.js'), array(),4.7,true);
	wp_script_add_data( 'projet-respond', 'conditional', 'lte IE 8' );
	wp_enqueue_script( 'projet-main', get_theme_file_uri( 'assets/js/main.js'), array(),4.7,true);

}
add_action( 'wp_enqueue_scripts', 'projet_scripts' );

function wpdocs_codex_book_init() {
    $labels = array(
        'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Books', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Book', 'textdomain' ),
        'new_item'              => __( 'New Book', 'textdomain' ),
        'edit_item'             => __( 'Edit Book', 'textdomain' ),
        'view_item'             => __( 'View Book', 'textdomain' ),
        'all_items'             => __( 'All Books', 'textdomain' ),
        'search_items'          => __( 'Search Books', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
        'not_found'             => __( 'No books found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'book', $args );
}
 
add_action( 'init', 'wpdocs_codex_book_init' );
 

?>