<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

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

// caroussel
function mon_theme_enqueue_scripts() {
    // Enregistrer le fichier JavaScript
    wp_register_script('enfant_script', get_template_directory_uri() . '/carousel.js', array(), '1.0.0', true);

    // Charger le fichier JavaScript
    wp_enqueue_script('enfant_script');
}

// Ajouter l'action pour charger les scripts
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_scripts');



//Nuages
function mon_theme_enqueue_scripts() {
    // Enregistrer le fichier JavaScript
    wp_register_script('enfant_script', get_template_directory_uri() . '/nuages.js', array(), '1.0.0', true);

    // Charger le fichier JavaScript
    wp_enqueue_script('enfant_script');
}

// Ajouter l'action pour charger les scripts
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_scripts');



//menu
function mon_theme_enqueue_scripts() {
    // Enregistrer le fichier JavaScript
    wp_register_script('enfant_script', get_template_directory_uri() . '/menu.js', array(), '1.0.0', true);

    // Charger le fichier JavaScript
    wp_enqueue_script('enfant_script');
}

// Ajouter l'action pour charger les scripts
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_scripts');


//<script src="../../wp-content/themes/foce-child/menu.js"></script>

//<script src="../../wp-content/themes/foce-child/nuages.js"></script>

//<script src="../../wp-content/themes/foce-child/carousel.js"></script>0