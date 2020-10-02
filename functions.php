<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>

<?php 
//---------------ESTILOS---------------

wp_register_style('bootstrap',get_theme_file_uri().'/inc/bootstrap.min.css');
wp_register_style('wp_style',get_stylesheet_uri(),['bootstrap']);
//encolamos
function encolar_estilos(){
wp_enqueue_style('wp_style');}
//gancho
add_action('wp_enqueue_scripts','encolar_estilos');

//---------------JAVASCRIPT---------------

wp_register_script('jquery', get_theme_file_uri().'/inc/jquery.min.js','', '3.5.1', true);
wp_register_script('bootstrapjs', get_theme_file_uri().'/inc/bootstrap.min.js', ['jquery'], '4.5.2', true);
wp_register_script('wp_script', get_theme_file_uri().'/script.js', ['bootstrapjs','jquery'], '', true);
//encolamos
function encolar_scripts(){
wp_enqueue_script('wp_script');}
//gancho
add_action('wp_enqueue_scripts','encolar_scripts');