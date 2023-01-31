<?php

/**
 * Abstract class used as the foundation for SATT modules.
 * Modules are groupings of functionality that SATT uses to attach hooks associated with specific application components.
 * This is just a way to organize SATT code better.
 * See 'WCS_ATT::includes', 'WCS_ATT::register_modules' and 'WCS_ATT::register_component_hooks'.
 *
 * @version  3.2.0
 */
abstract class WCS_ATT_Abstract_Module
{
    /**
     * Sub-modules to instantiate.
     * @var array
     */
    protected $modules = array();
    /**
     * Handles module initialization.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Include submodules.
     *
     * @return void
     */
    protected function register_modules()
    {
    }
    /**
     * Initialize submodules.
     *
     * @return void
     */
    public function initialize_modules()
    {
    }
    /**
     * Adds sub-module hooks by component type.
     *
     * @param  string  $component
     * @return void
     */
    protected function register_module_hooks($component)
    {
    }
    /**
     * Adds module hooks by component type.
     *
     * @param  string   $component
     * @param  boolean  $register_module_hooks
     * @return void
     */
    public function register_hooks($component, $register_module_hooks = \true)
    {
    }
    /**
     * Checks if a specific module is registered.
     *
     * @return boolean
     */
    public function is_module_registered($module)
    {
    }
}
/**
 * Main plugin class.
 *
 * @class    WCS_ATT
 * @version  4.0.4
 */
class WCS_ATT extends \WCS_ATT_Abstract_Module
{
    /* Plugin version. */
    const VERSION = '4.0.4';
    /* Required WC version. */
    const REQ_WC_VERSION = '3.9.0';
    /* Required WC version. */
    const REQ_WCS_VERSION = '3.0.0';
    /* Required WC Payments version. */
    const REQ_WCPAY_VERSION = '3.2.0';
    /**
     * @var WCS_ATT - the single instance of the class.
     *
     * @since 1.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WCS_ATT Instance.
     *
     * Ensures only one instance of WCS_ATT is loaded or can be loaded.
     *
     * @static
     * @see WCS_ATT()
     * @return WCS_ATT - Main instance
     * @since 1.0.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 1.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 1.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Do some work.
     */
    public function __construct()
    {
    }
    /**
     * The plugin URL.
     *
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * The plugin path.
     *
     * @return string
     */
    public function plugin_path()
    {
    }
    /**
     * Plugin version getter.
     *
     * @since  2.4.0
     *
     * @param  boolean  $base
     * @param  string   $version
     * @return string
     */
    public function plugin_version($base = \false, $version = '')
    {
    }
    /**
     * Indicates whether the plugin has been fully initialized.
     *
     * @since  3.1.7
     *
     * @return boolean
     */
    public function plugin_initialized()
    {
    }
    /**
     * Define constants if not present.
     *
     * @since  3.1.7
     *
     * @return boolean
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Plugin base path name getter.
     *
     * @return string
     */
    public function plugin_basename()
    {
    }
    /**
     * Bootstrap.
     */
    public function plugins_loaded()
    {
    }
    /**
     * Define constants.
     *
     * @return void
     */
    protected function define_constants()
    {
    }
    /**
     * Include plugin files.
     *
     * @return void
     */
    public function includes()
    {
    }
    /**
     * Include submodules.
     *
     * @since  2.1.0
     *
     * @return void
     */
    public function register_modules()
    {
    }
    /**
     * Register all module hooks associated with a named SATT component.
     *
     * @since  2.1.0
     *
     * @param  string  $component
     */
    protected function register_component_hooks($component)
    {
    }
    /**
     * Loads the Admin & AJAX filters / hooks.
     *
     * @return void
     */
    public function admin_includes()
    {
    }
    /**
     * Initialize plugin.
     *
     * @since 3.4.0
     *
     * @return void
     */
    public function init_plugin()
    {
    }
    /**
     * Load textdomain.
     *
     * @return void
     */
    public function init_textdomain()
    {
    }
    /**
     * Store plugin version.
     *
     * @return void
     */
    public function activate()
    {
    }
    /**
     * Clean-up on de-activation.
     *
     * @since 3.1.5
     *
     * @return void
     */
    public function deactivate()
    {
    }
    /**
     * Product types supported by the plugin.
     *
     * @return array
     */
    public function get_supported_product_types()
    {
    }
    /**
     * Log important stuff.
     *
     * @param  string  $message
     * @param  string  $level
     * @return void
     */
    public function log($message, $level)
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param	mixed  $links
     * @param	mixed  $file
     * @return	array
     */
    public function plugin_meta_links($links, $file)
    {
    }
    /**
     * Returns URL to a doc or support resource.
     *
     * @since  4.0.0
     *
     * @param  string  $handle
     * @return string
     */
    public function get_resource_url($handle)
    {
    }
}
/**
 * Compatibility with other extensions.
 *
 * @class    WCS_ATT_Integrations
 * @version  4.0.3
 */
class WCS_ATT_Integrations
{
    /**
     * Min required plugin versions to check.
     *
     * @var array
     */
    private static $required = array();
    /**
     * Cache block based cart detection result.
     *
     * @since  3.3.0
     * @var    array
     */
    private static $is_block_based_cart = \null;
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Declare HPOS( Custom Order tables) compatibility.
     *
     * @since 4.0.3
     */
    public static function declare_hpos_compatibility()
    {
    }
    /**
     * Checks versions of compatible/integrated/deprecated extensions.
     *
     * @since  2.4.0
     *
     * @return void
     */
    public static function display_notices()
    {
    }
    /**
     * Whether the cart page contains the cart block.
     *
     * @since  3.3.0
     *
     * @param  string  $route
     * @return boolean
     */
    public static function is_block_based_cart()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * Checks if the passed product is of a supported bundle type. Returns the type if yes, or false if not.
     *
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function is_bundle_type_product($product)
    {
    }
    /**
     * Given a bundle-type child cart item, find and return its container cart item or its cart id when the $return_id arg is true.
     *
     * @since  2.1.0
     *
     * @param  array    $cart_item
     * @param  array    $cart_contents
     * @param  boolean  $return_id
     * @return mixed
     */
    public static function get_bundle_type_cart_item_container($cart_item, $cart_contents = \false, $return_id = \false)
    {
    }
    /**
     * Given a bundle-type container cart item, find and return its child cart items - or their cart ids when the $return_ids arg is true.
     *
     * @since  2.1.0
     *
     * @param  array    $cart_item
     * @param  array    $cart_contents
     * @param  boolean  $return_ids
     * @return mixed
     */
    public static function get_bundle_type_cart_items($cart_item, $cart_contents = \false, $return_ids = \false)
    {
    }
    /**
     * True if a cart item appears to be a bundle-type container item.
     *
     * @since  2.1.0
     *
     * @param  array  $cart_item
     * @return boolean
     */
    public static function is_bundle_type_container_cart_item($cart_item)
    {
    }
    /**
     * True if a cart item is part of a bundle-type product.
     *
     * @since  2.1.0
     *
     * @param  array  $cart_item
     * @param  array  $cart_contents
     * @return boolean
     */
    public static function is_bundle_type_cart_item($cart_item, $cart_contents = \false)
    {
    }
    /**
     * Given a bundle-type child order item, find and return its container order item or its order item id when the $return_id arg is true.
     *
     * @since  2.1.0
     *
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @param  boolean   $return_id
     * @return mixed
     */
    public static function get_bundle_type_order_item_container($order_item, $order = \false, $return_id = \false)
    {
    }
    /**
     * Given a bundle-type container order item, find and return its child order items - or their order item ids when the $return_ids arg is true.
     *
     * @since  2.1.0
     *
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @param  boolean   $return_ids
     * @return mixed
     */
    public static function get_bundle_type_order_items($order_item, $order = \false, $return_ids = \false)
    {
    }
    /**
     * True if an order item appears to be a bundle-type container item.
     *
     * @since  2.1.0
     *
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @return boolean
     */
    public static function is_bundle_type_container_order_item($order_item, $order = \false)
    {
    }
    /**
     * True if an order item is part of a bundle-type product.
     *
     * @since  2.1.0
     *
     * @param  array     $cart_item
     * @param  WC_Order  $order
     * @return boolean
     */
    public static function is_bundle_type_order_item($order_item, $order = \false)
    {
    }
    /**
     * Set the active bundle scheme on a bundled item.
     *
     * @param  WC_Bundled_Item    $bundled_item
     * @param  WC_Product_Bundle  $bundle
     */
    public static function set_bundled_item_scheme($bundled_item, $bundle)
    {
    }
    /**
     * Add bundles to subscriptions using 'WC_PB_Order::add_bundle_to_order'.
     *
     * @since  2.1.0
     *
     * @param  WC_Subscription  $subscription
     * @param  array            $cart_item
     * @param  WC_Cart          $recurring_cart
     */
    public static function add_bundle_to_order($subscription, $cart_item, $recurring_cart)
    {
    }
    /**
     * Add composites to subscriptions using 'WC_CP_Order::add_composite_to_order'.
     *
     * @since  2.1.0
     *
     * @param  WC_Subscription  $subscription
     * @param  array            $cart_item
     * @param  WC_Cart          $recurring_cart
     */
    public static function add_composite_to_order($subscription, $cart_item, $recurring_cart)
    {
    }
    /**
     * Checks if the passed cart item is a supported bundle type child. Returns the container item key name if yes, or false if not.
     *
     * @param  array  $cart_item
     * @return boolean|string
     */
    public static function has_bundle_type_container($cart_item)
    {
    }
    /**
     * Checks if the passed cart item is a supported bundle type container. Returns the child item key name if yes, or false if not.
     *
     * @param  array  $cart_item
     * @return boolean|string
     */
    public static function has_bundle_type_children($cart_item)
    {
    }
}
/**
 * WC Core compatibility functions.
 *
 * @class    WCS_ATT_Core_Compatibility
 * @version  3.3.2
 */
