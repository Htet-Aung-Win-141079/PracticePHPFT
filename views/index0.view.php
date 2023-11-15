<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>
        <?php
        //L4-php and html
            $name="HAW";
            echo "Hello ".$name."\n";
            //echo "Hello ".$_GET['user'];
            echo "Hello ".htmlspecialchars(request('user'));//with php default function to prevent html code format url injection
            echo $greeting;
       ?>
    </h1>
    
    <ul>
       <?php foreach($names as $key=>$name): ?>
        <li><?= $key."-".$name; ?></li>
        <?php endforeach; ?>
    </ul>
    
    <?php foreach($person1 as $key=>$feature): ?>
        <?= $key."-".$feature.","; ?>
    <?php endforeach; ?>
    <br>
    <?php 
        var_dump($person1);
    ?>
    <br>
    <?php 
        print_r($person1);
    ?>
    <br>
    <li>
    Playing chess
    <?php
    echo $todotask['complete'] ? " is done" : " is not done";
    ?>
    </li>
    <br>
    <?php if($dailyroutine['complete']): ?>
        <strike><?= $dailyroutine['title']; ?></strike>
    <?php else: ?>
        <?= $dailyroutine['title']; ?>
    <?php endif; ?>
    <br>
   
    <?php
    dd($person1);
    ?>

</body>
</html>