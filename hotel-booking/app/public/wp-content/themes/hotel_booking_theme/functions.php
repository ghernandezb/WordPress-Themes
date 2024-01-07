<?php 

function hotel_files(){
    wp_enqueue_style('google-font-playfair', '//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' );
    wp_enqueue_style('google-font-karla', '//fonts.googleapis.com/css?family=Karla:700,400' );
    wp_enqueue_style('google-font-lora', '//fonts.googleapis.com/css?family=Lora:400,700' );

    wp_enqueue_style('hotel_font-awesome', get_theme_file_uri('/css/font-awesome.css'));
    wp_enqueue_style('hotel_bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('hotel_uikit', get_theme_file_uri('/css/uikit.min.css'));
    wp_enqueue_style('hotel_animate', get_theme_file_uri('/css/animate.css'));
    wp_enqueue_style('hotel_datepicker', get_theme_file_uri('/css/datepicker.css'));
    wp_enqueue_style('hotel_owl-carousel', get_theme_file_uri('/css/owl.carousel.css'));
    wp_enqueue_style('hotel_slider', get_theme_file_uri('/css/rev-slider/settings.css'));
    wp_enqueue_style('hotel_lightslider', get_theme_file_uri('/css/lightslider.css'));    
    wp_enqueue_style('hotel_reset', get_theme_file_uri('/css/reset.css'));
    wp_enqueue_style('hotel_main_file-2', get_theme_file_uri('/css/main-style2.css'));
    wp_enqueue_style('hotel_responsive', get_theme_file_uri('/css/responsive.css'));

    wp_enqueue_script('js_jquery-min', get_theme_file_uri('/js/vendor/jquery-1.11.2.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_jquery.themepunch.plugins.min', get_theme_file_uri('/js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_jquery.themepunch.revolution', get_theme_file_uri('/js/rev-slider/rs-plugin/jquery.themepunch.revolution.js'), NULL, '1.0', true );
    wp_enqueue_script('js_rs.home', get_theme_file_uri('/js/rev-slider/rs.home.js'), NULL, '1.0', true );
    wp_enqueue_script('js_uikit.min', get_theme_file_uri('/js/uikit.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_jquery.easing.1.3.min', get_theme_file_uri('/js/jquery.easing.1.3.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_datepicker', get_theme_file_uri('/js/datepicker.js'), NULL, '1.0', true );
    wp_enqueue_script('js_jquery.scrollUp.min', get_theme_file_uri('/js/jquery.scrollUp.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_owl.carousel.min', get_theme_file_uri('/js/owl.carousel.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_lightslider', get_theme_file_uri('/js/lightslider.js'), NULL, '1.0', true );
    wp_enqueue_script('js_wow.min', get_theme_file_uri('/js/wow.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js_main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts','hotel_files');

?>