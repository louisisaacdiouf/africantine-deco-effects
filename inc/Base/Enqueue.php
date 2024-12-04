<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc\Base;

class Enqueue {
    public function register() {
        add_action('admin_enqueue_scripts', [__CLASS__, 'enqueue']);
    }
    
    public static function enqueue() {
        wp_enqueue_style('mypluginstyle', PLUGIN_URL .'assets/style.css');
        wp_enqueue_style('mypluginscript', PLUGIN_URL .'assets/script.js');
    }
}