<?php
	function my_scripts_method() {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1');
	}
	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
	function avianthology_script() {
		wp_enqueue_style( 'spinner', get_template_directory_uri() .'/assets/css/spinner.css', array() );
		// wp_enqueue_script('jQuery', '//code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1' );
		wp_enqueue_script('javascript', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0' );
		wp_enqueue_style( 'avianthology', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
		wp_enqueue_script('spinner', get_template_directory_uri() . '/assets/js/spinner.js', true );
	}
add_action( 'wp_enqueue_scripts', 'avianthology_script' );


// add_theme_support( 'menus' );
// add_theme_support( 'title-tag' );
// add_theme_support( 'post-thumbnails' );
// add_theme_support( 'html5', array( 'search-form' ) );
// function avianthology_title( $title ) {
// 	if ( is_front_page() && is_home() ) {
// 		$title = get_bloginfo( 'name', 'display' );
// 	} elseif ( is_singular() ) {
// 		$title = single_post_title( '', false );
// 	}
// 	return $title;
// }
// add_filter( 'pre_get_document_title', 'avianthology_title' );

// function avianthology_theme_add_editor_styles() {
// 	add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
// }
// add_action( 'admin_init', 'avianthology_theme_add_editor_styles' );
// function new_excerpt_more($more) {
// 	return ' ';
// }

function new_post_type() {
	register_post_type(
		'author',
		array(
			'label' => '作者',
			'labels' => array(
				'add_new' => '新規追加',
				'edit_item' => '編集',
				'view_item' => '表示',
				'search_items' => '検索',
			),
			'public' => true,
			'hierarchicla' => true,
			'has_archive' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
				'excerpt'
			),
			'menu_position' => 5
		)
	);
	register_taxonomy(
		'author-cat',
		'author',
		array(
			'label' =>  'カテゴリー',
			'labels' => array(
				'popular_items' => 'よく使うカテゴリー',
				'edit_item' => 'カテゴリーを編集',
				'add_new_item' => 'カテゴリーを追加',
				'search_items' =>  'カテゴリーを検索',
			),
			'public' => true,
			'hierarchical' => true,
			'rewrite' => array('slug' => 'author-cat')
		)
	);
	register_taxonomy(
		'author',
		'author',
		array(
			'label' => 'タグ',
			'rewrite' => array('slug' => 'author'),
			'hierarchical' => false,
			'public' => true,
			'show_in_rest' => true,
			'update_count_callback' => '_update_post_term_count',
		)
	);
}
add_action('init', 'new_post_type');
