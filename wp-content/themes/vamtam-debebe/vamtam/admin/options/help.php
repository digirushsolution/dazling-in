<?php
return array(
	'name' => esc_html__( 'Help', 'vamtam-debebe' ),
	'auto' => true,
	'config' => array(

		array(
			'name' => esc_html__( 'Help', 'vamtam-debebe' ),
			'type' => 'title',
			'desc' => '',
		),

		array(
			'name' => esc_html__( 'Help', 'vamtam-debebe' ),
			'type' => 'start',
			'nosave' => true,
		),
//----
		array(
			'type' => 'docs',
		),

			array(
				'type' => 'end',
			),
	),
);
