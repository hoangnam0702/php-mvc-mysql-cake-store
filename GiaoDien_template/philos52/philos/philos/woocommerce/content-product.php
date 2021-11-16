<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<div class="product-item">
		<div class="product-item-inner">
			<div class="product-img-wrap">
				<?php
					/**
					 * woocommerce_before_shop_loop_item_title hook.
					 *
					 * @hooked woocommerce_show_product_loop_sale_flash - 10
					 * @hooked woocommerce_template_loop_product_thumbnail - 10
					 */
					 woocommerce_template_loop_product_link_open();
					 woocommerce_show_product_loop_sale_flash();
					 woocommerce_template_loop_product_thumbnail();
					 woocommerce_template_loop_product_link_close();
				?>
				
			</div><!-- product-img-wrap -->
			<?php //add to cart ?>
			<div class="add-to-link">
				<div class="product-add-button">
					<?php woocommerce_template_loop_add_to_cart();?>
				</div>
			</div>
			<div class="product-button">
				<div class="product-button-inner">
					<?php //wishlist ?>			
					<?php if( class_exists( 'YITH_WCWL' ) ): ?>
						<div class="product-wishlist-button" data-animation="false" rel="tooltip" data-placement="left" data-original-title="<?php _e('Add to Wishlist', 'philos'); ?>">
							<?php add_to_wishlist_in_product();	?>
						</div>
					<?php endif; ?>
					
					<?php //quick view ?>
					<?php if(theme_get_option('product_quick_view') == 'yes'): ?>
					<div class="product-quick-view" rel="tooltip" data-animation="false" data-placement="left" data-original-title="<?php echo _e('Quick View', 'philos'); ?>">
						<a class="quick-product-element" data-id="<?php echo esc_attr($product->get_id()); ?>"></a>
					</div>	
					<?php endif; ?>

					<?php //add to compare ?>	
					<?php if( class_exists( 'YITH_WOOCOMPARE' ) ) :?>
						<div class="product-compare-button" rel="tooltip" data-animation="false" data-placement="left" data-original-title="<?php _e('Add to Compare', 'philos'); ?>">
							<?php add_to_compare_in_product();?>
						</div>
					<?php endif; ?>
				</div><!-- product-button-inner -->
			</div><!-- product-button -->
		</div><!-- product-item-inner -->
		<div class="product-detail">
			<?php
				nileforest_product_tag();
				woocommerce_template_loop_product_link_open();
				do_action( 'woocommerce_shop_loop_item_title' );
				woocommerce_template_loop_product_link_close();
				woocommerce_template_loop_rating();
				nileforest_short_description();
				woocommerce_template_loop_price();
			?>
		</div><!-- product-detail -->
	</div><!-- product-item -->			
</li>
