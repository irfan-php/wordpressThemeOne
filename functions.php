
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

    if ( ! defined( 'ThemeOne_DIR_URI' ) ) {
        define( 'ThemeOne_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_URI' ) ) {
        define( 'ThemeOne_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_PATH' ) ) {
        define( 'ThemeOne_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_JS_URI' ) ) {
        define( 'ThemeOne_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_JS_DIR_PATH' ) ) {
        define( 'ThemeOne_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_IMG_URI' ) ) {
        define( 'ThemeOne_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_CSS_URI' ) ) {
        define( 'ThemeOne_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_CSS_DIR_PATH' ) ) {
        define( 'ThemeOne_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
    }
    
    if ( ! defined( 'ThemeOne_BUILD_LIB_URI' ) ) {
        define( 'ThemeOne_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
    }

    require_once ThemeOne_DIR_PATH . '/inc/helpers/autoloader.php';

    function themeOne_get_theme_instance()
    {
        \ThemeOne_THEME\Inc\ThemeOne_THEME::get_instance();
    }

    themeOne_get_theme_instance();
 ?>