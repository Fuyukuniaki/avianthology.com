<?php
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form' ) );
	function avianthology_title( $title ) {
		if ( is_front_page() && is_home() ) {
			$title = get_bloginfo( 'name', 'display' );
		} elseif ( is_singular() ) {
			$title = single_post_title( '', false );
		}
		return $title;
	}
	add_filter( 'pre_get_document_title', 'avianthology_title' );

	// function my_scripts_method() {
	// 	wp_deregister_script('jquery');
	// 	wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
	// }
	// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
	
	function avianthology_script() {
		// wp_enqueue_style( 'ress', '//unpkg.com/modern-css-reset/dist/reset.min.css', array() );
		wp_enqueue_style( 'avianthology', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
		wp_enqueue_script('jQuery', '//code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1' );
		wp_enqueue_script('javascript',  get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0' );
	}
	add_action( 'wp_enqueue_scripts', 'avianthology_script' );

	function avianthology_theme_add_editor_styles() {
		add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
	}
	add_action( 'admin_init', 'avianthology_theme_add_editor_styles' );
	function new_excerpt_more($more) {
		return ' ';
	}