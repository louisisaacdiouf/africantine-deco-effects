<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc;

final class Init {
    /**
     * Store all classes inside an array
     * @return array full list of classes
     */
    public static function get_services() {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class,
        ];
    }

    /**
     * Loop through the classes, initialize them
     * and call the `register()` method if it exists
     * @return void
     */
    public static function register_services() {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
    /**
     * Initialize a class
     * @param mixed $class
     * @return object
     */
    private static function instantiate($class) {
        return new $class();
    }
}