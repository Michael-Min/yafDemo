<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 2017/4/16
 * Time: 下午2:44
 */

namespace Tool;

class Http{
    public static function getHost(){
        return $_SERVER['HTTP_HOST'].'local';
    }
}