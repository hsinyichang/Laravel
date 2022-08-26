<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Fruit{
    public $name;
    public $color;

    function drop(){
        echo "$this->name dropdown";
    }
}

$appleObj=new Fruit;
$appleObj->name='apple';
$appleObj->color='pink';
$appleObj->drop();
?>    
</body>
</html>

