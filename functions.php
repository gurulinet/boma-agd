<?php
/**
 * boma_agd functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package boma_agd
 */

if ( ! function_exists( 'boma_agd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function boma_agd_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on boma_agd, use a find and replace
	 * to change 'boma_agd' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'boma_agd', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'boma_agd' ),
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
	add_theme_support( 'custom-background', apply_filters( 'boma_agd_custom_background_args', array(
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
add_action( 'after_setup_theme', 'boma_agd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function boma_agd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'boma_agd_content_width', 640 );
}
add_action( 'after_setup_theme', 'boma_agd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function boma_agd_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'boma_agd' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'boma_agd' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'boma_agd_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function boma_agd_scripts() {
	wp_enqueue_style( 'boma_agd-style', get_stylesheet_uri() );

	wp_enqueue_script( 'boma_agd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'boma_agd-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'boma_agd_scripts' );

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

// Stores
if(!function_exists('allowedHtmlForMaps')){
	function allowedHtmlForMaps()
	{
		return  array(
			'iframe' => array(
				'src' => array(),
				'width' => array(),
				'height' => array(),
				'style' => array(),
			),
		);
	}
}

if(!function_exists('ksesShopAddresses')){
	function ksesShopAddresses()
	{
		return array(
			'br' => array(),
			'span' => array(),
		);
	}
}

// Hurtownia
if(!function_exists('hurtowniaOptions')){
	function hurtowniaOptions()
	{
		return array(
			'storesTitle' => get_field('stores-title'),
			'hurtownia' => array(
				'title' => get_field('shop_hurtownia_title'),
				'address' => get_field('shop_hurtownia_address'),
				'image' => get_field('shop_hurtownai_tiny_image'),
				'description' => get_field('shop_hurtownia_description'),
				'maps' => get_field('hurtownia_google_maps'),
				'images' => array(
					'right' => get_field('right_mini_hurtownia'),
					'left' => get_field('left_mini_hurtownia'),
				)
			),
		);
	}
}
// Pewex
if(!function_exists('pewexOptions')){
	function pewexOptions()
	{
		return array(
			'pewex' => array(
				'title' => get_field('shop_pewex_title'),
				'address' => get_field('shop_pewex_address'),
				'description' => get_field('shop_pewex_description'),
				'maps' => get_field('pewex_maps'),
				'images' => array(
					'left' => get_field('left_mini_pewex'),
					'right' => get_field('right_mini_pewex'),
				),
			),
		);
	}
}
// Lazni
if(!function_exists('lazniOptions')){
	function lazniOptions()
	{
		return array(
			'lazni' => array(
				'title' => get_field('shop_lazni_title'),
				'address' => get_field('shop_lazni_address'),
				'description' => get_field('shop_lazni_description'),
				'maps' => get_field('lazni_maps'),
				'images' => array(
					'left' => get_field('left_mini_lazni'),
					'right' => get_field('right_mini_lazni'),
				),
			),
		);
	}
}
// Katedra
if(!function_exists('katedraOptions')){
	function katedraOptions()
	{
		return array(
			'katedra' => array(
				'title' => get_field('shop_katedra_title'),
				'address' => get_field('shop_katedra_address'),
				'description' => get_field('shop_katedra_description'),
				'maps' => get_field('katedra_maps'),
				'images' => array(
					'left' => get_field('left_mini_katedra'),
					'right' => get_field('right_mini_katedra'),
				),
			),
		);
	}
}
// Bulki
if(!function_exists('bulkiOptions')){
	function bulkiOptions()
	{
		return array(
			'bulki' => array(
				'title' => get_field('shop_bulki_title'),
				'address' => get_field('shop_bulki_address'),
				'description' => get_field('shop_bulki_description'),
				'maps' => get_field('bulki_maps'),
				'images' => array(
					'left' => get_field('left_mini_bulki'),
					'right' => get_field('right_mini_bulki'),
				),
			),
		);
	}
}

// Custom Sidebar
if(!function_exists('wSaleOptions')){
	function wSaleOptions()
	{
		return array(
			'pewexShop' => array(
				'title' => get_field('pewex_title'),
				'address' => get_field('pewex_address'),
				'opening' => get_field('pewex_opening'),
				'phone' => get_field('pewex_phone'),
			),
			'hurtowniaShop' => array(
				'title' => get_field('hurtownia_title'),
				'address' => get_field('hurtownia_address'),
				'opening' => get_field('hurtownia_opening'),
				'phone' => get_field('hurtownia_phone'),
			),
			'lazniShop' => array(
				'title' => get_field('lazni_title'),
				'address' => get_field('lazni_address'),
				'opening' => get_field('lazni_opening'),
				'phone' => get_field('lazni_phone'),
			),
			'katShop' => array(
				'title' => get_field('kat_title'),
				'address' => get_field('kat_address'),
				'opening' => get_field('kat_opening'),
				'phone' => get_field('kat_phone'),
			),
			'bulkaShop' => array(
				'title' => get_field('bulka_title'),
				'address' => get_field('bulka_address'),
				'opening' => get_field('bulka_opening'),
				'phone' => get_field('bulka_phone'),
			),
		);
	}
}

// Excerpt
/**
 * @param $more
 * @return string
 */
function moreText($more = '') {
	global $post;
	return '<a href="'. esc_url(get_permalink($post->ID)) . '" class="read-more-agd">' . esc_attr('Czytaj dalej...', 'boma_agd') .'</a>';
}
add_filter('excerpt_more', 'moreText');

// Query posts
if(!function_exists('queryPostsByProduct')){
	function queryPostsByProduct($PostType, $category, $postStatus, $perPage, $paged)
	{
		return query_posts(
			'post_type=' . esc_attr($PostType) . '
			&category_name=' . esc_attr($category) . '
			&post_status=' . esc_attr($postStatus) . '
			&posts_per_page=' . esc_attr($perPage) . '
			&paged=' . $paged
		);
	}
}

if(!function_exists('queryPostsByCustomPosts')){
	function queryPostsByCustomPosts($PostType, $category, $postStatus, $perPage, $paged)
	{
		return query_posts(
			'post_type=' . esc_attr($PostType) . '
			&category_name=' . esc_attr($category) . '
			&post_status=' . esc_attr($postStatus) . '
			&posts_per_page=' . esc_attr($perPage) . '
			&paged=' . $paged
		);
	}
}

if(!function_exists('queryPostsByGazetki')){
	function queryPostsByGazetki($PostType, $category, $postStatus, $perPage, $paged)
	{
		return query_posts(
			'post_type=' . esc_attr($PostType) . '
			&category_name=' . esc_attr($category) . '
			&post_status=' . esc_attr($postStatus) . '
			&posts_per_page=' . esc_attr($perPage) . '
			&paged=' . $paged
		);
	}
}

if(!function_exists('queryPostsInFrontPage')){
	function queryPostsInFrontPage($PostType, $category, $postStatus, $perPage, $paged)
	{
		return query_posts(
			'post_type=' . esc_attr($PostType) . '
			&category_name=' . esc_attr($category) . '
			&post_status=' . esc_attr($postStatus) . '
			&posts_per_page=' . esc_attr($perPage) . '
			&paged=' . $paged
		);
	}
}


if(!function_exists('queryForPostAndGazeta')){
	function queryForPostAndGazeta($PostType, $category, $postStatus, $perPage, $paged)
	{
		return query_posts(
			'post_type=' . esc_attr($PostType) . '
			&category_name=' . esc_attr($category) . '
			&post_status=' . esc_attr($postStatus) . '
			&posts_per_page=' . esc_attr($perPage) . '
			&paged=' . $paged
		);
	}
}

add_action('wp_enqueue_scripts', 'bomaAgdToggleScript');

function bomaAgdToggleScript()
{
	wp_register_script('boma-agd-script', get_template_directory_uri() . '/assets/js/boma.js');
	
	wp_enqueue_script('boma-agd-script');
}

/**
 * @thanks http://wpincode.com/wordpress-uluchshaem-funkciyu-the-excerpt/
 */
if(!function_exists('printExcerpt')){
	function printExcerpt($length)
	{
		global $post;
		$text = $post->post_excerpt;
		if ( '' == $text ) {
			$text = get_the_content('');
			$text = apply_filters('the_content', $text);
			$text = str_replace(']]>', ']]>', $text);
		}
		$text = strip_shortcodes($text); // опционально, рекомендуется
		$text = strip_tags($text); // используйте' $text = strip_tags($text,'<p><a>'); ' если хотите оставить некоторые теги
		
		$text = substr($text,0,$length);
		$excerpt = reverseStrrchr($text, '.', 1);
		if( $excerpt ) {
			echo apply_filters('the_excerpt',$excerpt);
		} else {
			echo apply_filters('the_excerpt',$text);
		}
	}
}

/**
 * @param $haystack
 * @param $needle
 * @param $trail
 * @return bool|string
 */
function reverseStrrchr($haystack, $needle, $trail)
{
	return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}
