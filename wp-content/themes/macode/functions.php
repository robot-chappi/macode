<?php

// подключить стили и скрипты
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
	
	wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css');
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', true);
    wp_enqueue_script('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', true);
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), 'null', true );
    
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>