<?php
/**
 * seccion de frontend
 */
function coltman_novelics_take_form() {

	wp_register_script( 'coltman-novelics', plugin_dir_url( __FILE__ ).'/assets/js/main.js', true, '1' );
	wp_enqueue_script( 'coltman-novelics' );

}
add_action( 'wp_enqueue_scripts', 'coltman_novelics_take_form' );
require __DIR__ .'/shortcode.php';