<?php

namespace FO_Coupon_Mods;

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
    public function called_class_init()
    {
    }
    // add update notice
    public function add_update_notice()
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
class Plugin extends \FO_Coupon_Mods\Abstract_Plugin
{
    // plugin name
    protected static $name = 'Coupon Mods';
    // plugin version
    protected static $version = '1.0.0';
    // prefix for plugin
    protected static $prefix = 'fo_ddc_';
    // changelog for UpdateNotices
    protected static $changelog = array();
    // additional coupon discount types
    protected static $discount_types = array('delivery_percent' => 'Delivery percent discount', 'delivery_fixed' => 'Delivery fixed discount');
    public function __construct()
    {
    }
    // extend list of discount types
    public function add_discount_type($discount_types)
    {
    }
    // getter for discount_types property
    public static function get_discount_types()
    {
    }
}
class Admin
{
    protected static $_instance = null;
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
    public function add_coupon_options($coupon_id, $coupon)
    {
    }
    public function save_coupon_options($post_id, $coupon)
    {
    }
    public function add_admin_css()
    {
    }
}
class Frontend
{
    protected static $_instance = null;
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
    // get coupon code from URL
    public function get_coupon_code_from_url()
    {
    }
    // get coupon discount from session
    public function add_url_coupon_discount_to_cart()
    {
    }
    // modify display of coupon discount HTML on customer side
    public function modify_cart_totals_coupon_html($coupon_html, $coupon, $discount_amount_html)
    {
    }
    // modify the delivery rate based on coupon
    public function modify_delivery_rate($rates, $package)
    {
    }
}
class Loader
{
    private static $instance;
    protected function __construct()
    {
    }
    public function __clone()
    {
    }
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