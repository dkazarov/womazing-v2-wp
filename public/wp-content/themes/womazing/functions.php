<?php

//Cтили и скрипты
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com' );
	wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com' );
	wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&display=swap' );
	wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_enqueue_script( 'main.min', get_template_directory_uri() . '/assets/js/main.min.js', array(), 'null', true );
});

add_theme_support( 'post-thumbnails');
add_theme_support( 'title-tag');
add_theme_support( 'custom-logo');
add_theme_support( 'custom-background' );
add_theme_support( 'align-wide' );
add_theme_support( 'menus' );

add_action('init', 'admin_bar' );

function admin_bar(){

	if( is_user_logged_in() ){
		add_filter( 'show_admin_bar', '__return_true' , 1000 );
	}
}


?>