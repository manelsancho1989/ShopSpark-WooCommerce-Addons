<?php

/**
 * Plugin Name: ShopSpark WooCommerce Addons
 * Description: Custom WooCommerce features for ShopSpark theme
 * Version: 1.0.0
 * Author: ShopSpark
 */

if (!defined('ABSPATH')) exit;

require_once __DIR__ . '/vendor/autoload.php';

define('SHOPSPARK_WOO_URL', plugin_dir_url(__FILE__));

// Init plugin
add_action('plugins_loaded', function () {
    new \ShopSpark\Woo\Setup();
});
