<?php
/**
 * @package AfricantineDecoEffects
 */

/*
Plugin Name: Africantine Deco Effects
Plugin URI: https://github.com/louisisaacdiouf/africantine-deco-effects
Description: Décoration du site pour les fêtes comme Noël, Saint-Valentin, etc.
Version: 1.0.0
Author: Louis Isaac DIOUF
Author URI: https://github.com/louisisaacdiouf
License: GPLv2 or later
Text Domain: africantine-deco-effects
*/

defined( 'ABSPATH' ) or die( 'Are you lost' );

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}

// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;

// if (!class_exists('DecoEffects')) {
//     class DecoEffects {
//         public $plugin;
    
//         function __construct() {
//             $this->plugin = plugin_basename(__FILE__);
//         }
    
//         function activate() {
//             Activate::activate();
//         }
    
//         function deactivate() {
//             Deactivate::deactivate();
//         }

//         function register() {
//             AdminPages::register();
//         }
//     }
    
//     if (class_exists('DecoEffects')) {
//         $decoEffects = new DecoEffects();
//         $decoEffects->register();
    
//         // Activation
//         register_activation_hook(__FILE__, array($decoEffects, 'activate'));
    
//         // Deactivation
//         register_deactivation_hook(__FILE__, array($decoEffects, 'deactivate'));
//     }        
// }