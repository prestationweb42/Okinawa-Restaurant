<?php

/**
 * Scripts Loading
 */
// Version Script Number
define('CHILD_VERSION', '1.0.2');

// Scripts
function child_enqueue_styles()
{
	// Styles
	wp_enqueue_style('child-main-style-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), CHILD_VERSION, 'all');
	wp_enqueue_style('child-main-style', get_stylesheet_directory_uri() . '/styles/cleaned/style.css', array('child-main-style-bootstrap'), CHILD_VERSION, 'all');
	// FontAwesome
	wp_register_style('Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
	wp_enqueue_style('Font_Awesome');
	// Scripts
	wp_enqueue_script('child-main-script-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), CHILD_VERSION, true);
	wp_enqueue_script('child-main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), CHILD_VERSION, true);
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles');

/**
 * Add custom functions here
 */
function child_enqueue_functions()
{
	// Image mise en avant
	add_theme_support('post-thumbnails');

	// Title Tag
	add_theme_support('title-tag');

	// Remove Generator Wordpress Version
	remove_action('wp_head', 'wp_generator');

	// Remove French guillement
	remove_filter('the_content', 'wptexturize');
}
add_action('after_setup_theme', 'child_enqueue_functions');

/**
 * Include Menu Navwalker 
 */
require_once('includes/bs5_Walker.php');

/**
 * Function list article -> date, category, tag, author 
 */
function display_attributs_articles($datetime, $cat, $tag, $author, $comment)
{
	$chaine = 'Publié le : ';
	$chaine .= $datetime;
	$chaine .= ', catégorie : ';
	$chaine .= $cat;
	$chaine .= ', étiquette : ';
	$chaine .= $tag;
	$chaine .= ', auteur : ';
	$chaine .= $author;
	$chaine .= ', commentaires : ';
	$chaine .= $comment;
	return $chaine;
}

/**
 * Include Excerpt lenght 
 */
require_once('includes/excerpt.php');
/**
 * Include short code
 */
require_once('includes/short-code.php');
