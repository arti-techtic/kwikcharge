<?php 
function kwikcharge_scripts() {

	// Theme stylesheet.
	
	wp_enqueue_style( 'kc-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'kc-all', get_template_directory_uri() . '/css/all.css' );
	wp_enqueue_style( 'kc-style', get_stylesheet_uri() );
	wp_enqueue_style( 'kc-menu', get_template_directory_uri() . '/css/menu.css' );
	wp_enqueue_style( 'kc-media', get_template_directory_uri() . '/css/media.css' );
	wp_enqueue_style( 'kc-fontawesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'kc-roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
	wp_enqueue_style( 'kc-aos', get_template_directory_uri() . '/css/aos.css' );
	wp_enqueue_style( 'kc-slick', get_template_directory_uri() . '/css/slick.css' );

	// Theme JS.
	wp_enqueue_script( 'kc-jquery-js', get_template_directory_uri() . '/js/jquery-2.1.4.js',array('jquery'),false, true);
	wp_enqueue_script( 'kc-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),false, true);
	wp_enqueue_script( 'kc-main-js', get_template_directory_uri() . '/js/main.js',array('jquery'),false, true);
	wp_enqueue_script( 'kc-modernizr-js', get_template_directory_uri() . '/js/modernizr.js',array('jquery'),false, true);
	wp_enqueue_script( 'kc-menu', get_template_directory_uri() . '/js/jquery.menu-aim.js',array('jquery'),false, true);
	wp_enqueue_script( 'kc-aos', get_template_directory_uri() . '/js/aos.js',array('jquery'),false, true);
	wp_enqueue_script( 'kc-slickjs', get_template_directory_uri() . '/js/slick.min.js',array('jquery'),false, true);
	wp_enqueue_script( 'kc-custom', get_template_directory_uri() . '/js/custom.js',array('jquery'),false, true);
}
add_action( 'wp_enqueue_scripts', 'kwikcharge_scripts' );

function kwikcharge_setup() {
	//load_theme_textdomain( 'kwikcharge' );
	add_theme_support( 'title-tag' );	
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Logo.
	add_theme_support('custom-logo');

	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

}
add_action( 'after_setup_theme', 'kwikcharge_setup' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Kwik Charge Options',
		'menu_title'	=> 'Kwik Charge Options',
		'menu_slug' 	=> 'kc-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Kwik Charge Options',
		'menu_title'	=> 'Kwik Charge Options',
		'parent_slug'	=> 'kc-options',
	));
}
/*Custom menu*/
function register_my_menu() {
  register_nav_menus( array(
            'header-menu' => __( 'Header Menu', 'kwikcharge' ),
            'mobile-menu' => __( 'Mobile Menu', 'kwikcharge' )
        ) );
}
add_action( 'init', 'register_my_menu', 0 );

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');