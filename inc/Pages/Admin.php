<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc\Pages;
use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;

class Admin extends BaseController
{
    public $pages;
    public $settings;
    public $subpages;
    public $callbacks;
    public $plugin_slug = 'africantine-deco-effects';

    public function setPages()
    {
        $this->pages = [
            [
                'page_title' => 'Africantine Deco Effects',
                'menu_title' => 'Africantine Deco',
                'capability' => 'manage_options',
                'menu_slug' => $this->plugin_slug,
                'callback' => [$this->callbacks, 'adminDashboard'],
                'icon_url' => 'dashicons-heart',
                'position' => 110
            ]
        ];
    }

    public function setSubpages()
    {
        $this->subpages = [
            // [
            //     'parent_slug' => $this->plugin_slug,
            //     'page_title' => 'Deco Effects Manager',
            //     'menu_title' => 'Deco Effects Manager',
            //     'capability' => 'manage_options',
            //     'menu_slug' => 'deco_effects_manager',
            //     'callback' => function () {
            //         echo "<h1>Deco Effects Subpage</h1>";
            //     }
            // ]
        ];
    }

    public function setSettings()
    {
        $args = [
            [
                'option_group' => 'deco_options_group',
                'option_name' => 'density',
                'callback' => [$this->callbacks, 'decoOptionsGroup']
            ]
        ];

        $this->settings->setSettings($args);
    }
    public function setSections()
    {
        $args = [
            [
                'id' => 'deco_admin_index',
                'title' => 'Settings',
                'callback' => [$this->callbacks, 'decoAdminSection'],
                'page' => $this->plugin_slug
            ]
        ];

        $this->settings->setSections($args);
    }
    public function setFields()
    {
        $args = [
            // [
            //     'id' => 'particles',
            //     'title' => 'Particle',
            //     'callback' => [$this->callbacks, 'setParticles'],
            //     'page' => $this->plugin_slug,
            //     'section' => 'deco_admin_index',
            //     'args' => [
            //         'label_for' => 'particles',
            //         'class' => 'particles-img'
            //     ]
            // ],
            [
                'id' => 'density',
                'title' => 'Density',
                'callback' => [$this->callbacks, 'setDensity'],
                'page' => $this->plugin_slug,
                'section' => 'deco_admin_index',
                'args' => [
                    'label_for' => 'density',
                    'class' => 'density'
                ]
            ]
        ];

        $this->settings->setFields($args);
    }

    public function register()
    {
        $this->settings = new SettingsApi();
        $this->callbacks = new AdminCallbacks();

        $this->setPages();
        $this->setSubpages();

        $this->setSettings();
        $this->setSections();
        $this->setFields();

        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }
}