<?php

/**
 * Theme setup
 */
function fo_setup()
{
}
function wp_password_change_notification()
{
}
/**
 * Add 'city' to query vars
 *
 * @param array $qvars Query vars.
 */
function fo_cityslug_query_vars($qvars)
{
}
/**
 * Add rewrite rule for standalone credit check page
 */
function fo_process_order_form_url()
{
}
/**
 * Register sidebar widget
 */
function fo_widgets_init()
{
}
function fo_enqueue_scripts()
{
}
function fo_disable_emojis_tinymce($plugins)
{
}
function fo_disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
}
/**
 * Adds 'defer' attribute to script elements
 *
 * Script handles listed in $noDefer will not have the defer attribute added
 *
 * @param string $tag    Current script element
 * @param string $handle Registered handle for script
 * @param string $src    Script URL
 *
 * @return string HTML script elemnt with deferred attribute added
 */
function fo_defer_scripts($tag, $handle, $src)
{
}
/**
 * Gets dependency URL from WP_Dependency object
 *
 * @param object $dep \WP_Dependency object
 *
 * @return string URL to dependency
 */
function fo_get_dep_url($dep)
{
}
function wpdocs_hide_email_shortcode($atts, $content = \null)
{
}
function getCollectionsByCityID($cityID, $formType)
{
}
/**
 * Gets array of product_cat objects for FO cities/locations
 *
 * @param  array $args          Arguments for function.
 * @param  bool  $hide_empty    True to hide empty categories.
 * @param  bool  $order_by_name True to order categories by name.
 * @return array                Array of product_cat objects
 * @deprecated
 */
function get_cities($args = array(), $hide_empty = \true, $order_by_name = \true)
{
}
/**
 * Gets array of product_cat objects for FO cities/locations
 *
 * @param  array $args Arguments for function.
 * @return array       Array of product_cat objects
 */
function fo_get_cities($args = array())
{
}
function fo_get_extra_city_config($city)
{
}
function getCityBySlug($city_slug)
{
}
function get_city_by_slug($city_slug)
{
}
function getAddonsByCityID($cityID, $formType)
{
}
function getOrderFormConfig()
{
}
function fo_strip_double_spaces($data)
{
}
// function to create capabilities array
function fo_compile_post_type_capabilities($singular = 'post', $plural = 'posts')
{
}
function fo_filter_fo_from_document_title($title)
{
}
function fo_bootstrap_pagination($args = array())
{
}
function fo_set_custom_facebook_image_size($img_size)
{
}
function fo_change_email_image_url($image, $attachment_id, $size, $icon)
{
}
function fo_redirect_shop_by_pages()
{
}
function fo_woocommerce_image_size_gallery_thumbnail()
{
}
function remove_image_zoom_support()
{
}
function fo_move_add_to_cart_after_summary()
{
}
function fo_add_bootstrap_to_checkout_fields($fields)
{
}
function reorder_woo_address($address_fields)
{
}
function move_addl_info_custom_product_tabs($tabs)
{
}
// used in woocommerce_product_tabs
function fo_product_description_tab()
{
}
function fo_display_product_dimensions($product_id)
{
}
function fo_add_dimensions_to_description()
{
}
function wcc_change_breadcrumb_delimiter($defaults)
{
}
function woo_custom_breadrumb_home_url()
{
}
/**
 * change author on comments/reviews
 */
