<?php
// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_scripts','custom_phone');
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts()
{
  wp_enqueue_style('main', get_template_directory_uri() . '/css/style.min.css');
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.min.js', array(), '1.0.0', true);
  
}

add_theme_support( 'custom-logo', [
	'height'      => 50,
	'width'       => 160,
	'flex-width'  => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );

function custom_phone() {
  
}
