<?php
namespace controllers;
use core\App;
//L29-Change our controller system like laravel 7
class PagesController{
    public function home(){
// try{
    $tasks=App::get("query")->selectAll("tasks");
    $users=App::get("query")->selectAll("users");
// }catch(PDOException $e){
//     $e->getMessage();
// }
view('index',[
    "tasks"=>$tasks,
    "users"=>$users
]);
    }
    public function about(){
        view("about");

    }
    public function contact(){
        view("contact");
    }
    public function createUser(){
        App::get('query')->insert([
            'name'=>request('inputname'),
        ],"users");
        //Ch2L1- redirect function
        redirect("/");
    }
}

?>