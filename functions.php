<?php



function theme_scrpts(){
     wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
     wp_enqueue_style( 'plugins-css', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0.0', 'all' );
     wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
     wp_enqueue_style( 'color-css', get_template_directory_uri() . '/assets/css/color.css', array(), '1.0.0', 'all' );

     wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
     wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/assets/fonts/iconfont.css', array(), '1.0.0', 'all' );
}

add_action('wp_enqueue_scripts', 'theme_scrpts');



?>