<?php
namespace VamtamElementor\Widgets\Button;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Theme preferences.
if ( ! \Vamtam_Elementor_Utils::is_widget_mod_active( 'button' ) ) {
	return;
}

if ( vamtam_theme_supports( 'button--theme-button-type' ) ) {
	function update_button_section_controls( $controls_manager, $widget ) {
		// Button Type.
		\Vamtam_Elementor_Utils::add_control_options( $controls_manager, $widget, 'button_type', [
			'options' => [
				'theme' => __( 'Theme', 'vamtam-elementor-integration' ),
			],
			'render_type' => 'template',
			]
		);
	}

	// Content - Button section
	function section_button_content_before_section_end( $widget, $args ) {
		$controls_manager = \Elementor\Plugin::instance()->controls_manager;
		update_button_section_controls( $controls_manager, $widget );
	}
	add_action( 'elementor/element/button/section_button/before_section_end', __NAMESPACE__ . '\section_button_content_before_section_end', 10, 2 );

	function add_button_style_section_controls( $controls_manager, $widget ) {
		$widget->start_injection( [
			'of' => 'background_color',
		] );
		// Underline Color.
		$widget->add_control(
			'vamtam_underline_bg_color',
			[
				'label' => __( 'Underline Color', 'vamtam-elementor-integration' ),
				'type' => $controls_manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}}' => '--vamtam-underline-bg-color: {{VALUE}};',
				],
				'condition' => [
					'button_type' => 'theme',
				]
			]
		);
		$widget->end_injection();
		$widget->start_injection( [
			'of' => 'button_background_hover_color',
		] );
		// Underline Color Hover.
		$widget->add_control(
			'vamtam_underline_bg_color_hover',
			[
				'label' => __( 'Underline Color', 'vamtam-elementor-integration' ),
				'type' => $controls_manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}}' => '--vamtam-underline-bg-color-hover: {{VALUE}};',
				],
				'condition' => [
					'button_type' => 'theme',
				]
			]
		);
		$widget->end_injection();
	}
	// Style - Button section
	function section_style_before_section_end( $widget, $args ) {
		$controls_manager = \Elementor\Plugin::instance()->controls_manager;
		add_button_style_section_controls( $controls_manager, $widget );
	}
	add_action( 'elementor/element/button/section_style/before_section_end', __NAMESPACE__ . '\section_style_before_section_end', 10, 2 );
}
