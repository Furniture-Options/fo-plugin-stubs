<?php

namespace FO_Two_Month_Minimum;

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
class Plugin extends \FO_Two_Month_Minimum\Abstract_Plugin
{
    // plugin name
    protected static $name = 'Two Month Minimum';
    // plugin version
    protected static $version = '1.0.0';
    // prefix for plugin
    protected static $prefix = 'fo_two_month_minimum_';
    // changelog for UpdateNotices
    protected static $changelog = array('1.0.0' => array('Added: Open-ended subscriptions now require checking a two-month minimum requirement agreement'));
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
    // init plugin
    public function init_plugin()
    {
    }
}
class Frontend
{
    // The single instance of the class.
    protected static $_instance = null;
    protected static $error_msg = 'You must agree to the two-month minimum.';
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
    public function add_two_month_minimum_checkbox()
    {
    }
    public function save_two_month_minimum($order_id)
    {
    }
    public function add_css()
    {
    }
    public function process_checkout()
    {
    }
    private static function cart_has_open_ended_sub()
    {
    }
}