<?php 

wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css');
wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.min.js');
	wp_enqueue_script( 'jquery' );
}

wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.carousel.min.js', 'jquery', null, true);
wp_enqueue_script( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', 'jquery', null, true);
wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/main.js', 'jquery', null, true);

add_theme_support( 'menus' );
add_theme_support( 'custom-logo' );