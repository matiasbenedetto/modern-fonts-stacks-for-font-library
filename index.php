<?php
/*
Plugin Name: Modern Fonts Stacks
Plugin URI: https://github.com/matiasbenedetto/modern-fonts-stacks-for-wp-font-library/
Description: Add a font collection to your WordPress Font Library.
Version: 0.0.4
Author: Matias Benedetto
Author URI: https://wordpress.org/
License: GPLv2 or later
Text Domain: modern-fonts-stacks-for-wp-font-library
*/

if ( function_exists( 'wp_register_font_collection' ) ) {

    function register_modern_fonts_stacks() {
        wp_register_font_collection ( 'modern-fonts-stacks', path_join( __DIR__, 'collection.json' ) );
    }

    add_action( 'init', 'register_modern_fonts_stacks' );
    
}
