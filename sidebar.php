<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package I2M_Theme
 */

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>
<div class="col">
	<aside id="secondary" class="widget-area sidebar-1-area mt-3r card">
	<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</aside><!-- #secondary -->
</div><!-- col-md-4 -->