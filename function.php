<?php

add_action( 'after_setup_theme', 'paperless_theme_support' );
add_action( 'wp_enqueue_scripts', 'paperless_styles' );


if ( ! function_exists( 'paperless_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */

	function paperless_theme_support() {

		/**
		 * Add support from style.
		 */

		add_theme_support( 'wp-block-style' );

		/**
		 * Enqueue editor styles.
		 */

		 add_editor_style( 'style.css' );
	}

	endif;

	/**
	 * Enqueue Styles.
	 */

function paperless_styles() {

	wp_enqueue_style( 'paperless-style', get_stylesheet_uri() );
	wp_enqueue_style( 'paperless-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );

}
