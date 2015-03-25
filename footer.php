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
		<div class="social-info">
			<a href="https://www.facebook.com/dhavalayoga" target="_blank"><i class="fa fa-facebook-square"></i></a>
			<a href="https://www.instagram.com/dhavala_jaye" target="_blank"><i class="fa fa-instagram"></i></a>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lotus' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'lotus' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'lotus' ), '<a href="https://github.com/alexjbuck/lotus">lotus</a>', 'Alexander J Buck'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
