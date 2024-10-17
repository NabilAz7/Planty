<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

    function montheme_supports()
    {
        register_nav_menu('header-planty', 'Menu principale planty');
        register_nav_menu('footer-planty', 'Menu pied de page planty');
    }
    
    add_action('after_setup_theme', 'montheme_supports'); 

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function add_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
        wp_enqueue_style( 'theme_css', trailingslashit( get_stylesheet_directory_uri() ) . '/theme.css', array(  ) , filemtime(get_stylesheet_directory() .'/theme.css'));
        wp_enqueue_style( 'google-fonts-syne', 'https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap', false );
    }
endif;
add_action( 'wp_enqueue_scripts', 'add_css', 10 );



// END ENQUEUE PARENT ACTION
