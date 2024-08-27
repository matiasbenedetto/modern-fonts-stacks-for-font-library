<?php
/*
Plugin Name: Modern Fonts Stacks for Font Library
Plugin URI: https://github.com/matiasbenedetto/modern-fonts-stacks-for-wp-font-library/
Description: Add a font collection of system fonts to your WordPress Font Library.
Version: 1.0.8
Author: Matias Benedetto
Author URI: https://mebenedetto.com
License: GPLv2 or later
Text Domain: modern-fonts-stacks-for-font-library
*/

if ( function_exists( 'wp_register_font_collection' ) ) {
    function mfsffl_register_modern_fonts_stacks() {
        $categories = array(
            array(
                'slug' => 'sans-serif',
                'name' => __('Sans Serif', 'modern-fonts-stacks-for-font-library' )
            ),
            array(
                'slug' => 'serif',
                'name' => __('Serif', 'modern-fonts-stacks-for-font-library' )
            ),
            array(
                'slug' => 'monospace',
                'name' => __('Monospace', 'modern-fonts-stacks-for-font-library' )
            ),
            array(
                'slug' => 'handwriting',
                'name' => __('Handwriting', 'modern-fonts-stacks-for-font-library' )
            )
        );

        $font_collection = array(
            'name'          => __('Modern Fonts Stacks', 'modern-fonts-stacks-for-font-library'),
            'description'   => __('Stacks of modern systems fonts, not font face assets needed. The look will vary on each system.', 'modern-fonts-stacks-for-font-library'),
            'categories'    => $categories,
            'font_families' => path_join( __DIR__, 'collection.json' ),
        );

        wp_register_font_collection( 'modern-fonts-stacks', $font_collection );
    }

    add_action( 'init', 'mfsffl_register_modern_fonts_stacks' );
}

