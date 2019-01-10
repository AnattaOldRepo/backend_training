<?php
/**
 * Created by PhpStorm.
 * User: vishakha
 * Date: 10/1/19
 * Time: 6:37 PM
 */

namespace Inc\Pages;


use Inc\Base\BaseController;

class Admin extends BaseController
{

    function register()
    {
        add_action('admin_menu', array($this, 'add_admin_page'));
    }

    function add_admin_page()
    {
        add_menu_page('Product Description', 'Product Description Plugin', 'manage_options', 'product-description-plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    }

    function admin_index()
    {
        require_once $this->plugin_path . '/templates/admin.php';
    }
}