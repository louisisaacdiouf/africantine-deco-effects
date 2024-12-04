<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc;

class Activate {
    public static function activate() {
        // Add new table for plugin
        // global $wpdb;
        // $wpdb->query
        // Store plugin config into the plugin table
        flush_rewrite_rules();
    }
}