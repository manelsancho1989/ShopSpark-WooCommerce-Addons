<?php
/**
 * Plugin Name: ShopSpark WooCommerce Addons
 * Description: Custom WooCommerce features for ShopSpark theme
 * Version: 1.0.0
 * Author: ShopSpark
 */

if (!defined('ABSPATH')) exit;

// Autoload simple
spl_autoload_register(function ($class) {

    $prefix = 'ShopSpark\\Woo\\';
    $base_dir = __DIR__ . '/inc/';

    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Init plugin
add_action('plugins_loaded', function () {
    new \ShopSpark\Woo\Setup();
});