<?php

namespace FO_Accordions;

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