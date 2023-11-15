<?php
//L21-Route System Factory
//  $router->register([
//     ""=>"controllers/IndexController.php",
//     "about"=>"controllers/AboutController.php",
//     "contact"=>"controllers/ContactController.php"
//  ]);

 //L24-Improve our route system with server request method(get and post)
// $router->get("","controllers/IndexController.php");
// $router->get("about","controllers/AboutController.php");
// $router->get("contact","controllers/ContactController.php");
// $router->post("names","controllers/AddnameController.php");

//L29-Change our controller system like laravel 7
// $router->get("","PagesController@home");
// $router->get("about","PagesController@about");
// $router->get("contact","PagesController@contact");
// $router->post("names","PagesController@createUser");

//CH2L4-Change our controller system like laravel 8

use controllers\PagesController;

$router->get("",[PagesController::class,"home"]);
$router->get("about",[PagesController::class,"about"]);
$router->get("contact",[PagesController::class,"contact"]);
$router->post("names",[PagesController::class,"createUser"]);
?>
