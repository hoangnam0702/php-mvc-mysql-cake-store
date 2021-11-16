<?php

/**
 * Nileforest Framework
 *
 * @package   Nileforest Framework
 * @author    http://nileforest.com/
 * 
 */
// ARRAYS - For Nileforest Framework

/**** Google Fonts Array ****/
$google_fonts_list = array( 
	'plesae-select' 		=> '--Plesae Select--', 
	'Montserrat' 			=> 'Montserrat',  
	'Cookie' 				=> 'Cookie',    
	'Droid Sans' 			=> 'Droid Sans',   
	'Lato' 					=> 'Lato',    
	'Lobster' 				=> 'Lobster',
	'Open Sans' 		  	=> 'Open Sans',	
	'Oswald' 				=> 'Oswald',  
	'PT Sans' 				=> 'PT Sans', 
	'Pacifico' 				=> 'Pacifico',
	'Poppins'				=> 'Poppins', 
	'Roboto' 				=> 'Roboto',
	'Roboto Condensed' 		=> 'Roboto Condensed',    
	'Ubuntu' 				=> 'Ubuntu',
	'Ubuntu Condensed' 		=> 'Ubuntu Condensed'   
);

// Typography Defaults
	$typography_defaults = array(
		'size' => '14px',
		'face' => 'Open Sans',
		'style' => 'normal',
		'color' => '#333333' 
	);

	// Typography Options
	$typography_options = array(
		'sizes' => array( '12','13','14','15','16','16','18','19','20'),
		'faces' => $google_fonts_list,
		'styles' => array( 'normal' => 'Normal','italic' => 'Italic'),				
		'color' => true
	);	

	// Single Product Sidebar Option
	$options_sidebar = array(
		'left-sidebar' => esc_html__( 'Left Sidebar', 'philos'),
		'right-sidebar' => esc_html__( 'Right Sidebar', 'philos'),				
		'no-sidebar'  => esc_html__( 'No Sidebar', 'philos')				
	);

	//Blog Single Sidebar Option
	$options_singleblog_sidebar = array(
		'left-sidebar' => esc_html__( 'Left Sidebar', 'philos'),
		'right-sidebar' => esc_html__( 'Right Sidebar', 'philos'),
		'no-sidebar'  => esc_html__( 'No Sidebar', 'philos')		
	);

	// Footer Bloack Show/Hide
	$options_singleblog_breadcrumb = array(
		'yes' => esc_html__( 'Yes', 'philos'),		
		'no'  => esc_html__( 'No', 'philos')
	);

	// Footer Bloack Show/Hide
	$options_footer_show_hide = array(
		'yes' => esc_html__( 'Yes', 'philos'),	
		'no'  => esc_html__( 'No', 'philos')
	);

	// Footer Bloack Show/Hide
	$options_site_description = array(
		'no'  => esc_html__( 'No', 'philos'),
		'yes' => esc_html__( 'Yes', 'philos')		
	);

	// Back to Top
	$options_back_top = array(
		'no'  => esc_html__( 'No', 'philos'),
		'yes' => esc_html__( 'Yes', 'philos')		
	);

	// Remove Query String
	$option_remove_query = array(
		'no'  => esc_html__( 'No', 'philos'),
		'yes' => esc_html__( 'Yes', 'philos')		
	);		
	
	//Body Background Repeat
	$options_backgroud_repeat = array(
		'no-repeat' => esc_html__( 'no-repeat', 'philos'),
		'repeat'  => esc_html__( 'repeat', 'philos'),
		'repeat-x' => esc_html__( 'repeat-x', 'philos'),
		'repeat-y'  => esc_html__( 'repeat-y', 'philos')
	);

	//Body Background Position
	$options_backgroud_position = array(
		'center top' => esc_html__( 'center top', 'philos'),				
		'center center'  => esc_html__( 'center center', 'philos'),
		'center bottom' => esc_html__( 'center bottom', 'philos'),
		'center left'  => esc_html__( 'center left', 'philos'),
		'bottom center' => esc_html__( 'bottom center', 'philos'),				
		'bottom top'  => esc_html__( 'bottom top', 'philos'),
		'bottom left' => esc_html__( 'bottom left', 'philos'),				
		'bottom right'  => esc_html__( 'bottom right', 'philos'),
		'top right'  => esc_html__( 'top right', 'philos'),
		'top bottom'  => esc_html__( 'top bottom', 'philos'),
		'top left'  => esc_html__( 'top left', 'philos'),
	);

	//Body Background Repeat
	$options_layout = array(
		'fullwidth' => esc_html__( 'Full Width', 'philos'),			
		'boxed'  	=> esc_html__( 'Boxed', 'philos')
	);

	//Header Style
	$header_style = array(	
		'fixed' 	=> esc_html__( 'Fixed', 'philos'),				
		'normal'  	=> esc_html__( 'Normal', 'philos')
	);
	
	// Quick view Show/Hide
	$quickview_option = array(
		'yes' => esc_html__( 'Yes', 'philos'),	
		'no'  => esc_html__( 'No', 'philos')
	);
	
	// Heder Topbar view Show/Hide
	$headertopbar_option = array(
		'yes' => esc_html__( 'Yes', 'philos'),
		'no'  => esc_html__( 'No', 'philos')
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	//default option
	// If using image radio buttons, define a directory path
	
	$imagepath =  THEME_FRAMEWORK_DIR.'images/';
	//general setting
	$layout_default = 'fullwidth'; 					//set default value of layout
	$headertopbar_default = "yes";        // quick view show hide
	$headertextstyle_default = "no";        // quick view show hide
	//header setting
	$headertext_default = '<i class="fa fa-phone left" aria-hidden="true"></i>Customer Support <b>0123-456-789</b>'; 				//set default value of phone label
	$buynowbtn_option = "no"; 						//set default value of buy now button show/hide option
	$buynowbtn_label = "Buy Now"; 					//set default value of buy now button text
	$buynowbtn_link = "#"; 							//set default value of buy now button link
	$searchbtn_option = "yes"; 						//set default value of search button show/hide option
	$wishlistbtn_option = "yes"; 					//set default value of wishlist button show/hide option
	$addtocartbtn_option = "yes"; 					//set default value of addtcart button show/hide option

	//footer setting	 										
	$footercopyright_default = '&copy; <a href="http://www.nileforest.com/" target="_blank">NileForest</a> Philos Responsive Woocommerce Theme 2018';									
	$footerpayment_default = $imagepath."payment_logos.png"; 					//set default value of payment image
	$footeroption_default = "yes"; 												//set default value of footer show/hide option
	$footerpaymentoption_default = "yes"; 										//set default value of footer payment images show/hide option

	//popup setting
	$popupoption_default = "no"; 														//set default value of popup show/hide option
	$popupbackgroud_default = $imagepath."newsletter_popup_bg.png";  					//set default value of popup backgroud image
	$popupcolor_default = "#f8f8f8";  													//set default value of popup backgroud color
	$popupbackgroud_position_default = "top right";  									//set default value of popup backgroud position
	$popupbackgroud_repeat_default = "no-repeat";  										//set default value of popup backgroud repeat
	
	$popuptext_default ='<h3 class="mb-40">Join Our Mailing List</h3>
	<p class="black mb-20">But I must explain to you how all this mistaken <br> idea of denouncing pleasure pain. </p>
	<label class="mt-20">Sign up For Exclusive Updates, New Arrivals <br> And Insider-Only Discount.</label>';

	//woocommerce setting	
	$productsidebar_default  = "no-sidebar"; 					//set default value of product page sidebar show/hide option		
	$options_singleblog_sidebar_default = "right-sidebar";		//set default value of blog single page sidebar show/hide option
	$options_singleblog_breadcrumb_default = "yes"; 			//set default value of popup show/hide option	

	//extra setting
	$option_back_to_top_default = "yes";    // Turn on to enable the Back To Top script which adds the scrolling to top functionality
	$option_remove_query_string_default ="no";  //Remove Query String from script and css
	$productquick_default = "yes";        // quick view show hide
	$productshare_default = "no";        // quick view show hide


?>