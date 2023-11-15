<?php
require "controllers/PagesController.php";
//L21-Route System Factory
class Router{
    protected $routess=[
        "GET"=>[

        ],
        "POST"=>[

        ]
    ];
    public static function load($filename){
        $router=new Router;
        require "routes.php";
        return $router;
    }
    public function register($routes){
        $this->routess=$routes;
    }
    public function get($uri,$controller){
        $this->routess['GET'][$uri]=$controller;
    }
    public function post($uri,$controller){
        $this->routess['POST'][$uri]=$controller;
    }
    public function showMyRoutes(){
        var_dump($this->routess);
    }
    public function direct($uri,$method){
        if(!array_key_exists($uri,$this->routess[$method])){
            die("404 page");
        }
        //return $this->routess[$method][$uri];
        //$explosion=explode("@",$this->routess[$method][$uri]);
        $explosion=$this->routess[$method][$uri];
        $this->callAction($explosion[0],$explosion[1]);
    }
    public function callAction($class,$method){
        $Class=new $class;
        $Class->$method();
    }
}
// $router=new Router;
// require "routes.php";
//$router->showMyRoutes();
//dd($_SERVER);
//require $router->direct(trim($_SERVER['REQUEST_URI'],"/"));
Router::load("routes.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);


?>