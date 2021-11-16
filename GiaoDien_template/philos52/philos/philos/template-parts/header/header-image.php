<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php if(theme_get_option('header_style_topbar') == 'yes'): ?>
<div class="header-topbar">
  <div class="header-topbar-inner">
    <!--Topbar Left-->
    <div class="topbar-left hidden-sm-down">
      <?php if(theme_get_option('header_text_style') == 'yes'): ?>
      <div class="phone">
	  	<?php echo theme_get_option('header_text'); ?>
      </div>
      <?php endif; ?>
    </div> <!--End Topbar Left-->
    <!--Topbar Right-->
    <div class="topbar-right">
      <?php
			if ( has_nav_menu( 'header_top_menu' ) ) : 
				wp_nav_menu(array(
				'theme_location' => 'header_top_menu', // menu slug from step 1
				'container' 	 => false, // 'div' container will not be added
				'menu_class' 	 => 'list-none', // <ul class="nav"> 
				'depth'          => 1,
				'link_before'    => '',
				'link_after'     => '',
				'fallback_cb' 	 => false,
			));
			endif;
		?>
    </div><!-- End Topbar Right -->
  </div> <!--header-topbar-inner-->
</div><!--header-topbar-->
 <?php endif; ?>
<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
