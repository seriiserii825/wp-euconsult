<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$basic_options_container = Container::make('theme_options', __('Carbon Fields'))
		->add_tab(__('Contacts'), array(
			Field::make('text', 'crb_address_ro', __('address ro'))
				->set_width(30),
			Field::make('text', 'crb_address_ru', __('address ru'))
				->set_width(30),
			Field::make('text', 'crb_address_en', __('address en'))
				->set_width(30),
			
			Field::make('text', 'crb_address_city_ro', __('address_city ro'))
				->set_width(30),
			Field::make('text', 'crb_address_city_ru', __('address_city ru'))
				->set_width(30),
			Field::make('text', 'crb_address_city_en', __('address_city en'))
				->set_width(30),
			
			Field::make('text', 'crb_address_just_city_ro', __('address_just_city ro'))
				->set_width(30),
			Field::make('text', 'crb_address_just_city_ru', __('address_just_city ru'))
				->set_width(30),
			Field::make('text', 'crb_address_just_city_en', __('address_just_city en'))
				->set_width(30),
			
			Field::make('text', 'crb_phone', __('phone'))
				->set_width(30),
			Field::make('text', 'crb_phone_with_space', __('phone_with_space'))
				->set_width(30),
			Field::make('text', 'crb_phone_with_space_2', __('phone_with_space_2'))
				->set_width(30),
			
			
			Field::make('text', 'crb_gmail', __('gmail'))
				->set_width(30),
			Field::make('text', 'crb_facebook', __('facebook'))
				->set_width(30),
			Field::make('text', 'crb_twitter', __('twitter'))
				->set_width(30),
			Field::make('text', 'crb_linkedin', __('linkedin'))
				->set_width(30),
			Field::make('text', 'crb_link', __('link'))
				->set_width(30),
		));
	
	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Blocks')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Navigation'), array(
			Field::make('text', 'crb_navigation_title_ro', __('crb_navigation_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_navigation_title_ru', __('crb_navigation_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_navigation_title_en', __('crb_navigation_title_en'))
				->set_width(30),
			
			Field::make('text', 'crb_navigation_title_2_ro', __('crb_navigation_title_2_ro'))
				->set_width(30),
			Field::make('text', 'crb_navigation_title_2_ru', __('crb_navigation_title_2_ru'))
				->set_width(30),
			Field::make('text', 'crb_navigation_title_2_en', __('crb_navigation_title_2_en'))
				->set_width(30),
			
			Field::make('text', 'crb_navigation_title_3_ro', __('crb_navigation_title_3_ro'))
				->set_width(30),
			Field::make('text', 'crb_navigation_title_3_ru', __('crb_navigation_title_3_ru'))
				->set_width(30),
			Field::make('text', 'crb_navigation_title_3_en', __('crb_navigation_title_3_en'))
				->set_width(30),
		
		))
		->add_tab(__('Index intro'), array(
			Field::make('text', 'crb_intro_index_title_ro', __('Block index_intro title ro'))
				->set_width(30),
			Field::make('text', 'crb_intro_index_title_ru', __('Block index_intro title ru'))
				->set_width(30),
			Field::make('text', 'crb_intro_index_title_en', __('Block index_intro title en'))
				->set_width(30),
			
			Field::make('textarea', 'crb_intro_index_text_ro', __('Block index_intro text ro'))
				->set_width(30),
			Field::make('textarea', 'crb_intro_index_text_ru', __('Block index_intro text ru'))
				->set_width(30),
			Field::make('textarea', 'crb_intro_index_text_en', __('Block index_intro text en'))
				->set_width(30),
		))
		->add_tab(__('Finance Single'), array(
			Field::make('textarea', 'crb_finance_single_text_ro', __('Block finance_single text ro'))
				->set_width(30),
			Field::make('textarea', 'crb_finance_single_text_ru', __('Block finance_single text ru'))
				->set_width(30),
			Field::make('textarea', 'crb_finance_single_text_en', __('Block finance_single text en'))
				->set_width(30),
			
			
			Field::make('textarea', 'crb_finance_text_ro', __('Block finance_text ro'))
				->set_width(30),
			Field::make('textarea', 'crb_finance_text_ru', __('Block finance_text ru'))
				->set_width(30),
			Field::make('textarea', 'crb_finance_text_en', __('Block finance_text en'))
				->set_width(30),
		))
		->add_tab(__('Buttons'), array(
			Field::make('text', 'crb_btn_about_ro', __('Block btn_about ro'))
				->set_width(30),
			Field::make('text', 'crb_btn_about_ru', __('Block btn_about ru'))
				->set_width(30),
			Field::make('text', 'crb_btn_about_en', __('Block btn_about en'))
				->set_width(30),
			
			Field::make('text', 'crb_btn_services_ro', __('Block btn_services ro'))
				->set_width(30),
			Field::make('text', 'crb_btn_services_ru', __('Block btn_services ru'))
				->set_width(30),
			Field::make('text', 'crb_btn_services_en', __('Block btn_services en'))
				->set_width(30),
		
		))
		->add_tab(__('Connect now'), array(
			Field::make('textarea', 'crb_connect_title_ro', __('Block connect_title ro'))
				->set_width(30),
			Field::make('textarea', 'crb_connect_title_ru', __('Block connect_title ru'))
				->set_width(30),
			Field::make('textarea', 'crb_connect_title_en', __('Block connect_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_connect_text_ro', __('Block connect_text ro'))
				->set_width(30),
			Field::make('text', 'crb_connect_text_ru', __('Block connect_text ru'))
				->set_width(30),
			Field::make('text', 'crb_connect_text_en', __('Block connect_text en'))
				->set_width(30),
			
			Field::make('text', 'crb_connect_video_text_ro', __('Block connect_video_text ro'))
				->set_width(30),
			Field::make('text', 'crb_connect_video_text_ru', __('Block connect_video_text ru'))
				->set_width(30),
			Field::make('text', 'crb_connect_video_text_en', __('Block connect_video_text en'))
				->set_width(30),
			
			Field::make('text', 'crb_connect_phone', __('Block connect_phone'))
		))
		->add_tab(__('Numbers'), array(
			Field::make('complex', 'crb_numbers_fields', __('Fields'))
				->add_fields(array(
					Field::make('text', 'crb_numbers_title_ro', __('Block numbers_title ro'))
						->set_width(30),
					Field::make('text', 'crb_numbers_title_ru', __('Block numbers_title ru'))
						->set_width(30),
					Field::make('text', 'crb_numbers_title_en', __('Block numbers_title en'))
						->set_width(30),
					
					Field::make('text', 'crb_numbers_text', __('Block numbers_text'))
				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Partners'), array(
			Field::make('text', 'crb_partners_title_ro', __('Partners_title ro'))
				->set_width(30),
			Field::make('text', 'crb_partners_title_ru', __('Partners_title ru'))
				->set_width(30),
			Field::make('text', 'crb_partners_title_en', __('Partners_title en'))
				->set_width(30),
			
			Field::make('complex', 'crb_partners_fields', __('Fields'))
				->add_fields(array(
					Field::make('text', 'crb_partners_text_ro', __('Block partners_text_ro'))
						->set_width(30),
					Field::make('text', 'crb_partners_text_ru', __('Block partners_text_ru'))
						->set_width(30),
					Field::make('text', 'crb_partners_text_en', __('Block partners_text_en'))
						->set_width(30),
					
					Field::make('image', 'crb_partners_img', __('Block partners_img'))
						->set_value_type('url')
				))
				->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Idea'), array(
			Field::make('text', 'crb_idea_title_ro', __('crb_idea_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_idea_title_ru', __('crb_idea_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_idea_title_en', __('crb_idea_title_en'))
				->set_width(30),
			
			
			Field::make('text', 'crb_idea_button_read_more_ro', __('crb_idea_button_read_more_ro'))
				->set_width(30),
			Field::make('text', 'crb_idea_button_read_more_ru', __('crb_idea_button_read_more_ru'))
				->set_width(30),
			Field::make('text', 'crb_idea_button_read_more_en', __('crb_idea_button_read_more_en'))
				->set_width(30),
		))
		->add_tab(__('Consultation'), array(
			Field::make('text', 'crb_consultation_title_ro', __('crb_consultation_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_consultation_title_ru', __('crb_consultation_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_consultation_title_en', __('crb_consultation_title_en'))
				->set_width(30),
			
			Field::make('textarea', 'crb_consultation_text_ro', __('crb_consultation_text_ro'))
				->set_width(30),
			Field::make('textarea', 'crb_consultation_text_ru', __('crb_consultation_text_ru'))
				->set_width(30),
			Field::make('textarea', 'crb_consultation_text_en', __('crb_consultation_text_en'))
				->set_width(30),
			
			Field::make('text', 'crb_consultation_button_ro', __('crb_consultation_button_ro'))
				->set_width(30),
			Field::make('text', 'crb_consultation_button_ru', __('crb_consultation_button_ru'))
				->set_width(30),
			Field::make('text', 'crb_consultation_button_en', __('crb_consultation_button_en'))
				->set_width(30),
		))
		->add_tab(__('Popup'), array(
			Field::make('text', 'crb_popup_title_ro', __('crb_popup_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_popup_title_ru', __('crb_popup_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_popup_title_en', __('crb_popup_title_en'))
				->set_width(30),
			
			Field::make('text', 'crb_popup_before_addres_ro', __('crb_popup_before_addres_ro'))
				->set_width(30),
			Field::make('text', 'crb_popup_before_addres_ru', __('crb_popup_before_addres_ru'))
				->set_width(30),
			Field::make('text', 'crb_popup_before_addres_en', __('crb_popup_before_addres_en'))
				->set_width(30),
		
		))
		->add_tab(__('Back button'), array(
			Field::make('text', 'crb_back_button_title_ro', __('crb_back_button_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_back_button_title_ru', __('crb_back_button_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_back_button_title_en', __('crb_back_button_title_en'))
				->set_width(30),
		))
		->add_tab(__('Footer'), array(
			Field::make('text', 'crb_footer_title_ro', __('crb_footer_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_footer_title_ru', __('crb_footer_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_footer_title_en', __('crb_footer_title_en'))
				->set_width(30),
			
			Field::make('text', 'crb_footer_before_addres_ro', __('crb_footer_before_addres_ro'))
				->set_width(30),
			Field::make('text', 'crb_footer_before_addres_ru', __('crb_footer_before_addres_ru'))
				->set_width(30),
			Field::make('text', 'crb_footer_before_addres_en', __('crb_footer_before_addres_en'))
				->set_width(30),
			
			Field::make('text', 'crb_footer_before_phone_ro', __('crb_footer_before_phone_ro'))
				->set_width(30),
			Field::make('text', 'crb_footer_before_phone_ru', __('crb_footer_before_phone_ru'))
				->set_width(30),
			Field::make('text', 'crb_footer_before_phone_en', __('crb_footer_before_phone_en'))
				->set_width(30),
			
			Field::make('text', 'crb_footer_form_title_ro', __('crb_footer_form_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_footer_form_title_ru', __('crb_footer_form_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_footer_form_title_en', __('crb_footer_form_title_en'))
				->set_width(30),
		))
		->add_tab(__('Last posts'), array(
			Field::make('text', 'crb_last_posts_title_ro', __('crb_last_posts_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_last_posts_title_ru', __('crb_last_posts_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_last_posts_title_en', __('crb_last_posts_title_en'))
				->set_width(30),
			
			Field::make('text', 'crb_last_posts_all_ro', __('crb_last_posts_all__ro'))
				->set_width(30),
			Field::make('text', 'crb_last_posts_all_ru', __('crb_last_posts_all__ru'))
				->set_width(30),
			Field::make('text', 'crb_last_posts_all_en', __('crb_last_posts_all__en'))
				->set_width(30),
			
			Field::make('text', 'crb_for_write_all_ro', __('crb_for_write_all__ro'))
				->set_width(30),
			Field::make('text', 'crb_for_write_all_ru', __('crb_for_write_all__ru'))
				->set_width(30),
			Field::make('text', 'crb_for_write_all_en', __('crb_for_write_all__en'))
				->set_width(30),
			
			Field::make('text', 'crb_write_a_comment_all_ro', __('crb_write_a_comment_all__ro'))
				->set_width(30),
			Field::make('text', 'crb_write_a_comment_all_ru', __('crb_write_a_comment_all__ru'))
				->set_width(30),
			Field::make('text', 'crb_write_a_comment_all_en', __('crb_write_a_comment_all__en'))
				->set_width(30),
		))
		->add_tab(__('Authorization'), array(
			Field::make('text', 'crb_authorization_title_ro', __('crb_authorization_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_authorization_title_ru', __('crb_authorization_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_authorization_title_en', __('crb_authorization_title_en'))
				->set_width(30),
			
			Field::make('text', 'crb_login_title_ro', __('crb_login_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_login_title_ru', __('crb_login_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_login_title_en', __('crb_login_title_en'))
				->set_width(30),
		))
		->add_tab(__('Certificates'), array(
			Field::make('complex', 'crb_certificates', __('Fields'))
				->add_fields(array(
					Field::make('text', 'crb_title_ro', __('crb_title_ro'))
						->set_width(30),
					Field::make('text', 'crb_title_ru', __('crb_title_ru'))
						->set_width(30),
					Field::make('text', 'crb_title_en', __('crb_title_en'))
						->set_width(30),
					
					Field::make('image', 'crb_image', __('Image'))
				))
				->set_layout('tabbed-horizontal')
		));
	
	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Finance Sidebar')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Finance Moldova'), array(
			Field::make('text', 'crb_finance_moldova_title_ro', __('Block finance_moldova_title ro'))
				->set_width(30),
			Field::make('text', 'crb_finance_moldova_title_ru', __('Block finance_moldova_title ru'))
				->set_width(30),
			Field::make('text', 'crb_finance_moldova_title_en', __('Block finance_moldova_title en'))
				->set_width(30),
		))
		->add_tab(__('Finance Romania'), array(
			Field::make('text', 'crb_finance_romania_title_ro', __('Block finance_romania_title ro'))
				->set_width(30),
			Field::make('text', 'crb_finance_romania_title_ru', __('Block finance_romania_title ru'))
				->set_width(30),
			Field::make('text', 'crb_finance_romania_title_en', __('Block finance_romania_title en'))
				->set_width(30),
		))
		->add_tab(__('Finance UE'), array(
			Field::make('text', 'crb_finance_ue_title_ro', __('Block finance_ue_title ro'))
				->set_width(30),
			Field::make('text', 'crb_finance_ue_title_ru', __('Block finance_ue_title ru'))
				->set_width(30),
			Field::make('text', 'crb_finance_ue_title_en', __('Block finance_ue_title en'))
				->set_width(30),
		));
	
	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'News Page Filter')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Filter'), array(
			Field::make('text', 'crb_news_filter_all_title_ro', __('Block news_filter_all_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_all_title_ru', __('Block news_filter_all_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_all_title_en', __('Block news_filter_all_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_filter_finanace_title_ro', __('Block news_filter_finanace_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_finanace_title_ru', __('Block news_filter_finanace_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_finanace_title_en', __('Block news_filter_finanace_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_filter_social_title_ro', __('Block news_filter_social_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_social_title_ru', __('Block news_filter_social_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_social_title_en', __('Block news_filter_social_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_filter_more_title_ro', __('Block news_filter_more_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_more_title_ru', __('Block news_filter_more_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_more_title_en', __('Block news_filter_more_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_filter_about_title_ro', __('Block news_filter_about_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_about_title_ru', __('Block news_filter_about_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_about_title_en', __('Block news_filter_about_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_filter_bussiness_title_ro', __('Block news_filter_bussiness_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_bussiness_title_ru', __('Block news_filter_bussiness_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_bussiness_title_en', __('Block news_filter_bussiness_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_filter_idea_title_ro', __('Block news_filter_idea_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_idea_title_ru', __('Block news_filter_idea_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_idea_title_en', __('Block news_filter_idea_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_filter_history_title_ro', __('Block news_filter_history_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_history_title_ru', __('Block news_filter_history_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_filter_history_title_en', __('Block news_filter_history_title en'))
				->set_width(30),
		))
		->add_tab(__('Register'), array(
			Field::make('text', 'crb_news_register_title_ro', __('Block news_register_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_register_title_ru', __('Block news_register_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_register_title_en', __('Block news_register_title en'))
				->set_width(30),
			
			Field::make('text', 'crb_news_connect_title_ro', __('Block news_connect_title ro'))
				->set_width(30),
			Field::make('text', 'crb_news_connect_title_ru', __('Block news_connect_title ru'))
				->set_width(30),
			Field::make('text', 'crb_news_connect_title_en', __('Block news_connect_title en'))
				->set_width(30),
		));
	
	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Video')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Register'), array(
			Field::make('text', 'crb_video_title_ro', __('Block video_title ro'))
				->set_width(30),
			Field::make('text', 'crb_video_title_ru', __('Block video_title ru'))
				->set_width(30),
			Field::make('text', 'crb_video_title_en', __('Block video_title en'))
				->set_width(30),
		));
	
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
