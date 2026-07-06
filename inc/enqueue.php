<?php
/**
 * Asset enqueueing and preloading.
 *
 * @package NomadCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nomad_preload_assets() {
	printf(
		'<link rel="preload" href="%s" as="style">' . "\n",
		esc_url( NOMAD_CORE_URI . '/assets/css/style.css' )
	);
}
add_action( 'wp_head', 'nomad_preload_assets', 1 );

function nomad_enqueue_assets() {
	wp_enqueue_style(
		'nomad-core-style',
		NOMAD_CORE_URI . '/assets/css/style.css',
		array(),
		NOMAD_CORE_VERSION
	);

	wp_enqueue_script(
		'nomad-core-main',
		NOMAD_CORE_URI . '/assets/js/main.js',
		array(),
		NOMAD_CORE_VERSION,
		array( 'strategy' => 'defer' )
	);

	wp_script_add_data( 'nomad-core-main', 'type', 'module' );
}
add_action( 'wp_enqueue_scripts', 'nomad_enqueue_assets' );
