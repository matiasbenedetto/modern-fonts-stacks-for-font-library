<?php
/*
Plugin Name: Modern Fonts Stacks
Plugin URI: https://github.com/matiasbenedetto/modern-fonts-stacks-for-wp-font-library/
Description: Add a font collection to your WordPress Font Library.
Version: 0.0.5
Author: Matias Benedetto
Author URI: https://wordpress.org/
License: GPLv2 or later
Text Domain: modern-fonts-stacks-for-wp-font-library
*/

if ( function_exists( 'wp_register_font_collection' ) ) {
    function register_modern_fonts_stacks() {
        $categories = array(
            array(
                "slug" => "sans-serif",
                "name" => __("Sans Serif")
            ),
            array(
                "slug" => "serif",
                "name" => __("Serif")
            ),
            array(
                "slug" => "monospace",
                "name" => __("Monospace")
            ),
            array(
                "slug" => "handwriting",
                "name" => __("Handwriting")
            )
        );

        $font_collection = array(
            'name'          => __( 'Modern Fonts Stacks' ),
            'description'   => __( 'Stacks of modern systems fonts, not font face assets needed. The look will vary on each system.' ),
            'categories'    => $categories,
            'font_families' => path_join( __DIR__, 'collection.json' ),
        );

        wp_register_font_collection( 'modern-fonts-stacks', $font_collection );
    }

    add_action( 'init', 'register_modern_fonts_stacks' );
}

