<?php
//CH2L3-namespace
namespace core;
//L-28 First dependency injection
class App{
    protected static $datas=[];
    public static function bind($key,$value){
        //self or static ::
        self::$datas[$key]=$value;
    }
    public static function get($key){
        return static::$datas[$key];
    }
}

?>