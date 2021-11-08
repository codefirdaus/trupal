<?php

function trupal_files() {
    wp_enqueue_script('jquery_scripts', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap_scripts', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('trupal_cookie_scripts', get_theme_file_uri('/js/cookie.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('trupal_navbar_scripts', get_theme_file_uri('/js/navbar.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom_google_font', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
    wp_enqueue_style('font_awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap_styles', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('trupal_pride_styles', get_theme_file_uri('/css/pride.css'));
    wp_enqueue_style('trupal_navbar_styles', get_theme_file_uri('/css/navbar.css'));
    wp_enqueue_style('trupal_main_styles', get_theme_file_uri('/css/trupal.css'));
    wp_enqueue_style('trupal_cookie_styles', get_theme_file_uri('/css/cookie.css'));
}
add_action('wp_enqueue_scripts', 'trupal_files');

function trupal_features() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'trupal_features');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Story General Settings',
		'menu_title'	=> 'Story Settings',
		'parent_slug' 	=> 'ourstory',
		'capability'	=> 'edit_posts'
	));
	
	
}