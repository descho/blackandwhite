<?php

// Load the Theme CSS
function theme_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
//	wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700|PT+Serif:400,700,400italic,700italic&subset=latin,cyrillic' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load the Theme JS
function theme_js() {
//	wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.js',  array('jquery'), '', true );
	wp_enqueue_script( 'keboard_nav', get_template_directory_uri() . '/js/keyboard-nav.js',  array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// Enable cutom menus
add_theme_support( 'menus' );

// This featured image
add_theme_support( 'post-thumbnails' );

//remove_theme_support( 'editor' );

function remove_box()
{
	remove_post_type_support('post', 'editor');
//	remove_meta_box( 'sqpt-meta-tags' , 'post' , 'normal' ); 
//	remove_post_type_support('post', 'tagsdiv-post_tags');
}
add_action("admin_init", "remove_box");

// function remove_post_tags() {
// 	remove_meta_box( 'sqpt-meta-tags' , 'post' , 'normal' ); 
// }
// add_action( 'admin_init' , 'remove_post_tags' );

?>