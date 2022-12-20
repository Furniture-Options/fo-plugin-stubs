<?php

namespace FO_Housewares_Setup;

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
class Plugin extends \FO_Housewares_Setup\Abstract_Plugin
{
    // plugin name
    protected static $name = 'Housewares Setup';
    // plugin version
    protected static $version = '1.0.0';
    // prefix for plugin
    protected static $prefix = 'fo_housewares_setup_';
    // changelog for UpdateNotices
    protected static $changelog = array('1.0.0' => array('Fixed: Housewares setup service should now calculate correctly'));
    //
    // main class methods
    //
    public function __construct()
    {
    }
    // hide $0 housewares setup fees
    public function remove_empty_housewares_fee($total_rows, $order, $tax_display)
    {
    }
    // fix checkout addon name
    public function fix_checkout_add_on_name($safe_text, $text)
    {
    }
    // recalculate percentage-based checkout add-ons when updating order/subscription total
    public function recalculate_checkout_add_on_fees_on_order($and_taxes, $order)
    {
    }
    // modify fee data before sending to AvaTax
    public function modify_avatax_api_fee_line_data($attrs, $fee)
    {
    }
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
    // set housewares setup cost based on our criteria
    public function modify_checkout_add_ons_options_cost($cost, $options, $add_on)
    {
    }
    // show or hide housewares setup service on checkout
    public function hide_or_show_housewares_setup_service($checkout_fields)
    {
    }
}