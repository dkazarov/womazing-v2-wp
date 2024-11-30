<?php

//Cтили и скрипты
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com' );
	wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com' );
	wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&display=swap' );
	wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css' );



	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});

?>