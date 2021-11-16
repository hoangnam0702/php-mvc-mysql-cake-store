<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php if(theme_get_option('footer_widget') != 'no'): ?>
	<div class="container">
	  <div class="copyrights">
		<?php if(theme_get_option('footer_copyright') != ''): ?>
			<p class="copyright"><?php echo theme_get_option('footer_copyright'); ?></p>
		<?php endif; ?>
		<?php if(theme_get_option('footer_payment_show_hide') != 'no'): ?>
			<?php if(theme_get_option('footer_payment_img') != ''): ?>
				<p class="payment"><img src="<?php echo esc_url(theme_get_option('footer_payment_img')); ?>" alt="<?php esc_attr( 'payment', 'philos' ); ?>" /></p>
			<?php endif; ?>
		<?php endif; ?>
	  </div>
	</div><!-- #Footer Copyright -->
<?php endif; ?>
