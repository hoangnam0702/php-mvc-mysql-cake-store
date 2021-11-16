<?php
/**
 * Twenty Seventeen: Customizer
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nileforest_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'nileforest_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'nileforest_customize_partial_blogdescription',
	) );

	/**
	 * Custom colors.
	 */
	/*$wp_customize->add_setting( 'colorscheme', array(
		'default'           => 'light',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'nileforest_sanitize_colorscheme',
	) );*/

	$wp_customize->add_setting( 'colorscheme_hue', array(
		'default'           => 250,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint', // The hue is stored as a positive integer.
	) );

	/*$wp_customize->add_control( 'colorscheme', array(
		'type'    => 'radio',
		'label'    => __( 'Color Scheme', 'philos' ),
		'choices'  => array(
			'light'  => __( 'Light', 'philos' ),
			'dark'   => __( 'Dark', 'philos' ),
			'custom' => __( 'Custom', 'philos' ),
		),
		'section'  => 'colors',
		'priority' => 5,
	) );*/

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorscheme_hue', array(
		'mode' => 'hue',
		'section'  => 'colors',
		'priority' => 6,
	) ) );
	
}
add_action( 'customize_register', 'nileforest_customize_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function nileforest_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Twenty Seventeen 1.0
 * @see twentyseventeen_customize_register()
 *
 * @return void
 */
function nileforest_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function twentyseventeen_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function nileforest_customize_preview_js() {
	wp_enqueue_script( 'nileforest-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'nileforest_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function nileforest_panels_js() {
	wp_enqueue_script( 'nileforest-customize-controls', get_theme_file_uri( '/assets/js/customize-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'nileforest_panels_js' );
