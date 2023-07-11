<?php
/**
 ** activation theme
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style',  get_stylesheet_directory_uri() . '/assets/css/theme.css',
        array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css')
    );
}
// This theme uses wp_nav_menu() in one location and footer menu
register_nav_menus(
    array(
        'menu-1' => esc_html__('Primary', 'planty'),
        'footer-menu' => esc_html__('Footer-menu', 'planty')
    )
);

// Remove auto p from Contact Form 7 
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 
