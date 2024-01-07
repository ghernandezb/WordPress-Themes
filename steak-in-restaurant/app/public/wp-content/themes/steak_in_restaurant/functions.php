<?php 

function restaurant_main_files(){
    wp_enqueue_style('external', get_theme_file_uri('/assets/css/external.css') );
    wp_enqueue_style('bootstrap.min', get_theme_file_uri('/assets/css/bootstrap.min.css') );
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css') );
    wp_enqueue_style('settings', get_theme_file_uri('/assets/revolution/css/settings.css') );
    wp_enqueue_style('layers', get_theme_file_uri('/assets/revolution/css/layers.css') );
    wp_enqueue_style('navigation', get_theme_file_uri('/assets/revolution/css/navigation.css') );
    wp_enqueue_style('google-font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,700,900%7CRuthie%7CAbril+Fatface' );
    
    wp_enqueue_script('js-jquery-2.2.4.min', get_theme_file_uri('/assets/js/jquery-2.2.4.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-plugins', get_theme_file_uri('/assets/js/plugins.js'), NULL, '1.0', true );
    wp_enqueue_script('js-functions', get_theme_file_uri('/assets/js/functions.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery.themepunch.tools.min', get_theme_file_uri('/assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery.themepunch.revolution.min', get_theme_file_uri('/assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.video.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.video.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.slideanims.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.slideanims.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.actions.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.actions.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.layeranimation.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.kenburn.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.kenburn.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.navigation.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.navigation.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.migration.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.migration.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.parallax.min', get_theme_file_uri('/assets/revolution/js/extensions/revolution.extension.parallax.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-rsconfig', get_theme_file_uri('/assets/js/rsconfig.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts', 'restaurant_main_files');

?>