<?php
/**
 * BeautyTech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BeautyTech
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.6' );
}

add_image_size( 'event-thumbnail', 400, 200, true );


if ( ! function_exists( 'beautytech_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function beautytech_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on BeautyTech, use a find and replace
		 * to change 'beautytech' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'beautytech', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'beautytech' ),
				'footer-products' => esc_html__( 'Footer Products', 'beautytech' ),
				'footer-company' => esc_html__( 'Footer Company', 'beautytech' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'beautytech_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'beautytech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function beautytech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'beautytech_content_width', 640 );
}
add_action( 'after_setup_theme', 'beautytech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function beautytech_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'beautytech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'beautytech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'beautytech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function beautytech_scripts() {
	wp_enqueue_style( 'beautytech-swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'beautytech-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'beautytech-style', 'rtl', 'replace' );

	wp_enqueue_script( 'beautytech-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'beautytech-swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'beautytech-recaptcha', 'https://www.google.com/recaptcha/api.js?onload=onloadCallback', array(), _S_VERSION, true );
	wp_enqueue_script( 'beautytech-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'beautytech-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'beautytech-gmaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA4Rzk8Au7af8rc4AbXRcwJS5fccSEGmso&callback=initMap', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'beautytech_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * ACF setting
 */
require get_template_directory() . '/inc/acf-setting.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Create post type - elements
 */

add_action( 'init', 'true_register_taxonomy' );
 
function true_register_taxonomy() {
 
	$args = array(
		'labels' => array(
			'menu_name' => 'Categories'
		),
		'public' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'product-categories' ),
	);
	register_taxonomy( 'product-categories', array('products'), $args );
}

add_action( 'init', 'true_register_cpt' );
 
// function true_register_cpt() {
 
// 	$args = array(
// 		'labels' => array(
// 			'menu_name' => 'Products'
// 		),
// 		'public' => true,
// 		'menu_icon' => 'dashicons-cart',
// 	);
// 	register_post_type( 'products', $args );
// }

// add_action( 'init', 'register_post_types' );
// function register_post_types(){
// 	register_post_type( 'products', [
// 		'label'  => null,
// 		'labels' => [
// 			'menu_name' => 'Products'
// 		],
// 		'menu_icon' => 'dashicons-cart',
// 		'description'         => '',
// 		'public'              => true,
// 		// 'publicly_queryable'  => null, // ?????????????? ???? public
// 		// 'exclude_from_search' => null, // ?????????????? ???? public
// 		// 'show_ui'             => null, // ?????????????? ???? public
// 		// 'show_in_nav_menus'   => null, // ?????????????? ???? public
// 		'show_in_menu'        => null, // ???????????????????? ???? ?? ???????? ????????????
// 		// 'show_in_admin_bar'   => null, // ?????????????? ???? show_in_menu
// 		'show_in_rest'        => null, // ???????????????? ?? REST API. C WP 4.7
// 		'rest_base'           => null, // $post_type. C WP 4.7
// 		'menu_position'       => null,
// 		'menu_icon'           => null,
// 		//'capability_type'   => 'post',
// 		//'capabilities'      => 'post', // ???????????? ???????????????????????????? ???????? ?????? ?????????? ???????? ????????????
// 		//'map_meta_cap'      => null, // ???????????? true ?????????? ???????????????? ?????????????????? ???????????????????? ?????????????????????? ????????
// 		'hierarchical'        => false,
// 		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
// 		'taxonomies'          => ['product-categories'],
// 		'has_archive'         => true,
// 		'rewrite'	      	=> array( 
// 			'slug' => 'products',
// 			'with_front' => false
// 		),
// 		'query_var'           => true,
// 	] );
// }

/**
 * Create post type - elements
 */

add_action( 'init', 'true_register_taxonomy2' );
 
