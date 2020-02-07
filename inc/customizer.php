<?php
/**
 * hamworks Theme Customizer
 *
 * @package Hamworks
 */

namespace HamDocs;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function customize_register( $wp_customize ) {
	/**
	 * Primary Color.
	 */
	$wp_customize->add_setting( 'primary_color',
		array(
			'default'   => '#012C2F',
			'type'      => 'theme_mod',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control( new \WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'label'    => 'プライマリーカラー',
			'settings' => 'primary_color',
			'priority' => 10,
			'section'  => 'colors',
		)
	) );

	/**
	 * Secondary Color.
	 */
	$wp_customize->add_setting( 'secondary_color',
		array(
			'default'   => '#111',
			'type'      => 'theme_mod',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control( new \WP_Customize_Color_Control(
		$wp_customize,
		'secondary_color',
		array(
			'label'    => 'セカンダリーカラー',
			'settings' => 'secondary_color',
			'priority' => 10,
			'section'  => 'colors',
		)
	) );

	/**
	 * Copyright
	 */
	$wp_customize->add_setting( 'copyright',
		array(
			'default'   => '',
			'type'      => 'theme_mod',
			'transport' => 'refresh',
		)
	);

	$wp_customize->add_control( new \WP_Customize_Control(
		$wp_customize,
		'copyright',
		array(
			'label'    => 'コピーライト',
			'settings' => 'copyright',
			'type'     => 'textarea',
			'section'  => 'title_tagline',
		)
	) );

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
}
add_action( 'customize_register', '\HamDocs\customize_register' );

/**
 * Render the copyright for the selective refresh partial.
 *
 * @return void
 */
function render_copyright() {
	echo wp_kses_post( get_theme_mod( 'copyright' ) );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function customize_preview_js() {
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/build/js/customizer.js', array( 'customize-preview' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'customize_preview_init', '\HamDocs\customize_preview_js' );
