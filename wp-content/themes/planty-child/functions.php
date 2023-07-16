<?php

/**
 ** activation theme
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
// delete <p> to contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_directory_uri() . '/assets/css/theme.css',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/css/theme.css')
    );
}
// This theme uses wp_nav_menu() in one location and footer menu
register_nav_menus(
    array(
        'menu-1' => esc_html__('Primary', 'planty'),
        'footer-menu' => esc_html__('Footer-menu', 'planty')
    )
);

function add_extra_item_to_nav_menu($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'menu-1') {
        $items .= '<li><a class="nav-connect" href="<?php echo admin_url(); ?>">Admin</a></li>';
    }
    return $items;
}
