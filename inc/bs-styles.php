<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Enqueue scripts and styles.
	 */
	function bs_euconsult_scripts() {
		wp_enqueue_style( 'bs-euconsult-style', get_stylesheet_uri() );
		wp_enqueue_style( 'bs-euconsult--my-style', get_template_directory_uri().'/assets/css/my.css');
		wp_enqueue_style( 'bs-euconsult--bs-media-style', get_template_directory_uri().'/assets/css/bs-media.css');

		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		wp_enqueue_script( 'jquery' );

		//	wp_enqueue_script('bs-jquery.easeScroll-js', get_template_directory_uri().'/site/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['jquery'], null, true);
		wp_enqueue_script('bs-slick.min-js', get_template_directory_uri().'/assets/libs/slick/slick/slick.min.js', ['jquery'], null, true);
		wp_enqueue_script('bs-mixitup.min-js', get_template_directory_uri().'/assets/libs/mixitup/mixitup.min.js', ['jquery'], null, true);
		wp_enqueue_script('bs-main-js', get_template_directory_uri().'/assets/js/main.js', ['jquery'], null, true);
		
		if(is_tax() || is_page(366) || is_singular('video')){
			wp_enqueue_script('bs-video', get_template_directory_uri().'/assets/js/bs-video.js', array('flowplayer', 'jquery'), '0.1', true);
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'bs_euconsult_scripts' );
