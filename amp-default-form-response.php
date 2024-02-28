<?php
/**
 * AMP Default Form Response.
 *
 * @package   Google\AMP_Default_Form_Response
 * @author    milindmore22, westonruter, Google, rtCamp
 * @license   GPL-2.0-or-later
 * @copyright 2024 Google Inc.
 *
 * @wordpress-plugin
 * Plugin Name: AMP Default Form Response
 * Plugin URI: https://amp-wp.org/
 * Description: The Plugins will help you set default form Response for AMP.
 * Version: 0.1
 * Author: Milind, Weston, Google, rtCamp
 * Author URI: https://amp-wp.org/
 * License: GNU General Public License v2 (or later)
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Google\AMP_Default_Form_Response;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Whether the page is AMP.
 *
 * @return bool Is AMP.
 */
function is_amp() {
	return function_exists( 'amp_is_request' ) && \amp_is_request();
}

/**
 * Run Hooks.
 */
function add_hooks() {

		/**
		 * Add sanitizers to convert non-AMP functions to AMP components.
		 *
		 * @see https://amp-wp.org/reference/hook/amp_content_sanitizers/
		 */
		add_filter( 'amp_content_sanitizers', __NAMESPACE__ . '\filter_sanitizers' );

}

add_action( 'wp', __NAMESPACE__ . '\add_hooks' );

/**
 * Add sanitizer to fix up the markup.
 *
 * @param array $sanitizers Sanitizers.
 * @return array Sanitizers.
 */
function filter_sanitizers( $sanitizers ) {
	require_once __DIR__ . '/sanitizers/class-sanitizer.php';
	$sanitizers[ __NAMESPACE__ . '\Sanitizer' ] = array();
	return $sanitizers;
}
