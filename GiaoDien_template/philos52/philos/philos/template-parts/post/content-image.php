<?php
/**
 * Template part for displaying image posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-box">
		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
			<div class="post-thumbnail blog-img-wrap">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>
		<div class="blog-box-content">
			<div class="blog-box-content-inner">
				<header class="entry-header">
					<div class="post-fromat-icon">
						<?php					
							if ( is_sticky() && is_home() ) {
								echo nileforest_get_svg( array( 'icon' => 'thumb-tack' ) );
							}
				
							if (  !is_single() ) {						
								echo '<div class="post-icon"></div>';						
							}
						?>
					</div><!-- .post-fromat-icon -->
					<?php
						if ( is_single() ) {
							the_title( '<h4 class="blog-title">', '</h4>' );
						} elseif ( is_front_page() && is_home() ) {
							the_title( '<h4 class="blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
						} else {
							the_title( '<h4 class="blog-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
						}
						if ( 'post' === get_post_type() ) {
							echo '<p class="entry-meta  info">';							
									nileforest_posted_on();
									nileforest_edit_link();							
							echo '</p><!-- .entry-meta -->';
						};
					?>
				</header><!-- .entry-header -->
				<div class="entry-content blog-description-content">				
					<?php 					
					// Only show content if is a single post, or if there's no featured image.
					/* translators: %s: Name of current post */
					the_excerpt( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'philos' ),
						get_the_title()
					) );
					
					wp_link_pages( array(
						'before'      => '<div class="page-links">' . __( 'Pages:', 'philos' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );				
					
					?>	
					<?php
						if ( is_single() ) {
							nileforest_entry_footer();
						}
					?>			
				</div><!-- .entry-content -->
				<?php
				if ( is_single() ) {
					twentyseventeen_entry_footer();
				}
				?>
			</div><!-- .blog-box-content-inner -->
		</div><!-- .blog-box-content -->
	</div><!-- .blog-box -->
</article><!-- #post-## -->
