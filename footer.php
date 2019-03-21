<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore_2_14_19
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<!-- <div id="paw-bottom-1"></div> -->
			<div id="paw-bottom-2"></div>
			<div id="floating-heart-1"></div>
		<div class="site-info">
			<?php if ( get_theme_mod( 'footer_logo' ) ) : ?>
				<a href='<?php echo esc_url( get_theme_mod( 'footer_logo_link' ) );?>'>
			    <img src='<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				</a>
			<?php endif; ?>
			<p id="footer-copy">
				 <?php echo "Copyright"; echo " "; echo date("Y"); echo " "; echo bloginfo('name'); ?><br>
				 <?php echo "All Rights Reserved"; ?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
