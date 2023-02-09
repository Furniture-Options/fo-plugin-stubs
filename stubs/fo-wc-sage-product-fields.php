<?php

namespace FO_WC_Sage_Product_Fields;

/**
 * The plugin loader class.
 *
 * @since 2.0.0
 */
class Loader
{
    /** @var FO_WC_Sage_Product_Fields\Loader single instance of this class */
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
    // get single instance of FO_WC_Sage_Product_Fields\Loader
    public static function instance()
    {
    }
}
class Cron
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
}
class Plugin
{
    // The single instance of the class.
    protected static $_instance = null;
    // plugin name
    protected const NAME = 'Sage Product Fields';
    // plugin version
    protected const VERSION = '1.0.0';
    // prefix for plugin
    protected const PREFIX = 'fo_sage_pf_';
    // changelog for UpdateNotices
    protected static $changelog = array('1.0.0' => array('Added: Sage Item Codes can be set on products', 'Added: Sage Item Codes for furniture packages are automatically generated'));
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
    // getter function for PREFIX
    public static function get_prefix()
    {
    }
    public static function get_bedroom_size_code($order_item)
    {
    }
    // gets sage item code from order item
    public static function get_sage_item_code($order_item)
    {
    }
}
class Admin
{
    // The single instance of the class.
    protected static $_instance = null;
    // plugin notice message
    protected static $notice = null;
    // list of custom category fields
    protected static $category_fields = array();
    // list of custom parent category fields
    protected static $parent_cat_fields = array('_fo_abbr' => array('name' => 'FO Location Abbreviation', 'short_name' => 'Location Abbr.', 'placeholder' => 'e.g.: ICT', 'desc' => 'This field only applies to top-level categories (a.k.a. cities / locations)'));
    // list of custom product fields
    protected static $product_fields = array('_sage_item_code' => array(
        'name' => 'Sage Item Code',
        // name used for field on product
        'short_name' => 'Sage Code',
        // optional short name
        'placeholder' => '',
        // optional placeholder for field on product
        'sanitizer' => 'sanitize_text_field',
    ));
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
    // add custom Sage fields to WooCommerce category
    public function add_category_fields()
    {
    }
    // output individual product category field
    private static function output_category_field($field_id, $field, $value = '')
    {
    }
    // add custom Sage fields to WooCommerce product
    public function add_product_fields()
    {
    }
    // save custom category fields when saving product category
    public function save_category_fields($cat_id)
    {
    }
    // save individual category field
    private static function save_category_field($field_id, $cat_id)
    {
    }
    // save custom Sage product fields when saving product
    public function save_product_fields($product_id)
    {
    }
    // show product fields on orders
    public function show_order_item_meta($item_id, $item, $product)
    {
    }
    // display notice from this plugin
    public static function notice($msg, $type = 'info')
    {
    }
    // shortcut for displaying error notices
    public static function error($msg)
    {
    }
    // shortcut for displaying success notices
    public static function success($msg)
    {
    }
}
class WC_Store_Exporter_Deluxe
{
    // The single instance of the class.
    protected static $_instance = null;
    protected static $exports_subdir = 'exports';
    protected static $action = 'fo_download';
    protected static $other_order_fields = array('Sage ContractType', 'Sage DocumentType', 'Sage OrderStatus', 'Sage ARDivisionNo', 'Sage ShipToCode', 'Sage TermsCode', 'Sage TaxSchedule', 'Sage SalespersonDivisionNo', 'Sage SalespersonNo', 'Sage ProfileCode', 'Sage ShipDate', 'Sage RequiredDueInDate', 'Sage RentEndDate', 'Sage PickupDate', 'Sage LineKey', 'Sage BillingLineType', 'Sage LineStatus', 'Sage ExplodedKitItem', 'Sage SalesKitLineKey', 'Sage LineShipDate', 'Sage RentEndDate2', 'Sage ShipVia', 'Sage CustomerPONo', 'Sage ConfirmTo', 'Sage UnitPrice', 'Sage WarehouseCode', 'FO Paid Date');
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
    /**
     * Fix args for WP_Query used by the export.
     *
     * @param array $args  Query args
     */
    public function filter_subscriptions_query_args($args)
    {
    }
    // add custom sage fields to order item / subscription item field list
    public function add_order_item_fields($fields)
    {
    }
    // add custom sage field data to order item / subscription item object
    public function add_order_item_data($order_item, $order_id)
    {
    }
    // add custom sage field data to individual order export line
    public function add_order_item_fields_to_individual_export_line($order, $order_item = null)
    {
    }
    // filter individual order item lines being output by export
    public function filter_individual_order_item_export($output, $order, $order_item)
    {
    }
    public function add_subscription_data($subscription, $subscription_id)
    {
    }
    // add to order data
    public function add_order_data($order, $order_id)
    {
    }
    // add css
    public function add_css()
    {
    }
    // hide order actions from non-admins
    public function filter_order_actions($actions)
    {
    }
    // modify time format for file exports
    public function modify_export_filename_time_format($time)
    {
    }
    // filter out CSV files from WordPress media
    public function filter_csv_files_from_media($where)
    {
    }
    // add ability to download export files while keeping them protected by WP's user authentication
    public function handle_download()
    {
    }
    // adds hook to upload_dir to change export directory
    public function add_upload_dir_hook($tag_time)
    {
    }
    // sets upload directory for exports
    public function set_upload_dir_for_exports($args)
    {
    }
    public function add_filter_to_admin($post_id)
    {
    }
    public function save_export_filter_options($post_id = '')
    {
    }
    public function init_exports_dir()
    {
    }
    public function extend_cron_dataset_args($args, $export_type = '', $is_scheduled = 0)
    {
    }
}
class Countries
{
    // The single instance of the class.
    protected static $_instance = null;
    protected static $countries = array(
        'AF' => 'AFG',
        //Afghanistan
        'AX' => 'ALA',
        //&#197;land Islands
        'AL' => 'ALB',
        //Albania
        'DZ' => 'DZA',
        //Algeria
        'AS' => 'ASM',
        //American Samoa
        'AD' => 'AND',
        //Andorra
        'AO' => 'AGO',
        //Angola
        'AI' => 'AIA',
        //Anguilla
        'AQ' => 'ATA',
        //Antarctica
        'AG' => 'ATG',
        //Antigua and Barbuda
        'AR' => 'ARG',
        //Argentina
        'AM' => 'ARM',
        //Armenia
        'AW' => 'ABW',
        //Aruba
        'AU' => 'AUS',
        //Australia
        'AT' => 'AUT',
        //Austria
        'AZ' => 'AZE',
        //Azerbaijan
        'BS' => 'BHS',
        //Bahamas
        'BH' => 'BHR',
        //Bahrain
        'BD' => 'BGD',
        //Bangladesh
        'BB' => 'BRB',
        //Barbados
        'BY' => 'BLR',
        //Belarus
        'BE' => 'BEL',
        //Belgium
        'BZ' => 'BLZ',
        //Belize
        'BJ' => 'BEN',
        //Benin
        'BM' => 'BMU',
        //Bermuda
        'BT' => 'BTN',
        //Bhutan
        'BO' => 'BOL',
        //Bolivia
        'BQ' => 'BES',
        //Bonaire, Saint Estatius and Saba
        'BA' => 'BIH',
        //Bosnia and Herzegovina
        'BW' => 'BWA',
        //Botswana
        'BV' => 'BVT',
        //Bouvet Islands
        'BR' => 'BRA',
        //Brazil
        'IO' => 'IOT',
        //British Indian Ocean Territory
        'BN' => 'BRN',
        //Brunei
        'BG' => 'BGR',
        //Bulgaria
        'BF' => 'BFA',
        //Burkina Faso
        'BI' => 'BDI',
        //Burundi
        'KH' => 'KHM',
        //Cambodia
        'CM' => 'CMR',
        //Cameroon
        'CA' => 'CAN',
        //Canada
        'CV' => 'CPV',
        //Cape Verde
        'KY' => 'CYM',
        //Cayman Islands
        'CF' => 'CAF',
        //Central African Republic
        'TD' => 'TCD',
        //Chad
        'CL' => 'CHL',
        //Chile
        'CN' => 'CHN',
        //China
        'CX' => 'CXR',
        //Christmas Island
        'CC' => 'CCK',
        //Cocos (Keeling) Islands
        'CO' => 'COL',
        //Colombia
        'KM' => 'COM',
        //Comoros
        'CG' => 'COG',
        //Congo
        'CD' => 'COD',
        //Congo, Democratic Republic of the
        'CK' => 'COK',
        //Cook Islands
        'CR' => 'CRI',
        //Costa Rica
        'CI' => 'CIV',
        //Côte d\'Ivoire
        'HR' => 'HRV',
        //Croatia
        'CU' => 'CUB',
        //Cuba
        'CW' => 'CUW',
        //Curaçao
        'CY' => 'CYP',
        //Cyprus
        'CZ' => 'CZE',
        //Czech Republic
        'DK' => 'DNK',
        //Denmark
        'DJ' => 'DJI',
        //Djibouti
        'DM' => 'DMA',
        //Dominica
        'DO' => 'DOM',
        //Dominican Republic
        'EC' => 'ECU',
        //Ecuador
        'EG' => 'EGY',
        //Egypt
        'SV' => 'SLV',
        //El Salvador
        'GQ' => 'GNQ',
        //Equatorial Guinea
        'ER' => 'ERI',
        //Eritrea
        'EE' => 'EST',
        //Estonia
        'ET' => 'ETH',
        //Ethiopia
        'FK' => 'FLK',
        //Falkland Islands
        'FO' => 'FRO',
        //Faroe Islands
        'FJ' => 'FIJ',
        //Fiji
        'FI' => 'FIN',
        //Finland
        'FR' => 'FRA',
        //France
        'GF' => 'GUF',
        //French Guiana
        'PF' => 'PYF',
        //French Polynesia
        'TF' => 'ATF',
        //French Southern Territories
        'GA' => 'GAB',
        //Gabon
        'GM' => 'GMB',
        //Gambia
        'GE' => 'GEO',
        //Georgia
        'DE' => 'DEU',
        //Germany
        'GH' => 'GHA',
        //Ghana
        'GI' => 'GIB',
        //Gibraltar
        'GR' => 'GRC',
        //Greece
        'GL' => 'GRL',
        //Greenland
        'GD' => 'GRD',
        //Grenada
        'GP' => 'GLP',
        //Guadeloupe
        'GU' => 'GUM',
        //Guam
        'GT' => 'GTM',
        //Guatemala
        'GG' => 'GGY',
        //Guernsey
        'GN' => 'GIN',
        //Guinea
        'GW' => 'GNB',
        //Guinea-Bissau
        'GY' => 'GUY',
        //Guyana
        'HT' => 'HTI',
        //Haiti
        'HM' => 'HMD',
        //Heard Island and McDonald Islands
        'VA' => 'VAT',
        //Holy See (Vatican City State)
        'HN' => 'HND',
        //Honduras
        'HK' => 'HKG',
        //Hong Kong
        'HU' => 'HUN',
        //Hungary
        'IS' => 'ISL',
        //Iceland
        'IN' => 'IND',
        //India
        'ID' => 'IDN',
        //Indonesia
        'IR' => 'IRN',
        //Iran
        'IQ' => 'IRQ',
        //Iraq
        'IE' => 'IRL',
        //Republic of Ireland
        'IM' => 'IMN',
        //Isle of Man
        'IL' => 'ISR',
        //Israel
        'IT' => 'ITA',
        //Italy
        'JM' => 'JAM',
        //Jamaica
        'JP' => 'JPN',
        //Japan
        'JE' => 'JEY',
        //Jersey
        'JO' => 'JOR',
        //Jordan
        'KZ' => 'KAZ',
        //Kazakhstan
        'KE' => 'KEN',
        //Kenya
        'KI' => 'KIR',
        //Kiribati
        'KP' => 'PRK',
        //Korea, Democratic People\'s Republic of
        'KR' => 'KOR',
        //Korea, Republic of (South)
        'KW' => 'KWT',
        //Kuwait
        'KG' => 'KGZ',
        //Kyrgyzstan
        'LA' => 'LAO',
        //Laos
        'LV' => 'LVA',
        //Latvia
        'LB' => 'LBN',
        //Lebanon
        'LS' => 'LSO',
        //Lesotho
        'LR' => 'LBR',
        //Liberia
        'LY' => 'LBY',
        //Libya
        'LI' => 'LIE',
        //Liechtenstein
        'LT' => 'LTU',
        //Lithuania
        'LU' => 'LUX',
        //Luxembourg
        'MO' => 'MAC',
        //Macao S.A.R., China
        'MK' => 'MKD',
        //Macedonia
        'MG' => 'MDG',
        //Madagascar
        'MW' => 'MWI',
        //Malawi
        'MY' => 'MYS',
        //Malaysia
        'MV' => 'MDV',
        //Maldives
        'ML' => 'MLI',
        //Mali
        'MT' => 'MLT',
        //Malta
        'MH' => 'MHL',
        //Marshall Islands
        'MQ' => 'MTQ',
        //Martinique
        'MR' => 'MRT',
        //Mauritania
        'MU' => 'MUS',
        //Mauritius
        'YT' => 'MYT',
        //Mayotte
        'MX' => 'MEX',
        //Mexico
        'FM' => 'FSM',
        //Micronesia
        'MD' => 'MDA',
        //Moldova
        'MC' => 'MCO',
        //Monaco
        'MN' => 'MNG',
        //Mongolia
        'ME' => 'MNE',
        //Montenegro
        'MS' => 'MSR',
        //Montserrat
        'MA' => 'MAR',
        //Morocco
        'MZ' => 'MOZ',
        //Mozambique
        'MM' => 'MMR',
        //Myanmar
        'NA' => 'NAM',
        //Namibia
        'NR' => 'NRU',
        //Nauru
        'NP' => 'NPL',
        //Nepal
        'NL' => 'NLD',
        //Netherlands
        'AN' => 'ANT',
        //Netherlands Antilles
        'NC' => 'NCL',
        //New Caledonia
        'NZ' => 'NZL',
        //New Zealand
        'NI' => 'NIC',
        //Nicaragua
        'NE' => 'NER',
        //Niger
        'NG' => 'NGA',
        //Nigeria
        'NU' => 'NIU',
        //Niue
        'NF' => 'NFK',
        //Norfolk Island
        'MP' => 'MNP',
        //Northern Mariana Islands
        'NO' => 'NOR',
        //Norway
        'OM' => 'OMN',
        //Oman
        'PK' => 'PAK',
        //Pakistan
        'PW' => 'PLW',
        //Palau
        'PS' => 'PSE',
        //Palestinian Territory
        'PA' => 'PAN',
        //Panama
        'PG' => 'PNG',
        //Papua New Guinea
        'PY' => 'PRY',
        //Paraguay
        'PE' => 'PER',
        //Peru
        'PH' => 'PHL',
        //Philippines
        'PN' => 'PCN',
        //Pitcairn
        'PL' => 'POL',
        //Poland
        'PT' => 'PRT',
        //Portugal
        'PR' => 'PRI',
        //Puerto Rico
        'QA' => 'QAT',
        //Qatar
        'RE' => 'REU',
        //Reunion
        'RO' => 'ROU',
        //Romania
        'RU' => 'RUS',
        //Russia
        'RW' => 'RWA',
        //Rwanda
        'BL' => 'BLM',
        //Saint Barth&eacute;lemy
        'SH' => 'SHN',
        //Saint Helena
        'KN' => 'KNA',
        //Saint Kitts and Nevis
        'LC' => 'LCA',
        //Saint Lucia
        'MF' => 'MAF',
        //Saint Martin (French part)
        'SX' => 'SXM',
        //Sint Maarten / Saint Matin (Dutch part)
        'PM' => 'SPM',
        //Saint Pierre and Miquelon
        'VC' => 'VCT',
        //Saint Vincent and the Grenadines
        'WS' => 'WSM',
        //Samoa
        'SM' => 'SMR',
        //San Marino
        'ST' => 'STP',
        //S&atilde;o Tom&eacute; and Pr&iacute;ncipe
        'SA' => 'SAU',
        //Saudi Arabia
        'SN' => 'SEN',
        //Senegal
        'RS' => 'SRB',
        //Serbia
        'SC' => 'SYC',
        //Seychelles
        'SL' => 'SLE',
        //Sierra Leone
        'SG' => 'SGP',
        //Singapore
        'SK' => 'SVK',
        //Slovakia
        'SI' => 'SVN',
        //Slovenia
        'SB' => 'SLB',
        //Solomon Islands
        'SO' => 'SOM',
        //Somalia
        'ZA' => 'ZAF',
        //South Africa
        'GS' => 'SGS',
        //South Georgia/Sandwich Islands
        'SS' => 'SSD',
        //South Sudan
        'ES' => 'ESP',
        //Spain
        'LK' => 'LKA',
        //Sri Lanka
        'SD' => 'SDN',
        //Sudan
        'SR' => 'SUR',
        //Suriname
        'SJ' => 'SJM',
        //Svalbard and Jan Mayen
        'SZ' => 'SWZ',
        //Swaziland
        'SE' => 'SWE',
        //Sweden
        'CH' => 'CHE',
        //Switzerland
        'SY' => 'SYR',
        //Syria
        'TW' => 'TWN',
        //Taiwan
        'TJ' => 'TJK',
        //Tajikistan
        'TZ' => 'TZA',
        //Tanzania
        'TH' => 'THA',
        //Thailand
        'TL' => 'TLS',
        //Timor-Leste
        'TG' => 'TGO',
        //Togo
        'TK' => 'TKL',
        //Tokelau
        'TO' => 'TON',
        //Tonga
        'TT' => 'TTO',
        //Trinidad and Tobago
        'TN' => 'TUN',
        //Tunisia
        'TR' => 'TUR',
        //Turkey
        'TM' => 'TKM',
        //Turkmenistan
        'TC' => 'TCA',
        //Turks and Caicos Islands
        'TV' => 'TUV',
        //Tuvalu
        'UG' => 'UGA',
        //Uganda
        'UA' => 'UKR',
        //Ukraine
        'AE' => 'ARE',
        //United Arab Emirates
        'GB' => 'GBR',
        //United Kingdom
        'US' => 'USA',
        //United States
        'UM' => 'UMI',
        //United States Minor Outlying Islands
        'UY' => 'URY',
        //Uruguay
        'UZ' => 'UZB',
        //Uzbekistan
        'VU' => 'VUT',
        //Vanuatu
        'VE' => 'VEN',
        //Venezuela
        'VN' => 'VNM',
        //Vietnam
        'VG' => 'VGB',
        //Virgin Islands, British
        'VI' => 'VIR',
        //Virgin Island, U.S.
        'WF' => 'WLF',
        //Wallis and Futuna
        'EH' => 'ESH',
        //Western Sahara
        'YE' => 'YEM',
        //Yemen
        'ZM' => 'ZMB',
        //Zambia
        'ZW' => 'ZWE',
    );
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
    // Converts the WooCommerce country codes to 3-letter ISO codes
    public static function convert_country_code($country)
    {
    }
}