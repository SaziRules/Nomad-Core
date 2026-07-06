<?php
/**
 * Theme setup — feature support, navigation, content width.
 *
 * @package NomadCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nomad_content_width() {
	$GLOBALS['content_width'] = 1280;
}
add_action( 'after_setup_theme', 'nomad_content_width', 0 );

function nomad_setup() {
	load_theme_textdomain( 'nomad-core', NOMAD_CORE_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
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
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Navigation', 'nomad-core' ),
		)
	);
}
add_action( 'after_setup_theme', 'nomad_setup' );
