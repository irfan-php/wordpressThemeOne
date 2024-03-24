
<?php
/**
 * Theme Functions.
 * 
 * @package ThemeOne
 */

    if ( ! defined('ThemeOne_DIR_PATH'))
    {
        define( 'ThemeOne_DIR_PATH' , untrailingslashit( get_template_directory() ));
    }

    require_once ThemeOne_DIR_PATH . '/inc/helpers/autoloader.php';

    function themeOne_get_theme_instance()
    {
        \ThemeOne_THEME\Inc\ThemeOne_THEME::get_instance();
    }

    themeOne_get_theme_instance();

    function themeOne_enqueue_style()
    {

        //Register Style
        wp_register_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');
        wp_register_style('bootstrapcss', get_template_directory_uri(). '/assets/src/library/css/bootstrap.min.css', [], false, 'all');


        //Enqueue Style
        wp_enqueue_style('style');
        wp_enqueue_style('bootstrapcss');
    }

    function themeOne_enqueue_script()
    {
        //Register Script
        wp_register_script('main', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true);
        wp_register_script('bootstrap-bundlejs', get_template_directory_uri().'/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true);
    


        //Enqueue Script
        wp_enqueue_script('main');
        wp_enqueue_script('bootstrap-bundlejs');
    }


    add_action('wp_enqueue_scripts', 'themeOne_enqueue_style');
    add_action('wp_enqueue_scripts', 'themeOne_enqueue_script');
 ?>