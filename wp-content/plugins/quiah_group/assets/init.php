<?php

/**
 * Proper way to enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'bmn-styles', PLUGIN_DIR_URL . '/assets/css/main.css' );
  /*  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );*/
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );