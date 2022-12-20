<?php

namespace FO_WP_Allow_SVG;

/**
 * The plugin loader class.
 *
 * @since 2.0.0
 */
class Loader
{
    /** @var FO_WP_Allow_SVG\Loader single instance of this class */
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
    // get single instance of FO_WP_Allow_SVG\Loader
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
    // add CSS fix for SVG
    // XXX: is this still used?
    public function fix_svg()
    {
    }
    // allow svg mime type for uploading
    public function allow_svg_mime_upload($mimes)
    {
    }
    // adds SVG to allowed filetype/ext list
    public function allow_svg_filetype_and_ext($data, $file, $filename, $mimes)
    {
    }
}