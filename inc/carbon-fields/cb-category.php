<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_category_news_options');
function crb_attach_category_news_options()
{
	Container::make('term_meta', __('Subtitle'))
		->where('term_taxonomy', '=', 'category')
		->add_fields(array(
			Field::make('text', 'crb_category_title_ro', __('category_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_category_title_ru', __('category_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_category_title_en', __('category_title_en'))
				->set_width(30),
			
			Field::make('textarea', 'crb_category_subtitle_ro', __('category_subtitle_ro'))
				->set_width(30),
			Field::make('textarea', 'crb_category_subtitle_ru', __('category_subtitle_ru'))
				->set_width(30),
			Field::make('textarea', 'crb_category_subtitle_en', __('category_subtitle_en'))
				->set_width(30),
			
			Field::make('image', 'crb_category_image', __('category_imag'))
				->set_value_type('url')
		));
	
}
