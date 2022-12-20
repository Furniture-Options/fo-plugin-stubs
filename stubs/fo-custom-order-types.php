<?php

namespace FO_Custom_Order_Types {
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
    class Plugin extends \FO_Custom_Order_Types\Abstract_Plugin
    {
        // plugin name
        protected static $name = 'Fee / Buyout Orders';
        // plugin version
        protected static $version = '2.0.0';
        // prefix for plugin
        protected static $prefix = 'fo_cot_';
        // changelog for UpdateNotices
        protected static $changelog = array('2.0.0' => array('Added: New fee orders can be charged automatically using "Capture Charge" button like any other order', 'Fixed: Completing fee orders caused related subscription to be marked Active in some situations', 'Fixed: Related Orders table (bottom of view order screen) now properly displays related orders on fee orders'), '1.0.0' => array('Added: Initial release'));
        public function __construct()
        {
        }
        // don't reduce stock when creating buyout order
        public function can_reduce_order_stock_on_buyout($reduce_stock, $order)
        {
        }
        // add related orders to my account views
        public static function get_related_custom_orders($subscription, $return_fields, $order_type)
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
        // init admin
        public function init_admin()
        {
        }
        // filter orders for "view related orders" list (clicking on number in "Orders" column of subscription list view)
        public function filter_orders($where)
        {
        }
        public function add_order_count_column_content($content, $subscription, $column)
        {
        }
        public function add_subscription_column_content($column, $post_id = '')
        {
        }
        // add related orders to subscription view
        public function add_custom_related_orders_to_admin($orders_to_display, $subscriptions, $post)
        {
        }
        // add meta boxes to admin
        public function add_meta_boxes()
        {
        }
        // preset data on new order if $_GET is set
        public function preset_data_on_order($order_id)
        {
        }
        // add butons for creating buyout and fee orders
        public function show_fee_and_buyout_buttons_on_subscription($order)
        {
        }
        // clean up Admin Columns export values
        public function ac_export_value($value, \AC\Column $column, $id)
        {
        }
        public function hide_capture_charge_button()
        {
        }
        // adds subscription relationship type to title of page
        public function add_order_relationship_type($text)
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
        // init frontend
        public function init_frontend()
        {
        }
        // Adds a new "type" column to the "My Orders" table in the account.
        //
        // @param string[] $columns the columns in the orders table
        // @return string[] updated columns
        public function add_order_type_column($columns)
        {
        }
    }
}
namespace {
    function wcs_get_subscriptions_for_buyout_order($order)
    {
    }
    function wcs_order_contains_buyout($order)
    {
    }
    function wcs_get_subscriptions_for_fee_order($order)
    {
    }
    function wcs_order_contains_fee($order)
    {
    }
    /**
     * Get the subscriptions that had a subscription fee charge for a given order (if any).
     *
     * @param int|WC_Order $order_id The post_id of a shop_order post or an instance of a WC_Order object
     *
     * @return array subscription details in post_id => WC_Subscription form
     */
    function fo_wcs_get_subscriptions_for_fee_order($order)
    {
    }
    /**
     * Get the subscriptions that had an item buyout for a given order (if any).
     *
     * @param int|WC_Order $order_id The post_id of a shop_order post or an instance of a WC_Order object
     *
     * @return array subscription details in post_id => WC_Subscription form
     */
    function fo_wcs_get_subscriptions_for_buyout_order($order)
    {
    }
    /**
     * Check if a given order was to buyout a subscription
     *
     * @param WC_Order|int $order the WC_Order object or ID of a WC_Order order
     */
    function fo_wcs_order_contains_buyout($order)
    {
    }
    /**
     * Check if a given order was a fee charge on a subscription
     *
     * @param WC_Order|int $order the WC_Order object or ID of a WC_Order order
     */
    function fo_wcs_order_contains_fee($order)
    {
    }
    function fo_wcs_get_related_orders($subscription, $fields, $type = '')
    {
    }
}