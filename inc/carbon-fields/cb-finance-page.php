<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;


	add_action( 'carbon_fields_register_fields', 'crb_attach_blocks_options' );
	function crb_attach_blocks_options() {
		Container::make( 'post_meta', __( 'Finantari' ) )
		 ->where( 'post_id', '=', 15 )
		 ->add_tab( __('Section intro text'), array(
			 Field::make( 'textarea', 'crb_finance_page_text_ro', __( 'text ro' ) )
				 ->set_width(30),
			 Field::make( 'textarea', 'crb_finance_page_text_ru', __( 'text ru' ) )
				 ->set_width(30),
			 Field::make( 'textarea', 'crb_finance_page_text_en', __( 'text en' ) )
				 ->set_width(30),
		 ));
	}

