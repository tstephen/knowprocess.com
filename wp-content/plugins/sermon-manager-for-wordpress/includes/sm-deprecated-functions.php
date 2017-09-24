<?php
/**
 * Place where functions come to die.
 *
 * @since 2.4.9
 */

defined( 'ABSPATH' ) or die; // exit if accessed directly

/**
 * Outputs Sermon date. Wrapper for sm_the_date()
 *
 * @see        sm_the_date()
 *
 * @param string $d      PHP date format. Defaults to the date_format option if not specified.
 * @param string $before Optional. Output before the date.
 * @param string $after  Optional. Output after the date.
 *
 * @deprecated deprecated since 2.6, use sm_the_date() instead
 */
function wpfc_sermon_date( $d, $before = '', $after = '' ) {
	sm_the_date( $d, $before = '', $after = '' );
}