<?php
/**
 * Theme Functions
 *
 * @package WordPress
 * @subpackage wordpress-cnx
 * @since 1.0.0
 */

 /**
 * Theme setup functions
 *
 * Used to enable specific features of WordPress and other tools.
 */
function ttp_post_theme_setup() {

	// Remove duotone SVG filter injection.
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

	// Load core block styles seperately.
	add_filter( 'should_load_separate_core_block_assets', '__return_true' );
}
add_action( 'after_setup_theme', 'ttp_post_theme_setup' );
