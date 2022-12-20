<?php

namespace FO_Dynamic_Delivery_Costs {
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
    class Plugin extends \FO_Dynamic_Delivery_Costs\Abstract_Plugin
    {
        // plugin name
        protected static $name = 'Dynamic Delivery Costs';
        // plugin version
        protected static $version = '1.0.0';
        // prefix for plugin
        protected static $prefix = 'fo_dynamic_delivery_costs';
        // changelog for UpdateNotices
        protected static $changelog = array('1.0.0' => array('Added: Delivery estimates for Omaha are now based on day of week and number of bedrooms'));
        //
        // main class methods
        //
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
        // add callback to modify package rates
        public function add_callback()
        {
        }
        public function modify_delivery_rate($rates, $package)
        {
        }
        public function enqueue_scripts()
        {
        }
    }
}
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
namespace FO_Two_Month_Minimum {
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
}
namespace FO_HubWoo_Addons {
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
}
namespace FO_Housewares_Setup {
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
}
namespace FO_UTM_Tracking {
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
        protected static $supported_fields = array('utm_source', 'utm_medium', 'utm_campaign', 'type');
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
}
namespace FO_UTM_TRACKING {
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
}
namespace FO_Settings {
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
        // getter function for /web/root/$plugin_path/
        public static function get_plugin_url()
        {
        }
        // getter function for /document/root/$plugin_path/classes/
        public static function get_class_path()
        {
        }
        // getter function for /document/root/$plugin_path/
        public static function get_plugin_path()
        {
        }
    }
    /**
     * Main plugin class
     */
    class Plugin extends \FO_Settings\Abstract_Plugin
    {
        /**
         * Plugin name
         *
         * @var string $name
         */
        protected static $name = 'FO Settings';
        /**
         * Plugin version
         *
         * @var string $version
         */
        protected static $version = '1.0.0';
        /**
         * Plugin prefix
         *
         * @var string $prefix
         */
        protected static $prefix = 'fo_settings_';
        /**
         * FO Settings Helpers object
         *
         * @var object $helpers
         */
        protected static $helpers = null;
        /**
         * ChangeLog for use by UpdateNotices
         *
         * @var array $changelog
         */
        protected static $changelog = array();
        /**
         * Core Settings for Each FO Location
         *
         * @var array $location_settings
         */
        private static $location_settings = array('notify_emails' => array('title' => 'Notification E-mails', 'type' => 'text', 'css' => 'width:450px', 'desc_tip' => '<i>These internal addresses are notified when a new order is placed, etc., for this city.</i><br/><br/><strong>Separate multiple addresses with a comma.</strong>', 'legacy' => 'notifyEmails', 'property' => 'notify_emails'), 'from_email' => array('title' => 'From E-mail', 'type' => 'text', 'css' => 'width:300px', 'desc_tip' => '<i>This address is used for the "From" and "Reply-to" headers in emails sent to customers</i><br/><br/><strong>Supports only one valid email address.</strong>', 'legacy' => 'fromEmail', 'property' => 'from_email'), 'sage_code' => array('title' => 'Sage Code', 'type' => 'number', 'css' => 'width:300px', 'legacy' => '_sage_code', 'property' => 'sage_code'));
        /**
         * Class Constructor
         */
        public function __construct()
        {
        }
        /*
         * MAIN CLASS METHODS
         */
        /**
         * Get array of per-location settings
         *
         * @return array Settings for each FO Location after filters
         */
        public static function get_location_settings()
        {
        }
        /**
         * Extend the city WP_Term object to have our custom properties
         *
         * @param object $city City object to extend.
         */
        public function add_extra_city_config($city)
        {
        }
        /**
         * Get settings page object
         *
         * @return object WC_Settings_Page
         */
        public static function get_settings_page()
        {
        }
    }
    class Admin
    {
        // The single instance of the class.
        protected static $_instance = null;
        protected static $helpers = null;
        protected static $settings_page = null;
        protected static $msgs = array();
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
        public static function add_msg($section, $msg)
        {
        }
        public static function add_msgs($section, $msgs)
        {
        }
        public static function get_msgs()
        {
        }
        public function enqueue_scripts()
        {
        }
        public static function is_settings_page()
        {
        }
        public function add_settings_tab($settings_tabs)
        {
        }
        public static function add_admin_body_class($classes)
        {
        }
        public static function get_settings_page()
        {
        }
    }
    class Settings_Page extends \WC_Settings_Page
    {
        public $msg = array();
        public function __construct()
        {
        }
        /**
         * Get sections
         *
         * @return array
         */
        public function get_own_sections()
        {
        }
        /*
         * Output the settings
         */
        public function output()
        {
        }
        /*
         * Process save
         */
        public function save()
        {
        }
        /*                                          *
         *   Class Methods Specific to This Class   *
         *                                          */
        // add content to settings tab
        public function add_tab_content()
        {
        }
        // change text on some things
        public function translate($translated_text)
        {
        }
        // gets settings for section
        public function get_settings_for_section_core($current_section)
        {
        }
        // add hooks to add html after all settings sections
        public function add_hooks()
        {
        }
        // add html before settings content
        private static function before_settings()
        {
        }
        // add html after settings content
        private static function after_settings()
        {
        }
        // add html after settings section content
        public function after_section()
        {
        }
    }
}
namespace FO_Settings\Helpers {
    class Product_Category
    {
        protected static $_instance = null;
        public static function instance()
        {
        }
        public function __construct()
        {
        }
        public function create_category($args)
        {
        }
        public function update_term_properties($current_cat_id, $args)
        {
        }
        public function save_new_location()
        {
        }
        /*
         * checks if category exists, otherwise creates it.
         *
         * also adds/updates required meta data, etc, and
         * sets some defaults (if not already set)
         */
        public function verify_category($cat, $root_cat, $parent_id = null)
        {
        }
        private function output_verify_results($cat, $result)
        {
        }
        // finds category based on slug and/or name and parent ID
        public function find_category($slug, $name, $parent_id)
        {
        }
        private static function get_default_description($type, $args = array())
        {
        }
        // category structure for a single location
        private static function get_category_hierarchy()
        {
        }
    }
    /**
     * Helper class for pricing-related functionality
     */
    class Pricing
    {
        /**
         * Single instance of class
         *
         * @var string|null $instance
         */
        protected static $instance = null;
        /**
         * Initialize class
         *
         * @return object
         */
        public static function instance()
        {
        }
        /**
         * Class constructor
         */
        public function __construct()
        {
        }
    }
    class Settings
    {
        protected static $_instance = null;
        protected static $prefix = 'fo_';
        public static function instance()
        {
        }
        public function __construct()
        {
        }
        // method to get current section settings based on $current_section (gets default section settings if unset)
        public function get_section_settings($current_section)
        {
        }
        // gets settings for default section
        private static function get_settings_for_default_section()
        {
        }
        // gets settings for "locations settings" section
        private static function get_settings_for_location_settings_section()
        {
        }
        // gets setting for "new location" section
        private function get_settings_for_new_location_section()
        {
        }
        // gets settings for "location defaults" section
        private function get_settings_for_location_defaults_section()
        {
        }
    }
}
namespace FO_Settings {
    class Helpers
    {
        // The single instance of the class.
        protected static $_instance = null;
        public function __construct()
        {
        }
        public function register_helper($helper)
        {
        }
        public static function register_helpers()
        {
        }
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
    }
}
namespace FO_FAQs {
    /**
     * The plugin loader class.
     *
     * @since 2.0.0
     */
    class Loader
    {
        /** @var FO_FAQs\Loader single instance of this class */
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
        /**
         * Initializes the plugin.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        // get single instance of FO_FAQs\Loader
        public static function instance()
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
        // add capabilities for blackout_date post type to administrator role
        public function add_caps()
        {
        }
    }
    class Frontend
    {
        // The single instance of the class.
        protected static $_instance = null;
        // get_terms() query arguments used to get faq_categories
        protected static $terms_query = array('taxonomy' => 'faq_category', 'hide_empty' => true);
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
        // 'display_faq' shortcode to display faqs in a single faq category
        public function display_faq($atts = null, $content = null)
        {
        }
        // Shortcode to display all FAQs in all categories
        public function display_all_faqs()
        {
        }
        /**
         * Gets faq item list from database where faq category id == $faq_category_id
         *
         * Used by display_faq() and display_all_faqs() to get FAQ items
         * and build HTML for an faq
         *
         * @param int $faq_category_id faq category ID to filter by
         *
         * @return string HTML for faq
         */
        protected static function get_faq_list($faq_category_id = null)
        {
        }
        // shortcode for displaying all faq categories
        public function display_all_faq_cats()
        {
        }
        /**
         * Returns HTML for a single faq item
         *
         * @param int    $id      ID of faq item
         * @param string $title   title of faq item
         * @param string $content content of faq item
         * @param int    $catID   ID of faq
         *
         * @return string HTML for faq item
         */
        protected static function get_faq_item($faq_item, $faq_category_id)
        {
        }
        // self::$terms_query getter function
        protected static function get_terms_query()
        {
        }
        // initialize self::$terms_query
        protected static function init_terms_query()
        {
        }
        public function add_js()
        {
        }
    }
    class Setup
    {
        // The single instance of the class.
        protected static $_instance = null;
        // post type
        protected const POST_TYPE = 'faq';
        // taxonomy
        protected const TAXONOMY = 'faq_category';
        // Constructor
        protected function __construct()
        {
        }
        // getter function for TAXONOMY
        public static function get_taxonomy()
        {
        }
        // getter function for POST_TYPE
        public static function get_post_type()
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
        // register custom post type
        public function register_custom_post_type()
        {
        }
        // function to create capabilities array for taxonomy
        public static function compile_taxonomy_capabilities($taxonomy)
        {
        }
        // function to create capabilities array
        public static function compile_post_type_capabilities($singular, $plural)
        {
        }
    }
}
namespace FO_WP_Allow_SVG {
    /**
     * The plugin loader class.
     *
     * @since 2.0.0
     */
    class Loader
    {
        /** @var FO_WP_Allow_SVG\Loader single instance of this class */
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
        /**
         * Initializes the plugin.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        // get single instance of FO_WP_Allow_SVG\Loader
        public static function instance()
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
        // add CSS fix for SVG
        // XXX: is this still used?
        public function fix_svg()
        {
        }
        // allow svg mime type for uploading
        public function allow_svg_mime_upload($mimes)
        {
        }
        // adds SVG to allowed filetype/ext list
        public function allow_svg_filetype_and_ext($data, $file, $filename, $mimes)
        {
        }
    }
}
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
namespace FO_WC_Sage_Product_Fields {
    /**
     * The plugin loader class.
     *
     * @since 2.0.0
     */
    class Loader
    {
        /** @var FO_WC_Sage_Product_Fields\Loader single instance of this class */
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
        /**
         * Initializes the plugin.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        // get single instance of FO_WC_Sage_Product_Fields\Loader
        public static function instance()
        {
        }
    }
    class Cron
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
    }
    class Plugin
    {
        // The single instance of the class.
        protected static $_instance = null;
        // plugin name
        protected const NAME = 'Sage Product Fields';
        // plugin version
        protected const VERSION = '1.0.0';
        // prefix for plugin
        protected const PREFIX = 'fo_sage_pf_';
        // changelog for UpdateNotices
        protected static $changelog = array('1.0.0' => array('Added: Sage Item Codes can be set on products', 'Added: Sage Item Codes for furniture packages are automatically generated'));
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
        // class methods
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
        public static function get_bedroom_size_code($order_item)
        {
        }
        // gets sage item code from order item
        public static function get_sage_item_code($order_item)
        {
        }
    }
    class Admin
    {
        // The single instance of the class.
        protected static $_instance = null;
        // plugin notice message
        protected static $notice = null;
        // list of custom category fields
        protected static $category_fields = array();
        // list of custom parent category fields
        protected static $parent_cat_fields = array('_fo_abbr' => array('name' => 'FO Location Abbreviation', 'short_name' => 'Location Abbr.', 'placeholder' => 'e.g.: ICT', 'desc' => 'This field only applies to top-level categories (a.k.a. cities / locations)'));
        // list of custom product fields
        protected static $product_fields = array('_sage_item_code' => array(
            'name' => 'Sage Item Code',
            // name used for field on product
            'short_name' => 'Sage Code',
            // optional short name
            'placeholder' => '',
            // optional placeholder for field on product
            'sanitizer' => 'sanitize_text_field',
        ));
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
        // add custom Sage fields to WooCommerce category
        public function add_category_fields()
        {
        }
        // output individual product category field
        private static function output_category_field($field_id, $field, $value = '')
        {
        }
        // add custom Sage fields to WooCommerce product
        public function add_product_fields()
        {
        }
        // save custom category fields when saving product category
        public function save_category_fields($cat_id)
        {
        }
        // save individual category field
        private static function save_category_field($field_id, $cat_id)
        {
        }
        // save custom Sage product fields when saving product
        public function save_product_fields($product_id)
        {
        }
        // show product fields on orders
        public function show_order_item_meta($item_id, $item, $product)
        {
        }
        // display notice from this plugin
        public static function notice($msg, $type = 'info')
        {
        }
        // shortcut for displaying error notices
        public static function error($msg)
        {
        }
        // shortcut for displaying success notices
        public static function success($msg)
        {
        }
    }
    class WC_Store_Exporter_Deluxe
    {
        // The single instance of the class.
        protected static $_instance = null;
        protected static $exports_subdir = 'exports';
        protected static $action = 'fo_download';
        protected static $other_order_fields = array('Sage ContractType', 'Sage DocumentType', 'Sage OrderStatus', 'Sage ARDivisionNo', 'Sage ShipToCode', 'Sage TermsCode', 'Sage TaxSchedule', 'Sage SalespersonDivisionNo', 'Sage SalespersonNo', 'Sage ProfileCode', 'Sage ShipDate', 'Sage RequiredDueInDate', 'Sage RentEndDate', 'Sage PickupDate', 'Sage LineKey', 'Sage BillingLineType', 'Sage LineStatus', 'Sage ExplodedKitItem', 'Sage SalesKitLineKey', 'Sage LineShipDate', 'Sage RentEndDate2', 'Sage ShipVia', 'Sage CustomerPONo', 'Sage ConfirmTo', 'Sage UnitPrice', 'Sage WarehouseCode', 'FO Paid Date');
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
        // add custom sage fields to order item / subscription item field list
        public function add_order_item_fields($fields)
        {
        }
        // add custom sage field data to order item / subscription item object
        public function add_order_item_data($order_item, $order_id)
        {
        }
        // add custom sage field data to individual order export line
        public function add_order_item_fields_to_individual_export_line($order, $order_item = null)
        {
        }
        // filter individual order item lines being output by export
        public function filter_individual_order_item_export($output, $order, $order_item)
        {
        }
        public function add_subscription_data($subscription, $subscription_id)
        {
        }
        // add to order data
        public function add_order_data($order, $order_id)
        {
        }
        // add css
        public function add_css()
        {
        }
        // hide order actions from non-admins
        public function filter_order_actions($actions)
        {
        }
        // modify time format for file exports
        public function modify_export_filename_time_format($time)
        {
        }
        // filter out CSV files from WordPress media
        public function filter_csv_files_from_media($where)
        {
        }
        // add ability to download export files while keeping them protected by WP's user authentication
        public function handle_download()
        {
        }
        // adds hook to upload_dir to change export directory
        public function add_upload_dir_hook($tag_time)
        {
        }
        // sets upload directory for exports
        public function set_upload_dir_for_exports($args)
        {
        }
        public function add_filter_to_admin($post_id)
        {
        }
        public function save_export_filter_options($post_id = '')
        {
        }
        public function init_exports_dir()
        {
        }
        public function extend_cron_dataset_args($args, $export_type = '', $is_scheduled = 0)
        {
        }
    }
    class Countries
    {
        // The single instance of the class.
        protected static $_instance = null;
        protected static $countries = array(
            'AF' => 'AFG',
            //Afghanistan
            'AX' => 'ALA',
            //&#197;land Islands
            'AL' => 'ALB',
            //Albania
            'DZ' => 'DZA',
            //Algeria
            'AS' => 'ASM',
            //American Samoa
            'AD' => 'AND',
            //Andorra
            'AO' => 'AGO',
            //Angola
            'AI' => 'AIA',
            //Anguilla
            'AQ' => 'ATA',
            //Antarctica
            'AG' => 'ATG',
            //Antigua and Barbuda
            'AR' => 'ARG',
            //Argentina
            'AM' => 'ARM',
            //Armenia
            'AW' => 'ABW',
            //Aruba
            'AU' => 'AUS',
            //Australia
            'AT' => 'AUT',
            //Austria
            'AZ' => 'AZE',
            //Azerbaijan
            'BS' => 'BHS',
            //Bahamas
            'BH' => 'BHR',
            //Bahrain
            'BD' => 'BGD',
            //Bangladesh
            'BB' => 'BRB',
            //Barbados
            'BY' => 'BLR',
            //Belarus
            'BE' => 'BEL',
            //Belgium
            'BZ' => 'BLZ',
            //Belize
            'BJ' => 'BEN',
            //Benin
            'BM' => 'BMU',
            //Bermuda
            'BT' => 'BTN',
            //Bhutan
            'BO' => 'BOL',
            //Bolivia
            'BQ' => 'BES',
            //Bonaire, Saint Estatius and Saba
            'BA' => 'BIH',
            //Bosnia and Herzegovina
            'BW' => 'BWA',
            //Botswana
            'BV' => 'BVT',
            //Bouvet Islands
            'BR' => 'BRA',
            //Brazil
            'IO' => 'IOT',
            //British Indian Ocean Territory
            'BN' => 'BRN',
            //Brunei
            'BG' => 'BGR',
            //Bulgaria
            'BF' => 'BFA',
            //Burkina Faso
            'BI' => 'BDI',
            //Burundi
            'KH' => 'KHM',
            //Cambodia
            'CM' => 'CMR',
            //Cameroon
            'CA' => 'CAN',
            //Canada
            'CV' => 'CPV',
            //Cape Verde
            'KY' => 'CYM',
            //Cayman Islands
            'CF' => 'CAF',
            //Central African Republic
            'TD' => 'TCD',
            //Chad
            'CL' => 'CHL',
            //Chile
            'CN' => 'CHN',
            //China
            'CX' => 'CXR',
            //Christmas Island
            'CC' => 'CCK',
            //Cocos (Keeling) Islands
            'CO' => 'COL',
            //Colombia
            'KM' => 'COM',
            //Comoros
            'CG' => 'COG',
            //Congo
            'CD' => 'COD',
            //Congo, Democratic Republic of the
            'CK' => 'COK',
            //Cook Islands
            'CR' => 'CRI',
            //Costa Rica
            'CI' => 'CIV',
            //Côte d\'Ivoire
            'HR' => 'HRV',
            //Croatia
            'CU' => 'CUB',
            //Cuba
            'CW' => 'CUW',
            //Curaçao
            'CY' => 'CYP',
            //Cyprus
            'CZ' => 'CZE',
            //Czech Republic
            'DK' => 'DNK',
            //Denmark
            'DJ' => 'DJI',
            //Djibouti
            'DM' => 'DMA',
            //Dominica
            'DO' => 'DOM',
            //Dominican Republic
            'EC' => 'ECU',
            //Ecuador
            'EG' => 'EGY',
            //Egypt
            'SV' => 'SLV',
            //El Salvador
            'GQ' => 'GNQ',
            //Equatorial Guinea
            'ER' => 'ERI',
            //Eritrea
            'EE' => 'EST',
            //Estonia
            'ET' => 'ETH',
            //Ethiopia
            'FK' => 'FLK',
            //Falkland Islands
            'FO' => 'FRO',
            //Faroe Islands
            'FJ' => 'FIJ',
            //Fiji
            'FI' => 'FIN',
            //Finland
            'FR' => 'FRA',
            //France
            'GF' => 'GUF',
            //French Guiana
            'PF' => 'PYF',
            //French Polynesia
            'TF' => 'ATF',
            //French Southern Territories
            'GA' => 'GAB',
            //Gabon
            'GM' => 'GMB',
            //Gambia
            'GE' => 'GEO',
            //Georgia
            'DE' => 'DEU',
            //Germany
            'GH' => 'GHA',
            //Ghana
            'GI' => 'GIB',
            //Gibraltar
            'GR' => 'GRC',
            //Greece
            'GL' => 'GRL',
            //Greenland
            'GD' => 'GRD',
            //Grenada
            'GP' => 'GLP',
            //Guadeloupe
            'GU' => 'GUM',
            //Guam
            'GT' => 'GTM',
            //Guatemala
            'GG' => 'GGY',
            //Guernsey
            'GN' => 'GIN',
            //Guinea
            'GW' => 'GNB',
            //Guinea-Bissau
            'GY' => 'GUY',
            //Guyana
            'HT' => 'HTI',
            //Haiti
            'HM' => 'HMD',
            //Heard Island and McDonald Islands
            'VA' => 'VAT',
            //Holy See (Vatican City State)
            'HN' => 'HND',
            //Honduras
            'HK' => 'HKG',
            //Hong Kong
            'HU' => 'HUN',
            //Hungary
            'IS' => 'ISL',
            //Iceland
            'IN' => 'IND',
            //India
            'ID' => 'IDN',
            //Indonesia
            'IR' => 'IRN',
            //Iran
            'IQ' => 'IRQ',
            //Iraq
            'IE' => 'IRL',
            //Republic of Ireland
            'IM' => 'IMN',
            //Isle of Man
            'IL' => 'ISR',
            //Israel
            'IT' => 'ITA',
            //Italy
            'JM' => 'JAM',
            //Jamaica
            'JP' => 'JPN',
            //Japan
            'JE' => 'JEY',
            //Jersey
            'JO' => 'JOR',
            //Jordan
            'KZ' => 'KAZ',
            //Kazakhstan
            'KE' => 'KEN',
            //Kenya
            'KI' => 'KIR',
            //Kiribati
            'KP' => 'PRK',
            //Korea, Democratic People\'s Republic of
            'KR' => 'KOR',
            //Korea, Republic of (South)
            'KW' => 'KWT',
            //Kuwait
            'KG' => 'KGZ',
            //Kyrgyzstan
            'LA' => 'LAO',
            //Laos
            'LV' => 'LVA',
            //Latvia
            'LB' => 'LBN',
            //Lebanon
            'LS' => 'LSO',
            //Lesotho
            'LR' => 'LBR',
            //Liberia
            'LY' => 'LBY',
            //Libya
            'LI' => 'LIE',
            //Liechtenstein
            'LT' => 'LTU',
            //Lithuania
            'LU' => 'LUX',
            //Luxembourg
            'MO' => 'MAC',
            //Macao S.A.R., China
            'MK' => 'MKD',
            //Macedonia
            'MG' => 'MDG',
            //Madagascar
            'MW' => 'MWI',
            //Malawi
            'MY' => 'MYS',
            //Malaysia
            'MV' => 'MDV',
            //Maldives
            'ML' => 'MLI',
            //Mali
            'MT' => 'MLT',
            //Malta
            'MH' => 'MHL',
            //Marshall Islands
            'MQ' => 'MTQ',
            //Martinique
            'MR' => 'MRT',
            //Mauritania
            'MU' => 'MUS',
            //Mauritius
            'YT' => 'MYT',
            //Mayotte
            'MX' => 'MEX',
            //Mexico
            'FM' => 'FSM',
            //Micronesia
            'MD' => 'MDA',
            //Moldova
            'MC' => 'MCO',
            //Monaco
            'MN' => 'MNG',
            //Mongolia
            'ME' => 'MNE',
            //Montenegro
            'MS' => 'MSR',
            //Montserrat
            'MA' => 'MAR',
            //Morocco
            'MZ' => 'MOZ',
            //Mozambique
            'MM' => 'MMR',
            //Myanmar
            'NA' => 'NAM',
            //Namibia
            'NR' => 'NRU',
            //Nauru
            'NP' => 'NPL',
            //Nepal
            'NL' => 'NLD',
            //Netherlands
            'AN' => 'ANT',
            //Netherlands Antilles
            'NC' => 'NCL',
            //New Caledonia
            'NZ' => 'NZL',
            //New Zealand
            'NI' => 'NIC',
            //Nicaragua
            'NE' => 'NER',
            //Niger
            'NG' => 'NGA',
            //Nigeria
            'NU' => 'NIU',
            //Niue
            'NF' => 'NFK',
            //Norfolk Island
            'MP' => 'MNP',
            //Northern Mariana Islands
            'NO' => 'NOR',
            //Norway
            'OM' => 'OMN',
            //Oman
            'PK' => 'PAK',
            //Pakistan
            'PW' => 'PLW',
            //Palau
            'PS' => 'PSE',
            //Palestinian Territory
            'PA' => 'PAN',
            //Panama
            'PG' => 'PNG',
            //Papua New Guinea
            'PY' => 'PRY',
            //Paraguay
            'PE' => 'PER',
            //Peru
            'PH' => 'PHL',
            //Philippines
            'PN' => 'PCN',
            //Pitcairn
            'PL' => 'POL',
            //Poland
            'PT' => 'PRT',
            //Portugal
            'PR' => 'PRI',
            //Puerto Rico
            'QA' => 'QAT',
            //Qatar
            'RE' => 'REU',
            //Reunion
            'RO' => 'ROU',
            //Romania
            'RU' => 'RUS',
            //Russia
            'RW' => 'RWA',
            //Rwanda
            'BL' => 'BLM',
            //Saint Barth&eacute;lemy
            'SH' => 'SHN',
            //Saint Helena
            'KN' => 'KNA',
            //Saint Kitts and Nevis
            'LC' => 'LCA',
            //Saint Lucia
            'MF' => 'MAF',
            //Saint Martin (French part)
            'SX' => 'SXM',
            //Sint Maarten / Saint Matin (Dutch part)
            'PM' => 'SPM',
            //Saint Pierre and Miquelon
            'VC' => 'VCT',
            //Saint Vincent and the Grenadines
            'WS' => 'WSM',
            //Samoa
            'SM' => 'SMR',
            //San Marino
            'ST' => 'STP',
            //S&atilde;o Tom&eacute; and Pr&iacute;ncipe
            'SA' => 'SAU',
            //Saudi Arabia
            'SN' => 'SEN',
            //Senegal
            'RS' => 'SRB',
            //Serbia
            'SC' => 'SYC',
            //Seychelles
            'SL' => 'SLE',
            //Sierra Leone
            'SG' => 'SGP',
            //Singapore
            'SK' => 'SVK',
            //Slovakia
            'SI' => 'SVN',
            //Slovenia
            'SB' => 'SLB',
            //Solomon Islands
            'SO' => 'SOM',
            //Somalia
            'ZA' => 'ZAF',
            //South Africa
            'GS' => 'SGS',
            //South Georgia/Sandwich Islands
            'SS' => 'SSD',
            //South Sudan
            'ES' => 'ESP',
            //Spain
            'LK' => 'LKA',
            //Sri Lanka
            'SD' => 'SDN',
            //Sudan
            'SR' => 'SUR',
            //Suriname
            'SJ' => 'SJM',
            //Svalbard and Jan Mayen
            'SZ' => 'SWZ',
            //Swaziland
            'SE' => 'SWE',
            //Sweden
            'CH' => 'CHE',
            //Switzerland
            'SY' => 'SYR',
            //Syria
            'TW' => 'TWN',
            //Taiwan
            'TJ' => 'TJK',
            //Tajikistan
            'TZ' => 'TZA',
            //Tanzania
            'TH' => 'THA',
            //Thailand
            'TL' => 'TLS',
            //Timor-Leste
            'TG' => 'TGO',
            //Togo
            'TK' => 'TKL',
            //Tokelau
            'TO' => 'TON',
            //Tonga
            'TT' => 'TTO',
            //Trinidad and Tobago
            'TN' => 'TUN',
            //Tunisia
            'TR' => 'TUR',
            //Turkey
            'TM' => 'TKM',
            //Turkmenistan
            'TC' => 'TCA',
            //Turks and Caicos Islands
            'TV' => 'TUV',
            //Tuvalu
            'UG' => 'UGA',
            //Uganda
            'UA' => 'UKR',
            //Ukraine
            'AE' => 'ARE',
            //United Arab Emirates
            'GB' => 'GBR',
            //United Kingdom
            'US' => 'USA',
            //United States
            'UM' => 'UMI',
            //United States Minor Outlying Islands
            'UY' => 'URY',
            //Uruguay
            'UZ' => 'UZB',
            //Uzbekistan
            'VU' => 'VUT',
            //Vanuatu
            'VE' => 'VEN',
            //Venezuela
            'VN' => 'VNM',
            //Vietnam
            'VG' => 'VGB',
            //Virgin Islands, British
            'VI' => 'VIR',
            //Virgin Island, U.S.
            'WF' => 'WLF',
            //Wallis and Futuna
            'EH' => 'ESH',
            //Western Sahara
            'YE' => 'YEM',
            //Yemen
            'ZM' => 'ZMB',
            //Zambia
            'ZW' => 'ZWE',
        );
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
        // Converts the WooCommerce country codes to 3-letter ISO codes
        public static function convert_country_code($country)
        {
        }
    }
}
namespace FO_Testimonials {
    /**
     * The plugin loader class.
     *
     * @since 2.0.0
     */
    class Loader
    {
        /** @var FO_Testimonials\Loader single instance of this class */
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
        /**
         * Initializes the plugin.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        // get single instance of FO_Testimonials\Loader
        public static function instance()
        {
        }
    }
}
namespace {
    /**
     * Template loader.
     *
     * Originally based on functions in Easy Digital Downloads (thanks Pippin!).
     *
     * When using in a plugin, create a new class that extends this one and just overrides the properties.
     *
     * @package Gamajo_Template_Loader
     * @author  Gary Jones
     */
    class Gamajo_Template_Loader
    {
        /**
         * Prefix for filter names.
         *
         * @since 1.0.0
         *
         * @var string
         */
        protected $filter_prefix = 'your_plugin';
        /**
         * Directory name where custom templates for this plugin should be found in the theme.
         *
         * For example: 'your-plugin-templates'.
         *
         * @since 1.0.0
         *
         * @var string
         */
        protected $theme_template_directory = 'plugin-templates';
        /**
         * Reference to the root directory path of this plugin.
         *
         * Can either be a defined constant, or a relative reference from where the subclass lives.
         *
         * e.g. YOUR_PLUGIN_TEMPLATE or plugin_dir_path( dirname( __FILE__ ) ); etc.
         *
         * @since 1.0.0
         *
         * @var string
         */
        protected $plugin_directory = 'YOUR_PLUGIN_DIR';
        /**
         * Directory name where templates are found in this plugin.
         *
         * Can either be a defined constant, or a relative reference from where the subclass lives.
         *
         * e.g. 'templates' or 'includes/templates', etc.
         *
         * @since 1.1.0
         *
         * @var string
         */
        protected $plugin_template_directory = 'templates';
        /**
         * Internal use only: Store located template paths.
         *
         * @var array
         */
        private $template_path_cache = array();
        /**
         * Internal use only: Store variable names used for template data.
         *
         * Means unset_template_data() can remove all custom references from $wp_query.
         *
         * Initialized to contain the default 'data'.
         *
         * @var array
         */
        private $template_data_var_names = array('data');
        /**
         * Clean up template data.
         *
         * @since 1.2.0
         */
        public function __destruct()
        {
        }
        /**
         * Retrieve a template part.
         *
         * @since 1.0.0
         *
         * @param string $slug Template slug.
         * @param string $name Optional. Template variation name. Default null.
         * @param bool   $load Optional. Whether to load template. Default true.
         * @return string
         */
        public function get_template_part($slug, $name = \null, $load = \true)
        {
        }
        /**
         * Make custom data available to template.
         *
         * Data is available to the template as properties under the `$data` variable.
         * i.e. A value provided here under `$data['foo']` is available as `$data->foo`.
         *
         * When an input key has a hyphen, you can use `$data->{foo-bar}` in the template.
         *
         * @since 1.2.0
         *
         * @param mixed  $data     Custom data for the template.
         * @param string $var_name Optional. Variable under which the custom data is available in the template.
         *                         Default is 'data'.
         * @return Gamajo_Template_Loader
         */
        public function set_template_data($data, $var_name = 'data')
        {
        }
        /**
         * Remove access to custom data in template.
         *
         * Good to use once the final template part has been requested.
         *
         * @since 1.2.0
         *
         * @return Gamajo_Template_Loader
         */
        public function unset_template_data()
        {
        }
        /**
         * Given a slug and optional name, create the file names of templates.
         *
         * @since 1.0.0
         *
         * @param string $slug Template slug.
         * @param string $name Template variation name.
         * @return array
         */
        protected function get_template_file_names($slug, $name)
        {
        }
        /**
         * Retrieve the name of the highest priority template file that exists.
         *
         * Searches in the STYLESHEETPATH before TEMPLATEPATH so that themes which
         * inherit from a parent theme can just overload one file. If the template is
         * not found in either of those, it looks in the theme-compat folder last.
         *
         * @since 1.0.0
         *
         * @param string|array $template_names Template file(s) to search for, in order.
         * @param bool         $load           If true the template file will be loaded if it is found.
         * @param bool         $require_once   Whether to require_once or require. Default true.
         *                                     Has no effect if $load is false.
         * @return string The template filename if one is located.
         */
        public function locate_template($template_names, $load = \false, $require_once = \true)
        {
        }
        /**
         * Return a list of paths to check for template locations.
         *
         * Default is to check in a child theme (if relevant) before a parent theme, so that themes which inherit from a
         * parent theme can just overload one file. If the template is not found in either of those, it looks in the
         * theme-compat folder last.
         *
         * @since 1.0.0
         *
         * @return mixed|void
         */
        protected function get_template_paths()
        {
        }
        /**
         * Return the path to the templates directory in this plugin.
         *
         * May be overridden in subclass.
         *
         * @since 1.0.0
         *
         * @return string
         */
        protected function get_templates_dir()
        {
        }
    }
}
namespace FO_Testimonials {
    class Template_Loader extends \Gamajo_Template_Loader
    {
        /**
         * Prefix for filter names.
         *
         * @var string
         */
        protected $filter_prefix = 'fo-testimonials';
        /**
         * Directory name where templates should be found into the theme.
         *
         * @var string
         */
        protected $theme_template_directory = 'fo-testimonials';
        /**
         * Current plugin's root directory.
         *
         * @var string
         */
        protected $plugin_directory = FO_TESTIMONIALS_DIR;
        /**
         * Directory name of where the templates are stored into the plugin.
         *
         * @var string
         */
        protected $plugin_template_directory = 'templates';
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
        // add capabilities for blackout_date post type to administrator role
        public function add_caps()
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
        // 'display_testimonials' shortcode to display testimonials in a single testimonial category
        public function display_testimonials($atts = null, $content = null)
        {
        }
    }
    class Setup
    {
        // The single instance of the class.
        protected static $_instance = null;
        // post type
        protected const POST_TYPE = 'testimonial';
        // taxonomy
        protected const TAXONOMY = 'testimonial_category';
        // Constructor
        protected function __construct()
        {
        }
        // getter function for TAXONOMY
        public static function get_taxonomy()
        {
        }
        // getter function for POST_TYPE
        public static function get_post_type()
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
        // register custom post type
        public function register_custom_post_type()
        {
        }
        // function to create capabilities array for taxonomy
        public static function compile_taxonomy_capabilities($taxonomy)
        {
        }
        // function to create capabilities array
        public static function compile_post_type_capabilities($singular, $plural)
        {
        }
    }
}
namespace {
    class WC_Seq_Order_Number
    {
        /** version number */
        const VERSION = '2.0.0';
        protected static $changelog = array('2.0.0' => array('Fixed: Searching subscriptions by subscription number now works as expected (supports searching by full number [e.g. C000147] or partial [e.g. 147])'));
        /** minimum required wc version */
        const MINIMUM_WC_VERSION = '3.9.4';
        /** @var \WC_Seq_Order_Number single instance of this plugin */
        protected static $instance;
        /** version option name */
        const VERSION_OPTION_NAME = 'woocommerce_seq_order_number_db_version';
        /**
         * Construct the plugin
         *
         * @since 1.3.2
         */
        public function __construct()
        {
        }
        /**
         * Cloning instances is forbidden due to singleton pattern.
         *
         * @since 1.7.0
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances is forbidden due to singleton pattern.
         *
         * @since 1.7.0
         */
        public function __wakeup()
        {
        }
        /**
         * Initialize the plugin, bailing if any required conditions are not met,
         * including minimum WooCommerce version
         *
         * @since 1.3.2
         */
        public function initialize()
        {
        }
        /**
         * Load Translations
         *
         * @since 1.3.3
         */
        public function load_translation()
        {
        }
        public function add_update_notice()
        {
        }
        /**
         * Search for an order with order_number $order_number
         *
         * @param string $order_number order number to search for
         *
         * @return int post_id for the order identified by $order_number, or 0
         */
        public function find_order_by_order_number($order_number)
        {
        }
        /**
         * Set the _order_number field for the newly created order
         *
         * @param int      $post_id post identifier
         * @param \WP_Post $post    post object
         */
        public function set_sequential_order_number($post_id, $post)
        {
        }
        /**
         * Filter to return our _order_number field rather than the post ID,
         * for display.
         *
         * @param string    $order_number the order id with a leading hash
         * @param \WC_Order $order        the order object
         *
         * @return string custom order number
         */
        public function get_order_number($order_number, $order)
        {
        }
        /** Admin filters ******************************************************/
        /**
         * Admin order table orderby ID operates on our meta _order_number
         *
         * @param array $vars associative array of orderby parameteres
         *
         * @return array associative array of orderby parameteres
         */
        public function woocommerce_custom_shop_order_orderby($vars)
        {
        }
        /**
         * Mofifies the given $args argument to sort on our meta integral _order_number
         *
         * @since 1.3
         *
         * @param array $args associative array of orderby parameteres
         *
         * @return array associative array of orderby parameteres
         */
        public function custom_orderby($args)
        {
        }
        /**
         * Add our custom _order_number to the set of search fields so that
         * the admin search functionality is maintained
         *
         * @param array $search_fields array of post meta fields to search by
         *
         * @return array of post meta fields to search by
         */
        public function custom_search_fields($search_fields)
        {
        }
        /** 3rd Party Plugin Support ******************************************************/
        /**
         * Sets an order number on a subscriptions-created order.
         *
         * @since 1.3
         *
         * @param \WC_Order        $renewal_order the new renewal order object
         * @param \WC_Subscription $subscription  Post ID of a 'shop_subscription' post, or instance of a WC_Subscription object
         *
         * @return \WC_Order renewal order instance
         */
        public function subscriptions_set_sequential_order_number($renewal_order, $subscription)
        {
        }
        /**
         * Don't copy over order number meta when creating a parent or child renewal order
         *
         * Prevents unnecessary order meta from polluting parent renewal orders,
         * and set order number for subscription orders
         *
         * @since 1.3
         *
         * @param array $order_meta_query query for pulling the metadata
         *
         * @return string
         */
        public function subscriptions_remove_order_number_meta($order_meta_query)
        {
        }
        /**
         * Hook WooCommerce Admin's order number search to the meta value.
         *
         * @param array           $args    arguments to be passed to WC_Order_Query
         * @param WP_REST_Request $request REST API request being made
         *
         * @return array arguments to be passed to WC_Order_Query
         */
        public function wc_admin_order_number_api_param($args, $request)
        {
        }
        /** Helper Methods ******************************************************/
        /**
         * Main Sequential Order Numbers Instance, ensures only one instance is/can be loaded
         *
         * @since 1.7.0
         * @see wc_sequential_order_numbers()
         *
         * @return \WC_Seq_Order_Number
         */
        public static function instance()
        {
        }
        /**
         * Helper function to determine whether a plugin is active.
         *
         * @since 1.8.3
         *
         * @param string $plugin_name plugin name, as the plugin-filename.php
         *
         * @return bool true if the named plugin is installed and active
         */
        public static function is_plugin_active($plugin_name)
        {
        }
        /** Compatibility Methods ******************************************************/
        /**
         * Helper method to get the version of the currently installed WooCommerce
         *
         * @since 1.3.2
         *
         * @return string woocommerce version number or null
         */
        private static function get_wc_version()
        {
        }
        /**
         * Perform a minimum WooCommerce version check
         *
         * @since 1.3.2
         *
         * @return bool true if the required version is met, false otherwise
         */
        private function minimum_wc_version_met()
        {
        }
        /**
         * Render a notice to update WooCommerce if needed
         *
         * @since 1.3.2
         */
        public function render_update_notices()
        {
        }
        /** Lifecycle methods ******************************************************/
        /**
         * Run every time. Used since the activation hook is not executed when updating a plugin
         *
         * @since 1.0.0
         */
        private function install()
        {
        }
        /**
         * Runs when plugin version number changes.
         *
         * 1.0.0
         *
         * @param string $installed_version
         */
        private function upgrade($installed_version)
        {
        }
    }
}
namespace FO_Recurring_Payment_Mods {
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
}
namespace {
    // plugin loader class
    class FO_WC_Blackout_Dates
    {
        // class instance
        private static $instance;
        //
        // class methods
        //
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
    }
}
namespace FO_WC_Blackout_Dates {
    class Plugin
    {
        // The single instance of the class.
        protected static $_instance = null;
        // plugin name
        protected const NAME = 'Blackout Dates';
        // plugin version
        protected const VERSION = '2.0.1';
        // prefix for plugin
        protected const PREFIX = 'fo_bod_';
        // post type
        protected const POST_TYPE = 'blackout_date';
        protected static $changelog = array('2.0.1' => array('Added: Select "All Locations" to create blackout dates/ranges that apply to all FO locations.', 'Added: Notifications when new features have been added'));
        //
        // class methods
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
        // get friendlier version number
        public static function get_short_version()
        {
        }
        // getter function for POST_TYPE
        public static function get_post_type()
        {
        }
        // getter function for PREFIX
        public static function get_prefix()
        {
        }
        // getter function for PREFIX
        public static function prefix()
        {
        }
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
        // register custom post type
        public function register_custom_post_type()
        {
        }
        // function to create capabilities array
        public function compile_post_type_capabilities($singular, $plural)
        {
        }
        // get blackout date start date as object
        public static function get_start_obj($id)
        {
        }
        // get blackout date start date
        public static function get_start($id)
        {
        }
        // get blackout date end date
        public static function get_end($id)
        {
        }
        // get blackout date type
        public static function get_type($id)
        {
        }
    }
    class Admin
    {
        protected static $_instance = null;
        protected static $meta_box = null;
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
        // class methods
        //
        // init plugin
        public function init_plugin()
        {
        }
        // show admin errors
        public function show_admin_errors()
        {
        }
        public function init_meta_box_property()
        {
        }
        public function add_blackout_dates_meta_box()
        {
        }
        // show meta box
        public function show_meta_box()
        {
        }
        // Save data from meta box
        public function save_blackout_date($post_id)
        {
        }
        // gets cities from database
        private function get_cities($type = '')
        {
        }
        // add inline css
        public function add_css()
        {
        }
        // add capabilities for blackout_date post type to administrator role
        public function add_caps()
        {
        }
        public function setup_admin_column_labels($columns)
        {
        }
        public function setup_admin_sortable_columns($columns)
        {
        }
        public function setup_admin_column($column, $post_id)
        {
        }
        public function enqueue_scripts()
        {
        }
        public function remove_quick_edit($actions)
        {
        }
        // redirect to the blackout date list on post save or publish.
        public function redirect_post_location($location)
        {
        }
        // modify months filter to use meta
        public function modify_months_filter($months)
        {
        }
        // filter posts based on month selected from dropdown
        public function modify_date_meta_query($wp_query)
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
        public function __clone()
        {
        }
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
        // add javascript to checkout page
        public function add_checkout_js()
        {
        }
    }
}
namespace FO_Coupon_Mods {
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
}
namespace FO_Update_Notices {
    class Plugin extends \FO_Update_Notices\Abstract_Plugin
    {
        // plugin name
        protected static $name = 'Update Notices';
        // plugin version
        protected static $version = '1.1.0';
        // prefix for plugin
        protected static $prefix = 'fo_un_';
        // changelog for UpdateNotices
        /*protected static $changelog = Array(
        			'1.1.0' => Array(
        				'Changed: Restructured plugin to follow standard',
        			),
        		);*/
    }
    class Admin
    {
        // class instance
        private static $instance;
        private static $plugin;
        public function __construct()
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
        // static class methods
        //
        private static function get_plugin_namespace($plugin)
        {
        }
        private static function get_plugin_class($plugin)
        {
        }
        // get friendlier version number
        private static function get_short_version($version)
        {
        }
        //
        // callbacks
        //
        // display custom admin notice
        public function add_notice($name, $prefix, $version, $changelog)
        {
        }
        // add admin css
        public function add_css()
        {
        }
    }
}
namespace FO_UPDATE_NOTICES {
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
}
namespace FO_Update_Notices {
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
        //
        // callbacks
        //
        // init plugin
        public function init_plugin()
        {
        }
    }
}
namespace {
    /**
     * Class PAnD
     */
    class PAnD
    {
        /**
         * Init hooks.
         */
        public static function init()
        {
        }
        /**
         * Enqueue javascript and variables.
         */
        public static function load_script()
        {
        }
        /**
         * Handles Ajax request to persist notices dismissal.
         * Uses check_ajax_referer to verify nonce.
         */
        public static function dismiss_admin_notice()
        {
        }
        /**
         * Is admin notice active?
         *
         * @param string $arg data-dismissible content of notice.
         *
         * @return bool
         */
        public static function is_admin_notice_active($arg)
        {
        }
        /**
         * Returns admin notice cached timeout.
         *
         * @access public
         *
         * @param string|bool $id admin notice name or false.
         *
         * @return array|bool The timeout. False if expired.
         */
        public static function get_admin_notice_cache($id = \false)
        {
        }
        /**
         * Sets admin notice timeout in site option.
         *
         * @access public
         *
         * @param string      $id       Data Identifier.
         * @param string|bool $timeout  Timeout for admin notice.
         *
         * @return bool
         */
        public static function set_admin_notice_cache($id, $timeout)
        {
        }
    }
}
namespace FO_Reviews {
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
        // plugin name
        protected static $name = 'FO Business Reviews';
        // plugin version
        protected static $version = '1.0.0';
        // prefix for plugin
        protected static $prefix = 'fo_reviews_';
        // changelog for UpdateNotices
        protected static $changelog = array();
        private static $location_settings = array('google_review_url' => array('title' => 'Google Review URL', 'type' => 'text', 'css' => 'width:300px', 'property' => 'google_review_url'));
        public function __construct()
        {
        }
        //
        // main class methods
        //
        // add our custom settings to the list of location settings
        public static function get_location_settings($settings)
        {
        }
        // add data to $city object returned by get_city_by_slug() and get_cities()
        public function add_extra_city_config($city)
        {
        }
        // add workflow/order-related data to globals for reviews links in AutomateWoo e-mails
        public function add_aw_data_to_globals($value, $name, $process_variables, $workflow_email)
        {
        }
        // add order-related data to globals for review links in non-AutomateWoo e-mails
        public function add_order_data_to_globals($order, $sent_to_admin)
        {
        }
        // adds review links after email body
        function add_email_links()
        {
        }
        public function add_reviews_rewrite_rule()
        {
        }
    }
}
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
namespace Test {
    class Setup extends \PHPUnit\Framework\TestCase
    {
        public function setUp() : void
        {
        }
        public static function integrationMerchantConfig()
        {
        }
    }
}
namespace Test\Unit {
    class CustomerTest extends \Test\Setup
    {
        public function testGet_givesErrorIfInvalidProperty()
        {
        }
        public function testUpdateSignature_doesNotAlterOptionsInCreditCardUpdateSignature()
        {
        }
        public function testCreateSignature_doesNotIncludeCustomerIdOnCreditCard()
        {
        }
        public function findCreditCardArray($el)
        {
        }
        public function testFindErrorsOnBlankId()
        {
        }
        public function testFindErrorsOnWhitespaceId()
        {
        }
    }
    class MultipleValueOrTextNodeTest extends \Test\Setup
    {
        public function testIn()
        {
        }
        public function testIs()
        {
        }
        public function testIsNot()
        {
        }
        public function testStartsWith()
        {
        }
        public function testEndsWith()
        {
        }
        public function testContains()
        {
        }
    }
    class DocumentUploadTest extends \Test\Setup
    {
        /**
         * @throws InvalidArgumentException
         */
        public function testCreateThrowsExceptionWithBadKeys()
        {
        }
    }
    class UsBankAccountTest extends \Test\Setup
    {
        public function testIsDefault()
        {
        }
        public function testHasVerifications()
        {
        }
    }
    class UtilTest extends \Test\Setup
    {
        public function testThrow401Exception()
        {
        }
        public function testThrow403Exception()
        {
        }
        public function testThrow404Exception()
        {
        }
        public function testThrow408Exception()
        {
        }
        public function testThrow426Exception()
        {
        }
        public function testThrow429Exception()
        {
        }
        public function testThrow500Exception()
        {
        }
        public function testThrow504Exception()
        {
        }
        public function testThrowUnknownException()
        {
        }
        public function testThrowGraphQLAuthenticationException()
        {
        }
        public function testThrowGraphQLAuthorizationException()
        {
        }
        public function testThrowGraphQLNotFoundException()
        {
        }
        public function testThrowGraphQLUnsupportedClientException()
        {
        }
        public function testThrowGraphQLResourceLimitException()
        {
        }
        public function testThrowGraphQLInternalException()
        {
        }
        public function testThrowGraphQLServiceAvailabilityException()
        {
        }
        public function testThrowGraphQLUnexpectedException()
        {
        }
        public function testDoesNotThrowGraphQLValidationException()
        {
        }
        public function testThrowGraphQLUnexpectedExceptionAndNotValidationExceptionWhenBothArePresent()
        {
        }
        public function testExtractAttributeAsArrayReturnsEmptyArray()
        {
        }
        public function testExtractAttributeAsArrayReturnsSingleElementArray()
        {
        }
        public function testExtractAttributeAsArrayReturnsArrayOfObjects()
        {
        }
        public function testDelimeterToUnderscore()
        {
        }
        public function testCleanClassName()
        {
        }
        public function testBuildClassName()
        {
        }
        public function testimplodeAssociativeArray()
        {
        }
        public function testVerifyKeys_withThreeLevels()
        {
        }
        public function testVerifyKeys_withArrayOfArrays()
        {
        }
        public function testVerifyKeys_arrayAsValue()
        {
        }
        public function testVerifyKeys()
        {
        }
        public function testReturnException()
        {
        }
        public function testReturnObject()
        {
        }
        public function testReplaceKeyReplacesKeyWhenMatch()
        {
        }
        public function testReplaceKeyDoesNotReplaceKeyWhenNoMatch()
        {
        }
    }
    class BaseTest extends \Test\Setup
    {
        public function testToArray()
        {
        }
        public function testJsonSerialize()
        {
        }
        public function test__toString()
        {
        }
        public function test__isset_whenSetReturnsTrue()
        {
        }
        public function test__isset_whenSetToNullReturnsFalse()
        {
        }
        public function test__isset_whenNotSetReturnsFalse()
        {
        }
    }
    class PayPalAccountTest extends \Test\Setup
    {
        public function testGet_givesErrorIfInvalidProperty()
        {
        }
        public function testIsDefault()
        {
        }
        public function testErrorsOnFindWithBlankArgument()
        {
        }
        public function testErrorsOnFindWithWhitespaceArgument()
        {
        }
        public function testErrorsOnFindWithWhitespaceCharacterArgument()
        {
        }
    }
    class DisbursementDetailsTest extends \Test\Setup
    {
        public function testIsValidReturnsTrue()
        {
        }
        public function testIsValidReturnsFalse()
        {
        }
    }
    class TransactionTest extends \Test\Setup
    {
        public function testGet_givesErrorIfInvalidProperty()
        {
        }
        public function testCloneTransaction_RaisesErrorOnInvalidProperty()
        {
        }
        public function testErrorsWhenFindWithBlankString()
        {
        }
        public function testInitializationWithoutArguments()
        {
        }
        public function testSaleWithSkipAdvancedFraudCheckingValueAsTrue()
        {
        }
        public function testSaleWithSkipAdvancedFraudCheckingValueAsFalse()
        {
        }
        public function testSaleWithoutSkipAdvancedFraudCheckingOption()
        {
        }
        private function mockTransactionGatewayDoCreate()
        {
        }
    }
    class Pager
    {
        private $_pagingFunc;
        public function __construct($pagingFunc)
        {
        }
        public function page($page)
        {
        }
    }
    class PaginatedCollectionTest extends \Test\Setup
    {
        public function testFetchesOnePageWhenPageAndTotalSizesMatch()
        {
        }
        public function testFetchCollectionOfLessThanOnePage()
        {
        }
        public function testFetchesMultiplePages()
        {
        }
    }
}
namespace Test\Unit\ClientApi {
    class ClientTokenTest extends \Test\Setup
    {
        public function testErrorsWhenCreditCardOptionsGivenWithoutCustomerId()
        {
        }
        public function testErrorsWhenInvalidArgumentIsSupplied()
        {
        }
    }
}
namespace Test\Unit {
    class EndsWithNodeTest extends \Test\Setup
    {
        public function testEndsWith()
        {
        }
    }
    class SubscriptionTest extends \Test\Setup
    {
        public function testErrorsOnFindWithBlankArgument()
        {
        }
        public function testErrorsOnFindWithWhitespaceArgument()
        {
        }
    }
    class BraintreeTest extends \Test\Setup
    {
        public function testIsset()
        {
        }
    }
    class RiskDataTest extends \Test\Setup
    {
        public function testAttributes()
        {
        }
    }
    class CloseTagTest extends \Test\Setup
    {
        public function testCodeFiles_allOmitPHPCloseTag()
        {
        }
    }
    class MultipleValueNodeTest extends \Test\Setup
    {
        public function testIs()
        {
        }
        public function testIn()
        {
        }
    }
    class DigestTest extends \Test\Setup
    {
        public function testSecureCompareReturnsTrueForMatches()
        {
        }
        public function testSecureCompareReturnsFalseForDifferentLengths()
        {
        }
        public function testSecureCompareReturnsFalseForNonmatchingSameLengthStrings()
        {
        }
        public function testHexDigestSha1()
        {
        }
        public function testHexDigestSha1_again()
        {
        }
        public function testHexDigestSha256()
        {
        }
        public function testHexDigestSha256_again()
        {
        }
        public function testBuiltInHmacSha1()
        {
        }
        public function testBuiltInHmacSha1_again()
        {
        }
        public function testHmacSha1()
        {
        }
        public function testHmacSha1_again()
        {
        }
    }
    class DiscountTest extends \Test\Setup
    {
        public function testFactory()
        {
        }
        public function testToString()
        {
        }
    }
    class RangeNodeTest extends \Test\Setup
    {
        public function testGreaterThanOrEqualTo()
        {
        }
        public function testLessThanOrEqualTo()
        {
        }
        public function testBetween()
        {
        }
        public function testIs()
        {
        }
    }
    class AuthorizationAdjustmentTest extends \Test\Setup
    {
        public function testFactory()
        {
        }
        public function testToString()
        {
        }
    }
    class DisbursementTest extends \Test\Setup
    {
        public function testToString()
        {
        }
        public function testIsDebit()
        {
        }
        public function testIsCredit()
        {
        }
    }
    class WebhookNotificationTest extends \Test\Setup
    {
        public function setUp() : void
        {
        }
        public function testVerify()
        {
        }
        public function testVerifyRaisesErrorWithInvalidChallenge()
        {
        }
        public function testVerifyRaisesErrorWhenEnvironmentNotSet()
        {
        }
        public function testSampleNotificationReturnsAParsableNotification()
        {
        }
        public function testSampleNotificationContainsSourceMerchantIdIfSpecified()
        {
        }
        public function testParsingModifiedSignatureRaisesError()
        {
        }
        public function testParsingWithNoKeysRaisesError()
        {
        }
        public function testParsingWebhookWithWrongKeysRaisesError()
        {
        }
        public function testParsingModifiedPayloadRaisesError()
        {
        }
        public function testParsingUnknownPublicKeyRaisesError()
        {
        }
        public function testParsingInvalidSignatureRaisesError()
        {
        }
        public function testParsingNullSignatureRaisesError()
        {
        }
        public function testParsingNullPayloadRaisesError()
        {
        }
        public function testParsingInvalidCharactersRaisesError()
        {
        }
        public function testParsingAllowsAllValidCharacters()
        {
        }
        public function testParsingRetriesPayloadWithANewline()
        {
        }
        public function testAllowsParsingUsingGateway()
        {
        }
        public function testAllowsParsingUsingStaticMethods()
        {
        }
        public function testBuildsASampleNotificationForASubscriptionChargedSuccessfullyWebhook()
        {
        }
        public function testBuildsASampleNotificationForASubscriptionChargedUnsuccessfullyWebhook()
        {
        }
        public function testBuildsASampleNotificationForASubscriptionExpiredWebhook()
        {
        }
        public function testBuildsASampleNotificationForASubscriptionCanceledWebhook()
        {
        }
        public function testBuildsASampleNotificationForASubscriptionWentPastDueWebhook()
        {
        }
        public function testBuildsASampleNotificationForAMerchantAccountApprovedWebhook()
        {
        }
        public function testBuildsASampleNotificationForAMerchantAccountDeclinedWebhook()
        {
        }
        public function testBuildsASampleNotificationForATransactionDisbursedWebhook()
        {
        }
        public function testBuildsASampleNotificationForATransactionReviewedWebhook()
        {
        }
        public function testBuildsASampleNotificationForATransactionSettledWebhook()
        {
        }
        public function testBuildsASampleNotificationForATransactionSettlementDeclinedWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisputeOpenedWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisputeLostWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisputeWonWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisputeAcceptedWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisputeDisputedWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisputeExpiredWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisbursementExceptionWebhook()
        {
        }
        public function testBuildsASampleNotificationForADisbursementWebhook()
        {
        }
        public function testBuildsASampleNotificationForAPartnerMerchantConnectedWebhook()
        {
        }
        public function testBuildsASampleNotificationForAPartnerMerchantDisconnectedWebhook()
        {
        }
        public function testBuildsASampleNotificationForAPartnerMerchantDeclinedWebhook()
        {
        }
        public function testBuildsASampleNotificationForOAuthAccessRevokedWebhook()
        {
        }
        public function testBuildsASampleNotificationForConnectedMerchantStatusTransitionedWebhook()
        {
        }
        public function testBuildsASampleNotificationForConnectedMerchantPayPalStatusChangedWebhook()
        {
        }
        public function testBuildsASampleNotificationForACheckWebhook()
        {
        }
        public function testAccountUpdaterDailyReportWebhook()
        {
        }
        public function testGrantorUpdatedGrantedPaymentMethodWebhook()
        {
        }
        public function testRecipientUpdatedGrantedPaymentMethodWebhook()
        {
        }
        public function testGrantedPaymentMethodRevokedCreditCardWebhook()
        {
        }
        public function testGrantedPaymentMethodRevokedPayPalAccountWebhook()
        {
        }
        public function testGrantedPaymentMethodRevokedVenmoAccountWebhook()
        {
        }
        public function testGrantedPaymentMethodRevokedWebhookSample()
        {
        }
        public function testPaymentMethodRevokedByCustomerWebhook()
        {
        }
        public function testLocalPaymentReversedWebhook()
        {
        }
        public function testLocalPaymentCompletedWebhook()
        {
        }
        public function testLocalPaymentFundedWebhook()
        {
        }
        public function testLocalPaymentExpiredWebhook()
        {
        }
        public function testPaymentMethodCustomerDataUpdatedWebhook()
        {
        }
    }
    class PaymentMethodCustomerDataUpdatedMetadataTest extends \Test\Setup
    {
        public function testFactory()
        {
        }
        public function testToString()
        {
        }
    }
    class AddressTest extends \Test\Setup
    {
        public function testGet_givesErrorIfInvalidProperty()
        {
        }
        public function testIsEqual()
        {
        }
        public function testIsNotEqual()
        {
        }
        public function testCustomerIdNotEqual()
        {
        }
        public function testFindErrorsOnBlankCustomerId()
        {
        }
        public function testFindErrorsOnBlankAddressId()
        {
        }
        public function testFindErrorsOnWhitespaceOnlyId()
        {
        }
        public function testFindErrorsOnWhitespaceOnlyCustomerId()
        {
        }
    }
    class TestResource
    {
        public function lookup($id)
        {
        }
        public function fetch($ids)
        {
        }
    }
    // phpcs:ignore
    class ResourceCollectionTest extends \Test\Setup
    {
        public static $values = ["a", "b", "c", "d", "e"];
        public function testIterateOverResults()
        {
        }
        public function testDoesntIterateWhenNoResults()
        {
        }
        public function testGetIdsReturnsArrayOfIds()
        {
        }
        public function testGetIdsReturnsAnEmptyArrayIfNoIds()
        {
        }
    }
    class HttpTest extends \Test\Setup
    {
        public function setUp() : void
        {
        }
        public function testMalformedNoSsl()
        {
        }
        public function testMalformedUrlUsingSsl()
        {
        }
        public function testOlderSSLVersionsError()
        {
        }
    }
    class UsBankAccountVerificationTest extends \Test\Setup
    {
        public function testAttributes()
        {
        }
    }
    class GatewayTest extends \Test\Setup
    {
        public function setUp() : void
        {
        }
        public function teardown() : void
        {
        }
        public function testConfigGetsAssertedValid()
        {
        }
        public function testConstructWithArrayOfCredentials()
        {
        }
    }
    class AddOnTest extends \Test\Setup
    {
        public function testFactory()
        {
        }
        public function testToString()
        {
        }
    }
    class EnrichedCustomerDataTest extends \Test\Setup
    {
        public function testFactory()
        {
        }
        public function testToString()
        {
        }
    }
    class OAuthAccessRevocationTest extends \Test\Setup
    {
        public function testIncludesMerchantId()
        {
        }
    }
}
namespace Test\Unit\Xml {
    class GeneratorTest extends \Test\Setup
    {
        public function testSetsTypeAttributeForBooleans()
        {
        }
        public function testCreatesArrays()
        {
        }
        public function testCreatesWithDashes()
        {
        }
        public function testCreatesArraysWithBooleans()
        {
        }
        public function testHandlesEmptyArrays()
        {
        }
        public function testEscapingSpecialChars()
        {
        }
        public function testDoesNotModifyDateTime()
        {
        }
        public function testCanAcceptDateTimeImmutable()
        {
        }
    }
}
namespace Test\Unit {
    class CreditCardTest extends \Test\Setup
    {
        public function testGet_givesErrorIfInvalidProperty()
        {
        }
        public function testCreate_throwsIfInvalidKey()
        {
        }
        public function testIsDefault()
        {
        }
        public function testMaskedNumber()
        {
        }
        public function testCreateSignature()
        {
        }
        public function testUpdateSignature()
        {
        }
        public function testErrorsOnFindWithBlankArgument()
        {
        }
        public function testErrorsOnFindWithWhitespaceArgument()
        {
        }
        public function testErrorsOnFindWithWhitespaceCharacterArgument()
        {
        }
        public function testVerificationIsLatestVerification()
        {
        }
    }
    class InstanceTest extends \Test\Setup
    {
        public function test__isset_whenSetReturnsTrue()
        {
        }
        public function test__isset_whenNotSetReturnsFalse()
        {
        }
        public function test__isset_whenSetToNullReturnsFalse()
        {
        }
        public function testToArray()
        {
        }
        public function testJsonSerialize()
        {
        }
    }
    class OAuthTest extends \Test\Setup
    {
        protected $gateway;
        public function setUp() : void
        {
        }
        public function testMapInvalidGrantCodeToOldError()
        {
        }
        public function testMapInvalidCredentialsCodeToOldError()
        {
        }
        public function testMapInvalidScopeCodeToOldError()
        {
        }
        protected function _buildResult($error)
        {
        }
    }
    class PaymentMethodTest extends \Test\Setup
    {
        public function testCreate_throwsIfInvalidKey()
        {
        }
        public function testCreateSignature()
        {
        }
        public function testErrorsOnFindWithBlankArgument()
        {
        }
        public function testErrorsOnFindWithWhitespaceArgument()
        {
        }
        public function testErrorsOnFindWithWhitespaceCharacterArgument()
        {
        }
        public function testDeleteWithRevokeAllGrantsAsTrue()
        {
        }
        public function testDeleteWithRevokeAllGrantsAsFalse()
        {
        }
        public function testDeleteWithoutRevokeAllGrantsOption()
        {
        }
        public function testDeleteWithInvalidOption()
        {
        }
        private function mockPaymentMethodGatewayDoDelete()
        {
        }
    }
    class OmitPHPCloseTagTest extends \Test\Setup
    {
        public function testCodeFiles_allOmitPHPCloseTag()
        {
        }
    }
}
namespace Test\Unit\Xml {
    class ParserTest extends \Test\Setup
    {
        public function testTypeCastIntegers()
        {
        }
        public function testDashesUnderscores()
        {
        }
        public function testCustomFieldsUnderscore()
        {
        }
        public function testNullOrEmptyString()
        {
        }
        public function testTypeCastsDatetimes()
        {
        }
        public function testTypeCastsDates()
        {
        }
        public function testBuildsArray()
        {
        }
        public function testReturnsBoolean()
        {
        }
        public function testEmptyArrayAndNestedElements()
        {
        }
        public function testParsingNilEqualsTrueAfterArray()
        {
        }
        public function testTransactionParsingNil()
        {
        }
        public function testParsingWithNodeHavingSameNameAsNodesDirectlyUnderCollection()
        {
        }
        public function testParsingCreditCardSearchResults()
        {
        }
        public function xmlAndBack($array)
        {
        }
        public function testSimpleCaseRoundtrip()
        {
        }
        public function testArrayRoundtrip()
        {
        }
        public function testBooleanRoundtrip()
        {
        }
        public function testTimestampRoundtrip()
        {
        }
        public function testNullvsEmptyStringToXml()
        {
        }
        public function testIncludesTheEncodingRoundtrip()
        {
        }
        public function testRootNodeAndStringRoundtrip()
        {
        }
    }
}
namespace Test\Unit {
    class CurlTest extends \Test\Setup
    {
        private $_config;
        private $_mockHttpRequest;
        public function setUp() : void
        {
        }
        public function testMakeRequestSetsTimeout()
        {
        }
        public function testMakeRequestSetsHttpVerb()
        {
        }
        public function testMakeRequestSetsUrl()
        {
        }
        public function testMakeRequestSetsGzipEncoding()
        {
        }
        public function testMakeRequestDoesNotSetGzipEncodingWhenDisabled()
        {
        }
        public function testMakeRequestSetsSslVersionWhenConfigured()
        {
        }
        public function testMakeRequestDoesNotSetSslVersionWhenNotConfigured()
        {
        }
        public function testMakeRequestSetsCustomHeaders()
        {
        }
        public function testMakeRequestSetsDefaultHeadersWhenCustomHeadersAreNotPresent()
        {
        }
        public function testMakeRequestUsesClientIdAndSecretWhenUseClientCredentialsIsTrue()
        {
        }
        public function testMakeRequestUsesAccessTokenWhenUseClientCredentialsIsFalseAndAccessTokenIsPresent()
        {
        }
        public function testMakeRequestUsesPublicAndPrivateKeysWhenUseClientCredentialsIsFalseAndAccessTokenIsNotPresent()
        {
        }
        public function testMakeRequestSetsSslOptionsWhenSslIsOn()
        {
        }
        public function testMakeRequestDoesNotSetSslOptionsWhenSslIsOff()
        {
        }
        public function testMakeRequestSetsHeaderAndBodyForMultipartFormDataIfFileIsPresent()
        {
        }
        public function testMakeRequestSetsRequestBodyOnlyIfRequestBodyIsPresentAndFileIsNotPresent()
        {
        }
        public function testMakeRequestSetsProxyHostAndProxyPort()
        {
        }
        public function testMakeRequestSetsProxyType()
        {
        }
        public function testMakeRequestSetsProxyUserAndProxyPassword()
        {
        }
        public function testMakeRequestSetsCurlReturnTransfer()
        {
        }
        public function testMakeRequestThrowsTimeoutExceptionWhenTimeoutOccurs()
        {
        }
        public function testMakeRequestThrowsSSLExceptionWhenSSLErrors()
        {
        }
        public function testMakeRequestThrowsConnectionExceptionWhenAnyOtherErrorOccurs()
        {
        }
        public function testMakeRequestReturnsStatusAndBodyWhenNoErrorsOccur()
        {
        }
        public function testMakeRequestClosesCurl()
        {
        }
    }
}
namespace Braintree\HttpHelpers {
    /**
     * Braintree HttpRequest module
     *
     * Facilitates web requests made by the SDK
     */
    interface HttpRequest
    {
        // phpcs:disable PEAR.Commenting.FunctionComment.Missing
        public function setOption($name, $value);
        public function execute();
        public function getInfo($name);
        public function getErrorCode();
        public function getError();
        public function close();
        // phpcs:enable PEAR.Commenting.FunctionComment.Missing
    }
}
namespace Test\HttpHelpers {
    class MockHttpRequest implements \Braintree\HttpHelpers\HttpRequest
    {
        public $options;
        public $response;
        public $httpStatus;
        public $errorCode;
        public $error;
        public $closed;
        public function __construct()
        {
        }
        public function setOption($name, $value)
        {
        }
        public function execute()
        {
        }
        public function getInfo($name)
        {
        }
        public function getErrorCode()
        {
        }
        public function getError()
        {
        }
        public function close()
        {
        }
    }
}
namespace Test\Unit {
    class DisputeTest extends \Test\Setup
    {
        private $attributes;
        public function setUp() : void
        {
        }
        public function testLegacyConstructor()
        {
        }
        public function testLegacyParamsWithNewAttributes()
        {
        }
        public function testConstructorPopulatesNewFields()
        {
        }
        public function testConstructorHandlesNullFields()
        {
        }
        public function testConstructorPopulatesTransaction()
        {
        }
        public function testAcceptNullRaisesNotFoundException()
        {
        }
        public function testAcceptEmptyIdRaisesNotFoundException()
        {
        }
        public function testAddTextEvidenceEmptyIdRaisesNotFoundException()
        {
        }
        public function testAddTextEvidenceNullIdRaisesNotFoundException()
        {
        }
        public function testAddTextEvidenceEmptyEvidenceRaisesValueException()
        {
        }
        public function testAddTextEvidenceNullEvidenceRaisesValueException()
        {
        }
        public function testAddTextEvidenceBlankRequestContentRaisesValueException()
        {
        }
        public function testAddTextEvidenceNullRequestContentRaisesValueException()
        {
        }
        public function testAddTextEvidenceBlankRequestCategoryRaisesValueException()
        {
        }
        public function testAddTextEvidenceBlankRequestSequenceNumberRaisesValueException()
        {
        }
        public function testAddTextEvidenceNonIntegerNumberRequestSequenceNumberRaisesValueException()
        {
        }
        public function testAddTextEvidenceNonIntegerStringRequestSequenceNumberRaisesValueException()
        {
        }
        public function testAddFileEvidenceEmptyIdRaisesNotFoundException()
        {
        }
        public function testAddFileEvidenceNullIdRaisesNotFoundException()
        {
        }
        public function testAddFileEvidenceEmptyEvidenceRaisesValueException()
        {
        }
        public function testAddFileEvidenceNullEvidenceRaisesValueException()
        {
        }
        public function testAddFileEvidenceBlankRequestContentRaisesValueException()
        {
        }
        public function testAddFileEvidenceNullRequestContentRaisesValueException()
        {
        }
        public function testAddFileEvidenceBlankRequestCategoryRaisesValueException()
        {
        }
        public function testFinalizeNullRaisesNotFoundException()
        {
        }
        public function testFinalizeEmptyIdRaisesNotFoundException()
        {
        }
        public function testFindingNullRaisesNotFoundException()
        {
        }
        public function testFindingEmptyIdRaisesNotFoundException()
        {
        }
        public function testRemoveEvidenceEmptyDisputeIdRaisesNotFoundException()
        {
        }
        public function testRemoveEvidenceNullDisputeIdRaisesNotFoundException()
        {
        }
        public function testRemoveEvidenceEvidenceNullIdRaisesNotFoundException()
        {
        }
        public function testRemoveEvidenceEmptyEvidenceIdRaisesValueException()
        {
        }
    }
}
namespace Test\Unit\Result {
    class ErrorTest extends \Test\Setup
    {
        public function testCallingNonExsitingFieldReturnsNull()
        {
        }
    }
    class SuccessfulTest extends \Test\Setup
    {
        public function testCallingNonExsitingFieldReturnsNull()
        {
        }
    }
}
namespace Test\Unit {
    class SubscriptionSearchTest extends \Test\Setup
    {
        public function testSearch_billingCyclesRemaining_isRangeNode()
        {
        }
        public function testSearch_price_isRangeNode()
        {
        }
        public function testSearch_daysPastDue_isRangeNode()
        {
        }
        public function testSearch_createdAt_isRangeNode()
        {
        }
        public function testSearch_id_isTextNode()
        {
        }
        public function testSearch_ids_isMultipleValueNode()
        {
        }
        public function testSearch_inTrialPeriod_isMultipleValueNode()
        {
        }
        public function testSearch_merchantAccountId_isMultipleValueNode()
        {
        }
        public function testSearch_planId_isMultipleValueOrTextNode()
        {
        }
        public function testSearch_status_isMultipleValueNode()
        {
        }
    }
    class ConfigurationTest extends \Test\Setup
    {
        public function setUp() : void
        {
        }
        public function teardown() : void
        {
        }
        public function testConstructWithArrayOfCredentials()
        {
        }
        public function testConstructWithProxyServerAndSslVersionAttributes()
        {
        }
        public function testAssertGlobalHasAccessTokenOrKeys()
        {
        }
        public function testAssertGlobalHasAccessTokenOrKeysWithoutPublicKey()
        {
        }
        public function testSetValidEnvironment()
        {
        }
        public function testSetInvalidEnvironment()
        {
        }
        public function testMerchantPath()
        {
        }
        public function testCaFile()
        {
        }
        public function testSSLOn()
        {
        }
        public function testPortNumber()
        {
        }
        public function testProtocol()
        {
        }
        public function testServerName()
        {
        }
        public function testBaseUrl()
        {
        }
        public function testProxyHost()
        {
        }
        public function testProxyPort()
        {
        }
        public function testProxyType()
        {
        }
        public function testProxyIsConfigured()
        {
        }
        public function testProxyUser()
        {
        }
        public function testProxyPassword()
        {
        }
        public function testIsAuthenticatedProxy()
        {
        }
        public function testTimeout()
        {
        }
        public function testTimeoutDefaultsToSixty()
        {
        }
        public function testSslVersion()
        {
        }
        public function testSslVersionDefaultsToNull()
        {
        }
        public function testAcceptEncodingDefaultsTrue()
        {
        }
        public function testAcceptGzipEncoding()
        {
        }
        public function testValidateAbsentEnvironment()
        {
        }
        public function testValidateEmptyStringEnvironment()
        {
        }
        public function testAbsentMerchantId()
        {
        }
        public function testEmptyStringMerchantId()
        {
        }
        public function testAbsentPublicKey()
        {
        }
        public function testEmptyStringPublicKey()
        {
        }
        public function testAbsentPrivateKey()
        {
        }
        public function testEmptyStringPrivateKey()
        {
        }
        public function testValidWithOAuthClientCredentials()
        {
        }
        public function testInvalidWithOAuthClientCredentials()
        {
        }
        public function testDetectEnvironmentFromClientId()
        {
        }
        public function testDetectEnvironmentFromClientIdFail()
        {
        }
        public function testClientIdTypeFail()
        {
        }
        public function testValidWithAccessToken()
        {
        }
        public function testInvalidAccessTokenType()
        {
        }
        public function testInvalidAccessTokenSyntax()
        {
        }
        public function testInvalidAccessTokenEnvironment()
        {
        }
        public function testValidWithOAuthClientCredentialsAndAccessToken()
        {
        }
        public function testInvalidEnvironmentWithOAuthClientCredentialsAndAccessToken()
        {
        }
        public function testCannotMixKeysWithOAuthCredentials()
        {
        }
    }
    class VenmoProfileDataTest extends \Test\Setup
    {
        public function testFactory()
        {
        }
        public function testToString()
        {
        }
    }
    class UnknownPaymentMethodTest extends \Test\Setup
    {
        public function testHandlesUnknownPaymentMethodResponses()
        {
        }
    }
    class MerchantAccountTest extends \Test\Setup
    {
        public function testCreateMerchantAccountWithAllParams()
        {
        }
    }
    class CreditCardVerificationTest extends \Test\Setup
    {
        public function test_createWithInvalidArguments()
        {
        }
        public function test_createWithPaymentMethodArguments()
        {
        }
    }
    class TextNodeTest extends \Test\Setup
    {
        public function testIs()
        {
        }
        public function testIsNot()
        {
        }
        public function testStartsWith()
        {
        }
        public function testEndsWith()
        {
        }
        public function testContains()
        {
        }
    }
}
namespace Test {
    class Helper
    {
        public static $valid_nonce_characters = 'bcdfghjkmnpqrstvwxyz23456789';
        public static function testMerchantConfig()
        {
        }
        public static function integrationMerchantGateway()
        {
        }
        public static function integration2MerchantConfig()
        {
        }
        public static function advancedFraudKountIntegrationMerchantGateway()
        {
        }
        public static function fraudProtectionEnterpriseIntegrationMerchantGateway()
        {
        }
        public static function defaultMerchantAccountId()
        {
        }
        public static function nonDefaultMerchantAccountId()
        {
        }
        public static function nonDefaultSubMerchantAccountId()
        {
        }
        public static function threeDSecureMerchantAccountId()
        {
        }
        public static function adyenMerchantAccountId()
        {
        }
        public static function fakeAmexDirectMerchantAccountId()
        {
        }
        public static function fakeVenmoAccountMerchantAccountId()
        {
        }
        public static function fakeFirstDataMerchantAccountId()
        {
        }
        public static function usBankMerchantAccount()
        {
        }
        public static function anotherUsBankMerchantAccount()
        {
        }
        public static function cardProcessorBRLMerchantAccountId()
        {
        }
        public static function suppressDeprecationWarnings()
        {
        }
        public static function _errorHandler($errno, $errstr, $errfile, $errline)
        {
        }
        public static function includes($collection, $targetItem)
        {
        }
        public static function assertPrintable($object)
        {
        }
        public static function escrow($transactionId)
        {
        }
        public static function create3DSVerification($merchantAccountId, $params)
        {
        }
        public static function generate3DSNonce($params)
        {
        }
        public static function nowInEastern()
        {
        }
        public static function decodedClientToken($params = [])
        {
        }
        public static function generateValidUsBankAccountNonce($accountNumber = '567891234')
        {
        }
        public static function generatePlaidUsBankAccountNonce()
        {
        }
        public static function generateInvalidUsBankAccountNonce()
        {
        }
        public static function sampleNotificationFromXml($xml)
        {
        }
    }
}
namespace Test\Braintree {
    class CreditCardDefaults
    {
        const ISSUING_BANK = "NETWORK ONLY";
        const COUNTRY_OF_ISSUANCE = "USA";
    }
    class OAuthTestHelper
    {
        public static function createGrant($gateway, $params)
        {
        }
        public static function createCredentials($params)
        {
        }
    }
}
namespace Test\Braintree\CreditCardNumbers {
    class CardTypeIndicators
    {
        const PREPAID = "4111111111111210";
        const COMMERCIAL = "4111111111131010";
        const PAYROLL = "4111111114101010";
        const HEALTHCARE = "4111111510101010";
        const DURBIN_REGULATED = "4111161010101010";
        const DEBIT = "4117101010101010";
        const UNKNOWN = "4111111111112101";
        const NO = "4111111111310101";
        const ISSUING_BANK = "4111111141010101";
        const COUNTRY_OF_ISSUANCE = "4111111111121102";
    }
}
namespace Test\Integration {
    class CustomerTest extends \Test\Setup
    {
        public function testAll_smokeTest()
        {
        }
        public function testAllWithManyResults()
        {
        }
        public function testCreate()
        {
        }
        public function testCreateWithIdOfZero()
        {
        }
        public function testGatewayCreate()
        {
        }
        public function testCreateWithAccessToken()
        {
        }
        public function testCreateWithAccountTypeDebit()
        {
        }
        public function testCreateWithAccountTypeCredit()
        {
        }
        public function testCreateErrorsWithVerificationAccountTypeIsInvalid()
        {
        }
        public function testCreateErrorsWithVerificationAccountTypeNotSupported()
        {
        }
        public function testCreateCustomerWithCardUsingNonce()
        {
        }
        public function testCreateCustomerWithCardUsingMissingThreeDSecurePassThruParams()
        {
        }
        public function testCreateCustomerWithCardUsingThreeDSecurePassThruParams()
        {
        }
        public function testCreateCustomerWithCardUsingThreeDSecureNonce()
        {
        }
        public function testCreateCustomerWithApplePayCard()
        {
        }
        public function testCreateCustomerWithGooglePayProxyCard()
        {
        }
        public function testCreateCustomerWithGooglePayNetworkToken()
        {
        }
        public function testCreateCustomerWithVenmoAccount()
        {
        }
        public function testCreateCustomerWithUsBankAccount()
        {
        }
        public function testCreate_withUnicode()
        {
        }
        public function testCreate_withCountry()
        {
        }
        public function testCreate_withVenmoSdkSession()
        {
        }
        public function testCreate_withVenmoSdkPaymentMethodCode()
        {
        }
        public function testCreate_blankCustomer()
        {
        }
        public function testCreate_withSpecialChars()
        {
        }
        public function testCreate_withCustomFields()
        {
        }
        public function testCreate_withDeviceData()
        {
        }
        public function testCreate_withRiskData()
        {
        }
        public function testCreate_includesRiskDataWhenSkipAdvancedFraudCheckingIsFalse()
        {
        }
        public function testCreate_doesNotIncludeRiskDataWhenSkipAdvancedFraudCheckingIsTrue()
        {
        }
        public function testCreate_withTaxIdentifiers()
        {
        }
        public function testCreate_withCreditCard()
        {
        }
        public function testCreate_withDuplicateCardCheck()
        {
        }
        public function testCreate_withCreditCardAndSpecificVerificationMerchantAccount()
        {
        }
        public function testCreate_withCreditCardAndVerificationAmount()
        {
        }
        public function testCreate_withCreditCardAndBillingAddress()
        {
        }
        public function testCreate_withValidationErrors()
        {
        }
        public function testCreate_countryValidations_inconsistency()
        {
        }
        public function testCreateNoValidate_returnsCustomer()
        {
        }
        public function testCreateNoValidate_throwsIfInvalid()
        {
        }
        public function testCreate_worksWithFuturePayPalNonce()
        {
        }
        public function testCreate_worksWithOrderPaymentPayPalNonce()
        {
        }
        public function testCreate_worksWithOrderPaymentPayPalNonceWithSnakeCase()
        {
        }
        public function testCreate_worksWithOrderPaymentPayPalNonceWithCamelCase()
        {
        }
        public function testCreate_doesNotWorkWithOnetimePayPalNonce()
        {
        }
        public function testDelete_deletesTheCustomer()
        {
        }
        public function testFind()
        {
        }
        public function test_findCustomerWithAllFilterableAssociationsFilteredOut()
        {
        }
        public function test_findCustomerWithNestedFilterableAssociationsFilteredOut()
        {
        }
        public function test_findUsBankAccountGivenPaymentMethodToken()
        {
        }
        public function testFind_throwsExceptionIfNotFound()
        {
        }
        public function testUpdate()
        {
        }
        public function testUpdate_withCountry()
        {
        }
        public function testUpdate_withTaxIdentifiers()
        {
        }
        public function testUpdate_withUpdatingExistingCreditCard()
        {
        }
        public function testUpdateCustomerWithCardUsingMissingThreeDSecurePassThruParams()
        {
        }
        public function testUpdateUsingThreeDSecurePassThruParams()
        {
        }
        public function testUpdate_includesRiskDataWhenSkipAdvancedFraudCheckingIsFalse()
        {
        }
        public function testUpdate_doesNotIncludeRiskDataWhenSkipAdvancedFraudCheckingIsTrue()
        {
        }
        public function testUpdate_failOnDuplicatePaymentMethod()
        {
        }
        public function testUpdate_forBillingAddressAndExistingCreditCardAndCustomerDetailsTogether()
        {
        }
        public function testUpdate_withNewCreditCardAndExistingBillingAddress()
        {
        }
        public function testUpdate_withNewCreditCardAndVerificationAmount()
        {
        }
        public function testUpdate_worksWithFuturePayPalNonce()
        {
        }
        public function testUpdate_worksWithOrderPaymentPayPalNonce()
        {
        }
        public function testUpdate_worksWithOrderPaymentPayPalNonceWithSnakeCase()
        {
        }
        public function testUpdate_worksWithOrderPaymentPayPalNonceWithCamelCase()
        {
        }
        public function testUpdateDefaultPaymentMethod()
        {
        }
        public function testUpdateDefaultPaymentMethodFromOptions()
        {
        }
        public function testUpdate_doesNotWorkWithOnetimePayPalNonce()
        {
        }
        public function testUpdateNoValidate()
        {
        }
        public function testCreateWithInvalidUTF8Bytes()
        {
        }
        public function testCreateWithValidUTF8Bytes()
        {
        }
        public function testSale_createsASaleUsingGivenToken()
        {
        }
        public function testSaleNoValidate_createsASaleUsingGivenToken()
        {
        }
        public function testSaleNoValidate_throwsIfInvalid()
        {
        }
        public function testCredit_createsACreditUsingGivenCustomerId()
        {
        }
        public function testCreditNoValidate_createsACreditUsingGivenId()
        {
        }
        public function testCreditNoValidate_throwsIfInvalid()
        {
        }
    }
    class TestTransactionTest extends \Test\Setup
    {
        public function setUp() : void
        {
        }
        /**
         * @after
         */
        public function tearDownResetBraintreeEnvironment()
        {
        }
        /**
         * @expectException Exception\TestOperationPerformedInProduction
         */
        public function testThrowingExceptionWhenProduction()
        {
        }
        public function testSettle()
        {
        }
        public function testSettlementConfirmed()
        {
        }
        public function testSettlementDeclined()
        {
        }
        public function testSettlementPending()
        {
        }
    }
    class DocumentUploadTest extends \Test\Setup
    {
        private $gateway;
        private $pngFile;
        public function setUp() : void
        {
        }
        public function testCreate_whenValid_returnsSuccessfulResult()
        {
        }
        public function testCreate_withUnsupportedFileType_returnsError()
        {
        }
        public function testCreate_withMalformedFile_returnsError()
        {
        }
        public function testCreate_withInvalidKind_returnsError()
        {
        }
        public function testCreate_whenFileIsOver4Mb_returnsError()
        {
        }
        public function testCreate_whenFileIsEmpty_returnsError()
        {
        }
        public function testCreate_whenPDFFileIsOver50Pages_returnsError()
        {
        }
        public function testCreate_whenInvalidSignature_throwsInvalidArgumentException()
        {
        }
        public function test_create_whenFileIsInvalid_throwsError()
        {
        }
    }
    class UsBankAccountAccountTest extends \Test\Setup
    {
        public function testReturnUsBankAccount()
        {
        }
        public function testFind()
        {
        }
        public function testFind_throwsIfCannotBeFound()
        {
        }
        public function testSale_createsASaleUsingGivenToken()
        {
        }
    }
    class ClientTokenTest extends \Test\Setup
    {
        public function test_ClientTokenAuthorizesRequest()
        {
        }
        public function test_VersionOptionSupported()
        {
        }
        public function test_VersionDefaultsToTwo()
        {
        }
        public function testGateway_VersionDefaultsToTwo()
        {
        }
        public function test_GatewayRespectsVerifyCard()
        {
        }
        public function test_GatewayRespectsFailOnDuplicatePaymentMethod()
        {
        }
        public function test_GatewayRespectsMakeDefault()
        {
        }
        public function test_ClientTokenAcceptsMerchantAccountId()
        {
        }
        public function test_GenerateRaisesExceptionOnGateway422()
        {
        }
    }
    class PayPalAccountTest extends \Test\Setup
    {
        public function testFind()
        {
        }
        public function testGatewayFind()
        {
        }
        public function testFind_doesNotReturnIncorrectPaymentMethodType()
        {
        }
        public function test_PayPalAccountExposesTimestamps()
        {
        }
        public function test_PayPalAccountExposesBillingAgreementId()
        {
        }
        public function testFind_throwsIfCannotBeFound()
        {
        }
        public function testFind_throwsUsefulErrorMessagesWhenEmpty()
        {
        }
        public function testFind_throwsUsefulErrorMessagesWhenInvalid()
        {
        }
        public function testFind_returnsSubscriptionsAssociatedWithAPaypalAccount()
        {
        }
        public function testUpdate()
        {
        }
        public function testUpdateAndMakeDefault()
        {
        }
        public function testUpdate_handleErrors()
        {
        }
        public function testDelete()
        {
        }
        public function testSale_createsASaleUsingGivenToken()
        {
        }
    }
    class TransactionTest extends \Test\Setup
    {
        public function testCloneTransaction()
        {
        }
        public function testCreateTransactionUsingNonce()
        {
        }
        public function testCreateScaExemptTransactionSuccess()
        {
        }
        public function testCreateScaExemptTransactionFailure()
        {
        }
        public function testCreateEloCardTransaction()
        {
        }
        public function testGatewayCreateTransactionUsingNonce()
        {
        }
        public function testCreateWithAccountTypeCredit()
        {
        }
        public function testCreateWithAccountTypeDebit()
        {
        }
        public function testCreateErrorsWithAmountNotSupportedByProcessor()
        {
        }
        public function testCreateErrorsWithAccountTypeIsInvalid()
        {
        }
        public function testCreateErrorsWithAccountTypeNotSupported()
        {
        }
        public function testCreateErrorsWithAccountTypeDebitDoesNotSupportAuths()
        {
        }
        public function testCreateErrorsWithTaxAmountIsRequiredForAibSwedish()
        {
        }
        public function testSaleAndSkipAdvancedFraudChecking()
        {
        }
        public function testSaleAndSkipAvs()
        {
        }
        public function testSaleAndSkipCvv()
        {
        }
        public function testSaleWithLevel3SummaryFields()
        {
        }
        public function testSaleWhenDiscountAmountFormatIsInvalid()
        {
        }
        public function testSaleWhenDiscountAmountCannotBeNegative()
        {
        }
        public function testSaleWhenDiscountAmountIsTooLarge()
        {
        }
        public function testSaleWhenShippingAmountFormatIsInvalid()
        {
        }
        public function testSaleWhenShippingAmountCannotBeNegative()
        {
        }
        public function testSaleWhenShippingAmountIsTooLarge()
        {
        }
        public function testSaleWhenShipsFromPostalCodeIsTooLong()
        {
        }
        public function testSaleWhenShipsFromPostalCodeIsInvalid()
        {
        }
        public function testSaleWhenShipsFromPostalCodeInvalidCharacters()
        {
        }
        public function testSale_withLineItemsZero()
        {
        }
        public function testSale_withLineItemsSingleOnlyRequiredFields()
        {
        }
        public function testSale_withLineItemsSingleZeroAmounts()
        {
        }
        public function testSale_withLineItemsSingle()
        {
        }
        public function testSale_withLineItemsMultiple()
        {
        }
        public function testSale_withLineItemsValidationErrorCommodityCodeIsTooLong()
        {
        }
        public function testSale_withLineItemsValidationErrorDescriptionIsTooLong()
        {
        }
        public function testSale_withLineItemsValidationErrorDiscountAmountIsTooLarge()
        {
        }
        public function testSale_withLineItemsValidationErrorDiscountAmountCannotBeNegative()
        {
        }
        public function testSale_withLineItemsValidationErrorTaxAmountFormatIsInvalid()
        {
        }
        public function testSale_withLineItemsValidationErrorTaxAmountIsTooLarge()
        {
        }
        public function testSale_withLineItemsValidationErrorTaxAmountCannotBeNegative()
        {
        }
        public function testSale_withLineItemsValidationErrorKindIsRequired()
        {
        }
        public function testSale_withLineItemsValidationErrorNameIsRequired()
        {
        }
        public function testSale_withLineItemsValidationErrorNameIsTooLong()
        {
        }
        public function testSale_withLineItemsValidationErrorProductCodeIsTooLong()
        {
        }
        public function testSale_withLineItemsValidationErrorQuantityIsRequired()
        {
        }
        public function testSale_withLineItemsValidationErrorQuantityIsTooLarge()
        {
        }
        public function testSale_withLineItemsValidationErrorTotalAmountIsRequired()
        {
        }
        public function testSale_withLineItemsValidationErrorTotalAmountIsTooLarge()
        {
        }
        public function testSale_withLineItemsValidationErrorTotalAmountMustBeGreaterThanZero()
        {
        }
        public function testSale_withLineItemsValidationErrorUnitAmountIsRequired()
        {
        }
        public function testSale_withLineItemsValidationErrorUnitAmountIsTooLarge()
        {
        }
        public function testSale_withLineItemsValidationErrorUnitAmountMustBeGreaterThanZero()
        {
        }
        public function testSale_withLineItemsValidationErrorUnitOfMeasureIsTooLong()
        {
        }
        public function testSale_withLineItemsValidationErrorUnitTaxAmountFormatIsInvalid()
        {
        }
        public function testSale_withLineItemsValidationErrorUnitTaxAmountIsTooLarge()
        {
        }
        public function testSale_withLineItemsValidationErrorUnitTaxAmountCannotBeNegative()
        {
        }
        public function testSale_withLineItemsValidationErrorTooManyLineItems()
        {
        }
        public function testCreateTransactionUsingFakeApplePayNonce()
        {
        }
        public function testCreateTransactionUsingRawApplePayParams()
        {
        }
        public function testCreateTransactionUsingRawGooglePayParams()
        {
        }
        public function testCreateTransactionUsingFakeGooglePayProxyCardNonce()
        {
        }
        public function testCreateTransactionUsingFakeGooglePayNetworkTokenNonce()
        {
        }
        public function testCreateTransactionUsingFakeVenmoAccountNonceAndProfileId()
        {
        }
        public function testCreateTransactionUsingFakeVenmoAccountNonce()
        {
        }
        public function testCreateTransactionReturnsPaymentInstrumentType()
        {
        }
        public function testCloneTransactionAndSubmitForSettlement()
        {
        }
        public function testCloneWithValidations()
        {
        }
        public function testSale()
        {
        }
        public function testSaleWithAccessToken()
        {
        }
        public function testSaleWithRiskData()
        {
        }
        public function testRecurring()
        {
        }
        public function testTransactionSourceWithRecurringFirst()
        {
        }
        public function testTransactionSourceWithRecurring()
        {
        }
        public function testTransactionSourceWithMerchant()
        {
        }
        public function testTransactionSourceWithMoto()
        {
        }
        public function testTransactionSourceInvalid()
        {
        }
        public function testSale_withServiceFee()
        {
        }
        public function testSale_isInvalidIfTransactionMerchantAccountIsNotSub()
        {
        }
        public function testSale_isInvalidIfSubMerchantAccountHasNoServiceFee()
        {
        }
        public function testSale_withVenmoSdkSession()
        {
        }
        public function testSale_withVenmoSdkPaymentMethodCode()
        {
        }
        public function testSale_withLevel2Attributes()
        {
        }
        public function testSale_withInvalidTaxAmountAttribute()
        {
        }
        public function testSale_withServiceFeeTooLarge()
        {
        }
        public function testSale_withTooLongPurchaseOrderAttribute()
        {
        }
        public function testSale_withInvalidPurchaseOrderNumber()
        {
        }
        public function testSale_withInvalidProductSku()
        {
        }
        public function testSale_withInvalidAddress()
        {
        }
        public function testSale_withAllAttributes()
        {
        }
        public function testSale_withCustomFields()
        {
        }
        public function testSale_withExpirationMonthAndYear()
        {
        }
        public function testSale_withExchangeRateQuoteId()
        {
        }
        public function testSale_withInvalidExchangeRateQuoteId()
        {
        }
        public function testSale_underscoresAllCustomFields()
        {
        }
        public function testSale_withInvalidCustomField()
        {
        }
        public function testSale_withMerchantAccountId()
        {
        }
        public function testSale_withoutMerchantAccountIdFallsBackToDefault()
        {
        }
        public function testSale_withShippingAddressId()
        {
        }
        public function testSale_withBillingAddressId()
        {
        }
        public function testSaleNoValidate()
        {
        }
        public function testSale_withSoftDecline()
        {
        }
        public function testSale_withHardDecline()
        {
        }
        public function testSale_withExistingCustomer()
        {
        }
        public function testSale_andStoreShippingAddressInVault()
        {
        }
        public function testSale_withExistingCustomer_storeInVault()
        {
        }
        public function testCredit()
        {
        }
        public function testCreditNoValidate()
        {
        }
        public function testCredit_withMerchantAccountId()
        {
        }
        public function testCredit_withoutMerchantAccountIdFallsBackToDefault()
        {
        }
        public function testCredit_withServiceFeeNotAllowed()
        {
        }
        public function testSubmitForSettlement_nullAmount()
        {
        }
        public function testSubmitForSettlement_amountLessThanServiceFee()
        {
        }
        public function testSubmitForSettlement_withAmount()
        {
        }
        public function testSubmitForSettlement_withOrderId()
        {
        }
        public function testSubmitForSettlement_withLevel2Data()
        {
        }
        public function testSubmitForSettlement_withLevel3Data()
        {
        }
        public function testSubmitForSettlement_withDescriptor()
        {
        }
        public function testSubmitForSettlement_withInvalidParams()
        {
        }
        public function testSubmitForSettlementNoValidate_whenValidWithoutAmount()
        {
        }
        public function testSubmitForSettlementNoValidate_whenValidWithAmount()
        {
        }
        public function testSubmitForSettlementNoValidate_whenInvalid()
        {
        }
        public function testUpdateDetails()
        {
        }
        public function testUpdateDetails_withInvalidParams()
        {
        }
        public function testUpdateDetails_withInvalidAmount()
        {
        }
        public function testUpdateDetails_withInvalidDescriptor()
        {
        }
        public function testUpdateDetails_withInvalidOrderId()
        {
        }
        public function testUpdateDetails_withInvalidProcessor()
        {
        }
        public function testUpdateDetails_withBadStatus()
        {
        }
        public function testVoid()
        {
        }
        public function test_countryValidationError_inconsistency()
        {
        }
        public function test_countryValidationError_incorrectAlpha2()
        {
        }
        public function test_countryValidationError_incorrectAlpha3()
        {
        }
        public function test_countryValidationError_incorrectNumericCode()
        {
        }
        public function testVoid_withValidationError()
        {
        }
        public function testVoidNoValidate()
        {
        }
        public function testVoidNoValidate_throwsIfNotInvalid()
        {
        }
        public function testFind()
        {
        }
        public function testFindExposesDisbursementDetails()
        {
        }
        public function testFindExposesAuthorizationAdjustments()
        {
        }
        public function testFindExposesAuthorizationAdjustmentsSoftDeclined()
        {
        }
        public function testFindExposesAuthorizationAdjustmentsHardDeclined()
        {
        }
        public function testFindExposesDisputes()
        {
        }
        public function testFindExposesThreeDSecureInfo()
        {
        }
        public function testFindExposesNullThreeDSecureInfo()
        {
        }
        public function testFindExposesRetrievals()
        {
        }
        public function testFindExposesAcquirerReferenceNumber()
        {
        }
        public function testFindExposesPayPalDetails()
        {
        }
        public function testSale_storeInVault()
        {
        }
        public function testSale_storeInVaultOnSuccessWithSuccessfulTransaction()
        {
        }
        public function testSale_storeInVaultOnSuccessWithFailedTransaction()
        {
        }
        public function testSale_withDeviceData()
        {
        }
        public function testSale_withRiskData()
        {
        }
        public function testSale_withInvalidRiskData()
        {
        }
        public function testSale_withDescriptor()
        {
        }
        public function testSale_withDescriptorValidation()
        {
        }
        public function testSale_withHoldInEscrow()
        {
        }
        public function testSale_withHoldInEscrowFailsForMasterMerchantAccount()
        {
        }
        public function testSale_withThreeDSecureOptionRequired()
        {
        }
        public function testSale_withThreeDSecureToken()
        {
        }
        public function testSale_returnsErrorIfThreeDSecureToken()
        {
        }
        public function testSale_returnsErrorIf3dsLookupDataDoesNotMatchTransactionData()
        {
        }
        public function testSale_withThreeDSecurePassThru()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruMerchantAcountDoesNotSupportCardType()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruIsMissingEciFlag()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruIsMissingCavvOrXid()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruEciFlagIsInvalid()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruThreeDSecureVersionIsInvalid()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruAuthenticationResponseIsInvalid()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruDirectoryResponseIsInvalid()
        {
        }
        public function testSale_returnsErrorsWhenThreeDSecurePassThruCavvAlgorithmIsInvalid()
        {
        }
        public function testHoldInEscrow_afterSale()
        {
        }
        public function testHoldInEscrow_afterSaleFailsWithMasterMerchantAccount()
        {
        }
        public function testSubmitForRelease_FromEscrow()
        {
        }
        public function testSubmitForRelease_fromEscrowFailsForTransactionsNotHeldInEscrow()
        {
        }
        public function testCancelRelease_fromEscrow()
        {
        }
        public function testCancelRelease_fromEscrowFailsIfTransactionNotSubmittedForRelease()
        {
        }
        public function testRefund()
        {
        }
        public function testRefundWithPartialAmount()
        {
        }
        public function testMultipleRefundsWithPartialAmounts()
        {
        }
        public function testRefundWithUnsuccessfulPartialAmount()
        {
        }
        public function testHandlesSoftDeclinedRefundAuth()
        {
        }
        public function testHandlesHardDeclinedRefundAuth()
        {
        }
        public function testRefundWithOptionsParam()
        {
        }
        public function testGatewayRejectionOnApplicationIncomplete()
        {
        }
        public function testGatewayRejectionOnAvs()
        {
        }
        public function testGatewayRejectionOnAvsAndCvv()
        {
        }
        public function testGatewayRejectionOnCvv()
        {
        }
        public function testGatewayRejectionOnFraud()
        {
        }
        public function testGatewayRejectionOnRiskThreshold()
        {
        }
        public function testSnapshotPlanIdAddOnsAndDiscountsFromSubscription()
        {
        }
        public function testGatewayRejectionOnTokenIssuanceError()
        {
        }
        public function createTransactionToRefund()
        {
        }
        public function createTransactionToRefundAuth()
        {
        }
        public function createEscrowedTransaction()
        {
        }
        public function testCardTypeIndicators()
        {
        }
        public function testCreate_withVaultedPayPal()
        {
        }
        public function testCreate_withFuturePayPal()
        {
        }
        public function testCreate_withLocalPaymentWebhookContent()
        {
        }
        public function testCreate_withPayeeId()
        {
        }
        public function testCreate_withPayeeIdInOptions()
        {
        }
        public function testCreate_withPayeeIdInOptionsPayPal()
        {
        }
        public function testCreate_withPayeeEmail()
        {
        }
        public function testCreate_withPayeeEmailInOptions()
        {
        }
        public function testCreate_withPayeeEmailInOptionsPayPal()
        {
        }
        public function testCreate_withPayPalCustomField()
        {
        }
        public function testCreate_withPayPalSupplementaryData()
        {
        }
        public function testCreate_withPayPalDescription()
        {
        }
        public function testCreate_withPayPalReturnsPaymentInstrumentType()
        {
        }
        public function testCreate_withFuturePayPalAndVault()
        {
        }
        public function testCreate_withBillingAgreementPayPalAndVault()
        {
        }
        public function testCreate_withOnetimePayPal()
        {
        }
        public function testCreate_withOnetimePayPalAndDoesNotVault()
        {
        }
        public function testCreate_withPayPalAndSubmitForSettlement()
        {
        }
        public function testCreate_withPayPalHandlesBadUnvalidatedNonces()
        {
        }
        public function testCreate_withPayPalHandlesNonExistentNonces()
        {
        }
        public function testVoid_withPayPal()
        {
        }
        public function testVoid_failsOnDeclinedPayPal()
        {
        }
        public function testRefund_withPayPal()
        {
        }
        public function testRefund_withPayPalAssignsRefundId()
        {
        }
        public function testRefund_withPayPalAssignsRefundedTransactionId()
        {
        }
        public function testRefund_withPayPalFailsIfNotSettled()
        {
        }
        public function testRefund_partialWithPayPal()
        {
        }
        public function testRefund_multiplePartialWithPayPal()
        {
        }
        public function testCreate_withLocalPayment()
        {
        }
        public function testRefund_withLocalPayment()
        {
        }
        public function testIncludeProcessorSettlementResponseForSettlementDeclinedTransaction()
        {
        }
        public function testIncludeProcessorSettlementResponseForSettlementPendingTransaction()
        {
        }
        public function testSale_withLodgingIndustryData()
        {
        }
        public function testSale_withLodgingIndustryDataValidation()
        {
        }
        public function testSale_withTravelCruiseIndustryData()
        {
        }
        public function testSale_withTravelCruiseIndustryDataValidation()
        {
        }
        public function testSale_withTravelFlightIndustryData()
        {
        }
        public function testSale_withTravelFlightIndustryDataValidation()
        {
        }
        public function testSale_withAmexRewardsSucceeds()
        {
        }
        public function testSale_withAmexRewardsSucceedsEvenIfCardIsIneligible()
        {
        }
        public function testSale_withAmexRewardsSucceedsEvenIfCardBalanceIsInsufficient()
        {
        }
        public function testSubmitForSettlement_withAmexRewardsSucceeds()
        {
        }
        public function testSubmitForSettlement_withAmexRewardsSucceedsEvenIfCardIsIneligible()
        {
        }
        public function testSubmitForSettlement_withAmexRewardsSucceedsEvenIfCardBalanceIsInsufficient()
        {
        }
        public function testSubmitForPartialSettlement()
        {
        }
        public function testSubmitForPartialSettlementUnsuccesful()
        {
        }
        public function testSubmitForPartialSettlement_withOrderId()
        {
        }
        public function testSubmitForPartialSettlement_withDescriptor()
        {
        }
        public function testSubmitForPartialSettlement_withInvalidParams()
        {
        }
        public function testFacilitatedAndFacilitatorDetailsAreReturnedOnTransactionsCreatedViaNonceGranting()
        {
        }
        public function testBillingPostalCodeIsReturnedWhenRequestedOnTransactionsCreatedViaNonceGranting()
        {
        }
        public function testTransactionsCanBeCreatedWithSharedPaymentMethodToken()
        {
        }
        public function testTransactionsCanBeCreatedWithSharedPaymentMethodNonce()
        {
        }
        public function testVisaTransactionReceivesNetworkTransactionId()
        {
        }
        public function testMasterCardTransactionReceivesNetworkTransactionId()
        {
        }
        public function testAmexTransactionReceivesNetworkTransactionId()
        {
        }
        public function testTransactionExternalVaultVisaWorksWithStatus()
        {
        }
        public function testTransactionExternalVaultNonVisaWorksWithStatus()
        {
        }
        public function testTransactionExternalaultMasterCardWorksWithNullPreviousTransactionId()
        {
        }
        public function testTransactionExternalVaultWorksWithNullPreviousTransactionId()
        {
        }
        public function testTransactionVisaExternalVaultWorksWithPreviousNetworkTransactionId()
        {
        }
        public function testTransactionExternalVaultWorksWithStatusVaultedWithoutPreviousNetworkTransactionId()
        {
        }
        public function testTransactionExternalVaultValidationErrorUnsupportedPaymentInstrumentType()
        {
        }
        public function testTransactionExternalVaultValidationErrorInvalidStatus()
        {
        }
        public function testTransactionExternalVaultValidationErrorInvalidStatusWithPreviousNetworkTransactionId()
        {
        }
        public function testPayPalHereDetailsAuthCapture()
        {
        }
        public function testPayPalHereDetailsSale()
        {
        }
        public function testPayPalHereDetailsRefund()
        {
        }
        public function testCreateTransactionReturnsNetworkResponse()
        {
        }
        public function testCreateTransactionReturnsRetrievalReferenceNumber()
        {
        }
        public function testNetworkTokenizedTransaction()
        {
        }
        public function testNonNetworkTokenizedTransaction()
        {
        }
        public function testValidManualKeyEntryTransaction()
        {
        }
        public function testInvalidManualKeyEntryTransaction()
        {
        }
        public function testInstallmentsTransaction()
        {
        }
        public function testInstallmentAdjustmentsTransaction()
        {
        }
        public function testAdjustAuthorization()
        {
        }
        public function testAdjustAuthorizationOnNonSupportingMultiAuthAdjustmentProcessor()
        {
        }
        public function testAdjustAuthorizationOnAmountSubmittedIsZero()
        {
        }
        public function testAdjustAuthorizationOnAmountSubmittedIsSameAsAuthorizedAmount()
        {
        }
        public function testAdjustAuthorizationOnNotAuthorizedTransaction()
        {
        }
        public function testAdjustAuthorizationOnNonPreAuthTransaction()
        {
        }
        public function testAdjustAuthorizationOnProcessorNotSupportingIncremetnalAuth()
        {
        }
        public function testAdjustAuthorizationOnProcessorNotSupportingAuthReversal()
        {
        }
        public function testNonRetriedTransaction()
        {
        }
        public function testRetriedTransaction()
        {
        }
        public function testIneligibleRetryTransaction()
        {
        }
    }
    class DisputeSearchTest extends \Test\Setup
    {
        public function testAdvancedSearch_noResults()
        {
        }
        public function testAdvancedSearch_byId_returnsSingleDispute()
        {
        }
        public function testAdvancedSearch_byCustomerid_returnsDispute()
        {
        }
        public function testAdvancededSearch_byReason_returnsTwoDisputes()
        {
        }
        public function testAdvancededSearch_byChargebackProtectionLevel_returnsDispute()
        {
        }
        public function testAdvancedSearch_byReceivedDateRange_returnsDispute()
        {
        }
        public function testAdvancedSearch_byDisbursementDateRange_returnsDispute()
        {
        }
        public function testAdvancedSearch_byEffectiveDateRange_returnsDispute()
        {
        }
        private function collectionToArray($collection)
        {
        }
    }
    class BraintreeGatewayTest extends \Test\Setup
    {
        public function testGraphQLCanTokenizeCreditCard()
        {
        }
        public function testGraphQLRequestWithoutVariables()
        {
        }
    }
    class SubscriptionTest extends \Test\Setup
    {
        public function testCreate_doesNotAcceptBadAttributes()
        {
        }
        public function testCreate_whenSuccessful()
        {
        }
        public function testGatewayCreate_whenSuccessful()
        {
        }
        public function testCreate_withPaymentMethodNonce()
        {
        }
        public function testCreate_returnsTransactionWhenTransactionFails()
        {
        }
        public function testCreate_canSetTheId()
        {
        }
        public function testCreate_canSetTheMerchantAccountId()
        {
        }
        public function testCreate_trialPeriodDefaultsToPlanWithoutTrial()
        {
        }
        public function testCreate_trialPeriondDefaultsToPlanWithTrial()
        {
        }
        public function testCreate_alterPlanTrialPeriod()
        {
        }
        public function testCreate_removePlanTrialPeriod()
        {
        }
        public function testCreate_createsATransactionIfNoTrialPeriod()
        {
        }
        public function testCreate_doesNotCreateTransactionIfTrialPeriod()
        {
        }
        public function testCreate_returnsATransactionWithSubscriptionBillingPeriod()
        {
        }
        public function testCreate_priceCanBeOverriden()
        {
        }
        public function testCreate_billingDayOfMonthIsInheritedFromPlan()
        {
        }
        public function testCreate_billingDayOfMonthCanBeOverriden()
        {
        }
        public function testCreate_billingDayOfMonthCanBeOverridenWithStartImmediately()
        {
        }
        public function testCreate_firstBillingDateCanBeSet()
        {
        }
        public function testCreate_firstBillingDateInThePast()
        {
        }
        public function testCreate_numberOfBillingCyclesCanBeOverridden()
        {
        }
        public function testCreate_numberOfBillingCyclesCanBeOverriddenToNeverExpire()
        {
        }
        public function testCreate_doesNotInheritAddOnsAndDiscountsWhenDoNotInheritAddOnsOrDiscountsIsSet()
        {
        }
        public function testCreate_inheritsAddOnsAndDiscountsFromPlanByDefault()
        {
        }
        public function testCreate_allowsOverridingInheritedAddOnsAndDiscounts()
        {
        }
        public function testCreate_allowsRemovalOfInheritedAddOnsAndDiscounts()
        {
        }
        public function testCreate_allowsAddingNewAddOnsAndDiscounts()
        {
        }
        public function testCreate_properlyParsesValidationErrorsForArrays()
        {
        }
        public function testCreate_withDescriptor()
        {
        }
        public function testCreate_withDescriptorValidation()
        {
        }
        public function testCreate_withDescription()
        {
        }
        public function testCreate_fromPayPalACcount()
        {
        }
        public function testCreate_fromPayPalACcountDoesNotWorkWithFutureNonce()
        {
        }
        public function testCreate_fromPayPalACcountDoesNotWorkWithOnetimeNonce()
        {
        }
        public function testValidationErrors_hasValidationErrorsOnId()
        {
        }
        public function testFind()
        {
        }
        public function testFind_throwsIfNotFound()
        {
        }
        public function testUpdate_whenSuccessful()
        {
        }
        public function testUpdate_doesNotAcceptBadAttributes()
        {
        }
        public function testUpdate_canUpdateNumberOfBillingCycles()
        {
        }
        public function testUpdate_canUpdateNumberOfBillingCyclesToNeverExpire()
        {
        }
        public function testUpdate_createsTransactionOnProration()
        {
        }
        public function testUpdate_createsProratedTransactionWhenFlagIsPassedTrue()
        {
        }
        public function testUpdate_createsProratedTransactionWhenFlagIsPassedFalse()
        {
        }
        public function testUpdate_DoesNotUpdateSubscriptionWhenProrationTransactionFailsAndRevertIsTrue()
        {
        }
        public function testUpdate_UpdatesSubscriptionWhenProrationTransactionFailsAndRevertIsFalse()
        {
        }
        public function testUpdate_invalidSubscriptionId()
        {
        }
        public function testUpdate_validationErrors()
        {
        }
        public function testUpdate_cannotUpdateCanceledSubscription()
        {
        }
        public function testUpdate_canUpdatePaymentMethodToken()
        {
        }
        public function testUpdate_canUpdatePaymentMethodWithPaymentMethodNonce()
        {
        }
        public function testUpdate_canUpdateAddOnsAndDiscounts()
        {
        }
        public function testUpdate_canAddAndRemoveAddOnsAndDiscounts()
        {
        }
        public function testUpdate_canReplaceEntireSetOfAddonsAndDiscounts()
        {
        }
        public function testUpdate_withDescriptor()
        {
        }
        public function testUpdate_withDescription()
        {
        }
        public function testCancel_returnsSuccessIfCanceled()
        {
        }
        public function testCancel_throwsErrorIfRecordNotFound()
        {
        }
        public function testCancel_returnsErrorIfCancelingCanceledSubscription()
        {
        }
        public function testRetryCharge_WithoutAmount()
        {
        }
        public function testRetryCharge_WithAmount()
        {
        }
        public function testRetryCharge_WithSubmitForSettlement()
        {
        }
        public function testRetryCharge_WithSubmitForSettlementAndAmount()
        {
        }
    }
    class PaymentMethodWithUsBankAccountTest extends \Test\Setup
    {
        public function testCreate_fromUsBankAccountNonce()
        {
        }
        public function testCreate_fromUsBankAccountNonceWithVerification()
        {
        }
        public function testCreate_fromPlaidUsBankAccountNonce()
        {
        }
        public function testFind_returnsUsBankAccount()
        {
        }
        public function testCompliantCreate_fromUsBankAccountNonce()
        {
        }
    }
    class TransactionLineItemTest extends \Test\Setup
    {
        public function testFindAll_returnsLineItems()
        {
        }
    }
    class MultipleValueNodeTest extends \Test\Setup
    {
        public function testIn_singleValue()
        {
        }
        public function testIs()
        {
        }
        public function testSearch_statusIsExpired()
        {
        }
        public function testIn_multipleValues()
        {
        }
    }
}
namespace Test\Integration\Error {
    class ValidationErrorCollectionTest extends \Test\Setup
    {
        public function mapValidationErrorsToCodes($validationErrors)
        {
        }
        public function test_shallowAll_givesAllErrorsShallowly()
        {
        }
        public function test_deepAll_givesAllErrorsDeeply()
        {
        }
    }
    class ErrorCollectionTest extends \Test\Setup
    {
        public function testDeepSize_withNestedErrors()
        {
        }
        public function testOnHtmlField()
        {
        }
        public function testOnHtmlField_returnsEmptyArrayIfNone()
        {
        }
        public function testOnHtmlField_returnsEmptyForCustomFieldsIfNoErrors()
        {
        }
        public function testCount_returnsTheNumberOfErrors()
        {
        }
        public function testJsonSerialize()
        {
        }
    }
}
namespace Test\Integration {
    class AddOnsTest extends \Test\Setup
    {
        public function testAll_returnsAllAddOns()
        {
        }
        public function testGatewayAll_returnsAllAddOns()
        {
        }
    }
    class DiscountTest extends \Test\Setup
    {
        public function testAll_returnsAllDiscounts()
        {
        }
        public function testGatewayAll_returnsAllDiscounts()
        {
        }
    }
    class DisbursementTest extends \Test\Setup
    {
        public function testTransactions()
        {
        }
    }
}
namespace Braintree {
    /**
     * Braintree HTTP Client
     * processes Http requests using curl
     */
    class Http
    {
        protected $_config;
        private $_useClientCredentials = false;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($config)
        {
        }
        /*
         * DELETE request
         *
         * @param string $path URL path
         * @param object $params optional any addition request parameters
         *
         * @return array|Exception
         */
        public function delete($path, $params = null)
        {
        }
        /*
         * GET request
         *
         * @param string $path URL path
         *
         * @return array|Exception
         */
        public function get($path)
        {
        }
        /*
         * POST request
         *
         * @param string $path URL path
         * @param object $params optional any addition request parameters
         *
         * @return array|Exception
         */
        public function post($path, $params = null)
        {
        }
        /*
         * POST request for multi parts to be sent
         *
         * @param string $path URL path
         * @param object $params additional request parameters
         * @param object $file to be uploaded
         *
         * @return array|Exception
         */
        public function postMultipart($path, $params, $file)
        {
        }
        /*
         * PUT request
         *
         * @param string $path URL path
         * @param object $params optional any addition request parameters
         *
         * @return array|Exception
         */
        public function put($path, $params = null)
        {
        }
        private function _buildXml($params)
        {
        }
        /*
         * Sets internal variable to true
         */
        public function useClientCredentials()
        {
        }
        private function _doRequest($httpVerb, $path, $requestBody = null, $file = null, $headers = null)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doUrlRequest($httpVerb, $url, $requestBody = null, $file = null, $customHeaders = null)
        {
        }
    }
}
namespace Test\Integration {
    class HttpClientApi extends \Braintree\Http
    {
        protected function _doRequest($httpVerb, $path, $requestBody = null, $file = null, $headers = null)
        {
        }
        public function get($path)
        {
        }
        public function post($path, $body = null)
        {
        }
        public function _doUrlRequest($httpVerb, $url, $requestBody = null, $file = null, $headers = null)
        {
        }
        public function get_configuration($options)
        {
        }
        public function get_cards($options)
        {
        }
        public function nonce_for_new_card($options)
        {
        }
        public function nonceForPayPalAccount($options)
        {
        }
    }
    class GraphQLTest extends \Test\Setup
    {
        public function testGraphQLPing()
        {
        }
        public function testGraphQLProductionSSL()
        {
        }
        public function testGraphQLSandboxSSL()
        {
        }
        public function testGraphQLWithVariableInputs()
        {
        }
        public function testGraphQLWithVariableInputsCanReturnParsableErrors()
        {
        }
    }
    class SamsungPayCardTest extends \Test\Setup
    {
        public function testCreateWithSamsungPayCardNonce()
        {
        }
        public function testCreateWithNameAndAddress()
        {
        }
        public function testTransactionSearchWithSamsungPay()
        {
        }
        public function testCreateCustomerWithSamsungPayCard()
        {
        }
        public function testCreateTransactionWithSamsungPayNonceAndVault()
        {
        }
    }
    class CreditCardVerificationAdvancedSearchTest extends \Test\Setup
    {
        public function test_searchOnTextFields()
        {
        }
        public function test_searchOnSuccessfulCustomerAndPaymentFields()
        {
        }
        public function testGateway_searchEmpty()
        {
        }
        public function test_createdAt()
        {
        }
        public function test_multipleValueNode_ids()
        {
        }
        public function test_multipleValueNode_creditCardType()
        {
        }
        public function test_multipleValueNode_status()
        {
        }
    }
    class AddressTest extends \Test\Setup
    {
        public function testCreate()
        {
        }
        public function testGatewayCreate()
        {
        }
        public function testCreate_withValidationErrors()
        {
        }
        public function testCreate_withValidationErrors_onCountryCodes()
        {
        }
        public function testCreate_withNotFoundErrors()
        {
        }
        public function testCreateNoValidate()
        {
        }
        public function testCreateNoValidate_withValidationErrors()
        {
        }
        public function testDelete()
        {
        }
        public function testFind()
        {
        }
        public function testFind_whenNotFound()
        {
        }
        public function testUpdate()
        {
        }
        public function testUpdate_withValidationErrors()
        {
        }
        public function testUpdate_withValidationErrors_onCountry()
        {
        }
        public function testUpdateNoValidate()
        {
        }
    }
    class HttpTest extends \Test\Setup
    {
        public function setUp() : void
        {
        }
        public function testProductionSSL()
        {
        }
        public function testSandboxSSL()
        {
        }
        public function testSandboxSSLWithExplicitVersionSet()
        {
        }
        public function testSandboxSSLFailsWithIncompatibleSSLVersion()
        {
        }
        public function testSslError()
        {
        }
        public function testAcceptGzipEncodingSetFalse()
        {
        }
        public function testAcceptGzipEncodingSetToTrue()
        {
        }
        public function testAuthorizationWithConfig()
        {
        }
        public function testPostMultiPartUploadsFileSuccessfully()
        {
        }
    }
    class UsBankAccountVerificationTest extends \Test\Setup
    {
        public function test_createWithSuccessfulResponse()
        {
        }
        public function test_findVerification()
        {
        }
        public function test_searchVerification()
        {
        }
        public function test_attemptConfirmMicroTransferAmounts()
        {
        }
        public function test_confirmMicroTransferAmountsSettled()
        {
        }
        public function test_confirmMicroTransferAmountsUnsettled()
        {
        }
        public function test_exceedRetryThreshold()
        {
        }
    }
    class TransactionAdvancedSearchTest extends \Test\Setup
    {
        public function testNoMatches()
        {
        }
        public function test_noRequestsWhenIterating()
        {
        }
        public function testSearchOnTextFields()
        {
        }
        public function testIs()
        {
        }
        public function testIsNot()
        {
        }
        public function testEndsWith()
        {
        }
        public function testStartsWith()
        {
        }
        public function testContains()
        {
        }
        public function test_multipleValueNode_createdUsing()
        {
        }
        public function test_multipleValueNode_paymentInstrumentType_is_creditCard()
        {
        }
        public function test_multipleValueNode_paymentInstrumentType_is_paypal()
        {
        }
        public function test_multipleValueNode_paymentInstrumentType_is_applepay()
        {
        }
        public function test_multipleValueNode_createdUsing_allowedValues()
        {
        }
        public function test_multipleValueNode_creditCardCustomerLocation()
        {
        }
        public function test_multipleValueNode_creditCardCustomerLocation_allowedValues()
        {
        }
        public function test_multipleValueNode_merchantAccountId()
        {
        }
        public function test_multipleValueNode_creditCardType()
        {
        }
        public function test_elo_creditCardType()
        {
        }
        public function test_multipleValueNode_creditCardType_allowedValues()
        {
        }
        public function test_multipleValueNode_status()
        {
        }
        public function testSearchForSettlementConfirmedTransaction()
        {
        }
        public function test_multipleValueNode_status_authorizationExpired()
        {
        }
        public function test_multipleValueNode_status_allowedValues()
        {
        }
        public function test_multipleValueNode_source()
        {
        }
        public function test_multipleValueNode_type()
        {
        }
        public function test_multipleValueNode_type_allowedValues()
        {
        }
        public function test_multipleValueNode_type_withRefund()
        {
        }
        public function test_rangeNode_amount()
        {
        }
        private function runDisbursementDateSearchTests($disbursementDateString, $comparison)
        {
        }
        public function test_rangeNode_disbursementDate_lessThanOrEqualTo()
        {
        }
        public function test_rangeNode_disbursementDate_GreaterThanOrEqualTo()
        {
        }
        public function test_rangeNode_disbursementDate_between()
        {
        }
        public function test_rangeNode_disbursementDate_is()
        {
        }
        private static $disputedTransaction = null;
        private function createTestDisputedTransaction()
        {
        }
        private function rundisputeDateSearchTests($comparison)
        {
        }
        public function test_rangeNode_disputeDate_lessThanOrEqualTo()
        {
        }
        public function test_rangeNode_disputeDate_GreaterThanOrEqualTo()
        {
        }
        public function test_rangeNode_disputeDate_between()
        {
        }
        public function test_rangeNode_disputeDate_is()
        {
        }
        public function test_rangeNode_createdAt_lessThanOrEqualTo()
        {
        }
        public function test_rangeNode_createdAt_GreaterThanOrEqualTo()
        {
        }
        public function test_rangeNode_createdAt_between()
        {
        }
        public function test_rangeNode_createdAt_is()
        {
        }
        public function test_rangeNode_createdAt_convertLocalToUTC()
        {
        }
        public function test_rangeNode_createdAt_handlesUTCDateTimes()
        {
        }
        public function test_rangeNode_authorizationExpiredAt()
        {
        }
        public function test_rangeNode_authorizedAt()
        {
        }
        public function test_rangeNode_failedAt()
        {
        }
        public function test_rangeNode_gatewayRejectedAt()
        {
        }
        public function test_rangeNode_processorDeclinedAt()
        {
        }
        public function test_rangeNode_settledAt()
        {
        }
        public function test_rangeNode_submittedForSettlementAt()
        {
        }
        public function test_rangeNode_voidedAt()
        {
        }
        public function test_rangeNode_canSearchOnMultipleStatuses()
        {
        }
        public function test_advancedSearchGivesIterableResult()
        {
        }
        public function test_handles_search_timeout()
        {
        }
        public function testHandlesPayPalAccounts()
        {
        }
        public function testHandlesLocalPayments()
        {
        }
        public function testSearchOnStoreids()
        {
        }
        public function testSearchOnStoreid()
        {
        }
    }
    class PaymentMethodNonceTest extends \Test\Setup
    {
        const INDIAN_PAYMENT_TOKEN = 'india_visa_credit';
        const EUROPEAN_PAYMENT_TOKEN = 'european_visa_credit';
        const INDIAN_MERCHANT_TOKEN = 'india_three_d_secure_merchant_account';
        const EUROPEAN_MERCHANT_TOKEN = 'european_three_d_secure_merchant_account';
        const AMOUNT_THRESHOLD_FOR_RBI = 2000;
        public function testCreate_fromPaymentMethodToken()
        {
        }
        public function testCreateNonce_fromPaymentMethodTokenWithInvalidParams()
        {
        }
        public function testCreateNonce_withAuthInsightRegulationEnvironmentUnavailable()
        {
        }
        public function testCreate_nonceWithAuthInsightRegulationEnvironmentUnregulated()
        {
        }
        public function testCreate_nonceWithAuthInsightRegulationEnvironmentPsd2()
        {
        }
        public function testCreate_nonceWithAuthInsightRegulationEnvironmentRbi()
        {
        }
        public function testCreate_nonceWithAuthInsightScaIndicatorUnavailableWithoutAmount()
        {
        }
        public function testCreate_nonceWithAuthInsightScaIndicatorScaRequired()
        {
        }
        public function testCreate_nonceWithAuthInsightScaIndicatorScaOptional()
        {
        }
        protected function _requestAuthenticationInsights($merchantToken, $paymentToken, $amount = null, $recurringCustomerConsent = null, $recurringMaxAmount = null)
        {
        }
        public function testCreate_fromNonExistentPaymentMethodToken()
        {
        }
        public function testFind_exposesPayPalDetails()
        {
        }
        public function testFind_exposesVenmoDetails()
        {
        }
        public function testFind_exposesThreeDSecureInfo()
        {
        }
        public function testFind_returnsBin()
        {
        }
        public function testFind_exposesBinData()
        {
        }
        public function testFind_returnsBinDataForCommercialNonce()
        {
        }
        public function testFind_returnsBinDataForDebitNonce()
        {
        }
        public function testFind_returnsBinDataForDurbinRegulatedNonce()
        {
        }
        public function testFind_returnsBinDataForHealthcareNonce()
        {
        }
        public function testFind_returnsBinDataForPayrollNonce()
        {
        }
        public function testFind_returnsBinDataForPrepaidNonce()
        {
        }
        public function testFind_returnsBinDataForCountryOfIssuanceNonce()
        {
        }
        public function testFind_returnsBinDataForIssuingBankNonce()
        {
        }
        public function testFind_exposesNullThreeDSecureInfoIfNoneExists()
        {
        }
        public function testFind_nonExistantNonce()
        {
        }
    }
    class SubscriptionHelper
    {
        public static function addOnDiscountPlan()
        {
        }
        public static function billingDayOfMonthPlan()
        {
        }
        public static function trialPlan()
        {
        }
        public static function triallessPlan()
        {
        }
        public static function createCreditCard()
        {
        }
        public static function createSubscription()
        {
        }
        public static function compareModificationsById($left, $right)
        {
        }
        public static function sortModificationsById(&$modifications)
        {
        }
    }
    class CreditCardTest extends \Test\Setup
    {
        public function testCreate()
        {
        }
        public function testGatewayCreate()
        {
        }
        public function testCreate_withDefault()
        {
        }
        public function testCreateWithVerificationAmount()
        {
        }
        public function testAddCardToExistingCustomerUsingNonce()
        {
        }
        public function testCreate_withDeviceData()
        {
        }
        public function testCreate_withExpirationMonthAndYear()
        {
        }
        public function testCreate_withSpecifyingToken()
        {
        }
        public function testCreate_withDuplicateCardCheck()
        {
        }
        public function testCreate_withCardVerification()
        {
        }
        public function testCreate_withCardVerificationReturnsVerificationWithRiskData()
        {
        }
        public function testCreate_includesRiskDataWhenSkipAdvancedFraudCheckingIsFalse()
        {
        }
        public function testCreate_doesNotIncludeRiskDataWhenSkipAdvancedFraudCheckingIsTrue()
        {
        }
        public function testCreate_withCardVerificationAndOverriddenAmount()
        {
        }
        public function testCreate_withCardVerificationAndSpecificMerchantAccount()
        {
        }
        public function testCreate_withBillingAddress()
        {
        }
        public function testCreate_withExistingBillingAddress()
        {
        }
        public function testCreate_withValidationErrors()
        {
        }
        public function testCreate_withVenmoSdkPaymentMethodCode()
        {
        }
        public function testCreate_with_invalid_venmoSdkPaymentMethodCode()
        {
        }
        public function testCreate_with_venmoSdkSession()
        {
        }
        public function testCreate_with_invalidVenmoSdkSession()
        {
        }
        public function testCreate_withAccountTypeCredit()
        {
        }
        public function testCreate_withAccountTypeDebit()
        {
        }
        public function testCreate_ErrorsWithVerificationAccountTypeIsInvalid()
        {
        }
        public function testCreate_ErrorsWithVerificationAccountTypeNotSupported()
        {
        }
        public function testCreateNoValidate_throwsIfValidationsFail()
        {
        }
        public function testCreateNoValidate_returnsCreditCardIfValid()
        {
        }
        public function testSale_createsASaleUsingGivenToken()
        {
        }
        public function testSaleNoValidate_createsASaleUsingGivenToken()
        {
        }
        public function testSaleNoValidate_createsASaleUsingGivenTokenAndCvv()
        {
        }
        public function testSaleNoValidate_throwsIfInvalid()
        {
        }
        public function testCredit_createsACreditUsingGivenToken()
        {
        }
        public function testCreditNoValidate_createsACreditUsingGivenToken()
        {
        }
        public function testCreditNoValidate_throwsIfInvalid()
        {
        }
        public function testExpired()
        {
        }
        public function testExpiringBetween()
        {
        }
        public function testExpiringBetween_parsesCreditCardDetailsUnderTransactionsCorrectly()
        {
        }
        public function testFind()
        {
        }
        public function testFindReturnsAssociatedSubscriptions()
        {
        }
        public function testFind_throwsIfCannotBeFound()
        {
        }
        public function testFind_throwsUsefulErrorMessagesWhenEmpty()
        {
        }
        public function testFind_throwsUsefulErrorMessagesWhenInvalid()
        {
        }
        public function testFromNonce()
        {
        }
        public function testFromNonce_ReturnsErrorWhenNoncePointsToSharedCard()
        {
        }
        public function testCreate_fromThreeDSecureNonceWithInvalidPassThruParams()
        {
        }
        public function testCreate_fromThreeDSecureNonceWithPassThruParams()
        {
        }
        public function testCreate_fromThreeDSecureNonce()
        {
        }
        public function testFromNonce_ReturnsErrorWhenNonceIsConsumed()
        {
        }
        public function testUpdate()
        {
        }
        public function testUpdate_withCardVerification()
        {
        }
        public function testUpdate_fromThreeDSecureNonceWithInvalidPassThruParams()
        {
        }
        public function testUpdate_fromThreeDSecureNonceWithPassThruParams()
        {
        }
        public function testUpdate_withCardVerificationAndSpecificMerchantAccount()
        {
        }
        public function testUpdate_createsNewBillingAddressByDefault()
        {
        }
        public function testUpdate_updatesExistingBillingAddressIfUpdateExistingOptionIsTrue()
        {
        }
        public function testUpdate_includesRiskDataWhenSkipAdvancedFraudCheckingIsFalse()
        {
        }
        public function testUpdate_doesNotIncludeRiskDataWhenSkipAdvancedFraudCheckingIsTrue()
        {
        }
        public function testUpdate_canChangeToken()
        {
        }
        public function testUpdateNoValidate()
        {
        }
        public function testUpdateNoValidate_throwsIfInvalid()
        {
        }
        public function testUpdate_withDefault()
        {
        }
        public function testDelete_deletesThePaymentMethod()
        {
        }
        public function testGatewayRejectionOnCVV()
        {
        }
        public function testGatewayRejectionIsNullOnProcessorDecline()
        {
        }
        public function testPrepaidCard()
        {
        }
        public function testCommercialCard()
        {
        }
        public function testDebitCard()
        {
        }
        public function testPayrollCard()
        {
        }
        public function testHealthCareCard()
        {
        }
        public function testDurbinRegulatedCard()
        {
        }
        public function testCountryOfIssuanceCard()
        {
        }
        public function testIssuingBankCard()
        {
        }
        public function testNegativeCardTypeIndicators()
        {
        }
        public function testUnknownCardTypeIndicators()
        {
        }
        public function testFindNetworkTokenizedCreditCard()
        {
        }
        public function testFindNonNetworkTokenizedCreditCard()
        {
        }
    }
    class OAuthTest extends \Test\Setup
    {
        public function testCreateTokenFromCode()
        {
        }
        public function testAssertsHasCredentials()
        {
        }
        public function testCreateTokenFromCodeWithMixedCredentials()
        {
        }
        public function testCreateTokenFromCode_JsonAPI()
        {
        }
        public function testRevokeAccessToken()
        {
        }
        public function testCreateTokenFromCode_ValidationErrorTest()
        {
        }
        public function testCreateTokenFromCode_OldError()
        {
        }
        public function testCreateTokenFromRefreshToken()
        {
        }
        public function testBuildConnectUrl()
        {
        }
        public function testBuildConnectUrlWithoutOptionalParams()
        {
        }
        public function testBuildConnectUrlWithPaymentMethods()
        {
        }
    }
    class PaymentMethodTest extends \Test\Setup
    {
        public function testCreate_fromVaultedCreditCardNonce()
        {
        }
        public function testCreate_fromThreeDSecureNonceWithInvalidPassThruParams()
        {
        }
        public function testCreate_fromThreeDSecureNonceWithPassThruParams()
        {
        }
        public function testCreate_fromThreeDSecureNonce()
        {
        }
        public function testGatewayCreate_fromVaultedCreditCardNonce()
        {
        }
        public function testCreate_fromFakeApplePayNonce()
        {
        }
        public function testCreate_fromFakeGooglePayProxyCardNonce()
        {
        }
        public function testCreate_fromFakeGooglePayNetworkTokenNonce()
        {
        }
        public function testCreate_fromFakeVenmoAccountNonce()
        {
        }
        public function testCreate_fromUnvalidatedCreditCardNonce()
        {
        }
        public function testCreate_fromUnvalidatedFuturePaypalAccountNonce()
        {
        }
        public function testCreate_fromOrderPaymentPaypalAccountNonce()
        {
        }
        public function testCreate_fromOrderPaymentPaypalAccountNonceWithPayPalOptionsSnakeCase()
        {
        }
        public function testCreate_fromOrderPaymentPaypalAccountNonceWithPayPalOptionsCamelCase()
        {
        }
        public function testCreate_fromPayPalRefreshToken()
        {
        }
        public function testCreate_fromAbstractPaymentMethodNonce()
        {
        }
        public function testCreate_doesNotWorkForUnvalidatedOnetimePaypalAccountNonce()
        {
        }
        public function testCreate_handlesValidationErrorsForPayPalAccounts()
        {
        }
        public function testCreate_allowsPassingDefaultOptionWithNonce()
        {
        }
        public function testCreate_overridesNonceToken()
        {
        }
        public function testCreateWithVerificationAmount()
        {
        }
        public function testCreate_respectsVerifyCardAndVerificationMerchantAccountIdWhenIncludedOutsideOfTheNonce()
        {
        }
        public function testCreate_respectsFailOnDuplicatePaymentMethodWhenIncludedOutsideTheNonce()
        {
        }
        public function testCreate_includesRiskDataWhenSkipAdvancedFraudCheckingIsFalse()
        {
        }
        public function testCreate_doesNotIncludeRiskDataWhenSkipAdvancedFraudCheckingIsTrue()
        {
        }
        public function testCreate_allowsPassingABillingAddressOutsideOfTheNonce()
        {
        }
        public function testCreate_overridesTheBillingAddressInTheNonce()
        {
        }
        public function testCreate_doesNotOverrideTheBillingAddressForAVaultedCreditCard()
        {
        }
        public function testCreate_allowsPassingABillingAddressIdOutsideOfTheNonce()
        {
        }
        public function testCreate_doesNotReturnAnErrorIfCreditCardOptionsArePresentForAPaypalNonce()
        {
        }
        public function testCreate_ignoresPassedBillingAddressParamsForPaypalAccount()
        {
        }
        public function testCreate_ignoresPassedBillingAddressIdForPaypalAccount()
        {
        }
        public function testCreate_acceptsNumberAndOtherCreditCardParameters()
        {
        }
        public function testCreate_acceptAccountTypeCredit()
        {
        }
        public function testCreate_acceptAccountTypeDebit()
        {
        }
        public function testUpdate_acceptAccountTypeCredit()
        {
        }
        public function testUpdate_acceptAccountTypeDebit()
        {
        }
        public function testUpdate_fromThreeDSecureNonceWithInvalidPassThruParams()
        {
        }
        public function testUpdate_fromThreeDSecureNonceWithPassThruParams()
        {
        }
        public function testUpdate_includesRiskDataWhenSkipAdvancedFraudCheckingIsFalse()
        {
        }
        public function testUpdate_doesNotIncludeRiskDataWhenSkipAdvancedFraudCheckingIsTrue()
        {
        }
        public function testCreate_ErrorsWithVerificationAccountTypeIsInvalid()
        {
        }
        public function testCreate_ErrorsWithVerificationAccountTypeNotSupported()
        {
        }
        public function testFind_returnsCreditCards()
        {
        }
        public function testFind_returnsCreditCardsWithSubscriptions()
        {
        }
        public function testFind_returnsPayPalAccounts()
        {
        }
        public function testFind_returnsApplePayCards()
        {
        }
        public function testFind_returnsGooglePayCards()
        {
        }
        public function testFind_returnsAbstractPaymentMethods()
        {
        }
        public function testFind_throwsIfCannotBeFound()
        {
        }
        public function testUpdate_updatesTheCreditCard()
        {
        }
        public function testUpdate_updatesTheCreditCardWith3DSPassThru()
        {
        }
        public function testUpdate_createsANewBillingAddressByDefault()
        {
        }
        public function testUpdate_updatesTheBillingAddressIfOptionIsSpecified()
        {
        }
        public function testUpdate_updatesTheCountryViaCodes()
        {
        }
        public function testUpdate_canPassExpirationMonthAndExpirationYear()
        {
        }
        public function testUpdate_verifiesTheUpdateIfOptionsVerifyCardIsTrue()
        {
        }
        public function testUpdate_canPassCustomVerificationAmount()
        {
        }
        public function testUpdate_canUpdateTheBillingAddress()
        {
        }
        public function testUpdate_returnsAnErrorIfInvalid()
        {
        }
        public function testUpdate_canUpdateTheDefault()
        {
        }
        public function testUpdate_updatesAPaypalAccountsToken()
        {
        }
        public function testUpdate_canMakeAPaypalAccountTheDefaultPaymentMethod()
        {
        }
        public function testUpdate_returnsAnErrorIfATokenForAccountIsUsedToAttemptAnUpdate()
        {
        }
        public function testDelete_worksWithCreditCards()
        {
        }
        public function testDelete_worksWithPayPalAccounts()
        {
        }
        public function testGrant_returnsASingleUseNonce()
        {
        }
        public function testGrant_returnsANonceThatIsNotVaultable()
        {
        }
        public function testGrant_returnsANonceThatIsVaultableSnakeCase()
        {
        }
        public function testGrant_returnsANonceThatIsVaultableCamelCase()
        {
        }
        public function testGrant_raisesAnErrorIfTokenIsNotFound()
        {
        }
        public function testRevoke_rendersANonceUnusable()
        {
        }
        public function testRevoke_raisesAnErrorIfTokenIsNotFound()
        {
        }
    }
    class SettlementBatchSummaryTest extends \Test\Setup
    {
        public function isMasterCard($record)
        {
        }
        public function testGenerate_returnsAnEmptyCollectionWhenThereIsNoData()
        {
        }
        public function testGatewayGenerate_returnsAnEmptyCollectionWhenThereIsNoData()
        {
        }
        public function testGenerate_returnsAnErrorIfTheDateCanNotBeParsed()
        {
        }
        public function testGenerate_returnsTransactionsSettledOnAGivenDay()
        {
        }
        public function testGenerate_canBeGroupedByACustomField()
        {
        }
    }
    class MerchantTest extends \Test\Setup
    {
        public function testCreateMerchant()
        {
        }
        public function testAssertsHasCredentials()
        {
        }
        public function testBadPaymentMethods()
        {
        }
        public function testCreateUSMerchantThatAcceptsMultipleCurrencies()
        {
        }
        public function testCreateEUMerchantThatAcceptsMultipleCurrencies()
        {
        }
        public function testCreatePaypalOnlyMerchantThatAcceptsMultipleCurrencies()
        {
        }
        private function getMerchantAccountForCurrency($merchantAccounts, $currency)
        {
        }
        public function testCreatePaypalOnlyMerchantWithNoCurrenciesProvided()
        {
        }
        public function testCreatePaypalOnlyMerchantWithUnsupportedCountryCodeProvided()
        {
        }
        public function testInvalidCurrencyForMultiCurrency()
        {
        }
    }
    class VisaCheckoutCardTest extends \Test\Setup
    {
        public function testCreateWithVisaCheckoutCardNonce()
        {
        }
        public function testCreateWithVisaCheckoutCardNonceWithVerification()
        {
        }
        public function testTransactionSearchWithVisaCheckout()
        {
        }
        public function testCreateCustomerWithVisaCheckoutCard()
        {
        }
        public function testCreateTransactionWithVisaCheckoutNonceAndVault()
        {
        }
    }
    class DisputeTest extends \Test\Setup
    {
        private $gateway;
        public function setUp() : void
        {
        }
        public function createSampleDocument()
        {
        }
        public function createSampleDispute()
        {
        }
        public function testAccept_changesDisputeStatusToAccepted()
        {
        }
        public function testAccept_errors_whenDisputeNotOpen()
        {
        }
        public function testAccept_raisesError_whenDisputeNotFound()
        {
        }
        public function testAddFileEvidence_addsEvidence()
        {
        }
        public function testAddFileEvidence_addsEvidence_withCategory()
        {
        }
        public function testAddFileEvidence_raisesError_whenDisputeNotFound()
        {
        }
        public function testAddFileEvidence_raisesError_whenDisputeNotOpen()
        {
        }
        public function testAddTextEvidence_addsTextEvidence()
        {
        }
        public function testAddTaggedTextEvidence_addsTextEvidence()
        {
        }
        public function testAddTextEvidence_raisesError_whenDisputeNotFound()
        {
        }
        public function testAddTextEvidence_raisesError_whenDisputeNotOpen()
        {
        }
        public function testAddTextEvidence_showsNewRecord_inFind()
        {
        }
        public function testFinalize_changesDisputeStatus_toDisputed()
        {
        }
        public function testFinalize_errors_whenDisputeNotOpen()
        {
        }
        public function testFinalize_raisesError_whenDisputeNotFound()
        {
        }
        public function testFind_returnsDispute_withGivenId()
        {
        }
        public function testFind_raisesError_whenDisputeNotFound()
        {
        }
        public function testRemoveEvidence_removesEvidenceFromTheDisupute()
        {
        }
        public function testRemoveEvidence_raisesError_whenDisputeOrEvidenceNotFound()
        {
        }
        public function testRemoveEvidence_errors_whenDisputeNotOpen()
        {
        }
        public function testCategorizedEvidence_fileForTextOnlyCategory()
        {
        }
        public function testCategorizedEvidence_withFile_invalidCategoryProvided()
        {
        }
        public function testCategorizedEvidence_withText_invalidCategoryProvided()
        {
        }
        public function testCategorizedEvidence_textForFileOnlyCategory()
        {
        }
        public function testCategorizedEvidence_invalidDateTimeFormatFails()
        {
        }
        public function testCategorizedEvidence_validDateTimeFormatSuccess()
        {
        }
        public function testCategorizedEvidence_finalizeFail_DigitalGoodsPartialEvidence()
        {
        }
        public function testCategorizedEvidence_finalizeFail_PartialNonDisputeTransInfo()
        {
        }
    }
}
namespace Test\Integration\Result {
    class ErrorTest extends \Test\Setup
    {
        public function testValueForHtmlField()
        {
        }
    }
}
namespace Test\Integration {
    class PlanTest extends \Test\Setup
    {
        public function testAll_withNoPlans_returnsEmptyArray()
        {
        }
        public function testAll_returnsAllPlans()
        {
        }
        public function testGatewayAll_returnsAllPlans()
        {
        }
        public function testCreate_doesNotAcceptBadAttributes()
        {
        }
        public function testCreate_whenSuccessful()
        {
        }
        public function testFind()
        {
        }
        public function testFind_throwsIfNotFound()
        {
        }
        public function testUpdate_doesNotAcceptBadAttributes()
        {
        }
        public function testUpdate_whenSuccessful()
        {
        }
    }
    class ApplePayTest extends \Test\Setup
    {
        private static $gateway;
        public static function setUpBeforeClass() : void
        {
        }
        public static function tearDownAfterClass() : void
        {
        }
        private static function _buildMerchantGateway()
        {
        }
        public function testRegisterDomainWithExpectedStubbedResult()
        {
        }
        public function testValidationErrorWhenRegisteringNoDomain()
        {
        }
        public function testUnregisterDomainWithExpectedStubbedResult()
        {
        }
        public function testUnregisterDomainWithSpecialCharactersWithExpectedStubbedResult()
        {
        }
        public function testUnregisterDomainWithSchemeWithExpectedStubbedResult()
        {
        }
        public function testRegisteredDomainsWithExpectedStubbedResult()
        {
        }
    }
    class SubscriptionSearchTest extends \Test\Setup
    {
        public function testSearch_planIdIs()
        {
        }
        public function test_noRequestsWhenIterating()
        {
        }
        public function testSearch_inTrialPeriod()
        {
        }
        public function testSearch_statusIsPastDue()
        {
        }
        public function testSearch_statusIsExpired()
        {
        }
        public function testSearch_billingCyclesRemaing()
        {
        }
        public function testSearch_subscriptionId()
        {
        }
        public function testSearch_merchantAccountId()
        {
        }
        public function testSearch_bogusMerchantAccountId()
        {
        }
        public function testSearch_daysPastDue()
        {
        }
        public function testSearch_price()
        {
        }
        public function testSearch_nextBillingDate()
        {
        }
        public function testSearch_createdAt_lessThanOrEqualTo()
        {
        }
        public function testSearch_createdAt_greaterThanOrEqualTo()
        {
        }
        public function testSearch_createdAt_between()
        {
        }
        public function testSearch_createdAt_is()
        {
        }
        public function testSearch_createdAt_convertLocalToUTC()
        {
        }
        public function testSearch_transactionId()
        {
        }
    }
    class CustomerAdvancedSearchTest extends \Test\Setup
    {
        public function test_noMatches()
        {
        }
        public function test_noRequestsWhenIterating()
        {
        }
        public function test_findDuplicateCardsGivenPaymentMethodToken()
        {
        }
        public function test_searchOnTextFields()
        {
        }
        public function test_createdAt()
        {
        }
        public function test_paypalAccountEmail()
        {
        }
        public function test_throwsIfNoOperatorNodeGiven()
        {
        }
    }
    class MerchantAccountTest extends \Test\Setup
    {
        private static $validParams = ['individual' => ['firstName' => "Joe", 'lastName' => "Bloggs", 'email' => "joe@bloggs.com", 'phone' => "555-555-5555", 'address' => ['streetAddress' => "123 Credibility St.", 'postalCode' => "60606", 'locality' => "Chicago", 'region' => "IL"], 'dateOfBirth' => "10/9/1980", 'ssn' => "123-00-1234"], 'business' => ['dbaName' => "Robot City", 'legalName' => "Robot City INC", 'taxId' => "123456789"], 'funding' => ['routingNumber' => "122100024", 'accountNumber' => "43759348798", 'destination' => \Braintree\MerchantAccount::FUNDING_DESTINATION_BANK, 'descriptor' => 'Joes Bloggs MI'], 'tosAccepted' => true, 'masterMerchantAccountId' => "sandbox_master_merchant_account"];
        public function testCreate()
        {
        }
        public function testGatewayCreate()
        {
        }
        public function testCreateWithId()
        {
        }
        public function testFailedCreate()
        {
        }
        public function testCreateWithFundingDestination()
        {
        }
        public function testFind()
        {
        }
        public function testRetrievesMasterMerchantAccountCurrencyIsoCode()
        {
        }
        public function testFind_throwsIfNotFound()
        {
        }
        public function testUpdate()
        {
        }
        public function testUpdateDoesNotRequireAllFields()
        {
        }
        public function testUpdateWithBlankFields()
        {
        }
        public function testUpdateWithInvalidFields()
        {
        }
        public function testUpdateWithInvalidBusinessFields()
        {
        }
        public function testUpdateWithInvalidFundingFields()
        {
        }
        public function testCreateForCurrency()
        {
        }
        public function testCreateForCurrencyWithDuplicateCurrency()
        {
        }
        public function testCreateForCurrencyWithInvalidCurrency()
        {
        }
        public function testCreateForCurrencyWithoutCurrency()
        {
        }
        public function testCreateForCurrencyWithDuplicateId()
        {
        }
        public function testAllReturnsAllMerchantAccounts()
        {
        }
        public function testAllReturnsMerchantAccountWithCorrectAttributes()
        {
        }
    }
    class UsBankAccountTransactionTest extends \Test\Setup
    {
        public function testSaleWithUsBankAccountNonce()
        {
        }
        public function testSaleWithUsBankAccountNonceAndVaultedToken()
        {
        }
        public function testSaleWithPlaidUsBankAccountNonce()
        {
        }
        public function testSaleWithInvalidUsBankAccountNonce()
        {
        }
        public function testCompliantMerchantUnverifiedToken()
        {
        }
        public function testCompliantMerchantUnverifiedNonce()
        {
        }
        public function testCompliantMerchantPlaidToken()
        {
        }
        public function testCompliantMerchantPlaidNonce()
        {
        }
    }
    class CreditCardVerificationTest extends \Test\Setup
    {
        public function test_createWithSuccessfulResponse()
        {
        }
        public function test_createWithUnsuccessfulResponse()
        {
        }
        public function test_createWithInvalidRequest()
        {
        }
        public function test_createWithAccountTypeCredit()
        {
        }
        public function test_createWithAccountTypeDebit()
        {
        }
        public function test_createErrorsWithAccountTypeIsInvalid()
        {
        }
        public function test_createErrorsWithAccountTypeNotSupported()
        {
        }
        public function test_successfulCreateIncludesNetworkResponse()
        {
        }
        public function testVisaVerificationReceivesNetworkTransactionId()
        {
        }
        public function testMasterCardVerificationReceivesNetworkTransactionId()
        {
        }
        public function testAmexVerificationReceivesNetworkTransactionId()
        {
        }
    }
    class TextNodeTest extends \Test\Setup
    {
        public function testIs()
        {
        }
        public function testIsNot()
        {
        }
        public function testStartsWith()
        {
        }
        public function testEndsWith()
        {
        }
        public function testContains()
        {
        }
    }
}
namespace Braintree {
    /**
     * Braintree PHP Library.
     *
     * Braintree base class and initialization
     * Provides methods to child classes. This class cannot be instantiated.
     */
    abstract class Base implements \JsonSerializable
    {
        protected $_attributes = [];
        /**
         * don't permit an explicit call of the constructor!
         * (like $t = new Transaction())
         */
        protected function __construct()
        {
        }
        /**
         * Disable cloning of objects
         */
        protected function __clone()
        {
        }
        /**
         * Accessor for instance properties stored in the private $_attributes property
         *
         * @param string $name of the key whose value is to be returned
         *
         * @return mixed
         */
        public function __get($name)
        {
        }
        /**
         * Checks for the existence of a property stored in the private $_attributes property
         *
         * @param string $name of the key
         *
         * @return boolean
         */
        public function __isset($name)
        {
        }
        /**
         * Mutator for instance properties stored in the private $_attributes property
         *
         * @param string $key   to be set
         * @param mixed  $value to be set
         *
         * @return mixed
         */
        public function _set($key, $value)
        {
        }
        /**
         * Implementation of JsonSerializable
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
        /**
         * Implementation of to an Array
         *
         * @return array
         */
        public function toArray()
        {
        }
    }
    /**
     * Connected Merchant PayPal Status Changed Payload
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/webhooks/braintree-auth/php#notification-type-connected_merchant_paypal_status_changed developer docs} for information on attributes
     */
    class ConnectedMerchantPayPalStatusChanged extends \Braintree\Base
    {
        protected $_attributes = [];
        /**
         * Creates an instance of a ConnectedMerchantPayPalStatusChanged from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return ConnectedMerchantPayPalStatusChanged
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
    }
    /**
     * Braintree LocalPaymentFunded module
     */
    class LocalPaymentFunded extends \Braintree\Base
    {
        /**
         *  factory method: returns an instance of LocalPaymentFunded
         *  to the requesting method, with populated properties
         *
         * @param array $attributes used to create the object
         *
         * @return LocalPaymentFunded
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($localPaymentFundedAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree Class Instance template
     *
     * @abstract
     */
    abstract class Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
        /**
         * returns private/nonexistent instance properties
         *
         * @param string $name property name
         *
         * @return mixed contents of instance properties
         */
        public function __get($name)
        {
        }
        /**
         * used by isset() and empty()
         *
         * @param string $name property name
         *
         * @return boolean
         */
        public function __isset($name)
        {
        }
        /**
         * create a printable representation of the object as:
         * ClassName[property=value, property=value]
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * initializes instance properties from the keys/values of an array
         *
         * @param <type> $aAttribs array of properties to set - single level
         *
         * @return void
         */
        private function _initializeFromArray($attributes)
        {
        }
        /**
         * Implementation of JsonSerializable
         *
         * @return array
         */
        public function jsonSerialize()
        {
        }
        /**
         * Implementation of to an Array
         *
         * @return array
         */
        public function toArray()
        {
        }
    }
    /**
     * Line item associated with a transaction
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction-line-item developer docs} for information on attributes
     */
    class TransactionLineItem extends \Braintree\Instance
    {
        // TransactionLineItem Kinds
        const CREDIT = 'credit';
        const DEBIT = 'debit';
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId of the Transaction to search for line items
         *
         * @see TransactionLineItemGateway::findAll()
         *
         * @return TransactionLineItem|Exception
         */
        public static function findAll($transactionId)
        {
        }
    }
    /**
     * Braintree CreditCardVerificationGateway module
     * Creates and manages CreditCardVerifications
     */
    class CreditCardVerificationGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Creates a credit card verification  using the given +attributes+.
         *
         * @param array $attributes containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function create($attributes)
        {
        }
        private function _verifyGatewayResponse($response)
        {
        }
        /**
         * Retrieve a credit card verification
         *
         * @param array $query search parameters
         * @param array $ids   of verifications to search
         *
         * @return Array of CreditCardVerification objects
         */
        public function fetch($query, $ids)
        {
        }
        /**
         * Returns a ResourceCollection of customers matching the search query.
         *
         * @param mixed $query search query
         *
         * @return ResourceCollection
         */
        public function search($query)
        {
        }
    }
    /**
     * Braintree RangeNode
     * RangeNode is an object for numerical elements returned from the Braintree API
     */
    class RangeNode
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($name)
        {
        }
        /**
         * Sets the "min" value for search terms.
         *
         * @param string $value to be set for search terms
         *
         * @return object
         */
        public function greaterThanOrEqualTo($value)
        {
        }
        /**
         * Sets the "mixn" value for search terms.
         *
         * @param string $value to be set for search terms
         *
         * @return object
         */
        public function lessThanOrEqualTo($value)
        {
        }
        /**
         * Sets the "is" value for search terms.
         *
         * @param string $value to be set for search terms
         *
         * @return object
         */
        public function is($value)
        {
        }
        /**
         * Sets the "min" and "max" value for search terms.
         *
         * @param string $min minimum value to be set for search terms
         * @param string $max maximum value to be set for search terms
         *
         * @return object
         */
        public function between($min, $max)
        {
        }
        /**
         * To be used as a parameter
         *
         * @return object search terms
         */
        public function toParam()
        {
        }
    }
    /**
     * Braintree Xml parser and generator
     * superclass for Braintree XML parsing and generation
     */
    class Xml
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        protected function __construct()
        {
        }
        /**
         * Create an array from XML element(s)
         *
         * @param string $xml elements(s)
         *
         * @return array
         */
        public static function buildArrayFromXml($xml)
        {
        }
        /**
         * Create an XML string from an Array object
         *
         * @param array $array object
         *
         * @return string
         */
        public static function buildXmlFromArray($array)
        {
        }
    }
    /**
     * Braintree SubscriptionGateway module
     *
     * // phpcs:ignore Generic.Files.LineLength
     * For more detailed information on Subscriptions, see {@link https://developer.paypal.com/braintree/docs/reference/response/subscription/php our developer docs}
     */
    class SubscriptionGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /*
         * Request a new subscription be created
         *
         * @param array $attributes containing request params
         *
         * @return Result\Sucessful|Result\Error
         */
        public function create($attributes)
        {
        }
        /*
         * Look up a single subscription
         *
         * @param string $id of the subscription to find
         *
         * @return Subscription|Exception\NotFound
         */
        public function find($id)
        {
        }
        /*
         * Search for subscriptions using a variety of criteria
         *
         * @param mixed $query of search fields
         *
         * @return ResourceCollection of Subscription objects
         */
        public function search($query)
        {
        }
        /*
         * Fetch subscriptions using a variety of criteria
         *
         * @param mixed $query of search fields
         * @param array $ids to be fetched
         *
         * @return ResourceCollection of Subscription objects
         */
        public function fetch($query, $ids)
        {
        }
        /*
         * Updates a specific subscription with given details
         *
         * @param string $subscriptionId the ID of the subscription to be updated
         * @param mixed $attributes
         *
         * @return Subscription|Exception\NotFound
         */
        public function update($subscriptionId, $attributes)
        {
        }
        /*
         * Manually retry charging a past due subscription
         *
         * @param string $subscriptionId the ID of the subscription with a charge being retried
         * @param string $amount optional
         * @param bool $submitForSettlement defaults to false unless specified true
         *
         * @return Transaction
         */
        public function retryCharge($subscriptionId, $amount = null, $submitForSettlement = false)
        {
        }
        /*
         * Stops billing a payment method for a subscription. Cannot be reactivated
         *
         * @param string $subscriptionId to be canceled
         *
         * @return Subscription|Exception\NotFound
         */
        public function cancel($subscriptionId)
        {
        }
        private static function _createSignature()
        {
        }
        private static function _updateSignature()
        {
        }
        private static function _addOnDiscountSignature()
        {
        }
        private function _validateId($id = null)
        {
        }
        private function _verifyGatewayResponse($response)
        {
        }
    }
}
namespace Braintree\Subscription {
    /**
     * Status details from a subscription
     * Creates an instance of StatusDetails, as part of a subscription response
     *
     * For more detailed information on Subscriptions, see {@link https://developer.paypal.com/braintree/docs/reference/response/subscription#subscription-history our developer docs}
     */
    class StatusDetails extends \Braintree\Instance
    {
    }
}
namespace Braintree {
    /**
     * Braintree ClientTokenGateway module
     *
     * Manages Braintree ClientTokens
     * For more detailed information on ClientTokens, see {@link https://developer.paypal.com/braintree/docsreference/response/client-token/php our developer docs}. <br />
     */
    class ClientTokenGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Generate a client token for client-side authorization
         *
         * @param Optional $params containing request parameters
         *
         * @return string client token
         */
        public function generate($params = [])
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doGenerate($subPath, $params)
        {
        }
        /*
         * Checks if customer id is provided prior to verifying keys provided in params
         *
         * @param array $params to be verified
         *
         * @return array
         */
        public function conditionallyVerifyKeys($params)
        {
        }
        /*
         * returns an array of keys including customer id
         *
         * @return array
         *
         */
        public function generateWithCustomerIdSignature()
        {
        }
        /*
         * returns an array of keys without customer id
         *
         * @return array
         */
        public function generateWithoutCustomerIdSignature()
        {
        }
        /**
         * generic method for validating incoming gateway responses
         *
         * If the request is successful, returns a client token string.
         * Otherwise, throws an InvalidArgumentException with the error
         * response from the Gateway or an HTTP status code exception.
         *
         * @param array $response gateway response values
         *
         * @throws InvalidArgumentException | HTTP status code exception
         *
         * @return string client token
         */
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * WebhookTestingGateway module
     * Creates and manages test webhooks
     */
    class WebhookTestingGateway
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Build a sample Webhook
         *
         * @param string $kind             the kind of Webhook you want to generate
         * @param string $id               unique identifier
         * @param string $sourceMerchantId optional
         *
         * @return Webhook
         */
        public function sampleNotification($kind, $id, $sourceMerchantId = null)
        {
        }
        private static function _sampleXml($kind, $id, $sourceMerchantId)
        {
        }
        private static function _merchantAccountApprovedSampleXml($id)
        {
        }
        private static function _merchantAccountDeclinedSampleXml($id)
        {
        }
        private static function _transactionDisbursedSampleXml($id)
        {
        }
        private static function _transactionReviewedSampleXml($id)
        {
        }
        private static function _transactionSettledSampleXml($id)
        {
        }
        private static function _transactionSettlementDeclinedSampleXml($id)
        {
        }
        private static function _disbursementExceptionSampleXml($id)
        {
        }
        private static function _disbursementSampleXml($id)
        {
        }
        private static function _disputeOpenedSampleXml($id)
        {
        }
        private static function _disputeLostSampleXml($id)
        {
        }
        private static function _disputeWonSampleXml($id)
        {
        }
        private static function _disputeAcceptedSampleXml($id)
        {
        }
        private static function _disputeDisputedSampleXml($id)
        {
        }
        private static function _disputeExpiredSampleXml($id)
        {
        }
        private static function _subscriptionSampleXml($id)
        {
        }
        private static function _subscriptionChargedSuccessfullySampleXml($id)
        {
        }
        private static function _subscriptionChargedUnsuccessfullySampleXml($id)
        {
        }
        private static function _subscriptionExpiredSampleXml($id)
        {
        }
        private static function _subscriptionCanceledSampleXml($id)
        {
        }
        private static function _subscriptionWentPastDueSampleXml($id)
        {
        }
        private static function _checkSampleXml()
        {
        }
        private static function _partnerMerchantConnectedSampleXml($id)
        {
        }
        private static function _partnerMerchantDisconnectedSampleXml($id)
        {
        }
        private static function _partnerMerchantDeclinedSampleXml($id)
        {
        }
        private static function _oauthAccessRevocationSampleXml($id)
        {
        }
        private static function _accountUpdaterDailyReportSampleXml($id)
        {
        }
        private static function _connectedMerchantStatusTransitionedSampleXml($id)
        {
        }
        private static function _connectedMerchantPayPalStatusChangedSampleXml($id)
        {
        }
        private static function _grantedPaymentInstrumentUpdateSampleXml()
        {
        }
        private static function _paymentMethodRevokedByCustomerSampleXml($id)
        {
        }
        private static function _localPaymentCompletedSampleXml()
        {
        }
        private static function _localPaymentExpiredSampleXml()
        {
        }
        private static function _localPaymentFundedSampleXml()
        {
        }
        private static function _localPaymentReversedSampleXml()
        {
        }
        private static function _paymentMethodCustomerDataUpdatedSampleXml($id)
        {
        }
        private static function _venmoAccountXml($id)
        {
        }
        private static function _timestamp()
        {
        }
    }
    /**
     * Braintree PaginatedCollection
     * PaginatedCollection is a container object for paginated data
     *
     * Retrieves and pages through large collections of results
     *
     * example:
     * <code>
     * $result = MerchantAccount::all();
     *
     * foreach($result as $merchantAccount) {
     *   print_r($merchantAccount->status);
     * }
     * </code>
     */
    class PaginatedCollection implements \Iterator
    {
        private $_pager;
        private $_pageSize;
        private $_currentPage;
        private $_index;
        private $_totalItems;
        private $_items;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($pager)
        {
        }
        /**
         * Returns the current item when iterating with foreach
         *
         * @return object of the current item
         */
        #[\ReturnTypeWillChange]
        public function current()
        {
        }
        /**
         * Returns null
         *
         * @return null
         */
        #[\ReturnTypeWillChange]
        public function key()
        {
        }
        /**
         * Advances to the next item in the collection when iterating with foreach
         *
         * @return object of the next item in the collection
         */
        #[\ReturnTypeWillChange]
        public function next()
        {
        }
        /**
         * Rewinds the collection to the first item when iterating with foreach
         *
         * @return mixed collection with index set to 0
         */
        #[\ReturnTypeWillChange]
        public function rewind()
        {
        }
        /**
         * Returns whether the current item is valid when iterating with foreach
         *
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function valid()
        {
        }
        private function _getNextPage()
        {
        }
    }
    /**
     * super class for all Braintree exceptions
     */
    class Exception extends \Exception
    {
    }
    /**
     * Braintree GooglePayCard module
     * Creates and manages Braintree Google Pay cards
     *
     * <b>== More information ==</b>
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/google-pay-card developer docs} for information on attributes
     */
    class GooglePayCard extends \Braintree\Base
    {
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * Creates an instance of a GooglePayCard from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return GooglePayCard
         */
        public static function factory($attributes)
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $googlePayCardAttribs array of Google Pay card properties
         *
         * @return void
         */
        protected function _initialize($googlePayCardAttribs)
        {
        }
    }
    /**
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/merchant-account developer docs} for information on attributes
     */
    class MerchantAccount extends \Braintree\Base
    {
        const STATUS_ACTIVE = 'active';
        const STATUS_PENDING = 'pending';
        const STATUS_SUSPENDED = 'suspended';
        const FUNDING_DESTINATION_BANK = 'bank';
        const FUNDING_DESTINATION_EMAIL = 'email';
        const FUNDING_DESTINATION_MOBILE_PHONE = 'mobile_phone';
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return MerchantAccount
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($merchantAccountAttribs)
        {
        }
        // static methods redirecting to gateway
        public static function create($attribs)
        {
        }
        public static function find($merchant_account_id)
        {
        }
        public static function update($merchant_account_id, $attributes)
        {
        }
    }
    /**
     * Braintree MultipleValueNode
     * MultipleValueNode is an object for elements with possible values returned from the Braintree API
     */
    class MultipleValueNode
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($name, $allowedValues = [])
        {
        }
        /**
         * Sets the value of the object's items key to $values
         *
         * @param array $values to be set
         *
         * @throws InvalidArgumentException
         *
         * @return object
         */
        public function in($values)
        {
        }
        /**
         * Sets the value of the object's items key to [$value]
         *
         * @param object $value to be set
         *
         * @return object
         */
        public function is($value)
        {
        }
        /**
         * Retrieves items(params) from the object
         *
         * @return object
         */
        public function toParam()
        {
        }
    }
    /**
     * Braintree TransactionLineItemGateway processor
     * Creates and manages transaction line items
     */
    class TransactionLineItemGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Find all Transaction Line Items or return an error
         *
         * @param string $id of the Transaction to search for line items
         *
         * @return TransactionLineItem|Exception
         */
        public function findAll($id)
        {
        }
        /**
         * verifies that a valid transaction id is being used
         *
         * @param string transaction id
         *
         * @throws InvalidArgumentException
         */
        private function _validateId($id = null)
        {
        }
    }
    /**
     * Braintree LocalPaymentExpired module
     */
    class LocalPaymentExpired extends \Braintree\Base
    {
        /**
         *  factory method: returns an instance of LocalPaymentExpired
         *  to the requesting method, with populated properties
         *
         * @param array $attributes to be used in creating the object
         *
         * @return LocalPaymentExpired
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($localPaymentExpiredAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Creates an instance of AccountUpdaterDailyReport
     *
     * For attributes see our {@link https://developer.paypal.com/braintree/docs/reference/general/webhooks/account-updater/php#notification-kinds developer documentation}
     */
    class AccountUpdaterDailyReport extends \Braintree\Base
    {
        protected $_attributes = [];
        protected function _initialize($disputeAttribs)
        {
        }
        /**
         * Creates an instance of an AccountUpdaterDailyReport from given attributes
         *
         * @param array $attributes to generate new AccountUpdaterDailyReport
         *
         * @return AccountUpdaterDailyReport
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Creates and manages Braintree PaymentMethods
     *
     * For more detailed information on PaymentMethods, see {@link https://developer.paypal.com/braintree/docs/reference/response/payment-method/php our developer docs}. <br />
     */
    class PaymentMethodGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Attempts the create operation
         * returns a Result on success or an Error on failure
         *
         * @param array $attribs containing request parameterss
         *
         * @throws Exception\ValidationError
         *
         * @return Result\Successful|Result\Error
         */
        public function create($attribs)
        {
        }
        /**
         * Find a PaymentMethod by token
         *
         * @param string $token payment method unique id
         *
         * @throws Exception\NotFound
         *
         * @return CreditCard|PayPalAccount
         */
        public function find($token)
        {
        }
        /**
         * Updates the payment method's record
         *
         * @param string $token   payment method identifier
         * @param array  $attribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function update($token, $attribs)
        {
        }
        /**
         * Delete a payment method record
         *
         * @param string $token   payment method identifier
         * @param mixed  $options containing optional parameters
         *
         * @return Result
         */
        public function delete($token, $options = [])
        {
        }
        /**
         * Grant a payment method record
         *
         * See our {@link https://developer.paypal.com/braintree/docs/reference/request/payment-method/grant developer docs} for more info on the Grant API.
         *
         * @param string $sharedPaymentMethodToken payment method identifier
         * @param mixed  $attribs                  containing request parameters
         *
         * @return Result
         */
        public function grant($sharedPaymentMethodToken, $attribs = [])
        {
        }
        /**
         * Deletes the version of a granted payment method from the receiving merchant's vault.
         *
         * See our {@link https://developer.paypal.com/braintree/docs/reference/request/payment-method/revoke developer docs} for more info on the Grant API.
         *
         * @param string $sharedPaymentMethodToken payment method identifier
         *
         * @return Result
         */
        public function revoke($sharedPaymentMethodToken)
        {
        }
        private static function baseSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function createSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function updateSignature()
        {
        }
        private static function deleteSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doCreate($subPath, $params)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doGrant($subPath, $params)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doRevoke($subPath, $params)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doUpdate($subPath, $params)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doDelete($subPath)
        {
        }
        /**
         * Generic method for validating incoming gateway responses
         *
         * Creates a new CreditCard or PayPalAccount object
         * and encapsulates it inside a Result\Successful object, or
         * encapsulates a Errors object inside a Result\Error
         * alternatively, throws an Unexpected exception if the response is invalid.
         */
        private function _verifyGatewayResponse($response)
        {
        }
        private function _verifyGrantResponse($response)
        {
        }
        private function _verifyRevokeResponse($response)
        {
        }
        /**
         * Verifies that a valid payment method identifier is being used
         */
        private function _validateId($identifier = null, $identifierType = 'token')
        {
        }
    }
    class MerchantAccountGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        public function create($attribs)
        {
        }
        public function find($merchant_account_id)
        {
        }
        public function update($merchant_account_id, $attributes)
        {
        }
        public static function updateSignature()
        {
        }
        public function createForCurrency($attribs)
        {
        }
        public function all()
        {
        }
        public function fetchMerchantAccounts($page)
        {
        }
        public static function createSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doCreate($subPath, $params)
        {
        }
        private function _doUpdate($subPath, $params)
        {
        }
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Braintree CreditCardGateway module
     * Creates and manages Braintree CreditCards
     *
     * For more detailed information on CreditCards, see {@link https://developer.paypal.com/braintree/docs/reference/response/credit-card/php our developer docs}<br />
     * For more detailed information on CreditCard verifications, see {@link https://developer.paypal.com/braintree/docs/reference/response/credit-card-verification/php our reference documentation}
     */
    class CreditCardGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Attempts the create operation
         * returns a Result on success or an Error on failure
         *
         * @param array $attribs containing request parameterss
         *
         * @throws Exception\ValidationError
         *
         * @return Result\Successful|Result\Error
         */
        public function create($attribs)
        {
        }
        /**
         * Attempts the create operation assuming all data will validate
         * returns a CreditCard object instead of a Result
         *
         * @param array $attribs containing request parameters
         *
         * @throws Exception\ValidationError
         *
         * @return CreditCard
         */
        public function createNoValidate($attribs)
        {
        }
        /**
         * Returns a ResourceCollection of expired credit cards
         *
         * @return ResourceCollection
         */
        public function expired()
        {
        }
        /**
         * Returns a ResourceCollection of expired credit cards
         *
         * @param string $ids containing credit card IDs
         *
         * @return ResourceCollection
         */
        public function fetchExpired($ids)
        {
        }
        /**
         * Returns a ResourceCollection of credit cards expiring between start/end
         *
         * @param string $startDate the start date of search
         * @param string $endDate   the end date of search
         *
         * @return ResourceCollection
         */
        public function expiringBetween($startDate, $endDate)
        {
        }
        /**
         * Returns a ResourceCollection of credit cards expiring between start/end given a set of IDs
         *
         * @param string $startDate the start date of search
         * @param string $endDate   the end date of search
         * @param string $ids       containing ids to search
         *
         * @return ResourceCollection
         */
        public function fetchExpiring($startDate, $endDate, $ids)
        {
        }
        /**
         * Find a creditcard by token
         *
         * @param string $token credit card unique id
         *
         * @throws Exception\NotFound
         *
         * @return CreditCard
         */
        public function find($token)
        {
        }
        /**
         * Convert a payment method nonce to a credit card
         *
         * @param string $nonce payment method nonce
         *
         * @throws Exception\NotFound
         *
         * @return CreditCard
         */
        public function fromNonce($nonce)
        {
        }
        /**
         * Create a credit on the card for the passed transaction
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function credit($token, $transactionAttribs)
        {
        }
        /**
         * Create a credit on this card, assuming validations will pass
         *
         * Returns a Transaction object on success
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @throws Exception\ValidationError
         *
         * @return Transaction
         */
        public function creditNoValidate($token, $transactionAttribs)
        {
        }
        /**
         * Create a new sale for the current card
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function sale($token, $transactionAttribs)
        {
        }
        /**
         * Create a new sale using this card, assuming validations will pass
         *
         * Returns a Transaction object on success
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @throws Exception\ValidationsFailed
         *
         * @return Transaction
         */
        public function saleNoValidate($token, $transactionAttribs)
        {
        }
        /**
         * Updates the creditcard record
         *
         * If calling this method in context, $token
         * is the 2nd attribute. $token is not sent in object context.
         *
         * @param string $token      (optional)
         * @param array  $attributes containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function update($token, $attributes)
        {
        }
        /**
         * Update a creditcard record, assuming validations will pass
         *
         * If calling this method in context, $token
         * is the 2nd attribute. $token is not sent in object context.
         * returns a CreditCard object on success
         *
         * @param string $token      (optional)
         * @param array  $attributes containing request parameters
         *
         * @return CreditCard
         *
         * @throws Exception\ValidationsFailed
         */
        public function updateNoValidate($token, $attributes)
        {
        }
        /**
         * Delete a credit card record
         *
         * @param string $token credit card identifier
         *
         * @return Result
         */
        public function delete($token)
        {
        }
        private static function baseOptions()
        {
        }
        private static function baseSignature($options)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function billingAddressSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function createSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function threeDSecurePassThruSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function updateSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doCreate($subPath, $params)
        {
        }
        private function _validateId($identifier = null, $identifierType = "token")
        {
        }
        private function _doUpdate($httpVerb, $subPath, $params)
        {
        }
        /**
         * Generic method for validating incoming gateway responses
         *
         * Creates a new CreditCard object and encapsulates
         * it inside a Result\Successful object, or
         * encapsulates a Errors object inside a Result\Error
         * alternatively, throws an Unexpected exception if the response is invalid
         */
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Braintree Address module
     * Creates and manages Braintree Addresses
     *
     * An Address belongs to a Customer. It can be associated to a
     * CreditCard as the billing address. It can also be used
     * as the shipping address when creating a Transaction.
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/address developer docs} for information on attributes
     */
    class Address extends \Braintree\Base
    {
        /**
         * returns false if comparing object is not a Address,
         * or is a Address with a different id
         *
         * @param object $other address to compare against
         *
         * @return boolean
         */
        public function isEqual($other)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        protected function _initialize($addressAttribs)
        {
        }
        /**
         * Creates an instance of an Address from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Address
         */
        public static function factory($attributes)
        {
        }
        /**
         * static method redirecting to gateway class
         *
         * @param array $attribs containing request parameters
         *
         * @see AddressGateway::create()
         *
         * @return Result\Successful|Result\Error
         */
        public static function create($attribs)
        {
        }
        /**
         * static method redirecting to gateway class
         *
         * @param array $attribs containing request parameters
         *
         * @see AddressGateway::createNoValidate()
         *
         * @throws Exception\ValidationError
         *
         * @return Address
         */
        public static function createNoValidate($attribs)
        {
        }
        /**
         * static method redirecting to gateway class
         *
         * @param mixed  $customerOrId either a customer object or string ID of customer
         * @param string $addressId    optional unique identifier
         *
         * @see AddressGateway::delete()
         *
         * @return Result\Successful|Result\Error
         */
        public static function delete($customerOrId = null, $addressId = null)
        {
        }
        /**
         * static method redirecting to gateway class
         *
         * @param mixed  $customerOrId either a customer object or string ID of customer
         * @param string $addressId    optional unique identifier
         *
         * @see AddressGateway::find()
         *
         * @throws Exception\NotFound
         *
         * @return Address
         */
        public static function find($customerOrId, $addressId)
        {
        }
        /**
         * static method redirecting to gateway class
         *
         * @param mixed  $customerOrId (only used in call)
         * @param string $addressId    (only used in call)
         * @param array  $attributes   containing request parameters
         *
         * @see AddressGateway::update()
         *
         * @return Result\Successful|Result\Error
         */
        public static function update($customerOrId, $addressId, $attributes)
        {
        }
        /**
         * static method redirecting to gateway class
         *
         * @param mixed  $customerOrId (only used in call)
         * @param string $addressId    (only used in call)
         * @param array  $attributes   containing request parameters
         *
         * @see AddressGateway::updateNoValidate()
         *
         * @throws Exception\ValidationsFailed
         *
         * @return Address
         */
        public static function updateNoValidate($customerOrId, $addressId, $attributes)
        {
        }
    }
    /**
     * Braintree UsBankAccountGateway module
     *
     * Manages Braintree UsBankAccounts
     */
    class UsBankAccountGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * find a usBankAccount by token
         *
         * @param string $token paypal accountunique id
         *
         * @throws Exception\NotFound
         *
         * @return UsBankAccount
         */
        public function find($token)
        {
        }
        /**
         * create a new sale for the current UsBank account
         *
         * @param string $token              payment method identifier
         * @param array  $transactionAttribs request parameters
         *
         * @see Transaction::sale()
         *
         * @return Result\Successful|Result\Error
         */
        public function sale($token, $transactionAttribs)
        {
        }
        /**
         * generic method for validating incoming gateway responses
         *
         * creates a new UsBankAccount object and encapsulates
         * it inside a Result\Successful object, or
         * encapsulates a Errors object inside a Result\Error
         * alternatively, throws an Unexpected exception if the response is invalid.
         *
         * @param array $response gateway response values
         *
         * @throws Exception\Unexpected
         *
         * @return Result\Successful|Result\Error
         */
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Create and Manage 3D Secure Info type objects
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/payment-method-nonce/php#three_d_secure_info developer docs} for information on attributes
     */
    class ThreeDSecureInfo extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return ThreeDSecureInfo
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
}
namespace Braintree\Test {
    /**
     * Merchant Account constants used for testing purposes
     */
    class MerchantAccount
    {
        public static $approve = "approve_me";
        public static $insufficientFundsContactUs = "insufficient_funds__contact";
        public static $accountNotAuthorizedContactUs = "account_not_authorized__contact";
        public static $bankRejectedUpdateFundingInformation = "bank_rejected__update";
        public static $bankRejectedNone = "bank_rejected__none";
    }
    /**
     * Transaction amounts used for testing purposes
     *
     * The constants in this class can be used to create transactions with
     * the desired status in the sandbox environment.
     */
    class Transaction
    {
        /**
         * settle a transaction by id in sandbox
         *
         * @param string        $id     transaction id
         * @param Configuration $config gateway config
         *
         * @return Transaction
         */
        public static function settle($transactionId)
        {
        }
        /**
         * settlement confirm a transaction by id in sandbox
         *
         * @param string        $id     transaction id
         * @param Configuration $config gateway config
         *
         * @return Transaction
         */
        public static function settlementConfirm($transactionId)
        {
        }
        /**
         * settlement decline a transaction by id in sandbox
         *
         * @param string        $id     transaction id
         * @param Configuration $config gateway config
         *
         * @return Transaction
         */
        public static function settlementDecline($transactionId)
        {
        }
        /**
         * settlement pending a transaction by id in sandbox
         *
         * @param string        $id     transaction id
         * @param Configuration $config gateway config
         *
         * @return Transaction
         */
        public static function settlementPending($transactionId)
        {
        }
    }
    /**
     * VenmoSdk payment method codes used for testing purposes
     */
    class VenmoSdk
    {
        public static $visaPaymentMethodCode = "stub-4111111111111111";
        public static function generateTestPaymentMethodCode($number)
        {
        }
        public static function getInvalidPaymentMethodCode()
        {
        }
        public static function getTestSession()
        {
        }
        public static function getInvalidTestSession()
        {
        }
    }
    /**
     * Nonces used for testing purposes
     */
    /**
     * Nonces used for testing purposes
     *
     * The constants in this class can be used to perform nonce operations
     * with the desired status in the sandbox environment.
     */
    class Nonces
    {
        // phpcs:disable Generic.Files.LineLength
        public static $transactable = "fake-valid-nonce";
        public static $consumed = "fake-consumed-nonce";
        public static $paypalOneTimePayment = "fake-paypal-one-time-nonce";
        public static $paypalFuturePayment = "fake-paypal-future-nonce";
        public static $paypalBillingAgreement = "fake-paypal-billing-agreement-nonce";
        public static $applePayVisa = "fake-apple-pay-visa-nonce";
        public static $applePayMasterCard = "fake-apple-pay-visa-nonce";
        public static $applePayAmEx = "fake-apple-pay-amex-nonce";
        public static $googlePay = "fake-android-pay-nonce";
        public static $googlePayDiscover = "fake-android-pay-discover-nonce";
        public static $googlePayVisa = "fake-android-pay-visa-nonce";
        public static $googlePayMasterCard = "fake-android-pay-mastercard-nonce";
        public static $googlePayAmEx = "fake-android-pay-amex-nonce";
        public static $abstractTransactable = "fake-abstract-transactable-nonce";
        public static $europe = "fake-europe-bank-account-nonce";
        public static $transactableVisa = "fake-valid-visa-nonce";
        public static $transactableAmEx = "fake-valid-amex-nonce";
        public static $transactableMasterCard = "fake-valid-mastercard-nonce";
        public static $transactableDiscover = "fake-valid-discover-nonce";
        public static $transactableJCB = "fake-valid-jcb-nonce";
        public static $transactableMaestro = "fake-valid-maestro-nonce";
        public static $transactableDinersClub = "fake-valid-dinersclub-nonce";
        public static $transactablePrepaid = "fake-valid-prepaid-nonce";
        public static $transactableCommercial = "fake-valid-commercial-nonce";
        public static $transactableDurbinRegulated = "fake-valid-durbin-regulated-nonce";
        public static $transactableHealthcare = "fake-valid-healthcare-nonce";
        public static $transactableDebit = "fake-valid-debit-nonce";
        public static $transactablePayroll = "fake-valid-payroll-nonce";
        public static $threeDSecureVisaFullAuthenticationNonce = "fake-three-d-secure-visa-full-authentication-nonce";
        public static $threeDSecureVisaLookupTimeout = "fake-three-d-secure-visa-lookup-timeout-nonce";
        public static $threeDSecureVisaFailedSignature = "fake-three-d-secure-visa-failed-signature-nonce";
        public static $threeDSecureVisaFailedAuthentication = "fake-three-d-secure-visa-failed-authentication-nonce";
        public static $threeDSecureVisaAttemptsNonParticipating = "fake-three-d-secure-visa-attempts-non-participating-nonce";
        public static $threeDSecureVisaNoteEnrolled = "fake-three-d-secure-visa-not-enrolled-nonce";
        public static $threeDSecureVisaUnavailable = "fake-three-d-secure-visa-unavailable-nonce";
        public static $threeDSecureVisaMPILookupError = "fake-three-d-secure-visa-mpi-lookup-error-nonce";
        public static $threeDSecureVisaMPIAuthenticateError = "fake-three-d-secure-visa-mpi-authenticate-error-nonce";
        public static $threeDSecureVisaAuthenticationUnavailable = "fake-three-d-secure-visa-authentication-unavailable-nonce";
        public static $threeDSecureVisaBypassedAuthentication = "fake-three-d-secure-visa-bypassed-authentication-nonce";
        public static $threeDSecureTwoVisaSuccessfulFrictionlessAuthentication = "fake-three-d-secure-two-visa-successful-frictionless-authentication-nonce";
        public static $threeDSecureTwoVisaSuccessfulStepUpAuthentication = "fake-three-d-secure-two-visa-successful-step-up-authentication-nonce";
        public static $threeDSecureTwoVisaErrorOnLookup = "fake-three-d-secure-two-visa-error-on-lookup-nonce";
        public static $threeDSecureTwoVisaTimeoutOnLookup = "fake-three-d-secure-two-visa-timeout-on-lookup-nonce";
        public static $transactableNoIndicators = "fake-valid-no-indicators-nonce";
        public static $transactableUnknownIndicators = "fake-valid-unknown-indicators-nonce";
        public static $transactableCountryOfIssuanceUSA = "fake-valid-country-of-issuance-usa-nonce";
        public static $transactableCountryOfIssuanceCAD = "fake-valid-country-of-issuance-cad-nonce";
        public static $transactableIssuingBankNetworkOnly = "fake-valid-issuing-bank-network-only-nonce";
        public static $processorDeclinedVisa = "fake-processor-declined-visa-nonce";
        public static $processorDeclinedMasterCard = "fake-processor-declined-mastercard-nonce";
        public static $processorDeclinedAmEx = "fake-processor-declined-amex-nonce";
        public static $processorDeclinedDiscover = "fake-processor-declined-discover-nonce";
        public static $processorFailureJCB = "fake-processor-failure-jcb-nonce";
        public static $luhnInvalid = "fake-luhn-invalid-nonce";
        public static $localPayment = "fake-local-payment-method-nonce";
        public static $paypalFuturePaymentRefreshToken = "fake-paypal-future-refresh-token-nonce";
        public static $sepa = "fake-sepa-bank-account-nonce";
        public static $gatewayRejectedFraud = "fake-gateway-rejected-fraud-nonce";
        public static $gatewayRejectedTokenIssuance = "fake-token-issuance-error-venmo-account-nonce";
        public static $venmoAccount = "fake-venmo-account-nonce";
        public static $visaCheckoutAmEx = "fake-visa-checkout-amex-nonce";
        public static $visaCheckoutDiscover = "fake-visa-checkout-discover-nonce";
        public static $visaCheckoutMasterCard = "fake-visa-checkout-mastercard-nonce";
        public static $visaCheckoutVisa = "fake-visa-checkout-visa-nonce";
        public static $samsungPayAmEx = "tokensam_fake_american_express";
        public static $samsungPayDiscover = "tokensam_fake_discover";
        public static $samsungPayMasterCard = "tokensam_fake_mastercard";
        public static $samsungPayVisa = "tokensam_fake_visa";
        // phpcs:enable Generic.Files.LineLength
    }
    /**
     * Credit card information used for testing purposes
     *
     * The constants contained in the Test\CreditCardNumbers class provide
     * credit card numbers that should be used when working in the sandbox environment.
     * The sandbox will not accept any credit card numbers other than the ones listed below.
     */
    class CreditCardNumbers
    {
        public static $amExes = ['378282246310005', '371449635398431', '378734493671000'];
        public static $carteBlanches = ['30569309025904'];
        public static $dinersClubs = ['38520000023237'];
        public static $discoverCards = ['6011111111111117', '6011000990139424'];
        public static $hiper = '6370950000000005';
        public static $hiperCard = '6062820524845321';
        public static $elo = '5066991111111118';
        public static $eloCards = ['5066991111111118'];
        public static $JCBs = ['3530111333300000', '3566002020360505'];
        public static $masterCard = '5555555555554444';
        public static $masterCardInternational = '5105105105105100';
        public static $masterCards = ['5105105105105100', '5555555555554444'];
        public static $visa = '4012888888881881';
        public static $visaInternational = '4009348888881881';
        public static $visas = ['4009348888881881', '4012888888881881', '4111111111111111', '4000111111111115'];
        public static $unknowns = ['1000000000000008'];
        public static $failsSandboxVerification = ['AmEx' => '378734493671000', 'Discover' => '6011000990139424', 'MasterCard' => '5105105105105100', 'Visa' => '4000111111111115'];
        public static $amexPayWithPoints = ['Success' => "371260714673002", 'IneligibleCard' => "378267515471109", 'InsufficientPoints' => "371544868764018"];
        public static $disputes = ['Chargeback' => '4023898493988028'];
        /**
         * Get all test credit cards in one array
         *
         * @return array
         */
        public static function getAll()
        {
        }
    }
    /**
     * Authentication Ids used for testing purposes
     */
    /**
     * Authentication Ids used for testing purposes
     *
     * The constants in this class can be used to perform authentication id operations
     * with the desired status in the sandbox environment.
     */
    class AuthenticationIds
    {
        // phpcs:disable Generic.Files.LineLength
        public static $threeDSecureVisaFullAuthenticationNonce = "fake-three-d-secure-visa-full-authentication-nonce";
        public static $threeDSecureVisaLookupTimeout = "fake-three-d-secure-visa-lookup-timeout-nonce";
        public static $threeDSecureVisaFailedSignature = "fake-three-d-secure-visa-failed-signature-nonce";
        public static $threeDSecureVisaFailedAuthentication = "fake-three-d-secure-visa-failed-authentication-nonce";
        public static $threeDSecureVisaAttemptsNonParticipating = "fake-three-d-secure-visa-attempts-non-participating-nonce";
        public static $threeDSecureVisaNoteEnrolled = "fake-three-d-secure-visa-not-enrolled-nonce";
        public static $threeDSecureVisaUnavailable = "fake-three-d-secure-visa-unavailable-nonce";
        public static $threeDSecureVisaMPILookupError = "fake-three-d-secure-visa-mpi-lookup-error-nonce";
        public static $threeDSecureVisaMPIAuthenticateError = "fake-three-d-secure-visa-mpi-authenticate-error-nonce";
        public static $threeDSecureVisaAuthenticationUnavailable = "fake-three-d-secure-visa-authentication-unavailable-nonce";
        public static $threeDSecureVisaBypassedAuthentication = "fake-three-d-secure-visa-bypassed-authentication-nonce";
        public static $threeDSecureTwoVisaSuccessfulFrictionlessAuthentication = "fake-three-d-secure-two-visa-successful-frictionless-authentication-nonce";
        public static $threeDSecureTwoVisaSuccessfulStepUpAuthentication = "fake-three-d-secure-two-visa-successful-step-up-authentication-nonce";
        public static $threeDSecureTwoVisaErrorOnLookup = "fake-three-d-secure-two-visa-error-on-lookup-nonce";
        public static $threeDSecureTwoVisaTimeoutOnLookup = "fake-three-d-secure-two-visa-timeout-on-lookup-nonce";
        // phpcs:enable Generic.Files.LineLength
    }
    /**
     * Transaction amounts used for testing purposes
     *
     * The constants in this class can be used to create transactions with
     * the desired status in the sandbox environment.
     */
    class TransactionAmounts
    {
        public static $authorize = '1000.00';
        public static $decline = '2000.00';
        public static $hardDecline = '2015.00';
    }
}
namespace Braintree {
    /**
     * Paginated Results class
     */
    class PaginatedResult
    {
        private $_totalItems;
        private $_pageSize;
        private $_currentPage;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($totalItems, $pageSize, $currentPage)
        {
        }
        /*
         * Getter method for totalItems
         *
         * @return int
         */
        public function getTotalItems()
        {
        }
        /*
         * Getter method for page size
         *
         * @return int
         */
        public function getPageSize()
        {
        }
        /*
         * Getter method for the current page index
         *
         * @return int
         */
        public function getCurrentPage()
        {
        }
    }
    /**
     * Braintree CreditCard module
     * Creates and manages Braintree CreditCards
     *
     * For more detailed information on CreditCards, see {@link https://developer.paypal.com/braintree/docs/reference/response/credit-card our developer docs}<br />
     * For more detailed information on CreditCard verifications, see {@link https://developer.paypal.com/braintree/docs/reference/response/credit-card-verification our developer docs}
     */
    class CreditCard extends \Braintree\Base
    {
        // Card Type
        const AMEX = 'American Express';
        const CARTE_BLANCHE = 'Carte Blanche';
        const CHINA_UNION_PAY = 'China UnionPay';
        const DINERS_CLUB_INTERNATIONAL = 'Diners Club';
        const DISCOVER = 'Discover';
        const ELO = 'Elo';
        const JCB = 'JCB';
        const LASER = 'Laser';
        const MAESTRO = 'Maestro';
        const UK_MAESTRO = 'UK Maestro';
        const MASTER_CARD = 'MasterCard';
        const SOLO = 'Solo';
        const SWITCH_TYPE = 'Switch';
        const VISA = 'Visa';
        const UNKNOWN = 'Unknown';
        // Credit card origination location
        const INTERNATIONAL = "international";
        const US = "us";
        const PREPAID_YES = 'Yes';
        const PREPAID_NO = 'No';
        const PREPAID_UNKNOWN = 'Unknown';
        const PAYROLL_YES = 'Yes';
        const PAYROLL_NO = 'No';
        const PAYROLL_UNKNOWN = 'Unknown';
        const HEALTHCARE_YES = 'Yes';
        const HEALTHCARE_NO = 'No';
        const HEALTHCARE_UNKNOWN = 'Unknown';
        const DURBIN_REGULATED_YES = 'Yes';
        const DURBIN_REGULATED_NO = 'No';
        const DURBIN_REGULATED_UNKNOWN = 'Unknown';
        const DEBIT_YES = 'Yes';
        const DEBIT_NO = 'No';
        const DEBIT_UNKNOWN = 'Unknown';
        const COMMERCIAL_YES = 'Yes';
        const COMMERCIAL_NO = 'No';
        const COMMERCIAL_UNKNOWN = 'Unknown';
        const COUNTRY_OF_ISSUANCE_UNKNOWN = "Unknown";
        const ISSUING_BANK_UNKNOWN = "Unknown";
        const PRODUCT_ID_UNKNOWN = "Unknown";
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * checks whether the card is expired based on the current date
         *
         * @return boolean
         */
        public function isExpired()
        {
        }
        /**
         * checks whether the card is associated with venmo sdk
         *
         * @return boolean
         */
        public function isVenmoSdk()
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $creditCardAttribs array of creditcard data
         *
         * @return void
         */
        protected function _initialize($creditCardAttribs)
        {
        }
        private function _compareCreatedAtOnVerifications($verificationAttrib1, $verificationAttrib2)
        {
        }
        /**
         * returns false if comparing object is not a CreditCard,
         * or is a CreditCard with a different id
         *
         * @param object $otherCreditCard customer to compare against
         *
         * @return boolean
         */
        public function isEqual($otherCreditCard)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Creates an instance of an CreditCard from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return CreditCard
         */
        public static function factory($attributes)
        {
        }
        /**
         * static method redirecting to gateway class
         *
         * @param array $attribs containing request parameters
         *
         * @see CreditCardGateway::create()
         *
         * @throws Exception\ValidationError
         *
         * @return Result\Successful|Result\Error
         */
        public static function create($attribs)
        {
        }
        /**
         * Attempts the create operation assuming all data will validate
         * returns a CreditCard object instead of a Result
         *
         * @param array $attribs containing request parameters
         *
         * @throws Exception\ValidationError
         *
         * @return CreditCard
         */
        public static function createNoValidate($attribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function createCreditCardUrl()
        {
        }
        /**
         * Returns a ResourceCollection of expired credit cards
         *
         * @return ResourceCollection
         */
        public static function expired()
        {
        }
        /**
         * Returns a ResourceCollection of expired credit cards
         *
         * @param string $ids containing credit card IDs
         *
         * @return ResourceCollection
         */
        public static function fetchExpired($ids)
        {
        }
        /**
         * Returns a ResourceCollection of credit cards expiring between start/end
         *
         * @param string $startDate the start date of search
         * @param string $endDate   the end date of search
         *
         * @return ResourceCollection
         */
        public static function expiringBetween($startDate, $endDate)
        {
        }
        /**
         * Returns a ResourceCollection of credit cards expiring between start/end given a set of IDs
         *
         * @param string $startDate the start date of search
         * @param string $endDate   the end date of search
         * @param string $ids       containing ids to search
         *
         * @return ResourceCollection
         */
        public static function fetchExpiring($startDate, $endDate, $ids)
        {
        }
        /**
         * Find a creditcard by token
         *
         * @param string $token credit card unique id
         *
         * @throws Exception\NotFound
         *
         * @return CreditCard
         */
        public static function find($token)
        {
        }
        /**
         * Convert a payment method nonce to a credit card
         *
         * @param string $nonce payment method nonce
         *
         * @throws Exception\NotFound
         *
         * @return CreditCard
         */
        public static function fromNonce($nonce)
        {
        }
        /**
         * Create a credit on the card for the passed transaction
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public static function credit($token, $transactionAttribs)
        {
        }
        /**
         * Create a credit on this card, assuming validations will pass
         *
         * Returns a Transaction object on success
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @throws Exception\ValidationError
         *
         * @return Transaction
         */
        public static function creditNoValidate($token, $transactionAttribs)
        {
        }
        /**
         * Create a new sale for the current card
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public static function sale($token, $transactionAttribs)
        {
        }
        /**
         * Create a new sale using this card, assuming validations will pass
         *
         * Returns a Transaction object on success
         *
         * @param string $token              belonging to the credit card
         * @param array  $transactionAttribs containing request parameters
         *
         * @throws Exception\ValidationsFailed
         *
         * @return Transaction
         */
        public static function saleNoValidate($token, $transactionAttribs)
        {
        }
        /**
         * Updates the creditcard record
         *
         * If calling this method in context, $token
         * is the 2nd attribute. $token is not sent in object context.
         *
         * @param string $token      (optional)
         * @param array  $attributes containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public static function update($token, $attributes)
        {
        }
        /**
         * Update a creditcard record, assuming validations will pass
         *
         * If calling this method in context, $token
         * is the 2nd attribute. $token is not sent in object context.
         * returns a CreditCard object on success
         *
         * @param string $token      (optional)
         * @param array  $attributes containing request parameters
         *
         * @return CreditCard
         *
         * @throws Exception\ValidationsFailed
         */
        public static function updateNoValidate($token, $attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function updateCreditCardUrl()
        {
        }
        /**
         * Delete a credit card record
         *
         * @param string $token credit card identifier
         *
         * @return Result
         */
        public static function delete($token)
        {
        }
        /**
         * All credit card types in an array
         *
         * @return array
         */
        public static function allCardTypes()
        {
        }
    }
    /**
     * Braintree AddOnGateway module
     *
     * Manages subscription addons
     */
    class AddOnGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Retrieve all add ons
         *
         * @return AddOn[]
         */
        public function all()
        {
        }
    }
    /**
     * Braintree OAuthGateway module
     * Creates and manages Braintree Addresses
     */
    class OAuthGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /* Create an oAuth token from an authorization code
         *
         * @param mixed $params of request details
         *
         * @return Result\Successful|Result\Error
         */
        public function createTokenFromCode($params)
        {
        }
        /* Create an oAuth token from a refresh token
         *
         * @param mixed $params of request details
         *
         * @return Result\Successful|Result\Error
         */
        public function createTokenFromRefreshToken($params)
        {
        }
        /* Revoke an oAuth Access token
         *
         * @param mixed $params of request details
         *
         * @return Result\Successful|Result\Error
         */
        public function revokeAccessToken($accessToken)
        {
        }
        private function _createToken($params)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        private function _verifyGatewayResponse($response)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _mapError($result)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _mapAccessTokenRevokeSuccess($result)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _mapSuccess($result)
        {
        }
        /*
         * Create URL for oAuth connection
         *
         * @param array $params optional
         *
         * @return string
         */
        public function connectUrl($params = [])
        {
        }
    }
}
namespace Braintree\Result {
    /**
     * Braintree Credit Card Verification Result
     *
     * This object is returned as part of an Error Result; it provides
     * access to the credit card verification data from the gateway
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/credit-card-verification developer docs} for information on attributes
     */
    class CreditCardVerification extends \Braintree\Base
    {
        // Status
        const FAILED = 'failed';
        const GATEWAY_REJECTED = 'gateway_rejected';
        const PROCESSOR_DECLINED = 'processor_declined';
        const VERIFIED = 'verified';
        private $_amount;
        private $_avsErrorResponseCode;
        private $_avsPostalCodeResponseCode;
        private $_avsStreetAddressResponseCode;
        private $_currencyIsoCode;
        private $_cvvResponseCode;
        private $_gatewayRejectionReason;
        private $_status;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
        /**
         * initializes instance properties from the keys/values of an array
         *
         * @param <type> $aAttribs array of properties to set - single level
         *
         * @return void
         */
        private function _initializeFromArray($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __get($name)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * returns an array of all possible Credit Card Verification statuses
         *
         * @return array
         */
        public static function allStatuses()
        {
        }
    }
}
namespace Braintree {
    /**
     * {@inheritdoc}
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/credit-card-verification developer docs} for information on attributes
     */
    class CreditCardVerification extends \Braintree\Result\CreditCardVerification
    {
        /**
         * Creates an instance of a CreditCardVerification from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return CreditCardVerification
         */
        public static function factory($attributes)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param array $attributes containing request parameters
         *
         * @see CreditCardVerificationGateway::create()
         *
         * @return Result\Successful|Result\Error
         */
        public static function create($attributes)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param array $query search parameters
         * @param array $ids   of verifications to search
         *
         * @see CreditCardVerificationGateway::fetch()
         *
         * @return Array of CreditCardVerification objects
         */
        public static function fetch($query, $ids)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param mixed $query search query
         *
         * @see CreditCardVerificationGateway::search()
         *
         * @return ResourceCollection
         */
        public static function search($query)
        {
        }
        /*
         * Returns keys that are acceptable for create requests
         */
        public static function createSignature()
        {
        }
    }
    /**
     * PaymentInstrumentType module
     *
     * Contains constants for all payment methods that are possible to integrate with Braintree
     */
    class PaymentInstrumentType
    {
        const GOOGLE_PAY_CARD = 'android_pay_card';
        const APPLE_PAY_CARD = 'apple_pay_card';
        const CREDIT_CARD = 'credit_card';
        const LOCAL_PAYMENT = 'local_payment';
        const PAYPAL_ACCOUNT = 'paypal_account';
        const PAYPAL_HERE = 'paypal_here';
        const SAMSUNG_PAY_CARD = 'samsung_pay_card';
        const US_BANK_ACCOUNT = 'us_bank_account';
        const VENMO_ACCOUNT = 'venmo_account';
        const VISA_CHECKOUT_CARD = 'visa_checkout_card';
    }
    /**
     * Braintree Subscription module
     *
     * // phpcs:ignore
     * For more detailed information on Subscriptions, see {@link https://developer.paypal.com/braintree/docs/reference/response/subscription our developer docs}
     */
    class Subscription extends \Braintree\Base
    {
        const ACTIVE = 'Active';
        const CANCELED = 'Canceled';
        const EXPIRED = 'Expired';
        const PAST_DUE = 'Past Due';
        const PENDING = 'Pending';
        // Subscription Sources
        const API = 'api';
        const CONTROL_PANEL = 'control_panel';
        const RECURRING = 'recurring';
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Subscription
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param array $attributes containing request params
         *
         * @see SubscriptionGateway::create()
         *
         * @return Result\Successful|Result\Error
         */
        public static function create($attributes)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param string $id of the subscription to find
         *
         * @see SubscriptionGateway::find()
         *
         * @return Subscription|Exception\NotFound
         */
        public static function find($id)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param mixed $query of search fields
         *
         * @see SubscriptionGateway::search()
         *
         * @return ResourceCollection of Subscription objects
         */
        public static function search($query)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param mixed $query of search fields
         * @param array $ids to be fetched
         *
         * @see SubscriptionGateway::fetch()
         *
         * @return ResourceCollection of Subscription objects
         */
        public static function fetch($query, $ids)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param string $subscriptionId the ID of the subscription to be updated
         * @param mixed $attributes
         *
         * @see SubscriptionGateway::update()
         *
         * @return Subscription|Exception\NotFound
         */
        public static function update($subscriptionId, $attributes)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param string $subscriptionId the ID of the subscription with a charge being retried
         * @param string $amount optional
         * @param bool $submitForSettlement defaults to false unless specified true
         *
         * @see SubscriptionGateway::retryCharge()
         *
         * @return Transaction
         */
        public static function retryCharge($subscriptionId, $amount = null, $submitForSettlement = false)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param string $subscriptionId to be canceled
         *
         * @see SubscriptionGateway::cancel()
         *
         * @return Subscription|Exception\NotFound
         */
        public static function cancel($subscriptionId)
        {
        }
    }
    /**
     * Braintree IsNode
     * IsNode is an object for search elements sent to the Braintree API
     */
    class IsNode
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($name)
        {
        }
        /**
         * Sets the value of the object's "is" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function is($value)
        {
        }
        /**
         * The searchTerms
         *
         * @return array
         */
        public function toParam()
        {
        }
    }
    /**
     * Braintree Gateway module
     */
    class Gateway
    {
        /**
         *
         * @var Configuration
         */
        public $config;
        /**
         *
         * @var GraphQLClient
         */
        public $graphQLClient;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($config)
        {
        }
        /**
         *
         * @return AddOnGateway
         */
        public function addOn()
        {
        }
        /**
         *
         * @return AddressGateway
         */
        public function address()
        {
        }
        /**
         *
         * @return ApplePayGateway
         */
        public function applePay()
        {
        }
        /**
         *
         * @return ClientTokenGateway
         */
        public function clientToken()
        {
        }
        /**
         *
         * @return CreditCardGateway
         */
        public function creditCard()
        {
        }
        /**
         *
         * @return CreditCardVerificationGateway
         */
        public function creditCardVerification()
        {
        }
        /**
         *
         * @return CustomerGateway
         */
        public function customer()
        {
        }
        /**
         *
         * @return DiscountGateway
         */
        public function discount()
        {
        }
        /**
         *
         * @return DisputeGateway
         */
        public function dispute()
        {
        }
        /**
         *
         * @return DocumentUploadGateway
         */
        public function documentUpload()
        {
        }
        /**
         *
         * @return MerchantGateway
         */
        public function merchant()
        {
        }
        /**
         *
         * @return MerchantAccountGateway
         */
        public function merchantAccount()
        {
        }
        /**
         *
         * @return OAuthGateway
         */
        public function oauth()
        {
        }
        /**
         *
         * @return PaymentMethodGateway
         */
        public function paymentMethod()
        {
        }
        /**
         *
         * @return PaymentMethodNonceGateway
         */
        public function paymentMethodNonce()
        {
        }
        /**
         *
         * @return PayPalAccountGateway
         */
        public function payPalAccount()
        {
        }
        /**
         *
         * @return PlanGateway
         */
        public function plan()
        {
        }
        /**
         *
         * @return SettlementBatchSummaryGateway
         */
        public function settlementBatchSummary()
        {
        }
        /**
         *
         * @return SubscriptionGateway
         */
        public function subscription()
        {
        }
        /**
         *
         * @return TestingGateway
         */
        public function testing()
        {
        }
        /**
         *
         * @return TransactionGateway
         */
        public function transaction()
        {
        }
        /**
         *
         * @return TransactionLineItemGateway
         */
        public function transactionLineItem()
        {
        }
        /**
         *
         * @return UsBankAccountGateway
         */
        public function usBankAccount()
        {
        }
        /**
         *
         * @return UsBankAccountVerificationGateway
         */
        public function usBankAccountVerification()
        {
        }
        /**
         *
         * @return WebhookNotificationGateway
         */
        public function webhookNotification()
        {
        }
        /**
         *
         * @return WebhookTestingGateway
         */
        public function webhookTesting()
        {
        }
    }
    /**
     * Modification class
     * For changes to Subscriptions
     *
     * @see AddOn
     */
    class Modification extends \Braintree\Base
    {
        protected function _initialize($attributes)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Modification
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Discount class
     *
     * Object containing information on Discountss of a subscription
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/discount developer docs} for information on attributes
     */
    class Discount extends \Braintree\Modification
    {
        /**
         * Creates an instance of a Discount from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Discount
         */
        public static function factory($attributes)
        {
        }
        /**
         * static methods redirecting to gateway class
         *
         * @see DiscountGateway::all()
         *
         * @return Discount[]
         */
        public static function all()
        {
        }
    }
}
namespace Braintree\Transaction {
    /**
     * Status details from a transaction
     * Creates an instance of StatusDetails, as part of a transaction response
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#status_history developer docs} for information on attributes
     */
    class StatusDetails extends \Braintree\Instance
    {
    }
    /**
     * Google Pay card details from a transaction
     */
    /**
     * creates an instance of GooglePayCardDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#android_pay_details developer docs} for information on attributes
     */
    class GooglePayCardDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * Apple Pay card details from a transaction
     */
    /**
     * creates an instance of ApplePayCardDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#apple_pay_details developer docs} for information on attributes
     */
    class ApplePayCardDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * Customer details from a transaction
     * Creates an instance of customer details as returned from a transaction
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#subscription_details developer docs} for information on attributes
     */
    class SubscriptionDetails extends \Braintree\Instance
    {
    }
    /**
     * PayPal Here details from a transaction
     */
    /**
     * creates and instance of PayPalHereDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#paypal_here_details developer docs} for information on attributes
     */
    class PayPalHereDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * VisaCheckoutCard details from a transaction
     * creates an instance of VisaCheckoutCardDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#visa_checkout_card_details developer docs} for information on attributes
     */
    class VisaCheckoutCardDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * PayPal details from a transaction
     */
    /**
     * creates an instance of PayPalDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#paypal_details developer docs} for information on attributes
     */
    class PayPalDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * Venmo account details from a transaction
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#venmo_account_details developer docs} for information on attributes
     */
    class VenmoAccountDetails extends \Braintree\Instance
    {
        protected $_attributes = array();
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * SamsungPayCard details from a transaction
     * creates an instance of SamsungPayCardDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#samsung_pay_card_details developer docs} for information on attributes
     */
    class SamsungPayCardDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * US Bank Account details from a transaction
     * creates an instance of UsbankAccountDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/guides/ach/server-side developer docs} for more information
     */
    class UsBankAccountDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * CreditCard details from a transaction
     * creates an instance of CreditCardDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#credit_card_details developer docs} for information on attributes
     */
    class CreditCardDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * Customer details from a transaction
     * Creates an instance of customer details as returned from a transaction
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#customer_details developer docs} for information on attributes
     */
    class CustomerDetails extends \Braintree\Instance
    {
    }
    /**
     * Creates an instance of AddressDetails as returned from a transaction
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction developer docs} for information on attributes
     */
    class AddressDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
    }
    /**
     * Local payment details from a transaction
     */
    /**
     * creates an instance of LocalPaymentDetails
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction developer docs} for information on attributes
     */
    class LocalPaymentDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
}
namespace Braintree {
    /**
     * Braintree FacilitatorDetails class
     *
     * If a transaction request was performed using payment information from a third party via the Grant API, Shared Vault or Google Pay, thise object will have information about the third party. These fields are primarily useful for the merchant of record.
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction/#facilitator_details developer docs} for information on attributes
     */
    class FacilitatorDetails extends \Braintree\Base
    {
        /**
         * Creates an instance of an FacilitatorDetails from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return FacilitatorDetails
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
    * Braintree Transaction processor creates and manages transactions
    *
    * At minimum, an amount, credit card number, and
    * credit card expiration date are required.
    *
    * <b>Minimalistic example:</b>
    * <code>
    * Transaction::saleNoValidate(array(
    *   'amount' => '100.00',
    *   'creditCard' => array(
    *       'number' => '5105105105105100',
    *       'expirationDate' => '05/12',
    *       ),
    *   ));
    * </code>
    *
    * <b>Full example:</b>
    * <code>
    * Transaction::saleNoValidate(array(
    *    'amount'      => '100.00',
    *    'orderId'    => '123',
    *    'channel'    => 'MyShoppingCardProvider',
    *    'creditCard' => array(
    *         // if token is omitted, the gateway will generate a token
    *         'token' => 'credit_card_123',
    *         'number' => '5105105105105100',
    *         'expirationDate' => '05/2011',
    *         'cvv' => '123',
    *    ),
    *    'customer' => array(
    *     // if id is omitted, the gateway will generate an id
    *     'id'    => 'customer_123',
    *     'firstName' => 'Dan',
    *     'lastName' => 'Smith',
    *     'company' => 'Braintree',
    *     'email' => 'dan@example.com',
    *     'phone' => '419-555-1234',
    *     'fax' => '419-555-1235',
    *     'website' => 'http://braintreepayments.com'
    *    ),
    *    'billing'    => array(
    *      'firstName' => 'Carl',
    *      'lastName'  => 'Jones',
    *      'company'    => 'Braintree',
    *      'streetAddress' => '123 E Main St',
    *      'extendedAddress' => 'Suite 403',
    *      'locality' => 'Chicago',
    *      'region' => 'IL',
    *      'postalCode' => '60622',
    *      'countryName' => 'United States of America'
    *    ),
    *    'shipping' => array(
    *      'firstName'    => 'Andrew',
    *      'lastName'    => 'Mason',
    *      'company'    => 'Braintree',
    *      'streetAddress'    => '456 W Main St',
    *      'extendedAddress'    => 'Apt 2F',
    *      'locality'    => 'Bartlett',
    *      'region'    => 'IL',
    *      'postalCode'    => '60103',
    *      'countryName'    => 'United States of America'
    *    ),
    *    'customFields'    => array(
    *      'birthdate'    => '11/13/1954'
    *    )
    *  )
    * </code>
    *
    * <b>== Storing in the Vault ==</b>
    *
    * The customer and credit card information used for
    * a transaction can be stored in the vault by setting
    * <i>transaction[options][storeInVault]</i> to true.
    * <code>
    *   $transaction = Transaction::saleNoValidate(array(
    *     'customer' => array(
    *       'firstName'    => 'Adam',
    *       'lastName'    => 'Williams'
    *     ),
    *     'creditCard'    => array(
    *       'number'    => '5105105105105100',
    *       'expirationDate'    => '05/2012'
    *     ),
    *     'options'    => array(
    *       'storeInVault'    => true
    *     )
    *   ));
    *
    *  echo $transaction->customerDetails->id
    *  // '865534'
    *  echo $transaction->creditCardDetails->token
    *  // '6b6m'
    * </code>
    *
    * To also store the billing address in the vault, pass the
    * <b>addBillingAddressToPaymentMethod</b> option.
    * <code>
    *   Transaction.saleNoValidate(array(
    *    ...
    *     'options' => array(
    *       'storeInVault' => true
    *       'addBillingAddressToPaymentMethod' => true
    *     )
    *   ));
    * </code>
    *
    * <b>== Submitting for Settlement==</b>
    *
    * This can only be done when the transction's
    * status is <b>authorized</b>. If <b>amount</b> is not specified,
    * the full authorized amount will be settled. If you would like to settle
    * less than the full authorized amount, pass the desired amount.
    * You cannot settle more than the authorized amount.
    *
    * A transaction can be submitted for settlement when created by setting
    * $transaction[options][submitForSettlement] to true.
    *
    * <code>
    *   $transaction = Transaction::saleNoValidate(array(
    *     'amount'    => '100.00',
    *     'creditCard'    => array(
    *       'number'    => '5105105105105100',
    *       'expirationDate'    => '05/2012'
    *     ),
    *     'options'    => array(
    *       'submitForSettlement'    => true
    *     )
    *   ));
    * </code>
    *
    * For more detailed information on Transactions, see {@link https://developer.paypal.com/braintree/docs/reference/response/transaction our developer docs}
    // phpcs:enable Generic.Files.LineLength
    */
    class Transaction extends \Braintree\Base
    {
        // Transaction Status
        const AUTHORIZATION_EXPIRED = 'authorization_expired';
        const AUTHORIZING = 'authorizing';
        const AUTHORIZED = 'authorized';
        const GATEWAY_REJECTED = 'gateway_rejected';
        const FAILED = 'failed';
        const PROCESSOR_DECLINED = 'processor_declined';
        const SETTLED = 'settled';
        const SETTLING = 'settling';
        const SUBMITTED_FOR_SETTLEMENT = 'submitted_for_settlement';
        const VOIDED = 'voided';
        const UNRECOGNIZED = 'unrecognized';
        const SETTLEMENT_DECLINED = 'settlement_declined';
        const SETTLEMENT_PENDING = 'settlement_pending';
        const SETTLEMENT_CONFIRMED = 'settlement_confirmed';
        // Transaction Escrow Status
        const ESCROW_HOLD_PENDING = 'hold_pending';
        const ESCROW_HELD = 'held';
        const ESCROW_RELEASE_PENDING = 'release_pending';
        const ESCROW_RELEASED = 'released';
        const ESCROW_REFUNDED = 'refunded';
        // Transaction Types
        const SALE = 'sale';
        const CREDIT = 'credit';
        // Transaction Created Using
        const FULL_INFORMATION = 'full_information';
        const TOKEN = 'token';
        // Transaction Sources
        const API = 'api';
        const CONTROL_PANEL = 'control_panel';
        const RECURRING = 'recurring';
        // Gateway Rejection Reason
        const AVS = 'avs';
        const AVS_AND_CVV = 'avs_and_cvv';
        const CVV = 'cvv';
        const DUPLICATE = 'duplicate';
        const FRAUD = 'fraud';
        const RISK_THRESHOLD = 'risk_threshold';
        const THREE_D_SECURE = 'three_d_secure';
        const TOKEN_ISSUANCE = 'token_issuance';
        const APPLICATION_INCOMPLETE = 'application_incomplete';
        // Industry Types
        const LODGING_INDUSTRY = 'lodging';
        const TRAVEL_AND_CRUISE_INDUSTRY = 'travel_cruise';
        const TRAVEL_AND_FLIGHT_INDUSTRY = 'travel_flight';
        // Additional Charge Types
        const RESTAURANT = 'lodging';
        const GIFT_SHOP = 'gift_shop';
        const MINI_BAR = 'mini_bar';
        const TELEPHONE = 'telephone';
        const LAUNDRY = 'laundry';
        const OTHER = 'other';
        /**
         * sets instance properties from an array of values
         *
         * @param array $transactionAttribs array of transaction data
         *
         * @return void
         */
        protected function _initialize($transactionAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /*
         * Checks if one transaction's ID is the same as another transaction's Id.
         *
         * @param string $otherTx to be compared
         *
         * @return bool
         */
        public function isEqual($otherTx)
        {
        }
        //NEXT_MAJOR_VERSION this function is only used for tests, the assertions this function provides are obfuscated.
        //We should remove this function and update the tests to be more clear in what we're asserting.
        public function vaultCreditCard()
        {
        }
        //NEXT_MAJOR_VERSION this function is only used for tests, the assertions this function provides are obfuscated.
        //We should remove this function and update the tests to be more clear in what we're asserting.
        public function vaultCustomer()
        {
        }
        /**
         * Checks if transactions is disbursed
         *
         * @return boolean
         */
        public function isDisbursed()
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @see TransactionLineItemGateway::findAll()
         *
         * @return ResourceCollection of TransactionLineItem objects
         */
        public function lineItems()
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Transaction
         */
        public static function factory($attributes)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unique identifier
         * @param string $amount        to be adjusted
         *
         * @see TransactionGateway::adjustAuthorization()
         *
         * @return Transction|Result\Error
         */
        public static function adjustAuthorization($transactionId, $amount)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId to be cloned
         * @param mixed  $attribs       containing any additional request parameters
         *
         * @see TransactionGateway::cloneTransaction()
         *
         * @return Transction|Result\Error
         */
        public static function cloneTransaction($transactionId, $attribs)
        {
        }
        //NEXT_MAJOR_VERSION remove this function, it was only used for a Transparent Redirect test that no longer exists
        public static function createTransactionUrl()
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param mixed $attribs containing any request parameters
         *
         * @see TransactionGateway::credit()
         *
         * @return Result\Successful|Result\Error
         */
        public static function credit($attribs)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param mixed $attribs containing any request parameters
         *
         * @see TransactionGateway::creditNoValidate()
         *
         * @return Transaction|Result\Error
         */
        public static function creditNoValidate($attribs)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param mixed $id unique identifier of the transaction to find
         *
         * @see TransactionGateway::find()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function find($id)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param mixed $attribs containing any request parameters
         *
         * @see TransactionGateway::sale()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function sale($attribs)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param mixed $attribs containing any request parameters
         *
         * @see TransactionGateway::saleNoValidate()
         *
         * @return Transaction|Result\Error
         */
        public static function saleNoValidate($attribs)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param mixed $query containing search fields
         *
         * @see TransactionGateway::search()
         *
         * @return ResourceCollection of Transaction objects
         */
        public static function search($query)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param mixed $query of search fields
         * @param array $ids to be fetched
         *
         * @see TransactionGateway::fetch()
         *
         * @return ResourceCollection of Transaction objects
         */
        public static function fetch($query, $ids)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be voided
         *
         * @see TransactionGateway::void()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function void($transactionId)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be voided
         *
         * @see TransactionGateway::voidNoValidate()
         *
         * @return Transaction|Result\Error
         */
        public static function voidNoValidate($transactionId)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be submitted for settlement
         * @param string $amount        optional
         * @param mixed  $attribs       any additional request parameters
         *
         * @see TransactionGateway::submitForSettlement()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function submitForSettlement($transactionId, $amount = null, $attribs = [])
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be submitted for settlement
         * @param string $amount        optional
         * @param mixed  $attribs       any additional request parameters
         *
         * @see TransactionGateway::submitForSettlement()
         *
         * @return Transaction|Result\Error
         */
        public static function submitForSettlementNoValidate($transactionId, $amount = null, $attribs = [])
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId to be updated
         * @param array  $attribs       attributes to be updated in the request
         *
         * @see TransactionGateway::updateDetails()
         *
         * @return Result\Successful|Result\Error
         */
        public static function updateDetails($transactionId, $attribs = [])
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be submitted for settlement
         * @param string $amount        optional
         * @param mixed  $attribs       any additional request parameters
         *
         * @see TransactionGateway::submitForPartialSettlement()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function submitForPartialSettlement($transactionId, $amount, $attribs = [])
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be held in escrow
         *
         * @see TransactionGateway::holdInEscrow()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function holdInEscrow($transactionId)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be released from escrow
         *
         * @see TransactionGateway::releaseFromEscrow()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function releaseFromEscrow($transactionId)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction whose escrow release is to be canceled
         *
         * @see TransactionGateway::cancelRelease()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function cancelRelease($transactionId)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $transactionId unque identifier of the transaction to be refunded
         * @param string $amount        to be refunded, optional
         *
         * @see TransactionGateway::refund()
         *
         * @return Result\Successful|Exception\NotFound
         */
        public static function refund($transactionId, $amount = null)
        {
        }
    }
    class WebhookTesting
    {
        public static function sampleNotification($kind, $id, $sourceMerchantId = null)
        {
        }
    }
    /**
     * Braintree PaymentMethodNonceGateway module
     */
    class PaymentMethodNonceGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Create a payment method nonce from an existing payment method's token
         *
         * @param string     $token  the identifier of the payment method
         * @param mixed|null $params additional parameters to be included in the request
         *
         * @return PaymentMethodNonce|Error
         */
        public function create($token, $params = [])
        {
        }
        /**
         * Find a Payment Method Nonce given the string value
         *
         * @param string $nonce to be found
         *
         * @throws NotFound
         *
         * @return PaymentMethodNonce
         */
        public function find($nonce)
        {
        }
    }
    /**
     * Braintree VenmoAccount module
     * Creates and manages Braintree Venmo accounts
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/venmo-account developer docs} for information on attributes
     */
    class VenmoAccount extends \Braintree\Base
    {
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return VenmoAccount
         */
        public static function factory($attributes)
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $venmoAccountAttribs array of Venmo account properties
         *
         * @return void
         */
        protected function _initialize($venmoAccountAttribs)
        {
        }
    }
    /**
     * Creates an instance of Dispute as returned from a transaction
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/dispute developer docs} for information on attributes
     */
    class Dispute extends \Braintree\Base
    {
        protected $_attributes = [];
        /* Dispute Status */
        const ACCEPTED = 'accepted';
        const DISPUTED = 'disputed';
        const EXPIRED = 'expired';
        const OPEN = 'open';
        const WON = 'won';
        const LOST = 'lost';
        /* Dispute Reason */
        const CANCELLED_RECURRING_TRANSACTION = "cancelled_recurring_transaction";
        const CREDIT_NOT_PROCESSED = "credit_not_processed";
        const DUPLICATE = "duplicate";
        const FRAUD = "fraud";
        const GENERAL = "general";
        const INVALID_ACCOUNT = "invalid_account";
        const NOT_RECOGNIZED = "not_recognized";
        const PRODUCT_NOT_RECEIVED = "product_not_received";
        const PRODUCT_UNSATISFACTORY = "product_unsatisfactory";
        const TRANSACTION_AMOUNT_DIFFERS = "transaction_amount_differs";
        const RETRIEVAL = "retrieval";
        /* Dispute ChargebackProtectionLevel */
        const EFFORTLESS = 'effortless';
        const STANDARD = 'standard';
        const NOT_PROTECTED = 'not_protected';
        /* Dispute Kind */
        const CHARGEBACK = 'chargeback';
        const PRE_ARBITRATION = 'pre_arbitration';
        // RETRIEVAL for kind already defined under Dispute Reason
        protected function _initialize($disputeAttribs)
        {
        }
        /**
         * Creates an instance of a Dispute from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Dispute
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $id unique identifier
         *
         * @see DisputeGateway::accept()
         *
         * @return Result\Successful|Result\Error
         */
        public static function accept($id)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string        $disputeId           unique identifier
         * @param string|object $documentIdOrRequest either a unique identifier string or request object
         *
         * @see DisputeGateway::addFileEvidence()
         *
         * @return Result\Successful|Result\Error
         */
        public static function addFileEvidence($disputeId, $documentIdOrRequest)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string       $id               unique identifier
         * @param string|mixed $contentOrRequest If a string, $contentOrRequest is the text-based content
         *                                       for the dispute evidence.
         *                                       Alternatively, the second argument can also be an array containing:
         *                                       - string $content The text-based content for the dispute evidence, and
         *                                       - string $category The category for this piece of evidence
         *                                       Note: (optional) string $tag parameter is deprecated, use $category instead.
         *
         * @see DisputeGateway::addTextEvidence()
         *
         * @return Result\Successful|Result\Error
         */
        public static function addTextEvidence($id, $contentOrRequest)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $id unique identifier
         *
         * @see DisputeGateway::finalize()
         *
         * @return Result\Successful|Result\Error
         */
        public static function finalize($id)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $id unique identifier
         *
         * @see DisputeGateway::find()
         *
         * @return Result\Successful|Result\Error
         */
        public static function find($id)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $disputeId  unique identifier
         * @param string $evidenceId unique identifier
         *
         * @see DisputeGateway::removeEvidence()
         *
         * @return Result\Successful|Result\Error
         */
        public static function removeEvidence($disputeId, $evidenceId)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param DisputeSearch $query
         *
         * @see DisputeGateway::search()
         *
         * @return ResourceCollection|Result\Error
         */
        public static function search($query)
        {
        }
        /*
         * Retrive all types of chargeback protection level types
         *
         * @return array
         */
        public static function allChargebackProtectionLevelTypes()
        {
        }
    }
    /**
     * Class for running dispute searches
     */
    class DisputeSearch
    {
        /*
         * Create a new range node for amount disputed
         *
         * @return RangeNode
         */
        public static function amountDisputed()
        {
        }
        /*
         * Create a new range node for amount won
         *
         * @return RangeNode
         */
        public static function amountWon()
        {
        }
        /*
         * Create a new text node for case number
         *
         * @return TextNode
         */
        public static function caseNumber()
        {
        }
        /*
         * Create a new text node for id
         *
         * @return TextNode
         */
        public static function id()
        {
        }
        /*
         * Create a new text node for customer id
         *
         * @return TextNode
         */
        public static function customerId()
        {
        }
        /*
         * Create a new multiple value node for kind
         *
         * @return MultipleValueNode
         */
        public static function kind()
        {
        }
        /*
         * Create a new multiple value node for merchant account id
         *
         * @return MultipleValueNode
         */
        public static function merchantAccountId()
        {
        }
        /*
         * Create a new multiple value node for reason
         *
         * @return MultipleValueNode
         */
        public static function reason()
        {
        }
        /*
         * Create a new multiple value node for reason code
         *
         * @return MultipleValueNode
         */
        public static function reasonCode()
        {
        }
        /*
         * Create a new range node for received date
         *
         * @return RangeNode
         */
        public static function receivedDate()
        {
        }
        /*
         * Create a new range node for disbursement date
         *
         * @return RangeNode
         */
        public static function disbursementDate()
        {
        }
        /*
         * Create a new range node for effective date
         *
         * @return RangeNode
         */
        public static function effectiveDate()
        {
        }
        /*
         * Create a new text node for reference number
         *
         * @return TextNode
         */
        public static function referenceNumber()
        {
        }
        /*
         * Create a new range node for reply by date
         *
         * @return RangeNode
         */
        public static function replyByDate()
        {
        }
        /*
         * Create a new multiple value node for status
         *
         * @return MultipleValueNode
         */
        public static function status()
        {
        }
        /*
         * Create a new multiple value node for chargeback protection level
         *
         * @return MultipleValueNode
         */
        public static function chargebackProtectionLevel()
        {
        }
        /*
         * Create a new text node for transaction id
         *
         * @return TextNode
         */
        public static function transactionId()
        {
        }
        /*
         * Create a new multiple value node for transaction source
         *
         * @return MultipleValueNode
         */
        public static function transactionSource()
        {
        }
    }
    /**
     * Braintree VenmoProfileData module
     */
    class VenmoProfileData extends \Braintree\Base
    {
        /**
         *  factory method: returns an instance of VenmoProfileData
         *  to the requesting method, with populated properties
         *
         * @param array $attributes to be used in creating the object
         *
         * @return VenmoProfileData
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($venmoProfileDataAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintre ClientToken create and manage client tokens for authorization
     */
    class ClientToken
    {
        const DEFAULT_VERSION = 2;
        /**
         * static method redirecting to gateway class
         *
         * @param array $params to be supplied in api request
         *
         * @see ClientTokenGateway::generate()
         *
         * @return string
         */
        public static function generate($params = [])
        {
        }
        /*
         * static method redirecting to gateway class
         *
         * @param array $params to be verified
         *
         * @see ClientTokenGateway::conditionallyVerifyKeys()
         *
         * @return array
         */
        public static function conditionallyVerifyKeys($params)
        {
        }
        /*
         * static method redirecting to gateway class
         *
         * @see ClientTokenGateway::generateWithCustomerIdSignature()
         *
         * @return array
         *
         */
        public static function generateWithCustomerIdSignature()
        {
        }
        /*
         * static method redirecting to gateway class
         *
         * @see ClientTokenGateway::generateWithoutCustomerIdSignature()
         *
         * @return array
         */
        public static function generateWithoutCustomerIdSignature()
        {
        }
    }
    /**
     * Braintree Generic collection
     *
     * Based on Generic Collection class from:
     * {@link http://codeutopia.net/code/library/CU/Collection.php}
     */
    class Collection implements \Countable, \IteratorAggregate, \ArrayAccess
    {
        protected $_collection = [];
        /**
         * Add a value into the collection
         *
         * @param string $value to be added
         *
         * @return mixed
         */
        public function add($value)
        {
        }
        /**
         * Set index's value
         *
         * @param integer $index thats being set
         * @param mixed   $value to set at the index
         *
         * @throws OutOfRangeException
         *
         * @return mixed
         */
        public function set($index, $value)
        {
        }
        /**
         * Remove a value from the collection
         *
         * @param integer $index index to remove
         *
         * @throws OutOfRangeException if index is out of range
         *
         * @return mixed
         */
        public function remove($index)
        {
        }
        /**
         * Return value at index
         *
         * @param integer $index of value to be retrieved
         *
         * @throws OutOfRangeException
         *
         * @return mixed
         */
        public function get($index)
        {
        }
        /**
         * Determine if index exists
         *
         * @param integer $index to check for existence
         *
         * @return boolean
         */
        public function exists($index)
        {
        }
        /**
         * Return count of items in collection
         * Implements countable
         *
         * @return integer
         */
        #[\ReturnTypeWillChange]
        public function count()
        {
        }
        /**
         * Return an iterator
         * Implements IteratorAggregate
         *
         * @return ArrayIterator
         */
        #[\ReturnTypeWillChange]
        public function getIterator()
        {
        }
        /**
         * Set offset to value
         * Implements ArrayAccess
         *
         * @param integer $offset
         * @param mixed   $value
         *
         * @see set
         *
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $value)
        {
        }
        /**
         * Unset offset
         * Implements ArrayAccess
         *
         * @param integer $offset
         *
         * @see remove
         *
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset)
        {
        }
        /**
         * get an offset's value
         * Implements ArrayAccess
         *
         * @param integer $offset
         *
         * @see get
         *
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /**
         * Determine if offset exists
         * Implements ArrayAccess
         *
         * @param integer $offset
         *
         * @see exists
         *
         * @return boolean
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset)
        {
        }
    }
    /**
     * Braintree AddressGateway module
     * Creates and manages Braintree Addresses
     *
     * An Address belongs to a Customer. It can be associated to a
     * CreditCard as the billing address. It can also be used
     * as the shipping address when creating a Transaction.
     */
    class AddressGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Create an Address
         *
         * @param array $attribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function create($attribs)
        {
        }
        /**
         * attempts the create operation assuming all data will validate
         * returns a Address object instead of a Result
         *
         * @param array $attribs containing request parameters
         *
         * @throws Exception\ValidationError
         *
         * @return Address
         */
        public function createNoValidate($attribs)
        {
        }
        /**
         * delete an address by id
         *
         * @param mixed  $customerOrId either a customer object or string ID of customer
         * @param string $addressId    optional unique identifier
         *
         * @return Result\Successful|Result\Error
         */
        public function delete($customerOrId = null, $addressId = null)
        {
        }
        /**
         * find an address by id
         *
         * Finds the address with the given <b>addressId</b> that is associated
         * to the given <b>customerOrId</b>.
         * If the address cannot be found, a NotFound exception will be thrown.
         *
         * @param mixed  $customerOrId either a customer object or string ID of customer
         * @param string $addressId    optional unique identifier
         *
         * @throws Exception\NotFound
         *
         * @return Address
         */
        public function find($customerOrId, $addressId)
        {
        }
        /**
         * updates the address record
         *
         * if calling this method in context,
         * customerOrId is the 2nd attribute, addressId 3rd.
         * customerOrId & addressId are not sent in object context.
         *
         * @param mixed  $customerOrId (only used in call)
         * @param string $addressId    (only used in call)
         * @param array  $attributes   containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function update($customerOrId, $addressId, $attributes)
        {
        }
        /**
         * update an address record, assuming validations will pass
         *
         * if calling this method in context,
         * customerOrId is the 2nd attribute, addressId 3rd.
         * customerOrId & addressId are not sent in object context.
         *
         * @param mixed  $customerOrId (only used in call)
         * @param string $addressId    (only used in call)
         * @param array  $attributes   containing request parameters
         *
         * @throws Exception\ValidationsFailed
         *
         * @see Address::update()
         *
         * @return Address
         */
        public function updateNoValidate($customerOrId, $addressId, $attributes)
        {
        }
        /**
         * creates a full array signature of a valid create request
         *
         * @return array gateway create request format
         */
        public static function createSignature()
        {
        }
        /**
         * creates a full array signature of a valid update request
         *
         * @return array gateway update request format
         */
        public static function updateSignature()
        {
        }
        /**
         * verifies that a valid address id is being used
         *
         * @param string $id address id
         *
         * @throws InvalidArgumentException
         *
         * @return self
         */
        private function _validateId($id = null)
        {
        }
        /**
         * verifies that a valid customer id is being used
         *
         * @param string $id customer id
         *
         * @throws InvalidArgumentException
         *
         * @return self
         */
        private function _validateCustomerId($id = null)
        {
        }
        /**
         * determines if a string id or Customer object was passed
         *
         * @param mixed $customerOrId either a customer object or string unique identifier
         *
         * @return string customerId
         */
        private function _determineCustomerId($customerOrId)
        {
        }
        private function _doCreate($subPath, $params)
        {
        }
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Braintree OAuthCredentials module
     */
    class OAuthResult extends \Braintree\Base
    {
        protected function _initialize($attribs)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return OAuthResult
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree VisaCheckoutCard module
     * Creates and manages Braintree VisaCheckoutCards
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/visa-checkout-card developer docs} for information on attributes
     */
    class VisaCheckoutCard extends \Braintree\Base
    {
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * checks whether the card is expired based on the current date
         *
         * @return boolean
         */
        public function isExpired()
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $creditCardAttribs array of creditcard data
         *
         * @return void
         */
        protected function _initialize($creditCardAttribs)
        {
        }
        private function _compareCreatedAtOnVerifications($verificationAttrib1, $verificationAttrib2)
        {
        }
        /**
         * returns false if comparing object is not a VisaCheckoutCard,
         * or is a VisaCheckoutCard with a different id
         *
         * @param object $otherVisaCheckoutCard customer to compare against
         *
         * @return boolean
         */
        public function isEqual($otherVisaCheckoutCard)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return VisaCheckoutCard
         */
        public static function factory($attributes)
        {
        }
    }
}
namespace Braintree\Error {
    /**
     * error object returned as part of a validation error collection
     * provides read-only access to $attribute, $code, and $message
     *
     * <b>== More information ==</b>
     *
     * // phpcs:ignore Generic.Files.LineLength
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/result-objects#error-results developer docs} for more information
     */
    class Validation
    {
        private $_attribute;
        private $_code;
        private $_message;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        private function _initializeFromArray($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __get($name)
        {
        }
    }
    /**
     * Validation Error codes and messages
     *
     * ErrorCodes class provides constants for validation errors.
     * The constants should be used to check for a specific validation
     * error in a ValidationErrorCollection.
     * The error messages returned from the server may change;
     * but the codes will remain the same.
     */
    class Codes
    {
        // phpcs:disable Generic.Files.LineLength
        const ADDRESS_CANNOT_BE_BLANK = '81801';
        const ADDRESS_COMPANY_IS_INVALID = '91821';
        const ADDRESS_COMPANY_IS_TOO_LONG = '81802';
        const ADDRESS_COUNTRY_CODE_ALPHA2_IS_NOT_ACCEPTED = '91814';
        const ADDRESS_COUNTRY_CODE_ALPHA3_IS_NOT_ACCEPTED = '91816';
        const ADDRESS_COUNTRY_CODE_NUMERIC_IS_NOT_ACCEPTED = '91817';
        const ADDRESS_COUNTRY_NAME_IS_NOT_ACCEPTED = '91803';
        const ADDRESS_EXTENDED_ADDRESS_IS_INVALID = '91823';
        const ADDRESS_EXTENDED_ADDRESS_IS_TOO_LONG = '81804';
        const ADDRESS_FIRST_NAME_IS_INVALID = '91819';
        const ADDRESS_FIRST_NAME_IS_TOO_LONG = '81805';
        const ADDRESS_INCONSISTENT_COUNTRY = '91815';
        const ADDRESS_LAST_NAME_IS_INVALID = '91820';
        const ADDRESS_LAST_NAME_IS_TOO_LONG = '81806';
        const ADDRESS_LOCALITY_IS_INVALID = '91824';
        const ADDRESS_LOCALITY_IS_TOO_LONG = '81807';
        const ADDRESS_POSTAL_CODE_INVALID_CHARACTERS = '81813';
        const ADDRESS_POSTAL_CODE_IS_INVALID = '91826';
        const ADDRESS_POSTAL_CODE_IS_REQUIRED = '81808';
        const ADDRESS_POSTAL_CODE_IS_REQUIRED_FOR_CARD_BRAND_AND_PROCESSOR = '81828';
        const ADDRESS_POSTAL_CODE_IS_TOO_LONG = '81809';
        const ADDRESS_REGION_IS_INVALID = '91825';
        const ADDRESS_REGION_IS_TOO_LONG = '81810';
        const ADDRESS_STATE_IS_INVALID_FOR_SELLER_PROTECTION = '81827';
        const ADDRESS_STREET_ADDRESS_IS_INVALID = '91822';
        const ADDRESS_STREET_ADDRESS_IS_REQUIRED = '81811';
        const ADDRESS_STREET_ADDRESS_IS_TOO_LONG = '81812';
        const ADDRESS_TOO_MANY_ADDRESSES_PER_CUSTOMER = '91818';
        const ADJUSTMENT_AMOUNT_MUST_BE_GREATER_THAN_ZERO = '95605';
        const APPLE_PAY_CARDS_ARE_NOT_ACCEPTED = '83501';
        const APPLE_PAY_CUSTOMER_ID_IS_REQUIRED_FOR_VAULTING = '83502';
        const APPLE_PAY_TOKEN_IS_IN_USE = '93503';
        const APPLE_PAY_PAYMENT_METHOD_NONCE_CONSUMED = '93504';
        const APPLE_PAY_PAYMENT_METHOD_NONCE_UNKNOWN = '93505';
        const APPLE_PAY_PAYMENT_METHOD_NONCE_UNLOCKED = '93506';
        const APPLE_PAY_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED = '83518';
        const APPLE_PAY_CANNOT_UPDATE_APPLE_PAY_CARD_USING_PAYMENT_METHOD_NONCE = '93507';
        const APPLE_PAY_NUMBER_IS_REQUIRED = '93508';
        const APPLE_PAY_EXPIRATION_MONTH_IS_REQUIRED = '93509';
        const APPLE_PAY_EXPIRATION_YEAR_IS_REQUIRED = '93510';
        const APPLE_PAY_CRYPTOGRAM_IS_REQUIRED = '93511';
        const APPLE_PAY_DECRYPTION_FAILED = '83512';
        const APPLE_PAY_DISABLED = '93513';
        const APPLE_PAY_MERCHANT_NOT_CONFIGURED = '93514';
        const APPLE_PAY_MERCHANT_KEYS_ALREADY_CONFIGURED = '93515';
        const APPLE_PAY_MERCHANT_KEYS_NOT_CONFIGURED = '93516';
        const APPLE_PAY_CERTIFICATE_INVALID = '93517';
        const APPLE_PAY_CERTIFICATE_MISMATCH = '93519';
        const APPLE_PAY_INVALID_TOKEN = '83520';
        const APPLE_PAY_PRIVATE_KEY_MISMATCH = '93521';
        const APPLE_PAY_KEY_MISMATCH_STORING_CERTIFICATE = '93522';
        const AUTHORIZATION_FINGERPRINT_INVALID_CREATED_AT = '93204';
        const AUTHORIZATION_FINGERPRINT_INVALID_FORMAT = '93202';
        const AUTHORIZATION_FINGERPRINT_INVALID_PUBLIC_KEY = '93205';
        const AUTHORIZATION_FINGERPRINT_INVALID_SIGNATURE = '93206';
        const AUTHORIZATION_FINGERPRINT_MISSING_FINGERPRINT = '93201';
        const AUTHORIZATION_FINGERPRINT_OPTIONS_NOT_ALLOWED_WITHOUT_CUSTOMER = '93207';
        const AUTHORIZATION_FINGERPRINT_SIGNATURE_REVOKED = '93203';
        const CLIENT_TOKEN_CUSTOMER_DOES_NOT_EXIST = '92804';
        const CLIENT_TOKEN_FAIL_ON_DUPLICATE_PAYMENT_METHOD_REQUIRES_CUSTOMER_ID = '92803';
        const CLIENT_TOKEN_MAKE_DEFAULT_REQUIRES_CUSTOMER_ID = '92801';
        const CLIENT_TOKEN_PROXY_MERCHANT_DOES_NOT_EXIST = '92805';
        const CLIENT_TOKEN_UNSUPPORTED_VERSION = '92806';
        const CLIENT_TOKEN_VERIFY_CARD_REQUIRES_CUSTOMER_ID = '92802';
        const CLIENT_TOKEN_MERCHANT_ACCOUNT_DOES_NOT_EXIST = '92807';
        const CREDIT_CARD_BILLING_ADDRESS_CONFLICT = '91701';
        const CREDIT_CARD_BILLING_ADDRESS_FORMAT_IS_INVALID = '91744';
        const CREDIT_CARD_BILLING_ADDRESS_ID_IS_INVALID = '91702';
        const CREDIT_CARD_CANNOT_UPDATE_CARD_USING_PAYMENT_METHOD_NONCE = '91735';
        const CREDIT_CARD_CARDHOLDER_NAME_IS_TOO_LONG = '81723';
        const CREDIT_CARD_CREDIT_CARD_TYPE_IS_NOT_ACCEPTED = '81703';
        const CREDIT_CARD_CREDIT_CARD_TYPE_IS_NOT_ACCEPTED_BY_SUBSCRIPTION_MERCHANT_ACCOUNT = '81718';
        const CREDIT_CARD_CUSTOMER_ID_IS_INVALID = '91705';
        const CREDIT_CARD_CUSTOMER_ID_IS_REQUIRED = '91704';
        const CREDIT_CARD_CVV_IS_INVALID = '81707';
        const CREDIT_CARD_CVV_IS_REQUIRED = '81706';
        const CREDIT_CARD_CVV_VERIFICATION_FAILED = '81736';
        const CREDIT_CARD_DUPLICATE_CARD_EXISTS = '81724';
        const CREDIT_CARD_EXPIRATION_DATE_CONFLICT = '91708';
        const CREDIT_CARD_EXPIRATION_DATE_IS_INVALID = '81710';
        const CREDIT_CARD_EXPIRATION_DATE_IS_REQUIRED = '81709';
        const CREDIT_CARD_EXPIRATION_DATE_YEAR_IS_INVALID = '81711';
        const CREDIT_CARD_EXPIRATION_MONTH_IS_INVALID = '81712';
        const CREDIT_CARD_EXPIRATION_YEAR_IS_INVALID = '81713';
        const CREDIT_CARD_INVALID_PARAMS_FOR_CREDIT_CARD_UPDATE = '91745';
        const CREDIT_CARD_INVALID_VENMO_SDK_PAYMENT_METHOD_CODE = '91727';
        const CREDIT_CARD_NUMBER_INVALID_LENGTH = '81716';
        const CREDIT_CARD_NUMBER_IS_INVALID = '81715';
        const CREDIT_CARD_NUMBER_IS_PROHIBITED = '81750';
        const CREDIT_CARD_NUMBER_IS_REQUIRED = '81714';
        const CREDIT_CARD_NUMBER_LENGTH_IS_INVALID = '81716';
        const CREDIT_CARD_NUMBER_MUST_BE_TEST_NUMBER = '81717';
        const CREDIT_CARD_OPTIONS_UPDATE_EXISTING_TOKEN_IS_INVALID = '91723';
        const CREDIT_CARD_OPTIONS_UPDATE_EXISTING_TOKEN_NOT_ALLOWED = '91729';
        const CREDIT_CARD_OPTIONS_VERIFICATION_AMOUNT_CANNOT_BE_NEGATIVE = '91739';
        const CREDIT_CARD_OPTIONS_VERIFICATION_AMOUNT_FORMAT_IS_INVALID = '91740';
        const CREDIT_CARD_OPTIONS_VERIFICATION_AMOUNT_IS_TOO_LARGE = '91752';
        const CREDIT_CARD_OPTIONS_VERIFICATION_AMOUNT_NOT_SUPPORTED_BY_PROCESSOR = '91741';
        const CREDIT_CARD_OPTIONS_VERIFICATION_MERCHANT_ACCOUNT_ID_IS_INVALID = '91728';
        const CREDIT_CARD_OPTIONS_VERIFICATION_MERCHANT_ACCOUNT_IS_FORBIDDEN = '91743';
        const CREDIT_CARD_OPTIONS_VERIFICATION_MERCHANT_ACCOUNT_IS_SUSPENDED = '91742';
        const CREDIT_CARD_OPTIONS_VERIFICATION_MERCHANT_ACCOUNT_CANNOT_BE_SUB_MERCHANT_ACCOUNT = '91755';
        const CREDIT_CARD_OPTIONS_VERIFICATION_ACCOUNT_TYPE_IS_INVALID = '91757';
        const CREDIT_CARD_OPTIONS_VERIFICATION_ACCOUNT_TYPE_NOT_SUPPORTED = '91758';
        const CREDIT_CARD_PAYMENT_METHOD_CONFLICT = '81725';
        const CREDIT_CARD_PAYMENT_METHOD_IS_NOT_A_CREDIT_CARD = '91738';
        const CREDIT_CARD_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED = '91734';
        const CREDIT_CARD_PAYMENT_METHOD_NONCE_CONSUMED = '91731';
        const CREDIT_CARD_PAYMENT_METHOD_NONCE_LOCKED = '91733';
        const CREDIT_CARD_PAYMENT_METHOD_NONCE_UNKNOWN = '91732';
        const CREDIT_CARD_POSTAL_CODE_VERIFICATION_FAILED = '81737';
        const CREDIT_CARD_TOKEN_FORMAT_IS_INVALID = '91718';
        const CREDIT_CARD_TOKEN_INVALID = '91718';
        const CREDIT_CARD_TOKEN_IS_IN_USE = '91719';
        const CREDIT_CARD_TOKEN_IS_NOT_ALLOWED = '91721';
        const CREDIT_CARD_TOKEN_IS_REQUIRED = '91722';
        const CREDIT_CARD_TOKEN_IS_TOO_LONG = '91720';
        const CREDIT_CARD_VENMO_SDK_PAYMENT_METHOD_CODE_CARD_TYPE_IS_NOT_ACCEPTED = '91726';
        const CREDIT_CARD_VERIFICATION_NOT_SUPPORTED_ON_THIS_MERCHANT_ACCOUNT = '91730';
        const CUSTOMER_COMPANY_IS_TOO_LONG = '81601';
        const CUSTOMER_CUSTOM_FIELD_IS_INVALID = '91602';
        const CUSTOMER_CUSTOM_FIELD_IS_TOO_LONG = '81603';
        const CUSTOMER_EMAIL_FORMAT_IS_INVALID = '81604';
        const CUSTOMER_EMAIL_IS_INVALID = '81604';
        const CUSTOMER_EMAIL_IS_REQUIRED = '81606';
        const CUSTOMER_EMAIL_IS_TOO_LONG = '81605';
        const CUSTOMER_FAX_IS_TOO_LONG = '81607';
        const CUSTOMER_FIRST_NAME_IS_TOO_LONG = '81608';
        const CUSTOMER_ID_IS_INVAILD = '91610';
        //Deprecated
        const CUSTOMER_ID_IS_INVALID = '91610';
        const CUSTOMER_ID_IS_IN_USE = '91609';
        const CUSTOMER_ID_IS_NOT_ALLOWED = '91611';
        const CUSTOMER_ID_IS_REQUIRED = '91613';
        const CUSTOMER_ID_IS_TOO_LONG = '91612';
        const CUSTOMER_LAST_NAME_IS_TOO_LONG = '81613';
        const CUSTOMER_PHONE_IS_TOO_LONG = '81614';
        const CUSTOMER_VAULTED_PAYMENT_INSTRUMENT_NONCE_BELONGS_TO_DIFFERENT_CUSTOMER = '91617';
        const CUSTOMER_WEBSITE_FORMAT_IS_INVALID = '81616';
        const CUSTOMER_WEBSITE_IS_INVALID = '81616';
        const CUSTOMER_WEBSITE_IS_TOO_LONG = '81615';
        const DESCRIPTOR_NAME_FORMAT_IS_INVALID = '92201';
        const DESCRIPTOR_PHONE_FORMAT_IS_INVALID = '92202';
        const DESCRIPTOR_INTERNATIONAL_NAME_FORMAT_IS_INVALID = '92204';
        const DESCRIPTOR_DYNAMIC_DESCRIPTORS_DISABLED = '92203';
        const DESCRIPTOR_INTERNATIONAL_PHONE_FORMAT_IS_INVALID = '92205';
        const DESCRIPTOR_URL_FORMAT_IS_INVALID = '92206';
        const DISPUTE_CAN_ONLY_ADD_EVIDENCE_TO_OPEN_DISPUTE = '95701';
        const DISPUTE_CAN_ONLY_REMOVE_EVIDENCE_FROM_OPEN_DISPUTE = '95702';
        const DISPUTE_CAN_ONLY_ADD_EVIDENCE_TO_DISPUTE = '95703';
        const DISPUTE_CAN_ONLY_ACCEPT_OPEN_DISPUTE = '95704';
        const DISPUTE_CAN_ONLY_FINALIZE_OPEN_DISPUTE = '95705';
        const DISPUTE_CAN_ONLY_CREATE_EVIDENCE_WITH_VALID_CATEGORY = '95706';
        const DISPUTE_EVIDENCE_CONTENT_DATE_INVALID = '95707';
        const DISPUTE_EVIDENCE_CONTENT_TOO_LONG = '95708';
        const DISPUTE_EVIDENCE_CONTENT_ARN_TOO_LONG = '95709';
        const DISPUTE_EVIDENCE_CONTENT_PHONE_TOO_LONG = '95710';
        const DISPUTE_EVIDENCE_CATEGORY_TEXT_ONLY = '95711';
        const DISPUTE_EVIDENCE_CATEGORY_DOCUMENT_ONLY = '95712';
        const DISPUTE_EVIDENCE_CATEGORY_NOT_FOR_REASON_CODE = '95713';
        const DISPUTE_EVIDENCE_CATEGORY_DUPLICATE = '95713';
        const DISPUTE_EVIDENCE_CATEGORY_EMAIL_INVALID = '95713';
        const DISPUTE_DIGITAL_GOODS_MISSING_EVIDENCE = '95720';
        const DISPUTE_DIGITAL_GOODS_MISSING_DOWNLOAD_DATE = '95721';
        const DISPUTE_PRIOR_NON_DISPUTED_TRANSACTION_MISSING_ARN = '95722';
        const DISPUTE_PRIOR_NON_DISPUTED_TRANSACTION_MISSING_DATE = '95723';
        const DISPUTE_RECURRING_TRANSACTION_MISSING_DATE = '95724';
        const DISPUTE_RECURRING_TRANSACTION_MISSING_ARN = '95725';
        const DISPUTE_VALID_EVIDENCE_REQUIRED_TO_FINALIZE = '95726';
        const DOCUMENT_UPLOAD_KIND_IS_INVALID = '84901';
        const DOCUMENT_UPLOAD_FILE_IS_TOO_LARGE = '84902';
        const DOCUMENT_UPLOAD_FILE_TYPE_IS_INVALID = '84903';
        const DOCUMENT_UPLOAD_FILE_IS_MALFORMED_OR_ENCRYPTED = '84904';
        const DOCUMENT_UPLOAD_FILE_IS_TOO_LONG = '84905';
        const DOCUMENT_UPLOAD_FILE_IS_EMPTY = '84906';
        const EXCHANGE_RATE_QUOTE_ID_IS_TOO_LONG = '915229';
        const FAILED_AUTH_ADJUSTMENT_ALLOW_RETRY = '95603';
        const FAILED_AUTH_ADJUSTMENT_HARD_DECLINE = '95602';
        const FINAL_AUTH_SUBMIT_FOR_SETTLEMENT_FOR_DIFFERENT_AMOUNT = '95601';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_ARRIVAL_AIRPORT_CODE_IS_TOO_LONG = '96301';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_ARRIVAL_TIME_FORMAT_IS_INVALID = '96302';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_CARRIER_CODE_IS_TOO_LONG = '96303';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_CONJUNCTION_TICKET_IS_TOO_LONG = '96304';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_COUPON_NUMBER_IS_TOO_LONG = '96305';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_DEPARTURE_AIRPORT_CODE_IS_TOO_LONG = '96306';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_DEPARTURE_TIME_FORMAT_IS_INVALID = '96307';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_EXCHANGE_TICKET_IS_TOO_LONG = '96308';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_FARE_AMOUNT_CANNOT_BE_NEGATIVE = '96309';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_FARE_AMOUNT_FORMAT_IS_INVALID = '96310';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_FARE_AMOUNT_IS_TOO_LARGE = '96311';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_FARE_BASIS_CODE_IS_TOO_LONG = '96312';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_FEE_AMOUNT_CANNOT_BE_NEGATIVE = '96313';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_FEE_AMOUNT_FORMAT_IS_INVALID = '96314';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_FEE_AMOUNT_IS_TOO_LARGE = '96315';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_SERVICE_CLASS_IS_TOO_LONG = '96316';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_TAX_AMOUNT_CANNOT_BE_NEGATIVE = '96317';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_TAX_AMOUNT_FORMAT_IS_INVALID = '96318';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_TAX_AMOUNT_IS_TOO_LARGE = '96319';
        const INDUSTRY_DATA_LEG_TRAVEL_FLIGHT_TICKET_NUMBER_IS_TOO_LONG = '96320';
        const INDUSTRY_DATA_INDUSTRY_TYPE_IS_INVALID = '93401';
        const INDUSTRY_DATA_LODGING_EMPTY_DATA = '93402';
        const INDUSTRY_DATA_LODGING_FOLIO_NUMBER_IS_INVALID = '93403';
        const INDUSTRY_DATA_LODGING_CHECK_IN_DATE_IS_INVALID = '93404';
        const INDUSTRY_DATA_LODGING_CHECK_OUT_DATE_IS_INVALID = '93405';
        const INDUSTRY_DATA_LODGING_CHECK_OUT_DATE_MUST_FOLLOW_CHECK_IN_DATE = '93406';
        const INDUSTRY_DATA_LODGING_UNKNOWN_DATA_FIELD = '93407';
        const INDUSTRY_DATA_LODGING_ROOM_RATE_MUST_BE_GREATER_THAN_ZERO = '93433';
        const INDUSTRY_DATA_LODGING_ROOM_RATE_FORMAT_IS_INVALID = '93434';
        const INDUSTRY_DATA_LODGING_ROOM_RATE_IS_TOO_LARGE = '93435';
        const INDUSTRY_DATA_LODGING_ROOM_TAX_MUST_BE_GREATER_THAN_ZERO = '93436';
        const INDUSTRY_DATA_LODGING_ROOM_TAX_FORMAT_IS_INVALID = '93437';
        const INDUSTRY_DATA_LODGING_ROOM_TAX_IS_TOO_LARGE = '93438';
        const INDUSTRY_DATA_LODGING_NO_SHOW_INDICATOR_IS_INVALID = '93439';
        const INDUSTRY_DATA_LODGING_ADVANCED_DEPOSIT_INDICATOR_IS_INVALID = '93440';
        const INDUSTRY_DATA_LODGING_FIRE_SAFETY_INDICATOR_IS_INVALID = '93441';
        const INDUSTRY_DATA_LODGING_PROPERTY_PHONE_IS_INVALID = '93442';
        const INDUSTRY_DATA_TRAVEL_CRUISE_EMPTY_DATA = '93408';
        const INDUSTRY_DATA_TRAVEL_CRUISE_UNKNOWN_DATA_FIELD = '93409';
        const INDUSTRY_DATA_TRAVEL_CRUISE_TRAVEL_PACKAGE_IS_INVALID = '93410';
        const INDUSTRY_DATA_TRAVEL_CRUISE_DEPARTURE_DATE_IS_INVALID = '93411';
        const INDUSTRY_DATA_TRAVEL_CRUISE_LODGING_CHECK_IN_DATE_IS_INVALID = '93412';
        const INDUSTRY_DATA_TRAVEL_CRUISE_LODGING_CHECK_OUT_DATE_IS_INVALID = '93413';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_EMPTY_DATA = '93414';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_UNKNOWN_DATA_FIELD = '93415';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_CUSTOMER_CODE_IS_TOO_LONG = '93416';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_FARE_AMOUNT_CANNOT_BE_NEGATIVE = '93417';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_FARE_AMOUNT_FORMAT_IS_INVALID = '93418';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_FARE_AMOUNT_IS_TOO_LARGE = '93419';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_FEE_AMOUNT_CANNOT_BE_NEGATIVE = '93420';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_FEE_AMOUNT_FORMAT_IS_INVALID = '93421';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_FEE_AMOUNT_IS_TOO_LARGE = '93422';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_ISSUED_DATE_FORMAT_IS_INVALID = '93423';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_ISSUING_CARRIER_CODE_IS_TOO_LONG = '93424';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_PASSENGER_MIDDLE_INITIAL_IS_TOO_LONG = '93425';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_RESTRICTED_TICKET_IS_REQUIRED = '93426';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_TAX_AMOUNT_CANNOT_BE_NEGATIVE = '93427';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_TAX_AMOUNT_FORMAT_IS_INVALID = '93428';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_TAX_AMOUNT_IS_TOO_LARGE = '93429';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_TICKET_NUMBER_IS_TOO_LONG = '93430';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_LEGS_EXPECTED = '93431';
        const INDUSTRY_DATA_TRAVEL_FLIGHT_TOO_MANY_LEGS = '93432';
        const INDUSTRY_DATA_ADDITIONAL_CHARGE_KIND_IS_INVALID = '96601';
        const INDUSTRY_DATA_ADDITIONAL_CHARGE_KIND_MUST_BE_UNIQUE = '96602';
        const INDUSTRY_DATA_ADDITIONAL_CHARGE_AMOUNT_MUST_BE_GREATER_THAN_ZERO = '96603';
        const INDUSTRY_DATA_ADDITIONAL_CHARGE_AMOUNT_FORMAT_IS_INVALID = '96604';
        const INDUSTRY_DATA_ADDITIONAL_CHARGE_AMOUNT_IS_TOO_LARGE = '96605';
        const INDUSTRY_DATA_ADDITIONAL_CHARGE_AMOUNT_IS_REQUIRED = '96606';
        const TRANSACTION_LINE_ITEM_COMMODITY_CODE_IS_TOO_LONG = '95801';
        const TRANSACTION_LINE_ITEM_DESCRIPTION_IS_TOO_LONG = '95803';
        const TRANSACTION_LINE_ITEM_DISCOUNT_AMOUNT_FORMAT_IS_INVALID = '95804';
        const TRANSACTION_LINE_ITEM_DISCOUNT_AMOUNT_IS_TOO_LARGE = '95805';
        const TRANSACTION_LINE_ITEM_DISCOUNT_AMOUNT_CANNOT_BE_NEGATIVE = '95806';
        const TRANSACTION_LINE_ITEM_KIND_IS_INVALID = '95807';
        const TRANSACTION_LINE_ITEM_KIND_IS_REQUIRED = '95808';
        const TRANSACTION_LINE_ITEM_NAME_IS_REQUIRED = '95822';
        const TRANSACTION_LINE_ITEM_NAME_IS_TOO_LONG = '95823';
        const TRANSACTION_LINE_ITEM_PRODUCT_CODE_IS_TOO_LONG = '95809';
        const TRANSACTION_LINE_ITEM_QUANTITY_FORMAT_IS_INVALID = '95810';
        const TRANSACTION_LINE_ITEM_QUANTITY_IS_REQUIRED = '95811';
        const TRANSACTION_LINE_ITEM_QUANTITY_IS_TOO_LARGE = '95812';
        const TRANSACTION_LINE_ITEM_TOTAL_AMOUNT_FORMAT_IS_INVALID = '95813';
        const TRANSACTION_LINE_ITEM_TOTAL_AMOUNT_IS_REQUIRED = '95814';
        const TRANSACTION_LINE_ITEM_TOTAL_AMOUNT_IS_TOO_LARGE = '95815';
        const TRANSACTION_LINE_ITEM_TOTAL_AMOUNT_MUST_BE_GREATER_THAN_ZERO = '95816';
        const TRANSACTION_LINE_ITEM_UNIT_AMOUNT_FORMAT_IS_INVALID = '95817';
        const TRANSACTION_LINE_ITEM_UNIT_AMOUNT_IS_REQUIRED = '95818';
        const TRANSACTION_LINE_ITEM_UNIT_AMOUNT_IS_TOO_LARGE = '95819';
        const TRANSACTION_LINE_ITEM_UNIT_AMOUNT_MUST_BE_GREATER_THAN_ZERO = '95820';
        const TRANSACTION_LINE_ITEM_UNIT_OF_MEASURE_IS_TOO_LONG = '95821';
        const TRANSACTION_LINE_ITEM_UNIT_TAX_AMOUNT_FORMAT_IS_INVALID = '95824';
        const TRANSACTION_LINE_ITEM_UNIT_TAX_AMOUNT_IS_TOO_LARGE = '95825';
        const TRANSACTION_LINE_ITEM_UNIT_TAX_AMOUNT_CANNOT_BE_NEGATIVE = '95826';
        const TRANSACTION_LINE_ITEM_TAX_AMOUNT_FORMAT_IS_INVALID = '95827';
        const TRANSACTION_LINE_ITEM_TAX_AMOUNT_IS_TOO_LARGE = '95828';
        const TRANSACTION_LINE_ITEM_TAX_AMOUNT_CANNOT_BE_NEGATIVE = '95829';
        const TRANSACTION_EXTERNAL_VAULT_STATUS_IS_INVALID = '915175';
        const TRANSACTION_EXTERNAL_VAULT_STATUS_WITH_PREVIOUS_NETWORK_TRANSACTION_ID_IS_INVALID = '915177';
        const TRANSACTION_EXTERNAL_VAULT_PREVIOUS_NETWORK_TRANSACTION_ID_IS_INVALID = '915179';
        const MERCHANT_COUNTRY_CANNOT_BE_BLANK = '83603';
        const MERCHANT_COUNTRY_CODE_ALPHA2_IS_INVALID = '93607';
        const MERCHANT_COUNTRY_CODE_ALPHA2_IS_NOT_ACCEPTED = '93606';
        const MERCHANT_COUNTRY_CODE_ALPHA3_IS_INVALID = '93605';
        const MERCHANT_COUNTRY_CODE_ALPHA3_IS_NOT_ACCEPTED = '93604';
        const MERCHANT_COUNTRY_CODE_NUMERIC_IS_INVALID = '93609';
        const MERCHANT_COUNTRY_CODE_NUMERIC_IS_NOT_ACCEPTED = '93608';
        const MERCHANT_COUNTRY_NAME_IS_INVALID = '93611';
        const MERCHANT_COUNTRY_NAME_IS_NOT_ACCEPTED = '93610';
        const MERCHANT_CURRENCIES_ARE_INVALID = '93614';
        const MERCHANT_EMAIL_FORMAT_IS_INVALID = '93602';
        const MERCHANT_EMAIL_IS_REQUIRED = '83601';
        const MERCHANT_INCONSISTENT_COUNTRY = '93612';
        const MERCHANT_ACCOUNT_PAYMENT_METHODS_ARE_INVALID = '93613';
        const MERCHANT_PAYMENT_METHODS_ARE_NOT_ALLOWED = '93615';
        const MERCHANT_MERCHANT_ACCOUNT_EXISTS_FOR_CURRENCY = '93616';
        const MERCHANT_CURRENCY_IS_REQUIRED = '93617';
        const MERCHANT_CURRENCY_IS_INVALID = '93618';
        const MERCHANT_NO_MERCHANT_ACCOUNTS = '93619';
        const MERCHANT_MERCHANT_ACCOUNT_EXISTS_FOR_ID = '93620';
        const MERCHANT_MERCHANT_ACCOUNT_NOT_AUTH_ONBOARDED = '93621';
        const MERCHANT_ACCOUNT_ID_FORMAT_IS_INVALID = '82603';
        const MERCHANT_ACCOUNT_ID_IS_IN_USE = '82604';
        const MERCHANT_ACCOUNT_ID_IS_NOT_ALLOWED = '82605';
        const MERCHANT_ACCOUNT_ID_IS_TOO_LONG = '82602';
        const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_ID_IS_INVALID = '82607';
        const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_ID_IS_REQUIRED = '82606';
        const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_MUST_BE_ACTIVE = '82608';
        const MERCHANT_ACCOUNT_TOS_ACCEPTED_IS_REQUIRED = '82610';
        const MERCHANT_ACCOUNT_CANNOT_BE_UPDATED = '82674';
        const MERCHANT_ACCOUNT_DECLINED = '82626';
        const MERCHANT_ACCOUNT_DECLINED_MASTER_CARD_MATCH = '82622';
        const MERCHANT_ACCOUNT_DECLINED_OFAC = '82621';
        const MERCHANT_ACCOUNT_DECLINED_FAILED_KYC = '82623';
        const MERCHANT_ACCOUNT_DECLINED_SSN_INVALID = '82624';
        const MERCHANT_ACCOUNT_DECLINED_SSN_MATCHES_DECEASED = '82625';
        const MERCHANT_ACCOUNT_ID_CANNOT_BE_UPDATED = '82675';
        const MERCHANT_ACCOUNT_MASTER_MERCHANT_ACCOUNT_ID_CANNOT_BE_UPDATED = '82676';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ACCOUNT_NUMBER_IS_REQUIRED = '82614';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_COMPANY_NAME_IS_INVALID = '82631';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_COMPANY_NAME_IS_REQUIRED_WITH_TAX_ID = '82633';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DATE_OF_BIRTH_IS_REQUIRED = '82612';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED = '82626';
        // Keep for backwards compatibility
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_MASTER_CARD_MATCH = '82622';
        // Keep for backwards compatibility
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_OFAC = '82621';
        // Keep for backwards compatibility
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_FAILED_KYC = '82623';
        // Keep for backwards compatibility
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_SSN_INVALID = '82624';
        // Keep for backwards compatibility
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DECLINED_SSN_MATCHES_DECEASED = '82625';
        // Keep for backwards compatibility
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_EMAIL_ADDRESS_IS_INVALID = '82616';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_FIRST_NAME_IS_INVALID = '82627';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_FIRST_NAME_IS_REQUIRED = '82609';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_LAST_NAME_IS_INVALID = '82628';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_LAST_NAME_IS_REQUIRED = '82611';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_PHONE_IS_INVALID = '82636';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ROUTING_NUMBER_IS_INVALID = '82635';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ROUTING_NUMBER_IS_REQUIRED = '82613';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_SSN_IS_INVALID = '82615';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_TAX_ID_IS_INVALID = '82632';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_TAX_ID_IS_REQUIRED_WITH_COMPANY_NAME = '82634';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_DATE_OF_BIRTH_IS_INVALID = '82663';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_REGION_IS_INVALID = '82664';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_EMAIL_ADDRESS_IS_REQUIRED = '82665';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ACCOUNT_NUMBER_IS_INVALID = '82670';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_TAX_ID_MUST_BE_BLANK = '82673';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_LOCALITY_IS_REQUIRED = '82618';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_POSTAL_CODE_IS_INVALID = '82630';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_POSTAL_CODE_IS_REQUIRED = '82619';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_REGION_IS_REQUIRED = '82620';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_STREET_ADDRESS_IS_INVALID = '82629';
        const MERCHANT_ACCOUNT_APPLICANT_DETAILS_ADDRESS_STREET_ADDRESS_IS_REQUIRED = '82617';
        const MERCHANT_ACCOUNT_BUSINESS_DBA_NAME_IS_INVALID = '82646';
        const MERCHANT_ACCOUNT_BUSINESS_TAX_ID_IS_INVALID = '82647';
        const MERCHANT_ACCOUNT_BUSINESS_TAX_ID_IS_REQUIRED_WITH_LEGAL_NAME = '82648';
        const MERCHANT_ACCOUNT_BUSINESS_LEGAL_NAME_IS_REQUIRED_WITH_TAX_ID = '82669';
        const MERCHANT_ACCOUNT_BUSINESS_TAX_ID_MUST_BE_BLANK = '82672';
        const MERCHANT_ACCOUNT_BUSINESS_LEGAL_NAME_IS_INVALID = '82677';
        const MERCHANT_ACCOUNT_BUSINESS_ADDRESS_REGION_IS_INVALID = '82684';
        const MERCHANT_ACCOUNT_BUSINESS_ADDRESS_STREET_ADDRESS_IS_INVALID = '82685';
        const MERCHANT_ACCOUNT_BUSINESS_ADDRESS_POSTAL_CODE_IS_INVALID = '82686';
        const MERCHANT_ACCOUNT_INDIVIDUAL_FIRST_NAME_IS_REQUIRED = '82637';
        const MERCHANT_ACCOUNT_INDIVIDUAL_LAST_NAME_IS_REQUIRED = '82638';
        const MERCHANT_ACCOUNT_INDIVIDUAL_DATE_OF_BIRTH_IS_REQUIRED = '82639';
        const MERCHANT_ACCOUNT_INDIVIDUAL_SSN_IS_INVALID = '82642';
        const MERCHANT_ACCOUNT_INDIVIDUAL_EMAIL_IS_INVALID = '82643';
        const MERCHANT_ACCOUNT_INDIVIDUAL_FIRST_NAME_IS_INVALID = '82644';
        const MERCHANT_ACCOUNT_INDIVIDUAL_LAST_NAME_IS_INVALID = '82645';
        const MERCHANT_ACCOUNT_INDIVIDUAL_PHONE_IS_INVALID = '82656';
        const MERCHANT_ACCOUNT_INDIVIDUAL_DATE_OF_BIRTH_IS_INVALID = '82666';
        const MERCHANT_ACCOUNT_INDIVIDUAL_EMAIL_IS_REQUIRED = '82667';
        const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_STREET_ADDRESS_IS_REQUIRED = '82657';
        const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_LOCALITY_IS_REQUIRED = '82658';
        const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_POSTAL_CODE_IS_REQUIRED = '82659';
        const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_REGION_IS_REQUIRED = '82660';
        const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_STREET_ADDRESS_IS_INVALID = '82661';
        const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_POSTAL_CODE_IS_INVALID = '82662';
        const MERCHANT_ACCOUNT_INDIVIDUAL_ADDRESS_REGION_IS_INVALID = '82668';
        const MERCHANT_ACCOUNT_FUNDING_ROUTING_NUMBER_IS_REQUIRED = '82640';
        const MERCHANT_ACCOUNT_FUNDING_ACCOUNT_NUMBER_IS_REQUIRED = '82641';
        const MERCHANT_ACCOUNT_FUNDING_ROUTING_NUMBER_IS_INVALID = '82649';
        const MERCHANT_ACCOUNT_FUNDING_ACCOUNT_NUMBER_IS_INVALID = '82671';
        const MERCHANT_ACCOUNT_FUNDING_DESTINATION_IS_REQUIRED = '82678';
        const MERCHANT_ACCOUNT_FUNDING_DESTINATION_IS_INVALID = '82679';
        const MERCHANT_ACCOUNT_FUNDING_EMAIL_IS_REQUIRED = '82680';
        const MERCHANT_ACCOUNT_FUNDING_EMAIL_IS_INVALID = '82681';
        const MERCHANT_ACCOUNT_FUNDING_MOBILE_PHONE_IS_REQUIRED = '82682';
        const MERCHANT_ACCOUNT_FUNDING_MOBILE_PHONE_IS_INVALID = '82683';
        const NO_NET_AMOUNT_TO_PERFORM_AUTH_ADJUSTMENT = '95606';
        const OAUTH_INVALID_GRANT = '93801';
        const OAUTH_INVALID_CREDENTIALS = '93802';
        const OAUTH_INVALID_SCOPE = '93803';
        const OAUTH_INVALID_REQUEST = '93804';
        const OAUTH_UNSUPPORTED_GRANT_TYPE = '93805';
        const PAYMENT_METHOD_CANNOT_FORWARD_PAYMENT_METHOD_TYPE = '93106';
        const PAYMENT_METHOD_CUSTOMER_ID_IS_INVALID = '93105';
        const PAYMENT_METHOD_CUSTOMER_ID_IS_REQUIRED = '93104';
        const PAYMENT_METHOD_NONCE_IS_INVALID = '93102';
        const PAYMENT_METHOD_NONCE_IS_REQUIRED = '93103';
        const PAYMENT_METHOD_PAYMENT_METHOD_NONCE_CONSUMED = '93107';
        const PAYMENT_METHOD_PAYMENT_METHOD_NONCE_UNKNOWN = '93108';
        const PAYMENT_METHOD_PAYMENT_METHOD_NONCE_LOCKED = '93109';
        const PAYMENT_METHOD_PAYMENT_METHOD_PARAMS_ARE_REQUIRED = '93101';
        const PAYMENT_METHOD_NO_LONGER_SUPPORTED = '93117';
        const PAYMENT_METHOD_OPTIONS_US_BANK_ACCOUNT_VERIFICATION_METHOD_IS_INVALID = '93121';
        const PAYPAL_ACCOUNT_AUTH_EXPIRED = '92911';
        const PAYPAL_ACCOUNT_CANNOT_HAVE_BOTH_ACCESS_TOKEN_AND_CONSENT_CODE = '82903';
        const PAYPAL_ACCOUNT_CANNOT_HAVE_FUNDING_SOURCE_WITHOUT_ACCESS_TOKEN = '92912';
        const PAYPAL_ACCOUNT_CANNOT_UPDATE_PAYPAL_ACCOUNT_USING_PAYMENT_METHOD_NONCE = '92914';
        const PAYPAL_ACCOUNT_CANNOT_VAULT_ONE_TIME_USE_PAYPAL_ACCOUNT = '82902';
        const PAYPAL_ACCOUNT_CONSENT_CODE_OR_ACCESS_TOKEN_IS_REQUIRED = '82901';
        const PAYPAL_ACCOUNT_CUSTOMER_ID_IS_REQUIRED_FOR_VAULTING = '82905';
        const PAYPAL_ACCOUNT_INVALID_FUNDING_SOURCE_SELECTION = '92913';
        const PAYPAL_ACCOUNT_INVALID_PARAMS_FOR_PAYPAL_ACCOUNT_UPDATE = '92915';
        const PAYPAL_ACCOUNT_PAYMENT_METHOD_NONCE_CONSUMED = '92907';
        const PAYPAL_ACCOUNT_PAYMENT_METHOD_NONCE_LOCKED = '92909';
        const PAYPAL_ACCOUNT_PAYMENT_METHOD_NONCE_UNKNOWN = '92908';
        const PAYPAL_ACCOUNT_PAYPAL_ACCOUNTS_ARE_NOT_ACCEPTED = '82904';
        const PAYPAL_ACCOUNT_PAYPAL_COMMUNICATION_ERROR = '92910';
        const PAYPAL_ACCOUNT_TOKEN_IS_IN_USE = '92906';
        const PROCESSOR_DOES_NOT_SUPPORT_AUTH_ADJUSTMENT = '915222';
        const PROCESSOR_DOES_NOT_SUPPORT_INCREMENTAL_AUTH = '915220';
        const PROCESSOR_DOES_NOT_SUPPORT_PARTIAL_AUTH_REVERSAL = '915221';
        const SETTLEMENT_BATCH_SUMMARY_SETTLEMENT_DATE_IS_INVALID = '82302';
        const SETTLEMENT_BATCH_SUMMARY_SETTLEMENT_DATE_IS_REQUIRED = '82301';
        const SETTLEMENT_BATCH_SUMMARY_CUSTOM_FIELD_IS_INVALID = '82303';
        const SUBSCRIPTION_BILLING_DAY_OF_MONTH_CANNOT_BE_UPDATED = '91918';
        const SUBSCRIPTION_BILLING_DAY_OF_MONTH_IS_INVALID = '91914';
        const SUBSCRIPTION_BILLING_DAY_OF_MONTH_MUST_BE_NUMERIC = '91913';
        const SUBSCRIPTION_CANNOT_ADD_DUPLICATE_ADDON_OR_DISCOUNT = '91911';
        const SUBSCRIPTION_CANNOT_EDIT_CANCELED_SUBSCRIPTION = '81901';
        const SUBSCRIPTION_CANNOT_EDIT_EXPIRED_SUBSCRIPTION = '81910';
        const SUBSCRIPTION_CANNOT_EDIT_PRICE_CHANGING_FIELDS_ON_PAST_DUE_SUBSCRIPTION = '91920';
        const SUBSCRIPTION_FIRST_BILLING_DATE_CANNOT_BE_IN_THE_PAST = '91916';
        const SUBSCRIPTION_FIRST_BILLING_DATE_CANNOT_BE_UPDATED = '91919';
        const SUBSCRIPTION_FIRST_BILLING_DATE_IS_INVALID = '91915';
        const SUBSCRIPTION_ID_IS_IN_USE = '81902';
        const SUBSCRIPTION_INCONSISTENT_NUMBER_OF_BILLING_CYCLES = '91908';
        const SUBSCRIPTION_INCONSISTENT_START_DATE = '91917';
        const SUBSCRIPTION_INVALID_REQUEST_FORMAT = '91921';
        const SUBSCRIPTION_MERCHANT_ACCOUNT_ID_IS_INVALID = '91901';
        const SUBSCRIPTION_MISMATCH_CURRENCY_ISO_CODE = '91923';
        const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_CANNOT_BE_BLANK = '91912';
        const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_IS_TOO_SMALL = '91909';
        const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_MUST_BE_GREATER_THAN_ZERO = '91907';
        const SUBSCRIPTION_NUMBER_OF_BILLING_CYCLES_MUST_BE_NUMERIC = '91906';
        const SUBSCRIPTION_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED = '91924';
        const SUBSCRIPTION_PAYMENT_METHOD_NONCE_IS_INVALID = '91925';
        const SUBSCRIPTION_PAYMENT_METHOD_NONCE_NOT_ASSOCIATED_WITH_CUSTOMER = '91926';
        const SUBSCRIPTION_PAYMENT_METHOD_NONCE_UNVAULTED_CARD_IS_NOT_ACCEPTED = '91927';
        const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_CARD_TYPE_IS_NOT_ACCEPTED = '91902';
        const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_IS_INVALID = '91903';
        const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_NOT_ASSOCIATED_WITH_CUSTOMER = '91905';
        const SUBSCRIPTION_PLAN_BILLING_FREQUENCY_CANNOT_BE_UPDATED = '91922';
        const SUBSCRIPTION_PLAN_ID_IS_INVALID = '91904';
        const SUBSCRIPTION_PRICE_CANNOT_BE_BLANK = '81903';
        const SUBSCRIPTION_PRICE_FORMAT_IS_INVALID = '81904';
        const SUBSCRIPTION_PRICE_IS_TOO_LARGE = '81923';
        const SUBSCRIPTION_STATUS_IS_CANCELED = '81905';
        const SUBSCRIPTION_TOKEN_FORMAT_IS_INVALID = '81906';
        const SUBSCRIPTION_TRIAL_DURATION_FORMAT_IS_INVALID = '81907';
        const SUBSCRIPTION_TRIAL_DURATION_IS_REQUIRED = '81908';
        const SUBSCRIPTION_TRIAL_DURATION_UNIT_IS_INVALID = '81909';
        const SUBSCRIPTION_MERCHANT_ACCOUNT_DOES_NOT_SUPPORT_INSTRUMENT_TYPE = '91930';
        const SUBSCRIPTION_PAYMENT_METHOD_NONCE_INSTRUMENT_TYPE_DOES_NOT_SUPPORT_SUBSCRIPTIONS = '91929';
        const SUBSCRIPTION_PAYMENT_METHOD_TOKEN_INSTRUMENT_TYPE_DOES_NOT_SUPPORT_SUBSCRIPTIONS = '91928';
        const SUBSCRIPTION_MODIFICATION_AMOUNT_CANNOT_BE_BLANK = '92003';
        const SUBSCRIPTION_MODIFICATION_AMOUNT_IS_INVALID = '92002';
        const SUBSCRIPTION_MODIFICATION_AMOUNT_IS_TOO_LARGE = '92023';
        const SUBSCRIPTION_MODIFICATION_CANNOT_EDIT_MODIFICATIONS_ON_PAST_DUE_SUBSCRIPTION = '92022';
        const SUBSCRIPTION_MODIFICATION_CANNOT_UPDATE_AND_REMOVE = '92015';
        const SUBSCRIPTION_MODIFICATION_EXISTING_ID_IS_INCORRECT_KIND = '92020';
        const SUBSCRIPTION_MODIFICATION_EXISTING_ID_IS_INVALID = '92011';
        const SUBSCRIPTION_MODIFICATION_EXISTING_ID_IS_REQUIRED = '92012';
        const SUBSCRIPTION_MODIFICATION_ID_TO_REMOVE_IS_INCORRECT_KIND = '92021';
        const SUBSCRIPTION_MODIFICATION_ID_TO_REMOVE_IS_INVALID = '92025';
        const SUBSCRIPTION_MODIFICATION_ID_TO_REMOVE_IS_NOT_PRESENT = '92016';
        const SUBSCRIPTION_MODIFICATION_INCONSISTENT_NUMBER_OF_BILLING_CYCLES = '92018';
        const SUBSCRIPTION_MODIFICATION_INHERITED_FROM_ID_IS_INVALID = '92013';
        const SUBSCRIPTION_MODIFICATION_INHERITED_FROM_ID_IS_REQUIRED = '92014';
        const SUBSCRIPTION_MODIFICATION_MISSING = '92024';
        const SUBSCRIPTION_MODIFICATION_NUMBER_OF_BILLING_CYCLES_CANNOT_BE_BLANK = '92017';
        const SUBSCRIPTION_MODIFICATION_NUMBER_OF_BILLING_CYCLES_IS_INVALID = '92005';
        const SUBSCRIPTION_MODIFICATION_NUMBER_OF_BILLING_CYCLES_MUST_BE_GREATER_THAN_ZERO = '92019';
        const SUBSCRIPTION_MODIFICATION_QUANTITY_CANNOT_BE_BLANK = '92004';
        const SUBSCRIPTION_MODIFICATION_QUANTITY_IS_INVALID = '92001';
        const SUBSCRIPTION_MODIFICATION_QUANTITY_MUST_BE_GREATER_THAN_ZERO = '92010';
        const TRANSACTION_AMOUNT_CANNOT_BE_NEGATIVE = '81501';
        const TRANSACTION_AMOUNT_DOES_NOT_MATCH3_D_SECURE_AMOUNT = '91585';
        const TRANSACTION_AMOUNT_FORMAT_IS_INVALID = '81503';
        const TRANSACTION_AMOUNT_IS_INVALID = '81503';
        const TRANSACTION_AMOUNT_IS_REQUIRED = '81502';
        const TRANSACTION_AMOUNT_IS_TOO_LARGE = '81528';
        const TRANSACTION_AMOUNT_MUST_BE_GREATER_THAN_ZERO = '81531';
        const TRANSACTION_AMOUNT_NOT_SUPPORTED_BY_PROCESSOR = '815193';
        const TRANSACTION_BILLING_ADDRESS_CONFLICT = '91530';
        const TRANSACTION_BILLING_PHONE_NUMBER_IS_INVALID = '915206';
        const TRANSACTION_CANNOT_BE_VOIDED = '91504';
        const TRANSACTION_CANNOT_CANCEL_RELEASE = '91562';
        const TRANSACTION_CANNOT_CLONE_CREDIT = '91543';
        const TRANSACTION_CANNOT_CLONE_MARKETPLACE_TRANSACTION = '915137';
        const TRANSACTION_CANNOT_CLONE_TRANSACTION_WITH_PAYPAL_ACCOUNT = '91573';
        const TRANSACTION_CANNOT_CLONE_TRANSACTION_WITH_VAULT_CREDIT_CARD = '91540';
        const TRANSACTION_CANNOT_CLONE_UNSUCCESSFUL_TRANSACTION = '91542';
        const TRANSACTION_CANNOT_CLONE_VOICE_AUTHORIZATIONS = '91541';
        const TRANSACTION_CANNOT_HOLD_IN_ESCROW = '91560';
        const TRANSACTION_CANNOT_PARTIALLY_REFUND_ESCROWED_TRANSACTION = '91563';
        const TRANSACTION_CANNOT_REFUND_CREDIT = '91505';
        const TRANSACTION_CANNOT_REFUND_SETTLING_TRANSACTION = '91574';
        const TRANSACTION_CANNOT_REFUND_UNLESS_SETTLED = '91506';
        const TRANSACTION_CANNOT_REFUND_WITH_PENDING_MERCHANT_ACCOUNT = '91559';
        const TRANSACTION_CANNOT_REFUND_WITH_SUSPENDED_MERCHANT_ACCOUNT = '91538';
        const TRANSACTION_CANNOT_RELEASE_FROM_ESCROW = '91561';
        const TRANSACTION_CANNOT_SIMULATE_SETTLEMENT = '91575';
        const TRANSACTION_CANNOT_SUBMIT_FOR_PARTIAL_SETTLEMENT = '915103';
        const TRANSACTION_CANNOT_SUBMIT_FOR_SETTLEMENT = '91507';
        const TRANSACTION_CANNOT_UPDATE_DETAILS_NOT_SUBMITTED_FOR_SETTLEMENT = '915129';
        const TRANSACTION_CHANNEL_IS_TOO_LONG = '91550';
        const TRANSACTION_CREDIT_CARD_IS_REQUIRED = '91508';
        const TRANSACTION_CUSTOMER_DEFAULT_PAYMENT_METHOD_CARD_TYPE_IS_NOT_ACCEPTED = '81509';
        const TRANSACTION_CUSTOMER_DOES_NOT_HAVE_CREDIT_CARD = '91511';
        const TRANSACTION_CUSTOMER_ID_IS_INVALID = '91510';
        const TRANSACTION_CUSTOM_FIELD_IS_INVALID = '91526';
        const TRANSACTION_CUSTOM_FIELD_IS_TOO_LONG = '81527';
        const TRANSACTION_PAYMENT_INSTRUMENT_WITH_EXTERNAL_VAULT_IS_INVALID = '915176';
        const TRANSACTION_HAS_ALREADY_BEEN_REFUNDED = '91512';
        const TRANSACTION_IS_NOT_ELIGIBLE_FOR_ADJUSTMENT = '915219';
        const TRANSACTION_LINE_ITEMS_EXPECTED = '915158';
        const TRANSACTION_TOO_MANY_LINE_ITEMS = '915157';
        const TRANSACTION_DISCOUNT_AMOUNT_FORMAT_IS_INVALID = '915159';
        const TRANSACTION_DISCOUNT_AMOUNT_CANNOT_BE_NEGATIVE = '915160';
        const TRANSACTION_DISCOUNT_AMOUNT_IS_TOO_LARGE = '915161';
        const TRANSACTION_SHIPPING_AMOUNT_FORMAT_IS_INVALID = '915162';
        const TRANSACTION_SHIPPING_AMOUNT_CANNOT_BE_NEGATIVE = '915163';
        const TRANSACTION_SHIPPING_AMOUNT_IS_TOO_LARGE = '915164';
        const TRANSACTION_SHIPPING_METHOD_IS_INVALID = '915203';
        const TRANSACTION_SHIPPING_PHONE_NUMBER_IS_INVALID = '915204';
        const TRANSACTION_SHIPS_FROM_POSTAL_CODE_IS_TOO_LONG = '915165';
        const TRANSACTION_SHIPS_FROM_POSTAL_CODE_IS_INVALID = '915166';
        const TRANSACTION_SHIPS_FROM_POSTAL_CODE_INVALID_CHARACTERS = '915167';
        const TRANSACTION_MERCHANT_ACCOUNT_DOES_NOT_MATCH3_D_SECURE_MERCHANT_ACCOUNT = '91584';
        const TRANSACTION_MERCHANT_ACCOUNT_DOES_NOT_SUPPORT_MOTO = '91558';
        const TRANSACTION_MERCHANT_ACCOUNT_DOES_NOT_SUPPORT_REFUNDS = '91547';
        const TRANSACTION_MERCHANT_ACCOUNT_ID_DOES_NOT_MATCH_SUBSCRIPTION = '915180';
        const TRANSACTION_MERCHANT_ACCOUNT_ID_IS_INVALID = '91513';
        const TRANSACTION_MERCHANT_ACCOUNT_IS_SUSPENDED = '91514';
        const TRANSACTION_MERCHANT_ACCOUNT_NAME_IS_INVALID = '91513';
        //Deprecated
        const TRANSACTION_MUST_BE_IN_STATE_AUTHORIZED = '915218';
        const TRANSACTION_OPTIONS_PAY_PAL_CUSTOM_FIELD_TOO_LONG = '91580';
        const TRANSACTION_OPTIONS_SUBMIT_FOR_SETTLEMENT_IS_REQUIRED_FOR_CLONING = '91544';
        const TRANSACTION_OPTIONS_SUBMIT_FOR_SETTLEMENT_IS_REQUIRED_FOR_PAYPAL_UNILATERAL = '91582';
        const TRANSACTION_OPTIONS_USE_BILLING_FOR_SHIPPING_DISABLED = '91572';
        const TRANSACTION_OPTIONS_VAULT_IS_DISABLED = '91525';
        const TRANSACTION_OPTIONS_CREDIT_CARD_ACCOUNT_TYPE_IS_INVALID = '915184';
        const TRANSACTION_OPTIONS_CREDIT_CARD_ACCOUNT_TYPE_NOT_SUPPORTED = '915185';
        const TRANSACTION_OPTIONS_CREDIT_CARD_ACCOUNT_TYPE_DEBIT_DOES_NOT_SUPPORT_AUTHS = '915186';
        const TRANSACTION_ORDER_ID_IS_TOO_LONG = '91501';
        const TRANSACTION_PAYMENT_INSTRUMENT_NOT_SUPPORTED_BY_MERCHANT_ACCOUNT = '91577';
        const TRANSACTION_PAYMENT_INSTRUMENT_TYPE_IS_NOT_ACCEPTED = '915101';
        const TRANSACTION_PAYMENT_METHOD_CONFLICT = '91515';
        const TRANSACTION_PAYMENT_METHOD_CONFLICT_WITH_VENMO_SDK = '91549';
        const TRANSACTION_PAYMENT_METHOD_DOES_NOT_BELONG_TO_CUSTOMER = '91516';
        const TRANSACTION_PAYMENT_METHOD_DOES_NOT_BELONG_TO_SUBSCRIPTION = '91527';
        const TRANSACTION_PAYMENT_METHOD_NONCE_CARD_TYPE_IS_NOT_ACCEPTED = '91567';
        const TRANSACTION_PAYMENT_METHOD_NONCE_CONSUMED = '91564';
        const TRANSACTION_PAYMENT_METHOD_NONCE_HAS_NO_VALID_PAYMENT_INSTRUMENT_TYPE = '91569';
        const TRANSACTION_PAYMENT_METHOD_NONCE_LOCKED = '91566';
        const TRANSACTION_PAYMENT_METHOD_NONCE_UNKNOWN = '91565';
        const TRANSACTION_PAYMENT_METHOD_TOKEN_CARD_TYPE_IS_NOT_ACCEPTED = '91517';
        const TRANSACTION_PAYMENT_METHOD_TOKEN_IS_INVALID = '91518';
        const TRANSACTION_PAYPAL_NOT_ENABLED = '91576';
        const TRANSACTION_PAY_PAL_AUTH_EXPIRED = '91579';
        const TRANSACTION_PAY_PAL_VAULT_RECORD_MISSING_DATA = '91583';
        const TRANSACTION_PROCESSOR_AUTHORIZATION_CODE_CANNOT_BE_SET = '91519';
        const TRANSACTION_PROCESSOR_AUTHORIZATION_CODE_IS_INVALID = '81520';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_AUTHS = '915104';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_CREDITS = '91546';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_MOTO_FOR_CARD_TYPE = '915195';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_PARTIAL_SETTLEMENT = '915102';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_UPDATING_ORDER_ID = '915107';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_UPDATING_DESCRIPTOR = '915108';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_UPDATING_DETAILS = '915130';
        const TRANSACTION_PROCESSOR_DOES_NOT_SUPPORT_VOICE_AUTHORIZATIONS = '91545';
        const TRANSACTION_PRODUCT_SKU_IS_INVALID = '915202';
        const TRANSACTION_PURCHASE_ORDER_NUMBER_IS_INVALID = '91548';
        const TRANSACTION_PURCHASE_ORDER_NUMBER_IS_TOO_LONG = '91537';
        const TRANSACTION_REFUND_AMOUNT_IS_TOO_LARGE = '91521';
        const TRANSACTION_REFUND_AUTH_HARD_DECLINED = '915200';
        const TRANSACTION_REFUND_AUTH_SOFT_DECLINED = '915201';
        const TRANSACTION_SCA_EXEMPTION_INVALID = '915213';
        const TRANSACTION_SERVICE_FEE_AMOUNT_CANNOT_BE_NEGATIVE = '91554';
        const TRANSACTION_SERVICE_FEE_AMOUNT_FORMAT_IS_INVALID = '91555';
        const TRANSACTION_SERVICE_FEE_AMOUNT_IS_TOO_LARGE = '91556';
        const TRANSACTION_SERVICE_FEE_AMOUNT_NOT_ALLOWED_ON_MASTER_MERCHANT_ACCOUNT = '91557';
        const TRANSACTION_SERVICE_FEE_IS_NOT_ALLOWED_ON_CREDITS = '91552';
        const TRANSACTION_SERVICE_FEE_NOT_ACCEPTED_FOR_PAYPAL = '91578';
        const TRANSACTION_SETTLEMENT_AMOUNT_IS_LESS_THAN_SERVICE_FEE_AMOUNT = '91551';
        const TRANSACTION_SETTLEMENT_AMOUNT_IS_TOO_LARGE = '91522';
        const TRANSACTION_SHIPPING_ADDRESS_DOESNT_MATCH_CUSTOMER = '91581';
        const TRANSACTION_SUBSCRIPTION_DOES_NOT_BELONG_TO_CUSTOMER = '91529';
        const TRANSACTION_SUBSCRIPTION_ID_IS_INVALID = '91528';
        const TRANSACTION_SUBSCRIPTION_STATUS_MUST_BE_PAST_DUE = '91531';
        const TRANSACTION_SUB_MERCHANT_ACCOUNT_REQUIRES_SERVICE_FEE_AMOUNT = '91553';
        const TRANSACTION_TAX_AMOUNT_CANNOT_BE_NEGATIVE = '81534';
        const TRANSACTION_TAX_AMOUNT_FORMAT_IS_INVALID = '81535';
        const TRANSACTION_TAX_AMOUNT_IS_REQUIRED_FOR_AIB_SWEDISH = '815224';
        const TRANSACTION_TAX_AMOUNT_IS_TOO_LARGE = '81536';
        const TRANSACTION_THREE_D_SECURE_AUTHENTICATION_FAILED = '81571';
        const TRANSACTION_THREE_D_SECURE_AUTHENTICATION_RESPONSE_IS_INVALID = '915120';
        const TRANSACTION_THREE_D_SECURE_CAVV_ALGORITHM_IS_INVALID = '915122';
        const TRANSACTION_THREE_D_SECURE_CAVV_IS_REQUIRED = '915116';
        const TRANSACTION_THREE_D_SECURE_DIRECTORY_RESPONSE_IS_INVALID = '915121';
        const TRANSACTION_THREE_D_SECURE_ECI_FLAG_IS_INVALID = '915114';
        const TRANSACTION_THREE_D_SECURE_ECI_FLAG_IS_REQUIRED = '915113';
        const TRANSACTION_THREE_D_SECURE_MERCHANT_ACCOUNT_DOES_NOT_SUPPORT_CARD_TYPE = '915131';
        const TRANSACTION_THREE_D_SECURE_THREE_D_SECURE_VERSION_IS_INVALID = '915119';
        const TRANSACTION_THREE_D_SECURE_TOKEN_IS_INVALID = '91568';
        const TRANSACTION_THREE_D_SECURE_TRANSACTION_DATA_DOESNT_MATCH_VERIFY = '91570';
        const TRANSACTION_THREE_D_SECURE_XID_IS_REQUIRED = '915115';
        const TRANSACTION_TYPE_IS_INVALID = '91523';
        const TRANSACTION_TYPE_IS_REQUIRED = '91524';
        const TRANSACTION_UNSUPPORTED_VOICE_AUTHORIZATION = '91539';
        const TRANSACTION_US_BANK_ACCOUNT_NONCE_MUST_BE_PLAID_VERIFIED = '915171';
        const TRANSACTION_US_BANK_ACCOUNT_NOT_VERIFIED = '915172';
        const TRANSACTION_TRANSACTION_SOURCE_IS_INVALID = '915133';
        const US_BANK_ACCOUNT_VERIFICATION_NOT_CONFIRMABLE = '96101';
        const US_BANK_ACCOUNT_VERIFICATION_MUST_BE_MICRO_TRANSFERS_VERIFICATION = '96102';
        const US_BANK_ACCOUNT_VERIFICATION_AMOUNTS_DO_NOT_MATCH = '96103';
        const US_BANK_ACCOUNT_VERIFICATION_TOO_MANY_CONFIRMATION_ATTEMPTS = '96104';
        const US_BANK_ACCOUNT_VERIFICATION_UNABLE_TO_CONFIRM_DEPOSIT_AMOUNTS = '96105';
        const US_BANK_ACCOUNT_VERIFICATION_INVALID_DEPOSIT_AMOUNTS = '96106';
        const VERIFICATION_OPTIONS_AMOUNT_CANNOT_BE_NEGATIVE = '94201';
        const VERIFICATION_OPTIONS_AMOUNT_FORMAT_IS_INVALID = '94202';
        const VERIFICATION_OPTIONS_AMOUNT_IS_TOO_LARGE = '94207';
        const VERIFICATION_OPTIONS_AMOUNT_NOT_SUPPORTED_BY_PROCESSOR = '94203';
        const VERIFICATION_OPTIONS_MERCHANT_ACCOUNT_ID_IS_INVALID = '94204';
        const VERIFICATION_OPTIONS_MERCHANT_ACCOUNT_IS_SUSPENDED = '94205';
        const VERIFICATION_OPTIONS_MERCHANT_ACCOUNT_IS_FORBIDDEN = '94206';
        const VERIFICATION_OPTIONS_MERCHANT_ACCOUNT_CANNOT_BE_SUB_MERCHANT_ACCOUNT = '94208';
        const VERIFICATION_OPTIONS_ACCOUNT_TYPE_IS_INVALID = '942184';
        const VERIFICATION_OPTIONS_ACCOUNT_TYPE_NOT_SUPPORTED = '942185';
        const VERIFICATION_THREE_D_SECURE_ECI_FLAG_IS_REQUIRED = "942113";
        const VERIFICATION_THREE_D_SECURE_ECI_FLAG_IS_INVALID = "942114";
        const VERIFICATION_THREE_D_SECURE_CAVV_IS_REQUIRED = "942116";
        const VERIFICATION_THREE_D_SECURE_THREE_D_SECURE_VERSION_IS_REQUIRED = '942117';
        const VERIFICATION_THREE_D_SECURE_THREE_D_SECURE_VERSION_IS_INVALID = "942119";
        const VERIFICATION_THREE_D_SECURE_AUTHENTICATION_RESPONSE_IS_INVALID = "942120";
        const VERIFICATION_THREE_D_SECURE_DIRECTORY_RESPONSE_IS_INVALID = "942121";
        const VERIFICATION_THREE_D_SECURE_CAVV_ALGORITHM_IS_INVALID = "942122";
        const THREE_D_SECURE_AUTHENTICATION_ID_IS_INVALID = "942196";
        const THREE_D_SECURE_AUTHENTICATION_ID_DOESNT_MATCH_NONCE_THREE_D_SECURE_AUTHENTICATION = "942198";
        const THREE_D_SECURE_TRANSACTION_PAYMENT_METHOD_DOESNT_MATCH_THREE_D_SECURE_AUTHENTICATION_PAYMENT_METHOD = "942197";
        const THREE_D_SECURE_AUTHENTICATION_ID_WITH_THREE_D_SECURE_PASS_THRU_IS_INVALID = "942199";
        const THREE_D_SECURE_AUTHENTICATION_FAILED = "94271";
        const THREE_D_SECURE_TOKEN_IS_INVALID = "94268";
        const THREE_D_SECURE_VERIFICATION_DATA_DOESNT_MATCH_VERIFY = "94270";
        const MERCHANT_ACCOUNT_DOES_NOT_SUPPORT3_D_SECURE = "942169";
        const MERCHANT_ACOUNT_DOES_NOT_MATCH3_D_SECURE_MERCHANT_ACCOUNT = "94284";
        const AMOUNT_DOES_NOT_MATCH3_D_SECURE_AMOUNT = "94285";
        const RISK_DATA_CUSTOMER_DEVICE_ID_IS_TOO_LONG = "94702";
        const RISK_DATA_CUSTOMER_LOCATION_ZIP_INVALID_CHARACTERS = "94703";
        const RISK_DATA_CUSTOMER_LOCATION_ZIP_IS_INVALID = "94704";
        const RISK_DATA_CUSTOMER_LOCATION_ZIP_IS_TOO_LONG = "94705";
        const RISK_DATA_CUSTOMER_TENURE_IS_TOO_LONG = "94706";
        const RISK_DATA_CUSTOMER_TENURE_IS_INVALID = "94707";
        // phpcs:enable Generic.Files.LineLength
    }
    /**
     * collection of errors enumerating all validation errors for a given request
     *
     * <b>== More information ==</b>
     *
     * // phpcs:ignore Generic.Files.LineLength
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/result-objects#error-results developer docs} for information on attributes
     */
    class ValidationErrorCollection extends \Braintree\Collection
    {
        private $_errors = [];
        private $_nested = [];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($data)
        {
        }
        /*
         * Deeply retrieve all validation errors
         *
         * @return array
         */
        public function deepAll()
        {
        }
        /*
         * Deeply retrieve a count of errors
         *
         * @return int
         */
        public function deepSize()
        {
        }
        /*
         * Checks if index if a set variable
         *
         * @return bool
         */
        public function forIndex($index)
        {
        }
        /*
         * Checks if the value for a given key is a set variable
         *
         * @return bool
         */
        public function forKey($key)
        {
        }
        /*
         * Returns any errors that match on a given attribute
         *
         * @param string $attribute to be checked for matching errors
         *
         * @return array
         */
        public function onAttribute($attribute)
        {
        }
        /*
         * Get all errors
         *
         * @return object
         */
        public function shallowAll()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __get($name)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        private function _inspect($errors, $scope = null)
        {
        }
    }
    /**
     * Error handler
     * Handles validation errors
     *
     * Contains a read-only property $error which is a ValidationErrorCollection
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/result-objects#error-results developer docs} for more information
     */
    class ErrorCollection implements \Countable, \JsonSerializable
    {
        private $_errors;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($errorData)
        {
        }
        /**
         * Return count of items in collection
         * Implements countable
         *
         * @return integer
         */
        #[\ReturnTypeWillChange]
        public function count()
        {
        }
        /**
         * Returns all of the validation errors at all levels of nesting in a single, flat array.
         *
         * @return array
         */
        public function deepAll()
        {
        }
        /**
         * Returns the total number of validation errors at all levels of nesting. For example,
         *if creating a customer with a credit card and a billing address, and each of the customer,
         * credit card, and billing address has 1 error, this method will return 3.
         *
         * @return integer size
         */
        public function deepSize()
        {
        }
        /**
         * return errors for the passed key name
         *
         * @param string $key name
         *
         * @return mixed
         */
        public function forKey($key)
        {
        }
        /**
         * return errors for the passed html field.
         * For example, $result->errors->onHtmlField("transaction[customer][last_name]")
         *
         * @param string $field html element
         *
         * @return array
         */
        public function onHtmlField($field)
        {
        }
        /**
         * Returns the errors at the given nesting level (see forKey) in a single, flat array:
         *
         * <code>
         *   $result = Customer::create(...);
         *   $customerErrors = $result->errors->forKey('customer')->shallowAll();
         * </code>
         *
         * @return array
         */
        public function shallowAll()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __get($name)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Implementation of JsonSerializable
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
    }
}
namespace Braintree {
    /**
     * Braintree MultipleValueOrTextNode
     * MultipleValueOrTextNode is an object that could be multiple values or a single string value returned from the Braintree API
     */
    class MultipleValueOrTextNode extends \Braintree\MultipleValueNode
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($name)
        {
        }
        /**
         * Sets the value of the object's "contains" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function contains($value)
        {
        }
        /**
         * Sets the value of the object's "ends_width" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function endsWith($value)
        {
        }
        /**
         * Sets the value of the object's "is" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function is($value)
        {
        }
        /**
         * Sets the value of the object's "is_not" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function isNot($value)
        {
        }
        /**
         * Sets the value of the object's "starts_with" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function startsWith($value)
        {
        }
        /**
         * Merges searchTerms into the parent element's params
         *
         * @return array
         */
        public function toParam()
        {
        }
    }
    /**
     * The total sales and credits for each batch for a particular date.
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/settlement-batch-summary developer docs} for information on attributes
     */
    class SettlementBatchSummary extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return SettlementBatchSummary
         */
        public static function factory($attributes)
        {
        }
        //phpcs:ignore Generic.Commenting
        protected function _initialize($attributes)
        {
        }
        /**
         * Returns the value for "records"
         *
         * @return mixed records
         */
        public function records()
        {
        }
        /**
         * static method redirecting to gateway
         *
         * @param string $settlement_date    Date YYYY-MM-DD
         * @param string $groupByCustomField optional
         *
         * @see SettlementBatchSummaryGateway::generate()
         *
         * @return Result\Successful|Result\Error
         */
        public static function generate($settlement_date, $groupByCustomField = null)
        {
        }
    }
    /**
     * Braintree PlanGateway module
     * Creates and manages Plans
     */
    class PlanGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /*
         * Retrieve all plans
         *
         * @return array of Plan objects
         */
        public function all()
        {
        }
        /*
         * Request a new plan be created
         *
         * @param array $attributes containing request params
         *
         * @return Result\Sucessful|Result\Error
         */
        public function create($attributes)
        {
        }
        /*
         * Look up a single plan
         *
         * @param string $id of the plan to find
         *
         * @return plan|Exception\NotFound
         */
        public function find($id)
        {
        }
        /*
         * Updates a specific plan with given details
         *
         * @param string $planId the ID of the plan to be updated
         * @param mixed $attributes
         *
         * @return plan|Exception\NotFound
         */
        public function update($planId, $attributes)
        {
        }
        private static function _createSignature()
        {
        }
        private static function _updateSignature()
        {
        }
        private static function _addOnDiscountSignature()
        {
        }
        /**
         * * @ignore
         * */
        private function _validateId($id = null)
        {
        }
        /**
         * * @ignore
         * */
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Braintree Library Version
     * stores version information about the Braintree library
     */
    class Version
    {
        const MAJOR = 6;
        const MINOR = 8;
        const TINY = 0;
        protected function __construct()
        {
        }
        /**
         * Get the version
         *
         * @return string the current library version
         */
        public static function get()
        {
        }
    }
    class TestingGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        public function __construct($gateway)
        {
        }
        public function settle($transactionId)
        {
        }
        public function settlementPending($transactionId)
        {
        }
        public function settlementConfirm($transactionId)
        {
        }
        public function settlementDecline($transactionId)
        {
        }
        private function _doTestRequest($testPath, $transactionId)
        {
        }
        private function _checkEnvironment()
        {
        }
    }
    /**
     * Disbursement details from a transaction
     *
     * Contains information about how and when the transaction was disbursed, including timing and currency information. This detail is only available if you have an eligible merchant account.
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction/php#disbursement_details developer docs} for information on attributes
     */
    class DisbursementDetails extends \Braintree\Instance
    {
        /**
         * Checks whether a Disbursement date is valid
         *
         * @return bool
         */
        public function isValid()
        {
        }
    }
    /**
     * Configuration registry
     */
    class Configuration
    {
        public static $global;
        private $_environment = null;
        private $_merchantId = null;
        private $_publicKey = null;
        private $_privateKey = null;
        private $_clientId = null;
        private $_clientSecret = null;
        private $_accessToken = null;
        private $_proxyHost = null;
        private $_proxyPort = null;
        private $_proxyType = null;
        private $_proxyUser = null;
        private $_proxyPassword = null;
        private $_timeout = 60;
        private $_sslVersion = null;
        private $_acceptGzipEncoding = true;
        /**
         * Braintree API version to use
         */
        const API_VERSION = 6;
        const GRAPHQL_API_VERSION = '2018-09-10';
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attribs = [])
        {
        }
        /**
         * resets configuration to default
         *
         * @return Configuration
         */
        public static function reset()
        {
        }
        /**
         * Create new gateway
         *
         * @return Gateway
         */
        public static function gateway()
        {
        }
        /**
         * Getter/Setter for configuration environment
         *
         * @param string $value If provided, sets the environment
         *
         * @return self
         */
        public static function environment($value = null)
        {
        }
        /**
         * Getter/Setter for configuration merchant ID
         *
         * @param string $value If provided, sets the merchantId
         *
         * @return self
         */
        public static function merchantId($value = null)
        {
        }
        /**
         * Getter/Setter for configuration public key
         *
         * @param string $value If provided, sets the public key
         *
         * @return self
         */
        public static function publicKey($value = null)
        {
        }
        /**
         * Getter/Setter for configuration private key
         *
         * @param string $value If provided, sets the private key
         *
         * @return self
         */
        public static function privateKey($value = null)
        {
        }
        /**
         * Sets or gets the read timeout to use for making requests.
         *
         * @param integer $value If provided, sets the read timeout
         *
         * @return integer The read timeout used for connecting to Braintree
         */
        public static function timeout($value = null)
        {
        }
        /**
         * Sets or gets the SSL version to use for making requests. See
         * https://php.net/manual/en/function.curl-setopt.php for possible
         * CURLOPT_SSLVERSION values.
         *
         * @param integer $value If provided, sets the SSL version
         *
         * @return integer The SSL version used for connecting to Braintree
         */
        public static function sslVersion($value = null)
        {
        }
        /**
         * Sets or gets the proxy host to use for connecting to Braintree
         *
         * @param string $value If provided, sets the proxy host
         *
         * @return string The proxy host used for connecting to Braintree
         */
        public static function proxyHost($value = null)
        {
        }
        /**
         * Sets or gets the port of the proxy to use for connecting to Braintree
         *
         * @param string $value If provided, sets the port of the proxy
         *
         * @return string The port of the proxy used for connecting to Braintree
         */
        public static function proxyPort($value = null)
        {
        }
        /**
         * Sets or gets the proxy type to use for connecting to Braintree. This value
         * can be any of the CURLOPT_PROXYTYPE options in PHP cURL.
         *
         * @param string $value If provided, sets the proxy type
         *
         * @return string The proxy type used for connecting to Braintree
         */
        public static function proxyType($value = null)
        {
        }
        /**
         * Sets or gets the proxy user to use for connecting to Braintree.
         *
         * @param string $value If provided, sets the proxy username
         *
         * @return string The proxy type used for connecting to Braintree
         */
        public static function proxyUser($value = null)
        {
        }
        /**
         * Sets or gets the proxy password to use for connecting to Braintree. This value
         * can be any of the CURLOPT_PROXYUSERPWD  options in PHP cURL.
         *
         * @param string $value If provided, sets the proxy password
         *
         * @return string The proxy type used for connecting to Braintree
         */
        public static function proxyPassword($value = null)
        {
        }
        /**
         * Specify if the HTTP client is able to decode gzipped responses.
         *
         * // phpcs:ignore Generic.Files.LineLength
         *
         * @param boolean $value If true, will send an Accept-Encoding header with a gzip value. If false, will not send an Accept-Encoding header with a gzip value.
         *
         * @return boolean true if an Accept-Encoding header with a gzip value will be sent, false if not
         */
        public static function acceptGzipEncoding($value = null)
        {
        }
        //phpcs:ignore
        public static function assertGlobalHasAccessTokenOrKeys()
        {
        }
        /*
         * Check if configuration has an access token, or api keys
         *
         * @throws Exception\Configuration
         *
         * @return self
         */
        public function assertHasAccessTokenOrKeys()
        {
        }
        /*
         * Check if configuration has a client id and secret
         *
         * @throws Exception\Configuration
         *
         * @return self
         */
        public function assertHasClientCredentials()
        {
        }
        /*
         * Check if configuration has a client id
         *
         * @throws Exception\Configuration
         *
         * @return self
         */
        public function assertHasClientId()
        {
        }
        /*
         * Check if configuration has a client secret
         *
         * @throws Exception\Configuration
         *
         * @return self
         */
        public function assertHasClientSecret()
        {
        }
        /*
         * Getter function
         *
         * @return string environment
         */
        public function getEnvironment()
        {
        }
        /*
         * Getter function
         *
         * @return string merchant id
         */
        public function getMerchantId()
        {
        }
        /*
         * Getter function
         *
         * @return string public key
         */
        public function getPublicKey()
        {
        }
        /*
         * Getter function
         *
         * @return string client id
         */
        public function getClientId()
        {
        }
        /*
         * Getter function
         *
         * @return string private key
         */
        public function getPrivateKey()
        {
        }
        /*
         * Getter function
         *
         * @return string client secret
         */
        public function getClientSecret()
        {
        }
        /*
         * Getter function
         *
         * @return string proxy host
         */
        public function getProxyHost()
        {
        }
        /*
         * Getter function
         *
         * @return string proxy port
         */
        public function getProxyPort()
        {
        }
        /*
         * Getter function
         *
         * @return string proxy type
         */
        public function getProxyType()
        {
        }
        /*
         * Getter function
         *
         * @return string proxy username
         */
        public function getProxyUser()
        {
        }
        /*
         * Getter function
         *
         * @return string proxy password
         */
        public function getProxyPassword()
        {
        }
        /*
         * Getter function
         *
         * @return int timeout
         */
        public function getTimeout()
        {
        }
        /*
         * Getter function
         *
         * @return string ssl version
         */
        public function getSslVersion()
        {
        }
        /*
         * Getter function
         *
         * @return bool
         */
        public function getAcceptGzipEncoding()
        {
        }
        //phpcs:disable PEAR.Commenting
        /**
         * Do not use this method directly. Pass in the environment to the constructor.
         */
        public function setEnvironment($value)
        {
        }
        /**
         * Do not use this method directly. Pass in the merchantId to the constructor.
         */
        public function setMerchantId($value)
        {
        }
        /**
         * Do not use this method directly. Pass in the publicKey to the constructor.
         */
        public function setPublicKey($value)
        {
        }
        /**
         * Do not use this method directly. Pass in the privateKey to the constructor.
         */
        public function setPrivateKey($value)
        {
        }
        private function setProxyHost($value)
        {
        }
        private function setProxyPort($value)
        {
        }
        private function setProxyType($value)
        {
        }
        private function setProxyUser($value)
        {
        }
        private function setProxyPassword($value)
        {
        }
        private function setTimeout($value)
        {
        }
        private function setSslVersion($value)
        {
        }
        private function setAcceptGzipEncoding($value)
        {
        }
        //phpcs:enable PEAR.Commenting
        /*
         * Getter function
         *
         * @return string access token
         */
        public function getAccessToken()
        {
        }
        /*
         * Checks for presence of access token
         *
         * @return bool
         */
        public function isAccessToken()
        {
        }
        /*
         * Checks for presence of client credentials
         *
         * @return bool
         */
        public function isClientCredentials()
        {
        }
        /**
         * returns the base braintree gateway URL based on config values
         *
         * @return string braintree gateway URL
         */
        public function baseUrl()
        {
        }
        /**
         * returns the base URL for Braintree's GraphQL endpoint based on config values
         *
         * @return string Braintree GraphQL URL
         */
        public function graphQLBaseUrl()
        {
        }
        /**
         * sets the merchant path based on merchant ID
         *
         * @return string merchant path uri
         */
        public function merchantPath()
        {
        }
        /**
         * sets the physical path for the location of the CA certs
         *
         * @param string $sslPath optional
         *
         * @return string filepath
         */
        public function caFile($sslPath = null)
        {
        }
        /**
         * returns the port number depending on environment
         *
         * @return int portnumber
         */
        public function portNumber()
        {
        }
        /**
         * returns the port number depending on environment
         *
         * @return integer graphql portnumber
         */
        public function graphQLPortNumber()
        {
        }
        /**
         * Specifies whether or not a proxy is properly configured
         *
         * @return boolean true if a proxy is configured properly, false if not
         */
        public function isUsingProxy()
        {
        }
        /**
         * Specified whether or not a username and password have been provided for
         * use with an authenticated proxy
         *
         * @return boolean true if both proxyUser and proxyPassword are present
         */
        public function isAuthenticatedProxy()
        {
        }
        /**
         * returns http protocol depending on environment
         *
         * @return string http || https
         */
        public function protocol()
        {
        }
        /**
         * returns gateway server name depending on environment
         *
         * @return string server domain name
         */
        public function serverName()
        {
        }
        /**
         * returns Braintree GraphQL server name depending on environment
         *
         * @return string graphql domain name
         */
        public function graphQLServerName()
        {
        }
        /**
         * returns boolean indicating SSL is on or off for this session,
         * depending on environment
         *
         * @return boolean
         */
        public function sslOn()
        {
        }
        /**
         * log message to default logger
         *
         * @param string $message to log
         *
         * @return string
         */
        public function logMessage($message)
        {
        }
    }
    /**
     * Braintree ApplePayCard module
     * Creates and manages Braintree Apple Pay cards
     *
     * See our reference docs for a complete list of properties {@link https://developer.paypal.com/braintree/docs/reference/response/apple-pay-card/php}<br />
     */
    class ApplePayCard extends \Braintree\Base
    {
        // Card Type
        const AMEX = 'Apple Pay - American Express';
        const MASTER_CARD = 'Apple Pay - MasterCard';
        const VISA = 'Apple Pay - Visa';
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * checks whether the card is expired based on the current date
         *
         * @return boolean
         */
        public function isExpired()
        {
        }
        /**
         *  factory method: returns an instance of ApplePayCard
         *  to the requesting method, with populated properties
         *
         * @param mixed $attributes of the ApplePayCard object
         *
         * @return ApplePayCard
         */
        public static function factory($attributes)
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $applePayCardAttribs array of Apple Pay card properties
         *
         * @return void
         */
        protected function _initialize($applePayCardAttribs)
        {
        }
    }
    /**
     * Braintree AchMandate module
     *
     * See our {link https://developer.paypal.com/braintree/docs/reference/response/us-bank-account/php#ach_mandate developer docs} for information on attributes
     */
    class AchMandate extends \Braintree\Base
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $achAttribs array of achMandate data
         *
         * @return void
         */
        protected function _initialize($achAttribs)
        {
        }
        /**
         *  factory method: returns an instance of AchMandate
         *  to the requesting method, with populated properties
         *
         * @param array $attributes response object attributes
         *
         * @return AchMandate
         */
        public static function factory($attributes)
        {
        }
    }
    /**
     * Braintree TransactionReview
     *
     * A class of information related to when a transaction is manually reviewed in the Fraud Protection Dashboard.
     *
     * For more information, see {@link https://developer.paypal.com/braintree/docs/guides/premium-fraud-management-tools/overview our developer docs}
     */
    class TransactionReview extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return TransactionReview
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        protected function _initialize($attributes)
        {
        }
    }
    /**
     * Braintree PaymentMethodCustomerDataUpdatedMetadata module
     */
    class PaymentMethodCustomerDataUpdatedMetadata extends \Braintree\Base
    {
        /**
         *  factory method: returns an instance of PaymentMethodCustomerDataUpdatedMetadata
         *  to the requesting method, with populated properties
         *
         * @param array $attributes used to create the object
         *
         * @return PaymentMethodCustomerDataUpdatedMetadata
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($metadataAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    class MerchantGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        public function create($attribs)
        {
        }
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Braintree TransactionGateway processor
     * Creates and manages transactions
     *
     * // phpcs:ignore Generic.Files.LineLength
     * For more detailed information on Transactions, see {@link https://developer.paypal.com/braintree/docs/reference/response/transaction/php our developer docs}
     */
    class TransactionGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Create a new transaction by copying all the attributes, except amount, of the original transaction
         *
         * Instead of cloning transactions, a better practice in most cases is to use the Vault to save and reuse payment method or customer information
         *
         * @param string $transactionId to be cloned
         * @param mixed  $attribs       containing additional request parameters
         *
         * @see PaymentMethodGateway
         * @see CustomerGateway
         *
         * @return Result\Successful|Result\Error
         */
        public function cloneTransaction($transactionId, $attribs)
        {
        }
        private function create($attribs)
        {
        }
        private function createNoValidate($attribs)
        {
        }
        /**
         * creates a full array signature of a valid gateway request
         *
         * @return array gateway request signature format
         */
        public static function cloneSignature()
        {
        }
        /**
         * creates a full array signature of a valid gateway request
         *
         * @return array gateway request signature format
         */
        public static function createSignature()
        {
        }
        /**
         * creates a full array signature of a valid gateway request
         *
         * @return array gateway request signature format
         */
        public static function submitForSettlementSignature()
        {
        }
        /**
         * creates a full array signature of a valid gateway request
         *
         * @return array gateway request signature format
         */
        public static function updateDetailsSignature()
        {
        }
        /**
         * creates a full array signature of a valid gateway request
         *
         * @return array gateway request signature format
         */
        public static function refundSignature()
        {
        }
        /**
         * Request a credit to a payment method
         *
         * @param array $attribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function credit($attribs)
        {
        }
        /**
         * Request a credit to a payment method. Returns either a Transaction or error
         *
         * @param array $attribs containing request parameters
         *
         * @return Transaction|Result\Error
         */
        public function creditNoValidate($attribs)
        {
        }
        /**
         * Retrieve transaction information given its ID
         *
         * @param string $id unique identifier of the transaction
         *
         * @return Transaction|Exception\NotFound
         */
        public function find($id)
        {
        }
        /**
         * Request a new sale
         *
         * @param array $attribs (Note: $recurring param is deprecated. Use $transactionSource instead)
         *
         * @return Result\Successful|Result\Error
         */
        public function sale($attribs)
        {
        }
        /**
         * Request a new sale. Returns a Transaction object instead of a Result
         *
         * @param mixed $attribs containing any request parameters
         *
         * @return Transaction|Result\Error
         */
        public function saleNoValidate($attribs)
        {
        }
        /**
         * Returns a ResourceCollection of transactions matching the search query.
         *
         * If <b>query</b> is a string, the search will be a basic search.
         * If <b>query</b> is a hash, the search will be an advanced search.
         * // phpcs:ignore Generic.Files.LineLength
         * For more detailed information and examples, see {@link https://developer.paypal.com/braintree/docs/reference/request/transaction/search/php our developer docs}
         *
         * @param mixed $query search query
         *
         * @return ResourceCollection
         */
        public function search($query)
        {
        }
        /**
         * Function to fetch results in building paged reults
         *
         * @param mixed $query including method arguments
         * @param array $ids   to use in searching
         *
         * @return array
         */
        public function fetch($query, $ids)
        {
        }
        /**
         * Adjusts the authorization amount of a transaction
         *
         * @param string $transactionId unique identifier
         * @param string $amount        tp be adjusted
         *
         * @return Result\Successful|Result\Error
         */
        public function adjustAuthorization($transactionId, $amount)
        {
        }
        /**
         * void a transaction by id
         *
         * @param string $transactionId unique identifier
         *
         * @return Result\Successful|Result\Error
         */
        public function void($transactionId)
        {
        }
        /**
         * void a transaction by id. Returns a Transaction instead of Result\Successful
         *
         * @param string $transactionId unique identifier
         *
         * @return Transaction|Result\Error
         */
        public function voidNoValidate($transactionId)
        {
        }
        /**
         * Submits  an authorized transaction be captured and submitted for settlement.
         *
         * @param string      $transactionId uniquq identifier
         * @param string|null $amount        to be submitted for settlement
         * @param array       $attribs       containing any additional request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function submitForSettlement($transactionId, $amount = null, $attribs = [])
        {
        }
        /**
         * Submits  an authorized transaction be captured and submitted for settlement. Returns a Transaction object on success
         *
         * @param string      $transactionId uniquq identifier
         * @param string|null $amount        to be submitted for settlement
         * @param array       $attribs       containing any additional request parameters
         *
         * @return Transaction|Exception
         */
        public function submitForSettlementNoValidate($transactionId, $amount = null, $attribs = [])
        {
        }
        /**
         * Update certain details for a transaction that has been submitted for settlement
         *
         * @param string $transactionId to be updated
         * @param array  $attribs       attributes to be updated in the request
         *
         * @return Result\Successful|Result\Error
         */
        public function updateDetails($transactionId, $attribs = [])
        {
        }
        /**
         * Settle multiple partial amounts against the same authorization
         *
         * @param string $transactionId unque identifier of the transaction to be submitted for settlement
         * @param string $amount        optional
         * @param mixed  $attribs       any additional request parameters
         *
         * @return Result\Successful|Exception\NotFound
         */
        public function submitForPartialSettlement($transactionId, $amount, $attribs = [])
        {
        }
        /**
         * Specific to Marketplace merchants
         *
         * @param string $transactionId unque identifier of the transaction to be held in escrow
         *
         * @return Result\Successful|Exception\NotFound
         */
        public function holdInEscrow($transactionId)
        {
        }
        /**
         * Specific to Marketplace merchants
         *
         * @param string $transactionId unque identifier of the transaction to be released from escrow
         *
         * @return Result\Successful|Exception\NotFound
         */
        public function releaseFromEscrow($transactionId)
        {
        }
        /**
         * Specific to Marketplace merchants
         *
         * @param string $transactionId unque identifier of the transaction whose escrow release is to be canceled
         *
         * @return Result\Successful|Exception\NotFound
         */
        public function cancelRelease($transactionId)
        {
        }
        /**
         * Request a refund to a payment method
         *
         * @param string $transactionId     unque identifier of the transaction to be refunded
         * @param mixed  $amount_or_options if a string amount, the amount to be refunded, if array of options, additional request parameters
         *
         * @return Result\Successful|Exception\NotFound
         */
        public function refund($transactionId, $amount_or_options = null)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doCreate($subPath, $params)
        {
        }
        /**
         * verifies that a valid transaction id is being used
         *
         * @param string transaction id
         * @throws InvalidArgumentException
         *
         * @return null
         */
        private function _validateId($id = null)
        {
        }
        /**
         * generic method for validating incoming gateway responses
         *
         * creates a new Transaction object and encapsulates
         * it inside a Result\Successful object, or
         * encapsulates a Errors object inside a Result\Error
         * alternatively, throws an Unexpected exception if the response is invalid.
         *
         * @param array $response gateway response values
         *
         * @throws Exception\Unexpected
         *
         * @return Result\Successful|Result\Error
         */
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * KeyValueNode class
     *
     * @see TransactionSearch refund
     */
    class KeyValueNode
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($name)
        {
        }
        /*
         * Sets search term to a value
         *
         * @param string $value to be assigned
         *
         * @return object $this
         */
        public function is($value)
        {
        }
        /*
         * turns a search term into a param
         *
         * @return object searchTerm
         */
        public function toParam()
        {
        }
    }
    /**
     * Braintree EndsWithNode
     * EndsWithNode is an object for search elements to the Braintree API
     */
    class EndsWithNode
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($name)
        {
        }
        /*
         * sets search terms to include the value for key "ends_with"
         *
         * @param string $value to be sent
         *
         * @return self
         */
        public function endsWith($value)
        {
        }
        /*
         * Returns params
         *
         * @return object
         */
        public function toParam()
        {
        }
    }
    /**
     * Manages Braintree PaymentMethodParser module
     */
    class PaymentMethodParser
    {
        /**
         * Creates instances of the payment method in the response object
         *
         * @param mixed $response from Braintree API
         *
         * @return mixed|Exception
         */
        public static function parsePaymentMethod($response)
        {
        }
    }
    /**
     * Disbursement class
     * Module used in parsing Webhooks
     */
    class Disbursement extends \Braintree\Base
    {
        const TYPE_CREDIT = "credit";
        const TYPE_DEBIT = "debit";
        private $_merchantAccount;
        protected function _initialize($disbursementAttribs)
        {
        }
        /*
         * Retrieve the transactions associated with a disbursement
         *
         * @return ResourceCollection
         */
        public function transactions()
        {
        }
        /**
         * Creates an instance of a Disbursement from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Disbursement
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /*
         * Determines if a Disbursement is a debit
         *
         * @return bool
         */
        public function isDebit()
        {
        }
        /*
         * Determines if a Disbursement is a credit
         *
         * @return bool
         */
        public function isCredit()
        {
        }
    }
    /**
     * Braintree GraphQL service
     * process GraphQL requests using curl
     */
    class GraphQL extends \Braintree\Http
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($config)
        {
        }
        /**
         * Sets headers for requests via GraphQL
         *
         * @return array request headers
         */
        public function graphQLHeaders()
        {
        }
        /**
         * Makes the API request to GraphQL API
         *
         * @param mixed $definition containing GraphQL query
         * @param mixed $variables  optional, any variables to be included in GraphQL request
         *
         * @return object result
         */
        public function request($definition, $variables = null)
        {
        }
    }
}
namespace Braintree\Xml {
    /**
     * Braintree XML Parser
     */
    class Parser
    {
        /**
         * Converts an XML string into a multidimensional array
         *
         * @param string $xml string to be parsed
         *
         * @return array
         */
        public static function arrayFromXml($xml)
        {
        }
        /**
         * Converts a node to an array of values or nodes
         *
         * @param DOMNode @node
         *
         * @return mixed
         */
        private static function _nodeToArray($node)
        {
        }
        /**
         * Converts a node to a PHP value
         *
         * @param DOMNode $node
         *
         * @return mixed
         */
        private static function _nodeToValue($node)
        {
        }
        /**
         * Converts XML timestamps into DateTime instances
         *
         * @param string $timestamp
         *
         * @return DateTime
         */
        private static function _timestampToUTC($timestamp)
        {
        }
    }
    /**
     * Generates XML output from arrays using PHP's
     * built-in XMLWriter
     */
    class Generator
    {
        /**
         * arrays passed to this method should have a single root element
         * with an array as its value
         *
         * @param array $aData the array of data
         *
         * @return string XML string
         */
        public static function arrayToXml($aData)
        {
        }
        /**
         * Construct XML elements with attributes from an associative array.
         *
         * @param object $writer XMLWriter object
         * @param array  $aData  contains attributes and values
         *
         * @return void
         */
        private static function _createElementsFromArray(&$writer, $aData)
        {
        }
        /**
         * convert passed data into an array of attributeType, attributeName, and value
         * dates sent as DateTime objects will be converted to strings
         *
         * @param mixed $value
         *
         * @return array attributes and element value
         */
        private static function _generateXmlAttribute($value)
        {
        }
        /**
         * converts datetime back to xml schema format
         *
         * @param object $dateTime
         *
         * @return string XML schema formatted timestamp
         */
        private static function _convertDateTimeObjectToXmlTimestamp($dateTime)
        {
        }
        private static function _castDateTime($string)
        {
        }
    }
}
namespace Braintree {
    /**
     * Upload documents to Braintree in exchange for a DocumentUpload object.
     *
     * An example of creating a document upload with all available fields:
     *      $result = Braintree\DocumentUpload::create([
     *          "kind" => Braintree\DocumentUpload::EVIDENCE_DOCUMENT,
     *          "file" => $pngFile
     *      ]);
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/document-upload developer docs} for information on attributes
     */
    class DocumentUpload extends \Braintree\Base
    {
        /* DocumentUpload Kind */
        const EVIDENCE_DOCUMENT = "evidence_document";
        protected function _initialize($documentUploadAttribs)
        {
        }
        /**
         * Creates a DocumentUpload object
         *
         * @param mixed $params containing:
         *                      kind - The kind of document
         *                      file - The open file to upload
         *
         * @throws InvalidArgumentException if the params are not expected
         *
         * @return Result\Successful|Result\Error
         */
        public static function create($params)
        {
        }
        /**
         * Creates an instance of a DocumentUpload from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return DocumentUpload
         */
        public static function factory($attributes)
        {
        }
    }
    /**
     * Bank Identification Number (BIN) Data Class
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/payment-method-nonce/php#bin_data developer docs} for information on attributes
     */
    class BinData extends \Braintree\Base
    {
        /**
         * Creates an instance of an BinData from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return BinData
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree SamsungPayCard module
     * Creates and manages Braintree SamsungPayCards
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/samsung-pay-card developer docs} for information on attributes
     */
    class SamsungPayCard extends \Braintree\Base
    {
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * checks whether the card is expired based on the current date
         *
         * @return boolean
         */
        public function isExpired()
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $creditCardAttribs array of creditcard data
         *
         * @return void
         */
        protected function _initialize($creditCardAttribs)
        {
        }
        /**
         * returns false if comparing object is not a SamsungPayCard,
         * or is a SamsungPayCard with a different id
         *
         * @param object $otherSamsungPayCard customer to compare against
         *
         * @return boolean
         */
        public function isEqual($otherSamsungPayCard)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return SamsungPayCard
         */
        public static function factory($attributes)
        {
        }
    }
    /**
     * Braintree DiscountGateway module
     *
     * Manages subscription discounts
     */
    class DiscountGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /*
         * Get all discounts
         *
         * @return array of discount objects
         */
        public function all()
        {
        }
    }
    /**
     * Braintree FacilitatedDetails class
     *
     * If the transaction request was performed using payment information from a third party via the Grant API or Shared Vault, these fields will capture information about the merchant of record. These fields are primarily useful for the third party.
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction/php#facilitated_details developer docs} for information on attributes
     */
    class FacilitatedDetails extends \Braintree\Base
    {
        /**
         * Creates an instance of a FacilitatedDetails from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return FacilitatedDetails
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree UsBankAccountVerificationGateway module
     */
    /**
     * Manages Braintree UsBankAccountVerifications
     *
     * <b>== More information ==</b>
     */
    class UsBankAccountVerificationGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * find a usBankAccountVerification by token
         *
         * @param string $token unique id
         *
         * @throws Exception\NotFound
         *
         * @return UsBankAccountVerification
         */
        public function find($token)
        {
        }
        /**
         * Returns a ResourceCollection of US bank account verifications matching the search query.
         *
         * @param mixed $query search query
         *
         * @return ResourceCollection
         */
        public function search($query)
        {
        }
        /**
         * complete micro transfer verification by confirming the transfer amounts
         *
         * @param string $token   unique id
         * @param array  $amounts amounts deposited in micro transfer
         *
         * @throws Exception\Unexpected
         *
         * @return UsBankAccountVerification
         */
        public function confirmMicroTransferAmounts($token, $amounts)
        {
        }
        /**
         * generic method for validating incoming gateway responses
         *
         * creates a new UsBankAccountVerification object and encapsulates
         * it inside a Result\Successful object, or
         * encapsulates a Errors object inside a Result\Error
         * alternatively, throws an Unexpected exception if the response is invalid.
         *
         * @param array $response gateway response values
         *
         * @throws Exception\Unexpected
         *
         * @return Result\Successful|Result\Error
         */
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Braintree UsBankAccount module
     * Manages Braintree UsBankAccounts
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/us-bank-account developer docs} for information on attributes
     */
    class UsBankAccount extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return UsBankAccount
         */
        public static function factory($attributes)
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $usBankAccountAttribs array of usBankAccount data
         *
         * @return mixed
         */
        protected function _initialize($usBankAccountAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $token the payment method identifier
         *
         * @see USBankAccountGateway::find()
         *
         * @return UsBankAccount|Error
         */
        public static function find($token)
        {
        }
        /**
         * DO NOT USE, Use Transaction#sale instead. If you do choose to use this function, note that the subsequent transaction (if successful) will be automatically submitted for settlement.
         *
         * @param string $token              the payment method identifier
         * @param array  $transactionAttribs all other transaction parameters
         *
         * @return UsBankAccount|Error
         */
        public static function sale($token, $transactionAttribs)
        {
        }
    }
    /**
     * CredentialsParser registry
     */
    class CredentialsParser
    {
        private $_clientId;
        private $_clientSecret;
        private $_accessToken;
        private $_environment;
        private $_merchantId;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attribs)
        {
        }
        private static $_validEnvironments = ['development', 'integration', 'sandbox', 'production', 'qa'];
        /*
         * Parses environment credentials and sets the _environment variable
         *
         * @return object|Exception\Configuration
         */
        public function parse()
        {
        }
        /*
         * Checks that the environment passed is valid
         *
         * @param string $environment
         *
         * @return self|Exception\Configuration
         */
        public static function assertValidEnvironment($environment)
        {
        }
        private function _parseClientCredential($credentialType, $value, $expectedValuePrefix)
        {
        }
        private function _parseAccessToken()
        {
        }
        /*
         * Getter methid to retrieve the ClientId
         *
         * @return string
         */
        public function getClientId()
        {
        }
        /*
         * Getter methid to retrieve the ClientSecret
         *
         * @return string
         */
        public function getClientSecret()
        {
        }
        /*
         * Getter methid to retrieve the AccessToken
         *
         * @return string
         */
        public function getAccessToken()
        {
        }
        /*
         * Getter methid to retrieve the Environment
         *
         * @return string
         */
        public function getEnvironment()
        {
        }
        /*
         * Getter methid to retrieve the Merchant Id
         *
         * @return string
         */
        public function getMerchantId()
        {
        }
    }
    /**
     * Braintree ResourceCollection
     * ResourceCollection is a container object for result data
     *
     * stores and retrieves search results and aggregate data
     *
     * example:
     * <code>
     * $result = Customer::all();
     *
     * foreach($result as $transaction) {
     *   print_r($transaction->id);
     * }
     * </code>
     */
    class ResourceCollection implements \Iterator
    {
        private $_batchIndex;
        private $_ids;
        private $_index;
        private $_items;
        private $_pageSize;
        private $_pager;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($response, $pager)
        {
        }
        /**
         * returns the current item when iterating with foreachi
         *
         * @return object
         */
        #[\ReturnTypeWillChange]
        public function current()
        {
        }
        /**
         * returns the first item in the collection
         *
         * @return mixed
         */
        public function firstItem()
        {
        }
        /*
         * returns null
         *
         * @return null
         */
        #[\ReturnTypeWillChange]
        public function key()
        {
        }
        /**
         * advances to the next item in the collection when iterating with foreach
         *
         * @return object
         */
        #[\ReturnTypeWillChange]
        public function next()
        {
        }
        /**
         * rewinds the testIterateOverResults collection to the first item when iterating with foreach
         *
         * @return object
         */
        #[\ReturnTypeWillChange]
        public function rewind()
        {
        }
        /**
         * returns whether the current item is valid when iterating with foreach
         *
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function valid()
        {
        }
        /*
         * returns a maximum count
         *
         * @return int
         */
        public function maximumCount()
        {
        }
        private function _getNextPage()
        {
        }
        private function _getPage($ids)
        {
        }
        /**
         * returns all IDs in the collection
         *
         * @return array
         */
        public function getIds()
        {
        }
    }
    /**
     * Braintree LocalPaymentReversed module
     */
    /**
     * Manages Braintree LocalPaymentReversed
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/webhooks/local-payment-methods developer docs} for more information
     */
    class LocalPaymentReversed extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return LocalPaymentReversed
         */
        public static function factory($attributes)
        {
        }
        /* instance methods */
        /**
         * sets instance properties from an array of values
         *
         * @param array $LocalPaymentReversedAttribs array of localPaymentReversed data
         *
         * @return void
         */
        protected function _initialize($localPaymentReversedAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree GraphQL Client
     * process GraphQL requests using curl
     */
    class GraphQLClient
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($config)
        {
        }
        /*
         * Make a GraphQL API request
         *
         * @param object $definition of the query
         * @param object $variables optional
         *
         * @return object result
         */
        public function query($definition, $variables = null)
        {
        }
    }
    /**
     * Class for setting transaction search queries
     */
    class TransactionSearch
    {
        /*
         * Create a new range node for amount
         *
         * @return RangeNode
         */
        public static function amount()
        {
        }
        /*
         * Create a new range node for authorization expired at
         *
         * @return RangeNode
         */
        public static function authorizationExpiredAt()
        {
        }
        /*
         * Create a new range node for authorization at
         *
         * @return RangeNode
         */
        public static function authorizedAt()
        {
        }
        /*
         * Create a new text node for billing company
         *
         * @return TextNode
         */
        public static function billingCompany()
        {
        }
        /*
         * Create a new text node for billing country name
         *
         * @return TextNode
         */
        public static function billingCountryName()
        {
        }
        /*
         * Create a new text node for billing extended address
         *
         * @return TextNode
         */
        public static function billingExtendedAddress()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Given name. First name is US ethnocentric
        /*
         * Create a new text node for billing first or given name
         *
         * @return TextNode
         */
        public static function billingFirstName()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Surname. Last name is US ethnocentric
        /*
         * Create a new text node for billing last or surname
         *
         * @return TextNode
         */
        public static function billingLastName()
        {
        }
        /*
         * Create a new text node for billing locality or city
         *
         * @return TextNode
         */
        public static function billingLocality()
        {
        }
        /*
         * Create a new text node for billing postal code
         *
         * @return TextNode
         */
        public static function billingPostalCode()
        {
        }
        /*
         * Create a new text node for billing region or state
         *
         * @return TextNode
         */
        public static function billingRegion()
        {
        }
        /*
         * Create a new text node for billing street address
         *
         * @return TextNode
         */
        public static function billingStreetAddress()
        {
        }
        /*
         * Create a new range node for created at
         *
         * @return RangeNode
         */
        public static function createdAt()
        {
        }
        // NEXT_MAJOR_VERSION we may want to rename this to just cardholder name
        /*
         * Create a new text node for cardholder name
         *
         * @return TextNode
         */
        public static function creditCardCardholderName()
        {
        }
        /*
         * Create a new equality node for card expiration date
         *
         * @return EqualityNode
         */
        public static function creditCardExpirationDate()
        {
        }
        /*
         * Create a new partial match node for credit card number
         *
         * @return PartialMatchNode
         */
        public static function creditCardNumber()
        {
        }
        /*
         * Create a new text node for card unigue identifier
         *
         * @return TextNode
         */
        public static function creditCardUniqueIdentifier()
        {
        }
        /*
         * Create a new text node for currency
         *
         * @return TextNode
         */
        public static function currency()
        {
        }
        /*
         * Create a new text node for customer company
         *
         * @return TextNode
         */
        public static function customerCompany()
        {
        }
        /*
         * Create a new text node for customer email
         *
         * @return TextNode
         */
        public static function customerEmail()
        {
        }
        /*
         * Create a new text node for customer fax
         *
         * @return TextNode
         */
        public static function customerFax()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Given name. First name is US ethnocentric
        /*
         * Create a new text node for billing first or given name
         *
         * @return TextNode
         */
        public static function customerFirstName()
        {
        }
        /*
         * Create a new text node for customer id
         *
         * @return TextNode
         */
        public static function customerId()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Surname. Last name is US ethnocentric
        /*
         * Create a new text node for billing last or surname
         *
         * @return TextNode
         */
        public static function customerLastName()
        {
        }
        /*
         * Create a new text node for customer phone
         *
         * @return TextNode
         */
        public static function customerPhone()
        {
        }
        /*
         * Create a new text node for customer website
         *
         * @return TextNode
         */
        public static function customerWebsite()
        {
        }
        /*
         * Create a new range node for disbursement date
         *
         * @return RangeNode
         */
        public static function disbursementDate()
        {
        }
        /*
         * Create a new range node for dispute date
         *
         * @return RangeNode
         */
        public static function disputeDate()
        {
        }
        /*
         * Create a new range node for failed at date
         *
         * @return RangeNode
         */
        public static function failedAt()
        {
        }
        /*
         * Create a new range node for gateway rejected at date
         *
         * @return RangeNode
         */
        public static function gatewayRejectedAt()
        {
        }
        /*
         * Create a new text node for id
         *
         * @return TextNode
         */
        public static function id()
        {
        }
        /*
         * Create a multiple value node for customer ids
         *
         * @return MultipleValueNode
         */
        public static function ids()
        {
        }
        /*
         * Create a multiple value node for merchant account id
         *
         * @return MultipleValueNode
         */
        public static function merchantAccountId()
        {
        }
        /*
         * Create a new text node for order id
         *
         * @return TextNode
         */
        public static function orderId()
        {
        }
        /*
         * Create a multiple value node for payment instrument type
         *
         * @return MultipleValueNode
         */
        public static function paymentInstrumentType()
        {
        }
        /*
         * Create a new text node for payment method token
         *
         * @return TextNode
         */
        public static function paymentMethodToken()
        {
        }
        /*
         * Create a new text node for paypal authorization id
         *
         * @return TextNode
         */
        public static function paypalAuthorizationId()
        {
        }
        /*
         * Create a new text node for paypal payer email
         *
         * @return TextNode
         */
        public static function paypalPayerEmail()
        {
        }
        /*
         * Create a new text node for paypal payment id
         *
         * @return TextNode
         */
        public static function paypalPaymentId()
        {
        }
        /*
         * Create a new text node for processor authorization code
         *
         * @return TextNode
         */
        public static function processorAuthorizationCode()
        {
        }
        /*
         * Create a new range node for processor declined at
         *
         * @return RangeNode
         */
        public static function processorDeclinedAt()
        {
        }
        /*
         * Create a new key value node for refund
         *
         * @return KeyValueNode
         */
        public static function refund()
        {
        }
        /*
         * Create a new range node for settled at
         *
         * @return RangeNode
         */
        public static function settledAt()
        {
        }
        /*
         * Create a new text node for settlement batch id
         *
         * @return TextNode
         */
        public static function settlementBatchId()
        {
        }
        /*
         * Create a new text node for shipping company
         *
         * @return TextNode
         */
        public static function shippingCompany()
        {
        }
        /*
         * Create a new text node for shipping country name
         *
         * @return TextNode
         */
        public static function shippingCountryName()
        {
        }
        /*
         * Create a new text node for shipping extended address
         *
         * @return TextNode
         */
        public static function shippingExtendedAddress()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Given name. First name is US ethnocentric
        /*
         * Create a new text node for shipping first or given name
         *
         * @return TextNode
         */
        public static function shippingFirstName()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Surname. Last name is US ethnocentric
        /*
         * Create a new text node for shipping last or surname
         *
         * @return TextNode
         */
        public static function shippingLastName()
        {
        }
        /*
         * Create a new text node for shipping locality or city
         *
         * @return TextNode
         */
        public static function shippingLocality()
        {
        }
        /*
         * Create a new text node for shipping postal code
         *
         * @return TextNode
         */
        public static function shippingPostalCode()
        {
        }
        /*
         * Create a new text node for shipping region or state
         *
         * @return TextNode
         */
        public static function shippingRegion()
        {
        }
        /*
         * Create a new text node for shipping street address
         *
         * @return TextNode
         */
        public static function shippingStreetAddress()
        {
        }
        /*
         * Create a new range node for submitted for settlement at date
         *
         * @return RangeNode
         */
        public static function submittedForSettlementAt()
        {
        }
        /*
         * Create a new text node for store id
         *
         * @return TextNode
         */
        public static function storeId()
        {
        }
        /*
         * Create a new multiple value node for store ids
         *
         * @return MultipleValueNode
         */
        public static function storeIds()
        {
        }
        /*
         * Create a new multiple value node for user
         *
         * @return MultipleValueNode
         */
        public static function user()
        {
        }
        /*
         * Create a new range node for submitted for voided at date
         *
         * @return RangeNode
         */
        public static function voidedAt()
        {
        }
        /*
         * Create a new multiple value node for created using
         *
         * @return MultipleValueNode
         */
        public static function createdUsing()
        {
        }
        /*
         * Create a new multiple value node for credit card type
         *
         * @return MultipleValueNode
         */
        public static function creditCardCardType()
        {
        }
        /*
         * Create a new multiple value node for credit card customer location
         *
         * @return MultipleValueNode
         */
        public static function creditCardCustomerLocation()
        {
        }
        /*
         * Create a new multiple value node for source
         *
         * @return MultipleValueNode
         */
        public static function source()
        {
        }
        /*
         * Create a new multiple value node for status
         *
         * @return MultipleValueNode
         */
        public static function status()
        {
        }
        /*
         * Create a new multiple value node for type
         *
         * @return MultipleValueNode
         */
        public static function type()
        {
        }
    }
    /**
     * Plan class object. A plan is a template for subscriptions.
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/plan developer docs} for information on attributes
     */
    class Plan extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Plan
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
        /**
         * static methods redirecting to gateway class
         *
         * @see PlanGateway::all()
         *
         * @return Plan[]
         */
        public static function all()
        {
        }
        /**
         * static methods redirecting to gateway class
         *
         * @param array $attributes response object attributes
         *
         * @return Plan
         */
        public static function create($attributes)
        {
        }
        /**
         * static methods redirecting to gateway class
         *
         * @param $id int planId
         *
         * @return Plan
         */
        public static function find($id)
        {
        }
        /**
         * static methods redirecting to gateway class
         *
         * @param $planId     int planId
         * @param array $attributes response object attributes
         *
         * @return Plan
         */
        public static function update($planId, $attributes)
        {
        }
    }
    /**
     * Braintree SettlementBatchSummaryGateway module
     * Creates and manages SettlementBatchSummarys
     */
    class SettlementBatchSummaryGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Create a Settlement Batch Summary report.
         *
         * @param string $settlement_date    A string representing the date of the settlement batch
         * @param string $groupByCustomField A string representing a transaction's custom field that you wish to group by
         *
         * @return SettlementBatchSummary|Result\Error
         */
        public function generate($settlement_date, $groupByCustomField = null)
        {
        }
        private function _underscoreCustomField($groupByCustomField, $records)
        {
        }
        private function _verifyGatewayResponse($response)
        {
        }
    }
    /**
     * Creates an instance of AuthorizationAdjustment as returned from a transaction
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/transaction#authorization-adjustments developer docs} for information on attributes
     */
    class AuthorizationAdjustment extends \Braintree\Base
    {
        /**
         * Creates an instance of an AuthorizationAdjustment from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return AuthorizationAdjustment
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($authorizationAdjustmentAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Shipping methods module
     * Shipping methods can be assigned to shipping addresses when
     * creating transactions.
     */
    class ShippingMethod
    {
        const SAME_DAY = 'same_day';
        const NEXT_DAY = 'next_day';
        const PRIORITY = 'priority';
        const GROUND = 'ground';
        const ELECTRONIC = 'electronic';
        const SHIP_TO_STORE = 'ship_to_store';
    }
}
namespace Braintree\Dispute {
    /**
     * Transaction details for a dispute
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/dispute#transaction developer docs} for information on attributes
     */
    class TransactionDetails extends \Braintree\Instance
    {
    }
    /**
     * Evidence details for a dispute
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/dispute#evidence developer docs} for information on attributes
     */
    class EvidenceDetails extends \Braintree\Instance
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
    }
    /**
     * Status History for a dispute
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/dispute#status_history developer docs} for information on attributes
     */
    class StatusHistoryDetails extends \Braintree\Instance
    {
    }
    /**
     * PayPal Message for a dispute
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/dispute#paypal_messages developer docs} for information on attributes
     */
    class PayPalMessageDetails extends \Braintree\Instance
    {
    }
}
namespace Braintree {
    /**
     * Braintree PayPalAccount module
     * Manages Braintree PayPalAccounts
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/paypal-account/php developer docs} for information on attributes
     */
    class PayPalAccount extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return PayPalAccount
         */
        public static function factory($attributes)
        {
        }
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $paypalAccountAttribs array of paypalAccount data
         *
         * @return void
         */
        protected function _initialize($paypalAccountAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $token paypal accountunique id
         *
         * @see PayPalGateway::find()
         *
         * @throws Exception\NotFound
         *
         * @return PayPalAccount
         */
        public static function find($token)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * if calling this method in context, $token
         * is the 2nd attribute. $token is not sent in object context.
         *
         * @param string $token      (optional)
         * @param array  $attributes including request parameters
         *
         * @see PayPalGateway::update()
         *
         * @return Result\Successful or Result\Error
         */
        public static function update($token, $attributes)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $token paypal account identifier
         *
         * @see PayPalGateway::delete()
         *
         * @return Result
         */
        public static function delete($token)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $token              paypal account identifier
         * @param array  $transactionAttribs containing request parameters
         *
         * @see PayPalGateway::sale()
         *
         * @return Result\Successful|Result\Error
         */
        public static function sale($token, $transactionAttribs)
        {
        }
    }
    /**
     * Braintree DisputeGateway module
     * Creates and manages Braintree Disputes
     */
    class DocumentUploadGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Accepts a dispute, given a dispute ID
         *
         * @param mixed $params containing:
         *                      kind - The kind of document
         *                      file - The open file to upload
         *
         * @throws InvalidArgumentException if the params are not expected
         *
         * @return Result\Successful|Result\Error
         */
        public function create($params)
        {
        }
        /*
         * Returns keys that are acceptable for create requests
         *
         * @see create
         */
        public static function createSignature()
        {
        }
    }
    /**
     * Class for setting subscription search queries
     */
    class SubscriptionSearch
    {
        /*
         * Create a new range node for billing cycles remaining
         *
         * @return RangeNode
         */
        public static function billingCyclesRemaining()
        {
        }
        /*
         * Create a new range node for days past due
         *
         * @return RangeNode
         */
        public static function daysPastDue()
        {
        }
        /*
         * Create a new text node for id
         *
         * @return TextNode
         */
        public static function id()
        {
        }
        /*
         * Create a multiple value node for in trial period
         *
         * @return MultipleValueNode
         */
        public static function inTrialPeriod()
        {
        }
        /*
         * Create a multiple value node for merchant account id
         *
         * @return MultipleValueNode
         */
        public static function merchantAccountId()
        {
        }
        /*
         * Create a new range node for next billing date
         *
         * @return RangeNode
         */
        public static function nextBillingDate()
        {
        }
        /*
         * Create a multiple value node for plan id
         *
         * @return MultipleValueNode
         */
        public static function planId()
        {
        }
        /*
         * Create a new range node for price
         *
         * @return RangeNode
         */
        public static function price()
        {
        }
        /*
         * Create a multiple value node for status
         *
         * @return MultipleValueNode
         */
        public static function status()
        {
        }
        /*
         * Create a new text node for transaction id
         *
         * @return TextNode
         */
        public static function transactionId()
        {
        }
        /*
         * Create a multiple value node for ids
         *
         * @return MultipleValueNode
         */
        public static function ids()
        {
        }
        /*
         * Create a new range node for created at
         *
         * @return RangeNode
         */
        public static function createdAt()
        {
        }
    }
}
namespace Braintree\Exception {
    /**
     * Raised when a Timeout occurs
     */
    class Timeout extends \Braintree\Exception
    {
    }
    /**
     * Raised when authentication fails.
     * This may be caused by an incorrect Configuration
     */
    class Authentication extends \Braintree\Exception
    {
    }
    /**
     * Raised when the webhook notification you attempt to parse has an invalid signature.
     *
     * @link https://developer.paypal.com/braintree/docs/reference/general/exceptions/php#invalid-signature
     */
    class InvalidSignature extends \Braintree\Exception
    {
    }
    /**
     * Raised when a test method is used in production.
     */
    class TestOperationPerformedInProduction extends \Braintree\Exception
    {
    }
    /**
     * Raised from non-validating methods when gateway validations fail.
     */
    class ValidationsFailed extends \Braintree\Exception
    {
    }
    /**
     * Raised when the connection fails
     *
     * @copyright 2015 Braintree, a division of PayPal, Inc.
     */
    class Connection extends \Braintree\Exception
    {
    }
    /**
     * Raised when a client request timeout occurs.
     */
    class RequestTimeout extends \Braintree\Exception
    {
    }
    /**
     * Raised when the Braintree library is not completely configured.
     *
     * @see Configuration
     */
    class Configuration extends \Braintree\Exception
    {
    }
    /**
     * Raised when the gateway service is unavailable.
     */
    class ServiceUnavailable extends \Braintree\Exception
    {
    }
    /**
     * Raised when the gateway request rate-limit is exceeded.
     */
    class TooManyRequests extends \Braintree\Exception
    {
    }
    /**
     * Raised when an error occurs that the client library is not built to handle.
     * This shouldn't happen.
     */
    class Unexpected extends \Braintree\Exception
    {
    }
    /**
     * Raised when the SSL certificate fails verification.
     */
    class SSLCertificate extends \Braintree\Exception
    {
    }
    /**
     * Raised when the SSL CaFile is not found.
     */
    class SSLCaFileNotFound extends \Braintree\Exception
    {
    }
    /**
     * Raised when the webhook challenge you attempt to verify is in an invalid format.
     *
     * @link https://developer.paypal.com/braintree/docs/reference/general/exceptions/php#invalid-challenge
     */
    class InvalidChallenge extends \Braintree\Exception
    {
    }
    /**
     * Raised when authorization fails
     * Raised when the API key being used is not authorized to perform
     * the attempted action according to the roles assigned to the user
     * who owns the API key.
     */
    class Authorization extends \Braintree\Exception
    {
    }
    /**
     * Raised when a client library must be upgraded.
     */
    class UpgradeRequired extends \Braintree\Exception
    {
    }
    /**
     * Raised when an unexpected server error occurs.
     */
    class ServerError extends \Braintree\Exception
    {
    }
    /**
     * Raised when a gateway response timeout occurs.
     */
    class GatewayTimeout extends \Braintree\Exception
    {
    }
    /**
     * Raised when a record could not be found.
     */
    class NotFound extends \Braintree\Exception
    {
    }
}
namespace Braintree {
    /**
     * Any applicable risk data associated with the transaction. For detailed reference information on properties, see the {@link developer docs https://developer.paypal.com/braintree/docs/reference/response/transaction#risk_data}.
     */
    class RiskData extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return RiskData
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
        /**
         * returns the rules triggered by the fraud provider when generating the decision.
         *
         * @return array of strings
         */
        public function decisionReasons()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    class SignatureService
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($key, $digest)
        {
        }
        public function sign($payload)
        {
        }
        public function hash($data)
        {
        }
    }
    /**
     * Braintree RevokedPaymentMethodMetadata module
     */
    /**
     * Manages Braintree RevokedPaymentMethodMetadata
     *
     * See our {@link https://developer.paypal.com/braintree/docs/guides/extend/grant-api/revocation developer docs} for more information
     */
    class RevokedPaymentMethodMetadata extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return RevokedPaymentMethodMetadata
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
}
namespace Braintree\Result {
    /**
     * Braintree US Bank Account Verification Result
     *
     * This object is returned as part of an Error Result; it provides
     * access to the credit card verification data from the gateway
     *
     * See our {@link https://developer.paypal.com/braintree/docs/guides/acv/server-side developer docs} for more information
     */
    class UsBankAccountVerification extends \Braintree\Base
    {
        // Status
        const FAILED = 'failed';
        const GATEWAY_REJECTED = 'gateway_rejected';
        const PROCESSOR_DECLINED = 'processor_declined';
        const VERIFIED = 'verified';
        const PENDING = 'pending';
        const TOKENIZED_CHECK = 'tokenized_check';
        const NETWORK_CHECK = 'network_check';
        const INDEPENDENT_CHECK = 'independent_check';
        const MICRO_TRANSFERS = 'micro_transfers';
        private $_gatewayRejectionReason;
        private $_status;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($attributes)
        {
        }
        /**
         * initializes instance properties from the keys/values of an array
         *
         * @param <type> $aAttribs array of properties to set - single level
         *
         * @return void
         */
        private function _initializeFromArray($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __get($name)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * returns an array of all possible US Bank Account Verification statuses
         *
         * @return array
         */
        public static function allStatuses()
        {
        }
        /**
         * returns an array of all possible US Bank Account Verification methods
         *
         * @return array
         */
        public static function allVerificationMethods()
        {
        }
    }
}
namespace Braintree {
    /**
     * Braintree UsBankAccountVerification module
     */
    /**
     * Manages Braintree UsBankAccountVerifications
     *
     * <b>== More information ==</b>
     */
    class UsBankAccountVerification extends \Braintree\Result\UsBankAccountVerification
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return UsBankAccountVerification
         */
        public static function factory($attributes)
        {
        }
        /* instance methods */
        /**
         * sets instance properties from an array of values
         *
         * @param array $usBankAccountVerificationAttribs array of usBankAccountVerification data
         *
         * @return void
         */
        protected function _initialize($usBankAccountVerificationAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $token unique id
         *
         * @see UsBankAccountVerificationGateway::find()
         *
         * @return UsBankAccountVerification
         */
        public static function find($token)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param mixed $query search query
         *
         * @see UsBankAccountVerificationGateway::search()
         *
         * @return ResourceCollection
         */
        public static function search($query)
        {
        }
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $token   unique id
         * @param array  $amounts micro transfer amounts
         *
         * @see UsBankAccountVerificationGateway::confirmMicroTransferAmounts()
         *
         * @return ResourceCollection
         */
        public static function confirmMicroTransferAmounts($token, $amounts)
        {
        }
    }
    /**
     * Class for setting credit card verification search queries
     */
    class CreditCardVerificationSearch
    {
        /*
         * Create a new text node for id
         *
         * @return TextNode
         */
        public static function id()
        {
        }
        // NEXT_MAJOR_VERSION can this just be cardholder name?
        /*
         * Create a new text node for credit card cardholder name
         *
         * @return TextNode
         */
        public static function creditCardCardholderName()
        {
        }
        /*
         * Create a new text node for billing address details postal code
         *
         * @return TextNode
         */
        public static function billingAddressDetailsPostalCode()
        {
        }
        /*
         * Create a new text node for customer email
         *
         * @return TextNode
         */
        public static function customerEmail()
        {
        }
        /*
         * Create a new text node for customer id
         *
         * @return TextNode
         */
        public static function customerId()
        {
        }
        /*
         * Create a new text node for payment method token
         *
         * @return TextNode
         */
        public static function paymentMethodToken()
        {
        }
        /*
         * Create a new equality node for credit card expiration date
         *
         * @return EqualityNode
         */
        public static function creditCardExpirationDate()
        {
        }
        /*
         * Create a new partial match node for credit card number
         *
         * @return PartialMatchNode
         */
        public static function creditCardNumber()
        {
        }
        /*
         * Create a new multiple value node for ids
         *
         * @return MultipleValueNode
         */
        public static function ids()
        {
        }
        /*
         * Create a new range node for created at
         *
         * @return RangeNode
         */
        public static function createdAt()
        {
        }
        //NEXT_MAJOR_VERSION can this just be card type?
        /*
         * Create a new multiple value node for credit card card type
         *
         * @return MultipleValueNode
         */
        public static function creditCardCardType()
        {
        }
        /*
         * Create a new multiple value node for status
         *
         * @return MultipleValueNode
         */
        public static function status()
        {
        }
    }
    /**
    * Braintree CustomerGateway module
    * Creates and manages Customers
    *
    // phpcs:ignore Generic.Files.LineLength
    * For more detailed information on Customers, see {@link https://developer.paypal.com/braintree/docs/reference/response/customer/php our developer docs}
    */
    class CustomerGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /*
         * Return all customers
         *
         * @return ResourceCollection
         */
        public function all()
        {
        }
        /**
         * Retrieve a customer
         *
         * @param array $query containing request params
         * @param int[] $ids   containing customer IDs
         *
         * @return Customer|Customer[]
         */
        public function fetch($query, $ids)
        {
        }
        /**
         * Creates a customer using the given +attributes+. If <tt>:id</tt> is not passed,
         * the gateway will generate it.
         *
         * <code>
         *   $result = Customer::create(array(
         *     'first_name' => 'John',
         *     'last_name' => 'Smith',
         *     'company' => 'Smith Co.',
         *     'email' => 'john@smith.com',
         *     'website' => 'www.smithco.com',
         *     'fax' => '419-555-1234',
         *     'phone' => '614-555-1234'
         *   ));
         *   if($result->success) {
         *     echo 'Created customer ' . $result->customer->id;
         *   } else {
         *     echo 'Could not create customer, see result->errors';
         *   }
         * </code>
         *
         * @param array $attribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function create($attribs = [])
        {
        }
        /**
         * attempts the create operation assuming all data will validate
         * returns a Customer object instead of a Result
         *
         * @param array $attribs of request parameters
         *
         * @throws Exception\ValidationError
         *
         * @return Customer
         */
        public function createNoValidate($attribs = [])
        {
        }
        /**
         * creates a full array signature of a valid create request
         *
         * @return array gateway create request format
         */
        public static function createSignature()
        {
        }
        /**
         * creates a full array signature of a valid update request
         *
         * @return array update request format
         */
        public static function updateSignature()
        {
        }
        /**
         * find a customer by id
         *
         * @param string $id                  customer Id
         * @param string $associationFilterId association filter Id
         *
         * @throws Exception\NotFound
         *
         * @return Customer|boolean The customer object or false if the request fails.
         */
        public function find($id, $associationFilterId = null)
        {
        }
        /**
         * credit a customer for the passed transaction
         *
         * @param integer $customerId         unique identifier
         * @param array   $transactionAttribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function credit($customerId, $transactionAttribs)
        {
        }
        /**
         * credit a customer, assuming validations will pass
         *
         * returns a Transaction object on success
         *
         * @param integer $customerId         unique identifier
         * @param array   $transactionAttribs containing request parameters
         *
         * @throws Exception\ValidationError
         *
         * @return Transaction
         */
        public function creditNoValidate($customerId, $transactionAttribs)
        {
        }
        /**
         * delete a customer by id
         *
         * @param string $customerId unique identifier
         *
         * @return Result\Successful
         */
        public function delete($customerId)
        {
        }
        /**
         * create a new sale for a customer
         *
         * @param string $customerId         unique identifier
         * @param array  $transactionAttribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function sale($customerId, $transactionAttribs)
        {
        }
        /**
         * create a new sale for a customer, assuming validations will pass
         *
         * returns a Transaction object on success
         *
         * @param string $customerId         unique identifier
         * @param array  $transactionAttribs containing request parameters
         *
         * @throws Exception\ValidationsFailed
         *
         * @return Transaction
         */
        public function saleNoValidate($customerId, $transactionAttribs)
        {
        }
        /**
        * Returns a ResourceCollection of customers matching the search query.
        *
        * If <b>query</b> is a string, the search will be a basic search.
        * If <b>query</b> is a hash, the search will be an advanced search.
        // phpcs:ignore Generic.Files.LineLength
        * For more detailed information and examples, see {@link https://developer.paypal.com/braintree/docs/reference/request/customer/search/php our developer docs}
        *
        * @param mixed $query search query
        *
        * @throws InvalidArgumentException
        *
        * @return ResourceCollection
        */
        public function search($query)
        {
        }
        /**
         * updates the customer record
         *
         * if calling this method in static context, customerId
         * is the 2nd attribute. customerId is not sent in object context.
         *
         * @param string $customerId to be updated
         * @param array  $attributes containing request params
         *
         * @return Result\Successful|Result\Error
         */
        public function update($customerId, $attributes)
        {
        }
        /**
         * update a customer record, assuming validations will pass
         *
         * if calling this method in static context, customerId
         * is the 2nd attribute. customerId is not sent in object context.
         * returns a Customer object on success
         *
         * @param string $customerId unique identifier
         * @param array  $attributes request parameters
         *
         * @throws Exception\ValidationsFailed
         *
         * @return Customer
         */
        public function updateNoValidate($customerId, $attributes)
        {
        }
        protected function _initialize($customerAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * returns false if comparing object is not a Customer,
         * or is a Customer with a different id
         *
         * @param object $otherCust customer to compare against
         *
         * @return boolean
         */
        public function isEqual($otherCust)
        {
        }
        /**
         * returns an array containt all of the customer's payment methods
         *
         * @return array
         */
        public function paymentMethods()
        {
        }
        /**
         * returns the customer's default payment method
         *
         * @return CreditCard|PayPalAccount|ApplePayCard|GooglePayCard
         */
        public function defaultPaymentMethod()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function _defaultPaymentMethodFilter($paymentMethod)
        {
        }
        protected $_attributes = ['addresses' => '', 'company' => '', 'creditCards' => '', 'email' => '', 'fax' => '', 'firstName' => '', 'id' => '', 'lastName' => '', 'phone' => '', 'createdAt' => '', 'updatedAt' => '', 'website' => ''];
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function _doCreate($subPath, $params)
        {
        }
        private function _validateId($id = null)
        {
        }
        private function _doUpdate($httpVerb, $subPath, $params)
        {
        }
        private function _verifyGatewayResponse($response)
        {
        }
    }
}
namespace Braintree\MerchantAccount {
    /**
     * Braintree IndividualDetails class
     *
     * Object containing information on individual details of a merchant account
     */
    class IndividualDetails extends \Braintree\Base
    {
        protected function _initialize($individualAttribs)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return IndividualDetails
         */
        public static function factory($attributes)
        {
        }
    }
    /**
     * Braintree BusinessDetails class
     *
     * Object containing information on business details of a merchant account
     */
    class BusinessDetails extends \Braintree\Base
    {
        protected function _initialize($businessAttribs)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return BusinessDetails
         */
        public static function factory($attributes)
        {
        }
    }
    /**
     * Creates an instance of AddressDetails as returned from a merchant account
     */
    class AddressDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
    }
    /**
     * Braintree FundingDetails class
     *
     * Object containing information on funding details of a merchant account
     */
    class FundingDetails extends \Braintree\Instance
    {
        protected $_attributes = [];
    }
}
namespace Braintree {
    /**
     * Merchant class
     */
    class Merchant extends \Braintree\Base
    {
        protected function _initialize($attribs)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Merchant
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Processor response types.
     */
    class ProcessorResponseTypes
    {
        const APPROVED = 'approved';
        const SOFT_DECLINED = 'soft_declined';
        const HARD_DECLINED = 'hard_declined';
    }
    /**
     * Braintree DisputeGateway module
     * Creates and manages Braintree Disputes
     */
    class DisputeGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Accepts a dispute, given a dispute ID
         *
         * @param string $id of the dispute to be accepted
         *
         * @return Dispute|Exception\NotFound|Result\Error
         */
        public function accept($id)
        {
        }
        /**
         * Adds file evidence to a dispute, given a dispute ID and a document ID
         *
         * @param string $disputeId           to have evidence added
         * @param string $documentIdOrRequest either a string of the unique identifier for a DocumentUpload object or a set of request params including the DocumentUpload ID
         *
         * @return EvidenceDetails|Exception\NotFound
         */
        public function addFileEvidence($disputeId, $documentIdOrRequest)
        {
        }
        /**
         * Adds text evidence to a dispute, given a dispute ID and content
         *
         * @param string $id               of the dispute
         * @param mixed  $contentOrRequest text-based content for the dispute evidence
         *
         * @return EvidenceDetails|Exception\NotFound
         */
        public function addTextEvidence($id, $contentOrRequest)
        {
        }
        /**
         * Finalize a dispute, given a dispute ID
         *
         * @param string $id of the dispute
         *
         * @return Dispute|Result\Error
         */
        public function finalize($id)
        {
        }
        /**
         * Find a dispute, given a dispute ID
         *
         * @param string $id of the dispute
         *
         * @return Dispute|Exception\NotFound
         */
        public function find($id)
        {
        }
        /**
         * Remove evidence from a dispute, given a dispute ID and evidence ID
         *
         * @param string $disputeId  unique dispute identifier
         * @param string $evidenceId uniqye evidence identifier
         *
         * @return true|Result\Error|Exception\NotFound
         */
        public function removeEvidence($disputeId, $evidenceId)
        {
        }
        /**
         * Search for Disputes, given a DisputeSearch query
         *
         * @param array $query containing search fields
         *
         * @return ResourceCollection of Dispute objects
         */
        public function search($query)
        {
        }
        /**
         * Similar to search, with a paging object
         *
         * @param array  $query containing search fields
         * @param object $page  to iterate over results
         *
         * @return PaginatedResults
         */
        public function fetchDisputes($query, $page)
        {
        }
    }
    /**
     * Braintree IsNode
     * IsNode is an object for search elements to the Braintree API
     */
    class EqualityNode extends \Braintree\IsNode
    {
        /**
         * Sets the value of the object's "is_not" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function isNot($value)
        {
        }
    }
    /**
     * Braintree PartialMatchNode module
     *
     * PartialMatchNode is an object for partially matching node elements returned from the Braintree API
     */
    class PartialMatchNode extends \Braintree\EqualityNode
    {
        /**
         * Sets the value of the object's "starts_with" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function startsWith($value)
        {
        }
        /**
         * Sets the value of the object's "ends_width" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function endsWith($value)
        {
        }
    }
    /**
     * Braintree OAuth Revocation module
     *
     * A revoked OAuth access token
     *
     * For more information, see {@link https://developer.paypal.com/braintree/docs/guides/extend/oauth/access-tokens/php#managing-access-tokens our developer docs}
     */
    class OAuthAccessRevocation extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return OauthAccessRevocation
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        protected function _initialize($attributes)
        {
        }
    }
    /**
     * Braintree TextNode
     * TextNode is an object for text elements returned from the Braintree API
     */
    class TextNode extends \Braintree\PartialMatchNode
    {
        /**
         * Sets the value of the object's "contains" key to a string of $value
         *
         * @param object $value to have its string value set in $this
         *
         * @return object
         */
        public function contains($value)
        {
        }
    }
}
namespace Braintree\HttpHelpers {
    /**
     * Braintree Curl module
     *
     * Faciliates curl requests made by the SDK
     */
    class Curl
    {
        // phpcs:ignore Generic.Files.LineLength, PEAR.Commenting.FunctionComment.Missing
        public static function makeRequest($httpVerb, $url, $config, $httpRequest, $requestBody = null, $file = null, $customHeaders = null, $useClientCredentials = false)
        {
        }
        private static function _getAuthorization($config, $useClientCredentials)
        {
        }
        private static function _getCaFile($config)
        {
        }
        private static function _prepareMultipart($httpRequest, $requestBody, $file, $boundary)
        {
        }
    }
    //phpcs:ignore
    class CurlRequest implements \Braintree\HttpHelpers\HttpRequest
    {
        private $_handle = null;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($url)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function setOption($name, $value)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function execute()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function getInfo($name)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function getErrorCode()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function getError()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function close()
        {
        }
    }
}
namespace Braintree {
    /**
     * Braintree Customer module
     * Creates and manages Customers
     *
     * <b>== More information ==</b>
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/customer developer docs} for information on attributes
     */
    class Customer extends \Braintree\Base
    {
        /*
         * Static method redirecting to gateway class
         *
         * @see CustomerGateway::all()
         *
         * @return ResourceCollection
         */
        public static function all()
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param array $query containing request params
         * @param int[] $ids   containing customer IDs
         *
         * @see CustomerGateway::fetch()
         *
         * @return Customer|Customer[]
         */
        public static function fetch($query, $ids)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param array $attribs containing request parameters
         *
         * @see CustomerGateway::create()
         *
         * @return Result\Successful|Result\Error
         */
        public static function create($attribs = [])
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param array $attribs of request parameters
         *
         * @see CustomerGateway::createNoValidate()
         *
         * @throws Exception\ValidationError
         *
         * @return Customer
         */
        public static function createNoValidate($attribs = [])
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param string $id                  customer Id
         * @param string $associationFilterId association filter Id
         *
         * @see CustomerGateway::find()
         *
         * @throws Exception\NotFound
         *
         * @return Customer|boolean The customer object or false if the request fails.
         */
        public static function find($id, $associationFilterId = null)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param integer $customerId         unique identifier
         * @param array   $transactionAttribs containing request parameters
         *
         * @see CustomerGateway::credit()
         *
         * @return Result\Successful|Result\Error
         */
        public static function credit($customerId, $transactionAttribs)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param integer $customerId         unique identifier
         * @param array   $transactionAttribs containing request parameters
         *
         * @see CustomerGateway::creditNoValidate()
         *
         * @throws Exception\ValidationError
         *
         * @return Transaction
         */
        public static function creditNoValidate($customerId, $transactionAttribs)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param string $customerId unique identifier
         *
         * @see CustomerGateway::delete()
         *
         * @return Result\Successful
         */
        public static function delete($customerId)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param string $customerId         unique identifier
         * @param array  $transactionAttribs containing request parameters
         *
         * @see CustomerGateway::sale()
         *
         * @return Result\Successful|Result\Error
         */
        public static function sale($customerId, $transactionAttribs)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param string $customerId         unique identifier
         * @param array  $transactionAttribs containing request parameters
         *
         * @see CustomerGateway::saleNoValidate()
         *
         * @throws Exception\ValidationsFailed
         *
         * @return Transaction
         */
        public static function saleNoValidate($customerId, $transactionAttribs)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param mixed $query search query
         *
         * @see CustomerGateway::search()
         *
         * @throws InvalidArgumentException
         *
         * @return ResourceCollection
         */
        public static function search($query)
        {
        }
        /**
         * Static method redirecting to gateway class
         *
         * @param string $customerId to be updated
         * @param array  $attributes containing request params
         *
         * @see CustomerGateway::update()
         *
         * @return Result\Successful|Result\Error
         */
        public static function update($customerId, $attributes)
        {
        }
        /**
         * update a customer record, assuming validations will pass
         *
         * if calling this method in static context, customerId
         * is the 2nd attribute. customerId is not sent in object context.
         * returns a Customer object on success
         *
         * @param string $customerId unique identifier
         * @param array  $attributes request parameters
         *
         * @see CustomerGateway::updateNoValidate()
         *
         * @throws Exception\ValidationsFailed
         *
         * @return Customer
         */
        public static function updateNoValidate($customerId, $attributes)
        {
        }
        protected function _initialize($customerAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        /**
         * returns false if comparing object is not a Customer,
         * or is a Customer with a different id
         *
         * @param object $otherCust customer to compare against
         *
         * @return boolean
         */
        public function isEqual($otherCust)
        {
        }
        /**
         * returns the customer's default payment method
         *
         * @return CreditCard|PayPalAccount
         */
        public function defaultPaymentMethod()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function _defaultPaymentMethodFilter($paymentMethod)
        {
        }
        protected $_attributes = ['addresses' => '', 'company' => '', 'creditCards' => '', 'email' => '', 'fax' => '', 'firstName' => '', 'id' => '', 'lastName' => '', 'phone' => '', 'taxIdentifiers' => '', 'createdAt' => '', 'updatedAt' => '', 'website' => ''];
        /**
         * Creates an instance of a Customer from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return Customer
         */
        public static function factory($attributes)
        {
        }
    }
}
namespace Braintree\Result {
    /**
     * Braintree Successful Result
     *
     * A Successful Result will be returned from gateway methods when
     * validations pass. It will provide access to the created resource.
     *
     * For example, when creating a customer, Successful will
     * respond to <b>customer</b> like so:
     *
     * <code>
     * $result = Customer::create(array('first_name' => "John"));
     * if ($result->success) {
     *     // Successful
     *     echo "Created customer {$result->customer->id}";
     * } else {
     *     // Error
     * }
     * </code>
     */
    class Successful extends \Braintree\Instance
    {
        /**
         *
         * @var boolean always true
         */
        public $success = true;
        /**
         *
         * @var string stores the internal name of the object providing access to
         */
        private $_returnObjectNames;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($objsToReturn = [], $propertyNames = [])
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
        private function _mapPropertyNamesToObjsToReturn($propertyNames, $objsToReturn)
        {
        }
    }
    /**
     * Braintree Error Result
     *
     * An Error Result will be returned from gateway methods when
     * the gateway responds with an error. It will provide access
     * to the original request.
     * For example, when voiding a transaction, Error Result will
     * respond to the void request if it failed:
     *
     * <code>
     * $result = Transaction::void('abc123');
     * if ($result->success) {
     *     // Successful Result
     * } else {
     *     // Result\Error
     * }
     * </code>
     *
     * @property-read array $params original passed params
     * @property-read \Braintree\Error\ErrorCollection $errors
     * @property-read \Braintree\Result\CreditCardVerification $creditCardVerification credit card verification data
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/result-objects developer docs} for more information
     */
    class Error extends \Braintree\Base
    {
        /**
         * used to determine whether an API request was successful or not
         *
         * @var boolean always false
         */
        public $success = false;
        /**
         * return original value for a field
         * For example, if a user tried to submit 'invalid-email' in the html field transaction[customer][email],
         * $result->valueForHtmlField("transaction[customer][email]") would yield "invalid-email"
         *
         * @param string $field to check submitted value
         *
         * @return string
         */
        public function valueForHtmlField($field)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($response)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
}
namespace Braintree {
    /**
     * Braintree GrantedPaymentInstrumentUpdate module
     */
    /**
     * Manages Braintree GrantedPaymentInstrumentUpdate
     *
     * See our {@link https://developer.paypal.com/braintree/docs/guides/extend/grant-api/webhooks developer docs} for more information
     */
    class GrantedPaymentInstrumentUpdate extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return GrantedPaymentInstrumentUpdate
         */
        public static function factory($attributes)
        {
        }
        /* instance methods */
        /**
         * sets instance properties from an array of values
         *
         * @param array $GrantedPaymentInstrumentAttribs array of grantedPaymentInstrumentUpdate data
         *
         * @return void
         */
        protected function _initialize($grantedPaymentInstrumentUpdateAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree ApplePayOptions module
     * Manages configuration and options for Apple Pay
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/apple-pay-options developer docs} for information on attributes
     */
    class ApplePayOptions extends \Braintree\Base
    {
        /**
         * Creates an instance of an ApplePayOptions from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return ApplePayOptions
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
    }
    /**
     * The descriptive value on bank statements. For detailed reference information on properties, see the {@link developer docs https://developer.paypal.com/braintree/docs/reference/response/subscription#descriptor}.
     */
    class Descriptor extends \Braintree\Instance
    {
    }
    /**
     * WebhookNotification class
     * module for webhook objects
     */
    class WebhookNotification extends \Braintree\Base
    {
        // phpcs:disable Generic.Files.LineLength
        const ACCOUNT_UPDATER_DAILY_REPORT = 'account_updater_daily_report';
        const CHECK = 'check';
        const CONNECTED_MERCHANT_PAYPAL_STATUS_CHANGED = 'connected_merchant_paypal_status_changed';
        const CONNECTED_MERCHANT_STATUS_TRANSITIONED = 'connected_merchant_status_transitioned';
        const DISBURSEMENT = 'disbursement';
        const DISBURSEMENT_EXCEPTION = 'disbursement_exception';
        const DISPUTE_ACCEPTED = 'dispute_accepted';
        const DISPUTE_DISPUTED = 'dispute_disputed';
        const DISPUTE_EXPIRED = 'dispute_expired';
        const DISPUTE_LOST = 'dispute_lost';
        const DISPUTE_OPENED = 'dispute_opened';
        const DISPUTE_WON = 'dispute_won';
        const GRANTED_PAYMENT_METHOD_REVOKED = 'granted_payment_method_revoked';
        const GRANTOR_UPDATED_GRANTED_PAYMENT_METHOD = 'grantor_updated_granted_payment_method';
        const LOCAL_PAYMENT_COMPLETED = "local_payment_completed";
        const LOCAL_PAYMENT_EXPIRED = "local_payment_expired";
        const LOCAL_PAYMENT_FUNDED = "local_payment_funded";
        const LOCAL_PAYMENT_REVERSED = "local_payment_reversed";
        const OAUTH_ACCESS_REVOKED = 'oauth_access_revoked';
        const PARTNER_MERCHANT_CONNECTED = 'partner_merchant_connected';
        const PARTNER_MERCHANT_DECLINED = 'partner_merchant_declined';
        const PARTNER_MERCHANT_DISCONNECTED = 'partner_merchant_disconnected';
        const PAYMENT_METHOD_CUSTOMER_DATA_UPDATED = 'payment_method_customer_data_updated';
        const PAYMENT_METHOD_REVOKED_BY_CUSTOMER = 'payment_method_revoked_by_customer';
        const RECIPIENT_UPDATED_GRANTED_PAYMENT_METHOD = 'recipient_updated_granted_payment_method';
        const SUBSCRIPTION_CANCELED = 'subscription_canceled';
        const SUBSCRIPTION_CHARGED_SUCCESSFULLY = 'subscription_charged_successfully';
        const SUBSCRIPTION_CHARGED_UNSUCCESSFULLY = 'subscription_charged_unsuccessfully';
        const SUBSCRIPTION_EXPIRED = 'subscription_expired';
        const SUBSCRIPTION_TRIAL_ENDED = 'subscription_trial_ended';
        const SUBSCRIPTION_WENT_ACTIVE = 'subscription_went_active';
        const SUBSCRIPTION_WENT_PAST_DUE = 'subscription_went_past_due';
        const SUB_MERCHANT_ACCOUNT_APPROVED = 'sub_merchant_account_approved';
        const SUB_MERCHANT_ACCOUNT_DECLINED = 'sub_merchant_account_declined';
        const TRANSACTION_DISBURSED = 'transaction_disbursed';
        const TRANSACTION_REVIEWED = 'transaction_reviewed';
        const TRANSACTION_SETTLED = 'transaction_settled';
        const TRANSACTION_SETTLEMENT_DECLINED = 'transaction_settlement_declined';
        // phpcs:enable Generic.Files.LineLength
        /**
         * Static methods redirecting to gateway class
         *
         * @param string $signature used to verify before parsing
         * @param mixed  $payload   to be parsed
         *
         * @see WebHookNotificationGateway::parse()
         *
         * @return WebhookNotification object|Exception
         */
        public static function parse($signature, $payload)
        {
        }
        /*
         * Static methods redirecting to gateway class
         *
         * @param object $challenge to be verified
         *
         * @see WebHookNotificationGateway::verify()
         *
         * @return string|Exception
         */
        public static function verify($challenge)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return WebhookNotification
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
    }
    /**
     * Braintree EnrichedCustomerData module
     */
    class EnrichedCustomerData extends \Braintree\Base
    {
        /**
         *  factory method: returns an instance of EnrichedCustomerData
         *  to the requesting method, with populated properties
         *
         * @param array $attributes used to create the object
         *
         * @return EnrichedCustomerData
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($enrichedCustomerDataAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree UsBankAccountVerificationSearch
     * UsBankAccountVerificationSearch is used in searching US Bank Account verifications (ACH)
     */
    class UsBankAccountVerificationSearch
    {
        /**
         * Sets account holder name in search terms
         *
         * @return TextNode
         */
        public static function accountHolderName()
        {
        }
        /**
         * Sets customer email in search terms
         *
         * @return TextNode
         */
        public static function customerEmail()
        {
        }
        /**
         * Sets customer Id in search terms
         *
         * @return TextNode
         */
        public static function customerId()
        {
        }
        /**
         * Sets Id in search terms
         *
         * @return TextNode
         */
        public static function id()
        {
        }
        /**
         * Sets payment method token in search terms
         *
         * @return TextNode
         */
        public static function paymentMethodToken()
        {
        }
        /**
         * Sets routing number in search terms
         *
         * @return TextNode
         */
        public static function routingNumber()
        {
        }
        /**
         * Sets Ids in search terms
         *
         * @return TextNode
         */
        public static function ids()
        {
        }
        /**
         * Sets US bank account verification statuses in search terms
         *
         * @return MultipleValueNode
         */
        public static function status()
        {
        }
        /**
         * Sets US bank account verification methods in search terms
         *
         * @return MultipleValueNode
         */
        public static function verificationMethod()
        {
        }
        /**
         * Sets created at date range in search terms
         *
         * @return RangeNode
         */
        public static function createdAt()
        {
        }
        /**
         * Sets account type in search terms
         *
         * @return EqualityNode
         */
        public static function accountType()
        {
        }
        /**
         * Sets account number in search terms
         *
         * @return EndsWithNode
         */
        public static function accountNumber()
        {
        }
    }
    /**
     * Braintree PayPalAccountGateway module
     *
     * Manages Braintree PayPalAccounts
     *
     * For more detailed information on PayPal Accounts, see {@link https://developer.paypal.com/braintree/docs/reference/response/paypal-account our developer docs}<br />
     */
    class PayPalAccountGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Find a paypalAccount by token
         *
         * @param string $token paypal accountunique id
         *
         * @throws Exception\NotFound
         *
         * @return PayPalAccount
         */
        public function find($token)
        {
        }
        /**
         * updates the paypalAccount record
         *
         * if calling this method in context, $token
         * is the 2nd attribute. $token is not sent in object context.
         *
         * @param string $token      (optional)
         * @param array  $attributes including request parameters
         *
         * @return Result\Successful or Result\Error
         */
        public function update($token, $attributes)
        {
        }
        /**
         * Delete a PayPal Account record
         *
         * @param string $token paypal account identifier
         *
         * @return Result
         */
        public function delete($token)
        {
        }
        /**
         * create a new sale for the current PayPal account
         *
         * @param string $token              paypal account identifier
         * @param array  $transactionAttribs containing request parameters
         *
         * @return Result\Successful|Result\Error
         */
        public function sale($token, $transactionAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public static function updateSignature()
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        private function _doUpdate($httpVerb, $subPath, $params)
        {
        }
        /**
         * generic method for validating incoming gateway responses
         *
         * creates a new PayPalAccount object and encapsulates
         * it inside a Result\Successful object, or
         * encapsulates a Errors object inside a Result\Error
         * alternatively, throws an Unexpected exception if the response is invalid.
         *
         * @param array $response gateway response values
         *
         * @throws Exception\Unexpected
         *
         * @return Result\Successful|Result\Error
         */
        private function _verifyGatewayResponse($response)
        {
        }
        /**
         * verifies that a valid paypal account identifier is being used
         *
         * @param string   $identifier
         * @param Optional $string     $identifierType type of identifier supplied, default 'token'
         *
         * @throws InvalidArgumentException
         */
        private function _validateId($identifier = null, $identifierType = 'token')
        {
        }
    }
    /**
     * Class for running customer searches
     */
    class CustomerSearch
    {
        /*
         * Create a new text node for address country name
         *
         * @return TextNode
         */
        public static function addressCountryName()
        {
        }
        /*
         * Create a new text node for address extended address
         *
         * @return TextNode
         */
        public static function addressExtendedAddress()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Given name. First name is US ethnocentric
        /*
         * Create a new text node for address first or given name
         *
         * @return TextNode
         */
        public static function addressFirstName()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Surname. Last name is US ethnocentric
        /*
         * Create a new text node for address last or surname
         *
         * @return TextNode
         */
        public static function addressLastName()
        {
        }
        /*
         * Create a new text node for address locality or city
         *
         * @return TextNode
         */
        public static function addressLocality()
        {
        }
        /*
         * Create a new text node for address postal code
         *
         * @return TextNode
         */
        public static function addressPostalCode()
        {
        }
        /*
         * Create a new text node for address region or state
         *
         * @return TextNode
         */
        public static function addressRegion()
        {
        }
        /*
         * Create a new text node for address street address
         *
         * @return TextNode
         */
        public static function addressStreetAddress()
        {
        }
        /*
         * Create a new text node for cardholder name
         *
         * @return TextNode
         */
        public static function cardholderName()
        {
        }
        /*
         * Create a new text node for company
         *
         * @return TextNode
         */
        public static function company()
        {
        }
        /*
         * Create a new text node for email
         *
         * @return TextNode
         */
        public static function email()
        {
        }
        /*
         * Create a new text node for fax
         *
         * @return TextNode
         */
        public static function fax()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Given name. First name is US ethnocentric
        /*
         * Create a new text node for customer first or given name
         *
         * @return TextNode
         */
        public static function firstName()
        {
        }
        /*
         * Create a new text node for id
         *
         * @return TextNode
         */
        public static function id()
        {
        }
        // NEXT_MAJOR_VERSION this should be changed to Surname. Last name is US ethnocentric
        /*
         * Create a new text node for customer last or Surname
         *
         * @return TextNode
         */
        public static function lastName()
        {
        }
        /*
         * Create a new text node for payment method token
         *
         * @return TextNode
         */
        public static function paymentMethodToken()
        {
        }
        /*
         * Create a new is node for payment method token with duplicate
         *
         * @return IsNode
         */
        public static function paymentMethodTokenWithDuplicates()
        {
        }
        /*
         * Create a new is node for paypal account email
         *
         * @return IsNode
         */
        public static function paypalAccountEmail()
        {
        }
        /*
         * Create a new text node for phone
         *
         * @return TextNode
         */
        public static function phone()
        {
        }
        /*
         * Create a new text node for website
         *
         * @return TextNode
         */
        public static function website()
        {
        }
        /*
         * Create a new equality node for credit card expiration date
         *
         * @return EqualityNode
         */
        public static function creditCardExpirationDate()
        {
        }
        /*
         * Create a new equality node for credit card number
         *
         * @return EqualityNode
         */
        public static function creditCardNumber()
        {
        }
        /*
         * Create a new multiple value node for ids
         *
         * @return MultipleValueNode
         */
        public static function ids()
        {
        }
        /*
         * Create a new range node for created at
         *
         * @return RangeNode
         */
        public static function createdAt()
        {
        }
    }
    /**
     * Braintree PaymentMethodNonce module
     */
    /**
     * Creates and manages Braintree PaymentMethodNonces
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/payment-method-nonce developer docs} for information on attributes
     */
    class PaymentMethodNonce extends \Braintree\Base
    {
        /**
         * Static method from gateway class
         *
         * @param string     $token  the identifier of the payment method
         * @param array|null $params additional parameters to be included in the request
         *
         * @see PaymentMethodNonceGateway::create()
         *
         * @return PaymentMethodNonce|Error
         */
        public static function create($token, $params = [])
        {
        }
        /*
         * Static method from gateway class
         *
         * @param string $nonce the payment method nonce string to return information about
         *
         * @see PaymentMethodNonceGateway::find()
         *
         * @return PaymentMethodNonce
         */
        public static function find($nonce)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return PaymentMethodNonce
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($nonceAttributes)
        {
        }
    }
    /**
     * Connected Merchant Status Transitioned Payload
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/webhooks/braintree-auth/php#notification-type-connected_merchant_paypal_status_changed developer docs} for information on attributes
     */
    class ConnectedMerchantStatusTransitioned extends \Braintree\Base
    {
        protected $_attributes = [];
        /**
         * Creates an instance of a ConnectedMerchantStatusTransitioned from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return ConnectedMerchantStatusTransitioned
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
    }
    /**
     * Partner Merchant information that is generated when a partner is connected
     * to or disconnected from a user.
     *
     * Creates an instance of PartnerMerchants
     *
     * @property-read string $merchantPublicId
     * @property-read string $publicKey
     * @property-read string $privateKey
     * @property-read string $clientSideEncryptionKey
     * @property-read string $partnerMerchantId
     */
    class PartnerMerchant extends \Braintree\Base
    {
        protected $_attributes = [];
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return PartnerMerchant
         */
        public static function factory($attributes)
        {
        }
        protected function _initialize($attributes)
        {
        }
    }
    /**
     * Digest encryption module
     * Digest creates an HMAC-SHA1 hash for encrypting messages
     */
    class Digest
    {
        public static function hexDigestSha1($key, $string)
        {
        }
        public static function hexDigestSha256($key, $string)
        {
        }
        public static function secureCompare($left, $right)
        {
        }
        public static function _builtInHmacSha1($message, $key)
        {
        }
        public static function _hmacSha1($message, $key)
        {
        }
    }
    /**
     * Braintree PaymentMethod module
     */
    /**
     * Creates and manages Braintree PaymentMethods
     *
     * <b>== More information ==</b>
     */
    class PaymentMethod extends \Braintree\Base
    {
        /**
         * Static method from gateway class
         *
         * @param array $attribs containing request parameterss
         *
         * @see PaymentMethodGateway::create()
         *
         * @throws Exception\ValidationError
         *
         * @return Result\Successful|Result\Error
         */
        public static function create($attribs)
        {
        }
        /**
         * Static method from gateway class
         *
         * @param string $token payment method unique id
         *
         * @see PaymentMethodGateway::find()
         *
         * @throws Exception\NotFound
         *
         * @return CreditCard|PayPalAccount
         */
        public static function find($token)
        {
        }
        /**
         * Static method from gateway class
         *
         * @param string $token   payment method identifier
         * @param array  $attribs containing request parameters
         *
         * @see PaymentMethodGateway::update()
         *
         * @return Result\Successful|Result\Error
         */
        public static function update($token, $attribs)
        {
        }
        /**
         * Static method from gateway class
         *
         * @param string $token   payment method identifier
         * @param mixed  $options containing optional parameters
         *
         * @see PaymentMethodGateway::delete()
         *
         * @return Result
         */
        public static function delete($token, $options = [])
        {
        }
    }
    /**
     * Braintree Utility methods
     */
    class Util
    {
        /**
         * extracts an attribute and returns an array of objects
         *
         * extracts the requested element from an array, and converts the contents
         * of its child arrays to objects of type $attributeName, or returns
         * an array with a single element containing the value of that array element
         *
         * @param array  $attribArray   attributes from a search response
         * @param string $attributeName indicates which element of the passed array to extract
         *
         * @return array array of $attributeName objects, or a single element array
         */
        public static function extractAttributeAsArray(&$attribArray, $attributeName)
        {
        }
        /**
         * throws an exception based on the type of error
         *
         * @param string      $statusCode HTTP status code to throw exception from
         * @param null|string $message    optional
         *
         * @throws Exception multiple types depending on the error
         *
         * @return void
         */
        public static function throwStatusCodeException($statusCode, $message = null)
        {
        }
        /**
         * throws an exception based on the type of error returned from graphql
         *
         * @param array $response complete graphql response
         *
         * @throws Exception multiple types depending on the error
         *
         * @return void
         */
        public static function throwGraphQLResponseException($response)
        {
        }
        /**
         * Returns a class object or throws an exception
         *
         * @param string $className to be used to determine if objects are present
         * @param object $resultObj the object returned from an API response
         *
         * @throws Exception\ValidationsFailed
         *
         * @return object returns the passed object if successful
         */
        public static function returnObjectOrThrowException($className, $resultObj)
        {
        }
        /**
         * removes the  header from a classname
         *
         * @param string $name ClassName
         *
         * @return camelCased classname minus  header
         */
        public static function cleanClassName($name)
        {
        }
        /**
         * Returns corresponding class name based on response keys
         *
         * @param string $name className
         *
         * @return string ClassName
         */
        public static function buildClassName($name)
        {
        }
        /**
         * convert alpha-beta-gamma to alphaBetaGamma
         *
         * @param string      $string    to be scrubbed for camelCase formatting
         * @param null|string $delimiter to be replaced
         *
         * @return string modified string
         */
        public static function delimiterToCamelCase($string, $delimiter = '[\\-\\_]')
        {
        }
        /**
         * convert alpha-beta-gamma to alpha_beta_gamma
         *
         * @param string $string to be modified
         *
         * @return string modified string
         */
        public static function delimiterToUnderscore($string)
        {
        }
        /**
         * find capitals and convert to delimiter + lowercase
         *
         * @param string      $string    to be scrubbed
         * @param null|string $delimiter to replace camelCase
         *
         * @return string modified string
         */
        public static function camelCaseToDelimiter($string, $delimiter = '-')
        {
        }
        /**
         * converts a-string-here to [aStringHere]
         *
         * @param array       $array     to be iterated over
         * @param null|string $delimiter to be replaced with camelCase
         *
         * @return array modified array
         */
        public static function delimiterToCamelCaseArray($array, $delimiter = '[\\-\\_]')
        {
        }
        /**
         * find capitals and convert to delimiter + lowercase
         *
         * @param array       $array     to be iterated over
         * @param null|string $delimiter to replace camelCase
         *
         * @return array modified array
         */
        public static function camelCaseToDelimiterArray($array, $delimiter = '-')
        {
        }
        /**
         * converts a-string-here to [a_string_here]
         *
         * @param array $array to be iterated over
         *
         * @return array modified array
         */
        public static function delimiterToUnderscoreArray($array)
        {
        }
        /**
         * Join arrays with string or return false
         *
         * @param array  $array     associative array to implode
         * @param string $separator (optional, defaults to =)
         * @param string $glue      (optional, defaults to ', ')
         *
         * @return string|false
         */
        public static function implodeAssociativeArray($array, $separator = '=', $glue = ', ')
        {
        }
        /*
         * Turn all attributes into a string
         *
         * @param array $attributes to be turned into a string
         *
         * @return string|false
         */
        public static function attributesToString($attributes)
        {
        }
        /**
         * verify user request structure
         *
         * compares the expected signature of a gateway request
         * against the actual structure sent by the user
         *
         * @param array $signature  expected signature
         * @param array $attributes actual structure sent by user
         *
         * @throws InvalidArgumentException
         *
         * @return self
         */
        public static function verifyKeys($signature, $attributes)
        {
        }
        /**
         * replaces the value of a key in an array
         *
         * @param array  $array  to have key replaced
         * @param string $oldKey to be replace
         * @param string $newKey to replace
         *
         * @return array
         */
        public static function replaceKey($array, $oldKey, $newKey)
        {
        }
        /**
         * flattens a numerically indexed nested array to a single level
         *
         * @param array  $keys
         * @param string $namespace
         *
         * @return array
         */
        private static function _flattenArray($keys, $namespace = null)
        {
        }
        private static function _flattenUserKeys($keys, $namespace = null)
        {
        }
        /**
         * removes wildcard entries from the invalid keys array
         *
         * @param array  $validKeys
         * @param <array $invalidKeys
         *
         * @return array
         */
        private static function _removeWildcardKeys($validKeys, $invalidKeys)
        {
        }
    }
    /**
     * Braintree OAuthCredentials module
     */
    class OAuthCredentials extends \Braintree\Base
    {
        protected function _initialize($attribs)
        {
        }
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return OauthCredentials
         */
        public static function factory($attributes)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree AddOn class
     *
     * Object containing information on AddOns of a subscription
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/add-on developer docs} for information on attributes
     */
    class AddOn extends \Braintree\Modification
    {
        /**
         * Creates an instance of an AddOn from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return AddOn
         */
        public static function factory($attributes)
        {
        }
        /**
         * static methods redirecting to gateway class
         *
         * @see AddOnGateway::all()
         *
         * @return AddOn[]
         */
        public static function all()
        {
        }
    }
    /**
     * Braintree WebhookNotificationGateway
     * Manages Webhooks
     */
    class WebhookNotificationGateway
    {
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /**
         * Parses a webhook from the Braintree API
         *
         * @param string $signature used to verify before parsing
         * @param mixed  $payload   to be parsed
         *
         * @throws Exception\InvalidSignature
         *
         * @return WebhookNotification object
         */
        public function parse($signature, $payload)
        {
        }
        /*
         * Verify a webhook challenge
         *
         * @param object $challenge to be verified
         *
         * @throws Exception\InvalidChallenge
         *
         * @return string
         */
        public function verify($challenge)
        {
        }
        private function _payloadMatches($signature, $payload)
        {
        }
        private function _validateSignature($signatureString, $payload)
        {
        }
        private function _matchingSignature($signaturePairs)
        {
        }
    }
    /**
     * Braintree UnknownPaymentMethod module
     * Manages Braintree UnknownPaymentMethod
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/response/payment-method developer docs} for information on attributes
     */
    class UnknownPaymentMethod extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return UnknownPaymentMethod
         */
        public static function factory($attributes)
        {
        }
        /* instance methods */
        /**
         * returns false if default is null or false
         *
         * @return boolean
         */
        public function isDefault()
        {
        }
        /**
         * sets instance properties from an array of values
         *
         * @param array $unknownPaymentMethodAttribs array of unknownPaymentMethod data
         *
         * @return void
         */
        protected function _initialize($unknownPaymentMethodAttribs)
        {
        }
    }
    /**
     * Braintree LocalPaymentCompleted module
     */
    /**
     * Manages Braintree LocalPaymentCompleted
     *
     * See our {@link https://developer.paypal.com/braintree/docs/reference/general/webhooks/local-payment-methods developer docs} for more information
     */
    class LocalPaymentCompleted extends \Braintree\Base
    {
        /**
         * Creates an instance from given attributes
         *
         * @param array $attributes response object attributes
         *
         * @return LocalPaymentCompleted
         */
        public static function factory($attributes)
        {
        }
        /* instance methods */
        /**
         * sets instance properties from an array of values
         *
         * @param array $LocalPaymentCompletedAttribs array of localPaymentCompleted data
         *
         * @return void
         */
        protected function _initialize($localPaymentCompletedAttribs)
        {
        }
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __toString()
        {
        }
    }
    /**
     * Braintree ApplePayGateway module
     * Manages Apple Pay for Web
     */
    class ApplePayGateway
    {
        private $_gateway;
        private $_config;
        private $_http;
        // phpcs:ignore PEAR.Commenting.FunctionComment.Missing
        public function __construct($gateway)
        {
        }
        /*
         * Register a domain for apple pay
         *
         * @see https://developer.paypal.com/braintree/docs/guides/apple-pay/configuration#domain-registration
         *
         * @param string $domain to be registered
         *
         * @return Result\Successful|Result\Error
         */
        public function registerDomain($domain)
        {
        }
        /*
         * Unregister a domain for apple pay
         *
         * @param string $domain to be unregistered
         *
         * @return Result\Successful
         */
        public function unregisterDomain($domain)
        {
        }
        /*
         * Retrieve a list of all registered domains for apple pay
         *
         * @return Result\Successful|Result\Error
         */
        public function registeredDomains()
        {
        }
    }
}
namespace {
    /**
     * Braintree PHP Library
     * Creates class_aliases for old class names replaced by PSR-4 Namespaces
     */
    class Braintree
    {
        /**
         * Checks for required dependencies
         *
         * @throws Braintree/Exception With the missing extension
         *
         * @return void
         */
        public static function requireDependencies()
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Settings {
    /**
     * @since 3.0
     */
    class FO_Location extends \AC\Settings\Column implements \AC\Settings\FormatValue
    {
        /**
         * @var string
         */
        private $display_format;
        protected function set_name()
        {
        }
        protected function define_options()
        {
        }
        public function create_view()
        {
        }
        protected function get_display_options()
        {
        }
        public function format($value, $original_value)
        {
        }
        /**
         * @return string
         */
        public function get_display_format_label()
        {
        }
        /**
         * @return string
         */
        public function get_display_format()
        {
        }
        /**
         * @param string $display_format
         */
        public function set_display_format($display_format)
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Free {
    class FO_Location extends \AC\Column
    {
        public function __construct()
        {
        }
        protected function register_settings()
        {
        }
        public function get_raw_value($id)
        {
        }
        public function get_display_format()
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Pro {
    class FO_Location extends \FO_AC_Custom_Columns\Column\Free\FO_Location implements \ACP\Sorting\Sortable, \ACP\Filtering\Filterable, \ACP\Export\Exportable, \ACP\Search\Searchable
    {
        public function editing()
        {
        }
        public function filtering()
        {
        }
        public function sorting()
        {
        }
        public function export()
        {
        }
        // Smart Filtering (internally named: Search)
        public function search()
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Free {
    class FO_Order_Number extends \AC\Column
    {
        public function __construct()
        {
        }
        protected function register_settings()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Pro {
    class FO_Order_Number extends \FO_AC_Custom_Columns\Column\Free\FO_Order_Number implements \ACP\Sorting\Sortable, \ACP\Export\Exportable, \ACP\Search\Searchable
    {
        public function editing()
        {
        }
        public function sorting()
        {
        }
        public function export()
        {
        }
        // Smart Filtering (internally named: Search)
        public function search()
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Free {
    class Sage_ContractNo extends \AC\Column
    {
        public function __construct()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Pro {
    class Sage_ContractNo extends \FO_AC_Custom_Columns\Column\Free\Sage_ContractNo implements \ACP\Sorting\Sortable, \ACP\Search\Searchable
    {
        public function editing()
        {
        }
        public function sorting()
        {
        }
        public function export()
        {
        }
        // Smart Filtering (internally named: Search)
        public function search()
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Free {
    class FO_SubscriptionLength extends \AC\Column
    {
        public function __construct()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Pro {
    class FO_SubscriptionLength extends \FO_AC_Custom_Columns\Column\Free\FO_SubscriptionLength implements \ACP\Sorting\Sortable, \ACP\Search\Searchable
    {
        public function editing()
        {
        }
        public function sorting()
        {
        }
        public function export()
        {
        }
        // Smart Filtering (internally named: Search)
        public function search()
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Column\Free {
    class FO_OtherFees extends \AC\Column
    {
        public function __construct()
        {
        }
        protected function register_settings()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
    class FO_TripFee extends \AC\Column
    {
        public function __construct()
        {
        }
        protected function register_settings()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
    class Sage_ARDivisionNo extends \AC\Column
    {
        public function __construct()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
    class FO_HousewaresSetupService extends \AC\Column
    {
        public function __construct()
        {
        }
        protected function register_settings()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
    class Sage_DocumentType extends \AC\Column
    {
        public function __construct()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
    class Sage_ContractType extends \AC\Column
    {
        public function __construct()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
    class Sage_OrderStatus extends \AC\Column
    {
        public function __construct()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
    class FO_CPP extends \AC\Column
    {
        public function __construct()
        {
        }
        protected function register_settings()
        {
        }
        /**
         * Returns the display value for the column.
         *
         * @param int $id ID
         *
         * @return string Value
         */
        public function get_value($id)
        {
        }
        public function get_raw_value($id)
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Sorting {
    /**
     * Sorting class. Adds sorting functionality to the column.
     */
    class FO_Location extends \ACP\Sorting\Model
    {
    }
    /**
     * Sorting class. Adds sorting functionality to the column.
     */
    class FO_Order_Number extends \ACP\Sorting\Model
    {
    }
    /**
     * Sorting class. Adds sorting functionality to the column.
     */
    class Sage_ContractNo extends \ACP\Sorting\Model
    {
        /**
         * (Optional) Put all the sorting logic here. You can remove this function if you want to sort by raw value only.
         *
         * @return array
         */
        public function get_sorting_vars()
        {
        }
    }
    /**
     * Sorting class. Adds sorting functionality to the column.
     */
    class FO_SubscriptionLength extends \ACP\Sorting\Model
    {
    }
}
namespace FO_AC_Custom_Columns\Export {
    /**
     * Export class. Adds export functionality to the column.
     */
    class FO_Location extends \ACP\Export\Model
    {
        public function get_value($id)
        {
        }
    }
    /**
     * Export class. Adds export functionality to the column.
     */
    class FO_Order_Number extends \ACP\Export\Model
    {
        public function get_value($id)
        {
        }
    }
}
namespace FO_AC_Custom_Columns\Filtering {
    class FO_Location extends \ACP\Filtering\Model
    {
        public function get_filtering_data()
        {
        }
        public function get_filtering_vars($vars)
        {
        }
    }
    class FO_Location_SageCode extends \FO_AC_Custom_Columns\Filtering\FO_Location
    {
        public function get_filtering_data()
        {
        }
        public function get_filtering_vars($vars)
        {
        }
    }
    class FO_Location_Slug extends \FO_AC_Custom_Columns\Filtering\FO_Location
    {
        public function get_filtering_data()
        {
        }
        public function get_filtering_vars($vars)
        {
        }
    }
}
namespace FO_AC_Custom_Columns\SmartFiltering {
    class FO_Location extends \ACP\Search\Comparison
    {
        public function __construct()
        {
        }
        protected function create_query_bindings($operator, \ACP\Search\Value $value)
        {
        }
    }
    class FO_Location_SageCode extends \ACP\Search\Comparison
    {
        public function __construct()
        {
        }
        protected function create_query_bindings($operator, \ACP\Search\Value $value)
        {
        }
    }
    class FO_Order_Number extends \ACP\Search\Comparison
    {
        public function __construct()
        {
        }
        protected function create_query_bindings($operator, \ACP\Search\Value $value)
        {
        }
    }
    class Sage_ContractNo extends \ACP\Search\Comparison
    {
        public function __construct()
        {
        }
        protected function create_query_bindings($operator, \ACP\Search\Value $value)
        {
        }
    }
    class FO_Location_Slug extends \ACP\Search\Comparison
    {
        public function __construct()
        {
        }
        protected function create_query_bindings($operator, \ACP\Search\Value $value)
        {
        }
    }
}
namespace FO_Accordions {
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
        // add capabilities for blackout_date post type to administrator role
        public function add_caps()
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
        public function init()
        {
        }
        public function setup_shortcode($atts = null, $content = null)
        {
        }
        /**
         * Gets accordion item list from database for accordion where ID == $accordionID
         *
         * Used by display_accordion() to get accordion items
         * and build HTML for an accordion
         *
         * @param int $accordionID accordion ID to filter by
         *
         * @return string HTML for accordion
         */
        public static function get_accordion_list($id)
        {
        }
        /**
         * Returns HTML for a single accordion item
         *
         * @param int    $id      ID of accordion item
         * @param string $title   title of accordion item
         * @param string $content content of accordion item
         * @param int    $catID   ID of accordion
         *
         * @return string HTML for accordion item
         */
        public static function get_accordion_item($id, $title, $content, $accordionID)
        {
        }
    }
    class Setup
    {
        // The single instance of the class.
        protected static $_instance = null;
        // post type
        protected const POST_TYPE = 'accordion_item';
        // taxonomy
        protected const TAXONOMY = 'accordion';
        // Constructor
        protected function __construct()
        {
        }
        // getter function for TAXONOMY
        public static function get_taxonomy()
        {
        }
        // getter function for POST_TYPE
        public static function get_post_type()
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
        // register custom post type
        public function register_custom_post_type()
        {
        }
        // function to create capabilities array for taxonomy
        public static function compile_taxonomy_capabilities($taxonomy)
        {
        }
        // function to create capabilities array
        public static function compile_post_type_capabilities($singular, $plural)
        {
        }
    }
    /**
     * The plugin loader class.
     *
     * @since 2.0.0
     */
    class Loader
    {
        /** @var FO_Accordions\Loader single instance of this class */
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
        /**
         * Initializes the plugin.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        // get single instance of FO_Accordions\Loader
        public static function instance()
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
namespace {
    /**
     * Additional functions
     *
     * @package fo-settings
     */
    /**
     * Global function to access FO_Settings\Plugin instance
     */
    function fo_settings()
    {
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
namespace {
    // global function to add update notice
    function fo_add_update_notice($name, $prefix, $version, $changes)
    {
    }
}
namespace {
    function fo_wcs_can_reduce_order_stock_on_renewal($reduce_stock, $order)
    {
    }
    function fowc_woo_minimum_order_settings($settings)
    {
    }
    function fowc_wc_minimum_order_amount()
    {
    }
    /**
     * Returns the One True Instance of Sequential Order Numbers
     *
     * @since 1.7.0
     *
     * @return \WC_Seq_Order_Number
     */
    function wc_sequential_order_numbers()
    {
    }
}