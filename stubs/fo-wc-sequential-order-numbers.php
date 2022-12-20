<?php

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