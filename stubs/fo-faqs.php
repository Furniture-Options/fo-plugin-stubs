<?php

namespace FO_FAQs;

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