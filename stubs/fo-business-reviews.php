<?php

namespace FO_Reviews;

class Frontend
{
    /**
     * The single instance of the class.
     *
     * @var null|object
     */
    protected static $instance = null;
    protected function __construct()
    {
    }
    /** Main Extension Instance. */
    public static function instance()
    {
    }
    /** Cloning is forbidden. */
    public function __clone()
    {
    }
    /** Unserializing instances of this class is forbidden. */
    public function __wakeup()
    {
    }
    //
    // main class methods.
    //
    private function init_plugin()
    {
    }
    public function shortcode()
    {
    }
    public function enqueue_scripts()
    {
    }
}
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
    public static function get_helpers()
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
    // getter function for Plugin ID
    public static function get_id()
    {
    }
    // getter function for dashed PREFIX
    public static function get_dashed_prefix()
    {
    }
    // getter function for text domain
    public static function get_text_domain()
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
class Plugin extends \FO_Reviews\Abstract_Plugin
{
    // plugin name.
    protected static $name = 'FO Business Reviews';
    // plugin version.
    protected static $version = '1.0.0';
    // prefix for plugin.
    protected static $prefix = 'fo_reviews_';
    // changelog for UpdateNotices.
    protected static $changelog = array();
    private static $location_settings = array('google_review_url' => array('title' => 'Google Review URL', 'type' => 'text', 'css' => 'width:300px', 'property' => 'google_review_url'));
    public function __construct()
    {
    }
    //
    // main class methods.
    //
    // add our custom settings to the list of location settings.
    public static function get_location_settings($settings)
    {
    }
    // add data to $city object returned by get_city_by_slug() and get_cities().
    public function add_extra_city_config($city)
    {
    }
    // add workflow/order-related data to globals for reviews links in AutomateWoo e-mails.
    public function add_aw_data_to_globals($value, $name, $process_variables, $workflow_email)
    {
    }
    // add order-related data to globals for review links in non-AutomateWoo e-mails.
    public function add_order_data_to_globals($order, $sent_to_admin)
    {
    }
    // adds review links after email body.
    public function add_email_links()
    {
    }
    public function add_reviews_rewrite_rule()
    {
    }
}