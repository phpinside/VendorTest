<?php
/**
 * Created by PhpStorm.
 * User: Cral
 * Date: 2016/11/15 0015
 * Time: 上午 6:56
 */

namespace Cral\Dig\Http;


class Task
{
    public static function Run($words)
    {
        return 'Task run ,' . $words;
    }
}