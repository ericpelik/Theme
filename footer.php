<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pelik356
 */

namespace Pelik356;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook for bottom of inner wrap.
 */
do_action( 'Pelik356_after_content' );
?>
	</div><!-- #inner-wrap -->
	<?php
	do_action( 'Pelik356_before_footer' );
	/**
	 * Pelik356 footer hook.
	 *
	 * @hooked Pelik356/footer_markup - 10
	 */
	do_action( 'Pelik356_footer' );

	do_action( 'Pelik356_after_footer' );
	?>
</div><!-- #wrapper -->
<?php do_action( 'Pelik356_after_wrapper' ); ?>

<?php wp_footer(); ?>
</body>
</html>
