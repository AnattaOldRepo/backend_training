<?php
/**
 * Plugin Name: Product Description
 * Description: custom plugin dev
 * Author: Laxmi Barpete
 */

defined('ABSPATH') or die('Sorry you can not access this file directly');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}


function product_description_activate()
{
    Inc\Base\Activate::activate();

}

register_activation_hook(__FILE__, 'product_description_activate');

function product_description_deactivate()
{
    Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'product_description_deactivate');

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}

