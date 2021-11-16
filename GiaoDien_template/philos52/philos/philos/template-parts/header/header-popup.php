<?php

/**
 * Displays header newsletter popup
 *
 * @package WordPress
 * @subpackage Nileforest
 * @since Nileforest 1.0
 */
?>

<!-- Newsletter Popup -->
    <section id="nlpopup" class="nlpopup" data-expires="30" data-delay="10" <?php if(theme_get_option('popup_backgroud_image')){ ?>style="background-image:url('<?php echo theme_get_option('popup_backgroud_image');?>'); background-color:<?php echo theme_get_option('popup_backgroud_color'); ?>; background-repeat:<?php echo theme_get_option('popup_backgroud_repeat');?>; background-position:<?php echo theme_get_option('popup_backgroud_position');?>"<?php }?>>
        <!--Close Button-->
        <a class="nlpopup_close nlpopup_close_icon"></a>
        <!--End Close Button-->
		<?php if(theme_get_option('newsletter_text')):
       		echo do_shortcode(theme_get_option('newsletter_text'));
		endif; ?>
        <a class="nlpopup_close nlpopup_close_link mt-40"><?php esc_html_e('&#10006; Close', 'philos'); ?></a>
    </section>
    <!-- Overlay -->
    <div id="nlpopup_overlay"></div>
    <!-- End Newsletter Popup -->
