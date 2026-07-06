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
	/* Google Fonts — preconnect */
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";

	/* Theme stylesheet preload */
	printf(
		'<link rel="preload" href="%s" as="style">' . "\n",
		esc_url( NOMAD_CORE_URI . '/assets/css/style.css' )
	);
}
add_action( 'wp_head', 'nomad_preload_assets', 1 );

function nomad_enqueue_assets() {
	/* Google Fonts — DM Sans, Barlow Condensed, Inter */
	wp_enqueue_style(
		'nomad-google-fonts',
		'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=Inter:wght@400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'nomad-core-style',
		NOMAD_CORE_URI . '/assets/css/style.css',
		array( 'nomad-google-fonts' ),
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
