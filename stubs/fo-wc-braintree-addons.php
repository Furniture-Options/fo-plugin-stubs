<?php

namespace FO_WC_Braintree_Addons {
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
    class Plugin extends \FO_WC_Braintree_Addons\Abstract_Plugin
    {
        // The single instance of the class.
        protected static $_instance = null;
        // plugin name
        protected static $name = 'Braintree Addons';
        // plugin version
        protected static $version = '1.2.2';
        // prefix for plugin
        protected static $prefix = 'fo_bt_addons_';
        // changelog for UpdateNotices
        protected static $changelog = array('1.2.2' => array('Fixed: Viewing certain orders caused site error'), '1.2.1' => array('Added: Credit card type, expiration, and last four have been added to the order/subscription view page'), '1.2.0' => array('Fixed: Recurring payments would get stuck in "Pending"', 'Fixed: Failed recurring payments were getting marked as completed in some situations', 'Fixed: Failed recurring payments were not getting retried automatically'), '1.1.0' => array('Changed: Authorizations are automatically voided when order status is set to "Cancelled" or "Credit Denied"'));
        public function plugin_init()
        {
        }
        // automatically capture buyout, fee, and renewal (recurring payment) orders
        public function capture_select_payments($perform, $order, $gateway)
        {
        }
        // do not authorize (and instead capture) buyout, fee, and renewal (recurring payment) orders
        public function do_not_authorize_select_payments($perform, $order, $gateway)
        {
        }
        // prepare the order meta for settling against a new transaction id
        public static function prepare_new_transaction_id_for_capture($order)
        {
        }
    }
    class Admin
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
        // init plugin
        public function init_plugin()
        {
        }
        // Include additional files
        private static function includes()
        {
        }
        // initialize braintree API connection
        private static function init_braintree_gateway()
        {
        }
        // send a custom adjustAuthorization API call to adjust the authorization
        // amount before settlment
        public function verify_authorization_before_settlement($request_data, $request)
        {
        }
        // void braintree transaction when order status has been set to "cancelled"
        public function void_braintree_transaction($order_id)
        {
        }
        // add order actions to order action box
        public function add_order_actions($actions, $order)
        {
        }
        private static function get_authorization_code($response)
        {
        }
        // prepare the order meta for settling against a new transaction id
        public function prepare_new_transaction_id_for_capture($order)
        {
        }
        // display custom billing fields on orders/subscriptions
        public function add_custom_billing_fields($order)
        {
        }
        // add inline css
        public function add_css()
        {
        }
        // show admin errors
        public function show_admin_errors()
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
        // update payment method on pending orders
        public function update_pending_orders($result, $subscription)
        {
        }
        // change order button text when paying an existing order
        public function change_order_button_text($text, $gateway)
        {
        }
        public function add_pay_now_checkbox()
        {
        }
        public function add_css()
        {
        }
    }
}
namespace {
    class FO_WC_Braintree_Addons
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
        //
        // main class methods
        //
        // initialize everything for the plugin
        public function init_plugin()
        {
        }
    }
}