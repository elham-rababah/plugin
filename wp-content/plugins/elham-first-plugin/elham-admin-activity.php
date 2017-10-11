<?php
/**
	*Plugin Name: Elham Admins 
	*Plugin url: https://github.com/elham-rababah/plugin
	*Description: This plugin adds some Facebook Open Graph tags to our single posts.
	* Version: 1.0.0
	* Author: Elham Rababh
	* Author URI:https://github.com/elham-rababah
	* License: GPL2 
*/

// Register the Services Post Type
 
function elham_register_servises_post() {
	$labels = array(
		'name' => 'Services',
	    'singular_name' => 'Service',
	    );

    $args = array(
    	'labels' => $labels,
       	'hierarchical' => true,
       	'description' => 'Services filterable by genre',
       	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
       	'taxonomies' => array( 'genres' ),
	    'public' => true,
	    'show_ui' => true,
       	'show_in_menu' => true,
       	'menu_position' => 5,
       	'menu_icon' => 'dashicons-format-audio',
       	'show_in_nav_menus' => true,
       	'publicly_queryable' => true,
       	'exclude_from_search' => false,
       	'has_archive' => true,
       	'query_var' => true,
       	'can_export' => true,
       	'rewrite' => true,
       	'capability_type' => 'post'
       	);
    register_post_type( 'Services', $args );
}

add_action( 'init', 'elham_register_servises_post' );