function custom_comment_author($author, $commentID)
{
}
function not_a_shop_page()
{
}
function fo_add_add_to_cart_button()
{
}
function jk_related_products_args($args)
{
}
function lw_loop_shop_columns($columns)
{
}
function lw_loop_shop_per_page($products)
{
}
function product_thumbnail_in_checkout($product_name, $cart_item, $cart_item_key)
{
}
function fo_add_preferred_contact($fields)
{
}
function fo_add_custom_fields()
{
}
function fo_add_referred_by_field($checkout)
{
}
function fo_checkout_field_update_order_meta($order_id)
{
}
function fo_remove_bed_size_from_housewares_on_orders($item_name)
{
}
function fo_fix_checkout_add_on_names($safe_text, $text)
{
}
function fo_add_housewares_component_description($desc, $composite_component_id, $composite_product_id)
{
}
function fo_filter_cart_item_name($title)
{
}
function fo_filter_composite_component_title($title)
{
}
function custom_the_title($title, $post_id)
{
}
function fo_custom_checkout_field_process()
{
}
function fo_hide_selected_terms($terms, $taxonomies)
{
}
// get root category from product id
function get_root_cat_by_product_id($product_id)
{
}
// gets root cat from product category or product
// XXX: rewrite to check if $object is an object;
function get_root_cat($object)
{
}
function fo_add_city_to_title($title)
{
}
function fo_set_opengraph_image($image)
{
}
function fo_add_location_to_product()
{
}
function fo_product_features_list()
{
}
function fo_add_hr_before_add_to_cart()
{
}
function customize_woocommerce_page_title($page_title)
{
}
function fo_woocommerce_taxonomy_archive_description()
{
}
function get_shop_by_room_cat_id($parentID)
{
}
function get_furniture_packages_cat_id($parentID, $type = '')
{
}
function get_shop_by_item_cat_id($parentID)
{
}
function change_breadcrumb($crumbs)
{
}
function fo_body_classes($classes)
{
}
function fo_comment_author($author = '', $comment_id, $comment)
{
}
function custom_shipping_package_name($name)
{
}
function get_fo_product_cat_type($product_cat)
{
}
// gets fo order type based on order items
function get_fo_order_type($order)
{
}
// gets FO product type based on product ID
function get_fo_product_type($product_id)
{
}
function fo_wc_braintree_credit_card_payment_form_payment_method_title($html, $token, $gateway)
{
}
function fo_wc_braintree_my_payment_methods_table_details_html($html)
{
}
function custom_woocommerce_default_address_fields($fields)
{
}
function fo_add_cpp_description()
{
}
function fo_move_checkout_addons()
{
}
function fo_wc_my_orders_date($order)
{
}
function fo_account_menu_order($menuOrder)
{
}
function fo_woocommerce_after_account_navigation($has_orders)
{
}
function fo_subscriptions_change_statuses($subscription_statuses)
{
}
function rename_order_statuses($statuses)
{
}
function fo_woocommerce_subscription_status_name($status_name, $status)
{
}
function fo_woocommerce_gateway_title($method, $order)
{
}
function fo_change_subscription_product_string($subscription_string, $product)
{
}
function fo_wc_add_my_account_orders_column($columns)
{
}
function woocommerce_clear_cart_url()
{
}
function add_custom_field_to_order_item_meta($item, $cart_item_key, $values, $order)
{
}
function fo_subscriptions_per_page($pre_option, $option, $default)
{
}
function custom_my_account_orders($args)
{
}
function fo_custom_shipping_costs($rates, $package)
{
}
// Add additional account fields.
//
// @see https://iconicwp.com/blog/the-ultimate-guide-to-adding-custom-woocommerce-user-account-fields/
//
// @return array
function fo_get_additional_account_fields()
{
}
// my account
function fo_print_user_frontend_fields()
{
}
// Save registration fields.
//
// @param int $customer_id
//
// @see https://iconicwp.com/blog/the-ultimate-guide-to-adding-custom-woocommerce-user-account-fields/
function fo_save_account_fields($customer_id)
{
}
// edit WC account
// Is this field core user data.
//
// @param $key
//
// @return bool
//
function fo_is_userdata($key)
{
}
// checks if customer account field is visible
//
// @param $field_args
//
// @return bool
function fo_is_field_visible($field_args)
{
}
/**
 * Rename 'cancel' button to 'cancel subscription'.
 *
 * @param array $actions Array of actions for subscription.
 */
function fo_wcs_view_subscription_actions($actions)
{
}
// TODO: filter available subscriptions by city of currently-viewed product and allow on-hold orders to be added to, as well
//add_filter( 'wcsatt_subscriptions_matching_product', 'fo_wcsatt_subscriptions_matching_product' );
function fo_wcsatt_subscriptions_matching_product($matching_subscriptions, $product, $scheme)
{
}
/**
 * Remove colon from fee labels on order view.
 *
 * @param array $total_rows Total number of rows.
 */
function fo_remove_colon_from_checkout_add_on_label($total_rows)
{
}
/**
 * Only allow one subscription package in cart
 *
 * @param string $cart_item_key  Item key for cart item.
 * @param int    $product_id     ID of product being added.
 * @param int    $quantity       Quantity of items being added.
 * @param int    $variation_id   ID of product variant being added.
 * @param object $variation      Product variation being added.
 * @param array  $cart_item_data Additional data for item being added.
 */
