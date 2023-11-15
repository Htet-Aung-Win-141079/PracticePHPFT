<?php

function getInfo($name,$age){
    echo "\nHello hi ".$name;
    echo "\nYour are $age years old\n";
}
getInfo("HAW",20);

function dd($dataArray){
    echo "<pre>";
    die(var_dump($dataArray));
}
function view($name,$data=[]){
    extract($data);
    return require("views/$name.view.php");
}
function redirect($uri){
    header("Location: $uri");
}
function request($name){
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        return $_POST[$name];
    }
    if($_SERVER["REQUEST_METHOD"]==="GET"){
        return $_GET[$name];
    }
}
// function dbConnection(){
//     $pdo=new PDO("mysql:host=localhost:YOUR_LOCALHOST_PORT;dbname=YOUR_MYSQL_DB_NAME","YOUR_MYSQL_USERNAME","YOUR_MYSQL_PWD");
//     return $pdo;
// }

// function fetchTable($pdo){
//     $stmt=$pdo->prepare("select * from tasks");
//     $stmt->execute();
//     //print_r($stmt->fetchAll(PDO::FETCH_OBJ));

//     return $stmt->fetchAll(PDO::FETCH_OBJ);
    
// }


?>