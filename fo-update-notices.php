<?php

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
namespace {
    // global function to add update notice
    function fo_add_update_notice($name, $prefix, $version, $changes)
    {
    }
}