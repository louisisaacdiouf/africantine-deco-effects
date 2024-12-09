<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc\Base;

class SettingsLinks extends BaseController
{
    public function register()
    {
        add_filter("plugin_action_links_$this->plugin", [$this, 'settings_link']);
    }
    public static function settings_link($links)
    {
        // Add custom settings link
        $settings_link = '<a href="admin.php?page=africantine-deco-effects">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}