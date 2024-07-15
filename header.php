<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pelik356
 */

namespace Pelik356;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" <?php Pelik356()->print_microdata( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
/**
 * Pelik356 before wrapper hook.
 */
do_action( 'Pelik356_before_wrapper' );
?>
<div id="wrapper" class="site wp-site-blocks">
	<?php
	/**
	 * Pelik356 before header hook.
	 *
	 * @hooked Pelik356_do_skip_to_content_link - 2
	 */
	do_action( 'Pelik356_before_header' );

	/**
	 * Pelik356 header hook.
	 *
	 * @hooked Pelik356/header_markup - 10
	 */
	do_action( 'Pelik356_header' );

	do_action( 'Pelik356_after_header' );
	?>

	<div id="inner-wrap" class="wrap hfeed kt-clear">
		<?php
		/**
		 * Hook for top of inner wrap.
		 */
		do_action( 'Pelik356_before_content' );
		?>
