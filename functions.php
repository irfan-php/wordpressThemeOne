
<?php
/**
 * Theme Functions.
 * 
 * @package ThemeOne
 */

    function themeOne_enqueue_style()
    {
        //wp_enqueue_style('stylesheet', get_template_directory_uri().'/style.css'); or use below
        wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');
    }

    function themeOne_enqueue_script()
    {
        wp_enqueue_script('main', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true);
    }


    add_action('wp_enqueue_scripts', 'themeOne_enqueue_style');
    add_action('wp_enqueue_scripts', 'themeOne_enqueue_script');
 ?>