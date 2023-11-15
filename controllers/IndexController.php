<?php
use core\App;
//L-19 Refactoring pdo connection and queriebuilders //add requires to bootstrap
// require "database/Connection.php";
// require "database/QueryBuilder.php";

//L-18 Intro to pdo and basic refactoring
try{
    //$pdo=dbConnection();
    // $pdo=Connection::make();

    // $tasks=fetchTable($pdo);
    // $query=new QueryBuilder(Connection::make());
    
    //$tasks=$query->selectAll("tasks");
    //$users=$query->selectAll("users");

    $tasks=App::get("query")->selectAll("tasks");
    $users=App::get("query")->selectAll("users");

}catch(PDOException $e){
    $e->getMessage();
}

//L5-seperation of concern
//require("views/index.view.php");

view('index',[
    "tasks"=>$tasks,
    "users"=>$users
]);

?>