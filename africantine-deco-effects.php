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

defined('ABSPATH') or die('Are you lost');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;

register_activation_hook(__FILE__, 'activate_deco_effects');
register_deactivation_hook(__FILE__, 'deactivate_deco_effects');

function activate_deco_effects()
{
    Activate::activate();
}

function deactivate_deco_effects()
{
    Deactivate::deactivate();
}

add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});