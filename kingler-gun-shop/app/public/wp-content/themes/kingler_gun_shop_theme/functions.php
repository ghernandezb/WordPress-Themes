<?php  

function gun_shop_files(){
    wp_enqueue_style('google-font-hind', '//fonts.googleapis.com/css?family=Hind:300,400,700%7CLato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext' );

    wp_enqueue_style('kingler-woocommerce-layout', get_theme_file_uri('/js/vendor/woocommerce/css/woocommerce-layout.css') );
    wp_enqueue_style('kingler-woocommerce-smallscreen', get_theme_file_uri('/js/vendor/woocommerce/css/woocommerce-smallscreen.css') );
    wp_enqueue_style('kingler-woocommerce', get_theme_file_uri('/js/vendor/woocommerce/css/woocommerce.css') );
    wp_enqueue_style('kingler-settings', get_theme_file_uri('/js/vendor/revslider/css/settings.css') );
    wp_enqueue_style('kingler-tpl-revslider', get_theme_file_uri('/css/tpl-revslider.css') );
    wp_enqueue_style('kingler-fontello', get_theme_file_uri('/css/fontello/css/fontello.css') );
    wp_enqueue_style('kingler-style', get_theme_file_uri('/css/style.css') );
    wp_enqueue_style('kingler-animation', get_theme_file_uri('/css/animation.css') );
    wp_enqueue_style('kingler-shortcodes', get_theme_file_uri('/css/shortcodes.css') );
    wp_enqueue_style('kingler-plugin.woocommerce', get_theme_file_uri('/css/plugin.woocommerce.css') );
    wp_enqueue_style('kingler-skin', get_theme_file_uri('/css/skin.css') );
    wp_enqueue_style('kingler-responsive', get_theme_file_uri('/css/responsive.css') );
    wp_enqueue_style('kingler-messages', get_theme_file_uri('/css/messages.css') );
    wp_enqueue_style('kingler-magnific-popup.min', get_theme_file_uri('/js/vendor/magnific/magnific-popup.min.css') );
    wp_enqueue_style('kingler-swiper.min', get_theme_file_uri('/js/vendor/swiper/swiper.min.css') );
    
    wp_enqueue_script('js-jquery', get_theme_file_uri('/js/jquery/jquery.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery-migrate.min', get_theme_file_uri('/js/jquery/jquery-migrate.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-main', get_theme_file_uri('/js/_main.js'), NULL, '1.0', true );
    wp_enqueue_script('js-trx_utils.min', get_theme_file_uri('/js/trx_utils.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-packed', get_theme_file_uri('/js/_packed.js'), NULL, '1.0', true );
    wp_enqueue_script('js-lightbox', get_theme_file_uri('/js/vendor/essential-grid/js/lightbox.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery.themepunch.tools.min', get_theme_file_uri('/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery.themepunch.revolution.min', get_theme_file_uri('/js/vendor/revslider/js/jquery.themepunch.revolution.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.slideanims.min', get_theme_file_uri('/js/vendor/revslider/js/extensions/revolution.extension.slideanims.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.actions.min', get_theme_file_uri('/js/vendor/revslider/js/extensions/revolution.extension.actions.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.layeranimation.min', get_theme_file_uri('/js/vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-revolution.extension.navigation.min', get_theme_file_uri('/js/vendor/revslider/js/extensions/revolution.extension.navigation.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-tpl-revslider-general', get_theme_file_uri('/js/tpl-revslider-general.js'), NULL, '1.0', true );
    wp_enqueue_script('js-tpl-revslider-1', get_theme_file_uri('/js/tpl-revslider-1.js'), NULL, '1.0', true );
    wp_enqueue_script('js-modernizr.min', get_theme_file_uri('/js/vendor/photostack/modernizr.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-superfish', get_theme_file_uri('/js/vendor/superfish.js'), NULL, '1.0', true );
    wp_enqueue_script('js-utils', get_theme_file_uri('/js/utils.js'), NULL, '1.0', true );
    wp_enqueue_script('js-core.init', get_theme_file_uri('/js/core.init.js'), NULL, '1.0', true );
    wp_enqueue_script('js-init', get_theme_file_uri('/js/init.js'), NULL, '1.0', true );
    wp_enqueue_script('js-shortcodes', get_theme_file_uri('/js/shortcodes.js'), NULL, '1.0', true );
    wp_enqueue_script('js-messages', get_theme_file_uri('/js/messages.js'), NULL, '1.0', true );
    wp_enqueue_script('js-jquery.magnific-popup.min', get_theme_file_uri('/js/vendor/magnific/jquery.magnific-popup.min.js'), NULL, '1.0', true );
    wp_enqueue_script('js-swiper.min', get_theme_file_uri('/js/vendor/swiper/swiper.min.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts', 'gun_shop_files');

?>