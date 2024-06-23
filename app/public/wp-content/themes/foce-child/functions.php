<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function my_theme_enqueue_scripts() {
    wp_enqueue_script('clouds-script', get_stylesheet_directory_uri() . '/js/clouds.js', [], false, true);
    wp_enqueue_script('flowers-script', get_stylesheet_directory_uri() . '/js/flowers.js', [], false, true);
    wp_enqueue_script('animations-script', get_stylesheet_directory_uri() . '/js/animations.js', [], false, true);
    wp_enqueue_script('menu-script', get_stylesheet_directory_uri() . '/js/menu.js', [], false, true);
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_script('swiper-cdn', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"', array(), '1.0', true);
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/js/swiper.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts'); 


// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}