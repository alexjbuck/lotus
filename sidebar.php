<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package lotus
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary .widget-area -->


<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>

	<div id="tertiary" class="widget-area" role="supplementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #tertiary .widget-area -->

<?php }; ?>


