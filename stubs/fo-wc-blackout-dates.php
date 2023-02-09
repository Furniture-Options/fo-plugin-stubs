<?php

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