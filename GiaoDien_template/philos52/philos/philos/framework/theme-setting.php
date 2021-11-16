<?php
/**
 * Nileforest Framework
 *
 * @package   Nileforest Framework
 * @author    Nileforest <http://nileforest.com>
 * 
 */
	//add google font family
	if ( ! function_exists( 'theme_font_family' ) ) :
		function theme_font_family(){
			//body font family
			$body_typography = theme_get_option('body_typography');
			$body_font_family = $body_typography['face'];
			$body_font_family = str_replace(' ', '+', $body_font_family);
			$body_font_size = $body_typography['size'];
			$body_font_style = $body_typography['style'];
			$body_font_color = $body_typography['color'];

			//pre loader	
			$preloader_bg_color = theme_get_option('preload_backgroud_color');
			$preloader_element_color = theme_get_option('preload_element_color');
			
			//body bg color
			$body_bg_color = theme_get_option('body_backgroud_color');
			
			//body backgroud
			$body_bg_img = theme_get_option('body_backgroud_image');
			$body_bg_repeat = theme_get_option('body_backgroud_repeat');
			$body_bg_position = theme_get_option('body_backgroud_position');
			
			//h1 font family
			$h1_font_family = theme_get_option('h1_font_family');
			$h1_font_family = str_replace(' ', '+', $h1_font_family);


			//h2 font family
			$h2_font_family = theme_get_option('h2_font_family');
			$h2_font_family = str_replace(' ', '+', $h2_font_family);
			
			//h3 font family
			$h3_font_family = theme_get_option('h3_font_family');
			$h3_font_family = str_replace(' ', '+', $h3_font_family);


			//h4 font family
			$h4_font_family = theme_get_option('h4_font_family');
			$h4_font_family = str_replace(' ', '+', $h4_font_family);


			//h5 font family
			$h5_font_family = theme_get_option('h5_font_family');
			$h5_font_family = str_replace(' ', '+', $h5_font_family);


			//h6 font family
			$h6_font_family = theme_get_option('h6_font_family');
			$h6_font_family = str_replace(' ', '+', $h6_font_family);


			//button font family
			$btn_font_family = theme_get_option('btn_font_family');
			$btn_font_family = str_replace(' ', '+', $btn_font_family);


			//label font family
			$lbl_font_family = theme_get_option('lbl_font_family');
			$lbl_font_family = str_replace(' ', '+', $lbl_font_family);


			//paragraph font family
			$paragraph_font_family = theme_get_option('paragraph_font_family');
			$paragraph_font_family = str_replace(' ', '+', $paragraph_font_family);


			//alt font family
			$alt_font_family = theme_get_option('alt_font_family');
			$alt_font_family = str_replace(' ', '+', $alt_font_family);

			//color settings
			$main_color     	= theme_get_option('theme_main_color');			
			$main_hvr_color 	= theme_get_option('theme_main_hvr_color');			
			$btn_color     		= theme_get_option('theme_btn_txt_color');
			$btn_hvr_color     	= theme_get_option('theme_btn_hvr_txt_color');
			//$theme_secondary_btn_hvr_color     = theme_get_option('theme_secondary_btn_hvr_color');
			//$theme_secondary_btn_txt_color     = theme_get_option('theme_secondary_btn_txt_color');			


			//merge all font family
			$fonts_array = array($body_font_family,$h1_font_family,$h2_font_family,$h3_font_family,$h4_font_family,$h5_font_family,$h6_font_family,$btn_font_family,$lbl_font_family,$paragraph_font_family,$alt_font_family);
			
			//remove duplicate font family
			$fonts_array = array_unique($fonts_array);
			$google_font_addded=array("0"=>"plesae-select","1"=>"Open+Sans","2"=>"Montserrat","3"=>" ");			
			$google_font_result = array_diff($fonts_array,$google_font_addded);			
			$google_font_array = implode('|', $google_font_result);
			
			//echo $google_font_array;
			if(esc_html($google_font_array) !=""){
				$protocol = is_ssl() ? 'https' : 'http';
				wp_enqueue_style( 'theme-google-fonts', $protocol.'://fonts.googleapis.com/css?family='.esc_html($google_font_array), false );
			}
			?>
			<style type="text/css">
					<?php
					
						//body font family 
						if($body_font_family != "plesae-select" && $body_font_color !=""){?>
						
							body{							
								font-family:"<?php echo esc_html($body_typography['face']); ?>",sans-serif;
								font-size:<?php echo esc_html($body_font_size); ?>;
								font-style:<?php echo esc_html($body_font_style); ?>;
								color:<?php echo esc_html($body_font_color); ?>;
							}
						<?php }
						
						//body color
						if($body_bg_color != ""){?>
							body{	
								background-color:<?php echo esc_html($body_bg_color); ?>;
							}
						<?php }
						
						//body backgroud
						if($body_bg_img != ""){?>
							body{
								background-image:url("<?php echo esc_html($body_bg_img); ?>");
								background-repeat:<?php echo esc_html($body_bg_repeat); ?>;
								background-position:<?php echo esc_html($body_bg_position); ?>;
							}
						<?php }
						
						//h1 font family 
						if($h1_font_family != "plesae-select" && $h1_font_family != ""){?>
							h1{
								font-family:"<?php echo esc_html(theme_get_option('h1_font_family')); ?>",sans-serif;
							}
						<?php }

						//h2 font family 
						if($h2_font_family != "plesae-select" && $h2_font_family != ""){?>
							h2{
								font-family:"<?php echo esc_html(theme_get_option('h2_font_family')); ?>",sans-serif;
							}
						<?php }

						//h3 font family 
						if($h3_font_family != "plesae-select" && $h3_font_family != ""){?>
							h3{
								font-family:"<?php echo esc_html(theme_get_option('h3_font_family')); ?>",sans-serif;
							}
						<?php }
						
						//h4 font family 
						if($h4_font_family != "plesae-select" && $h4_font_family != ""){?>
							h4{
								font-family:"<?php echo esc_html(theme_get_option('h4_font_family')); ?>",sans-serif;
							}
						<?php }

						//h5 font family 
						if($h5_font_family != "plesae-select" && $h5_font_family != ""){?>
							h5{
								font-family:"<?php echo esc_html(theme_get_option('h5_font_family')); ?>",sans-serif;
							}
						<?php }

						//h6 font family 
						if($h6_font_family != "plesae-select" && $h6_font_family != ""){?>
							h6{
								font-family:"<?php echo esc_html(theme_get_option('h6_font_family')); ?>",sans-serif;
							}
						<?php }


						//button font family
						if($btn_font_family != "plesae-select" && $btn_font_family != ""){?>
							.btn, button {
								font-family:"<?php echo esc_html(theme_get_option('btn_font_family')); ?>",sans-serif;
							}
							.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{
								font-family:"<?php echo esc_html(theme_get_option('btn_font_family')); ?>",sans-serif;
							}
						<?php }

						//label font family 
						if($lbl_font_family != "plesae-select" && $lbl_font_family != ""){?>
							label{
								font-family:"<?php echo esc_html(theme_get_option('lbl_font_family')); ?>",sans-serif;
							}
						<?php }

						//paragraph font family 
						if($paragraph_font_family != "plesae-select" && $paragraph_font_family != ""){?>
							p{
								font-family:"<?php echo esc_html(theme_get_option('paragraph_font_family')); ?>",sans-serif;
							}
						<?php }

						//Alt/Sub font family 
						if($alt_font_family != "plesae-select" && $alt_font_family != ""){?>
							.alt-title{
								font-family:"<?php echo esc_html(theme_get_option('alt_font_family')); ?>",sans-serif;
							}
							.blog-title{
								font-family:"<?php echo esc_html(theme_get_option('alt_font_family')); ?>",sans-serif;
								
							}							
						<?php } 

						//Pre Backgroud Loader
						if($preloader_bg_color !=""){ ?>
							.preloader{							    
							    background:<?php echo esc_html(theme_get_option('preload_backgroud_color')); ?>;							    
								}
								<?php 
						}

						//Pre Backgroud Loader
						if($preloader_element_color !=""){ ?>
							.lds-spinner div,.lds-spin div > div,.lds-ball div{							    
							    background:<?php echo esc_html(theme_get_option('preload_element_color')); ?>;							    
							}
							<?php 
						}

						if($preloader_element_color !=""){ ?>
							.lds-eclipse div{							    
							    box-shadow: 0 6px 0 0 <?php echo esc_html(theme_get_option('preload_element_color')); ?>;							    
							}
							<?php 
						}

						if($preloader_element_color !=""){ ?>
							.lds-ripple div:nth-child(1), .lds-ripple div:nth-child(2){							    
							    border-color: <?php echo esc_html(theme_get_option('preload_element_color')); ?>;							    
							}
							<?php 
						}

						if($preloader_element_color !=""){ ?>
							.lds-rolling div, .lds-rolling div:after{							    
							    border-bottom-color: <?php echo esc_html(theme_get_option('preload_element_color')); ?>;
							    border-left-color: <?php echo esc_html(theme_get_option('preload_element_color')); ?>;
							    border-right-color: <?php echo esc_html(theme_get_option('preload_element_color')); ?>;							    
							}
							<?php 
						}
						//main color
						if($main_color != ''){ ?>
							.btn-color,.sidebar-icon-nav ul li .countTip,.sidebar-menu .cart-widget-heading,.cart-action-buttons a.checkout,.back-top.visible, .back-top.visible-fade-out, .back-top:hover,#nlpopup .newsletter-btn,.product-view-switcher .product-view-icon.product-view-icon-active a, .product-view-switcher .product-view-icon a:hover,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,#add_payment_method .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,.woocommerce #payment #place_order, .woocommerce-page #payment #place_order,.widget_search .search-form .search-submit,.categories-filter li a.active, .categories-filter li a:hover,.footer-newsletter .newsletter-btn,.nav-links .page-numbers.current,.blog .pagination span, .blog .pagination a:hover,.woocommerce-store-notice, p.demo_store{
								background:<?php echo esc_html(theme_get_option('theme_main_color')); ?>;	
							}
							::-moz-selection {
								background:<?php echo esc_html(theme_get_option('theme_main_color')); ?>;								
							}							
							::selection {
								background:<?php echo esc_html(theme_get_option('theme_main_color')); ?>;							
							}
							@media screen and (min-width: 992px) {
								.main-navigation li li:hover, .main-navigation li li.focus {
						            background: <?php echo esc_html(theme_get_option('theme_main_color')); ?>;
						        }
							}
						<?php
						}
						
						if($main_color != ''){ ?>
							#mega-menu-wrap-top #mega-menu-top > li.mega-menu-item.mega-current-menu-item > a.mega-menu-link, #mega-menu-wrap-top #mega-menu-top > li.mega-menu-item.mega-current-menu-ancestor > a.mega-menu-link, #mega-menu-wrap-top #mega-menu-top > li.mega-menu-item.mega-current-page-ancestor > a.mega-menu-link,#mega-menu-wrap-top #mega-menu-top > li.mega-menu-item.mega-toggle-on > a.mega-menu-link, #mega-menu-wrap-top #mega-menu-top > li.mega-menu-item > a.mega-menu-link:hover, #mega-menu-wrap-top #mega-menu-top > li.mega-menu-item > a.mega-menu-link:focus,#mega-menu-wrap-top #mega-menu-top > li.mega-menu-megamenu.mega-menu-item.menu-dropdown-icon > ul.mega-sub-menu .row > li.mega-menu-item-has-children li a:hover,#mega-menu-wrap-top #mega-menu-top > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link:hover, #mega-menu-wrap-top #mega-menu-top > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link:focus,a:hover, a.color, .color,.cart-total-price .woocommerce-Price-amount,.categories-box:hover .categories-content .categories-caption h3, .categories-box:hover .categories-content .categories-caption h4, .categories-box:hover .categories-content .categories-caption h5, .categories-box:hover .categories-content .categories-caption h6,.footer-block ul li a:hover,.copyrights a,.woocommerce .product-list-item ul.products li.product .woocommerce-loop-product__title:hover,.woocommerce div.product p.price, .woocommerce div.product span.price,.product_meta > span span, .product_meta > span a:hover,.comments-area .reply a,.sidebar-menu .cart-widget-content .cart-widget-product .cart-product-item li .product-content .product-link:hover,.product-checkout-review-order .order-total td,.woocommerce-info::before, .woocommerce-message::before,.product-share ul li a:hover,.wishlist_table tr td.product-stock-status span.wishlist-in-stock,.main-navigation a:hover,.navigation-top .current-menu-item > a, .navigation-top .current_page_item > a{
								color:<?php echo esc_html(theme_get_option('theme_main_color')); ?>;	
							}
						<?php
						}
						
						//main hover color
						if($main_hvr_color != ''){ ?>
							.btn-color:hover,.cart-action-buttons a.checkout:hover,#nlpopup .newsletter-btn:hover,#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,.woocommerce #payment #place_order:hover, .woocommerce-page #payment #place_order:hover,.widget_search .search-form .search-submit:hover,.newsletter-from .newsletter-btn:hover{
								background:<?php echo esc_html(theme_get_option('theme_main_hvr_color')); ?>;	
							}
						<?php
						}
						//main text color
						if($btn_color != ''){ ?>
							.btn-color,.cart-action-buttons a.checkout,.back-top.visible, .back-top.visible-fade-out, .back-top:hover,.sidebar-icon-nav ul li .countTip,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{
								color:<?php echo esc_html(theme_get_option('theme_btn_txt_color')); ?> !important;	
							}
							::-moz-selection {
								color:<?php echo esc_html(theme_get_option('theme_btn_txt_color')); ?> !important;
							}
							
							::selection {
								color:<?php echo esc_html(theme_get_option('theme_btn_txt_color')); ?> !important;
							}
						<?php
						}
						
						//main hover text color
						if($btn_hvr_color != ''){ ?>
							.btn-color:hover,.cart-action-buttons a.checkout:hover{
								color:<?php echo esc_html(theme_get_option('theme_btn_hvr_txt_color')); ?> !important;	
							}
						<?php
						}
						?>
				</style>
				<?php
		}		
		add_action( 'wp_head', 'theme_font_family' );
		endif;
?>