<?php

namespace ShopSpark\Woo;

class Setup
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'assets']);
        add_filter('woocommerce_show_page_title', '__return_false');
        // aquí luego añadimos hooks WooCommerce
    }

    public function assets()
    {
        wp_enqueue_style(
            'shopspark-woo-css',
            SHOPSPARK_WOO_URL . 'assets/dist/style.css',
            [],
            '1.0'
        );
        wp_enqueue_script(
            'shopspark-woo-js',
            SHOPSPARK_WOO_URL . 'assets/dist/main.js',
            [],
            '1.0',
            true
        );
    }
}
