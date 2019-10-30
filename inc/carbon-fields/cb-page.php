<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_page_finance_options');
function crb_attach_page_finance_options()
{
	Container::make('post_meta', __('Subtitle'))
		->where('post_id', '=', 82)
		->or_where('post_id', '=', 84)
		->or_where('post_id', '=', 86)
		->add_tab(__('Image'), array(
			Field::make('text', 'crb_page_finance_subtitle_ro', __('page_finance_subtitle_ro'))
				->set_width(30),
			Field::make('text', 'crb_page_finance_subtitle_ru', __('page_finance_subtitle_ru'))
				->set_width(30),
			Field::make('text', 'crb_page_finance_subtitle_en', __('page_finance_subtitle_en'))
				->set_width(30),
		));
	
}

add_action('carbon_fields_register_fields', 'crb_attach_page_about_options');
function crb_attach_page_about_options()
{
	Container::make('post_meta', __('Subtitle'))
		->where('post_id', '=', 9)
		->add_tab(__('About'), array(
			Field::make('text', 'crb_page_about_subtitle_ro', __('page_about_subtitle_ro'))
				->set_width(30),
			Field::make('text', 'crb_page_about_subtitle_ru', __('page_about_subtitle_ru'))
				->set_width(30),
			Field::make('text', 'crb_page_about_subtitle_en', __('page_about_subtitle_en'))
				->set_width(30),
			
			Field::make('text', 'crb_page_about_sideabr_contacts_title_ro', __('page_about_sideabr_contacts_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_page_about_sideabr_contacts_title_ru', __('page_about_sideabr_contacts_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_page_about_sideabr_contacts_title_en', __('page_about_sideabr_contacts_title_en'))
				->set_width(30),
		));
	
}

add_action('carbon_fields_register_fields', 'crb_attach_page_services_options');
function crb_attach_page_services_options()
{
	Container::make('post_meta', __('Subtitle'))
		->where('post_id', '=', 12)
		->add_tab(__('About'), array(
			Field::make('text', 'crb_page_about_subtitle_ro', __('page_about_subtitle_ro'))
				->set_width(30),
			Field::make('text', 'crb_page_about_subtitle_ru', __('page_about_subtitle_ru'))
				->set_width(30),
			Field::make('text', 'crb_page_about_subtitle_en', __('page_about_subtitle_en'))
				->set_width(30),
			
			Field::make('complex', 'crb_services_fields', __('Fields'))
				->add_fields(array(
					Field::make('text', 'title_ro', __('title_ro'))
						->set_width(30),
					Field::make('text', 'title_ru', __('title_ru'))
						->set_width(30),
					Field::make('text', 'title_en', __('title_en'))
						->set_width(30),
					
					Field::make('rich_text', 'content_ro', __('content_ro'))
						->set_width(30),
					Field::make('rich_text', 'content_ru', __('content_ru'))
						->set_width(30),
					Field::make('rich_text', 'content_en', __('content_en'))
						->set_width(30),
				))
				->set_layout('tabbed-horizontal')
		));
	
}
