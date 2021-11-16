<?php

/**
 * Nileforest Framework
 *
 * @package   Nileforest Framework
 * @author    Nileforest <http://nileforest.com>
 * 
 */ 

//WooCommerce function

//ajax cart update
if ( ! function_exists( 'woocommerce_header_add_to_cart_fragment' ) ) :
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;	
	ob_start();	
	?>
	<a class="cart-contents-data" id="sidebar_toggle_btn" title="<?php echo _e('View your shopping cart', 'philos');?>">
		<div class="cart-icon"><i aria-hidden="true" class="fa fa-shopping-bag"></i></div>
		<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'philos'), $woocommerce->cart->cart_contents_count); ?>
		<?php echo wp_kses_post($woocommerce->cart->get_cart_subtotal()); ?>
	</a>
	<?php
	$fragments['a.cart-contents-data'] = ob_get_clean();	
	return $fragments;
}

endif;
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');


// Breadcrumbs for common page
if ( ! function_exists( 'nileforest_breadcrumbs' ) ) :
function nileforest_breadcrumbs() {	
	if(!is_front_page()){
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<nav class="breadcrumb-link">','</nav>');
		}
	}

}
endif;

/*****************Woocommerce*******************/
//Woocommerce Breadcrumbs

// Remove WooCommerce Breadcrumbs
remove_action( 'init', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20 );
//Add Yoast Breadcrumbs
add_action( 'woocommerce_before_main_content','nileforest_woocommerce_breadcrumbs', 20, 0 );

if (!function_exists('nileforest_woocommerce_breadcrumbs') ) {
  function nileforest_woocommerce_breadcrumbs() {
    if ( function_exists('yoast_breadcrumb') ) {
    	yoast_breadcrumb('<section class="breadcrumb" itemprop="breadcrumb"><div class="container"><div class="row"><div class="col-md-12"><nav class="breadcrumb-link">','</nav></div></div></div></section>');
	}
  }
}

//Remove PostClass(first,last) From Product
add_filter( 'post_class', 'prefix_post_class', 21, 3 ); //woocommerce use priority 20, so if you want to do something after they finish be more lazy
function prefix_post_class( $classes ) {
	if ( 'product' == get_post_type() ) {
		$classes = array_diff( $classes, array( 'last','first' ) );
	}
	return $classes;
}

// shortcode for wishlist in product
if( class_exists( 'YITH_WCWL' ) ):
	if( ! function_exists( 'add_to_wishlist_in_product' ) ){
		function add_to_wishlist_in_product(){
			echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
		}
	}
add_action( 'woocommerce_after_shop_loop_item', 'add_to_wishlist_in_product', 12 );
endif;

// shortcode for compare product block 
if( class_exists( 'YITH_WOOCOMPARE' ) ):
	if( ! function_exists( 'add_to_compare_in_product' ) ){
    	function add_to_compare_in_product(){
        	echo do_shortcode( "[yith_compare_button]" );
    	}
	}
add_action( 'woocommerce_after_shop_loop_item', 'add_to_compare_in_product', 12 );
endif;

// Add Your Menu Locations
if( ! function_exists( 'register_nileforest_menus' ) ):
	function register_nileforest_menus() {
	  register_nav_menus(
		array(  
			'header_top_menu' => esc_html__( 'Header Top Menus', 'philos' )    	
		)
	  );
	} 
add_action( 'init', 'register_nileforest_menus' );
endif;

// Ajax add to cart count
if( defined( 'YITH_WCWL' ) && ! function_exists( 'yith_wcwl_ajax_update_count' ) ){
	function yith_wcwl_ajax_update_count(){
		wp_send_json( array(
			'count' => yith_wcwl_count_all_products()
		) );
	}
	add_action( 'wp_ajax_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count' );
	add_action( 'wp_ajax_nopriv_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count' );
}

//Read more
if( ! function_exists( 'nileforest_excerpt_more' ) ):
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Nileforest 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */

