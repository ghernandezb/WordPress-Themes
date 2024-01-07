<?php 

    function ebo_files(){
        wp_enqueue_style('ebo_vendor', get_theme_file_uri('/assets/css/vendor.css'));
        wp_enqueue_style('ebo_style', get_theme_file_uri('/assets/css/style.css'));
        wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700ii%7CMerriweather:300,300i,400,400i,700,700i,900,900i' );
        wp_enqueue_script('js_vendor', get_theme_file_uri('/assets/js/vendor.js'), array('jquery'), '1.0', true );
        wp_enqueue_script('js_functions', get_theme_file_uri('/assets/js/functions.js'), NULL, '1.0', true );
    }

    add_action('wp_enqueue_scripts','ebo_files');

?>