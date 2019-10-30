<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	function bs_euconsult_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'bs-euconsult' ),
			'id'            => 'wpglobus',
			'description'   => esc_html__( 'Add widgets here.', 'bs-euconsult' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Search', 'bs-euconsult' ),
			'id'            => 'search',
			'description'   => esc_html__( 'Add widgets here.', 'bs-euconsult' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}
	add_action( 'widgets_init', 'bs_euconsult_widgets_init' );
