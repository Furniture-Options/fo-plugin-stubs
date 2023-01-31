<?php

namespace FO_UTM_Tracking;

/**
 * The plugin loader class.
 *
 * @since 2.0.0
 */
class Loader
{
    /** @var FO_UTM_Tracking\Loader single instance of this class */
    private static $instance;
    /**
     * Constructs the class.
     *
     * @since 2.0.0
     */
    protected function __construct()
    {
    }
    /**
     * Cloning instances is forbidden due to singleton pattern.
     *
     * @since 2.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances is forbidden due to singleton pattern.
     *
     * @since 2.0.0
     */
    public function __wakeup()
    {
    }
    public static function instance()
    {
    }
    // init plugin
    public function init_plugin()
    {
    }
}
class Plugin extends \FO_UTM_Tracking\Abstract_Plugin
{
    // plugin name
    protected static $name = 'UTM Tracking';
    // plugin version
    protected static $version = '1.2.0';
    // prefix for plugin
    protected static $prefix = 'fo_tracking_';
    // supported fields
    protected static $supported_fields = array('utm_id', 'utm_term', 'utm_content', 'utm_source', 'utm_medium', 'utm_campaign', 'type');
    // changelog for UpdateNotices
    protected static $changelog = array('1.0.0' => array('Added: WooCommerce now tracks UTM codes from inbound links on orders/subscriptions'));
    // gets list of supported fields
    public static function get_field_list()
    {
    }
    // gets fields from cookies
    public static function get_fields_from_cookies()
    {
    }
    // gets fields from order/subscription meta
    public static function get_fields_from_meta()
    {
    }
}
class Admin
{
    // The single instance of the class.
    protected static $_instance = null;
    protected static $fields = array();
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
    public function add_meta_boxes()
    {
    }
    public function get_meta_box_content()
    {
    }
    public function upgrade_db()
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
    /** Main Extension Instance. */
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
    // init plugin
    public function init_plugin()
    {
    }
    // set cookies for fields
    public function set_fields()
    {
    }
    public function update_order_meta($order_id)
    {
    }
}
namespace FO_UTM_TRACKING;

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
}