<?php
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form' ) );
	function avianthology_title( $title ) {
		if ( is_front_page() && is_home() ) { //トップページなら
			$title = get_bloginfo( 'name', 'display' );
		} elseif ( is_singular() ) { //シングルページなら
			$title = single_post_title( '', false );
		}
			return $title;
		}
	add_filter( 'pre_get_document_title', 'avianthology_title' );

	function avianthology_script() {
		wp_enqueue_style( 'webfonts', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&family=M+PLUS+1:wght@100;300;500;700;800;900&display=swap', array() );
		wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/958005243b.js', array() );
		wp_enqueue_script('react', '//unpkg.com/react@16/umd/react.development.js', array() );
		wp_enqueue_script('react-dom', '//unpkg.com/react-dom@16/umd/react-dom.development.js', array() );
		wp_enqueue_script('javascript',  get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0' );

		wp_enqueue_style( 'ress', '//unpkg.com/modern-css-reset/dist/reset.min.css', array() );
		wp_enqueue_style( 'avianthology', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
	}
	add_action( 'wp_enqueue_scripts', 'avianthology_script' );

	function avianthology_theme_add_editor_styles() {
		add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
	}
	add_action( 'admin_init', 'avianthology_theme_add_editor_styles' );
	function new_excerpt_more($more) {
		return ' ';
	}
	function my_first_block_enqueue() {
		wp_enqueue_script(
			'my-first-block-script',
			//ブロック用スクリプトの URL は get_theme_file_uri() などを使用
			get_theme_file_uri('/my-first-block/block.js'),
			array( 'wp-blocks', 'wp-element' ),
			filemtime(get_theme_file_path('/my-first-block/block.js'))
		);
	}
	add_action( 'enqueue_block_editor_assets', 'my_first_block_enqueue' );