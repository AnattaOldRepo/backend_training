<?php
/**
 * Created by PhpStorm.
 * User: vishakha
 * Date: 10/1/19
 * Time: 4:16 PM
 */


namespace Inc\Base;

class Deactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}