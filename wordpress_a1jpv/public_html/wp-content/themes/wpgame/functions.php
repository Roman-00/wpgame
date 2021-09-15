<?php
// -------------------------------------------------- Подключаем файлы со скриптами и стилями
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'wpgame' );
// add_action('wp_print_styles', 'wpgame'); // можно использовать этот хук он более поздний
function wpgame() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style.min.css' );


	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}