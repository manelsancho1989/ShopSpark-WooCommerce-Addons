<?php

namespace ShopSpark\Woo;

class Setup {

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'assets']);

        // aquí luego añadimos hooks WooCommerce
    }

    public function assets()
    {
        wp_enqueue_style(
            'shopspark-woo',
            plugin_dir_url(__DIR__) . '../assets/woo.css',
            [],
            '1.0'
        );
    }
}