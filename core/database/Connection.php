<?php

class Connection{
    public static function make($config){
        $pdo=new PDO("mysql:host={$config['host']};dbname={$config['dbName']}","{$config['username']}","{$config['password']}");
        return $pdo;
    }
}


?>