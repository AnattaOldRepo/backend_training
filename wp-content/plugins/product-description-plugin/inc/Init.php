<?php
/**
 * Created by PhpStorm.
 * User: vishakha
 * Date: 10/1/19
 * Time: 6:35 PM
 */

namespace Inc;

use Inc\Base;

final class Init
{

    public static function get_services()
    {
        return array(Pages\Admin::class, Base\Enqueue::class, Base\SettingLinks::class);
    }

    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }

    }

    private static function instantiate($class)
    {
        $service = new $class();
        return $service;
    }
}