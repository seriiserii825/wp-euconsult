<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_news_post_options');
function crb_news_post_options()
{
	Container::make('post_meta', __('Select time'))
		->where('post_term', '=', array(
			'field' => 'slug',
			'value' => 'news',
			'taxonomy' => 'category',
		))
		->add_fields(array(
			Field::make( 'select', 'crb_news_time', __( 'Time to read' ) )
				->add_options( array(
					'1' => '1 min',
					'2' => '2 min',
					'3' => '3 min',
					'4' => '4 min',
					'5' => '5 min',
					'6' => '6 min',
				) )
		));
}

