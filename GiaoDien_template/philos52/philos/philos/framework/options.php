<?php

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */

function nileforest_framework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'Nileforest'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	require get_parent_theme_file_path( '/framework/theme-array.php' );
	$options = array();
	
	//Editor Style
	$wp_editor_settings = array(
		'wpautop' 		=> true, // Default
		'textarea_rows' => 5,
		'tinymce' 		=> array( 'plugins' => 'wordpress,wplink' )
	);

	//General Settings
	$options[] = array(
		'name' => esc_html__( 'General Settings', 'philos' ),
		'type' => 'heading'
	);	

	//Layout Option Fullwidth/Fixed
	$options[] = array(
		'name' 		=> esc_html__( 'Layout Option', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme Layout option.', 'philos' ),
		'id'   		=> 'body_layout',
		'std'		=> $layout_default,
		'type'   	=> 'select',
		'options' 	=> $options_layout	
	);

	//Body Fonts
	$options[] = array(
		'name' 	    => esc_html__( 'Body Typography', 'philos' ),
		'desc'      => esc_html__( 'Define body typography options.', 'philos' ),
		'id'      	=> "body_typography",
		'std' 		=> $typography_defaults,
		'type'      => 'typography',
		'options'   => $typography_options
	);

	//Backgroud Color
	$options[] = array(
		'name' => esc_html__( 'Body Background Color', 'philos' ),
		'desc' => esc_html__( 'Define body color here.', 'philos' ),
		'id'   => 'body_backgroud_color',
		'type' => 'color'
	);

	//Backgroud Image
	$options[] = array(

		'name' => esc_html__( 'Body Background Image', 'philos' ),
		'desc' => esc_html__( 'Upload body backgroud image.', 'philos' ),
		'id'   => 'body_backgroud_image',
		'type' => 'upload'
	);

	//Backgroud Repeat
	$options[] = array(
		'name' 		=> esc_html__( 'Body Background Repeat', 'philos' ),
		'desc' 		=> esc_html__( 'Define body backgroud image repeat.', 'philos' ),
		'id'   		=> 'body_backgroud_repeat',
		'type' 		=> 'select',
		'options' 	=> $options_backgroud_repeat	
	);

	//Backgroud Position
	$options[] = array(
		'name' 		=> esc_html__( 'Body Background Position', 'philos' ),
		'desc' 		=> esc_html__( 'Define body backgroud image position.', 'philos' ),
		'id'   		=> 'body_backgroud_position',
		'type' 		=> 'select',
		'options' 	=> $options_backgroud_position	
	);	

	$options[] = array(
		'name' => esc_html__( 'Font Settings', 'philos' ),
		'type' => 'info'
	);

	//H1 Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'H1 Tag Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme heading H1 tag font family.', 'philos' ),
		'id'   		=> 'h1_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);

	//H2 Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'H2 Tag Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme heading H2 tag font family.', 'philos' ),
		'id'   		=> 'h2_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);

	//H3 Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'H3 Tag Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme heading H3 tag font family.', 'philos' ),
		'id'   		=> 'h3_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);

	//H4 Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'H4 Tag Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme heading H4 tag font family.', 'philos' ),
		'id'   		=> 'h4_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list
	);

	//H5 Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'H5 Tag Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme heading H5 tag font family.', 'philos' ),
		'id'   		=> 'h5_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list
	);

	//H6 Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'H6 Tag Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme heading H6 tag font family.', 'philos' ),
		'id'   		=> 'h6_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);

	//Button Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'Button Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme Button font family.', 'philos' ),
		'id'   		=> 'btn_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);

	//label Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'Label Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme Label font family.', 'philos' ),
		'id'   		=> 'lbl_font_family',
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);

	//Paragraph Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'Paragraph Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme Paragraph font family.', 'philos' ),
		'id'   		=> 'paragraph_font_family',		
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);

	//Alt/Sub Font Family
	$options[] = array(
		'name' 		=> esc_html__( 'Alt/Sub Font Family', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme alt/sub font family.', 'philos' ),
		'id'   		=> 'alt_font_family',		
		'type'   	=> 'select',
		'options' 	=> $google_fonts_list	
	);	

	//Extra Settings
	$options[] = array(
		'name' => esc_html__( 'Extra Settings', 'philos' ),
		'type' => 'heading'
	);

	//Back to Top
	$options[] = array(
		'name' 		=> esc_html__( 'Back To Top', 'philos' ),
		'desc' 		=> esc_html__( 'Turn on to enable the Back To Top script which adds the scrolling to top functionality.', 'philos' ),
		'id'   		=> 'option_back_to_top',
		'type' 		=> 'select',
		'std'  		=> $option_back_to_top_default,
		'options' 	=> $options_back_top,
	);

	//Back to Top
	$options[] = array(
		'name' 		=> esc_html__( 'Remove Query String', 'philos' ),		
		'id'   		=> 'option_remove_query_string',
		'type' 		=> 'select',
		'std'  		=> $option_remove_query_string_default,
		'options' 	=> $option_remove_query,
	);

	//Pre Loading
	$options[] = array(
		'name' => "Pre Loading",
		'desc' => "Display Pre Loading Images when Page Loading.",
		'id'   => "option_pre_load",
		'std'  => "loader1",
		'type' => "images",
		'options' => array(
			'no-loader' => $imagepath . 'loader/off.png',
			'loader1' => $imagepath . 'loader/spinner.gif',
			'loader2' => $imagepath . 'loader/eclipse.gif',
			'loader3' => $imagepath . 'loader/ripple.gif',
			'loader4' => $imagepath . 'loader/spin.gif',
			'loader5' => $imagepath . 'loader/rolling.gif',			
			'loader6' => $imagepath . 'loader/ball.gif',						
			'custom-image' => $imagepath . 'loader/custom-image.png'
			)
	);	

	//Pre Loading Custom Image
	$options[] = array(
		'name' => "Pre Loading Image",
		'desc' => "Display Pre Loading Images when Page Loading.",
		'id'   => "option_pre_load_image",		
		'type' => "upload"		
	);

	//Pre Loading Backgroud Color	
	$options[] = array(
		'name' => esc_html__( 'Pre Loading Background Color', 'philos' ),
		'desc' => esc_html__( 'Define pre loading background color.', 'philos' ),
		'id'   => 'preload_backgroud_color',
		'type' => 'color'
	);

	//Pre Loading Color	
	$options[] = array(
		'name' => esc_html__( 'Pre Loading Color', 'philos' ),
		'desc' => esc_html__( 'Define pre loading color.', 'philos' ),
		'id'   => 'preload_element_color',
		'type' => 'color'
	);	

	//Color Settings
	$options[] = array(
		'name' => esc_html__( 'Color Settings', 'philos' ),
		'type' => 'heading'
	);

	//Primary Color
	$options[] = array(
		'name' 		=> esc_html__( 'Main Color', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme main color.', 'philos' ),
		'id'   		=> 'theme_main_color',
		'type'   	=> 'color'
	);

	//Secondary Color
	$options[] = array(
		'name' 		=> esc_html__( 'Main Hover Color', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme main hover color.', 'philos' ),		
		'id'   		=> 'theme_main_hvr_color',
		'type'   	=> 'color'
	);		

	//Button Text Color
	$options[] = array(
		'name' 		=> esc_html__( 'Main Text Color', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme main text color.', 'philos' ),
		'id'   		=> 'theme_btn_txt_color',
		'type'   	=> 'color'
	);	

	//Button Text Color
	$options[] = array(
		'name' 		=> esc_html__( 'Main Text Hover Color', 'philos' ),
		'desc' 		=> esc_html__( 'Define theme main button text hover color.', 'philos' ),
		'id'   		=> 'theme_btn_hvr_txt_color',
		'type'   	=> 'color'
	);

	//Header Settings
	$options[] = array(
		'name' => esc_html__( 'Header Settings', 'philos' ),
		'type' => 'heading'
	);

	//Header Style
	$options[] = array(
		'name' 		=> esc_html__( 'Header Style', 'philos' ),
		'desc' 		=> esc_html__( 'Define header style.', 'philos' ),
		'id'   		=> 'header_style',
		'type' 		=> 'select',
		'options' 	=> $header_style	
	);	
	
	//Header Top Bar
	$options[] = array(
		'name' 		=> esc_html__( 'Header Topbar', 'philos' ),
		'desc' 		=> esc_html__( 'Show/Hide header Topbar.', 'philos' ),
		'id'   		=> 'header_style_topbar',
		'type' 		=> 'select',
		'std'  		=> $headertopbar_default,
		'options' 	=> $headertopbar_option	
	);
	
	//Header Top Bar
	$options[] = array(
		'name' 		=> esc_html__( 'Display Topbar Text', 'philos' ),
		'desc' 		=> esc_html__( 'Show/Hide header Topbar text.', 'philos' ),
		'id'   		=> 'header_text_style',
		'type' 		=> 'select',
		'std'  		=> $headertextstyle_default,
		'options' 	=> $headertopbar_option	
	);
	
	//Header Top text
	$options[] = array(
		'name' 		=> esc_html__( 'Header Topbar Text', 'philos' ),
		'desc' 		=> esc_html__( 'Define your header topbar text.', 'philos' ),
		'id'   		=> 'header_text',		
		'type' 		=> 'editor',
		'std'  		=> $headertext_default,
		'settings' 	=> $wp_editor_settings
	);
	
	//Display Site Description
	$options[] = array(
		'name' => esc_html__( 'Display Site Description?', 'philos' ),
		'desc' => esc_html__( 'Show/hide Site Description.', 'philos' ),
		'id'   => 'site_description',		
		'options' 	=> $options_site_description,	
		'type' => 'select'
	);	

	//Show/Hide BuyNow Button
	$options[] = array(
		'name' 		=> esc_html__( 'Display Buy Now Button', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide buy now button.', 'philos' ),
		'id'   		=> 'header_buy_now',
		'type'   	=> 'select',
		'std'  		=> $buynowbtn_option,
		'options' 	=> $options_footer_show_hide
	);
	
	//BuyNow Button Text
	$options[] = array(
		'name' 		=> esc_html__( 'Buy Now Button Label', 'philos' ),
		'desc' 		=> esc_html__( 'Define buy now button label.', 'philos' ),
		'id'   		=> 'buynow_label',
		'std'  		=> $buynowbtn_label,
		'type' 		=> 'text'
	);

	//BuyNow Button link
	$options[] = array(
		'name' 		=> esc_html__( 'Buy Now Button Link', 'philos' ),
		'desc' 		=> esc_html__( 'Define buy now button link.', 'philos' ),
		'id'  		=> 'buynow_link',
		'std'  		=> $buynowbtn_link,
		'type' 		=> 'text'
	);

	//Show/Hide Search Button
	$options[] = array(
		'name' 		=> esc_html__( 'Display Search Button', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide search button.', 'philos' ),
		'id'   		=> 'header_search_btn',
		'type'   	=> 'select',
		'std'  		=> $searchbtn_option,
		'options' 	=> $options_footer_show_hide	
	);

	//Show/Hide Wishlist Button
	$options[] = array(
		'name' 		=> esc_html__( 'Display Wishlist Button', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide wishlist button.', 'philos' ),
		'id'   		=> 'header_wishlist_btn',
		'type'   	=> 'select',
		'std'  		=> $wishlistbtn_option,
		'options' 	=> $options_footer_show_hide	
	);

	//Show/Hide Cart
	$options[] = array(
		'name' 		=> esc_html__( 'Display AddToCart Button', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide addtocart button.', 'philos' ),
		'id'   		=> 'header_addtocart_btn',
		'type'   	=> 'select',
		'std'  		=> $addtocartbtn_option,
		'options' 	=> $options_footer_show_hide	
	);

	//Footer option
	$options[] = array(
		'name' => esc_html__( 'Footer Settings', 'philos' ),
		'type' => 'heading'
	);

	
	//footer copyrights
	$options[] = array(
		'name' => esc_html__( 'Footer Copyrights', 'philos' ),
		'desc' => esc_html__( 'Define copyrights text.', 'philos' ),
		'id'   		=> 'footer_copyright',		
		'type' 		=> 'editor',
		'std'  		=> $footercopyright_default,
		'settings' 	=> $wp_editor_settings
	);	

	//footer payment image
	$options[] = array(
		'name' 		=> esc_html__( 'Display Footer Payment Image', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide footer payment image.', 'philos' ),
		'id'   		=> 'footer_payment_show_hide',
		'type'   	=> 'select',
		'std'  		=> $footerpaymentoption_default,
		'options' 	=> $options_footer_show_hide	
	);
	
	$options[] = array(
		'name' => esc_html__( 'Footer Payment Image', 'philos' ),
		'desc' => esc_html__( 'Upload payment image.', 'philos' ),
		'id'   => 'footer_payment_img',
		'std'  => $footerpayment_default,
		'type' => 'upload'
	);

	//show/hide footer widget
	$options[] = array(
		'name' 		=> esc_html__( 'Display Footer Widget', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide footer Widget.', 'philos' ),
		'id'   		=> 'footer_widget',
		'type'   	=> 'select',
		'std'  		=> $footeroption_default,
		'options' 	=> $options_footer_show_hide	
	);
		
	//Social Settings
	$options[] = array(
		'name' => esc_html__( 'Popup Setting', 'philos' ),
		'type' => 'info'
	);

	//Show/Hide Search Button
	$options[] = array(
		'name' 		=> esc_html__( 'Display Popup', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide popup.', 'philos' ),
		'id'   		=> 'popup_btn',
		'type'   	=> 'select',
		'std'  		=> $popupoption_default,
		'options' 	=> $options_footer_show_hide
	);

	//Backgroud Color
	$options[] = array(
		'name' => esc_html__( 'Popup Background Color', 'philos' ),
		'desc' => esc_html__( 'Define popup color here.', 'philos' ),
		'id'   => 'popup_backgroud_color',
		'std'  => $popupcolor_default,
		'type' => 'color'
	);

	//Backgroud Image
	$options[] = array(
		'name' => esc_html__( 'Popup Background Image', 'philos' ),
		'desc' => esc_html__( 'Upload popup backgroud image.', 'philos' ),
		'id'   => 'popup_backgroud_image',
		'std'  => $popupbackgroud_default,
		'type' => 'upload'
	);

	//Backgroud Repeat
	$options[] = array(
		'name' 		=> esc_html__( 'Popup Background Repeat', 'philos' ),
		'desc' 		=> esc_html__( 'Define popup backgroud image repeat.', 'philos' ),
		'id'   		=> 'popup_backgroud_repeat',
		'type' 		=> 'select',
		'std'  		=> $popupbackgroud_repeat_default,
		'options' 	=> $options_backgroud_repeat
	);

	//Backgroud Position
	$options[] = array(
		'name' 		=> esc_html__( 'Popup Background Position', 'philos' ),
		'desc' 		=> esc_html__( 'Define popup backgroud image position.', 'philos' ),
		'id'   		=> 'popup_backgroud_position',
		'type' 		=> 'select',
		'std'  		=> $popupbackgroud_position_default,
		'options' 	=> $options_backgroud_position	
	);		
	
	//Newsletter Popup
	$options[] = array(
		'name' => esc_html__( 'Popup Text', 'philos' ),
		'desc' => esc_html__( 'Define your popup text.', 'philos' ),
		'id'   		=> 'newsletter_text',		
		'type' 		=> 'editor',
		'std'  		=> $popuptext_default,
		'settings' 	=> $wp_editor_settings
	);	

	//Blog setting
	$options[] = array(
		'name' => esc_html__( 'Blog Settings', 'philos' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' 		=> esc_html__( 'Show/Hide Breadcrumb on Blog Single page', 'philos' ),
		'desc' 		=> esc_html__( 'Show/hide Breadcrumb on Blog Single page.', 'philos' ),
		'id'   		=> 'blog_single_breadcrumb',
		'type' 		=> 'select',
		'std'  		=> $options_singleblog_breadcrumb_default,
		'options' 	=> $options_singleblog_breadcrumb
	);

	$options[] = array(
		'name' 		=> esc_html__( 'Display Side on Blog Single page', 'philos' ),
		'desc' 		=> esc_html__( 'Define blog single page layout option.', 'philos' ),
		'id'   		=> 'blog_single_layout',
		'type' 		=> 'select',
		'std'  		=> $options_singleblog_sidebar_default,
		'options' 	=> $options_singleblog_sidebar	
	);	

	//woocommerce setting
	$options[] = array(
		'name' => esc_html__( 'WooCommerce Settings', 'philos' ),
		'type' => 'heading'
	);	

	//display sidebar product page
	$options[] = array(
		'name'  	=>  esc_html__( 'Display Sidebar on Product Page?', 'philos' ),
		'desc' 		=> esc_html__( 'Show or Hide Product Sidebar.', 'philos' ),
		'id'    	=> 'signle_page_sidebar',
		'type'  	=> 'select',
		'std'  		=> $productsidebar_default,
		'options' 	=> $options_sidebar
	);	
	//display Quick view
	$options[] = array(
		'name'  	=>  esc_html__( 'Display Quick View on Product?', 'philos' ),
		'desc' 		=> esc_html__( 'Show or Hide Quick view Product.', 'philos' ),
		'id'    	=> 'product_quick_view',
		'type'  	=> 'select',
		'std'  		=> $productquick_default,
		'options' 	=> $quickview_option
	);	
	
	//display Product Share
	$options[] = array(
		'name'  	=>  esc_html__( 'Display Product Share on Single Product Page?', 'philos' ),
		'desc' 		=> esc_html__( 'Show or Hide Product Share on single product page.', 'philos' ),
		'id'    	=> 'product_share_btn',
		'type'  	=> 'select',
		'std'  		=> $productshare_default,
		'options' 	=> $quickview_option
	);	

	return $options;
}