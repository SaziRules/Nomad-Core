<?php
/**
 * Accessibility enhancements.
 *
 * @package NomadCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add aria-current="page" to the active nav menu item link.
 *
 * @param array   $atts  HTML attributes for the anchor tag.
 * @param WP_Post $item  The current menu item object.
 * @return array
 */
function nomad_nav_aria_current( $atts, $item ) {
	if ( $item->current ) {
		$atts['aria-current'] = 'page';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'nomad_nav_aria_current', 10, 2 );
