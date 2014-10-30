<?php
/**
 * Undolog Theme functions
 *
 * @autor Giovambattista Fazioli
 */

// [gist id="ID" file="FILE"]
function gist_shortcode( $atts )
{
  return sprintf( '<script src="https://gist.github.com/%s.js%s"></script>', $atts['id'], $atts['file'] ? '?file=' . $atts['file'] : '' );
}

add_shortcode( 'gist', 'gist_shortcode' );

// Remove this function if you don't want autoreplace gist links to shortcodes
function gist_shortcode_filter( $content )
{
  return preg_replace( '/https:\/\/gist.github.com\/([\d]+)[\.js\?]*[\#]*file[=|_]+([\w\.]+)(?![^<]*<\/a>)/i', '[gist id="${1}" file="${2}"]', $content );
}

add_filter( 'the_content', 'gist_shortcode_filter', 999 );

/**
 * Tell WordPress to run twentyeleven_setup() when the 'after_setup_theme' hook is run.
 */
add_action('after_setup_theme', 'undolog_setup');

if (!function_exists('undolog_setup') ) :
	 function undolog_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load jQuery latest version
	if (!function_exists('core_mods')) {
		function core_mods() {
			if (!is_admin()) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

	// Clean up the <head>
	function removeHeadLinks() {
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
	}

	add_action('init', 'removeHeadLinks');
	remove_action('wp_head', 'wp_generator');


	// Add default posts and comments RSS feed links to <head>.
	add_theme_support('automatic-feed-links');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu('primary', 'Primary Menu');

	// Add support for a variety of post formats
	add_theme_support('post-formats', array(
										   'aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat',
										   'video')); // Add 3.1 post format theme support.

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support('post-thumbnails');

	if (function_exists('register_sidebar')) {
		register_sidebar(array(
							  'name' => 'Sidebar Post', 'id' => 'sidebar-widgets',
							  'description' => 'Sidebar for Posts',
							  'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',
							  'before_title' => '<h2>', 'after_title' => '</h2>'));

		register_sidebar(array(
							  'name' => 'Sidebar Page', 'id' => 'sidebar-pages',
							  'description' => 'Sidebar for Page',
							  'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',
							  'before_title' => '<h2>', 'after_title' => '</h2>'));

		register_sidebar(array(
							  'name' => 'Sidebar Archivi', 'id' => 'sidebar-archives',
							  'description' => 'Sidebar for Archives',
							  'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',
							  'before_title' => '<h2>', 'after_title' => '</h2>'));

		register_sidebar(array(
							  'name' => 'Sidebar Footer', 'id' => 'sidebar-footer',
							  'description' => 'Sidebar for Footer',
							  'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',
							  'before_title' => '<h2>', 'after_title' => '</h2>'));

		register_sidebar(array(
							  'name' => 'Sidebar Search', 'id' => 'sidebar-search',
							  'description' => 'Sidebar Search Result',
							  'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>',
							  'before_title' => '<h2>', 'after_title' => '</h2>'));

	}
}
endif; // undolog_setup

