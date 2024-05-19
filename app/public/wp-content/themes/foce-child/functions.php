<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );
function theme_enqueue_assets() {
    // Enqueue parent style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue custom script
    wp_enqueue_script( 'nuages-script', get_stylesheet_directory_uri() . '/nuages.js', array('jquery'), null, true );

    // Enqueue custom script
    wp_enqueue_script( 'menu-script', get_stylesheet_directory_uri() . '/menu.js', array('jquery'), null, true );

    // Enqueue custom script
    wp_enqueue_script( 'titre-script', get_stylesheet_directory_uri() . '/titleanimation.js', array('jquery'), null, true );

    // Enqueue custom script
    wp_enqueue_script( 'carousel-script', get_stylesheet_directory_uri() . '/carousel.js', array('jquery'), null, true );
}

// Get customizer options from parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}


