<?php

if (!defined('ABSPATH')) exit;

// хук для регистрации
add_action('init', 'create_taxonomy');
function create_taxonomy()
{
	
	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('country', ['finance'], [
		'label' => '', // определяется параметром $labels->name
		'labels' => [
			'name' => 'Genres',
			'singular_name' => 'Genre',
			'search_items' => 'Search Genres',
			'all_items' => 'All Genres',
			'view_item ' => 'View Genre',
			'parent_item' => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item' => 'Edit Genre',
			'update_item' => 'Update Genre',
			'add_new_item' => 'Add New Genre',
			'new_item_name' => 'New Genre Name',
			'menu_name' => 'Genre',
		],
		'description' => '', // описание таксономии
		'public' => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical' => false,
		
		'rewrite' => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities' => array(),
		'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest' => null, // добавить в REST API
		'rest_base' => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	]);

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('category_video', ['video'], [
		'label' => '', // определяется параметром $labels->name
		'labels' => [
			'name' => 'Category',
			'singular_name' => 'Category',
			'search_items' => 'Search Category',
			'all_items' => 'All Category',
			'view_item ' => 'View Category',
			'parent_item' => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item' => 'Edit Category',
			'update_item' => 'Update Category',
			'add_new_item' => 'Add New Category',
			'new_item_name' => 'New Category Name',
			'menu_name' => 'Category',
		],
		'description' => '', // описание таксономии
		'public' => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical' => false,

		'rewrite' => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities' => array(),
		'meta_box_cb' => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest' => null, // добавить в REST API
		'rest_base' => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	]);
}