function nileforest_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link btn btn-xs btn-gray ">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Read More <i class="fa fa-long-arrow-right right" aria-hidden="true"></i>', 'philos' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'nileforest_excerpt_more' );
endif;

//add category page description
if( ! function_exists( 'nileforest_short_description' ) ):
function nileforest_short_description() {    
   ?>
	<div class="product-description">
		<?php echo the_excerpt(); ?>
	</div>
	<?php	
}
endif;

//add category page tag
if( ! function_exists( 'nileforest_product_tag' ) ):
function  nileforest_product_tag(){
	// get product_tags of the current product
	$current_tags = get_the_terms( get_the_ID(), 'product_tag' );
	
	//for each tag we create a list item
	//only start if we have some tags
	if ( $current_tags && ! is_wp_error( $current_tags ) ) { 
		 //create a list to hold our tags		
		echo '<div class="product_tags">';
		
		foreach ($current_tags as $tag) {
			$tag_title = $tag->name; // tag name
			$tag_link = get_term_link( $tag );// tag archive link
			echo '<a class="tag" href="'.esc_url($tag_link).'">'.$tag_title.'</a>';
		}
		echo '</div>';		
	}
}
endif;

//remove cross sell Products
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');

/**
 * Back to top
 */
if ( ! function_exists( 'theme_back_to_top' ) ) {
	function theme_back_to_top() {		
		if(theme_get_option('option_back_to_top') == "yes"): ?>          
           <!-- Scroll Top -->
			<a class="back-top" href="#">
				<i class="fa fa-angle-double-up"></i>
			</a>
			<!-- End Scroll Top -->
		<?php endif;
	}
}
add_action( 'nileforest_end_wrapper_container', 'theme_back_to_top' );



/**
 * Optimize script files
 */
if ( ! function_exists( 'theme_optimize_scripts' ) ) {
	function theme_optimize_scripts() {
		global $wp_scripts;
		if ( ! is_a( $wp_scripts, 'WP_Scripts' ) ) {
			return;
		}
		foreach ( $wp_scripts->registered as $handle => $script ) {
			$wp_scripts->registered[ $handle ]->ver = null;
		}
	}
}


/**
 * Optimize style files
 */
if ( ! function_exists( 'theme_optimize_styles' ) ) {
	function theme_optimize_styles() {
		global $wp_styles;
		if ( ! is_a( $wp_styles, 'WP_Styles' ) ) {
			return;
		}
		foreach ( $wp_styles->registered as $handle => $style ) {			
				$wp_styles->registered[ $handle ]->ver = null;			
		}
	}
}

/**
 * Remove query string in css files & js files
 */

if(theme_get_option('option_remove_query_string') == "yes"):   
	add_action( 'wp_print_scripts', 'theme_optimize_scripts', 999 );
	add_action( 'wp_print_styles', 'theme_optimize_styles', 999 );
endif;

/** Body Pre Loader
*/
if ( ! function_exists( 'theme_wrapper_preload' ) ) {
	function theme_wrapper_preload(){
		$preloader_option = theme_get_option('option_pre_load');
		?>
		<div class="preloader">
        	<div class="theme-loader" id="theme-loader">
            	<div class="lds-css ng-scope">
                	
					<?php
                    if($preloader_option == "custom-image"){
                        echo '<img class="preloader-custom-image" src="' . theme_get_option('option_pre_load_image') . '" alt="' . esc_html__( 'Preaload Image', 'philos' ) . '"/>';			
                    }else{
                        switch ($preloader_option) {
                            case 'loader1':
                                $preload_output = '<div class="lds-spinner"><div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div></div>';
                                break;
            
                            case 'loader2':
                                $preload_output = ' <div class="lds-eclipse">
													 <div></div>
												    </div>';
                                break;
            
                            case 'loader3':
                                $preload_output = ' <div class="lds-ripple">
													<div></div>
													<div></div>
												</div>';                                
								break;
							case 'loader4':
                                $preload_output = '<div class="lds-spin">
													<div>
														<div></div>
													</div>
													<div>
														<div></div>
													</div>
													<div>
														<div></div>
													</div>
													<div>
														<div></div>
													</div>
													<div>
														<div></div>
													</div>
													<div>
														<div></div>
													</div>
													<div>
														<div></div>
													</div>
													<div>
														<div></div>
													</div>
												</div>';                                
								break;
							case 'loader5':
                                $preload_output = '<div class="lds-rolling">
													<div></div>
												</div>';                                
								break;							
							case 'loader6':
                                $preload_output = '<div class="lds-ball">
													<div></div>
												</div>';                                
								break;                            
                            default:
                                $preload_output = '';
                                break;	
                        }
                        echo ent2ncr( $preload_output );		
                    }
                    
                    ?>                   
                  </div>
                 </div>
		</div>
		<?php
	}
}

