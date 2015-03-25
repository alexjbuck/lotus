<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lotus
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lotus' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'lotus' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'lotus' ), 'lotus', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>'); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Designer: %1$s', 'lotus' ), 'ajb'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
