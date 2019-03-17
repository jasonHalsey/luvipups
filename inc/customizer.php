<?php
/**
 * underscore_2_14_19 Theme Customizer
 *
 * @package underscore_2_14_19
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function underscore_2_14_19_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Add the footer logo setting.
  $wp_customize->add_setting(
      'footer_logo',
      array(
          'default' => '',
          'transport' => 'postMessage',
      )
  );

	$wp_customize->add_setting(
      'footer_logo_link',
      array(
          'default' => '',
          'transport' => 'postMessage',
      )
  );

	$wp_customize->add_section(
      'custom_customizer_logos',
      array(
          'title' => __( 'Footer Logo', 'wordpress-customizer-example' ),
          'priority' => 30,
      )
  );

  // Add the footer logo control.
  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'custom_customizer_logos_footer',
          array(
              'label' => __( 'Footer Logo', 'wordpress-customizer-example' ),
              'section' => 'custom_customizer_logos',
              'settings' => 'footer_logo', // Must match the setting name.
              'priority' => 2,
          )
      )
  );

	$wp_customize->add_control('footer_logo_link', array(
		 'label'   => 'Footer Link Here',
		 'setting' => 'footer_logo_link',
		 'section' => 'custom_customizer_logos',
		 'type'    => 'textarea',
	));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'underscore_2_14_19_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'underscore_2_14_19_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'underscore_2_14_19_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function underscore_2_14_19_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function underscore_2_14_19_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function underscore_2_14_19_customize_preview_js() {
	wp_enqueue_script( 'underscore_2_14_19-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'underscore_2_14_19_customize_preview_js' );