function fo_prevent_multiple_packages_in_cart($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
{
}
function fo_split_multiple_quantity_products($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
{
}
function fo_prevent_updating_quantity_on_matching_products_on_add_to_cart($cart_item_data, $product_id)
{
}
function fo_split_multiple_quantity_products_to_separate_cart_items_on_cart_update($cart)
{
}
function fo_filter_item_meta_data($metadata)
{
}
function filter_woocommerce_mail_content($mail_content)
{
}
function fo_modify_payment_method_actions($payment_methods)
{
}
function fo_modify_account_payment_methods_columns($cols)
{
}
function fo_add_custom_meta_display_to_items($item_id, $item, $order, $plain_text)
{
}
function fo_add_sub_info_email($order, $is_admin_email, $plaintext)
{
}
// display subscription progress bar (if applicable)
function subscription_progress_bar($subscription, $subscription_status, $parent_order_status, $is_subscription_list = \false)
{
}
function fo_show_subscription_price_on_dropdown($args, $scheme, $product, $parent_product)
{
}
function fo_catalog_orderby_for_furniture_packages($sort_by)
{
}
function fo_sort_package_subscription_schemes($product)
{
}
function disable_coupon_field_on_checkout($enabled)
{
}
function fo_display_frequently_subscribed_together()
{
}
function fo_display_other_variations()
{
}
function fo_display_fo_product_addons()
{
}
function fo_display_upsells()
{
}
function fo_woocommerce_bundled_item_title($title, $bundled_item)
{
}
function fo_breadcrumbs_primary_category($term)
{
}
function fo_seo_product_description($desc)
{
}
function fo_update_wpseo_schema_webpage($data)
{
}
function fo_remove_products_from_shop_page($q)
{
}
function fo_add_package_info_to_shop_loop_item()
{
}
function fo_hide_internal_products()
{
}
// get furniture package excerpt based on current product name
function get_fo_package_excerpt($type = \null)
{
}
// get base description for furniture packages with current product's city name in place
function get_fo_package_content()
{
}
function fo_change_return_to_shop_text()
{
}
function fo_modify_checkout_add_ons_options_cost($cost, $options, $add_on)
{
}
function fo_format_checkout_add_on_label($add_on_label, $name, $label, $cost)
{
}
function fo_recalculate_cart_add_on_fees($cart)
{
}
function fo_calculate_taxes_with_avatax($args, $order)
{
}
function fo_recalculate_order_add_on_fees($args, $order)
{
}
function fo_display_sold_out_loop_woocommerce()
{
}
function wpse_filter_user_data($data, $update, $id)
{
}
function fo_save_account_details_required_fields($required_fields)
{
}
function fo_change_email_on_aw_admin_emails($value, $name, $process_variables, $workflow_email)
{
}
function fo_intern_delivery_included($html, $method)
{
}
function fo_hide_recurring_tax_in_cart($taxes)
{
}
function fo_trigger_item_removed_hook($line_item, $subscription)
{
}
function fo_filter_cpp_description($checkout_fields)
{
}
function fo_style_reset_password_message($message, $key, $user_login, $user_data)
{
}
function fo_add_subscription_data_to_cart_item($cart_item_data, $product_id, $variation_id)
{
}
function apply_recurring_fees($is_recurring, $fee, $cart)
{
}
function fo_exclude_shop_by_item_products_from_sitemap()
{
}
function fo_exclude_shop_by_item_categories_from_sitemap($terms)
{
}
function btn_link_attrs()
{
}
function fo_checkout_add_on_mime_types($mime_types)
{
}
function fo_cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
{
}
function fo_bundle_options($options)
{
}
function fo_add_customer_account_fields()
{
}
function fo_change_paypal_image($icon, $id)
{
}
function fo_format_cpp_fee($total_rows, $order, $tax_display)
{
}
function fo_hide_cpp_cost_if_declined($cart_totals_fee_html, $fee)
{
}
/**
 * Redirect customer to checkout if adding a package to the cart
 *
 * @param string $url            URL to which we are redirecting.
 * @param object $adding_to_cart Item being added to cart.
 */
function fo_add_to_cart_redirect($url, $adding_to_cart)
{
}
function fo_modify_cart_form_settings($settings)
{
}
function fo_wrap_message($message)
{
}
function fo_disable_shipping_calc_on_cart($show_shipping)
{
}
function fo_add_apartment_name_to_address_fields($fields)
{
}
function fo_add_cart_item_data($cart_item_data, $product_id, $variation_id)
{
}
function fo_add_product_type_to_order_item($item, $cart_item_key, $values, $order)
{
}
function fo_modify_avatax_api_product_line_data($data)
{
}
function fo_modify_avatax_api_fee_line_data($attrs, $fee)
{
}
function fo_add_city_for_ga($order_id)
{
}
function fo_get_cpp_adjustment($adjustment, $state)
{
}
function fo_modify_intern_shipping($rates, $package)
{
}
function fo_can_update_payment_method($subscription_can_be_changed, $subscription)
{
}
function fo_add_city_slug_to_checkout()
{
}
function fo_get_subscription_date_to_display($date_to_display, $date_type, $subscription)
{
}
function fo_format_composite_price_html($price_html, $product)
{
}
function fo_update_equity($order_id)
{
}
function fo_filter_order_item_class($class, $item, $order)
{
}
function fo_hide_meta($hidden_meta)
{
}
function fo_can_items_be_removed($can_remove, $subscription)
{
}
// returns true if order/subscription contains items that earn equity with each paid renewal order
function fo_items_earn_equity($order)
{
}
// returns true if item earns equity with each paid renewal order
function fo_item_earns_equity($item)
{
}
function fo_custom_admin_foot()
{
}
function fo_custom_admin_css()
{
}
function fo_add_custom_billing_fields_to_order_meta_display($order)
{
}
function fo_add_referred_by($order)
{
}
function fo_add_custom_shipping_fields_to_order_meta_display($order)
{
}
function fo_add_custom_order_meta($order)
{
}
function post_remove()
{
}
function fo_add_custom_data_to_admin_item_meta($item_id, $item, $product)
{
}
function fo_subscription_length_to_admin_itemmeta($item_id, $item, $product)
{
}
function fo_add_equity_to_admin_itemmeta($item_id, $item, $product)
{
}
function fo_add_equity_edit_to_admin_itemmeta($item_id, $item, $product)
{
}
function fo_save_equity_data_on_order_save($post_id)
{
}
function fo_save_equity_data_on_item_save($item)
{
}
function fo_manage_edit_shop_order_columns($columns)
{
}
function fo_manage_shop_order_posts_custom_column($column)
{
}
function fo_manage_edit_shop_subscription_columns($columns)
{
}
function fo_manage_shop_subscription_posts_custom_column($column)
{
}
function change_woocommerce_email_title($email_title, $email)
{
}
function woocommerce_process_shop_order($order_id)
{
}
// set priority = 20 to make hiding wc-pending work
function fo_change_statuses_order($wc_statuses)
{
}
function fo_add_msrp_to_products()
{
}
function fo_save_msrp($product_id)
{
}
function remove_default_post_type_menu_bar($wp_admin_bar)
{
}
//add_action( 'admin_init', 'fo_setup_shop_manager_role_caps' );
function fo_setup_shop_manager_role_caps()
{
}
function fo_remove_site_health_dashboard_widget()
{
}
function fo_remove_menu_pages()
{
}
function fo_sync_city_meta_on_product_save($product_id)
{
}
function fo_remove_linked_products($tabs)
{
}
function fo_admin_user_remove_social($contactmethods)
{
}
function fo_modify_composite_data($component_data)
{
}
function fo_filter_subscription_bulk_actions($bulk_actions)
{
}
function fo_custom_dropdown_bulk_actions_shop_order($actions)
{
}
function fo_subscriptions_change_statuses_admin($subscription_statuses)
{
}
function shop_order_modified_views($views)
{
}
function is_new_post_page()
{
}
function fo_extends_can_be_updated($can_be_updated, $new_status, $subscription)
{
}
function fo_extends_update_status($subscription, $new_status, $old_status)
{
}
function fo_can_subscription_be_updated_to_active($can_be_updated, $subscription)
{
}
function fo_can_subscription_be_updated_to_expired($can_be_updated, $subscription)
{
}
function fo_can_subscription_be_updated_to_fo_paused($can_be_updated, $subscription)
{
}
function fo_add_subscription_meta_data_to_item($item_id, $item, $order_id)
{
}
function add_subscription_meta_to_backend_subscription($post_id, $post, $update)
{
}
function fo_ac_column_value($value, $id, \AC\Column $column)
{
}
function fo_ac_export_value($value, \AC\Column $column, $id)
{
}
function fo_hide_unneded_order_actions($actions)
{
}
function fo_prevent_status_error($args)
{
}
function fo_update_subscription_dates_on_initial_order_complete($order_id)
{
}
function fo_add_subscription_date_to_view($order)
{
}
function fo_filter_add_product_to_order($products)
{
}
function fo_filter_new_order_item($item_id, $item, $order_id)
{
}
function fo_remove_download_permissions()
{
}
function fo_disable_admin_filters($filters)
{
}
// Remove download and virtual product types from the admin products table filters.
function fo_disable_product_type_filters()
{
}
function fo_disable_trash_action()
{
}
function fo_add_core_update_notices()
{
}
function fo_filter_admin_order_item_class($class, $item, $order)
{
}
function fo_update_dates_when_reactivating_sub($subscription_id, $status_from, $status_to, $subscription)
{
}