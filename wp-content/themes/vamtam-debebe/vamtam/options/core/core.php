<?php

/**
 * Controls attached to core sections
 *
 * @package vamtam/debebe
 */


return array(
	array(
		'label'     => esc_html__( 'Header Logo Type', 'vamtam-debebe' ),
		'id'        => 'header-logo-type',
		'type'      => 'switch',
		'transport' => 'postMessage',
		'section'   => 'title_tagline',
		'choices'   => array(
			'image'      => esc_html__( 'Image', 'vamtam-debebe' ),
			'site-title' => esc_html__( 'Site Title', 'vamtam-debebe' ),
		),
		'priority' => 8,
	),

	array(
		'label'     => esc_html__( 'Single Product Image Zoom', 'vamtam-debebe' ),
		'id'        => 'wc-product-gallery-zoom',
		'type'      => 'switch',
		'transport' => 'postMessage',
		'section'   => 'woocommerce_product_images',
		'choices'   => array(
			'enabled'  => esc_html__( 'Enabled', 'vamtam-debebe' ),
			'disabled' => esc_html__( 'Disabled', 'vamtam-debebe' ),
		),
		// 'active_callback' => 'vamtam_extra_features',
	),
);


