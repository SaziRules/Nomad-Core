<?php
/**
 * Nomad Core — Theme Functions
 *
 * This file is a loader only. Add no logic here.
 *
 * @package NomadCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NOMAD_CORE_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'NOMAD_CORE_DIR', get_template_directory() );
define( 'NOMAD_CORE_URI', get_template_directory_uri() );

require_once NOMAD_CORE_DIR . '/inc/setup.php';
require_once NOMAD_CORE_DIR . '/inc/enqueue.php';
require_once NOMAD_CORE_DIR . '/inc/accessibility.php';
require_once NOMAD_CORE_DIR . '/inc/helpers.php';
