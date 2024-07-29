<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>
	<div class="off-canvas-logo text-center">
		<?php $offCanvasLogo = get_template_directory_uri() . '/assets/images/tree.svg'; echo file_get_contents($offCanvasLogo); ?>
	</div>
	<!-- Seperator Bar -->
	<span class="seperator-bar-alt"></span>
	
	<?php joints_top_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
