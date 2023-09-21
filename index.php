
<?php
/*
Plugin Name: Modern Fonts Stacks
Plugin URI: https://github.com/matiasbenedetto/modern-fonts-stacks-for-wp-font-library/
Description: Add a font collection to your WordPress Font Library.
Version: 0.1
Author: Various Authors
Author URI: https://wordpress.org/
License: GPLv2 or later
Text Domain: modern-fonts-stacks
*/

$modern_fonts_config = array (
    'id'             => 'modern-fonts-stacks',
    'name'           => 'Modern Fonts Stacks',
    'description'    => 'Stacks of modern systems fonts, not font face assets needed. The look will vary on each system.',
    'data_json_file' => path_join( __DIR__, 'collection.json' ),
);

if ( function_exists( 'wp_register_font_collection' ) ) {
    wp_register_font_collection ( $modern_fonts_config );
}

?>