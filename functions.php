<?php
/**
 * Election functions and definitions
 *
 * @package Election
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'election_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function election_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Election, use a find and replace
	 * to change 'election' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'election', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * Disable admin bar for non admin.
	 */
	add_action('after_setup_theme', 'remove_admin_bar');

	function remove_admin_bar() {
		if ( !current_user_can('administrator') && ! is_admin() ) {
			show_admin_bar( false );
		}
	}

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'election' )
	) );

	/**
	 * Enable support for Post Formats
	 */
	// add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'election_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // election_setup
add_action( 'after_setup_theme', 'election_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function election_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'election' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'election_widgets_init' );

/**
 * Register custom post types for Endorsements and Platform
 */
function create_custom_post_types() {
	register_post_type( 'tw_endorsement',
		array(
			'labels' => array(
				'name' => __( 'Endorsements' ),
				'singular_name' => __( 'Endorsement' )
			),
			'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
			'taxonomies' => array( 'internal_category' ),
			'public' => true,
			'exclude_from_search' => true,
			'has_archive' => false,
			'hierarchical' => false,
			'menu_position' => 5
		)
	);

	register_post_type( 'tw_platform_item',
		array(
			'labels' => array(
				'name' => __( 'Platform Items' ),
				'singular_name' => __( 'Platform Item' )
			),
			'supports' => array( 'title', 'editor', 'page-attributes' ),
			'taxonomies' => array( 'internal_category' ),
			'public' => true,
			'exclude_from_search' => true,
			'has_archive' => false,
			'hierarchical' => false,
			'menu_position' => 6
		)
	);
}
add_action( 'init', 'create_custom_post_types' );
add_theme_support( 'post-thumbnails', array( 'tw_endorsement' ) );


/**
 * Register internal category taxonomy
 */
function create_internal_taxonomies() {
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Internal Category', 'taxonomy general name' ),
		'singular_name'              => _x( 'Internal Categories', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Internal Categories' ),
		'all_items'                  => __( 'All Internal Categories' ),
		'parent_item'                => __( 'Parent Internal Categories' ),
		'parent_item_colon'          => __( 'Parent Internal Categories:' ),
		'edit_item'                  => __( 'Edit Internal Category' ),
		'update_item'                => __( 'Update Internal Category' ),
		'add_new_item'               => __( 'Add New Internal Category' ),
		'new_item_name'              => __( 'New Internal Category' ),
		'menu_name'                  => __( 'Internal Categories' ),
	);

	$args = array(
		'hierarchical'               => true,
		'labels'                     => $labels,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'query_var'                  => true,
		'rewrite'                    => array( 'slug' => 'internal_category' ),
	);

	register_taxonomy( 'internal_category', array( 'tw_endorsement', 'tw_platform_item' ), $args );
}
add_action( 'init', 'create_internal_taxonomies', 0 );

/**
 *	Use latest jQuery release
 */
if( !is_admin() ) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ('//codeorigin.jquery.com/jquery-2.0.3.min.js'), false, '');
	wp_enqueue_script('jquery');
}

/**
 * Enqueue scripts and styles
 */
function election_scripts() {
	wp_enqueue_style( 'election-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/foundation/js/vendor/custom.modernizr.js', array(), '20131205' );

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array( 'jquery' ), '20131205', true );
	wp_enqueue_script( 'foundation-accordion', get_template_directory_uri() . '/js/vendor/custom.foundation.accordion.js', array( 'foundation' ), '20131205', true );

	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/vendor/jquery.isotope.min.js', array( 'jquery' ), '20131205', true );
	wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/js/vendor/imagesloaded.pkgd.min.js', array( 'jquery' ), '20131205', true );

	wp_enqueue_script( 'root', get_template_directory_uri() . '/js/root.js', array( 'jquery', 'foundation', 'foundation-accordion', 'isotope', 'images-loaded' ), '20131205', true );

	wp_enqueue_script( 'election-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'election-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'election_scripts' );

function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

function custom_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

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
