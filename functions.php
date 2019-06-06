<?php
// Подключаем jquery
function my_scripts_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '/wp-content/themes/my_business/js/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	// wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>
