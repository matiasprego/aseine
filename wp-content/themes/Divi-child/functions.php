<?php


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products',20 );


remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
?>