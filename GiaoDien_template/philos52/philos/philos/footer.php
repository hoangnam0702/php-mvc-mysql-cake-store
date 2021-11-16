<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Nileforest
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
		<?php if(theme_get_option('footer_widget') != 'no'): ?>
		<footer class="footer section-padding" role="contentinfo">			
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );				

				get_template_part( 'template-parts/footer/site', 'info' );
				?>		
		</footer><!-- #colophon -->
		<?php endif; ?>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php do_action( 'nileforest_end_wrapper_container' ); ?>
<?php wp_footer(); ?>
</body>
</html>
