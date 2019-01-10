<?php
/**
 * Created by PhpStorm.
 * User: vishakha
 * Date: 10/1/19
 * Time: 7:32 PM
 */

namespace Inc\Base;

use Inc\Base\BaseController;

class SettingLinks extends BaseController
{

    public function register()
    {
        add_filter("plugin_action_links_$this->plugin", array($this, 'setting_links'));
    }

    public function setting_links($links)
    {
        $setting_links = '<a href="admin.php?page=product-description-plugin"> Setting</a>';
        array_push($links, $setting_links);
        return $links;
    }
}