function true_register_taxonomy2() {
 
	$args2 = array(
		'labels' => array(
			'menu_name' => 'Categories'
		),
		'public' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'events-categories' ),
	);

	register_taxonomy( 'events-categories', array('events'), $args2 );
}

// add_action( 'init', 'true_register_cpt2' );
 
// function true_register_cpt() {
 
// 	$args = array(
// 		'labels' => array(
// 			'menu_name' => 'Products'
// 		),
// 		'public' => true,
// 		'menu_icon' => 'dashicons-cart',
// 	);
// 	register_post_type( 'products', $args );
// }

add_action( 'init', 'register_post_types2' );
function register_post_types2(){
	register_post_type( 'events', [
		'label'  => null,
		'labels' => [
			'menu_name' => 'Events'
		],
		'menu_icon' => 'dashicons-cart',
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // ?????????????? ???? public
		// 'exclude_from_search' => null, // ?????????????? ???? public
		// 'show_ui'             => null, // ?????????????? ???? public
		// 'show_in_nav_menus'   => null, // ?????????????? ???? public
		'show_in_menu'        => null, // ???????????????????? ???? ?? ???????? ????????????
		// 'show_in_admin_bar'   => null, // ?????????????? ???? show_in_menu
		'show_in_rest'        => null, // ???????????????? ?? REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // ???????????? ???????????????????????????? ???????? ?????? ?????????? ???????? ????????????
		//'map_meta_cap'      => null, // ???????????? true ?????????? ???????????????? ?????????????????? ???????????????????? ?????????????????????? ????????
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['events-categories'],
		'has_archive'         => true,
		'rewrite'	      	=> array( 
			'slug' => 'events',
			'with_front' => false
		),
		'query_var'           => true,
	] );
}

add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

	// ???????????? ???????????????? 'twentyfifteen-script' ????????????????, ?????? ?????? ?????????? ???????????????????? ?? ?????????????? ?? ID 'twentyfifteen-script'
	// 'twentyfifteen-script' ???????????? ???????? ???????????????? ?? ?????????????? ???? ??????????, ?????????? WP ???? ???????????? ???????? ?????????????????? ?????? ??????????????????????
	// ??????????????: ???????????? ???????? ?????? ?????????? ?????????????????? ?? functions.php ?? ?????? ?????????? ?????? ???????????????????????? ??????????????, ?????????? ???????????????????? ??????????????
	wp_localize_script( 'beautytech-script', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);

}

add_action( 'wp_ajax_cform', 'cform_callback' );
add_action( 'wp_ajax_nopriv_cform', 'cform_callback' );
function cform_callback() {
	
	if(get_field('con_email', 'option')) {


		$content = 'Name: ' . $_POST['name'] . "\r\n" . 
							 'Email: ' . $_POST['email'] . "\r\n" . 
							 'Phone: ' . $_POST['phone'] . "\r\n" .
							 'Message: ' . $_POST['messege'] . "\r\n" .
							//  'Product: ' . $_POST['prod'] . "\r\n" .
							//  'Whatsapp: ' . $_POST['what'];

		$headers = 'From: Endolift <info@beautytech.com>' . "\r\n";
		wp_mail(get_field('con_email', 'option'), 'Bewerbungsformular BeautyTech', $content, $headers);
		echo $content;
	}


wp_die();

	// ?????????? ?????????? ?????? ????????, ?????????? ?? ???????????? ???? ???????? ???????????? ??????????????, ???????????? ???? ?????? ???????????????????? ??????????????
	wp_die();
}

//Remove slug products in custom post type

function na_remove_slug( $post_link, $post, $leavename ) {

	if ( 'products' != $post->post_type || 'publish' != $post->post_status ) {
			return $post_link;
	}

	$post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

	return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

	if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
			return;
	}

	if ( ! empty( $query->query['name'] ) ) {
			$query->set( 'post_type', array( 'post', 'products', 'page' ) );
	}
}
add_action( 'pre_get_posts', 'na_parse_request' );