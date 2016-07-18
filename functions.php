<?php 
	function enqueue_stylesheet(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}

	add_action( 'wp_enqueue_scripts', 'enqueue_stylesheet' );

	add_theme_support('post-thumbnails');
?>