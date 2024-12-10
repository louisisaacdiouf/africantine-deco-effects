<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc\Base;

class Enqueue extends BaseController
{
    public function register()
    {
        // Utilisation d'un hook avec une instance de la classe
        add_action('admin_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue()
    {
        // Utilisation de $this->plugin_url correctement
        wp_enqueue_style('mypluginstyle', $this->plugin_url . 'assets/style.css');
        wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/script.js');
    }
}
