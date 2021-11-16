<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'philos' ); ?>">
	<?php 		
		// check for plugin using plugin name
		if ( class_exists( 'Mega_Menu' ) ) {
			$settings = get_option( 'megamenu_settings' );			
			
			if(isset($settings['top'])){
				if (array_key_exists("enabled",$settings['top'])){
					}else{
						?>
						<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
								<?php
									echo nileforest_get_svg( array( 'icon' => 'bars' ) );
									echo nileforest_get_svg( array( 'icon' => 'close' ) );
								_e( 'Menu', 'philos' );
								?>
						</button>
						<?php	
					}	
				}else{
					?>
						<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
								<?php
									echo nileforest_get_svg( array( 'icon' => 'bars' ) );
									echo nileforest_get_svg( array( 'icon' => 'close' ) );
								_e( 'Menu', 'philos' );
								?>
						</button>
						<?php			
				}				
			
			}
		else
		{
		?>
			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
					<?php
						echo nileforest_get_svg( array( 'icon' => 'bars' ) );
						echo nileforest_get_svg( array( 'icon' => 'close' ) );
					_e( 'Menu', 'philos' );
					?>
			</button>
			<?php
		}
		
	?>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
		'fallback_cb' 	 => false,
	) ); ?>
	
</nav><!-- #site-navigation -->
