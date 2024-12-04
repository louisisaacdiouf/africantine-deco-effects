<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc\Pages;

class Admin {
    public static function register() {
        add_action('admin_menu', [__CLASS__, 'add_admin_pages']);
    }

    public static function add_admin_pages() {
        add_menu_page(
            'Africantine Deco Effects',
            'Africantine Deco',
            'manage_options',
            'africantine-deco-effects',
            array(__CLASS__, 'admin_index'),
            'dashicons-heart',
            110
        );
    }

    public static function admin_index() {
        // Require template
        require_once PLUGIN_PATH . 'templates/admin.php';
    }

    
}