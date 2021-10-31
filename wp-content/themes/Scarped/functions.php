<?php

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
function enqueue_my_scripts()
{
	foreach (glob(get_template_directory() . '/js/*.js') as $file) {
		wp_enqueue_script($file, get_theme_file_uri('/js/' . basename($file)), NULL, '');
	}
	foreach (glob(get_template_directory() . '/css/*.css') as $file) {
		wp_enqueue_style($file, get_theme_file_uri('/css/' . basename($file)));
	}
	wp_enqueue_style('main_styles', get_stylesheet_uri());
}
