<?php
use core\App;
//L-20 hide your secret pwd
//$config=require("config.php");

//L-28 First dependency Injection
require("App.php");
App::bind("config",require("config.php"));


require("functions.php");
//$pdo=dbConnection();
require("database/Connection.php");
// $tasks=fetchTable($pdo);
require("database/QueryBuilder.php");
 
//$query="Testing"; 
//$query=new QueryBuilder(Connection::make($config['database']));
App::bind("query",new QueryBuilder(Connection::make(App::get("config")['database'])));
require("Request.php");
require("Router.php");

?>