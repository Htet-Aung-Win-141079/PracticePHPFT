<?php
use core\App;
//var_dump($_POST['name']);
//L-25 dynamic insert with our query builder insert method
App::get('query')->insert([
    'name'=>$_POST['inputname'],
    //'age'=>20
],"users")

?>