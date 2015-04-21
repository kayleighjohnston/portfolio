<?php
/**
 * kayleighjohnston functions and definitions
 *
 * @package kayleighjohnston
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'kayleighjohnston_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kayleighjohnston_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kayleighjohnston, use a find and replace
	 * to change 'kayleighjohnston' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'kayleighjohnston', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kayleighjohnston' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kayleighjohnston_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // kayleighjohnston_setup
add_action( 'after_setup_theme', 'kayleighjohnston_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function kayleighjohnston_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'kayleighjohnston' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'kayleighjohnston_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kayleighjohnston_scripts() {
	wp_enqueue_style( 'kayleighjohnston-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'kayleighjohnston-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'kayleighjohnston-style', get_template_directory_uri() . '/style.min.css' );
	wp_enqueue_script( 'kayleighjohnston-vendor', get_template_directory_uri() . '/js/scripts.min.js', array(), '20120206', true );
	wp_enqueue_script( 'kayleighjohnston-custom', get_template_directory_uri() . '/js/main.min.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kayleighjohnston_scripts' );

add_action( 'init', 'kayleighjohnston_posttypes' );
function kayleighjohnston_posttypes() {
	register_post_type( 'projects', array(
		'labels' => array(
			'name' => __( 'Projects' ),
			'singular_name' => __( 'Project' ),
			'search_items' => __( 'Search Project' ),
			'all_items' => __( 'All Projects' ),
			'edit_item' => __( 'Edit Project' ),
			'update_item' => __( 'Update Projects' ),
			'add_new_item' => __( 'New Project' ),
			'menu_name' => __( 'Projects' ),
		),
		'supports' => array(
			'title',
			'thumbnail',
			'editor',
		),
		'rewrite' => array(
			'slug' => 'projects',
			'with_front' => false,
		),
		'public' => true,
		'has_archive' => false,
        'show_in_nav_menus' => true,
	) );
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
