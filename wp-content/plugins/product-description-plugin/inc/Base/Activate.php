<?php
/**
 * Created by PhpStorm.
 * User: vishakha
 * Date: 10/1/19
 * Time: 4:16 PM
 */

namespace Inc\Base;

class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}