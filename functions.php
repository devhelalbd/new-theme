<?php


function project_theme(){

     load_theme_textdomain('project_theme');

     register_nav_menus(array(
          'main-menu' => __('Main Menu', 'project_theme'),
          'footer-menu' => __('Footer Menu', 'project_theme'),
     ));
}

add_action('after_setup_theme', 'project_theme');


function theme_scrpts(){

     // Main Style CSS
     wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
     // Plugin CSS
     wp_enqueue_style( 'plugins-css', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0.0', 'all' );
     // Responsive CSS
     wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
     // Color CSS
     wp_enqueue_style( 'color-css', get_template_directory_uri() . '/assets/css/color.css', array(), '1.0.0', 'all' );
     // Bootstrap CSS
     wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
     // Fonts CSs
     wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/assets/fonts/iconfont.css', array(), '1.0.0', 'all' );

     // Main Stylesheet CSS
     wp_enqueue_style('style', get_stylesheet_uri() );

     // Jquery JS
     wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true );
     // Bootstrap JS
     wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
     // Slick Slider JS
     wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
     // Plugins JS
     wp_enqueue_script( 'plugins-script', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0.0', true );
     // Custom / Main JS
     wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'theme_scrpts');

?>