<?php

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
        /*
         *
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
        // Gets settings for section.
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