<?php
/**
 * License: GNU General Public License v2 or later
 * Description: Core functionality file for WordPress themes by Themes Machine. This file contains theme setup functions, enqueue scripts/styles, admin notices, and custom logic.
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 */


function hoverbest_add_welcome_page() {
    add_theme_page(
        __('Welcome to Theme', 'hoverbest'),
        __('Welcome to Theme', 'hoverbest'),
        'edit_theme_options',
        'theme-welcome',
        'hoverbest_render_welcome_page'
    );
}
add_action('admin_menu', 'hoverbest_add_welcome_page');

function hoverbest_render_welcome_page() {
    include get_template_directory() . '/theme-welcome/welcome-theme.php';
}


function hoverbest_admin_notice() {
    if (!is_admin()) {
        return;
    }

    global $pagenow;

    if ($pagenow === 'themes.php' && isset($_GET['activated'])) {
        $theme = wp_get_theme();
        $theme_name = strtoupper($theme->get('Name'));

        $theme_url = esc_url('https://themesmachine.com/index.php/product/hoverbest/');
        $welcome_url = esc_url(admin_url('themes.php?page=theme-welcome'));

        echo '<div class="notice notice-success is-dismissible">
            <p><strong>Thanks for activating <strong>' . esc_html($theme_name) . '</strong>!</strong></p>
            <p>' . esc_html__('Check out the Welcome Page to see the theme basic functionalities.', 'hoverbest') . '</p>
            <p>
                 <a href="' . $welcome_url . '" class="button button-primary">' . esc_html__('Welcome Page', 'hoverbest') . '</a>
                <a href="' . $theme_url. '" class="button" target="_blank" rel="noopener">' . esc_html__('Theme Page', 'hoverbest') . '</a>
            </p>
        </div>';
    }
}
add_action('admin_notices', 'hoverbest_admin_notice');


function hoverbest_theme_enqueue_styles()
{
    wp_enqueue_style(
        'hoverbest-theme-css',
        get_template_directory_uri() . '/source/css/theme.css',
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}
add_action('wp_enqueue_scripts', 'hoverbest_theme_enqueue_styles');

function hoverbest_theme_enqueue_scripts() {
    wp_enqueue_script(
        'hoverbest-theme-js',
        get_template_directory_uri() . '/source/js/theme.js',
        array(),
        false, 
        true
    );
}
add_action('wp_enqueue_scripts', 'hoverbest_theme_enqueue_scripts');

