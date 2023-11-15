<?php

class Request{
    public static function uri(){
        //dd(parse_url(trim($_SERVER['REQUEST_URI'],"/"),PHP_URL_PATH)); it returns "","about","contact"
        return parse_url(trim($_SERVER['REQUEST_URI'],"/"),PHP_URL_PATH);
        //dd(trim($_SERVER['REQUEST_URI'],"/"));
    }

}


?>

