<?php

namespace FO_HubWoo_Addons;

abstract class Abstract_Plugin
{
    // The single instance of the class.
    protected static $_instance = null;
    // concrete class extending this class
    protected static $called_class = null;
    // plugin name
    protected static $name = null;
    // plugin version
    protected static $version = null;
    // prefix for plugin
    protected static $prefix = null;
    // changelog for UpdateNotices
    protected static $changelog = array();
    // base plugin path
    protected static $plugin_path;
    // base plugin url
    protected static $plugin_url;
    //
    // core class methods
    //
    protected function __construct()
    {
    }
    public static function instance()
    {
    }
    public function __clone()
    {
    }
    public function __wakeup()
    {
    }
    //
    // callbacks
    //
    // add update notice
    public function add_update_notice()
    {
    }
    public function called_class_init()
    {
    }
    //
    // public static methods
    //
    // getter for plugin name
    public static function get_name()
    {
    }
    // getter for changelog
    public static function get_changelog()
    {
    }
    // getter for VERSION
    public static function get_version()
    {
    }
    // getter function for PREFIX
    public static function get_prefix()
    {
    }
    // getter function for $plugin_url
    public static function get_plugin_url()
    {
    }
    // setter function for $plugin_url
    public static function set_plugin_url()
    {
    }
    // getter function for $plugin_path/classes/
    public static function get_class_path()
    {
    }
    // getter function for $plugin_path
    public static function get_plugin_path()
    {
    }
    // setter function for $plugin_path
    public static function set_plugin_path($plugin_path)
    {
    }
}
class Plugin extends \FO_HubWoo_Addons\Abstract_Plugin
{
    // plugin name
    protected static $name = 'HubSpot for WooCommerce Addons';
    // plugin version
    protected static $version = '1.0.0';
    // prefix for plugin
    protected static $prefix = 'fo_hubwoo_addons_';
    // changelog for UpdateNotices
    protected static $changelog = array();
    //
    // main class methods
    //
}
class Admin
{
    // The single instance of the class.
    protected static $_instance = null;
    // Constructor
    protected function __construct()
    {
    }
    // Main Extension Instance.
    public static function instance()
    {
    }
    // Cloning is forbidden.
    public function __clone()
    {
    }
    // Unserializing instances of this class is forbidden.
    public function __wakeup()
    {
    }
    //
    // main class methods
    //
    function order_properties($properties)
    {
    }
    // adds additional properties to HubSpot contact sync
    public function add_hs_contact_properties($properties, $contact_id)
    {
    }
}
class Frontend
{
    // The single instance of the class.
    protected static $_instance = null;
    protected static $bt_gateway = null;
    // Constructor
    protected function __construct()
    {
    }
    // Main Extension Instance.
    public static function instance()
    {
    }
    // Cloning is forbidden.
    public function __clone()
    {
    }
    // Unserializing instances of this class is forbidden.
    public function __wakeup()
    {
    }
    //
    // main class methods
    //
    // move opt-in checkbox on checkout page
    public function move_optin_checkbox()
    {
    }
    // allows us to remove hook when it was added using a non-static class
    private static function remove_filters_for_anonymous_class($hook_name, $class_name, $method_name, $priority)
    {
    }
}