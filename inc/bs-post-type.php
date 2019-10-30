<?php

	if (!defined('ABSPATH')) exit;

	add_action('init', 'my_custom_init');
	function my_custom_init()
	{
		register_post_type('finance', array(
			'labels' => array(
				'name' => __('Finance'), // Основное название типа записи
				'singular_name' => __('Finance'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Finance')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		));

		register_post_type('finance_moldova', array(
			'labels' => array(
				'name' => __('Finance Moldova'), // Основное название типа записи
				'singular_name' => __('Finance Moldova'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Finance Moldova')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor')
		));

		register_post_type('finance_romania', array(
			'labels' => array(
				'name' => __('Finance Romania'), // Основное название типа записи
				'singular_name' => __('Finance Romania'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Finance Romania')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor')
		));

		register_post_type('finance_ue', array(
			'labels' => array(
				'name' => __('Finance UE'), // Основное название типа записи
				'singular_name' => __('Finance UE'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Finance UE')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor')
		));
		
		register_post_type('reviews', array(
			'labels' => array(
				'name' => __('Story'), // Основное название типа записи
				'singular_name' => __('Story'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Story')
			
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		));
		
		
		register_post_type('idea', array(
			'labels' => array(
				'name' => __('Idea'), // Основное название типа записи
				'singular_name' => __('Idea'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Idea')
			
			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		));

		register_post_type('video', array(
			'labels' => array(
				'name' => __('Video'), // Основное название типа записи
				'singular_name' => __('Video'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Video')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor')
		));
	}
