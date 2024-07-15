<?php
/**
 * The main archive template file
 *
 * @package Pelik356
 */

namespace Pelik356;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

Pelik356()->print_styles( 'Pelik356-content' );
/**
 * Hook for main archive content.
 */
do_action( 'Pelik356_archive' );

get_footer();