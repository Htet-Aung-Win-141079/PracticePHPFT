<?php
//require "core/bootstrap.php";
require "core/functions.php";

//L2-first echo
echo "Hello Server Side Web Dev Language PHP\n";

//L3-variables
$name="Htet Aung Win";
echo "Hello $name\n";
echo 'Hello $name';
echo "\n";
echo 'Cristiano '.'Ronaldo';

$greeting="\nHello dude\n";

//L6-numeric array
$names=["Jordan","Bryant","James"];

//L7-associative array
$person1=[
    "name"=>"Elon Musk",
    "age"=>52,
    "productPublished"=>true
];
$person1["goodat"]="working";

//L8-boolean and ternary operator
$todotask=[
    "title"=>"playing chess",
    "due"=>"today",
    "complete"=>true
];
//L9-Summary all lessons

//L10-conditions
$dailyroutine=[
    "title"=>"watching movie",
    "complete"=>true
];
//L11-functions //code move to function.php and required
//require("functions.php");
//L12,13,14,15 mysql setup and CRUD in cli and gui

//L16-class basic concept and thinking
class Car{
    public static function startEngine(){
        echo "Car is started engine";
        return new Car; //$this === new Car
    }
    public function drive(){
        echo "\nCar is driving";
        return $this;
    }
    public function whatisThis(){
        return $this; //calling class Car as like object
    }
    public function stop(){
        echo "\nCar is stopping at City mall";
    }
}
$car1=new Car;
$car1->drive();
echo "\n";
var_dump($car1->whatisThis());
Car::startEngine()->drive()->stop();

//L17-Constructor and access modifier
class Bicycle{
    protected $propertyName;
    public function __construct($bName)
    {
        $this->propertyName=$bName;        
    }
    private function ride(){
        echo "\n$this->propertyName bicycle is riding\n";
    }
    public function getRide(){
        $this->ride();
    }
}
$bicycle1=new Bicycle("Trek");
$bicycle1->getRide();


require("views/index0.view.php");
//die();


?>