add_action( 'nileforest_wrapper_before_body', 'theme_wrapper_preload' );

/** Quick View **/
add_action( 'wp_enqueue_scripts', 'quick_view_scripts' );
function quick_view_scripts() {
    //Localize script data to be used in philos-custom.js
    $scriptData = array();
    $scriptData['ajaxurl'] = admin_url( 'admin-ajax.php' );
    $scriptData['action'] = 'QuickviewCustom';

    wp_localize_script( 'philos-custom', 'jquery_data', $scriptData );

}

add_action("wp_ajax_QuickviewCustom", "QuickviewCustom");
add_action("wp_ajax_nopriv_QuickviewCustom", "QuickviewCustom");

function QuickviewCustom(){
	$product_id = $_POST['product_id'];	
    $product = wc_get_product( $product_id );    

    ?>
    <div class="woocommerce">
    	<div class="product">
    		<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-md-12 col-sm-12 mb-sm-30">						
					<?php 
						//main images  				
						if ( has_post_thumbnail($product_id) ) {$featured_img_url = get_the_post_thumbnail_url($product_id,'full'); 
						echo "<div class='product-image-wrapper'>";
							echo "<img src='".esc_url($featured_img_url)."' alt='".esc_attr($product->get_name())."'>";
						echo "</div>";							
					}else{ echo wc_placeholder_img( $size );}?>						
				</div>    			
    			<div class="col-lg-6 col-md-12 col-sm-12">
    				<div class="product-page-content">
    					<h2 class="product-title"><?php echo esc_attr($product->get_name()); ?></h2>
    					<?php
    					$rating_count = $product->get_rating_count();
						$review_count = $product->get_review_count();
						$average      = $product->get_average_rating();

						if ( $rating_count > 0 ) : ?>

							<div class="woocommerce-product-rating">
								<?php echo wc_get_rating_html( $average, $rating_count ); ?>
								<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'philos' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)
								</a>
							</div>

						<?php endif; ?>

    					<p class="price"><?php echo wp_kses_post($product->get_price_html()); ?></p>
    					<div class="woocommerce-product-details__short-description">
    						<p><?php echo wp_kses_post($product->get_short_description()); ?></p>
    					</div>
    					<div class="product_meta">
    						<?php if($product->get_sku()){ ?><span class="sku_wrapper">
    							<?php echo esc_html__( 'SKU : ','philos' ); ?>
    							<span class="sku"><?php echo esc_attr($product->get_sku()); ?></span>
    						</span><?php } ?>
    						<?php if(wc_get_product_term_ids( $product->get_id(), 'product_cat' )){?><span class="posted_in">
    							<?php echo esc_html__( 'Categories : ','philos' ); ?>
    							<?php
	    							$product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );
									$cat_name = '';
									$total_cat = count($product_cats_ids);
									$inc_cat=0;
									foreach( $product_cats_ids as $cat_id ) {
									    $inc_cat++;
									    $term = get_term_by( 'id', $cat_id, 'product_cat' );
									    $cat_name =$term->name;
									    $cat_link = get_term_link( $cat_id );// tag archive link
									    echo '<a class="tag" href="'.esc_url($cat_link).'">'.$cat_name.'</a>';
									    if ($inc_cat != $total_cat){
											echo', ';
										}	
									    
									}
																
								?>
    						</span><?php } ?>
    						<?php if(get_the_terms( $product->get_id(), 'product_tag' )){?><span class="tagged_as">
    							<?php echo esc_html__( 'Tags : ','philos' ); ?>
    							<?php
	    							$current_tags = get_the_terms( $product->get_id(), 'product_tag' );
									$total_tags = count($current_tags);
									$inc_tags=0;
									//for each tag we create a list item						
									if ( $current_tags && ! is_wp_error( $current_tags ) ) { 
										 //create a list to hold our tags
										foreach ($current_tags as $tag) {
											$inc_tags++;
											$tag_title = $tag->name; // tag name
											$tag_link = get_term_link( $tag );// tag archive link
											echo '<a class="tag" href="'.esc_url($tag_link).'">'.$tag_title.'</a>';
											 if ($inc_tags != $total_tags){
											 	 echo', ';
											 }
										}										
									}
								?>
    						</span><?php } ?>
    					<?php if ($product->is_type( 'simple' )) { ?>
							<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
								<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

								<?php
								do_action( 'woocommerce_before_add_to_cart_quantity' );

								woocommerce_quantity_input( array(
									'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
									'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
									'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
								) );

								do_action( 'woocommerce_after_add_to_cart_quantity' );
								?>

								<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

								<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
							</form>
						<?php } ?>

						 <?php if( $product->is_type( 'variable' )) {
	
						  //wp_enqueue_script('wc-add-to-cart-variation');
						do_action( 'woocommerce_before_add_to_cart_form' ); 

						  $attribute_keys = array_keys( $product->get_variation_attributes() );

						  ?>

  <form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->id ); ?>" data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $product->get_available_variations() ) ) ?>">
    <?php do_action( 'woocommerce_before_variations_form' ); ?>

    <?php if(is_null($product->get_available_variations()) && false !== $product->get_available_variations() ) : ?>
      <p class="stock out-of-stock">
        <?php _e( 'This product is currently out of stock and unavailable.', 'philos' ); ?>
      </p>
    <?php else : ?>
      <table class="variations" cellspacing="0">
        <tbody>
          <?php foreach ( $product->get_variation_attributes() as $attribute_name => $options ) : ?>
          <tr>
            <td class="label"><label for="<?php echo sanitize_title( $attribute_name ); ?>"><?php echo wc_attribute_label( $attribute_name ); ?></label></td>
            <td class="value">
              <?php
                $selected = isset( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) ? wc_clean( urldecode( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) ) : $product->get_variation_default_attribute( $attribute_name );
                wc_dropdown_variation_attribute_options( array( 
                		'options' => $options, 
                		'attribute' => $attribute_name, 
                		'product' => $product, 
                		'selected' => $selected 
                		) );  
                echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations">' . esc_html__( 'Clear', 'philos' ) . '</a>' ) ) : '';              
              ?>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>      
      
    <?php endif; ?>

    <?php do_action( 'woocommerce_after_variations_form' ); ?>
    <div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	<?php
	do_action( 'woocommerce_before_add_to_cart_quantity' );

	woocommerce_quantity_input( array(
		'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
		'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
		'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
	) );

	do_action( 'woocommerce_after_add_to_cart_quantity' );
	?>
	
	<button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
  </form>  
  

  <?php } ?>
						 </div>
    				</div>    				
    			</div>
    		</div>
    	</div>
    	</div>
    </div>    	
    <?php
    wp_die();
}

//add text in footer
add_action('nileforest_end_wrapper_container','Quickview_popup',99);
function Quickview_popup(){
   echo "<div class='quickview-popup-data'></div>"; 
}

 // Product Share
add_action( 'woocommerce_share', 'nileforest_woocommerce_product_share', 10, 0 );

if ( ! function_exists( 'nileforest_woocommerce_product_share' ) ) {
	function nileforest_woocommerce_product_share() {	
		if(theme_get_option('product_share_btn') == 'yes'){
			nileforest_woocommerce_share();	
		}
		
	}
}

?>