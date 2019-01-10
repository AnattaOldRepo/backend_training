<?php
/**
 * Created by PhpStorm.
 * User: vishakha
 * Date: 10/1/19
 * Time: 7:21 PM
 */

namespace Inc\Base;

use Inc\Base\BaseController;


class Enqueue extends BaseController
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        wp_enqueue_style('mypluginstyle', $this->plugin_url . 'assets/style.css');
        wp_enqueue_script('myscript', $this->plugin_url . 'assets/main.js');
    }
}