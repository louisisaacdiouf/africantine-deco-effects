<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc;

class Deactivate {
    public static function deactivate() {
        flush_rewrite_rules();
    }
}