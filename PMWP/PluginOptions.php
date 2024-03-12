<?php
/**
 * Utility for wp_options needed by the plugin
*/
namespace PMWP;

class PluginOptions {
    public function __construct() {

    }

    static function pmpw_get_option(string $option_name){
        return $option_name;
    }

    static function pmwp_set_option(string $name, mixed $value): bool {
        return true;
    }
    
}