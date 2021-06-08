<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/style.css' );
		wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/style.css', array(), $css_version );
		wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/css/hover.css', array(), $css_version );
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), $css_version );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), $css_version );
		//wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css' );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/script.js' );
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), $js_version, true );
		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), $js_version, true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), $js_version, true );
		wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), $js_version, true);
		wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), $js_version, true );
		wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/main-slider-script.js', array(), $js_version, true);
		wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/appear.js', array(), $js_version, true);
		wp_enqueue_script( 'navTool', get_template_directory_uri() . '/assets/js/nav-tool.js', array(), $js_version, true);
		wp_enqueue_script( 'respond', get_template_directory_uri() . '/assets/js/respond.js', array(), $js_version, true);
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/sticky.js', array(), $js_version, true);
		wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array(), $js_version, true);
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array(), $js_version, true);
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
