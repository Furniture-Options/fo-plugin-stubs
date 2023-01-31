<?php

namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * # WooCommerce Plugin Framework
     *
     * This framework class provides a base level of configurable and overrideable
     * functionality and features suitable for the implementation of a WooCommerce
     * plugin.  This class handles all the "non-feature" support tasks such
     * as verifying dependencies are met, loading the text domain, etc.
     *
     * @version 5.8.0
     */
    abstract class SV_WC_Plugin
    {
        /** Plugin Framework Version */
        const VERSION = '5.10.12';
        /** @var object single instance of plugin */
        protected static $instance;
        /** @var string plugin id */
        private $id;
        /** @var string version number */
        private $version;
        /** @var string plugin path, without trailing slash */
        private $plugin_path;
        /** @var string plugin URL */
        private $plugin_url;
        /** @var string template path, without trailing slash */
        private $template_path;
        /** @var \WC_Logger instance */
        private $logger;
        /** @var  SV_WP_Admin_Message_Handler instance */
        private $message_handler;
        /** @var string the plugin text domain */
        private $text_domain;
        /** @var array memoized list of active plugins */
        private $active_plugins = [];
        /** @var SV_WC_Plugin_Dependencies dependency handler instance */
        private $dependency_handler;
        /** @var SV_WC_Hook_Deprecator hook deprecator instance */
        private $hook_deprecator;
        /** @var Plugin\Lifecycle lifecycle handler instance */
        protected $lifecycle_handler;
        /** @var REST_API REST API handler instance */
        protected $rest_api_handler;
        /** @var Admin\Setup_Wizard handler instance */
        protected $setup_wizard_handler;
        /** @var SV_WC_Admin_Notice_Handler the admin notice handler class */
        private $admin_notice_handler;
        /**
         * Initialize the plugin.
         *
         * Child plugin classes may add their own optional arguments.
         *
         * @since 2.0.0
         *
         * @param string $id plugin id
         * @param string $version plugin version number
         * @param array $args {
         *     optional plugin arguments
         *
         *     @type int|float $latest_wc_versions the last supported versions of WooCommerce, as a major.minor float relative to the latest available version
         *     @type string $text_domain the plugin textdomain, used to set up translations
         *     @type array  $dependencies {
         *         PHP extension, function, and settings dependencies
         *
         *         @type array $php_extensions PHP extension dependencies
         *         @type array $php_functions  PHP function dependencies
         *         @type array $php_settings   PHP settings dependencies
         *     }
         * }
         */
        public function __construct($id, $version, $args = [])
        {
        }
        /** Init methods **********************************************************/
        /**
         * Initializes the plugin dependency handler.
         *
         * @since 5.2.0
         *
         * @param array $dependencies {
         *     PHP extension, function, and settings dependencies
         *
         *     @type array $php_extensions PHP extension dependencies
         *     @type array $php_functions  PHP function dependencies
         *     @type array $php_settings   PHP settings dependencies
         * }
         */
        protected function init_dependencies($dependencies)
        {
        }
        /**
         * Builds the admin message handler instance.
         *
         * Plugins can override this with their own handler.
         *
         * @since 5.2.0
         */
        protected function init_admin_message_handler()
        {
        }
        /**
         * Builds the admin notice handler instance.
         *
         * Plugins can override this with their own handler.
         *
         * @since 5.2.0
         */
        protected function init_admin_notice_handler()
        {
        }
        /**
         * Builds the hook deprecator instance.
         *
         * Plugins can override this with their own handler.
         *
         * @since 5.2.0
         */
        protected function init_hook_deprecator()
        {
        }
        /**
         * Builds the lifecycle handler instance.
         *
         * Plugins can override this with their own handler to perform install and
         * upgrade routines.
         *
         * @since 5.2.0
         */
        protected function init_lifecycle_handler()
        {
        }
        /**
         * Builds the REST API handler instance.
         *
         * Plugins can override this to add their own data and/or routes.
         *
         * @since 5.2.0
         */
        protected function init_rest_api_handler()
        {
        }
        /**
         * Builds the Setup Wizard handler instance.
         *
         * Plugins can override and extend this method to add their own setup wizard.
         *
         * @since 5.3.0
         */
        protected function init_setup_wizard_handler()
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 5.2.0
         */
        private function add_hooks()
        {
        }
        /**
         * Cloning instances is forbidden due to singleton pattern.
         *
         * @since 3.1.0
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances is forbidden due to singleton pattern.
         *
         * @since 3.1.0
         */
        public function __wakeup()
        {
        }
        /**
         * Load plugin & framework text domains.
         *
         * @internal
         *
         * @since 4.2.0
         */
        public function load_translations()
        {
        }
        /**
         * Loads the framework textdomain.
         *
         * @since 4.5.0
         */
        protected function load_framework_textdomain()
        {
        }
        /**
         * Loads the plugin textdomain.
         *
         * @since 4.5.0
         */
        protected function load_plugin_textdomain()
        {
        }
        /**
         * Loads the plugin textdomain.
         *
         * @since 4.5.0
         * @param string $textdomain the plugin textdomain
         * @param string $path the i18n path
         */
        protected function load_textdomain($textdomain, $path)
        {
        }
        /**
         * Initializes the plugin.
         *
         * Plugins can override this to set up any handlers after WordPress is ready.
         *
         * @since 5.2.0
         */
        public function init_plugin()
        {
        }
        /**
         * Initializes the plugin admin.
         *
         * Plugins can override this to set up any handlers after the WordPress admin is ready.
         *
         * @since 5.2.0
         */
        public function init_admin()
        {
        }
        /**
         * Include any critical files which must be available as early as possible,
         *
         * @since 2.0.0
         */
        private function includes()
        {
        }
        /**
         * Gets a list of framework deprecated/removed hooks.
         *
         * @see SV_WC_Plugin::init_hook_deprecator()
         * @see SV_WC_Plugin::get_deprecated_hooks()
         *
         * @since 5.8.0
         *
         * @return array associative array
         */
        private function get_framework_deprecated_hooks()
        {
        }
        /**
         * Gets a list of the plugin's deprecated/removed hooks.
         *
         * Implementing classes should override this and return an array of deprecated/removed hooks in the following format:
         *
         * $old_hook_name = array {
         *   @type string $version version the hook was deprecated/removed in
         *   @type bool $removed if present and true, the message will indicate the hook was removed instead of deprecated
         *   @type string|bool $replacement if present and a string, the message will indicate the replacement hook to use,
         *     otherwise (if bool and false) the message will indicate there is no replacement available.
         * }
         *
         * @since 4.3.0
         *
         * @return array
         */
        protected function get_deprecated_hooks()
        {
        }
        /** Admin methods ******************************************************/
        /**
         * Returns true if on the admin plugin settings page, if any
         *
         * @since 2.0.0
         * @return boolean true if on the admin plugin settings page
         */
        public function is_plugin_settings()
        {
        }
        /**
         * Adds admin notices upon initialization.
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function add_admin_notices()
        {
        }
        /**
         * Convenience method to add delayed admin notices, which may depend upon
         * some setting being saved prior to determining whether to render
         *
         * @since 3.0.0
         */
        public function add_delayed_admin_notices()
        {
        }
        /**
         * Return the plugin action links.  This will only be called if the plugin
         * is active.
         *
         * @since 2.0.0
         * @param array $actions associative array of action names to anchor tags
         * @return array associative array of plugin action links
         */
        public function plugin_action_links($actions)
        {
        }
        /** Helper methods ******************************************************/
        /**
         * Automatically log API requests/responses when using SV_WC_API_Base
         *
         * @since 2.2.0
         * @see SV_WC_API_Base::broadcast_request()
         */
        public function add_api_request_logging()
        {
        }
        /**
         * Log API requests/responses
         *
         * @since 2.2.0
         * @param array $request request data, see SV_WC_API_Base::broadcast_request() for format
         * @param array $response response data
         * @param string|null $log_id log to write data to
         */
        public function log_api_request($request, $response, $log_id = null)
        {
        }
        /**
         * Transform the API request/response data into a string suitable for logging
         *
         * @since 2.2.0
         * @param array $data
         * @return string
         */
        public function get_api_log_message($data)
        {
        }
        /**
         * Adds any PHP incompatibilities to the system status report.
         *
         * @since 4.5.0
         *
         * @param array $rows WooCommerce system status rows
         * @return array
         */
        public function add_system_status_php_information($rows)
        {
        }
        /**
         * Saves errors or messages to WooCommerce Log (woocommerce/logs/plugin-id-xxx.txt)
         *
         * @since 2.0.0
         * @param string $message error or message to save to log
         * @param string $log_id optional log id to segment the files by, defaults to plugin id
         */
        public function log($message, $log_id = null)
        {
        }
        /**
         * Require and instantiate a class
         *
         * @since 4.2.0
         * @param string $local_path path to class file in plugin, e.g. '/includes/class-wc-foo.php'
         * @param string $class_name class to instantiate
         * @return object instantiated class instance
         */
        public function load_class($local_path, $class_name)
        {
        }
        /**
         * Determines if TLS v1.2 is required for API requests.
         *
         * Subclasses should override this to return true if TLS v1.2 is required.
         *
         * @since 5.5.2
         *
         * @return bool
         */
        public function require_tls_1_2()
        {
        }
        /**
         * Determines if TLS 1.2 is available.
         *
         * @since 5.5.2
         *
         * @return bool
         */
        public function is_tls_1_2_available()
        {
        }
        /** Getter methods ******************************************************/
        /**
         * Gets the main plugin file.
         *
         * @since 5.0.0
         *
         * @return string
         */
        public function get_plugin_file()
        {
        }
        /**
         * The implementation for this abstract method should simply be:
         *
         * return __FILE__;
         *
         * @since 2.0.0
         * @return string the full path and filename of the plugin file
         */
        protected abstract function get_file();
        /**
         * Returns the plugin id
         *
         * @since 2.0.0
         * @return string plugin id
         */
        public function get_id()
        {
        }
        /**
         * Returns the plugin id with dashes in place of underscores, and
         * appropriate for use in frontend element names, classes and ids
         *
         * @since 2.0.0
         * @return string plugin id with dashes in place of underscores
         */
        public function get_id_dasherized()
        {
        }
        /**
         * Returns the plugin full name including "WooCommerce", ie
         * "WooCommerce X".  This method is defined abstract for localization purposes
         *
         * @since 2.0.0
         * @return string plugin name
         */
        public abstract function get_plugin_name();
        /** Handler methods *******************************************************/
        /**
         * Gets the dependency handler.
         *
         * @since 5.2.0.1
         *
         * @return SV_WC_Plugin_Dependencies
         */
        public function get_dependency_handler()
        {
        }
        /**
         * Gets the lifecycle handler instance.
         *
         * @since 5.1.0
         *
         * @return Plugin\Lifecycle
         */
        public function get_lifecycle_handler()
        {
        }
        /**
         * Gets the Setup Wizard handler instance.
         *
         * @since 5.3.0
         *
         * @return null|Admin\Setup_Wizard
         */
        public function get_setup_wizard_handler()
        {
        }
        /**
         * Gets the admin message handler.
         *
         * @since 2.0.0
         *
         * @return SV_WP_Admin_Message_Handler
         */
        public function get_message_handler()
        {
        }
        /**
         * Gets the admin notice handler instance.
         *
         * @since 3.0.0
         *
         * @return SV_WC_Admin_Notice_Handler
         */
        public function get_admin_notice_handler()
        {
        }
        /**
         * Gets the settings API handler instance.
         *
         * Plugins can use this to init the settings API handler.
         *
         * @since 5.7.0
         *
         * @return void|Settings_API\Abstract_Settings
         */
        public function get_settings_handler()
        {
        }
        /**
         * Returns the plugin version name.  Defaults to wc_{plugin id}_version
         *
         * @since 2.0.0
         * @return string the plugin version name
         */
        public function get_plugin_version_name()
        {
        }
        /**
         * Returns the current version of the plugin
         *
         * @since 2.0.0
         * @return string plugin version
         */
        public function get_version()
        {
        }
        /**
         * Returns the "Configure" plugin action link to go directly to the plugin
         * settings page (if any)
         *
         * @since 2.0.0
         * @see SV_WC_Plugin::get_settings_url()
         * @param string $plugin_id optional plugin identifier.  Note that this can be a
         *        sub-identifier for plugins with multiple parallel settings pages
         *        (ie a gateway that supports both credit cards and echecks)
         * @return string plugin configure link
         */
        public function get_settings_link($plugin_id = null)
        {
        }
        /**
         * Gets the plugin configuration URL
         *
         * @since 2.0.0
         * @see SV_WC_Plugin::get_settings_link()
         * @param string $plugin_id optional plugin identifier.  Note that this can be a
         *        sub-identifier for plugins with multiple parallel settings pages
         *        (ie a gateway that supports both credit cards and echecks)
         * @return string plugin settings URL
         */
        public function get_settings_url($plugin_id = null)
        {
        }
        /**
         * Returns true if the current page is the admin general configuration page
         *
         * @since 3.0.0
         * @return boolean true if the current page is the admin general configuration page
         */
        public function is_general_configuration_page()
        {
        }
        /**
         * Returns the admin configuration url for the admin general configuration page
         *
         * @since 3.0.0
         * @return string admin configuration url for the admin general configuration page
         */
        public function get_general_configuration_url()
        {
        }
        /**
         * Gets the plugin documentation url, used for the 'Docs' plugin action
         *
         * @since 2.0.0
         * @return string documentation URL
         */
        public function get_documentation_url()
        {
        }
        /**
         * Gets the support URL, used for the 'Support' plugin action link
         *
         * @since 4.0.0
         * @return string support url
         */
        public function get_support_url()
        {
        }
        /**
         * Gets the plugin sales page URL.
         *
         * @since 5.1.0
         *
         * @return string
         */
        public function get_sales_page_url()
        {
        }
        /**
         * Gets the plugin reviews page URL.
         *
         * Used for the 'Reviews' plugin action and review prompts.
         *
         * @since 5.1.0
         *
         * @return string
         */
        public function get_reviews_url()
        {
        }
        /**
         * Gets the plugin's path without a trailing slash.
         *
         * e.g. /path/to/wp-content/plugins/plugin-directory
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_plugin_path()
        {
        }
        /**
         * Gets the plugin's URL without a trailing slash.
         *
         * E.g. http://skyverge.com/wp-content/plugins/plugin-directory
         *
         * @since 2.0.0
         *
         * @return string
         */
        public function get_plugin_url()
        {
        }
        /**
         * Gets the woocommerce uploads path, without trailing slash.
         *
         * Oddly WooCommerce core does not provide a way to get this.
         *
         * @since 2.0.0
         *
         * @return string
         */
        public static function get_woocommerce_uploads_path()
        {
        }
        /**
         * Returns the loaded framework __FILE__
         *
         * @since 4.0.0
         * @return string
         */
        public function get_framework_file()
        {
        }
        /**
         * Gets the loaded framework path, without trailing slash.
         *
         * This matches the path to the highest version of the framework currently loaded.
         *
         * @since 4.0.0
         * @return string
         */
        public function get_framework_path()
        {
        }
        /**
         * Gets the absolute path to the loaded framework image directory, without a trailing slash.
         *
         * @since 4.0.0
         *
         * @return string
         */
        public function get_framework_assets_path()
        {
        }
        /**
         * Gets the loaded framework assets URL without a trailing slash.
         *
         * @since 4.0.0
         *
         * @return string
         */
        public function get_framework_assets_url()
        {
        }
        /**
         * Gets the plugin default template path, without a trailing slash.
         *
         * @since 5.5.0
         *
         * @return string
         */
        public function get_template_path()
        {
        }
        /**
         * Loads and outputs a template file HTML.
         *
         * @see \wc_get_template() except we define automatically the default path
         *
         * @since 5.5.0
         *
         * @param string $template template name/part
         * @param array $args associative array of optional template arguments
         * @param string $path optional template path, can be empty, as themes can override this
         * @param string $default_path optional default template path, will normally use the plugin's own template path unless overridden
         */
        public function load_template($template, array $args = [], $path = '', $default_path = '')
        {
        }
        /**
         * Determines whether a plugin is active.
         *
         * @since 2.0.0
         *
         * @param string $plugin_name plugin name, as the plugin-filename.php
         * @return boolean true if the named plugin is installed and active
         */
        public function is_plugin_active($plugin_name)
        {
        }
        /** Deprecated methods ****************************************************/
        /**
         * Handles version checking.
         *
         * @since 2.0.0
         * @deprecated 5.2.0
         */
        public function do_install()
        {
        }
        /**
         * Helper method to install default settings for a plugin.
         *
         * @since 4.2.0
         * @deprecated 5.2.0
         *
         * @param array $settings array of settings in format required by WC_Admin_Settings
         */
        public function install_default_settings(array $settings)
        {
        }
        /**
         * Plugin activated method. Perform any activation tasks here.
         * Note that this _does not_ run during upgrades.
         *
         * @since 4.2.0
         * @deprecated 5.2.0
         */
        public function activate()
        {
        }
        /**
         * Plugin deactivation method. Perform any deactivation tasks here.
         *
         * @since 4.2.0
         * @deprecated 5.2.0
         */
        public function deactivate()
        {
        }
        /**
         * Gets the string name of any required PHP extensions that are not loaded.
         *
         * @since 4.5.0
         * @deprecated 5.2.0
         *
         * @return array
         */
        public function get_missing_extension_dependencies()
        {
        }
        /**
         * Gets the string name of any required PHP functions that are not loaded.
         *
         * @since 2.1.0
         * @deprecated 5.2.0
         *
         * @return array
         */
        public function get_missing_function_dependencies()
        {
        }
        /**
         * Gets the string name of any required PHP extensions that are not loaded.
         *
         * @since 4.5.0
         * @deprecated 5.2.0
         *
         * @return array
         */
        public function get_incompatible_php_settings()
        {
        }
        /**
         * Gets the PHP dependencies.
         *
         * @since 2.0.0
         * @deprecated 5.2.0
         *
         * @return array
         */
        protected function get_dependencies()
        {
        }
        /**
         * Gets the PHP extension dependencies.
         *
         * @since 4.5.0
         * @deprecated 5.2.0
         *
         * @return array
         */
        protected function get_extension_dependencies()
        {
        }
        /**
         * Gets the PHP function dependencies.
         *
         * @since 2.1.0
         * @deprecated 5.2.0
         *
         * @return array
         */
        protected function get_function_dependencies()
        {
        }
        /**
         * Gets the PHP settings dependencies.
         *
         * @since 4.5.0
         * @deprecated 5.2.0
         *
         * @return array
         */
        protected function get_php_settings_dependencies()
        {
        }
        /**
         * Sets the plugin dependencies.
         *
         * @since 4.5.0
         * @deprecated 5.2.0
         *
         * @param array $dependencies the environment dependencies
         */
        protected function set_dependencies($dependencies = [])
        {
        }
    }
}
namespace {
    /**
     * WooCommerce AvaTax main plugin class.
     *
     * @since 1.0.0
     */
    class WC_AvaTax extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Plugin
    {
        /** plugin version number */
        const VERSION = '2.0.0';
        /** client version string */
        const CLIENT_STRING = 'a0o5a000007hTYaAAM';
        /** plugin id */
        const PLUGIN_ID = 'avatax';
        /** @var WC_AvaTax single instance of this plugin */
        protected static $instance;
        /** @var WC_AvaTax_API the api class */
        protected $api;
        /** @var WC_AvaTax_HS_API the HS Classification API class */
        protected $hs_api;
        /** @var \WC_AvaTax_REST_API instance */
        protected $rest_api;
        /** @var \WC_AvaTax_Tax_Handler instance */
        protected $tax_handler;
        /** @var \WC_AvaTax_Order_Handler instance */
        protected $order_handler;
        /** @var \WC_AvaTax_Checkout_Handler instance */
        protected $checkout_handler;
        /** @var WC_AvaTax_Landed_Cost_Handler instance */
        protected $landed_cost_handler;
        /** @var \WC_AvaTax_Integrations instance */
        protected $integrations;
        /** @var \WC_AvaTax_Admin instance */
        protected $admin;
        /** @var \WC_AvaTax_Frontend instance */
        protected $frontend;
        /** @var \WC_AvaTax_AJAX instance */
        protected $ajax;
        /** @var \WC_AvaTax_Import_Export_Handler instance, adds support for import/export functionality */
        protected $import_export_handler;
        /** @var bool $logging_enabled Whether debug logging is enabled */
        private $logging_enabled;
        /** @var Landed_Cost_Sync_Handler instance, The handler for the synchronization process */
        protected $landed_cost_sync_handler;
        /**
         * Plugin constructor.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Flags TLS 1.2 as required for AvaTax API calls.
         *
         * @since 1.16.0
         *
         * @return bool
         */
        public function require_tls_1_2()
        {
        }
        /**
         * Initializes the lifecycle handler.
         *
         * @since 1.7.0
         */
        protected function init_lifecycle_handler()
        {
        }
        /**
         * Initializes the plugin.
         *
         * @since 1.12.0
         */
        public function init_plugin()
        {
        }
        /**
         * Returns the base tax handler.
         *
         * @since 1.5.0
         *
         * @return \WC_AvaTax_Tax_Handler
         */
        public function get_tax_handler()
        {
        }
        /**
         * Returns the admin class instance.
         *
         * @since 1.2.0
         *
         * @return \WC_AvaTax_Admin
         */
        public function get_admin_instance()
        {
        }
        /**
         * Returns the frontend class instance.
         *
         * @since 1.2.0
         *
         * @return \WC_AvaTax_Frontend
         */
        public function get_frontend_instance()
        {
        }
        /**
         * Returns the ajax handler.
         *
         * @since 1.2.0
         *
         * @return \WC_AvaTax_AJAX
         */
        public function get_ajax_handler()
        {
        }
        /**
         * Returns the import/export handler class instance.
         *
         * @since 1.3.0
         *
         * @return \WC_AvaTax_Import_Export_Handler
         */
        public function get_import_export_handler_instance()
        {
        }
        /**
         * Returns the order handler.
         *
         * @since 1.2.0
         *
         * @return \WC_AvaTax_Order_Handler The order handler object
         */
        public function get_order_handler()
        {
        }
        /**
         * Returns the checkout handler.
         *
         * @since 1.2.0
         *
         * @return \WC_AvaTax_Checkout_Handler The checkout handler object
         */
        public function get_checkout_handler()
        {
        }
        /**
         * Returns the integrations handler.
         *
         * @since 1.2.0
         *
         * @return \WC_AvaTax_Integrations integrations handler object
         */
        public function get_integrations()
        {
        }
        /**
         * Returns the landed cost handler.
         *
         * @since 1.5.0
         *
         * @return WC_AvaTax_Landed_Cost_Handler landed cost handler instance
         */
        public function get_landed_cost_handler() : \WC_AvaTax_Landed_Cost_Handler
        {
        }
        /**
         * Returns the WP REST API handler instance.
         *
         * @since 1.7.0
         *
         * @return \WC_AvaTax_REST_API
         */
        public function get_rest_api_instance()
        {
        }
        /**
         * Returns the deprecated/removed hooks.
         *
         * @since 1.5.0
         *
         * @see Framework\SV_WC_Plugin::get_deprecated_hooks()
         * @return array
         */
        protected function get_deprecated_hooks()
        {
        }
        /** Admin methods ******************************************************/
        /**
         * Renders a notice for the user to read the docs before adding add-ons.
         *
         * @since 1.0.0
         *
         * @see Framework\SV_WC_Plugin::add_admin_notices()
         */
        public function add_admin_notices()
        {
        }
        /**
         * Adds admin notices for any missing Avalara account subscriptions.
         *
         * TODO: since 1.16.0 this method is no longer called, as there are no subscriptions to check. Consider removing {IT 2022-01-11}
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         */
        protected function add_missing_subscriptions_notices()
        {
        }
        /**
         * May add an admin notice if the sync process had error responses.
         *
         * @since 1.13.0
         */
        private function maybe_add_product_sync_error_notice()
        {
        }
        /**
         * May add a hint admin notice about adding weights to products.
         *
         * @since 1.13.0
         */
        private function maybe_add_sync_weight_hint_notice()
        {
        }
        /** Helper methods ******************************************************/
        /**
         * Main WC_AvaTax Instance, ensures only one instance is/can be loaded.
         *
         * @since 1.0.0
         *
         * @see wc_avatax()
         * @return WC_AvaTax
         */
        public static function instance()
        {
        }
        /**
         * Returns the plugin documentation URL.
         *
         * @since 1.0.0
         *
         * @see Framework\SV_WC_Plugin::get_documentation_url()
         * @return string
         */
        public function get_documentation_url()
        {
        }
        /**
         * Gets the plugin sales page URL.
         *
         * @since 1.7.1
         *
         * @return string
         */
        public function get_sales_page_url()
        {
        }
        /**
         * Returns the plugin support URL.
         *
         * @since 1.0.0
         *
         * @see Framework\SV_WC_Plugin::get_support_url()
         * @return string
         */
        public function get_support_url()
        {
        }
        /**
         * Returns the plugin name, localized.
         *
         * @since 1.0.0
         *
         * @see Framework\SV_WC_Plugin::get_plugin_name()
         * @return string the plugin name
         */
        public function get_plugin_name()
        {
        }
        /**
         * Returns __FILE__
         *
         * @since 1.0.0
         *
         * @see Framework\SV_WC_Plugin::get_file()
         * @return string the full path and filename of the plugin file
         */
        protected function get_file()
        {
        }
        /**
         * Returns true if on the plugin's settings page.
         *
         * @since 1.0.0
         *
         * @see Framework\SV_WC_Plugin::is_plugin_settings()
         * @return boolean true if on the settings page
         */
        public function is_plugin_settings()
        {
        }
        /**
         * Returns the plugin configuration URL.
         *
         * @since 1.0.0
         *
         * @see Framework\SV_WC_Plugin::get_settings_link()
         * @param string $plugin_id optional plugin identifier.  Note that this can be a
         *        sub-identifier for plugins with multiple parallel settings pages
         *        (ie a gateway that supports both credit cards and echecks)
         * @return string plugin settings URL
         */
        public function get_settings_url($plugin_id = \null)
        {
        }
        /**
         * Determines if debug logging is enabled.
         *
         * @since 1.0.0
         *
         * @return bool $logging_enabled Whether debug logging is enabled.
         */
        public function logging_enabled()
        {
        }
        /**
         * Gets the configured API environment.
         *
         * @since 1.16.0
         *
         * @return string
         */
        public function get_api_environment() : string
        {
        }
        /**
         * Returns the API class instance.
         *
         * @since 1.0.0
         *
         * @return WC_AvaTax_API
         */
        public function get_api() : \WC_AvaTax_API
        {
        }
        /**
         * Returns the HS Classification API class instance.
         *
         * @since 1.13.0
         *
         * @return WC_AvaTax_HS_API
         */
        public function get_hs_api()
        {
        }
        /**
         * Determines if API credentials exist and are valid.
         *
         * @since 1.0.0
         *
         * @param bool $check_cache Whether to check the cached result first.
         * @return bool Whether the API credentials exist and are valid.
         */
        public function check_api($check_cache = \true) : bool
        {
        }
        /**
         * Gets any missing subscriptions from the Avalara account configuration.
         *
         * TODO: since 1.16.0 this method is no longer called, as there are no subscriptions to check. Consider removing {IT 2022-01-11}
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @return array $subscriptions missing subscriptions by name
         */
        protected function get_missing_subscriptions() : array
        {
        }
        /**
         * Gets the AvaTax company ID.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_company_id() : string
        {
        }
        /**
         * Clears the AvaTax company ID from the cache.
         *
         * @since 1.17.0
         *
         * @return void
         */
        public function clear_company_id_cache() : void
        {
        }
        /**
         * Gets the landed cost sync handler.
         *
         * @since 1.13.0
         *
         * @return Landed_Cost_Sync_Handler
         */
        public function get_landed_cost_sync_handler() : \SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Handler
        {
        }
        /**
         * Determines whether the account number and license key are set.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function has_api_credentials_set() : bool
        {
        }
        /**
         * Determines whether the HS API login and password are set.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function has_hs_api_credentials_set() : bool
        {
        }
        /**
         * Loads all the API classes.
         *
         * @since 1.13.0
         */
        private function load_api_classes()
        {
        }
    }
    /**
     * The plugin loader class.
     *
     * @since 1.7.0
     */
    class WC_AvaTax_Loader
    {
        /** minimum PHP version required by this plugin */
        const MINIMUM_PHP_VERSION = '7.4';
        /** minimum WordPress version required by this plugin */
        const MINIMUM_WP_VERSION = '5.6';
        /** minimum WooCommerce version required by this plugin */
        const MINIMUM_WC_VERSION = '3.9.4';
        /** SkyVerge plugin framework version used by this plugin */
        const FRAMEWORK_VERSION = '5.10.12';
        /** the plugin name, for displaying notices */
        const PLUGIN_NAME = 'WooCommerce AvaTax';
        /** @var WC_AvaTax_Loader single instance of this class */
        protected static $instance;
        /** @var array the admin notices to add */
        protected $notices = array();
        /**
         * Constructs the class.
         *
         * @since 1.7.0
         */
        protected function __construct()
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
         * Initializes the plugin.
         *
         * @since 1.7.0
         */
        public function init_plugin()
        {
        }
        /**
         * Loads the base framework classes.
         *
         * @since 1.7.0
         */
        protected function load_framework()
        {
        }
        /**
         * Gets the framework version in namespace form.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected function get_framework_version_namespace()
        {
        }
        /**
         * Gets the framework version used by this plugin.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected function get_framework_version()
        {
        }
        /**
         * Checks the server environment and other factors and deactivates plugins as necessary.
         *
         * Based on http://wptavern.com/how-to-prevent-wordpress-plugins-from-activating-on-sites-with-incompatible-hosting-environments
         *
         * @since 1.7.0
         */
        public function activation_check()
        {
        }
        /**
         * Checks the environment on loading WordPress, just in case the environment changes after activation.
         *
         * @since 1.7.0
         */
        public function check_environment()
        {
        }
        /**
         * Adds notices for out-of-date WordPress and/or WooCommerce versions.
         *
         * @since 1.7.0
         */
        public function add_plugin_notices()
        {
        }
        /**
         * Determines if the required plugins are compatible.
         *
         * @since 1.7.0
         *
         * @return bool
         */
        protected function plugins_compatible()
        {
        }
        /**
         * Determines if the WordPress compatible.
         *
         * @since 1.7.0
         *
         * @return bool
         */
        protected function is_wp_compatible()
        {
        }
        /**
         * Determines if the WooCommerce compatible.
         *
         * @since 1.7.0
         *
         * @return bool
         */
        protected function is_wc_compatible()
        {
        }
        /**
         * Deactivates the plugin.
         *
         * @since 1.7.0
         */
        protected function deactivate_plugin()
        {
        }
        /**
         * Adds an admin notice to be displayed.
         *
         * @since 1.7.0
         *
         * @param string $slug the notice message slug
         * @param string $class the notice message class
         * @param string $message the notice message body
         */
        public function add_admin_notice($slug, $class, $message)
        {
        }
        /**
         * Displays any admin notices added with \WC_AvaTax_Loader::add_admin_notice()
         *
         * @since 1.7.0
         */
        public function admin_notices()
        {
        }
        /**
         * Determines if the server environment is compatible with this plugin.
         *
         * Override this method to add checks for more than just the PHP version.
         *
         * @since 1.7.0
         *
         * @return bool
         */
        protected function is_environment_compatible()
        {
        }
        /**
         * Gets the message for display when the environment is incompatible with this plugin.
         *
         * @since 1.7.0
         *
         * @return string
         */
        protected function get_environment_message()
        {
        }
        /**
         * Gets the main \WC_AvaTax_Loader instance.
         *
         * Ensures only one instance can be loaded.
         *
         * @since 1.7.0
         *
         * @return \WC_AvaTax_Loader
         */
        public static function instance()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\Traits {
    /**
     * A trait that helps resolve the AvaTax item code for a WooCommerce Product.
     *
     * @since 1.16.0
     */
    trait Resolves_Product_Item_Code
    {
        /**
         * Determines the item code to use for this product.
         *
         * TODO: refactor this to support product SKU in the future, consider filtering the result {IT 2021-12-18}
         *
         * @since 1.16.0
         *
         * @param WC_Product $product
         * @return int the item code
         */
        public function resolve_product_item_code(\WC_Product $product) : int
        {
        }
    }
}
namespace {
    /**
     * The base landed cost handler class.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_Landed_Cost_Handler
    {
        use \SkyVerge\WooCommerce\AvaTax\Traits\Resolves_Product_Item_Code;
        /**
         * Gets the HTS code for a product.
         *
         * If a country is provided, it will try and get the fully qualified HTS code
         * for the product and country, based on the plugin configuration.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @param \WC_Product $product product object
         * @param string $destination_country shipping destination country
         * @return string $code the product's HTS code
         */
        public function get_hts_code(\WC_Product $product, $destination_country = '')
        {
        }
        /**
         * Gets classification code configured for an HTS code & country.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @param string $hts_code the product HTS code
         * @param string $country destination country code
         * @return string $code country-specific tariff code
         */
        public function get_country_class_code($hts_code, $country)
        {
        }
        /**
         * Gets all configured classification codes.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @param string $hts_code specific HTS code
         * @return array
         */
        public function get_classes($hts_code = '')
        {
        }
        /**
         * Gets all product HTS codes.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @param bool $use_cache whether to use the cache or get fresh results
         * @return array
         */
        public function get_hts_codes($use_cache = \true)
        {
        }
        /**
         * Gets the HTS code cache.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @return array
         */
        public function get_hts_cache()
        {
        }
        /**
         * Sets the HTS code cache.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @param array $codes HTS codes
         */
        public function set_hts_cache($codes)
        {
        }
        /**
         * Clears the HTS code cache.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         */
        public function clear_hts_cache()
        {
        }
        /**
         * Determines if landed cost is enabled.
         *
         * @since 1.5.0
         * @deprecated 1.16.0 - Landed Costs Admin panel & settings have been removed, rendering this method obsolete
         *
         * @return bool
         */
        public function is_enabled() : bool
        {
        }
        /**
         * Gets the Landed Cost Incoterms.
         *
         * Since 1.16.0 this method returns null, unless the wc_avatax_landed_cost_incoterms option has been set
         * previously. This is because most AvaTax accounts use Nexus-level importer-of-record setting, in which case the
         * transaction-level flag has no effect. However, since this option was previously available, and because some
         * accounts may need to use transaction-level flag, we provide a filter which has access to the request data.
         *
         * @since 1.5.0
         *
         * @param array $data request data
         * @return string|null
         */
        public function get_incoterms(array $data = [])
        {
        }
        /**
         * Gets the Landed Cost shipping mode.
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @return string
         */
        public function get_shipping_mode()
        {
        }
        /**
         * Adds action & filter hooks.
         *
         * Note that since 1.16.0 we no longer check if the feature is enabled/available, as AvaTax may calculate
         * cross-border duties regardless if the feature has been enabled in the WooCommerce extension. As such, we want to
         * ensure we're properly handled these cases as well.
         *
         * @since 1.5.0
         */
        public function add_hooks()
        {
        }
        /**
         * Adds Landed Cost notes after an order is posted to Avalara.
         *
         * This ensures the merchant is better informed if duties are not calculated
         * for some reason.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param int $order_id order ID
         * @param WC_AvaTax_API_Tax_Response $response tax calculation response object
         */
        public function add_calculated_order_notes($order_id, $response)
        {
        }
        /**
         * Adds Landed Cost notes after an order is processed at checkout.
         *
         * This ensures the merchant is better informed if duties are not calculated
         * for some reason.
         *
         * @internal
         *
         * @since 1.16.0
         *
         * @param int|WC_Order $order_id The order ID, or order object
         */
        public function add_checkout_order_notes($order_id)
        {
        }
        /**
         * Adds order notes from AvaTax API response messages.
         *
         * @since 1.16.0
         *
         * @param WC_Order $order
         * @param WC_AvaTax_API_Tax_Response $response tax calculation response object
         * @return void
         */
        protected function add_order_notes_from_api_response(\WC_Order $order, \WC_AvaTax_API_Tax_Response $response)
        {
        }
        /**
         * Replaces VAT/Tax with Import Fees if there are landed costs
         * and taxes are displayed as a single total.
         *
         * @since 1.10.0
         *
         * @param string $label the original label (Tax or VAT)
         * @return string
         */
        public function replace_tax_or_vat($label)
        {
        }
        /**
         * Reorders the taxes to make sure any landed costs are displayed first.
         *
         * @see WC_Cart::get_taxes()
         *
         * @since 1.10.0
         *
         * @param array $taxes the original taxes
         * @param \WC_Cart $cart the cart
         * @return array
         */
        public function reorder_taxes($taxes, $cart)
        {
        }
        /**
         * Determines whether the store is subscribed to Cross Border.
         *
         * @since 1.13.0
         *
         * @deprecated 1.16.0 - it's currently not possible to check for Item Classification subscription via the API.
         *
         * @return bool
         */
        public function is_subscribed_to_cross_border() : bool
        {
        }
        /**
         * Checks whether the store can connect to HS classification API.
         *
         * @since 1.16.0
         *
         * @return bool
         */
        public function can_connect_to_hs_api() : bool
        {
        }
        /**
         * Gets the selected sync countries.
         *
         * @since 1.13.0
         *
         * @return array
         */
        public function get_countries_for_product_sync() : array
        {
        }
        /**
         * Determines whether at least one supported country is selected for syncing.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function has_countries_for_product_sync() : bool
        {
        }
        /**
         * Gets the selected sync countries grouped by their product classification systems.
         *
         * @since 1.16.0
         *
         * @return array
         */
        public function get_countries_for_product_sync_grouped_by_product_classification_system() : array
        {
        }
        /**
         * Gets an optimized list of the selected countries for product sync.
         *
         * The returned list only includes one country per classification system.
         *
         * @since 1.16.0
         *
         * @return string[]
         */
        public function get_optimized_list_of_countries_for_product_sync() : array
        {
        }
        /**
         * Stores an HS Code as a product meta by country.
         *
         * TODO: consider if this method is needed after sites have fully moved over to optimized sync handling {IT 2022-01-06}
         *
         * @since 1.13.0
         *
         * @param \WC_Product $product the WooCommerce product
         * @param string $destination_country the country code
         * @param string $hs_code the HS code
         */
        public function save_hs_code(\WC_Product $product, string $destination_country, string $hs_code)
        {
        }
        /**
         * Gets the HS code for a product and country.
         *
         * TODO: consider if this method is needed after sites have fully moved over to optimized sync handling {IT 2022-01-06}
         *
         * @since 1.13.0
         *
         * @param \WC_Product $product a WooCommerce product
         * @param string $destination_country a country code
         * @return string
         */
        public function get_hs_code(\WC_Product $product, string $destination_country) : string
        {
        }
        /**
         * Stores a classification ID as a product meta by country.
         *
         * @since 1.13.0
         *
         * @param \WC_Product $product the WooCommerce product
         * @param string $destination_country the country code
         * @param string $classification_id the classification ID, optional - will be generated if not provided
         */
        public function save_classification_id(\WC_Product $product, string $destination_country, string $classification_id = \null)
        {
        }
        /**
         * Generates a classification ID for the given item code and country pair.
         *
         * The classification ID consists of the company ID, item code and the destination country. Note that the online
         * Classification API docs no longer have this information - it was taken from the older PDF docs.
         *
         * @since 1.16.0
         *
         * @param int|string $item_code
         * @param string $country
         * @return string
         */
        protected function generate_classification_id($item_code, string $country) : string
        {
        }
        /**
         * Gets the classification ID for a product and country.
         *
         * @since 1.13.0
         *
         * @param \WC_Product $product a WooCommerce product
         * @param string $destination_country a country code
         * @return string
         */
        public function get_classification_id(\WC_Product $product, string $destination_country) : string
        {
        }
        /**
         * Safely fetches a result from the API, storing the result in a transient.
         *
         * In case of an API exception, catches and logs it
         *
         * @since 1.16.0
         *
         * @param Closure $callback a function to perform the actual API request and returns the value, receives WC_AvaTax_API as a single argument
         * @param string $transient the transient name for storing the value
         * @param int|null $timeout transient timeout in seconds, optional, defaults to 1 day
         * @return mixed
         */
        protected function safely_get_api_result(\Closure $callback, string $transient, int $timeout = \null)
        {
        }
        /**
         * Gets the supported countries list.
         *
         * @since 1.13.0
         *
         * @return string[] array of country codes
         */
        public function get_supported_countries() : array
        {
        }
        /**
         * Gets all the supported product classification systems.
         *
         * @since 1.16.0
         *
         * @return array
         */
        public function get_product_classification_systems() : array
        {
        }
        /**
         * Gets a list of countries using the given product classification system.
         *
         * @since 1.16.0
         *
         * @param string $system_code the classification system code
         * @return array an array of country codes, if any
         */
        public function get_countries_using_product_classification_system(string $system_code) : array
        {
        }
        /**
         * Gets the current product classification system for the given country.
         *
         * @since 1.16.0
         *
         * @param string $country the country code
         * @return string the classification system code or an empty string
         */
        public function get_product_classification_system_for_country(string $country) : string
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\Integrations {
    /**
     * The Apple Pay integration handler.
     *
     * @since 1.12.0
     */
    class ApplePay
    {
        /**
         * Constructor.
         *
         * @since 1.12.0
         */
        public function __construct()
        {
        }
        /**
         * Determines whether full tax calculation is needed for the current request.
         *
         * Returns true if the request looks like an Apple Pay Ajax request.
         *
         * @internal
         *
         * @since 1.12.0
         *
         * @param bool $needs_calculation whether full tax calculation will be performed
         *
         * @return bool
         */
        public function needs_full_tax_calculation($needs_calculation)
        {
        }
    }
}
namespace {
    /**
     * The base integrations handler.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_Integrations
    {
        /** @var ApplePay Apple Pay integration instance */
        protected $apple_pay;
        /**
         * Constructor.
         *
         * TODO: move subscription integration methods into their own integration class {WV 2021-04-05}
         *
         * @since 1.5.0
         */
        public function __construct()
        {
        }
        /**
         * Initializes integration classes.
         *
         * @since 1.12.0
         */
        private function load_integrations()
        {
        }
        /**
         * Removes tax calculation meta from a newly created subscription.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param \WC_Subscription $subscription subscription object
         */
        public function remove_new_subscription_meta($subscription)
        {
        }
        /**
         * Removes tax calculation meta from a newly created subscription's items.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param \WC_Order_Item $item order item
         * @param string $cart_item_key cart item key
         * @param array $cart_item cart item data
         * @param \WC_Order $subscription subscription object
         */
        public function remove_new_subscription_item_meta($item, $cart_item_key, $cart_item, $subscription)
        {
        }
        /**
         * Recalculate renewal taxes and send to Avalara.
         *
         * Recalculates taxes for a renewal order when created, but before sent to the payment gateway.
         * Requires Subscriptions 2.0+.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param \WC_Order $renewal_order the newly-created renewal order
         * @param int|\WC_Subscription $subscription Post ID of a 'shop_subscription' post, or instance of a WC_Subscription object
         * @return \WC_Order updated renewal order
         */
        public function recalculate_renewal_taxes($renewal_order, $subscription)
        {
        }
        /**
         * Sets a product's shipping destination based on Local Pickup Plus data.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param array $address destination address
         * @param \WC_Product $product product object
         * @param array $package shipping package
         * @return array
         */
        public function set_lpp_destination($address, $product, $package)
        {
        }
        /**
         * Sets the cart as "ready for calculation" when a pickup is being used.
         *
         * @since 1.5.0
         *
         * @param bool $ready true if ready for calculation
         * @return bool
         */
        public function set_lpp_ready_for_calculation($ready)
        {
        }
    }
    /**
     * AvaTax Import/Export Handler
     *
     * Adds support for:
     *
     * + Customer / Order CSV Export
     * + Customer / Order XML Export
     *
     * @since 1.3.0
     */
    class WC_AvaTax_Import_Export_Handler
    {
        /**
         * Setup class
         *
         * @since 1.3.0
         */
        public function __construct()
        {
        }
        /** Customer/Order CSV Export compat **************************************/
        /**
         * Filters the custom format building options to allow adding AvaTax headers.
         *
         * @since 1.5.0
         *
         * @param string[] $options the custom format building options
         * @param string $export_type the export type, 'customers' or 'orders'
         * @return string[] updated custom format options
         */
        public function add_csv_export_custom_mapping_options($options, $export_type)
        {
        }
        /**
         * Determines the CSV Export format being used, compatible with v3 and v4.
         *
         * @since 1.5.0
         *
         * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator instance
         * @param string $export_type the export type, 'orders' or 'customers'
         * @return string export format
         */
        private function get_csv_export_format($csv_generator, $export_type)
        {
        }
        /** Customer/Order CSV Export - orders **************************************/
        /**
         * Adds support for Customer/Order CSV Export by adding a
         * `vat_id` column header.
         *
         * @since 1.3.0
         *
         * @param array $headers existing array of header key/names for the CSV export
         * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator instance
         * @return array
         */
        public function add_vat_id_to_csv_export_column_headers($headers, $csv_generator)
        {
        }
        /**
         * Adds support for Customer/Order CSV Export by adding data for the
         * `vat_id` column header.
         *
         * @since 1.3.0
         *
         * @param array $order_data generated order data matching the column keys in the header
         * @param WC_Order $order order being exported
         * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator instance
         * @return array
         */
        public function add_vat_id_to_csv_export_column_data($order_data, $order, $csv_generator)
        {
        }
        /**
         * Determine if the CSV Export format/format definition are set to export
         * one row per item.
         *
         * @since 1.3.0
         *
         * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator instance
         * @return bool
         */
        private function is_one_row_per_item($csv_generator)
        {
        }
        /** Customer/Order CSV Export - customers ***********************************/
        /**
         * Adds headers for VAT ID and tax exemption status to customer exports.
         *
         * @since 1.3.0
         *
         * @param array $headers column headers for the CSV file
         * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator instance
         * @return array updated headers
         */
        public function add_customer_tax_info_csv_export_column_headers($headers, $csv_generator)
        {
        }
        /**
         * Adds VAT ID and tax exemption status to customer exports.
         *
         * @since 1.3.0
         *
         * @param array $customer_data the customer data for the CSV file
         * @param \WP_User $user the user object for the export
         * @param int $order_id order ID for the customer, if available
         * @return array updated customer data
         */
        public function add_customer_tax_info_to_csv_export_data($customer_data, $user, $order_id)
        {
        }
        /** Customer/Order XML Export compat **************************************/
        /**
         * Filters the custom format building options to allow adding AvaTax headers.
         *
         * @since 1.5.0
         *
         * @param string[] $options the custom format building options
         * @param string $export_type the export type, 'customers' or 'orders'
         * @return string[] updated custom format options
         */
        public function add_xml_export_custom_mapping_options($options, $export_type)
        {
        }
        /** Customer/Order XML Export - orders **************************************/
        /**
         * Add a VATId element to the order XML export file.
         *
         * @since 1.3.0
         *
         * @param array $data order data
         * @param \WC_Order $order order instance
         * @param \SkyVerge\WooCommerce\CSV_Export\XML_Export_Generator|null $generator export generator
         * @return array
         */
        public function add_xml_export_order_vat_id($data, $order, $generator = \null)
        {
        }
        /**
         * Add a VATId element to the order XML export file.
         *
         * TODO: remove when dropping support for XML Export Suite {CW 2020-01-02}
         *
         * @since 1.9.1
         *
         * @param array $data order data
         * @param \WC_Order $order order instance
         * @return array
         */
        public function add_xml_export_order_vat_id_legacy($data, $order)
        {
        }
        /** Customer/Order XML Export - customers **************************************/
        /**
         * Adds VATId and TaxExemption information to customer XML export file.
         *
         * @internal
         *
         * @since 1.3.0
         *
         * @param array $customer_data customer data in the format for array_to_xml()
         * @param \WP_User $user user object
         * @param int|null $order_id order ID for the customer, if available
         * @param \SkyVerge\WooCommerce\CSV_Export\XML_Export_Generator|null $generator export generator
         * @return array updated customer data
         */
        public function add_xml_export_customer_tax_info($customer_data, $user, $order_id, $generator = \null)
        {
        }
        /**
         * Adds VATId and TaxExemption information to customer XML export file.
         *
         * TODO: remove when dropping support for XML Export Suite {CW 2020-01-02}
         *
         * @since 1.9.1
         *
         * @param array $customer_data customer data in the format for array_to_xml()
         * @param \WP_User $user user object
         * @param int|null $order_id order ID for the customer, if available
         * @return array updated customer data
         */
        public function add_xml_export_customer_tax_info_legacy($customer_data, $user, $order_id)
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax {
    /**
     * This class represents a product in the sync queue.
     *
     * @since 1.13.0
     */
    class Landed_Cost_Sync_Enqueued_Product
    {
        /** @var int the WooCommerce product ID */
        private $product_id;
        /** @var string destination country the product classification is being requested for */
        private $country_of_destination;
        /** @var int timestamp to delay product syncing */
        private $timestamp;
        /** @var string sync action to be executed for the product */
        private $action;
        /** @var string error message after an API request */
        private $error_message;
        /** @var string $resolution resolution message with an explanation provided by Avalara when the product cannot be classified */
        private $resolution;
        /**
         * Product constructor.
         *
         * @since 1.13.0
         *
         * @param array $data optional: builds the properties from an array of data
         */
        public function __construct(array $data = [])
        {
        }
        /**
         * Gets the product ID.
         *
         * @since 1.13.0
         *
         * @return int
         */
        public function get_product_id() : int
        {
        }
        /**
         * Sets the product ID.
         *
         * @since 1.13.0
         *
         * @param int $value
         * @return self
         */
        public function set_product_id(int $value) : \SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product
        {
        }
        /**
         * Gets the code for the country of destination.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_country_of_destination() : string
        {
        }
        /**
         * Sets the country of destination.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_country_of_destination(string $value) : \SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product
        {
        }
        /**
         * Gets the delay timestamp.
         *
         * @since 1.13.0
         *
         * @return int|null
         */
        public function get_timestamp()
        {
        }
        /**
         * Sets the delay timestamp.
         *
         * @since 1.13.0
         *
         * @param int $value
         * @return self
         */
        public function set_timestamp(int $value) : \SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product
        {
        }
        /**
         * Gets the sync action for the product.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_action() : string
        {
        }
        /**
         * Sets the sync action.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_action(string $value) : \SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product
        {
        }
        /**
         * Gets the error message.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_error_message() : string
        {
        }
        /**
         * Sets the error message.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_error_message(string $value) : \SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product
        {
        }
        /**
         * Gets the resolution.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_resolution() : string
        {
        }
        /**
         * Sets the resolution.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_resolution(string $value) : \SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product
        {
        }
        /**
         * Gets an array representation of the class.
         *
         * @since 1.13.0
         *
         * @return array
         */
        public function to_array() : array
        {
        }
    }
}
namespace {
    /**
     * Handle the migration from the legacy plugin.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_Legacy_Handler
    {
        /** @var WC_AvaTax_Legacy The single instance of the class */
        protected static $instance = \null;
        /** @var string This plugin's file path */
        protected $plugin_path = 'woocommerce-avatax/woocommerce-avatax.php';
        /** @var string The legacy plugin file path */
        protected $legacy_path = 'woocommerce-avalara/woocommerce-avalara.php';
        /**
         * Hidden constructor
         *
         * @since 1.0.0
         */
        private function __construct()
        {
        }
        /**
         * Instantiate the class singleton
         *
         * @since 1.0.0
         * @return WC_AvaTax_Legacy singleton instance
         */
        public static function instance()
        {
        }
        /**
         * Deactivate the legacy plugin when this is activated.
         *
         * @since 1.0.0
         */
        public function deactivate_legacy_plugin($plugin)
        {
        }
        /**
         * Display a persistent notice when the legacy plugin is active alongside ours.
         *
         * @since 1.0.0
         */
        public function display_legacy_notice()
        {
        }
        /**
         * Get the currently active plugins.
         *
         * @since 1.0.0
         * @return array The active plugins.
         */
        private function get_active_plugins()
        {
        }
    }
    /**
     * The base tax handler class.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_Tax_Handler
    {
        /** @var string prefix assigned to any tax rate originating from the AvaTax API */
        const RATE_PREFIX = 'AVATAX';
        /**
         * Constructs the class.
         *
         * @since 1.5.0
         */
        public function __construct()
        {
        }
        /**
         * Replaces WooCommerce core tax rates with those estimated by AvaTax.
         *
         * This is primarily used when calculating tax in the shop or for the cart.
         * It is also used as a first line of defense at checkout, so if the real
         * final tax estimation fails, the customer will still be charged an
         * approximate tax.
         *
         * @internal
         *
         * @see \WC_Tax::find_rates()
         * @see \WC_Tax::get_matched_tax_rates()
         *
         * @since 1.5.0
         *
         * @param array $matched_tax_rates matched tax rates from WooCommerce
         * @param string $country customer country code
         * @param string $state customer state
         * @param string $postcode customer postcode
         * @param string $city customer city
         *
         * @return array AvaTax tax rates
         */
        public function set_matched_tax_rates($matched_tax_rates, $country, $state, $postcode, $city)
        {
        }
        /**
         * Gets estimated tax rates based on a customer address.
         *
         * Currently the AvaTax API limits this to US addresses.
         *
         * @since 1.5.0
         *
         * @param string $country customer country code
         * @param string $state customer state/region code
         * @param string $postcode customer postal code
         * @param string $city customer city name
         *
         * @return \WC_AvaTax_API_Tax_Rate[] objects
         */
        public function get_estimated_rates($country, $state, $postcode, $city)
        {
        }
        /**
         * Sets the custom AvaTax tax rate code.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param string $code_string found tax rate code (this will be empty)
         * @param int|string $key requested tax rate code ID
         *
         * @return string $code_string AvaTax tax rate code
         */
        public function set_tax_rate_code($code_string, $key)
        {
        }
        /**
         * Sets the AvaTax tax rate label and amount label.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param array $tax_totals existing tax rate totals
         * @param \WC_Cart $cart cart object
         *
         * @return array
         */
        public function set_tax_rate_labels($tax_totals, $cart)
        {
        }
        /**
         * Sets the order item tax rate ID.
         *
         * This is primarily used so that taxes display properly in the admin.
         *
         * @since 1.5.0
         *
         * @param int $rate_id tax rate ID (this will be empty)
         * @param \WC_Order_Item_Tax $item order item tax object
         * @return string
         */
        public function set_order_item_tax_rate_id($rate_id, $item)
        {
        }
        /**
         * Determines if tax calculation is supported by the given country and/or
         * state.
         *
         * Currently this only checks the plugin's availability settings and not any
         * actual nexus settings in the merchant's Avalara account, as that information
         * is not yet available via their REST API.
         *
         * @since 1.5.0
         *
         * @param string $country_code country code to check
         * @param string $state state to check - omit to only check the country
         *
         * @return bool
         */
        public function is_location_taxable($country_code, $state = '')
        {
        }
        /**
         * Gets the locations where tax calculation is enabled in the settings.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_enabled_locations()
        {
        }
        /**
         * Gets the locations where tax calculation is available from Avalara.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_available_locations()
        {
        }
        /**
         * Determines if a given country supports rate estimation.
         *
         * @since 1.5.0
         *
         * @param string $country_code country code
         *
         * @return bool
         */
        public function country_can_estimate_rates($country_code = '')
        {
        }
        /**
         * Determines if AvaTax calculation is available.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Determines if AvaTax calculation is configured.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function is_configured()
        {
        }
        /**
         * Determines if AvaTax calculation is enabled.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function is_enabled()
        {
        }
        /**
         * Determiens if the configured origin address is complete enough.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function is_origin_address_complete()
        {
        }
        /**
         * Gets the origin address.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_origin_address()
        {
        }
        /**
         * Gets the default tax code for shipping.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_default_product_tax_code() : string
        {
        }
        /**
         * Gets the default tax code for shipping.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_default_shipping_tax_code()
        {
        }
        /**
         * Gets the prefix assigned to any tax rate originating from the AvaTax API.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_rate_prefix()
        {
        }
        /**
         * Determines if WooCommerce tax rates should be completely overridden.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function override_wc_rates()
        {
        }
    }
    /**
     * Handle the checkout-specific functionality.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_Checkout_Handler
    {
        /**
         * Construct the class.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Generate a temporary tax transaction and set the cart tax totals.
         *
         * This is only run at cart or checkout and before order payment.
         * If there is any sort of API error, this will fall back to the estimated tax rates if available (US-only).
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param \WC_Cart $cart WooCommerce cart instance
         */
        public function calculate_taxes($cart)
        {
        }
        /**
         * Resets the cart taxes to before any AvaTax rates were added.
         *
         * @since 1.5.0
         *
         * @param \WC_Cart $cart
         */
        protected function reset_cart_taxes(\WC_Cart $cart)
        {
        }
        /**
         * Removes any estimated AvaTax rates from the matched tax rates.
         *
         * This is used when resetting the cart taxes to remove any previously
         * estimated rates so nothing is duplicated.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @see \WC_AvaTax_Checkout_Handler::reset_cart_taxes()
         * @see \WC_AvaTax_Tax_Handler::set_matched_tax_rates()
         *
         * @param array $matched_tax_rates matched tax rates
         * @return array $matched_tax_rates matched tax rates, minus any from AvaTax
         */
        public function remove_estimated_tax_rates($matched_tax_rates)
        {
        }
        /**
         * Sets the product tax data for a cart.
         *
         * @since 1.5.0
         *
         * @param \WC_Cart $cart cart object
         * @param array $lines lines from the AvaTax API
         * @param bool $tax_included whether the product prices included tax at calculation
         */
        protected function set_product_taxes(\WC_Cart $cart, $lines, $tax_included = \false)
        {
        }
        /**
         * Sets the fee tax data for a cart.
         *
         * @since 1.5.0
         *
         * @param \WC_Cart $cart cart object
         * @param array $lines fee lines from the AvaTax API
         */
        protected function set_fee_taxes(\WC_Cart $cart, array $lines = [])
        {
        }
        /**
         * Try to match the given line ID to a cart fee key.
         *
         * @since 1.16.0
         *
         * @param string $line_id the line ID from AvaTax
         * @param array $cart_fee_ids an array of cart fee id => cart fee key pairs
         * @return false|int|string the found id, or false if none found
         */
        protected function match_cart_fee_key(string $line_id, array $cart_fee_ids = [])
        {
        }
        /**
         * Sets the shipping tax data for a cart.
         *
         * @since 1.5.0
         *
         * @param \WC_Cart $cart cart object
         * @param array $lines shipping lines from the AvaTax API
         */
        protected function set_shipping_taxes(\WC_Cart $cart, $lines)
        {
        }
        /**
         * Determines if the cart needs taxes calculated.
         *
         * This means a full calculation, not an estimation.
         *
         * @since 1.0.0
         *
         * @return bool
         */
        private function needs_calculation()
        {
        }
        /**
         * Determines if a full calculation should be performed on the cart page.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        protected function calculate_on_cart()
        {
        }
        /**
         * Determine if the front-end is ready for tax calculation.
         *
         * The main factors here are whether we're on the checkout page and if the customer
         * has supplied enough address information.
         *
         * @since 1.0.0
         * @return bool $ready_for_calculation Whether the front-end is ready for tax calculation.
         */
        private function ready_for_calculation()
        {
        }
        /**
         * Determine if tax calculation is supported by the customer's taxable address.
         *
         * @since 1.1.0
         * @return bool
         */
        private function is_taxable()
        {
        }
        /**
         * Adjusts the product line subtotals at checkout to account for various tax
         * display settings.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param float $price line item price
         * @param int $qty line item quantity
         * @param \WC_Product $product product object
         * @return string $price The product subtotal.
         */
        public function adjust_cart_item_prices($price, $qty, $product)
        {
        }
        /**
         * Sets proper tax rate labels for display at checkout.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param array $tax_totals calculated tax totals
         * @param \WC_Cart $cart cart object
         * @return array $tax_totals
         */
        public function set_rate_labels($tax_totals, $cart)
        {
        }
        /**
         * Set the customer's VAT ID at checkout.
         *
         * @since 1.0.0
         * @param string $post_data The posted data.
         */
        public function set_customer_vat($post_data)
        {
        }
        /**
         * Adds any messages returned by AvaTax to the checkout display.
         *
         * @internal
         *
         * @since 1.6.4
         */
        public function add_checkout_messages()
        {
        }
        /**
         * Checks whether the address has been validated.
         *
         * Will add a checkout error if validation is required but hasn't been
         * performed by the customer.
         *
         * @internal
         *
         * @since 1.6.4
         *
         * @param array $data checkout data
         * @param \WP_Error $errors checkout errors, or null for WC 2.6
         */
        public function check_address_validation($data, $errors = \null)
        {
        }
    }
    /**
     * Set up the AvaTax admin.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_Admin
    {
        /** @var \WC_AvaTax_Settings settings handler */
        public $settings;
        /** @var \WC_AvaTax_Product_Admin product handler */
        public $product;
        /**
         * Construct the class.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Include the admin files.
         *
         * @since 1.0.0
         */
        public function includes()
        {
        }
        /**
         * Load the admin scripts and styles.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param string $hook_suffix The current screen suffix
         */
        public function enqueue_scripts_styles($hook_suffix)
        {
        }
        /**
         * Includes an export modal template in the plugin settings pages.
         *
         * @internal
         *
         * @since 1.13.0
         */
        public function output_sync_modal_template()
        {
        }
        /**
         * Adds landed costs settings.
         *
         * @internal
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @param array|mixed $settings
         * @return array|mixed
         */
        public function add_settings_pages($settings)
        {
        }
        /**
         * Display the tax code fields on the add product category screen.
         *
         * @internal
         *
         * @since 1.0.0
         */
        public function add_category_code_fields()
        {
        }
        /**
         * Display the tax code fields on the edit product category screen.
         *
         * @internal
         *
         * @since 1.0.0
         * @param object $term current term object
         */
        public function edit_category_code_fields($term)
        {
        }
        /**
         * Save the category tax code fields.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param int $term_id current term ID
         */
        public function save_category_code_fields($term_id)
        {
        }
        /**
         * Add the tax code columns to category admin.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param array $columns existing category columns
         * @return array $columns
         */
        public function add_category_code_columns($columns)
        {
        }
        /**
         * Display the tax code in its column.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param string $content column content
         * @param string $column current column slug
         * @param int $id category ID
         * @return string $columns amended column content
         */
        public function display_category_code_columns($content, $column, $id)
        {
        }
        /**
         * Add the VAT ID information to the order billing information.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param array $fields The existing billing fields
         * @return array
         */
        public function add_admin_order_vat_id($fields)
        {
        }
        /**
         * Hide our custom line item meta from the order admin.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param array $hidden_meta The hidden line item keys.
         * @return array $hidden_meta
         */
        public function hide_order_item_meta($hidden_meta)
        {
        }
        /**
         * Add the item tax rate input to the order admin.
         *
         * @since 1.0.0
         * @param WC_Product $product The product object.
         * @param array $item The item meta.
         * @param int $item_id The item ID.
         */
        public function add_order_item_tax_rate($product, $item, $item_id)
        {
        }
        /**
         * Adds a hidden input to the order items form to indicate AvaTax calculation for an order.
         *
         * This primarily used to display a warning to users trying to partially refund AvaTax transactions, as that's currently not supported.
         *
         * @internal
         *
         * @since 1.6.4
         *
         * @param \WC_Order $order order object
         */
        public function add_order_calculated_field($order)
        {
        }
        /**
         * Add a "Send to Avalara" action to the order action options.
         *
         * @since 1.0.0
         * @global WC_Order $theorder The current order object.
         * @param array $actions The available order actions.
         * @return array $actions
         */
        public function add_order_action($actions)
        {
        }
        /**
         * Adds the customer tax settings fields.
         *
         * @since 1.0.0
         *
         * @param \WP_User $user user object
         */
        public function add_tax_meta_fields($user)
        {
        }
        /**
         * Save the customer tax settings.
         *
         * @since 1.0.0
         * @param int $user_id The user ID.
         */
        public function save_tax_meta_fields($user_id)
        {
        }
    }
    /**
     * Set up the admin settings.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_Settings
    {
        /** @var string $id The settings page ID */
        protected $id = 'avatax';
        /**
         * Constructs the class.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Adds action and filter hooks.
         *
         * @since 1.13.0
         */
        private function add_hooks()
        {
        }
        /**
         * Add the AvaTax section to the Tax tab.
         *
         * @since 1.0.0
         * @param array $sections The existing Tax sections.
         * @return array $sections The new Tax sections.
         */
        public function add_settings_section($sections)
        {
        }
        /**
         * Get the API settings.
         *
         * @since 1.0.0
         * @return array $settings The API settings.
         */
        public function get_api_settings()
        {
        }
        /**
         * Gets the tax calculation settings.
         *
         * @since 1.0.0
         *
         * @return array $settings the tax calculation settings
         */
        public function get_tax_settings()
        {
        }
        /**
         * Get the address validation settings.
         *
         * @since 1.0.0
         * @return array $settings The address validation settings.
         */
        public function get_address_settings()
        {
        }
        /**
         * Get the address verification settings.
         *
         * @since 1.0.0
         * @return array $settings The address verification settings.
         */
        public function get_misc_settings()
        {
        }
        /**
         * Get all of the combined settings.
         *
         * @since 1.0.0
         * @return array $settings The combined settings.
         */
        public function get_settings()
        {
        }
        /**
         * Replace core Tax settings with our own when the AvaTax section is being viewed.
         *
         * @since 1.0.0
         * @return array
         */
        public function add_settings($settings)
        {
        }
        /**
         * Gets the address settings with default fallback values.
         *
         * @since 1.7.2
         *
         * @param string $setting_id address setting field ID
         * @return string[] address values
         */
        private function get_address_values($setting_id = 'wc_avatax_origin_address')
        {
        }
        /**
         * Display a custom address settings field.
         *
         * @since 1.0.0
         * @param array $options The field options.
         */
        public function display_address_fields($options)
        {
        }
        /**
         * Saves the settings.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @global string $current_section The current settings section.
         */
        public function save_settings()
        {
        }
        /**
         * Save the settings fields.
         *
         * This is a simple wrapper for `WC_Admin_Settings::save_fields` to intercept our custom "address"
         * field type for special handling. All other fields are saved as usual. This is being improved in WC 2.4+
         * but for now this is easiest for older versions.
         *
         * @since 1.0.0
         *
         * @param array $fields the settings fields to save
         */
        private function save_fields($fields)
        {
        }
        /**
         * Save the custom address field.
         *
         * @since 1.0.0
         * @param array $field The field definition.
         */
        private function save_address_field($field)
        {
        }
        /**
         * Gets the product sync settings fields.
         *
         * @since 1.13.0
         *
         * @return array
         */
        protected function get_product_sync_settings() : array
        {
        }
        /**
         * Gets a list of countries that’s ready to be used as a setting option.
         *
         * @since 1.13.0
         *
         * @return array
         */
        private function get_normalized_supported_countries_options() : array
        {
        }
        /**
         * Gets the Cross Border Product Sync field description.
         *
         * @since 1.13.0
         *
         * @return string
         */
        private function get_cross_border_product_sync_description() : string
        {
        }
        /**
         * Displays a custom product sync settings field.
         *
         * @internal
         *
         * @since 1.13.0
         *
         * @param array $options
         */
        public function display_product_sync_field($options)
        {
        }
        /**
         * Handles the sync countries list update.
         *
         * This is a callback to be executed when the list of countries to sync is updated.
         *
         * @internal
         *
         * @since 1.13.0
         *
         * @param array $old_countries
         * @param array $new_countries
         */
        public function handle_countries_sync_update($old_countries, $new_countries)
        {
        }
        /**
         * Determines whether the API environment is set to production.
         *
         * @since 1.13.0
         * @deprecated 1.16.0
         *
         * @return bool
         */
        public function is_api_environment_production() : bool
        {
        }
        /**
         * Determines whether the store may try to connect to Cross-Border product sync.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function is_cross_border_product_sync_connection_allowed() : bool
        {
        }
        /**
         * Gets an instance of the plugin main class.
         *
         * @since 1.13.0
         *
         * @return WC_AvaTax
         */
        protected function get_plugin() : \WC_AvaTax
        {
        }
        /**
         * Caches the company ID to prevent race conditions with other requests that depend on it.
         *
         * @since 1.13.0
         */
        protected function cache_company_id()
        {
        }
        /**
         * Clears the company ID cache when updating the company code.
         *
         * Also stops sync in progress if the company code changes when saving settings.
         *
         * @internal
         *
         * @since 1.17.0
         *
         * @param string|mixed $old_company_code
         * @param string|mixed $new_company_code
         * @return void
         */
        public function prune_company_id_cache($old_company_code, $new_company_code)
        {
        }
    }
    /**
     * Set up the AvaTax admin.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_Product_Admin
    {
        /**
         * Construct the class.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /** Tax Code Methods ******************************************************/
        /**
         * Displays the tax code field.
         *
         * @internal
         *
         * @since 1.5.0
         */
        public function display_tax_code_field()
        {
        }
        /** HTS Code Methods ******************************************************/
        /**
         * Displays the HTS code field.
         *
         * @internal
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         */
        public function display_hts_code_field()
        {
        }
        /** General Methods *******************************************************/
        /**
         * Saves the product field values.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param int $post_id product ID
         */
        public function save_meta($post_id)
        {
        }
        /**
         * Adds markup for the custom meta values so Quick Edit can fill the inputs.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param string $column the current column slug
         */
        public function add_quick_edit_inline_values($column)
        {
        }
        /**
         * Displays the quick edit fields.
         *
         * @internal
         *
         * @since 1.5.0
         */
        public function display_quick_edit_fields()
        {
        }
        /**
         * Displays the bulk edit fields.
         *
         * @internal
         *
         * @since 1.5.0
         */
        public function display_bulk_edit_fields()
        {
        }
        /**
         * Saves the tax code bulk edit field.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param \WC_Product $product product object
         */
        public function save_bulk_edit_fields($product)
        {
        }
        /**
         * Filters the product table query when a specific HTS code is desired.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param \WP_Query $query query object
         */
        public function filter_by_hts_code($query)
        {
        }
    }
    /**
     * Set up the AvaTax front-end.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_Frontend
    {
        /**
         * Construct the class.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Loads front-end assets.
         *
         * @internal
         *
         * @since 1.0.0
         */
        public function load_scripts()
        {
        }
        /**
         * Add an address validation button at checkout.
         *
         * @since 1.0.0
         */
        public function add_validate_address_button()
        {
        }
        /**
         * Add an address validation button at checkout.
         *
         * @since 1.1.1
         */
        public function add_shipping_validate_address_button()
        {
        }
        /**
         * Gets the address validation button markup.
         *
         * @since 1.1.1
         *
         * @param string $type button type, either shipping or billing
         * @return string button HTML
         */
        protected function get_validate_address_button($type = 'billing')
        {
        }
        /**
         * Validate the customer address at checkout when JavaScript is disabled.
         *
         * @since 1.0.0
         */
        public function validate_address()
        {
        }
        /**
         * Display a "pending calculation" message on the cart page when displaying a single tax total.
         *
         * @since 1.2.1
         * @param string $html the tax total HTML
         * @return string
         */
        public function adjust_single_tax_total_html($html)
        {
        }
        /**
         * Display a "pending calculation" message on the cart page when taxes are itemized.
         *
         * @since 1.2.1
         */
        public function display_cart_calculation_message()
        {
        }
        /**
         * Get the "pending calculation" message for the cart page.
         *
         * @since 1.2.1
         * @return string
         */
        protected function get_cart_calculation_message()
        {
        }
        /**
         * Add the VAT field to the checkout billing fields.
         *
         * @since 1.0.0
         * @param array $fields The existing checkout fields.
         * @return array $fields The checkout fields.
         */
        public function add_checkout_vat_field($fields)
        {
        }
        /**
         * Determines if address validation is required.
         *
         * @since 1.6.4
         *
         * @return bool
         */
        public function address_validation_required()
        {
        }
        /**
         * Determine if address validation is available at checkout.
         *
         * @since 1.0.0
         *
         * @return bool $enabled Whether address validation is available at checkout.
         */
        public function address_validation_available()
        {
        }
        /**
         * Determine if address validation is enabled.
         *
         * @since 1.0.0
         * @return bool $enabled Whether address validation is enabled.
         */
        public function address_validation_enabled()
        {
        }
        /**
         * Determine if address validation is available at checkout.
         *
         * @since 1.0.0
         * @return bool $enabled Whether address validation is available at checkout.
         */
        public function get_address_validation_countries()
        {
        }
    }
    /**
     * Handle the AJAX-specific functionality.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_AJAX
    {
        /** @var bool $reload_order_notes_after_calculating_taxes whether order notes should be reloaded after calculating order taxes in admin */
        protected $reload_order_notes_after_calculating_taxes = \false;
        /**
         * Construct the class.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Adds handler actions and filters.
         *
         * @since 1.13.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Checks for landed cost warnings in the tax calculation response and sets a flag for later use.
         *
         * @internal
         *
         * @since 1.16.0
         *
         * @param int $order_id order ID (unused)
         * @param WC_AvaTax_API_Tax_Response $response tax calculation response object
         * @return void
         */
        public function check_for_landed_cost_warnings($order_id, $response)
        {
        }
        /**
         * Triggers admin JS to reload order notes.
         *
         * @internal
         *
         * @since 1.16.0
         *
         * @return void
         */
        public function maybe_trigger_order_notes_reload()
        {
        }
        /**
         * Gets the order notes & sends an AJAX success response with teh rendered notes HTML.
         *
         * @internal
         *
         * @since 1.16.0
         *
         * @see \WC_AJAX::save_order_items() - based on this method
         *
         * @return void
         */
        public function get_order_notes()
        {
        }
        /**
         * Gets the order notes HTML for the given order ID.
         *
         * @since 1.16.0
         *
         * @param int $order_id
         * @return false|string
         */
        protected function get_order_notes_html(int $order_id)
        {
        }
        /**
         * Validate the Origin Address settings fields.
         *
         * @since 1.0.0
         */
        public function validate_origin_address()
        {
        }
        /**
         * Validate the customer address at checkout.
         *
         * @since 1.0.0
         */
        public function validate_customer_address()
        {
        }
        /**
         * Display the product variation tax code field.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param int $loop the variation loop key
         * @param array $variation_data the variation data
         * @param \WC_Product_Variation $variation the variation object
         */
        public function display_product_variation_code_fields($loop, $variation_data, $variation)
        {
        }
        /**
         * Save a product variation tax code.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param int $variation_id the varation ID
         */
        public function save_product_variation_code_fields($variation_id)
        {
        }
        /**
         * Save the product tax code quick edit field.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param \WC_Product $product the product object
         */
        public function save_product_tax_code_quick_edit($product)
        {
        }
        /**
         * Saves the tax code fields when a new product category is created.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param int $term_id new term ID
         * @param int $tt_id new term taxonomy ID
         */
        public function save_category_code_fields($term_id, $tt_id)
        {
        }
        /**
         * Add estimated AvaTax calculations to orders when "Calculate Taxes" is run from the admin.
         *
         * @since 1.0.0
         *
         * @param int $order_id the order ID
         * @throws WC_Data_Exception
         */
        public function estimate_order_tax($order_id)
        {
        }
        /**
         * Process order refunds and get accurate tax refund rates from the AvaTax API.
         *
         * Totals passed around this method are mostly negative floats that will _subtract_ from an order's total.
         *
         * @internal
         *
         * @since 1.0.0
         * @deprecated 1.15.0
         *
         * @param int $order_id The order ID.
         * @param int $refund_id The refund ID.
         */
        public function process_refund($order_id, $refund_id)
        {
        }
        /**
         * Attempts to sync again all the products that had sync errors in a previous run.
         *
         * @internal
         *
         * @since 1.13.0
         */
        public function resync_products_with_errors()
        {
        }
        /**
         * Toggles the Cross-Border item classification sync state.
         *
         * @internal
         *
         * @since 1.13.0
         */
        public function toggle_cross_border_sync()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax {
    /**
     * Handles the synchronization process and notifies admins on important updates.
     *
     * @since 1.13.0
     */
    class Landed_Cost_Sync_Handler
    {
        /** @var string the WooCommerce Action Queue hook name for syncing an individual product */
        const PRODUCT_SYNC_ACTION_QUEUE_HOOK = 'wc_avatax_process_enqueued_product';
        /** @var string the WooCommerce Action Queue hook name for syncing the full product catalog */
        const FULL_SYNC_ACTION_QUEUE_HOOK = 'wc_avatax_process_full_sync';
        /** @var string the WooCommerce Action Queue group name for syncing products */
        const PRODUCT_SYNC_ACTION_QUEUE_GROUP = 'wc_avatax_landed_cost_sync';
        /** @var string sync action name to create a product */
        const PRODUCT_SYNC_ACTION_CREATE = 'create';
        /** @var WC_Action_Queue instance */
        protected $action_queue;
        /** @var string option key for storing the syncing state */
        private $landed_cost_syncing_state_option_key = 'wc_avatax_landed_cost_syncing_state';
        /** @var string option key for storing the full sync status */
        private $landed_cost_full_sync_option_key = 'wc_avatax_landed_cost_full_sync';
        /** @var string option key for storing products data pending sync */
        private $landed_cost_products_pending_sync_option_key = 'wc_avatax_landed_cost_products_pending_sync';
        /** @var string option key for storing products that encountered sync errors */
        private $landed_cost_products_with_sync_errors_option_key = 'wc_avatax_landed_cost_products_with_sync_errors';
        /** @var string option key for storing products that had sync resolutions */
        private $landed_cost_products_with_sync_resolutions_option_key = 'wc_avatax_landed_cost_products_with_sync_resolutions';
        /** @var array list of products flagged to have classifications updated */
        protected $products_to_update_classification = [];
        /**
         * Initializes the action queue and hooks.
         *
         * @since 1.13.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the current instance of the action queue.
         *
         * @since 1.13.0
         *
         * @return WC_Action_Queue
         */
        public function get_action_queue() : \WC_Action_Queue
        {
        }
        /**
         * Adds handler actions and filters.
         *
         * @since 1.13.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Handles full sync action by enqueuing batches of products to be synced.
         *
         * Enqueues a batch of products to be synced and re-enqueues itself until all products have been enqueued, avoiding
         * timeout and memory limit issues on sites with large catalogs.
         *
         * @since 1.16.0
         *
         * @internal
         *
         * @param int $batch the batch number
         * @return Landed_Cost_Sync_Enqueued_Product[] a list of enqueued products
         */
        public function handle_full_sync(int $batch) : array
        {
        }
        /**
         * Checks for changes in product main fields before updating product post, and flags it for classification update.
         *
         * Because woocommerce_before_product_object_save hook does not always have access to all the changes made
         * to a product, we have this lower-level check for post changes.
         *
         * @since 1.13.0
         * @internal
         *
         * @see Landed_Cost_Sync_Handler::should_resync_product()
         * @see Landed_Cost_Sync_Handler::maybe_flag_updated_products_to_enqueue()
         *
         * @param int $post_id
         * @param array $data
         */
        public function flag_updated_products_to_enqueue($post_id, $data)
        {
        }
        /**
         * Checks for changes in product params before saving, and flags it for classification update.
         *
         * This method is hooked into woocommerce_before_product_object_save, which is triggered before a product
         * or variation is saved. Normally, $product->get_changes() would return all changes here, including changes to
         * product name or description. However, if the product was updated in admin UI (product edit screen), any changes
         * stored on the product post itself would already have been saved, and as such, not available here. For this
         * reason, we also hook Landed_Cost_Sync_Handler::flag_updated_products_to_enqueue() into pre_post_update.
         *
         * @since 1.16.0
         * @internal
         *
         * @see Landed_Cost_Sync_Handler::should_resync_product()
         * @see Landed_Cost_Sync_Handler::flag_updated_products_to_enqueue()
         *
         * @param WC_Product $product
         */
        public function maybe_flag_updated_products_to_enqueue(\WC_Product $product)
        {
        }
        /**
         * Checks if the given product has updated/changed categories.
         *
         * @since 1.13.0
         *
         * @param int $product_id
         *
         * @return bool
         */
        protected function has_updated_categories(int $product_id) : bool
        {
        }
        /**
         * Maybe enqueues a saved product to be synced.
         *
         * @since 1.13.0
         *
         * @internal
         *
         * @param int $post_id
         * @param WP_Post $post
         */
        public function maybe_enqueue_saved_product($post_id, $post)
        {
        }
        /**
         * Maybe enqueues a product variation to be synced.
         *
         * @since 1.13.0
         * @deprecated 1.16.0
         *
         * @internal
         *
         * @param int $variation_id
         */
        public function maybe_enqueue_saved_product_from_variation($variation_id)
        {
        }
        /**
         * Determines the sync action to be executed for the product.
         *
         * @since 1.13.0
         *
         * @param WC_Product $product
         * @param string $destination_country
         * @return string
         */
        protected function get_product_sync_action(\WC_Product $product, string $destination_country) : string
        {
        }
        /**
         * Determines whether the product should be synced again.
         *
         * @since 1.13.0
         *
         * @param WC_Product $product
         * @return bool
         */
        public function should_resync_product(\WC_Product $product) : bool
        {
        }
        /**
         * Checks whether the product has any changes that might affect classification.
         *
         * @since 1.16.0
         *
         * @param WC_Product $product
         * @return bool
         */
        protected function product_has_changes_affecting_classification(\WC_Product $product) : bool
        {
        }
        /**
         * Processes the list of products in the sync queue.
         *
         * @since 1.13.0
         *
         * @internal
         */
        public function handle_enqueued_product(array $product_data)
        {
        }
        /**
         * Adds a list of products to the sync queue.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product[] $products
         * @return Landed_Cost_Sync_Enqueued_Product[] enqueued products
         */
        public function enqueue_products(array $products) : array
        {
        }
        /**
         * Enqueues all products for syncing countries that have no HS code yet.
         *
         * @since 1.13.0
         * @deprecated 1.16.0
         *
         * @return Landed_Cost_Sync_Enqueued_Product[] enqueued products list
         */
        public function enqueue_all_products() : array
        {
        }
        /**
         * Enqueues a full sync to be performed.
         *
         * @since 1.16.0
         *
         * @param int $batch batch (or page) to process
         */
        public function enqueue_full_sync(int $batch = 1)
        {
        }
        /**
         * Maybe enqueues products that are pending sync.
         *
         * @since 1.13.0
         */
        public function maybe_enqueue_pending_products()
        {
        }
        /**
         * Maybe starts a new full database sync.
         *
         * @since 1.13.0
         */
        public function maybe_start_full_sync()
        {
        }
        /**
         * Determines whether a full database sync is active or not.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function is_full_syncing_active() : bool
        {
        }
        /**
         * Determines whether the landed cost syncing is active or not.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function is_syncing_active() : bool
        {
        }
        /**
         * Processes a product enqueued for sync or classification.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product
         */
        protected function process_product(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product)
        {
        }
        /**
         * Processes a product to run the sync workflow.
         *
         * @since 1.16.0
         *
         * @param WC_Product $wc_product
         */
        protected function process_product_sync_action(\WC_Product $wc_product)
        {
        }
        /**
         * Processes a product to run the classification workflow.
         *
         * @since 1.16.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product
         * @param WC_Product $wc_product
         */
        protected function process_product_classification_action(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product, \WC_Product $wc_product)
        {
        }
        /**
         * Handles an IC API response.
         *
         * @since 1.16.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product the enqueued product
         * @param WC_Product $wc_product the WooCommerce product
         * @param Abstract_HS_Classification_Response|null $response the response, if available
         */
        protected function handle_response(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product, \WC_Product $wc_product, \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response $response = null)
        {
        }
        /**
         * Handles an IC API error response.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product
         * @param Abstract_HS_Classification_Response $response
         */
        protected function handle_error(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product, \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response $response)
        {
        }
        /**
         * Handles an IC API response indicating that the product is pending classification.
         *
         * @since 1.13.0
         *
         * @param WC_Product $wc_product
         * @param Abstract_HS_Classification_Response $response
         */
        protected function handle_pending(\WC_Product $wc_product, \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response $response)
        {
        }
        /**
         * Handles an IC API response indicating that the product cannot be classified.
         *
         * TODO: this method may become obsolete after sites have fully moved over to optimized sync handling {IT 2022-01-06}
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product
         * @param Abstract_HS_Classification_Response $response
         */
        protected function handle_cannot_be_classified(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product, \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response $response)
        {
        }
        /**
         * Handles an IC API response indicating that the product is classified.
         *
         * TODO: this method may become obsolete after sites have fully moved over to optimized sync handling {IT 2022-01-06}
         *
         * @since 1.13.0
         *
         * @param WC_Product $wc_product
         * @param Abstract_HS_Classification_Response $response
         */
        protected function handle_classified(\WC_Product $wc_product, \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response $response)
        {
        }
        /**
         * Determines whether a product is already scheduled to be synced.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product
         * @return bool
         */
        public function is_product_scheduled(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product) : bool
        {
        }
        /**
         * Maybe notifies the admin that the full sync is finished.
         *
         * @since 1.13.0
         *
         * @internal
         */
        public function maybe_finish_full_sync()
        {
        }
        /**
         * Adds products with errors and products that cannot be classified back to the sync queue.
         *
         * @since 1.13.0
         *
         * @return array the list of enqueued products
         */
        public function resync_products_with_errors()
        {
        }
        /**
         * Toggles the landed cost syncing state.
         *
         * If the background sync is running, it will be turned off and vice-versa.
         *
         * @since 1.13.0
         */
        public function toggle_syncing()
        {
        }
        /**
         * Stops the landed cost syncing state.
         *
         * @since 1.16.0
         */
        public function stop_syncing()
        {
        }
        /**
         * Stores a product in an error list.
         *
         * The list may be used later for re-syncing matters or even to let merchants know which products must be fixed.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product
         */
        public function store_error_product(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product)
        {
        }
        /**
         * Stores a product in a list to indicate that the product cannot be classified.
         *
         * The list may be used later for resyncing matters or even to let merchants know which products must be fixed.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product
         */
        public function store_product_that_cannot_be_classified(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product)
        {
        }
        /**
         * Stores the product in a list that may be used later for re-syncing.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product the product to be re-synced later
         * @param string $option_name the WP option name used to store the list
         */
        protected function store_product_for_later_resync(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product, string $option_name)
        {
        }
        /**
         * Gets all products in the database that are candidates to be synced.
         *
         * @since 1.13.0
         *
         * @return int[] an array of products IDs
         */
        protected function query_all_products(int $limit = 10, int $page = 1) : array
        {
        }
        /**
         * Gets a list of products to be synced.
         *
         * @since 1.13.0
         *
         * @param int[] $products_ids an array of products IDs
         * @return Landed_Cost_Sync_Enqueued_Product[] a list of products to be synced
         */
        protected function get_products_to_be_synced(array $products_ids) : array
        {
        }
        /**
         * Gets the number of pending sync actions.
         *
         * It basically counts how many actions are scheduled for the handler callback that are pending.
         *
         * @since 1.13.0
         *
         * @return int
         */
        protected function count_pending_sync_actions() : int
        {
        }
        /**
         * Gets the time in seconds to wait before attempting to get a classification.
         *
         * It defaults to 24 hours (86400), but can be filtered.
         *
         * @since 1.13.0
         *
         * @param Landed_Cost_Sync_Enqueued_Product $product the product to be synced
         * @return int the time in seconds to wait before attempting to get a classification
         */
        private function get_wait_time_to_get_classifications(\SkyVerge\WooCommerce\AvaTax\Landed_Cost_Sync_Enqueued_Product $product) : int
        {
        }
        /**
         * Prepares the HS_Item_Model for the given product before a classification request.
         *
         * @since 1.16.0
         *
         * @param WC_Product $wc_product the WooCommerce product
         * @return HS_Item_Model
         */
        protected function prepare_hs_item_model(\WC_Product $wc_product) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the test HS code for the given product in a sandbox classification request.
         *
         * Product variations should normally not use a test HS code, since AvaTax will automatically assign the parent
         * item's HS code to the variation.
         *
         * @since 1.16.0
         *
         * @param WC_Product $product the WooCommerce product to get the test HS code for
         * @return string|null the test HS code, if provided
         */
        protected function get_test_hs_code(\WC_Product $product)
        {
        }
        /**
         * Checks whether the given post type is a syncable product post type.
         *
         * @since 1.16.0
         *
         * @param string $post_type
         * @return bool
         */
        protected function is_syncable_product_post_type(string $post_type) : bool
        {
        }
        /**
         * Gets a list of countries the given product should be classified for during a full sync.
         *
         * As a side effect, will store existing classification IDs and remote AvaTax tax code.
         *
         * @since 1.16.0
         *
         * @param WC_Product $wc_product
         * @return array|string[]
         */
        protected function get_countries_for_full_product_sync(\WC_Product $wc_product) : array
        {
        }
        /**
         * Gets the remote item for the given Woo product.
         *
         * @since 1.16.0
         *
         * @param WC_Product $wc_product
         * @return object|null
         */
        protected function get_remote_item(\WC_Product $wc_product)
        {
        }
        /**
         * Processes item classifications and gets a list of missing classification systems for the product.
         *
         * Stores classification IDs for existing classifications in AvaTax Item Master for the given product and returns
         * an array of countries that the product does not have classifications for (1 per classification system)
         *
         * @since 1.16.0
         *
         * @param WC_Product $wc_product the product instance
         * @param stdClass $remote_item remote item from Query_Items_Response
         * @return string[] a list of country codes
         */
        protected function process_item_classifications(\WC_Product $wc_product, \stdClass $remote_item) : array
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\Plugin {
    /**
     * Plugin lifecycle handler.
     *
     * Registers and displays milestone notice prompts and eventually the plugin
     * install, upgrade, activation, and deactivation routines.
     *
     * @since 5.1.0
     */
    class Lifecycle
    {
        /** @var array the version numbers that have an upgrade routine */
        protected $upgrade_versions = [];
        /** @var string minimum milestone version */
        private $milestone_version;
        /** @var SV_WC_Plugin plugin instance */
        private $plugin;
        /**
         * Constructs the class.
         *
         * @since 5.1.0
         *
         * @param SV_WC_Plugin $plugin plugin instance
         */
        public function __construct(\SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Plugin $plugin)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 5.1.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Initializes the plugin lifecycle.
         *
         * @since 5.2.0
         */
        public function init()
        {
        }
        /**
         * Triggers plugin activation.
         *
         * We don't use register_activation_hook() as that can't be called inside
         * the 'plugins_loaded' action. Instead, we rely on setting to track the
         * plugin's activation status.
         *
         * @internal
         *
         * @link https://developer.wordpress.org/reference/functions/register_activation_hook/#comment-2100
         *
         * @since 5.2.0
         */
        public function handle_activation()
        {
        }
        /**
         * Triggers plugin deactivation.
         *
         * @internal
         *
         * @since 5.2.0
         */
        public function handle_deactivation()
        {
        }
        /**
         * Handles plugin activation.
         *
         * Plugins can override this to run their own activation tasks.
         *
         * Important Note: operations here should never be destructive for existing
         * data. Since we rely on an option to track activation, it's possible for
         * this to run outside of genuine activations.
         *
         * @since 5.2.0
         */
        public function activate()
        {
        }
        /**
         * Handles plugin deactivation.
         *
         * Plugins can override this to run their own deactivation tasks.
         *
         * @since 5.2.0
         */
        public function deactivate()
        {
        }
        /**
         * Helper method to install default settings for a plugin.
         *
         * @since 5.2.0
         *
         * @param array $settings settings in format required by WC_Admin_Settings
         */
        public function install_default_settings(array $settings)
        {
        }
        /**
         * Performs any install tasks.
         *
         * @since 5.2.0
         */
        protected function install()
        {
        }
        /**
         * Performs any upgrade tasks based on the provided installed version.
         *
         * @since 5.2.0
         *
         * @param string $installed_version installed version
         */
        protected function upgrade($installed_version)
        {
        }
        /**
         * Adds any lifecycle admin notices.
         *
         * @since 5.1.0
         */
        public function add_admin_notices()
        {
        }
        /** Milestone Methods *****************************************************/
        /**
         * Triggers a milestone.
         *
         * This will only be triggered if the install's "milestone version" is lower
         * than $since. Plugins can specify $since as the version at which a
         * milestone's feature was added. This prevents existing installs from
         * triggering notices for milestones that have long passed, like a payment
         * gateway's first successful payment. Omitting $since will assume the
         * milestone has always existed and should only trigger for fresh installs.
         *
         * @since 5.1.0
         *
         * @param string $id milestone ID
         * @param string $message message to display to the user
         * @param string $since the version since this milestone has existed in the plugin
         * @return bool
         */
        public function trigger_milestone($id, $message, $since = '1.0.0')
        {
        }
        /**
         * Generates a milestone notice message.
         *
         * @since 5.1.0
         *
         * @param string $custom_message custom text that notes what milestone was completed.
         * @return string
         */
        protected function generate_milestone_notice_message($custom_message)
        {
        }
        /**
         * Registers a milestone message to be displayed in the admin.
         *
         * @since 5.1.0
         * @see Lifecycle::generate_milestone_notice_message()
         *
         * @param string $id milestone ID
         * @param string $message message to display to the user
         * @return bool whether the message was successfully registered
         */
        public function register_milestone_message($id, $message)
        {
        }
        /** Event history methods *****************************************************************************************/
        /**
         * Adds an upgrade lifecycle event.
         *
         * @since 5.4.0
         *
         * @param string $from_version version upgrading from
         * @param array $data extra data to add
         * @return false|int
         */
        public function add_upgrade_event($from_version, array $data = array())
        {
        }
        /**
         * Adds a migration lifecycle event.
         *
         * @since 5.4.0
         *
         * @param string $from_plugin plugin migrating from
         * @param string $from_version version migrating from
         * @param array $data extra data to add
         * @return false|int
         */
        public function add_migrate_event($from_plugin, $from_version = '', array $data = array())
        {
        }
        /**
         * Stores a lifecycle event.
         *
         * This can be used to log installs, upgrades, etc...
         *
         * Uses a direct database query to avoid cache issues.
         *
         * @since 5.4.0
         *
         * @param string $name lifecycle event name
         * @param array $data any extra data to store
         * @return false|int
         */
        public function store_event($name, array $data = array())
        {
        }
        /**
         * Gets the lifecycle event history.
         *
         * The last 30 events are stored, with the latest first.
         *
         * @since 5.4.0
         *
         * @return array
         */
        public function get_event_history()
        {
        }
        /**
         * Gets the event history option name.
         *
         * @since 5.4.0
         *
         * @return string
         */
        protected function get_event_history_option_name()
        {
        }
        /** Utility Methods *******************************************************/
        /**
         * Gets the registered milestone messages.
         *
         * @since 5.1.0
         *
         * @return array
         */
        protected function get_milestone_messages()
        {
        }
        /**
         * Sets the milestone version.
         *
         * @since 5.1.0
         *
         * @param string $version plugin version
         * @return bool
         */
        public function set_milestone_version($version)
        {
        }
        /**
         * Gets the milestone version.
         *
         * @since 5.1.0
         *
         * @return string
         */
        public function get_milestone_version()
        {
        }
        /**
         * Gets the currently installed plugin version.
         *
         * @since 5.2.0
         *
         * @return string
         */
        protected function get_installed_version()
        {
        }
        /**
         * Sets the installed plugin version.
         *
         * @since 5.2.0
         *
         * @param string $version version to set
         */
        protected function set_installed_version($version)
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 5.1.0
         *
         * @return SV_WC_Plugin|SV_WC_Payment_Gateway_Plugin
         */
        protected function get_plugin()
        {
        }
        /** Deprecated methods ****************************************************/
        /**
         * Handles tasks after the plugin has been updated.
         *
         * @internal
         *
         * @since 5.1.0
         */
        public function do_update()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax {
    /**
     * Plugin lifecycle handler.
     *
     * @since 1.7.0
     *
     * @method \WC_AvaTax get_plugin()
     */
    class Lifecycle extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\Plugin\Lifecycle
    {
        /**
         * Lifecycle constructor.
         *
         * @since 1.7.1
         *
         * @param \WC_AvaTax $plugin
         */
        public function __construct($plugin)
        {
        }
        /**
         * Installs default settings & pages.
         *
         * @since 1.7.0
         */
        protected function install()
        {
        }
        /**
         * Handles upgrade routines.
         *
         * @since 1.7.0
         *
         * @param string $installed_version currently installed version
         */
        public function upgrade($installed_version)
        {
        }
        /**
         * Force enables logging while performing upgrade routines.
         *
         * @internal
         *
         * @since 1.7.1
         *
         * @return bool
         */
        public function enable_logging()
        {
        }
        /**
         * Determines if the legacy AvaTax plugin's settings exist and migrates them if so.
         *
         * @since 1.7.0
         */
        protected function maybe_migrate()
        {
        }
        /**
         * Updates to version 1.3.0
         *
         * @since 1.7.1
         */
        protected function upgrade_to_1_3_0()
        {
        }
        /**
         * Updates to version 1.7.2
         *
         * @since 1.7.2
         */
        protected function upgrade_to_1_7_2()
        {
        }
    }
}
namespace {
    /**
     * Handle the order-specific functionality.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_Order_Handler
    {
        /** @var string The prefix for order note error messages **/
        protected $error_prefix;
        /** @var WC_AvaTax_API_Tax_Response[] array or API response objects, with order IDs as keys */
        protected $calculated_order_taxes = array();
        /** @var \WC_Order_Refund|null the order refund currently being deleted, if any **/
        protected $refund_being_deleted = \null;
        /**
         * Construct the class.
         *
         * @since 1.0.0
         */
        public function __construct()
        {
        }
        /**
         * Adds handler actions and filters.
         *
         * @since 1.15.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Set the effective tax date based on the order date.
         *
         * @since 1.0.0
         * @param int $order_id The order ID
         */
        public function set_checkout_order_meta($order_id)
        {
        }
        /**
         * Adds line item address data for new orders.
         *
         * @internal
         *
         * @since 1.5.0
         * @deprecated 1.16.0
         *
         * @param \WC_Order_Item $item item object
         * @param string $cart_item_key cart index key
         */
        public function add_new_order_item_addresses($item, $cart_item_key)
        {
        }
        /**
         * Sets order line item metadata for new orders.
         *
         * @internal
         *
         * @since 1.16.0
         *
         * @param \WC_Order_Item $item item object
         * @param string $cart_item_key cart index key
         */
        public function set_new_order_item_meta_data($item, $cart_item_key)
        {
        }
        /**
         * Gets the cart line for the given cart item key from the AvaTax API response.
         *
         * @since 1.16.0
         *
         * @param string $cart_item_key
         * @return false|mixed
         */
        protected function get_avatax_response_cart_line(string $cart_item_key)
        {
        }
        /**
         * Adds fee item meta for new orders.
         *
         * @internal
         *
         * @since 1.5.0
         *
         * @param \WC_Order_Item_Fee $item item object
         * @param int $fee_key cart fee key
         * @param object $fee fee object
         */
        public function add_new_order_fee_meta($item, $fee_key, $fee)
        {
        }
        /**
         * Sets proper tax rate labels for new orders.
         *
         * @internal
         *
         * @since 1.5.0
         * @deprecated 1.15.0
         *
         * @param \WC_Order_Item_Tax $item order tax item object
         * @param string $tax_rate_code rate code
         * @throws \WC_Data_Exception
         */
        public function set_tax_item_labels($item, $tax_rate_code)
        {
        }
        /**
         * Sets proper tax rate details for new orders.
         *
         * @internal
         *
         * @since 1.15.0
         *
         * @param \WC_Order_Item_Tax $item order tax item object
         * @param string $tax_rate_code rate code
         */
        public function set_tax_item_details($item, $tax_rate_code)
        {
        }
        /**
         * Restores the value of the properties of an Order Tax Item before saving they are saved to the database.
         *
         * {@see \WC_Order::update_taxes() can accidentally overwrite the properties of AvaTax tax items with empty values.
         * This method prevents information for AvaTAx tax items from being accidentally erased.
         *
         * @internal
         *
         * @since 1.13.0
         *
         * @param \WC_Order_Item $item
         */
        public function maybe_restore_tax_item_properties($item)
        {
        }
        /**
         * Determines whether we should restore the value for the properties of the given item.
         *
         * @since 1.13.0
         *
         * @param WC_Order_Item_Tax $item tax item
         *
         * @return bool
         */
        protected function should_restore_tax_item_properties($item)
        {
        }
        /**
         * Prevents WooCommerce from setting default values for the properties of tax items that represent AvaTax tax items.
         *
         * {@see \WC_Order::update_taxes() sets the values using the value returned by {@see \WC_Tax::get_rate_label()},
         * and other methods that rely on tax rate information stored in the database, which doesn't exist for AvaTax
         * tax items.
         *
         * @since 1.13.0
         *
         * @param \WC_Order_Item_Tax $item
         */
        protected function restore_tax_item_properties(\WC_Order_Item_Tax $item)
        {
        }
        /**
         * Calculate order taxes and send to Avalara tax when payment is complete.
         *
         * @since 1.0.0
         * @param WC_Order $order The order object.
         */
        public function process_paid_order($order)
        {
        }
        /**
         * Calculate order taxes and send to Avalara.
         *
         * @since 1.0.0
         * @param WC_Order $order The order object.
         * @return \WC_Order|bool $order The processed order or false on failure.
         */
        public function process_order(\WC_Order $order)
        {
        }
        /**
         * Estimates tax for an order.
         *
         * @since 1.5.0
         *
         * @param \WC_Order $order order object
         *
         * @return \WC_Order|Framework\SV_WC_API_Exception $order order object or an exception on failure
         */
        public function estimate_tax(\WC_Order $order)
        {
        }
        /**
         * Calculate and update taxes for an order.
         *
         * By default, this calculation is invisible to Avatax. If you want to record this transaction
         * as an Avalara document you can set the `$commit` param to `true`.
         *
         * @since 1.0.0
         *
         * @param WC_Order $order The order object.
         * @param bool $commit Whether to commit the transaction to Avalara
         * @param bool $update_item_taxes whether the order items should store the returned tax values
         *
         * @return \WC_Order|Framework\SV_WC_API_Exception $order The processed order or an exception on failure
         */
        public function calculate_order_tax(\WC_Order $order, $commit = \false, $update_item_taxes = \false)
        {
        }
        /**
         * Adds the AvaTax tax data to order items when order taxes are recalculated.
         *
         * @internal
         *
         * @since 1.5.1
         *
         * @param \WC_Order_Item $item order item
         * @param \WC_AvaTax_API_Tax_Response|null AvaTax API response
         */
        public function add_order_item_taxes($item, $response = \null)
        {
        }
        /**
         * Stores AvaTax line data like tax code & addresses on the order's items.
         *
         * @since 1.5.0
         *
         * @param WC_Order $order
         * @param array $lines response lines
         */
        protected function update_order_items_data(\WC_Order $order, array $lines = [])
        {
        }
        /**
         * Updates order item meta data for a single order item.
         *
         * @since 1.16.0
         *
         * @param WC_Order_Item $item order item
         * @param array $line line from AvaTax response
         * @param bool $save whether to save the item, defaults to false
         */
        protected function update_order_item_meta_data(\WC_Order_Item $item, array $line, bool $save = \false)
        {
        }
        /**
         * Stores AvaTax rate data to an order's line items.
         *
         * This isn't needed for regular checkout orders since that data gets set
         * based on the data already available in the cart object. However, when tax
         * is calculated manually via the admin or for renewal orders, we need to
         * store the results.
         *
         * @since 1.5.0
         *
         * @param \WC_Order $order order object
         * @param \WC_AvaTax_API_Tax_Response $response tax transaction response object
         * @return \WC_Order $order order object
         * @throws \Exception
         */
        protected function update_item_taxes(\WC_Order $order, \WC_AvaTax_API_Tax_Response $response)
        {
        }
        /**
         * Updates an order's line & fee item taxes.
         *
         * @since 1.5.0
         *
         * @param \WC_Order $order order object
         * @param array $lines response lines
         * @return \WC_Order $order order object
         * @throws \Exception
         */
        protected function update_line_item_taxes(\WC_Order $order, array $lines)
        {
        }
        /**
         * Updates an order's shipping item taxes.
         *
         * @since 1.5.0
         *
         * @param \WC_Order $order order object
         * @param array $lines response lines
         * @return \WC_Order $order order object
         * @throws \Exception
         */
        protected function update_shipping_item_taxes(\WC_Order $order, array $lines)
        {
        }
        /**
         * Updates the tax totals for an order.
         *
         * @since 1.5.0
         *
         * @param \WC_Order $order order object
         * @param array $lines response lines
         * @return \WC_Order $order order object
         * @throws \WC_Data_Exception
         */
        protected function update_tax_totals(\WC_Order $order, array $lines) : \WC_Order
        {
        }
        /**
         * Removes tax totals from an order.
         *
         * @since 1.5.0
         *
         * @param \WC_Order $order order object
         * @return \WC_Order $order order object
         */
        protected function remove_taxes(\WC_Order $order)
        {
        }
        /**
         * Stores AvaTax transaction data for an order.
         *
         * This ensures the original tax calculation details are available in case
         * of a refund down the road, instead of pulling from the settings which
         * may have changed.
         *
         * @since 1.5.0
         *
         * @param \WC_Order $order order object
         * @param \WC_AvaTax_API_Tax_Response $response tax transaction response object
         */
        protected function store_tax_data(\WC_Order $order, \WC_AvaTax_API_Tax_Response $response)
        {
        }
        /**
         * Determines whether the order has any landed costs by AvaTax.
         *
         * @since 1.16.0
         *
         * @param WC_Order $order
         * @return bool
         */
        protected function order_has_landed_costs(\WC_Order $order) : bool
        {
        }
        /**
         * Process order refunds.
         *
         * @internal
         *
         * @since 1.0.0
         *
         * @param int $order_id The order ID.
         * @param int $refund_id The refund ID.
         */
        public function process_refund($order_id, $refund_id)
        {
        }
        /**
         * Remember a reference to the order refund before it's deleted.
         *
         * @internal
         *
         * @since 1.15.0
         *
         * @param int $order_id
         */
        public function maybe_remember_refund_being_deleted($order_id)
        {
        }
        /**
         * Void a deleted refund that was previously posted to AvaTax.
         *
         * This method expects that an instance of the refund object has previously been stored in the `refund_being_deleted`
         * property, as we don't have access to the refund object anymore after it's deleted.
         *
         * @internal
         *
         * @since 1.15.0
         *
         * @param $refund_id
         */
        public function maybe_void_deleted_refund($refund_id)
        {
        }
        /**
         * Voids a refund's Avalara document.
         *
         * @since 1.15.0
         *
         * @param \WC_Order_Refund $refund the refund object
         */
        public function void_refund(\WC_Order_Refund $refund)
        {
        }
        /**
         * Void an order's Avalara document.
         *
         * @since 1.0.0
         * @param int $order_id The order ID.
         */
        public function void_order($order_id)
        {
        }
        /**
         * Determines if an order is taxable based on its addresses.
         *
         * @since 1.6.1
         *
         * @param \WC_Abstract_Order $order order or refund object
         * @return bool
         */
        public function is_order_taxable(\WC_Abstract_Order $order)
        {
        }
        /**
         * Gets the taxable address for an order.
         *
         * We have no session here, so we need to do a bit of duplication of WC_Customer::get_taxable_address().
         *
         * @since 1.6.1
         *
         * @param \WC_Abstract_Order $order order or refund object
         * @return string[] taxable address
         */
        public function get_taxable_address(\WC_Abstract_Order $order)
        {
        }
        /**
         * Add an AvaTax status to an order.
         *
         * @since 1.0.0
         * @param \WC_Order|\WC_Order_Refund|int $order The order object or ID.
         * @param string $status The AvaTax status to add.
         * @return int|false The resulting meta ID on success, false on failure.
         */
        public function add_status($order, $status)
        {
        }
        /**
         * Remove an AvaTax status from an order.
         *
         * @since 1.0.0
         * @param \WC_Order|int $order The order object or ID.
         * @param string $status The AvaTax status to remove.
         * @return bool
         */
        public function remove_status($order, $status)
        {
        }
        /**
         * Determine if an order has already been posted to AvaTax.
         *
         * @since 1.0.0
         * @param \WC_Order|int $order The order object or ID.
         * @return bool Whether the order has already been posted to AvaTax.
         */
        public function is_order_posted($order)
        {
        }
        /**
         * Determine if an order's refund has been posted to AvaTax.
         *
         * @since 1.0.0
         * @param \WC_Order|int $order The order object or ID.
         * @return bool Whether the order's refund has been posted to AvaTax.
         */
        public function is_order_refunded($order)
        {
        }
        /**
         * Determine if an order has been voided in AvaTax.
         *
         * @since 1.0.0
         * @param \WC_Order|int $order The order object or ID.
         * @return bool Whether the order has been voided in AvaTax.
         */
        public function is_order_voided($order)
        {
        }
        /**
         * Determine if an order has a specific AvaTax status.
         *
         * @since 1.0.0
         * @param \WC_Order|\WC_Order_Refund|int $order The order object or ID.
         * @param string $status Optional. The AvaTax status to check. If none set, it checks if any
         *                       status is set.
         * @return bool Whether the order has the specific status.
         */
        public function order_has_status($order, $status = '')
        {
        }
        /**
         * Get the statuses of an order when last posted to AvaTax.
         *
         * Orders can have multiple statuses, like `posted` and 'refunded'.
         *
         * @since 1.0.0
         * @param \WC_Order|int $order The order object or ID.
         * @return array The order's AvaTax statuses.
         */
        public function get_order_statuses($order)
        {
        }
        /**
         * Determine if an order is ready to be sent to AvaTax.
         *
         * The primary factor is if the order has a status that identifies it as "paid".
         *
         * @since 1.0.0
         * @param WC_Order $order The order object
         * @return bool Whether the order is ready to be sent to AvaTax.
         */
        public function is_order_ready(\WC_Order $order)
        {
        }
        /**
         * Determines whether tax calculation for new orders should be recorded permanently in Avalara.
         *
         * If disabled, taxes will still be calculated at checkout but won't result
         * in a final permanent transaction on the Avalara side.
         *
         * This can be overridden on an order-by-order basis using the 'wc_avatax_record_order' filter.
         *
         * @since 1.6.4
         *
         * @return bool
         */
        public function record_calculations()
        {
        }
        /**
         * Handles the Retail Delivery Fee in order totals display.
         *
         * 1. Removes the $0 "Retail Delivery Fee" added dynamically to apply the concrete Retail Delivery Fee from Avalara.
         * 2. Changes the "State Use Tax" name set by Avalara to "Retail Delivery Fees" as expected by the CO tax authority.
         *
         * @link https://tax.colorado.gov/retail-delivery-fee
         * @link https://help.avalara.com/Frequently_Asked_Questions/AvaTax_FAQ/ACTION_NEEDED%3A_Colorado_Retail_Delivery_Fee_begins_July_1%2C_2022
         * @see \WC_AvaTax_API_Tax_Request::include_retail_delivery_fee()
         *
         * @since 1.16.2
         *
         * @internal
         *
         * @param array|mixed $rows order totals
         * @param \WC_Order|mixed $order
         * @return array|mixed
         */
        public function handle_retail_delivery_fee_in_order_totals($rows, $order)
        {
        }
        /**
         * Handles the Retail Delivery Fee in order tax totals display.
         *
         * Updates the label of a "State Use Tax" set by Avalara to "Retail Delivery Fees".
         *
         * @link https://tax.colorado.gov/retail-delivery-fee
         * @link https://help.avalara.com/Frequently_Asked_Questions/AvaTax_FAQ/ACTION_NEEDED%3A_Colorado_Retail_Delivery_Fee_begins_July_1%2C_2022
         * @see \WC_AvaTax_API_Tax_Request::include_retail_delivery_fee()
         *
         * @since 1.16.2
         *
         * @internal
         *
         * @param array|mixed $tax_totals
         * @param \WC_Order|mixed $order
         * @return array|mixed
         */
        public function handle_retail_delivery_fee_in_order_tax_totals($tax_totals, $order)
        {
        }
        /**
         * Determines if an order contains a "Retail Delivery Fee" added dynamically to account for Avalara handling of RDF tax.
         *
         * @since 1.16.2
         *
         * @param WC_Order $order
         * @return bool
         */
        protected function has_retail_delivery_fee_in_order_totals(\WC_Order $order) : bool
        {
        }
    }
    /**
     * Handler for the WooCommerce REST API.
     *
     * @since 1.7.0
     */
    class WC_AvaTax_REST_API
    {
        /** \WC_Avatax plugin main instance */
        private $plugin;
        /**
         * Hooks in the WooCommerce REST API.
         *
         * @since 1.7.0
         *
         * @param \WC_Avatax $plugin main instance
         */
        public function __construct($plugin)
        {
        }
        /**
         * Gets the main plugin instance.
         *
         * @since 1.7.0
         *
         * @return \WC_Avatax
         */
        protected function get_plugin()
        {
        }
        /**
         * Processes orders created via the REST API.
         *
         * @internal
         *
         * @since 1.7.0
         *
         * @param \WC_Order|int $order order object or ID
         */
        public function process_rest_api_order($order)
        {
        }
        /**
         * Filters the order response data to tweak AvaTax data.
         *
         * WooCommerce REST API order endpoint expects tax rate IDs to be integers so we make sure that AvaTax doesn't push its alphanumerical strings there.
         * Also, when creating an order via the REST API, this callback ensures that the tax totals are calculated before returned in the API response.
         *
         * @internal
         *
         * @since 1.7.0
         *
         * @param \WP_REST_Response $response response object
         * @param \WP_Post $post order post object
         * @param \WP_REST_Request $request request object
         * @return \WP_REST_Response
         */
        public function handle_order_response($response, $post, $request)
        {
        }
        /**
         * Adjusts line item rate data.
         *
         * @since 1.7.0
         *
         * @param string $key key to process, for example: 'line_items', 'shipping_lines', 'fee_lines', 'coupon_lines'...
         * @param array $order_data whole order data
         * @return array
         */
        private function handle_order_items_rate($key, array $order_data)
        {
        }
    }
    /**
     * The AvaTax API rate class.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_API_Tax_Rate
    {
        /** @var array $data rate data */
        protected $data = array('code' => '', 'name' => '', 'rate' => 0, 'total' => 0);
        /**
         * Constructs the class.
         *
         * @since 1.5.0
         *
         * @param array $data {
         *     The rate data
         *
         *     @type string $code rate code, i.e. 'MI STATE TAX'
         *     @type string $name rate name, i.e. 'State' or 'City'
         *     @type float  $rate decimal rate percentage
         * }
         */
        public function __construct($data)
        {
        }
        /**
         * Gets the rate code.
         *
         * This method removes spaces & prepends 'AVATAX-' to the code so it can be
         * easily identified later.
         *
         * Note that the code used for WooCommerce tax items may include a numeric suffix if AvaTax returns
         * two or more rates with the same code.
         *
         * @since 1.5.0
         *
         * @return string the rate code, formatted like 'AVATAX-MI-STATE-TAX'
         */
        public function get_code()
        {
        }
        /**
         * Gets the name.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Gets the label.
         *
         * This method appends a standard tax label, i.e. "Tax" or "VAT" which
         * results in a full customer-friendly name, i.e. "State Tax"
         *
         * When landed costs are included, this method prepends "Tax - " for all
         * rates other than the landed costs.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_label() : string
        {
        }
        /**
         * Gets the rate percentage, as a decimal.
         *
         * @since 1.5.0
         *
         * @return float
         */
        public function get_rate()
        {
        }
        /**
         * Sets the rate percentage, as a decimal.
         *
         * @since 1.11.0
         *
         * @param float $rate rate percentage amount
         */
        public function set_rate($rate)
        {
        }
        /**
         * Gets the total tax amount.
         *
         * @since 1.5.0
         *
         * @return float
         */
        public function get_total()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * API Response
     */
    interface SV_WC_API_Response
    {
        /**
         * Returns the string representation of this request
         *
         * @since 2.2.0
         * @return string the request
         */
        public function to_string();
        /**
         * Returns the string representation of this request with any and all
         * sensitive elements masked or removed
         *
         * @since 2.2.0
         * @return string the request, safe for logging/displaying
         */
        public function to_string_safe();
    }
    /**
     * Base JSON API response class.
     *
     * @since 4.3.0
     */
    abstract class SV_WC_API_JSON_Response implements \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_API_Response
    {
        /** @var string string representation of this response */
        protected $raw_response_json;
        /** @var mixed decoded response data */
        public $response_data;
        /**
         * Build the data object from the raw JSON.
         *
         * @since 4.3.0
         * @param string $raw_response_json The raw JSON
         */
        public function __construct($raw_response_json)
        {
        }
        /**
         * Magic accessor for response data attributes
         *
         * @since 4.3.0
         * @param string $name The attribute name to get.
         * @return mixed The attribute value
         */
        public function __get($name)
        {
        }
        /**
         * Get the string representation of this response.
         *
         * @since 4.3.0
         * @see SV_WC_API_Response::to_string()
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Get the string representation of this response with any and all sensitive elements masked
         * or removed.
         *
         * @since 4.3.0
         * @see SV_WC_API_Response::to_string_safe()
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
}
namespace {
    /**
     * The AvaTax API request class.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_API_Response extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_API_JSON_Response
    {
        /**
         * Determines if the response contains errors.
         *
         * @since 1.5.0
         * @return bool
         */
        public function has_errors()
        {
        }
        /**
         * Gets the errors, if any.
         *
         * @since 1.5.0
         * @return \WP_Error|array
         */
        public function get_errors()
        {
        }
        /**
         * Gets the response error code, if  any.
         *
         * @since 1.16.0
         *
         * @return string
         */
        public function get_error_code() : string
        {
        }
        /**
         * Checks whether the response has an authentication or authorization error.
         *
         * AuthenticationIncomplete occurs with missing credentials in IC API calls.
         * AuthenticationException occurs with missing / invalid credentials in REST API calls.
         * AuthorizationException occurs with missing entitlement/subscription or sometimes, invalid credentials (for IC API calls)
         *
         * @see https://developer.avalara.com/avatax/errors/AuthenticationIncomplete/
         * @see https://developer.avalara.com/avatax/errors/AuthenticationException/
         * @see https://developer.avalara.com/avatax/errors/AuthorizationException/
         *
         * @since 1.16.0
         *
         * @return bool
         */
        public function has_auth_error() : bool
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Responses {
    /**
     * The AvaTax API nexus list response class.
     *
     * @since 1.13.0
     */
    class Nexus_List_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Gets the supported country list from Nexus.
         *
         * @since 1.13.0
         *
         * @return string[]
         */
        public function get_country_list() : array
        {
        }
    }
    /**
     * The AvaTax API query items response class.
     *
     * @since 1.16.0
     */
    class Query_Items_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Gets the returned items
         *
         * @since 1.16.0
         *
         * @return array
         */
        public function get_items() : array
        {
        }
        /**
         * Gets the first returned item
         *
         * @since 1.16.0
         *
         * @return object|null
         */
        public function get_first_item()
        {
        }
    }
}
namespace {
    /**
     * The AvaTax API utility response class.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_API_Utility_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Determines if the API is authenticated.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function is_authenticated()
        {
        }
        /**
         * Gets the connected API version.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_version()
        {
        }
        /**
         * Gets the connected API authentication type.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_authentication_type()
        {
        }
        /**
         * Gets the connected API username.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_user_name()
        {
        }
        /**
         * Gets the connected API user ID.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_user_id()
        {
        }
        /**
         * Gets the connected API account ID.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_account_id()
        {
        }
    }
    /**
     * The AvaTax API Entity/Use code response class.
     *
     * @since 1.6.2
     */
    class WC_AvaTax_API_Entity_Use_Code_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Gets the enabled subscriptions.
         *
         * @since 1.6.2
         *
         * @return array
         */
        public function get_codes()
        {
        }
    }
    /**
     * The AvaTax API address response class.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_API_Address_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Get the normalized address data.
         *
         * @since 1.0.0
         * @return array The normalized address data.
         */
        public function get_normalized_address()
        {
        }
    }
    /**
     * The AvaTax API subscriptions response class.
     *
     * TODO: since 1.16.0 this class is no longer used, as there are no subscriptions to check. Consider removing {IT 2022-01-11}
     *
     * @since 1.5.0
     */
    class WC_AvaTax_API_Subscriptions_Response extends \WC_AvaTax_API_Response
    {
        /** Auto Address subscription name **/
        const TYPE_AUTO_ADDRESS = 'AutoAddress';
        /** AvaTax Standard subscription name **/
        const TYPE_AVATAX_ST = 'AvaTaxST';
        /** AvaTax Pro subscription name **/
        const TYPE_AVATAX_PRO = 'AvaTaxPro';
        /** AvaTax Global subscription name **/
        const TYPE_AVATAX_GLOBAL = 'AvaTaxGlobal';
        /** Landed Cost subscription name (used for cross-border duty calculations) **/
        const TYPE_LANDED_COST = 'AvaLandedCost';
        /**
         * Gets the enabled subscriptions.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_subscriptions() : array
        {
        }
        /**
         * Determines if the account has the Landed Cost subscription.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function has_landed_cost() : bool
        {
        }
        /**
         * Determines if the account is eligible to sync HS codes through the Cross Border API.
         *
         * @since 1.13.0
         *
         * @deprecated 1.16.0 - this method was erroneously used to check for the Item Classification API subscription
         *
         * @return bool
         */
        public function has_cross_border() : bool
        {
        }
        /**
         * Determines if the account has the given subscription type.
         *
         * @since 1.5.0
         *
         * @param string $type subscription type
         * @return bool
         */
        public function has_subscription(string $type) : bool
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Responses {
    /**
     * The AvaTax API HS Classification response class.
     *
     * @since 1.13.0
     */
    abstract class Abstract_HS_Classification_Response extends \WC_AvaTax_API_Response
    {
        /** @var string pending classification status */
        const CLASSIFICATION_STATUS_PENDING = 'pending';
        /** @var string classified classification status */
        const CLASSIFICATION_STATUS_CLASSIFIED = 'classified';
        /** @var string classification unavailable */
        const CLASSIFICATION_STATUS_UNAVAILABLE = 'cannot_be_classified';
        /**
         * Gets the HS classification ID, if available.
         *
         * @since 1.13.0
         *
         * @return string|null
         */
        public function get_hs_classification_id()
        {
        }
        /**
         * Gets the country of destination, if available.
         *
         * @since 1.13.0
         *
         * @return string|null
         */
        public function get_country_of_destination()
        {
        }
        /**
         * Gets the HS code, depending on classification status.
         *
         * @since 1.13.0
         *
         * @return string|null
         */
        public function get_hs_code()
        {
        }
        /**
         * Gets the classification status.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_status() : string
        {
        }
        /**
         * Determines whether the classification is pending.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function is_pending() : bool
        {
        }
        /**
         * Determines whether the classification is done.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function is_classified() : bool
        {
        }
        /**
         * Determines whether the classification cannot be performed.
         *
         * @since 1.13.0
         *
         * @return bool
         */
        public function cannot_be_classified() : bool
        {
        }
        /**
         * Gets the detailed description of why the item cannot be classified.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_resolution() : string
        {
        }
    }
    /**
     * The UPDATE HS classification API response.
     *
     * @since 1.13.0
     */
    class HS_Classification_Update_Response extends \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response
    {
    }
}
namespace {
    /**
     * The AvaTax API tax response class.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_API_Tax_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Gets any cart item lines.
         *
         * This only returns products and no fees or shipping.
         *
         * @since 1.5.1
         *
         * @return array
         */
        public function get_cart_lines() : array
        {
        }
        /**
         * Gets any fee lines.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_fee_lines() : array
        {
        }
        /**
         * Gets any shipping lines.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_shipping_lines() : array
        {
        }
        /**
         * Get the calculated line items.
         *
         * @since 1.0.0
         * @return array The calculated line items
         */
        public function get_lines() : array
        {
        }
        /**
         * Get the origin address.
         *
         * @since 1.0.0
         * @return array The origin address
         */
        public function get_origin_address($line = \null) : array
        {
        }
        /**
         * Get the destination address.
         *
         * @since 1.1.0
         * @return array The destination address
         */
        public function get_destination_address($line = \null) : array
        {
        }
        /**
         * Get the transaction addresses.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_addresses() : array
        {
        }
        /**
         * Get the total tax amount.
         *
         * @since 1.0.0
         * @return float The total tax calculated.
         */
        public function get_total_tax() : float
        {
        }
        /**
         * Determines if the line amounts included tax.
         *
         * @since 1.5.0
         *
         * @return bool
         */
        public function is_tax_included() : bool
        {
        }
        /**
         * Get the effective tax date.
         *
         * @since 1.0.0
         * @return string The effective tax date in YYYY-MM-DD format.
         */
        public function get_tax_date() : string
        {
        }
        /**
         * Gets all rates used to calculate tax for the transaction, for display purposes.
         *
         * Should not use the `summary` element of the response because it groups the rates differently,
         * leading to missing codes when we customize the labels later.
         *
         * @see WC_AvaTax_Checkout_Handler::set_rate_labels()
         *
         * @since 1.5.0
         *
         * @return \WC_AvaTax_API_Tax_Rate[][] $rates rate objects per line
         */
        public function get_rates() : array
        {
        }
        /**
         * Gets an array of tax rates codes that are duplicate in at least one line.
         *
         * @since 1.12.0
         *
         * @param array $lines tax lines data
         *
         * @return array
         */
        protected function get_duplicate_tax_rate_codes($lines) : array
        {
        }
        /**
         * Builds the array of rate objects based on the response data.
         *
         * @since 1.5.0
         *
         * @param array $raw_rates rate data from the AvaTax API
         * @param array $duplicate_tax_rate_codes array of codes that appear more than once on a single line
         *
         * @return array $rates \WC_AvaTax_API_Tax_Rate rate objects
         */
        protected function build_rates($raw_rates, $duplicate_tax_rate_codes) : array
        {
        }
        /**
         * Gets the calculation response messages.
         *
         * These can be general tax calculation result messages (which we don't
         * always need) or Landed Cost notes, like the duty to be paid when the
         * customer is importer of record.
         *
         * @since 1.5.0
         *
         * @return array
         */
        public function get_messages() : array
        {
        }
        /**
         * Consolidates all landed cost rates into a single rate.
         *
         * @since 1.10.0
         *
         * @param WC_AvaTax_API_Tax_Rate[] $landed_costs_rates landed costs rates
         * @return WC_AvaTax_API_Tax_Rate|null
         */
        protected function consolidate_landed_cost_rates($landed_costs_rates)
        {
        }
        /**
         * Checks whether the rates include at least one landed cost.
         *
         * @since 1.10.0
         *
         * @return bool
         */
        public function has_landed_costs() : bool
        {
        }
        /**
         * Gets the name for a tax rate.
         *
         * Avalara tax rates do not seem to follow a uniform naming convention. In order to determine a human-friendly tax
         * rate name, it seems to make sense to combine the jurisdiction type and tax type for US-based taxes, and just use
         * the raw tax name for any other countries.
         *
         * @since 1.16.0
         *
         * @param stdClass $rate the tax rate object from the response
         * @return string
         */
        protected function get_tax_rate_name(\stdClass $rate) : string
        {
        }
        /**
         * Truncates the tax rate name to full words between 30 and 35 characters.
         *
         * @since 1.16.0
         *
         * @param string $name raw tax rate name
         * @return string
         */
        protected function truncate_tax_rate_name(string $name) : string
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Responses {
    /**
     * The AvaTax API companies response class.
     *
     * @since 1.13.0
     */
    class Companies_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Gets the company ID from the companies' response body.
         *
         * @since 1.13.0
         *
         * @param string $company_code
         * @return string|null
         */
        public function get_company_id(string $company_code = '')
        {
        }
    }
    /**
     * The product classification systems by company response class.
     *
     * @since 1.16.0
     */
    class Product_Classification_Systems_List_By_Company_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Gets all the current supported product classification systems.
         *
         * This excludes any historical systems.
         *
         * @since 1.16.0
         *
         * @return array
         *
         * @throws Exception
         */
        public function get_current_system_list() : array
        {
        }
        /**
         * Determines whether the country should be returned or not based on the system end date.
         *
         * @since 1.16.5
         *
         * @param $entry
         *
         * @return bool
         *
         * @throws Exception
         */
        protected function should_return_country($entry) : bool
        {
        }
    }
    /**
     * The GET HS classification API response.
     *
     * @since 1.13.0
     */
    class HS_Classification_Get_Response extends \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response
    {
    }
    /**
     * The CREATE HS classification API response.
     *
     * @since 1.13.0
     */
    class HS_Classification_Create_Response extends \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response
    {
    }
}
namespace {
    /**
     * The AvaTax API rate response class.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_API_Rate_Response extends \WC_AvaTax_API_Response
    {
        /**
         * Gets the total estimated tax rate.
         *
         * @since 1.5.0
         *
         * @return float
         */
        public function get_total_rate()
        {
        }
        /**
         * Gets the individual estimated tax rates.
         *
         * @since 1.5.0
         *
         * @return \WC_AvaTax_API_Tax_Rate[]
         */
        public function get_rates()
        {
        }
        /**
         * Modifies the given array of tax rates to ensure each entry gets a unique index.
         *
         * If two tax rates use EXAMPLE as their code, the rates will be added to the resulting
         * array using EXAMPLE-1 and EXAMPLE-2 as the index.
         *
         * @since 1.12.0
         *
         * @param WC_AvaTax_API_Tax_Rate[] $rates original list of rates
         *
         * @return array
         */
        protected function ensure_unique_tax_rate_indexes($rates)
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * # WooCommerce Plugin Framework API Base Class
     *
     * This class provides a standardized framework for constructing an API wrapper
     * to external services. It is designed to be extremely flexible.
     *
     * @version 2.2.0
     */
    abstract class SV_WC_API_Base
    {
        /** @var string request method, defaults to POST */
        protected $request_method = 'POST';
        /** @var string URI used for the request */
        protected $request_uri;
        /** @var array request headers */
        protected $request_headers = array();
        /** @var string request user-agent */
        protected $request_user_agent;
        /** @var string request HTTP version, defaults to 1.0 */
        protected $request_http_version = '1.0';
        /** @var string request duration */
        protected $request_duration;
        /** @var SV_WC_API_Request|object request */
        protected $request;
        /** @var string response code */
        protected $response_code;
        /** @var string response message */
        protected $response_message;
        /** @var array response headers */
        protected $response_headers;
        /** @var string raw response body */
        protected $raw_response_body;
        /** @var string response handler class name */
        protected $response_handler;
        /** @var SV_WC_API_Response|object response */
        protected $response;
        /**
         * Perform the request and return the parsed response
         *
         * @since 2.2.0
         *
         * @param SV_WC_API_Request|object $request class instance which implements SV_WC_API_Request
         * @return SV_WC_API_Response|object class instance which implements SV_WC_API_Response
         * @throws SV_WC_API_Exception may be thrown in implementations
         */
        protected function perform_request($request)
        {
        }
        /**
         * Simple wrapper for wp_remote_request() so child classes can override this
         * and provide their own transport mechanism if needed, e.g. a custom
         * cURL implementation
         *
         * @since 2.2.0
         *
         * @param string $request_uri
         * @param string $request_args
         * @return array|\WP_Error
         */
        protected function do_remote_request($request_uri, $request_args)
        {
        }
        /**
         * Handle and parse the response
         *
         * @since 2.2.0
         * @param array|\WP_Error $response response data
         * @throws SV_WC_API_Exception network issues, timeouts, API errors, etc
         * @return SV_WC_API_Request|object request class instance that implements SV_WC_API_Request
         */
        protected function handle_response($response)
        {
        }
        /**
         * Allow child classes to validate a response prior to instantiating the
         * response object. Useful for checking response codes or messages, e.g.
         * throw an exception if the response code is not 200.
         *
         * A child class implementing this method should simply return true if the response
         * processing should continue, or throw a \SV_WC_API_Exception with a
         * relevant error message & code to stop processing.
         *
         * Note: Child classes *must* sanitize the raw response body before throwing
         * an exception, as it will be included in the broadcast_request() method
         * which is typically used to log requests.
         *
         * @since 2.2.0
         */
        protected function do_pre_parse_response_validation()
        {
        }
        /**
         * Allow child classes to validate a response after it has been parsed
         * and instantiated. This is useful for check error codes or messages that
         * exist in the parsed response.
         *
         * A child class implementing this method should simply return true if the response
         * processing should continue, or throw a \SV_WC_API_Exception with a
         * relevant error message & code to stop processing.
         *
         * Note: Response body sanitization is handled automatically
         *
         * @since 2.2.0
         */
        protected function do_post_parse_response_validation()
        {
        }
        /**
         * Return the parsed response object for the request
         *
         * @since 2.2.0
         * @param string $raw_response_body
         * @return object|SV_WC_API_Request response class instance which implements SV_WC_API_Request
         */
        protected function get_parsed_response($raw_response_body)
        {
        }
        /**
         * Alert other actors that a request has been performed. This is primarily used
         * for request logging.
         *
         * @since 2.2.0
         */
        protected function broadcast_request()
        {
        }
        /**
         * Reset the API response members to their
         *
         * @since 1.0.0
         */
        protected function reset_response()
        {
        }
        /** Request Getters *******************************************************/
        /**
         * Get the request URI
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_uri()
        {
        }
        /**
         * Gets the request path.
         *
         * @since 4.5.0
         * @return string
         */
        protected function get_request_path()
        {
        }
        /**
         * Gets the request URL query.
         *
         * @since 4.5.0
         *
         * @return string
         */
        protected function get_request_query()
        {
        }
        /**
         * Get the request arguments in the format required by wp_remote_request()
         *
         * @since 2.2.0
         *
         * @return array
         */
        protected function get_request_args()
        {
        }
        /**
         * Get the request method, POST by default
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_method()
        {
        }
        /**
         * Gets the request body.
         *
         * @since 4.5.0
         * @return string
         */
        protected function get_request_body()
        {
        }
        /**
         * Gets the sanitized request body, for logging.
         *
         * @since 4.5.0
         * @return string
         */
        protected function get_sanitized_request_body()
        {
        }
        /**
         * Get the request HTTP version, 1.1 by default
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_http_version()
        {
        }
        /**
         * Get the request headers
         *
         * @since 2.2.0
         * @return array
         */
        protected function get_request_headers()
        {
        }
        /**
         * Get sanitized request headers suitable for logging, stripped of any
         * confidential information
         *
         * The `Authorization` header is sanitized automatically.
         *
         * Child classes that implement any custom authorization headers should
         * override this method to perform sanitization.
         *
         * @since 2.2.0
         * @return array
         */
        protected function get_sanitized_request_headers()
        {
        }
        /**
         * Get the request user agent, defaults to:
         *
         * Dasherized-Plugin-Name/Plugin-Version (WooCommerce/WC-Version; WordPress/WP-Version)
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_user_agent()
        {
        }
        /**
         * Get the request duration in seconds, rounded to the 5th decimal place
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_request_duration()
        {
        }
        /**
         * Gets the request data for broadcasting the request.
         *
         * Overriding this method allows child classes to customize the request data when broadcasting the request.
         *
         * @since 5.10.10
         *
         * @return array
         */
        protected function get_request_data_for_broadcast() : array
        {
        }
        /** Response Getters ******************************************************/
        /**
         * Get the response handler class name
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_response_handler()
        {
        }
        /**
         * Get the response code
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_response_code()
        {
        }
        /**
         * Get the response message
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_response_message()
        {
        }
        /**
         * Get the response headers
         *
         * @since 2.2.0
         * @return array
         */
        protected function get_response_headers()
        {
        }
        /**
         * Get the raw response body, prior to any parsing or sanitization
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_raw_response_body()
        {
        }
        /**
         * Get the sanitized response body, provided by the response class
         * to_string_safe() method
         *
         * @since 2.2.0
         * @return string|null
         */
        protected function get_sanitized_response_body()
        {
        }
        /**
         * Gets the response data for broadcasting the request.
         *
         * Overriding this method allows child classes to customize the response data when broadcasting the request.
         *
         * @since 5.10.10
         *
         * @return array
         * @return array
         */
        protected function get_response_data_for_broadcast() : array
        {
        }
        /** Misc Getters ******************************************************/
        /**
         * Returns the most recent request object.
         *
         * @since 2.2.0
         *
         * @return SV_WC_API_Request|object the most recent request object
         */
        public function get_request()
        {
        }
        /**
         * Returns the most recent response object.
         *
         * @since 2.2.0
         *
         * @return SV_WC_API_Response|object the most recent response object
         */
        public function get_response()
        {
        }
        /**
         * Get the ID for the API, used primarily to namespace the action name
         * for broadcasting requests
         *
         * @since 2.2.0
         * @return string
         */
        protected function get_api_id()
        {
        }
        /**
         * Return a new request object
         *
         * Child classes must implement this to return an object that implements
         * \SV_WC_API_Request which should be used in the child class API methods
         * to build the request. The returned SV_WC_API_Request should be passed
         * to self::perform_request() by your concrete API methods
         *
         * @since 2.2.0
         *
         * @param array $args optional request arguments
         * @return SV_WC_API_Request|object
         */
        protected abstract function get_new_request($args = array());
        /**
         * Return the plugin class instance associated with this API
         *
         * Child classes must implement this to return their plugin class instance
         *
         * This is used for defining the plugin ID used in filter names, as well
         * as the plugin name used for the default user agent.
         *
         * @since 2.2.0
         *
         * @return SV_WC_Plugin
         */
        protected abstract function get_plugin();
        /** Setters ***************************************************************/
        /**
         * Set a request header
         *
         * @since 2.2.0
         * @param string $name header name
         * @param string $value header value
         * @return string
         */
        protected function set_request_header($name, $value)
        {
        }
        /**
         * Set multiple request headers at once
         *
         * @since 4.3.0
         * @param array $headers
         */
        protected function set_request_headers(array $headers)
        {
        }
        /**
         * Set HTTP basic auth for the request
         *
         * Since 2.2.0
         * @param string $username
         * @param string $password
         */
        protected function set_http_basic_auth($username, $password)
        {
        }
        /**
         * Set the Content-Type request header
         *
         * @since 2.2.0
         * @param string $content_type
         */
        protected function set_request_content_type_header($content_type)
        {
        }
        /**
         * Set the Accept request header
         *
         * @since 2.2.0
         * @param string $type the request accept type
         */
        protected function set_request_accept_header($type)
        {
        }
        /**
         * Set the response handler class name. This class will be instantiated
         * to parse the response for the request.
         *
         * Note the class should implement SV_WC_API
         *
         * @since 2.2.0
         *
         * @param string $handler handle class name
         */
        protected function set_response_handler($handler)
        {
        }
        /**
         * Maybe force TLS v1.2 requests.
         *
         * @since 4.4.0
         *
         * @param resource $handle the cURL handle returned by curl_init() (passed by reference)
         * @param array $r the HTTP request arguments
         * @param $url string the request URL
         */
        public function set_tls_1_2_request($handle, $r, $url)
        {
        }
        /**
         * Determines if TLS v1.2 is required for API requests.
         *
         * @since 4.4.0
         * @deprecated 5.5.2
         *
         * @return bool
         */
        public function require_tls_1_2()
        {
        }
        /**
         * Determines if TLS 1.2 is available.
         *
         * @since 4.6.5
         *
         * @return bool
         */
        public function is_tls_1_2_available()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\API {
    /**
     * Abstract API base class with caching support.
     *
     * Plugins which need to use API request caching should use extend this API base class rather than SV_WC_API_Base.
     * In addition, each request class which needs caching, should use the Cacheable_Request_Trait.
     *
     * @since 5.10.10
     */
    abstract class Abstract_Cacheable_API_Base extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_API_Base
    {
        /** @var bool whether the response was loaded from cache */
        protected $response_loaded_from_cache = false;
        /**
         * Simple wrapper for wp_remote_request() so child classes can override this
         * and provide their own transport mechanism if needed, e.g. a custom
         * cURL implementation
         *
         * @since 5.10.10
         *
         * @param string $request_uri
         * @param string $request_args
         * @return array|\WP_Error
         */
        protected function do_remote_request($request_uri, $request_args)
        {
        }
        /**
         * Handle and parse the response
         *
         * @since 5.10.10
         *
         * @param array|\WP_Error $response response data
         * @throws SV_WC_API_Exception network issues, timeouts, API errors, etc
         * @return SV_WC_API_Request|object request class instance that implements SV_WC_API_Request
         */
        protected function handle_response($response)
        {
        }
        /**
         * Resets the API response members to their default values.
         *
         * @since 5.10.10
         */
        protected function reset_response()
        {
        }
        /**
         * Gets the request transient key for the current plugin and request data.
         *
         * Request transients can be disabled by using the filter below.
         *
         * @since 5.10.10
         *
         * @return string transient key
         */
        protected function get_request_transient_key() : string
        {
        }
        /**
         * Checks whether the current request is cacheable.
         *
         * @since 5.10.10
         *
         * @return bool
         */
        protected function is_request_cacheable() : bool
        {
        }
        /**
         * Gets the cache lifetime for the current request.
         *
         * @since 5.10.10
         *
         * @return int
         */
        protected function get_request_cache_lifetime() : int
        {
        }
        /**
         * Determine whether the response was loaded from cache or not.
         *
         * @since 5.10.10
         *
         * @return bool
         */
        protected function is_response_loaded_from_cache() : bool
        {
        }
        /**
         * Loads the response for the current request from the cache, if available.
         *
         * @since 5.10.10
         *
         * @return array|null
         */
        protected function load_response_from_cache()
        {
        }
        /**
         * Saves the response to cache.
         *
         * @since 5.10.10
         *
         * @param array $response
         */
        protected function save_response_to_cache(array $response)
        {
        }
        /**
         * Gets the response data for broadcasting the request.
         *
         * Adds a flag to the response data indicating whether the response was loaded from cache.
         *
         * @since 5.10.10
         *
         * @return array
         */
        protected function get_request_data_for_broadcast() : array
        {
        }
        /**
         * Gets the response data for broadcasting the request.
         *
         * Adds a flag to the response data indicating whether the response was loaded from cache.
         *
         * @since 5.10.10
         *
         * @return array
         */
        protected function get_response_data_for_broadcast() : array
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\Api {
    /**
     * The AvaTax abstract API.
     *
     * @since 1.13.0
     */
    abstract class WC_AvaTax_Abstract_API extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\API\Abstract_Cacheable_API_Base
    {
        /** AvaTax API version */
        const VERSION = 'v2';
        /** WC integration ID, sent with every API request */
        const INTEGRATION_ID = 'a0o33000004goTr';
        /**
         * Construct the API.
         *
         * @since 1.13.0
         */
        public function __construct()
        {
        }
        /**
         * Return the plugin class instance associated with this API.
         *
         * @since 1.13.0
         * @return WC_AvaTax
         */
        protected function get_plugin()
        {
        }
    }
    /**
     * The AvaTax HS Classification API.
     *
     * @since 1.13.0
     */
    class WC_AvaTax_HS_API extends \SkyVerge\WooCommerce\AvaTax\Api\WC_AvaTax_Abstract_API
    {
        /** @var string Avalara account username */
        protected $username;
        /** @var string Avalara account password */
        protected $password;
        /**
         * Construct the API.
         *
         * @since 1.13.0
         *
         * @param string $username Avalara username
         * @param string $password Avalara password
         * @param string $environment The current API environment, either `production` or `development`.
         */
        public function __construct(string $username, string $password, string $environment)
        {
        }
        /**
         * Builds and returns a new API request object
         *
         * @see Framework\SV_WC_API_Base::get_new_request()
         *
         * @since 1.13.0
         *
         * @param string $type the desired request type
         * @param mixed $args optional argument(s) to be passed to the request
         * @return Abstract_HS_Classification_Request
         * @throws Framework\SV_WC_API_Exception for invalid request types
         */
        protected function get_new_request($type = '', $args = null) : \SkyVerge\WooCommerce\AvaTax\API\Requests\Abstract_HS_Classification_Request
        {
        }
        /**
         * Gets an HS classification request.
         *
         * @since 1.13.0
         *
         * @param HS_Classification_Model $classification
         * @param string $type
         * @return HS_Classification_Create_Response|HS_Classification_Get_Response|HS_Classification_Update_Response
         * @throws Framework\SV_WC_API_Exception
         */
        private function get_hs_classification_request(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification, string $type) : \SkyVerge\WooCommerce\AvaTax\API\Responses\Abstract_HS_Classification_Response
        {
        }
        /**
         * Creates or updates an HS Classification.
         *
         * @since 1.13.0
         *
         * @param HS_Classification_Model $classification
         * @return HS_Classification_Create_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function create_hs_classification(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification) : \SkyVerge\WooCommerce\AvaTax\API\Responses\HS_Classification_Create_Response
        {
        }
        /**
         * Gets an HS Classification.
         *
         * @since 1.13.0
         *
         * @param HS_Classification_Model $classification
         * @return HS_Classification_Get_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function get_hs_classification(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification) : \SkyVerge\WooCommerce\AvaTax\API\Responses\HS_Classification_Get_Response
        {
        }
        /**
         * Updates an HS Classification.
         *
         * @since 1.13.0
         * @deprecated 1.16.0
         *
         * @param HS_Classification_Model $classification
         * @return HS_Classification_Update_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function update_hs_classification(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification) : \SkyVerge\WooCommerce\AvaTax\API\Responses\HS_Classification_Update_Response
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * API Request
     */
    interface SV_WC_API_Request
    {
        /**
         * Returns the method for this request: one of HEAD, GET, PUT, PATCH, POST, DELETE
         *
         * @since 4.0.0
         * @return string the request method, or null to use the API default
         */
        public function get_method();
        /**
         * Returns the request path
         *
         * @since 4.0.0
         * @return string the request path, or '' if none
         */
        public function get_path();
        /**
         * Gets the request query params.
         *
         * @since 5.0.0
         *
         * @return array
         */
        public function get_params();
        /**
         * Gets the request data.
         *
         * @since 5.0.0
         *
         * @return array
         */
        public function get_data();
        /**
         * Returns the string representation of this request
         *
         * @since 2.2.0
         * @return string the request
         */
        public function to_string();
        /**
         * Returns the string representation of this request with any and all
         * sensitive elements masked or removed
         *
         * @since 2.2.0
         * @return string the request, safe for logging/displaying
         */
        public function to_string_safe();
    }
    /**
     * Base JSON API request class.
     *
     * @since 4.3.0
     */
    abstract class SV_WC_API_JSON_Request implements \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_API_Request
    {
        /** @var string The request method, one of HEAD, GET, PUT, PATCH, POST, DELETE */
        protected $method;
        /** @var string The request path */
        protected $path;
        /** @var array The request parameters, if any */
        protected $params = array();
        /** @var array the request data */
        protected $data = array();
        /**
         * Get the request method.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::get_method()
         * @return string
         */
        public function get_method()
        {
        }
        /**
         * Get the request path.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::get_path()
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get the request parameters.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::get_params()
         * @return array
         */
        public function get_params()
        {
        }
        /**
         * Get the request data.
         *
         * @since 4.5.0
         * @return array
         */
        public function get_data()
        {
        }
        /** API Helper Methods ******************************************************/
        /**
         * Get the string representation of this request.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::to_string()
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Get the string representation of this request with any and all sensitive elements masked
         * or removed.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::to_string_safe()
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
}
namespace {
    /**
     * The base AvaTax API request class.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_API_Request extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_API_JSON_Request
    {
        /**
         * Prepare an address for the AvaTax API.
         *
         * Instead of keeping the input array keys 1-to-1 with the AvaTax API param
         * keys, we map them to WooCommerce's standard address keys to make things
         * easier on the WooCommerce side and avoid extra changes if the AvaTax API
         * changes.
         *
         * @since 1.0.0
         *
         * @param array $address address data
         *
         * @return array prepared address
         */
        protected function prepare_address($address)
        {
        }
    }
    /**
     * The AvaTax API company request class.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_API_Company_Request extends \WC_AvaTax_API_Request
    {
        /** @var string Avalara company code */
        protected $company_code;
        /**
         * Constructs the class.
         *
         * @since 1.5.0
         *
         * @param string $company_code company code
         */
        public function __construct($company_code)
        {
        }
        /**
         * Gets the company code for this request.
         *
         * @since 1.5.0
         *
         * @return string company code
         */
        public function get_company_code()
        {
        }
    }
    /**
     * The AvaTax API void request class.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_API_Void_Request extends \WC_AvaTax_API_Company_Request
    {
        /**
         * Voids a transaction in Avalara based on a WooCommerce order.
         *
         * @since 1.5.0
         *
         * @param int $order_id WoCommerce order ID
         * @throws Framework\SV_WC_API_Exception for an invalid order key
         */
        public function void_order($order_id)
        {
        }
        /**
         * Voids a transaction in Avalara based on a WooCommerce refund.
         *
         * @since 1.5.0
         *
         * @param \WC_Order_Refund $refund order refund object
         * @throws Framework\SV_WC_API_Exception for an invalid order key
         */
        public function void_refund(\WC_Order_Refund $refund)
        {
        }
        /**
         * Void sa transaction in Avalara.
         *
         * @since 1.5.0
         *
         * @param string $code transaction code
         */
        public function void_transaction($code)
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Requests {
    /**
     * The AvaTax HS Classification API request class.
     *
     * @since 1.13.0
     */
    abstract class Abstract_HS_Classification_Request extends \WC_AvaTax_API_Request
    {
        /** @var HS_Classification_Model */
        protected $classification;
        /**
         * Initializes the request params.
         *
         * @since 1.13.0
         *
         * @param HS_Classification_Model $classification
         */
        public function __construct(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification)
        {
        }
        /**
         * Gets the classification for the request.
         *
         * @since 1.13.0
         *
         * @return HS_Classification_Model
         */
        protected function get_classification() : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Builds params from a classification model.
         *
         * @since 1.13.0
         *
         * @return array
         */
        protected function get_classification_params() : array
        {
        }
    }
    /**
     * The CREATE HS classification API request.
     *
     * @since 1.13.0
     */
    class HS_Classification_Create_Request extends \SkyVerge\WooCommerce\AvaTax\API\Requests\Abstract_HS_Classification_Request
    {
        /**
         * Initializes the request to create a HS classification.
         *
         * @since 1.13.0
         *
         * @param HS_Classification_Model $classification
         */
        public function __construct(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification)
        {
        }
    }
    /**
     * The Query Items Request
     *
     * @see https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Items/QueryItems/
     *
     * Note: this class does not currently support pagination params other than limit ($top), as they're not needed for
     * our planned use-cases.
     *
     * TODO: consider extracting the pagination and filtering methods to a trait if adding other similar request {IT 2021-12-22}
     *
     * @since 1.16.0
     */
    class Query_Items_Request extends \WC_AvaTax_API_Request
    {
        /**
         * Query items request constructor.
         *
         * @since 1.16.0
         */
        public function __construct()
        {
        }
        /**
         * Set the request's filter parameter.
         *
         * @since 1.16.0
         *
         * @param string $filter
         * @return $this
         */
        public function filter(string $filter) : \SkyVerge\WooCommerce\AvaTax\API\Requests\Query_Items_Request
        {
        }
        /**
         * Set the request's include parameter.
         *
         * @since 1.16.0
         *
         * @param string|array $include a list of params to include in the response
         * @return $this
         */
        public function include($include) : \SkyVerge\WooCommerce\AvaTax\API\Requests\Query_Items_Request
        {
        }
        /**
         * Set the request's top (limit) parameter.
         *
         * @since 1.16.0
         *
         * @param int $limit the number of items to include in a single page
         * @return $this
         */
        public function limit(int $limit) : \SkyVerge\WooCommerce\AvaTax\API\Requests\Query_Items_Request
        {
        }
    }
}
namespace {
    /**
     * The AvaTax REST API utility request class.
     *
     * This is used when testing connectivity, etc...
     *
     * @since 1.5.0
     */
    class WC_Avatax_API_Utility_Request extends \WC_AvaTax_API_Request
    {
        /**
         * Sets the data for an API ping.
         *
         * @since 1.5.0
         */
        public function set_ping_data()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Requests {
    /**
     * The UPDATE HS classification API request.
     *
     * @since 1.13.0
     */
    class HS_Classification_Update_Request extends \SkyVerge\WooCommerce\AvaTax\API\Requests\Abstract_HS_Classification_Request
    {
        /**
         * Initializes the request to update the HS classification of an item.
         *
         * @since 1.13.0
         *
         * @param HS_Classification_Model $classification
         */
        public function __construct(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification)
        {
        }
    }
    /**
     * The product classification systems by company request class.
     *
     * @see https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Definitions/ListProductClassificationSystemsByCompany/
     *
     * @since 1.16.0
     */
    class Product_Classification_Systems_List_By_Company_Request extends \WC_AvaTax_API_Request
    {
        /**
         * Product classification systems list by company request constructor
         *
         * @since 1.16.0
         *
         * @param string $company_code company code for this request
         */
        public function __construct(string $company_code)
        {
        }
    }
}
namespace {
    /**
     * The AvaTax REST API subscriptions request class.
     *
     * This is used when testing for required account subscriptions, like Landed Cost.
     *
     * TODO: since 1.16.0 this class is no longer used, as there are no subscriptions to check. Consider removing {IT 2022-01-11}
     *
     * @since 1.5.0
     */
    class WC_Avatax_API_Subscriptions_Request extends \WC_AvaTax_API_Request
    {
        /**
         * Constructs the class.
         *
         * @since 1.5.0
         */
        public function __construct($account_id)
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Requests {
    /**
     * The Nexus list request.
     *
     * @since 1.13.0
     */
    class Nexus_List_Request extends \WC_AvaTax_API_Request
    {
        /**
         * Nexus list request constructor.
         *
         * @since 1.13.0
         */
        public function __construct()
        {
        }
    }
}
namespace {
    /**
     * The AvaTax REST API Entity/Use code request class.
     *
     * This is used to retrieve the available codes for per-user tax exemption.
     *
     * @since 1.6.2
     */
    class WC_AvaTax_API_Entity_Use_Code_Request extends \WC_AvaTax_API_Request
    {
        /**
         * Constructs the class.
         *
         * @since 1.6.2
         */
        public function __construct()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\API\Traits {
    /**
     * This trait can be used to add response caching support to API requests.
     *
     * It is intended to be used by a class implementing the SV_WC_API_Request interface. Caching itself is handled
     * by the Abstract_Cacheable_API_Base class, which the API handler should abstract in order to support caching.
     *
     * Adding `use Cacheable_Request_Trait;` to a request class will declare caching support for that request class.
     * It's also possible to customize the cache lifetime by setting it in the request constructor.
     */
    trait Cacheable_Request_Trait
    {
        /** @var int the cache lifetime for the request, in seconds, defaults to 86400 (24 hours) */
        protected $cache_lifetime = 86400;
        /** @var bool whether to force a fresh request regardless if a cached response is available */
        protected $force_refresh = false;
        /** @var bool whether to the current request should be cached or not */
        protected $should_cache = true;
        /**
         * Sets the cache lifetime for this request.
         *
         * @since 5.10.10
         *
         * @param int $lifetime cache lifetime, in seconds. Set to 0 for unlimited
         * @return self
         */
        public function set_cache_lifetime(int $lifetime)
        {
        }
        /**
         * Gets the cache lifetime for this request.
         *
         * @since 5.10.10
         *
         * @return int
         */
        public function get_cache_lifetime() : int
        {
        }
        /**
         * Sets whether a fresh request should be attempted, regardless if a cached response is available.
         *
         * @since 5.10.10
         *
         * @param bool $value whether to force a fresh request, or not
         * @return self
         */
        public function set_force_refresh(bool $value)
        {
        }
        /**
         * Determines whether a fresh request should be attempted.
         *
         * @since 5.10.10
         *
         * @return bool
         */
        public function should_refresh() : bool
        {
        }
        /**
         * Sets whether the request's response should be stored in cache.
         *
         * @since 5.10.10
         *
         * @param bool $value whether to cache the request, or not
         * @return self
         */
        public function set_should_cache(bool $value)
        {
        }
        /**
         * Determines whether the request's response should be stored in cache.
         *
         * @since 5.10.10
         *
         * @return bool
         */
        public function should_cache() : bool
        {
        }
        /**
         * Bypasses caching for this request completely.
         *
         * When called, sets the `force_refresh` flag to true and `should_cache` flag to false
         *
         * @since 5.10.10
         *
         * @return self
         */
        public function bypass_cache()
        {
        }
    }
}
namespace {
    /**
     * The API rate request class.
     *
     * @since 1.5.0
     */
    class WC_Avatax_API_Rate_Request extends \WC_AvaTax_API_Request
    {
        use \SkyVerge\WooCommerce\PluginFramework\v5_10_12\API\Traits\Cacheable_Request_Trait;
        /**
         * Sets the address query params.
         *
         * @see \WC_AvaTax_API_Request::prepare_address()
         *
         * @since 1.5.0
         *
         * @param array $address address data, in the standard WooCommerce format
         */
        public function set_address_data($address)
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Requests {
    /**
     * The AvaTax API companies request class.
     *
     * @since 1.13.0
     */
    class Companies_Request extends \WC_AvaTax_API_Request
    {
        /**
         * The Companies request constructor.
         *
         * @since 1.13.0
         */
        public function __construct()
        {
        }
    }
}
namespace {
    /**
     * The AvaTax API address request class.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_API_Address_Request extends \WC_AvaTax_API_Request
    {
        use \SkyVerge\WooCommerce\PluginFramework\v5_10_12\API\Traits\Cacheable_Request_Trait;
        /**
         * Validate an address.
         *
         * @since 1.0.0
         *
         * @param array $address The address details. @see `WC_AvaTax_API::validate_address()` for formatting.
         *
         * @return object The validated and normalized address.
         */
        public function validate_address($address)
        {
        }
    }
    /**
     * The AvaTax API tax request class.
     *
     * @since 1.5.0
     */
    class WC_AvaTax_API_Tax_Request extends \WC_AvaTax_API_Request
    {
        use \SkyVerge\WooCommerce\PluginFramework\v5_10_12\API\Traits\Cacheable_Request_Trait;
        use \SkyVerge\WooCommerce\AvaTax\Traits\Resolves_Product_Item_Code;
        /** @var string Avalara company code */
        protected $company_code;
        /**
         * Constructs the class.
         *
         * @since 1.0.0
         *
         * @param string $company_code company code for this request
         */
        public function __construct($company_code)
        {
        }
        /** Cart methods **********************************************************/
        /**
         * Calculate tax for a cart instance.
         *
         * @since 1.5.0
         * @param \WC_Cart $cart cart object
         */
        public function process_cart(\WC_Cart $cart)
        {
        }
        /**
         * Prepares cart contents for the AvaTax API.
         *
         * @since 1.5.0
         *
         * @param array $contents cart contents
         * @param array $origin_address origin address
         * @param array $destination_address destination address
         * @return array $lines request line items
         */
        protected function prepare_cart_contents($contents, $origin_address = array(), $destination_address = array())
        {
        }
        /**
         * Prepare a set of shipping packages for the AvaTax API.
         *
         * @since 1.5.0
         *
         * @param array $existing_lines existing transaction lines
         * @param array $packages shipping packages
         * @return array $lines line items
         */
        protected function prepare_cart_shipping_lines($existing_lines, $packages)
        {
        }
        /**
         * Determines if the cart contains only virtual items.
         *
         * @since 1.16.1
         *
         * @param array $cart_contents
         * @return bool
         */
        protected function cart_contains_virtual_items_only(array $cart_contents) : bool
        {
        }
        /** Order methods *********************************************************/
        /**
         * Get the calculated tax for a specific order.
         *
         * @since 1.0.0
         * @param \WC_Order $order order object
         * @param bool $commit Whether to commit the transaction to Avalara
         */
        public function process_order(\WC_Order $order, $commit)
        {
        }
        /**
         * Prepares all line items for an order.
         *
         * @since 1.5.0
         *
         * @param \WC_Abstract_Order $order order or refund object
         * @param array $origin_address origin address
         * @param array $destination_address destination address
         * @return array $lines request line items
         */
        protected function prepare_order_lines(\WC_Abstract_Order $order, array $origin_address = [], array $destination_address = []) : array
        {
        }
        /**
         * Prepares order items for the AvaTax API.
         *
         * @since 1.5.0
         *
         * @param \WC_Abstract_Order $order order or refund object
         * @param array $origin_address origin address
         * @param array $destination_address destination address
         * @return array $lines request line items
         */
        protected function prepare_order_products(\WC_Abstract_Order $order, array $origin_address = [], array $destination_address = []) : array
        {
        }
        /**
         * Prepares a single order product item for the AvaTax API.
         *
         * @since 1.15.0
         *
         * @param WC_Order_Item_Product $item the order item
         * @param bool $tax_included whether the item total includes tax or not
         * @param bool $override_tax whether the tax amount should be overridden instead of calculated
         * @param array $origin_address origin address
         * @param array $destination_address destination address
         * @return array line item data for the request
         */
        protected function prepare_order_product(\WC_Order_Item_Product $item, bool $tax_included = \false, bool $override_tax = \false, array $origin_address = [], array $destination_address = []) : array
        {
        }
        /**
         * Prepare the shipping item lines for an order or refund.
         *
         * @since 1.5.0
         *
         * @param array $existing_lines transaction lines
         * @param \WC_Abstract_Order $order order or refund object
         * @return array $lines transaction lines with shipping methods added
         */
        protected function prepare_order_shipping_lines(array $existing_lines, \WC_Abstract_Order $order) : array
        {
        }
        /**
         * Prepare a single shipping line for an order or refund.
         *
         * @since 1.15.0
         *
         * @param string|int $item_id the item id
         * @param WC_Order_Item_Shipping $method the shipping method item
         * @param bool $override_tax whether to override the tax amount
         * @return array
         */
        protected function prepare_order_shipping_line($item_id, \WC_Order_Item_Shipping $method, bool $override_tax = \false) : array
        {
        }
        /**
         * Determines if an order has a destination address.
         *
         * @since 1.5.0
         *
         * @param \WC_Abstract_Order $order order or refund object
         * @return bool
         */
        protected function order_has_destination(\WC_Abstract_Order $order) : bool
        {
        }
        /**
         * Determines if an order contains only virtual items.
         *
         * @since 1.16.1
         *
         * @param \WC_Order $order
         * @return bool
         */
        protected function order_contains_virtual_items_only(\WC_Order $order) : bool
        {
        }
        /** Refund methods ********************************************************/
        /**
         * Get the calculated tax for a refunded order.
         *
         * @since 1.0.0
         * @param \WC_Order_Refund $refund order refund object
         * @throws Framework\SV_WC_API_Exception
         * @return false|void
         */
        public function process_refund(\WC_Order_Refund $refund)
        {
        }
        /**
         * Prepares all line items for a refund.
         *
         * @since 1.5.0
         *
         * @see \WC_AvaTax_API_Tax_Request::prepare_order_lines()
         *
         * @param \WC_Order_Refund $refund the refund object
         * @param \WC_Order $order the order object
         * @param array $origin_address origin address
         * @param array $destination_address destination address
         * @return array $lines request line items
         */
        protected function prepare_refund_lines(\WC_Order_Refund $refund, \WC_Order $order, array $origin_address = [], array $destination_address = []) : array
        {
        }
        /**
         * Checks whether the refund lines have any tax overrides.
         *
         * @since 1.15.0
         *
         * @param array $lines prepared refund lines
         * @return bool
         */
        protected function refund_lines_have_tax_overrides(array $lines) : bool
        {
        }
        /**
         * Set the calculation request params.
         *
         * @since 1.0.0
         * @param array $args {
         *     The AvaTax API parameters.
         *
         *     @type int    $id           The unique transaction ID.
         *     @type string $order_number The order number for reference
         *     @type string $customer     The unique customer identifier.
         *     @type array  $addresses    The origin and destination addresses. @see `WC_AvaTax_API::prepare_address()` for formatting.
         *     @type array  $lines        The line items used for calculation. @see `WC_AvaTax_API::prepare_line()` for formatting.
         *     @type string $date         The document creation date. Format: YYYY-MM-DD. Default: the current date.
         *     @type string $tax_date     The effective tax date. Format: YYYY-MM-DD.
         *     @type string $type         The type of transaction requested of AvaTax. Accepts `checkout`, `payment`, or `refund`. Default: `checkout`.
         *     @type string $currency     The calculation currency code. Default: the shop currency code.
         *     @type string $vat          The customer's VAT ID.
         *     @type bool   $exemption    Whether the transaction has tax exemption.
         *     @type bool   $commit       Whether to commit this calculation as a finalized transaction. Default: `false`.
         * }
         */
        public function set_params($args)
        {
        }
        /** Product Helpers *******************************************************/
        /**
         * Prepares a list of products for the AvaTax API.
         *
         * @since 1.5.0
         *
         * @param array $items {
         *     Product items to prepare as lines.
         *
         *     @type \WC_Product $product     product object
         *     @type string      $tax_code    product tax code
         *     @type int         $quantity    line quantity
         *     @type float       $amount      extended line total
         *     @type array       $origin      origin address
         *     @type array       $destination destination address
         * }
         * @param array $packages list of WooCommerce packages, as generated by \WC_Shipping
         * @return array $lines API-formatted lines
         */
        protected function prepare_product_lines(array $items, array $packages = []) : array
        {
        }
        /**
         * Get a product's tax code with fallbacks.
         *
         * @since 1.0.0
         * @param WC_Product $product The product object.
         * @return string $tax_code The tax code.
         */
        protected function prepare_product_tax_code(\WC_Product $product)
        {
        }
        /**
         * Prepare a set of fees for the AvaTax API.
         *
         * @since 1.5.0
         *
         * @param array $existing_lines existing transaction lines
         * @param array $fees fee objects
         * @param bool $override_tax whether to override tax for fee lines
         * @return array $lines line items
         */
        protected function prepare_fee_lines(array $existing_lines, array $fees, bool $override_tax = \false) : array
        {
        }
        /**
         * Determines whether it should include a retail delivery fee in the AvaTax API request.
         *
         * @since 1.16.1
         *
         * @param array $request_data
         * @param array $request_args
         * @return bool
         */
        protected function should_include_retail_delivery_fee(array $request_data, array $request_args) : bool
        {
        }
        /**
         * Appends a retail delivery fee in the AvaTax API request.
         *
         * This is currently used only for the Colorado Retail Delivery Fee:
         * @link https://help.avalara.com/Frequently_Asked_Questions/AvaTax_FAQ/ACTION_NEEDED%3A_Colorado_Retail_Delivery_Fee_begins_July_1%2C_2022
         *
         * @since 1.16.1
         *
         * @param array $lines lines to append the fee to
         * @return array
         */
        protected function include_retail_delivery_fee(array $lines) : array
        {
        }
        /**
         * Normalizes the fee object.
         *
         * @since 1.15.0
         *
         * @param array|WC_Order_Item_Fee $fee fee item, either from order or cart
         * @param string|int $item_id item id, optional
         * @return stdClass
         */
        protected function get_normalized_fee_object($fee, $item_id = \null) : \stdClass
        {
        }
        /**
         * Prepares a fee line for the AvaTax API.
         *
         * @since 1.15.0
         *
         * @param stdClass $fee a normalized fee object
         * @param bool $override_tax whether to override the tax amount
         * @return array prepared fee line
         */
        protected function prepare_fee_line(\stdClass $fee, bool $override_tax = \false) : array
        {
        }
        /**
         * Gets a tax code for a fee.
         *
         * This is needed for manual orders that apply a Retail Delivery Fee:
         * @link https://help.avalara.com/Frequently_Asked_Questions/AvaTax_FAQ/ACTION_NEEDED%3A_Colorado_Retail_Delivery_Fee_begins_July_1%2C_2022
         *
         * @since 1.16.5
         *
         * @param stdClass $fee
         * @return string
         */
        protected function get_fee_tax_code(\stdClass $fee) : string
        {
        }
        /**
         * Prepare an order line item for the AvaTax API.
         *
         * @since 1.0.0
         *
         * @param array $item {
         *     The line item details.
         *
         *     @type string $number      unique line identifier
         *     @type string $itemCode    unique item identifier like the product SKU or ID
         *     @type string $taxCode     line tax code
         *     @type string $HTSCode     landed cost Harmonized Tarrif Code
         *     @type string $description item description or product title
         *     @type int    $quantity    line quantity
         *     @type float  $amount      extended total price
         * }
         * @return array $line The formatted line.
         */
        protected function prepare_line(array $item) : array
        {
        }
        /** Shipping Helper Methods ***********************************************/
        /**
         * Determines whether the session has a destination, or is local-pickup.
         *
         * @since 1.5.0
         *
         * @param array $shipping_methods a list of shipping method IDs
         * @return bool
         */
        protected function shipping_has_destination($shipping_methods)
        {
        }
        /** Address Helper Methods ************************************************/
        /**
         * Prepares a origin and destination address for the AvaTax API.
         *
         * This method converts a WooCommerce address to the correct key => value
         * format for the API, as well as changes the data to the 'singleLocation'
         * key if the addresses are the same, i.e. for local pickup.
         *
         * @since 1.5.0
         *
         * @param array $origin origin address
         * @param array $destination destination address
         * @return array API-formatted addresses
         */
        protected function prepare_address_data($origin, $destination)
        {
        }
        /**
         * Removes line-level addresses when they match the addresses set for the
         * entire transaction.
         *
         * @since 1.5.0
         *
         * @param array $data transaction data
         * @return array $data transaction data with duplicate addresses removed
         */
        protected function remove_duplicate_addresses($data)
        {
        }
        /**
         * Gets the company code for this request.
         *
         * @since 1.5.0
         *
         * @return string
         */
        protected function get_company_code()
        {
        }
        /**
         * Determine if new tax documents should be committed on calculation.
         *
         * @since 1.0.0
         * @return bool $commit Whether new tax documents should be committed on calculation.
         */
        protected function commit_calculations()
        {
        }
        /**
         * Checks whether the order is fully refunded or not.
         *
         * TODO: consider moving this and similar order-related helper methods below to a dedicated OrderHelper class {IT 2021-11-16}
         *
         * @since 1.15.0
         *
         * @param \WC_Order_Refund $refund
         * @param \WC_Order $order
         * @return bool
         */
        protected function is_full_refund_for_order(\WC_Order_Refund $refund, \WC_Order $order) : bool
        {
        }
        /**
         * Gets the destination address for the order.
         *
         * @since 1.15.0
         *
         * @param \WC_Abstract_Order $order the order
         * @param mixed $origin_address the origin address
         * @return mixed
         */
        protected function get_order_destination_address(\WC_Abstract_Order $order, $origin_address)
        {
        }
        /**
         * Gets the customer code for the given order.
         *
         * @since 1.15.0
         *
         * @param \WC_Order $order
         * @return string
         */
        protected function get_order_customer_code(\WC_order $order) : string
        {
        }
        /**
         * Determines whether the order (or the refund's parent order) has taxes included.
         *
         * @since 1.15.0
         *
         * @param WC_Abstract_Order $order
         * @return bool
         */
        protected function order_has_tax_included(\WC_Abstract_Order $order) : bool
        {
        }
        /**
         * Formats (maps) the given WooCommerce wight unit to an AvaTax weight unit.
         *
         * The list of unit definitions are hardcoded here based on the AvaTax REST API definitions.
         *
         * @see https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Definitions/ListUnitOfMeasurement/
         *
         * @since 1.16.0
         *
         * @param string $unit the WooCommerce weight unit
         * @return string the AvaTax weight unit, or an empty string if a match was not found
         */
        protected function format_weight_unit(string $unit = '') : string
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Requests {
    /**
     * The GET HS classification API request.
     *
     * @since 1.13.0
     */
    class HS_Classification_Get_Request extends \SkyVerge\WooCommerce\AvaTax\API\Requests\Abstract_HS_Classification_Request
    {
        /**
         * Initializes the request to get the HS classification of a given item.
         *
         * @since 1.13.0
         *
         * @param HS_Classification_Model $classification
         */
        public function __construct(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model $classification)
        {
        }
    }
}
namespace SkyVerge\WooCommerce\AvaTax\API\Models {
    /**
     * An object representation of a classification model to be used by the Avalara API.
     *
     * @since 1.13.0
     */
    class HS_Classification_Model
    {
        /** @var string unique ID generated by Avalara classification system */
        protected $id;
        /** @var HS_Item_Model product details */
        protected $item;
        /** @var string required classification activity for a request */
        protected $activity;
        /** @var string country of destination code */
        protected $country_of_destination;
        /** @var string HS classification result */
        protected $hs_code;
        /** @var string requested HS code status */
        protected $status;
        /** @var string contains a detailed description of an issue found */
        protected $resolution;
        /** @var string rating for classification purposes when the information provided is insufficient */
        protected $confidence;
        /** @var string detailed description of the confidence rating above, when applicable */
        protected $confidence_description;
        /**
         * Gets the classification identifier.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_id() : string
        {
        }
        /**
         * Sets an id for the classification.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_id(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the item.
         *
         * @since 1.13.0
         *
         * @return HS_Item_Model
         */
        public function get_item() : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Sets the item.
         *
         * @since 1.13.0
         *
         * @param HS_Item_Model $value
         * @return $this
         */
        public function set_item(\SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the required classification activity.
         *
         * @return string
         */
        public function get_activity() : string
        {
        }
        /**
         * Sets the classification activity.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_activity(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the country of destination
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_country_of_destination() : string
        {
        }
        /**
         * Sets the country of destination.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_country_of_destination(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the HS code.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_hs_code() : string
        {
        }
        /**
         * Sets the HS code.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_hs_code(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the status.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_status() : string
        {
        }
        /**
         * Sets the status.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_status(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the resolution.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_resolution() : string
        {
        }
        /**
         * Sets the resolution.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_resolution(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the confidence value.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_confidence() : string
        {
        }
        /**
         * Sets the confidence.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_confidence(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
        /**
         * Gets the confidence description.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_confidence_description() : string
        {
        }
        /**
         * Sets the confidence description.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_confidence_description(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Classification_Model
        {
        }
    }
    /**
     * The representation of an item model to be used by the Avalara API.
     *
     * @since 1.13.0
     */
    class HS_Item_Model
    {
        use \SkyVerge\WooCommerce\AvaTax\Traits\Resolves_Product_Item_Code;
        /** @var int the UID generated by Avalara */
        protected $id;
        /** @var string the company ID */
        protected $company_id;
        /** @var string the WooCommerce product ID */
        protected $item_code;
        /** @var string the WooCommerce product parent ID (only used for variations) */
        protected $parent_code;
        /** @var string the WooCommerce product title */
        protected $description;
        /** @var string the WooCommerce product description */
        protected $summary;
        /** @var string the WooCommerce product category breadcrumbs */
        protected $item_group;
        /** @var DateTime the datetime when record was created */
        protected $created_date;
        /** @var array classification parameters for the product */
        protected $classification_parameters = [];
        /**
         * The item model constructor.
         *
         * @since 1.13.0
         *
         * @param WC_Product|null $product a product to set the item model data (optional)
         */
        public function __construct($product = null)
        {
        }
        /**
         * Gets the ID.
         *
         * @since 1.13.0
         *
         * @return int
         */
        public function get_id() : int
        {
        }
        /**
         * Sets the ID.
         *
         * @since 1.13.0
         *
         * @param int $value
         * @return self
         */
        public function set_id(int $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the company ID.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_company_id() : string
        {
        }
        /**
         * Sets the company ID.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_company_id(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the item code.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_item_code() : string
        {
        }
        /**
         * Sets the item code.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_item_code(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the parent item code. Optional - may be null.
         *
         * @since 1.16.0
         *
         * @return string|null
         */
        public function get_parent_code()
        {
        }
        /**
         * Sets the parent item code.
         *
         * @since 1.16.0
         *
         * @param string|null $value
         * @return self
         */
        public function set_parent_code(string $value = null) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the description.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_description() : string
        {
        }
        /**
         * Sets the description.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_description(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the summary.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_summary() : string
        {
        }
        /**
         * Sets the summary.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_summary(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the item group.
         *
         * @since 1.13.0
         *
         * @return string
         */
        public function get_item_group() : string
        {
        }
        /**
         * Sets the item group.
         *
         * @since 1.13.0
         *
         * @param string $value
         * @return self
         */
        public function set_item_group(string $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the created date.
         *
         * @since 1.13.0
         *
         * @return DateTime
         */
        public function get_created_date() : \DateTime
        {
        }
        /**
         * Sets the created date.
         *
         * @since 1.13.0
         *
         * @param DateTime $value
         * @return self
         */
        public function set_created_date(\DateTime $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Gets the classification parameters.
         *
         * @since 1.16.0
         *
         * @return array
         */
        public function get_classification_parameters() : array
        {
        }
        /**
         * Sets the classification parameters.
         *
         * @since 1.16.0
         *
         * @param array $params
         * @return $this
         */
        public function set_classification_parameters(array $params = []) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Adds a single classification parameter.
         *
         * @since 1.16.0
         *
         * @param string $name the parameter name
         * @param mixed $value the parameter value
         * @return $this
         */
        public function add_classification_parameter(string $name, $value) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
        /**
         * Builds the item group string representing the categories' breadcrumb.
         *
         * @since 1.13.0
         *
         * @param int[] $category_ids a list of category IDs
         * @return string
         */
        public function build_item_group(array $category_ids) : string
        {
        }
        /**
         * Creates a new HS_Item_Model instance from a WooCommerce object.
         *
         * @since 1.13.0
         *
         * @param WC_Product $product a WooCommerce product
         * @return HS_Item_Model
         */
        private function set_data(\WC_Product $product) : \SkyVerge\WooCommerce\AvaTax\API\Models\HS_Item_Model
        {
        }
    }
}
namespace {
    /**
     * The AvaTax API.
     *
     * @since 1.0.0
     */
    class WC_AvaTax_API extends \SkyVerge\WooCommerce\AvaTax\Api\WC_AvaTax_Abstract_API
    {
        /** @var string Avalara account ID */
        protected $account_id;
        /** @var string Avalara license key */
        protected $license_key;
        /** @var string Avalara company code */
        protected $company_code;
        /**
         * Construct the API.
         *
         * @since 1.0.0
         *
         * @param string $account_id Avalara account ID
         * @param string $license_key Avalara license key
         * @param string $company_code Avalara company code
         * @param string $environment The current API environment, either `production` or `development`.
         */
        public function __construct($account_id, $license_key, $company_code, $environment)
        {
        }
        /**
         * Gets the companies.
         *
         * @since 1.13.0
         *
         * @return Companies_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function get_companies() : \SkyVerge\WooCommerce\AvaTax\API\Responses\Companies_Response
        {
        }
        /**
         * Gets the Nexus list.
         *
         * @since 1.13.0
         *
         * @return Nexus_List_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function get_nexus_list() : \SkyVerge\WooCommerce\AvaTax\API\Responses\Nexus_List_Response
        {
        }
        /**
         * Gets the product classification systems list.
         *
         * @since 1.16.0
         *
         * @return Product_Classification_Systems_List_By_Company_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function get_product_classification_systems_list() : \SkyVerge\WooCommerce\AvaTax\API\Responses\Product_Classification_Systems_List_By_Company_Response
        {
        }
        /**
         * Queries the items list
         *
         * @since 1.16.0
         *
         * @param string $filter
         * @param array|string $include
         * @param null $limit
         * @return Query_Items_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function query_items(string $filter = '', $include = '', $limit = \null) : \SkyVerge\WooCommerce\AvaTax\API\Responses\Query_Items_Response
        {
        }
        /**
         * Gets estimated tax rates based on an address.
         *
         * @param array $address customer address
         *
         * @since 1.5.0
         *
         * @return WC_AvaTax_API_Rate_Response response object
         * @throws Framework\SV_WC_API_Exception
         */
        public function get_estimated_rates($address)
        {
        }
        /**
         * Get the calculated tax for a cart instance.
         *
         * @since 1.5.0
         *
         * @param \WC_Cart $cart cart object
         * @return WC_AvaTax_API_Tax_Response response object
         * @throws Framework\SV_WC_API_Exception
         */
        public function calculate_cart_tax(\WC_Cart $cart)
        {
        }
        /**
         * Get the calculated tax for a specific order.
         *
         * @since 1.0.0
         *
         * @param \WC_Order $order order object
         * @param bool $commit Whether to commit the transaction to Avalara
         * @return WC_AvaTax_API_Tax_Response response object
         * @throws Framework\SV_WC_API_Exception
         */
        public function calculate_order_tax(\WC_Order $order, bool $commit)
        {
        }
        /**
         * Get the calculated tax for a refunded order.
         *
         * @since 1.0.0
         *
         * @param WC_Order_Refund $refund order refund object
         * @return WC_AvaTax_API_Tax_Response response object
         * @throws Framework\SV_WC_API_Exception
         */
        public function calculate_refund_tax(\WC_Order_Refund $refund)
        {
        }
        /**
         * Refund an order.
         *
         * @since 1.15.0
         *
         * @param WC_Order_Refund $refund order refund object
         * @param string|null $type the type of refund, leave empty for a Full refund
         * @return WC_AvaTax_API_Response response object
         * @throws Framework\SV_WC_API_Exception
         */
        public function refund_order(\WC_Order_Refund $refund, string $type = \null)
        {
        }
        /**
         * Validate an address.
         *
         * @since 1.0.0
         *
         * @param array $address {
         *     The address details.
         *
         * @type string $address_1 Line 1 of the street address.
         * @type string $address_2 Line 2 of the street address.
         * @type string $city The city name.
         * @type string $state The state or region.
         * @type string $country The country code.
         * @type string $postcode The zip or postcode.
         * }
         * @return object The validated and normalized address.
         * @throws Framework\SV_WC_API_Exception
         */
        public function validate_address(array $address)
        {
        }
        /**
         * Void a document in Avalara based on a WooCommerce order.
         *
         * @since 1.0.0
         *
         * @param int $order_id The associated order ID.
         * @return WC_AvaTax_API_Tax_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function void_order($order_id)
        {
        }
        /**
         * Void a document in Avalara based on a WooCommerce refund.
         *
         * @since 1.0.0
         *
         * @param WC_Order_Refund $refund order refund object
         * @return WC_AvaTax_API_Tax_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function void_refund(\WC_Order_Refund $refund)
        {
        }
        /**
         * Pings the AvaTax API.
         *
         * Primarily used to test for a valid connection.
         *
         * @since 1.0.0
         *
         * @return WC_AvaTax_API_Utility_Response
         * @throws Framework\SV_WC_API_Exception
         */
        public function test()
        {
        }
        /**
         * Gets the configured account subscriptions.
         *
         * TODO: since 1.16.0 this method is no longer called, as there are no subscriptions to check. Consider removing {IT 2022-01-11}
         *
         * @since 1.5.0
         *
         * @return WC_AvaTax_API_Subscriptions_Response $response response object
         * @throws Framework\SV_WC_API_Exception
         */
        public function get_subscriptions()
        {
        }
        /**
         * Gets the available Entity/Use codes.
         *
         * @since 1.6.2
         *
         * @return WC_AvaTax_API_Entity_Use_Code_Response $response response object
         * @throws Framework\SV_WC_API_Exception
         */
        public function get_entity_use_codes()
        {
        }
        /**
         * Allow child classes to validate a response prior to instantiating the
         * response object. Useful for checking response codes or messages, e.g.
         * throw an exception if the response code is not 200.
         *
         * A child class implementing this method should simply return true if the response
         * processing should continue, or throw a Framework\SV_WC_API_Exception with a
         * relevant error message & code to stop processing.
         *
         * Note: Child classes *must* sanitize the raw response body before throwing
         * an exception, as it will be included in the broadcast_request() method
         * which is typically used to log requests.
         *
         * @since 1.0.0
         */
        protected function do_pre_parse_response_validation()
        {
        }
        /**
         * Validate the parsed response data.
         *
         * Primarily checks for errors returned by the AvaTax API.
         *
         * @since 1.5.0
         *
         * @throws Framework\SV_WC_API_Exception
         * @return bool
         */
        protected function do_post_parse_response_validation()
        {
        }
        /**
         * Builds and returns a new API request object
         *
         * @see Framework\SV_WC_API_Base::get_new_request()
         *
         * @since 1.0.0
         *
         * @param string $type the desired request type
         * @param mixed $args optional argument(s) to be passed to the request
         * @return Companies_Request|Nexus_List_Request|Product_Classification_Systems_List_By_Company_Request|Query_Items_Request|WC_AvaTax_API_Address_Request|WC_AvaTax_API_Entity_Use_Code_Request|WC_Avatax_API_Rate_Request|WC_Avatax_API_Subscriptions_Request|WC_AvaTax_API_Tax_Request|WC_Avatax_API_Utility_Request|WC_AvaTax_API_Void_Request
         * @throws Framework\SV_WC_API_Exception for invalid request types
         */
        protected function get_new_request($type = '', $args = \null)
        {
        }
        /**
         * Gets the configured company code.
         *
         * @since 1.5.0
         *
         * @return string
         */
        public function get_company_code()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * SkyVerge Admin Notice Handler Class
     *
     * The purpose of this class is to provide a facility for displaying
     * conditional (often dismissible) admin notices during a single page
     * request
     *
     * @since 3.0.0
     */
    class SV_WC_Admin_Notice_Handler
    {
        /** @var SV_WC_Plugin the plugin */
        private $plugin;
        /** @var array associative array of id to notice text */
        private $admin_notices = array();
        /** @var boolean static member to enforce a single rendering of the admin notice placeholder element */
        private static $admin_notice_placeholder_rendered = false;
        /** @var boolean static member to enforce a single rendering of the admin notice javascript */
        private static $admin_notice_js_rendered = false;
        /**
         * Initialize and setup the Admin Notice Handler
         *
         * @since 3.0.0
         */
        public function __construct($plugin)
        {
        }
        /**
         * Adds the given $message as a dismissible notice identified by $message_id,
         * unless the notice has been dismissed, or we're on the plugin settings page
         *
         * @since 3.0.0
         * @param string $message the notice message to display
         * @param string $message_id the message id
         * @param array $params {
         *     Optional parameters.
         *
         *     @type bool $dismissible             If the notice should be dismissible
         *     @type bool $always_show_on_settings If the notice should be forced to display on the
         *                                         plugin settings page, regardless of `$dismissible`.
         *     @type string $notice_class          Additional classes for the notice.
         * }
         */
        public function add_admin_notice($message, $message_id, $params = array())
        {
        }
        /**
         * Returns true if the identified notice hasn't been cleared, or we're on
         * the plugin settings page (where notices are always displayed)
         *
         * @since 3.0.0
         * @param string $message_id the message id
         * @param array $params {
         *     Optional parameters.
         *
         *     @type bool $dismissible             If the notice should be dismissible
         *     @type bool $always_show_on_settings If the notice should be forced to display on the
         *                                         plugin settings page, regardless of `$dismissible`.
         * }
         * @return bool
         */
        public function should_display_notice($message_id, $params = array())
        {
        }
        /**
         * Render any admin notices, as well as the admin notice placeholder
         *
         * @since 3.0.0
         * @param boolean $is_visible true if the notices should be immediately visible, false otherwise
         */
        public function render_admin_notices($is_visible = true)
        {
        }
        /**
         * Render any delayed admin notices, which have not yet already been rendered
         *
         * @since 3.0.0
         */
        public function render_delayed_admin_notices()
        {
        }
        /**
         * Render a single admin notice
         *
         * @since 3.0.0
         * @param string $message the notice message to display
         * @param string $message_id the message id
         * @param array $params {
         *     Optional parameters.
         *
         *     @type bool $dismissible             If the notice should be dismissible
         *     @type bool $is_visible              If the notice should be immediately visible
         *     @type bool $always_show_on_settings If the notice should be forced to display on the
         *                                         plugin settings page, regardless of `$dismissible`.
         *     @type string $notice_class          Additional classes for the notice.
         * }
         */
        public function render_admin_notice($message, $message_id, $params = array())
        {
        }
        /**
         * Render the javascript to handle the notice "dismiss" functionality
         *
         * @since 3.0.0
         */
        public function render_admin_notice_js()
        {
        }
        /**
         * Marks the identified admin notice as dismissed for the given user
         *
         * @since 3.0.0
         * @param string $message_id the message identifier
         * @param int $user_id optional user identifier, defaults to current user
         */
        public function dismiss_notice($message_id, $user_id = null)
        {
        }
        /**
         * Marks the identified admin notice as not dismissed for the identified user
         *
         * @since 3.0.0
         * @param string $message_id the message identifier
         * @param int $user_id optional user identifier, defaults to current user
         */
        public function undismiss_notice($message_id, $user_id = null)
        {
        }
        /**
         * Returns true if the identified admin notice has been dismissed for the
         * given user
         *
         * @since 3.0.0
         * @param string $message_id the message identifier
         * @param int $user_id optional user identifier, defaults to current user
         * @return boolean true if the message has been dismissed by the admin user
         */
        public function is_notice_dismissed($message_id, $user_id = null)
        {
        }
        /**
         * Returns the full set of dismissed notices for the user identified by
         * $user_id, for this plugin
         *
         * @since 3.0.0
         * @param int $user_id optional user identifier, defaults to current user
         * @return array of message id to dismissed status (true or false)
         */
        public function get_dismissed_notices($user_id = null)
        {
        }
        /** AJAX methods ******************************************************/
        /**
         * Dismiss the identified notice
         *
         * @since 3.0.0
         */
        public function handle_dismiss_notice()
        {
        }
        /** Getter methods ******************************************************/
        /**
         * Get the plugin
         *
         * @since 3.0.0
         * @return SV_WC_Plugin returns the plugin instance
         */
        protected function get_plugin()
        {
        }
    }
    /**
     * WooCommerce Compatibility Utility Class
     *
     * The unfortunate purpose of this class is to provide a single point of
     * compatibility functions for dealing with supporting multiple versions
     * of WooCommerce and various extensions.
     *
     * The expected procedure is to remove methods from this class, using the
     * latest ones directly in code, as support for older versions of WooCommerce
     * are dropped.
     *
     * Current Compatibility
     * + Core 3.0.9 - 3.7.x
     * + Subscriptions 2.2.x
     *
     * // TODO: move to /compatibility
     *
     * @since 2.0.0
     */
    class SV_WC_Plugin_Compatibility
    {
        /**
         * Gets the statuses that are considered "paid".
         *
         * @since 5.1.0
         * @deprecated 5.5.0
         *
         * @return string[]
         */
        public static function wc_get_is_paid_statuses()
        {
        }
        /**
         * Logs a doing_it_wrong message.
         *
         * @since 5.0.1
         * @deprecated 5.5.0
         *
         * @param string $function function used
         * @param string $message message to log
         * @param string $version version the message was added in
         */
        public static function wc_doing_it_wrong($function, $message, $version)
        {
        }
        /**
         * Formats a date for output.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_DateTime|SV_WC_DateTime $date date object
         * @param string $format date format
         * @return string
         */
        public static function wc_format_datetime($date, $format = '')
        {
        }
        /**
         * Logs a deprecated function notice.
         *
         * @since 5.0.0
         * @deprecated 5.5.0
         *
         * @param string $function deprecated function name
         * @param string $version deprecated-since version
         * @param string $replacement replacement function name
         */
        public static function wc_deprecated_function($function, $version, $replacement = null)
        {
        }
        /**
         * Retrieves a list of the latest available WooCommerce versions.
         *
         * Excludes betas, release candidates and development versions.
         * Versions are sorted from most recent to least recent.
         *
         * @since 5.4.1
         *
         * @return string[] array of semver strings
         */
        public static function get_latest_wc_versions()
        {
        }
        /**
         * Gets the version of the currently installed WooCommerce.
         *
         * @since 3.0.0
         *
         * @return string|null Woocommerce version number or null if undetermined
         */
        public static function get_wc_version()
        {
        }
        /**
         * Determines if the installed WooCommerce version matches a specific version.
         *
         * @since 5.5.0
         *
         * @param string $version semver
         * @return bool
         */
        public static function is_wc_version($version)
        {
        }
        /**
         * Determines if the installed version of WooCommerce is 3.0 or greater.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @return bool
         */
        public static function is_wc_version_gte_3_0()
        {
        }
        /**
         * Determines if the installed version of WooCommerce is less than 3.0.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @return bool
         */
        public static function is_wc_version_lt_3_0()
        {
        }
        /**
         * Determines if the installed version of WooCommerce is 3.1 or greater.
         *
         * @since 4.6.5
         * @deprecated 5.5.0
         *
         * @return bool
         */
        public static function is_wc_version_gte_3_1()
        {
        }
        /**
         * Determines if the installed version of WooCommerce is less than 3.1.
         *
         * @since 4.6.5
         * @deprecated 5.5.0
         *
         * @return bool
         */
        public static function is_wc_version_lt_3_1()
        {
        }
        /**
         * Determines if the installed version of WooCommerce is equal or greater than a given version.
         *
         * @since 4.7.3
         *
         * @param string $version version number to compare
         * @return bool
         */
        public static function is_wc_version_gte($version)
        {
        }
        /**
         * Determines if the installed version of WooCommerce is lower than a given version.
         *
         * @since 4.7.3
         *
         * @param string $version version number to compare
         * @return bool
         */
        public static function is_wc_version_lt($version)
        {
        }
        /**
         * Determines if the installed version of WooCommerce is greater than a given version.
         *
         * @since 2.0.0
         *
         * @param string $version the version to compare
         * @return bool
         */
        public static function is_wc_version_gt($version)
        {
        }
        /**
         * Determines whether the enhanced admin is available.
         *
         * This checks both for WooCommerce v4.0+ and the underlying package availability.
         *
         * @since 5.6.0
         *
         * @return bool
         */
        public static function is_enhanced_admin_available()
        {
        }
        /** WordPress core ******************************************************/
        /**
         * Normalizes a WooCommerce page screen ID.
         *
         * Needed because WordPress uses a menu title (which is translatable), not slug, to generate screen ID.
         * See details in: https://core.trac.wordpress.org/ticket/21454
         * TODO: Add WP version check when https://core.trac.wordpress.org/ticket/18857 is addressed {BR 2016-12-12}
         *
         * @since 4.6.0
         *
         * @param string $slug slug for the screen ID to normalize (minus `woocommerce_page_`)
         * @return string normalized screen ID
         */
        public static function normalize_wc_screen_id($slug = 'wc-settings')
        {
        }
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
         *
         * Based on ActionScheduler's compat wrapper for the same function:
         * ActionScheduler_Compatibility::convert_hr_to_bytes()
         *
         * @link https://secure.php.net/manual/en/function.ini-get.php
         * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @since 5.3.1
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         * @return int An integer byte value.
         */
        public static function convert_hr_to_bytes($value)
        {
        }
        /** Subscriptions *********************************************************/
        /**
         * Determines if the installed version of WooCommerce Subscriptions is 2.0.0 or greater.
         *
         * @since 4.1.0
         * @deprecated 5.5.0
         *
         * @return bool
         */
        public static function is_wc_subscriptions_version_gte_2_0()
        {
        }
        /**
         * Determines if the installed version of WooCommerce Subscriptions matches or exceeds a given version.
         *
         * @since 5.5.0
         *
         * @param string $version version number to compare
         * @return bool
         */
        public static function is_wc_subscriptions_version_gte($version)
        {
        }
        /**
         * Determines if the installed version of WooCommerce Subscriptions exceeds a given version.
         *
         * @since 5.5.0
         *
         * @param string $version version number to compare
         * @return bool
         */
        public static function is_wc_subscriptions_version_gt($version)
        {
        }
        /**
         * Determines if the installed version of WooCommerce Subscriptions is lower than a given version.
         *
         * @since 5.5.0
         *
         * @param string $version version number to compare
         * @return bool
         */
        public static function is_wc_subscriptions_version_lt($version)
        {
        }
        /**
         * Gets the version of the currently installed WooCommerce Subscriptions.
         *
         * @since 4.1.0
         *
         * @return string|null WooCommerce Subscriptions version number or null if not found
         */
        protected static function get_wc_subscriptions_version()
        {
        }
        /**
         * Determines if the installed WooCommerce Subscriptions version matches a specific version.
         *
         * @since 5.5.0
         *
         * @param string $version semver
         * @return bool
         */
        protected static function is_wc_subscriptions_version($version)
        {
        }
    }
    /**
     * The job batch handler class.
     *
     * This provides a way for plugins to process "background" jobs in batches when
     * regular background processing isn't available.
     *
     * @since 4.8.0
     */
    class SV_WP_Job_Batch_Handler
    {
        /** @var SV_WP_Background_Job_Handler job handler instance */
        protected $job_handler;
        /** @var SV_WC_Plugin $plugin WC plugin instance */
        protected $plugin;
        /** @var int default items per batch */
        protected $items_per_batch = 20;
        /**
         * Constructs the class.
         *
         * @since 4.8.0
         *
         * @param SV_WP_Background_Job_Handler $job_handler job handler instance
         * @param SV_WC_Plugin $plugin WC plugin instance
         */
        public function __construct($job_handler, \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Plugin $plugin)
        {
        }
        /**
         * Adds the necessary action and filter hooks.
         *
         * @since 4.8.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Enqueues the scripts.
         *
         * @since 4.8.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Renders the inline JavaScript for instantiating the batch handler class.
         *
         * @since 4.8.0
         */
        protected function render_js()
        {
        }
        /**
         * Gets the JavaScript batch handler arguments.
         *
         * @since 4.8.0
         *
         * @return array
         */
        protected function get_js_args()
        {
        }
        /**
         * Gets the JavaScript batch handler class name.
         *
         * Plugins can override this with their own handler that extends the base.
         *
         * @since 4.8.0
         *
         * @return string
         */
        protected function get_js_class()
        {
        }
        /**
         * Processes a job batch via AJAX.
         *
         * @internal
         *
         * @since 4.8.0
         *
         * @throws \Exception upon error.
         */
        public function ajax_process_batch()
        {
        }
        /**
         * Cancels a job via AJAX.
         *
         * @internal
         *
         * @since 4.8.0
         */
        public function ajax_cancel_job()
        {
        }
        /**
         * Handles a job after processing one of its batches.
         *
         * Allows plugins to add extra job properties and handle certain statuses.
         * Implementations may throw a SV_WC_Plugin_Exception.
         *
         * @since 4.8.0
         *
         * @param \stdClass|object $job job object
         * @return \stdClass|object $job job object
         */
        protected function process_job_status($job)
        {
        }
        /**
         * Processes a batch of items for the given job.
         *
         * A batch consists of the number of items defined by self::get_items_per_batch()
         * or the number we're able to process before exceeding time or memory limits.
         *
         * @since 4.8.0
         *
         * @param string $job_id job to process
         * @return \stdClass|object $job job after processing the batch
         * @throws \Exception
         * @throws SV_WC_Plugin_Exception
         */
        public function process_batch($job_id)
        {
        }
        /**
         * Gets the number of items to process in a single request when processing job item batches.
         *
         * @since 4.8.0
         *
         * @return int
         */
        protected function get_items_per_batch()
        {
        }
        /**
         * Gets the job handler.
         *
         * @since 4.8.0
         *
         * @return SV_WP_Background_Job_Handler
         */
        protected function get_job_handler()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 4.8.0
         *
         * @return SV_WC_Plugin
         */
        protected function get_plugin()
        {
        }
    }
    /**
     * SkyVerge Wordpress Async Request class
     *
     * Based on the incredible work by deliciousbrains - most of the code is from
     * here: https://github.com/A5hleyRich/wp-background-processing
     *
     * Forked & namespaced to prevent dependency conflicts and to facilitate
     * further customizations.
     *
     * Use SV_WP_Async_Request::set_data() to set request data, instead of ::data().
     *
     * @since 4.4.0
     */
    abstract class SV_WP_Async_Request
    {
        /** @var string request prefix */
        protected $prefix = 'wp';
        /** @var string request action name */
        protected $action = 'async_request';
        /** @var string request identifier */
        protected $identifier;
        /** @var array request data */
        protected $data = array();
        /**
         * Initiate a new async request
         *
         * @since 4.4.0
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the async request
         *
         * @since 4.4.0
         * @param array $data
         * @return SV_WP_Async_Request
         */
        public function set_data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @since 4.4.0
         * @return array|\WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @since 4.4.0
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @since 4.4.0
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get request args
         *
         * In 4.6.3 renamed from get_post_args to get_request_args
         *
         * @since 4.4.0
         * @return array
         */
        protected function get_request_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         * @since 4.4.0
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         *
         * @since 4.4.0
         */
        protected abstract function handle();
    }
    /**
     * SkyVerge WordPress Background Job Handler class
     *
     * Based on the wonderful WP_Background_Process class by deliciousbrains:
     * https://github.com/A5hleyRich/wp-background-processing
     *
     * Subclasses SV_WP_Async_Request. Instead of the concept of `batches` used in
     * the Delicious Brains' version, however, this takes a more object-oriented approach
     * of background `jobs`, allowing greater control over manipulating job data and
     * processing.
     *
     * A batch implicitly expected an array of items to process, whereas a job does
     * not expect any particular data structure (although it does default to
     * looping over job data) and allows subclasses to provide their own
     * processing logic.
     *
     * # Sample usage:
     *
     * $background_job_handler = new SV_WP_Background_Job_Handler();
     * $job = $background_job_handler->create_job( $attrs );
     * $background_job_handler->dispatch();
     *
     * @since 4.4.0
     */
    abstract class SV_WP_Background_Job_Handler extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WP_Async_Request
    {
        /** @var string async request prefix */
        protected $prefix = 'sv_wp';
        /** @var string async request action */
        protected $action = 'background_job';
        /** @var string data key */
        protected $data_key = 'data';
        /** @var int start time of current process */
        protected $start_time = 0;
        /** @var string cron hook identifier */
        protected $cron_hook_identifier;
        /** @var string cron interval identifier */
        protected $cron_interval_identifier;
        /** @var string debug message, used by the system status tool */
        protected $debug_message;
        /**
         * Initiate new background job handler
         *
         * @since 4.4.0
         */
        public function __construct()
        {
        }
        /**
         * Adds the necessary action and filter hooks.
         *
         * @since 4.8.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Dispatch
         *
         * @since 4.4.0
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Maybe processes job queue.
         *
         * Checks whether data exists within the job queue and that the background process is not already running.
         *
         * @since 4.4.0
         *
         * @throws \Exception upon error
         */
        public function maybe_handle()
        {
        }
        /**
         * Check whether job queue is empty or not
         *
         * @since 4.4.0
         * @return bool True if queue is empty, false otherwise
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Check whether background process is running or not
         *
         * Check whether the current process is already running
         * in a background process.
         *
         * @since 4.4.0
         * @return bool True if processing is running, false otherwise
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         *
         * @since 4.4.0
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @since 4.4.0
         * @return SV_WP_Background_Job_Handler
         */
        protected function unlock_process()
        {
        }
        /**
         * Check if memory limit is exceeded
         *
         * Ensures the background job handler process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @since 4.4.0
         *
         * @return bool True if exceeded memory limit, false otherwise
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @since 4.4.0
         *
         * @return int memory limit in bytes
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Check whether request time limit has been exceeded or not
         *
         * Ensures the background job handler never exceeds a sensible time limit.
         * A timeout limit of 30s is common on shared hosting.
         *
         * @since 4.4.0
         *
         * @return bool True, if time limit exceeded, false otherwise
         */
        protected function time_exceeded()
        {
        }
        /**
         * Create a background job
         *
         * Delicious Brains' versions alternative would be using ->data()->save().
         * Allows passing in any kind of job attributes, which will be available at item data processing time.
         * This allows sharing common options between items without the need to repeat
         * the same information for every single item in queue.
         *
         * Instead of returning self, returns the job instance, which gives greater
         * control over the job.
         *
         * @since 4.4.0
         *
         * @param array|mixed $attrs Job attributes.
         * @return \stdClass|object|null
         */
        public function create_job($attrs)
        {
        }
        /**
         * Get a job (by default the first in the queue)
         *
         * @since 4.4.0
         *
         * @param string $id Optional. Job ID. Will return first job in queue if not
         *                   provided. Will not return completed or failed jobs from queue.
         * @return \stdClass|object|null The found job object or null
         */
        public function get_job($id = null)
        {
        }
        /**
         * Gets jobs.
         *
         * @since 4.4.2
         *
         * @param array $args {
         *     Optional. An array of arguments
         *
         *     @type string|array $status Job status(es) to include
         *     @type string $order ASC or DESC. Defaults to DESC
         *     @type string $orderby Field to order by. Defaults to option_id
         * }
         * @return \stdClass[]|object[]|null Found jobs or null if none found
         */
        public function get_jobs($args = array())
        {
        }
        /**
         * Handles jobs.
         *
         * Process jobs while remaining within server memory and time limit constraints.
         *
         * @since 4.4.0
         *
         * @throws \Exception
         */
        protected function handle()
        {
        }
        /**
         * Process a job
         *
         * Default implementation is to loop over job data and passing each item to
         * the item processor. Subclasses are, however, welcome to override this method
         * to create totally different job processing implementations - see
         * WC_CSV_Import_Suite_Background_Import in CSV Import for an example.
         *
         * If using the default implementation, the job must have a $data_key property set.
         * Subclasses can override the data key, but the contents must be an array which
         * the job processor can loop over. By default, the data key is `data`.
         *
         * If no data is set, the job will completed right away.
         *
         * @since 4.4.0
         *
         * @param \stdClass|object $job
         * @param int $items_per_batch number of items to process in a single request. Defaults to unlimited.
         * @throws \Exception when job data is incorrect
         * @return \stdClass $job
         */
        public function process_job($job, $items_per_batch = null)
        {
        }
        /**
         * Update job attrs
         *
         * @since 4.4.0
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @return \stdClass|object|false on failure
         */
        public function update_job($job)
        {
        }
        /**
         * Handles job completion.
         *
         * @since 4.4.0
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @return \stdClass|object|false on failure
         */
        public function complete_job($job)
        {
        }
        /**
         * Handle job failure
         *
         * Default implementation does not call this method directly, but it's
         * provided as a convenience method for subclasses that may call this to
         * indicate that a particular job has failed for some reason.
         *
         * @since 4.4.0
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @param string $reason Optional. Reason for failure.
         * @return \stdClass|false on failure
         */
        public function fail_job($job, $reason = '')
        {
        }
        /**
         * Delete a job
         *
         * @since 4.4.2
         *
         * @param \stdClass|object|string $job Job instance or ID
         * @return false on failure
         */
        public function delete_job($job)
        {
        }
        /**
         * Handle job queue completion
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         *
         * @since 4.4.0
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @since 4.4.0
         * @param array $schedules
         * @return array
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         *
         * @since 4.4.0
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule cron health check event
         *
         * @since 4.4.0
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled health check event
         *
         * @since 4.4.0
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Process an item from job data
         *
         * Implement this method to perform any actions required on each
         * item in job data.
         *
         * @since 4.4.2
         *
         * @param mixed $item Job data item to iterate over
         * @param \stdClass|object $job Job instance
         * @return mixed
         */
        protected abstract function process_item($item, $job);
        /**
         * Handles PHP shutdown, say after a fatal error.
         *
         * @since 4.5.0
         *
         * @param \stdClass|object $job the job being processed
         */
        public function handle_shutdown($job)
        {
        }
        /**
         * Update a job option in options database.
         *
         * @since 4.6.3
         *
         * @param \stdClass|object $job the job instance to update in database
         * @return int|bool number of rows updated or false on failure, see wpdb::update()
         */
        private function update_job_option($job)
        {
        }
        /** Debug & Testing Methods ***********************************************/
        /**
         * Tests the background handler's connection.
         *
         * @since 4.8.0
         *
         * @return bool
         */
        public function test_connection()
        {
        }
        /**
         * Handles the connection test request.
         *
         * @since 4.8.0
         */
        public function handle_connection_test_response()
        {
        }
        /**
         * Adds the WooCommerce debug tool.
         *
         * @since 4.8.0
         *
         * @param array $tools WooCommerce core tools
         * @return array
         */
        public function add_debug_tool($tools)
        {
        }
        /**
         * Runs the test connection debug tool.
         *
         * @since 4.8.0
         *
         * @return string
         */
        public function run_debug_tool()
        {
        }
        /**
         * Translate the tool success message.
         *
         * This can be removed in favor of returning the message string in `run_debug_tool()`
         *  when WC 3.1 is required, though that means the message will always be "success" styled.
         *
         * @since 4.8.0
         *
         * @param string $translated the text to output
         * @param string $original the original text
         * @param string $domain the textdomain
         * @return string the updated text
         */
        public function translate_success_message($translated, $original, $domain)
        {
        }
        /** Helper Methods ********************************************************/
        /**
         * Gets the job handler identifier.
         *
         * @since 4.8.0
         *
         * @return string
         */
        public function get_identifier()
        {
        }
    }
    /**
     * Plugin dependencies handler.
     *
     * @since 5.2.0
     */
    class SV_WC_Plugin_Dependencies
    {
        /** @var array required PHP extensions */
        protected $php_extensions = array();
        /** @var array required PHP functions */
        protected $php_functions = array();
        /** @var array required PHP settings */
        protected $php_settings = array();
        /** @var SV_WC_Plugin plugin instance */
        protected $plugin;
        /**
         * Constructs the class.
         *
         * @since 5.2.0
         *
         * @param SV_WC_Plugin $plugin plugin instance
         * @param array $args {
         *     PHP extension, function, and settings dependencies
         *
         *     @type array $php_extensions PHP extension dependencies
         *     @type array $php_functions  PHP function dependencies
         *     @type array $php_settings   PHP settings dependencies
         * }
         */
        public function __construct(\SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Plugin $plugin, $args = array())
        {
        }
        /**
         * Parses the dependency arguments and sets defaults.
         *
         * @since 5.2.0
         *
         * @param array $args dependency args
         * @return array
         */
        private function parse_dependencies($args)
        {
        }
        /**
         * Adds the action & filter hooks.
         *
         * @since 5.2.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Adds the admin dependency notices.
         *
         * @since 5.2.0
         */
        public function add_admin_notices()
        {
        }
        /**
         * Adds notices for any missing PHP extensions.
         *
         * @since 5.2.0
         */
        public function add_php_extension_notices()
        {
        }
        /**
         * Adds notices for any missing PHP functions.
         *
         * @since 5.2.0
         */
        public function add_php_function_notices()
        {
        }
        /**
         * Adds notices for any incompatible PHP settings.
         *
         * @since 5.2.0
         */
        public function add_php_settings_notices()
        {
        }
        /**
         * Gets any deprecated warning notices.
         *
         * @since 5.2.0
         */
        protected function add_deprecated_notices()
        {
        }
        /**
         * Adds an admin notice.
         *
         * @since 5.2.0
         *
         * @param string $id notice ID
         * @param string $message notice message
         * @param string $type notice type
         */
        protected function add_admin_notice($id, $message, $type = 'info')
        {
        }
        /**
         * Returns the active scripts optimization plugins.
         *
         * Returns a key-value array where the key contains the plugin file identifier and the value is the name of the plugin.
         *
         * @since 5.7.0
         *
         * @return array
         */
        public function get_active_scripts_optimization_plugins()
        {
        }
        /**
         * Returns true if any of the known scripts optimization plugins is active.
         *
         * @since 5.7.0
         *
         * @return bool
         */
        public function is_scripts_optimization_plugin_active()
        {
        }
        /** Getter methods ********************************************************/
        /**
         * Gets any missing PHP extensions.
         *
         * @since 5.2.0
         *
         * @return array
         */
        public function get_missing_php_extensions()
        {
        }
        /**
         * Gets the required PHP extensions.
         *
         * @since 5.2.0
         *
         * @return array
         */
        public function get_php_extensions()
        {
        }
        /**
         * Gets any missing PHP functions.
         *
         * @since 5.2.0
         *
         * @return array
         */
        public function get_missing_php_functions()
        {
        }
        /**
         * Gets the required PHP functions.
         *
         * @since 5.2.0
         *
         * @return array
         */
        public function get_php_functions()
        {
        }
        /**
         * Gets any incompatible PHP settings.
         *
         * @since 5.2.0
         *
         * @return array
         */
        public function get_incompatible_php_settings()
        {
        }
        /**
         * Gets the required PHP settings.
         *
         * @since 5.2.0
         *
         * @return array
         */
        public function get_php_settings()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 5.2.0
         *
         * @return SV_WC_Plugin
         */
        protected function get_plugin()
        {
        }
    }
    /**
     * SkyVerge Hook Deprecator Class
     *
     * This class handles triggering PHP notices for deprecated and removed hooks
     *
     * @since 4.3.0
     */
    class SV_WC_Hook_Deprecator
    {
        /** @var string plugin name */
        protected $plugin_name;
        /** @var array deprecated/removed hooks */
        protected $hooks;
        /**
         * Setup class
         *
         * @param string $plugin_name
         * @param array $hooks
         */
        public function __construct($plugin_name, $hooks)
        {
        }
        /**
         * Sets the deprecated hook defaults.
         *
         * @since 4.5.0
         * @param array $hook_params the hook parameters
         * @return array
         */
        protected function set_hook_defaults($hook_params)
        {
        }
        /**
         * Map each deprecated hook to its replacement.
         *
         * @since 4.5.0
         */
        protected function map_deprecated_hooks()
        {
        }
        /**
         * Map a deprecated/renamed hook to a new one.
         *
         * This method works by hooking into the new, renamed version of the action/filter
         * and checking if any actions/filters are hooked into the old hook. It then runs
         * these and applies the data modifications in the new hook.
         *
         * @since 4.5.0
         * @return mixed
         */
        public function map_deprecated_hook()
        {
        }
        /**
         * Trigger a notice when other actors have attached callbacks to hooks that
         * are either deprecated or removed. This only runs when WP_DEBUG is on.
         *
         * @since 4.3.0
         */
        public function trigger_deprecated_errors()
        {
        }
        /**
         * Trigger the deprecated/removed notice
         *
         * @since 4.3.0
         * @param string $old_hook_name deprecated/removed hook name
         * @param array $hook {
         *   @type string $version version the hook was deprecated/removed in
         *   @type bool $removed if present and true, the message will indicate the hook was removed instead of deprecated
         *   @type string|bool $replacement if present and a string, the message will indicate the replacement hook to use,
         *     otherwise (if bool and false) the message will indicate there is no replacement available.
         * }
         */
        protected function trigger_error($old_hook_name, $hook)
        {
        }
    }
}
namespace {
    /**
     * # SkyVerge WooCommerce Plugin Framework Bootstrap
     *
     * The purpose of this class is to find and load the highest versioned
     * framework of the activated framework plugins, and then initialize any
     * compatible framework plugins.
     *
     * @since 2.0.0
     */
    class SV_WC_Framework_Bootstrap
    {
        /** @var SV_WC_Framework_Bootstrap The single instance of the class */
        protected static $instance = \null;
        /** @var array registered framework plugins */
        protected $registered_plugins = array();
        /** @var array registered and active framework plugins */
        protected $active_plugins = array();
        /** @var array of plugins that need to be updated due to an outdated framework */
        protected $incompatible_framework_plugins = array();
        /** @var array of plugins that require a newer version of WC */
        protected $incompatible_wc_version_plugins = array();
        /** @var array of plugins that require a newer version of WP */
        protected $incompatible_wp_version_plugins = array();
        /**
         * Hidden constructor
         *
         * @since 2.0.0
         */
        private function __construct()
        {
        }
        /**
         * Instantiate the class singleton
         *
         * @since 2.0.0
         * @return SV_WC_Framework_Bootstrap singleton instance
         */
        public static function instance()
        {
        }
        /**
         * Register a frameworked plugin
         *
         * @since 2.0.0
         * @param string $version the framework version
         * @param string $plugin_name the plugin name
         * @param string $path the plugin path
         * @param callable $callback function to initialize the plugin
         * @param array $args optional plugin arguments.  Possible arguments: 'is_payment_gateway', 'backwards_compatible'
         */
        public function register_plugin($version, $plugin_name, $path, $callback, $args = array())
        {
        }
        /**
         * Loads all registered framework plugins, first initializing the plugin
         * framework by loading the highest versioned one.
         *
         * @since 2.0.0
         */
        public function load_framework_plugins()
        {
        }
        /** Admin methods ******************************************************/
        /**
         * Deactivate backwards-incompatible framework plugins, which will allow
         * plugins with an older version of the framework to be active. Useful when
         * the admin isn't ready to upgrade older plugins yet needs them to still
         * function (e.g. a payment gateway)
         *
         * @since 4.0.0
         */
        public function maybe_deactivate_framework_plugins()
        {
        }
        /**
         * Render a notice with a count of the backwards incompatible frameworked
         * plugins that were deactivated
         *
         * @since 4.0.0
         */
        public function render_deactivation_notice()
        {
        }
        /**
         * Render a notice to update any plugins with incompatible framework
         * versions, or incompatiblities with the current WooCommerce or WordPress
         * versions
         *
         * @since 2.0.0
         */
        public function render_update_notices()
        {
        }
        /** Helper methods ******************************************************/
        /**
         * Is the WooCommerce plugin installed and active? This method is handy for
         * frameworked plugins that are listed on wordpress.org and thus don't have
         * access to the Woo Helper functions bundled with WooThemes-listed plugins.
         *
         * Notice: For now you can't rely on this method being available, since the
         * bootstrap class is the only piece of the framework which is loaded
         * simply according to the lexical order of plugin directories. Therefore
         * to use, you should first check that this method exists, or if you really
         * need to check for WooCommerce being active, define your own method.
         *
         * @since 4.0.0
         * @return boolean true if the WooCommerce plugin is installed and active
         */
        public static function is_woocommerce_active()
        {
        }
        /**
         * Compare the two framework versions.  Returns -1 if $a is less than $b, 0 if
         * they're equal, and 1 if $a is greater than $b
         *
         * @since 2.0.0
         * @param array $a first registered plugin to compare
         * @param array $b second registered plugin to compare
         * @return int -1 if $a is less than $b, 0 if they're equal, and 1 if $a is greater than $b
         */
        public function compare_frameworks($a, $b)
        {
        }
        /**
         * Returns the plugin path for the given $file
         *
         * @since 2.0.0
         * @param string $file the file
         * @return string plugin path
         */
        public function get_plugin_path($file)
        {
        }
        /**
         * Returns the WooCommerce version number, backwards compatible to
         * WC 1.5
         *
         * @since 3.0.0
         * @return null|string
         */
        protected function get_wc_version()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * SkyVerge Country Helper Class
     *
     * The purpose of this class is to centralize country-related utility
     * functions that are commonly used in SkyVerge plugins
     *
     * @since 5.4.3
     */
    class Country_Helper
    {
        /** @var array ISO 3166-alpha2 => ISO 3166-alpha3  */
        public static $alpha3 = ['AF' => 'AFG', 'AL' => 'ALB', 'DZ' => 'DZA', 'AD' => 'AND', 'AO' => 'AGO', 'AG' => 'ATG', 'AR' => 'ARG', 'AM' => 'ARM', 'AU' => 'AUS', 'AT' => 'AUT', 'AZ' => 'AZE', 'BS' => 'BHS', 'BH' => 'BHR', 'BD' => 'BGD', 'BB' => 'BRB', 'BY' => 'BLR', 'BE' => 'BEL', 'BZ' => 'BLZ', 'BJ' => 'BEN', 'BT' => 'BTN', 'BO' => 'BOL', 'BA' => 'BIH', 'BW' => 'BWA', 'BR' => 'BRA', 'BN' => 'BRN', 'BG' => 'BGR', 'BF' => 'BFA', 'BI' => 'BDI', 'KH' => 'KHM', 'CM' => 'CMR', 'CA' => 'CAN', 'CV' => 'CPV', 'CF' => 'CAF', 'TD' => 'TCD', 'CL' => 'CHL', 'CN' => 'CHN', 'CO' => 'COL', 'KM' => 'COM', 'CD' => 'COD', 'CG' => 'COG', 'CR' => 'CRI', 'CI' => 'CIV', 'HR' => 'HRV', 'CU' => 'CUB', 'CY' => 'CYP', 'CZ' => 'CZE', 'DK' => 'DNK', 'DJ' => 'DJI', 'DM' => 'DMA', 'DO' => 'DOM', 'EC' => 'ECU', 'EG' => 'EGY', 'SV' => 'SLV', 'GQ' => 'GNQ', 'ER' => 'ERI', 'EE' => 'EST', 'ET' => 'ETH', 'FJ' => 'FJI', 'FI' => 'FIN', 'FR' => 'FRA', 'GA' => 'GAB', 'GM' => 'GMB', 'GE' => 'GEO', 'DE' => 'DEU', 'GH' => 'GHA', 'GR' => 'GRC', 'GD' => 'GRD', 'GT' => 'GTM', 'GN' => 'GIN', 'GW' => 'GNB', 'GY' => 'GUY', 'HT' => 'HTI', 'HN' => 'HND', 'HU' => 'HUN', 'IS' => 'ISL', 'IN' => 'IND', 'ID' => 'IDN', 'IR' => 'IRN', 'IQ' => 'IRQ', 'IE' => 'IRL', 'IL' => 'ISR', 'IT' => 'ITA', 'JM' => 'JAM', 'JP' => 'JPN', 'JO' => 'JOR', 'KZ' => 'KAZ', 'KE' => 'KEN', 'KI' => 'KIR', 'KP' => 'PRK', 'KR' => 'KOR', 'KW' => 'KWT', 'KG' => 'KGZ', 'LA' => 'LAO', 'LV' => 'LVA', 'LB' => 'LBN', 'LS' => 'LSO', 'LR' => 'LBR', 'LY' => 'LBY', 'LI' => 'LIE', 'LT' => 'LTU', 'LU' => 'LUX', 'MK' => 'MKD', 'MG' => 'MDG', 'MW' => 'MWI', 'MY' => 'MYS', 'MV' => 'MDV', 'ML' => 'MLI', 'MT' => 'MLT', 'MH' => 'MHL', 'MR' => 'MRT', 'MU' => 'MUS', 'MX' => 'MEX', 'FM' => 'FSM', 'MD' => 'MDA', 'MC' => 'MCO', 'MN' => 'MNG', 'ME' => 'MNE', 'MA' => 'MAR', 'MZ' => 'MOZ', 'MM' => 'MMR', 'NA' => 'NAM', 'NR' => 'NRU', 'NP' => 'NPL', 'NL' => 'NLD', 'NZ' => 'NZL', 'NI' => 'NIC', 'NE' => 'NER', 'NG' => 'NGA', 'NO' => 'NOR', 'OM' => 'OMN', 'PK' => 'PAK', 'PW' => 'PLW', 'PA' => 'PAN', 'PG' => 'PNG', 'PY' => 'PRY', 'PE' => 'PER', 'PH' => 'PHL', 'PL' => 'POL', 'PT' => 'PRT', 'QA' => 'QAT', 'RO' => 'ROU', 'RU' => 'RUS', 'RW' => 'RWA', 'KN' => 'KNA', 'LC' => 'LCA', 'VC' => 'VCT', 'WS' => 'WSM', 'SM' => 'SMR', 'ST' => 'STP', 'SA' => 'SAU', 'SN' => 'SEN', 'RS' => 'SRB', 'SC' => 'SYC', 'SL' => 'SLE', 'SG' => 'SGP', 'SK' => 'SVK', 'SI' => 'SVN', 'SB' => 'SLB', 'SO' => 'SOM', 'ZA' => 'ZAF', 'ES' => 'ESP', 'LK' => 'LKA', 'SD' => 'SDN', 'SR' => 'SUR', 'SZ' => 'SWZ', 'SE' => 'SWE', 'CH' => 'CHE', 'SY' => 'SYR', 'TJ' => 'TJK', 'TZ' => 'TZA', 'TH' => 'THA', 'TL' => 'TLS', 'TG' => 'TGO', 'TO' => 'TON', 'TT' => 'TTO', 'TN' => 'TUN', 'TR' => 'TUR', 'TM' => 'TKM', 'TV' => 'TUV', 'UG' => 'UGA', 'UA' => 'UKR', 'AE' => 'ARE', 'GB' => 'GBR', 'US' => 'USA', 'UY' => 'URY', 'UZ' => 'UZB', 'VU' => 'VUT', 'VA' => 'VAT', 'VE' => 'VEN', 'VN' => 'VNM', 'YE' => 'YEM', 'ZM' => 'ZMB', 'ZW' => 'ZWE', 'TW' => 'TWN', 'CX' => 'CXR', 'CC' => 'CCK', 'HM' => 'HMD', 'NF' => 'NFK', 'NC' => 'NCL', 'PF' => 'PYF', 'YT' => 'MYT', 'GP' => 'GLP', 'PM' => 'SPM', 'WF' => 'WLF', 'TF' => 'ATF', 'BV' => 'BVT', 'CK' => 'COK', 'NU' => 'NIU', 'TK' => 'TKL', 'GG' => 'GGY', 'IM' => 'IMN', 'JE' => 'JEY', 'AI' => 'AIA', 'BM' => 'BMU', 'IO' => 'IOT', 'VG' => 'VGB', 'KY' => 'CYM', 'FK' => 'FLK', 'GI' => 'GIB', 'MS' => 'MSR', 'PN' => 'PCN', 'SH' => 'SHN', 'GS' => 'SGS', 'TC' => 'TCA', 'MP' => 'MNP', 'PR' => 'PRI', 'AS' => 'ASM', 'UM' => 'UMI', 'GU' => 'GUM', 'VI' => 'VIR', 'HK' => 'HKG', 'MO' => 'MAC', 'FO' => 'FRO', 'GL' => 'GRL', 'GF' => 'GUF', 'MQ' => 'MTQ', 'RE' => 'REU', 'AX' => 'ALA', 'AW' => 'ABW', 'AN' => 'ANT', 'SJ' => 'SJM', 'AC' => 'ASC', 'TA' => 'TAA', 'AQ' => 'ATA', 'CW' => 'CUW'];
        /** @var array ISO 3166-alpha2 => ISO 3166-numeric  */
        public static $numeric = ['AF' => '004', 'AX' => '248', 'AL' => '008', 'DZ' => '012', 'AS' => '016', 'AD' => '020', 'AO' => '024', 'AI' => '660', 'AQ' => '010', 'AG' => '028', 'AR' => '032', 'AM' => '051', 'AW' => '533', 'AU' => '036', 'AT' => '040', 'AZ' => '031', 'BS' => '044', 'BH' => '048', 'BD' => '050', 'BB' => '052', 'BY' => '112', 'BE' => '056', 'BZ' => '084', 'BJ' => '204', 'BM' => '060', 'BT' => '064', 'BO' => '068', 'BQ' => '535', 'BA' => '070', 'BW' => '072', 'BV' => '074', 'BR' => '076', 'IO' => '086', 'BN' => '096', 'BG' => '100', 'BF' => '854', 'BI' => '108', 'KH' => '116', 'CM' => '120', 'CA' => '124', 'CV' => '132', 'KY' => '136', 'CF' => '140', 'TD' => '148', 'CL' => '152', 'CN' => '156', 'CX' => '162', 'CC' => '166', 'CO' => '170', 'KM' => '174', 'CG' => '178', 'CD' => '180', 'CK' => '184', 'CR' => '188', 'CI' => '384', 'HR' => '191', 'CU' => '192', 'CW' => '531', 'CY' => '196', 'CZ' => '203', 'DK' => '208', 'DJ' => '262', 'DM' => '212', 'DO' => '214', 'EC' => '218', 'EG' => '818', 'SV' => '222', 'GQ' => '226', 'ER' => '232', 'EE' => '233', 'ET' => '231', 'FK' => '238', 'FO' => '234', 'FJ' => '242', 'FI' => '246', 'FR' => '250', 'GF' => '254', 'PF' => '258', 'TF' => '260', 'GA' => '266', 'GM' => '270', 'GE' => '268', 'DE' => '276', 'GH' => '288', 'GI' => '292', 'GR' => '300', 'GL' => '304', 'GD' => '308', 'GP' => '312', 'GU' => '316', 'GT' => '320', 'GG' => '831', 'GN' => '324', 'GW' => '624', 'GY' => '328', 'HT' => '332', 'HM' => '334', 'VA' => '336', 'HN' => '340', 'HK' => '344', 'HU' => '348', 'IS' => '352', 'IN' => '356', 'ID' => '360', 'IR' => '364', 'IQ' => '368', 'IE' => '372', 'IM' => '833', 'IL' => '376', 'IT' => '380', 'JM' => '388', 'JP' => '392', 'JE' => '832', 'JO' => '400', 'KZ' => '398', 'KE' => '404', 'KI' => '296', 'KP' => '408', 'KR' => '410', 'KW' => '414', 'KG' => '417', 'LA' => '418', 'LV' => '428', 'LB' => '422', 'LS' => '426', 'LR' => '430', 'LY' => '434', 'LI' => '438', 'LT' => '440', 'LU' => '442', 'MO' => '446', 'MK' => '807', 'MG' => '450', 'MW' => '454', 'MY' => '458', 'MV' => '462', 'ML' => '466', 'MT' => '470', 'MH' => '584', 'MQ' => '474', 'MR' => '478', 'MU' => '480', 'YT' => '175', 'MX' => '484', 'FM' => '583', 'MD' => '498', 'MC' => '492', 'MN' => '496', 'ME' => '499', 'MS' => '500', 'MA' => '504', 'MZ' => '508', 'MM' => '104', 'NA' => '516', 'NR' => '520', 'NP' => '524', 'NL' => '528', 'NC' => '540', 'NZ' => '554', 'NI' => '558', 'NE' => '562', 'NG' => '566', 'NU' => '570', 'NF' => '574', 'MP' => '580', 'NO' => '578', 'OM' => '512', 'PK' => '586', 'PW' => '585', 'PS' => '275', 'PA' => '591', 'PG' => '598', 'PY' => '600', 'PE' => '604', 'PH' => '608', 'PN' => '612', 'PL' => '616', 'PT' => '620', 'PR' => '630', 'QA' => '634', 'RE' => '638', 'RO' => '642', 'RU' => '643', 'RW' => '646', 'BL' => '652', 'SH' => '654', 'KN' => '659', 'LC' => '662', 'MF' => '663', 'PM' => '666', 'VC' => '670', 'WS' => '882', 'SM' => '674', 'ST' => '678', 'SA' => '682', 'SN' => '686', 'RS' => '688', 'SC' => '690', 'SL' => '694', 'SG' => '702', 'SX' => '534', 'SK' => '703', 'SI' => '705', 'SB' => '090', 'SO' => '706', 'ZA' => '710', 'GS' => '239', 'SS' => '728', 'ES' => '724', 'LK' => '144', 'SD' => '729', 'SR' => '740', 'SJ' => '744', 'SZ' => '748', 'SE' => '752', 'CH' => '756', 'SY' => '760', 'TW' => '158', 'TJ' => '762', 'TZ' => '834', 'TH' => '764', 'TL' => '626', 'TG' => '768', 'TK' => '772', 'TO' => '776', 'TT' => '780', 'TN' => '788', 'TR' => '792', 'TM' => '795', 'TC' => '796', 'TV' => '798', 'UG' => '800', 'UA' => '804', 'AE' => '784', 'GB' => '826', 'US' => '840', 'UM' => '581', 'UY' => '858', 'UZ' => '860', 'VU' => '548', 'VE' => '862', 'VN' => '704', 'VG' => '092', 'VI' => '850', 'WF' => '876', 'EH' => '732', 'YE' => '887', 'ZM' => '894', 'ZW' => '716'];
        /** @var array ISO 3166-alpha2 => phone calling code(s) */
        public static $calling_codes = ['BD' => '+880', 'BE' => '+32', 'BF' => '+226', 'BG' => '+359', 'BA' => '+387', 'BB' => '+1246', 'WF' => '+681', 'BL' => '+590', 'BM' => '+1441', 'BN' => '+673', 'BO' => '+591', 'BH' => '+973', 'BI' => '+257', 'BJ' => '+229', 'BT' => '+975', 'JM' => '+1876', 'BV' => '', 'BW' => '+267', 'WS' => '+685', 'BQ' => '+599', 'BR' => '+55', 'BS' => '+1242', 'JE' => '+441534', 'BY' => '+375', 'BZ' => '+501', 'RU' => '+7', 'RW' => '+250', 'RS' => '+381', 'TL' => '+670', 'RE' => '+262', 'TM' => '+993', 'TJ' => '+992', 'RO' => '+40', 'TK' => '+690', 'GW' => '+245', 'GU' => '+1671', 'GT' => '+502', 'GS' => '', 'GR' => '+30', 'GQ' => '+240', 'GP' => '+590', 'JP' => '+81', 'GY' => '+592', 'GG' => '+441481', 'GF' => '+594', 'GE' => '+995', 'GD' => '+1473', 'GB' => '+44', 'GA' => '+241', 'SV' => '+503', 'GN' => '+224', 'GM' => '+220', 'GL' => '+299', 'GI' => '+350', 'GH' => '+233', 'OM' => '+968', 'TN' => '+216', 'JO' => '+962', 'HR' => '+385', 'HT' => '+509', 'HU' => '+36', 'HK' => '+852', 'HN' => '+504', 'HM' => '', 'VE' => '+58', 'PR' => ['+1787', '+1939'], 'PS' => '+970', 'PW' => '+680', 'PT' => '+351', 'SJ' => '+47', 'PY' => '+595', 'IQ' => '+964', 'PA' => '+507', 'PF' => '+689', 'PG' => '+675', 'PE' => '+51', 'PK' => '+92', 'PH' => '+63', 'PN' => '+870', 'PL' => '+48', 'PM' => '+508', 'ZM' => '+260', 'EH' => '+212', 'EE' => '+372', 'EG' => '+20', 'ZA' => '+27', 'EC' => '+593', 'IT' => '+39', 'VN' => '+84', 'SB' => '+677', 'ET' => '+251', 'SO' => '+252', 'ZW' => '+263', 'SA' => '+966', 'ES' => '+34', 'ER' => '+291', 'ME' => '+382', 'MD' => '+373', 'MG' => '+261', 'MF' => '+590', 'MA' => '+212', 'MC' => '+377', 'UZ' => '+998', 'MM' => '+95', 'ML' => '+223', 'MO' => '+853', 'MN' => '+976', 'MH' => '+692', 'MK' => '+389', 'MU' => '+230', 'MT' => '+356', 'MW' => '+265', 'MV' => '+960', 'MQ' => '+596', 'MP' => '+1670', 'MS' => '+1664', 'MR' => '+222', 'IM' => '+441624', 'UG' => '+256', 'TZ' => '+255', 'MY' => '+60', 'MX' => '+52', 'IL' => '+972', 'FR' => '+33', 'IO' => '+246', 'SH' => '+290', 'FI' => '+358', 'FJ' => '+679', 'FK' => '+500', 'FM' => '+691', 'FO' => '+298', 'NI' => '+505', 'NL' => '+31', 'NO' => '+47', 'NA' => '+264', 'VU' => '+678', 'NC' => '+687', 'NE' => '+227', 'NF' => '+672', 'NG' => '+234', 'NZ' => '+64', 'NP' => '+977', 'NR' => '+674', 'NU' => '+683', 'CK' => '+682', 'XK' => '', 'CI' => '+225', 'CH' => '+41', 'CO' => '+57', 'CN' => '+86', 'CM' => '+237', 'CL' => '+56', 'CC' => '+61', 'CA' => '+1', 'CG' => '+242', 'CF' => '+236', 'CD' => '+243', 'CZ' => '+420', 'CY' => '+357', 'CX' => '+61', 'CR' => '+506', 'CW' => '+599', 'CV' => '+238', 'CU' => '+53', 'SZ' => '+268', 'SY' => '+963', 'SX' => '+599', 'KG' => '+996', 'KE' => '+254', 'SS' => '+211', 'SR' => '+597', 'KI' => '+686', 'KH' => '+855', 'KN' => '+1869', 'KM' => '+269', 'ST' => '+239', 'SK' => '+421', 'KR' => '+82', 'SI' => '+386', 'KP' => '+850', 'KW' => '+965', 'SN' => '+221', 'SM' => '+378', 'SL' => '+232', 'SC' => '+248', 'KZ' => '+7', 'KY' => '+1345', 'SG' => '+65', 'SE' => '+46', 'SD' => '+249', 'DO' => ['+1809', '+1829', '+1849'], 'DM' => '+1767', 'DJ' => '+253', 'DK' => '+45', 'VG' => '+1284', 'DE' => '+49', 'YE' => '+967', 'DZ' => '+213', 'US' => '+1', 'UY' => '+598', 'YT' => '+262', 'UM' => '+1', 'LB' => '+961', 'LC' => '+1758', 'LA' => '+856', 'TV' => '+688', 'TW' => '+886', 'TT' => '+1868', 'TR' => '+90', 'LK' => '+94', 'LI' => '+423', 'LV' => '+371', 'TO' => '+676', 'LT' => '+370', 'LU' => '+352', 'LR' => '+231', 'LS' => '+266', 'TH' => '+66', 'TF' => '', 'TG' => '+228', 'TD' => '+235', 'TC' => '+1649', 'LY' => '+218', 'VA' => '+379', 'VC' => '+1784', 'AE' => '+971', 'AD' => '+376', 'AG' => '+1268', 'AF' => '+93', 'AI' => '+1264', 'VI' => '+1340', 'IS' => '+354', 'IR' => '+98', 'AM' => '+374', 'AL' => '+355', 'AO' => '+244', 'AQ' => '', 'AS' => '+1684', 'AR' => '+54', 'AU' => '+61', 'AT' => '+43', 'AW' => '+297', 'IN' => '+91', 'AX' => '+35818', 'AZ' => '+994', 'IE' => '+353', 'ID' => '+62', 'UA' => '+380', 'QA' => '+974', 'MZ' => '+258'];
        /** @var array flipped calling codes */
        protected static $flipped_calling_codes;
        /**
         * Convert a 2-character country code into its 3-character equivalent, or
         * vice-versa, e.g.
         *
         * 1) given USA, returns US
         * 2) given US, returns USA
         *
         * @since 5.4.3
         *
         * @param string $code ISO-3166-alpha-2 or ISO-3166-alpha-3 country code
         * @return string country code
         */
        public static function convert_alpha_country_code($code)
        {
        }
        /**
         * Converts an ISO 3166-alpha2 country code to an ISO 3166-alpha3 country code.
         *
         * @since 5.4.3
         *
         * @param string $alpha2_code ISO 3166-alpha2 country code
         * @return string ISO 3166-alpha3 country code
         */
        public static function alpha2_to_alpha3($alpha2_code)
        {
        }
        /**
         * Converts an ISO 3166-alpha2 country code to an ISO 3166-numeric country code.
         *
         * @since 5.4.3
         *
         * @param string $alpha2_code ISO 3166-alpha2 country code
         * @return string ISO 3166-numeric country code
         */
        public static function alpha2_to_numeric($alpha2_code)
        {
        }
        /**
         * Converts an ISO 3166-alpha2 country code to a calling code.
         *
         * This conversion is available in WC 3.6+ so we'll call out to that when available.
         *
         * @since 5.4.3
         *
         * @param string $alpha2_code ISO 3166-alpha2 country code
         * @return string calling code
         */
        public static function alpha2_to_calling_code($alpha2_code)
        {
        }
        /**
         * Converts an ISO 3166-alpha3 country code to an ISO 3166-alpha2 country code.
         *
         * @since 5.4.3
         *
         * @param string $alpha3_code ISO 3166-alpha3 country code
         * @return string ISO 3166-alpha2 country code
         */
        public static function alpha3_to_alpha2($alpha3_code)
        {
        }
        /**
         * Converts an ISO 3166-alpha3 country code to an ISO 3166-numeric country code.
         *
         * @since 5.4.3
         *
         * @param string $alpha3_code ISO 3166-alpha3 country code
         * @return string ISO 3166-numeric country code
         */
        public static function alpha3_to_numeric($alpha3_code)
        {
        }
        /**
         * Converts an ISO 3166-alpha3 country code to a calling code.
         *
         * @since 5.4.3
         *
         * @param string $alpha3_code ISO 3166-alpha3 country code
         * @return string calling code
         */
        public static function alpha3_to_calling_code($alpha3_code)
        {
        }
        /**
         * Converts an ISO 3166-numeric country code to an ISO 3166-alpha2 code.
         *
         * @since 5.4.3
         *
         * @param string $numeric ISO 3166-numeric country code
         * @return string ISO 3166-alpha2 country code
         */
        public static function numeric_to_alpha2($numeric)
        {
        }
        /**
         * Converts an ISO 3166-numeric country code to an ISO 3166-alpha3 code.
         *
         * @since 5.4.3
         *
         * @param string $numeric ISO 3166-numeric country code
         * @return string ISO 3166-alpha3 country code
         */
        public static function numeric_to_alpha3($numeric)
        {
        }
        /**
         * Converts an ISO 3166-numeric country code to a calling code.
         *
         * @since 5.4.3
         *
         * @param string $numeric ISO 3166-numeric country code
         * @return string calling code
         */
        public static function numeric_to_calling_code($numeric)
        {
        }
        /**
         * Converts a country calling code to an ISO 3166-alpha2 code.
         *
         * @since 5.4.3
         *
         * @param string $calling_code country calling code (includes leading '+')
         * @return string ISO 3166-alpha2 code
         */
        public static function calling_code_to_alpha2($calling_code)
        {
        }
        /**
         * Converts a country calling code to an ISO 3166-alpha3 code.
         *
         * @since 5.4.3
         *
         * @param string $calling_code country calling code (includes leading '+')
         * @return string ISO 3166-alpha3 code
         */
        public static function calling_code_to_alpha3($calling_code)
        {
        }
        /**
         * Converts a country calling code to an ISO 3166-numeric code.
         *
         * @since 5.4.3
         *
         * @param string $calling_code country calling code (includes leading '+')
         * @return string ISO 3166-numeric code
         */
        public static function calling_code_to_numeric($calling_code)
        {
        }
        /**
         * Gets the flipped version of the calling codes array.
         *
         * Since array_flip will fail on the calling codes array due to
         * having some arrays as values, this custom function is necessary.
         *
         * @since 5.4.3
         *
         * @return array
         */
        public static function get_flipped_calling_codes()
        {
        }
    }
    /**
     * SkyVerge Helper Class
     *
     * The purpose of this class is to centralize common utility functions that
     * are commonly used in SkyVerge plugins
     *
     * @since 2.2.0
     */
    class SV_WC_Helper
    {
        /** encoding used for mb_*() string functions */
        const MB_ENCODING = 'UTF-8';
        /** String manipulation functions (all multi-byte safe) ***************/
        /**
         * Returns true if the haystack string starts with needle
         *
         * Note: case-sensitive
         *
         * @since 2.2.0
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        public static function str_starts_with($haystack, $needle)
        {
        }
        /**
         * Return true if the haystack string ends with needle
         *
         * Note: case-sensitive
         *
         * @since 2.2.0
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        public static function str_ends_with($haystack, $needle)
        {
        }
        /**
         * Returns true if the needle exists in haystack
         *
         * Note: case-sensitive
         *
         * @since 2.2.0
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        public static function str_exists($haystack, $needle)
        {
        }
        /**
         * Truncates a given $string after a given $length if string is longer than
         * $length. The last characters will be replaced with the $omission string
         * for a total length not exceeding $length
         *
         * @since 2.2.0
         * @param string $string text to truncate
         * @param int $length total desired length of string, including omission
         * @param string $omission omission text, defaults to '...'
         * @return string
         */
        public static function str_truncate($string, $length, $omission = '...')
        {
        }
        /**
         * Returns a string with all non-ASCII characters removed. This is useful
         * for any string functions that expect only ASCII chars and can't
         * safely handle UTF-8. Note this only allows ASCII chars in the range
         * 33-126 (newlines/carriage returns are stripped)
         *
         * @since 2.2.0
         * @param string $string string to make ASCII
         * @return string
         */
        public static function str_to_ascii($string)
        {
        }
        /**
         * Return a string with insane UTF-8 characters removed, like invisible
         * characters, unused code points, and other weirdness. It should
         * accept the common types of characters defined in Unicode.
         *
         * The following are allowed characters:
         *
         * p{L} - any kind of letter from any language
         * p{Mn} - a character intended to be combined with another character without taking up extra space (e.g. accents, umlauts, etc.)
         * p{Mc} - a character intended to be combined with another character that takes up extra space (vowel signs in many Eastern languages)
         * p{Nd} - a digit zero through nine in any script except ideographic scripts
         * p{Zs} - a whitespace character that is invisible, but does take up space
         * p{P} - any kind of punctuation character
         * p{Sm} - any mathematical symbol
         * p{Sc} - any currency sign
         *
         * pattern definitions from http://www.regular-expressions.info/unicode.html
         *
         * @since 4.0.0
         *
         * @param string $string
         * @return string
         */
        public static function str_to_sane_utf8($string)
        {
        }
        /**
         * Formats a number as a percentage.
         *
         * @since 5.10.9
         *
         * @NOTE The second and third parameter below are directly passed to {@see wc_format_decimal()} in case the decimal output or rounding needs to be tweaked.
         *
         * @param float|int|string $fraction the fraction to format as percentage
         * @param int|string|false number of decimal points to use, empty string to use {@see woocommerce_price_num_decimals(), or false to avoid rounding (optional, default).
         * @param bool $trim_zeros from end of string (optional, default false)
         * @return string fraction formatted as percentage
         */
        public static function format_percentage($fraction, $decimal_points = false, $trim_zeros = false)
        {
        }
        /**
         * Helper method to check if the multibyte extension is loaded, which
         * indicates it's safe to use the mb_*() string methods
         *
         * @since 2.2.0
         * @return bool
         */
        protected static function multibyte_loaded()
        {
        }
        /** Array functions ***************************************************/
        /**
         * Insert the given element after the given key in the array
         *
         * Sample usage:
         *
         * given
         *
         * array( 'item_1' => 'foo', 'item_2' => 'bar' )
         *
         * array_insert_after( $array, 'item_1', array( 'item_1.5' => 'w00t' ) )
         *
         * becomes
         *
         * array( 'item_1' => 'foo', 'item_1.5' => 'w00t', 'item_2' => 'bar' )
         *
         * @since 2.2.0
         * @param array $array array to insert the given element into
         * @param string $insert_key key to insert given element after
         * @param array $element element to insert into array
         * @return array
         */
        public static function array_insert_after(array $array, $insert_key, array $element)
        {
        }
        /**
         * Convert array into XML by recursively generating child elements
         *
         * First instantiate a new XML writer object:
         *
         * $xml = new XMLWriter();
         *
         * Open in memory (alternatively you can use a local URI for file output)
         *
         * $xml->openMemory();
         *
         * Then start the document
         *
         * $xml->startDocument( '1.0', 'UTF-8' );
         *
         * Don't forget to end the document and output the memory
         *
         * $xml->endDocument();
         *
         * $your_xml_string = $xml->outputMemory();
         *
         * @since 2.2.0
         *
         * @param \XMLWriter $xml_writer XML writer instance
         * @param string|array $element_key name for element, e.g. <per_page>
         * @param string|array $element_value value for element, e.g. 100
         */
        public static function array_to_xml($xml_writer, $element_key, $element_value = array())
        {
        }
        /**
         * Lists an array as text.
         *
         * Takes an array and returns a list like "one, two, three, and four"
         * with a (mandatory) oxford comma.
         *
         * @since 5.2.0
         *
         * @param array $items items to list
         * @param string|null $conjunction coordinating conjunction, like "or" or "and"
         * @param string $separator list separator, like a comma
         * @return string
         */
        public static function list_array_items(array $items, $conjunction = null, $separator = '')
        {
        }
        /** Number helper functions *******************************************/
        /**
         * Format a number with 2 decimal points, using a period for the decimal
         * separator and no thousands separator.
         *
         * Commonly used for payment gateways which require amounts in this format.
         *
         * @since 3.0.0
         * @param float $number
         * @return string
         */
        public static function number_format($number)
        {
        }
        /** WooCommerce helper functions **************************************/
        /**
         * Gets order line items (products) as an array of objects.
         *
         * Object properties:
         *
         * + id          - item ID
         * + name        - item name, usually product title, processed through htmlentities()
         * + description - formatted item meta (e.g. Size: Medium, Color: blue), processed through htmlentities()
         * + quantity    - item quantity
         * + item_total  - item total (line total divided by quantity, excluding tax & rounded)
         * + line_total  - line item total (excluding tax & rounded)
         * + meta        - formatted item meta array
         * + product     - item product or null if getting product from item failed
         * + item        - raw item array
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order
         * @return \stdClass[] array of line item objects
         */
        public static function get_order_line_items($order)
        {
        }
        /**
         * Determines if an order contains only virtual products.
         *
         * @since 4.5.0
         *
         * @param \WC_Order $order the order object
         * @return bool
         */
        public static function is_order_virtual(\WC_Order $order)
        {
        }
        /**
         * Determines if a shop has any published virtual products.
         *
         * @since 5.10.0
         *
         * @return bool
         */
        public static function shop_has_virtual_products()
        {
        }
        /**
         * Safely gets and trims data from $_POST.
         *
         * @since 3.0.0
         * @deprecated 5.5.0
         *
         * @param string $key array key to get from $_POST array
         * @return string value from $_POST or blank string if $_POST[ $key ] is not set
         */
        public static function get_post($key)
        {
        }
        /**
         * Safely gets a value from $_POST.
         *
         * If the expected data is a string also trims it.
         *
         * @since 5.5.0
         *
         * @param string $key posted data key
         * @param int|float|array|bool|null|string $default default data type to return (default empty string)
         * @return int|float|array|bool|null|string posted data value if key found, or default
         */
        public static function get_posted_value($key, $default = '')
        {
        }
        /**
         * Safely gets and trims data from $_REQUEST.
         *
         * @since 3.0.0
         * @deprecated 5.5.0
         *
         * @param string $key array key to get from $_REQUEST array
         * @return string value from $_REQUEST or blank string if $_REQUEST[ $key ] is not set
         */
        public static function get_request($key)
        {
        }
        /**
         * Safely gets a value from $_REQUEST.
         *
         * If the expected data is a string also trims it.
         *
         * @since 5.5.0
         *
         * @param string $key posted data key
         * @param int|float|array|bool|null|string $default default data type to return (default empty string)
         * @return int|float|array|bool|null|string posted data value if key found, or default
         */
        public static function get_requested_value($key, $default = '')
        {
        }
        /**
         * Get the count of notices added, either for all notices (default) or for one
         * particular notice type specified by $notice_type.
         *
         * WC notice functions are not available in the admin
         *
         * @since 3.0.2
         * @param string $notice_type The name of the notice type - either error, success or notice. [optional]
         * @return int
         */
        public static function wc_notice_count($notice_type = '')
        {
        }
        /**
         * Add and store a notice.
         *
         * WC notice functions are not available in the admin
         *
         * @since 3.0.2
         * @param string $message The text to display in the notice.
         * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
         */
        public static function wc_add_notice($message, $notice_type = 'success')
        {
        }
        /**
         * Print a single notice immediately
         *
         * WC notice functions are not available in the admin
         *
         * @since 3.0.2
         * @param string $message The text to display in the notice.
         * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
         */
        public static function wc_print_notice($message, $notice_type = 'success')
        {
        }
        /**
         * Gets the full URL to the log file for a given $handle
         *
         * @since 4.0.0
         * @param string $handle log handle
         * @return string URL to the WC log file identified by $handle
         */
        public static function get_wc_log_file_url($handle)
        {
        }
        /**
         * Gets the current WordPress site name.
         *
         * This is helpful for retrieving the actual site name instead of the
         * network name on multisite installations.
         *
         * @since 4.6.0
         * @return string
         */
        public static function get_site_name()
        {
        }
        /** JavaScript helper functions ***************************************/
        /**
         * Enhanced search JavaScript (Select2)
         *
         * Enqueues JavaScript required for AJAX search with Select2.
         *
         * @codeCoverageIgnore no need to unit test this since it's mostly JavaScript
         *
         * @since 3.1.0
         */
        public static function render_select2_ajax()
        {
        }
        /** Framework translation functions ***********************************/
        /**
         * Gettext `__()` wrapper for framework-translated strings
         *
         * Warning! This function should only be used if an existing
         * translation from the framework is to be used. It should
         * never be called for plugin-specific or untranslated strings!
         * Untranslated = not registered via string literal.
         *
         * @since 4.1.0
         * @param string $text
         * @return string translated text
         */
        public static function f__($text)
        {
        }
        /**
         * Gettext `_e()` wrapper for framework-translated strings
         *
         * Warning! This function should only be used if an existing
         * translation from the framework is to be used. It should
         * never be called for plugin-specific or untranslated strings!
         * Untranslated = not registered via string literal.
         *
         * @since 4.1.0
         * @param string $text
         */
        public static function f_e($text)
        {
        }
        /**
         * Gettext `_x()` wrapper for framework-translated strings
         *
         * Warning! This function should only be used if an existing
         * translation from the framework is to be used. It should
         * never be called for plugin-specific or untranslated strings!
         * Untranslated = not registered via string literal.
         *
         * @since 4.1.0
         *
         * @param string $text
         * @param string $context
         * @return string translated text
         */
        public static function f_x($text, $context)
        {
        }
        /** Misc functions ****************************************************/
        /**
         * Gets the WordPress current screen.
         *
         * @see get_current_screen() replacement which is always available, unlike the WordPress core function
         *
         * @since 5.4.2
         *
         * @return \WP_Screen|null
         */
        public static function get_current_screen()
        {
        }
        /**
         * Checks if the current screen matches a specified ID.
         *
         * This helps avoiding using the get_current_screen() function which is not always available,
         * or setting the substitute global $current_screen every time a check needs to be performed.
         *
         * @since 5.4.2
         *
         * @param string $id id (or property) to compare
         * @param string $prop optional property to compare, defaults to screen id
         * @return bool
         */
        public static function is_current_screen($id, $prop = 'id')
        {
        }
        /**
         * Determines if viewing an enhanced admin screen.
         *
         * @since 5.6.0
         *
         * @return bool
         */
        public static function is_enhanced_admin_screen()
        {
        }
        /**
         * Determines whether the new WooCommerce enhanced navigation is supported and enabled.
         *
         * @since 5.10.6
         *
         * @return bool
         */
        public static function is_wc_navigation_enabled()
        {
        }
        /**
         * Determines if the current request is for a WC REST API endpoint.
         *
         * @see \WooCommerce::is_rest_api_request()
         *
         * @since 5.9.0
         *
         * @return bool
         */
        public static function is_rest_api_request()
        {
        }
        /**
         * Convert a 2-character country code into its 3-character equivalent, or
         * vice-versa, e.g.
         *
         * 1) given USA, returns US
         * 2) given US, returns USA
         *
         * @since 4.2.0
         * @deprecated 5.4.3
         *
         * @param string $code ISO-3166-alpha-2 or ISO-3166-alpha-3 country code
         * @return string country code
         */
        public static function convert_country_code($code)
        {
        }
        /**
         * Displays a notice if the provided hook has not yet run.
         *
         * @since 5.2.0
         *
         * @param string $hook action hook to check
         * @param string $method method/function name
         * @param string $version version the notice was added
         */
        public static function maybe_doing_it_early($hook, $method, $version)
        {
        }
        /**
         * Triggers a PHP error.
         *
         * This wrapper method ensures AJAX isn't broken in the process.
         *
         * @since 4.6.0
         * @param string $message the error message
         * @param int $type Optional. The error type. Defaults to E_USER_NOTICE
         */
        public static function trigger_error($message, $type = E_USER_NOTICE)
        {
        }
        /**
         * Converts an array of strings to a comma separated list of strings, escaped for SQL use.
         *
         * This can be safely used in SQL IN clauses.
         *
         * @since 5.10.9
         *
         * @param string[] $values
         * @return string
         */
        public static function get_escaped_string_list(array $values)
        {
        }
        /**
         * Converts an array of numerical integers into a comma separated list of IDs.
         *
         * This can be safely used for SQL IN clauses.
         *
         * @since 5.10.9
         *
         * @param int[] $ids
         * @return string
         */
        public static function get_escaped_id_list(array $ids)
        {
        }
    }
    /**
     * Plugin Framework Exception - generic Exception
     */
    class SV_WC_Plugin_Exception extends \Exception
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\Admin {
    /**
     * Helper class for WooCommerce enhanced admin notes.
     *
     * @since 5.6.0
     */
    class Notes_Helper
    {
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines if any notes with the given name exist.
         *
         * @since 5.6.0
         *
         * @param string $name note name
         * @return bool
         */
        public static function note_with_name_exists($name)
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets a note with the given name.
         *
         * @since 5.6.0
         *
         * @param string $name name of the note to get
         * @return WooCommerce_Admin_Notes\WC_Admin_Note|null
         */
        public static function get_note_with_name($name)
        {
        }
        /**
         * Gets all notes with the given name.
         *
         * @since 5.6.0
         *
         * @param string $name note name
         * @return int[]
         */
        public static function get_note_ids_with_name($name)
        {
        }
        /**
         * Gets all note IDs from the given source.
         *
         * @since 5.6.1
         *
         * @param string $source note source
         * @return int[]
         */
        public static function get_note_ids_with_source($source)
        {
        }
        /**
         * Deletes all notes from the given source.
         *
         * @since 5.6.1
         *
         * @param string $source source name
         */
        public static function delete_notes_with_source($source)
        {
        }
    }
    /**
     * The plugin Setup Wizard class.
     *
     * This creates a setup wizard so that plugins can provide a user-friendly
     * step-by-step interaction for configuring critical plugin options.
     *
     * Based on WooCommerce's \WC_Admin_Setup_Wizard
     *
     * @since 5.2.2
     */
    abstract class Setup_Wizard
    {
        /** the "finish" step ID */
        const ACTION_FINISH = 'finish';
        /** @var string the user capability required to use this wizard */
        protected $required_capability = 'manage_woocommerce';
        /** @var string the current step ID */
        protected $current_step = '';
        /** @var array registered steps to be displayed */
        protected $steps = array();
        /** @var string setup handler ID  */
        private $id;
        /** @var Framework\SV_WC_Plugin plugin instance */
        private $plugin;
        /**
         * Constructs the class.
         *
         * @param Framework\SV_WC_Plugin $plugin plugin instance
         */
        public function __construct(\SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Plugin $plugin)
        {
        }
        /**
         * Registers the setup steps.
         *
         * Plugins should extend this to register their own steps.
         *
         * @since 5.2.2
         */
        protected abstract function register_steps();
        /**
         * Adds the action & filter hooks.
         *
         * @since 5.2.2
         */
        protected function add_hooks()
        {
        }
        /**
         * Adds any admin notices.
         *
         * @since 5.2.2
         */
        public function add_admin_notices()
        {
        }
        /**
         * Gets the new installation documentation notice message.
         *
         * This prompts users to read the docs and is displayed if the wizard has
         * already been completed.
         *
         * @since 5.2.2
         *
         * @return string
         */
        protected function get_documentation_notice_message()
        {
        }
        /**
         * Gets the new installation setup notice message.
         *
         * This prompts users to start the setup wizard and is displayed if the
         * wizard has not yet been completed.
         *
         * @since 5.2.2
         *
         * @return string
         */
        protected function get_setup_notice_message()
        {
        }
        /**
         * Adds a 'Setup' link to the plugin action links if the wizard hasn't been completed.
         *
         * This will override the plugin's standard "Configure" link with a link to this setup wizard.
         *
         * @internal
         *
         * @since 5.2.2
         *
         * @param array $action_links plugin action links
         * @return array
         */
        public function add_setup_link($action_links)
        {
        }
        /**
         * Initializes setup.
         *
         * @since 5.2.2
         */
        protected function init_setup()
        {
        }
        /**
         * Adds the page to WordPress core.
         *
         * While this doesn't output any markup/menu items, it is essential to officially register the page to avoid permissions issues.
         *
         * @internal
         *
         * @since 5.2.2
         */
        public function add_page()
        {
        }
        /**
         * Renders the entire setup page markup.
         *
         * @internal
         *
         * @since 5.2.2
         */
        public function render_page()
        {
        }
        /**
         * Saves a step.
         *
         * @since 5.2.2
         *
         * @param string $step_id the step ID being saved
         * @return void|string redirects upon success, returns an error message upon failure
         */
        protected function save_step($step_id)
        {
        }
        /**
         * Registers and enqueues the wizard's scripts and styles.
         *
         * @since 5.2.2
         */
        protected function load_scripts_styles()
        {
        }
        /** Header Methods ************************************************************************************************/
        /**
         * Renders the header markup.
         *
         * @since 5.2.2
         */
        protected function render_header()
        {
        }
        /**
         * Gets the header image URL.
         *
         * Plugins can override this to point to their own branding image URL.
         *
         * @since 5.2.2
         *
         * @return string
         */
        protected function get_header_image_url()
        {
        }
        /**
         * Renders the step list.
         *
         * This displays a list of steps, marking them as complete or upcoming as sort of a progress bar.
         *
         * @since 5.2.2
         */
        protected function render_steps()
        {
        }
        /** Content Methods ***********************************************************************************************/
        /**
         * Renders the setup content.
         *
         * This will display the welcome screen, finished screen, or a specific step's markup.
         *
         * @since 5.2.2
         *
         * @param string $error_message custom error message
         */
        protected function render_content($error_message = '')
        {
        }
        /**
         * Renders a save error.
         *
         * @since 5.2.2
         *
         * @param string $message error message to render
         */
        protected function render_error($message)
        {
        }
        /**
         * Renders a default welcome note.
         *
         * @since 5.2.2
         */
        protected function render_welcome()
        {
        }
        /**
         * Renders the default welcome note heading.
         *
         * @since 5.2.2
         */
        protected function render_welcome_heading()
        {
        }
        /**
         * Renders the default welcome note text.
         *
         * @since 5.2.2
         */
        protected function render_welcome_text()
        {
        }
        /**
         * Renders the finished screen markup.
         *
         * This is what gets displayed after all of the steps have been completed or skipped.
         *
         * @since 5.2.2
         */
        protected function render_finished()
        {
        }
        /**
         * Renders HTML before the next steps in the finished step screen.
         *
         * Plugins can implement this method to output additional HTML before the next steps are printed.
         *
         * @since 5.2.2
         */
        protected function render_before_next_steps()
        {
        }
        /**
         * Renders HTML after the next steps in the finished step screen.
         *
         * Plugins can implement this method to output additional HTML after the next steps are printed.
         *
         * @since 5.2.2
         */
        protected function render_after_next_steps()
        {
        }
        /**
         * Renders the next steps.
         *
         * @since 5.2.2
         */
        protected function render_next_steps()
        {
        }
        /**
         * Gets the next steps.
         *
         * These are major actions a user can take after finishing the setup wizard.
         * For instance, things like "Create your first Add-On" could go here.
         *
         * @since 5.2.2
         *
         * @return array
         */
        protected function get_next_steps()
        {
        }
        /**
         * Gets the additional steps.
         *
         * These are secondary actions.
         *
         * @since 5.2.2
         *
         * @return array
         */
        protected function get_additional_actions()
        {
        }
        /**
         * Renders a given step's markup.
         *
         * This will display a title, whatever get's rendered by the step's view
         * callback, then the navigation buttons.
         *
         * @since 5.2.2
         *
         * @param string $step_id step ID to render
         */
        protected function render_step($step_id)
        {
        }
        /**
         * Renders a form field.
         *
         * Call this in the same way as woocommerce_form_field().
         *
         * @since 5.2.2
         *
         * @param string $key field key
         * @param array $args field args - @see woocommerce_form_field()
         * @param string|null $value field value
         */
        protected function render_form_field($key, $args, $value = null)
        {
        }
        /**
         * Renders the toggle form field.
         *
         * This requires special markup for the toggle UI.
         *
         * @since 5.2.2
         *
         * @param string $key field key
         * @param array $args field args - @see woocommerce_form_field()
         * @param string|null $value field value
         */
        public function render_toggle_form_field($key, $args, $value)
        {
        }
        /**
         * Renders the setup footer.
         *
         * @since 5.2.2
         */
        protected function render_footer()
        {
        }
        /** Helper Methods ************************************************************************************************/
        /**
         * Registers a step.
         *
         * @since 5.2.2
         *
         * @param string $id unique step ID
         * @param string $name step name for display
         * @param string|array $view_callback callback to render the step's content HTML
         * @param string|array|null $save_callback callback to save the step's form values
         * @return bool whether the step was successfully added
         */
        public function register_step($id, $name, $view_callback, $save_callback = null)
        {
        }
        /**
         * Marks the setup as complete.
         *
         * @since 5.2.2
         *
         * @return bool
         */
        public function complete_setup()
        {
        }
        /** Conditional Methods *******************************************************************************************/
        /**
         * Determines if the current page is the setup wizard page.
         *
         * @since 5.2.2
         *
         * @return bool
         */
        public function is_setup_page()
        {
        }
        /**
         * Determines if a step is the current one displayed.
         *
         * @since 5.2.2
         *
         * @param string $step_id step ID
         * @return bool
         */
        public function is_current_step($step_id)
        {
        }
        /**
         * Determines if setup has started.
         *
         * @since 5.2.2
         *
         * @return bool
         */
        public function is_started()
        {
        }
        /**
         * Determines if setup has completed all of the steps.
         *
         * @since 5.2.2
         *
         * @return bool
         */
        public function is_finished()
        {
        }
        /**
         * Determines if the setup wizard has been completed.
         *
         * This will be true if any user has been redirected back to the regular
         * WordPress dashboard, either manually or after finishing the steps.
         *
         * @since 5.2.2
         *
         * @return bool
         */
        public function is_complete()
        {
        }
        /**
         * Determines if the given step has been completed.
         *
         * @since 5.2.2
         *
         * @param string $step_id step ID to check
         * @return bool
         */
        public function is_step_complete($step_id)
        {
        }
        /**
         * Determines if the wizard has steps to display.
         *
         * @since 5.2.2
         *
         * @return bool
         */
        public function has_steps()
        {
        }
        /**
         * Determines if this setup handler has a given step.
         *
         * @since 5.2.2
         *
         * @param string $step_id step ID to check
         * @return bool
         */
        public function has_step($step_id)
        {
        }
        /** Getter Methods ************************************************************************************************/
        /**
         * Gets a given step's title.
         *
         * @since 5.2.2
         *
         * @param string $step_id step ID (optional: will assume the current step if unspecified)
         * @return string
         */
        public function get_step_title($step_id = '')
        {
        }
        /**
         * Gets the Setup Wizard URL.
         *
         * @since 5.2.2
         *
         * @return string
         */
        public function get_setup_url()
        {
        }
        /**
         * Gets the URL for the next step based on a current step.
         *
         * @since 5.2.2
         *
         * @param string $step_id step ID to base "next" off of - defaults to this class's internal pointer
         * @return string
         */
        public function get_next_step_url($step_id = '')
        {
        }
        /**
         * Gets a given step's URL.
         *
         * @since 5.2.2
         *
         * @param string $step_id step ID
         * @return string|false
         */
        public function get_step_url($step_id)
        {
        }
        /**
         * Gets the "finish" action URL.
         *
         * @since 5.2.2
         *
         * @return string
         */
        protected function get_finish_url()
        {
        }
        /**
         * Gets the return URL.
         *
         * Can be used to return the user to the dashboard. The plugin's settings URL
         * will be used if it exists, otherwise the general dashboard URL.
         *
         * @since 5.2.2
         *
         * @return string
         */
        protected function get_dashboard_url()
        {
        }
        /**
         * Gets the setup setup handler's slug.
         *
         * @since 5.2.2
         *
         * @return string
         */
        protected function get_slug()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 5.2.2
         *
         * @return Framework\SV_WC_Plugin|Framework\SV_WC_Payment_Gateway_Plugin
         */
        protected function get_plugin()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * # WordPress Admin Message Handler Class
     *
     * This class provides a reusable wordpress admin messaging facility for setting
     * and displaying messages and error messages across admin page requests without
     * resorting to passing the messages as query vars.
     *
     * ## Usage
     *
     * To use simple instantiate the class then set one or more messages:
     *
     * `
     * $admin_message_handler = new WP_Admin_Message_Handler( __FILE__ );
     * $admin_message_handler->add_message( 'Hello World!' );
     * `
     *
     * Then show the messages wherever you need, either with the built-in method
     * or by writing your own:
     *
     * `$admin_message_handler->show_messages();`
     *
     * @version 1.0.1
     */
    class SV_WP_Admin_Message_Handler
    {
        /** transient message prefix */
        const MESSAGE_TRANSIENT_PREFIX = '_wp_admin_message_';
        /** the message id GET name */
        const MESSAGE_ID_GET_NAME = 'wpamhid';
        /** @var string unique message identifier, defaults to __FILE__ unless otherwise set */
        private $message_id;
        /** @var array array of messages */
        private $messages = array();
        /** @var array array of error messages */
        private $errors = array();
        /** @var array array of warning messages */
        private $warnings = array();
        /** @var array array of info messages */
        private $infos = array();
        /**
         * Construct and initialize the admin message handler class
         *
         * @since 1.0.0
         * @param string $message_id optional message id.  Best practice is to set
         *        this to a unique identifier based on the client plugin, such as __FILE__
         */
        public function __construct($message_id = null)
        {
        }
        /**
         * Persist messages
         *
         * @since 1.0.0
         * @return boolean true if any messages were set, false otherwise
         */
        public function set_messages()
        {
        }
        /**
         * Loads messages
         *
         * @since 1.0.0
         */
        public function load_messages()
        {
        }
        /**
         * Clear messages and errors
         *
         * @since 1.0.0
         * @param string $id the messages identifier
         */
        public function clear_messages($id)
        {
        }
        /**
         * Add an error message.
         *
         * @since 1.0.0
         * @param string $error error message
         */
        public function add_error($error)
        {
        }
        /**
         * Adds a warning message.
         *
         * @since 5.1.0
         *
         * @param string $message warning message to add
         */
        public function add_warning($message)
        {
        }
        /**
         * Adds a info message.
         *
         * @since 5.1.0
         *
         * @param string $message info message to add
         */
        public function add_info($message)
        {
        }
        /**
         * Add a message.
         *
         * @since 1.0.0
         * @param string $message the message to add
         */
        public function add_message($message)
        {
        }
        /**
         * Get error count.
         *
         * @since 1.0.0
         * @return int error message count
         */
        public function error_count()
        {
        }
        /**
         * Gets the warning message count.
         *
         * @since 5.1.0
         *
         * @return int warning message count
         */
        public function warning_count()
        {
        }
        /**
         * Gets the info message count.
         *
         * @since 5.1.0
         *
         * @return int info message count
         */
        public function info_count()
        {
        }
        /**
         * Get message count.
         *
         * @since 1.0.0
         * @return int message count
         */
        public function message_count()
        {
        }
        /**
         * Get error messages
         *
         * @since 1.0.0
         * @return array of error message strings
         */
        public function get_errors()
        {
        }
        /**
         * Get an error message
         *
         * @since 1.0.0
         * @param int $index the error index
         * @return string the error message
         */
        public function get_error($index)
        {
        }
        /**
         * Gets all warning messages.
         *
         * @since 5.1.0
         *
         * @return array
         */
        public function get_warnings()
        {
        }
        /**
         * Gets a specific warning message.
         *
         * @since 5.1.0
         *
         * @param int $index warning message index
         * @return string
         */
        public function get_warning($index)
        {
        }
        /**
         * Gets all info messages.
         *
         * @since 5.1.0
         *
         * @return array
         */
        public function get_infos()
        {
        }
        /**
         * Gets a specific info message.
         *
         * @since 5.0.0
         *
         * @param int $index info message index
         * @return string
         */
        public function get_info($index)
        {
        }
        /**
         * Get messages
         *
         * @since 1.0.0
         * @return array of message strings
         */
        public function get_messages()
        {
        }
        /**
         * Get a message
         *
         * @since 1.0.0
         * @param int $index the message index
         * @return string the message
         */
        public function get_message($index)
        {
        }
        /**
         * Render the errors and messages.
         *
         * @since 1.0.0
         * @param array $params {
         *     Optional parameters.
         *
         *     @type array $capabilities Any user capabilities to check if the user is allowed to view the messages,
         *                               default: `manage_woocommerce`
         * }
         */
        public function show_messages($params = array())
        {
        }
        /**
         * Redirection hook which persists messages into session data.
         *
         * @since 1.0.0
         * @param string $location the URL to redirect to
         * @param int $status the http status
         * @return string the URL to redirect to
         */
        public function redirect($location, $status)
        {
        }
        /**
         * Generate a unique id to identify the messages
         *
         * @since 1.0.0
         * @return string unique identifier
         */
        protected function get_message_id()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\Settings_API {
    /**
     * The base setting object.
     *
     * @since 5.7.0
     */
    class Setting
    {
        /** @var string the string setting type */
        const TYPE_STRING = 'string';
        /** @var string the URL setting type */
        const TYPE_URL = 'url';
        /** @var string the email setting type */
        const TYPE_EMAIL = 'email';
        /** @var string the integer setting type */
        const TYPE_INTEGER = 'integer';
        /** @var string the float setting type */
        const TYPE_FLOAT = 'float';
        /** @var string the boolean setting type */
        const TYPE_BOOLEAN = 'boolean';
        /** @var string unique setting ID */
        protected $id;
        /** @var string setting type */
        protected $type;
        /** @var string setting name */
        protected $name;
        /** @var string setting description */
        protected $description;
        /** @var bool whether the setting holds an array of multiple values */
        protected $is_multi = false;
        /** @var array valid setting options */
        protected $options = [];
        /** @var int|float|string|bool|array setting default value */
        protected $default;
        /** @var int|float|string|bool|array setting current value */
        protected $value;
        /** @var Control control object */
        protected $control;
        /** Getter Methods ************************************************************************************************/
        /**
         * Gets the setting ID.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_id()
        {
        }
        /**
         * Gets the setting type.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_type()
        {
        }
        /**
         * Gets the setting name.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Gets the setting description.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Returns whether the setting holds an array of multiple values.
         *
         * @since 5.7.0
         *
         * @return bool
         */
        public function is_is_multi()
        {
        }
        /**
         * Gets the setting options.
         *
         * @since 5.7.0
         *
         * @return array
         */
        public function get_options()
        {
        }
        /**
         * Gets the setting default value.
         *
         * @since 5.7.0
         *
         * @return array|bool|float|int|string|null
         */
        public function get_default()
        {
        }
        /**
         * Gets the setting current value.
         *
         * @since 5.7.0
         *
         * @return array|bool|float|int|string
         */
        public function get_value()
        {
        }
        /**
         * Gets the setting control.
         *
         * @since 5.7.0
         *
         * @return Control
         */
        public function get_control()
        {
        }
        /** Setter Methods ************************************************************************************************/
        /**
         * Sets the setting ID.
         *
         * @since 5.7.0
         *
         * @param string $id
         */
        public function set_id($id)
        {
        }
        /**
         * Sets the setting type.
         *
         * @since 5.7.0
         *
         * @param string $type
         */
        public function set_type($type)
        {
        }
        /**
         * Sets the setting name.
         *
         * @since 5.7.0
         *
         * @param string $name
         */
        public function set_name($name)
        {
        }
        /**
         * Sets the setting description.
         *
         * @since 5.7.0
         *
         * @param string $description
         */
        public function set_description($description)
        {
        }
        /**
         * Sets whether the setting holds an array of multiple values.
         *
         * @since 5.7.0
         *
         * @param bool $is_multi
         */
        public function set_is_multi($is_multi)
        {
        }
        /**
         * Sets the setting options.
         *
         * @since 5.7.0
         *
         * @param array $options
         */
        public function set_options($options)
        {
        }
        /**
         * Sets the setting default value.
         *
         * @since 5.7.0
         *
         * @param array|bool|float|int|string|null $value default value to set
         */
        public function set_default($value)
        {
        }
        /**
         * Sets the setting current value.
         *
         * @since 5.7.0
         *
         * @param array|bool|float|int|string $value
         */
        public function set_value($value)
        {
        }
        /**
         * Sets the setting control.
         *
         * @since 5.7.0
         *
         * @param Control $control
         */
        public function set_control($control)
        {
        }
        /**
         * Sets the setting current value, after validating it against the type and, if set, options.
         *
         * @since 5.7.0
         *
         * @param array|bool|float|int|string $value
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function update_value($value)
        {
        }
        /**
         * Validates the setting value.
         *
         * @since 5.7.0
         *
         * @param array|bool|float|int|string $value
         * @return bool
         */
        public function validate_value($value)
        {
        }
        /**
         * Validates a string value.
         *
         * @since 5.7.0
         *
         * @param array|bool|float|int|string $value value to validate
         * @return bool
         */
        protected function validate_string_value($value)
        {
        }
        /**
         * Validates a URL value.
         *
         * @since 5.7.0
         *
         * @param array|bool|float|int|string $value value to validate
         * @return bool
         */
        protected function validate_url_value($value)
        {
        }
        /**
         * Validates an email value.
         *
         * @since 5.7.0
         *
         * @param mixed $value value to validate
         * @return bool
         */
        protected function validate_email_value($value)
        {
        }
        /**
         * Validates an integer value.
         *
         * @since 5.7.0
         *
         * @param mixed $value value to validate
         * @return bool
         */
        public function validate_integer_value($value)
        {
        }
        /**
         * Validates a float value.
         *
         * @since 5.7.0
         *
         * @param mixed $value value to validate
         * @return bool
         */
        protected function validate_float_value($value)
        {
        }
        /**
         * Validates a boolean value.
         *
         * @since 5.7.0
         *
         * @param mixed $value value to validate
         * @return bool
         */
        protected function validate_boolean_value($value)
        {
        }
    }
    /**
     * The base settings handler.
     *
     * @since 5.7.0
     */
    abstract class Abstract_Settings
    {
        /** @var string settings ID */
        public $id;
        /** @var Setting[] registered settings */
        protected $settings = [];
        /**
         * Constructs the class.
         *
         * @since 5.7.0
         *
         * @param string $id the ID of plugin or payment gateway that owns these settings
         */
        public function __construct($id)
        {
        }
        /**
         * Registers the settings.
         *
         * Plugins or payment gateways should overwrite this method to register their settings.
         *
         * @since 5.7.0
         */
        protected abstract function register_settings();
        /**
         * Loads the values for all registered settings.
         *
         * @since 5.7.0
         */
        protected function load_settings()
        {
        }
        /**
         * Registers a setting.
         *
         * @param string $id unique setting ID
         * @param string $type setting type
         * @param array $args setting arguments
         * @return bool
         */
        public function register_setting($id, $type, array $args = [])
        {
        }
        /**
         * Unregisters a setting.
         *
         * @since 5.7.0
         *
         * @param string $id setting ID to unregister
         */
        public function unregister_setting($id)
        {
        }
        /**
         * Registers a control for a setting.
         *
         * @since 5.7.0
         *
         * @param string $setting_id the setting ID
         * @param string $type the control type
         * @param array $args optional args for the control
         * @return bool
         */
        public function register_control($setting_id, $type, array $args = [])
        {
        }
        /**
         * Gets the settings ID.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_id()
        {
        }
        /**
         * Gets registered settings.
         *
         * It returns all settings by default, but you can pass an array of IDs to filter the results.
         *
         * @param string[] $ids setting IDs to get
         * @return Setting[]
         */
        public function get_settings(array $ids = [])
        {
        }
        /**
         * Gets a setting object.
         *
         * @since 5.7.0
         *
         * @param string $id setting ID to get
         * @return Setting|null
         */
        public function get_setting($id)
        {
        }
        /**
         * Gets the stored value for a setting.
         *
         * Optionally, will return the setting's default value if nothing is stored.
         *
         * @since 5.7.0
         *
         * @param string $setting_id setting ID
         * @param bool $with_default whether to return the default value if nothing is stored
         * @return array|bool|float|int|string
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function get_value($setting_id, $with_default = true)
        {
        }
        /**
         * Updates the stored value for a setting.
         *
         * @since 5.7.0
         *
         * @param string $setting_id setting ID
         * @param array|bool|float|int|string $value
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function update_value($setting_id, $value)
        {
        }
        /**
         * Deletes the stored value for a setting.
         *
         * @since 5.7.0
         *
         * @param string $setting_id setting ID
         * @return bool
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function delete_value($setting_id)
        {
        }
        /**
         * Saves registered settings in their current state.
         *
         * It saves all settings by default, but you can pass a setting ID to save a specific setting.
         *
         * @since 5.7.0
         *
         * @param string $setting_id setting ID
         */
        public function save($setting_id = '')
        {
        }
        /**
         * Converts the value of a setting to be stored in an option.
         *
         * @since 5.7.0
         *
         * @param Setting $setting
         * @return mixed
         */
        protected function get_value_for_database(\SkyVerge\WooCommerce\PluginFramework\v5_10_12\Settings_API\Setting $setting)
        {
        }
        /**
         * Converts the stored value of a setting to the proper setting type.
         *
         * @since 5.7.0
         *
         * @param mixed $value the value stored in an option
         * @param Setting $setting
         * @return mixed
         */
        protected function get_value_from_database($value, \SkyVerge\WooCommerce\PluginFramework\v5_10_12\Settings_API\Setting $setting)
        {
        }
        /**
         * Gets the list of valid setting types.
         *
         * @since 5.7.0
         *
         * @return string[]
         */
        public function get_setting_types()
        {
        }
        /**
         * Gets the list of valid control types.
         *
         * @since 5.7.0
         *
         * @return string[]
         */
        public function get_control_types()
        {
        }
        /**
         * Returns the valid control types for a setting.
         *
         * @since 5.7.0
         *
         * @param Setting $setting setting object
         * @return string[]
         */
        public function get_setting_control_types($setting)
        {
        }
        /**
         * Gets the prefix for db option names.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_option_name_prefix()
        {
        }
    }
    /**
     * The base control object.
     *
     * @since 5.7.0
     */
    class Control
    {
        /** @var string the text control type */
        const TYPE_TEXT = 'text';
        /** @var string the textarea control type */
        const TYPE_TEXTAREA = 'textarea';
        /** @var string the number control type */
        const TYPE_NUMBER = 'number';
        /** @var string the email control type */
        const TYPE_EMAIL = 'email';
        /** @var string the password control type */
        const TYPE_PASSWORD = 'password';
        /** @var string the date control type */
        const TYPE_DATE = 'date';
        /** @var string the checkbox control type */
        const TYPE_CHECKBOX = 'checkbox';
        /** @var string the radio control type */
        const TYPE_RADIO = 'radio';
        /** @var string the select control type */
        const TYPE_SELECT = 'select';
        /** @var string the file control type */
        const TYPE_FILE = 'file';
        /** @var string the color control type */
        const TYPE_COLOR = 'color';
        /** @var string the range control type */
        const TYPE_RANGE = 'range';
        /** @var string|null the setting ID to which this control belongs */
        protected $setting_id;
        /** @var string|null the control type */
        protected $type;
        /** @var string the control name */
        protected $name = '';
        /** @var string the control description */
        protected $description = '';
        /** @var array the control options, as $option => $label  */
        protected $options = [];
        /** Getter methods ************************************************************************************************/
        /**
         * The setting ID to which this control belongs.
         *
         * @since 5.7.0
         *
         * @return null|string
         */
        public function get_setting_id()
        {
        }
        /**
         * Gets the control type.
         *
         * @since 5.7.0
         *
         * @return null|string
         */
        public function get_type()
        {
        }
        /**
         * Gets the control name.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Gets the control description.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Gets the control options.
         *
         * As $option => $label for display.
         *
         * @since 5.7.0
         *
         * @return array
         */
        public function get_options()
        {
        }
        /** Setter methods ************************************************************************************************/
        /**
         * Sets the setting ID.
         *
         * @since 5.7.0
         *
         * @param string $value setting ID to set
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function set_setting_id($value)
        {
        }
        /**
         * Sets the type.
         *
         * @since 5.7.0
         *
         * @param string $value setting ID to set
         * @param string[] $valid_types allowed control types
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function set_type($value, array $valid_types = [])
        {
        }
        /**
         * Sets the name.
         *
         * @since 5.7.0
         *
         * @param string $value control name to set
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function set_name($value)
        {
        }
        /**
         * Sets the description.
         *
         * @since 5.7.0
         *
         * @param string $value control description to set
         * @throws Framework\SV_WC_Plugin_Exception
         */
        public function set_description($value)
        {
        }
        /**
         * Sets the options.
         *
         * @since 5.7.0
         *
         * @param array $options options to set
         * @param array $valid_options valid option keys to check against
         */
        public function set_options(array $options, array $valid_options = [])
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\Handlers {
    /**
     * Script Handler Abstract Class
     *
     * Handles initializing the payment registered JavaScripts
     *
     * @since 5.7.0
     */
    abstract class Script_Handler
    {
        /** @var string JS handler base class name, without the FW version */
        protected $js_handler_base_class_name = '';
        /**
         * Script_Handler constructor.
         *
         * @since 5.7.0
         */
        public function __construct()
        {
        }
        /**
         * Adds the action and filter hooks.
         *
         * @since 5.7.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Returns the JS handler class name.
         *
         * @since 5.7.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Returns the JS handler object name.
         *
         * @since 5.7.0
         *
         * @return string
         */
        protected function get_js_handler_object_name()
        {
        }
        /**
         * Gets the JS event triggered after the JS handler class is loaded.
         *
         * @since 5.7.0
         *
         * @return string
         */
        protected function get_js_loaded_event()
        {
        }
        /**
         * Gets the handler instantiation JS wrapped in a safe load technique.
         *
         * @since 5.7.0
         *
         * @param array $additional_args additional handler arguments, if any
         * @param string $handler_name handler name, if different from self::get_js_handler_class_name()
         * @param string $object_name object name, if different from self::get_js_handler_object_name()
         * @return string
         */
        protected function get_safe_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
        {
        }
        /**
         * Gets the handler instantiation JS.
         *
         * @since 5.7.0
         *
         * @param array $additional_args additional handler arguments, if any
         * @param string $handler_name handler name, if different from self::get_js_handler_class_name()
         * @param string $object_name object name, if different from self::get_js_handler_object_name()
         * @return string
         */
        protected function get_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
        {
        }
        /**
         * Gets the JS handler arguments.
         *
         * @since 5.7.0
         *
         * @return array
         */
        protected function get_js_handler_args()
        {
        }
        /**
         * Gets inline JavaScript code to issue an AJAX request to log a script error event.
         *
         * @since 5.7.0
         *
         * @return string
         */
        protected function get_js_handler_event_debug_log_request()
        {
        }
        /**
         * Logs an event via AJAX.
         *
         * @internal
         *
         * @since 5.7.0
         */
        public function ajax_log_event()
        {
        }
        /**
         * Adds a log entry.
         *
         * @since 5.7.0
         *
         * @param string $message message to log
         */
        protected abstract function log_event($message);
        /** Conditional methods *******************************************************************************************/
        /**
         * Determines whether logging is enabled.
         *
         * @since 5.7.0
         *
         * @return bool
         */
        protected function is_logging_enabled()
        {
        }
        /** Getter methods ************************************************************************************************/
        /**
         * Gets the ID of this script handler.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public abstract function get_id();
        /**
         * Gets the ID, but dasherized.
         *
         * @since 5.7.0
         *
         * @return string
         */
        public function get_id_dasherized()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\Addresses {
    /**
     * The base address data class.
     *
     * This serves as a standard address object to be passed around by plugins whenever dealing with address data.
     * Eliminates the need to rely on WooCommerce's address arrays.
     *
     * @since 5.3.0
     */
    class Address
    {
        /** @var string line 1 of the street address */
        protected $line_1 = '';
        /** @var string line 2 of the street address */
        protected $line_2 = '';
        /** @var string line 3 of the street address */
        protected $line_3 = '';
        /** @var string address locality (city) */
        protected $locality = '';
        /** @var string address region (state) */
        protected $region = '';
        /** @var string address country */
        protected $country = '';
        /** @var string address postcode */
        protected $postcode = '';
        /** Getter methods ************************************************************************************************/
        /**
         * Gets line 1 of the street address.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_line_1()
        {
        }
        /**
         * Gets line 2 of the street address.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_line_2()
        {
        }
        /**
         * Gets line 3 of the street address.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_line_3()
        {
        }
        /**
         * Gets the locality or city.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_locality()
        {
        }
        /**
         * Gets the region or state.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_region()
        {
        }
        /**
         * Gets the country.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_country()
        {
        }
        /**
         * Gets the postcode.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_postcode()
        {
        }
        /**
         * Gets the hash representation of this address.
         *
         * @see Address::get_hash_data()
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_hash()
        {
        }
        /**
         * Gets the data used to generate a hash for the address.
         *
         * @since 5.3.0
         *
         * @return string[]
         */
        protected function get_hash_data()
        {
        }
        /** Setter methods ************************************************************************************************/
        /**
         * Sets line 1 of the street address.
         *
         * @since 5.3.0
         *
         * @param string $value line 1 value
         */
        public function set_line_1($value)
        {
        }
        /**
         * Sets line 2 of the street address.
         *
         * @since 5.3.0
         *
         * @param string $value line 2 value
         */
        public function set_line_2($value)
        {
        }
        /**
         * Gets line 3 of the street address.
         *
         * @since 5.3.0
         *
         * @param string $value line 3 value
         */
        public function set_line_3($value)
        {
        }
        /**
         * Gets the locality or city.
         *
         * @since 5.3.0
         *
         * @param string $value locality value
         */
        public function set_locality($value)
        {
        }
        /**
         * Gets the region or state.
         *
         * @since 5.3.0
         *
         * @param string $value region value
         */
        public function set_region($value)
        {
        }
        /**
         * Sets the country.
         *
         * @since 5.3.0
         *
         * @param string $value country value
         */
        public function set_country($value)
        {
        }
        /**
         * Sets the postcode.
         *
         * @since 5.3.0
         *
         * @param string $value postcode value
         */
        public function set_postcode($value)
        {
        }
    }
    /**
     * The customer address data class.
     *
     * Adds customer-specific data to a base address, as used for a billing or shipping address that can include first and last name.
     *
     * @since 5.3.0
     */
    class Customer_Address extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\Addresses\Address
    {
        /** @var string customer first name */
        protected $first_name = '';
        /** @var string customer last name */
        protected $last_name = '';
        /** Getter Methods ************************************************************************************************/
        /**
         * Gets the customer first name.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_first_name()
        {
        }
        /**
         * Gets the customer first name.
         *
         * @since 5.3.0
         *
         * @return string
         */
        public function get_last_name()
        {
        }
        /**
         * Gets the data used to generate a hash for the address.
         *
         * @see Address::get_hash_data()
         *
         * @since 5.3.0
         *
         * @return string[]
         */
        protected function get_hash_data()
        {
        }
        /** Setter Methods ************************************************************************************************/
        /**
         * Sets the customer first name.
         *
         * @since 5.3.0
         *
         * @param string $value first name value
         */
        public function set_first_name($value)
        {
        }
        /**
         * Sets the customer last name.
         *
         * @since 5.3.0
         *
         * @param string $value first name value
         */
        public function set_last_name($value)
        {
        }
        /**
         * Sets the full address based on a WooCommerce order.
         *
         * @since 5.3.0
         *
         * @param \WC_Order $order WooCommerce order object
         * @param string $type address type, like billing or shipping
         */
        public function set_from_order(\WC_Order $order, $type = 'billing')
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * WooCommerce data compatibility class.
     *
     * @since 4.6.0
     * @deprecated 5.5.0
     */
    abstract class SV_WC_Data_Compatibility
    {
        /** @deprecated 5.5.0 backwards compatibility property map */
        protected static $compat_props = [];
        /**
         * Gets an object property.
         *
         * @see \WC_Data::get_prop()
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $prop the property name
         * @param string $context if 'view' then the value will be filtered
         * @param array $compat_props compatibility properties unused since 5.5.0
         * @return null|mixed
         */
        public static function get_prop($object, $prop, $context = 'edit', $compat_props = [])
        {
        }
        /**
         * Sets an object's properties.
         *
         * Note that this does not save any data to the database.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param array $props the new properties as $key => $value
         * @param array $compat_props compatibility properties, unused since 5.5.0
         * @return bool|\WP_Error
         */
        public static function set_props($object, $props, $compat_props = [])
        {
        }
        /**
         * Gets an object's stored meta value.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         * @param bool $single whether to get the meta as a single item. Defaults to `true`
         * @param string $context if 'view' then the value will be filtered
         * @return mixed
         */
        public static function get_meta($object, $key = '', $single = true, $context = 'edit')
        {
        }
        /**
         * Stores an object meta value.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         * @param string $value the meta value
         * @param bool $unique optional: whether the meta should be unique
         */
        public static function add_meta_data($object, $key, $value, $unique = false)
        {
        }
        /**
         * Updates an object's stored meta value.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         * @param string $value the meta value
         * @param int|string $meta_id optional: the specific meta ID to update
         */
        public static function update_meta_data($object, $key, $value, $meta_id = '')
        {
        }
        /**
         * Deletes an object's stored meta value.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Data $object the data object, likely \WC_Order or \WC_Product
         * @param string $key the meta key
         */
        public static function delete_meta_data($object, $key)
        {
        }
    }
    /**
     * WooCommerce product compatibility class.
     *
     * @since 4.6.0
     */
    class SV_WC_Product_Compatibility extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Data_Compatibility
    {
        /**
         * Gets a product property.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $object the product object
         * @param string $prop the property name
         * @param string $context if 'view' then the value will be filtered
         * @param array $compat_props compatibility arguments, unused since 5.5.0
         * @return mixed
         */
        public static function get_prop($object, $prop, $context = 'edit', $compat_props = [])
        {
        }
        /**
         * Sets an products's properties.
         *
         * Note that this does not save any data to the database.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $object the product object
         * @param array $props the new properties as $key => $value
         * @param array $compat_props compatibility arguments, unused since 5.5.0
         * @return bool|\WP_Error
         */
        public static function set_props($object, $props, $compat_props = [])
        {
        }
        /**
         * Gets a product's parent product.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $product the product object
         * @return \WC_Product|bool
         */
        public static function get_parent(\WC_Product $product)
        {
        }
        /**
         * Updates product stock.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $product the product object
         * @param null|int $amount optional: the new stock quantity
         * @param string $mode optional: can be set (default), add, or subtract
         * @return int
         */
        public static function wc_update_product_stock(\WC_Product $product, $amount = null, $mode = 'set')
        {
        }
        /**
         * Gets the product price HTML from text.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $product the product object
         * @return string
         */
        public static function wc_get_price_html_from_text(\WC_Product $product)
        {
        }
        /**
         * Gets the product price including tax.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $product the product object
         * @param int $qty optional: the quantity
         * @param string $price optional: the product price
         * @return string
         */
        public static function wc_get_price_including_tax(\WC_Product $product, $qty = 1, $price = '')
        {
        }
        /**
         * Gets the product price excluding tax.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $product the product object
         * @param int $qty optional: The quantity
         * @param string $price optional: the product price
         * @return string
         */
        public static function wc_get_price_excluding_tax(\WC_Product $product, $qty = 1, $price = '')
        {
        }
        /**
         * Gets the product price to display.
         *
         * @since 4.6.0
         *
         * @param \WC_Product $product the product object
         * @param string $price optional: the product price
         * @param int $qty optional: the quantity
         * @return string
         */
        public static function wc_get_price_to_display(\WC_Product $product, $price = '', $qty = 1)
        {
        }
        /**
         * Gets the product category list.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $product the product object
         * @param string $sep optional: the list separator
         * @param string $before optional: to display before the list
         * @param string $after optional: to display after the list
         * @return string
         */
        public static function wc_get_product_category_list(\WC_Product $product, $sep = ', ', $before = '', $after = '')
        {
        }
        /**
         * Formats the product rating HTML.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Product $product the product object, unused since 5.5.0
         * @param null|string $rating optional: the product rating
         * @return string
         */
        public static function wc_get_rating_html(\WC_Product $product, $rating = null)
        {
        }
    }
    /**
     * WooCommerce order compatibility class.
     *
     * @since 4.6.0
     */
    class SV_WC_Order_Compatibility extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Data_Compatibility
    {
        /**
         * Gets an order's created date.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @param string $context if 'view' then the value will be filtered
         *
         * @return \WC_DateTime|null
         */
        public static function get_date_created(\WC_Order $order, $context = 'edit')
        {
        }
        /**
         * Gets an order's last modified date.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @param string $context if 'view' then the value will be filtered
         *
         * @return \WC_DateTime|null
         */
        public static function get_date_modified(\WC_Order $order, $context = 'edit')
        {
        }
        /**
         * Gets an order's paid date.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @param string $context if 'view' then the value will be filtered
         *
         * @return \WC_DateTime|null
         */
        public static function get_date_paid(\WC_Order $order, $context = 'edit')
        {
        }
        /**
         * Gets an order's completed date.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @param string $context if 'view' then the value will be filtered
         *
         * @return \WC_DateTime|null
         */
        public static function get_date_completed(\WC_Order $order, $context = 'edit')
        {
        }
        /**
         * Gets an order date.
         *
         * This should only be used to retrieve WC core date properties.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @param string $type type of date to get
         * @param string $context if 'view' then the value will be filtered
         *
         * @return \WC_DateTime|null
         */
        public static function get_date_prop(\WC_Order $order, $type, $context = 'edit')
        {
        }
        /**
         * Gets an order property.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $object the order object
         * @param string $prop the property name
         * @param string $context if 'view' then the value will be filtered
         * @param array $compat_props compatibility arguments, unused since 5.5.0
         * @return mixed
         */
        public static function get_prop($object, $prop, $context = 'edit', $compat_props = [])
        {
        }
        /**
         * Sets an order's properties.
         *
         * Note that this does not save any data to the database.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $object the order object
         * @param array $props the new properties as $key => $value
         * @param array $compat_props compatibility arguments, unused since 5.5.0
         * @return bool|\WP_Error
         */
        public static function set_props($object, $props, $compat_props = [])
        {
        }
        /**
         * Adds a coupon to an order item.
         *
         * Order item CRUD compatibility method to add a coupon to an order.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order the order object
         * @param array $code the coupon code
         * @param int $discount the discount amount.
         * @param int $discount_tax the discount tax amount.
         * @return int the order item ID
         */
        public static function add_coupon(\WC_Order $order, $code = [], $discount = 0, $discount_tax = 0)
        {
        }
        /**
         * Adds a fee to an order.
         *
         * Order item CRUD compatibility method to add a fee to an order.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order the order object
         * @param object $fee the fee to add
         * @return int the order item ID
         */
        public static function add_fee(\WC_Order $order, $fee)
        {
        }
        /**
         * Adds shipping line to order.
         *
         * Order item CRUD compatibility method to add a shipping line to an order.
         *
         * @since 4.7.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @param \WC_Shipping_Rate $shipping_rate shipping rate to add
         * @return int the order item ID
         */
        public static function add_shipping(\WC_Order $order, $shipping_rate)
        {
        }
        /**
         * Adds tax line to an order.
         *
         * Order item CRUD compatibility method to add a tax line to an order.
         *
         * @since 4.7.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @param int $tax_rate_id tax rate ID
         * @param int|float $tax_amount cart tax amount
         * @param int|float $shipping_tax_amount shipping tax amount
         * @return int order item ID
         * @throws \WC_Data_Exception
         *
         */
        public static function add_tax(\WC_Order $order, $tax_rate_id, $tax_amount = 0, $shipping_tax_amount = 0)
        {
        }
        /**
         * Updates an order coupon.
         *
         * Order item CRUD compatibility method to update an order coupon.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order the order object
         * @param int|\WC_Order_Item $item the order item ID
         * @param array $args {
         *     The coupon item args.
         *
         *     @type string $code         the coupon code
         *     @type float  $discount     the coupon discount amount
         *     @type float  $discount_tax the coupon discount tax amount
         * }
         * @return int|bool the order item ID or false on failure
         * @throws \WC_Data_Exception
         */
        public static function update_coupon(\WC_Order $order, $item, $args)
        {
        }
        /**
         * Updates an order fee.
         *
         * Order item CRUD compatibility method to update an order fee.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order the order object
         * @param int|\WC_Order_Item $item the order item ID
         * @param array $args {
         *     The fee item args.
         *
         *     @type string $name       the fee name
         *     @type string $tax_class  the fee's tax class
         *     @type float  $line_total the fee total amount
         *     @type float  $line_tax   the fee tax amount
         * }
         * @return int|bool the order item ID or false on failure
         * @throws \WC_Data_Exception
         */
        public static function update_fee(\WC_Order $order, $item, $args)
        {
        }
        /**
         * Reduces stock levels for products in order.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order the order object
         */
        public static function reduce_stock_levels(\WC_Order $order)
        {
        }
        /**
         * Updates total product sales count for a given order.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order the order object
         */
        public static function update_total_sales_counts(\WC_Order $order)
        {
        }
        /**
         * Determines if an order has an available shipping address.
         *
         * @since 4.6.1
         * @deprecated 5.5.0
         *
         * @param \WC_Order $order order object
         * @return bool
         */
        public static function has_shipping_address(\WC_Order $order)
        {
        }
        /**
         * Gets the formatted meta data for an order item.
         *
         * @since 4.6.5
         *
         * @param \WC_Order_Item $item order item object
         * @param string $hide_prefix prefix for meta that is considered hidden
         * @param bool $include_all whether to include all meta (attributes, etc...), or just custom fields
         * @return array $item_meta {
         *     @type string $label meta field label
         *     @type mixed $value meta value
         * }
         */
        public static function get_item_formatted_meta_data($item, $hide_prefix = '_', $include_all = false)
        {
        }
        /**
         * Gets the admin Edit screen URL for an order.
         *
         * @since 5.0.1
         *
         * @param \WC_Order $order order object
         * @return string
         */
        public static function get_edit_order_url(\WC_Order $order)
        {
        }
    }
    /**
     * Extends the DateTime object for backwards compatibility.
     *
     * @since 4.6.0
     * @deprecated 5.5.0
     */
    class SV_WC_DateTime extends \DateTime
    {
        /**
         * SV_WC_DateTime constructor.
         *
         * @since 5.5.0
         * @deprecated 5.5.0
         *
         * @param string $time
         * @param \DateTimeZone|null $timezone
         * @throws \Exception
         */
        public function __construct($time = 'now', \DateTimeZone $timezone = null)
        {
        }
        /**
         * Outputs an ISO 8601 date string in local timezone.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * Gets the UTC timestamp.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @return int
         */
        public function getTimestamp()
        {
        }
        /**
         * Gets the timestamp with the WordPress timezone offset added or subtracted.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @return int
         */
        public function getOffsetTimestamp()
        {
        }
        /**
         * Gets a date based on the offset timestamp.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param string $format date format
         * @return string
         */
        public function date($format)
        {
        }
        /**
         * Gets a localised date based on offset timestamp.
         *
         * @since 4.6.0
         * @deprecated 5.5.0
         *
         * @param string $format date format
         * @return string
         */
        public function date_i18n($format = 'Y-m-d')
        {
        }
    }
    /**
     * The plugin REST API handler class.
     *
     * This is responsible for hooking in to the WC REST API to add data for existing
     * routes and/or register new routes.
     *
     * @since 5.2.0
     */
    class REST_API
    {
        /** @var SV_WC_Plugin plugin instance */
        private $plugin;
        /**
         * Constructs the class.
         *
         * @since 5.2.0
         *
         * @param SV_WC_Plugin $plugin plugin instance
         */
        public function __construct(\SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Plugin $plugin)
        {
        }
        /**
         * Adds the action and filter hooks.
         *
         * @since 5.2.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Adds plugin data to the system status.
         *
         * @internal
         *
         * @since 5.2.0
         *
         * @param \WP_REST_Response $response REST API response object
         * @param array $system_status system status data
         * @param \WP_REST_Request $request REST API request object
         * @return \WP_REST_Response
         */
        public function add_system_status_data($response, $system_status, $request)
        {
        }
        /**
         * Gets the data to add to the WooCommerce REST API System Status response.
         *
         * Plugins can override this to add their own data.
         *
         * @since 5.2.0
         *
         * @return array
         */
        protected function get_system_status_data()
        {
        }
        /**
         * Registers new WC REST API routes.
         *
         * @since 5.2.0
         */
        public function register_routes()
        {
        }
        /**
         * Gets the plugin instance.
         *
         * @since 5.2.0
         *
         * @return SV_WC_Plugin|SV_WC_Payment_Gateway_Plugin
         */
        protected function get_plugin()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12\REST_API\Controllers {
    /**
     * The settings controller class.
     *
     * @since 5.7.0
     */
    class Settings extends \WP_REST_Controller
    {
        /** @var Abstract_Settings settings handler */
        protected $settings;
        /**
         * Settings constructor.
         *
         * @since 5.7.0
         *
         * @param Abstract_Settings $settings settings handler
         */
        public function __construct(\SkyVerge\WooCommerce\PluginFramework\v5_10_12\Settings_API\Abstract_Settings $settings)
        {
        }
        /**
         * Registers the API routes.
         *
         * @since 5.7.0
         */
        public function register_routes()
        {
        }
        /** Read methods **************************************************************************************************/
        /**
         * Checks whether the user has permissions to get settings.
         *
         * @since 5.7.0
         *
         * @param \WP_REST_Request $request request object
         * @return bool|\WP_Error
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Gets all registered settings.
         *
         * @since 5.7.0
         *
         * @param \WP_REST_Request $request request object
         * @return \WP_REST_Response|\WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Gets a single setting.
         *
         * @since 5.7.0
         *
         * @param \WP_REST_Request $request request object
         * @return \WP_REST_Response|\WP_Error
         */
        public function get_item($request)
        {
        }
        /** Update methods ************************************************************************************************/
        /**
         * Checks whether the user has permissions to update a setting.
         *
         * @since 5.7.0
         *
         * @param \WP_REST_Request $request request object
         * @return bool|\WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Updates a single setting.
         *
         * @since 5.7.0
         *
         * @param \WP_REST_Request $request request object
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /** Utility methods ***********************************************************************************************/
        /**
         * Prepares the item for the REST response.
         *
         * @since 5.7.0
         *
         * @param Setting $setting a setting object
         * @param \WP_REST_Request $request request object
         * @return array
         */
        public function prepare_setting_item($setting, $request)
        {
        }
        /**
         * Retrieves the item's schema, conforming to JSON Schema.
         *
         * @since 5.7.0
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v5_10_12 {
    /**
     * Plugin Framework API Exception - generic API Exception
     */
    class SV_WC_API_Exception extends \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_Plugin_Exception
    {
    }
    /**
     * Base XML API response class.
     *
     * @since 4.3.0
     */
    abstract class SV_WC_API_XML_Response implements \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_API_Response
    {
        /** @var string string representation of this response */
        protected $raw_response_xml;
        /** @var \SimpleXMLElement XML object */
        protected $response_xml;
        /** @var array|mixed|object XML data after conversion into an usable object */
        protected $response_data;
        /**
         * Build an XML object from the raw response.
         *
         * @since 4.3.0
         * @param string $raw_response_xml The raw response XML
         */
        public function __construct($raw_response_xml)
        {
        }
        /**
         * Magic method for getting XML element data. Note the response data has
         * already been casted into simple data types (string,int,array) and does not
         * require further casting in order to use.
         *
         * @since 4.3.0
         * @param string $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Get the string representation of this response.
         *
         * @since 4.3.0
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Get the string representation of this response with any and all sensitive elements masked
         * or removed.
         *
         * @since 4.3.0
         * @see SV_WC_API_Response::to_string_safe()
         * @return string
         */
        public function to_string_safe()
        {
        }
    }
    /**
     * Base XML API request class.
     *
     * @since 4.3.0
     */
    abstract class SV_WC_API_XML_Request implements \SkyVerge\WooCommerce\PluginFramework\v5_10_12\SV_WC_API_Request
    {
        /** @var string the request method, one of HEAD, GET, PUT, PATCH, POST, DELETE */
        protected $method;
        /** @var string the request path */
        protected $path = '';
        /** @var array the request parameters */
        protected $params = array();
        /** @var array request data */
        protected $request_data;
        /** @var string root element for XML */
        protected $root_element;
        /** @var \XMLWriter $xml object */
        protected $xml;
        /** @var string complete request XML */
        protected $request_xml;
        /**
         * Get the method for this request.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::get_method()
         * @return null|string
         */
        public function get_method()
        {
        }
        /**
         * Get the path for this request.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::get_path()
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get the request parameters.
         *
         * @since 4.5.0
         * @return array
         */
        public function get_params()
        {
        }
        /**
         * Convert the request data into XML.
         *
         * @since 4.3.0
         * @return string
         */
        protected function to_xml()
        {
        }
        /**
         * Gets the request data to be converted to XML.
         *
         * @since 4.3.0
         * @deprecated 5.0.0
         *
         * @return array
         */
        public function get_request_data()
        {
        }
        /**
         * Gets the request data to be converted to XML.
         *
         * @since 5.0.0
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Get the string representation of this request
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::to_string()
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Get the string representation of this request with any and all sensitive elements masked
         * or removed.
         *
         * @since 4.3.0
         * @see SV_WC_API_Request::to_string_safe()
         * @return string
         */
        public function to_string_safe()
        {
        }
        /**
         * Helper method for making XML pretty, suitable for logging or rendering
         *
         * @since 4.3.0
         * @param string $xml_string ugly XML string
         * @return string
         */
        public function prettify_xml($xml_string)
        {
        }
        /**
         * Concrete classes must implement this method to return the root element
         * for the XML document
         *
         * @since 4.3.0
         * @return string
         */
        protected abstract function get_root_element();
    }
}
namespace {
    /**
     * Returns the One True Instance of WC_AvaTax.
     *
     * @since 1.0.0
     *
     * @return WC_AvaTax
     */
    function wc_avatax()
    {
    }
}