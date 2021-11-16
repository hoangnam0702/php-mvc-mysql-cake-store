<?php

/**
 * Displays header search
 *
 * @package WordPress
 * @subpackage Nileforest
 * @since Nileforest 1.0
 */
?>

<section class="search-overlay-menu">
	<a class="search-overlay-close"></a>
	<div class="container"> 
		<form role="search" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
			<div class="search-icon-lg">&nbsp;</div>
			<label class="h6 normal search-input-label"><?php echo _e('Enter keywords to Search Product', 'philos'); ?></label>
			<?php
				if (  class_exists( 'WooCommerce' ) ) { 
					?><input name="post_type" value="product" type="hidden"><?php
				}else{ 
					?><input name="post_type" value="post" type="hidden"><?php
				}
			?>
			<input class="search-field"  type="search" placeholder="<?php echo _e( 'Search...' ,'philos' );?>"
				value="<?php echo esc_attr(get_search_query());?>" name="s"
				title="<?php echo _e( 'Search...', 'philos' );?>" />
			<input type="submit" class="search-submit" value="<?php echo _e( 'Search', 'philos' );?>" />
		</form>
	</div>
</section>