<?php
/*
Plugin Name: Woo Shipping Tracker
Plugin URI: http://woopro.com
Description:
Author:  WooPro
Version: 1.0.7
Author URI: http://woopro.com
*/


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/**
 * Functions used by plugins
 */
if ( ! class_exists( 'WC_Dependencies' ) )
    require_once 'woo-includes/class-wc-dependencies.php';

/**
 * WC Detection
 */
if ( ! function_exists( 'is_woocommerce_active' ) ) {
    function is_woocommerce_active() {
        return WC_Dependencies::woocommerce_active_check();
    }
}


if ( is_woocommerce_active() ) {

    //current plugin version
    define( 'WOOPRO_SHT_VER', '1.0.7' );

    if( !defined('WOOPRO_SHT_TEXT_DOMAIN') ) {
        // The text domain for strings localization
        define('WOOPRO_SHT_TEXT_DOMAIN', 'woo-shipping-tracker-customer-notifications');
    }

    require_once 'includes/class.common.php';

    if ( defined( 'DOING_AJAX' ) ) {
        require_once 'includes/class.ajax.php';
    } elseif ( is_admin() ) {
        require_once 'includes/class.admin.php';
    }

}