class WCS_ATT_Core_Compatibility
{
    /**
     * Cache 'gte' comparison results.
     * @var array
     */
    private static $is_wc_version_gte = array();
    /**
     * Cache 'gt' comparison results.
     * @var array
     */
    private static $is_wc_version_gt = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @since  2.4.3
     * @var    array
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @since  2.4.3
     * @var    array
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache wc admin status result.
     *
     * @since  3.1.5
     * @var    bool
     */
    private static $is_wc_admin_enabled = \null;
    /**
     * Cache subscriptions template directory
     *
     * @since  3.2.0
     * @var    string
     */
    private static $subscriptions_template_dir = '';
    /**
     * Current REST request.
     *
     * @since  3.3.2
     * @var    WP_REST_Request
     */
    private static $request;
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Saves the current rest request.
     *
     * @since  3.3.2
     *
     * @param  mixed            $result
     * @param  WP_REST_Server   $server
     * @param  WP_REST_Request  $request
     * @return mixed
     */
    public static function save_rest_request($result, $server, $request)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | WC version getters.
    |--------------------------------------------------------------------------
    */
    /**
     * Helper method to get the version of the currently installed WooCommerce
     *
     * @since  1.0.0
     * @return string woocommerce version number or null
     */
    private static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  2.0.0
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @since  1.0.0
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  2.4.3
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  2.4.3
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Utilities.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns true if the WC Admin feature is installed and enabled.
     *
     * @since  3.1.5
     *
     * @return boolean
     */
    public static function is_wc_admin_enabled()
    {
    }
    /**
     * Returns the directory where WooCommerce Subscriptions template files exist.
     *
     * @since  3.2.0
     *
     * @return string
     */
    public static function get_subscriptions_template_directory()
    {
    }
    /**
     * Wrapper for 'get_parent_id' with fallback to 'get_id'.
     *
     * @since  2.0.0
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function get_product_id($product)
    {
    }
    /**
     * Wrapper for 'WC_Product_Factory::get_product_type'.
     *
     * @since  2.0.0
     *
     * @param  mixed  $product_id
     * @return mixed
     */
    public static function get_product_type($product_id)
    {
    }
    /**
     * Get formatted screen id.
     *
     * @since  3.1.20
     *
     * @param  string $key
     * @return string
     */
    public static function get_formatted_screen_id($screen_id)
    {
    }
    /**
     * Whether this is a Store/REST API request.
     *
     * @since  3.3.2
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @since  3.3.2
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  3.3.2
     *
     * @param  string  $route
     * @return boolean
     */
    public static function is_store_api_request($route = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns true if the installed version of WooCommerce is 2.7 or greater.
     *
     * @since  1.1.2
     * @return boolean
     */
    public static function is_wc_version_gte_2_7()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.6 or greater.
     *
     * @since  1.0.4
     * @return boolean
     */
    public static function is_wc_version_gte_2_6()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.5 or greater.
     *
     * @since  1.0.4
     * @return boolean
     */
    public static function is_wc_version_gte_2_5()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.4 or greater.
     *
     * @since  1.0.0
     * @return boolean
     */
    public static function is_wc_version_gte_2_4()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.3 or greater.
     *
     * @since  1.0.0
     * @return boolean
     */
    public static function is_wc_version_gte_2_3()
    {
    }
}
/**
 * Single-product template modifications.
 *
 * @class    WCS_ATT_Display_Product
 * @version  3.2.3
 */
class WCS_ATT_Display_Product
{
    /**
     * Initialization.
     */
    public static function init()
    {
    }
    /**
     * Single-product display hooks.
     */
    private static function add_hooks()
    {
    }
    /**
     * Options for purchasing a product once or creating a subscription from it.
     *
     * @param  WC_Product       $product
     * @param  WC_Product|null  $parent_product
     * @return void
     */
    public static function get_subscription_options_content($product, $parent_product = \null)
    {
    }
    /**
     * Formats a dropdown description by cleaning up an html price string and replacing the price in a placeholder.
     *
     * @since  3.0.0
     *
     * @param  string          $dropdown_details_html
     * @param  WC_Product      $product
     * @param  WCS_ATT_Scheme  $subscription_scheme
     * @param  array           $args
     * @return string
     */
    public static function format_subscription_options_dropdown_description($dropdown_details_html, $product, $subscription_scheme, $args = array())
    {
    }
    /**
     * Controls where variation subscription scheme options will be rendered: In the variation data array's 'price_html' key, or before the add to cart button.
     *
     * @since  2.3.1
     *
     * @param  WC_Product_Variable  $variable_product
     * @return bool
     */
    protected static function modify_variation_data_price_html($variable_product)
    {
    }
    /**
     * Label for subscription plans dropdown.
     *
     * @since  3.0.0
     *
     * @param  WC_Product  $product
     * @return string
     */
    protected static function get_subscription_options_dropdown_label($product)
    {
    }
    /**
     * Returns the subscription options text prompt.
     *
     * @since  3.0.0
     *
     * @param  WC_Product  $product
     * @return string
     */
    public static function get_subscription_options_prompt_text($product)
    {
    }
    /**
     * Returns the subscription options layout.
     *
     * @since  3.0.0
     *
     * @param  WC_Product  $product
     * @return string
     */
    public static function get_subscription_options_layout($product)
    {
    }
    /**
     * Return add-to-cart button replacement text when choosing a subscription plan.
     * Returns null if the text should not be modified.
     *
     * @since  3.0.0
     *
     * @param  WC_Product  $product
     * @return string|null
     */
    public static function get_subscription_options_button_text($product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filters
    |--------------------------------------------------------------------------
    */
    /**
     * Replace plain variation price html with subscription options template.
     * Subscription options are updated by the core variations script when a variation is selected.
     *
     * @param  array                 $variation_data
     * @param  WC_Product_Variable   $variable_product
     * @param  WC_Product_Variation  $variation_product
     * @return array
     */
    public static function add_subscription_options_to_variation_data($variation_data, $variable_product, $variation_product)
    {
    }
    /**
     * Displays single-product options for purchasing a product once or creating a subscription from it.
     *
     * @return void
     */
    public static function show_subscription_options()
    {
    }
    /**
     * Overrides the single-product add-to-cart button text with "Sign up".
     *
     * @since  1.1.1
     *
     * @param  string      $button_text
     * @param  WC_Product  $product
     * @return string
     */
    public static function single_add_to_cart_text($button_text, $product)
    {
    }
    /**
     * Whether to prompt users to choose a plan in the catalog.
     *
     * @since  4.0.0
     *
     * @param  WC_Product  $product
     */
    public static function prompt_plan_selection_in_catalog($product)
    {
    }
    /**
     * Changes the shop add-to-cart button text when a product has subscription options.
     *
     * @since  2.0.0
     *
     * @param  string      $button_text
     * @param  WC_Product  $product
     * @return string
     */
    public static function add_to_cart_text($button_text, $product)
    {
    }
    /**
     * Changes the shop add-to-cart button action when a product has subscription options.
     *
     * @since  2.0.0
     *
     * @param  string      $url
     * @param  WC_Product  $product
     * @return string
     */
    public static function add_to_cart_url($url, $product)
    {
    }
    /**
     * Changes the shop add-to-cart button URL when a product has subscription options.
     *
     * @since  2.0.0
     *
     * @param  array       $supports
     * @param  string      $feature
     * @param  WC_Product  $product
     * @return string
     */
    public static function supports_ajax_add_to_cart($supports, $feature, $product)
    {
    }
    /**
     * Add product page class if a product has subscription plans.
     *
     * @since  3.0.0
     *
     * @param  array       $classes
     * @param  WC_Product  $product
     */
    public static function add_product_class($classes, $class, $product_id)
    {
    }
}
/**
 * Cart template modifications.
 *
 * @class    WCS_ATT_Display_Cart
 * @version  4.0.0
 */
class WCS_ATT_Display_Cart
{
    /**
     * Runtime cache.
     * @var bool
     */
    private static $display_prices_incl_tax;
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Hook-in.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Functions
    |--------------------------------------------------------------------------
    */
    /**
     * Back-compat wrapper for 'WC_Cart::display_price_including_tax'.
     *
     * @since  3.1.15
     *
     * @return string
     */
    public static function display_prices_including_tax()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filters
    |--------------------------------------------------------------------------
    */
    /**
     * Displays cart item options for purchasing a product once or creating a subscription from it.
     *
     * @param  string $price
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    public static function show_cart_item_subscription_options($price, $cart_item, $cart_item_key)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * Show a "Subscribe to Cart" section in the cart.
     * Visible only when all cart items have a common 'cart/order' subscription scheme.
     *
     * @since 2.1.0
     * @deprecated 4.0.0
     *
     * @return void
     */
    public static function show_cart_subscription_options()
    {
    }
    /**
     * Show a "Subscribe to Cart" section in the cart.
     *
     * @deprecated 2.1.0
     *
     * @return void
     */
    public static function show_subscribe_to_cart_prompt()
    {
    }
}
/**
 * Handles AJAX front-end requests.
 *
 * @class    WCS_ATT_Display_Ajax
 * @version  4.0.0
 */
class WCS_ATT_Display_Ajax
{
    /**
     * Initialization.
     */
    public static function init()
    {
    }
    /**
     * Hook-in.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * Ajax handler for saving the subscription scheme chosen at cart-level.
     *
     * @deprecated 4.0.0
     *
     * @return void
     */
    public static function update_cart_subscription_scheme()
    {
    }
}
/**
 * Handles modifications to the prices of subscription-enabled product objects.
 *
 * @class    WCS_ATT_Product_Price_Filters
 * @version  3.2.0
 */
class WCS_ATT_Product_Price_Filters
{
    /**
     * Runtime cache.
     *
     * @var array
     */
    private static $filter_instance_plan_prices = array();
    /*
    |--------------------------------------------------------------------------
    | Public Price Filters API
    |--------------------------------------------------------------------------
    */
    /**
     * Determine filtering context - 'inherit' or 'override'.
     *
     * @since  3.1.0
     *
     * @return string
     */
    public static function get_price_filter_type()
    {
    }
    /**
     * Allow plan prices to be filtered for this product?
     *
     * @since  3.1.0
     *
     * @param  WC_Product  $product
     * @return bool
     */
    public static function filter_plan_prices($product)
    {
    }
    /**
     * Add price filters. Filtering early allows us to override "raw" prices as safely as possible.
     * This allows 3p code to apply discounts or other transformations on overridden prices.
     * The catch: Any price filters added by 3p code with a priority earlier than 0 will be rendered ineffective.
     *
     * @param  string  $context  Filtering context. Values: 'price', 'price_html', ''.
     * @return void
     */
    public static function add($context = '')
    {
    }
    /**
     * Remove price filters.
     *
     * @param  string  $context  Filtering context. Values: 'price', 'price_html', ''.
     * @return void
     */
    public static function remove($context = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filters
    |--------------------------------------------------------------------------
    */
    /**
     * Filter html price based on the subscription scheme that is activated on the object.
     *
     * @param  string      $price_html
     * @param  WC_Product  $product
     * @return string
     */
    public static function filter_price_html($price_html, $product)
    {
    }
    /**
     * Filter variation data based on the subscription scheme that is activated on the parent.
     *
     * @param  array                 $variation_data
     * @param  WC_Product_Variable   $product
     * @param  WC_Product_Variation  $variation
     * @return array
     */
    public static function filter_variation_data($variation_data, $product, $variation)
    {
    }
    /**
     * Filter variation prices hash to load different prices depending on the scheme that's active on the object.
     *
     * @param  array                $hash
     * @param  WC_Product_Variable  $product
     * @return array
     */
    public static function filter_variation_prices_hash($hash, $product)
    {
    }
    /**
     * Filter get_variation_prices() calls to take price filters into account.
     * We could as well have used 'woocommerce_variation_prices_{regular_/sale_}price' filters.
     * This is a bit slower but makes code simpler when there are no variation-level schemes.
     *
     * @param  array                $raw_prices
     * @param  WC_Product_Variable  $product
     * @return array
     */
    public static function filter_variation_prices($raw_prices, $product)
    {
    }
    /**
     * Filter get_price() calls to take scheme price overrides into account.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_price($price, $product)
    {
    }
    /**
     * Filter get_regular_price() calls to take scheme price overrides into account.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_regular_price($regular_price, $product)
    {
    }
    /**
     * Filter get_sale_price() calls to take scheme price overrides into account.
     *
     * @param  double      $sale_price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_sale_price($sale_price, $product)
    {
    }
    /**
     * Filter WC_Subscriptions_Product::get_price() calls.
     *
     * @since  3.1.0
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_subscription_price($price, $product)
    {
    }
    /**
     * Filter WC_Product::is_on_sale() calls.
     *
     * @since  3.1.29
     *
     * @param  bool        $is_on_sale
     * @param  WC_Product  $product
     * @return bool
     */
    public static function filter_is_on_sale($is_on_sale, $product)
    {
    }
}
/**
 * API for working with the subscription schemes of subscription-enabled product objects.
 *
 * @class    WCS_ATT_Product_Schemes
 * @version  4.0.1
 */
class WCS_ATT_Product_Schemes
{
    /*
    |--------------------------------------------------------------------------
    | Conditionals
    |--------------------------------------------------------------------------
    */
    /**
     * Determines if the product can be purchased on a recurring basis.
     *
     * @param  WC_Product  $product  Product object to check.
     * @param  string      $context  Context/origin of schemes.
     * @return boolean               Result of check.
     */
    public static function has_subscription_schemes($product, $context = 'any')
    {
    }
    /**
     * Determines if the product is purchasable on a recurring basis only.
     *
     * @param  WC_Product  $product  Product object to check.
     * @return boolean               Result of check.
     */
    public static function has_forced_subscription_scheme($product)
    {
    }
    /**
     * Determines if the product is purchasable on a recurring basis only, and a single plan is available.
     *
     * @since  2.4.0
     *
     * @param  WC_Product  $product  Product object to check.
     * @return boolean               Result of check.
     */
    public static function has_single_forced_subscription_scheme($product)
    {
    }
    /**
     * Determines if the product is currently set to be purchased on a recurring basis.
     *
     * @param  WC_Product  $product  Product object to check.
     * @return boolean               Result of check.
     */
    public static function has_active_subscription_scheme($product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Returns all subscription schemes associated with a product.
     *
     * @param  WC_Product  $product  Product object.
     * @param  string      $context  Context of schemes, based on origin. Values: 'local', 'global'.
     * @return array
     */
    public static function get_subscription_schemes($product, $context = 'any')
    {
    }
    /**
     * Get the active subscription scheme. Note that:
     * When requesting the active scheme 'key', the function returns:
     *
     * - string  if a valid subscription scheme is activated on the object (subscription state defined);
     * - false   if the product is set to be sold in a non-recurring manner (subscription state defined); or
     * - null    if no scheme is set on the object (susbcription state undefined).
     *
     * When requesting the active scheme, the function returns:
     *
     * - A WCS_ATT_Scheme instance  if a valid subscription scheme is activated on the object;
     * - false                      if the product is set to be sold in a non-recurring manner; or
     * - null                       otherwise.
     *
     * Optionally pass a specific key to get the associated scheme, if valid.
     *
     * Note that the return value is always validated against 'get_subscription_schemes' and 'has_forced_subscription'.
     *
     * @param  WC_Product                        $product     Product object.
     * @param  string                            $return      What to return - 'object' or 'key'. Optional.
     * @param  string                            $scheme_key  Optional key to get a specific scheme.
     * @return string|null|false|WCS_ATT_Scheme               Subscription scheme activated on object.
     */
    public static function get_subscription_scheme($product, $return = 'key', $scheme_key = '')
    {
    }
    /**
     * Get the default subscription scheme (key).
     *
     * @param  WC_Product                        $product  Product object.
     * @param  string                            $return   What to return - 'object' or 'key'. Optional.
     * @return string|null|false|WCS_ATT_Scheme            Default subscription scheme.
     */
    public static function get_default_subscription_scheme($product, $return = 'key')
    {
    }
    /**
     * Returns the "base" subscription scheme by finding the one with the lowest recurring price.
     * If prices are equal, no interval-based comparison is carried out:
     * Reason: In some applications "$5 every week for 2 weeks" (=$10) might be seen as "cheaper" than "$5 every month for 3 months" (=$15), and in some the opposite.
     * Instead of making guesswork and complex calculations, we can let scheme order be used to define the "base" scheme manually.
     *
     * @param  WC_Product  $product
     * @return string
     */
    public static function get_base_subscription_scheme($product)
    {
    }
    /**
     * Get the posted product subscription scheme from the single-product page.
     *
     * @since  2.1.0
     *
     * @param  mixed  $product_id
     * @return string
     */
    public static function get_posted_subscription_scheme($product_id = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */
    /**
     * Associates subscription schemes with a product.
     * Normally, you wouldn't need to use this since 'WCS_ATT_Product::get_subscription_schemes' will automagically fetch all product-level schemes.
     * Can be used to append or otherwise modify schemes -- e.g. it is used by 'WCS_ATT_Cart::apply_subscription_schemes' to conditionally attach cart-level schemes on session load.
     *
     * @param  WC_Product  $product  Product object.
     * @param  array       $schemes  Schemes.
     * @return void
     */
    public static function set_subscription_schemes($product, $schemes)
    {
    }
    /**
     * Set the active subscription scheme. Key value should be:
     *
     * - string  to activate a subscription scheme (valid key required);
     * - false   to indicate that the product is sold in a non-recurring manner; or
     * - null    to indicate that the susbcription state of the product is undefined.
     *
     * Note that the scheme set on the object may become invalid if 'set_subscription_schemes' or 'set_forced_subscription_scheme' are modified.
     *
     * @param  WC_Product  $product  Product object.
     * @param  string      $key      Identifier of subscription scheme to activate on object.
     * @return boolean               Action result.
     */
    public static function set_subscription_scheme($product, $key)
    {
    }
    /**
     * Set the product as purchasable on a recurring basis only.
     *
     * @param  WC_Product  $product                 Product object to set.
     * @param  boolean     $is_forced_subscription  Value.
     */
    public static function set_forced_subscription_scheme($product, $is_forced_subscription)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */
    /**
     * Indicates whether the product price is modified by one or more subscription schemes.
     *
     * @param  array   $subscription_schemes
     * @param  string  $pricing_mode
     * @return boolean
     */
    public static function price_filter_exists($subscription_schemes, $pricing_mode = 'any')
    {
    }
    /**
     * Parses a string-formatted subscription scheme key.
     *
     * @since  3.1.2
     *
     * @param  string  $key
     * @return false|string
     */
    public static function parse_subscription_scheme_key($key)
    {
    }
    /**
     * Stringifies a subscription scheme key.
     *
     * @since  3.1.2
     *
     * @param  string|false  $key
     * @return string
     */
    public static function stringify_subscription_scheme_key($key)
    {
    }
    /**
     * Filter schemes by context.
     *
     * @param  array   $schemes
     * @param  string  $context
     * @return array
     */
    private static function filter_by_context($schemes, $context)
    {
    }
}
/**
 * API for working with the prices of subscription-enabled product objects.
 *
 * @class    WCS_ATT_Product_Prices
 * @version  3.2.1
 */
class WCS_ATT_Product_Prices
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Add price filters.
     *
     * @return void
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Returns a string representing the details of the active subscription scheme.
     *
     * @param  WC_Product  $product  Product object.
     * @param  array       $include  An associative array of flags to indicate how to calculate the price and what to include - @see 'WC_Subscriptions_Product::get_price_string'.
     * @param  array       $args     Optional args to pass into 'WC_Subscriptions_Product::get_price_string'. Use 'scheme_key' to optionally define a scheme key to use.
     * @return string
     */
    public static function get_price_string($product, $args = array())
    {
    }
    /**
     * Returns the price html associated with the active subscription scheme.
     * You may optionally pass a scheme key to get the price html string associated with it.
     *
     * @param  WC_Product  $product     Product object.
     * @param  integer     $scheme_key  Scheme key or the currently active one, if undefined. Optional.
     * @param  array       $args        Optional args to pass into 'WC_Subscriptions_Product::get_price_string'.
     * @return string
     */
    public static function get_price_html($product, $scheme_key = '', $args = array())
    {
    }
    /**
     * Base subscription scheme price html args.
     *
     * @since  3.0.0
     *
     * @param  array       $args
     * @param  WC_Product  $product
     * @return array
     */
    protected static function get_base_subscription_scheme_price_html_args($args, $product)
    {
    }
    /**
     * Unfiltered alias of 'WC_Product::get_price_html'.
     *
     * @param  WC_Product  $product  Product object.
     * @return string
     */
    public static function get_price_html_unfiltered($product)
    {
    }
    /**
     * Returns the recurring vanilla/regular/sale price.
     *
     * @param  WC_Product  $product     Product object.
     * @param  string      $scheme_key  Optional key to get the price of a specific scheme.
     * @param  string      $context     Function call context.
     * @param  string      $price_type  Price to get. Values: '', 'regular', or 'sale'.
     * @return mixed                    The price charged charged per subscription period.
     */
    protected static function get_product_price($product, $scheme_key = '', $context = 'view', $price_type = '')
    {
    }
    /**
     * Returns the recurring price.
     *
     * @param  WC_Product  $product     Product object.
     * @param  string      $scheme_key  Optional key to get the price of a specific scheme.
     * @param  string      $context     Function call context.
     * @return mixed                    The price charged per subscription period.
     */
    public static function get_price($product, $scheme_key = '', $context = 'view')
    {
    }
    /**
     * Returns the recurring regular price.
     *
     * @param  WC_Product  $product     Product object.
     * @param  string      $scheme_key  Optional key to get the regular price of a specific scheme.
     * @param  string      $context     Function call context.
     * @return mixed                    The regular price charged per subscription period.
     */
    public static function get_regular_price($product, $scheme_key = '', $context = 'view')
    {
    }
    /**
     * Returns the recurring sale price.
     *
     * @param  WC_Product  $product     Product object.
     * @param  string      $scheme_key  Optional key to get the price of a specific scheme.
     * @param  string      $context     Function call context.
     * @return mixed                    The sale price charged per subscription period.
     */
    public static function get_sale_price($product, $scheme_key = '', $context = 'view')
    {
    }
    /**
     * Generated formatted discount string. Used in dropdowns.
     *
     * @since  3.0.0
     *
     * @return string|false
     */
    public static function get_formatted_discount($product, $scheme)
    {
    }
    /**
     * Precision for discounts displayed in price strings.
     *
     * @since  3.0.0
     *
     * @return int
     */
    public static function get_formatted_discount_precision()
    {
    }
    /**
     * Format prices without html content. Used in dropdowns.
     *
     * @since  3.0.0
     *
     * @param  mixed  $price
     * @param  array  $args
     * @return string
     */
    public static function get_formatted_price($price)
    {
    }
    /**
     * Callback used to remove subscription sync details from price strings.
     *
     * @since  3.0.0
     *
     * @param  string  $value
     * @return string
     */
    public static function remove_synced_subscription_details($value)
    {
    }
}
/**
 * Compatibility with AfterPay.
 *
 * @class    WCS_ATT_Integration_AfterPay
 * @version  3.3.2
 */
class WCS_ATT_Integration_AfterPay
{
    /**
     * Hook used in the single product page to display AfterPay buttons -- default = woocommerce_single_product_summary.
     * @var string
     */
    private static $single_product_page_hook = '';
    /**
     * Priority of the hook stored in $single_product_page_hook -- default = 15.
     * @var int
     */
    private static $single_product_page_hook_priority = 15;
    /**
     * Hook used in the category page to display AfterPay buttons -- default = 'woocommerce_after_shop_loop_item_title'.
     * @var string
     */
    private static $category_page_hook = '';
    /**
     * Priority of the hook stored in $category_page_hook -- default = 99.
     * @var int
     */
    private static $category_page_hook_priority = 99;
    /**
     * Instance of the AfterPay Gateway class.
     * @var WC_Gateway_Afterpay
     */
    private static $gateway = '';
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Hooks for AfterPay support.
     */
    private static function add_hooks()
    {
    }
    /**
     * Hide AfterPay buttons in the single product page for products with Subscription plans.
     */
    public static function single_product_page_handler()
    {
    }
    /**
     * Hide AfterPay buttons in category pages for products with Subscription plans.
     */
    public static function category_page_handler()
    {
    }
    /**
     * Hide AfterPay buttons in the cart for products with Subscription plans.
     */
    public static function cart_page_handler()
    {
    }
}
/**
 * WooCommerce Payments Integration.
 *
 * @version  3.2.0
 */
class WCS_ATT_Intgeration_WC_Payments
{
    // Hide quick-pay buttons in product pages with Subscription plans.
    public static function init()
    {
    }
    /**
     * Hide quick-pay buttons in product pages with Subscription plans.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_quick_pay_buttons($is_supported, $product)
    {
    }
}
/**
 * Compatibility with Product Bundles and Composite Products.
 *
 * @class    WCS_ATT_Integration_PB_CP
 * @version  4.0.4
 */
class WCS_ATT_Integration_PB_CP
{
    /**
     * Complex product types integrated with SATT.
     * @var array
     */
    private static $bundle_types = array();
    /**
     * Complex type container cart item getter function names.
     * @var array
     */
    private static $container_cart_item_getters = array();
    /**
     * Complex type container order item getter function names.
     * @var array
     */
    private static $container_order_item_getters = array();
    /**
     * Complex type container cart item getter function names.
     * @var array
     */
    private static $child_cart_item_getters = array();
    /**
     * Complex type container order item getter function names.
     * @var array
     */
    private static $child_order_item_getters = array();
    /**
     * Complex type container cart item conditional function names.
     * @var array
     */
    private static $container_cart_item_conditionals = array();
    /**
     * Complex type container order item conditional function names.
     * @var array
     */
    private static $container_order_item_conditionals = array();
    /**
     * Complex type container cart item conditional function names.
     * @var array
     */
    private static $child_cart_item_conditionals = array();
    /**
     * Complex type container order item conditional function names.
     * @var array
     */
    private static $child_order_item_conditionals = array();
    /**
     * Complex type container cart/order item key names.
     *
     * @deprecated  2.1.0
     * @var         array
     */
    public static $container_key_names = array();
    /**
     * Complex type child cart/order item key names.
     *
     * @deprecated  2.1.0
     * @var         array
     */
    public static $child_key_names = array();
    /**
     * Runtime cache.
     *
     * @since  2.4.0
     * @var    array
     */
    private static $cache = array();
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Hooks for PB/CP support.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */
    /**
     * Checks if the passed product is of a supported bundle type. Returns the type if yes, or false if not.
     *
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function is_bundle_type_product($product)
    {
    }
    /**
     * Given a bundle-type child cart item, find and return its container cart item or its cart id when the $return_id arg is true.
     *
     * @param  array    $cart_item
     * @param  array    $cart_contents
     * @param  boolean  $return_id
     * @return mixed
     */
    public static function get_bundle_type_cart_item_container($cart_item, $cart_contents = \false, $return_id = \false)
    {
    }
    /**
     * Given a bundle-type container cart item, find and return its child cart items - or their cart ids when the $return_ids arg is true.
     *
     * @param  array    $cart_item
     * @param  array    $cart_contents
     * @param  boolean  $return_ids
     * @return mixed
     */
    public static function get_bundle_type_cart_items($cart_item, $cart_contents = \false, $return_ids = \false)
    {
    }
    /**
     * True if a cart item appears to be a bundle-type container item.
     *
     * @param  array  $cart_item
     * @return boolean
     */
    public static function is_bundle_type_container_cart_item($cart_item)
    {
    }
    /**
     * True if a cart item is part of a bundle-type product.
     *
     * @param  array  $cart_item
     * @param  array  $cart_contents
     * @return boolean
     */
    public static function is_bundle_type_cart_item($cart_item, $cart_contents = \false)
    {
    }
    /**
     * Given a bundle-type child order item, find and return its container order item or its order item id when the $return_id arg is true.
     *
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @param  boolean   $return_id
     * @return mixed
     */
    public static function get_bundle_type_order_item_container($order_item, $order = \false, $return_id = \false)
    {
    }
    /**
     * Given a bundle-type container order item, find and return its child order items - or their order item ids when the $return_ids arg is true.
     *
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @param  boolean   $return_ids
     * @param  boolean   $deep
     * @return mixed
     */
    public static function get_bundle_type_order_items($order_item, $order = \false, $return_ids = \false, $deep = \false)
    {
    }
    /**
     * True if an order item appears to be a bundle-type container item.
     *
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @return boolean
     */
    public static function is_bundle_type_container_order_item($order_item, $order = \false)
    {
    }
    /**
     * True if an order item is part of a bundle-type product.
     *
     * @param  array     $cart_item
     * @param  WC_Order  $order
     * @return boolean
     */
    public static function is_bundle_type_order_item($order_item, $order = \false)
    {
    }
    /**
     * True if there are sub schemes inherited from a container.
     *
     * @param  array  $cart_item
     * @return boolean
     */
    private static function has_scheme_data($cart_item)
    {
    }
    /**
     * WC_Product_Bundle 'contains_sub' back-compat wrapper.
     *
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    private static function bundle_contains_subscription($bundle)
    {
    }
    /**
     * WC_Product_Bundle and WC_Product_Composite 'is_priced_per_product' back-compat wrapper.
     *
     * @param  WC_Product  $bundle
     * @return boolean
     */
    private static function has_individually_priced_bundled_contents($product)
    {
    }
    /**
     * Set the active bundle scheme on a bundled item.
     *
     * @param  WC_Bundled_Item    $bundled_item
     * @param  WC_Product_Bundle  $bundle
     */
    public static function set_bundled_item_scheme($bundled_item, $bundle)
    {
    }
    /**
     * Calculates bundle container item subtotals.
     *
     * @param  array   $cart_item
     * @param  string  $scheme_key
     * @param  string  $tax
     * @return double
     */
    private static function calculate_container_item_subtotal($cart_item, $scheme_key, $tax = '')
    {
    }
    /**
     * Calculates bundle container item prices.
     *
     * @param  array   $cart_item
     * @param  string  $scheme_key
     * @param  string  $tax
     * @return double
     */
    private static function calculate_container_item_price($cart_item, $scheme_key, $tax = '')
    {
    }
    /**
     * Add bundles to subscriptions using 'WC_PB_Order::add_bundle_to_order'.
     *
     * @param  WC_Subscription  $subscription
     * @param  array            $cart_item
     * @param  WC_Cart          $recurring_cart
     */
    public static function add_bundle_to_order($subscription, $cart_item, $recurring_cart)
    {
    }
    /**
     * Add composites to subscriptions using 'WC_CP_Order::add_composite_to_order'.
     *
     * @param  WC_Subscription  $subscription
     * @param  array            $cart_item
     * @param  WC_Cart          $recurring_cart
     */
    public static function add_composite_to_order($subscription, $cart_item, $recurring_cart)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Application
    |--------------------------------------------------------------------------
    */
    /**
     * Sub schemes attached on a Product Bundle should not work if the bundle contains a non-convertible product, such as a "legacy" subscription.
     *
     * @param  array       $schemes
     * @param  WC_Product  $product
     * @return array
     */
    public static function get_product_bundle_schemes($schemes, $product)
    {
    }
    /**
     * Hide bundled cart item subscription options.
     *
     * @param  boolean  $show
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return boolean
     */
    public static function hide_child_item_options($show, $cart_item, $cart_item_key)
    {
    }
    /**
     * Bundled items inherit the active subscription scheme id of their parent.
     *
     * @param  string  $scheme_key
     * @param  array   $cart_item
     * @param  array   $cart_level_schemes
     * @return string
     */
    public static function set_child_item_subscription_scheme($scheme_key, $cart_item, $cart_level_schemes)
    {
    }
    /**
     * Bundled cart items inherit the subscription schemes of their parent, with some modifications.
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function apply_child_item_subscription_schemes($cart)
    {
    }
    /**
     * Copies product schemes to a child product.
     *
     * @param  WC_Product  $bundled_product
     * @param  WC_Product  $container_product
     */
    private static function set_bundled_product_subscription_schemes($bundled_product, $container_product)
    {
    }
    /**
     * Bundled cart items inherit the subscription schemes of their parent, with some modifications (first add).
     *
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return array
     */
    public static function set_child_item_schemes($cart_item, $cart_item_key)
    {
    }
    /**
     * Pass one-time option price placeholder to JS script.
     *
     * @since  3.0.0
     *
     * @param  array       $data
     * @param  WC_Product  $product
     * @return array
     */
    public static function bundle_one_time_option_data($data, $product)
    {
    }
    /**
     * Pass subscription details placeholder to JS script.
     *
     * @since  3.0.0
     *
     * @param  array           $data
     * @param  WCS_ATT_Scheme  $subscription_scheme
     * @param  WC_Product      $product
     * @return array
     */
    public static function bundle_subscription_option_data($data, $subscription_scheme, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Cart Templates
    |--------------------------------------------------------------------------
    */
    /**
     * Add subscription details next to price of per-item-priced bundle-type container cart items.
     *
     * @param  string  $price
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public static function filter_container_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     * Add subscription details next to subtotal of per-item-priced bundle-type container cart items.
     *
     * @param  string  $subtotal
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public static function filter_container_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Modify bundle container cart item subscription options to include child item prices.
     *
     * @param  array   $options
     * @param  array   $subscription_schemes
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return boolean
     */
    public static function container_item_options($options, $subscription_schemes, $cart_item, $cart_item_key)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Subscriptions View
    |--------------------------------------------------------------------------
    */
    /**
     * Don't count bundle-type child items and hidden bundle-type container/child items.
     *
     * @param  boolean          $can
     * @param  WC_Subscription  $subscription
     * @return boolean
     */
    public static function can_remove_subscription_items($can, $subscription)
    {
    }
    /**
     * Prevent direct removal of child subscription items from 'My Account > Subscriptions'.
     * Does ~nothing~ to prevent removal at an application level, e.g. via a REST API call.
     *
     * @param  boolean          $can
     * @param  WC_Order_Item    $item
     * @param  WC_Subscription  $subscription
     * @return boolean
     */
    public static function can_remove_child_subscription_item($can, $item, $subscription)
    {
    }
    /**
     * Handle parent subscription line item removals under 'My Account > Subscriptions'.
     *
     * @param  WC_Order_Item  $item
     * @param  WC_Order       $subscription
     * @return void
     */
    public static function user_removed_parent_subscription_item($item, $subscription)
    {
    }
    /**
     * Handle parent subscription line item re-additions under 'My Account > Subscriptions'.
     *
     * @param  WC_Order_Item  $item
     * @param  WC_Order       $subscription
     * @return void
     */
    public static function user_readded_parent_subscription_item($item, $subscription)
    {
    }
    /**
     * Add extra 'Allow Switching' options for content switching of Bundles/Composites. See 'WCS_ATT_Admin::allow_switching_options'.
     *
     * @since  3.0.0
     *
     * @param  array  $data
     * @return array
     */
    public static function add_bundle_switching_options($data)
    {
    }
    /**
     * Prevent direct switching of child subscription items from 'My Account > Subscriptions'.
     * Allow content switching for parent items only, which means that a matching scheme must exist.
     *
     * @since  2.4.0
     *
     * @param  boolean          $can
     * @param  WC_Order_Item    $item
     * @param  WC_Subscription  $subscription
     * @return boolean
     */
    public static function can_switch_bundle_type_item($can, $item, $subscription)
    {
    }
    /**
     * Add content switching support to Bundles and Composites.
     *
     * @param  bool        $is_feature_supported
     * @param  WC_Product  $product
     * @param  string      $feature
     * @param  array       $args
     * @return bool
     */
    public static function bundle_supports_switching($is_feature_supported, $product, $feature, $args)
    {
    }
    /**
     * Make WCS see bundles with a switched content as non-identical ones.
     *
     * @since  2.4.0
     *
     * @param  boolean        $is_identical
     * @param  int            $product_id
     * @param  int            $quantity
     * @param  int            $variation_id
     * @param  WC_Order       $subscription
     * @param  WC_Order_Item  $item
     * @return boolean
     */
    public static function bundle_is_identical($is_identical, $product_id, $quantity, $variation_id, $subscription, $item)
    {
    }
    /**
     * Retrieve subscription switch-related parameters of child items from the parent cart item data array.
     *
     * @since  2.4.0
     *
     * @param  array  $bundled_item_cart_data
     * @param  array  $cart_item_data
     * @return array
     */
    public static function bundled_item_switch_cart_data($bundled_item_cart_data, $cart_item_data)
    {
    }
    /**
     * Retrieve subscription switch-related parameters of child items from the parent cart item data array.
     *
     * @since  2.4.0
     *
     * @param  array  $composited_item_cart_data
     * @param  array  $cart_item_data
     * @return array
     */
    public static function composited_item_switch_cart_data($composited_item_cart_data, $cart_item_data)
    {
    }
    /**
     * Restore bundle configuration when switching.
     *
     * @since  2.4.0
     *
     * @param  string           $url
     * @param  int              $item_id
     * @param  WC_Order_Item    $item
     * @param  WC_Subscription  $subscription
     * @return string
     */
    public static function bundle_type_switch_configuration_url($url, $item_id, $item, $subscription)
    {
    }
    /**
     * Changes the order item status of old child items when the new parent is added.
     *
     * @since  2.4.0
     *
     * @param  WC_Order         $order
     * @param  WC_Subscription  $subscription
     * @param  int              $adding_item_id
     * @param  int              $removing_item_id
     * @return void
     */
    public static function remove_switched_subscription_child_items($order, $subscription, $adding_item_id, $removing_item_id)
    {
    }
    /**
     * Disallow plan switching for bundle types. Only content switching permitted!
     *
     * @since  2.4.0
     *
     * @param  boolean     $is_forced
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function force_switched_bundle_type_subscription($is_forced, $product)
    {
    }
    /**
     * Bundle schemes should be limited to the one matching the subscription while the product is being switched.
     * This is the meaning of 'content switching': It's not permitted to apply plan changes, only content changes are allowed.
     *
     * @since  2.4.0
     *
     * @param  array       $schemes
     * @param  WC_Product  $product
     * @return array
     */
    public static function limit_switched_bundle_type_schemes($schemes, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Add to Subscription
    |--------------------------------------------------------------------------
    */
    /**
     * Modify the validation context when adding a bundle-type product to an order.
     *
     * @param  int  $product_id
     */
    public static function set_bundle_type_validation_context($product_id)
    {
    }
    /**
     * Modify the validation context when adding a bundle-type product to an order.
     *
     * @param  int  $product_id
     */
    public static function reset_bundle_type_validation_context($product_id)
    {
    }
    /**
     * Sets the validation context to 'add-to-order'.
     *
     * @param  WC_Product_Bundle  $bundle
     */
    public static function set_add_to_order_validation_context($product)
    {
    }
    /**
     * Validates bundle-type stock in 'add-to-order' context.
     *
     * @param  boolean  $is_valid
     */
    public static function validate_bundle_type_stock($is_valid, $bundle_id, $stock_manager, $configuration)
    {
    }
    /**
     * Don't attempt to increment the quantity of bundle-type subscription items when adding to an existing subscription.
     * Also omit child items -- they'll be added by their parent.
     *
     * @param  false|WC_Order_Item_Product  $found_order_item
     * @param  array                        $matching_cart_item
     * @param  WC_Cart                      $recurring_cart
     * @param  WC_Subscription              $subscription
     * @param  WC_Order_Item                $order_item
     * @return false|WC_Order_Item_Product
     */
    public static function found_bundle_in_subscription($found_order_item, $matching_cart_item, $recurring_cart, $subscription, $order_item)
    {
    }
    /**
     * Return 'add_bundle_to_order' as a callback for adding bundles to subscriptions.
     * Do not add child items as they'll be added by their parent.
     *
     * @param  array    $callback
     * @param  array    $cart_item
     * @param  WC_Cart  $recurring_cart
     */
    public static function add_bundle_to_subscription_callback($callback, $cart_item, $recurring_cart)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Bundles
    |--------------------------------------------------------------------------
    */
    /**
     * When loading bundled items, always set the active bundle scheme on the bundled objects.
     *
     * @param  array              $bundled_items
     * @param  WC_Product_Bundle  $bundle
     */
    public static function set_bundled_items_scheme($bundled_items, $bundle)
    {
    }
    /**
     * Add scheme data to runtime price cache hashes.
     *
     * @param  array              $hash
     * @param  WC_Product_Bundle  $bundle
     * @return array
     */
    public static function bundle_prices_hash($hash, $bundle)
    {
    }
    /**
     * Remove APFS price filters before retrieving the bundled item Regular Price.
     *
     */
    public static function remove_price_filters()
    {
    }
    /**
     * Re-add APFS price filters after retrieving the bundled item Regular Price.
     *
     */
    public static function add_price_filters()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Composites
    |--------------------------------------------------------------------------
    */
    /**
     * Set the default scheme when one-time purchases are disabled, no scheme is set on the object, and only a single sub scheme exists.
     *
     * @param  WC_Product_Composite  $composite
     */
    public static function set_single_composite_subscription_scheme($composite)
    {
    }
    /**
     * Ensure composites in cached component objects have up-to-date scheme data.
     *
     * @param  string      $scheme_key
     * @param  string      $previous_scheme_key
     * @param  WC_Product  $product
     */
    public static function set_composite_product_scheme($scheme_key, $previous_scheme_key, $product)
    {
    }
    /**
     * Composited products inherit the subscription schemes of their container object.
     *
     * @param  WC_CP_Product         $component_option
     * @param  string                $component_id
     * @param  WC_Product_Composite  $composite
     */
    public static function set_component_option_scheme($component_option, $component_id, $composite)
    {
    }
    /**
     * Adds scheme data to runtime component cache hashes.
     *
     * @param  array                 $hash
     * @param  WC_Product_Composite  $composite
     * @return array
     */
    public static function component_hash($hash, $composite)
    {
    }
    /**
     * Add scheme data to runtime price cache hashes.
     *
     * @param  array                 $hash
     * @param  WC_Product_Composite  $composite
     * @return array
     */
    public static function composite_prices_hash($hash, $composite)
    {
    }
    /**
     * Make sure child order items inherit the subscription plans of their parent.
     *
     * @since  3.1.8
     *
     * @param  WC_Product     $product
     * @param  WC_Order_Item  $order_item
     * @return WC_Product
     */
    public static function restore_bundle_type_product_from_order_item($product, $order_item)
    {
    }
    /**
     * Calculate correct switch type for bundle containers and force crossgrade to disable proration calculations. Remember to cache the initial value.
     *
     * @since 2.4.0
     *
     * @param  string           $switch_type
     * @param  WC_Subscription  $subscription
     * @param  array            $cart_item
     * @return string
     */
    public static function force_bundle_switch_type($switch_type, $subscription, $cart_item)
    {
    }
    /**
     * Restore initial switch type if applicable.
     *
     * @since 2.4.0
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function restore_bundle_switch_type($cart)
    {
    }
}
/**
 * Compatibility with Product Add-Ons.
 *
 * @class    WCS_ATT_Integration_PAO
 * @version  3.1.1
 */
class WCS_ATT_Integration_PAO
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Hooks for PAO support.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */
    /**
     * Whether to apply price discounts after addons have been added to the product price.
     * Important: Does not work with "Override Price" plans.
     *
     * @since  2.4.0
     *
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function discount_addons($product)
    {
    }
    /**
     * Used to tell if a product has (required) addons.
     *
     * @since  2.3.0
     *
     * @param  mixed    $product
     * @param  boolean  $required
     * @return boolean
     */
    public static function has_addons($product, $required = \false)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks - Application
    |--------------------------------------------------------------------------
    */
    /**
     * Add price data to one-time option.
     *
     * @param  array       $data
     * @param  WC_Product  $product
     * @return array
     */
    public static function maybe_add_one_time_option_price_data($data, $product, $parent_product)
    {
    }
    /**
     * Add price data to subscription options.
     *
     * @param  array       $data
     * @param  WC_Product  $product
     * @return array
     */
    public static function maybe_add_subscription_option_price_data($data, $scheme, $product, $parent_product)
    {
    }
    /**
     * Add price data to SATT options.
     *
     * @param  array       $data
     * @param  WC_Product  $product
     * @return array
     */
    public static function maybe_add_option_price_data($data, $scheme_key, $product, $parent_product)
    {
    }
    /**
     * Aggregate add-ons costs and calculate them after APFS has applied discounts.
     *
     * @since  2.4.0
     *
     * @param  array  $cart_item
     * @return array
     */
    public static function backup_addons_price($cart_item)
    {
    }
    /**
     * Replace scheme option price html with discount.
     *
     * @since  2.4.0
     *
     * @param  array            $args
     * @param  WCS_ATT_Scheme   $scheme
     * @param  WC_Product       $product
     * @param  WC_Product|null  $parent_product
     * @return array
     */
    public static function show_option_discount($args, $scheme, $product, $parent_product)
    {
    }
    /**
     * Add data to determine if addons will be discounted.
     *
     * @since  2.4.0
     *
     * @return array
     */
    public static function add_discount_addons_data()
    {
    }
    /**
     * Filter add-on prices when dealing with single-plan forced subscription products.
     *
     * @since  2.4.0
     *
     * @param  string  $price
     * @return array
     */
    public static function filter_addons_price($price)
    {
    }
    /**
     * Use alternative method to render variation options.
     *
     * @since  2.4.1
     *
     * @param  bool                  $modify
     * @param  WC_Product_Variable   $variable_product
     * @return bool
     */
    public static function modify_variation_data_price_html($modify, $variable_product)
    {
    }
}
/**
 * Compatibility with Name Your Price.
 *
 * @class    WCS_ATT_Integration_NYP
 * @version  2.3.1
 */
class WCS_ATT_Integration_NYP
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Hooks for NYP support.
     */
    private static function add_hooks()
    {
    }
    /**
     * Helper function to prevent subscription plan option prices from appearing as empty strings.
     * Prevents NYP from emptying price strings + makes empty price string go through WCS price filters.
     */
    public static function before_subscription_option_get_price_html()
    {
    }
    /**
     * See 'before_subscription_option_get_price_html'.
     */
    public static function after_subscription_option_get_price_html()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Makes empty price string go through WCS price filters.
     *
     * @param  string      $price_html
     * @param  WC_Product  $product
     * @return string
     */
    public static function before_subscription_option_empty_price_html($price_html, $product)
    {
    }
    /**
     * Clear discount data if NYP is enabled.
     *
     * @param  array       $schemes
     * @param  WC_Product  $product
     * @return array
     */
    public static function reset_discount_data($schemes, $product)
    {
    }
    /**
     * Use alternative method to render variation options.
     *
     * @param  bool                  $modify
     * @param  WC_Product_Variable   $variable_product
     * @return bool
     */
    public static function modify_variation_data_price_html($modify, $variable_product)
    {
    }
}
/**
 * Flatsome integration.
 *
 * @version  3.1.18
 */
class WCS_ATT_Integration_FS
{
    public static function init()
    {
    }
    /**
     * Add hooks if the active parent theme is Flatsome.
     */
    public static function maybe_add_hooks()
    {
    }
    /**
     * Initializes bundles in quick view modals.
     *
     * @return array
     */
    public static function add_quickview_integration()
    {
    }
    /**
     * Lower the responsive styling breakpoint for Flatsome.
     *
     * @param  array  $params
     * @return array
     */
    public static function adjust_responsive_breakpoint($params)
    {
    }
    /**
     * Resolve image update mixups in quickview modals.
     *
     * @param  WC_Bundled_Item  $bundled_item
     * @return array
     */
    public static function bundled_product_gallery_classes($bundled_item)
    {
    }
}
/**
 * Square integration.
 *
 * @version  3.1.27
 */
class WCS_ATT_Integration_Square
{
    public static function init()
    {
    }
    /**
     * Hide Square Digital Wallet buttons from product, cart and checkout for products with Subscription plans.
     *
     * @param  array                                      $available_pages
     * @param  WooCommerce\Square\Gateway\Digital_Wallet  $wallet
     * @return array
     */
    public static function hide_square_digital_wallet_buttons($available_pages, $wallet)
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 3.3.2
 */
class WCS_ATT_Integration_Blocks
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
}
/**
 * Stripe Compatibility.
 *
 * @version  3.1.30
 */
class WCS_ATT_Stripe_Compatibility
{
    public static function init()
    {
    }
    /**
     * Hide Stripe Quick-pay buttons for products with Subscription plans.
     *
     * @since 3.1.30
     *
     */
    public static function hide_stripe_quickpay($hide_button, $post)
    {
    }
}
/**
 * Cart support.
 *
 * @class    WCS_ATT_Cart
 * @version  4.0.0
 */
class WCS_ATT_Cart
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Hook-in.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Cart item methods
    |--------------------------------------------------------------------------
    */
    /**
     * Returns all subscription schemes associated with a cart item - @see 'WCS_ATT_Product_Schemes::get_subscription_schemes'.
     *
     * @since  2.0.0
     *
     * @param  array   $cart_item
     * @param  string  $context
     * @return array
     */
    public static function get_subscription_schemes($cart_item, $context = 'any')
    {
    }
    /**
     * Returns the subscription scheme key (to apply) of a cart item, or false if the cart item is a one-time purchase.
     *
     * @since  2.0.0
     *
     * @return string|null|false
     */
    public static function get_subscription_scheme($cart_item)
    {
    }
    /**
     * Get the posted cart-item subscription scheme.
     *
     * @since  2.1.0
     *
     * @param  string  $cart_item_key
     * @return string
     */
    public static function get_posted_subscription_scheme($cart_item_key)
    {
    }
    /**
     * Equivalent of 'WC_Cart::get_product_price' that utilizes 'WCS_ATT_Product_Prices::get_price' instead of 'WC_Product::get_price'.
     *
     * @since  2.0.0
     *
     * @param  WC_Product  $product
     * @param  string      $scheme_key
     * @return string
     */
    public static function get_product_price($cart_item, $scheme_key = '')
    {
    }
    /**
     * Applies a saved subscription key to a cart item.
     * @see 'WCS_ATT_Product_Schemes::set_subscription_scheme'.
     *
     * @since  2.0.0
     *
     * @param  array  $cart_item
     * @return array
     */
    public static function apply_subscription_scheme($cart_item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks
    |--------------------------------------------------------------------------
    */
    /**
     * Add scheme data to cart items that can be purchased on a recurring basis.
     *
     * @param  array  $cart_item
     * @param  int    $product_id
     * @param  int    $variation_id
     * @return array
     */
    public static function add_cart_item_data($cart_item, $product_id, $variation_id)
    {
    }
    /**
     * Load saved session data of cart items that can be pruchased on a recurring basis.
     *
     * @param  array  $cart_item
     * @param  array  $item_session_values
     * @return array
     */
    public static function load_cart_item_data_from_session($cart_item, $item_session_values)
    {
    }
    /**
     * Inspect product-level/cart-level session data and apply subscription schemes to cart items as needed.
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function apply_subscription_schemes($cart)
    {
    }
    /**
     * Gets the subscription scheme to apply against a cart item product object on session load.
     * @see 'WCS_ATT_Cart::apply_subscription_scheme'.
     *
     * @param  array  $cart_item
     * @return string|false
     */
    private static function get_subscription_scheme_to_apply($cart_item)
    {
    }
    /**
     * Inspect product-level/cart-level session data and apply subscription schemes on cart items as needed.
     * Then, recalculate totals.
     *
     * @return void
     */
    public static function apply_subscription_schemes_on_add_to_cart($item_key, $product_id, $quantity, $variation_id, $variation, $item_data)
    {
    }
    /**
     * Update the subscription scheme saved on a cart item when chosing a new option.
     *
     * @param  boolean  $updated
     * @return boolean
     */
    public static function update_cart_item_data($updated)
    {
    }
    /**
     * True if the product corresponding to a cart item is one of the types supported by the plugin.
     *
     * @param  mixed  $arg
     * @return boolean
     */
    public static function is_supported($arg)
    {
    }
    /**
     * Validates the subscription schemes applied on a cart item.
     *
     * @since  3.3.2
     *
     * @return array
     */
    public static function validate_applied_subscription_scheme($cart_item)
    {
    }
    /**
     * Validates the subscription schemes applied on cart items.
     */
    public static function check_applied_subscription_schemes()
    {
    }
    /**
     * Restore selected plan when clicking cart item titles.
     *
     * @since  3.1.14
     *
     * @param  string  $html
     * @param  array   $cart_item
     * @return string
     */
    public static function cart_item_permalink($html, $cart_item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * Returns cart-level subscription schemes, available only if there are no cart-items with product-level subscription schemes.
     * Subscription options defined at product-level and "legacy" subscription-type products "block" the display of cart-level subscription options.
     *
     * Must be called after all cart session data has been loaded.
     *
     * @since 2.0.0
     * @deprecated 4.0.0
     *
     * @param  string|WC_Product  $context  Function call context.
     * @return array|boolean
     */
    public static function get_cart_subscription_schemes($context = 'cart')
    {
    }
    /**
     * Whether cart-level subscription schemes are supported.
     *
     * @since 3.1.19
     * @deprecated 4.0.0
     *
     * @return boolean
     */
    public static function supports_cart_subscription_schemes($context)
    {
    }
    /**
     * Returns the active cart-level subscription scheme id, or false if none is set.
     *
     * @since 2.0.0
     * @deprecated 4.0.0
     *
     * @return string|false|null
     */
    public static function get_cart_subscription_scheme()
    {
    }
    /**
     * Get the posted cart subscription scheme.
     *
     * @since 2.1.0
     * @deprecated 4.0.0
     *
     * @return string
     */
    public static function get_posted_cart_subscription_scheme()
    {
    }
    /**
     * Returns the active cart-level subscription scheme id, or false if none is set.
     *
     * @since 2.0.0
     * @deprecated 4.0.0
     *
     * @param  string|false  $scheme_key
     */
    public static function set_cart_subscription_scheme($scheme_key)
    {
    }
    /**
     * Reset stored cart subscription scheme when the cart is empty.
     *
     * @since 2.1.0
     * @deprecated 4.0.0
     *
     * @return void
     */
    public static function maybe_reset_cart_subscription_scheme()
    {
    }
    /**
     * Ajax handler for saving the subscription scheme chosen at cart-level.
     *
     * @deprecated  2.1.0  Moved to WCS_ATT_Display_Ajax class.
     *
     * @return void
     */
    public static function update_cart_scheme()
    {
    }
    /**
     * Returns modified raw prices based on subscription scheme settings.
     *
     * @deprecated 2.0.0
     *
     * @param  array  $raw_prices
     * @param  array  $subscription_scheme
     * @return string
     */
    public static function convert_to_sub($cart_item)
    {
    }
    /**
     * Returns cart item pricing data based on the active subscription scheme settings of a cart item.
     *
     * @deprecated 2.0.0
     *
     * @return string
     */
    public static function get_active_subscription_scheme_prices($cart_item, $active_subscription_scheme = array())
    {
    }
    /**
     * True if a cart item is allowed to have subscription schemes attached by SATT.
     *
     * @deprecated 2.0.0
     *
     * @param  int|array  $arg
     * @return boolean
     */
    public static function is_convertible_to_sub($arg)
    {
    }
    /**
     * True if a product or cart item is allowed to have subscription schemes attached by SATT.
     *
     * @deprecated 3.1.25
     *
     * @param  int|array  $arg
     * @return boolean
     */
    public static function is_supported_product_type($arg)
    {
    }
}
/**
 * WooCommerce All Products For Subscriptions Tracker.
 *
 * @class    WCS_ATT_Tracker
 * @version  3.4.1
 */
class WCS_ATT_Tracker
{
    /**
     * Initialize the Tracker.
     */
    public static function init()
    {
    }
    /**
     * Adds APFS data to the WC tracked data.
     *
     * @param  array $data
     * @return array
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Gets APFS settings.
     *
     * @return array
     */
    private static function get_settings()
    {
    }
    /**
     * Gets APFS product data.
     *
     * @return array
     */
    private static function get_product_data()
    {
    }
}
/**
 * Subscription scheme object. May extend the WC_Data class or handle CRUD in the future, if schemes are moved out of meta.
 *
 * @class    WCS_ATT_Scheme
 * @version  4.0.2
 */
class WCS_ATT_Scheme implements \ArrayAccess
{
    /**
     * Scheme data.
     * @var array
     */
    private $data = array();
    /**
     * Scheme key - a string representation of the scheme details.
     * @var array
     */
    private $key = '';
    /**
     * Maps meta array key names to object data keys for back-compat.
     * @var array
     */
    private $offset_map = array('subscription_period' => 'period', 'subscription_period_interval' => 'interval', 'subscription_length' => 'length', 'subscription_payment_sync_date' => 'sync_date', 'subscription_trial_period' => 'trial_period', 'subscription_trial_length' => 'trial_length', 'subscription_pricing_method' => 'pricing_mode', 'subscription_discount' => 'discount', 'subscription_regular_price' => 'regular_price', 'subscription_sale_price' => 'sale_price', 'subscription_price' => 'price');
    /**
     * Constructor. Currently only initializes the object from raw data.
     * Later, it could initialize using other source data, such as a DB ID.
     *
     * @param  array  $args
     */
    public function __construct($args)
    {
    }
    /**
     * Updates the 'is_synced' prop.
     *
     * @return void
     */
    protected function update_sync_status()
    {
    }
    /**
     * Returns a string representation of the scheme details.
     *
     * @return string  A string representation of the entire scheme.
     */
    public function get_key()
    {
    }
    /**
     * Returns the raw scheme data array.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Returns a md5 hash of the scheme's data array.
     *
     * @since  2.1.1
     *
     * @return array
     */
    public function get_hash()
    {
    }
    /**
     * Gets the scheme context. Expected values: 'product', 'cart'.
     *
     * @return string
     */
    public function get_context()
    {
    }
    /**
     * Returns the period of the subscription scheme.
     *
     * @return string  A string representation of the period, either Day, Week, Month or Year.
     */
    public function get_period()
    {
    }
    /**
     * Returns the interval of the subscription scheme.
     *
     * @return int  Interval of subscription scheme, or an empty string if the product has not been associated with a subscription scheme.
     */
    public function get_interval()
    {
    }
    /**
     * Returns the length of the subscription scheme.
     *
     * @return int  An integer representing the length of the subscription scheme.
     */
    public function get_length()
    {
    }
    /**
     * Returns the trial period of the subscription scheme.
     *
     * @return string  A string representation of the trial period, either Day, Week, Month or Year.
     */
    public function get_trial_period()
    {
    }
    /**
     * Returns the trial length of the subscription scheme.
     *
     * @return int  An integer representing the trial length of the subscription scheme.
     */
    public function get_trial_length()
    {
    }
    /**
     * Returns the sync day (integer) or sync month/day (array) of this scheme.
     *
     * @since  2.1.0
     *
     * @return mixed
     */
    public function get_sync_date()
    {
    }
    /**
     * Whether the first payment is processed at the time of sign-up but prorated to the sync day.
     *
     * @since  2.1.0
     */
    public function is_prorated()
    {
    }
    /**
     * Whether the first payment needs to be processed on a specific day (instead of at the time of sign-up).
     *
     * @since  2.1.0
     */
    public function is_synced()
    {
    }
    /**
     * Returns the pricing mode of the scheme - 'inherit' or 'override'.
     * Indicates how the subscription scheme modifies the price of a product when active.
     *
     * @return string  String with values 'inherit' or 'override'.
     */
    public function get_pricing_mode()
    {
    }
    /**
     * Returns the price discount applied by the scheme when its pricing mode is 'inherit'.
     *
     * @return mixed
     */
    public function get_discount()
    {
    }
    /**
     * Returns the overridden regular price applied by the scheme when its pricing mode is 'override'.
     *
     * @return mixed
     */
    public function get_regular_price()
    {
    }
    /**
     * Returns the overridden sale price applied by the scheme when its pricing mode is 'override'.
     *
     * @return mixed
     */
    public function get_sale_price()
    {
    }
    /**
     * Returns modified prices based on subscription scheme settings.
     *
     * @param  array  $raw_prices
     * @return string
     */
    public function get_prices($raw_prices)
    {
    }
    /**
     * Get price after discount.
     *
     * @param  array  $raw_prices
     * @param  string $discount
     * @return mixed
     */
    protected function get_discounted_price($raw_prices)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditionals.
    |--------------------------------------------------------------------------
    */
    /**
     * Indicates whether the scheme modifies the price of the product it's attached onto when active.
     *
     * @return boolean
     */
    public function has_price_filter()
    {
    }
    /**
     * Indicates whether the billing details of a subscription match the billing details of this scheme.
     *
     * @since  2.1.0
     *
     * @param  WC_Subscription  $subscription
     * @param  array            $args
     * @return boolean
     */
    public function matches_subscription($subscription, $args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters.
    |--------------------------------------------------------------------------
    */
    /**
     * Sets the scheme context. Expected values: 'product', 'cart'.
     *
     * @param  string  $value
     */
    public function set_context($value)
    {
    }
    /**
     * Sets the period of the subscription scheme. Does not validate input.
     *
     * @param  string  $value
     */
    public function set_period($value)
    {
    }
    /**
     * Sets the interval of the subscription scheme.
     *
     * @param  int  $value
     */
    public function set_interval($value)
    {
    }
    /**
     * Sets the length of the subscription scheme.
     *
     * @param  int  $value
     */
    public function set_length($value)
    {
    }
    /**
     * Sets the trial period of the subscription scheme.
     *
     * @param  string  $value
     */
    public function set_trial_period($value)
    {
    }
    /**
     * Sets the trial length of the subscription scheme.
     *
     * @param  int  $value
     */
    public function set_trial_length($value)
    {
    }
    /**
     * Sets the pricing mode of the scheme - 'inherit' or 'override'.
     * Indicates how the subscription scheme modifies the price of a product when active.
     *
     * @param  string  $value
     */
    public function set_pricing_mode($value)
    {
    }
    /**
     * Sets the price discount applied by the scheme when its pricing mode is 'inherit'.
     *
     * @param  mixed  $value
     */
    public function set_discount($value)
    {
    }
    /**
     * Sets the overridden regular price applied by the scheme when its pricing mode is 'override'.
     *
     * @param  mixed  $value
     */
    public function set_regular_price($value)
    {
    }
    /**
     * Sets the overridden sale price applied by the scheme when its pricing mode is 'override'.
     *
     * @param  mixed  $value
     */
    public function set_sale_price($value)
    {
    }
    /**
     * Sets the sync date.
     *
     * @param  mixed  $value
     */
    public function set_sync_date($value)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Array access methods.
    |--------------------------------------------------------------------------
    */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
}
/**
 * Handles synchronization.
 *
 * @class    WCS_ATT_Sync
 * @version  3.1.2
 */
class WCS_ATT_Sync
{
    /**
     * Initialization.
     */
    public static function init()
    {
    }
    /**
     * Hook-in.
     */
    private static function add_hooks()
    {
    }
    /**
     * Determines if the first payment of a product is prorated, assuming a scheme is set on it.
     *
     * @since  2.1.0
     *
     * @param  WC_Product             $product  Product object to check.
     * @param  string|WCS_ATT_Scheme  $scheme   Optional scheme key when checking against one of the schemes already tied to the object, or an arbitrary 'WCS_ATT_Scheme' object to check against.
     * @return boolean                          Result.
     */
    public static function is_first_payment_prorated($product, $scheme = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks
    |--------------------------------------------------------------------------
    */
    /**
     * Renders subscription scheme synchronization options.
     *
     * @param  int     $index
     * @param  array   $scheme_data
     * @param  int     $post_id
     * @return void
     */
    public static function subscription_scheme_sync_content($index, $scheme_data, $post_id)
    {
    }
    /**
     * Keep it short. Rename "Do not synchronise" to "Disabled". Pointless but blame OCD.
     *
     * @param  array  $range_data
     * @return array
     */
    private static function rename_subscription_billing_period_range_data($range_data)
    {
    }
    /**
     * Save subscription sync options.
     *
     * @param  array  $scheme
     * @return void
     */
    public static function process_scheme_sync_data($scheme_data)
    {
    }
    /**
     * Add translated syncing options for our client side script.
     *
     * @param  array  $script_parameters
     */
    public static function admin_script_parameters($script_parameters)
    {
    }
    /**
     * Set subscription payment sync data on product objects.
     *
     * @param  string      $scheme_key
     * @param  string      $active_scheme_key
     * @param  WC_Product  $product
     */
    public static function set_product_subscription_scheme_sync_date($scheme_key, $active_scheme_key, $product)
    {
    }
}
/**
 * Front-end support and single-product template modifications.
 *
 * @class    WCS_ATT_Display
 * @version  3.4.2
 */
class WCS_ATT_Display
{
    /**
     * Initialization.
     */
    public static function init()
    {
    }
    /**
     * Hook-in.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filters
    |--------------------------------------------------------------------------
    */
    /**
     * Front end styles and scripts.
     *
     * @return void
     */
    public static function frontend_scripts()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * Options for purchasing a product once or creating a subscription from it.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function get_subscription_options_content($product)
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WCS_ATT_Admin_Notices
 * @version  4.0.0
 */
class WCS_ATT_Admin_Notices
{
    /**
     * Notices presisting on the next request.
     * @var array
     */
    public static $meta_box_notices = array();
    /**
     * Notices displayed on the current request.
     * @var array
     */
    public static $admin_notices = array();
    /**
     * Maintenance notices displayed on every request until cleared.
     * @var array
     */
    public static $maintenance_notices = array();
    /**
     * Dismissible notices displayed on the current request.
     * @var array
     */
    public static $dismissed_notices = array();
    /**
     * Array of maintenance notice types - name => callback.
     * @var array
     */
    private static $maintenance_notice_types = array('welcome' => 'welcome_notice', 'v4' => 'v4_notice');
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Add a notice/error.
     *
     * @param  string   $text
     * @param  mixed    $args
     * @param  boolean  $save_notice
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @param  string  $notice_name
     * @return boolean
     */
    public static function is_maintenance_notice_visible($notice_name)
    {
    }
    /**
     * Checks if a dismissible notice has been dismissed in the past.
     *
     * @param  string  $notice_name
     * @return boolean
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save errors to an option.
     */
    public static function save_notices()
    {
    }
    /**
     * Show any stored error messages.
     */
    public static function output_notices()
    {
    }
    /**
     * Show maintenance notices.
     */
    public static function hook_maintenance_notices()
    {
    }
    /**
     * Add a dimissible notice/error.
     *
     * @param  string   $text
     * @param  mixed    $args
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @param  string  $notice_name
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @param  string  $notice_name
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @param  string  $notice_name
     */
    public static function remove_maintenance_notice($notice_name)
    {
    }
    /**
     * Add 'welcome' notice.
     */
    public static function welcome_notice()
    {
    }
    /**
     * Add global plans onboarding notice.
     */
    public static function add_global_plans_onboarding_notice()
    {
    }
    /**
     * Add v4 update notice.
     */
    public static function v4_notice()
    {
    }
    /**
     * Dismisses a notice.
     *
     * @param  string  $notice
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * Admin includes and hooks.
 *
 * @class    WCS_ATT_Admin
 * @version  4.0.3
 */
class WCS_ATT_Admin
{
    /**
     * Bundled selectSW library version.
     *
     * @var string
     */
    private static $bundled_selectsw_version = '1.2.1';
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Add hooks.
     */
    private static function add_hooks()
    {
    }
    /**
     * Admin init.
     */
    public static function admin_init()
    {
    }
    /**
     * Include classes.
     */
    public static function includes()
    {
    }
    /**
     * Register own version of select2 library.
     *
     * @since 5.1.0
     */
    public static function maybe_register_selectsw()
    {
    }
    /**
     * Load own version of select2 library.
     *
     * @since 5.1.0
     */
    public static function maybe_load_selectsw()
    {
    }
    /**
     * Display notice when selectSW library is unsupported.
     *
     * @since 5.1.0
     */
    public static function maybe_display_selectsw_notice()
    {
    }
    /**
     * Whether to load own version of select2 library or not.
     *
     * @since   5.1.0
     *
     * @return  boolean
     */
    private static function load_selectsw()
    {
    }
    /**
     * Include admin classes.
     *
     * @since  2.4.3
     *
     * @param  String  $classes
     * @return String
     */
    public static function include_admin_body_class($classes)
    {
    }
    /**
     * Add extra 'Allow Switching > 'Between Subscription Plans' option.
     * In the past there was no option to turn off this feature.
     *
     * @param  array  $data
     * @return array
     */
    public static function allow_switching_options($data)
    {
    }
    /**
     * Subscriptions schemes admin metaboxes.
     *
     * @param  array  $values
     * @return void
     */
    public static function subscription_schemes_content($values)
    {
    }
    /**
     * Append "Subscribe to Cart/Order" section in the Subscriptions settings tab.
     *
     * @since  2.1.0
     *
     * @param  array  $settings
     * @return array
     */
    public static function add_settings($settings)
    {
    }
    /**
     * Save subscription scheme option from the WooCommerce > Settings > Subscriptions administration screen.
     *
     * @return void
     */
    public static function save_cart_level_settings()
    {
    }
    /**
     * Load scripts and styles.
     *
     * @return void
     */
    public static function admin_scripts()
    {
    }
    /**
     * Support scanning for template overrides in extension.
     *
     * @since 3.1.8
     *
     * @param  array  $paths
     * @return array
     */
    public static function template_scan_path($paths)
    {
    }
    /**
     * Add APFS debug data in the system status.
     *
     * @since 3.1.8
     */
    public static function render_system_status_items()
    {
    }
    /**
     * Determine which of our files have been overridden by the theme.
     *
     * @since  3.1.8
     *
     * @return array
     */
    private static function get_template_overrides()
    {
    }
}
/**
 * WooCommerce core Product Importer support.
 *
 * @class    WCS_ATT_Product_Import
 * @version  4.0.0
 */
class WCS_ATT_Product_Import
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Parse Subscription schemes.
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array                    $parsed_data
     */
    public static function import_subscription_schemes($parsed_data, $importer)
    {
    }
}
/**
 * Admin includes and hooks.
 *
 * @class    WCS_ATT_Admin_Ajax
 * @version  3.2.1
 */
class WCS_ATT_Admin_Ajax
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Add hooks.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Notices.
    |--------------------------------------------------------------------------
    */
    /**
     * Dismisses notices.
     *
     * @since  2.2.0
     *
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Schemes.
    |--------------------------------------------------------------------------
    */
    /**
     * Add subscription schemes via ajax.
     *
     * @return void
     */
    public static function ajax_add_subscription_scheme()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Onboarding.
    |--------------------------------------------------------------------------
    */
    /**
     * Ajax search. Only supported product types are allowed.
     *
     * @return void
     */
    public static function ajax_search_satt_onboarding()
    {
    }
    /**
     * Include only simple products in bundle-sell results.
     *
     * @param  array  $search_results
     * @return array
     */
    public static function filter_ajax_search_results($search_results)
    {
    }
}
/**
 * Product meta-box data for SATT-enabled product types.
 *
 * @class    WCS_ATT_Meta_Box_Product_Data
 * @version  3.4.2
 */
class WCS_ATT_Meta_Box_Product_Data
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Add hooks.
     */
    private static function add_hooks()
    {
    }
    /**
     * Add Subscriptions tab.
     *
     * @param  array  $tabs
     * @return void
     */
    public static function satt_product_data_tab($tabs)
    {
    }
    /**
     * Product writepanel for Subscriptions.
     *
     * @return void
     */
    public static function product_data_panel()
    {
    }
    /**
     * Subscription scheme markup adeed on the 'wcsatt_subscription_scheme' action.
     *
     * @param  int     $index
     * @param  array   $scheme_data
     * @param  int     $post_id
     * @return void
     */
    public static function subscription_scheme($index, $scheme_data, $post_id)
    {
    }
    /**
     * Subscription scheme options displayed on the 'wcsatt_subscription_scheme_content' action.
     *
     * @param  int     $index
     * @param  array   $scheme_data
     * @param  int     $post_id
     * @return void
     */
    public static function subscription_scheme_content($index, $scheme_data, $post_id)
    {
    }
    /**
     * Show product-specific subscription scheme options on the 'wcsatt_subscription_scheme_content' action.
     *
     * @param  int     $index
     * @param  array   $scheme_data
     * @param  int     $post_id
     * @return void
     */
    public static function subscription_scheme_product_content_display($index, $scheme_data, $post_id)
    {
    }
    /**
     * Product-specific subscription scheme options.
     *
     * @param  int     $index
     * @param  array   $scheme_data
     * @param  int     $post_id
     * @return void
     */
    public static function subscription_scheme_product_content($index, $scheme_data, $post_id)
    {
    }
    /**
     * Cart subscription scheme options.
     *
     * @since  2.2.0
     *
     * @param  int     $index
     * @param  array   $scheme_data
     * @return void
     */
    public static function subscription_scheme_global_content($index, $scheme_data)
    {
    }
    /**
     * Save subscription options.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function save_subscription_data($product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * WC 2.X way of saving product data.
     *
     * @deprecated  2.1.0   No longer used internally.
     *
     * @param  int  $post_id
     * @return void
     */
    public static function process_product_meta($post_id)
    {
    }
}
/**
 * WooCommerce core Product Exporter support.
 *
 * @class    WCS_ATT_Product_Export
 * @version  4.0.0
 */
class WCS_ATT_Product_Export
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Export Subscription schemes.
     *
     * @param  mixed         $meta_value
     * @param  WC_Meta_Data  $meta
     * @param  WC_Product    $product
     * @param  array         $row
     * @return string        $meta_value
     */
    public static function export_subscription_schemes($meta_value, $meta, $product, $row)
    {
    }
}
/**
 * Product Bundle Helper Functions.
 *
 * @class    WCS_ATT_Helpers
 * @version  2.3.0
 */
class WCS_ATT_Helpers
{
    /**
     * Runtime cache for simple storage.
     *
     * @var array
     */
    public static $cache = array();
    /**
     * Simple runtime cache getter.
     *
     * @param  string  $key
     * @param  string  $group_key
     * @return mixed
     */
    public static function cache_get($key, $group_key = '')
    {
    }
    /**
     * Simple runtime cache setter.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  string  $group_key
     * @return void
     */
    public static function cache_set($key, $value, $group_key = '')
    {
    }
    /**
     * Simple runtime cache unsetter.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  string  $group_key
     * @return void
     */
    public static function cache_delete($key, $group_key = '')
    {
    }
    /**
     * Simple runtime group cache invalidator.
     *
     * @param  string  $key
     * @param  string  $group_key
     * @param  mixed   $value
     * @return void
     */
    public static function cache_invalidate($group_key)
    {
    }
    /**
     * True when processing a FE request.
     *
     * @return boolean
     */
    public static function is_front_end()
    {
    }
    /**
     * Builds terms tree of a flatten terms array.
     *
     * @since  4.0.0
     *
     * @param  array  $terms
     * @param  int    $parent_id
     * @return array
     */
    public static function build_taxonomy_tree($terms, $parent_id = 0)
    {
    }
    /**
     * Builds a list of options from a terms tree.
     *
     * @since  4.0.0
     *
     * @param  array  $term_tree
     * @param  array  $args
     * @return void
     */
    public static function get_taxonomy_tree_options($term_tree, $args = array())
    {
    }
}
/**
 * Order hooks for saving/restoring the subscription state of a product to/from order item data.
 *
 * @class    WCS_ATT_Order
 * @version  4.0.0
 */
class WCS_ATT_Order
{
    /**
     * Initialization.
     */
    public static function init()
    {
    }
    /**
     * Hook-in.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | API
    |--------------------------------------------------------------------------
    */
    /**
     * Returns the key of the subscription scheme applied on the product when it was purchased.
     *
     * @param  array  $order_item
     * @param  array  $args
     * @return string|false|null
     */
    public static function get_subscription_scheme($order_item, $args = array())
    {
    }
    /**
     * Returns a summary of the products included in an order/subscription.
     *
     * @since 3.4.0
     *
     * @param  WC_Order|int  $order
     * @param  array         $args
     * @return string|array
     */
    public static function get_contents_summary($order, $args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks
    |--------------------------------------------------------------------------
    */
    /**
     * Attempts to restore subscription data when creating a cart item using an order item as reference.
     *
     * @param  array     $cart_item
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @return array
     */
    public static function restore_cart_item_from_order_item($cart_item, $order_item, $order)
    {
    }
    /**
     * Attempts to restore the subscription state of a product instantiated using an order item as reference.
     *
     * @param  WC_Product  $product
     * @param  array       $order_item
     * @return WC_Product
     */
    public static function restore_product_from_order_item($product, $order_item)
    {
    }
    /**
     * Stores the scheme key on the order item when checking out.
     * Used for reconstructing the scheme when reordering, resubscribing, etc - @see 'WCS_ATT_Cart::add_cart_item_data'.
     *
     * @param  WC_Order_Item  $order_item
     * @param  string         $cart_item_key
     * @param  array          $cart_item
     * @return void
     */
    public static function save_subscription_scheme_meta($order_item, $cart_item_key, $cart_item)
    {
    }
    /**
     * Stores the scheme key on the order item (WC < 3.0).
     * @see 'WCS_ATT_Order::save_subscription_scheme_meta'.
     *
     * @param  integer  $item_id
     * @param  array    $cart_item
     */
    public static function save_subscription_scheme_meta_legacy($item_id, $cart_item)
    {
    }
    /**
     * Hides subscription scheme metadata.
     *
     * @since  2.1.0
     *
     * @param  array  $hidden
     * @return array
     */
    public static function hidden_order_item_meta($hidden)
    {
    }
    /**
     * Modify scheme meta key for switching context.
     *
     * @since  2.5.0
     *
     * @param  string  $label
     * @return string
     */
    public static function modify_scheme_attribute_label($label)
    {
    }
}
/**
 * Deprecated subscription scheme prices API.
 *
 * @class    WCS_ATT_Scheme_Prices
 * @version  2.2.0
 */
class WCS_ATT_Scheme_Prices
{
    /**
     * @deprecated
     * @var array
     */
    public static $price_overriding_scheme = \false;
    /**
     * @deprecated
     * @var WC_Product
     */
    public static $price_overridden_product = \false;
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * Add price filters to modify child product prices.
     *
     * @deprecated  2.0.0
     *
     * @param   array  $subscription_scheme
     * @return  void
     */
    public static function add_price_filters($product, $subscription_scheme)
    {
    }
    /**
     * Remove price filters after modifying product prices.
     *
     * @deprecated  2.0.0
     *
     * @return  void
     */
    public static function remove_price_filters()
    {
    }
    /**
     * Returns modified raw prices based on subscription scheme settings.
     *
     * @deprecated  2.0.0
     *
     * @param  array  $raw_prices
     * @param  array  $subscription_scheme
     * @return string
     */
    public static function get_subscription_scheme_prices($raw_prices, $subscription_scheme)
    {
    }
    /**
     * True if any of the subscription schemes overrides the default price.
     *
     * @deprecated  2.0.0
     *
     * @param  array  $subscription_schemes
     * @return boolean
     */
    public static function subscription_price_overrides_exist($subscription_schemes)
    {
    }
    /**
     * True if a subscription scheme modifies the price of the product it's attached onto when active.
     *
     * @deprecated  2.0.0
     *
     * @param  WCS_ATT_Scheme  $subscription_scheme
     * @return boolean
     */
    public static function has_subscription_price_override($subscription_scheme)
    {
    }
    /**
     * Returns lowest price data for a product given the subscription schemes attached to it.
     *
     * @deprecated  2.0.0
     *
     * @param  WC_Product  $product
     * @param  array       $subscription_schemes
     * @return array
     */
    public static function get_lowest_price_subscription_scheme_data($product, $subscription_schemes)
    {
    }
}
/**
 * Deprecated subscription schemes API.
 *
 * @class    WCS_ATT_Schemes
 * @version  2.2.0
 */
class WCS_ATT_Schemes
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    /**
     * Returns a subscription scheme by id (key since v2.0). Deprecated.
     *
     * @deprecated 2.0.0
     *
     * @return array
     */
    public static function get_subscription_scheme_by_id($id, $schemes)
    {
    }
    /**
     * Returns cart-level subscription schemes, available only if there are no cart-items with product-level subscription schemes.
     * Subscription options defined at product-level and "legacy" subscription-type products "block" the display of cart-level subscription options.
     *
     * Must be called after all cart session data has been loaded.
     *
     * @deprecated 2.0.0
     *
     * @return array|boolean
     */
    public static function get_cart_subscription_schemes()
    {
    }
    /**
     * Returns all available subscription schemes (product-level and cart-level).
     *
     * @param  array   $cart_item
     * @param  string  $context
     * @return array
     */
    public static function get_subscription_schemes($cart_item, $context = 'any')
    {
    }
    /**
     * Returns subscription schemes used to render cart-item level options.
     *
     * @deprecated 2.0.0
     *
     * @param  array  $cart_item
     * @return array
     */
    public static function get_cart_item_subscription_schemes($cart_item)
    {
    }
    /**
     * Returns the active cart-level subscription scheme id, or false if none is set.
     *
     * @deprecated 2.0.0
     *
     * @return string
     */
    public static function get_active_cart_subscription_scheme_id()
    {
    }
    /**
     * Returns the active subscription scheme of a cart item, or false if the cart item is a one-off purchase.
     *
     * @deprecated 2.0.0
     *
     * @return string
     */
    public static function get_active_subscription_scheme_id($cart_item)
    {
    }
    /**
     * Returns the active subscription scheme of a cart item, or false if the cart item is a one-off purchase.
     *
     * @deprecated 2.0.0
     *
     * @return array
     */
    public static function get_active_subscription_scheme($cart_item)
    {
    }
    /**
     * Returns the default subscription scheme to set on a cart item.
     *
     * @deprecated  2.0.0
     * @access      private
     *
     * @param  array $cart_item
     * @param  array $cart_level_schemes
     * @return string
     */
    public static function set_subscription_scheme_id($cart_item, $cart_level_schemes)
    {
    }
    /**
     * Returns all available subscription schemes for displaying single-product options (product-level).
     *
     * @deprecated  2.0.0
     *
     * @return array
     */
    public static function get_product_subscription_schemes($product)
    {
    }
}
/**
 * API for working with subscription-enabled product objects.
 *
 * @class    WCS_ATT_Product
 * @version  4.0.0
 */
class WCS_ATT_Product
{
    /**
     * Local runtime meta store for performance.
     * @var array
     */
    private static $runtime_meta = array();
    /**
     * Own implementation of 'spl_object_hash';
     * @var integer
     */
    private static $object_instance_count = 0;
    /**
     * DB meta expected by WCS that needs to be added by SATT at runtime.
     * @var array
     */
    private static $subscription_product_type_meta_keys = array('subscription_price', 'subscription_period', 'subscription_period_interval', 'subscription_length', 'subscription_trial_period', 'subscription_trial_length', 'subscription_sign_up_fee', 'subscription_payment_sync_date', 'wcs_switch_totals_calc_base_length');
    /**
     * Include Product API price and scheme components and add hooks.
     */
    public static function init()
    {
    }
    /**
     * Hook-in.
     */
    private static function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditionals
    |--------------------------------------------------------------------------
    */
    /**
     * Determines if a subscription scheme is set on the product object.
     *
     * @param  WC_Product  $product  Product object to check.
     * @return boolean               Result of check.
     */
    public static function is_subscription($product)
    {
    }
    /**
     * Checks a product object to determine if it is a WCS subscription-type product.
     *
     * @param  WC_Product  $product  Product object to check.
     * @return boolean               Result of check.
     */
    public static function is_subscription_product_type($product)
    {
    }
    /**
     * Query for support of SATT features.
     *
     * @param  WC_Product  $product  Product object to check.
     * @param  string      $feature  Feature.
     * @param  array       $args     Additional arguments.
     * @return boolean               Result.
     */
    public static function supports_feature($product, $feature, $args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filters
    |--------------------------------------------------------------------------
    */
    /**
     * Hooks onto 'woocommerce_is_subscription' to trick WCS into thinking it is dealing with a subscription-type product.
     *
     * @param  boolean     $is
     * @param  int         $product_id
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function filter_is_subscription($is, $product_id, $product)
    {
    }
    /**
     * Make sure One-Time Shipping state is transferred from variations to parent products in the cart.
     *
     * @since  2.2.0
     *
     * @param  boolean  $needs_one_time_shipping
     * @param  mixed    $product
     * @param  mixed    $product
     * @return boolean
     */
    public static function filter_needs_one_time_shipping($needs_one_time_shipping, $product, $variation = \false)
    {
    }
    /**
     * Delete object meta in use by the application layer.
     * Note that the subscription state of a product object:
     *
     * 1. Cannot be persisted in the DB.
     * 2. Is lost when the object is saved.
     *
     * This is intended behavior.
     *
     * @param  WC_Product  $product
     */
    public static function delete_runtime_meta($product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helpers
    |--------------------------------------------------------------------------
    */
    /**
     * Property getter (compatibility wrapper).
     *
     * @param  WC_Product  $product  Product object.
     * @param  string      $key      Runtime meta key name.
     * @return mixed
     */
    public static function get_runtime_meta($product, $key)
    {
    }
    /**
     * Property setter (compatibility wrapper).
     *
     * @param  WC_Product  $product  Product object.
     * @param  string      $key      Runtime meta key name.
     * @param  string      $value    Property value.
     * @return mixed
     */
    public static function set_runtime_meta($product, $key, $value)
    {
    }
    /**
     * Get unique identifier for product instances.
     *
     * @since  2.4.0
     *
     * @param  WC_Product  $product
     * @return string
     */
    public static function get_instance_id($product)
    {
    }
}
/**
 * Handles scheme switching for SATT items.
 *
 * @class    WCS_ATT_Manage_Switch
 * @version  3.2.1
 */
class WCS_ATT_Manage_Switch extends \WCS_ATT_Abstract_Module
{
    /**
     * Runtime switched product cache.
     *
     * @var WC_Product
     */
    private static $switched_product;
    /**
     * Runtime cache.
     *
     * @var bool
     */
    private static $is_switched_product_identical;
    /**
     * Register hooks.
     *
     * @return void
     */
    public function register_core_hooks()
    {
    }
    /**
     * True if switching is in progress.
     *
     * @return boolean
     */
    public static function is_switch_request()
    {
    }
    /**
     * True if a subscribed product scheme/configuration is being switched.
     *
     * @param  WC_Product  $product_switched
     * @return boolean
     */
    public static function is_switch_request_for_product($product_switched)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks
    |--------------------------------------------------------------------------
    */
    /**
     * Allow scheme switching for SATT products with more than 1 subscription scheme or products with switchable content (variations and bundle/composite configurations).
     *
     * @param  boolean     $is_switchable
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function is_product_switchable($is_switchable, $product)
    {
    }
    /**
     * Prevent content switching when plan switching is disabled and a matching scheme can't be found.
     *
     * @since  3.1.17
     *
     * @param  boolean          $can
     * @param  WC_Order_Item    $item
     * @param  WC_Subscription  $subscription
     * @return boolean
     */
    public static function can_switch_item($can, $item, $subscription)
    {
    }
    /**
     * Disable one-time purchases when switching.
     *
     * @param  boolean     $is_forced
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function force_subscription($is_forced, $product)
    {
    }
    /**
     * When switching 'Between Susbcription Plans' is disabled and 'Between Subscription Variations' is enabled, plan switching should not be possible.
     * This is the meaning of 'content switching': It's not permitted to apply plan changes, only content changes are allowed.
     *
     * @since  3.0.0
     *
     * @param  array       $schemes
     * @param  WC_Product  $product
     * @return array
     */
    public static function variable_product_subscription_schemes($schemes, $product)
    {
    }
    /**
     * Allow WCS to recognize any supported product as a subscription when validating a switch: Add filter.
     *
     * @param  boolean  $is_valid
     * @return boolean
     */
    public static function add_is_subscription_filter($is_valid)
    {
    }
    /**
     * Allow WCS to recognize any supported product as a subscription when validating a switch: Remove filter.
     *
     * @param  boolean  $is_valid
     * @return boolean
     */
    public static function remove_is_subscription_filter($is_valid)
    {
    }
    /**
     * Hooks onto 'woocommerce_is_subscription' to trick WCS into thinking it is dealing with a subscription-type product when switching.
     *
     * @param  boolean     $is
     * @param  int         $product_id
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function filter_is_subscription($is, $product_id, $product)
    {
    }
    /**
     * Make WCS see products with a switched scheme as non-identical ones.
     *
     * @param  boolean        $is_identical
     * @param  int            $product_id
     * @param  int            $quantity
     * @param  int            $variation_id
     * @param  WC_Order       $subscription
     * @param  WC_Order_Item  $item
     * @return boolean
     */
    public static function is_identical_product($is_identical, $product_id, $quantity, $variation_id, $subscription, $item)
    {
    }
    /**
     * Checks if the posted subscription plan during a switch is identical with the plan of the item being switched.
     *
     * @since  3.0.0
     *
     * @param  int            $product_id
     * @param  WC_Order_Item  $item
     * @return boolean
     */
    private static function is_posted_subscription_scheme_identical($product_id, $item)
    {
    }
    /**
     * Prevent variation switching when 'Between Subscription Variations' is disabled.
     *
     * @since  3.0.0
     *
     * @param  bool             $is_valid
     * @param  int              $product_id
     * @param  int              $quantity
     * @param  int              $variation_id
     * @param  WC_Subscription  $subscription
     * @param  WC_Order_Item    $item
     * @return boolean
     */
    public static function is_variation_switch_valid($is_valid, $product_id, $quantity, $variation_id, $subscription, $item)
    {
    }
    /**
     * Modify cart item being switched.
     *
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return void
     */
    public static function edit_switched_cart_item($cart_item, $cart_item_key)
    {
    }
}
/**
 * Add stuff to existing subscriptions.
 *
 * @class    WCS_ATT_Manage_Add
 * @version  4.0.0
 */
class WCS_ATT_Manage_Add extends \WCS_ATT_Abstract_Module
{
    /**
     * Include sub-modules.
     */
    protected function register_modules()
    {
    }
    /**
     * Register hooks.
     *
     * @return void
     */
    protected function register_core_hooks()
    {
    }
    /**
     * Get posted data.
     *
     * @param  string  $context
     * @return array
     */
    public static function get_posted_data($context)
    {
    }
    /**
     * Get matching cart scheme, if all cart items share the same scheme. Returns false otherwise.
     *
     * @since  3.4.0
     *
     * @return array|null An array of WCS_ATT_Scheme objects that are common on the cart contents, null for all subscriptions.
     */
    public static function get_schemes_matching_cart()
    {
    }
    /**
     * Gets all active subscriptions of the current user matching a set of schemes.
     *
     * @param  array|null  $schemes
     * @return array
     */
    public static function get_matching_subscriptions($schemes)
    {
    }
    /**
     * Adds a product to a subscription.
     *
     * @param  WC_Subscription  $subscription
     * @param  WC_Product       $product
     * @param  array            $args
     * @return boolean
     */
    public static function add_product_to_subscription($subscription, $product, $args)
    {
    }
    /**
     * Adds the contents of a (recurring) cart to a subscription.
     *
     * @param  WC_Subscription  $subscription
     * @param  boolean          $args
     */
    public static function add_cart_to_subscription($subscription, $args = array())
    {
    }
}
/**
 * Add stuff to existing subscriptions.
 *
 * @class    WCS_ATT_Manage_Add_Cart
 * @version  4.0.4
 */
class WCS_ATT_Manage_Add_Cart extends \WCS_ATT_Abstract_Module
{
    /**
     * Register display hooks.
     *
     * @return void
     */
    protected function register_display_hooks()
    {
    }
    /**
     * Register form hooks.
     */
    protected function register_form_hooks()
    {
    }
    /**
     * Register template hooks.
     */
    private static function register_template_hooks()
    {
    }
    /**
     * Register ajax hooks.
     */
    private static function register_ajax_hooks()
    {
    }
    /**
     * Is adding carts to existing subscriptions supported?
     *
     * @since  3.1.19
     * @return boolean
     */
    public static function is_feature_supported($context = 'cart')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    */
    /**
     * 'Add cart to subscription' view -- template wrapper element.
     */
    public static function options_template()
    {
    }
    /**
     * Displays list of subscriptions matching a cart.
     */
    public static function display_matching_subscriptions()
    {
    }
    /**
     * 'Add to subscription' view -- matching list of subscriptions.
     *
     * @param  array       $subscriptions
     * @param  array|null  $schemes
     * @return void
     */
    public static function matching_subscriptions_template($subscriptions, $schemes)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Ajax Handlers
    |--------------------------------------------------------------------------
    */
    /**
     * Load all user subscriptions matching a cart + scheme key (known billing period and interval).
     *
     * @return void
     */
    public static function load_matching_subscriptions()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Form Handlers
    |--------------------------------------------------------------------------
    */
    /**
     * Adds carts to subscriptions.
     */
    public static function form_handler()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    public static function button_template($subscription)
    {
    }
}
/**
 * Add stuff to existing subscriptions.
 *
 * @class    WCS_ATT_Manage_Add_Product
 * @version  3.2.1
 */
class WCS_ATT_Manage_Add_Product extends \WCS_ATT_Abstract_Module
{
    /**
     * Using this to pass data from 'WC_Form_Handler::add_to_cart_action' into our own logic.
     * @var array
     */
    private static $add_to_subscription_args = array();
    /**
     * Register display hooks.
     *
     * @return void
     */
    protected function register_display_hooks()
    {
    }
    /**
     * Register form hooks.
     */
    protected function register_form_hooks()
    {
    }
    /**
     * Register template hooks.
     */
    private static function register_template_hooks()
    {
    }
    /**
     * Register ajax hooks.
     */
    private static function register_ajax_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    */
    /**
     * 'Add to subscription' view -- wrapper element.
     */
    public static function options_template()
    {
    }
    /**
     * 'Add to subscription' view -- matching list of subscriptions.
     *
     * @param  array                $subscriptions
     * @param  WC_Product           $product
     * @param  WCS_ATT_Scheme|null  $scheme
     * @return void
     */
    public static function matching_subscriptions_template($subscriptions, $product, $scheme)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Ajax Handlers
    |--------------------------------------------------------------------------
    */
    /**
     * Load all user subscriptions matching a product + scheme key (known billing period and interval).
     *
     * @return void
     */
    public static function load_matching_subscriptions()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Form Handlers
    |--------------------------------------------------------------------------
    */
    /**
     * Adds products to subscriptions after validating.
     */
    public static function form_handler()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Form Handling Hooks
    |--------------------------------------------------------------------------
    */
    /**
     * Signals 'form_handler' that validation failed.
     * Data is exchanged via the 'add_product_to_subscription' static prop.
     * Always returns false to ensure nothing gets added to the cart.
     *
     * @param  boolean  $result
     * @param  int      $product_id
     * @param  mixed    $quantity
     * @param  int      $variation_id
     * @param  array    $variation_data
     * @return bool
     */
    public static function add_to_subscription_validation($result, $product_id, $quantity, $variation_id = 0, $variation_data = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated
    |--------------------------------------------------------------------------
    */
    public static function button_template($subscription)
    {
    }
}
/**
 * Handles subscription object management functions, e.g. add, edit/switch, delete.
 *
 * @class    WCS_ATT_Management
 * @version  3.2.0
 */
class WCS_ATT_Management extends \WCS_ATT_Abstract_Module
{
    /**
     * Register modules.
     */
    protected function register_modules()
    {
    }
}
/**
 * Extends the store public API with bundle related data for each bundle parent and child item.
 *
 * @version 3.3.2
 */
class WCS_ATT_Store_API
{
    /**
     * Bootstraps the class and hooks required data.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Validate cart item in Store API context.
     *
     * @throws RouteException
     *
     * @param  WC_Product  $product
     * @param  array       $cart_item
     * @return void
     */
    public static function validate_cart_item($product, $cart_item)
    {
    }
    /**
     * Prevents access to the checkout block if a cart item is misconfigured.
     *
     * @throws RouteException
     *
     * @param  WC_Order  $order
     * @return void
     */
    public static function validate_draft_order($order)
    {
    }
}
/**
 * Returns the main instance of WCS_ATT to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return WCS_ATT
 */
function WCS_ATT()
{
}