<?php

namespace FO_WC_Credit_App_Integration {
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
        public function init_plugin()
        {
        }
        // get single instance of FO_WC_Credit_App_Integration\Loader
        public static function instance()
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
    class Plugin extends \FO_WC_Credit_App_Integration\Abstract_Plugin
    {
        // plugin name
        protected static $name = 'WooCommerce Credit App Integration';
        // plugin version
        protected static $version = '1.1.1';
        // prefix for plugin
        protected static $prefix = 'fo_credit_';
        // changelog for UpdateNotices
        protected static $changelog = array('1.1.1' => array('Fixed: Credit check code was loading when manually paying a recurring payment order'), '1.1.0' => array('Added: Credit app results are saved before checkout is complete so if customer leaves the checkout page and returns later (up to 3 days on the same computer/browser), the credit check box is pre-populated and hidden', 'Added: Credit App ID can be set on the subscription view screen (saving applies to all related orders, as well)'), '1.0.0' => array('Added: Initial release'));
        // database for getting credit app results
        protected const FO_CORE = 'fo_core_2022';
        // base view URL for credit apps
        protected const BASE_VIEW_URL = 'https://secure.furnitureoptions.com/credit/admin/apps/view/';
        // labels for statuses
        protected static $status_labels = array('pending' => 'Pending approval', 'approved' => 'Approved', 'approved_manual' => 'Manually approved', 'denied' => 'Denied');
        protected function __construct()
        {
        }
        //
        // main class methods
        //
        // Update the order meta (both customer and admin side)
        public function update_order_meta($order_id)
        {
        }
        // gets date of app results from credit app system
        public static function get_date($appID)
        {
        }
        // gets app result text from credit app system
        public static function get_result($appID)
        {
        }
        // gets status label
        public static function get_status_label($status)
        {
        }
        // gets html link to credit app
        public static function get_app_link($app_id, $label = '')
        {
        }
        // format credit app result
        public static function format_result($result)
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
        // add fo-credit-denied to list of "ended" statuses in WCS
        public function ended_statuses($statuses)
        {
        }
        // updates credit score status in credit app system
        private function update_credit_app_status($app_id, $status)
        {
        }
        // mark credit app as denied
        public function mark_credit_app_denied($order_id)
        {
        }
        // mark credit app as approved
        public function mark_credit_app_approved($order_id)
        {
        }
        // register credit denied order status
        public static function register_credit_denied_order_status()
        {
        }
        // register "Credit Denied" subscription status
        public static function register_credit_denied_subscription_status($statuses)
        {
        }
        public static function end_subscription($subscription, $to_status, $from_status)
        {
        }
        // only allow on-hold and pending subscription statuses to be updated to "Credit Denied"
        public static function subscription_can_be_updated_to($can_be_updated, $new_status, $subscription)
        {
        }
        // conditionally add "Credit Denied" to list of order statuses
        public static function add_denied_to_order_statuses($order_statuses)
        {
        }
        // Make Custom Order Statuses Editable
        public function order_is_editable($editable, $order)
        {
        }
        // deny subscriptions for order
        private static function deny_subscriptions_for_order($order)
        {
        }
        public function add_credit_result_to_order_meta($order)
        {
        }
        // add css for credit app result display
        public function add_admin_css()
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
        // Add credit app to checkout
        public function add_credit_app_to_checkout($checkout)
        {
        }
        public function add_css()
        {
        }
        public function validate_checkout()
        {
        }
        // clear cookies on successful checkout
        public function clear_cookies()
        {
        }
    }
}
namespace {
    //
    // functions deprecated by this plugin
    //
    function format_app_result($result)
    {
    }
    function get_app_result($product_id)
    {
    }
    function get_app_result_url($product_id)
    {
    }
    function fo_app_result_url($product_id)
    {
    }
    // global wrapper for \FO_WC_Credit_App_Integration\Plugin::get_app_link()
    function fo_get_app_result_link($app_id)
    {
    }
    // global wrapper for \FO_WC_Credit_App_Integration\Plugin::format_result()
    function fo_format_app_result($result)
    {
    }
}