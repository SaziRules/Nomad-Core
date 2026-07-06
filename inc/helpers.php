<?php
/**
 * Utility functions.
 *
 * @package NomadCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render a responsive image with lazy loading defaults.
 *
 * @param int    $attachment_id WordPress attachment ID.
 * @param string $size          Registered image size. Default 'large'.
 * @param array  $args          Additional args passed to wp_get_attachment_image().
 * @return string HTML img element, or empty string if no ID given.
 */
function nomad_get_image( $attachment_id, $size = 'large', $args = array() ) {
	if ( empty( $attachment_id ) ) {
		return '';
	}

	$defaults = array(
		'loading' => 'lazy',
		'decoding' => 'async',
	);

	return wp_get_attachment_image( $attachment_id, $size, false, array_merge( $defaults, $args ) );
}
