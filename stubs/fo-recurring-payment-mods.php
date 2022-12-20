<?php

namespace FO_Recurring_Payment_Mods;

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
class Plugin extends \FO_Recurring_Payment_Mods\Abstract_Plugin
{
    // plugin name
    protected static $name = 'Recurring Payment Mods';
    // plugin version
    protected static $version = '1.0.0';
    // prefix for plugin
    protected static $prefix = 'fo_recurring_payment_mods';
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
    // allow invalid configuration on backend
    public function wp_error_added($code, $message, $data, $wp_error)
    {
    }
    public function add_css()
    {
    }
}
class Frontend
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
    // modify order action buttons in account center
    public function filter_order_actions($actions, $order)
    {
    }
}