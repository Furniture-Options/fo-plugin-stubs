<?php

namespace FO_AC_Custom_Columns\Settings;

/**
 * @since 3.0
 */
class FO_Location extends \AC\Settings\Column implements \AC\Settings\FormatValue
{
    /**
     * @var string
     */
    private $display_format;
    protected function set_name()
    {
    }
    protected function define_options()
    {
    }
    public function create_view()
    {
    }
    protected function get_display_options()
    {
    }
    public function format($value, $original_value)
    {
    }
    /**
     * @return string
     */
    public function get_display_format_label()
    {
    }
    /**
     * @return string
     */
    public function get_display_format()
    {
    }
    /**
     * @param string $display_format
     */
    public function set_display_format($display_format)
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Free;

class FO_Location extends \AC\Column
{
    public function __construct()
    {
    }
    protected function register_settings()
    {
    }
    public function get_raw_value($id)
    {
    }
    public function get_display_format()
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Pro;

class FO_Location extends \FO_AC_Custom_Columns\Column\Free\FO_Location implements \ACP\Sorting\Sortable, \ACP\Filtering\Filterable, \ACP\Export\Exportable, \ACP\Search\Searchable
{
    public function editing()
    {
    }
    public function filtering()
    {
    }
    public function sorting()
    {
    }
    public function export()
    {
    }
    // Smart Filtering (internally named: Search)
    public function search()
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Free;

class FO_Order_Number extends \AC\Column
{
    public function __construct()
    {
    }
    protected function register_settings()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Pro;

class FO_Order_Number extends \FO_AC_Custom_Columns\Column\Free\FO_Order_Number implements \ACP\Sorting\Sortable, \ACP\Export\Exportable, \ACP\Search\Searchable
{
    public function editing()
    {
    }
    public function sorting()
    {
    }
    public function export()
    {
    }
    // Smart Filtering (internally named: Search)
    public function search()
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Free;

class Sage_ContractNo extends \AC\Column
{
    public function __construct()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Pro;

class Sage_ContractNo extends \FO_AC_Custom_Columns\Column\Free\Sage_ContractNo implements \ACP\Sorting\Sortable, \ACP\Search\Searchable
{
    public function editing()
    {
    }
    public function sorting()
    {
    }
    public function export()
    {
    }
    // Smart Filtering (internally named: Search)
    public function search()
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Free;

class FO_SubscriptionLength extends \AC\Column
{
    public function __construct()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Pro;

class FO_SubscriptionLength extends \FO_AC_Custom_Columns\Column\Free\FO_SubscriptionLength implements \ACP\Sorting\Sortable, \ACP\Search\Searchable
{
    public function editing()
    {
    }
    public function sorting()
    {
    }
    public function export()
    {
    }
    // Smart Filtering (internally named: Search)
    public function search()
    {
    }
}
namespace FO_AC_Custom_Columns\Column\Free;

class FO_OtherFees extends \AC\Column
{
    public function __construct()
    {
    }
    protected function register_settings()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
class FO_TripFee extends \AC\Column
{
    public function __construct()
    {
    }
    protected function register_settings()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
class Sage_ARDivisionNo extends \AC\Column
{
    public function __construct()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
class FO_HousewaresSetupService extends \AC\Column
{
    public function __construct()
    {
    }
    protected function register_settings()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
class Sage_DocumentType extends \AC\Column
{
    public function __construct()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
class Sage_ContractType extends \AC\Column
{
    public function __construct()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
class Sage_OrderStatus extends \AC\Column
{
    public function __construct()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
class FO_CPP extends \AC\Column
{
    public function __construct()
    {
    }
    protected function register_settings()
    {
    }
    /**
     * Returns the display value for the column.
     *
     * @param int $id ID
     *
     * @return string Value
     */
    public function get_value($id)
    {
    }
    public function get_raw_value($id)
    {
    }
}
namespace FO_AC_Custom_Columns\Sorting;

/**
 * Sorting class. Adds sorting functionality to the column.
 */
class FO_Location extends \ACP\Sorting\Model
{
}
/**
 * Sorting class. Adds sorting functionality to the column.
 */
class FO_Order_Number extends \ACP\Sorting\Model
{
}
/**
 * Sorting class. Adds sorting functionality to the column.
 */
class Sage_ContractNo extends \ACP\Sorting\Model
{
    /**
     * (Optional) Put all the sorting logic here. You can remove this function if you want to sort by raw value only.
     *
     * @return array
     */
    public function get_sorting_vars()
    {
    }
}
/**
 * Sorting class. Adds sorting functionality to the column.
 */
class FO_SubscriptionLength extends \ACP\Sorting\Model
{
}
namespace FO_AC_Custom_Columns\Export;

/**
 * Export class. Adds export functionality to the column.
 */
class FO_Location extends \ACP\Export\Model
{
    public function get_value($id)
    {
    }
}
/**
 * Export class. Adds export functionality to the column.
 */
class FO_Order_Number extends \ACP\Export\Model
{
    public function get_value($id)
    {
    }
}
namespace FO_AC_Custom_Columns\Filtering;

class FO_Location extends \ACP\Filtering\Model
{
    public function get_filtering_data()
    {
    }
    public function get_filtering_vars($vars)
    {
    }
}
class FO_Location_SageCode extends \FO_AC_Custom_Columns\Filtering\FO_Location
{
    public function get_filtering_data()
    {
    }
    public function get_filtering_vars($vars)
    {
    }
}
class FO_Location_Slug extends \FO_AC_Custom_Columns\Filtering\FO_Location
{
    public function get_filtering_data()
    {
    }
    public function get_filtering_vars($vars)
    {
    }
}
namespace FO_AC_Custom_Columns\SmartFiltering;

class FO_Location extends \ACP\Search\Comparison
{
    public function __construct()
    {
    }
    protected function create_query_bindings($operator, \ACP\Search\Value $value)
    {
    }
}
class FO_Location_SageCode extends \ACP\Search\Comparison
{
    public function __construct()
    {
    }
    protected function create_query_bindings($operator, \ACP\Search\Value $value)
    {
    }
}
class FO_Order_Number extends \ACP\Search\Comparison
{
    public function __construct()
    {
    }
    protected function create_query_bindings($operator, \ACP\Search\Value $value)
    {
    }
}
class Sage_ContractNo extends \ACP\Search\Comparison
{
    public function __construct()
    {
    }
    protected function create_query_bindings($operator, \ACP\Search\Value $value)
    {
    }
}
class FO_Location_Slug extends \ACP\Search\Comparison
{
    public function __construct()
    {
    }
    protected function create_query_bindings($operator, \ACP\Search\Value $value)
    {
    }
}