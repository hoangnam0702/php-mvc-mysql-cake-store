<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'nileforest_wrapper_before_body' ); ?>
<!-- Newsletter Popup -->
<?php if(theme_get_option('popup_btn') != 'no'):	
	get_template_part( 'template-parts/header/header', 'popup' );
endif; ?>
<!-- End Newsletter Popup -->	
<!-- Sidebar Menu (Cart Menu) -->
<?php if ( class_exists( 'WooCommerce' ) ) : ?>
	<?php if(theme_get_option('header_addtocart_btn') == 'yes'):		
		get_template_part( 'template-parts/header/header', 'cartpopup' );
	endif; ?>
<?php endif; ?>
<!-- End Sidebar Menu (Cart Menu) -->
<!-- Search Overlay Menu -->
<?php
	if(theme_get_option('header_search_btn') == 'yes'):		
		get_template_part( 'template-parts/header/header', 'search' );
	endif;
?>
<!-- End Search Overlay Menu -->
<div id="page" class="wraper">	
	<?php 
		$custom_header = get_custom_header_markup(); 
    	if ( !empty( $custom_header ) ):
		?>
		<div class="custom-header">
			<div class="custom-header-media">
				<?php the_custom_header_markup(); ?>
			</div>
		</div><!-- .custom-header -->
		<?php endif; ?>
	<header class="header">
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
	</header><!-- #masthead -->	
	<div class="site-content-contain">
		<div id="content" class="page-content-wraper">
