<?php

namespace FO_Testimonials;

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