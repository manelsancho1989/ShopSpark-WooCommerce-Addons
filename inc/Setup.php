<?php

namespace ShopSpark\Woo;

class Setup
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'assets']);

        // aquí luego añadimos hooks WooCommerce
    }

    public function assets()
    {
        wp_enqueue_style(
            'shopspark-woo',
            SHOPSPARK_WOO_URL . 'assets/dist/style.css',
            [],
            '1.0'
        );
    }
}
