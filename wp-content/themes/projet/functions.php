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
	add_theme_support('title-tag');
	add_theme_support( 'custom-logo', array(
	'height'      => 72,
	'width'       => 72,
	'flex-width'  => false,
) );
   add_theme_support( 'html5',array('search-form'));
register_nav_menus( array(
		'site-nav'    => __( 'En Haut de page', 'future' ),
	) );
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
 

?>