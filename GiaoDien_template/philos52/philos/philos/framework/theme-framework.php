<?php
/**
 * Nileforest Framework
 *
 * @package   Nileforest Framework
 * @author    Nileforest <http://nileforest.com>
 * 
 */


	/*
	 * Loads the Options Panel
	 *
	 * If you're loading from a child theme use stylesheet_directory
	 * instead of template_directory
	 */
	get_template_part( '/framework/options', 'framework' );		
	
	// add theme function
	get_template_part( '/framework/theme','functions');
		
	// add theme styles admin option
	get_template_part( '/framework/theme','setting');
	
	/*** plugin */
	get_template_part( '/framework/plugins/theme-plugins', 'install' );	

/**** Theme Default Setting ****/
function theme_default_options()
{	
	add_option("options-framework-theme", array(
			//General Settings 
			'body_layout'=>'fullwidth',
			'header_style_topbar' => 'yes',
			'body_typography'=>array('size'=>'14px','face'=>'Open Sans','style'=>'normal','color'=>'#333333'),
			'body_backgroud_color'=>'',
			'body_backgroud_image'=>'',
			'body_backgroud_repeat'=>'no-repeat',
			'body_backgroud_position'=>'center top',
			'h1_font_family'=>'plesae-select',
			'h2_font_family'=>'plesae-select',
			'h3_font_family'=>'plesae-select',
			'h4_font_family'=>'plesae-select',
			'h5_font_family'=>'plesae-select',
			'h6_font_family'=>'plesae-select',
			'btn_font_family'=>'plesae-select',
			'lbl_font_family'=>'plesae-select',
			'paragraph_font_family'=>'plesae-select',
			'alt_font_family'=>'plesae-select',
			
			//Header Settings 
			'header_style'=>'fixed',
			'header_text_style' => 'no',
			'header_text'=>'',			
			'logo_upload'=> get_stylesheet_directory_uri()."/framework/images/logo_black.png",
			'logo_alt'=>'Philos',
			'site_description'=>'no',
			'header_buy_now'=>'no',
			'buynow_label'=>'Buy Now',
			'buynow_link'=>'#',
			'header_search_btn'=>'yes',
			'header_wishlist_btn'=>'yes',
			'header_addtocart_btn'=>'yes',
			
			//Footer Settings			
			'footer_copyright'=>'&copy; <a href="http://www.nileforest.com/" target="_blank">NileForest</a> Philos Responsive Woocommerce Theme 2018',			
			'footer_payment_show_hide'=>'yes',
			'footer_payment_img'=> get_stylesheet_directory_uri()."/framework/images/payment_logos.png",
			'footer_widget'=>'yes',			
			'popup_btn'=>'no',
			'popup_backgroud_color'=>'#f8f8f8',
			'popup_backgroud_image'=> get_stylesheet_directory_uri()."/framework/images/newsletter_popup_bg.png",
			'popup_backgroud_repeat'=>'no-repeat',
			'popup_backgroud_position'=>'top right',			
			'newsletter_text' => '<h3 class="mb-40">Join Our Mailing List</h3>
				<p class="black mb-20">But I must explain to you how all this mistaken <br> idea of denouncing pleasure pain. </p>
				<label class="mt-20">Sign up For Exclusive Updates, New Arrivals <br> And Insider-Only Discount.</label>',
			
			//Blog Settings
			'blog_single_breadcrumb'=>'yes',
			'blog_single_layout'=>'right-sidebar',
			
			//Woocommerce Settings			
			'signle_page_sidebar'=>'no-sidebar',
			'product_quick_view' => 'yes',						

			//Extra Settings
			'option_back_to_top' => 'yes',
			'option_remove_query_string' =>'no',
			)); 
}
add_action('init', 'theme_default_options');
?>