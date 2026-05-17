<?php

namespace ShopSpark\WooCommerce\Account;

class Auth
{
    public function __construct()
    {
        add_filter('woocommerce_locate_template', [$this, 'load_custom_login_template'], 10, 3);
        add_action('wp', [$this, 'remove_my_account_title']);
    }

    public function remove_my_account_title()
    {
        if (function_exists('is_account_page') && is_account_page()) {

            // QUITAR TITLE DE WOOCOMMERCE WRAPPER
            remove_action(
                'woocommerce_before_main_content',
                'woocommerce_page_title',
                20
            );
        }
    }

    public function load_custom_login_template($template, $template_name, $template_path)
    {
        // ✔ CORRECT WooCommerce template
        if ($template_name === 'myaccount/form-login.php') {

            $plugin_template = plugin_dir_path(__DIR__) . '../templates/account/form-login.php';

            if (file_exists($plugin_template)) {
                return $plugin_template;
            }
        }

        return $template;
    }
}
