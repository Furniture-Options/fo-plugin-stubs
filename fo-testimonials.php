<?php

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