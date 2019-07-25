<?php
/**
 * rclc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rclc
 */

if ( ! function_exists( 'rclc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rclc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rclc, use a find and replace
		 * to change 'rclc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rclc', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rclc' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rclc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'rclc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rclc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rclc_content_width', 640 );
}
add_action( 'after_setup_theme', 'rclc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rclc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rclc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rclc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rclc_widgets_init' );
function rclc_widgets_footer1() {
	register_sidebar(array(
		'name' => esc_html__('Footer 1', 'rclc'),
		'id' => 'footer-1',
		'description' => esc_html__('Add widgets here.', 'rclc'),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'rclc_widgets_footer1');

function rclc_widgets_footer2() {
	register_sidebar(array(
		'name' => esc_html__('Footer 2', 'rclc'),
		'id' => 'footer-2',
		'description' => esc_html__('Add widgets here.', 'rclc'),
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'rclc_widgets_footer2');

/**
 * Enqueue scripts and styles.
 */
function rclc_scripts() {
	wp_enqueue_style( 'rclc-style', get_stylesheet_uri() );

	wp_enqueue_style('rclc-css', get_template_directory_uri() . '/assets/css/main.min.css');

	wp_enqueue_style('rclc-custom-css', get_template_directory_uri() . '/assets/css/custom.css');

	wp_enqueue_script('rclc-jquery-js', get_template_directory_uri() . '/assets/js/vendor/jquery.min.js', array(), '20151215', true);

	wp_enqueue_script('rclc-slick', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', array(), '20151215', true);
	
	wp_enqueue_script('rclc-paroller-js', get_template_directory_uri() . '/assets/js/vendor/jquery.paroller.min.js', array(), '20151215', true);
	
	wp_enqueue_script('rclc-bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), '20151215', true);

	wp_enqueue_script('rclc-filter', get_template_directory_uri() . '/assets/js/vendor/filter.js', array(), '20151215', true);

	wp_enqueue_script('rclc-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true);

	wp_enqueue_script( 'rclc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'rclc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rclc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

// option page
if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}


// custom function

function my_acf_load_value( $value, $post_id, $field ) {
	
	// vars
	$order = array();
	// bail early if no value
	if( empty($value) ) {
		return $value;		
	}
	// populate order
	foreach( $value as $i => $row ) {
		$order[ $i ] = $row['field_5d282ddb94945'];		
	}
	
	// multisort
	array_multisort( $order, SORT_DESC, $value );
	
	
	// return	
	return $value;
	
}

add_filter('acf/load_value/name=slider', 'my_acf_load_value', 10, 3);