<?php
/**
 * Hamworks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hamdocs
 */

if ( ! function_exists( 'hamdocs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hamdocs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hamdocs, use a find and replace
		 * to change 'hamdocs' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hamdocs', get_template_directory() . '/languages' );

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
				'header' => 'ヘッダーメニュー',
				'footer' => 'フッターメニュー',
				'sns'    => 'SNSメニュー',
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
				'height'      => 446,
				'width'       => 60,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/**
		 * Add support for core custom headers.
		 *
		 * @link https://codex.wordpress.org/Custom_Headers
		 */
		add_theme_support(
			'custom-header',
			array(
				'height'        => 670,
				'width'         => 1440,
				'flex-width'    => true,
				'flex-height'   => true,
				'default-image' => get_template_directory_uri() . '/assets/images/header.png',
			)
		);

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Red', 'hamdocs' ),
					'slug'  => 'red',
					'color' => '#760303',
				),
				array(
					'name'  => __( 'Blue', 'hamdocs' ),
					'slug'  => 'blue',
					'color' => '#031E76',
				),
				array(
					'name'  => __( 'Green', 'hamdocs' ),
					'slug'  => 'green',
					'color' => '#036D76',
				),
				array(
					'name'  => __( 'Purple', 'hamdocs' ),
					'slug'  => 'purple',
					'color' => '#6D0376',
				),
				array(
					'name'  => __( 'Yellow', 'hamdocs' ),
					'slug'  => 'yellow',
					'color' => '#727603',
				),
				array(
					'name'  => __( 'Dark Gray', 'hamdocs' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'hamdocs' ),
					'slug'  => 'light-gray',
					'color' => '#F7F7F7',
				),
			)
		);

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'build/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'hamdocs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hamdocs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hamdocs_content_width', 1000 );
}

add_action( 'after_setup_theme', 'hamdocs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hamdocs_widgets_init() {
	register_sidebar(
		array(
			'name'          => 'フッターウィジェット',
			'id'            => 'widget-footer',
			'description'   => 'フッターに表示させるコンテンツ',
			'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-footer__title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => '詳細ページウィジェット',
			'id'            => 'widget-singular-sidebar',
			'description'   => '詳細ページサイドバーに表示するウィジェット',
			'before_widget' => '<div id="%1$s" class="widget widget-singular-sidebar %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-singular-sidebar__title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'hamdocs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hamdocs_scripts() {
	wp_enqueue_style( 'hamdocs-style', get_theme_file_uri( '/build/css/main.css' ), false, wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'hamdocs-webfont', 'https://fonts.googleapis.com/css?family=Vollkorn&display=swap', false, wp_get_theme()->get( 'Version' ) );

	// wp_enqueue_script( 'hamdocs-script', get_template_directory_uri() . '/build/js/index.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'wp_enqueue_scripts', 'hamdocs_scripts' );

function hamdocs_block_editor_scripts() {
	wp_enqueue_script(
		'hamdocs-editor-script',
		get_template_directory_uri() . '/build/js/add-advanced-style.js',
		array( 'wp-blocks' )
	);
}
add_action( 'enqueue_block_editor_assets', 'hamdocs_block_editor_scripts' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * サイト名の出力
 */
require get_template_directory() . '/inc/site-name.php';

/**
 * アイキャッチの出力
 */
require get_template_directory() . '/inc/the_post_thumbnail.php';

/**
 * アーカイブタイトルの出力内容を調整
 */
require get_template_directory() . '/inc/the_archive_title.php';

/**
 * カテゴリーのリストを出力する
 */
require get_template_directory() . '/inc/category-list.php';
