<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('Multipage Options','multipage'),
		'menu_title'	=> __('Multipage Options', 'multipage'),
		'menu_slug' 	=> 'multipage-options',
		
		
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=>__('Multipage Header Settings', 'multipage'),
		'menu_title'	=> __('Header', 'multipage'),
		'parent_slug'	=> 'multipage-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Multipage About Settings', 'multipage'),
		'menu_title'	=> __('About', 'multipage'),
		'parent_slug'	=> 'multipage-options',
	));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage Skill Settings', 'multipage'),
        'menu_title'	=> __('FAQ & Skill', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage Our Service Settings', 'multipage'),
        'menu_title'	=> __('Our Service', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage Creative Team Settings', 'multipage'),
        'menu_title'	=> __('Creative Team', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));
       
    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage Client Say Settings', 'multipage'),
        'menu_title'	=> __('Client Say', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage latest news Settings', 'multipage'),
        'menu_title'	=> __('Leates News', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage CTA Settings', 'multipage'),
        'menu_title'	=> __('CTA Section', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage Contact Settings', 'multipage'),
        'menu_title'	=> __('Contact Section', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Multipage Footer Settings', 'multipage'),
        'menu_title'	=> __('Footer', 'multipage'),
        'parent_slug'	=> 'multipage-options',
    ));
	
}