<?php
/**
 * Sydney child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'sydney_child_enqueue' );
function sydney_child_enqueue() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* ADD YOUR CUSTOM FUNCTIONS BELOW */

function my_scripts_method() {
wp_enqueue_script(
    'custom-script',
    get_stylesheet_directory_uri() . '/custom_script.js',
    array( 'jquery' ),'',true
 );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
add_filter( 'https_ssl_verify', '__return_false' );
?>
