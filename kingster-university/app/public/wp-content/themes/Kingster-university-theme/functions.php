<?php

function univerity_files(){
    wp_enqueue_style('style', get_theme_file_uri('/plugins/goodlayers-core/plugins/combine/style.css') );
    wp_enqueue_style('page-builder', get_theme_file_uri('/plugins/goodlayers-core/include/css/page-builder.css') );
    wp_enqueue_style('settings', get_theme_file_uri('/plugins/revslider/public/assets/css/settings.css') );
    wp_enqueue_style('style-core', get_theme_file_uri('/css/style-core.css') );
    wp_enqueue_style('kingster-style-custom', get_theme_file_uri('/css/kingster-style-custom.css') );
    wp_enqueue_style('Google-font-Playfair', '//fonts.googleapis.com/css?family=Playfair+Display:700%2C400' );
    wp_enqueue_style('Google-font-Poppins', '//fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3' );

    wp_enqueue_script('js-jquery', get_theme_file_uri('/js/jquery/jquery.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery-migrate.min', get_theme_file_uri('/js/jquery/jquery-migrate.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery.themepunch.tools.min', get_theme_file_uri('/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery.themepunch.revolution.min', get_theme_file_uri('/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.slideanims.min', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.layeranimation.min', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.kenburn.min', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.navigation.min', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.parallax.min', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.actions.min', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.video.min', get_theme_file_uri('/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-script', get_theme_file_uri('/plugins/goodlayers-core/plugins/combine/script.js'), NULL, '1.0', true );
    wp_enqueue_script('js-page-builder', get_theme_file_uri('/plugins/goodlayers-core/include/js/page-builder.js'), NULL, '1.0', true );
    wp_enqueue_script('js-effect.min', get_theme_file_uri('/js/jquery/ui/effect.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-plugins.min', get_theme_file_uri('/js/plugins.min.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts', 'univerity_files');

?>