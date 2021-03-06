<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2017/1/20
 * Time: 18:37
 */

namespace Hanson\Vbot\Support;


class System
{

    /**
     * 判断运行服务器是否windows
     *
     * @return bool
     */
    public static function isWin()
    {
        return strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
    }

    public static function getPath()
    {
        return server()->config['tmp'] . '/' . myself()->alias . '/';
    }
}