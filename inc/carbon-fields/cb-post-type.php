<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;


	add_action( 'carbon_fields_register_fields', 'crb_attach_finance_post_type_options' );
	function crb_attach_finance_post_type_options() {
		Container::make( 'post_meta', __( 'Finantari' ) )
		         ->where( 'post_type', '=', 'finance' )
		         ->add_tab( __( 'Image' ), array(
			         Field::make( 'image', 'crb_finance_single_image', __( 'Image' ) )
			              ->set_value_type( 'url' ),

			         Field::make( 'image', 'crb_idea_finance_page_img', __( 'Idea finance page img' ) )
			              ->set_value_type( 'url' )
			              ->set_help_text( '309x210' )
		         ) );

	}

	add_action( 'carbon_fields_register_fields', 'crb_attach_finance_moldova_post_type_options' );
	function crb_attach_finance_moldova_post_type_options() {
		Container::make( 'post_meta', __( 'Finantari' ) )
		         ->where( 'post_type', '=', 'finance_moldova' )
		         ->or_where( 'post_type', '=', 'finance_romania' )
		         ->or_where( 'post_type', '=', 'finance_eu' )
		         ->add_fields( array(
			         Field::make( 'text', 'crb_finance_modova_text_ro', __( 'Block finance_moldova_text ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_finance_modova_text_ru', __( 'Block finance_moldova_text ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_finance_modova_text_en', __( 'Block finance_moldova_text en' ) )
			              ->set_width( 30 ),
		         ) );
	}

	add_action( 'carbon_fields_register_fields', 'crb_attach_reviews_options' );
	function crb_attach_reviews_options() {
		Container::make( 'post_meta', __( 'Finantari' ) )
		         ->where( 'post_type', '=', 'reviews' )
		         ->add_fields( array(
			         Field::make( 'text', 'crb_reviews_title_ro', __( 'crb_reviews_title ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_reviews_title_ru', __( 'crb_reviews_title ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_reviews_title_en', __( 'crb_reviews_title en' ) )
			              ->set_width( 30 ),

			         Field::make( 'textarea', 'crb_reviews_cite_ro', __( 'crb_reviews_cite ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'textarea', 'crb_reviews_cite_ru', __( 'crb_reviews_cite ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'textarea', 'crb_reviews_cite_en', __( 'crb_reviews_cite en' ) )
			              ->set_width( 30 ),
		         ) );
	}

	add_action( 'carbon_fields_register_fields', 'crb_attach_idea_options' );
	function crb_attach_idea_options() {
		Container::make( 'post_meta', __( 'Idea' ) )
		         ->where( 'post_type', '=', 'idea' )
		         ->add_fields( array(
			         Field::make( 'textarea', 'crb_idea_subtitle_cite_ro', __( 'crb_idea_subtitle_cite ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'textarea', 'crb_idea_subtitle_cite_ru', __( 'crb_idea_subtitle_cite ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'textarea', 'crb_idea_subtitle_cite_en', __( 'crb_idea_subtitle_cite en' ) )
			              ->set_width( 30 ),

			         Field::make( 'textarea', 'crb_idea_short_text_ro', __( 'crb_idea_short_text ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'textarea', 'crb_idea_short_text_ru', __( 'crb_idea_short_text ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'textarea', 'crb_idea_short_text_en', __( 'crb_idea_short_text en' ) )
			              ->set_width( 30 ),

			         Field::make( 'text', 'crb_idea_first_line_link_ro', __( 'crb_idea_first_line_link ro' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_idea_first_line_link_ru', __( 'crb_idea_first_line_link ru' ) )
			              ->set_width( 30 ),
			         Field::make( 'text', 'crb_idea_first_line_link_en', __( 'crb_idea_first_line_link en' ) )
			              ->set_width( 30 ),

			         Field::make( 'image', 'crb_idea_img', __( 'Idea single intro bg' ) )
			              ->set_value_type( 'url' ),
		         ) );
	}

	add_action( 'carbon_fields_register_fields', 'crb_attach_video_options' );
	function crb_attach_video_options() {
		Container::make( 'post_meta', __( 'Video' ) )
		         ->where( 'post_type', '=', 'video' )
		         ->add_fields( array(
			         Field::make( 'radio', 'crb_video_aux', __( 'Choose auxiliar' ) )
				         ->set_options( array(
					         '1' => 'no',
					         '2' => 'yes',
				         ) ),
			         Field::make( 'file', 'crb_video_file', __( 'Video File' ) )
				         ->set_type( array( 'video' ) )
				         ->set_value_type( 'url' )

		         ) );
	}
