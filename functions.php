<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_enqueue_scripts', 'script_theme');

function script_theme() {
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/scripts.js', array('jquery'), '1.0', true);
}
function style_theme() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}


add_filter( 'mce_css', 'plugin_mce_css' );
function plugin_mce_css( $mce_css ) {
	if ( ! empty( $mce_css ) ) $mce_css .= ',';

	$font_url = 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap';
	// $mce_css .= urlencode( $font_url ); // or next string
	$mce_css .= str_replace( ',', '%2C', $font_url );

	return $mce_css;
}

add_action( 'wp_ajax_get_posts_data', 'get_posts_data' );
add_action( 'wp_ajax_nopriv_get_posts_data', 'get_posts_data' );

function get_posts_data() {
$posts = get_field_objects();
wp_send_json( $posts ); 
}	
?>