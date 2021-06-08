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
		wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/css/hover.css' );
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
		//wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css' );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/script.js' );
		wp_enqueue_script( 'fitness-wp', get_template_directory_uri() . '/assets/js/script.js', array(), $js_version, true );
		wp_enqueue_script( 'fitness-wp', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
		wp_enqueue_script( 'fitness-wp', get_template_directory_uri() . '/assets/js/color-settings.js');
		wp_enqueue_script( 'fitness-wp', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
